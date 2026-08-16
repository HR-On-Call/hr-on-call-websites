<?php
require_once 'config.php';

$pageTitle = 'HR Support Plans';
$pageDescription = 'Ongoing HR support on a simple monthly plan, from £75/month + VAT. Expert HR advice, documents and support for UK employers, with HR Library, HR Advice, HR Support and HR Managed plans plus the £1,500 HR Bundle.';
$pageKeywords = 'HR support plans UK, monthly HR support, HR retainer UK, HR library, employment law advice, employment contracts drafting, HR policy reviews, HR audit, handbook portal, outsourced HR';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>HR Support Plans</div>
      <h1>Ongoing HR support, sized to your business</h1>
      <p>Expert HR advice, documents and support on a simple monthly plan. Start with the essentials and step up as you grow.</p>
      <div class="oc-actions">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch</a>
        <a href="#plans" class="oc-btn oc-ghost">Compare Plans</a>
      </div>
    </div>
  </section>

  <!-- WHY A MONTHLY PLAN (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Why a monthly plan</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Expert HR support on tap, without the in-house hire</h2>
        <p style="font-size:16px; color:var(--muted); margin:18px 0 0;">Most businesses do not need a full-time HR team. They need someone experienced to call on when a question comes up, documents they can actually trust, and a steady hand when something tricky lands on their desk.</p>
        <p style="font-size:16px; color:var(--muted); margin:14px 0 0;">That is what these plans give you: practical, expert HR support on tap, without the cost of an in-house hire. Every plan includes access to our HR Library and our wider partner network. Choose the level of hands-on support that suits you, and move up as your needs grow.</p>
        <p style="font-size:16px; color:var(--muted); margin:14px 0 0;">For one-off documents, see <a href="/documents" style="color:var(--pink); font-weight:600;">Documents &amp; Drafting</a>. If you would prefer to pay as you go, see our <a href="/pay-as-you-go" style="color:var(--pink); font-weight:600;">HR Projects</a> service. Need us to run a workplace issue for you? See <a href="/workplace-issues" style="color:var(--pink); font-weight:600;">Workplace Issues</a>.</p>
        <div style="margin-top:26px;">
          <a href="contact.php" class="oc-btn oc-pink">Discuss Your Needs</a>
        </div>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-pound-sign"></i><span>Simple monthly plans from £75/month + VAT</span></div>
          <div class="oc-panel-item"><i class="fas fa-book"></i><span>Every plan includes the HR Library</span></div>
          <div class="oc-panel-item"><i class="fas fa-chart-line"></i><span>Scale up as your needs grow</span></div>
          <div class="oc-panel-item"><i class="fas fa-handshake"></i><span>Partner network: software, insurance, solicitors</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>Your own client portal for documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- THE PLANS -->
  <section id="plans" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Membership</div>
        <h2>The plans</h2>
        <p>Choose the level of hands-on support that suits you, and move up as your needs grow.</p>
        <p style="font-size:13.5px; color:var(--soft); margin:8px 0 0;">All prices exclude VAT.</p>
      </div>
      <div class="oc-price-grid">
        <!-- HR Library -->
        <div class="oc-price">
          <div class="pname">HR Library</div>
          <p class="pdesc">For businesses that want the documents without the hand-holding</p>
          <div class="pprice">£75 <small>/month + VAT</small></div>
          <ul class="oc-ticklist">
            <li>Full access to the <span class="hr-collection-link" onclick="showHRCollectionModal(event)" style="color:var(--pink); font-weight:600; cursor:pointer;">HR Library</span>: policies, letters, forms and guides, all written for UK employers and kept up to date</li>
            <li>HR calculators, the employment law timeline and practical toolkits</li>
            <li>Download and use as much as you need</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">The foundation everything else builds on. If you mostly want professional documents you can rely on, start here.</p>
          <a href="contact.php" class="oc-btn oc-ghost" style="margin-top:18px;">Get in Touch</a>
        </div>

        <!-- HR Advice -->
        <div class="oc-price">
          <div class="pname">HR Advice</div>
          <p class="pdesc">For businesses that want the documents and a regular expert to call on</p>
          <div class="pprice">£150 <small>/month + VAT</small></div>
          <p style="font-weight:600; color:var(--navy); font-size:13px; margin:16px 0 0;">Everything in HR Library, plus:</p>
          <ul class="oc-ticklist">
            <li>1 hour of our time each month, used however suits you: advice by phone or email, ad hoc letters and short documents, or a review of your existing contracts, handbook and policies</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">Your safety net. The Library keeps the day-to-day covered, and the hour is there for the questions that need a real answer.</p>
          <a href="contact.php" class="oc-btn oc-ghost" style="margin-top:18px;">Get in Touch</a>
        </div>

        <!-- HR Support (featured) -->
        <div class="oc-price featured">
          <div class="oc-badge">Most popular</div>
          <div class="pname">HR Support</div>
          <p class="pdesc">For businesses that lean on HR regularly and want more of our time</p>
          <div class="pprice">£300 <small>/month + VAT</small></div>
          <p style="font-weight:600; color:var(--navy); font-size:13px; margin:16px 0 0;">Everything in HR Advice, plus:</p>
          <ul class="oc-ticklist">
            <li>3 hours of our time each month</li>
            <li>Access to the <span class="handbook-link" onclick="showHandbookModal(event)" style="color:var(--pink); font-weight:600; cursor:pointer;">Handbook Portal</span>, so your team always has the latest policies in one place</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">The middle ground for growing teams. Enough of our time to stay ahead of issues, not just react to them.</p>
          <a href="contact.php" class="oc-btn oc-pink" style="margin-top:18px;">Get in Touch</a>
        </div>

        <!-- HR Managed -->
        <div class="oc-price">
          <div class="pname">HR Managed</div>
          <p class="pdesc">For businesses that want their HR effectively run for them</p>
          <div class="pprice">£600 <small>/month + VAT</small></div>
          <p style="font-weight:600; color:var(--navy); font-size:13px; margin:16px 0 0;">Everything in HR Support, plus:</p>
          <ul class="oc-ticklist">
            <li>6 hours of our time each month</li>
            <li>An annual HR audit, with a full report and recommendations</li>
            <li>10% off all drafting</li>
          </ul>
          <p class="pdesc" style="margin-top:auto;">As close to an outsourced HR department as it gets, without the headcount. Ideal if HR is a regular part of running your business and you would rather it was simply handled.</p>
          <a href="contact.php" class="oc-btn oc-ghost" style="margin-top:18px;">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT YOUR TIME COVERS -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head" style="max-width:900px; margin-left:auto; margin-right:auto;">
        <div class="oc-eyebrow"><span></span>Your time</div>
        <h2>What your monthly time covers</h2>
        <p>Your included hours are yours to spend however you like.</p>
      </div>
      <div class="oc-card" style="max-width:900px; margin:44px auto 0;">
        <ul class="oc-ticklist">
          <li>Advice by phone or email on any HR or employment question</li>
          <li>Drafting ad hoc letters and short documents</li>
          <li>Reviewing your existing contracts, handbook and policies</li>
        </ul>
        <p style="color:var(--muted); font-size:15px; margin:18px 0 0; line-height:1.7;">Building documents from scratch is always quoted separately at a fixed fee: employment contracts, handbooks, standalone policies, settlement agreements, COT3s and ACAS early conciliation.</p>
        <p style="color:var(--muted); font-size:15px; margin:12px 0 0; line-height:1.7;">Where a workplace issue needs us to step in and run it for you, such as an investigation, disciplinary, grievance or appeal, that is charged separately at £120 per hour + VAT. Advice on how to handle it yourself is always included in your time.</p>
      </div>
    </div>
  </section>

  <!-- MORE THAN ADVICE -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>What's included</div>
        <h2>More than advice</h2>
        <p>Every plan also opens up our partner network, so you can reach beyond day-to-day HR whenever you need to.</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-laptop-code"></i></div>
          <h3>HR software</h3>
          <p>Discounted HR software, which can be added straight onto your plan.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-shield-alt"></i></div>
          <h3>Insurance partners</h3>
          <p>Introductions to our insurance partners for employment and tribunal cover.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
          <h3>Employment solicitors</h3>
          <p>Referrals to trusted employment solicitors if a matter ever heads to litigation.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-heart"></i></div>
          <h3>Benefits &amp; EAPs</h3>
          <p>Sourcing of employee benefits and Employee Assistance Programmes (EAPs).</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GOOD TO KNOW -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head" style="max-width:780px; margin-left:auto; margin-right:auto;">
        <div class="oc-eyebrow"><span></span>The detail</div>
        <h2>Good to know</h2>
      </div>
      <div class="oc-card" style="max-width:780px; margin:44px auto 0;">
        <ul class="oc-ticklist">
          <li>All work is provided remotely. On-site attendance and travel are quoted separately.</li>
          <li>Plans run on a 12-month term.</li>
          <li>At HR Advice and HR Support, unused time carries over to the following month and then expires. Additional time is charged at £100 per hour + VAT.</li>
          <li>All prices exclude VAT.</li>
        </ul>
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
      <h2>Not sure which plan fits?</h2>
      <p>Get in touch and we will talk you through it. No obligation, just a straight conversation about what your business actually needs.</p>
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

// Handbook Portal Modal Functions
function showHandbookModal(event) {
    event.preventDefault();
    document.getElementById('handbook-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeHandbookModal() {
    document.getElementById('handbook-modal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key
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
            <p>All templates are legally compliant, regularly updated, and can be customised to your business needs. This saves you time and ensures consistency across your HR processes.</p>
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
            <p>This ensures your team always has access to the latest HR information and company policies, improving compliance and reducing queries.</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
