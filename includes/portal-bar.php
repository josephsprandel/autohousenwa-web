<?php
/*
 * Customer portal bar — RO Engine's live code: the bar above the header is drawn by
 * https://autohouse.roengine.com/embed/roengine.js from RO Engine's settings (Settings → Shop Profile → Brand Color;
 * Settings → Communications → Customer portal → Put it on your website). Change it THERE, not here — this file only
 * holds the placeholder (a plain link, shown if the script can't load) and the script tag. Every page includes this
 * just before <header>. The site's own showScheduler() (includes/scheduler.php, SMS consent first) is left alone:
 * the script only defines one when the page has none.
 */
?>
<!-- RO Engine: customer portal + online booking. Colours, wording and placement follow your RO Engine
     settings. For the bar, paste this first thing after <body>. -->
<div data-roengine-portal><a href="https://autohouse.roengine.com/my">Current customers: Login here</a></div>
<script src="https://autohouse.roengine.com/embed/roengine.js" defer></script>
