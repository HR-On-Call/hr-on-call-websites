<?php
require_once 'config.php';

$pageTitle = 'Practice On Call – Features';
$pageDescription = 'Full feature breakdown of Practice On Call, the CRM built for HR consultancies. Contact management, proposals, retainers, case management, time tracking, client portal, agreements, invoicing and more.';
$pageKeywords = 'HR CRM features, HR consultancy software, practice management features, client portal, time tracking, retainer management, case management';

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo-practice-on-call-navy.webp" alt="Practice On Call">
            </div>
            <p class="hero-tagline">Features</p>
            <p class="hero-subtitle">Everything included in Practice On Call &ndash; the complete practice management system for HR consultancies.</p>
            <div class="hero-buttons">
                <a href="<?php echo SITE_URL; ?>/practice-on-call.php" class="btn btn-outline">Back to Overview</a>
                <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            </div>
        </div>
    </div>
</section>

<!-- Features List -->
<section class="section bg-warm">
    <div class="container">
        <div class="features-list">

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-address-book"></i>
                    <h3>Contact Management</h3>
                </div>
                <p class="features-list-desc">Keep prospects and clients organised in one place. Track the full journey from initial enquiry through to ongoing retainer client.</p>
                <ul class="features-list-points">
                    <li>Prospect pipeline with status tracking (New, Contacted, Interested, Converted)</li>
                    <li>Full contact records with company details and job titles</li>
                    <li>Product interest and subscription tracking</li>
                    <li>Filter and search across your contact base</li>
                    <li>Prospects auto-created from lead capture forms</li>
                    <li>Import existing clients in bulk</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-file-signature"></i>
                    <h3>Proposals</h3>
                </div>
                <p class="features-list-desc">Send professional proposals and track responses without the back-and-forth.</p>
                <ul class="features-list-points">
                    <li>Upload PDF proposals with value tracking</li>
                    <li>Send with secure viewing link</li>
                    <li>See when prospects view your proposal and how many times</li>
                    <li>Accept, decline or request review options</li>
                    <li>Automated follow-up reminders</li>
                    <li>Accepted proposals convert to clients automatically</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-calendar-check"></i>
                    <h3>Retainer Management</h3>
                </div>
                <p class="features-list-desc">Six flexible billing models to match however you work with your clients.</p>
                <ul class="features-list-points">
                    <li>Hours-based, credit-based, hybrid, unlimited, annual prepaid or pay-as-you-go</li>
                    <li>Set included hours, overage rates and guaranteed response times per package</li>
                    <li>Configurable rollover rules and banking</li>
                    <li>Monthly period tracking with used, included, banked and remaining</li>
                    <li>Close periods and generate monthly activity reports</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-briefcase"></i>
                    <h3>Case Management</h3>
                </div>
                <p class="features-list-desc">Manage every piece of client work from start to finish.</p>
                <ul class="features-list-points">
                    <li>Create cases per client with status tracking</li>
                    <li>Assign team members with lead designation</li>
                    <li>Case-level notes, documents, emails and to-dos</li>
                    <li>Upload .eml files with auto-extraction of subject and date</li>
                    <li>Share documents with clients and send notifications</li>
                    <li>Full audit history on every case</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-stopwatch"></i>
                    <h3>Time Tracking</h3>
                </div>
                <p class="features-list-desc">Capture every billable minute with flexible time recording.</p>
                <ul class="features-list-points">
                    <li>Track time against clients and cases</li>
                    <li>Live running timer or manual entry</li>
                    <li>Configurable increments (1, 6, 10 or 15 minutes)</li>
                    <li>Filter by client, team member and date range</li>
                    <li>Export time entries to Excel</li>
                    <li>Team members can log their own time</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-user-circle"></i>
                    <h3>Client Portal</h3>
                    <span class="features-list-badge">Standard &amp; Team</span>
                </div>
                <p class="features-list-desc">Give your clients self-service access to their account.</p>
                <ul class="features-list-points">
                    <li>Magic link login &ndash; no passwords needed</li>
                    <li>View retainer usage and hours remaining</li>
                    <li>Access documents and correspondence</li>
                    <li>See invoices and payment history</li>
                    <li>Upload documents to specific matters</li>
                    <li>Admin &ldquo;view as client&rdquo; to see their perspective</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-file-contract"></i>
                    <h3>Digital Agreements</h3>
                    <span class="features-list-badge">Standard &amp; Team</span>
                </div>
                <p class="features-list-desc">Professional agreements with e-signature built in.</p>
                <ul class="features-list-points">
                    <li>Upload agreement templates</li>
                    <li>Send for electronic signature</li>
                    <li>Track signing status</li>
                    <li>Automatic reminders for unsigned agreements</li>
                    <li>Signed copies stored against client record</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <h3>Invoicing &amp; Accounting</h3>
                </div>
                <p class="features-list-desc">Generate invoices from tracked time and sync with your accounting software.</p>
                <ul class="features-list-points">
                    <li>Create invoices from tracked time</li>
                    <li>Xero and QuickBooks integration</li>
                    <li>Payment status tracking</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-envelope-open-text"></i>
                    <h3>Communications</h3>
                </div>
                <p class="features-list-desc">Newsletters and direct emails from one hub with branded templates.</p>
                <ul class="features-list-points">
                    <li>Send newsletters or direct emails to individuals</li>
                    <li>Target clients, prospects or custom lists</li>
                    <li>Draft, schedule and track sent messages</li>
                    <li>Merge tags for personalisation (name, company, email)</li>
                    <li>Branded email template with your logo and colours</li>
                    <li>GDPR-compliant &ndash; emails sent individually to each recipient</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-magnet"></i>
                    <h3>Lead Capture &amp; Integrations</h3>
                </div>
                <p class="features-list-desc">Turn website visitors into prospects and connect your favourite tools.</p>
                <ul class="features-list-points">
                    <li>Embeddable website form with customisable fields</li>
                    <li>New leads added to prospects and newsletter contacts automatically</li>
                    <li>Zapier and webhook support for automation</li>
                    <li>REST API for custom integrations</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-users"></i>
                    <h3>Team Portal</h3>
                    <span class="features-list-badge">Team only</span>
                </div>
                <p class="features-list-desc">Give your team access to manage their work.</p>
                <ul class="features-list-points">
                    <li>Team members see assigned clients only</li>
                    <li>Log time and manage matters</li>
                    <li>Upload documents and correspondence</li>
                    <li>Admin &ldquo;view as team member&rdquo; to see their perspective</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-folder-open"></i>
                    <h3>Document Management</h3>
                </div>
                <p class="features-list-desc">Keep all your client documents organised and accessible.</p>
                <ul class="features-list-points">
                    <li>Upload documents at client or case level</li>
                    <li>Drag and drop file uploads</li>
                    <li>Share documents with clients via the portal</li>
                    <li>Clients can upload documents to their cases</li>
                    <li>Welcome documents sent automatically with signed agreements</li>
                </ul>
            </div>

            <div class="features-list-item">
                <div class="features-list-header">
                    <i class="fas fa-tasks"></i>
                    <h3>To-Dos</h3>
                </div>
                <p class="features-list-desc">Track tasks and deadlines across all your client work.</p>
                <ul class="features-list-points">
                    <li>Create to-dos at case level or standalone</li>
                    <li>Assign to-dos to team members</li>
                    <li>Set due dates with overdue alerts</li>
                    <li>Filter by status: due today, this week, overdue, complete</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-dark">
    <div class="container">
        <div class="section-header">
            <h2>Ready to Simplify Your Practice?</h2>
            <p>Register your interest and we&rsquo;ll be in touch when Practice On Call is ready for you.</p>
        </div>
        <div class="section-cta">
            <a href="<?php echo SITE_URL; ?>/practice-on-call-register.php" class="btn btn-primary">Register Interest</a>
            <a href="<?php echo SITE_URL; ?>/practice-on-call.php#pricing" class="btn btn-outline">View Pricing</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
