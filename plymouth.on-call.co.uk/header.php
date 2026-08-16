<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR consultant in Plymouth offering employment law advice, HR outsourcing and employee relations support for businesses across Devon and Cornwall.'; ?>">
    <meta name="author" content="HR On Call Ltd">
    <meta name="keywords" content="<?php echo $pageKeywords ?? 'HR On Call, HR consultant Plymouth, Plymouth HR services, HR support Devon, HR Cornwall, employment law Plymouth, HR outsourcing'; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="GB-DEV">
    <meta name="geo.placename" content="Plymouth">

    <meta property="og:title" content="<?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR consultant in Plymouth offering employment law advice, HR outsourcing and employee relations support for businesses across Devon and Cornwall.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="HR On Call">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/plymouth-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR consultant in Plymouth offering employment law advice, HR outsourcing and employee relations support for businesses across Devon and Cornwall.'; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/plymouth-og.png">

    <!-- Favicon for all browsers including Google -->
    <link rel="icon" href="/Img/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/Img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/assets/images/favicon-512x512.png">
    <link rel="apple-touch-icon" href="/assets/images/favicon-192x192.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#1A2E4A">
    <link rel="canonical" href="<?php echo SITE_URL . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V7R7JP3J8T"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-V7R7JP3J8T');
    </script>

    <link rel="stylesheet" href="/assets/css/style.css?v=20260424g">
    <link rel="stylesheet" href="/assets/css/cookies.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php if (isset($additionalCSS)): ?>
        <?php foreach ($additionalCSS as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Structured Data - WebSite -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "HR On Call",
        "alternateName": ["HR On Call Ltd", "HR On Call Plymouth"],
        "url": "https://plymouth.on-call.co.uk/",
        "inLanguage": "en-GB",
        "publisher": {
            "@type": "Organization",
            "name": "HR On Call",
            "logo": {
                "@type": "ImageObject",
                "url": "https://plymouth.on-call.co.uk/assets/images/favicon-512x512.png"
            }
        }
    }
    </script>

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "HR On Call",
        "alternateName": "HR On Call Ltd",
        "legalName": "HR On Call Ltd",
        "url": "https://plymouth.on-call.co.uk/",
        "logo": {
            "@type": "ImageObject",
            "url": "https://plymouth.on-call.co.uk/assets/images/favicon-512x512.png",
            "width": 512,
            "height": 512
        },
        "image": "https://plymouth.on-call.co.uk/assets/images/favicon-512x512.png"
    }
    </script>

    <!-- Structured Data - LocalBusiness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "HR On Call",
        "image": "<?php echo SITE_URL; ?>/assets/images/grace-pariser-headshot.jpg",
        "url": "<?php echo SITE_URL; ?>",
        "telephone": "<?php echo CONTACT_PHONE; ?>",
        "email": "<?php echo CONTACT_EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3 Pethill Close",
            "addressLocality": "Plymouth",
            "addressRegion": "Devon",
            "postalCode": "PL6 8NL",
            "addressCountry": "GB"
        },
        "description": "Expert HR consultant in Plymouth providing employment law advice, HR outsourcing and employee relations support for businesses across Devon and Cornwall.",
        "areaServed": [
            {"@type": "City", "name": "Plymouth"},
            {"@type": "AdministrativeArea", "name": "Devon"},
            {"@type": "AdministrativeArea", "name": "Cornwall"}
        ],
        "priceRange": "££",
        "founder": {
            "@type": "Person",
            "name": "Grace Pariser",
            "jobTitle": "Founder & HR Consultant",
            "description": "CIPD Level 7 qualified HR consultant specialising in employment law, workplace investigations and employee relations.",
            "knowsAbout": ["Employment Law", "HR Outsourcing", "Employee Relations", "Workplace Investigations", "ACAS Conciliation"]
        }
    }
    </script>
</head>
<body class="<?php echo $bodyClass ?? ''; ?>">
    <header class="site-header">
        <div class="container">
            <nav class="main-nav">
                <div class="nav-brand">
                    <a href="<?php echo SITE_URL; ?>">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-light.webp" alt="<?php echo SITE_NAME; ?>" class="logo-image">
                    </a>
                </div>

                <div class="nav-links">
                    <a href="<?php echo SITE_URL; ?>/" class="nav-link">Home</a>
                    <a href="<?php echo SITE_URL; ?>/about.php" class="nav-link">About</a>
                    <a href="<?php echo SITE_URL; ?>/services.php" class="nav-link">Services</a>
                    <a href="<?php echo SITE_URL; ?>/blog/" class="nav-link">Blog</a>
                    <a href="<?php echo SITE_URL; ?>/faq.php" class="nav-link">FAQ</a>
                    <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-link">Contact</a>
                </div>

                <button class="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <main class="main-content">
