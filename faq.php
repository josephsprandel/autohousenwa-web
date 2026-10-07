<?php
/*
 * FAQ — "Odd Questions, Straight Answers"
 * One list of questions drives both the visible page and the FAQPage schema,
 * so they can never drift apart. To add a question, add an entry to $faqs.
 * 'a' is HTML (shown on the page); the schema version is the same text with tags stripped.
 */
$phone_display = '(479) 301-2880';
$phone_link    = 'tel:+14793012880';

$faqs = [
  'Volvo oddities' => [
    [
      'q' => 'I lost the key to my wheel locks. Now what?',
      'a' => '<p>Most newer Volvos come with locking wheel bolts that are designed to resist removal tools, so a tire shop without the key usually has to turn you away. Before anything else, look in the spare-tire well, the glovebox, and the cargo-area side pockets; that is where the key usually hides.</p>
<p>If it is truly gone, you have two options. A Volvo dealer can order a replacement key if you have the code card that came with the car. Or we can remove the locks and replace them with standard wheel bolts. It takes a few minutes, usually without even lifting the car. Call or text <a href="TEL">PHONE</a>.</p>',
    ],
    [
      'q' => 'Something under my car hums or clicks after I shut it off. Is that normal?',
      'a' => '<p>Usually, yes. After you park, many Volvos run a self-test of the fuel-vapor (EVAP) system: a small pump near the rear of the car pressurizes the fuel tank for a few minutes to check for leaks. You may also hear the electric coolant pump or radiator fan keep running for a bit after a hot drive.</p>
<p>What is not normal: grinding, a hum that never stops and drains the battery, or a fuel smell. If you notice any of those, have it checked.</p>',
    ],
    [
      'q' => 'My engine shuts off at red lights. Is something wrong?',
      'a' => '<p>That is the start/stop system saving fuel, and it is normal. The engine restarts the moment you lift off the brake. You can switch it off for the current drive, but it turns itself back on each time you start the car.</p>
<p>If start/stop stops working altogether, or you see a "Start/Stop unavailable" message for days at a time, it is often an early sign of a weak battery. That is worth a quick test.</p>',
    ],
    [
      'q' => 'My car holds the brake at stops by itself.',
      'a' => '<p>That is Auto Hold. It keeps the car from creeping at lights so you can take your foot off the brake, and it releases when you press the accelerator. You can turn it on or off with the button near the gear selector.</p>',
    ],
    [
      'q' => 'How do I change the wiper blades without the arms hitting the hood?',
      'a' => '<p>On most newer Volvos the wipers park under the edge of the hood. Put them in "service position" first, from the settings in the center display, so the arms stand up clear of the hood. Swap the blades, then turn the car on and the wipers return to their normal resting spot.</p>',
    ],
    [
      'q' => 'My plug-in hybrid’s fuel door won’t open right away.',
      'a' => '<p>Plug-in hybrids keep the fuel tank sealed and slightly pressurized, because the gas engine may not run for weeks. Press the fuel-door button and give it a few moments: the car vents the tank first, then unlocks the door. A soft whoosh at the filler is normal. If the door never unlocks, the problem is usually in the tank-venting system, not the door itself.</p>',
    ],
    [
      'q' => 'My key fob battery died and the car won’t start.',
      'a' => '<p>The car can still read a fob with a dead battery if you hold it right next to the backup reader. On most newer Volvos that is a marked spot in the center console or cupholder; the owner’s manual shows the exact location for your model. Replace the coin battery in the fob as soon as you can.</p>',
    ],
    [
      'q' => 'The tire pressure light came on the first cold morning of the year.',
      'a' => '<p>Cold air is denser, so tire pressure drops about 1 PSI for every 10°F the temperature falls. A warning on the first cold morning is usually just that. Check and fill all four tires to the pressure on the driver’s door jamb. If the light comes back after you have filled them, one of the tires probably has a slow leak.</p>',
    ],
    [
      'q' => 'My Volvo still says "Service required" after an oil change somewhere else.',
      'a' => '<p>The service reminder does not reset itself. It is reset with a diagnostic tool, and some quick-lube shops do not have one for Volvo. We can reset it. Keep your receipt either way, since that is your maintenance record.</p>',
    ],
    [
      'q' => 'My check engine light came on right after I got gas.',
      'a' => '<p>Start with the gas cap: make sure it is on and clicked tight. A loose cap is the most common cause. The light can take several days of normal driving to go out on its own after the cap is fixed.</p>
<p>Also, stop pumping at the first click. "Topping off" pushes liquid fuel into the vapor system, which can damage it and cause hard starting right after refueling. If the light stays on or starts flashing, have it checked.</p>',
    ],
  ],
  'About the shop' => [
    [
      'q' => 'Do you only work on Volvos?',
      'a' => '<p>No. Volvo is our specialty, but we work on most makes and models, including other European brands, domestics, and imports. We don’t service dually or heavy-duty trucks, and we generally work on vehicles about 25 years old or newer.</p>',
    ],
    [
      'q' => 'Will having my car serviced at an independent shop void my warranty?',
      'a' => '<p>No. Federal law (the Magnuson-Moss Warranty Act) prevents a manufacturer from voiding your warranty just because maintenance was done somewhere other than the dealer. Follow the maintenance schedule and keep your records, and you are covered.</p>',
    ],
  ],
];

// Swap placeholders and build the schema from the same list
$schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
foreach ($faqs as $section => &$items) {
  foreach ($items as &$f) {
    $f['a'] = str_replace(['TEL', 'PHONE'], [$phone_link, $phone_display], $f['a']);
    $schema['mainEntity'][] = [
      '@type' => 'Question',
      'name'  => $f['q'],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => trim(preg_replace('/\s+/', ' ', strip_tags($f['a'])))],
    ];
  }
  unset($f);
}
unset($items);

function faq_slug($s) { return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($s)), '-'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Odd Questions, Straight Answers - AutoHouse Automotive - Fayetteville, AR</title>
<meta name="description" content="Plain answers to the odd questions drivers ask: lost Volvo wheel lock keys, noises after shutdown, start/stop, warning lights, and more.">
<link rel="canonical" href="https://autohousenwa.com/faq.php">
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
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>
<style>
body { font-family: "Newsreader", serif; margin: 0; background-color: #606060; color: #333; line-height: 1.6; }
header { background-color: #003366; color: #fff; padding: 20px; display: flex; align-items: center; justify-content: center; gap: 20px; text-align: center; }
header img { max-height: 90px; background: #fff; padding: 5px; }
nav { background-color: #606060; padding: 10px 0; }
nav ul { list-style: none; display: flex; flex-wrap: wrap; justify-content: center; gap: 8px 20px; padding: 0 12px; margin: 0; }
nav a { color: #f5f5f5; text-decoration: none; font-size: 1.4em; font-weight: 600; }
main { background-image: url("/_img/bg_jfxn0ejfxn0ejfxn.jpg"); background-size: cover; background-attachment: fixed; padding: 30px 20px; }
.faq-card { max-width: 900px; margin: 0 auto; background: rgba(245,245,245,0.95); border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.18); padding: 30px 36px; }
.faq-card h2 { color: #003366; margin: 0 0 6px; font-size: 2.1em; }
.faq-intro { font-size: 1.1em; margin: 0 0 20px; }
.faq-card h3 { color: #003366; border-bottom: 2px solid #003366; padding-bottom: 4px; margin: 32px 0 8px; font-size: 1.35em; }
.faq-card details { border-bottom: 1px solid #ccc; }
.faq-card summary { cursor: pointer; padding: 14px 32px 14px 0; font-size: 1.15em; font-weight: 600; color: #1d2b3a; list-style: none; position: relative; }
.faq-card summary::-webkit-details-marker { display: none; }
.faq-card summary::after { content: "+"; position: absolute; right: 4px; top: 10px; font-size: 1.4em; color: #003366; }
.faq-card details[open] summary::after { content: "\2212"; }
.faq-card details > div { padding: 0 0 12px; font-size: 1.05em; }
.faq-card details p { margin: 0 0 10px; }
.faq-card details a, .faq-more a { color: #003366; font-weight: 600; }
.faq-more { margin-top: 28px; padding: 16px 20px; background: #e6ecf2; border-radius: 8px; font-size: 1.05em; }
footer { background-color: #003366; color: #fff; text-align: center; padding: 20px; }
footer a { color: #f5f5f5; text-decoration: none; margin: 0 15px; }
footer a:hover { text-decoration: underline; }
@media (max-width: 900px) {
    header { flex-direction: column; }
    header img { max-height: 60px; }
}
@media (max-width: 600px) {
    nav a { font-size: 1.15em; }
    main { padding: 20px 12px; }
    .faq-card { padding: 20px 18px; }
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

<?php $current_page = 'faq'; include __DIR__ . '/includes/nav.php'; ?>

<main>
<div class="faq-card">
    <h2>Odd Questions, Straight Answers</h2>
    <p class="faq-intro">The things people ask us at the counter, by text, and in the parking lot. If your car is doing something strange that isn't on this list, ask us.</p>

<?php foreach ($faqs as $section => $items): ?>
    <h3 id="<?= faq_slug($section) ?>"><?= htmlspecialchars($section) ?></h3>
<?php foreach ($items as $f): ?>
    <details id="<?= faq_slug($f['q']) ?>">
        <summary><?= htmlspecialchars($f['q']) ?></summary>
        <div><?= $f['a'] ?></div>
    </details>
<?php endforeach; ?>
<?php endforeach; ?>

    <div class="faq-more">Something else odd going on? Call or text <a href="<?= $phone_link ?>"><?= $phone_display ?></a>.</div>
</div>
</main>

<script>
// Open the question a link points to, e.g. /faq.php#i-lost-the-key-to-my-wheel-locks-now-what
if (location.hash) {
    const d = document.getElementById(decodeURIComponent(location.hash.slice(1)));
    if (d && d.tagName === 'DETAILS') { d.open = true; d.scrollIntoView(); }
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scheduler.php'; ?>
</body>
</html>
