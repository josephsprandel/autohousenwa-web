<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schedule Service - AutoHouse Automotive, Fayetteville, AR</title>
<meta name="description" content="Book your AutoHouse Automotive service appointment online.">

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

header img {
    max-height: 90px;
    background: #fff;
    padding: 5px;
}

nav {
    background-color: #606060;
    padding: 10px 0;
}
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0;
    margin: 0;
}
nav a {
    color: #f5f5f5;
    text-decoration: none;
    font-size: 1.4em;
    font-weight: 600;
}

main {
    background-image: url("/_img/bg_jfxn0ejfxn0ejfxn.jpg");
    background-size: cover;
    background-attachment: fixed;
    padding: 30px 20px;
}

.book-card {
    max-width: 640px;
    margin: 40px auto;
    background: rgba(245,245,245,0.97);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
    padding: 40px 32px;
    text-align: center;
}
.book-card h2 { color: #003366; margin: 0 0 10px; font-size: 1.9em; }
.book-card p { font-size: 1.1em; margin: 0 0 24px; }
.book-button {
    display: inline-block;
    background: #003366;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 14px 32px;
    font-family: "Newsreader", serif;
    font-size: 1.2em;
    font-weight: 600;
    cursor: pointer;
}
.book-button:hover { background: #004488; }
.book-card .alt { font-size: 0.95em; margin-top: 22px; color: #555; }
.book-card .alt a { color: #003366; }
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

<?php $current_page = 'book'; include dirname(__DIR__) . '/includes/nav.php'; ?>

<main>
    <!--
      /book — the link in RO Engine's service reminder texts (shop website + "/book").
      Opens the scheduler straight away; the button is there if it was closed.
    -->
    <div class="book-card">
        <h2>Schedule Your Service</h2>
        <p>Pick a day and time that works for you — it takes about a minute.</p>
        <button class="book-button" onclick="showScheduler()">Schedule Online</button>
        <p class="alt">Rather talk to us? Call <a href="tel:4793012880">(479) 301-2880</a>.</p>
    </div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

<?php include dirname(__DIR__) . '/includes/scheduler.php'; ?>
<script>
document.addEventListener('DOMContentLoaded', function () { showScheduler(); });
</script>
</body>
</html>
