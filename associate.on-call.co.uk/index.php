<?php
require_once 'config.php';

$pageTitle = 'Home';
$pageDescription = 'Expert HR support for HR consultancies. Associate cover, professional tools and white-label solutions from a team of CIPD-qualified consultants.';
$pageKeywords = 'HR consultant support, HR consultancy tools, associate HR support, HR documents for consultants, CIPD consultants, HR resources UK';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section style="background:#FBF8F2; border-bottom:1px solid #EFEADF; overflow:hidden;">
    <div class="oc-wrap oc-hero-grid">
      <div>
        <div class="oc-eyebrow"><span></span>For HR Consultancies</div>
        <h1 style="font-size:clamp(32px,4.2vw,48px); margin:20px 0 0;">Expert HR Support for HR Consultancies</h1>
        <p style="font-size:18px; line-height:1.6; color:#4A5568; margin:20px 0 0; max-width:560px;">Associate cover, professional tools and white-label solutions from a team of CIPD-qualified consultants.</p>
        <div style="display:flex; flex-wrap:wrap; gap:14px; margin-top:30px;">
          <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Get in Touch <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
          <a href="#services" class="oc-btn oc-ghost">Explore Services</a>
        </div>
      </div>
      <div class="oc-rev">
        <div class="oc-stars">&starf;&starf;&starf;&starf;&starf;</div>
        <blockquote>"Grace has been an immense support for our consultancy. Providing expert support on a number of challenging people issues for our clients. Grace's employment law knowledge, approach and attention to detail is second to none. We wish we'd found her sooner."</blockquote>
        <div class="who"><b>Alison Lambert</b> &middot; Chartered Fellow FCIPD, The HR Guru Ltd</div>
      </div>
    </div>
  </section>

  <!-- INTRODUCTION -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap oc-split">
      <div style="text-align:center;">
        <img src="<?php echo SITE_URL; ?>/assets/images/grace-headshot.png" alt="Grace Pariser, Founder &amp; Lead Consultant" loading="lazy" style="width:230px; height:230px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(16,30,51,.18); display:inline-block;">
        <div style="font-size:18px; font-weight:700; color:var(--navy); margin-top:18px;">Grace Pariser</div>
        <div style="font-size:14px; color:var(--soft);">Founder &amp; Lead Consultant</div>
      </div>
      <div>
        <div class="oc-eyebrow"><span></span>Who we are</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Created by HR Consultants, for HR Consultants</h2>
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">HR On Call Ltd provides everything independent HR consultants need to deliver exceptional service while building a sustainable practice.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Led by Grace Pariser, our team of experienced associates understands the challenges you face. We offer expert support, professional resources and innovative digital solutions that give independent practitioners and small consultancies the professional edge of larger firms.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Whether you need associate cover for complex casework, ready-to-use HR documents, or white-label platforms for your clients, we're here to help your consultancy thrive.</p>
        <div style="margin-top:28px;">
          <a href="<?php echo SITE_URL; ?>/associate-on-call.php#how-we-support" class="oc-btn oc-pink">How We Support HR Consultants</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES OVERVIEW -->
  <section id="services" class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>What we offer</div>
        <h2>Our Complete Solutions</h2>
        <p>Everything you need to elevate your HR consultancy</p>
      </div>
      <div class="oc-grid3">
        <a href="<?php echo SITE_URL; ?>/associate-on-call.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-user-shield"></i></div>
          <h3>Expert Associate Support</h3>
          <p>Expand your capacity with flexible associate cover. Choose pay-as-you-go or retainer packages with professional tools included. Our team handles complex casework, settlement agreements and interim cover.</p>
          <span class="oc-link">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="<?php echo SITE_URL; ?>/the-hr-vault.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
          <h3>Professional HR Documents</h3>
          <p>Access hundreds of customisable HR templates through subscription or bundles. Contracts, policies, handbooks, letters and more, all regularly updated for legislative changes.</p>
          <span class="oc-link">Explore Documents <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="<?php echo SITE_URL; ?>/the-client-vault.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-folder-open"></i></div>
          <h3>White-Label Document Platform</h3>
          <p>Offer your clients a branded online document library. Add value to retainers and create recurring revenue with your own professional resource hub.</p>
          <span class="oc-link">Learn More <i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Why choose us</div>
        <h2>Why HR Consultants Choose HR On Call</h2>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-clock"></i></div>
          <h3>Save Valuable Time</h3>
          <p>Stop creating documents from scratch. Our professionally written templates and expert associates save you hours on every engagement.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-award"></i></div>
          <h3>Enhance Your Credibility</h3>
          <p>Present professionally designed, legally compliant materials that position you as a trusted adviser.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-pound-sign"></i></div>
          <h3>Create New Revenue</h3>
          <p>Develop additional revenue streams through our white-label solutions and reseller programmes.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-user-shield"></i></div>
          <h3>Expert Backup</h3>
          <p>Access CIPD-qualified associates when you need specialist expertise or additional capacity.</p>
        </div>
      </div>
      <div style="display:flex; flex-wrap:wrap; gap:14px; margin-top:36px;">
        <a href="#services" class="oc-btn oc-pink">Explore Our Services</a>
        <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <h2>Ready to Strengthen Your Consultancy?</h2>
      <p>Join the independent HR consultants who are saving time, enhancing their service offerings and growing their businesses with HR On Call.</p>
      <div style="display:flex; flex-wrap:wrap; gap:14px; justify-content:center; margin-top:28px;">
        <a href="<?php echo SITE_URL; ?>/booking.php" class="oc-btn oc-pink">Book a Discovery Call <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
