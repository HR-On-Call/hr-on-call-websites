<?php
require_once 'config.php';

$pageTitle = 'HR Support Plans Plymouth | Monthly HR Retainer Devon & Cornwall';
$pageDescription = 'Monthly HR support plans for Plymouth, Devon and Cornwall businesses from £75 + VAT. The HR Library, expert advice time, the Handbook Portal and an annual HR audit – pick a level and scale up as you grow.';
$pageKeywords = 'HR support plans Plymouth, monthly HR retainer Plymouth, HR retainer Devon, outsourced HR Cornwall, HR library, HR advice Plymouth, employment law support Southwest';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>HR Support Plans</div>
      <h1>Monthly HR Support Plans</h1>
      <p>Ongoing HR for Plymouth, Devon and Cornwall businesses – documents you can trust and an expert to call on, for a fixed monthly fee</p>
      <div class="oc-actions">
        <a href="#retainer" class="oc-btn oc-pink">Compare Plans</a>
        <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- WHY A MONTHLY PLAN (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Why a monthly plan</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Expert HR on hand, without the in-house cost</h2>
        <p style="font-size:16px; color:var(--muted); margin:18px 0 0;">You do not need a full-time HR department to get proper HR. For a fixed monthly fee you get documents you can rely on, expert advice when a question comes up, and someone local to lean on when something tricky lands on your desk.</p>
        <p style="font-size:16px; color:var(--muted); margin:14px 0 0;">Every plan includes access to our HR Library and our wider partner network. Choose the level of hands-on support that suits you, and step up as your business grows.</p>
        <div style="margin-top:26px;">
          <a href="contact.php" class="oc-btn oc-pink">Discuss Your HR Needs</a>
        </div>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-pound-sign"></i><span>Fixed monthly plans from £75/month + VAT</span></div>
          <div class="oc-panel-item"><i class="fas fa-book"></i><span>Every plan includes the HR Library</span></div>
          <div class="oc-panel-item"><i class="fas fa-map-marker-alt"></i><span>Someone local across Plymouth, Devon and Cornwall</span></div>
          <div class="oc-panel-item"><i class="fas fa-handshake"></i><span>Partner network: software, insurance, solicitors</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>A secure client portal to view your documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- THE PLANS -->
  <section id="retainer" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Membership</div>
        <h2>The plans</h2>
        <p>Start with the essentials and step up as you grow</p>
        <p style="font-size:13.5px; color:var(--soft); margin:8px 0 0;">All prices exclude VAT.</p>
      </div>
      <div class="oc-price-grid">
        <!-- HR Library -->
        <div class="oc-price">
          <div class="pname">HR Library</div>
          <p class="pdesc">Professional HR documents, ready when you are</p>
          <div class="pprice">£75 <small>/month + VAT</small></div>
          <ul class="oc-ticklist">
            <li>Full access to our <span class="hr-collection-link" onclick="showHRCollectionModal(event)" style="color:var(--pink); font-weight:600; cursor:pointer;">HR Library</span>: policies, letters, forms and guides, all written for UK employers and kept current</li>
            <li>HR calculators, the employment law timeline and ready-to-use toolkits</li>
            <li>Download and use as much as you like</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">The starting point for every business. Ideal if you mainly want reliable documents to work from.</p>
          <a href="contact.php" class="oc-btn oc-ghost" style="margin-top:18px;">Get in Touch</a>
        </div>

        <!-- HR Advice -->
        <div class="oc-price">
          <div class="pname">HR Advice</div>
          <p class="pdesc">Documents plus an expert to call on</p>
          <div class="pprice">£150 <small>/month + VAT</small></div>
          <p style="font-weight:600; color:var(--navy); font-size:13px; margin:16px 0 0;">Everything in HR Library, plus:</p>
          <ul class="oc-ticklist">
            <li>1 hour of our time each month, spent however works for you: phone or email advice, a quick letter or short document, or a review of your existing contracts, handbook and policies</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">A dependable safety net. The Library covers the routine, and your hour handles the questions that need a proper answer.</p>
          <a href="contact.php" class="oc-btn oc-ghost" style="margin-top:18px;">Get in Touch</a>
        </div>

        <!-- HR Support (featured) -->
        <div class="oc-price featured">
          <div class="oc-badge">Most popular</div>
          <div class="pname">HR Support</div>
          <p class="pdesc">For teams that call on HR regularly</p>
          <div class="pprice">£300 <small>/month + VAT</small></div>
          <p style="font-weight:600; color:var(--navy); font-size:13px; margin:16px 0 0;">Everything in HR Advice, plus:</p>
          <ul class="oc-ticklist">
            <li>3 hours of our time each month</li>
            <li>Access to the <span class="handbook-link" onclick="showHandbookModal(event)" style="color:var(--pink); font-weight:600; cursor:pointer;">Handbook Portal</span>, keeping your team's policies in one up-to-date place</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">The sweet spot for growing Southwest teams – enough time to get ahead of issues rather than just firefight.</p>
          <a href="contact.php" class="oc-btn oc-pink" style="margin-top:18px;">Get in Touch</a>
        </div>

        <!-- HR Managed -->
        <div class="oc-price">
          <div class="pname">HR Managed</div>
          <p class="pdesc">HR effectively run for you</p>
          <div class="pprice">£600 <small>/month + VAT</small></div>
          <p style="font-weight:600; color:var(--navy); font-size:13px; margin:16px 0 0;">Everything in HR Support, plus:</p>
          <ul class="oc-ticklist">
            <li>6 hours of our time each month</li>
            <li>An annual HR audit with a full written report and recommendations</li>
            <li>10% off all document drafting</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">The closest thing to an in-house HR department, without the headcount. Best if HR is a regular part of running your business.</p>
          <a href="contact.php" class="oc-btn oc-ghost" style="margin-top:18px;">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT YOUR HOURS COVER + GOOD TO KNOW -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head" style="max-width:900px; margin-left:auto; margin-right:auto;">
        <div class="oc-eyebrow"><span></span>Your time</div>
        <h2>What your hours cover</h2>
      </div>
      <div class="oc-card" style="max-width:900px; margin:44px auto 0;">
        <p style="color:var(--muted); font-size:15px; margin:0; line-height:1.7;">Your monthly hours can be spent on advice by phone or email, ad hoc letters and short documents, or a review of your existing contracts, handbook and policies.</p>
        <p style="color:var(--muted); font-size:15px; margin:12px 0 0; line-height:1.7;">Building documents from scratch – contracts, handbooks, standalone policies, settlement agreements and ACAS work – is quoted separately at a fixed fee (see <a href="/documents.php" style="color:var(--pink); font-weight:600;">Documents &amp; Drafting</a>). Where we step in and run a workplace issue for you – an investigation, disciplinary, grievance or appeal – that's £120 per hour + VAT (see <a href="/workplace-issues.php" style="color:var(--pink); font-weight:600;">Workplace Issues</a>), though advice on handling it yourself is always part of your time.</p>
      </div>

      <div class="oc-head" style="max-width:900px; margin:56px auto 0;">
        <div class="oc-eyebrow"><span></span>The detail</div>
        <h2>Good to know</h2>
      </div>
      <div class="oc-card" style="max-width:900px; margin:44px auto 0;">
        <ul class="oc-ticklist">
          <li>Plans run on a 12-month term.</li>
          <li>At HR Advice and HR Support, unused time rolls over to the next month and then expires; extra time is £100 per hour + VAT.</li>
          <li>Every plan also opens up our partner network – discounted HR software, insurance introductions, employment-solicitor referrals and employee benefits and EAPs.</li>
        </ul>
      </div>

      <!-- CLEAR, UPFRONT BILLING -->
      <div class="oc-head" style="max-width:760px; margin:56px auto 0;">
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
      <h2>Not sure which plan fits?</h2>
      <p>Get in touch and we'll talk it through – no obligation, just a straight conversation about what your Southwest business actually needs.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<script>
// HR Library Modal Functions
function showHRCollectionModal(event) {
    event.preventDefault();
    document.getElementById('hr-collection-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeHRCollectionModal() {
    document.getElementById('hr-collection-modal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function showHandbookModal(event) {
    event.preventDefault();
    document.getElementById('handbook-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeHandbookModal() {
    document.getElementById('handbook-modal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeHRCollectionModal();
        closeHandbookModal();
    }
});
</script>

<!-- HR Library Modal -->
<div id="hr-collection-modal" class="modal-overlay" onclick="closeHRCollectionModal()">
    <div class="modal-content" onclick="event.stopPropagation()">
        <div class="modal-header">
            <h3>The HR Library</h3>
            <span class="modal-close" onclick="closeHRCollectionModal()">&times;</span>
        </div>
        <div class="modal-body">
            <p>The HR Library is our comprehensive collection of professional HR templates and documents, written for UK employers and kept up to date. It is included with every plan.</p>
            <h4>What's Included:</h4>
            <ul>
                <li>Policy templates (disciplinary, grievance, absence, etc.)</li>
                <li>Job description templates</li>
                <li>Performance review forms and templates</li>
                <li>HR letters and communications templates</li>
                <li>Interview guides and forms</li>
                <li>Onboarding checklists and documentation</li>
                <li>HR calculators, the employment law timeline and practical toolkits</li>
            </ul>
            <p>All templates are legally compliant, regularly updated, and can be customised to your business needs.</p>
        </div>
    </div>
</div>

<!-- Handbook Portal Modal -->
<div id="handbook-modal" class="modal-overlay" onclick="closeHandbookModal()">
    <div class="modal-content" onclick="event.stopPropagation()">
        <div class="modal-header">
            <h3>Handbook Portal</h3>
            <span class="modal-close" onclick="closeHandbookModal()">&times;</span>
        </div>
        <div class="modal-body">
            <p>The Handbook Portal is a secure online platform where your employees can access up-to-date policies and procedures 24/7 from any device.</p>
            <h4>Key Features:</h4>
            <ul>
                <li>24/7 access from desktop, tablet, or mobile</li>
                <li>Always up-to-date policies and procedures</li>
                <li>Secure login for employees</li>
                <li>Easy navigation and search functionality</li>
                <li>Document version control</li>
                <li>Mobile-responsive design</li>
            </ul>
            <p>This keeps your team on the latest HR information and company policies, improving compliance and reducing queries.</p>
        </div>
    </div>
</div>

<!-- Service Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "HR Consultancy",
    "name": "Monthly HR Support Plans",
    "description": "Monthly HR support plans for Plymouth, Devon and Cornwall businesses, including the HR Library, included advice time each month, the Handbook Portal and an annual HR audit.",
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
        "lowPrice": "75",
        "highPrice": "600",
        "offerCount": "4",
        "description": "HR Library £75, HR Advice £150, HR Support £300 and HR Managed £600 per month, all plus VAT."
    }
}
</script>

<?php include 'includes/footer.php'; ?>
