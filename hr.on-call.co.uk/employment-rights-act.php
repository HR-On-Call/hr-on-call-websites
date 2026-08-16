<?php
require_once 'config.php';

$pageTitle = 'Employment Rights Act 2025: Employer Guide';
$pageDescription = 'A plain-English guide to the Employment Rights Act 2025 for UK employers: what has changed, what is coming in 2027 and the practical steps to take now.';
$pageKeywords = 'Employment Rights Act 2025, Employment Rights Act employers, unfair dismissal qualifying period 2027, day-one rights, statutory sick pay changes 2026, Fair Work Agency, what employers need to do';

// Breadcrumb JSON-LD is rendered by the header from this array
$breadcrumbs = [
    ['name' => 'Home', 'url' => SITE_URL . '/'],
    ['name' => 'Employment Rights Act 2025'],
];

// Free online check (Easy Audit).
$auditLink = 'https://audit.on-call.co.uk/start-audit.php?t=5d2a39c11e8a3f2d85bd10686887de5578558a09eb80a9342313e21e8e237428';

$rebuilt = true;
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<!-- Structured Data - WebPage -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Employment Rights Act 2025: Employer Guide",
    "description": "A plain-English guide to the Employment Rights Act 2025 for UK employers: what has changed, what is coming in 2027 and the practical steps to take now.",
    "url": "https://hr.on-call.co.uk/employment-rights-act",
    "inLanguage": "en-GB",
    "publisher": {
        "@type": "Organization",
        "name": "HR On Call Ltd",
        "url": "https://hr.on-call.co.uk"
    }
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
            "name": "When does the Employment Rights Act 2025 take effect?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is being phased in. Several changes, including day-one SSP and family leave, took effect in April 2026. The change to unfair dismissal takes effect on 1 January 2027."
            }
        },
        {
            "@type": "Question",
            "name": "Does the Employment Rights Act apply to small businesses?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The changes apply to employers of all sizes. There is no small-business exemption."
            }
        },
        {
            "@type": "Question",
            "name": "When does the unfair dismissal change start?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "From 1 January 2027 employees can claim unfair dismissal after six months' service rather than two years. Anyone employed by 1 July 2026 and still in post will be protected from that date."
            }
        },
        {
            "@type": "Question",
            "name": "Do I need to change my probation periods?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most likely. A six-month probation no longer leaves a safe window to part ways, so many employers are moving to a three or four month probation with the option to extend."
            }
        },
        {
            "@type": "Question",
            "name": "What is the Fair Work Agency?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is a single enforcement body, live since April 2026, that polices pay compliance including SSP and holiday pay. It can inspect workplaces and request records going back six years."
            }
        }
    ]
}
</script>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Employer Guide</div>
      <h1>The Employment Rights Act 2025: What It Means for Employers</h1>
      <p>A plain-English guide to what has already changed, what is coming in 2027 and the practical steps to take now.</p>
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
        <p>The Employment Rights Act 2025 is the biggest shake-up of employment law in a generation, and it affects every business with staff regardless of size or sector. Some changes are already in force. The one most employers worry about lands in January 2027, but the practical deadline to start preparing is this summer. Here is what is changing and what we would suggest you do about it.</p>
      </div>
      <div class="oc-grid2" style="max-width:820px; margin-left:auto; margin-right:auto;">
        <div class="oc-card">
          <div class="oc-eyebrow"><span></span>Recruitment cut-off</div>
          <h3 style="font-size:28px; margin:16px 0 0;">1 July 2026</h3>
          <p style="margin-top:12px;">Anyone employed by this date, including people you are hiring now, will be protected from day one of the new rules.</p>
        </div>
        <div class="oc-card">
          <div class="oc-eyebrow"><span></span>New rules begin</div>
          <h3 style="font-size:28px; margin:16px 0 0;">1 January 2027</h3>
          <p style="margin-top:12px;">Unfair dismissal protection kicks in at six months' service instead of two years, and the compensation landscape changes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HEADLINE CHANGE -->
  <section class="oc-sec oc-cream">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Headline Change</div>
        <h2>The headline change: unfair dismissal from January 2027</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <p>From 1 January 2027 the qualifying period for unfair dismissal drops from two years to six months. In practice the two-year window in which you could part ways with someone relatively freely is going, so recruitment, probation and early performance management matter far more than they used to.</p>
        <p>Probation needs particular attention. A six-month probationary period no longer leaves a safe exit window, because statutory notice can tip a late decision over the six-month line. We can help you get your <a href="/workplace-issues">probation and performance</a> processes right.</p>
        <p><strong>Best practice tip:</strong> move towards a three or four month probation, extendable by around a month, so you keep a genuine window to make a fair decision before protection begins.</p>
      </div>
    </div>
  </section>

  <!-- WHY THIS SUMMER (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Why Now</div>
        <h2>Why this summer matters</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <p style="color:#C3D0E0;">The change is not only about future hires. To be protected from the start of the new rules an employee needs six months' service by 1 January 2027. That means anyone employed by 1 July 2026, including the people you are recruiting right now, will be covered from day one of the new regime. Hire someone after 1 July and they gain protection once they reach six months instead.</p>
        <p style="color:#C3D0E0;">So the recruitment and probation decisions you make this summer are the ones that count. It is also worth reviewing your <a href="/documents" style="color:var(--gold);">contracts and policies</a> for the common wording that the disciplinary procedure, or protection from unfair dismissal, does not apply in the first two years. That wording is now a liability and needs updating.</p>
      </div>
    </div>
  </section>

  <!-- ALREADY IN FORCE -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Already In Force</div>
        <h2>What is already in force</h2>
        <p>Several changes took effect in April 2026 and apply now</p>
      </div>
      <div class="oc-grid4">
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-notes-medical"></i></div>
          <h3>Statutory Sick Pay from day one</h3>
          <p>SSP is payable from the first day of absence, and the lower earnings limit has gone, so more absences and more employees now qualify.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-people-roof"></i></div>
          <h3>Day-one family leave</h3>
          <p>Paternity leave and unpaid parental leave are now day-one rights, with no qualifying service required.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-user-shield"></i></div>
          <h3>Data protection complaints</h3>
          <p>Since 19 June 2026 employees can complain to you directly about how their personal data is handled. You need a simple complaints process, an accessible form, and updated privacy notices.</p>
        </div>
        <div class="oc-card">
          <div class="oc-ico"><i class="fas fa-calendar-days"></i></div>
          <h3>Six-year holiday records</h3>
          <p>You must keep records of annual leave and holiday pay and retain them for six years. Any later check will look back to now, so the records need to exist this year.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAIR WORK AGENCY (navy) -->
  <section class="oc-sec oc-navy">
    <div class="oc-wrap oc-readable">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>New Enforcer</div>
        <h2>A new enforcer: the Fair Work Agency</h2>
      </div>
      <div class="oc-prose" style="margin-top:28px;">
        <p style="color:#C3D0E0;">The Fair Work Agency went live in April 2026, bringing pay compliance, including SSP and holiday pay, under a single body. It can inspect workplaces and ask for records going back six years, with real penalties for getting pay wrong. It is not a reason to panic, but it is why the points above are worth getting straight now rather than later.</p>
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
          <li>Review probation lengths and shorten them to three or four months, extendable by about a month.</li>
          <li>Check contracts and disciplinary policies for the two-year wording described above.</li>
          <li>Brief managers to set expectations, review and act early rather than at the last minute.</li>
          <li>Make sure your SSP and family leave policies reflect the new day-one position.</li>
          <li>Put a simple data protection complaints process in place and update privacy notices.</li>
          <li>Start keeping annual leave and holiday pay records now, and retain them.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HOW WE CAN HELP -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>Our Support</div>
        <h2>How we can help</h2>
        <p>We help employers across the UK get ahead of these changes with practical, commercially-minded support. We speak plain English, not jargon. Whatever stage you are at, there is a service to match:</p>
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
          <h3>Ongoing advice on a retainer</h3>
          <p>A steady pair of hands on call as the rules are phased in through 2026 and 2027.</p>
        </a>
        <a href="/pay-as-you-go" class="oc-card">
          <div class="oc-ico"><i class="fas fa-diagram-project"></i></div>
          <h3>Larger projects</h3>
          <p>Bigger pieces of work such as TUPE transfers or a full HR audit, handled end to end.</p>
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
          <summary>When does the Employment Rights Act 2025 take effect?</summary>
          <div class="faq-body"><p>It is being phased in. Several changes, including day-one SSP and family leave, took effect in April 2026. The change to unfair dismissal takes effect on 1 January 2027.</p></div>
        </details>
        <details>
          <summary>Does the Employment Rights Act apply to small businesses?</summary>
          <div class="faq-body"><p>Yes. The changes apply to employers of all sizes. There is no small-business exemption.</p></div>
        </details>
        <details>
          <summary>When does the unfair dismissal change start?</summary>
          <div class="faq-body"><p>From 1 January 2027 employees can claim unfair dismissal after six months' service rather than two years. Anyone employed by 1 July 2026 and still in post will be protected from that date.</p></div>
        </details>
        <details>
          <summary>Do I need to change my probation periods?</summary>
          <div class="faq-body"><p>Most likely. A six-month probation no longer leaves a safe window to part ways, so many employers are moving to a three or four month probation with the option to extend.</p></div>
        </details>
        <details>
          <summary>What is the Fair Work Agency?</summary>
          <div class="faq-body"><p>It is a single enforcement body, live since April 2026, that polices pay compliance including SSP and holiday pay. It can inspect workplaces and request records going back six years.</p></div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Not sure where you stand?</h2>
      <p>Take our free online employment law check. A few simple questions and an instant report showing where you are on track and where to act. No cost, no obligation. Prefer to talk it through? Book a free discovery call and we will point you in the right direction.</p>
      <div style="margin-top:28px; display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="<?php echo $auditLink; ?>" class="oc-btn oc-pink">Start your free check <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
        <a href="/contact.php" class="oc-btn oc-ghost">Book a discovery call</a>
      </div>
      <p style="max-width:700px; margin:28px auto 0; font-size:13px; line-height:1.6; color:rgba(255,255,255,.65);">This page is for general information only and does not constitute legal advice. The right approach will depend on your specific circumstances, your contracts and your people.</p>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
