<?php
require_once 'config.php';

$pageTitle = 'HR Projects';
$pageDescription = 'Project-based HR support for UK businesses. From restructures and TUPE transfers to HR audits, recruitment campaigns and culture change programmes. From £100 per hour + VAT or fixed fee.';
$pageKeywords = 'HR project support UK, restructure redundancy consultation, TUPE transfer HR, HR audit, recruitment support, performance management, employee relations project, HR consultancy UK';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>HR Projects</div>
      <h1>HR Projects</h1>
      <p>Expert, hands-on HR support for one-off projects and specific business needs, from £100 per hour + VAT or fixed fee.</p>
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
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">Some HR challenges need more than advice, they need someone to roll up their sleeves and deliver. Whether you're restructuring, onboarding a new team, or need an HR function built from scratch, we provide experienced, project-based support tailored to your business.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Every project is scoped and quoted upfront, either as a fixed fee or at £100 per hour + VAT, so you know exactly what you're getting and what it will cost. No surprises, no open-ended retainers, just focused, expert delivery.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Need help with a disciplinary, grievance or investigation? See our <a href="/workplace-issues">Workplace Issues</a> service. For employment documents, see <a href="/documents">Documents &amp; Drafting</a>. For ongoing monthly support, consider our <a href="/retainers">HR Support Plans</a>.</p>
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
          <div class="oc-panel-item"><i class="fas fa-laptop"></i><span>Delivered remotely across the UK</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>Your own client portal for documents, emails, time and costs</span></div>
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
        <p>Examples of the project work we deliver for businesses across the UK</p>
      </div>
      <div class="oc-grid3">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-sitemap"></i></div>
          <h3>Restructures &amp; Redundancy</h3>
          <p>Planning and managing restructures, redundancy consultations, selection processes and at-risk communications. We ensure legal compliance and fair treatment throughout.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-exchange-alt"></i></div>
          <h3>TUPE Transfers</h3>
          <p>Managing the people side of business transfers, including employee consultation, due diligence, harmonisation planning and compliance with TUPE regulations.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-clipboard-check"></i></div>
          <h3>HR Audits</h3>
          <p>A thorough review of your HR practices, contracts, policies and compliance. You get a clear report identifying risks and practical recommendations to fix them.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-users"></i></div>
          <h3>Recruitment Campaigns</h3>
          <p>End-to-end recruitment support including job design, advertising, shortlisting, interview design, assessment and offer management. We find the right people for your business.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-seedling"></i></div>
          <h3>Culture &amp; Engagement</h3>
          <p>Employee surveys, engagement strategies, culture change programmes and wellbeing initiatives. We help you build a workplace where people want to stay and perform.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-cogs"></i></div>
          <h3>HR Setup &amp; Implementation</h3>
          <p>Building an HR function from scratch for growing businesses. Contracts, handbooks, policies, onboarding processes, HR systems and management training, everything you need.</p>
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
          <p>You get a clear proposal with deliverables, timeline and cost, either fixed fee or hourly estimate.</p>
        </div>
        <div class="oc-step">
          <div class="num">3</div>
          <h3>Delivery</h3>
          <p>We deliver the project to your requirements, keeping you informed and involved throughout.</p>
        </div>
        <div class="oc-step">
          <div class="num">4</div>
          <h3>Handover</h3>
          <p>You get all deliverables, documentation and recommendations for any follow-up actions needed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT EVERY CLIENT GETS -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head" style="max-width:760px; margin-left:auto; margin-right:auto;">
        <div class="oc-eyebrow"><span></span>How we bill</div>
        <h2>Clear, upfront billing</h2>
        <p>You always know what you're paying, and why.</p>
      </div>
      <div class="oc-pair" style="max-width:760px; margin:44px auto 0;">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-stopwatch"></i></div>
          <h3>6-minute billing</h3>
          <p>Time is charged in 6-minute units, so you only ever pay for the time you actually use.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-tags"></i></div>
          <h3>Fixed &amp; capped fees</h3>
          <p>Prefer certainty? We offer fixed and capped fees on many matters, agreed upfront.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Got a Project in Mind?</h2>
      <p>Get in touch to discuss your requirements. We'll scope it out and give you a clear quote with no obligation.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
