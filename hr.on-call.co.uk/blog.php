<?php
require_once 'config.php';

$pageTitle = 'HR Guides for Employers';
$pageDescription = 'Practical HR guides for UK employers. Step-by-step advice on workplace investigations, disciplinary procedures, grievance hearings, dismissals, settlement agreements and more.';
$pageKeywords = 'HR guides UK, workplace investigation guide, disciplinary procedure guide, grievance procedure guide, employer HR advice, how to dismiss employee, ACAS code of practice guide';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

// Article definitions with publish dates (future-dated for auto-posting)
$articles = [
    [
        'slug' => 'how-to-conduct-a-workplace-investigation',
        'title' => 'How to Conduct a Workplace Investigation',
        'excerpt' => 'A step-by-step guide for employers on running a fair, thorough workplace investigation that protects your business and stands up to scrutiny.',
        'date' => '2026-03-20',
        'category' => 'Investigations'
    ],
    [
        'slug' => 'acas-code-of-practice-what-employers-need-to-know',
        'title' => 'The ACAS Code of Practice: What Employers Need to Know',
        'excerpt' => 'The ACAS Code of Practice on disciplinary and grievance procedures is essential reading for every employer. Here\'s what it means for your business.',
        'date' => '2026-03-13',
        'category' => 'Employment Law'
    ],
    [
        'slug' => 'how-to-handle-a-disciplinary-hearing',
        'title' => 'How to Handle a Disciplinary Hearing',
        'excerpt' => 'Everything employers need to know about running a fair disciplinary hearing, from preparation through to outcome letters.',
        'date' => '2026-03-17',
        'category' => 'Disciplinary'
    ],
    [
        'slug' => 'gross-misconduct-what-counts-and-what-to-do',
        'title' => 'Gross Misconduct: What Counts and What to Do About It',
        'excerpt' => 'What constitutes gross misconduct, how to handle it properly, and when summary dismissal is appropriate.',
        'date' => '2026-03-20',
        'category' => 'Disciplinary'
    ],
    [
        'slug' => 'how-to-handle-a-grievance-at-work',
        'title' => 'How to Handle a Grievance at Work',
        'excerpt' => 'An employer\'s guide to handling formal grievances fairly, following the right procedure and reaching a resolution.',
        'date' => '2026-04-07',
        'category' => 'Grievance'
    ],
    [
        'slug' => 'how-to-dismiss-an-employee-fairly',
        'title' => 'How to Dismiss an Employee Fairly',
        'excerpt' => 'The five fair reasons for dismissal, the correct procedure to follow, and how to avoid unfair dismissal claims.',
        'date' => '2026-04-10',
        'category' => 'Dismissal'
    ],
    [
        'slug' => 'disciplinary-and-grievance-appeals',
        'title' => 'Disciplinary and Grievance Appeals: A Guide for Employers',
        'excerpt' => 'When an employee appeals a disciplinary or grievance outcome, you need to get the appeal process right. Here\'s how.',
        'date' => '2026-04-14',
        'category' => 'Appeals'
    ],
    [
        'slug' => 'settlement-agreements-what-employers-need-to-know',
        'title' => 'Settlement Agreements: What Employers Need to Know',
        'excerpt' => 'When to use a settlement agreement, what to include, how much they cost and how to negotiate one effectively.',
        'date' => '2026-04-17',
        'category' => 'Settlement'
    ],
    [
        'slug' => 'managing-poor-performance',
        'title' => 'Managing Poor Performance: A Step-by-Step Guide',
        'excerpt' => 'How to manage underperforming employees through capability procedures, performance improvement plans and escalation.',
        'date' => '2026-04-21',
        'category' => 'Performance'
    ],
    [
        'slug' => 'workplace-bullying-and-harassment',
        'title' => 'Workplace Bullying and Harassment: Employer\'s Guide',
        'excerpt' => 'Your legal obligations as an employer, how to investigate complaints, and practical steps to prevent bullying and harassment.',
        'date' => '2026-04-24',
        'category' => 'Investigations'
    ],
    [
        'slug' => 'redundancy-consultation-getting-it-right',
        'title' => 'Redundancy Consultation: Getting the Process Right',
        'excerpt' => 'A practical guide to the redundancy consultation process, selection criteria, notice periods and avoiding unfair dismissal claims.',
        'date' => '2026-04-28',
        'category' => 'Redundancy'
    ],
    [
        'slug' => 'employment-contracts-what-to-include',
        'title' => 'Employment Contracts: What Every Employer Needs to Include',
        'excerpt' => 'The key clauses every employment contract should contain, common mistakes to avoid, and when to update your contracts.',
        'date' => '2026-05-01',
        'category' => 'Contracts'
    ]
];

// Filter to only show published articles
$now = date('Y-m-d');
$published = array_filter($articles, function($a) use ($now) {
    return $a['date'] <= $now;
});

// Sort by date descending (newest first)
usort($published, function($a, $b) {
    return strcmp($b['date'], $a['date']);
});

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Employer Guides</div>
      <h1>HR Guides for Employers</h1>
      <p>Practical, step-by-step guides to help you handle workplace investigations, disciplinary hearings, grievances and other employee issues with confidence.</p>
    </div>
  </section>

  <!-- BLOG LISTING -->
  <section class="oc-sec">
    <div class="oc-wrap">
      <?php if (empty($published)): ?>
        <div class="oc-head">
          <div class="oc-eyebrow"><span></span>New Guides</div>
          <h2>Coming Soon</h2>
          <p>Our first guides are being published shortly. Check back soon for practical HR advice for employers.</p>
        </div>
      <?php else: ?>
        <div class="oc-grid3">
          <?php foreach ($published as $article): ?>
            <a href="/articles/<?php echo $article['slug']; ?>" class="oc-card">
              <div class="oc-eyebrow"><span></span><?php echo $article['category']; ?></div>
              <h3 style="margin-top:14px;"><?php echo $article['title']; ?></h3>
              <p style="margin-top:8px;"><?php echo $article['excerpt']; ?></p>
              <div style="margin-top:18px; padding-top:16px; border-top:1px solid var(--cream-bd); display:flex; justify-content:space-between; align-items:center; gap:12px;">
                <span style="font-size:13px; color:var(--soft);"><?php echo date('j F Y', strtotime($article['date'])); ?></span>
                <span class="oc-link" style="margin-top:0; padding-top:0;">Read guide <i class="fas fa-arrow-right"></i></span>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- CTA -->
  <section class="oc-sec oc-cta">
    <div class="oc-wrap">
      <div class="oc-eyebrow" style="justify-content:center;"><span></span>Expert Support</div>
      <h2 style="margin-top:14px;">Need Help With a Workplace Issue?</h2>
      <p>These guides give you the knowledge – but if you need experienced support to handle the process, we're here to help.</p>
      <div style="margin-top:28px;">
        <a href="contact.php" class="oc-btn oc-pink">Get in Touch Today <i class="fas fa-arrow-right" style="font-size:14px;"></i></a>
      </div>
    </div>
  </section>

</div>

<?php include 'includes/footer.php'; ?>
