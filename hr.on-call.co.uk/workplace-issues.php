<?php
require_once 'config.php';

$pageTitle = 'Workplace Investigations & Hearings';
$pageDescription = 'Independent workplace investigations, disciplinary hearings, grievance procedures and appeals for UK employers. Experienced HR consultant handles the process so you can focus on your business. ACAS Code compliant.';
$pageKeywords = 'workplace investigation UK, how to conduct workplace investigation, disciplinary hearing, disciplinary procedure UK, grievance procedure at work, grievance hearing, disciplinary appeal, grievance appeal, gross misconduct, unfair dismissal, ACAS code of practice, independent investigation officer';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Workplace Support</div>
      <h1>Workplace Issues</h1>
      <p>When difficult employee situations arise, you need experienced support to handle them properly. We step in, take control and guide you through every stage.</p>
      <div class="oc-pillnav">
        <a href="#investigations">Investigations</a>
        <a href="#disciplinary">Disciplinary</a>
        <a href="#grievance">Grievance</a>
        <a href="#appeals">Appeals</a>
        <a href="#pricing">Pricing</a>
      </div>
    </div>
  </section>

  <!-- WHY US (split) -->
  <section class="oc-sec">
    <div class="oc-wrap oc-split oc-split-stretch">
      <div>
        <div class="oc-eyebrow"><span></span>Why Us</div>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 0;">Experienced, impartial support when it matters most</h2>
        <p style="font-size:16px; color:var(--muted); margin:18px 0 0;">Workplace issues can be stressful and high-risk. Whether it's a complaint from an employee, concerns about conduct or performance, or a situation that needs formal investigation, getting it wrong can be costly.</p>
        <p style="font-size:16px; color:var(--muted); margin:14px 0 0;">We provide experienced, impartial support at every stage of the process, from investigation through to hearing and appeal. We can advise you behind the scenes or step in and run the process on your behalf.</p>
        <p style="font-size:16px; color:var(--muted); margin:14px 0 0;">Need employment documents drafted? See our <a href="/documents" style="color:var(--pink); font-weight:600;">Documents &amp; Drafting</a> service. For ongoing support, consider our <a href="/retainers" style="color:var(--pink); font-weight:600;">HR Support Plans</a>.</p>
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
          <div class="oc-panel-item"><i class="fas fa-file-alt"></i><span>Clear, structured reports and outcomes</span></div>
          <div class="oc-panel-item"><i class="fas fa-desktop"></i><span>Your own client portal for documents, emails, time and costs</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- WORKPLACE SERVICES (all cards in one section) -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <!-- Workplace Investigations -->
      <div class="oc-srv" id="investigations">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Establishing Facts</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-search"></i></div>
            <h3>Workplace Investigations</h3>
          </div>
          <p>When something goes wrong at work, you need to establish the facts before you can decide what to do. We conduct thorough, impartial investigations and provide you with a clear report so you can make informed decisions.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Allegations of misconduct or gross misconduct</li>
            <li>Bullying and harassment complaints</li>
            <li>Grievances that require formal investigation</li>
            <li>Interviewing witnesses and gathering evidence</li>
            <li>Structured investigation report with findings and recommendations</li>
            <li>Detailed report with recommendations</li>
          </ul>
        </div>
      </div>

      <!-- Disciplinary Hearings -->
      <div class="oc-srv" id="disciplinary">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Formal Action</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-gavel"></i></div>
            <h3>Disciplinary Hearings</h3>
          </div>
          <p>When an employee's conduct or performance requires formal action, the hearing needs to be handled properly. We chair or advise on disciplinary hearings to ensure the process is fair, lawful and follows the ACAS Code of Practice.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Preparing hearing packs and management statements</li>
            <li>Chairing the hearing as an independent panel member</li>
            <li>Advising the decision-maker throughout the process</li>
            <li>Ensuring the ACAS Code of Practice is followed</li>
            <li>Drafting outcome letters with clear reasoning</li>
            <li>Managing the entire process from start to finish</li>
            <li>Detailed report with recommendations</li>
          </ul>
        </div>
      </div>

      <!-- Disciplinary Appeals -->
      <div class="oc-srv" id="disc-appeals">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Independent Review</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
            <h3>Disciplinary Appeals</h3>
          </div>
          <p>If an employee appeals a disciplinary outcome, the appeal must be heard by someone who wasn't involved in the original decision. We provide that independent review, assessing whether the process was fair and the outcome reasonable.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Reviewing the original investigation and hearing</li>
            <li>Chairing the appeal hearing independently</li>
            <li>Assessing whether the process and outcome were fair</li>
            <li>Considering any new evidence or arguments raised</li>
            <li>Delivering a clear, reasoned appeal outcome</li>
            <li>Detailed report with recommendations</li>
          </ul>
        </div>
      </div>

      <!-- Grievance Hearings -->
      <div class="oc-srv" id="grievance">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Employee Complaints</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-comments"></i></div>
            <h3>Grievance Hearings</h3>
          </div>
          <p>When an employee raises a formal complaint, it needs to be heard properly. We ensure grievances are handled fairly, thoroughly and in line with your procedures, so both sides feel the process was robust.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Reviewing the grievance and planning the hearing</li>
            <li>Chairing or advising on the grievance hearing</li>
            <li>Ensuring the employee feels heard and the process is fair</li>
            <li>Investigating the points raised where needed</li>
            <li>Drafting detailed outcome letters</li>
            <li>Recommending practical next steps for the business</li>
            <li>Detailed report with recommendations</li>
          </ul>
        </div>
      </div>

      <!-- Grievance Appeals -->
      <div class="oc-srv" id="appeals">
        <div class="oc-srv-intro">
          <div class="oc-eyebrow"><span></span>Right To Appeal</div>
          <div class="oc-srv-head">
            <div class="oc-ico"><i class="fas fa-redo"></i></div>
            <h3>Grievance Appeals</h3>
          </div>
          <p>When an employee is unhappy with a grievance outcome, they have the right to appeal. We hear appeals independently, reviewing whether the original grievance was handled properly and whether the outcome was reasonable.</p>
        </div>
        <div class="oc-srv-bullets">
          <ul class="oc-ticklist">
            <li>Reviewing the original grievance investigation and outcome</li>
            <li>Hearing the appeal independently and impartially</li>
            <li>Assessing whether the grievance was handled fairly</li>
            <li>Considering new information or perspectives</li>
            <li>Issuing a final, well-reasoned appeal decision</li>
            <li>Detailed report with recommendations</li>
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
        <h2>How it works</h2>
        <p>A straightforward process from first call to resolution.</p>
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
          <p>We'll set out what needs to happen, the timeline and the cost so there are no surprises.</p>
        </div>
        <div class="oc-step">
          <div class="num">3</div>
          <h3>Handle It</h3>
          <p>We run the investigation, hearing or appeal on your behalf, keeping you informed throughout.</p>
        </div>
        <div class="oc-step">
          <div class="num">4</div>
          <h3>Resolution</h3>
          <p>You get a clear outcome, properly documented, with advice on any follow-up actions needed.</p>
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
        <p>All workplace issue support is charged at an hourly rate with no hidden fees.</p>
      </div>
      <div class="oc-pair" style="max-width:760px; margin:44px auto 0;">
        <div class="oc-price">
          <div class="pname">Advisory Support</div>
          <div class="pprice">£100 <small>per hour + VAT</small></div>
          <p class="pdesc">We advise you behind the scenes so you can manage the process yourself with confidence.</p>
          <ul class="oc-ticklist">
            <li>Guidance on how to handle the situation</li>
            <li>Reviewing your documentation and letters</li>
            <li>Advising on process and next steps</li>
            <li>Ensuring you follow the ACAS Code</li>
          </ul>
        </div>
        <div class="oc-price">
          <div class="pname">Specialist Support</div>
          <div class="pprice">£120 <small>per hour + VAT</small></div>
          <p class="pdesc">We step in and handle the process on your behalf.</p>
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

  <!-- RELATED GUIDES -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Helpful Resources</div>
        <h2>Related guides</h2>
        <p>Practical step-by-step guides for employers.</p>
      </div>
      <div class="oc-grid3">
        <a href="/articles/how-to-conduct-a-workplace-investigation" class="oc-card">
          <div class="oc-ico"><i class="fas fa-book-open"></i></div>
          <h3>How to Conduct a Workplace Investigation</h3>
          <p>A practical guide to running a fair, thorough workplace investigation from start to finish.</p>
          <span class="oc-link">Read guide <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="/articles/how-to-handle-a-disciplinary-hearing" class="oc-card">
          <div class="oc-ico"><i class="fas fa-book-open"></i></div>
          <h3>How to Handle a Disciplinary Hearing</h3>
          <p>Step-by-step guidance on preparing for and conducting a disciplinary hearing properly.</p>
          <span class="oc-link">Read guide <i class="fas fa-arrow-right"></i></span>
        </a>
        <a href="/articles/how-to-handle-a-grievance-at-work" class="oc-card">
          <div class="oc-ico"><i class="fas fa-book-open"></i></div>
          <h3>How to Handle a Grievance at Work</h3>
          <p>How to manage a formal grievance fairly and in line with the ACAS Code of Practice.</p>
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
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Support</div>
      <h2 style="margin-top:14px;">Dealing with a workplace issue?</h2>
      <p>Don't wait for it to escalate. Get in touch for a confidential conversation about how we can help.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
