<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'probation-periods-uk-employer-guide';
$postTitle = 'Probation Periods Done Properly (and Why They Matter More From 2027)';
$postDate = '2026-08-28';
$postReadTime = '8 min read';
$postCategory = 'HR Strategy';
$postExcerpt = 'A probation period is only useful if you actually use it. Here is how to set one up, run meaningful reviews, and make fair decisions before the new 6 month dismissal rule bites.';

require_once __DIR__ . '/_guard.php';

$ogType = 'article';
$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'probation period UK, probationary period employment law, extending probation, failing probation, probation review, 6 month qualifying period';

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

        <p class="blog-article-lead">Most employers have probation periods written into their contracts. Far fewer actually use them. A probation period is one of the most useful tools you have for getting hiring decisions right, but only if you run it as an active process rather than a date that quietly passes. And from 2027, getting probation right matters more than ever. Here's how to do it properly.</p>

        <div class="blog-article-body">
            <h2>What a probation period is (and is not)</h2>

            <p>A probation period is a defined window at the start of employment during which you assess whether a new hire is right for the role. It is a contractual arrangement, not a statutory one: there is no law that requires probation, and crucially, being "on probation" does not strip an employee of their legal rights. They still have day-one protections such as the right not to be discriminated against, and the contract still applies.</p>

            <p>What probation does give you is a clear, agreed framework for assessing fit, often with shorter notice during the period and a built-in review point before you fully commit.</p>

            <h2>Setting one up</h2>

            <p>Keep it simple and put it in writing in the contract. A good probation clause covers:</p>

            <ul>
                <li><strong>Length.</strong> Three to six months is typical. Choose a period that genuinely lets you assess the role.</li>
                <li><strong>Shorter notice during probation,</strong> so either side can part ways more quickly if it is not working.</li>
                <li><strong>The right to extend</strong> the period if you need more time to make a fair decision.</li>
                <li><strong>What success looks like,</strong> ideally tied to clear objectives or standards the person is expected to meet.</li>
            </ul>

            <h2>Run meaningful reviews</h2>

            <p>This is where most employers fall down. Probation is not a single meeting at the end; it is a series of check-ins:</p>

            <ul>
                <li>Set expectations clearly on day one.</li>
                <li>Have regular, short review conversations through the period, not just one at the finish.</li>
                <li>Give honest feedback early. If something is not working, the person deserves the chance to fix it, and you deserve a documented record that you raised it.</li>
                <li>Write it down. A few lines after each review is worth far more than memory if a decision is ever questioned.</li>
            </ul>

            <div class="callout">
                <p><strong>The golden rule:</strong> nobody should be surprised by the outcome of their probation. If you are about to fail someone who has never been told there is a problem, the process has gone wrong somewhere before this point.</p>
            </div>

            <h2>Extending probation</h2>

            <p>Sometimes you reach the end and you are genuinely not sure. As long as your contract allows it, you can extend probation to give the person a fair chance to show improvement. Confirm the extension in writing before the original period ends, explain what needs to improve, and set a clear new review date.</p>

            <h2>Failing probation fairly</h2>

            <p>If someone is not up to the role, you can bring their employment to an end during or at the end of probation, giving the notice the contract requires. Even though the bar is lower than for a long-serving employee, fair beats sloppy every time:</p>

            <ul>
                <li>Base the decision on genuine, documented concerns, not a vague feeling.</li>
                <li>Hold a meeting, explain the position, and let the person respond.</li>
                <li>Confirm the outcome in writing.</li>
                <li>Be alert to anything that could make a dismissal automatically unfair or discriminatory regardless of length of service, such as a reason connected to pregnancy, disability or whistleblowing.</li>
            </ul>

            <h2>Why this matters more from 2027</h2>

            <p>Here is the part to pay attention to. Under the <a href="/blog/employment-rights-act-2025-employer-guide.php">Employment Rights Act 2025</a>, from <strong>1 January 2027</strong> the qualifying period for ordinary unfair dismissal drops from two years to <strong>six months</strong>, and prior service counts towards it.</p>

            <p>Think about what that means alongside a typical three to six month probation. The point at which you decide whether to keep someone now sits right on the edge of the new protection threshold. The casual approach of letting borderline hires drift past probation because "they are nowhere near two years" no longer works, because full unfair dismissal protection arrives far sooner.</p>

            <p>In practice, that makes a well-run probation period one of your most important protections. It is the structured, documented opportunity to make a fair keep-or-release decision before the legal bar rises, and to build the kind of evidence trail that supports a fair decision either way.</p>

            <h2>Common mistakes</h2>

            <ul>
                <li><strong>Treating probation as a formality</strong> and never reviewing it.</li>
                <li><strong>Letting the end date pass</strong> without a decision, so the person is confirmed by default.</li>
                <li><strong>Failing someone with no prior warning</strong> or documentation.</li>
                <li><strong>Assuming probation removes all employment rights.</strong> It does not.</li>
            </ul>

            <h2>The bottom line</h2>

            <p>A probation period is only as good as the way you use it. Set clear expectations, review regularly, document honestly, and make a deliberate decision before the period ends. Do that consistently and you will make better hiring calls, and you will be far better placed for the lower dismissal threshold arriving in 2027.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Want your probation and contract terms ready for 2027?</h3>
            <p>We can review your contracts and probation clauses, set up a proper review process, and help you make fair decisions on borderline hires. Book a discovery call to talk it through.</p>
            <a href="/contact.php" class="btn btn-primary">Book a Discovery Call</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
