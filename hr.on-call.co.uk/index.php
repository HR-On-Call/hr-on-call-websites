<?php
require_once 'config.php';

// Homepage leads with the brand to reinforce "HR On Call" as the site name across the on-call.co.uk domain
$pageTitle = 'HR On Call | Workplace Investigations & HR Support UK';
$isHomepage = true; // Flag for special title handling
$rebuilt = true;    // Built on the Vault template; skip the legacy reskin layer (this page is self-contained)
$pageDescription = 'Expert HR support for UK businesses. Workplace investigations, disciplinary hearings, grievance procedures, appeals and settlement agreements. Remote HR support on monthly plans from £75/month + VAT, plus fixed-fee document drafting.';
$pageKeywords = 'workplace investigation, disciplinary hearing UK, grievance procedure, HR consultant UK, dismissal advice employer, gross misconduct, ACAS code of practice, settlement agreement, employee relations support, HR advice UK';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')]; // shared "oc" (Vault-look) design system

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section style="background:#FBF8F2; border-bottom:1px solid #EFEADF; overflow:hidden;">
    <div class="oc-wrap oc-hero-grid">
      <div>
        <div class="oc-eyebrow"><span></span>Outsourced HR for UK employers</div>
        <h1 style="font-size:clamp(32px,4.2vw,48px); margin:20px 0 0;">Expert HR support, especially when things get difficult.</h1>
        <p style="font-size:18px; line-height:1.6; color:#4A5568; margin:20px 0 0; max-width:560px;">Workplace investigations, disciplinaries, grievances and appeals are what we do best, alongside the everyday HR advice, contracts and projects that keep UK employers compliant and protected. We handle it, so you don't have to.</p>
        <div style="display:flex; flex-wrap:wrap; gap:14px; margin-top:30px;">
          <a href="#services" class="oc-btn oc-pink">View Services <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
          <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
        </div>
      </div>
      <div class="oc-rev">
        <div class="oc-stars">&starf;&starf;&starf;&starf;&starf;</div>
        <blockquote>"Grace has been invaluable, providing specific and clear advice. The HR legal area is a minefield, and without her advice and drafts of letters we could easily have gone astray. Her expertise saved us from potential problems and a lot of internal time."</blockquote>
        <div class="who"><b>Sharon Landa</b> &middot; small charity, no in-house HR</div>
      </div>
    </div>
  </section>

  <!-- WHY HR ON CALL -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Why HR On Call</div>
        <h2>Commercial HR expertise when you need it</h2>
        <p>Helping businesses across the UK with practical, expert HR support, delivered remotely.</p>
      </div>
      <div class="oc-grid3">
        <a href="about.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-laptop"></i></div>
          <h3>Fully Remote HR</h3>
          <p>All of our HR services are delivered remotely, giving you access to expert HR support wherever your business is based in the UK.</p>
          <span class="oc-link">About our remote HR service <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="retainers.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-chart-line"></i></div>
          <h3>Commercial Approach</h3>
          <p>Our HR advice balances best practice with practical commercial reality, so you get solutions that genuinely work for your business.</p>
          <span class="oc-link">View HR support plans <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="workplace-issues.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-handshake"></i></div>
          <h3>Workplace Issues</h3>
          <p>From investigations and disciplinary hearings to grievances and appeals, we handle difficult employee situations so you don't have to.</p>
          <span class="oc-link">View workplace issue support <i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- ABOUT PREVIEW -->
  <section class="oc-sec" style="background:#FBF8F2; border-top:1px solid #EFEADF; border-bottom:1px solid #EFEADF;">
    <div class="oc-wrap oc-split">
      <div style="text-align:center;">
        <img src="assets/images/grace-headshotv2.webp" alt="Grace Pariser, Founder & HR Consultant" loading="lazy" style="width:230px; height:230px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(16,30,51,.18); display:inline-block;">
        <div style="font-size:18px; font-weight:700; color:var(--navy); margin-top:20px;">Grace Pariser</div>
        <div style="font-size:14px; color:var(--soft);">Founder &amp; HR Consultant</div>
        <a href="https://www.linkedin.com/in/grace-pariser/" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:7px; margin-top:12px; font-size:13.5px; font-weight:600; color:var(--navy);"><i class="fab fa-linkedin" style="color:var(--gold); font-size:15px;"></i> Connect with Grace</a>
      </div>
      <div>
        <div class="oc-eyebrow"><span></span>Who we are</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">HR expertise you can count on</h2>
        <p style="font-size:17px; color:#4A5568; margin:18px 0 0;">We combine technical excellence with genuine commercial understanding in every client relationship.</p>
        <p style="font-size:17px; color:#4A5568; margin:14px 0 0;">We work remotely with businesses of all sizes across the UK, delivering tailored HR solutions that drive your business objectives while keeping you legally compliant.</p>
        <div style="display:flex; flex-wrap:wrap; gap:14px; margin-top:28px;">
          <a href="about.php" class="oc-btn oc-pink">More About Us</a>
          <a href="about.php#values" class="oc-btn oc-ghost">Our Values</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES (navy) -->
  <section id="services" class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-head center">
        <div class="oc-eyebrow"><span></span>What we do</div>
        <h2>Comprehensive HR services</h2>
        <p>Tailored HR packages for UK businesses, delivered entirely remotely.</p>
      </div>
      <div class="oc-grid4">
        <a href="retainers.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-calendar-check"></i></div>
          <h3>HR Support Plans</h3>
          <p>Expert HR advice, documents and support on a simple monthly plan, plus our time as you need it, from £75/month + VAT.</p>
          <span class="oc-link">View support plans <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="workplace-issues.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-gavel"></i></div>
          <h3>Workplace Issues</h3>
          <p>Investigations, disciplinary and grievance hearings, and appeals. We handle the process so you can focus on your business.</p>
          <span class="oc-link">View hearing support <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="documents.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
          <h3>Documents</h3>
          <p>Employment contracts, handbooks, settlement agreements and ACAS early conciliation support, fixed fees from £500 + VAT.</p>
          <span class="oc-link">View documents <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="pay-as-you-go.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-users"></i></div>
          <h3>HR Projects</h3>
          <p>Restructures, TUPE transfers, HR audits, recruitment campaigns and more, from £100 per hour + VAT or fixed fee.</p>
          <span class="oc-link">View HR projects <i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- VALUES -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head center">
        <div class="oc-eyebrow"><span></span>How we work</div>
        <h2>Our values</h2>
        <p>The principles that guide how we work with you.</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-check-circle"></i></div>
          <h3>Reliability</h3>
          <p>When we take on your HR work, you can trust it will be done properly and on time.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-handshake"></i></div>
          <h3>Respect</h3>
          <p>We understand your business, your culture and how you like things done.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-heart"></i></div>
          <h3>Empathy</h3>
          <p>We treat your people with the same care and understanding you would.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-chart-line"></i></div>
          <h3>Commerciality</h3>
          <p>Practical solutions that protect your business whilst treating people fairly.</p>
        </div>
      </div>
      <div style="text-align:center; margin-top:36px;">
        <a href="about.php#values" class="oc-btn oc-ghost">Learn more about our values</a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <h2>Ready for expert HR support?</h2>
      <p>Get in touch to find out how we can support your business with professional, commercially focused HR, wherever you are in the UK.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Book now <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
