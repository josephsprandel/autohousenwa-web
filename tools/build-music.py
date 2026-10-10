#!/usr/bin/env python3
"""Rebuild autohousenwa.com/music from the lyric videos on the Drive share.

    python3 tools/build-music.py

Source (the BLUE lyric videos, 2026-10-08+): ~/gdrive/Suno Video/ and ~/gdrive/New Lobby Songs/ —
<Title> - TV 16x9.mp4 + <Title> - lyrics.json (Claude Chat makes these).
Running order: the lobby TV's USB tracklist (AutoHouse TV/Lobby USB - numbered files (blue)/00 TRACKLIST.txt);
any blue song not on the USB goes on the end, alphabetically. SKIP lists songs Joe dropped or replaced.

Writes music/v/<slug>.mp4 (stream copy + faststart, no re-encode), music/v/<slug>.jpg (the title
card, redrawn: see poster()) and music/songs.json, which music/index.php renders. A video is only re-copied when the
Drive file is newer than ours, so re-running after a new song lands is cheap.
"""
import glob, json, os, re, subprocess

HOME = os.path.expanduser('~')
SRCS = [os.path.join(HOME, 'gdrive', 'Suno Video'), os.path.join(HOME, 'gdrive', 'New Lobby Songs')]
ORDER = os.path.join(HOME, 'gdrive', 'AutoHouse TV', 'Lobby USB - numbered files (blue)', '00 TRACKLIST.txt')
# Dropped from the lobby (Lobby, 10-08) or replaced by another take (He Brought His Own Parts: Joe picked Take 2).
SKIP = {"Lobby (Coffee's Free)", 'He Brought His Own Parts'}
# USB tracklist names that are shorter than the video's title.
ALIASES = {'forum-certified-mechanic': 'the-very-model-of-a-forum-certified-mechanic'}
OUT = os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))), 'music')
FF = os.path.realpath(os.path.join(HOME, 'high-cost-film', 'ffmpeg'))
LEAD, TAIL = 0.6, 1.2       # lyric_video_render.py pads the song by this much


def slug(title):
    t = re.sub(r'\(.*?\)', '', title).replace("'", '')
    return re.sub(r'[^a-z0-9]+', '-', t.lower()).strip('-')


def poster(mp4, card, jpg):
    """The video's title card, drawn the way the blue lyric renderer draws it (navy, gold, cream). Not a grabbed
    frame: some songs start singing at once and never show the card. Only the logo comes from the video."""
    from io import BytesIO
    from PIL import Image, ImageDraw, ImageFont
    W, H = 1920, 1080
    C = dict(gold=(245, 171, 60), cream=(245, 240, 232), muted=(155, 180, 212))
    def font(size, wght, wdth):
        f = ImageFont.truetype(os.path.join(os.path.dirname(__file__), 'fonts', 'Archivo.ttf'), size)
        f.set_variation_by_axes([wght, wdth])
        return f
    def plain(text, y, size, color, wght, wdth):
        f = font(size, wght, wdth)
        while f.getlength(text) > W - 300 and size > 30:
            size -= 3; f = font(size, wght, wdth)
        d.text((W / 2, y), text, font=f, fill=color, anchor='mm')
    frame = subprocess.run([FF, '-v', 'error', '-ss', '1', '-i', mp4, '-frames:v', '1', '-f', 'image2pipe', '-vcodec', 'png', '-'],
                           capture_output=True, check=True).stdout
    fr = Image.open(BytesIO(frame)).convert('RGB')
    # The navy radial gradient (sampled from the renders: centre ~0,58,117 → edges ~0,40,88).
    mask = Image.radial_gradient('L').resize((round(W * 1.25), round(H * 1.25))).crop(
        (round(W * 0.125), round(H * 0.125), round(W * 1.125), round(H * 1.125)))  # 0 at the centre → 255 at the rim
    im = Image.composite(Image.new('RGB', (W, H), (0, 40, 88)), Image.new('RGB', (W, H), (0, 58, 117)), mask)
    # Only the logo's own (cream) pixels — pasting the whole corner showed the video's darker vignette as a box.
    logo = fr.crop((1600, 820, 1920, 1070))
    alpha = logo.convert('L').point(lambda v: max(0, min(255, (v - 70) * 2)))
    im.paste(logo, (1600, 820), alpha)
    d = ImageDraw.Draw(im)
    title, artist = card
    d.text((72, 76), title.upper(), font=font(48, 700, 95), fill=C['gold'], anchor='lm')
    plain(title, H / 2 - 30, 128, C['cream'], 900, 78)
    d.rectangle((W / 2 - 60, H / 2 + 56, W / 2 + 60, H / 2 + 59), fill=C['gold'])
    plain(artist, H / 2 + 110, 40, C['muted'], 600, 95)
    im.resize((960, 540), Image.LANCZOS).save(jpg, quality=85)


songs = []
for src in SRCS:
    for mp4 in glob.glob(os.path.join(src, '* - TV 16x9.mp4')):
        full = os.path.basename(mp4)[:-len(' - TV 16x9.mp4')]
        if full in SKIP:
            continue
        s = slug(full)
        # Lyrics file by slug: some are named without the video's subtitle ("Check Engine - lyrics.json").
        lyr = [j for j in glob.glob(os.path.join(src, '* - lyrics.json'))
               if slug(os.path.basename(j)[:-len(' - lyrics.json')]) == s and
               (os.path.basename(j)[:-len(' - lyrics.json')] == full or os.path.basename(j)[:-len(' - lyrics.json')] not in SKIP)]
        exact = [j for j in lyr if os.path.basename(j) == full + ' - lyrics.json']
        L = json.load(open((exact or lyr)[0])) if lyr else {'sections': [], 'duration': 0}
        if not L.get('duration'):  # no lyrics file (e.g. Instrumental 35): the video's own length
            out = subprocess.run([FF, '-i', mp4], capture_output=True, text=True).stderr
            m = re.search(r'Duration: (\d+):(\d\d):(\d\d\.\d+)', out)
            dur = int(m[1]) * 3600 + int(m[2]) * 60 + float(m[3]) if m else 0
        else:
            dur = L['duration'] + LEAD + TAIL
        m = re.match(r'(.*?) \((.*)\)$', full)
        sub = m[2] if m else ''
        if re.fullmatch(r'Take \d+', sub):  # a take number isn't a subtitle
            sub = ''
        songs.append({'slug': s, 'title': m[1] if m else full, 'sub': sub,
                      'dur': round(dur, 1),
                      'lyrics': [{'name': x['name'], 'lines': [ln[2] for ln in x['lines']]} for x in L['sections']],
                      '_src': mp4, '_card': (L.get('title', m[1] if m else full), L.get('artist', 'AutoHouse Automotive'))})
dupes = {x['slug'] for x in songs if [y['slug'] for y in songs].count(x['slug']) > 1}
if dupes:
    raise SystemExit(f'two videos map to the same slug: {sorted(dupes)} — add one to SKIP')

order = []
if os.path.exists(ORDER):
    for ln in open(ORDER):
        m = re.match(r'\s*\d+:\d\d:\d\d\s+\d+\s+(.*)', ln)
        if m and not m[1].startswith('AutoHouse TV ident'):
            k = ALIASES.get(slug(m[1]), slug(m[1]))
            if k not in order:
                order.append(k)
missing = [k for k in order if k not in {x['slug'] for x in songs}]
if missing:
    print('on the USB tracklist but no blue video found:', missing)
songs.sort(key=lambda x: (order.index(x['slug']) if x['slug'] in order else len(order), x['title']))

os.makedirs(os.path.join(OUT, 'v'), exist_ok=True)
for x in songs:
    src, dst, jpg = x.pop('_src'), os.path.join(OUT, 'v', x['slug'] + '.mp4'), os.path.join(OUT, 'v', x['slug'] + '.jpg')
    if not os.path.exists(dst) or os.path.getmtime(src) > os.path.getmtime(dst):
        subprocess.run([FF, '-v', 'error', '-y', '-i', src, '-map', '0', '-c', 'copy', '-movflags', '+faststart', dst], check=True)
        print('video ', x['slug'])
    card = x.pop('_card')
    if not os.path.exists(jpg) or os.path.getmtime(dst) > os.path.getmtime(jpg):
        poster(dst, card, jpg)
        print('poster', x['slug'])

json.dump(songs, open(os.path.join(OUT, 'songs.json'), 'w'), indent=1, ensure_ascii=False)
print(len(songs), 'songs ->', os.path.join(OUT, 'songs.json'))
