#!/usr/bin/env python3
"""Rebuild autohousenwa.com/music from the lyric videos on the Drive share.

    python3 tools/build-music.py

Source: ~/gdrive/Suno Video/<Title> - TV 16x9.mp4 + <Title> - lyrics.json (Claude Chat makes these).
Running order: the songs in ~/lobby-loop/full/tracklist.txt (Claude Chat's lobby order); any song
not in it goes on the end, alphabetically.

Writes music/v/<slug>.mp4 (stream copy + faststart, no re-encode), music/v/<slug>.jpg (the title
card, redrawn: see poster()) and music/songs.json, which music/index.php renders. A video is only re-copied when the
Drive file is newer than ours, so re-running after a new song lands is cheap.
"""
import glob, json, os, re, subprocess

HOME = os.path.expanduser('~')
SRC = os.path.join(HOME, 'gdrive', 'Suno Video')
ORDER = os.path.join(HOME, 'lobby-loop', 'full', 'tracklist.txt')
OUT = os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))), 'music')
FF = os.path.realpath(os.path.join(HOME, 'high-cost-film', 'ffmpeg'))
LEAD, TAIL = 0.6, 1.2       # lyric_video_render.py pads the song by this much


def slug(title):
    t = re.sub(r'\(.*?\)', '', title).replace("'", '')
    return re.sub(r'[^a-z0-9]+', '-', t.lower()).strip('-')


def poster(mp4, card, jpg):
    """The video's title card, drawn the way lyric_video_render.py draws it. Not a grabbed frame:
    some songs start singing at once and never show the card. Only the logo comes from the video."""
    from io import BytesIO
    from PIL import Image, ImageDraw, ImageFont
    W, H = 1920, 1080
    C = dict(paper=(245, 244, 240), ink=(20, 22, 27), muted=(123, 127, 136), navy=(0, 58, 115))
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
    im = Image.new('RGB', (W, H), fr.crop((900, 900, 1100, 1000)).resize((1, 1), Image.BOX).getpixel((0, 0)))  # its paper, as encoded
    im.paste(fr.crop((1600, 820, 1920, 1070)), (1600, 820))
    d = ImageDraw.Draw(im)
    title, artist = card
    d.text((72, 76), title.upper(), font=font(48, 700, 95), fill=C['muted'], anchor='lm')
    plain(title, H / 2 - 30, 128, C['ink'], 900, 78)
    d.rectangle((W / 2 - 60, H / 2 + 56, W / 2 + 60, H / 2 + 59), fill=C['navy'])
    plain(artist, H / 2 + 110, 40, C['muted'], 600, 95)
    im.resize((960, 540), Image.LANCZOS).save(jpg, quality=85)


songs = []
for mp4 in glob.glob(os.path.join(SRC, '* - TV 16x9.mp4')):
    full = os.path.basename(mp4)[:-len(' - TV 16x9.mp4')]
    s = slug(full)
    lyr = [j for j in glob.glob(os.path.join(SRC, '* - lyrics.json'))
           if slug(os.path.basename(j)[:-len(' - lyrics.json')]) == s]
    L = json.load(open(lyr[0])) if lyr else {'sections': [], 'duration': 0}
    m = re.match(r'(.*?) \((.*)\)$', full)
    songs.append({'slug': s, 'title': m[1] if m else full, 'sub': m[2] if m else '',
                  'dur': round(L['duration'] + LEAD + TAIL, 1),
                  'lyrics': [{'name': x['name'], 'lines': [ln[2] for ln in x['lines']]} for x in L['sections']],
                  '_src': mp4, '_card': (L.get('title', full), L.get('artist', ''))})

order = []
if os.path.exists(ORDER):
    for ln in open(ORDER):
        m = re.match(r'\s*\d+:\d\d:\d\d\s+(.*)', ln)
        if m and not m[1].startswith('Spot - ') and slug(m[1]) not in order:
            order.append(slug(m[1]))
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
