<?php
// service_details.php

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Defaults (so the page never fatals)
$title = 'Service Details';
$content = 'Nothing selected.';
$image = 'diagnostics.jpg';

switch ($id) {
    case 1:
        $title = 'Manufacturer-Spec Oil Service';
        $content = "Oil and filter service performed to manufacturer specifications using the correct oil grade and quality components. This service is designed for long-term engine protection — not quick-lube shortcuts.\n\nWhat’s included:\n• Verify oil specification and capacity\n• Replace oil filter and inspect for leaks\n• Check key fluid levels and under-hood condition\n• Reset maintenance reminder (when applicable)";
        $image = 'oil_change.jpg';
        break;

    case 2:
        $title = 'Brake System Service';
        $content = "Brake work should be based on inspection and measurements — not guessing. We evaluate wear, braking performance, and hydraulic condition before recommending parts.\n\nWhat’s included:\n• Measure pad and rotor wear\n• Inspect calipers, hardware, and brake hoses\n• Check brake fluid condition\n• Recommend repairs based on safety and reliability";
        $image = 'brakes.jpg';
        break;

    case 3:
        $title = 'Advanced Engine Diagnostics';
        $content = "Modern vehicles require data-driven diagnostics. We use scan data, testing, and step-by-step verification to identify the cause of drivability issues before repairs begin.\n\nWhat’s included:\n• Scan for codes and review live data\n• Guided testing to confirm root cause\n• Clear explanation of findings and next steps\n• Repair recommendations based on test results";
        $image = 'diagnostics.jpg';
        break;

    case 4:
        $title = 'Tire Rotation & Brake Wear Inspection';
        $content = "Tire rotation helps maximize tire life and improve ride quality. We rotate tires correctly and include a brake wear inspection so small issues don’t turn into expensive repairs.\n\nWhat’s included:\n• Rotate tires for even wear\n• Inspect brake pad wear and rotor condition\n• Check tire condition and inflation\n• Note alignment or suspension concerns when observed";
        $image = 'tire_rotation.jpg';
        break;

    case 5:
        $title = 'Battery & Charging System Service';
        $content = "A weak battery is often a symptom, not the whole story. We test the battery and charging system together so you don’t end up replacing parts unnecessarily.\n\nWhat’s included:\n• Battery test (capacity/health)\n• Charging system output check\n• Terminal and connection inspection\n• Replacement recommendations based on test results";
        $image = 'battery.jpg';
        break;

    case 6:
        $title = 'A/C System Diagnostics & Repair';
        $content = "A/C problems can come from leaks, pressure control issues, electrical faults, or component failure. We diagnose first, then recommend the correct repair.\n\nWhat’s included:\n• System performance evaluation\n• Leak and pressure diagnostics as needed\n• Electrical checks for controls and fans\n• Repair options explained clearly before work begins";
        $image = 'ac.jpg';
        break;

    case 7:
        $title = 'Pre-Purchase & Vehicle Inspections';
        $content = "A thorough inspection can prevent expensive surprises. Whether you’re buying a used vehicle or just want peace of mind, we provide a clear report and prioritized recommendations.\n\nWhat’s included:\n• Visual inspection of major systems\n• Brake, tire, fluid, and leak checks\n• Notes on safety and immediate concerns\n• Clear summary of findings and next steps";
        $image = 'inspection.jpg';
        break;

    default:
        // Keep defaults
        break;
}

// Simple helper for safe HTML output
function e($str) {
    return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Turn the content into paragraphs + bullet list
function renderContent($text) {
    $text = trim($text);
    if ($text === '') return '';

    $lines = preg_split("/\r\n|\n|\r/", $text);
    $html = '';
    $inList = false;

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '') {
            if ($inList) {
                $html .= "</ul>";
                $inList = false;
            }
            continue;
        }

        // Bullets start with "•"
        if (mb_substr($line, 0, 1, 'UTF-8') === '•') {
            if (!$inList) {
                $html .= "<ul class=\"service-bullets\">";
                $inList = true;
            }
            $item = trim(mb_substr($line, 1, null, 'UTF-8'));
            $html .= "<li>" . e($item) . "</li>";
        } else {
            if ($inList) {
                $html .= "</ul>";
                $inList = false;
            }
            $html .= "<p>" . e($line) . "</p>";
        }
    }

    if ($inList) $html .= "</ul>";
    return $html;
}
?>
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
    <!-- End Google Tag Manager -->

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
            color: white;
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
        header h1 {
            margin: 0;
            font-size: 2.2em;
        }
        header p {
            margin: 0;
            opacity: 0.9;
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
            padding: 20px;
            background-image: url("/_img/bg_jfxn0ejfxn0ejfxn.jpg");
            background-size: cover;
            background-attachment: fixed;
            min-height: 70vh;
        }

        .detail-card {
            max-width: 960px;
            margin: 20px auto;
            background: rgba(245,245,245,0.95);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.18);
            overflow: hidden;
        }

        .detail-inner {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 0;
        }

        .detail-content {
            padding: 28px;
        }

        .detail-content h2 {
            margin-top: 0;
            color: #003366;
            font-size: 2.0em;
        }

        .service-bullets {
            margin: 12px 0 0 18px;
            padding: 0;
        }
        .service-bullets li {
            margin: 6px 0;
        }

        .detail-image {
            padding: 28px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }
        .detail-image img {
            width: 100%;
            max-width: 360px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .detail-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            padding: 0 28px 28px 28px;
        }

        .btn {
            display: inline-block;
            background-color: #003366;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
        }
        .btn.secondary {
            background-color: #4b4b4b;
        }

        footer {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer a {
            color: #f5f5f5;
            text-decoration: none;
        }

        @media (max-width: 900px) {
            .detail-inner {
                grid-template-columns: 1fr;
            }
            .detail-image {
                padding-top: 0;
            }
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQRKRB8V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <img src="/_img/autohouse2024.png" alt="AutoHouse Automotive Logo">
    <div>
        <h1>AutoHouse Automotive</h1>
        <p>Precision diagnostics & repair for modern vehicles</p>
    </div>
</header>

<?php $current_page = 'services'; include __DIR__ . '/includes/nav.php'; ?>

<main>
    <div class="detail-card">
        <div class="detail-inner">
            <div class="detail-content">
                <h2><?php echo e($title); ?></h2>
                <?php echo renderContent($content); ?>
            </div>
            <div class="detail-image">
                <img src="/_img/<?php echo e($image); ?>" alt="<?php echo e($title); ?>">
            </div>
        </div>

        <div class="detail-actions">
            <a class="btn" href="#" onclick="showScheduler(); return false;">Schedule Online</a>
            <a class="btn secondary" href="http://autohousenwa.com">Home</a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<?php include __DIR__ . '/includes/scheduler.php'; ?>
</body>
</html>
