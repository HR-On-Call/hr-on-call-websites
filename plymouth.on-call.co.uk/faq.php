<?php
require_once 'config.php';

$pageTitle = 'FAQ | HR Support & Employment Law Questions Answered';
$pageDescription = 'Answers to the most common questions about HR support plans, employment law, dismissals, grievances, settlement agreements and outsourced HR support in Plymouth, Devon and Cornwall.';
$pageKeywords = 'HR FAQ, HR questions UK, employment law questions, HR support plan questions, HR consultant FAQ, Plymouth HR questions';

// FAQ data - edit here, used for both page display and FAQPage schema
$faqs = [
    [
        'category' => 'HR Support Plans',
        'items' => [
            [
                'q' => 'What\'s included in the monthly support plans?',
                'a' => 'It depends on the plan. Every plan includes full access to our HR Library of policies, letters, forms and guides, all written for UK employers and kept up to date. From HR Advice upwards you also get a set number of hours of our time each month, used however suits you – advice by phone or email, ad hoc letters and short documents, or reviews of your existing contracts, handbook and policies. HR Support adds the Handbook Portal, and HR Managed adds an annual HR audit and 10% off all drafting.'
            ],
            [
                'q' => 'How much do the HR support plans cost?',
                'a' => 'There are four plans, all plus VAT: HR Library at £75/month for the document library, HR Advice at £150/month (the Library plus 1 hour of our time), HR Support at £300/month (3 hours plus the Handbook Portal), and HR Managed at £600/month (6 hours plus an annual audit and 10% off drafting). Plans run on a 12-month term – far less than a day\'s tribunal defence.'
            ],
            [
                'q' => 'Is there a minimum contract length?',
                'a' => 'Plans run on a 12-month term. At HR Advice and HR Support, any unused time rolls over to the following month and then expires, and extra time beyond your monthly allowance is £100 per hour + VAT. If you would rather have a one-off piece of work than an ongoing plan, our pay-as-you-go advisory and specialist support is available with no commitment.'
            ],
            [
                'q' => 'Can you help us if we\'ve never had HR support before?',
                'a' => 'Yes – we work with a lot of businesses hiring their first few employees or just starting to formalise their HR. We can audit what you have, put in place the essentials (contracts, handbook, basic policies) and give you a straightforward framework to build on. No judgement about where you\'re starting from.'
            ],
            [
                'q' => 'What if we already have an HR team?',
                'a' => 'We often work alongside in-house HR teams as a senior sounding board, specialist for complex casework, or cover for holiday and sickness. Your HR team keeps doing the day-to-day – we\'re there when they need another pair of hands or a second opinion on the tricky stuff.'
            ],
        ]
    ],
    [
        'category' => 'Pay As You Go & Specialist Support',
        'items' => [
            [
                'q' => 'What\'s the difference between Advisory and Specialist support?',
                'a' => 'Advisory support (£100/hour) is where we give you guidance – you handle the situation yourself, with us as your expert sounding board. Specialist support (£120/hour) is where we step in and handle it for you – running the disciplinary, leading the investigation, negotiating the settlement. Both are available without a plan, but plan clients get priority and use their included monthly time for general advice.'
            ],
            [
                'q' => 'Can you attend a disciplinary or grievance hearing for us?',
                'a' => 'Yes. We regularly chair disciplinary and grievance hearings on behalf of clients – particularly useful where the grievance is against the business owner or where there\'s no one internally who\'s genuinely independent. We can attend in person across Plymouth, Devon and Cornwall, or virtually anywhere in the UK.'
            ],
            [
                'q' => 'Do you do workplace investigations?',
                'a' => 'Yes – we conduct independent workplace investigations into grievances, whistleblowing concerns, misconduct allegations and complaints. You get a qualified, impartial investigator with the experience to handle sensitive situations without making them worse.'
            ],
            [
                'q' => 'How quickly can you get involved?',
                'a' => 'For urgent situations, usually within 24-48 hours. For planned work (drafting documents, running an investigation, chairing a hearing), normal lead time is 1-2 weeks. Plan clients get priority scheduling.'
            ],
        ]
    ],
    [
        'category' => 'Employment Law & Tribunal Risk',
        'items' => [
            [
                'q' => 'How long does an employee need to be employed before they can claim unfair dismissal?',
                'a' => 'From 1 January 2027, the qualifying period for ordinary unfair dismissal drops from 2 years to 6 months under the Employment Rights Act 2025. Prior service counts toward the 6 months – so any employee who started before 1 July 2026 will have full unfair dismissal protection from 1 January 2027. Employees who started on or after 1 July 2026 will gain protection once they hit 6 months\' service. The compensatory award cap (currently £123,543) is also being removed from 1 January 2027, meaning compensation for unfair dismissal will become uncapped in the same way as discrimination claims already are.'
            ],
            [
                'q' => 'Can I dismiss someone for poor performance?',
                'a' => 'Yes, but only after a fair process. That typically means identifying the performance issue clearly, setting measurable improvement goals (often through a Performance Improvement Plan), providing support and training, and giving a reasonable period to improve. Skipping straight to dismissal for a first performance issue is rarely fair – and rarely cheap.'
            ],
            [
                'q' => 'What is a settlement agreement and when should I use one?',
                'a' => 'A settlement agreement is a legally binding contract where an employee waives their right to bring an employment claim in return for an agreed payment. Use one when you\'d rather pay a known amount today than risk an unknown amount (plus costs, plus management time, plus uncertainty) at tribunal. The commercial case is stronger than ever: Employment Tribunal open claims hit a record 68,000+ at the start of 2026, with hearings being listed 18 months to several years ahead depending on region and complexity. And from 1 January 2027 the cap on unfair dismissal compensation is being removed entirely. Common situations: senior exits, redundancies, long-term sickness, or where a grievance is beyond repair. See our <a href="/blog/settlement-agreements-explained.php">detailed settlement agreement guide</a> for more.'
            ],
            [
                'q' => 'What does a settlement agreement cost?',
                'a' => 'Drafting and negotiating a standard settlement agreement is £750 + VAT. You\'ll also need to contribute to the employee\'s legal fees (typically £350-£750). The settlement payment itself is situational – for most SME cases, expect 1-6 months of pay depending on tenure and risk profile.'
            ],
            [
                'q' => 'What is the ACAS Code of Practice and why does it matter?',
                'a' => 'The <a href="https://www.acas.org.uk/acas-code-of-practice-on-disciplinary-and-grievance-procedures" target="_blank" rel="noopener">ACAS Code of Practice on Disciplinary and Grievance Procedures</a> is the framework for disciplinary and grievance procedures. Employment tribunals measure employers against it. If you fail to follow the Code, a tribunal can increase compensation by up to 25%. Conversely, employees who ignore it can have their compensation reduced by up to 25%. It\'s the single most important document for employers to understand.'
            ],
        ]
    ],
    [
        'category' => 'Location & How We Work',
        'items' => [
            [
                'q' => 'Do you only work with businesses in Plymouth?',
                'a' => 'No. We\'re based in Plymouth and work with businesses across Devon and Cornwall in person. Remotely, we support clients throughout the UK. A lot of our work, particularly the monthly plans, is delivered by phone, email and video call, which works well regardless of location.'
            ],
            [
                'q' => 'Do you come to our office?',
                'a' => 'Yes, for clients in Plymouth, Devon and Cornwall we can attend in person for hearings, investigations, training sessions or simply to get to know your business. For clients further afield, most support is delivered remotely with the option of on-site attendance for critical meetings (travel costs charged separately).'
            ],
            [
                'q' => 'How do you work with accountants and other professional advisors?',
                'a' => 'We have a referral programme for accountants, solicitors and business advisors whose clients need HR support. They make the introduction, we handle the HR side, and they earn a referral fee. If you\'re a professional advisor, see the <a href="/accountants.php">partner page</a> for details.'
            ],
        ]
    ],
    [
        'category' => 'Qualifications & About Us',
        'items' => [
            [
                'q' => 'What qualifications do you have?',
                'a' => 'Our lead consultant, Grace Pariser, holds an MA in Human Resource Management (Distinction) and is CIPD Level 7 qualified – the Chartered Institute of Personnel and Development\'s most advanced qualification and the UK\'s gold standard for HR professionals. We keep our knowledge current through ongoing CPD and specialist employment law training.'
            ],
            [
                'q' => 'Why would I use an HR consultant instead of an employment solicitor?',
                'a' => 'An HR consultant covers the practical, day-to-day people management that sits alongside the law – training managers, resolving conflict, drafting policies, conducting investigations, running disciplinaries. Employment solicitors are essential when you\'re litigating or need advice privileged by legal professional privilege. For most SME situations, a CIPD qualified HR consultant is faster, more commercial, and significantly cheaper. We work alongside employment solicitors where legal privilege is important.'
            ],
            [
                'q' => 'Can I speak to you before committing to anything?',
                'a' => 'Yes – we offer a free 30-minute discovery call with no obligation. We can talk through what you need, whether we\'re the right fit, and what the cost would look like. Book via the <a href="/contact.php">contact page</a>.'
            ],
        ]
    ],
];

$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];
include 'includes/header.php';
?>

<!-- FAQPage Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
<?php
$entries = [];
foreach ($faqs as $section) {
    foreach ($section['items'] as $item) {
        $entries[] = '        {
            "@type": "Question",
            "name": ' . json_encode($item['q']) . ',
            "acceptedAnswer": {
                "@type": "Answer",
                "text": ' . json_encode(strip_tags($item['a'])) . '
            }
        }';
    }
}
echo implode(",\n", $entries);
?>

    ]
}
</script>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>FAQs</div>
      <h1>HR &amp; Employment Law FAQs</h1>
      <p>Straight answers to the questions UK employers ask us most often – about support plans, dismissals, grievances, settlement agreements and everything in between.</p>
    </div>
  </section>

<?php $bands = ['', 'oc-cream']; $i = 0; foreach ($faqs as $section): $band = $bands[$i % 2]; $i++; ?>
  <!-- <?php echo htmlspecialchars($section['category']); ?> -->
  <section class="oc-sec <?php echo $band; ?>">
    <div class="oc-wrap">
      <div class="oc-head">
        <div class="oc-eyebrow"><span></span>FAQs</div>
        <h2><?php echo htmlspecialchars($section['category']); ?></h2>
      </div>
      <div class="oc-faq">
<?php foreach ($section['items'] as $item): ?>
        <details>
          <summary><?php echo htmlspecialchars($item['q']); ?></summary>
          <div class="faq-body"><p><?php echo $item['a']; ?></p></div>
        </details>
<?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endforeach; ?>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Get Started</div>
      <h2 style="margin-top:14px;">Can't See Your Question?</h2>
      <p>Get in touch for a no-obligation discovery call – we're happy to answer any HR or employment law question, no sales pitch.</p>
      <div style="margin-top:28px; display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="/contact.php" class="oc-btn oc-pink">Ask Us Anything <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
