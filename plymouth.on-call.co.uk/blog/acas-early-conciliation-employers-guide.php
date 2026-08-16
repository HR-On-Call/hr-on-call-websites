<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'acas-early-conciliation-employers-guide';
$postTitle = 'ACAS Early Conciliation: A Complete Guide for UK Employers';
$postDate = '2026-06-05';
$postReadTime = '9 min read';
$postCategory = 'Employment Law';
$postExcerpt = 'When an employee lodges an ACAS notification, the clock starts ticking. Here\'s what happens next, what it costs, and how to handle it commercially.';

require_once __DIR__ . '/_guard.php';

$ogType = 'article';
$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'ACAS early conciliation, ACAS notification employer, COT3 agreement, employment tribunal conciliation, ACAS conciliation process, ACAS certificate';

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

        <p class="blog-article-lead">A letter or email arrives from ACAS telling you an employee (or former employee) has started Early Conciliation. For a lot of employers, that's the first sign a dispute is heading towards an employment tribunal. The good news is that it's also an opportunity to resolve things quickly, confidentially, and far more cheaply than a tribunal. Here's exactly what Early Conciliation is, what the process looks like, and how to handle it commercially.</p>

        <div class="blog-article-body">
            <h2>What is ACAS Early Conciliation?</h2>

            <p>ACAS (the Advisory, Conciliation and Arbitration Service) is an independent public body that helps resolve workplace disputes. Early Conciliation is a free, confidential service that gives both sides a chance to settle a dispute before it becomes a formal tribunal claim.</p>

            <p>It matters to you for one simple reason: in almost all cases, an employee cannot lodge an employment tribunal claim until they have first notified ACAS and gone through Early Conciliation. It is a compulsory step for the claimant, which is why so many disputes pass through ACAS before they ever reach a tribunal.</p>

            <h2>How the process actually works</h2>

            <p>The sequence is straightforward, even if the situation behind it rarely is:</p>

            <ul>
                <li><strong>The employee notifies ACAS.</strong> They complete a short notification form (online or by phone) setting out who they want to bring a claim against. They do not have to give much detail at this stage.</li>
                <li><strong>An ACAS conciliator makes contact.</strong> A conciliator is assigned and will usually call the employee first, then you (or whoever you nominate to deal with it). The conciliator is neutral. They do not act for either side and they do not give legal advice.</li>
                <li><strong>Conciliation happens by phone.</strong> The conciliator shuttles between the two sides to see whether a settlement is possible. Nothing said during conciliation can be used as evidence later if the matter does go to tribunal.</li>
                <li><strong>The period runs for up to six weeks.</strong> If a settlement is reached, it is recorded (see COT3 below). If not, or if either side does not want to take part, ACAS issues an Early Conciliation certificate.</li>
            </ul>

            <div class="callout">
                <p><strong>Key point:</strong> the certificate contains a reference number. The employee needs that number to lodge a tribunal claim. No certificate, no claim. So Early Conciliation is both the off-ramp and the gateway to the tribunal.</p>
            </div>

            <h2>Why the timing matters: it pauses the clock</h2>

            <p>Most tribunal claims have to be brought within three months less one day of the event complained about (for example, the date of dismissal). Early Conciliation pauses that limitation clock while conciliation is ongoing, and gives the employee a little extra time afterwards.</p>

            <p>For you, the practical takeaway is this: an ACAS notification is an early warning. It tells you a claim is being actively considered, often weeks before any tribunal paperwork would otherwise land. Use that window rather than waiting.</p>

            <h2>Do you have to take part?</h2>

            <p>No. Taking part in Early Conciliation is voluntary for both sides. You can decline, and the conciliator will simply issue the certificate so the employee can proceed to a tribunal if they wish.</p>

            <p>But declining is rarely the commercial choice. Conciliation is free, it is confidential, it carries no admission of liability, and it gives you a structured way to test what the dispute is really about and what it might take to make it go away. Even a short conversation with the conciliator tells you how serious the employee is and how they value their own claim.</p>

            <h2>What does it cost?</h2>

            <p>The ACAS service itself is free. The only cost is any settlement figure you agree, plus any advice you take along the way. Compare that to defending a tribunal claim, where legal costs can run into five figures and a contested hearing can take a year or more to reach, and the case for engaging is usually clear.</p>

            <h2>If you settle: the COT3 agreement</h2>

            <p>If you reach a deal through ACAS, the conciliator records it in a document called a COT3. A COT3 is a legally binding settlement that waives the employee's right to bring the claims covered by it.</p>

            <p>It is worth understanding how a COT3 differs from a <a href="/blog/settlement-agreements-explained.php">settlement agreement</a>:</p>

            <ul>
                <li>A COT3 is brokered by ACAS and does not require the employee to take independent legal advice to be binding. A settlement agreement does.</li>
                <li>A COT3 tends to be shorter and quicker to conclude. A settlement agreement is a fuller document you would typically use outside the ACAS process.</li>
                <li>Both can include the usual commercial terms, an agreed reference, confidentiality, and a payment.</li>
            </ul>

            <p>Whichever route you use, get the wording right. A poorly drafted waiver can leave claims open that you thought you had settled.</p>

            <h2>How to handle an ACAS notification, step by step</h2>

            <h3>1. Don't ignore it</h3>

            <p>Respond to the conciliator. Silence does not make the dispute go away, it just removes your chance to resolve it cheaply and sends the matter straight towards a tribunal.</p>

            <h3>2. Work out what the claim is really worth</h3>

            <p>Before you talk numbers, get a clear-eyed view of your risk. How strong is your paperwork? Did you follow a fair process? What would the employee realistically be awarded if they won? That honest assessment, not emotion, should drive your position.</p>

            <h3>3. Decide your walk-away position in advance</h3>

            <p>Know the figure above which it is better to defend the claim than to settle. Going into conciliation without a number is how employers end up either overpaying or losing a deal that was there to be done.</p>

            <h3>4. Keep it without prejudice and confidential</h3>

            <p>Conciliation discussions cannot be used against you later, but it still pays to be measured. Treat it as a commercial negotiation, not a chance to relitigate the rights and wrongs of what happened.</p>

            <h3>5. Get the settlement documented properly</h3>

            <p>If you agree terms, make sure the COT3 covers all the claims you intend to settle and reflects exactly what was agreed on payment, references and confidentiality.</p>

            <h2>The bottom line</h2>

            <p>An ACAS notification is not something to panic about, but it is not something to sit on either. It is a free, confidential, time-limited chance to close a dispute before it becomes an expensive and public tribunal claim. Handle it commercially: understand your risk, set your numbers, engage with the conciliator, and document any deal properly.</p>

            <p>If you are unsure how strong your position is, that is exactly the point to get advice. The earlier you understand your risk, the better the decisions you will make.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Had an ACAS notification land on your desk?</h3>
            <p>We can assess your risk, set a sensible negotiating position, and deal with the conciliator on your behalf so you can stay focused on running your business. Book a discovery call to talk it through.</p>
            <a href="/contact.php" class="btn btn-primary">Book a Discovery Call</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
