<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'redundancy-process-uk-employers-guide';
$postTitle = 'Redundancy Explained: A Fair and Legal Process for UK Employers';
$postDate = '2026-07-31';
$postReadTime = '10 min read';
$postCategory = 'Employment Law';
$postExcerpt = 'Redundancy is one of the most heavily regulated areas of UK employment law. Here\'s how to run a fair process, avoid tribunal risk, and treat people well on the way out.';

require_once __DIR__ . '/_guard.php';

$ogType = 'article';
$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'redundancy process UK, fair redundancy, redundancy consultation, statutory redundancy pay, redundancy selection criteria, collective consultation';

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

        <p class="blog-article-lead">Redundancy is one of the most heavily regulated things you can do as an employer, and one of the easiest to get wrong. Get the reason, the process or the selection wrong and a genuine cost-saving exercise can turn into an unfair dismissal claim. Done properly, redundancy is lawful, defensible, and can be handled in a way that treats people decently. Here's the process step by step.</p>

        <div class="blog-article-body">
            <h2>What counts as a genuine redundancy?</h2>

            <p>In law, redundancy has a specific meaning. It arises where the need for employees to do work of a particular kind has reduced or stopped, or where a business or a workplace is closing. In plain terms, redundancy is about the <em>role</em> no longer being needed, not about the <em>person</em>.</p>

            <p>That distinction matters enormously. If the real reason is performance or conduct, that is not redundancy, and dressing it up as one is a fast route to a tribunal. Those situations need a <a href="/blog/dismissing-an-employee-fairly-uk-legal-process.php">fair dismissal process</a> instead.</p>

            <h2>Step 1: Confirm the business case</h2>

            <p>Before you speak to anyone, be clear and honest about why you are proposing redundancies and be able to evidence it. A genuine business reason (falling demand, restructuring, closure, automation) is the foundation everything else rests on. If you cannot explain it cleanly, stop and rethink.</p>

            <h2>Step 2: Identify the pool</h2>

            <p>Work out which roles are genuinely at risk, and define the selection pool fairly. The pool is the group of employees from which you will select for redundancy. Drawing it too narrowly, so that it conveniently contains only the person you want to lose, is a classic mistake that undermines the whole process.</p>

            <h2>Step 3: Consult, properly and in good time</h2>

            <p>Consultation is not a box-ticking formality. It must be genuine, which means you consult while proposals are still at a formative stage and you actually listen to what people say.</p>

            <ul>
                <li><strong>Individual consultation</strong> applies in every redundancy. You meet affected employees, explain the situation, share the basis for selection, and give them a real chance to respond and suggest alternatives.</li>
                <li><strong>Collective consultation</strong> is triggered if you propose to make 20 or more redundancies at one establishment within a 90-day period. In that case you must consult employee representatives, observe minimum consultation periods (at least 30 days for 20 to 99 redundancies, at least 45 days for 100 or more), and notify the Insolvency Service in advance using form HR1. Getting this wrong can lead to substantial protective awards.</li>
            </ul>

            <div class="callout">
                <p><strong>Watch the threshold:</strong> the 20+ figure is about proposed redundancies, not just confirmed ones, and the collective duties bite early. If you are anywhere near it, take advice before you start, because the timetable and paperwork are unforgiving.</p>
            </div>

            <h2>Step 4: Use fair, objective selection criteria</h2>

            <p>Where you have a pool, you need a fair way to select. Criteria should be objective and capable of being evidenced, for example skills and qualifications, performance records, and relevant experience. Avoid anything subjective or based on a protected characteristic.</p>

            <p>Certain selections are automatically unfair regardless of process, including selecting someone because of pregnancy or maternity, trade union membership, or for asserting a statutory right. Build your criteria so they could never be read that way.</p>

            <h2>Step 5: Score and provisionally select</h2>

            <p>Apply the criteria consistently across the pool and keep clear records of how each person scored. The scoring should be capable of standing up to scrutiny if challenged. Selection at this stage is provisional, because consultation might still change the picture.</p>

            <h2>Step 6: Look for suitable alternative employment</h2>

            <p>You have a duty to consider whether there is suitable alternative work elsewhere in the business before confirming a redundancy. Where there is, offer it. Employees taking up a new role are entitled to a trial period (normally four weeks) to see whether it works, without losing their redundancy rights if it does not.</p>

            <h2>Step 7: Notice and redundancy pay</h2>

            <p>Once a redundancy is confirmed, the employee is entitled to their contractual or statutory notice, whichever is greater, and (if they have at least two years' service) a statutory redundancy payment. Statutory redundancy pay is calculated on a set formula based on age and length of service:</p>

            <ul>
                <li>Half a week's pay for each full year worked while under 22;</li>
                <li>One week's pay for each full year worked while aged 22 to 40;</li>
                <li>One and a half weeks' pay for each full year worked while 41 or over.</li>
            </ul>

            <p>Length of service is capped at 20 years, and a week's pay is subject to a statutory cap that the government reviews every April, so always check the current figure when you calculate. Many employers also choose to enhance redundancy pay above the statutory minimum, which can help with morale and with agreeing a clean exit.</p>

            <h2>Step 8: Offer the right of appeal</h2>

            <p>Give employees the right to appeal their selection. An appeal is a chance to put right anything that went wrong, and a properly handled appeal strengthens the fairness of the overall process if it is ever questioned later.</p>

            <h2>Common mistakes that lead to claims</h2>

            <ul>
                <li><strong>Pre-deciding the outcome</strong> and treating consultation as a formality.</li>
                <li><strong>Gerrymandering the pool</strong> so only the target is in it.</li>
                <li><strong>Subjective or discriminatory selection criteria.</strong></li>
                <li><strong>Ignoring suitable alternative roles</strong> that were available.</li>
                <li><strong>Missing the collective consultation trigger</strong> when proposing 20 or more redundancies.</li>
                <li><strong>Using redundancy as cover</strong> for what is really a performance or conduct issue.</li>
            </ul>

            <p>Where redundancy is genuine but the relationship would be cleaner to end by agreement, a <a href="/blog/settlement-agreements-explained.php">settlement agreement</a> can sometimes be the more sensible route. It is worth weighing up early.</p>

            <h2>The bottom line</h2>

            <p>A fair redundancy comes down to four things: a genuine business reason, a fair pool, real consultation, and objective selection, all properly documented. Rush any of those and you turn a lawful cost decision into a legal risk. Take them in order, keep good records, and treat people with respect on the way out, and you protect both your business and your reputation.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Planning a restructure or redundancies?</h3>
            <p>We can design and run a fair, defensible process with you, from the business case and pool to consultation, scoring and paperwork. Book a discovery call to talk it through.</p>
            <a href="/contact.php" class="btn btn-primary">Book a Discovery Call</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
