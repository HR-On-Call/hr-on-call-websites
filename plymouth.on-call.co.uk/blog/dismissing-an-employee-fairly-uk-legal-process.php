<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'dismissing-an-employee-fairly-uk-legal-process';
$postTitle = 'Dismissing an Employee Fairly: The UK Legal Process Explained';
$postDate = '2026-04-15';
$postReadTime = '10 min read';
$postCategory = 'Employment Law';
$postExcerpt = 'Dismissing an employee is one of the riskiest things you can do as a UK employer. Here\'s how to do it fairly, legally, and without ending up at tribunal.';

$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'how to dismiss an employee UK, unfair dismissal, fair dismissal process, employment tribunal, dismissal procedure, misconduct dismissal, capability dismissal';

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
        "jobTitle": "Founder & HR Consultant",
        "description": "MA HRM (Distinction) and CIPD Level 7 qualified HR consultant specialising in employment law and employee relations."
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

        <p class="blog-article-lead">Dismissing an employee is the single most legally risky thing most small business owners ever do. Get it right and you protect your business. Get it wrong and you could be looking at tens of thousands in compensation, months of management time, and a damaging tribunal judgment on public record. Here's how to do it properly.</p>

        <div class="blog-article-body">
            <h2>The five fair reasons for dismissal</h2>

            <p>Under UK employment law (Employment Rights Act 1996, s.98), there are only five potentially fair reasons to dismiss someone:</p>

            <ol>
                <li><strong>Conduct</strong> – misconduct or gross misconduct</li>
                <li><strong>Capability</strong> – poor performance or long-term ill health</li>
                <li><strong>Redundancy</strong> – the role is genuinely no longer needed</li>
                <li><strong>Statutory bar</strong> – continuing to employ them would break the law (e.g. lost driving licence for a driver)</li>
                <li><strong>"Some other substantial reason"</strong> (SOSR) – a catch-all for genuine business reasons that don't fit the other four</li>
            </ol>

            <p>If your reason doesn't fit one of these five, your dismissal is automatically unfair – no matter how fair the process.</p>

            <h2>The qualifying period: changing from 1 January 2027</h2>

            <p>Currently, most employees need <strong>2 years' continuous service</strong> before they can claim ordinary unfair dismissal. From <strong>1 January 2027</strong>, under the Employment Rights Act 2025, that qualifying period drops to <strong>6 months</strong>. Prior service counts, so:</p>

            <ul>
                <li>Any employee who started before 1 July 2026 will have full unfair dismissal protection from 1 January 2027</li>
                <li>Employees who started on or after 1 July 2026 will gain protection once they hit 6 months' service</li>
            </ul>

            <p>The compensatory award cap for ordinary unfair dismissal is also being removed from 1 January 2027 – meaning compensation becomes uncapped, as it already is for discrimination claims.</p>

            <p>Regardless of qualifying period, the following have always been "day-one rights" with no service requirement:</p>

            <ul>
                <li>Discrimination (protected from day one, uncapped compensation)</li>
                <li>Whistleblowing</li>
                <li>Asserting a statutory right</li>
                <li>Trade union activity</li>
                <li>Pregnancy and family leave</li>
                <li>Automatic unfair dismissal categories</li>
            </ul>

            <div class="callout">
                <p><strong>Practical point:</strong> the two-year cushion is gone. From January 2027, all employers should be operating on the assumption that dismissal protection kicks in at 6 months, compensation is uncapped, and following a fair process is essential from day one – not just good practice.</p>
            </div>

            <h2>The two limbs of fairness: reason and process</h2>

            <p>A dismissal is fair only if <strong>both</strong>:</p>

            <ol>
                <li>The reason is genuine and falls within the five fair reasons, AND</li>
                <li>You followed a fair procedure in reaching the decision</li>
            </ol>

            <p>Employers often have a genuine reason but lose at tribunal because the process was flawed. Both limbs matter.</p>

            <h2>The fair procedure: step by step</h2>

            <h3>Step 1: Identify the issue clearly</h3>

            <p>Before you do anything else, be clear in your own mind: what is the problem, what evidence do you have, and what reason (conduct, capability, redundancy, etc.) does it fall under? If you can't articulate this in one sentence, you're not ready to start the process.</p>

            <h3>Step 2: Investigate</h3>

            <p>Gather evidence proportionate to the seriousness of the issue. That might mean:</p>

            <ul>
                <li>Interviewing witnesses (with written statements)</li>
                <li>Pulling relevant documents (emails, systems logs, CCTV)</li>
                <li>Reviewing performance records, sickness records, appraisals</li>
                <li>Talking to the employee (in investigation mode, not disciplinary)</li>
            </ul>

            <p>In misconduct cases, you may need to suspend the employee on full pay pending investigation. Suspension should be a last resort – it's not a punishment and shouldn't be the default.</p>

            <h3>Step 3: Invite them to a formal meeting</h3>

            <p>In writing, with reasonable notice (at least 48 hours, ideally 5 working days), the invitation must:</p>

            <ul>
                <li>Set out the allegations or concerns clearly</li>
                <li>Enclose the evidence you're relying on</li>
                <li>Warn them that dismissal is a possible outcome</li>
                <li>Confirm their right to be accompanied</li>
                <li>Give the date, time and location</li>
            </ul>

            <p>Failing to warn them that dismissal is on the table is a classic procedural error.</p>

            <h3>Step 4: Hold the meeting properly</h3>

            <ul>
                <li>Let the employee respond to each point</li>
                <li>Take detailed notes</li>
                <li>Adjourn to consider – don't make the decision in the room</li>
                <li>Consider alternatives to dismissal (final warning, redeployment, support plan)</li>
                <li>Only decide to dismiss if it falls within the band of reasonable responses</li>
            </ul>

            <h3>Step 5: Communicate the outcome in writing</h3>

            <p>If the decision is dismissal, the outcome letter should:</p>

            <ul>
                <li>Confirm the decision and the reason</li>
                <li>Summarise the evidence and reasoning</li>
                <li>Set out the termination date</li>
                <li>Explain notice pay, accrued holiday, P45 arrangements</li>
                <li>Confirm the right of appeal and how to exercise it</li>
            </ul>

            <h3>Step 6: Hear the appeal</h3>

            <p>Appeals should be heard by someone more senior (or at least equally senior) who hasn't been involved in the case. An appeal can either confirm, reduce, or overturn the original decision.</p>

            <h2>Capability vs conduct: know the difference</h2>

            <p>Employers regularly conflate these, and it matters:</p>

            <ul>
                <li><strong>Conduct</strong> = won't do it (deliberate behaviour) → disciplinary procedure</li>
                <li><strong>Capability</strong> = can't do it (ability, skill or health) → capability/performance procedure</li>
            </ul>

            <p>For capability issues, you're expected to have given the employee a real chance to improve – typically through an initial discussion, a performance improvement plan (PIP), training and support, and regular reviews. Skipping straight to dismissal for a first-time performance issue is rarely fair.</p>

            <h2>Ill-health dismissals</h2>

            <p>Long-term sickness dismissals (a specific type of capability dismissal) require:</p>

            <ul>
                <li>Up-to-date medical evidence (often occupational health)</li>
                <li>Consideration of reasonable adjustments if there's a disability</li>
                <li>Discussion with the employee about a realistic return</li>
                <li>Consideration of whether you can wait any longer</li>
                <li>A capability hearing before any decision</li>
            </ul>

            <p>Rushing this process is dangerous. Disability discrimination claims (which often run alongside) are uncapped and have no qualifying service requirement.</p>

            <h2>Gross misconduct</h2>

            <p>Gross misconduct is conduct so serious it destroys the trust and confidence at the heart of the employment relationship – typically dishonesty, violence, serious breaches of health and safety, or serious insubordination.</p>

            <p>A finding of gross misconduct can justify <strong>summary dismissal</strong> – dismissal without notice or pay in lieu of notice. But this doesn't mean skipping the process. You still need:</p>

            <ul>
                <li>An investigation</li>
                <li>A disciplinary hearing with notice</li>
                <li>A chance for the employee to respond</li>
                <li>A written outcome and right of appeal</li>
            </ul>

            <p>The only thing "summary" about summary dismissal is that you don't pay notice – not that you cut corners on process.</p>

            <h2>What does unfair dismissal cost?</h2>

            <p>If a tribunal finds your dismissal unfair, compensation typically includes:</p>

            <ul>
                <li><strong>Basic award</strong> – calculated like a redundancy payment. From April 2026 the week's pay cap is £751, making the maximum basic award £22,530</li>
                <li><strong>Compensatory award</strong> – loss of earnings, currently capped at £123,543 or 52 weeks' gross pay (whichever is lower). From 1 January 2027 this cap is being <strong>removed entirely</strong></li>
                <li><strong>ACAS Code uplift</strong> – up to 25% increase on the compensatory award if you failed to follow the ACAS Code</li>
                <li><strong>Injury to feelings</strong> (discrimination cases only, uncapped)</li>
            </ul>

            <p>Add legal fees of £5,000–£25,000+ and the current tribunal backlog – with over 68,000 open claims at record levels and hearings being listed 18 months to several years ahead depending on region and complexity. You can see why <a href="/blog/settlement-agreements-explained.php">settlement agreements</a> are often the commercial choice.</p>

            <h2>When to bring in help</h2>

            <p>Honestly? As early as possible. The mistakes that lose tribunal cases are usually made in the first two weeks – the investigation that wasn't thorough enough, the letter that didn't warn about dismissal, the meeting that was conducted by the wrong person.</p>

            <p>Getting a CIPD qualified HR consultant involved at the start of a potential dismissal costs a few hundred pounds. Losing at tribunal costs tens of thousands. The maths is not subtle.</p>

            <h2>Key takeaways</h2>

            <ul>
                <li>Only five fair reasons for dismissal – be clear which one applies</li>
                <li>Both the reason AND the process must be fair</li>
                <li>Follow the ACAS Code – failures can cost you 25% more</li>
                <li>Don't conflate conduct and capability – they're different procedures</li>
                <li>Always offer the right of appeal</li>
                <li>Consider settlement where the business relationship is clearly over</li>
                <li>Get advice early, not after things have gone wrong</li>
            </ul>
        </div>

        <div class="blog-article-cta">
            <h3>Considering dismissing an employee?</h3>
            <p>We support UK employers through disciplinary and capability processes – from initial advice to conducting the hearing ourselves. Book a confidential chat to talk it through.</p>
            <a href="/contact.php" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
