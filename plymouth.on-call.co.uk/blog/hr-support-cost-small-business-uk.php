<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'hr-support-cost-small-business-uk';
$postTitle = 'How Much Does HR Support Cost for a Small Business in the UK?';
$postDate = '2026-01-22';
$postReadTime = '7 min read';
$postCategory = 'HR Strategy';
$postExcerpt = 'From retainers to hourly consultancy – a straightforward breakdown of what HR support actually costs for SMEs, with no jargon or hidden fees.';

$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'HR support cost UK, HR retainer pricing, HR consultant fees, small business HR cost, HR consultant Plymouth cost, outsourced HR pricing';

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

        <p class="blog-article-lead">One of the first questions every small business owner asks when they start looking for HR support is simple: <em>how much is this going to cost me?</em> The honest answer is "it depends" – but that's a rubbish answer, so here's a proper breakdown of what HR support actually costs in the UK in 2026.</p>

        <div class="blog-article-body">
            <h2>The four main ways you can buy HR support</h2>

            <p>Before we get to numbers, it helps to understand the options. Most SMEs in the UK end up choosing between:</p>

            <ul>
                <li><strong>Monthly retainer or support plan</strong> – ongoing support for a fixed monthly fee, usually with a set amount of advice time included</li>
                <li><strong>Pay as you go / hourly consultancy</strong> – you only pay when you need advice</li>
                <li><strong>Project-based fees</strong> – a fixed price for a specific piece of work (contracts, a handbook, a settlement agreement)</li>
                <li><strong>In-house HR hire</strong> – employing an HR professional directly</li>
            </ul>

            <p>Each has a place. The right one depends on how often HR issues come up in your business and how much predictability you want in your costs.</p>

            <h2>How much does a monthly HR retainer cost?</h2>

            <p>A monthly retainer is the most common model for small businesses because it gives you peace of mind – you always know who to call, and there's no uncomfortable clock-watching when you pick up the phone.</p>

            <p>For UK SMEs in 2026, you'll typically see:</p>

            <ul>
                <li><strong>Micro businesses (1-10 employees):</strong> £150 – £350 per month</li>
                <li><strong>Small businesses (11-30 employees):</strong> £300 – £700 per month</li>
                <li><strong>Growing businesses (30+ employees):</strong> £700 – £1,500+ per month</li>
            </ul>

            <p>At HR On Call, our monthly support plans start at £75 a month for full access to our HR Library and rise to £600 a month for HR Managed. The middle plans add a set number of hours of our time each month for advice, document reviews and ad hoc letters, plus the Handbook Portal and an annual HR audit on the higher tiers – all plus VAT on a 12-month term.</p>

            <div class="callout">
                <p><strong>The commercial logic:</strong> one unfair dismissal claim can cost £20,000+ in legal fees and compensation before you've even got to the emotional cost. A retainer is cheap insurance against getting things wrong.</p>
            </div>

            <h2>How much does pay-as-you-go HR consultancy cost?</h2>

            <p>If you only have the occasional issue, hourly consultancy might suit you better. Typical rates in the UK:</p>

            <ul>
                <li><strong>General HR advisory support:</strong> £75 – £150 per hour</li>
                <li><strong>Specialist / employment law support:</strong> £100 – £200 per hour</li>
                <li><strong>Solicitor-led employment advice:</strong> £250 – £450+ per hour</li>
            </ul>

            <p>Our own rates sit in the middle of the consultancy bracket: £100/hour for advisory support (general HR guidance) and £120/hour for specialist support (where we step in and handle the issue for you – running a disciplinary, leading an investigation, negotiating a settlement).</p>

            <h2>What about one-off project work?</h2>

            <p>For specific documents or projects, fixed fees are usually best – you know exactly what you're paying. Typical UK SME prices:</p>

            <ul>
                <li><strong>Employment contract:</strong> £400 – £800</li>
                <li><strong>Employee handbook:</strong> £500 – £1,200</li>
                <li><strong>Settlement agreement:</strong> £600 – £1,500</li>
                <li><strong>ACAS early conciliation support:</strong> £400 – £1,000</li>
                <li><strong>Workplace investigation:</strong> £1,500 – £5,000+ depending on complexity</li>
            </ul>

            <h2>What does hiring an in-house HR person cost?</h2>

            <p>For comparison, if you went the in-house route:</p>

            <ul>
                <li><strong>HR Administrator:</strong> £25,000 – £32,000 salary</li>
                <li><strong>HR Officer / Advisor:</strong> £30,000 – £42,000 salary</li>
                <li><strong>HR Manager:</strong> £45,000 – £60,000 salary</li>
                <li><strong>HR Business Partner:</strong> £55,000 – £75,000+ salary</li>
            </ul>

            <p>Add on employer NI, pension contributions, holiday cover, training, software licences and the cost of recruiting them in the first place, and you're looking at 25-35% on top of salary as the true cost to the business.</p>

            <p>For most businesses under 50 employees, that's overkill. You're paying for capacity you don't need. A retainer or outsourced HR arrangement usually costs a tenth of that and gives you access to someone more experienced than you'd typically get at that salary level.</p>

            <h2>Which option is right for you?</h2>

            <p>A rough guide:</p>

            <ul>
                <li><strong>Fewer than 5 employees and things are simple?</strong> Pay as you go when you need it.</li>
                <li><strong>5-30 employees with occasional tricky issues?</strong> A monthly retainer – worth every penny for peace of mind.</li>
                <li><strong>30+ employees and HR issues weekly?</strong> Retainer with a specialist back-up, or consider a part-time in-house HR person with consultancy support.</li>
                <li><strong>50+ employees?</strong> Start thinking seriously about an in-house hire, backed by specialist consultancy for the complex stuff.</li>
            </ul>

            <h2>The hidden costs to watch out for</h2>

            <p>When comparing providers, ask about:</p>

            <ul>
                <li><strong>Response times</strong> – a cheap retainer that takes 5 days to respond when you're mid-disciplinary is no bargain</li>
                <li><strong>What's "in scope"</strong> – some providers include basic advice in the retainer but charge extra for anything meaty</li>
                <li><strong>Contract length</strong> – 12-month minimum terms are standard, but watch for auto-renewals</li>
                <li><strong>Extras</strong> – template library access, annual audits, handbook updates are sometimes included, sometimes not</li>
                <li><strong>VAT</strong> – most consultants charge VAT at 20%, so factor that in</li>
            </ul>

            <h2>Bottom line</h2>

            <p>For most UK small businesses, a monthly HR retainer between £150 and £700 is the sweet spot – predictable, comprehensive, and significantly cheaper than the consequences of getting it wrong.</p>

            <p>If you'd rather not commit to a retainer, pay-as-you-go hourly support at £100-£120 per hour is a sensible fallback for when issues arise.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Want a straight answer on what it would cost for your business?</h3>
            <p>We're happy to give you a no-pressure quote based on your team size and what you actually need.</p>
            <a href="/contact.php" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
