<?php
require_once 'config.php';

$pageTitle = 'Privacy Policy';
$pageDescription = 'HR On Call Privacy Policy - How we collect, use and protect your personal information.';
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];
?>

<?php include 'includes/header.php'; ?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Legal</div>
      <h1>Privacy Policy</h1>
      <p>How we collect, use and protect your personal information</p>
      <div class="oc-pillnav">
        <button class="terms-tab active" data-tab="general">General Privacy Policy</button>
        <button class="terms-tab" data-tab="clients">Client Privacy Notice</button>
        <button class="terms-tab" data-tab="applicants">Associate Applicant Privacy Notice</button>
        <button class="terms-tab" data-tab="portal">Associate Portal Privacy Notice</button>
      </div>
    </div>
  </section>

  <!-- POLICY CONTENT -->
  <section class="oc-sec terms-section">
    <div class="oc-wrap">

      <!-- General Privacy Policy -->
      <div class="terms-content active" id="general">
        <div class="oc-legal">
          <h2>Privacy Policy</h2>
          <p class="updated">Last Updated: 11 December 2025</p>

          <h3>1. Introduction</h3>
          <p>1.1 HR On Call Ltd ("we", "us", "our", "the Company") is committed to protecting and respecting your privacy.</p>
          <p>1.2 This Privacy Policy explains how we collect, use, store and protect your personal data when you:</p>
          <ul>
            <li>Visit our website at associate.on-call.co.uk</li>
            <li>Use our services including Associate On Call, The HR Vault and The Client Vault</li>
            <li>Contact us or subscribe to our communications</li>
          </ul>
          <p>1.3 We are the data controller responsible for your personal data. Our contact details are set out in Section 12 below.</p>
          <p>1.4 This policy should be read alongside our <a href="/terms.php">Terms &amp; Conditions</a> and <a href="/cookie-policy.php">Cookie Policy</a>.</p>

          <h3>2. Information We Collect</h3>
          <p>2.1 We may collect and process the following categories of personal data:</p>

          <h4>2.2 Information You Provide to Us</h4>
          <ul>
            <li><strong>Identity Data:</strong> Name, job title, company name</li>
            <li><strong>Contact Data:</strong> Email address, telephone number, business address</li>
            <li><strong>Account Data:</strong> Username, password and account preferences</li>
            <li><strong>Transaction Data:</strong> Details of services you have purchased from us, payment information</li>
            <li><strong>Communication Data:</strong> Your correspondence with us including emails, contact form submissions and call records</li>
            <li><strong>Professional Data:</strong> CIPD membership status, qualifications, areas of expertise (for associate consultants)</li>
          </ul>

          <h4>2.3 Information We Collect Automatically</h4>
          <ul>
            <li><strong>Technical Data:</strong> IP address, browser type and version, time zone setting, operating system and platform</li>
            <li><strong>Usage Data:</strong> Information about how you use our website and services</li>
            <li><strong>Cookie Data:</strong> Data collected through cookies and similar technologies (see our <a href="/cookie-policy.php">Cookie Policy</a>)</li>
          </ul>

          <h4>2.4 Information from Third Parties</h4>
          <ul>
            <li>Payment information from Stripe (our payment processor)</li>
            <li>Booking information from Cal.com (our scheduling system)</li>
            <li>Analytics data from Google Analytics</li>
          </ul>

          <h3>3. How We Use Your Information</h3>
          <p>3.1 We use your personal data for the following purposes:</p>

          <h4>3.2 To Provide Our Services</h4>
          <ul>
            <li>Setting up and managing your account</li>
            <li>Providing associate HR consultancy services</li>
            <li>Granting access to our digital platforms (HR Vault, Client Vault)</li>
            <li>Processing payments and managing subscriptions</li>
            <li>Communicating with you about your services</li>
          </ul>

          <h4>3.3 To Improve Our Business</h4>
          <ul>
            <li>Analysing website usage to improve user experience</li>
            <li>Developing new products and services</li>
            <li>Training and quality assurance purposes</li>
          </ul>

          <h4>3.4 To Communicate With You</h4>
          <ul>
            <li>Responding to your enquiries and requests</li>
            <li>Sending service-related communications</li>
            <li>Sending marketing communications (where you have consented)</li>
            <li>Notifying you about changes to our services or policies</li>
          </ul>

          <h4>3.5 To Comply With Legal Obligations</h4>
          <ul>
            <li>Meeting our regulatory and legal requirements</li>
            <li>Responding to legal requests and preventing fraud</li>
            <li>Maintaining appropriate business records</li>
          </ul>

          <h3>4. Legal Basis for Processing</h3>
          <p>4.1 We process your personal data on the following legal bases:</p>
          <ul>
            <li><strong>Contract:</strong> Processing necessary for the performance of a contract with you or to take steps at your request before entering into a contract</li>
            <li><strong>Legitimate Interests:</strong> Processing necessary for our legitimate interests (or those of a third party) where your interests and fundamental rights do not override those interests</li>
            <li><strong>Consent:</strong> Where you have given clear consent for us to process your personal data for a specific purpose (e.g., marketing communications)</li>
            <li><strong>Legal Obligation:</strong> Processing necessary to comply with a legal obligation</li>
          </ul>

          <h3>5. Data Sharing</h3>
          <p>5.1 We may share your personal data with the following categories of recipients:</p>

          <h4>5.2 Service Providers</h4>
          <ul>
            <li><strong>Payment Processing:</strong> Stripe processes payments on our behalf</li>
            <li><strong>Email Services:</strong> Brevo (formerly Sendinblue) for email communications</li>
            <li><strong>Scheduling:</strong> Cal.com for appointment booking</li>
            <li><strong>Hosting:</strong> Our website and platform hosting providers</li>
            <li><strong>Analytics:</strong> Google Analytics for website analytics</li>
          </ul>

          <h4>5.3 Professional Advisers</h4>
          <p>We may share data with our accountants, lawyers and other professional advisers where necessary.</p>

          <h4>5.4 Legal and Regulatory Bodies</h4>
          <p>We may disclose your data where required by law or to protect our legal rights.</p>

          <h4>5.5 Business Transfers</h4>
          <p>If our business is sold or merged, your data may be transferred to the new owners.</p>

          <p>5.6 We do not sell your personal data to third parties.</p>

          <h3>6. International Transfers</h3>
          <p>6.1 Some of our service providers are based outside the United Kingdom. When we transfer your data internationally, we ensure appropriate safeguards are in place, including:</p>
          <ul>
            <li>Transfers to countries with adequate data protection laws</li>
            <li>Standard contractual clauses approved by the UK Information Commissioner</li>
            <li>Other legally approved transfer mechanisms</li>
          </ul>

          <h3>7. Data Security</h3>
          <p>7.1 We implement appropriate technical and organisational measures to protect your personal data, including:</p>
          <ul>
            <li>Encryption of data in transit and at rest</li>
            <li>Secure password policies and access controls</li>
            <li>Regular security assessments and updates</li>
            <li>Staff training on data protection</li>
            <li>Secure backup procedures</li>
          </ul>
          <p>7.2 While we take all reasonable precautions, no method of transmission over the internet is completely secure. We cannot guarantee the absolute security of your data.</p>

          <h3>8. Data Retention</h3>
          <p>8.1 We retain your personal data only for as long as necessary to fulfil the purposes for which it was collected, including:</p>
          <ul>
            <li><strong>Active Clients:</strong> For the duration of our business relationship plus 7 years</li>
            <li><strong>Prospective Clients:</strong> Up to 2 years from last contact</li>
            <li><strong>Marketing Contacts:</strong> Until you unsubscribe or withdraw consent</li>
            <li><strong>Website Analytics:</strong> Up to 26 months</li>
            <li><strong>Financial Records:</strong> 7 years as required by law</li>
          </ul>
          <p>8.2 After the retention period, your data will be securely deleted or anonymised.</p>

          <h3>9. Your Rights</h3>
          <p>9.1 Under UK data protection law, you have the following rights:</p>
          <ul>
            <li><strong>Right of Access:</strong> Request a copy of the personal data we hold about you</li>
            <li><strong>Right to Rectification:</strong> Request correction of inaccurate or incomplete data</li>
            <li><strong>Right to Erasure:</strong> Request deletion of your data in certain circumstances</li>
            <li><strong>Right to Restrict Processing:</strong> Request limitation of how we use your data</li>
            <li><strong>Right to Data Portability:</strong> Request transfer of your data to another provider</li>
            <li><strong>Right to Object:</strong> Object to processing based on legitimate interests or for direct marketing</li>
            <li><strong>Right to Withdraw Consent:</strong> Withdraw consent at any time where processing is based on consent</li>
          </ul>
          <p>9.2 To exercise any of these rights, please contact us using the details in Section 12.</p>
          <p>9.3 We will respond to your request within one month. We may need to verify your identity before processing your request.</p>
          <p>9.4 You have the right to lodge a complaint with the Information Commissioner's Office (ICO) if you believe your data protection rights have been violated. Visit <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a> or call 0303 123 1113.</p>

          <h3>10. Marketing Communications</h3>
          <p>10.1 We may send you marketing communications about our services if you have:</p>
          <ul>
            <li>Requested information from us</li>
            <li>Purchased services from us and not opted out</li>
            <li>Explicitly consented to receive marketing</li>
          </ul>
          <p>10.2 You can opt out of marketing communications at any time by:</p>
          <ul>
            <li>Clicking the "unsubscribe" link in any marketing email</li>
            <li>Contacting us at grace@on-call.co.uk</li>
          </ul>
          <p>10.3 Opting out of marketing will not affect service-related communications.</p>

          <h3>11. Third-Party Links</h3>
          <p>11.1 Our website may contain links to third-party websites. We are not responsible for the privacy practices of these websites.</p>
          <p>11.2 We encourage you to read the privacy policy of any website you visit.</p>

          <h3>12. Contact Us</h3>
          <p>12.1 If you have any questions about this Privacy Policy or wish to exercise your rights, please contact us:</p>
          <div class="terms-contact">
            <p><strong>HR On Call Ltd</strong></p>
            <p>Data Protection Enquiries</p>
            <p>3 Pethill Close<br>Plymouth<br>PL6 8NL</p>
            <p>Email: <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
            <p>Phone: 01752 425526</p>
          </div>

          <h3>13. Changes to This Policy</h3>
          <p>13.1 We may update this Privacy Policy from time to time. We will notify you of any significant changes by:</p>
          <ul>
            <li>Posting the updated policy on our website</li>
            <li>Updating the "Last Updated" date at the top of this policy</li>
            <li>Sending you an email notification for material changes (where we have your email address)</li>
          </ul>
          <p>13.2 We encourage you to review this policy periodically.</p>

          <p class="terms-updated">Last Updated: 11 December 2025</p>
        </div>
      </div>

      <!-- Client Privacy Notice -->
      <div class="terms-content" id="clients">
        <div class="oc-legal">
          <h2>Client Privacy Notice</h2>
          <p class="updated">Last Updated: 9 January 2026</p>

          <h3>1. Introduction</h3>
          <p>1.1 This Privacy Notice explains how HR On Call Ltd ("we", "us", "our") collects, uses and protects your personal data when you engage our HR consultancy services as a client.</p>
          <p>1.2 We are committed to protecting your privacy and handling your data in accordance with UK data protection legislation, including the UK General Data Protection Regulation (UK GDPR) and the Data Protection Act 2018.</p>
          <p>1.3 HR On Call Ltd is the data controller responsible for your personal data.</p>

          <h3>2. What Information We Collect</h3>
          <p>2.1 When you become a client of HR On Call, we collect and process:</p>

          <h4>2.2 Business and Contact Information</h4>
          <ul>
            <li>Company/organisation name</li>
            <li>Contact person name</li>
            <li>Email address</li>
            <li>Phone number</li>
            <li>Business address</li>
          </ul>

          <h4>2.3 Agreement and Contract Data</h4>
          <ul>
            <li>Signed client agreements (stored as PDF documents)</li>
            <li>Electronic signature and signing timestamp</li>
            <li>IP address at time of signing</li>
            <li>Agreement terms and any customisations</li>
          </ul>

          <h4>2.4 Service and Billing Data</h4>
          <ul>
            <li>Details of HR services provided</li>
            <li>Assignment and project information</li>
            <li>Time records and billing information</li>
            <li>Invoice and payment records</li>
          </ul>

          <h4>2.5 Communication Records</h4>
          <ul>
            <li>Email correspondence</li>
            <li>Meeting notes and call records</li>
            <li>HR advice and recommendations provided</li>
          </ul>

          <h3>3. How We Use Your Information</h3>
          <p>3.1 We use your personal data to:</p>
          <ul>
            <li>Provide HR consultancy services to your organisation</li>
            <li>Manage our client relationship with you</li>
            <li>Send you client agreements for electronic signature</li>
            <li>Generate and store signed agreement documents</li>
            <li>Assign appropriate HR consultants to your work</li>
            <li>Track time and generate invoices for services</li>
            <li>Communicate with you about ongoing work and advice</li>
            <li>Maintain records for legal and regulatory compliance</li>
            <li>Sync your details with our accounting software (Xero) for invoicing</li>
          </ul>

          <h3>4. Legal Basis for Processing</h3>
          <p>4.1 We process your data on the following legal bases:</p>
          <ul>
            <li><strong>Contract:</strong> Processing is necessary for the performance of our client agreement with you</li>
            <li><strong>Legitimate Interests:</strong> We have a legitimate interest in managing our client relationships and business operations</li>
            <li><strong>Legal Obligation:</strong> We are required to maintain certain records for tax, legal and regulatory purposes</li>
          </ul>

          <h3>5. Who We Share Your Data With</h3>
          <p>5.1 We may share your data with:</p>
          <ul>
            <li><strong>Associate Consultants:</strong> HR consultants assigned to work on your projects will have access to relevant project information</li>
            <li><strong>Email Service Provider:</strong> Brevo for sending agreement links and service communications</li>
            <li><strong>Accounting Software:</strong> Xero for invoicing and financial records</li>
            <li><strong>Hosting Provider:</strong> Our website and database hosting provider</li>
            <li><strong>Professional Advisers:</strong> Our accountants and legal advisers where necessary</li>
          </ul>
          <p>5.2 We do not sell your data to third parties.</p>

          <h3>6. Electronic Agreements</h3>
          <p>6.1 When you sign a client agreement electronically:</p>
          <ul>
            <li>We send you a secure link to review and sign the agreement</li>
            <li>Your electronic signature is recorded along with a timestamp</li>
            <li>Your IP address is recorded as part of the signing audit trail</li>
            <li>A PDF copy of the signed agreement is generated and stored securely</li>
            <li>You receive a confirmation email with details of your signed agreement</li>
          </ul>
          <p>6.2 Agreement links expire after 7 days for security purposes. If your link expires, please contact us for a new one.</p>

          <h3>7. Data Security</h3>
          <p>7.1 We implement appropriate security measures to protect your data, including:</p>
          <ul>
            <li>Encrypted data transmission (HTTPS)</li>
            <li>Secure database storage</li>
            <li>Access controls and authentication</li>
            <li>Secure storage of signed agreement documents</li>
            <li>Regular security updates and monitoring</li>
          </ul>

          <h3>8. How Long We Keep Your Data</h3>
          <p>8.1 We retain your client data as follows:</p>
          <ul>
            <li><strong>Active Clients:</strong> For the duration of our business relationship</li>
            <li><strong>Signed Agreements:</strong> 7 years from the end of the agreement term</li>
            <li><strong>Financial Records:</strong> 7 years as required by law</li>
            <li><strong>HR Advice Records:</strong> 7 years from the date of advice (to cover limitation periods for potential claims)</li>
            <li><strong>Former Clients:</strong> Contact details retained for 2 years after last engagement unless you request earlier deletion</li>
          </ul>
          <p>8.2 After these periods, your data will be securely deleted or anonymised.</p>

          <h3>9. Your Rights</h3>
          <p>9.1 Under UK data protection law, you have the right to:</p>
          <ul>
            <li><strong>Access:</strong> Request a copy of the personal data we hold about you</li>
            <li><strong>Rectification:</strong> Request correction of any inaccurate or incomplete data</li>
            <li><strong>Erasure:</strong> Request deletion of your data (subject to our legal retention obligations)</li>
            <li><strong>Restrict Processing:</strong> Request limitation of how we use your data</li>
            <li><strong>Data Portability:</strong> Request your data in a portable format</li>
            <li><strong>Object:</strong> Object to processing based on legitimate interests</li>
          </ul>
          <p>9.2 To exercise any of these rights, please email <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a>.</p>
          <p>9.3 We will respond to your request within one month.</p>

          <h3>10. Complaints</h3>
          <p>10.1 Under the Data (Use and Access) Act 2025 you have the right to make a complaint to us directly, as the data controller, about how we handle your personal data, and we will make it easy for you to do so. We will acknowledge your complaint within 30 days and respond without undue delay.</p>
          <p>10.2 If you are not satisfied with our response, you also have the right to lodge a complaint with the Information Commissioner's Office (ICO):</p>
          <ul>
            <li>Website: <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a></li>
            <li>Phone: 0303 123 1113</li>
          </ul>
          <p>10.3 We would appreciate the opportunity to address your concerns before you contact the ICO, so please contact us first.</p>

          <h3>11. Contact Us</h3>
          <p>11.1 For any questions about this Privacy Notice or your client data:</p>
          <div class="terms-contact">
            <p><strong>HR On Call Ltd</strong></p>
            <p>3 Pethill Close<br>Plymouth<br>PL6 8NL</p>
            <p>Email: <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
            <p>Phone: 01752 425526</p>
          </div>

          <h3>12. Changes to This Notice</h3>
          <p>12.1 We may update this Privacy Notice from time to time. Any changes will be posted on this page with an updated "Last Updated" date.</p>

          <p class="terms-updated">Last Updated: 9 January 2026</p>
        </div>
      </div>

      <!-- Associate Applicant Privacy Notice -->
      <div class="terms-content" id="applicants">
        <div class="oc-legal">
          <h2>Associate Applicant Privacy Notice</h2>
          <p class="updated">Last Updated: 11 December 2025</p>

          <h3>1. Introduction</h3>
          <p>1.1 This Privacy Notice explains how HR On Call Ltd ("we", "us", "our") collects, uses and protects your personal data when you apply to join our associate network.</p>
          <p>1.2 We are committed to protecting your privacy and handling your data in accordance with UK data protection legislation, including the UK General Data Protection Regulation (UK GDPR) and the Data Protection Act 2018.</p>
          <p>1.3 HR On Call Ltd is the data controller responsible for your personal data.</p>

          <h3>2. What Information We Collect</h3>
          <p>2.1 When you submit an expression of interest to join our associate network, we collect:</p>

          <h4>2.2 Personal Details</h4>
          <ul>
            <li>Full name</li>
            <li>Email address</li>
            <li>Phone number</li>
            <li>Location (town/city)</li>
            <li>LinkedIn profile URL (if provided)</li>
            <li>Website URL (if provided)</li>
          </ul>

          <h4>2.3 Professional Information</h4>
          <ul>
            <li>CIPD qualification level</li>
            <li>Years of HR experience</li>
            <li>Current work situation</li>
            <li>Primary and secondary areas of expertise/specialism</li>
            <li>Experience summary</li>
            <li>Hourly rate expectation</li>
            <li>Professional indemnity insurance status</li>
            <li>How you heard about us</li>
          </ul>

          <h4>2.4 Documents</h4>
          <ul>
            <li>CV/resume (if uploaded)</li>
          </ul>

          <h4>2.5 Technical Information</h4>
          <ul>
            <li>IP address (when you submit your application)</li>
            <li>Browser and device information</li>
            <li>Date and time of submission</li>
          </ul>

          <h3>3. How We Use Your Information</h3>
          <p>3.1 We use your personal data to:</p>
          <ul>
            <li>Assess your suitability for our associate network</li>
            <li>Contact you about your application</li>
            <li>Arrange and conduct initial conversations/interviews</li>
            <li>Make decisions about whether to approve you as an associate</li>
            <li>If approved, manage our ongoing working relationship</li>
            <li>Match you with suitable work opportunities based on your skills and experience</li>
            <li>Communicate with you about available work</li>
          </ul>

          <h3>4. Legal Basis for Processing</h3>
          <p>4.1 We process your data on the following legal bases:</p>
          <ul>
            <li><strong>Consent:</strong> You have consented to us storing your information to contact you about associate opportunities (as confirmed when you submitted your application)</li>
            <li><strong>Legitimate Interests:</strong> We have a legitimate interest in assessing candidates for our associate network and managing our business relationships</li>
            <li><strong>Contract:</strong> If you become an approved associate, processing becomes necessary for the performance of our Associate Agreement</li>
          </ul>

          <h3>5. Who We Share Your Data With</h3>
          <p>5.1 We may share your personal data with:</p>
          <ul>
            <li><strong>Email Service Provider:</strong> Brevo (formerly Sendinblue) for sending application-related emails</li>
            <li><strong>Hosting Provider:</strong> Our website and database hosting provider</li>
            <li><strong>Professional Advisers:</strong> Our accountants or legal advisers if necessary</li>
          </ul>
          <p>5.2 We do not sell your data to third parties.</p>
          <p>5.3 We do not share your CV or personal details with our clients without your explicit consent for each specific opportunity.</p>

          <h3>6. Data Security</h3>
          <p>6.1 We implement appropriate security measures to protect your personal data, including:</p>
          <ul>
            <li>Secure, encrypted database storage</li>
            <li>Password-protected access to our applicant tracking system</li>
            <li>Secure file storage for uploaded CVs</li>
            <li>Regular security updates and monitoring</li>
          </ul>

          <h3>7. How Long We Keep Your Data</h3>
          <p>7.1 We retain your application data as follows:</p>
          <ul>
            <li><strong>Unsuccessful Applications:</strong> 12 months from the date of our decision, in case you wish to reapply or we have future opportunities that may be suitable</li>
            <li><strong>Withdrawn Applications:</strong> Deleted within 30 days of withdrawal</li>
            <li><strong>Approved Associates:</strong> For the duration of our working relationship plus 7 years for legal and tax purposes</li>
          </ul>
          <p>7.2 After these periods, your data will be securely deleted.</p>

          <h3>8. Your Rights</h3>
          <p>8.1 Under UK data protection law, you have the right to:</p>
          <ul>
            <li><strong>Access:</strong> Request a copy of the personal data we hold about you</li>
            <li><strong>Rectification:</strong> Request correction of any inaccurate or incomplete data</li>
            <li><strong>Erasure:</strong> Request deletion of your data (subject to our legal obligations)</li>
            <li><strong>Withdraw Consent:</strong> Withdraw your consent at any time</li>
            <li><strong>Object:</strong> Object to processing based on legitimate interests</li>
            <li><strong>Data Portability:</strong> Request your data in a portable format</li>
          </ul>
          <p>8.2 To exercise any of these rights, or to request deletion of your application, please email <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a>.</p>
          <p>8.3 We will respond to your request within one month.</p>

          <h3>9. Automated Decision Making</h3>
          <p>9.1 We do not use automated decision-making or profiling in our application process. All applications are reviewed by a human.</p>

          <h3>10. Complaints</h3>
          <p>10.1 Under the Data (Use and Access) Act 2025 you have the right to make a complaint to us directly, as the data controller, about how we handle your personal data, and we will make it easy for you to do so. We will acknowledge your complaint within 30 days and respond without undue delay.</p>
          <p>10.2 If you are not satisfied with our response, you also have the right to lodge a complaint with the Information Commissioner's Office (ICO):</p>
          <ul>
            <li>Website: <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a></li>
            <li>Phone: 0303 123 1113</li>
          </ul>
          <p>10.3 We would appreciate the opportunity to address your concerns before you contact the ICO, so please contact us first.</p>

          <h3>11. Contact Us</h3>
          <p>11.1 For any questions about this Privacy Notice or your application data:</p>
          <div class="terms-contact">
            <p><strong>HR On Call Ltd</strong></p>
            <p>3 Pethill Close<br>Plymouth<br>PL6 8NL</p>
            <p>Email: <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
            <p>Phone: 01752 425526</p>
          </div>

          <h3>12. Changes to This Notice</h3>
          <p>12.1 We may update this Privacy Notice from time to time. Any changes will be posted on this page with an updated "Last Updated" date.</p>

          <p class="terms-updated">Last Updated: 11 December 2025</p>
        </div>
      </div>

      <!-- Associate Portal Privacy Notice -->
      <div class="terms-content" id="portal">
        <div class="oc-legal">
          <h2>Associate Portal Privacy Notice</h2>
          <p class="updated">Last Updated: 20 December 2025</p>

          <h3>1. Introduction</h3>
          <p>1.1 This Privacy Notice explains how HR On Call Ltd ("we", "us", "our") collects, uses and protects your personal data when you use the Associate Portal at associate.on-call.co.uk/assignments.</p>
          <p>1.2 This notice applies to approved associates who have signed an Associate Agreement and have access to the Associate Portal.</p>
          <p>1.3 HR On Call Ltd is the data controller responsible for your personal data.</p>

          <h3>2. What Information We Collect</h3>
          <p>2.1 Through the Associate Portal, we collect and process:</p>

          <h4>2.2 Account Information</h4>
          <ul>
            <li>Name and email address</li>
            <li>Phone number</li>
            <li>Password (stored securely using encryption)</li>
            <li>Login history and last login date</li>
          </ul>

          <h4>2.3 Assignment Data</h4>
          <ul>
            <li>Assignment details (client name, scope of work, fees)</li>
            <li>Your responses to assignments (accept, decline, propose alternative)</li>
            <li>Proposal notes and declined reasons</li>
            <li>Assignment status and history</li>
          </ul>

          <h4>2.4 Time Tracking Data</h4>
          <ul>
            <li>Date of work performed</li>
            <li>Activity descriptions</li>
            <li>Time spent (in six-minute increments)</li>
            <li>Billable units calculated</li>
          </ul>

          <h4>2.5 Technical Information</h4>
          <ul>
            <li>IP address when accessing the portal</li>
            <li>Browser and device information</li>
            <li>Session data</li>
          </ul>

          <h3>3. How We Use Your Information</h3>
          <p>3.1 We use your portal data to:</p>
          <ul>
            <li>Manage your associate account and authentication</li>
            <li>Send you assignment offers and notifications</li>
            <li>Track your responses to assignments</li>
            <li>Record time spent on hourly assignments</li>
            <li>Generate time reports for invoicing purposes</li>
            <li>Communicate with you about ongoing work</li>
            <li>Maintain records for billing and payment</li>
            <li>Comply with our legal and contractual obligations</li>
          </ul>

          <h3>4. Legal Basis for Processing</h3>
          <p>4.1 We process your portal data on the following legal bases:</p>
          <ul>
            <li><strong>Contract:</strong> Processing is necessary for the performance of our Associate Agreement with you</li>
            <li><strong>Legitimate Interests:</strong> We have a legitimate interest in managing our associate network and business operations</li>
            <li><strong>Legal Obligation:</strong> We are required to maintain certain records for tax and legal purposes</li>
          </ul>

          <h3>5. Who We Share Your Data With</h3>
          <p>5.1 We may share your portal data with:</p>
          <ul>
            <li><strong>Email Service Provider:</strong> Brevo for sending assignment notifications and portal emails</li>
            <li><strong>Hosting Provider:</strong> Our database and website hosting provider</li>
            <li><strong>Professional Advisers:</strong> Our accountants for invoicing and payment purposes</li>
          </ul>
          <p>5.2 We may share your time entries and activity descriptions with the relevant client as part of billing and reporting. This allows clients to understand the work undertaken on their behalf.</p>
          <p>5.3 We do not sell your data to third parties.</p>

          <h3>6. Data Security</h3>
          <p>6.1 We implement appropriate security measures to protect your portal data, including:</p>
          <ul>
            <li>Encrypted password storage using industry-standard hashing</li>
            <li>Secure session management with automatic timeouts</li>
            <li>CSRF protection on all forms</li>
            <li>HTTPS encryption for all data transmission</li>
            <li>Regular security updates and monitoring</li>
          </ul>

          <h3>7. How Long We Keep Your Data</h3>
          <p>7.1 We retain your portal data as follows:</p>
          <ul>
            <li><strong>Account Data:</strong> For the duration of our working relationship plus 7 years</li>
            <li><strong>Assignment Records:</strong> 7 years from completion for legal and tax purposes</li>
            <li><strong>Time Entries:</strong> 7 years from the date of entry for invoicing and audit purposes</li>
            <li><strong>Login History:</strong> 12 months</li>
          </ul>
          <p>7.2 After these periods, your data will be securely deleted or anonymised.</p>

          <h3>8. Your Rights</h3>
          <p>8.1 Under UK data protection law, you have the right to:</p>
          <ul>
            <li><strong>Access:</strong> Request a copy of the personal data we hold about you</li>
            <li><strong>Rectification:</strong> Request correction of any inaccurate or incomplete data</li>
            <li><strong>Erasure:</strong> Request deletion of your data (subject to our legal retention obligations)</li>
            <li><strong>Restrict Processing:</strong> Request limitation of how we use your data</li>
            <li><strong>Data Portability:</strong> Request your time entries in a portable format (Excel export is available in the portal)</li>
            <li><strong>Object:</strong> Object to processing based on legitimate interests</li>
          </ul>
          <p>8.2 To exercise any of these rights, please email <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a>.</p>
          <p>8.3 We will respond to your request within one month.</p>

          <h3>9. Complaints</h3>
          <p>9.1 If you are unhappy with how we have handled your data, you have the right to lodge a complaint with the Information Commissioner's Office (ICO):</p>
          <ul>
            <li>Website: <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a></li>
            <li>Phone: 0303 123 1113</li>
          </ul>
          <p>9.2 We would appreciate the opportunity to address your concerns before you contact the ICO, so please contact us first.</p>

          <h3>10. Contact Us</h3>
          <p>10.1 For any questions about this Privacy Notice or your portal data:</p>
          <div class="terms-contact">
            <p><strong>HR On Call Ltd</strong></p>
            <p>3 Pethill Close<br>Plymouth<br>PL6 8NL</p>
            <p>Email: <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
          </div>

          <h3>11. Changes to This Notice</h3>
          <p>11.1 We may update this Privacy Notice from time to time. Any changes will be posted on this page with an updated "Last Updated" date.</p>

          <p class="terms-updated">Last Updated: 20 December 2025</p>
        </div>
      </div>

    </div>
  </section>

</div>

<!-- JavaScript for Tab Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.terms-tab');
    const contents = document.querySelectorAll('.terms-content');

    // Check for hash in URL
    const hash = window.location.hash.substring(1);
    if (hash && document.getElementById(hash)) {
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        document.querySelector(`[data-tab="${hash}"]`).classList.add('active');
        document.getElementById(hash).classList.add('active');
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');

            // Update URL hash without scrolling
            history.pushState(null, null, '#' + targetTab);
        });
    });
});
</script>

<style>
.oc .terms-content { display:none; }
.oc .terms-content.active { display:block; }
.oc .oc-pillnav .terms-tab { padding:11px 20px; border-radius:9px; border:1.5px solid var(--cream-bd); background:#fff; color:var(--navy); font-weight:600; font-size:14.5px; cursor:pointer; font-family:inherit; transition:background .2s,color .2s,border-color .2s; }
.oc .oc-pillnav .terms-tab:hover, .oc .oc-pillnav .terms-tab.active { background:var(--pink); border-color:var(--pink); color:#fff; }
.oc .oc-legal h4 { color:var(--navy); font-size:16px; margin:20px 0 6px; font-weight:700; }
.oc .oc-legal .terms-contact { background:var(--cream); border:1px solid var(--cream-bd); border-radius:12px; padding:22px 24px; margin:14px 0; }
.oc .oc-legal .terms-contact p { margin:0 0 4px; }
.oc .oc-legal .terms-updated { color:var(--soft); font-size:14px; margin-top:32px; }
</style>

<?php include 'includes/footer.php'; ?>
