<?php
require_once 'config.php';

$pageTitle = 'Employment Rights Act 2025: A Guide for Plymouth & Devon Employers';
$pageDescription = 'What the Employment Rights Act 2025 means for employers in Plymouth, Devon and the South West: the changes already in force, the big shift in January 2027, and how to prepare.';
$pageKeywords = 'Employment Rights Act 2025 Plymouth, Employment Rights Act Devon, employment law changes Plymouth employers, unfair dismissal qualifying period 2027, day-one rights, statutory sick pay changes 2026, Fair Work Agency, HR support Plymouth';
$ogType = 'article';

// Free online check (Easy Audit).
$auditLink = 'https://audit.on-call.co.uk/start-audit.php?t=5d2a39c11e8a3f2d85bd10686887de5578558a09eb80a9342313e21e8e237428';

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<!-- Structured Data - WebPage -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Employment Rights Act 2025: A Guide for Plymouth & Devon Employers",
    "description": "What the Employment Rights Act 2025 means for employers in Plymouth, Devon and the South West: the changes already in force, the big shift in January 2027, and how to prepare.",
    "url": "https://plymouth.on-call.co.uk/employment-rights-act",
    "inLanguage": "en-GB",
    "publisher": {
        "@type": "Organization",
        "name": "HR On Call Ltd",
        "url": "https://plymouth.on-call.co.uk"
    }
}
</script>

<!-- Structured Data - BreadcrumbList -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://plymouth.on-call.co.uk/"},
        {"@type": "ListItem", "position": 2, "name": "Employment Rights Act 2025"}
    ]
}
</script>

<!-- Structured Data - FAQPage -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "When does the Employment Rights Act 2025 come into effect?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is arriving in stages. Day-one Statutory Sick Pay and family leave landed in April 2026, and the change to unfair dismissal follows on 1 January 2027."
            }
        },
        {
            "@type": "Question",
            "name": "Does it apply to small businesses in Plymouth and Devon?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The reforms cover employers of every size. There is no exemption for small or local businesses."
            }
        },
        {
            "@type": "Question",
            "name": "When exactly does the unfair dismissal change begin?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "On 1 January 2027 the qualifying period drops to six months. Anyone employed by 1 July 2026 and still with you will be protected from that date."
            }
        },
        {
            "@type": "Question",
            "name": "Should we change our probation periods?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Probably. A six-month probation no longer leaves a safe exit window, so many South West employers are moving to a three or four month period with an option to extend."
            }
        },
        {
            "@type": "Question",
            "name": "What is the Fair Work Agency?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A single enforcement body, operating since April 2026, that polices pay compliance including SSP and holiday pay. It can inspect workplaces and ask for records going back six years."
            }
        }
    ]
}
</script>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Plymouth &amp; Devon Employer Guide</div>
      <h1>The Employment Rights Act 2025: A Guide for Plymouth and Devon Employers</h1>
      <p>What is changing for South West businesses, the dates to plan around, and the practical steps to take now, all in plain English.</p>
      <div class="oc-actions">
        <a href="<?php echo $auditLink; ?>" class="oc-btn oc-pink">Start your free check <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="/contact.php" class="oc-btn oc-ghost">Book a discovery call</a>
      </div>
    </div>
  </section>

  <!-- INTRO + KEY DATES -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-prose">
        <p>If you employ people in Plymouth, across Devon or anywhere in the South West, the Employment Rights Act 2025 changes how you recruit, manage and let staff go. It is the biggest overhaul of employment law in decades, and there is no exemption for smaller businesses. A handful of measures are already live, the change that worries most owners arrives on 1 January 2027, and the moment to start preparing is this summer. Here is what local employers need to know.</p>
      </div>
      <div class="oc-grid2" style="max-width:820px; margin-left:auto; margin-right:auto;">
        <div class="oc-card">
          <div class="oc-eyebrow"><span></span>The summer deadline</div>
          <h3 style="font-size:28px; margin:16px 0 0;">1 July 2026</h3>
          <p style="margin-top:12px;">Take anyone on by this date and they will be protected from the very first day the new rules apply.</p>
        </div>
        <div class="oc-card">
          <div class="oc-eyebrow"><span></span>The rules change</div>
          <h3 style="font-size:28px; margin:16px 0 0;">1 January 2027</h3>
          <p style="margin-top:12px;">Unfair dismissal protection starts at six months of service rather than two years, and the compensation rules shift.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HEADLINE CHANGE -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Headline Change</div>
        <h2>The big one: unfair dismissal from January 2027</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <p>The headline reform is the qualifying period for unfair dismissal falling from two years to six months on 1 January 2027. The familiar two-year cushion, where you could move someone on with relatively little process, disappears. That puts far more weight on getting recruitment, probation and early performance management right from the outset.</p>
        <p>Probation deserves a fresh look in particular. A standard six-month probation no longer gives you a comfortable exit window, because adding statutory notice can push a late decision past the six-month mark. We can help you tighten your <a href="/workplace-issues">probation and performance</a> approach.</p>
        <p><strong>Best practice tip:</strong> plan for a shorter probation, around three or four months with the option to extend by a month, so you keep a genuine window to make a fair call before protection kicks in.</p>
      </div>
    </div>
  </section>

  <!-- WHY THIS SUMMER (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Why Now</div>
        <h2>Why the summer is the deadline that matters</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <p style="color:#C3D0E0;">This is not only about people you hire in future. For an employee to be covered the moment the rules start, they need six months' service by 1 January 2027, which means anyone on your payroll by 1 July 2026, including this summer's new starters, is protected from day one. Take someone on after 1 July and they reach protection at the six-month point instead.</p>
        <p style="color:#C3D0E0;">In other words, the hiring and probation calls you make over the next few weeks carry the most weight. It is also a good moment to check your <a href="/documents" style="color:var(--gold);">contracts and policies</a> for the old line that disciplinary or unfair dismissal rules do not apply during the first two years. That wording has become a risk and should be updated.</p>
      </div>
    </div>
  </section>

  <!-- ALREADY IN FORCE -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Already In Force</div>
        <h2>What is already in force</h2>
        <p>Several changes took effect in April 2026 and apply right now</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-notes-medical"></i></div>
          <h3>Sick pay from day one</h3>
          <p>Statutory Sick Pay now starts on the first day of absence and the lower earnings limit has been scrapped, so it reaches more staff and more absences than before.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-people-roof"></i></div>
          <h3>Family leave from day one</h3>
          <p>Paternity leave and unpaid parental leave are now available from the first day of employment, with no service requirement.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-user-shield"></i></div>
          <h3>Direct data-protection complaints</h3>
          <p>From 19 June 2026 staff can raise data-handling complaints with you directly. You will need a straightforward process, an easy way to submit them, and privacy notices that mention the right.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-calendar-days"></i></div>
          <h3>Six years of holiday records</h3>
          <p>Annual leave and holiday pay records must be kept for six years. Enforcement ramps up later, but the six-year look-back means the records need to start now.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAIR WORK AGENCY (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>New Enforcer</div>
        <h2>Meet the new enforcer: the Fair Work Agency</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <p style="color:#C3D0E0;">Since April 2026 a single body, the Fair Work Agency, has overseen pay compliance, SSP and holiday pay included. It can visit workplaces, request six years of records and issue real penalties where pay has been handled wrongly. No need to panic, but it is the reason the basics above are worth nailing down sooner rather than later.</p>
      </div>
    </div>
  </section>

  <!-- WHAT TO DO NOW -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Action Plan</div>
        <h2>What employers should do now</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <ul class="oc-ticklist">
          <li>Shorten probation periods to around three or four months, with a clause to extend if you need longer.</li>
          <li>Audit your contracts and disciplinary policies for the old two-year wording and update it.</li>
          <li>Coach managers to set clear expectations and tackle issues early, not at the eleventh hour.</li>
          <li>Update sick pay and family leave policies to reflect the new day-one entitlements.</li>
          <li>Set up a simple way for staff to raise data-protection complaints, and refresh your privacy notices.</li>
          <li>Begin recording annual leave and holiday pay now, and keep those records.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HOW WE CAN HELP -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Support</div>
        <h2>How we help Plymouth and Devon employers</h2>
        <p>We are an HR consultancy based in Plymouth, supporting employers across Devon and Cornwall with down-to-earth, commercial advice and no jargon. Wherever you are with this, there is a service to suit. For the full detail, read our in-depth <a href="/blog/employment-rights-act-2025-employer-guide">Employment Rights Act 2025 guide</a>, or see how we support <a href="/hr-consultant-devon">employers across Devon</a>.</p>
      </div>
      <div class="oc-grid4">
        <a href="/documents" class="oc-card">
          <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
          <h3>Contract &amp; handbook reviews</h3>
          <p>Update the wording that is now a liability and get your documents fit for the new rules.</p>
        </a>
        <a href="/workplace-issues" class="oc-card">
          <div class="oc-ico"><i class="fas fa-gavel"></i></div>
          <h3>Probation &amp; disciplinary processes</h3>
          <p>Refreshed processes and manager guidance so early decisions are fair and defensible.</p>
        </a>
        <a href="/retainers" class="oc-card">
          <div class="oc-ico"><i class="fas fa-calendar-check"></i></div>
          <h3>Ongoing HR support plans</h3>
          <p>A steady, local pair of hands on call as the rules are phased in through 2026 and 2027.</p>
        </a>
        <a href="/pay-as-you-go" class="oc-card">
          <div class="oc-ico"><i class="fas fa-diagram-project"></i></div>
          <h3>One-off HR projects</h3>
          <p>Bigger pieces of work, from a full HR audit to a TUPE transfer, handled end to end.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>FAQs</div>
        <h2>Frequently asked questions</h2>
      </div>
      <div class="oc-faq">
        <details>
          <summary>When does the Employment Rights Act 2025 come into effect?</summary>
          <div class="faq-body"><p>It is arriving in stages. Day-one Statutory Sick Pay and family leave landed in April 2026, and the change to unfair dismissal follows on 1 January 2027.</p></div>
        </details>
        <details>
          <summary>Does it apply to small businesses in Plymouth and Devon?</summary>
          <div class="faq-body"><p>Yes. The reforms cover employers of every size. There is no exemption for small or local businesses.</p></div>
        </details>
        <details>
          <summary>When exactly does the unfair dismissal change begin?</summary>
          <div class="faq-body"><p>On 1 January 2027 the qualifying period drops to six months. Anyone employed by 1 July 2026 and still with you will be protected from that date.</p></div>
        </details>
        <details>
          <summary>Should we change our probation periods?</summary>
          <div class="faq-body"><p>Probably. A six-month probation no longer leaves a safe exit window, so many South West employers are moving to a three or four month period with an option to extend.</p></div>
        </details>
        <details>
          <summary>What is the Fair Work Agency?</summary>
          <div class="faq-body"><p>A single enforcement body, operating since April 2026, that polices pay compliance including SSP and holiday pay. It can inspect workplaces and ask for records going back six years.</p></div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Not sure how ready you are?</h2>
      <p>Take our free online employment law check: a few quick questions and an instant report showing what is in good shape and where to focus. No cost and no obligation. Would rather chat it through? Book a free discovery call and we will help you work out your next steps.</p>
      <div style="margin-top:28px; display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="<?php echo $auditLink; ?>" class="oc-btn oc-pink">Start your free check <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="/contact.php" class="oc-btn oc-ghost">Book a discovery call</a>
      </div>
      <p style="max-width:700px; margin:28px auto 0; font-size:13px; line-height:1.6; color:rgba(255,255,255,.65);">This page is for general information only and does not constitute legal advice. The right approach will depend on your specific circumstances, your contracts and your people.</p>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
