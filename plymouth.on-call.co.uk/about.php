<?php
require_once 'config.php';

$pageTitle = 'About Grace Pariser | CIPD Qualified HR Consultant Plymouth';
$pageDescription = 'Meet the HR On Call team. Grace Pariser and our experienced HR consultants provide expert HR support for businesses in Plymouth, Devon and Cornwall.';
$pageKeywords = 'HR On Call, about HR On Call, Grace Pariser HR consultant, Plymouth HR team, CIPD qualified Plymouth, HR consultant Devon Cornwall';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Who We Are</div>
      <h1>CIPD Qualified HR Consultant in Plymouth</h1>
      <p>Chartered HR expertise with a commercial focus for businesses across Plymouth, Devon and Cornwall</p>
    </div>
  </section>

  <!-- OUR APPROACH (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Our Approach</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Commercial HR Expertise You Can Rely On</h2>
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">We bring technical excellence and commercial understanding to every client relationship. Based in Plymouth, we work with businesses across Devon, Cornwall and remotely throughout the UK, providing tailored HR solutions that support business objectives while ensuring legal compliance.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Our approach is practical, solutions-focused and always aligned with your business goals. With experience across multiple sectors, we understand the unique challenges facing Southwest businesses and deliver HR support that makes a tangible difference.</p>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-balance-scale"></i><span>Employment law and employee relations expertise</span></div>
          <div class="oc-panel-item"><i class="fas fa-map-marked-alt"></i><span>Specialist Plymouth, Devon and Cornwall business knowledge</span></div>
          <div class="oc-panel-item"><i class="fas fa-briefcase"></i><span>A commercial approach that fits business reality</span></div>
          <div class="oc-panel-item"><i class="fas fa-users"></i><span>People-focused HR with employee wellbeing in mind</span></div>
          <div class="oc-panel-item"><i class="fas fa-folder-open"></i><span>A secure client portal to view your documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CREDENTIALS -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Credentials</div>
        <h2>Professional Credentials</h2>
        <p>Our background in HR delivers exceptional value to your business</p>
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
          <div class="oc-ico"><i class="fas fa-map-marked-alt"></i></div>
          <h3>Southwest Business Knowledge</h3>
          <p>Specialist knowledge of the Plymouth, Devon and Cornwall business landscape means we understand the unique challenges facing local businesses.</p>
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
        <h2>Meet the Team</h2>
      </div>
      <div class="oc-split" style="margin-top:44px; align-items:center;">
        <div style="text-align:center;">
          <img src="/assets/images/grace-pariser-headshot.jpg" width="400" height="400" alt="Grace Pariser" loading="lazy" style="width:240px; height:240px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(0,0,0,.3); display:inline-block; border:3px solid var(--gold);">
        </div>
        <div>
          <h3 style="color:#fff; font-size:24px;">Grace Pariser</h3>
          <div style="color:var(--gold); font-weight:600; font-size:15px; margin-top:6px;">Founder &amp; Lead Consultant</div>
          <div style="display:inline-flex; align-items:center; gap:8px; color:#C3D0E0; font-size:14px; margin-top:10px;"><i class="fas fa-award" style="color:var(--gold);"></i> MA HRM (Distinction) &middot; CIPD Level 7</div>
          <p style="color:#C3D0E0; font-size:15.5px; margin:18px 0 0; line-height:1.75;">Grace is a CIPD Level 7 qualified HR consultant with a Master's in Human Resource Management (Distinction) and experience across public and private sector organisations. She specialises in employment law, workplace investigations and complex employee relations cases.</p>
          <p style="color:#C3D0E0; font-size:15.5px; margin:14px 0 0; line-height:1.75;">As an independent consultant herself, Grace understands the unique challenges businesses face. She founded HR On Call to provide expert, practical HR support to businesses across Plymouth, Devon and Cornwall.</p>
          <p style="color:#C3D0E0; font-size:15.5px; margin:14px 0 0; line-height:1.75;">Based in Plymouth, Grace works with businesses of all sizes, offering commercial HR solutions that protect your business while treating people fairly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR VALUES -->
  <section id="values" class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Values</div>
        <h2>Our Values</h2>
        <p>The principles that guide how we work with you</p>
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
      <h2 style="margin-top:14px;">Ready for Expert HR Support?</h2>
      <p>Contact us today to discuss how we can help your business with professional, commercial HR solutions across Plymouth, Devon and Cornwall.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
