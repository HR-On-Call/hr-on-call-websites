<?php
require_once 'config.php';

$pageTitle = 'HR Consultant Cornwall | Employment Law & HR Support for Cornish Businesses';
$pageDescription = 'Expert HR consultancy for businesses across Cornwall. Employment law advice, contracts, disciplinaries, investigations and outsourced HR support in Truro, St Austell, Newquay and beyond.';
$pageKeywords = 'HR consultant Cornwall, HR support Cornwall, employment law Cornwall, HR services Truro, HR consultant St Austell, outsourced HR Cornwall';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

<!-- Hero Section -->
<section class="oc-hero">
    <div class="oc-wrap">
        <span class="oc-eyebrow"><span></span>HR Consultant Cornwall</span>
        <h1>HR Consultant for Cornwall Businesses</h1>
        <p>Practical, commercial HR and employment law support for businesses across Cornwall, from contracts and policies to disciplinaries, investigations and restructures. Local expertise, on the phone or on-site when you need it.</p>
        <div class="oc-actions">
            <a href="contact.php" class="oc-btn oc-pink">Book a Discovery Call</a>
            <a href="services.php" class="oc-btn oc-ghost">View Services</a>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-split oc-split-tight">
            <div style="text-align:center;">
                <img src="/assets/images/grace-pariser-headshot.jpg" width="400" height="400" alt="Grace Pariser, HR Consultant for Cornwall" loading="lazy" style="width:300px; height:300px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(16,30,51,.18); display:inline-block;">
                <div style="font-size:18px; font-weight:700; color:var(--navy); margin-top:16px;">Grace Pariser</div>
                <div style="font-size:14px; color:var(--soft);">Founder &amp; HR Consultant</div>
            </div>
            <div>
                <span class="oc-eyebrow"><span></span>About</span>
                <h2 style="font-size:clamp(28px,3.4vw,40px);margin:14px 0 18px;">Local HR Expertise, Right Across Cornwall</h2>
                <div class="oc-prose" style="margin:0;">
                    <p>HR On Call provides expert HR and employment law support to small and medium businesses throughout Cornwall. Led by Grace Pariser, who holds an MA in Human Resource Management (Distinction) and is CIPD Level 7 qualified, we combine technical employment law knowledge with practical, commercial judgement.</p>
                    <p>From the Tamar Valley across to the far west, and through Cornwall's many seasonal and tourism-led employers, you get senior HR support without the cost of a full-time hire. Based just over the border in Plymouth, we are well placed to support businesses across east and central Cornwall in person.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Areas Covered -->
<section class="oc-sec oc-cream">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Areas Covered</span>
            <h2>Where We Work in Cornwall</h2>
            <p>We support employers across the county, including:</p>
        </div>
        <div class="oc-grid4">
            <div class="oc-card">
                <h3>East Cornwall</h3>
                <p>Saltash, Liskeard, Torpoint, Callington and Launceston.</p>
            </div>
            <div class="oc-card">
                <h3>Central Cornwall</h3>
                <p>Truro, Bodmin, St Austell and Newquay.</p>
            </div>
            <div class="oc-card">
                <h3>West Cornwall</h3>
                <p>Camborne, Redruth, Falmouth, Penzance and Helston.</p>
            </div>
            <div class="oc-card">
                <h3>North Cornwall</h3>
                <p>Wadebridge, Padstow, Bude and the north coast.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="oc-sec oc-navy">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Services</span>
            <h2>How We Help Cornwall Employers</h2>
        </div>
        <div class="oc-grid3">
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
                <h3>Contracts &amp; Policies</h3>
                <p>Employment contracts, staff handbooks and policies that keep you compliant and consistent.</p>
            </div>
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-gavel"></i></div>
                <h3>Disciplinaries &amp; Grievances</h3>
                <p>Guidance and hands-on support through <a href="/blog/disciplinary-procedure-uk-employers-guide.php">disciplinaries</a> and <a href="/blog/how-to-handle-employee-grievance-uk.php">grievances</a>.</p>
            </div>
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-search"></i></div>
                <h3>Investigations</h3>
                <p>Independent, fair workplace investigations that stand up to scrutiny.</p>
            </div>
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-users"></i></div>
                <h3>Restructures &amp; Redundancy</h3>
                <p>Fair, legally sound <a href="/blog/redundancy-process-uk-employers-guide.php">redundancy and restructure</a> processes.</p>
            </div>
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-calendar-check"></i></div>
                <h3>Monthly HR Support</h3>
                <p>Ongoing <a href="/retainers.php">HR support plans</a> from £75 a month, with someone to call when you need them.</p>
            </div>
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
                <h3>Employment Law Advice</h3>
                <p>Clear, commercial advice on employment law and compliance, whenever a question comes up.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="oc-sec oc-cta">
    <div class="oc-wrap">
        <h2>Need HR Support in Cornwall?</h2>
        <p>Wherever you are in the county, we are here to help. Book a discovery call to discuss what your business needs. You can also read more about <a href="/blog/hr-support-plymouth-small-business.php" style="color:var(--gold);font-weight:600;">HR support for South West businesses</a> or explore <a href="/hr-consultant-devon.php" style="color:var(--gold);font-weight:600;">HR support across Devon</a>.</p>
        <div class="oc-actions" style="justify-content:center;">
            <a href="/contact.php" class="oc-btn oc-pink">Get in Touch</a>
        </div>
    </div>
</section>

</div>

<!-- Service Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "HR Consultancy in Cornwall",
    "provider": {
        "@type": "LocalBusiness",
        "name": "HR On Call",
        "url": "https://plymouth.on-call.co.uk/",
        "telephone": "<?php echo CONTACT_PHONE; ?>",
        "email": "<?php echo CONTACT_EMAIL; ?>"
    },
    "serviceType": "HR Consultancy and Employment Law Support",
    "areaServed": [
        {"@type": "AdministrativeArea", "name": "Cornwall"},
        {"@type": "City", "name": "Truro"},
        {"@type": "City", "name": "St Austell"},
        {"@type": "City", "name": "Newquay"},
        {"@type": "City", "name": "Saltash"},
        {"@type": "City", "name": "Penzance"}
    ],
    "description": "Expert HR and employment law support for businesses across Cornwall, including Truro, St Austell, Newquay, Saltash and Penzance.",
    "mainEntityOfPage": "https://plymouth.on-call.co.uk/hr-consultant-cornwall.php"
}
</script>

<?php include 'includes/footer.php'; ?>
