<?php
require_once 'config.php';

$pageTitle = 'Workplace Investigations & Disciplinary Hearings Plymouth | Devon & Cornwall';
$pageDescription = 'Independent workplace investigations, disciplinary and grievance hearings and appeals for Plymouth, Devon and Cornwall employers. Advice from £100/hour, or we run it for you from £120/hour + VAT, on-site or remote.';
$pageKeywords = 'workplace investigation Plymouth, disciplinary hearing Devon, grievance hearing Cornwall, independent investigator Southwest, ACAS code, disciplinary appeal, grievance appeal';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Workplace Support</div>
      <h1>Workplace Issues</h1>
      <p>When something difficult lands, you need an experienced, impartial pair of hands. We advise you behind the scenes or step in and run it – across Plymouth, Devon and Cornwall.</p>
      <div class="oc-pillnav">
        <a href="#issues">How We Help</a>
        <a href="#pricing">Pricing</a>
      </div>
    </div>
  </section>

  <!-- WHY US (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Why Us</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Impartial Support When It Matters Most</h2>
        <p style="font-size:16px; color:var(--muted); margin:18px 0 0;">Workplace issues are stressful and high-risk. A complaint, a conduct concern, a performance problem that needs a formal process – getting it wrong is costly, and it is hard to stay genuinely impartial when it is your own business.</p>
        <p style="font-size:16px; color:var(--muted); margin:14px 0 0;">We support you at every stage, from investigation through to hearing and appeal. We can guide you from behind the scenes, or step in and run the whole process for you – in person across the Southwest or remotely anywhere in the UK.</p>
        <div style="margin-top:26px;">
          <a href="contact.php" class="oc-btn oc-pink">Discuss Your Situation</a>
        </div>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-balance-scale"></i><span>Independent and impartial at every stage</span></div>
          <div class="oc-panel-item"><i class="fas fa-user-shield"></i><span>We advise behind the scenes or run the whole process for you</span></div>
          <div class="oc-panel-item"><i class="fas fa-gavel"></i><span>Every step follows the ACAS Code of Practice</span></div>
          <div class="oc-panel-item"><i class="fas fa-map-marker-alt"></i><span>On-site across Plymouth, Devon and Cornwall or remotely anywhere in the UK</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>A secure client portal to view your documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- WORKPLACE SERVICES (all cards in one section) -->
  <section id="issues" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>How We Help</div>
        <h2>How We Help</h2>
        <p>Impartial, ACAS-compliant support at every stage</p>
      </div>

      <!-- Workplace Investigations -->
      <div class="oc-srv" style="margin-top:44px;">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Establishing Facts</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-search"></i></div>
            <h3>Workplace Investigations</h3>
          </div>
          <p>Independent investigation of misconduct, bullying and harassment complaints or grievances – witness interviews, evidence gathering and a clear written report with findings and recommendations.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Independent investigation of misconduct</li>
            <li>Bullying and harassment complaints or grievances</li>
            <li>Witness interviews and evidence gathering</li>
            <li>Clear written report with findings and recommendations</li>
          </ul>
        </div>
      </div>

      <!-- Disciplinary Hearings -->
      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Formal Action</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-gavel"></i></div>
            <h3>Disciplinary Hearings</h3>
          </div>
          <p>We chair or advise on disciplinary hearings so the process is fair, lawful and follows the ACAS Code – including hearing packs, decision-maker support and clearly reasoned outcome letters.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Chairing or advising on disciplinary hearings</li>
            <li>Fair, lawful and follows the ACAS Code</li>
            <li>Hearing packs and decision-maker support</li>
            <li>Clearly reasoned outcome letters</li>
          </ul>
        </div>
      </div>

      <!-- Grievance Hearings -->
      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Employee Complaints</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-comments"></i></div>
            <h3>Grievance Hearings</h3>
          </div>
          <p>We make sure formal complaints are heard properly and fairly – particularly valuable where the grievance is against the owner, or no one internally is genuinely independent.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Formal complaints heard properly and fairly</li>
            <li>Valuable where the grievance is against the owner</li>
            <li>Ideal where no one internally is genuinely independent</li>
            <li>Robust, impartial handling both sides can trust</li>
          </ul>
        </div>
      </div>

      <!-- Disciplinary & Grievance Appeals -->
      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Independent Review</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
            <h3>Disciplinary &amp; Grievance Appeals</h3>
          </div>
          <p>An appeal must be heard by someone who was not involved in the original decision. We provide that independent review, assessing whether the process was fair and the outcome reasonable.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Heard by someone not involved in the original decision</li>
            <li>Independent review of the process and outcome</li>
            <li>Assessing whether the process was fair</li>
            <li>Assessing whether the outcome was reasonable</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>The Process</div>
        <h2>How It Works</h2>
        <p>A straightforward process from first call to resolution</p>
      </div>
      <div class="oc-steps">
        <div class="oc-step">
          <div class="num">1</div>
          <h3>Initial Call</h3>
          <p>Tell us what's happened. We'll assess the situation and advise on the best course of action.</p>
        </div>
        <div class="oc-step">
          <div class="num">2</div>
          <h3>Scope &amp; Plan</h3>
          <p>We'll set out what needs to happen, the timeline and the cost, so there are no surprises.</p>
        </div>
        <div class="oc-step">
          <div class="num">3</div>
          <h3>Handle It</h3>
          <p>We run the investigation, hearing or appeal on your behalf, keeping you informed throughout.</p>
        </div>
        <div class="oc-step">
          <div class="num">4</div>
          <h3>Resolution</h3>
          <p>You get a clear outcome, properly documented, with advice on any follow-up needed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section id="pricing" class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head" style="max-width:760px; margin-left:auto; margin-right:auto;">
        <div class="oc-eyebrow"><span></span>Transparent Pricing</div>
        <h2>Pricing</h2>
        <p>Charged by the hour, with no hidden fees</p>
        <p style="font-size:14px; color:var(--soft); margin:10px 0 0;">All prices shown exclude VAT.</p>
      </div>
      <div class="oc-pair" style="max-width:760px; margin:44px auto 0;">
        <div class="oc-price">
          <div class="pname">Advisory Support</div>
          <div class="pprice">£100 <small>per hour + VAT</small></div>
          <p class="pdesc">We guide you from behind the scenes so you can run the process yourself with confidence.</p>
          <ul class="oc-ticklist">
            <li>Guidance on how to handle the situation</li>
            <li>Reviewing your documentation and letters</li>
            <li>Advising on process and next steps</li>
            <li>Making sure you follow the ACAS Code</li>
          </ul>
        </div>
        <div class="oc-price">
          <div class="pname">Specialist Support</div>
          <div class="pprice">£120 <small>per hour + VAT</small></div>
          <p class="pdesc">We step in and handle the process for you – on-site across the Southwest or remotely.</p>
          <ul class="oc-ticklist">
            <li>Conducting investigations and hearings</li>
            <li>Chairing disciplinary and grievance meetings</li>
            <li>Drafting all outcome letters and reports</li>
            <li>Managing the entire process end to end</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Support</div>
      <h2 style="margin-top:14px;">Dealing with a workplace issue?</h2>
      <p>Get in touch to discuss your situation and how we can help.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch to Discuss <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<!-- Service Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Workplace Investigations & Hearings",
    "name": "Workplace Issues Support",
    "description": "Independent workplace investigations, disciplinary and grievance hearings and appeals for employers in Plymouth, Devon and Cornwall, delivered on-site or remotely.",
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
        "price": "120",
        "unitText": "per hour"
    }
}
</script>

<?php include 'includes/footer.php'; ?>
