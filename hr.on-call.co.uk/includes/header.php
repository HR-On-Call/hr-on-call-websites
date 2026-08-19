<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) — deferred past initial render to protect mobile LCP/TBT -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-LNC8JRKMXN');
      (function(){
        var loaded=false;
        function loadGtag(){ if(loaded) return; loaded=true; var s=document.createElement('script'); s.async=true; s.src='https://www.googletagmanager.com/gtag/js?id=G-LNC8JRKMXN'; document.head.appendChild(s); }
        if(document.readyState==='complete'){ setTimeout(loadGtag,2000); } else { window.addEventListener('load',function(){ setTimeout(loadGtag,2000); }); }
        ['scroll','mousemove','touchstart','keydown','click'].forEach(function(ev){ window.addEventListener(ev,loadGtag,{once:true,passive:true}); });
      })();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR consultants delivering employment law advice, workplace investigations, disciplinary and grievance support to businesses across the UK.'; ?>">
    <meta name="author" content="HR On Call Ltd">
    <meta name="keywords" content="<?php echo $pageKeywords ?? 'HR On Call, HR consultant UK, remote HR support, HR services UK, employment law advice, HR outsourcing, online HR consultant'; ?>">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="977QEBrLSr2eGaApUCXsL9b1OcT8nYuWxOdx_a1giZs" />
    <meta name="geo.region" content="GB">
    <meta name="geo.placename" content="United Kingdom">

    <meta property="og:title" content="<?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR consultants delivering employment law advice, workplace investigations, disciplinary and grievance support to businesses across the UK.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="HR On Call">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/national-og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_GB">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($isHomepage) && $isHomepage ? $pageTitle : (isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME); ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'HR On Call - Expert HR consultants delivering employment law advice, workplace investigations, disciplinary and grievance support to businesses across the UK.'; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/national-og.png">

    <!-- Favicon for all browsers including Google -->
    <link rel="icon" href="/assets/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/assets/images/favicon-64x64.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/assets/images/favicon-512x512.png">
    <link rel="apple-touch-icon" href="/assets/images/favicon-192x192.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#1A2E4A">
    <link rel="canonical" href="<?php echo SITE_URL . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">

    <link rel="stylesheet" href="/assets/css/style.css?v=24">
    <?php if (empty($rebuilt)): // legacy Vault-look reskin layer, only for pages not yet fully rebuilt ?>
    <link rel="stylesheet" href="/assets/css/theme-reskin.css?v=15">
    <?php endif; ?>
    <link rel="stylesheet" href="/assets/css/cookies.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>

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
        "url": "https://hr.on-call.co.uk"
    }
    </script>

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "HR On Call",
        "url": "https://hr.on-call.co.uk",
        "logo": "https://hr.on-call.co.uk/assets/images/favicon-512x512.png"
    }
    </script>

    <!-- Structured Data - ProfessionalService -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://hr.on-call.co.uk/#business",
        "name": "HR On Call",
        "image": "https://hr.on-call.co.uk/assets/images/grace-pariser-profile-v2.webp",
        "url": "https://hr.on-call.co.uk",
        "telephone": "01752 425526",
        "email": "grace@on-call.co.uk",
        "founder": {
            "@type": "Person",
            "name": "Grace Pariser",
            "jobTitle": "Founder & Lead HR Consultant",
            "url": "https://hr.on-call.co.uk/about"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "GB"
        },
        "description": "Expert HR consultants providing remote workplace investigations, disciplinary and grievance hearing support, employment document drafting, and ongoing HR advice to businesses across the UK.",
        "areaServed": {
            "@type": "Country",
            "name": "United Kingdom"
        },
        "priceRange": "$$",
        "knowsAbout": [
            "Workplace Investigations",
            "Disciplinary Hearings",
            "Grievance Procedures",
            "Employment Law",
            "Settlement Agreements",
            "Redundancy Consultation",
            "Employment Contracts",
            "ACAS Code of Practice",
            "HR Policy Drafting",
            "Employee Relations"
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "HR Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "HR Support Plans",
                        "url": "https://hr.on-call.co.uk/retainers"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Workplace Investigations",
                        "url": "https://hr.on-call.co.uk/workplace-issues"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Disciplinary & Grievance Hearings",
                        "url": "https://hr.on-call.co.uk/workplace-issues"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Documents & Drafting",
                        "url": "https://hr.on-call.co.uk/documents"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "HR Projects",
                        "url": "https://hr.on-call.co.uk/pay-as-you-go"
                    }
                }
            ]
        }
    }
    </script>

    <?php if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
    <?php foreach ($breadcrumbs as $i => $crumb): ?>
            {
                "@type": "ListItem",
                "position": <?php echo $i + 1; ?>,
                "name": "<?php echo $crumb['name']; ?>"<?php if (isset($crumb['url'])): ?>,
                "item": "<?php echo $crumb['url']; ?>"<?php endif; ?>
            }<?php echo ($i < count($breadcrumbs) - 1) ? ',' : ''; ?>

    <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>
</head>
<body class="<?php echo $bodyClass ?? ''; ?>">
    <header class="site-header">
        <div class="container">
            <nav class="main-nav">
                <div class="nav-brand">
                    <a href="<?php echo SITE_URL; ?>" style="position:relative;">
                        <img src="<?php echo SITE_URL; ?>/assets/images/hr-on-call-logo-light.webp" alt="<?php echo SITE_NAME; ?>" class="logo-image">
                        <span style="position:absolute; width:1px; height:1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap;">HR On Call</span>
                    </a>
                </div>

                <div class="nav-links">
                    <a href="<?php echo SITE_URL; ?>/about.php" class="nav-link">About</a>
                    <div class="nav-dropdown">
                        <button class="nav-link nav-dropdown-toggle">Services <i class="fas fa-chevron-down"></i></button>
                        <div class="nav-dropdown-menu">
                            <a href="<?php echo SITE_URL; ?>/retainers.php">HR Support Plans</a>
                            <a href="<?php echo SITE_URL; ?>/workplace-issues.php">Workplace Issues</a>
                            <a href="<?php echo SITE_URL; ?>/pay-as-you-go.php">HR Projects</a>
                            <a href="<?php echo SITE_URL; ?>/documents.php">Documents & Drafting</a>
                        </div>
                    </div>
                    <a href="<?php echo SITE_URL; ?>/blog.php" class="nav-link">Guides</a>
                    <a href="<?php echo SITE_URL; ?>/employment-rights-act" class="nav-link">Employment Rights Act</a>
                </div>

                <div class="nav-cta-group">
                    <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-cta-ghost">Contact</a>
                    <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-cta">Book now</a>
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
