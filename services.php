<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AutoHouse Automotive Repair & Diagnostics - Fayetteville, AR</title>

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
    justify-content: center;
    gap: 20px;
    align-items: center;
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

.page-intro {
    max-width: 900px;
    margin: 0 auto 30px auto;
    background: rgba(245,245,245,0.95);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.page-intro h2 {
    margin-top: 0;
    color: #003366;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 18px;
    max-width: 1100px;
    margin: 0 auto;
}

.service-card {
    background: rgba(245,245,245,0.95);
    padding: 22px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.service-card h3 {
    margin-top: 0;
    color: #003366;
}

.service-card ul {
    margin: 10px 0 0 18px;
}

footer {
    background-color: #003366;
    color: #fff;
    text-align: center;
    padding: 20px;
}
footer a {
    color: #f5f5f5;
    text-decoration: none;
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
    }
    header img {
        max-height: 60px;
    }
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

<?php $current_page = 'services'; include __DIR__ . '/includes/nav.php'; ?>

<main>

<section class="page-intro">
    <h2>Professional Automotive Services</h2>
    <p>
        We focus on accurate diagnostics, clear communication, and repairs based on testing —
        not guesswork. Our services are designed for modern vehicles where precision matters.
    </p>
</section>

<section class="services-grid">

    <div class="service-card">
        <h3>Manufacturer-Spec Oil Service</h3>
        <p>Maintenance performed to the correct oil specification and service interval.</p>
        <ul>
            <li>Correct oil grade and capacity</li>
            <li>Filter replacement and leak check</li>
            <li>Fluid and under-hood inspection</li>
        </ul>
    </div>

    <div class="service-card">
        <h3>Brake System Inspection & Repair</h3>
        <p>Brake service based on measurement and inspection, not assumptions.</p>
        <ul>
            <li>Pad and rotor wear evaluation</li>
            <li>Hydraulic and hardware inspection</li>
            <li>Safety-focused repair recommendations</li>
        </ul>
    </div>

    <div class="service-card">
        <h3>Advanced Engine Diagnostics</h3>
        <p>Data-driven diagnostics to identify the root cause before repairs begin.</p>
        <ul>
            <li>Scan data and live parameter analysis</li>
            <li>Guided and confirmatory testing</li>
            <li>Clear explanation of findings</li>
        </ul>
    </div>

    <div class="service-card">
        <h3>Tire Rotation & Brake Wear Check</h3>
        <p>Prevent uneven tire wear and catch brake issues early.</p>
        <ul>
            <li>Proper tire rotation</li>
            <li>Brake wear inspection</li>
            <li>Tire condition evaluation</li>
        </ul>
    </div>

    <div class="service-card">
        <h3>A/C System Diagnostics & Repair</h3>
        <p>Accurate diagnosis of cooling performance issues before parts replacement.</p>
        <ul>
            <li>System performance testing</li>
            <li>Leak and pressure diagnostics</li>
            <li>Electrical and control checks</li>
        </ul>
    </div>

    <div class="service-card">
        <h3>Pre-Purchase & Vehicle Inspections</h3>
        <p>Detailed inspections to help avoid expensive surprises.</p>
        <ul>
            <li>Safety and mechanical checks</li>
            <li>Fluid, brake, and tire evaluation</li>
            <li>Clear written findings</li>
        </ul>
    </div>

</section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scheduler.php'; ?>
</body>
</html>
