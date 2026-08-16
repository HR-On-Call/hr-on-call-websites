<?php
require_once 'config.php';

$pageTitle = 'Practice On Call';
$pageDescription = 'The CRM built for HR consultancies. Manage your clients, track your time and get paid - all in one place. Complete practice management system designed specifically for HR consultants.';
$pageKeywords = 'HR CRM, HR consultancy software, practice management, client management, time tracking, invoicing, HR consultant tools, retainer management';
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-practice-on-call-navy.webp" alt="Practice On Call">
            </div>
            <p class="hero-tagline">The CRM built for HR consultancies</p>
            <p class="hero-subtitle">A complete, white-labelled practice management system designed specifically for HR consultants. Whether you&rsquo;re a solo consultant or running a team, it brings your clients, cases, time tracking, documents, communications and invoicing together in one system &ndash; so you can spend less time on admin and more time doing the work you&rsquo;re good at.</p>
            <div class="hero-buttons">
                <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
                <a href="#pricing" class="btn btn-outline">View Pricing</a>
                <a href="<?php echo SITE_URL; ?>/practice-on-call-features.php" class="btn btn-outline" target="_blank">Full Feature Breakdown</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Highlights -->
<section id="features" class="section bg-warm">
    <div class="container">
        <div class="section-header">
            <h2>Everything You Need to Run Your Consultancy</h2>
        </div>

        <div class="feature-category-grid">
            <div class="feature-category-card">
                <h3>Client &amp; Case Work</h3>
                <ul>
                    <li>Contacts, prospects &amp; pipeline</li>
                    <li>Proposals with tracked viewing</li>
                    <li>Retainers with six billing models</li>
                    <li>Cases with full audit history</li>
                    <li>Time tracking &amp; manual entry</li>
                </ul>
            </div>
            <div class="feature-category-card">
                <h3>Client Experience</h3>
                <ul>
                    <li>Branded client portal</li>
                    <li>E-signature agreements</li>
                    <li>Newsletters &amp; direct emails</li>
                    <li>Full white-label branding</li>
                    <li>Magic link login for clients</li>
                </ul>
            </div>
            <div class="feature-category-card">
                <h3>Operations</h3>
                <ul>
                    <li>Invoicing with Xero &amp; QuickBooks</li>
                    <li>Document management &amp; sharing</li>
                    <li>To-dos with team assignment</li>
                    <li>Dashboard &amp; reporting</li>
                    <li>Automated welcome documents</li>
                </ul>
            </div>
            <div class="feature-category-card">
                <h3>Growth &amp; Team</h3>
                <ul>
                    <li>Embeddable lead capture forms</li>
                    <li>Zapier, webhooks &amp; REST API</li>
                    <li>Team portal with assigned clients</li>
                    <li>Role-based access control</li>
                    <li>Custom domain for Team plan</li>
                </ul>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="<?php echo SITE_URL; ?>/practice-on-call-features.php" class="btn btn-outline" target="_blank">View Full Feature Breakdown &rarr;</a>
        </div>

        <div class="section-cta">
            <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            <a href="#comparison" class="btn btn-outline">View Comparison</a>
        </div>
    </div>
</section>

<!-- Dedicated Hosting Section -->
<section id="your-system" class="section bg-dark">
    <div class="container">
        <div class="section-header">
            <h2>Your System, Your Data</h2>
        </div>
        <div class="intro-text">
            <p>Practice On Call is installed on dedicated hosting just for your consultancy. Your data stays separate, you remain the data controller, and there's no sharing infrastructure with other businesses.</p>
        </div>

        <div class="features-grid features-grid-3">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-paint-brush"></i></div>
                <h3>Completely White-Labelled</h3>
                <p>Your clients will never know who built it.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-link"></i></div>
                <h3>Dedicated Link</h3>
                <p>Your own URL (e.g. yourname.practice-hub.co.uk).</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-book-open"></i></div>
                <h3>Support &amp; Guides</h3>
                <p>Walkthroughs and in-app help included.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-server"></i></div>
                <h3>Managed Hosting</h3>
                <p>SSL and daily backups included as standard.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-sync-alt"></i></div>
                <h3>All Updates Included</h3>
                <p>New features automatically rolled out to your system.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-headset"></i></div>
                <h3>Email Support</h3>
                <p>Help when you need it via email.</p>
            </div>
        </div>

        <div class="section-cta">
            <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            <a href="#comparison" class="btn btn-outline">View Comparison</a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="section bg-warm" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2>Simple, Transparent Pricing</h2>
            <p>Three plans to suit your consultancy, whether you're working solo or growing a team. All plans include contacts, proposals, retainers, time tracking, invoicing and your own dedicated system.</p>
        </div>

        <!-- Plan Summary Cards -->
        <div class="practice-pricing-cards">
            <div class="practice-pricing-card">
                <h3>Solo</h3>
                <div class="practice-pricing-price">&pound;39<span>/month</span></div>
                <p>Everything you need to manage clients and get paid. Ideal if you're a solo consultant who wants one system for contacts, time tracking and invoicing.</p>
                <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-outline">Register Interest</a>
            </div>
            <div class="practice-pricing-card featured">
                <h3>Standard</h3>
                <div class="practice-pricing-price">&pound;59<span>/month</span></div>
                <p>Everything in Solo, plus a client portal, digital agreements with e-signature and automated reminders. The right choice if you want your clients to have self-service access.</p>
                <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            </div>
            <div class="practice-pricing-card">
                <h3>Team</h3>
                <div class="practice-pricing-price">&pound;99<span>/month</span></div>
                <p class="practice-pricing-extra">+ &pound;15/extra user &middot; Includes 3 users</p>
                <p>Everything in Standard, plus team member accounts with assigned clients, team time tracking and role-based access. Built for consultancies with associates or employees.</p>
                <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-outline">Register Interest</a>
            </div>
        </div>

        <!-- Pricing Comparison Table -->
        <div id="comparison" class="practice-pricing-table-wrapper">
            <details class="comparison-toggle">
                <summary class="comparison-toggle-btn">View Full Plan Comparison <i class="fas fa-chevron-down"></i></summary>
            <table class="practice-pricing-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Solo</th>
                        <th>Standard</th>
                        <th>Team</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-section-header">
                        <td colspan="4">Contacts</td>
                    </tr>
                    <tr>
                        <td>Prospect pipeline (New, Contacted, Interested, Converted)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Client management</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Contact records with company details and job titles</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Product interest and subscription tracking</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Import existing clients in bulk</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Filter and search</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Proposals</td>
                    </tr>
                    <tr>
                        <td>Upload and send PDF proposals</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Value tracking</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>View tracking (see when and how often prospects view)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Accept, decline or request review</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Automated follow-up reminders</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Convert to client on accept</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Retainers</td>
                    </tr>
                    <tr>
                        <td>Six billing models (hours, credits, hybrid, unlimited, prepaid, PAYG)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Set included hours and overage rates</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Guaranteed response times per package</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Configurable rollover rules and banking</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Monthly period tracking (used, included, banked, remaining)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Monthly activity reports</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Time Tracking</td>
                    </tr>
                    <tr>
                        <td>Running timers or manual entry</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Configurable increments (1, 6, 10 or 15 min)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Multiple work types with rates</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Filter by client, team member and date range</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Export to Excel</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Cases &amp; To-Dos</td>
                    </tr>
                    <tr>
                        <td>Case management with status pipeline</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Case-level notes, documents and emails</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Upload .eml files with auto-extraction</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Full audit history on every case</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>To-dos with due dates and overdue alerts</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Assign to-dos to team members</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Documents</td>
                    </tr>
                    <tr>
                        <td>Document storage per client and case</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Drag and drop uploads</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Share documents with clients via portal</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Welcome documents sent with signed agreements</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Invoicing</td>
                    </tr>
                    <tr>
                        <td>Generate invoices from tracked time</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Xero integration</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>QuickBooks integration</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Payment status tracking</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Communications</td>
                    </tr>
                    <tr>
                        <td>Newsletters and direct emails</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Draft, schedule and send</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Target clients, prospects or custom lists</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Merge tags for personalisation</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Branded email templates</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>GDPR-compliant (sent individually per recipient)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Agreements</td>
                    </tr>
                    <tr>
                        <td>Upload agreement templates</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Send for e-signature</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Track signing status</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Automatic reminders for unsigned</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Lead Capture &amp; Integrations</td>
                    </tr>
                    <tr>
                        <td>Embeddable website form with customisable fields</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Auto-create prospects from form submissions</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Zapier and webhook support</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>REST API</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Client Portal</td>
                    </tr>
                    <tr>
                        <td>Magic link login (no passwords)</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>View retainer usage and hours remaining</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Access documents and correspondence</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>View invoices and payment history</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Upload documents to cases</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Admin &ldquo;view as client&rdquo;</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Team Portal</td>
                    </tr>
                    <tr>
                        <td>Team member accounts</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Assigned clients per team member</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Team time tracking</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Role-based access</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Admin &ldquo;view as team member&rdquo;</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Branding &amp; Customisation</td>
                    </tr>
                    <tr>
                        <td>Your logo and favicon</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Full colour scheme (sidebar, headers, links, accent, borders)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Custom buttons and status badges</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Branded email template with social links</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Hosting &amp; Security</td>
                    </tr>
                    <tr>
                        <td>Dedicated link (e.g. yourname.practice-hub.co.uk)</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Custom domain (e.g. portal.yourdomain.com)</td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-minus"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>SSL encryption</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Daily backups</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>UK hosting</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Automatic updates</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>

                    <tr class="table-section-header">
                        <td colspan="4">Support</td>
                    </tr>
                    <tr>
                        <td>Email support</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                    <tr>
                        <td>Guides and walkthroughs</td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                        <td><i class="fas fa-check"></i></td>
                    </tr>
                </tbody>
            </table>
            </details>
        </div>

        <div class="section-cta">
            <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
        </div>
    </div>
</section>

<!-- Security Section -->
<section id="security" class="section bg-dark">
    <div class="container">
        <div class="section-header">
            <h2>Security & Data Protection</h2>
            <p>Your clients trust you with sensitive information. Practice On Call is built with that responsibility in mind.</p>
        </div>

        <div class="features-grid features-grid-3">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-lock"></i></div>
                <h3>SSL Encryption</h3>
                <p>All data encrypted in transit.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-database"></i></div>
                <h3>Daily Backups</h3>
                <p>Your data is backed up every day.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-user-shield"></i></div>
                <h3>You're the Data Controller</h3>
                <p>Your consultancy retains full control of client data.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-user-lock"></i></div>
                <h3>Role-Based Access</h3>
                <p>Team members only see what they need to.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-history"></i></div>
                <h3>Audit Trail</h3>
                <p>Full history of changes and access.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>GDPR-Friendly</h3>
                <p>Designed to support your compliance obligations.</p>
            </div>
        </div>

        <div class="section-cta">
            <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            <a href="#comparison" class="btn btn-outline">View Comparison</a>
        </div>
    </div>
</section>

<!-- Coming Soon Section -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Coming Soon</h2>
            <p>Practice On Call is currently in development. Register your interest to be notified when pricing is announced and early access becomes available.</p>
            <div class="cta-buttons">
                <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            </div>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('a[href="#comparison"]').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        var details = document.querySelector('.comparison-toggle');
        if (details) {
            details.open = true;
            setTimeout(function() {
                document.getElementById('comparison').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 100);
        }
    });
});
if (window.location.hash === '#comparison') {
    var details = document.querySelector('.comparison-toggle');
    if (details) details.open = true;
}
</script>

<?php include 'includes/footer.php'; ?>
