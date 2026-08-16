<?php
require_once 'config.php';

$pageTitle = 'HR Services Plymouth | Support Plans, Documents, Workplace Issues & Projects';
$pageDescription = 'HR services for Plymouth, Devon and Cornwall businesses: monthly HR support plans from £75 + VAT, fixed-fee employment documents, workplace investigations and hearings, and project-based HR support.';
$pageKeywords = 'HR services Plymouth, HR support Devon, HR consultant Cornwall, HR retainer Plymouth, employment contracts Plymouth, workplace investigation Plymouth, HR projects Southwest';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

    <!-- Hero Section -->
    <section class="oc-hero">
        <div class="oc-wrap">
            <span class="oc-eyebrow"><span></span>HR Services</span>
            <h1>HR Services for Plymouth, Devon &amp; Cornwall Businesses</h1>
            <p>Professional, flexible HR support from a CIPD qualified consultant – choose the help that fits</p>
            <div class="oc-actions">
                <a href="/retainers.php" class="oc-btn oc-pink">Support Plans</a>
                <a href="/documents.php" class="oc-btn oc-ghost">Documents</a>
                <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="oc-sec">
        <div class="oc-wrap">
            <div class="oc-split">
                <img src="/assets/images/grace-pariser-working-about.png" alt="Grace Pariser HR Consultant">
                <div>
                    <span class="oc-eyebrow"><span></span>About</span>
                    <div class="oc-head" style="margin-top:14px;">
                        <h2>Comprehensive HR Support for the Southwest</h2>
                    </div>
                    <p style="font-size:17px;color:var(--muted);margin:18px 0 0;">We provide commercial, practical HR support to businesses across Plymouth, Devon and Cornwall, combining technical expertise with a business-focused approach.</p>
                    <p style="font-size:17px;color:var(--muted);margin:14px 0 0;">Whether you want ongoing support on a monthly plan, a one-off document drafted properly, an independent pair of hands for a tricky workplace issue, or help delivering a bigger HR project, there's an option below to suit.</p>
                    <div class="oc-actions">
                        <a href="contact.php" class="oc-btn oc-pink">Discuss Your HR Needs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Cards -->
    <section class="oc-sec oc-cream">
        <div class="oc-wrap">
            <div class="oc-head">
                <span class="oc-eyebrow"><span></span>How We Can Help</span>
                <h2>How We Can Help</h2>
                <p>Four ways to work with us – pick what fits your business</p>
            </div>

            <div class="oc-grid4">
                <a href="/retainers.php" class="oc-card">
                    <div class="oc-ico"><i class="fas fa-calendar-check"></i></div>
                    <h3>HR Support Plans</h3>
                    <p>Ongoing HR on a fixed monthly plan – the HR Library, expert advice time, the Handbook Portal and an annual audit. From £75/month + VAT.</p>
                    <span class="oc-link">View plans <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/documents.php" class="oc-card">
                    <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
                    <h3>Documents &amp; Drafting</h3>
                    <p>Bespoke contracts, handbooks, ACAS support and settlement agreements – fixed fees from £500 + VAT, plus the money-saving HR Bundle.</p>
                    <span class="oc-link">View documents <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/workplace-issues.php" class="oc-card">
                    <div class="oc-ico"><i class="fas fa-gavel"></i></div>
                    <h3>Workplace Issues</h3>
                    <p>Independent investigations, disciplinary and grievance hearings and appeals. Advice from £100/hour, or we run it for you from £120/hour + VAT.</p>
                    <span class="oc-link">View support <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/pay-as-you-go.php" class="oc-card">
                    <div class="oc-ico"><i class="fas fa-users"></i></div>
                    <h3>HR Projects</h3>
                    <p>Restructures, TUPE transfers, HR audits, recruitment and HR set-up – from £100 per hour + VAT or a fixed project fee.</p>
                    <span class="oc-link">View projects <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="oc-sec why-choose">
        <div class="oc-wrap">
            <div class="oc-head">
                <span class="oc-eyebrow"><span></span>Why Us</span>
                <h2>Why Choose HR On Call?</h2>
            </div>

            <div class="oc-grid4">
                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-graduation-cap"></i></div>
                    <h3>Expert Knowledge</h3>
                    <p>Specialist HR consultant with deep understanding of UK employment law and best practices, supported by a team of highly qualified and experienced associates.</p>
                </div>

                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Flexible Delivery</h3>
                    <p>Remote or on-site support to suit your needs - whether you prefer virtual meetings or face-to-face contact across Plymouth, Devon and Cornwall.</p>
                </div>

                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h3>Scalable Solutions</h3>
                    <p>From start-ups to established businesses, our services grow with your team.</p>
                </div>

                <div class="oc-card">
                    <div class="oc-ico"><i class="fas fa-bolt"></i></div>
                    <h3>Quick Response</h3>
                    <p>Priority support means you get answers fast when HR issues arise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="oc-sec oc-cta">
        <div class="oc-wrap">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today to discuss your HR needs and find the right option for your business.</p>
            <div class="oc-actions" style="justify-content:center;">
                <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today</a>
            </div>
        </div>
    </section>

</div>

<!-- Service Catalogue Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "HR Services in Plymouth, Devon and Cornwall",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "HR Support Plans", "url": "https://plymouth.on-call.co.uk/retainers.php"},
        {"@type": "ListItem", "position": 2, "name": "Documents & Drafting", "url": "https://plymouth.on-call.co.uk/documents.php"},
        {"@type": "ListItem", "position": 3, "name": "Workplace Issues", "url": "https://plymouth.on-call.co.uk/workplace-issues.php"},
        {"@type": "ListItem", "position": 4, "name": "HR Projects", "url": "https://plymouth.on-call.co.uk/pay-as-you-go.php"}
    ]
}
</script>

<?php include 'includes/footer.php'; ?>
