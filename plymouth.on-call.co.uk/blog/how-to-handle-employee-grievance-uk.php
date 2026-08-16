<?php
require_once __DIR__ . '/../config.php';

$postSlug = 'how-to-handle-employee-grievance-uk';
$postTitle = 'How to Handle an Employee Grievance: A Step-by-Step Guide for UK Employers';
$postDate = '2026-03-12';
$postReadTime = '9 min read';
$postCategory = 'Employee Relations';
$postExcerpt = 'A formal grievance landing on your desk can feel overwhelming. This guide walks you through the ACAS Code, the process, and where most employers trip up.';

$pageTitle = $postTitle . ' | HR On Call Blog';
$pageDescription = $postExcerpt;
$pageKeywords = 'employee grievance procedure UK, how to handle grievance, ACAS Code of Practice, grievance hearing, grievance outcome, grievance appeal, employment law Plymouth';

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

        <p class="blog-article-lead">A written grievance has landed on your desk. Maybe it's about a manager's behaviour, unfair treatment, pay, or a long-running conflict between colleagues. Whatever the substance, the clock is now ticking – and how you handle the next few weeks will make the difference between resolving the issue and ending up at tribunal.</p>

        <div class="blog-article-body">
            <h2>Start with the ACAS Code of Practice</h2>

            <p>The ACAS Code of Practice on Disciplinary and Grievance Procedures is the framework tribunals will measure you against. You don't have to follow it word-for-word, but if you ignore it, a tribunal can increase compensation by up to 25%.</p>

            <p>The core principles are:</p>

            <ul>
                <li>Raise issues with the employee promptly</li>
                <li>Act consistently</li>
                <li>Carry out any necessary investigations</li>
                <li>Inform the employee of the basis of the problem and give them an opportunity to respond</li>
                <li>Allow them to be accompanied at any formal meeting</li>
                <li>Allow an appeal against any formal decision</li>
            </ul>

            <p>Most UK employers should also have a written grievance procedure that tracks these principles. If you don't, that's the first thing to fix.</p>

            <h2>Step 1: Acknowledge the grievance promptly</h2>

            <p>Within a day or two of receiving the grievance, write to the employee to:</p>

            <ul>
                <li>Confirm you've received it</li>
                <li>Explain the process you'll follow</li>
                <li>Give an indicative timescale</li>
                <li>Set out what will happen next (usually: investigation, meeting, outcome, right of appeal)</li>
            </ul>

            <p>If the employee is still at work, consider whether any immediate practical measures are needed – for example, temporary reporting line changes if the grievance is against their manager.</p>

            <div class="callout">
                <p><strong>A common mistake:</strong> responding emotionally. Even if the grievance feels unfair or disproportionate, don't push back at this stage. Acknowledge it, follow the process, and let the investigation do the work.</p>
            </div>

            <h2>Step 2: Consider informal resolution</h2>

            <p>The ACAS Code encourages employers to try informal resolution where possible. That might mean:</p>

            <ul>
                <li>A facilitated conversation between the parties</li>
                <li>Mediation (internal or external)</li>
                <li>A manager-to-employee one-to-one to clear the air</li>
            </ul>

            <p>Informal resolution only works where both parties want it. If the employee has raised a formal grievance, they're usually past the informal stage – but it's still worth asking the question. Document that you offered it.</p>

            <h2>Step 3: Investigate properly</h2>

            <p>This is where most employers trip up. The investigation needs to be:</p>

            <ul>
                <li><strong>Independent</strong> – the investigator should not be the subject of the grievance, and ideally not the person making the final decision</li>
                <li><strong>Proportionate</strong> – a simple grievance doesn't need a 40-page report, but it does need evidence to support a decision</li>
                <li><strong>Fair</strong> – both sides heard, relevant witnesses interviewed, relevant documents reviewed</li>
                <li><strong>Documented</strong> – written statements, notes of meetings, copies of evidence</li>
            </ul>

            <p>For smaller businesses, the tricky part is finding an independent investigator. If the grievance is against the owner or the only HR person, you'll likely need to bring in an external HR consultant or employment lawyer. Attempting to investigate yourself when you're implicated will be fatal to any defence later.</p>

            <h2>Step 4: Hold the grievance hearing</h2>

            <p>Once the investigation is complete, invite the employee to a grievance hearing in writing. The invitation should:</p>

            <ul>
                <li>Give at least 5 working days' notice</li>
                <li>Confirm the employee's right to be accompanied (by a colleague or trade union rep)</li>
                <li>Enclose the investigation findings and any documents being relied on</li>
                <li>Confirm the date, time, location and who will chair</li>
            </ul>

            <p>At the hearing itself:</p>

            <ul>
                <li>Let the employee set out their grievance in their own words</li>
                <li>Work through each point raised</li>
                <li>Discuss the evidence and test their account</li>
                <li>Ask what outcome they're seeking</li>
                <li>Take full notes and share them afterwards</li>
            </ul>

            <h2>Step 5: Decide and communicate the outcome</h2>

            <p>You should aim to deliver the outcome in writing within 5-10 working days of the hearing (longer is sometimes necessary – just keep the employee informed).</p>

            <p>The outcome letter should:</p>

            <ul>
                <li>Address each point of the grievance individually</li>
                <li>State whether each point is upheld, partially upheld, or not upheld</li>
                <li>Explain your reasoning based on the evidence</li>
                <li>Set out any action you'll take</li>
                <li>Confirm the right of appeal and the timescale</li>
            </ul>

            <p>This isn't the time to be vague. "Your concerns have been noted" won't cut it. Employees – and tribunals – want to see specific findings with reasons.</p>

            <h2>Step 6: Handle the appeal</h2>

            <p>Appeals are a legal right. The appeal should be heard by someone more senior than the original decision-maker, ideally someone who hasn't been involved in the case.</p>

            <p>The appeal can either be:</p>

            <ul>
                <li><strong>A review</strong> – looking at whether the original decision was reasonable</li>
                <li><strong>A rehearing</strong> – starting the whole process again</li>
            </ul>

            <p>The employee should be told which approach you're taking. A rehearing is often more appropriate where procedural flaws are being raised.</p>

            <h2>Common employer mistakes</h2>

            <ol>
                <li><strong>Moving too slowly.</strong> Grievances left to fester turn into tribunal claims. Aim to complete the whole process in 4-8 weeks.</li>
                <li><strong>Investigating superficially.</strong> Half-hearted investigations get torn apart at tribunal.</li>
                <li><strong>Using the wrong person to hear the grievance.</strong> The manager named in the grievance cannot hear the grievance about themselves.</li>
                <li><strong>Not recognising protected characteristics.</strong> If the grievance touches on sex, race, disability or other protected characteristics, you're now also in discrimination territory – the stakes are much higher.</li>
                <li><strong>Getting the outcome letter wrong.</strong> Vague, generic outcomes are the single biggest own-goal employers score.</li>
                <li><strong>Skipping the appeal.</strong> Even if you think the appeal has no merit, you must offer and hold one.</li>
            </ol>

            <h2>What if the grievance is against you (the business owner)?</h2>

            <p>If you're a small employer and the grievance is about the owner, director or only HR person, you need to bring in independent support. This is exactly the kind of situation where engaging an external HR consultant or employment lawyer is not optional – it's essential to any defence.</p>

            <h2>When to settle instead</h2>

            <p>Sometimes the grievance is a symptom that the working relationship is already over. If you suspect the employee doesn't actually want the issue resolved – they want to leave on good terms – it may be faster, cheaper and cleaner to offer a <a href="/blog/settlement-agreements-explained.php">settlement agreement</a>. Just be careful: offering a settlement in a way that's seen as punishment for raising the grievance could itself be discrimination or victimisation.</p>

            <h2>The bottom line</h2>

            <p>Grievances are rarely about the stated issue in isolation. They're usually a signal that something bigger is going on – poor management, a communication breakdown, or a deeper cultural problem. Handle the formal process properly, but also ask yourself what the grievance is <em>really</em> telling you. The best employers treat every grievance as free consulting on what's wrong with the business.</p>
        </div>

        <div class="blog-article-cta">
            <h3>Dealing with a live grievance?</h3>
            <p>I can investigate, chair the hearing, or simply advise you behind the scenes. Get in touch for a confidential chat about your options.</p>
            <a href="/contact.php" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</article>

<?php include __DIR__ . '/../includes/footer.php'; ?>
