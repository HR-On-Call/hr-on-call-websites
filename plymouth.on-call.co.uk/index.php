<?php
require_once 'config.php';

// Homepage uses a special title format without the " | HR On Call" suffix
$pageTitle = 'HR On Call | HR Consultant Plymouth, Devon & Cornwall';
$isHomepage = true; // Flag for special title handling
$pageDescription = 'Expert HR consultancy based in Plymouth. Flexible support for SMEs across Devon and Cornwall – from contracts and policies to employee relations and investigations.';
$pageKeywords = 'HR On Call, HR consultant Plymouth, Plymouth HR services, HR support Plymouth, employment law Plymouth, HR outsourcing Devon, HR consultant Devon, HR Cornwall, employee relations Plymouth';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')]; // shared "oc" (Vault-look) design system

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>HR consultant Plymouth, Devon &amp; Cornwall</div>
      <h1>Local HR Expertise for Plymouth, Devon and Cornwall Businesses</h1>
      <p>Professional HR support when you need it, brought to you by Grace Pariser. Expert employment law advice, HR outsourcing and employee relations support tailored to your business needs.</p>
      <div class="oc-actions">
        <a href="services.php" class="oc-btn oc-pink">View Services <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Why HR On Call</div>
        <h2>Commercial HR Expertise When You Need It</h2>
        <p>Supporting businesses throughout Plymouth, Devon and Cornwall with practical, expert HR support.</p>
      </div>
      <div class="oc-grid3">
        <a href="about.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-map-marker-alt"></i></div>
          <h3>Local HR Knowledge</h3>
          <p>We understand the Southwest business landscape and provide HR solutions tailored to the unique challenges faced by local businesses.</p>
          <span class="oc-link">Learn about us <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="services.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-chart-line"></i></div>
          <h3>Commercial Approach</h3>
          <p>Our HR solutions balance best practice with practical commercial reality, ensuring you get advice that works for your business.</p>
          <span class="oc-link">View services <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="contact.php" class="oc-card">
          <div class="oc-ico"><i class="fas fa-handshake"></i></div>
          <h3>Flexible Support</h3>
          <p>Facing a tricky employee issue or need a trusted pair of hands? Get expert HR support across Plymouth, Devon and Cornwall – on-site or remote.</p>
          <span class="oc-link">Get started <i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- ABOUT PREVIEW -->
  <section class="oc-sec" style="background:#FBF8F2; border-top:1px solid #EFEADF; border-bottom:1px solid #EFEADF;">
    <div class="oc-wrap oc-split">
      <div style="text-align:center;">
        <img src="/assets/images/grace-pariser-headshot.jpg" width="400" height="400" alt="Grace Pariser HR Consultant" loading="lazy" style="width:230px; height:230px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(16,30,51,.18); display:inline-block;">
        <div style="font-size:18px; font-weight:700; color:var(--navy); margin-top:20px;">Grace Pariser</div>
        <div style="font-size:14px; color:var(--soft);">Founder &amp; HR Consultant</div>
      </div>
      <div>
        <div class="oc-eyebrow"><span></span>Who we are</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Commercial HR Expertise You Can Rely On</h2>
        <p style="font-size:17px; color:#4A5568; margin:18px 0 0;">We bring technical excellence and commercial understanding to every client relationship.</p>
        <p style="font-size:17px; color:#4A5568; margin:14px 0 0;">Based in Plymouth, we work with businesses across Devon, Cornwall and remotely throughout the UK, providing tailored HR solutions that support business objectives while ensuring legal compliance.</p>
        <div style="display:flex; flex-wrap:wrap; gap:14px; margin-top:28px;">
          <a href="about.php" class="oc-btn oc-pink">More About Us</a>
          <a href="about.php#values" class="oc-btn oc-ghost">Our Values</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>What we do</div>
        <h2>Comprehensive HR Services</h2>
        <p>Professional HR support tailored to businesses across Plymouth, Devon and Cornwall</p>
      </div>
      <div class="oc-grid4">
        <a href="retainers.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-calendar-check"></i></div>
          <h3>Retained Support</h3>
          <p>Fixed monthly plans giving you the HR Library, expert advice and our time each month, with the Handbook Portal and an annual audit on higher tiers – from £75/month + VAT.</p>
          <span class="oc-link">View HR support plans <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="documents.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
          <h3>One-Off Drafting</h3>
          <p>Employment contracts, employee handbooks, settlement agreements and ACAS early conciliation support when you need them.</p>
          <span class="oc-link">View drafting services <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="workplace-issues.php" class="oc-cardn">
          <div class="oc-ico"><i class="fas fa-users"></i></div>
          <h3>Pay As You Go</h3>
          <p>Flexible advisory and specialist HR support charged by the hour – from expert guidance through to hands-on delivery.</p>
          <span class="oc-link">See pay-as-you-go support <i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- VALUES -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head center">
        <div class="oc-eyebrow"><span></span>How we work</div>
        <h2>Our Values</h2>
        <p>The principles that guide how we work with you</p>
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
        <a href="about.php#values" class="oc-btn oc-ghost">Learn More About Our Values</a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <h2>Ready for Expert HR Support?</h2>
      <p>Contact us today to discuss how we can help your business with professional, commercial HR solutions across Plymouth, Devon and Cornwall.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
