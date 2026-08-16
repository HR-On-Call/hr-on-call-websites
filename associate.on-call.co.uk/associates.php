<?php
session_start();
require_once 'config.php';

$pageTitle = 'Join Our Associate Network';
$pageDescription = 'Join the HR On Call associate network. We\'re looking for experienced HR consultants for flexible, project-based work with competitive rates.';
$pageKeywords = 'HR associate jobs, freelance HR work, HR consultant network, CIPD consultant opportunities, HR associate vacancies';
?>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero hero-small">
    <div class="container">
        <div class="hero-content">
            <h1>Join Our Associate Network</h1>
            <p class="hero-subtitle">We're always looking for experienced HR consultants to join our network of trusted associates.</p>
            <a href="#register" class="btn btn-primary">Register Your Interest</a>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="section intro-section bg-dark">
    <div class="container">
        <div class="intro-content">
            <p class="intro-lead">HR On Call Ltd works with a network of skilled HR consultants to deliver expert support to consultancies across the UK. If you're an experienced HR professional looking for flexible associate work, we'd love to hear from you.</p>

            <div class="benefits-grid benefits-grid-associate">
                <div class="benefit-item">
                    <h3>Competitive Rates</h3>
                    <p>Fair day rates that reflect your experience and expertise</p>
                </div>
                <div class="benefit-item">
                    <h3>Varied Casework</h3>
                    <p>Interesting, diverse projects across different sectors</p>
                </div>
                <div class="benefit-item">
                    <h3>Team Support</h3>
                    <p>Backing from our experienced team when you need it</p>
                </div>
                <div class="benefit-item">
                    <h3>No Minimum Hours</h3>
                    <p>Work when it suits you – no commitment required</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Look For Section -->
<section class="section requirements-section">
    <div class="container">
        <div class="section-header">
            <h2>Who We Work With</h2>
            <p>We partner with HR consultants who have:</p>
        </div>

        <div class="requirements-grid">
            <div class="requirement-item">
                <i class="fas fa-user-tie"></i>
                <span>Proven experience in HR consultancy or in-house HR roles</span>
            </div>
            <div class="requirement-item">
                <i class="fas fa-shield-alt"></i>
                <span>Professional indemnity insurance</span>
            </div>
            <div class="requirement-item">
                <i class="fas fa-chart-line"></i>
                <span>Strong commercial awareness</span>
            </div>
            <div class="requirement-item">
                <i class="fas fa-comments"></i>
                <span>Excellent written and verbal communication skills</span>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="section process-section bg-dark">
    <div class="container">
        <div class="section-header">
            <h2>How It Works</h2>
        </div>

        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Register Your Interest</h3>
                    <p>Complete our expression of interest form below</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Initial Conversation</h3>
                    <p>If there's a potential fit, we'll arrange a call to learn more about your experience</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Join the Network</h3>
                    <p>Approved consultants are added to our associate network</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Receive Opportunities</h3>
                    <p>We'll contact you when suitable work becomes available</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h3>Accept or Decline</h3>
                    <p>No obligation to accept any work offered</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expression of Interest Form Section -->
<section id="register" class="section form-section">
    <div class="container">
        <div class="section-header">
            <h2>Applications Currently Closed</h2>
            <p>We're not accepting new associate applications at this time.</p>
        </div>

        <div class="associate-form-container">
            <?php if (isset($_SESSION['form_error'])): ?>
                <div class="form-message form-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        <h3>Submission Error</h3>
                        <p><?php echo htmlspecialchars($_SESSION['form_error']); ?></p>
                    </div>
                </div>
                <?php unset($_SESSION['form_error']); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['form_errors']) && !empty($_SESSION['form_errors'])): ?>
                <div class="form-message form-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        <h3>Please fix the following errors:</h3>
                        <ul style="margin: 0.5rem 0 0 1rem;">
                            <?php foreach ($_SESSION['form_errors'] as $error): ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php unset($_SESSION['form_errors']); ?>
            <?php endif; ?>

            <div class="form-message" style="display:flex; gap:1rem; align-items:flex-start;">
                <i class="fas fa-info-circle"></i>
                <div>
                    <h3>We're not accepting new applications right now</h3>
                    <p style="margin:0.5rem 0 0;">Thank you for your interest in becoming an HR On Call associate. We're not taking on new applications at the moment. Please check back in the future.</p>
                </div>
            </div>

            <?php /* APPLICATIONS CLOSED - form hidden. To re-open, uncomment this form and remove the block at the top of process-associate.php.
            <form class="associate-form" action="/process-associate" method="POST" enctype="multipart/form-data">

                <!-- Personal Details -->
                <div class="form-section-group">
                    <h3>Your Details</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="full_name">Full Name <span class="required">*</span></label>
                            <input type="text" id="full_name" name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number <span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location (Town/City) <span class="required">*</span></label>
                            <input type="text" id="location" name="location" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="linkedin_url">LinkedIn Profile URL</label>
                            <input type="url" id="linkedin_url" name="linkedin_url" placeholder="https://linkedin.com/in/...">
                        </div>
                        <div class="form-group">
                            <label for="website_url">Website URL</label>
                            <input type="url" id="website_url" name="website_url" placeholder="https://...">
                        </div>
                    </div>
                </div>

                <!-- Professional Background -->
                <div class="form-section-group">
                    <h3>Professional Background</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cipd_level">CIPD Qualification Level <span class="required">*</span></label>
                            <select id="cipd_level" name="cipd_level" required>
                                <option value="">Please select...</option>
                                <option value="level_3">Level 3</option>
                                <option value="level_5">Level 5</option>
                                <option value="level_7">Level 7</option>
                                <option value="other">Other qualification</option>
                                <option value="none">Not CIPD qualified</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="years_experience">Years of HR Experience <span class="required">*</span></label>
                            <select id="years_experience" name="years_experience" required>
                                <option value="">Please select...</option>
                                <option value="1-3">1-3 years</option>
                                <option value="3-5">3-5 years</option>
                                <option value="5-10">5-10 years</option>
                                <option value="10+">10+ years</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="work_situation">Current Work Situation <span class="required">*</span></label>
                        <select id="work_situation" name="work_situation" required>
                            <option value="">Please select...</option>
                            <option value="full_time_consultant">Full-time consultant</option>
                            <option value="part_time_consultant">Part-time consultant</option>
                            <option value="employed_seeking_side_work">Employed seeking side work</option>
                            <option value="between_roles">Between roles</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Specialisms -->
                <div class="form-section-group">
                    <h3>Areas of Expertise</h3>

                    <div class="form-group">
                        <label for="primary_specialism">Primary Specialism <span class="required">*</span></label>
                        <select id="primary_specialism" name="primary_specialism" required>
                            <option value="">Please select your main area...</option>
                            <option value="employee_relations">Employee Relations</option>
                            <option value="workplace_investigations">Workplace Investigations</option>
                            <option value="employment_law">Employment Law</option>
                            <option value="settlement_agreements">Settlement Agreements</option>
                            <option value="general_hr_advisory">General HR Advisory</option>
                            <option value="hr_administration">HR Administration</option>
                            <option value="talent_recruitment">Talent & Recruitment</option>
                            <option value="hris_systems">HRIS & Systems</option>
                            <option value="learning_development">Learning & Development</option>
                            <option value="reward_benefits">Reward & Benefits</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Secondary Specialisms <span class="form-helper">(select all that apply)</span></label>
                        <div class="checkbox-grid">
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="employee_relations">
                                <span>Employee Relations</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="workplace_investigations">
                                <span>Workplace Investigations</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="employment_law">
                                <span>Employment Law</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="settlement_agreements">
                                <span>Settlement Agreements</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="general_hr_advisory">
                                <span>General HR Advisory</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="hr_administration">
                                <span>HR Administration</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="talent_recruitment">
                                <span>Talent & Recruitment</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="hris_systems">
                                <span>HRIS & Systems</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="learning_development">
                                <span>Learning & Development</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="secondary_specialisms[]" value="reward_benefits">
                                <span>Reward & Benefits</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Experience & Rate -->
                <div class="form-section-group">
                    <h3>Experience & Availability</h3>

                    <div class="form-group">
                        <label for="experience_summary">Brief Summary of Your Experience <span class="required">*</span></label>
                        <textarea id="experience_summary" name="experience_summary" rows="4" maxlength="500" required placeholder="Tell us about your background and what type of work you're looking for (max 500 characters)"></textarea>
                        <span class="char-count"><span id="char-count">0</span>/500</span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="hourly_rate">Hourly Rate Expectation (£) <span class="required">*</span></label>
                            <input type="number" id="hourly_rate" name="hourly_rate" min="0" step="1" required placeholder="e.g. 45">
                            <span class="form-helper">What's your typical hourly rate for associate work?</span>
                        </div>
                        <div class="form-group">
                            <label for="has_pi_insurance">Professional Indemnity Insurance <span class="required">*</span></label>
                            <select id="has_pi_insurance" name="has_pi_insurance" required>
                                <option value="">Please select...</option>
                                <option value="yes">Yes, I have PI insurance</option>
                                <option value="no">No</option>
                                <option value="would_obtain">Would obtain if required</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group checkbox-single">
                        <label class="checkbox-item">
                            <input type="checkbox" name="vat_registered" value="1">
                            <span>I am VAT registered</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="referral_source">How Did You Hear About Us?</label>
                        <select id="referral_source" name="referral_source">
                            <option value="">Please select...</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="google">Google</option>
                            <option value="referral">Referral</option>
                            <option value="hr_network">HR network/community</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cv_upload">CV Upload <span class="required">*</span> <span class="form-helper">(PDF/DOC/DOCX, max 5MB)</span></label>
                        <input type="file" id="cv_upload" name="cv_upload" accept=".pdf,.doc,.docx" required>
                    </div>
                </div>

                <!-- Confirmations -->
                <div class="form-section-group">
                    <h3>Confirmations</h3>

                    <div class="form-group checkbox-single">
                        <label class="checkbox-item checkbox-required">
                            <input type="checkbox" name="self_employed_confirmed" value="1" required>
                            <span>I confirm I am a self-employed consultant or seeking self-employed work, not employment <span class="required">*</span></span>
                        </label>
                    </div>

                    <div class="form-group checkbox-single">
                        <label class="checkbox-item checkbox-required">
                            <input type="checkbox" name="consent_confirmed" value="1" required>
                            <span>I consent to HR On Call Ltd storing my information to contact me about associate opportunities. See our <a href="/privacy-policy.php#applicants" target="_blank">Applicant Privacy Notice</a> for details. <span class="required">*</span></span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-large">Register Interest</button>
            </form>
            */ ?>
        </div>
    </div>
</section>

<!-- Questions Section -->
<section class="section questions-section bg-dark">
    <div class="container">
        <div class="questions-callout">
            <div class="questions-icon"><i class="fas fa-question-circle"></i></div>
            <div class="questions-content">
                <h4>Questions?</h4>
                <p>If you have questions about working with us, get in touch at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a> – we're happy to chat.</p>
            </div>
        </div>
    </div>
</section>

<script>
// Character count for experience summary
const textarea = document.getElementById('experience_summary');
const charCount = document.getElementById('char-count');

textarea.addEventListener('input', function() {
    charCount.textContent = this.value.length;
});
</script>

<?php include 'includes/footer.php'; ?>
