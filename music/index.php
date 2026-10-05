<?php
/*
 * /music — the AutoHouse lyric videos (the songs that play on the lobby TV).
 * The list comes from songs.json, which tools/build-music.py writes; don't edit it by hand.
 * Deep link to a song with its slug: /music/#squeal
 */
$songs = json_decode(file_get_contents(__DIR__ . '/songs.json'), true) ?: [];
function mmss($s) { $s = (int) round($s); return intdiv($s, 60) . ':' . str_pad($s % 60, 2, '0', STR_PAD_LEFT); }
function h($s) { return htmlspecialchars($s, ENT_QUOTES); }
$first = $songs[0] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Music from the Shop - AutoHouse Automotive, Fayetteville, AR</title>
<meta name="description" content="Songs about brakes, batteries, timing belts and the people who fix them. The music from the AutoHouse lobby TV.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz@0,6..72;1,6..72&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TQRKRB8V');
</script>

<style>
body {
    font-family: "Newsreader", serif;
    margin: 0;
    background-color: #606060;
    color: #333;
    line-height: 1.6;
}

header {
    background-color: #003366;
    color: #fff;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    text-align: center;
}
header img { max-height: 90px; background: #fff; padding: 5px; }

nav { background-color: #606060; padding: 10px 0; }
nav ul { list-style: none; display: flex; justify-content: center; gap: 20px; padding: 0; margin: 0; }
nav a { color: #f5f5f5; text-decoration: none; font-size: 1.4em; font-weight: 600; }

main {
    background-image: url("/_img/bg_jfxn0ejfxn0ejfxn.jpg");
    background-size: cover;
    background-attachment: fixed;
    padding: 30px 20px;
}

.music-card {
    max-width: 1100px;
    margin: 0 auto;
    background: rgba(245,245,245,0.97);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
    padding: 30px;
}
.music-card h1 { color: #003366; font-size: 2.5rem; line-height: 1.15; margin: 0 0 0.4rem; }
.music-card .lede { font-size: 1.15em; margin: 0 0 1.5rem; max-width: 62ch; }

.music-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.75fr) minmax(0, 1fr);
    gap: 28px;
    align-items: start;
}

.player video {
    display: block;
    width: 100%;
    aspect-ratio: 16 / 9;
    background: #f4f3ef;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}
.now { margin-top: 14px; display: flex; flex-wrap: wrap; align-items: baseline; gap: 4px 12px; }
.now h2 { color: #003366; font-size: 1.6em; margin: 0; }
.now .sub { color: #666; font-style: italic; }
.now .next { margin-left: auto; color: #666; font-size: 0.95em; }

.lyrics { margin-top: 12px; border-top: 1px solid #d9d9d4; padding-top: 10px; }
.lyrics summary { cursor: pointer; color: #003366; font-weight: 600; font-size: 1.1em; }
.lyrics .sec { margin-top: 12px; }
.lyrics .sec b { display: block; font-size: 0.8em; letter-spacing: 0.08em; text-transform: uppercase; color: #777; }
.lyrics .sec p { margin: 0; }

.tracks { list-style: none; margin: 0; padding: 0; counter-reset: t; border-top: 1px solid #d9d9d4; }
.tracks li { border-bottom: 1px solid #d9d9d4; }
.tracks button {
    all: unset;
    box-sizing: border-box;
    cursor: pointer;
    width: 100%;
    display: grid;
    grid-template-columns: 2.2em minmax(0, 1fr) auto;
    gap: 8px;
    align-items: baseline;
    padding: 9px 10px;
    font-size: 1.08em;
}
.tracks button::before { counter-increment: t; content: counter(t); color: #888; font-variant-numeric: tabular-nums; text-align: right; }
.tracks button:hover { background: #e9e9e4; }
.tracks button:focus-visible { outline: 2px solid #003366; outline-offset: -2px; }
.tracks .t small { color: #777; font-style: italic; }
.tracks .d { color: #777; font-variant-numeric: tabular-nums; }
.tracks li.on button { background: #003366; color: #fff; }
.tracks li.on button::before, .tracks li.on .d, .tracks li.on small { color: #c9d6e6; }

.aside-note { margin: 14px 0 0; color: #666; font-size: 0.95em; }
.aside-note a { color: #003366; }

footer { background-color: #003366; color: #fff; text-align: center; padding: 20px; }
footer a { color: #f5f5f5; text-decoration: none; margin: 0 15px; }
footer a:hover { text-decoration: underline; }

@media (max-width: 860px) {
    .music-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    nav ul { flex-direction: column; }
    header { flex-direction: column; text-align: center; }
    main { padding: 20px 12px; }
    .music-card { padding: 20px 16px; }
    .music-card h1 { font-size: 2rem; }
}
</style>
</head>

<body>

<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQRKRB8V"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<header>
    <img src="/_img/autohouse2024.png" alt="AutoHouse Automotive Logo">
    <div>
        <h1>AutoHouse Automotive</h1>
        <p>Precision diagnostics & repair for modern vehicles</p>
    </div>
</header>

<?php $current_page = 'music'; include dirname(__DIR__) . '/includes/nav.php'; ?>

<main>
<div class="music-card">
    <h1>Music from the Shop</h1>
    <p class="lede">Songs about squealing brakes, dead batteries, timing belts and the people who fix them.
    We wrote them at AutoHouse and an AI (Suno) sings them. They play on the lobby TV; now they play here too.</p>

    <div class="music-grid">
        <section class="player" aria-label="Now playing">
            <video id="vid" controls playsinline preload="none"
                <?php if ($first): ?>src="v/<?= h($first['slug']) ?>.mp4" poster="v/<?= h($first['slug']) ?>.jpg"<?php endif; ?>></video>
            <div class="now">
                <h2 id="np-title"><?= h($first['title'] ?? '') ?></h2>
                <span class="sub" id="np-sub"><?= h($first['sub'] ?? '') ?></span>
                <span class="next" id="np-next"></span>
            </div>
            <details class="lyrics" id="lyrics">
                <summary>Lyrics</summary>
                <div id="lyrics-body"></div>
            </details>
        </section>

        <aside>
            <ol class="tracks" id="tracks">
            <?php foreach ($songs as $i => $s): ?>
                <li id="t-<?= h($s['slug']) ?>"<?= $i === 0 ? ' class="on"' : '' ?>>
                    <button type="button" data-i="<?= $i ?>">
                        <span class="t"><?= h($s['title']) ?><?php if ($s['sub']): ?> <small>(<?= h($s['sub']) ?>)</small><?php endif; ?></span>
                        <span class="d"><?= mmss($s['dur']) ?></span>
                    </button>
                </li>
            <?php endforeach; ?>
            </ol>
            <p class="aside-note">Plays straight through, one song into the next.
            Hear something on the list you need done? <a href="#" onclick="showScheduler(); return false;">Schedule online</a>.</p>
        </aside>
    </div>
</div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

<?php include dirname(__DIR__) . '/includes/scheduler.php'; ?>

<script>
(function () {
    var songs = <?= json_encode($songs, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) ?>;
    var vid = document.getElementById('vid'), items = document.querySelectorAll('#tracks li'), cur = 0;

    function esc(s) { var d = document.createElement('div'); d.textContent = s; return d.innerHTML; }

    function show(i, play) {
        var s = songs[i];
        if (!s) return;
        cur = i;
        if (vid.getAttribute('src') !== 'v/' + s.slug + '.mp4') {
            vid.poster = 'v/' + s.slug + '.jpg';
            vid.src = 'v/' + s.slug + '.mp4';
        }
        document.getElementById('np-title').textContent = s.title;
        document.getElementById('np-sub').textContent = s.sub;
        var n = songs[i + 1];
        document.getElementById('np-next').textContent = n ? 'Next: ' + n.title : '';
        document.getElementById('lyrics-body').innerHTML = s.lyrics.map(function (sec) {
            return '<div class="sec"><b>' + esc(sec.name) + '</b><p>' + sec.lines.map(esc).join('<br>') + '</p></div>';
        }).join('');
        items.forEach(function (li, k) { li.classList.toggle('on', k === i); });
        if (play) vid.play().catch(function () {});
        if (history.replaceState) history.replaceState(null, '', '#' + s.slug);
    }

    document.getElementById('tracks').addEventListener('click', function (e) {
        var b = e.target.closest('button');
        if (b) show(+b.dataset.i, true);
    });
    vid.addEventListener('ended', function () { if (cur + 1 < songs.length) show(cur + 1, true); });

    var start = songs.findIndex(function (s) { return '#' + s.slug === location.hash; });
    show(start < 0 ? 0 : start, false);
    if (start < 0 && history.replaceState) history.replaceState(null, '', location.pathname);
})();
</script>

</body>
</html>
