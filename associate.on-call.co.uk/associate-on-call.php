<?php
require_once 'config.php';

$pageTitle = 'Associate On Call';
$pageDescription = 'Expert HR associate support when you need it most. Expand your capacity and expertise without the overhead of permanent staff. CIPD-qualified associates ready to support your consultancy.';
$pageKeywords = 'HR associate support, freelance HR backup, HR consultant cover, settlement agreements, employee relations support, CIPD associate, HR retainer, interim HR cover';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];
?>

<?php include 'includes/header.php'; ?>

<div class="oc">

<!-- Hero Section -->
<section class="oc-hero">
    <div class="oc-wrap">
        <div class="oc-eyebrow"><span></span>Associate On Call</div>
        <h1>Expert HR Associate support When You Need It Most</h1>
        <p>Expand your capacity and expertise without the overhead of permanent staff with our CIPD-qualified associates ready to support your consultancy.</p>
        <div class="oc-actions">
            <a href="#pricing" class="oc-btn oc-pink">View Retainer Pricing</a>
            <a href="#payg" class="oc-btn oc-pink">View PAYG Pricing</a>
            <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-ghost">Get in Touch</a>
        </div>
    </div>
</section>

<!-- Support Levels Section -->
<section id="how-we-support" class="oc-sec oc-navy">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>How We Support</span>
            <h2>How We Support HR Consultants</h2>
            <p>We offer three levels of support, priced to reflect the expertise and complexity involved. Whether you need help with documentation, day-to-day HR guidance or complex casework, you'll always know what you're paying.</p>
        </div>

        <div class="oc-grid3">
            <!-- Admin Support -->
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-file-alt"></i></div>
                <h3>Admin Support</h3>
                <p>Documentation and compliance work that keeps your consultancy running smoothly.</p>
                <ul class="oc-ticklist">
                    <li>Drafting contracts and offer letters</li>
                    <li>Policy formatting and updates</li>
                    <li>HR documentation and templates</li>
                    <li>HRIS data entry and reporting</li>
                    <li>General HR administration</li>
                </ul>
            </div>

            <!-- Advisory Support -->
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-comments"></i></div>
                <h3>Advisory Support</h3>
                <p>Day-to-day HR guidance and generalist support for you and your clients.</p>
                <ul class="oc-ticklist">
                    <li>General HR advice and sounding board</li>
                    <li>Policy guidance and best practice</li>
                    <li>Manager coaching and support</li>
                    <li>Talent and recruitment advice</li>
                    <li>Learning and development guidance</li>
                    <li>Reward and benefits queries</li>
                    <li>Employment law advisory (TUPE, redundancy)</li>
                </ul>
            </div>

            <!-- Specialist Support -->
            <div class="oc-cardn">
                <div class="oc-ico"><i class="fas fa-gavel"></i></div>
                <h3>Specialist Support</h3>
                <p>Complex casework requiring in-depth employment law knowledge and expertise.</p>
                <ul class="oc-ticklist">
                    <li>Employee relations (disciplinaries, grievances, performance, absence)</li>
                    <li>Workplace investigations</li>
                    <li>Without prejudice and ACAS negotiations</li>
                    <li>Competency frameworks and appraisal design</li>
                    <li>Outsourced HR projects</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Retainer Packages Section -->
<section id="pricing" class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Retainer Packages</span>
            <h2>Retainer Packages</h2>
            <p>Get guaranteed capacity, professional tools and better rates with a monthly retainer.</p>
            <p class="vat-notice">All prices shown exclude VAT.</p>
        </div>

        <!-- Retainer Pricing Cards -->
        <div class="oc-price-grid g3">
            <div class="oc-price">
                <div class="pname">The Essentials</div>
                <p class="pdesc">Occasional backup and tools</p>
                <div class="pprice">£200 <small>per month + VAT</small></div>
                <ul class="oc-ticklist">
                    <li>2 hours Admin and Advisory support monthly</li>
                    <li>Full access to <a href="https://www.thehrvault.co.uk" target="_blank" rel="noopener" title="A library of professional, ready-to-use HR document templates. Opens thehrvault.co.uk in a new tab." style="color:var(--pink); font-weight:600;">The HR Vault</a></li>
                    <li>Client portal to view time, documents and notes</li>
                    <li>Max 2 hours banked rollover</li>
                    <li>Time tracked in 6-minute increments</li>
                    <li>48 hour response time (Mon to Fri)</li>
                    <li>3 month initial term, then rolling monthly</li>
                    <li>Additional Admin hours at £45/hour + VAT</li>
                    <li>Additional Advisory hours at £65/hour + VAT</li>
                    <li>Specialist support at £80/hour + VAT</li>
                    <li>40% discount on bespoke drafting</li>
                </ul>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Get in Touch</a>
            </div>

            <div class="oc-price featured">
                <div class="oc-badge">Most Popular</div>
                <div class="pname">The Partnership</div>
                <p class="pdesc">The sweet spot</p>
                <div class="pprice">£325 <small>per month + VAT</small></div>
                <ul class="oc-ticklist">
                    <li>4 hours Admin and Advisory support monthly</li>
                    <li>Full access to <a href="https://www.thehrvault.co.uk" target="_blank" rel="noopener" title="A library of professional, ready-to-use HR document templates. Opens thehrvault.co.uk in a new tab." style="color:var(--pink); font-weight:600;">The HR Vault</a></li>
                    <li>Client portal to view time, documents and notes</li>
                    <li>Max 4 hours banked rollover</li>
                    <li>Time tracked in 6-minute increments</li>
                    <li>48 hour response time (Mon to Fri)</li>
                    <li>3 month initial term, then rolling monthly</li>
                    <li>Additional Admin hours at £45/hour + VAT</li>
                    <li>Additional Advisory hours at £65/hour + VAT</li>
                    <li>Specialist support at £80/hour + VAT</li>
                    <li>40% discount on bespoke drafting</li>
                </ul>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Get in Touch</a>
            </div>

            <div class="oc-price">
                <div class="pname">The Full Support</div>
                <p class="pdesc">Consistent partnership</p>
                <div class="pprice">£750 <small>per month + VAT</small></div>
                <ul class="oc-ticklist">
                    <li>10 hours Admin and Advisory support monthly</li>
                    <li>Full access to <a href="https://www.thehrvault.co.uk" target="_blank" rel="noopener" title="A library of professional, ready-to-use HR document templates. Opens thehrvault.co.uk in a new tab." style="color:var(--pink); font-weight:600;">The HR Vault</a></li>
                    <li>Client portal to view time, documents and notes</li>
                    <li>Max 5 hours banked rollover</li>
                    <li>Time tracked in 6-minute increments</li>
                    <li>24 hour response time (Mon to Fri)</li>
                    <li>3 month initial term, then rolling monthly</li>
                    <li>Additional Admin hours at £45/hour + VAT</li>
                    <li>Additional Advisory hours at £65/hour + VAT</li>
                    <li>Specialist support at £80/hour + VAT</li>
                    <li>50% discount on bespoke drafting</li>
                </ul>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<!-- Pay As You Go Section -->
<section id="payg" class="oc-sec oc-cream">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Ad Hoc Support</span>
            <h2>Ad Hoc Support</h2>
            <p>No retainer needed. Pay only for the time you use, billed in 6-minute increments.</p>
            <p class="vat-notice">All prices shown exclude VAT.</p>
        </div>

        <div class="oc-price-grid g2">
            <!-- Admin Support Card -->
            <div class="oc-price">
                <div class="pname">Admin Support</div>
                <div class="pprice">£50 <small>/hour + VAT</small></div>
                <p class="pdesc">Contracts and offer letters, policy formatting and updates, HR documentation and templates, general HR administration.</p>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-ghost">Get in Touch</a>
            </div>

            <!-- Advisory Support Card -->
            <div class="oc-price">
                <div class="pname">Advisory Support</div>
                <div class="pprice">£70 <small>/hour + VAT</small></div>
                <p class="pdesc">General HR advice and sounding board, policy guidance and best practice, manager coaching and support, talent and recruitment advice, learning and development guidance, reward and benefits queries.</p>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-ghost">Get in Touch</a>
            </div>

            <!-- Specialist Support Card -->
            <div class="oc-price">
                <div class="pname">Specialist Support</div>
                <div class="pprice">£90 <small>/hour + VAT</small></div>
                <p class="pdesc">Employee relations including disciplinaries, grievances, performance and absence management, workplace investigations, without prejudice and ACAS negotiations, competency frameworks, designing appraisal schemes, outsourced HR projects.</p>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-ghost">Get in Touch</a>
            </div>

            <!-- Interim Cover Card -->
            <div class="oc-price featured">
                <div class="pname">Interim Cover</div>
                <p class="pdesc">Keep your consultancy running while you are away.</p>
                <div class="pprice">£150 <small>+ VAT for the first 2 hours</small></div>
                <p class="pdesc">Then £80/hour + VAT. Covers client communications, ongoing case management and anything that cannot wait. Your clients, your processes, your standards.</p>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Get in Touch</a>
            </div>
        </div>

        <!-- Bespoke Drafting -->
        <div class="oc-card oc-mt" style="max-width:820px;margin-left:auto;margin-right:auto;">
            <h3>Bespoke Drafting</h3>
            <p>Fixed fees for the documents that take longest to get right. All drafting is UK employment law compliant and delivered ready for your own branding.</p>
            <p class="vat-notice" style="margin-top: 0.5rem;">All prices shown exclude VAT.</p>
            <ul class="oc-ticklist" style="margin-top:18px;">
                <li>Settlement Agreement &ndash; £500 + VAT</li>
                <li>COT3 Form &ndash; £200 + VAT</li>
                <li>New Contract Template &ndash; £400 + VAT</li>
                <li>New Employee Handbook &ndash; £400 + VAT</li>
            </ul>
            <p class="pdesc" style="margin-top:16px;"><i class="fas fa-tag"></i> Retainer clients receive 40 to 50% off all bespoke drafting fees depending on their package.</p>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Working With Us</span>
            <h2>Working With Us</h2>
            <p>We seamlessly integrate with your consultancy to provide expert support</p>
        </div>

        <div class="oc-steps">
            <div class="oc-step">
                <div class="num">1</div>
                <h3>Initial Discussion</h3>
                <p>We'll discuss the specific support you need, timelines, deliverables and how we can help strengthen your consultancy offering.</p>
            </div>

            <div class="oc-step">
                <div class="num">2</div>
                <h3>Clear Agreement</h3>
                <p>We'll provide a clear proposal with scope of work, fees and timescales so you know exactly what to expect.</p>
            </div>

            <div class="oc-step">
                <div class="num">3</div>
                <h3>Expert Delivery</h3>
                <p>We'll deliver the agreed support with commercial focus, technical expertise and clear communication throughout.</p>
            </div>

            <div class="oc-step">
                <div class="num">4</div>
                <h3>Seamless Handover</h3>
                <p>We'll ensure any work is properly documented and handed back to you, maintaining your client relationship.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="oc-sec oc-cta">
    <div class="oc-wrap">
        <h2>Ready to Expand Your Consultancy's Capabilities?</h2>
        <p>Contact us today to discuss how Associate On Call can strengthen your offering.</p>
        <div class="oc-actions" style="justify-content:center;">
            <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Get in Touch</a>
        </div>
    </div>
</section>

</div>

<!-- Support Level Modals -->
<div id="supportModal" class="support-modal">
    <div class="support-modal-content">
        <button class="support-modal-close" onclick="closeSupportModal()">&times;</button>

        <!-- Admin Support Modal Content -->
        <div id="modal-admin" class="support-modal-body" style="display: none;">
            <div class="support-modal-icon"><i class="fas fa-file-alt"></i></div>
            <h3>Admin Support</h3>
            <p class="support-modal-desc">Documentation and compliance work that keeps your consultancy running smoothly.</p>
            <ul class="support-modal-list">
                <li><i class="fas fa-check"></i> Drafting contracts and offer letters</li>
                <li><i class="fas fa-check"></i> Policy formatting and updates</li>
                <li><i class="fas fa-check"></i> HR documentation and templates</li>
                <li><i class="fas fa-check"></i> HRIS data entry and reporting</li>
                <li><i class="fas fa-check"></i> General HR administration</li>
            </ul>
        </div>

        <!-- Advisory Support Modal Content -->
        <div id="modal-advisory" class="support-modal-body" style="display: none;">
            <div class="support-modal-icon"><i class="fas fa-comments"></i></div>
            <h3>Advisory Support</h3>
            <p class="support-modal-desc">Day-to-day HR guidance and generalist support for you and your clients.</p>
            <ul class="support-modal-list">
                <li><i class="fas fa-check"></i> General HR advice and sounding board</li>
                <li><i class="fas fa-check"></i> Policy guidance and best practice</li>
                <li><i class="fas fa-check"></i> Manager coaching and support</li>
                <li><i class="fas fa-check"></i> Talent and recruitment advice</li>
                <li><i class="fas fa-check"></i> Learning and development guidance</li>
                <li><i class="fas fa-check"></i> Reward and benefits queries</li>
            </ul>
        </div>

        <!-- Specialist Support Modal Content -->
        <div id="modal-specialist" class="support-modal-body" style="display: none;">
            <div class="support-modal-icon"><i class="fas fa-gavel"></i></div>
            <h3>Specialist Support</h3>
            <p class="support-modal-desc">Complex casework requiring in-depth employment law knowledge and expertise.</p>
            <ul class="support-modal-list">
                <li><i class="fas fa-check"></i> Employee relations (disciplinaries, grievances, performance, absence)</li>
                <li><i class="fas fa-check"></i> Workplace investigations</li>
                <li><i class="fas fa-check"></i> Employment law advisory (TUPE, redundancy)</li>
                <li><i class="fas fa-check"></i> Without prejudice and ACAS negotiations</li>
            </ul>
        </div>
    </div>
</div>

<script>
function openSupportModal(type) {
    // Hide all modal bodies
    document.querySelectorAll('.support-modal-body').forEach(el => el.style.display = 'none');
    // Show the selected one
    document.getElementById('modal-' + type).style.display = 'block';
    // Show the modal
    document.getElementById('supportModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeSupportModal() {
    document.getElementById('supportModal').classList.remove('active');
    document.body.style.overflow = '';
}

// Close modal when clicking outside
document.getElementById('supportModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeSupportModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeSupportModal();
    }
});
</script>

<?php include 'includes/footer.php'; ?>
