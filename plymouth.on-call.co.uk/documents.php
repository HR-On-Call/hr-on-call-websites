<?php
require_once 'config.php';

$pageTitle = 'Employment Contracts & HR Documents Plymouth | Drafting Devon & Cornwall';
$pageDescription = 'Fixed-fee employment documents for Plymouth, Devon and Cornwall businesses: bespoke contracts and handbooks from £600 + VAT, ACAS early conciliation, settlement agreements, plus the HR Bundle (a £200 saving).';
$pageKeywords = 'employment contracts Plymouth, employee handbook Devon, settlement agreement Cornwall, ACAS early conciliation, HR documents Plymouth, contract drafting Southwest';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Documents</div>
      <h1>Documents &amp; Drafting</h1>
      <p>Professionally drafted employment documents for Southwest businesses – fixed fees, so you know the cost upfront</p>
      <div class="oc-actions">
        <a href="#services" class="oc-btn oc-pink">View Documents &amp; Pricing <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- INTRO (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Why It Matters</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Drafted From Scratch, Built to Protect You</h2>
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">Your employment documents are the foundation of every working relationship. Out-of-date contracts and vague policies leave your business exposed and make people harder to manage.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">We draft bespoke documents around your business, your roles and the way you actually work – legally compliant, clearly written and practical to use. No off-the-shelf templates, and a fixed fee agreed before we start.</p>
        <div style="margin-top:28px;">
          <a href="contact.php" class="oc-btn oc-pink">Discuss Your Requirements <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        </div>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-file-contract"></i><span>Drafted from scratch around your business, never off-the-shelf</span></div>
          <div class="oc-panel-item"><i class="fas fa-balance-scale"></i><span>Legally compliant and clearly written</span></div>
          <div class="oc-panel-item"><i class="fas fa-tags"></i><span>Fixed fees, so you know the cost upfront</span></div>
          <div class="oc-panel-item"><i class="fas fa-map-marker-alt"></i><span>Local support for Plymouth, Devon and Cornwall businesses</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>A secure client portal to view your documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Services</div>
        <h2>What We Draft</h2>
        <p>Fixed-fee pricing so you know the cost upfront</p>
        <p style="font-size:14px; color:var(--soft); margin:8px 0 0;">All prices shown exclude VAT.</p>
      </div>

      <div class="oc-srv" style="margin-top:44px;">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
            <h3>Employment Contracts</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£600 + VAT</div>
          <p>Bespoke employment contracts tailored to your business needs, ensuring full legal compliance and protection for both employer and employee.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Tailored to your business needs</li>
            <li>Full legal compliance</li>
            <li>Protection for both employer and employee</li>
          </ul>
        </div>
      </div>

      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-book"></i></div>
            <h3>Employee Handbooks</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£600 + VAT</div>
          <p>Comprehensive staff handbooks covering all essential policies, procedures and workplace guidelines to keep your business compliant and your team informed.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>All essential policies and procedures</li>
            <li>Workplace guidelines your team can follow</li>
            <li>Keeps your business compliant</li>
          </ul>
        </div>
      </div>

      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-comments"></i></div>
            <h3>ACAS Early Conciliation Support</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£500 + VAT</div>
          <p>Complete support through the ACAS early conciliation process including reviewing disputes, liaising with ACAS, negotiating on your behalf. An additional fee of £500 + VAT is applicable for drafting ACAS COT3 agreements.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Reviewing disputes</li>
            <li>Liaising with ACAS</li>
            <li>Negotiating on your behalf</li>
            <li>Drafting ACAS COT3 agreements (additional £500 + VAT)</li>
          </ul>
        </div>
      </div>

      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-handshake"></i></div>
            <h3>Settlement Agreements</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£750 + VAT</div>
          <p>Professional settlement agreements to resolve employment disputes cleanly and legally, protecting both parties and avoiding potential tribunal claims.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Resolve employment disputes cleanly and legally</li>
            <li>Protects both parties</li>
            <li>Avoids potential tribunal claims</li>
          </ul>
        </div>
      </div>

      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-search"></i></div>
            <h3>Document Reviews</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£400 + VAT</div>
          <p>A full review of your existing HR documentation to ensure it complies with current employment legislation, data protection rules and any specific requirements for your industry.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Tracked changes and comments in your documents</li>
            <li>A summary of changes and further advice</li>
            <li>Covers employment law, data protection and industry-specific requirements</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- THE HR BUNDLE (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Best Value</div>
        <h2>The HR Bundle</h2>
        <p>Get your essentials sorted in one go</p>
      </div>
      <div class="oc-cardn" style="margin-top:44px;">
        <div class="oc-srv-head">
          <div class="oc-ico"><i class="fas fa-box-open"></i></div>
          <h3>The HR Bundle</h3>
        </div>
        <div style="font-size:22px; font-weight:700; color:var(--gold); margin:6px 0 14px;">£1,500 + VAT <span style="font-size:0.7em; font-weight:400;">(a £200 saving)</span></div>
        <p style="margin:0 0 18px;">Getting set up, or replacing documents that have gone stale? Our bundle puts the three essentials together and saves you £200. Most businesses then move onto a monthly plan to keep everything current. Director service agreements and consultancy or self-employed agreements are quoted separately.</p>
        <ul class="oc-ticklist">
          <li>A bespoke core employment contract, with permanent, fixed-term and zero-hours variations plus role-specific tweaks</li>
          <li>A bespoke employee handbook</li>
          <li>An HR audit with a full written report and recommendations</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- OTHER DOCUMENTS -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-srv" style="grid-template-columns:1fr; max-width:1000px;">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-cog"></i></div>
            <h3>Need Something Else?</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">Fixed-fee quote</div>
          <p style="margin:0 0 22px;">Offer letters, job descriptions, standalone policies, redundancy scripts, probation and outcome letters – we can draft any employment document your business needs. <a href="contact.php">Get in touch</a> for a fixed-fee quote.</p>
          <ul class="oc-ticklist">
            <li>Offer letters</li>
            <li>Job descriptions</li>
            <li>Standalone policies</li>
            <li>Redundancy scripts</li>
            <li>Probation and outcome letters</li>
          </ul>
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
      <h2 style="margin-top:14px;">Need Employment Documents?</h2>
      <p>Get in touch to discuss what you need. Everything is drafted to your specific requirements and fully legally compliant. For ongoing support, see our <a href="/retainers.php">HR support plans</a>.</p>
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
    "serviceType": "Employment Document Drafting",
    "name": "Employment Contracts & HR Documents",
    "description": "Fixed-fee employment contracts, employee handbooks, ACAS early conciliation support, settlement agreements and HR document reviews for businesses in Plymouth, Devon and Cornwall.",
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
        "@type": "AggregateOffer",
        "priceCurrency": "GBP",
        "lowPrice": "400",
        "highPrice": "1500",
        "description": "Employment contracts and handbooks from £600, ACAS support from £500, settlement agreements £750, document reviews £400, and the HR Bundle at £1,500 – all plus VAT."
    }
}
</script>

<?php include 'includes/footer.php'; ?>
