<?php
require_once 'config.php';

$pageTitle = 'HR Projects Plymouth | Restructures, TUPE & HR Audits Devon & Cornwall';
$pageDescription = 'Project-based HR support for Plymouth, Devon and Cornwall businesses – restructures and redundancy, TUPE transfers, HR audits, recruitment and HR set-up. From £100 per hour + VAT or a fixed project fee.';
$pageKeywords = 'HR projects Plymouth, redundancy consultation Devon, TUPE transfer Cornwall, HR audit Plymouth, recruitment support Southwest, HR setup small business';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>HR Projects</div>
      <h1>HR Projects</h1>
      <p>Hands-on, project-based HR for one-off needs across Plymouth, Devon and Cornwall – from £100 per hour + VAT or a fixed fee</p>
      <div class="oc-actions">
        <a href="#projects" class="oc-btn oc-pink">View Projects <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- INTRO (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Hands-On Support</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Specialist HR Delivery for Your Business</h2>
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">Some HR challenges need more than advice – they need someone to roll up their sleeves and deliver. Whether you're restructuring, taking on a team through a transfer, or building an HR function from scratch, we provide experienced project support shaped around your business.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Every project is scoped and quoted upfront – a fixed fee or £100 per hour + VAT – so you know exactly what you're getting and what it will cost. No open-ended commitments, just focused delivery for Southwest businesses.</p>
        <div style="margin-top:28px;">
          <a href="contact.php" class="oc-btn oc-pink">Discuss Your Project <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        </div>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-sitemap"></i><span>Restructures, TUPE, audits, recruitment and more</span></div>
          <div class="oc-panel-item"><i class="fas fa-tags"></i><span>Fixed fee or £100 per hour + VAT, your choice</span></div>
          <div class="oc-panel-item"><i class="fas fa-clipboard-check"></i><span>Every project scoped and quoted upfront</span></div>
          <div class="oc-panel-item"><i class="fas fa-map-marker-alt"></i><span>Local delivery across Plymouth, Devon and Cornwall</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>A secure client portal to view your documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECT TYPES -->
  <section id="projects" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>What We Do</div>
        <h2>Types of Project</h2>
        <p>Examples of the project work we deliver across the Southwest</p>
      </div>
      <div class="oc-grid3">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-sitemap"></i></div>
          <h3>Restructures &amp; Redundancy</h3>
          <p>Planning and running restructures, redundancy consultations, selection processes and at-risk communications, keeping you compliant and your people fairly treated throughout.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-exchange-alt"></i></div>
          <h3>TUPE Transfers</h3>
          <p>Managing the people side of business transfers – employee consultation, due diligence, harmonisation planning and compliance with the TUPE regulations.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-clipboard-check"></i></div>
          <h3>HR Audits</h3>
          <p>A thorough review of your contracts, policies and HR practices, with a clear report flagging risks and practical fixes to put you on solid ground.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-users"></i></div>
          <h3>Recruitment Campaigns</h3>
          <p>End-to-end recruitment support – job design, advertising, shortlisting, interview design, assessment and offer management – to help you find the right people.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-seedling"></i></div>
          <h3>Culture &amp; Engagement</h3>
          <p>Employee surveys, engagement strategies, culture change programmes and wellbeing initiatives that help build a workplace where people want to stay.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-cogs"></i></div>
          <h3>HR Set-Up &amp; Implementation</h3>
          <p>Building an HR function from scratch for growing Southwest businesses – contracts, handbooks, policies, onboarding, HR systems and manager training.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Process</div>
        <h2>How It Works</h2>
        <p>A clear process from scoping to delivery</p>
      </div>
      <div class="oc-steps">
        <div class="oc-step">
          <div class="num">1</div>
          <h3>Initial Call</h3>
          <p>Tell us what you need. We'll ask the right questions and assess the scope of the project.</p>
        </div>
        <div class="oc-step">
          <div class="num">2</div>
          <h3>Scope &amp; Quote</h3>
          <p>You get a clear proposal with deliverables, timeline and cost – fixed fee or hourly estimate.</p>
        </div>
        <div class="oc-step">
          <div class="num">3</div>
          <h3>Delivery</h3>
          <p>We deliver the project to your requirements, keeping you informed and involved throughout.</p>
        </div>
        <div class="oc-step">
          <div class="num">4</div>
          <h3>Handover</h3>
          <p>You get all deliverables, documentation and recommendations for any follow-up needed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CLEAR, UPFRONT BILLING -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head" style="max-width:760px; margin-left:auto; margin-right:auto;">
        <div class="oc-eyebrow"><span></span>How we charge</div>
        <h2>Straightforward, honest billing</h2>
        <p>You will always know what you are paying for, and why.</p>
      </div>
      <div class="oc-pair" style="max-width:760px; margin:44px auto 0;">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-stopwatch"></i></div>
          <h3>6-minute billing</h3>
          <p>We bill in 6-minute units, so you only pay for the minutes we actually spend on your work.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-tags"></i></div>
          <h3>Fixed &amp; capped fees</h3>
          <p>Want cost certainty? Plenty of work can be done on a fixed or capped fee, agreed before we start.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Got a Project in Mind?</h2>
      <p>Get in touch to discuss your requirements. We'll scope it out and give you a clear quote with no obligation. For ongoing support, see our <a href="/retainers.php">HR support plans</a>.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<!-- Service Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "HR Project Consultancy",
    "name": "HR Projects",
    "description": "Project-based HR support for Plymouth, Devon and Cornwall businesses including restructures and redundancy, TUPE transfers, HR audits, recruitment and HR set-up.",
    "provider": {
        "@type": "LocalBusiness",
        "name": "HR On Call",
        "url": "https://plymouth.on-call.co.uk"
    },
    "areaServed": [
        {"@type": "City", "name": "Plymouth"},
        {"@type": "AdministrativeArea", "name": "Devon"},
        {"@type": "AdministrativeArea", "name": "Cornwall"}
    ],
    "offers": {
        "@type": "Offer",
        "priceCurrency": "GBP",
        "price": "100",
        "unitText": "per hour"
    }
}
</script>

<?php include 'includes/footer.php'; ?>
