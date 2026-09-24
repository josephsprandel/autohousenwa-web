<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About AutoHouse Automotive - Fayetteville, AR</title>

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

.about-card {
    max-width: 1000px;
    margin: 0 auto;
    background: rgba(245,245,245,0.95);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
    overflow: hidden;
}

.about-inner {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 0;
}

.about-content {
    padding: 30px;
}

.about-content h2 {
    margin-top: 0;
    color: #003366;
    font-size: 2.1em;
}

.about-content p {
    font-size: 1.1em;
    margin-bottom: 16px;
}

.about-image {
    padding: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.about-image img {
    width: 100%;
    max-width: 380px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
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
    margin: 0 15px;
}

footer a:hover {
    text-decoration: underline;
}

.footer-links {
    padding: 15px 0;
    border-top: 1px solid rgba(255,255,255,0.2);
    margin-bottom: 10px;
}

.footer-divider {
    color: rgba(255,255,255,0.4);
    margin: 0 10px;
}

@media (max-width: 900px) {
    .about-inner {
        grid-template-columns: 1fr;
    }
    header {
        flex-direction: column;
    }
    header img {
        max-height: 60px;
    }
}




/* ===== BY THE NUMBERS SECTION ===== */
.stats-intro {
    max-width: 1000px;
    margin: 24px auto 0;
    text-align: center;
}
.stats-intro h2 {
    color: #f5f5f5;
    font-size: 2.1em;
    margin: 0 0 6px;
    font-weight: 600;
}
.stats-intro h2 em {
    font-style: italic;
    color: #f5b301;
}
.stats-intro p {
    color: #d0d0d0;
    font-size: 1.1em;
    margin: 0;
}

.stats-row {
    max-width: 1000px;
    margin: 16px auto 0;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
}

.stat-card {
    flex: 1 1 300px;
    max-width: 325px;
    background: rgba(245,245,245,0.95);
    padding: 22px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
}
.stat-card .stat-number {
    font-size: 2.6em;
    font-weight: 700;
    color: #003366;
    line-height: 1.1;
    margin-bottom: 2px;
}
.stat-card .stat-number .unit {
    font-size: 0.55em;
    color: #f5b301;
    vertical-align: super;
}
.stat-card .stat-label {
    font-size: 0.95em;
    font-weight: 700;
    color: #003366;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 6px;
}
.stat-card .stat-detail {
    font-size: 0.95em;
    color: #555;
    line-height: 1.5;
}

.stat-card.featured {
    background: #003366;
}
.stat-card.featured .stat-number { color: #fff; }
.stat-card.featured .stat-label { color: #f5b301; }
.stat-card.featured .stat-detail { color: rgba(255,255,255,0.8); }

.stat-card.award {
    border-left: 5px solid #f5b301;
}
.stat-card.award .stat-number {
    font-size: 1.4em;
}

/* Make breakdown card */
.breakdown-wrap {
    max-width: 1000px;
    margin: 16px auto 0;
}
.breakdown-card {
    background: rgba(245,245,245,0.95);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
    padding: 24px 28px;
}
.breakdown-card h3 {
    color: #003366;
    font-size: 1.25em;
    margin: 0 0 16px;
    font-weight: 700;
}
.make-bars {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.make-bar-row {
    display: grid;
    grid-template-columns: 100px 1fr 50px;
    align-items: center;
    gap: 10px;
}
.make-bar-row .make-name {
    font-size: 0.95em;
    font-weight: 600;
    color: #333;
    text-align: right;
}
.make-bar-row .bar-track {
    height: 24px;
    background: #e0e0e0;
    border-radius: 4px;
    overflow: hidden;
}
.make-bar-row .bar-fill {
    height: 100%;
    border-radius: 4px;
    width: 0;
    transition: width 1.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.bar-fill.volvo    { background: #003366; }
.bar-fill.european { background: #1a6699; }
.bar-fill.japanese { background: #7a8a5a; }
.bar-fill.domestic { background: #8b4513; }
.bar-fill.other    { background: #888; }

.make-bar-row .bar-pct {
    font-size: 0.95em;
    font-weight: 700;
    color: #003366;
    text-align: right;
}

.category-summary {
    display: flex;
    justify-content: center;
    gap: 28px;
    margin-top: 20px;
    padding-top: 14px;
    border-top: 1px solid #ddd;
    flex-wrap: wrap;
}
.category-item { text-align: center; }
.category-item .cat-pct {
    font-size: 1.5em;
    font-weight: 700;
    color: #003366;
    line-height: 1;
}
.category-item .cat-label {
    font-size: 0.8em;
    color: #666;
    margin-top: 2px;
}

/* Volvo models card */
.volvo-models-wrap {
    max-width: 1000px;
    margin: 16px auto 0;
}
.volvo-models-card {
    background: #003366;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
    padding: 24px 28px;
    color: #fff;
}
.volvo-models-card h3 {
    color: #f5b301;
    font-size: 1.25em;
    margin: 0 0 14px;
    font-weight: 700;
}
.model-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}
.model-tag {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 6px;
    padding: 6px 14px;
    display: flex;
    align-items: baseline;
    gap: 8px;
}
.model-tag .model-name {
    font-weight: 600;
    font-size: 1em;
}
.model-tag .model-count {
    font-size: 0.8em;
    color: rgba(255,255,255,0.55);
}

/* Credentials row */
.credentials-row {
    max-width: 1000px;
    margin: 16px auto 0;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
}
.credential-card {
    flex: 1 1 300px;
    max-width: 490px;
    background: rgba(245,245,245,0.95);
    padding: 18px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.18);
    display: flex;
    gap: 12px;
    align-items: flex-start;
}
.credential-icon {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 16px;
    font-weight: 700;
}
.credential-icon.gold  { background: rgba(245,179,1,0.15); color: #c59400; }
.credential-icon.blue  { background: rgba(0,51,102,0.1); color: #003366; }
.credential-icon.green { background: rgba(58,125,68,0.12); color: #2d6e36; }
.credential-text h4 {
    margin: 0 0 3px;
    font-size: 1em;
    font-weight: 700;
    color: #003366;
}
.credential-text p {
    margin: 0;
    font-size: 0.9em;
    color: #555;
    line-height: 1.45;
}

.stats-note {
    max-width: 1000px;
    margin: 14px auto 0;
    text-align: center;
}
.stats-note p {
    font-size: 0.8em;
    color: #999;
}

@media (max-width: 900px) {
    .stat-card { max-width: 100%; }
    .credential-card { max-width: 100%; }
    .make-bar-row { grid-template-columns: 75px 1fr 42px; }
    .make-bar-row .make-name { font-size: 0.8em; }
    .category-summary { gap: 16px; }
}








</style>


<!-- ============================================================
     FILE 1: JSON-LD STRUCTURED DATA
     Paste this into your <head> section on all pages,
     right before the closing </head> tag.
     ============================================================ -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoRepair",
  "name": "AutoHouse Automotive Diagnostics & Repair",
  "alternateName": "AutoHouse",
  "url": "https://autohousenwa.com",
  "telephone": "+1-479-301-2880",
  "email": "service@autohousenwa.com",
  "foundingDate": "2013-01-13",
  "description": "Volvo specialist and full-service automotive diagnostics and repair facility in Fayetteville, Arkansas. Founded by a two-time Volvo Vista Challenge champion — ranked in the top 1% of factory-trained Volvo technicians worldwide. Over one-third of all repair orders are Volvo vehicles. Serving Northwest Arkansas since 2013 with precision diagnostics for European, Asian, and domestic vehicles.",
  "slogan": "Precision diagnostics & repair for modern vehicles",
  "knowsAbout": [
    "Volvo vehicle repair and maintenance",
    "Volvo XC90 service",
    "Volvo XC60 service",
    "Volvo S60 service",
    "Volvo XC40 service",
    "Volvo V70 service",
    "Volvo S80 service",
    "Volvo V90 Cross Country service",
    "Volvo XC70 service",
    "Volvo C70 service",
    "Volvo diagnostics",
    "European vehicle repair",
    "BMW repair",
    "Audi repair",
    "Volkswagen repair",
    "Mercedes-Benz repair",
    "Mini Cooper repair",
    "Porsche repair",
    "Subaru repair",
    "Automotive computer diagnostics",
    "Advanced engine diagnostics",
    "Brake system service",
    "A/C system diagnostics"
  ],
  "makesOffer": [
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Volvo Specialist Service",
        "description": "Factory-level diagnostics and repair for all Volvo models including XC90, XC60, S60, XC40, V70, S80, V90 Cross Country, and newer electric/hybrid platforms. Founded by a two-time Volvo Vista Challenge champion."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "European Vehicle Repair",
        "description": "Diagnostics and repair for BMW, Audi, Volkswagen, Mercedes-Benz, Mini, Porsche, and other European makes. Over 51% of all work orders are European vehicles."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Full-Service Auto Repair",
        "description": "Complete automotive diagnostics, maintenance, and repair for all 40+ makes serviced including Japanese, Korean, and domestic vehicles."
      }
    }
  ],
  "award": [
    "Founded by a Two-Time Volvo Vista Automotive Technicians Challenge Champion",
    "Founded by a Technician Ranked in the Top 1% of Factory-Trained Volvo Technicians Worldwide"
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "bestRating": "5",
    "ratingCount": "150",
    "reviewCount": "150"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "432 N Main Ave",
    "addressLocality": "Fayetteville",
    "addressRegion": "AR",
    "postalCode": "72701",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 36.0525,
    "longitude": -94.1718
  },
  "areaServed": [
    { "@type": "City", "name": "Fayetteville", "containedInPlace": { "@type": "State", "name": "Arkansas" } },
    { "@type": "City", "name": "Springdale", "containedInPlace": { "@type": "State", "name": "Arkansas" } },
    { "@type": "City", "name": "Rogers", "containedInPlace": { "@type": "State", "name": "Arkansas" } },
    { "@type": "City", "name": "Bentonville", "containedInPlace": { "@type": "State", "name": "Arkansas" } },
    { "@type": "City", "name": "Johnson", "containedInPlace": { "@type": "State", "name": "Arkansas" } },
    { "@type": "Place", "name": "Northwest Arkansas" }
  ],
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "08:00",
      "closes": "18:00"
    }
  ],
  "numberOfEmployees": { "@type": "QuantitativeValue", "minValue": 4, "maxValue": 6 },
  "hasCredential": [
    {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Professional Certification",
      "name": "Founded by a Volvo Vista Automotive Technicians Challenge Winner — Top 1% Worldwide"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/AutoHouseNWA",
    "https://www.yelp.com/biz/autohouse-fayetteville",
    "https://www.linkedin.com/company/autohouse",
    "https://www.carfax.com/Reviews-AutoHouse-of-Northwest-Arkansas-Fayetteville-AR_HPNKUAL001"
  ]
}
</script>



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

<?php $current_page = 'about'; include __DIR__ . '/includes/nav.php'; ?>

<main>
    <div class="about-card">
        <div class="about-inner">

            <div class="about-content">
                <h2>Who We Are</h2>

                <p>
                    Founded in 2013, <strong>AutoHouse Automotive</strong> has served Northwest Arkansas
                    with a simple philosophy: diagnose accurately, communicate clearly,
                    and recommend repairs based on evidence — not assumptions.
                </p>

                <p>
                    Modern vehicles are complex systems. Successful repairs require more than
                    replacing parts; they require understanding how those systems interact.
                    That’s why we take a diagnostics-first approach to every concern,
                    whether it’s a warning light, drivability issue, or preventative maintenance.
                </p>

                <p>
                    We believe trust is built through transparency. You’ll never be pressured
                    into unnecessary repairs, and you’ll always receive a clear explanation
                    of what we found, why it matters, and what your options are.
                </p>

                <p>
                    Our goal is simple: help you make informed decisions and keep your vehicle
                    reliable for the long term.
                </p>
            </div>

            <div class="about-image">
                <img src="/_img/shop2014.jpg" alt="AutoHouse Automotive shop">
            </div>

        </div>
    </div>
<div class="stats-intro">
    <h2>By the <em>Numbers</em></h2>
    <p>No fluff — just the data from 2025.</p>
</div>

<!-- Row 1: Big stats -->
<div class="stats-row">
    <div class="stat-card">
        <div class="stat-number">1,388</div>
        <div class="stat-label">Work Orders Closed in 2025</div>
        <div class="stat-detail">Every vehicle diagnosed, documented, and repaired — with thousands more since we opened in 2013.</div>
    </div>
    <div class="stat-card featured">
        <div class="stat-number">4.9</div>
        <div class="stat-label">Average Rating</div>
        <div class="stat-detail">Across 150+ verified reviews on Google, CARFAX, Yelp, and Angi.</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">747</div>
        <div class="stat-label">Customers Served in 2025</div>
        <div class="stat-detail">38% came back more than once. Trust is earned by the work, not the marketing.</div>
    </div>
</div>

<!-- Row 2: Specialty stats -->
<div class="stats-row">
    <div class="stat-card award">
        <div class="stat-number">Founded by a Vista Champion</div>
        <div class="stat-label">Volvo Vista Challenge</div>
        <div class="stat-detail">AutoHouse was founded by a two-time winner of Volvo's global technician competition — ranked in the top 1% of factory-trained Volvo technicians worldwide. That standard is in our DNA.</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">33<span class="unit">%</span></div>
        <div class="stat-label">Volvo — Our #1 Make</div>
        <div class="stat-detail">464 Volvo repair orders last year alone. XC90, XC60, S60, XC40, V70, S80, V90 Cross Country — we know every platform.</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">51<span class="unit">%</span></div>
        <div class="stat-label">European Vehicles</div>
        <div class="stat-detail">More than half our work is European — Volvo, BMW, Audi, VW, Mercedes, Mini, Porsche. This is what we do.</div>
    </div>
</div>

<!-- Make breakdown chart -->
<div class="breakdown-wrap">
    <div class="breakdown-card">
        <h3>What We Service — Make Breakdown</h3>
        <div class="make-bars" id="makeBars">
            <div class="make-bar-row">
                <div class="make-name">Volvo</div>
                <div class="bar-track"><div class="bar-fill volvo" data-width="33.4%"></div></div>
                <div class="bar-pct">33.4%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Audi / VW</div>
                <div class="bar-track"><div class="bar-fill european" data-width="7.0%"></div></div>
                <div class="bar-pct">7.0%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Ford</div>
                <div class="bar-track"><div class="bar-fill domestic" data-width="6.8%"></div></div>
                <div class="bar-pct">6.8%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Toyota</div>
                <div class="bar-track"><div class="bar-fill japanese" data-width="6.1%"></div></div>
                <div class="bar-pct">6.1%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Chevrolet</div>
                <div class="bar-track"><div class="bar-fill domestic" data-width="5.7%"></div></div>
                <div class="bar-pct">5.7%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">BMW</div>
                <div class="bar-track"><div class="bar-fill european" data-width="5.3%"></div></div>
                <div class="bar-pct">5.3%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Honda</div>
                <div class="bar-track"><div class="bar-fill japanese" data-width="4.6%"></div></div>
                <div class="bar-pct">4.6%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Subaru</div>
                <div class="bar-track"><div class="bar-fill japanese" data-width="3.2%"></div></div>
                <div class="bar-pct">3.2%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">Mercedes</div>
                <div class="bar-track"><div class="bar-fill european" data-width="2.4%"></div></div>
                <div class="bar-pct">2.4%</div>
            </div>
            <div class="make-bar-row">
                <div class="make-name">All Others</div>
                <div class="bar-track"><div class="bar-fill other" data-width="25.5%"></div></div>
                <div class="bar-pct">25.5%</div>
            </div>
        </div>
        <div class="category-summary">
            <div class="category-item">
                <div class="cat-pct">51.4%</div>
                <div class="cat-label">European</div>
            </div>
            <div class="category-item">
                <div class="cat-pct">23.5%</div>
                <div class="cat-label">Domestic</div>
            </div>
            <div class="category-item">
                <div class="cat-pct">19.7%</div>
                <div class="cat-label">Japanese</div>
            </div>
            <div class="category-item">
                <div class="cat-pct">2.2%</div>
                <div class="cat-label">Korean</div>
            </div>
            <div class="category-item">
                <div class="cat-pct">40</div>
                <div class="cat-label">Makes Serviced</div>
            </div>
        </div>
    </div>
</div>

<!-- Volvo models detail -->
<div class="volvo-models-wrap">
    <div class="volvo-models-card">
        <h3>Volvo Models We Serviced in 2025</h3>
        <div class="model-grid">
            <div class="model-tag"><span class="model-name">XC90</span><span class="model-count">165 ROs</span></div>
            <div class="model-tag"><span class="model-name">XC60</span><span class="model-count">107 ROs</span></div>
            <div class="model-tag"><span class="model-name">S60</span><span class="model-count">55 ROs</span></div>
            <div class="model-tag"><span class="model-name">XC40</span><span class="model-count">28 ROs</span></div>
            <div class="model-tag"><span class="model-name">XC70</span><span class="model-count">18 ROs</span></div>
            <div class="model-tag"><span class="model-name">S80</span><span class="model-count">18 ROs</span></div>
            <div class="model-tag"><span class="model-name">V70</span><span class="model-count">16 ROs</span></div>
            <div class="model-tag"><span class="model-name">C70</span><span class="model-count">13 ROs</span></div>
            <div class="model-tag"><span class="model-name">S40</span><span class="model-count">13 ROs</span></div>
            <div class="model-tag"><span class="model-name">V90 CC</span><span class="model-count">11 ROs</span></div>
            <div class="model-tag"><span class="model-name">V60</span><span class="model-count">4 ROs</span></div>
            <div class="model-tag"><span class="model-name">C30</span><span class="model-count">3 ROs</span></div>
            <div class="model-tag"><span class="model-name">S90</span><span class="model-count">3 ROs</span></div>
            <div class="model-tag"><span class="model-name">V60 CC</span><span class="model-count">2 ROs</span></div>
            <div class="model-tag"><span class="model-name">C40 Recharge</span><span class="model-count">2 ROs</span></div>
        </div>
    </div>
</div>

<!-- Credentials -->
<div class="credentials-row">
    <div class="credential-card">
        <div class="credential-icon gold">&#9733;</div>
        <div class="credential-text">
            <h4>Founded by a Volvo Vista Champion</h4>
            <p>AutoHouse was built by a two-time winner of Volvo's worldwide technician challenge — ranked in the top 1% of factory-trained Volvo technicians globally.</p>
        </div>
    </div>
    <div class="credential-card">
        <div class="credential-icon green">&#10003;</div>
        <div class="credential-text">
            <h4>38% Repeat Customer Rate</h4>
            <p>284 of our 747 customers in 2025 came back for more than one visit. The work speaks for itself.</p>
        </div>
    </div>
</div>
<div class="credentials-row">
    <div class="credential-card">
        <div class="credential-icon blue">&#9670;</div>
        <div class="credential-text">
            <h4>Diagnostics-First Approach</h4>
            <p>Every repair starts with data. We test, measure, and verify before recommending work — not the other way around.</p>
        </div>
    </div>
    <div class="credential-card">
        <div class="credential-icon blue">&#9881;</div>
        <div class="credential-text">
            <h4>40 Makes Serviced</h4>
            <p>Volvo is our specialty, but we service everything on the road — European, Japanese, Korean, and domestic.</p>
        </div>
    </div>
</div>

<!-- Data transparency -->
<div class="stats-note">
    <p>Statistics based on 1,388 closed work orders from AutoHouse service records, January–December 2025.</p>
</div>
</main>
<script>
(function() {
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                var fills = entry.target.querySelectorAll('.bar-fill');
                fills.forEach(function(fill, i) {
                    var target = fill.getAttribute('data-width');
                    setTimeout(function() {
                        fill.style.width = target;
                    }, i * 80 + 100);
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    var el = document.getElementById('makeBars');
    if (el) observer.observe(el);
})();
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scheduler.php'; ?>
</body>
</html>
