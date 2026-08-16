<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'disciplinary-procedure-uk-employers-guide';
$postTitle = 'Disciplinary Procedures: A Step-by-Step Guide for UK Employers';
$postDate = '2026-09-11';
$postReadTime = '9 min read';
$postCategory = 'Employee Relations';
$postExcerpt = 'Get a disciplinary wrong and a simple conduct issue becomes a tribunal claim. Here is how to run a fair process that follows the ACAS Code from start to finish.';

require_once __DIR__ . '/_guard.php';

$ogType = 'article';
$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'disciplinary procedure UK, ACAS disciplinary process, disciplinary hearing employer, gross misconduct, disciplinary warning, right to be accompanied';

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

        <p class="blog-article-lead">A disciplinary is one of those things employers put off, rush, or get tangled in, and any of those is how a straightforward conduct issue turns into a costly tribunal claim. The process itself is not complicated, but it has to be fair, and it has to follow the ACAS Code. Here's the full process, step by step.</p>

        <div class="blog-article-body">
            <h2>Start with the ACAS Code</h2>

            <p>The ACAS Code of Practice on Disciplinary and Grievance Procedures is the benchmark a tribunal uses to judge whether you acted fairly. You do not have to follow it word for word, but you do have to follow its principles. The sting in the tail: if you unreasonably fail to follow the Code and the employee wins, a tribunal can increase their compensation by up to 25%. Following a fair process is not just good practice, it is financially significant.</p>

            <p>A quick distinction first: a disciplinary is something <em>you</em> raise about an employee's conduct or performance. A complaint <em>they</em> raise is a grievance, which follows a different route, covered in our <a href="/blog/how-to-handle-employee-grievance-uk.php">guide to handling grievances</a>.</p>

            <h2>Step 1: Establish the facts (investigate first)</h2>

            <p>Never go straight to a disciplinary hearing. The first step is always a reasonable investigation to establish what actually happened. Gather the evidence, speak to any witnesses, and keep it proportionate to how serious the allegation is.</p>

            <p>Wherever possible, the person who investigates should not be the same person who later decides the outcome. Keeping those roles separate protects the fairness of the process.</p>

            <h2>Step 2: Decide whether there is a case to answer</h2>

            <p>Once you have the facts, decide honestly whether there is a genuine case to answer. Sometimes the investigation shows there is not, and the matter ends there, or is better dealt with as an informal conversation. Only proceed to a formal disciplinary if the evidence justifies it.</p>

            <h2>Step 3: Invite the employee to a hearing, in writing</h2>

            <p>If you are proceeding, write to the employee setting out:</p>

            <ul>
                <li>The specific allegations and the evidence you are relying on;</li>
                <li>The date, time and place of the hearing, with enough notice to prepare;</li>
                <li>The possible outcomes, including dismissal if that is genuinely on the table;</li>
                <li>Their <strong>right to be accompanied</strong> by a colleague or trade union representative.</li>
            </ul>

            <div class="callout">
                <p><strong>The right to be accompanied is statutory.</strong> Make it clear in the invite and allow it at the hearing. Denying it is a basic procedural error that can undermine an otherwise sound decision.</p>
            </div>

            <h2>Step 4: Hold a fair hearing</h2>

            <p>At the hearing, set out the allegations and the evidence, then give the employee a genuine opportunity to respond, put their side, and raise any mitigation. Listen. If they raise something that needs checking, be prepared to adjourn and look into it rather than pressing on regardless.</p>

            <h2>Step 5: Decide a proportionate outcome</h2>

            <p>Take time to reach a decision rather than announcing it on the spot. The sanction should be proportionate to the conduct and consistent with how you have treated similar cases. A typical scale runs:</p>

            <ul>
                <li><strong>First written warning</strong> for a first or minor act of misconduct;</li>
                <li><strong>Final written warning</strong> for more serious misconduct, or a repeat within the life of an earlier warning;</li>
                <li><strong>Dismissal</strong> where conduct is serious enough or warnings have not led to improvement;</li>
                <li><strong>Summary dismissal (without notice)</strong> only in cases of genuine gross misconduct.</li>
            </ul>

            <h2>Step 6: Confirm in writing and give the right of appeal</h2>

            <p>Put the outcome in writing, explain the reasons, state how long any warning will remain live, and set out the employee's right to appeal and how to exercise it. Every disciplinary outcome carries a right of appeal.</p>

            <h2>Step 7: Handle any appeal properly</h2>

            <p>If the employee appeals, hear it without unreasonable delay and, wherever possible, have it dealt with by someone who was not involved in the original decision. An appeal is your chance to catch and correct any mistake before it becomes a tribunal problem.</p>

            <h2>Gross misconduct and summary dismissal</h2>

            <p>Gross misconduct (for example theft, violence, serious breaches of health and safety, or a serious breach of trust) can justify dismissal without notice. But "gross misconduct" is not a shortcut that lets you skip the process. You still need to investigate, hold a hearing, allow the employee to respond, and give a right of appeal. The difference is the sanction, not the fairness owed.</p>

            <h2>Common mistakes that lead to claims</h2>

            <ul>
                <li><strong>Skipping the investigation</strong> and going straight to a hearing.</li>
                <li><strong>The same person investigating, deciding and hearing the appeal.</strong></li>
                <li><strong>Vague allegations</strong> the employee cannot properly answer.</li>
                <li><strong>Denying or discouraging the right to be accompanied.</strong></li>
                <li><strong>Predetermining the outcome</strong> before the hearing.</li>
                <li><strong>Inconsistency:</strong> dismissing one person for something another was let off for.</li>
            </ul>

            <p>Where a disciplinary may end in dismissal, it is worth reading alongside our guide to <a href="/blog/dismissing-an-employee-fairly-uk-legal-process.php">dismissing an employee fairly</a>, which covers how the fair-reason and fair-process tests fit together.</p>

            <h2>The bottom line</h2>

            <p>A fair disciplinary is methodical, not dramatic: investigate, decide if there is a case, invite properly, hear it fairly, decide proportionately, confirm in writing, and allow an appeal. Follow that sequence and document each step, and even a difficult dismissal becomes defensible. Cut corners and you hand the employee the procedural unfairness that wins claims.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Facing a disciplinary you want to get right?</h3>
            <p>We can guide you through the process or run it with you end to end, from investigation to hearing to appeal, so it stands up if it is ever challenged. Book a discovery call to talk it through.</p>
            <a href="/contact.php" class="btn btn-primary">Book a Discovery Call</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
