<?php
require_once 'config.php';

$pageTitle = 'About';
$pageDescription = 'Meet the HR On Call team. Grace Pariser and our experienced HR consultants deliver expert remote HR support to businesses across the UK.';
$pageKeywords = 'HR On Call, Grace Pariser HR consultant, CIPD qualified, workplace investigation specialist, disciplinary hearing support, grievance hearing support, remote HR consultant UK';

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
      <p>Expert HR support with a commercial focus, delivered remotely to businesses across the UK.</p>
    </div>
  </section>

  <!-- OUR APPROACH (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split">
      <div style="text-align:center;">
        <img src="assets/images/grace-pariser-profile-v2.webp" alt="Grace Pariser, HR Consultant" loading="lazy" style="box-shadow:0 18px 44px rgba(16,30,51,.16);">
        <div style="font-size:18px; font-weight:700; color:var(--navy); margin-top:18px;">Grace Pariser</div>
        <div style="font-size:14px; color:var(--soft);">Founder &amp; HR Consultant</div>
      </div>
      <div>
        <div class="oc-eyebrow"><span></span>Our Approach</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">HR expertise you can count on</h2>
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">We combine technical excellence with genuine commercial understanding in every client relationship. Working remotely with businesses of all sizes across the UK, we deliver tailored HR solutions that drive your objectives while keeping you legally compliant.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Our approach is practical, solutions-focused and always aligned with your business goals. With experience across multiple sectors, we understand the pressures facing growing businesses and deliver HR support that makes a tangible difference.</p>
      </div>
    </div>
  </section>

  <!-- CREDENTIALS -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Credentials</div>
        <h2>Professional credentials</h2>
        <p>Our background in HR delivers exceptional value to your business.</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
          <h3>Employment Law Expertise</h3>
          <p>Extensive experience in employment law and employee relations ensures your business maintains compliance while implementing practical solutions.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-briefcase"></i></div>
          <h3>Commercial Background</h3>
          <p>Our commercial approach to HR means we deliver solutions that balance best practice with practical business reality.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-globe"></i></div>
          <h3>UK-Wide Remote Delivery</h3>
          <p>All of our services are delivered remotely, meaning you get expert HR support regardless of where your business is based in the UK.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-users"></i></div>
          <h3>People-Focused Approach</h3>
          <p>We understand that HR is about people. Every solution is designed with both your business needs and employee wellbeing in mind.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MEET THE TEAM (navy) -->
  <section id="team" class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Meet the Team</div>
        <h2>Meet the team</h2>
      </div>
      <div class="oc-split" style="margin-top:44px; align-items:center;">
        <div style="text-align:center;">
          <img src="assets/images/grace-headshot-2.webp" alt="Grace Pariser" loading="lazy" style="width:240px; height:240px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(0,0,0,.3); display:inline-block; border:3px solid var(--gold);">
        </div>
        <div>
          <h3 style="color:#fff; font-size:24px;">Grace Pariser</h3>
          <div style="color:var(--gold); font-weight:600; font-size:15px; margin-top:6px;">Founder &amp; Lead Consultant</div>
          <div style="display:inline-flex; align-items:center; gap:8px; color:#C3D0E0; font-size:14px; margin-top:10px;"><i class="fas fa-award" style="color:var(--gold);"></i> CIPD Level 7</div>
          <p style="color:#C3D0E0; font-size:15.5px; margin:18px 0 0; line-height:1.75;">Grace is a CIPD Level 7 qualified HR consultant with experience across public and private sector organisations. She specialises in employment law, workplace investigations and complex employee relations cases.</p>
          <p style="color:#C3D0E0; font-size:15.5px; margin:14px 0 0; line-height:1.75;">As an independent consultant herself, Grace understands the unique challenges growing businesses face. She founded HR On Call to provide expert, practical HR support to businesses right across the UK.</p>
          <p style="color:#C3D0E0; font-size:15.5px; margin:14px 0 0; line-height:1.75;">Working remotely with businesses of all sizes, Grace delivers commercial HR solutions that protect your business while treating people fairly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR VALUES -->
  <section id="values" class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Values</div>
        <h2>Our values</h2>
        <p>The principles that guide how we work with you.</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-check-circle"></i></div>
          <h3>Reliability</h3>
          <p>When you're running a business, the last thing you need is another thing to chase. When we take on your HR work, you can trust it will be done properly and on time. You'll have one less thing to worry about, so you can focus on what you do best.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-handshake"></i></div>
          <h3>Respect</h3>
          <p>We take the time to understand your business, your culture and how you like things done. We won't impose generic solutions or change things unnecessarily. To your team, we'll simply feel like a natural extension of your business.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-heart"></i></div>
          <h3>Empathy</h3>
          <p>Your employees matter to you, and they matter to us too. Whether it's a difficult conversation or a team going through change, we'll treat your people with the same care and understanding you would. That's how you protect your reputation as a good employer.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-chart-line"></i></div>
          <h3>Commerciality</h3>
          <p>HR advice needs to be legally sound, but it also needs to make sense for your business. We understand the commercial pressures you face and provide practical solutions that protect you whilst treating people fairly. We'll always be straight with you about the risks, so you can make informed decisions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Ready for expert HR support?</h2>
      <p>Get in touch to find out how our team can support your business with professional, commercially focused HR solutions, wherever you are in the UK.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
