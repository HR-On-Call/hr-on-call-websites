<?php
require_once 'config.php';

$pageTitle = 'Partner With Us | HR Referral Programme for Professional Advisors';
$pageDescription = 'Earn referral fees while helping your clients with professional HR support. 10% commission on referrals plus fixed fees for one-off services. Partner with HR On Call today.';
$pageKeywords = 'HR referral programme, accountant partnerships, solicitor HR referrals, HR services referral, employment law referrals, Plymouth HR partner';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

<!-- Hero Section -->
<section class="oc-hero">
    <div class="oc-wrap">
        <span class="oc-eyebrow"><span></span>Partner With Us</span>
        <h1>Partner With Us</h1>
        <p>As an accountant, solicitor or business advisor, you're often the first person business owners turn to when they need professional advice. When they ask about employment contracts, staff handbooks or HR issues, we can help - and you can earn a referral fee for the introduction.</p>
    </div>
</section>

<!-- About Grace Section -->
<section class="oc-sec oc-navy">
    <div class="oc-wrap">
        <div class="oc-split">
            <div class="oc-split-img" style="text-align:center;">
                <img src="/assets/images/grace-pariser-headshot.jpg" width="400" height="400" alt="Grace Pariser HR Consultant" loading="lazy" style="width:280px; height:280px; border-radius:50%; object-fit:cover; box-shadow:0 18px 44px rgba(0,0,0,.3); display:inline-block; border:3px solid var(--gold);">
                <div style="font-size:18px; font-weight:700; color:#fff; margin-top:16px;">Grace Pariser</div>
                <div style="font-size:14px; color:var(--gold);">Founder &amp; HR Consultant</div>
            </div>
            <div>
                <h2 style="color:#fff;">Expert HR Partner for Your Referrals</h2>
                <p style="color:#AEBDD0; margin-top:16px; font-size:16px;">We provide commercial, practical HR support to businesses across Plymouth, Devon and Cornwall, combining technical expertise with a business-focused approach.</p>
                <p style="color:#AEBDD0; margin-top:14px; font-size:16px;">Your clients receive professional solutions tailored to their business needs, delivered efficiently and with complete confidentiality. You get a trusted contact to refer into, without awkward moments when employment questions come up.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>How It Works</span>
            <h2>How It Works</h2>
        </div>

        <div class="oc-steps">
            <div class="oc-step">
                <div class="num">1</div>
                <h3>Client needs HR</h3>
                <p>Your client asks about employment contracts, staff policies or a tricky HR issue.</p>
            </div>

            <div class="oc-step">
                <div class="num">2</div>
                <h3>Make introduction</h3>
                <p>Introduce us to your client - a quick email is usually all it takes.</p>
            </div>

            <div class="oc-step">
                <div class="num">3</div>
                <h3>We handle everything</h3>
                <p>We take care of your client's HR needs professionally and efficiently.</p>
            </div>

            <div class="oc-step">
                <div class="num">4</div>
                <h3>You earn commission</h3>
                <p>Receive 10% of the initial contract value when your referral becomes a client.</p>
            </div>
        </div>
    </div>
</section>

<!-- Referral Earnings Section -->
<section class="oc-sec oc-cream">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Your Referral Earnings</span>
            <h2>Your Referral Earnings</h2>
            <p>All prices shown exclude VAT.</p>
        </div>

        <div class="oc-pair oc-mt">
            <div class="oc-card">
                <h3>Monthly plan referrals</h3>
                <p style="margin:10px 0 0; color:var(--navy); font-weight:700; font-size:16px;">10% of initial contract value</p>
                <ul class="oc-ticklist" style="margin-top:14px;">
                    <li>HR Advice plan, 12-month term (&pound;1,800 + VAT): <strong>You earn &pound;180</strong></li>
                    <li>HR Support plan, 12-month term (&pound;3,600 + VAT): <strong>You earn &pound;360</strong></li>
                    <li>HR Managed plan, 12-month term (&pound;7,200 + VAT): <strong>You earn &pound;720</strong></li>
                    <li>Other fixed fee project work: <strong>You earn 10%</strong></li>
                </ul>
            </div>

            <div class="oc-card">
                <h3>One-off document referrals</h3>
                <p style="margin:10px 0 0; color:var(--navy); font-weight:700; font-size:16px;">Fixed referral fees</p>
                <ul class="oc-ticklist" style="margin-top:14px;">
                    <li>Employment Contract or Handbook (&pound;600 + VAT): <strong>You earn &pound;100</strong></li>
                    <li>Contract &amp; Handbook (&pound;1,200 + VAT): <strong>You earn &pound;200</strong></li>
                    <li>ACAS Early Conciliation Support (&pound;500 + VAT): <strong>You earn &pound;100</strong></li>
                    <li>Settlement Agreement (&pound;750 + VAT): <strong>You earn &pound;200</strong></li>
                </ul>
            </div>
        </div>

        <p style="text-align:center; margin-top:28px; color:var(--navy); font-weight:700; font-size:16px;">Commission is paid within 30 days of client payment</p>
    </div>
</section>

<!-- What I Offer Section -->
<section class="oc-sec">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>What We Offer Your Clients</span>
            <h2>What We Offer Your Clients</h2>
        </div>

        <div class="oc-grid3">
            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-calendar-check"></i></div>
                <h3>Monthly HR Support Plans</h3>
                <p>Ongoing HR support on a fixed monthly plan from &pound;75/month + VAT</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-phone"></i></div>
                <h3>Expert HR Advice</h3>
                <p>HR and employment law advice by phone and email, with included hours each month</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-balance-scale"></i></div>
                <h3>Employment Law Guidance</h3>
                <p>Expert advice on employment law and compliance matters</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-file-contract"></i></div>
                <h3>Document Reviews</h3>
                <p>Employment contract and policy reviews and redrafting</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-gavel"></i></div>
                <h3>Disciplinary Support</h3>
                <p>Guidance on disciplinaries, grievances and performance issues</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-comments"></i></div>
                <h3>ACAS Support</h3>
                <p>ACAS early conciliation negotiations and drafting</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-folder-open"></i></div>
                <h3>HR Library</h3>
                <p>Access to a comprehensive library of HR templates and documents</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-clipboard-check"></i></div>
                <h3>Annual HR Audit</h3>
                <p>Annual HR audit to identify compliance gaps and improvement opportunities</p>
            </div>

            <div class="oc-card">
                <div class="oc-ico"><i class="fas fa-bolt"></i></div>
                <h3>Priority Response</h3>
                <p>Priority response within 24 hours for all plan clients</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Refer Section -->
<section class="oc-sec oc-navy">
    <div class="oc-wrap">
        <div class="oc-head">
            <span class="oc-eyebrow"><span></span>Why Refer HR On Call?</span>
            <h2 style="color:#fff;">Why Refer HR On Call?</h2>
        </div>

        <div class="oc-grid4">
            <div class="oc-cardn">
                <h3>Takes pressure off you</h3>
                <p>No more awkward moments when clients ask employment law questions outside your expertise.</p>
            </div>

            <div class="oc-cardn">
                <h3>Makes you look connected</h3>
                <p>Having trusted professional contacts enhances your service to clients.</p>
            </div>

            <div class="oc-cardn">
                <h3>Quality service</h3>
                <p>Your clients receive expert HR support that protects their business.</p>
            </div>

            <div class="oc-cardn">
                <h3>Simple process</h3>
                <p>Just make the introduction - we handle everything else professionally. No limit, refer as many clients as you like.</p>
            </div>
        </div>
    </div>
</section>

<!-- Signup Form Section -->
<section class="oc-sec oc-cream">
    <div class="oc-wrap">
        <div class="oc-head center">
            <span class="oc-eyebrow"><span></span>Join Our Referrer Network</span>
            <h2>Join Our Referrer Network</h2>
            <p>Complete the form below to become a referral partner</p>
        </div>

        <div class="signup-form-container" style="max-width: 720px; margin: 44px auto 0;">
            <div class="oc-card">
                <form class="referrer-form oc-form" action="process-referrer.php" method="POST">
                    <div class="oc-field-row">
                        <div class="oc-field">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="oc-field">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>

                    <div class="oc-field">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="oc-field">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="oc-field-row">
                        <div class="oc-field">
                            <label for="company">Company / Practice Name *</label>
                            <input type="text" id="company" name="company" required>
                        </div>
                        <div class="oc-field">
                            <label for="location">Location *</label>
                            <input type="text" id="location" name="location" placeholder="e.g. Plymouth, Devon" required>
                        </div>
                    </div>

                    <div class="oc-field">
                        <label for="client-size">Typical Client Size</label>
                        <select id="client-size" name="client_size">
                            <option value="">Please select...</option>
                            <option value="1-10">1-10 employees</option>
                            <option value="11-25">11-25 employees</option>
                            <option value="26-50">26-50 employees</option>
                            <option value="51-100">51-100 employees</option>
                            <option value="100+">100+ employees</option>
                            <option value="mixed">Mixed sizes</option>
                        </select>
                    </div>

                    <div class="oc-field">
                        <label for="referral-frequency">Expected Referral Frequency</label>
                        <select id="referral-frequency" name="referral_frequency">
                            <option value="">Please select...</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="biannually">Twice a year</option>
                            <option value="annually">Annually</option>
                            <option value="as-needed">As needed</option>
                        </select>
                    </div>

                    <div class="oc-field">
                        <label for="additional-info">Additional Information</label>
                        <textarea id="additional-info" name="additional_info" rows="4" placeholder="Tell us about your practice and what type of HR support your clients typically need..."></textarea>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label" style="display:flex; align-items:flex-start; gap:10px; font-size:14px; color:var(--muted); font-weight:400;">
                            <input type="checkbox" name="terms_accepted" required style="width:auto; margin-top:3px;">
                            <span class="checkmark"></span>
                            <span>I agree to the <a href="referral-terms.php" target="_blank" style="color:var(--pink); font-weight:600;">referral terms and conditions</a> *</span>
                        </label>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label" style="display:flex; align-items:flex-start; gap:10px; font-size:14px; color:var(--muted); font-weight:400;">
                            <input type="checkbox" name="marketing_emails" style="width:auto; margin-top:3px;">
                            <span class="checkmark"></span>
                            <span>I'd like to receive updates about new services and referral opportunities</span>
                        </label>
                    </div>

                    <button type="submit" class="oc-btn oc-pink btn-submit" style="width:100%; justify-content:center;">Join Referrer Network</button>
                </form>
            </div>

            <div class="booking-alternative" style="margin-top: 2rem; text-align: center;">
                <p style="color:var(--muted); margin-bottom:14px;">Or prefer to discuss this over a call?</p>
                <a href="contact.php" class="oc-btn oc-ghost">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

</div>

<!-- Referral Service Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "HR Referral Programme for Professional Advisors",
    "provider": {
        "@type": "LocalBusiness",
        "name": "HR On Call",
        "url": "https://plymouth.on-call.co.uk/"
    },
    "serviceType": "HR Consultancy Referral Programme",
    "areaServed": ["Plymouth", "Devon", "Cornwall"],
    "description": "Earn referral fees while helping your clients with professional HR support. 10% commission on referrals plus fixed fees for one-off services.",
    "mainEntityOfPage": "https://plymouth.on-call.co.uk/accountants.php"
}
</script>

<script>
    // Check for signup success/error parameters
    const urlParams = new URLSearchParams(window.location.search);
    const signupStatus = urlParams.get('signup');

    if (signupStatus === 'success') {
        const formContainer = document.querySelector('.signup-form-container');
        if (formContainer) {
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 40px; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    <h3 style="color: var(--pink-accent); margin-bottom: 20px;">Thank you for joining!</h3>
                    <p style="font-size: 1.1rem; line-height: 1.6;">Your referrer application has been submitted successfully.</p>
                    <p style="font-size: 1.1rem; line-height: 1.6;">We'll be in touch shortly to discuss how we can work together.</p>
                    <p style="margin-top: 30px;">
                        <a href="accountants.php" class="btn btn-primary">Return to Referrer Information</a>
                    </p>
                </div>
            `;
            formContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    } else if (signupStatus === 'error') {
        alert('There was an error submitting your application. Please try again or contact us directly.');
    }
</script>

<?php include 'includes/footer.php'; ?>
