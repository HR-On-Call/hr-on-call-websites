<?php
require_once 'config.php';

$pageTitle = 'The HR Vault';
$pageDescription = 'Professional HR documents at your fingertips. Hundreds of customisable templates, policies and contracts – all regularly updated for legislative changes.';
$pageKeywords = 'HR document templates, HR calculators, HR toolkits, HR flowcharts, HR policy templates, employment contracts, HR resources, HR advice for consultants, CIPD resources';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];
?>

<?php include 'includes/header.php'; ?>

<div class="oc">

<!-- Hero Section -->
<section class="oc-hero">
    <div class="oc-wrap">
        <div class="oc-eyebrow"><span></span>The HR Vault</div>
        <h1>Professional HR Documents at Your Fingertips</h1>
        <p>Hundreds of customisable templates, policies and contracts – all regularly updated for legislative changes.</p>
        <div class="oc-actions">
            <a href="https://www.thehrvault.co.uk/register.php" class="oc-btn oc-pink" target="_blank" rel="noopener">Subscribe Now</a>
            <a href="https://www.thehrvault.co.uk/browse.php" class="oc-btn oc-ghost" target="_blank" rel="noopener">Browse Documents</a>
        </div>
    </div>
</section>

<!-- What's Included Section -->
<section class="oc-sec oc-navy">
    <div class="oc-wrap">
        <div class="oc-head center">
            <span class="oc-eyebrow"><span></span> Comprehensive Document Library</span>
            <h2>Comprehensive Document Library</h2>
            <p>Everything you need for your consultancy and your clients</p>
        </div>

        <div class="oc-grid4">
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
                <h3>Contracts &amp; Agreements</h3>
                <p>Employment contracts, consultancy agreements, settlement agreements and other essential contractual documents.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-book"></i></div>
                <h3>Policies &amp; Handbooks</h3>
                <p>Complete policy libraries and employee handbooks covering all aspects of employment law and HR best practice.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-envelope"></i></div>
                <h3>Letters &amp; Forms</h3>
                <p>Offer letters, disciplinary documents, performance management forms, consultation letters and day-to-day HR documentation.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-envelope-open-text"></i></div>
                <h3>Recruitment &amp; Selection Emails</h3>
                <p>Copy and paste email templates for every stage of the recruitment process, from application acknowledgements to offer letters.</p>
            </div>
        </div>
    </div>
</section>

<!-- Premium Resources Section -->
<section class="oc-sec oc-cream">
    <div class="oc-wrap">
        <div class="oc-head center">
            <span class="oc-eyebrow"><span></span> Premium Resources</span>
            <h2>Premium Resources</h2>
            <p>Exclusive tools and resources for subscribers</p>
        </div>

        <div class="oc-grid3">
            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-toolbox"></i></div>
                <h3>HR Toolkits</h3>
                <p>Comprehensive toolkits that combine guides, templates, checklists, and interactive tools to help you handle specific HR challenges confidently and compliantly.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-comments"></i></div>
                <h3>30-Minute Advice</h3>
                <p>Get 30 minutes of advice from Grace per month included with your premium membership. Choose a Teams call or written email advice for complex queries and scenarios.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-project-diagram"></i></div>
                <h3>Process Flowcharts</h3>
                <p>Interactive step-by-step visual guides for key HR procedures including disciplinary, grievance, performance management, sickness absence, and family-friendly policies.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-calculator"></i></div>
                <h3>HR Calculators</h3>
                <p>Access a comprehensive suite of professional HR and employment law calculators for holiday entitlement, notice periods, redundancy pay, statutory payments, and compliance checks.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-calendar-alt"></i></div>
                <h3>Employment Law Timeline</h3>
                <p>Stay ahead of upcoming UK employment law changes with our comprehensive timeline. Track key dates, understand new legislation, and prepare your clients or organisation for compliance requirements.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>Client Calculators</h3>
                <p>Professional calculators to help you scope and quote client projects with confidence. Generate detailed estimates, breakdowns, and client-ready scoping documents.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-robot"></i></div>
                <h3>AI HR Prompts</h3>
                <p>Access our professionally crafted library of AI prompts for HR tasks. Save time with expert templates for job descriptions, policies, communications, and more.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-copy"></i></div>
                <h3>Copy-Paste Advice</h3>
                <p>Ready-to-use advice for common HR queries you're asked repeatedly. Save time by copying professional guidance on standard processes and procedures straight into your client communications.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
                <h3>Case Law Library</h3>
                <p>The leading UK employment cases in plain English, with the principle, what it means in practice, and a link to the judgment. Stay sharp on the decisions shaping how you advise.</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-layer-group"></i></div>
                <h3>Document Packs</h3>
                <p>Download a whole stage of a process in one go, redundancy, disciplinary, onboarding and more, with the letters tone matched and the guides and forms included.</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<!-- Document Builders -->
<section class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-head center">
            <span class="oc-eyebrow"><span></span> Document Builders</span>
            <h2>Three builders that write the document for you</h2>
            <p>Not templates to edit. Answer the questions and download a finished Word document, tailored to that client and branded.</p>
        </div>

        <div class="oc-grid3">
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-book"></i></div>
                <h3>Handbook Builder</h3>
                <p>Pick the policies you need and download a complete employee handbook: your choice of design, the client's logo on the cover, and a contents page that fills itself in. Over 90 policies, formal or approachable.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-file-signature"></i></div>
                <h3>Contract Builder</h3>
                <p>Build one master contract template per client, then generate any type from it: permanent, fixed-term, zero hours, term-time or apprenticeship. Every particular section 1 of the Employment Rights Act requires is included.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-handshake"></i></div>
                <h3>Settlement Builder</h3>
                <p>Draft a settlement agreement and its covering letter together, with the payments, tax treatment and waivers set out properly, and PENP and statutory redundancy worked out for you.</p>
            </div>
        </div>
    </div>
</section>

<section class="oc-sec oc-navy">
    <div class="oc-wrap">
        <div class="oc-head center">
            <span class="oc-eyebrow"><span></span> Key Features</span>
            <h2>Key Features</h2>
            <p>Professional documents designed for HR consultants</p>
        </div>

        <div class="oc-grid4">
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-file-word"></i></div>
                <h3>Fully Customisable</h3>
                <p>All documents in Word format, ready for you to brand and adapt for your clients.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-sync-alt"></i></div>
                <h3>Regularly Updated</h3>
                <p>Documents updated for legislative changes so you're always compliant.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-screwdriver-wrench"></i></div>
                <h3>Built For You</h3>
                <p>The builders assemble handbooks, contracts and settlement agreements from your answers, so there is no Word editing to do.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-comments"></i></div>
                <h3>Tone Options</h3>
                <p>Formal and informal versions to match your client's company culture.</p>
            </div>

            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-gift"></i></div>
                <h3>Free with Retainers</h3>
                <p>Included at no extra cost with all <a href="<?php echo SITE_URL; ?>/associate-on-call.php#pricing">Associate On Call retainer packages</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-head center">
            <span class="oc-eyebrow"><span></span> Subscription Options</span>
            <h2>Subscription Options</h2>
            <p>Choose the plan that works for you.</p>
            <p class="vat-notice">All prices shown exclude VAT.</p>
        </div>

        <div class="oc-price-grid" style="grid-template-columns:1fr; max-width:360px; margin-left:auto; margin-right:auto;">
            <div class="oc-price featured">
                <span class="oc-badge">Premium</span>
                <div class="pname">Premium Membership</div>
                <div class="pprice">£65 <small>per month + VAT</small></div>
                <p class="pdesc">or £650/year + VAT (2 months free)</p>
                <ul class="oc-ticklist">
                    <li><strong>Handbook, contract &amp; settlement builders</strong></li>
                    <li>Unlimited downloads</li>
                    <li><strong>30 minutes monthly expert advice</strong></li>
                    <li>Access to all premium resources</li>
                    <li>Monthly, rolling, cancel anytime</li>
                </ul>
                <a href="https://www.thehrvault.co.uk/register.php" class="oc-btn oc-pink" target="_blank" rel="noopener">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="oc-sec oc-cta">
    <div class="oc-wrap">
        <h2>Stop Reinventing the Wheel</h2>
        <p>Access professional HR documents today.</p>
        <div class="oc-actions" style="justify-content:center;">
            <a href="https://www.thehrvault.co.uk/register.php" class="oc-btn oc-pink" target="_blank" rel="noopener">Subscribe Now</a>
            <a href="https://www.thehrvault.co.uk/register.php" class="oc-btn oc-ghost" target="_blank" rel="noopener">Explore the Vault</a>
        </div>
    </div>
</section>

</div>

<?php include 'includes/footer.php'; ?>
