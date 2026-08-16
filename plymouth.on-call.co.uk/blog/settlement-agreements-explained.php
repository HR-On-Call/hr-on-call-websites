<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'settlement-agreements-explained';
$postTitle = 'Settlement Agreements Explained: When You Need One and How Much They Cost';
$postDate = '2026-02-18';
$postReadTime = '8 min read';
$postCategory = 'Employment Law';
$postExcerpt = 'A settlement agreement can save you thousands in tribunal costs – but only if it\'s drafted properly. Here\'s when to use one and what to expect.';

$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'settlement agreement UK, settlement agreement cost, settlement agreement employer, without prejudice, employment settlement, COT3 agreement, protected conversation';

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

        <p class="blog-article-lead">Settlement agreements (sometimes still called "compromise agreements" by older solicitors) are one of the most useful tools in an employer's HR toolkit – and one of the most misunderstood. Used properly, they can close down a difficult situation quickly and cleanly. Used badly, they can leave you with the worst of both worlds.</p>

        <div class="blog-article-body">
            <h2>What actually is a settlement agreement?</h2>

            <p>A settlement agreement is a legally binding contract between you and an employee (or ex-employee) where they agree to waive their rights to bring a claim against you – usually at an Employment Tribunal – in return for an agreed payment or other terms.</p>

            <p>It's governed by sections 111A and 203 of the Employment Rights Act 1996. For the agreement to be legally binding, the employee <strong>must</strong> have received independent legal advice from a qualified adviser, and the adviser must be named in the agreement and have professional indemnity insurance in place.</p>

            <h2>When should you use a settlement agreement?</h2>

            <p>The honest answer: whenever you'd rather pay a defined amount today than risk an undefined amount (plus management time, legal fees, and reputational hassle) later.</p>

            <p>Common situations where a settlement agreement is the right tool:</p>

            <ul>
                <li><strong>Performance or conduct issues</strong> where the formal process would be painful and the relationship is beyond repair</li>
                <li><strong>Redundancy</strong> – particularly for senior staff or where you want to avoid consultation complexity</li>
                <li><strong>Long-term sickness absence</strong> where ill-health capability is unlikely to go smoothly</li>
                <li><strong>Active grievances or tribunal claims</strong> you want to close out</li>
                <li><strong>Senior exits</strong> where mutual silence is genuinely valuable to both sides</li>
                <li><strong>Suspected whistleblowing or discrimination concerns</strong> – where the risk of going to tribunal is high</li>
            </ul>

            <div class="callout">
                <p><strong>The key question:</strong> would I rather pay £X now with certainty, or risk a potentially large compensatory award (which becomes uncapped for ordinary unfair dismissal from 1 January 2027) plus legal costs – while carrying the claim on the books for years before it's finally heard? If the former, settle.</p>
            </div>

            <h2>The tribunal backlog has changed the maths</h2>

            <p>This is the argument for settlement that most employers don't fully appreciate. The Employment Tribunal backlog is at record levels – over 68,000 open claims at the end of January 2026 – and depending on region and complexity, hearings are now being listed anywhere from 18 months to several years ahead. For longer or more complex cases in busier regions, listings are stretching into 2028 and beyond.</p>

            <p>That means a live claim is often still on your books years after the dismissal. That's years of:</p>

            <ul>
                <li>Management time tied up in disclosure, witness statements and hearings</li>
                <li>Ongoing legal fees ticking up as the case drifts</li>
                <li>Key witnesses leaving the business (memories fading, records going stale)</li>
                <li>A live claim sitting on your insurance renewal and due diligence for any sale</li>
                <li>The employee's losses (and therefore any compensation award) continuing to accumulate</li>
            </ul>

            <p>A £10,000 settlement today is almost always cheaper than a £10,000 award two or three years from now – because the claim itself will have cost you more than £10,000 in management time, legal fees and distraction to defend in the meantime. And that's before you factor in the risk of losing – particularly once the unfair dismissal compensatory cap is removed on 1 January 2027.</p>

            <h2>How much do settlement agreements cost?</h2>

            <p>There are two separate costs to think about: drafting the agreement, and the payment itself.</p>

            <h3>1. The drafting cost</h3>

            <p>For the legal document itself, expect:</p>

            <ul>
                <li><strong>HR consultant drafting:</strong> £600 – £1,500 depending on complexity</li>
                <li><strong>Employment solicitor drafting:</strong> £800 – £2,500+</li>
            </ul>

            <p>Our own fee is £750 + VAT for a standard settlement agreement. That includes drafting the full agreement, a without-prejudice letter, advising you on a sensible financial offer, and handling the negotiation with the employee's solicitor.</p>

            <h3>2. The employee's legal fees</h3>

            <p>You also need to contribute to the employee's legal advice – this is standard and non-negotiable. Typical contributions are £350 – £750 + VAT, paid directly to their solicitor.</p>

            <h3>3. The settlement payment itself</h3>

            <p>This is highly situational, but rough benchmarks:</p>

            <ul>
                <li><strong>Low-complexity exit (short service, no claim risk):</strong> 1-3 months' pay</li>
                <li><strong>Medium-complexity (some tenure, some risk):</strong> 3-6 months' pay</li>
                <li><strong>High-complexity (senior, long service, discrimination risk):</strong> 6-12+ months' pay</li>
            </ul>

            <p>Up to £30,000 of the termination payment can be paid tax-free (called the "£30k exemption"), but only the bit that's genuinely compensation for loss of office. Notice pay, bonuses and contractual entitlements are all taxable in the normal way.</p>

            <h2>How does the process actually work?</h2>

            <ol>
                <li><strong>Protected conversation</strong> – you have a "without prejudice" conversation with the employee explaining the situation and the offer on the table. This conversation cannot usually be used as evidence against you in a tribunal (provided you follow the rules).</li>
                <li><strong>Written offer</strong> – a without-prejudice letter setting out the terms in writing.</li>
                <li><strong>Independent legal advice</strong> – the employee takes the agreement to a solicitor (you pay a contribution to their fees).</li>
                <li><strong>Negotiation</strong> – expect at least one round of back-and-forth on the figures or terms.</li>
                <li><strong>Signed agreement</strong> – both parties sign, the employee's solicitor signs the adviser's certificate, and the employee's employment terminates on the agreed date.</li>
                <li><strong>Payment</strong> – typically 14-28 days after termination.</li>
            </ol>

            <p>A straightforward case takes 1-3 weeks from initial conversation to signed agreement. More complex cases can take longer, especially if there are active grievances or the employee is off sick.</p>

            <h2>Protected conversations: the rules</h2>

            <p>"Protected conversations" (under section 111A ERA 1996) let you raise the possibility of a settlement without the employee using the conversation as evidence in an unfair dismissal claim. But the protection is narrower than people think:</p>

            <ul>
                <li>It only protects against <strong>ordinary unfair dismissal claims</strong></li>
                <li>It does <strong>not</strong> protect against discrimination, whistleblowing or automatic unfair dismissal claims</li>
                <li>It does <strong>not</strong> protect "improper behaviour" (bullying, undue pressure, discrimination)</li>
                <li>Anything "without prejudice" in the common-law sense only applies if there's an existing dispute</li>
            </ul>

            <p>In practice, this means you need to be careful how you approach the conversation – particularly if there's any discrimination or whistleblowing angle. Get advice before the conversation, not after.</p>

            <h2>Common mistakes employers make</h2>

            <ul>
                <li><strong>Starting too low</strong> – a derisory opening offer often kills negotiations before they start. Pitch realistically.</li>
                <li><strong>Not getting the tax right</strong> – misusing the £30k exemption is a favourite HMRC target.</li>
                <li><strong>Skipping the protected conversation rules</strong> – particularly around pressure and timescales (employees must be given at least 10 calendar days to consider).</li>
                <li><strong>DIY drafting from a template</strong> – settlement agreements need to reference the specific claims being waived. A generic template may not be binding.</li>
                <li><strong>Forgetting post-termination restrictions</strong> – if you have restrictive covenants, make sure they're carried over or explicitly waived.</li>
            </ul>

            <h2>Settlement agreement vs COT3</h2>

            <p>Quick note: a COT3 is a similar agreement but facilitated by ACAS through their early conciliation or arbitration service. They're typically cheaper to draft and don't require the employee to take independent legal advice – but they can only be used where ACAS is involved (usually because the employee has lodged an early conciliation notification or a tribunal claim).</p>

            <h2>Should you offer a settlement?</h2>

            <p>Ask yourself: if this went to tribunal and the employee won, what would they get? Then work out your realistic settlement at somewhere below that number, minus the time, cost and uncertainty you'd save.</p>

            <p>For many employers, a £5,000 – £15,000 settlement is a bargain compared to a potentially £30,000+ tribunal award <em>and</em> years of defending the claim – with the management time, legal fees and uncertainty that goes with it. And once the unfair dismissal compensatory cap is removed in January 2027, the downside risk grows materially.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Dealing with a situation that might need a settlement?</h3>
            <p>We draft settlement agreements for UK employers at a fixed fee of £750 + VAT and handle the whole negotiation. Get in touch for a confidential chat.</p>
            <a href="/contact.php" class="btn btn-primary">Discuss Your Situation</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
