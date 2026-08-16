<?php
require_once 'config.php';

$pageTitle = 'About HR On Call';
$pageDescription = 'Expert HR support from a team who understands consultancy life. Learn about HR On Call and meet our team of CIPD-qualified consultants.';
$pageKeywords = 'HR On Call, Grace Pariser, HR consultancy UK, CIPD qualified consultants, HR consultant team, about HR On Call';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Who We Are</div>
      <h1>About HR On Call</h1>
      <p>Expert HR support from a team who understands consultancy life</p>
    </div>
  </section>

  <!-- OUR STORY (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Story</div>
        <h2>Built by a Consultant, for Consultants</h2>
      </div>
      <div style="max-width:760px; margin-top:24px;">
        <p style="color:#C3D0E0; font-size:16px; line-height:1.8; margin:0 0 16px;">HR On Call Ltd was founded by Grace Pariser, a CIPD Level 7 qualified consultant with experience in HR and employment law.</p>
        <p style="color:#C3D0E0; font-size:16px; line-height:1.8; margin:0 0 16px;">After years of working in HR consultancy, Grace understood the challenges independent HR professionals face: the feast-or-famine workflow, the need for specialist backup, and the constant pressure to deliver professional-quality work without a team behind you.</p>
        <p style="color:#C3D0E0; font-size:16px; line-height:1.8; margin:0 0 16px;">HR On Call was created to solve these problems. We provide the associate support, professional tools and white-label solutions that help independent consultants compete with larger firms while maintaining their independence.</p>
        <p style="color:#C3D0E0; font-size:16px; line-height:1.8; margin:0;">Today, our team of experienced associates supports HR consultancies across the UK with everything from employee relations and workplace investigations to employment law advisory, L&D, reward and HRIS, plus the professional tools and digital platforms that enhance your service offerings.</p>
      </div>
    </div>
  </section>

  <!-- MEET THE TEAM -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Meet the Team</div>
        <h2>Meet the Team</h2>
      </div>
      <div class="oc-split" style="margin-top:44px; align-items:center;">
        <div style="text-align:center;">
          <img src="<?php echo SITE_URL; ?>/assets/images/grace-headshot.png" alt="Grace Pariser" loading="lazy" style="width:260px; height:260px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(16,30,51,.16); display:inline-block; border:3px solid var(--gold);">
        </div>
        <div>
          <h3 style="font-size:24px;">Grace Pariser</h3>
          <div style="color:var(--pink); font-weight:600; font-size:15px; margin-top:6px;">Founder &amp; Lead Consultant</div>
          <p style="font-size:16px; color:var(--muted); margin:18px 0 0; line-height:1.75;">Grace is a CIPD Level 7 qualified HR consultant with experience across public and private sector organisations. She specialises in employment law, workplace investigations and complex employee relations cases.</p>
          <p style="font-size:16px; color:var(--muted); margin:14px 0 0; line-height:1.75;">As an independent consultant herself, Grace understands the unique challenges of running an HR consultancy. She founded HR On Call to provide the support, tools and expertise that help fellow consultants deliver exceptional service to their clients.</p>
          <p style="font-size:16px; color:var(--muted); margin:14px 0 0; line-height:1.75;">Based in Plymouth, Grace works with consultants and businesses across the UK, offering practical, commercial HR solutions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR VALUES -->
  <section id="values" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Values</div>
        <h2>Our Values</h2>
        <p>The principles that guide how we work with you and your clients</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-check-circle"></i></div>
          <h3>Reliability</h3>
          <p>When you trust us with your clients, you need to know the work will be done properly and on time. We deliver to the deadlines we agree, often before, and to the highest professional standards. You can step away from the work knowing it's in capable hands.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-shield-alt"></i></div>
          <h3>Respect</h3>
          <p>Your business is yours. We'll never approach your clients directly or use our working relationship to build our own client base. We work within your processes, use your templates and follow your way of doing things. To your clients, we're simply an extension of your consultancy.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-heart"></i></div>
          <h3>Empathy</h3>
          <p>HR work is people work. Your clients going through a difficult restructure, an employee facing disciplinary action, everyone deserves to be treated with care and understanding. We bring the same compassion you would to every conversation and every case.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
          <h3>Commerciality</h3>
          <p>HR advice needs to be legally sound, but it also needs to make business sense. We understand the commercial pressures your clients face and provide practical solutions that protect the business whilst treating people fairly. We'll always be honest about the risks, you and your clients will know exactly where you stand, but our advice balances legal compliance with pragmatism. We won't push for unnecessary process or create problems where none exist.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Ready to Work With Us?</h2>
      <p>Get in touch to discuss how HR On Call can support your consultancy.</p>
      <div style="margin-top:28px;">
        <a href="<?php echo SITE_URL; ?>/contact.php" class="oc-btn oc-pink">Contact Us</a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
