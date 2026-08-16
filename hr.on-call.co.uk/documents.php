<?php
require_once 'config.php';

$pageTitle = 'Documents & Drafting';
$pageDescription = 'Professional employment documents including bespoke contracts, employee handbooks, settlement agreements and ACAS early conciliation support. Fixed-fee pricing from £500 + VAT.';
$pageKeywords = 'employment contracts UK, employee handbook drafting, settlement agreement employer, ACAS early conciliation, ACAS COT3 agreement, dismissal letter, disciplinary outcome letter, grievance outcome letter, HR documents UK';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Documents</div>
      <h1>Documents &amp; Drafting</h1>
      <p>Professional employment documents drafted to protect your business – with fixed-fee pricing so you know the cost upfront</p>
      <div class="oc-actions">
        <a href="#services" class="oc-btn oc-pink">View Services &amp; Pricing <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- INTRO (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Why It Matters</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Professionally Drafted, Legally Compliant</h2>
        <p style="font-size:17px; color:var(--muted); margin:18px 0 0;">Your employment documents are the foundation of every employee relationship. Poorly drafted contracts and outdated policies leave your business exposed to legal risk and make it harder to manage your people effectively.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">We draft bespoke employment documents tailored to your business, ensuring they're legally compliant, clearly written and practical to use. Every document is drafted from scratch to your specific requirements – no off-the-shelf templates.</p>
        <p style="font-size:17px; color:var(--muted); margin:14px 0 0;">Dealing with a disciplinary, grievance or investigation? See our <a href="/workplace-issues">Workplace Issues</a> service. For ongoing HR advice and drafting, consider our <a href="/retainers">HR Support Plans</a>.</p>
        <div style="margin-top:28px;">
          <a href="contact.php" class="oc-btn oc-pink">Discuss Your Requirements <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        </div>
      </div>
      <div>
        <div class="oc-panel">
          <h4>Why HR On Call</h4>
          <div class="oc-panel-item"><i class="fas fa-file-contract"></i><span>Drafted from scratch to your requirements, never off-the-shelf</span></div>
          <div class="oc-panel-item"><i class="fas fa-balance-scale"></i><span>Legally compliant and up to date</span></div>
          <div class="oc-panel-item"><i class="fas fa-tags"></i><span>Fixed-fee pricing, so you know the cost upfront</span></div>
          <div class="oc-panel-item"><i class="fas fa-shield-alt"></i><span>Built to reduce your legal risk</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>Your own client portal for documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Services</div>
        <h2>What We Can Draft for You</h2>
        <p>Fixed-fee pricing so you know the cost upfront</p>
        <p style="font-size:14px; color:var(--soft); margin:8px 0 0;">All prices exclude VAT</p>
      </div>

      <div class="oc-srv" style="margin-top:44px;">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
            <h3>Employment Contracts</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£600 + VAT</div>
          <p>Bespoke employment contracts tailored to your business needs, ensuring full legal compliance and protection for both employer and employee. Each contract is drafted from scratch based on the role, your business and your specific requirements.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Full-time, part-time and fixed-term contracts</li>
            <li>Director and senior management contracts</li>
            <li>Zero-hours and casual worker agreements</li>
            <li>Restrictive covenants and confidentiality clauses</li>
            <li>Variations and contract amendments</li>
            <li>Fully compliant with current employment law</li>
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
          <p>Comprehensive staff handbooks covering all essential policies, procedures and workplace guidelines. Keeps your business compliant and your team informed about expectations and entitlements.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Disciplinary and grievance procedures</li>
            <li>Absence and sickness policies</li>
            <li>Equal opportunities and anti-harassment</li>
            <li>Data protection and social media policies</li>
            <li>Maternity, paternity and family-friendly policies</li>
            <li>Tailored to your business culture and operations</li>
          </ul>
        </div>
      </div>

      <div class="oc-srv">
        <div class="oc-srv-intro">
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-comments"></i></div>
            <h3>ACAS Early Conciliation</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">£500 + VAT</div>
          <p>Complete support through the ACAS early conciliation process. We review the dispute, liaise with ACAS and negotiate on your behalf to reach a resolution before it reaches a tribunal. An additional fee of £500 + VAT applies for drafting ACAS COT3 agreements.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Reviewing the dispute and assessing your position</li>
            <li>Liaising directly with ACAS on your behalf</li>
            <li>Negotiating settlement terms</li>
            <li>Drafting COT3 agreements (additional £500 + VAT)</li>
            <li>Advising on risk and likely tribunal outcomes</li>
            <li>Protecting your business from costly claims</li>
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
          <p>Professional settlement agreements to resolve employment disputes cleanly and legally, protecting both parties and avoiding potential tribunal claims. We handle the drafting, negotiation and finalisation.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Drafting bespoke settlement agreements</li>
            <li>Negotiating terms with the employee or their solicitor</li>
            <li>Without prejudice conversations and strategy</li>
            <li>Calculating appropriate settlement figures</li>
            <li>Tax-efficient structuring of payments</li>
            <li>Clean, legally watertight documentation</li>
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
        <h2>Bundle &amp; Save</h2>
        <p>Get your essentials sorted in one go</p>
      </div>
      <div class="oc-cardn" style="margin-top:44px;">
        <div class="oc-srv-head">
          <div class="oc-ico"><i class="fas fa-box-open"></i></div>
          <h3>The HR Bundle</h3>
        </div>
        <div style="font-size:22px; font-weight:700; color:var(--gold); margin:6px 0 14px;">£1,500 + VAT <span style="font-size:0.7em; font-weight:400;">(a £200 saving)</span></div>
        <p style="margin:0 0 18px;">The quickest way to get your business on solid ground. Three essentials in one package. Whether you are starting from scratch or replacing documents that are years out of date, this gets you sorted in one go. Most clients then move onto a monthly plan. Director service agreements and consultancy or self-employed agreements are quoted separately.</p>
        <ul class="oc-ticklist">
          <li>A bespoke core employment contract, with variations for permanent, fixed-term and zero-hours staff plus role-specific tweaks</li>
          <li>A bespoke employee handbook</li>
          <li>An HR audit, with a full report and recommendations</li>
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
            <div class="oc-ico"><i class="fas fa-folder-open"></i></div>
            <h3>Other Documents</h3>
          </div>
          <div style="font-size:20px; font-weight:700; color:var(--pink); margin:0 0 14px;">Price on request</div>
          <p style="margin:0 0 22px;">We can draft any employment document your business needs. Pricing depends on the scope and complexity of your requirements – get in touch and we'll give you a clear quote upfront.</p>
          <ul class="oc-ticklist">
            <li>Offer letters and conditional offer letters</li>
            <li>Job descriptions and person specifications</li>
            <li>Standalone policies (social media, IT, flexible working, etc.)</li>
            <li>Procedure guides (disciplinary, grievance, absence, etc.)</li>
            <li>Redundancy consultation letters and scripts</li>
            <li>Reference request and reference reply templates</li>
            <li>Probation review letters and extension letters</li>
            <li>Invitation to meeting and outcome letter templates</li>
            <li>Return to work interview forms</li>
            <li>Exit interview templates and questionnaires</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- RELATED GUIDES -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Resources</div>
        <h2>Related Guides</h2>
        <p>Practical step-by-step guides for employers</p>
      </div>
      <div class="oc-grid3">
        <a href="/articles/employment-contracts-what-to-include" class="oc-card">
          <div class="oc-ico"><i class="fas fa-book-open"></i></div>
          <h3>Employment Contracts: What to Include</h3>
          <p>A guide to the essential clauses every employment contract should contain.</p>
          <span class="oc-link">Read guide <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="/articles/settlement-agreements-what-employers-need-to-know" class="oc-card">
          <div class="oc-ico"><i class="fas fa-book-open"></i></div>
          <h3>Settlement Agreements: Employer Guide</h3>
          <p>What employers need to know about using settlement agreements to resolve disputes.</p>
          <span class="oc-link">Read guide <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="/articles/redundancy-consultation-getting-it-right" class="oc-card">
          <div class="oc-ico"><i class="fas fa-book-open"></i></div>
          <h3>Redundancy Consultation Guide</h3>
          <p>How to run a fair redundancy consultation process and avoid common pitfalls.</p>
          <span class="oc-link">Read guide <i class="fas fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- WHAT EVERY CLIENT GETS -->
  <section class="oc-sec">
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
      <h2 style="margin-top:14px;">Need Employment Documents?</h2>
      <p>Get in touch to discuss what you need. All documents are drafted to your specific requirements and fully legally compliant.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
