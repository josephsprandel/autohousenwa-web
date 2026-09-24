<?php
$services = [
    ['id'=>1,'name'=>'Manufacturer-Spec Oil Service','description'=>'Oil and filter service performed to manufacturer specifications using the correct oil grade and quality components - no shortcuts, no guesswork.','price'=>'$100–$150','duration'=>'1 hour'],
    ['id'=>2,'name'=>'Brake System Service','description'=>'Comprehensive brake inspection and repair focused on safety, performance, and long-term reliability - not just pad replacement.','price'=>'$450–$700 per axle','duration'=>'2 hours'],
    ['id'=>3,'name'=>'Advanced Engine Diagnostics','description'=>'Data-driven testing and computer diagnostics to accurately identify engine and drivability issues before repairs begin.','price'=>'$160–$320','duration'=>'1-2 hours'],
    ['id'=>4,'name'=>'Tire Rotation & Brake Wear Inspection','description'=>'Tire rotation combined with a brake wear inspection to promote even tire life and identify issues early.','price'=>'$40–$50','duration'=>'30 minutes'],
    ['id'=>5,'name'=>'Battery & Charging System Service','description'=>'Battery and charging system testing, replacement if needed, and terminal service to prevent starting and electrical issues.','price'=>'$100 testing · $200–$350 replaced','duration'=>'30 minutes – 1 hour'],
    ['id'=>6,'name'=>'A/C System Diagnostics & Repair','description'=>'System-level diagnosis and repair of automotive air conditioning systems for reliable cooling and proper operation.','price'=>'$160 to diagnose · about $350 for R‑1234yf service','duration'=>'1-2 hours'],
    ['id'=>7,'name'=>'Pre-Purchase & Vehicle Inspections','description'=>'Thorough vehicle inspections designed to uncover existing or developing issues before they become expensive repairs.','price'=>'$160–$240','duration'=>'1–1.5 hours'],
];
function renderService($s) {
    echo '<div class="service-listing">';
    echo '<h2>' . htmlspecialchars($s['name']) . '</h2>';
    echo '<p>' . htmlspecialchars($s['description']) . '</p>';
    // A rough idea of cost to avoid sticker shock at pickup — not a quote. Ranges come from
    // AutoHouse's actual invoices (Sept 2026 review); A/C per Bailey's R-1234yf average.
    echo '<p><strong>Typical range:</strong> ' . htmlspecialchars($s['price']) . '</p>';
    echo '<p><strong>Estimated Time:</strong> ' . htmlspecialchars($s['duration']) . '</p>';
    echo '<a class="view-details-button" href="service_details.php?id=' . $s['id'] . '">See What\'s Included</a>';
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AutoHouse Automotive Repair &amp; Diagnostics - Fayetteville, AR</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz@0,6..72;1,6..72&display=swap" rel="stylesheet">
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TQRKRB8V');</script>
<style>
body { font-family: "Newsreader", serif; margin: 0; background-color: #606060; color: #333; }
header { background-color: #003366; color: #fff; padding: 20px; display: flex; gap: 20px; align-items: center; justify-content: center; }
header img { max-height: 90px; background: #fff; padding: 5px; }
nav { background-color: #606060; padding: 10px 0; }
nav ul { list-style: none; display: flex; justify-content: center; gap: 20px; padding: 0; margin: 0; }
nav a { color: #f5f5f5; text-decoration: none; font-weight: 600; font-size: 1.4em; }
.trust-band { background: #f0f0f0; max-width: 1100px; margin: 20px auto; padding: 16px 24px; border-radius: 8px; }
.trust-inner { display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; }
.stars { display: flex; gap: 4px; }
.stars span { width: 16px; height: 16px; background-color: #f5b301; display: inline-block; clip-path: polygon(50% 0%,61% 35%,98% 35%,68% 57%,79% 91%,50% 70%,21% 91%,32% 57%,2% 35%,39% 35%); }
.trust-actions a { background: #003366; color: #fff; padding: 8px 14px; border-radius: 5px; text-decoration: none; font-weight: 600; margin-left: 10px; }
#service-listings { display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; padding: 20px; background-image: url("/_img/bg_jfxn0ejfxn0ejfxn.jpg"); background-size: cover; background-attachment: fixed; }
.service-listing { width: 350px; background: rgba(245,245,245,0.95); padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.15); display: flex; flex-direction: column; }
.service-listing h2 { color: #003366; margin-top: 0; }
.view-details-button { margin-top: auto; background-color: #003366; color: #fff; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: 600; }
footer { background-color: #003366; color: #fff; text-align: center; padding: 20px; }
footer a { color: #f5f5f5; text-decoration: none; margin: 0 15px; }
footer a:hover { text-decoration: underline; }
.footer-links { padding: 15px 0; border-top: 1px solid rgba(255,255,255,0.2); margin-bottom: 10px; }
.footer-divider { color: rgba(255,255,255,0.4); margin: 0 10px; }
@media (max-width: 768px) { nav ul { flex-direction: column; } .trust-inner { text-align: center; flex-direction: column; } }

/* ── SMS CONSENT MODAL ── */
</style>

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
  "knowsAbout": ["Volvo vehicle repair and maintenance","Volvo XC90 service","Volvo XC60 service","Volvo S60 service","Volvo XC40 service","Volvo V70 service","Volvo S80 service","Volvo V90 Cross Country service","Volvo XC70 service","Volvo C70 service","Volvo diagnostics","European vehicle repair","BMW repair","Audi repair","Volkswagen repair","Mercedes-Benz repair","Mini Cooper repair","Porsche repair","Subaru repair","Automotive computer diagnostics","Advanced engine diagnostics","Brake system service","A/C system diagnostics"],
  "makesOffer": [
    {"@type":"Offer","itemOffered":{"@type":"Service","name":"Volvo Specialist Service","description":"Factory-level diagnostics and repair for all Volvo models including XC90, XC60, S60, XC40, V70, S80, V90 Cross Country, and newer electric/hybrid platforms."}},
    {"@type":"Offer","itemOffered":{"@type":"Service","name":"European Vehicle Repair","description":"Diagnostics and repair for BMW, Audi, Volkswagen, Mercedes-Benz, Mini, Porsche, and other European makes. Over 51% of all work orders are European vehicles."}},
    {"@type":"Offer","itemOffered":{"@type":"Service","name":"Full-Service Auto Repair","description":"Complete automotive diagnostics, maintenance, and repair for all 40+ makes serviced including Japanese, Korean, and domestic vehicles."}}
  ],
  "award": ["Founded by a Two-Time Volvo Vista Automotive Technicians Challenge Champion","Founded by a Technician Ranked in the Top 1% of Factory-Trained Volvo Technicians Worldwide"],
  "aggregateRating": {"@type":"AggregateRating","ratingValue":"4.9","bestRating":"5","ratingCount":"150","reviewCount":"150"},
  "address": {"@type":"PostalAddress","streetAddress":"432 N Main Ave","addressLocality":"Fayetteville","addressRegion":"AR","postalCode":"72701","addressCountry":"US"},
  "geo": {"@type":"GeoCoordinates","latitude":36.0525,"longitude":-94.1718},
  "areaServed": [
    {"@type":"City","name":"Fayetteville","containedInPlace":{"@type":"State","name":"Arkansas"}},
    {"@type":"City","name":"Springdale","containedInPlace":{"@type":"State","name":"Arkansas"}},
    {"@type":"City","name":"Rogers","containedInPlace":{"@type":"State","name":"Arkansas"}},
    {"@type":"City","name":"Bentonville","containedInPlace":{"@type":"State","name":"Arkansas"}},
    {"@type":"City","name":"Johnson","containedInPlace":{"@type":"State","name":"Arkansas"}},
    {"@type":"Place","name":"Northwest Arkansas"}
  ],
  "openingHoursSpecification": [{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],"opens":"08:00","closes":"18:00"}],
  "numberOfEmployees": {"@type":"QuantitativeValue","minValue":4,"maxValue":6},
  "hasCredential": [{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Founded by a Volvo Vista Automotive Technicians Challenge Winner — Top 1% Worldwide"}],
  "sameAs": ["https://www.facebook.com/AutoHouseNWA","https://www.yelp.com/biz/autohouse-fayetteville","https://www.linkedin.com/company/autohouse","https://www.carfax.com/Reviews-AutoHouse-of-Northwest-Arkansas-Fayetteville-AR_HPNKUAL001"]
}
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1006237660">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1006237660');
</script>
</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQRKRB8V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<header>
    <img src="/_img/autohouse2024.png" alt="AutoHouse Automotive Logo">
    <div>
        <h1>AutoHouse Automotive</h1>
        <p>Precision diagnostics &amp; repair for modern vehicles</p>
    </div>
</header>

<?php $current_page = 'home'; include __DIR__ . '/includes/nav.php'; ?>

<section class="trust-band">
    <div class="trust-inner">
        <div>
            <div class="stars">
                <span></span><span></span><span></span><span></span><span></span>
            </div>
            <strong>4.9+ Rated Local Shop</strong><br>
            Trusted by Arkansas drivers for diagnostics &amp; repair
        </div>
        <div class="trust-actions">
            <a href="#" onclick="showScheduler(); return false;">Schedule Online</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </div>
</section>

<main>
<section id="service-listings">
<?php foreach ($services as $s) renderService($s); ?>
</section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>


<?php include __DIR__ . '/includes/scheduler.php'; ?>
</body>
</html>