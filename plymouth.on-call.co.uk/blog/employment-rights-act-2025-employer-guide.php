<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'employment-rights-act-2025-employer-guide';
$postTitle = 'The Employment Rights Act 2025: What UK Employers Need to Know Before January 2027';
$postDate = '2026-05-08';
$postReadTime = '9 min read';
$postCategory = 'Employment Law';
$postExcerpt = 'The Employment Rights Act 2025 brings major changes to UK employment law. The headline change – unfair dismissal protection from 6 months of service – takes effect 1 January 2027. Here\'s what to do now.';

require_once __DIR__ . '/_guard.php';

$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'Employment Rights Act 2025, ERA 2025, UK employment law changes, 6 month qualifying period, unfair dismissal changes 2027, compensation cap removed';

include __DIR__ . '/../includes/header.php';
?>

<!-- Blog Post Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?php echo $postTitle; ?>",
    "description": "<?php echo $postExcerpt; ?>",
    "datePublished": "<?php echo $postDate; ?>",
    "dateModified": "<?php echo $postDate; ?>",
    "author": {
        "@type": "Person",
        "name": "Grace Pariser",
        "jobTitle": "Founder & HR Consultant"
    },
    "publisher": {
        "@type": "Organization",
        "name": "HR On Call",
        "logo": {
            "@type": "ImageObject",
            "url": "https://plymouth.on-call.co.uk/assets/images/favicon-512x512.png"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://plymouth.on-call.co.uk/blog/<?php echo $postSlug; ?>.php"
    }
}
</script>

<article class="blog-article">
    <div class="blog-article-container">
        <div class="blog-article-meta">
            <span class="blog-category"><?php echo $postCategory; ?></span>
            <span><?php echo date('j F Y', strtotime($postDate)); ?></span>
            <span>·</span>
            <span><?php echo $postReadTime; ?></span>
        </div>

        <h1 class="blog-article-title"><?php echo $postTitle; ?></h1>

        <p class="blog-article-lead">The Employment Rights Bill received Royal Assent on 18 December 2025, becoming the Employment Rights Act 2025 (ERA 2025). The most significant changes are being phased in over 2026 and 2027. The one that matters most for most employers – the new 6-month qualifying period for unfair dismissal – takes effect on <strong>1 January 2027</strong>. Here's what's already happened, what's coming, and what to do now.</p>

        <div class="blog-article-body">
            <h2>What's already changed (April 2026)</h2>

            <p>Several ERA 2025 provisions came into force on <strong>6 April 2026</strong>. The main one affecting most employers is the Statutory Sick Pay (SSP) reform:</p>

            <ul>
                <li><strong>SSP is now payable from day one of sickness</strong> – the three "waiting days" have been abolished</li>
                <li><strong>The Lower Earnings Limit has been removed</strong> – all employees qualify for SSP regardless of earnings</li>
                <li><strong>SSP is now calculated at 80% of the employee's average weekly earnings, or the flat rate (£123.25/week from April 2026), whichever is lower</strong></li>
            </ul>

            <p>Practically, this means short-term sickness costs you more than it used to. Part-time and lower-paid workers who weren't previously entitled to SSP now are.</p>

            <h2>The big change: 6-month qualifying period from 1 January 2027</h2>

            <p>From <strong>1 January 2027</strong>, the qualifying period for ordinary unfair dismissal drops from 2 years to <strong>6 months</strong>. This is the change that will have the biggest day-to-day impact for most employers.</p>

            <p>Crucially, <strong>prior service counts</strong> toward the 6 months. That means:</p>

            <ul>
                <li>Any employee who started before 1 July 2026 will have 6+ months' service on 1 January 2027, and will be immediately protected from unfair dismissal from that date</li>
                <li>Any employee who started on or after 1 July 2026 will gain protection once they reach 6 months' service</li>
            </ul>

            <p>In plain English: by 1 January 2027, most of your existing workforce will have full unfair dismissal protection.</p>

            <div class="callout">
                <p><strong>Practical impact:</strong> the casual "they haven't got two years" approach to dismissals is finished. Every dismissal from 1 January 2027 needs a fair reason and a fair process – see our <a href="/blog/dismissing-an-employee-fairly-uk-legal-process.php">guide to fair dismissal</a> for the full framework.</p>
            </div>

            <h2>The compensation cap is being removed</h2>

            <p>Currently, the compensatory award for ordinary unfair dismissal is capped at either <strong>£123,543</strong> (from April 2026) or 52 weeks' gross pay, whichever is lower. From <strong>1 January 2027</strong>, that cap is being <strong>removed entirely</strong>. Compensation for ordinary unfair dismissal will be uncapped – in the same way discrimination and whistleblowing claims already are.</p>

            <p>For senior employees on higher salaries, this is significant. A senior executive who loses an unfair dismissal claim post-1 January 2027 could be awarded substantially more than is currently possible.</p>

            <h2>Three things to do in 2026</h2>

            <h3>1. Tighten your dismissal processes now</h3>

            <p>If your current approach relies on "they've got less than 2 years' service, we don't need a full process" – rebuild it. Every dismissal from 1 January 2027 needs to meet the same standards regardless of length of service:</p>

            <ul>
                <li>A documented probation process with genuine performance reviews</li>
                <li>Fair disciplinary procedures applied consistently</li>
                <li>Records of any performance or conduct issues from day one</li>
                <li>Proper investigations and hearings as standard</li>
            </ul>

            <p>The muscle memory you build in 2026 is what will protect you in 2027.</p>

            <h3>2. Use 2026 to resolve tricky situations you've been carrying</h3>

            <p>If you have employees where the relationship is clearly broken but you've held off because they're under 2 years, 2026 is your window. After 1 January 2027 the risk profile changes materially.</p>

            <p>Options to consider:</p>

            <ul>
                <li>A formal process (performance, conduct or capability) while service-based protection still applies</li>
                <li>A <a href="/blog/settlement-agreements-explained.php">settlement agreement</a> to exit someone cleanly</li>
                <li>Genuine performance improvement support if the relationship is salvageable</li>
            </ul>

            <h3>3. Refresh your contracts, handbook and probation clauses</h3>

            <p>Most employment contracts and staff handbooks were written around the old 2-year qualifying period and old SSP rules. Review:</p>

            <ul>
                <li><strong>Probation clauses</strong> – length, reviews, process at the end of probation</li>
                <li><strong>Sickness absence policies</strong> – day-one SSP, no Lower Earnings Limit</li>
                <li><strong>Disciplinary and capability procedures</strong> – applied consistently regardless of service</li>
                <li><strong>Performance management</strong> – creating a proper paper trail from day one</li>
            </ul>

            <h2>Other ERA 2025 provisions in the pipeline</h2>

            <p>The ERA 2025 is being phased in over 2026 and 2027, with detailed commencement regulations and consultations still being worked through for a number of provisions. Areas under active development include reforms to zero-hours and low-hours contracts, strengthened protections against fire-and-rehire, and new trade union access rights.</p>

            <p>We'll update this guide as the detailed regulations are published. If you're on a <a href="/retainers.php">monthly HR support plan</a>, we'll flag material changes as they come into force.</p>

            <h2>What the Act does NOT change</h2>

            <p>The fundamentals of UK employment law aren't being rewritten:</p>

            <ul>
                <li>The five potentially fair reasons for dismissal (s.98 ERA 1996) remain</li>
                <li>The ACAS Code of Practice on Disciplinary and Grievance still applies</li>
                <li>Discrimination claims were always day-one rights with uncapped compensation – that hasn't changed</li>
                <li>Redundancy law and consultation requirements are unchanged</li>
                <li>The right to be accompanied at formal meetings continues</li>
            </ul>

            <p>The ERA 2025 extends and strengthens existing protections; it doesn't reinvent the wheel.</p>

            <h2>The bottom line</h2>

            <p>The ERA 2025 changes the calculation, not the rulebook. Employers who already run a tight HR function barely need to change anything. Employers who've been relying on light-touch processes for under-2-year employees have real work to do before 1 January 2027.</p>

            <p>2026 is the window. Use it to tidy up paperwork, tighten probation processes, audit sickness policies for the new SSP rules, and – where necessary – resolve situations that would be harder to resolve once the new qualifying period bites.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Want help getting ready for 2027?</h3>
            <p>We can audit your workforce, refresh your contracts and handbook, and put proper HR processes in place before January. Book a discovery call to talk it through.</p>
            <a href="/contact.php" class="btn btn-primary">Book a Discovery Call</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
