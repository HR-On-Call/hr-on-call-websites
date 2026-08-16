<?php
require_once 'config.php';

$pageTitle = 'Terms & Conditions';
$pageDescription = 'HR On Call Terms & Conditions for Associate On Call Retainer and The Client Vault.';

$rebuilt = true; // Built on the Vault (oc) template; skip the legacy reskin layer
$additionalCSS = ['/assets/css/oc.css?v=' . @filemtime(__DIR__ . '/assets/css/oc.css')];

include 'includes/header.php';
?>

<div class="oc">

  <!-- HERO -->
  <section class="oc-hero">
    <div class="oc-wrap">
      <div class="oc-eyebrow"><span></span>Legal</div>
      <h1>Terms &amp; Conditions</h1>
      <p>Select the relevant terms for your service</p>

      <!-- Tab Navigation -->
      <div class="oc-pillnav terms-tabs">
        <a href="#associate" class="terms-tab active" data-tab="associate">Associate On Call</a>
        <a href="#client-vault" class="terms-tab" data-tab="client-vault">The Client Vault</a>
      </div>
    </div>
  </section>

  <!-- TERMS CONTENT -->
  <section class="oc-sec terms-section">
    <div class="oc-wrap">

      <!-- Associate On Call Terms -->
      <div class="terms-content active" id="associate">
        <div class="oc-legal">
          <h2>Associate On Call - Retainer Terms &amp; Conditions</h2>
          <p class="updated"><strong>Effective Date:</strong> 14 November 2025</p>

          <h3>1. Background</h3>
          <p>1.1 The Client is of the opinion that the Company has the necessary qualifications, experience and abilities to provide associate human resources (HR) consulting services to the Client.</p>
          <p>1.2 The Company is agreeable to providing such consulting services to the Client on the terms and conditions set out in this Agreement.</p>
          <p>IN CONSIDERATION OF the matters described above and of the mutual benefits and obligations set forth in this Agreement, the receipt and sufficiency of which consideration is hereby acknowledged, the Client and the Company (individually the "Party" and collectively the "Parties" to this Agreement) agree as follows:</p>

          <h3>2. Definitions</h3>
          <p>2.1 "Associate Cover" means the HR consulting services provided by the Company as detailed in clause 3.</p>
          <p>2.2 "Retainer Package" means one of the three service packages: The Essentials, The Partnership, or The Full Support.</p>
          <p>2.3 "Monthly Hours" means the number of hours of Associate Cover included in the Client's chosen Retainer Package per calendar month.</p>
          <p>2.4 "Banked Hours" means unused Monthly Hours that have rolled over to subsequent months, subject to the maximum limits specified in the Client's Retainer Package.</p>
          <p>2.5 "Additional Hours" means hours of Associate Cover purchased beyond the Client's Monthly Hours allocation.</p>
          <p>2.6 "Confidential Information" means information (whether or not recorded in documentary form, or stored on any magnetic or optical disk or memory) relating to the business, products, affairs and finances of the Client or of any of the clients, customers, suppliers, investors, employees or officers of the Client, or any other business information of the Client which the Company may receive or obtain in connection with the Services.</p>
          <p>2.7 "Copies" means any notes, memoranda, records or other documents (including copies and reproductions) made or acquired by the Company (or any Substitute) which contain or are derived from Confidential Information.</p>
          <p>2.8 "Data Protection Legislation" means all applicable data protection and privacy legislation in force from time to time in the UK including the UK General Data Protection Regulation; the Data Protection Act 2018; the Privacy and Electronic Communications Regulations 2003 as amended and all other legislation and regulatory requirements in force from time to time which apply to a party relating to the use of personal data (including, without limitation, the privacy of electronic communications).</p>
          <p>2.9 "HR Doc Vault" means the Company's online library of contracts, handbooks, policies, templates, employment law timeline, toolkits, calculators, flowcharts and related HR documentation.</p>
          <p>2.10 "Easy HR Audit" means the Company's online HR compliance assessment tool.</p>
          <p>2.11 "Intellectual Property Rights" means patents, rights to inventions, copyright and related rights, moral rights, trade marks and service marks, business names and domain names, rights in get-up, goodwill and the right to sue for passing off or unfair competition, rights in designs, rights in computer software, database rights, rights to use, and protect the confidentiality of, confidential information (including know-how and trade secrets) and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, renewals or extensions of, and rights to claim priority from, such rights and all similar or equivalent rights or forms of protection which subsist or will subsist now or in the future in any part of the world.</p>
          <p>2.12 "Insurance Policies" means the policies of insurance referred to in clause 17, namely a policy for employer's liability insurance and a policy for professional indemnity insurance.</p>
          <p>2.13 "Substitute" means any person who the Company may engage to perform some or all of the obligations of the Company.</p>

          <h3>3. Services Provided</h3>
          <p>3.1 The Client hereby agrees to engage the Company to provide the Services under the chosen Retainer Package on a monthly subscription basis.</p>
          <p>3.2 Associate Cover includes the following services:</p>
          <ul>
              <li>Advising the Client's clients on HR matters</li>
              <li>Acting as a sounding board for the Client on complex cases</li>
              <li>Drafting HR documentation including policies, letters, reports and investigation reports</li>
              <li>Conducting workplace investigations</li>
              <li>Attending formal meetings (disciplinary, grievance, capability)</li>
              <li>Managing ACAS Early Conciliation processes</li>
              <li>Settlement agreement negotiation</li>
          </ul>
          <p>3.3 The following services are not included in Associate Cover and are charged separately at the rates advertised on the Company's website:</p>
          <ul>
              <li>Drafting settlement agreements (discounted for retainer clients as per clause 12)</li>
              <li>Drafting COT3 forms (discounted for retainer clients as per clause 12)</li>
              <li>Employment tribunal representation</li>
              <li>Services outside the scope of HR consulting as reasonably determined by the Company</li>
          </ul>
          <p>3.4 All Retainer Packages include:</p>
          <ul>
              <li>Unlimited access to the HR Doc Vault</li>
              <li>Unlimited use of the Easy HR Audit tool</li>
          </ul>
          <p>Subject to the Fair Use Policy in clause 8.</p>

          <h3>4. Duties and Obligations</h3>
          <p>4.1 During the Engagement, the Company shall:</p>
          <ul>
              <li>provide the Services, using reasonable care, skill and expertise, and use their best efforts to meet the Client's objectives;</li>
              <li>unless prevented by illness or accident, devote a reasonable amount of time to the carrying out of the Services, as agreed upon in advance; and</li>
              <li>provide the Client with reasonable updates or reports on the progress of the Services as requested, but only where those updates are relevant to the Client's needs and objectives.</li>
          </ul>
          <p>4.2 In the event the Company is unable to provide the Services due to illness or injury, they will notify the Client as soon as reasonably practicable.</p>
          <p>4.3 The Company shall be available on reasonable notice to provide assistance or information as the Client may require, but only if such assistance is relevant to the services being provided.</p>
          <p>4.4 Unless otherwise authorised by the Client in writing, the Company shall not:</p>
          <ul>
              <li>incur any expenditure on behalf of the Client without prior written consent; or</li>
              <li>hold themselves out as having authority to bind the Client.</li>
          </ul>
          <p>4.5 The Company shall take reasonable care to follow any applicable health and safety standards at the Client's premises but will not be held liable for any unsafe conditions unless directly caused by the Company's actions.</p>
          <p>4.6 The Company shall comply with the Client's reasonable policies, including those relating to social media, information systems, anti-harassment, bullying, equal opportunities and substance misuse. The Company will be notified in advance of any new or updated policies.</p>
          <p>4.7 The Company is not required to offer Business Opportunities to the Client if doing so would breach any confidentiality or fiduciary obligations to third parties. Any Business Opportunities offered to the Client will be disclosed in good faith, but only when it is legally permissible and in the best interest of both parties.</p>
          <p>4.8 The Company may, at their discretion, use a third party for administrative tasks related to the Services, provided that:</p>
          <ul>
              <li>The Client shall not bear the cost of these third-party services;</li>
              <li>Any third party will be required to enter into confidentiality agreements with the Client, as appropriate.</li>
          </ul>
          <p>4.9 The Company agrees to comply with all applicable anti-bribery and anti-corruption laws, including the Bribery Act 2010, but shall not be held liable for the actions of third parties unless directly involved.</p>
          <p>4.10 If the Company becomes aware of any request or demand that violates anti-bribery laws or any similar conduct, they will promptly notify the Client. However, the Company will not be liable for actions beyond their control and will cooperate in resolving such issues promptly.</p>
          <p>4.11 The Company shall not engage in any conduct that facilitates tax evasion, but only where such conduct is directly under the Company's control. If the Company becomes aware of any illegal request or demand in relation to tax evasion, they will notify the Client and comply with any reasonable requests for support in addressing the matter.</p>
          <p>4.12 Failure to comply with tax evasion laws or anti-bribery laws may result in immediate termination of this agreement, but only after the Company has had reasonable opportunity to remedy any alleged breach.</p>

          <h3>5. Right of Substitution</h3>
          <p>5.1 Except as otherwise provided in this Agreement, the Company may, at the Company's absolute discretion, engage a third-party sub-contractor (a "Substitute") to perform some or all of the obligations of the Company under this Agreement and the Client will not hire or engage any third parties to assist with the provision of the Services.</p>
          <p>5.2 In the event that the Company hires a Substitute:</p>
          <ul>
              <li>the Company will pay the Substitute for its services and the retainer fee will remain payable by the Client to the Company;</li>
              <li>for the purposes of the indemnification clause of this Agreement, the Substitute is an agent of the Company.</li>
          </ul>
          <p>5.3 If a Substitute is appointed, the sub-processor obligations under clause 16.7 of Schedule 1 will apply, but the Company will ensure that the Substitute meets the Client's needs without undue administrative burden.</p>

          <h3>6. Autonomy</h3>
          <p>6.1 Except as otherwise provided in this Agreement, the Company will have full control over working time, methods and decision making in relation to provision of the Services in accordance with the Agreement. The Company will work autonomously and not at the direction of the Client. However, the Company will be responsive to the reasonable needs and concerns of the Client.</p>

          <h3>7. Term and Termination</h3>
          <p>7.1 This Agreement will commence on the date the Client signs up for a Retainer Package and will have an initial term of three (3) calendar months ("Initial Term").</p>
          <p>7.2 Following the Initial Term, the contract will continue on a rolling monthly basis unless terminated by either party giving thirty (30) days written notice.</p>
          <p>7.3 During the Initial Term, either party may terminate the agreement for material breach, provided that written notice of the breach has been given and the breaching party has failed to remedy the breach within fourteen (14) days.</p>
          <p>7.4 Notwithstanding the provisions of clause 7.3, the Client may terminate the Agreement with immediate effect with no liability to make any further payment to the Company (other than in respect of amounts accrued before the Termination Date) if at any time the Company:</p>
          <ul>
              <li>commits any gross misconduct affecting the Business of the Client;</li>
              <li>commits any serious or repeated breach or non-observance of any of the provisions of this agreement or refuses or neglects to comply with any reasonable and lawful directions of the Client;</li>
              <li>is convicted of any criminal offence (other than an offence under any road traffic legislation in the United Kingdom or elsewhere for which a fine or non-custodial penalty is imposed);</li>
              <li>is in the reasonable opinion of the Client negligent or incompetent in the performance of the Services;</li>
              <li>is declared bankrupt or makes any arrangement with or for the benefit of their creditors or has a county court administration order made against them under the County Court Act 1984;</li>
              <li>dies or is incapacitated (including by reason of illness or accident) from providing the Services for an aggregate period of 28 days in any 52-week consecutive period;</li>
              <li>commits any fraud or dishonesty or acts in any manner which in the opinion of the Client brings or is likely to bring the Company or the Client into disrepute or is materially adverse to the interests of the Client;</li>
              <li>commits any breach of the Client's policies and procedures;</li>
              <li>commits any offence under the Bribery Act 2010; or</li>
              <li>commits a UK tax evasion facilitation offence under section 45(1) of the Criminal Finances Act 2017 or a foreign tax evasion facilitation offence under section 46(1) of the Criminal Finances Act 2017.</li>
          </ul>
          <p>7.5 The rights of the Client under clause 7.4 are without prejudice to any other rights that it might have at law to terminate the Engagement or to accept any breach of this agreement on the part of the Company as having brought the agreement to an end. Any delay by the Client in exercising its rights to terminate shall not constitute a waiver of these rights.</p>
          <p>7.6 The Company may terminate this Agreement with immediate effect and with no liability to continue performing the Services (and without prejudice to any other remedies available) if, at any time, the Client:</p>
          <ul>
              <li>fails to pay any amount due under this Agreement within 14 days of receiving a written reminder;</li>
              <li>commits any serious or repeated breach of the terms of this Agreement, including failure to provide necessary access, information, cooperation or support reasonably required for delivery of the Services;</li>
              <li>is, in the reasonable opinion of the Company, engaging in conduct or practices which are unlawful, discriminatory, unethical or damaging to the Company's professional reputation;</li>
              <li>is convicted of a criminal offence or engages in behaviour that is likely to bring the Company into disrepute by association;</li>
              <li>is declared insolvent, enters into administration, or makes an arrangement with creditors; or</li>
              <li>persistently makes unreasonable demands that fall outside the agreed scope of the Services, or refuses to engage with the Company in good faith.</li>
          </ul>
          <p>7.7 In the event of termination under clause 7.6, the Company shall remain entitled to full payment for Services performed up to the Termination Date and may also charge for any committed but unfulfilled time or resources which cannot reasonably be reallocated.</p>
          <p>7.8 The Company reserves the right to terminate the agreement immediately if:</p>
          <ul>
              <li>Payment is not received within fourteen (14) days of the due date;</li>
              <li>The Client breaches the Fair Use Policy outlined in clause 8;</li>
              <li>The Client engages in conduct that damages the Company's professional reputation.</li>
          </ul>
          <p>7.9 Upon termination, any unused Monthly Hours and Banked Hours will expire and no refund will be provided for the current month's retainer fee.</p>
          <p>7.10 The Client remains liable for payment of any Additional Hours used up to the date of termination.</p>

          <h3>8. Fair Use Policy</h3>
          <p>8.1 Access to the HR Doc Vault and Easy HR Audit tool is provided on an unlimited basis for the Client's reasonable business use with their own clients.</p>
          <p>8.2 The following activities are prohibited:</p>
          <ul>
              <li>Bulk downloading of documents from the HR Doc Vault for purposes other than immediate client use</li>
              <li>Sharing HR Doc Vault documents with other HR consultants or consultancies</li>
              <li>Reselling or redistributing HR Doc Vault content</li>
              <li>Using Easy HR Audit for purposes unrelated to legitimate client assessments</li>
          </ul>
          <p>8.3 The Company reserves the right to review usage if the Client cancels within three (3) months of commencing the retainer. If usage is deemed excessive, the Company may invoice for documents downloaded at standard HR Doc Vault rates.</p>
          <p>8.4 The Company reserves the right to suspend access to the HR Doc Vault and Easy HR Audit if usage is deemed to breach this Fair Use Policy, with immediate effect and without refund.</p>

          <h3>9. Time Tracking and Billing</h3>
          <p>9.1 All Associate Cover hours (Monthly Hours, Banked Hours and Additional Hours) are tracked and billed in six (6) minute increments.</p>
          <p>9.2 Time is rounded up to the nearest six-minute increment. For example, a ten-minute call will be billed as twelve minutes (0.2 hours).</p>
          <p>9.3 Time tracking begins when work commences and includes:</p>
          <ul>
              <li>Telephone calls and video meetings</li>
              <li>Email correspondence requiring substantive advice or drafting</li>
              <li>Document preparation and review</li>
              <li>Research and preparation time</li>
              <li>Travel time to and from formal meetings (if applicable)</li>
          </ul>
          <p>9.4 The Company will provide monthly summaries showing:</p>
          <ul>
              <li>Hours used in the current month</li>
              <li>Remaining Monthly Hours</li>
              <li>Banked Hours carried forward</li>
              <li>Additional Hours used and charged</li>
          </ul>

          <h3>10. Hours Rollover and Banking</h3>
          <p>10.1 Unused Monthly Hours will automatically roll over to the following month, subject to the maximum Banked Hours limit specified in the Client's Retainer Package:</p>
          <ul>
              <li>The Essentials: Maximum 2 hours banked</li>
              <li>The Partnership: Maximum 4 hours banked</li>
              <li>The Full Support: Maximum 5 hours banked</li>
          </ul>
          <p>10.2 Once the maximum Banked Hours limit is reached, any additional unused Monthly Hours will expire at the end of that calendar month.</p>
          <p>10.3 Banked Hours do not carry a higher priority than Monthly Hours; all hours in the Client's account are used on a first-in, first-out basis.</p>
          <p>10.4 Upon downgrading to a package with fewer hours, Banked Hours exceeding the new package's maximum will expire immediately.</p>
          <p>10.5 Upon upgrading to a package with more hours, existing Banked Hours will be retained up to the new package's maximum limit.</p>

          <h3>11. Response Times</h3>
          <p>11.1 Response times are measured from receipt of the Client's request during business hours (Monday to Friday, 9am-5pm, excluding UK public holidays) to acknowledgment and indication of availability by the Company.</p>
          <p>11.2 Response time commitments are:</p>
          <ul>
              <li>The Essentials: 48 hours</li>
              <li>The Partnership: 48 hours</li>
              <li>The Full Support: 24 hours</li>
          </ul>
          <p>11.3 Response times are targets and not guarantees. The Company will use reasonable endeavours to meet these targets but cannot be held liable for delays due to circumstances beyond reasonable control, including but not limited to illness, emergencies or exceptional workload.</p>
          <p>11.4 Response time commitments do not apply to:</p>
          <ul>
              <li>Requests received outside business hours</li>
              <li>Requests received during the Company's notified absence or holiday periods</li>
              <li>Requests that lack sufficient information to commence work</li>
          </ul>
          <p>11.5 Actual availability to commence work will depend on the Company's existing workload and commitments. Response times indicate when the Client can expect acknowledgment and scheduling, not immediate commencement of work.</p>

          <h3>12. Payment Terms</h3>
          <p>12.1 Retainer fees for each package are as advertised on the Company's website at <a href="https://associate.on-call.co.uk/associate-on-call.php" target="_blank">associate.on-call.co.uk/associate-on-call.php</a>. The fees current at the time of subscription or renewal shall apply.</p>
          <p>12.2 Retainer fees are payable monthly in advance via Stripe subscription or invoice.</p>
          <p>12.3 For Stripe subscriptions:</p>
          <ul>
              <li>Payment will be automatically processed on the same day each month</li>
              <li>The Client is responsible for ensuring valid payment details are maintained</li>
              <li>Failed payments will result in suspension of services until payment is received</li>
          </ul>
          <p>12.4 For invoice payments:</p>
          <ul>
              <li>Invoices will be issued on or before the first day of each month</li>
              <li>Payment is due within seven (7) days of the invoice date</li>
              <li>Late payment will result in suspension of services and may incur interest as specified in clause 15</li>
          </ul>
          <p>12.5 Additional Hours beyond the Monthly Hours allocation will be charged at the hourly rate specified for the Client's Retainer Package, as advertised on the Company's website.</p>
          <p>12.6 Additional Hours will be invoiced monthly in arrears and payment is due within seven (7) days.</p>
          <p>12.7 Retainer clients receive discounts on document drafting services (including settlement agreements and COT3 forms) as advertised on the Company's website for their respective Retainer Package.</p>
          <p>12.8 Settlement agreement drafting and COT3 drafting fees will be invoiced upon completion and payment is due within seven (7) days.</p>
          <p>12.9 All fees are exclusive of Value Added Tax (VAT). VAT will be added to all invoices at the prevailing rate.</p>
          <p>12.10 The Company is registered for Value Added Tax (VAT registration number: 515981373). The Client shall be liable to pay VAT on all fees at the applicable rate.</p>
          <p>12.11 The Company shall be responsible for all income tax liabilities and National Insurance contributions relating to the fees received and shall indemnify the Client in respect of any such payments required to be made by the Client.</p>

          <h3>13. Package Changes</h3>
          <p>13.1 After the Initial Term, the Client may upgrade or downgrade their Retainer Package by giving thirty (30) days written notice.</p>
          <p>13.2 Upgrades will take effect from the start of the next billing cycle following the notice period.</p>
          <p>13.3 Downgrades will take effect from the start of the next billing cycle following the notice period. Any Banked Hours exceeding the new package's maximum will expire.</p>
          <p>13.4 The Company reserves the right to adjust pricing with sixty (60) days written notice. The Client may terminate the agreement without penalty within fourteen (14) days of receiving notice of a price increase.</p>

          <h3>14. Reimbursement of Expenses</h3>
          <p>14.1 The Company will be reimbursed from time to time for reasonable and necessary expenses incurred by the Company in connection with providing the Services.</p>
          <p>14.2 All expenses must be pre-approved by the Client.</p>

          <h3>15. Interest on Late Payments</h3>
          <p>15.1 Interest payable on any overdue amounts under this Agreement is charged at a rate of 4.00% per annum or at the maximum rate enforceable under applicable legislation, whichever is lower.</p>

          <h3>16. Client Responsibilities</h3>
          <p>16.1 The Client is responsible for:</p>
          <ul>
              <li>Providing clear instructions and all necessary information to enable the Company to perform services</li>
              <li>Responding promptly to requests for information or clarification</li>
              <li>Ensuring that any information provided is accurate and complete</li>
              <li>Obtaining any necessary client consents before sharing confidential information with the Company</li>
              <li>Maintaining appropriate professional indemnity insurance for their consultancy practice</li>
          </ul>
          <p>16.2 The Client acknowledges that the quality and timeliness of services depend on the Client providing complete and accurate information.</p>
          <p>16.3 The Client remains responsible for all advice given to their own clients and for the client relationship. The Company acts as the Client's associate, not as advisor to the Client's clients.</p>

          <h3>17. Insurance</h3>
          <p>17.1 The Company shall maintain the following insurance coverage:</p>
          <ul>
              <li>Professional indemnity insurance: £1,000,000</li>
              <li>Employer's liability insurance (if applicable)</li>
          </ul>
          <p>17.2 The Company shall ensure that the Insurance Policies are taken out with reputable insurers acceptable to the Client and that the level of cover and other terms of insurance are acceptable to and agreed by the Client.</p>
          <p>17.3 The Company shall on request supply to the Client copies of such Insurance Policies and evidence that the relevant premiums have been paid.</p>
          <p>17.4 The Company shall comply with all terms and conditions of the Insurance Policies at all times. If cover under the Insurance Policies shall lapse or not be renewed or be changed in any material way or if the Company is aware of any reason why the cover under the Insurance Policies may lapse or not be renewed or be changed in any material way, the Company shall notify the Client without delay.</p>

          <h3>18. Professional Standards</h3>
          <p>18.1 The Company is a member of the Chartered Institute of Legal Executives (CILEx) and agrees to conduct all Services in accordance with the professional standards, codes of conduct and ethical requirements of CILEx.</p>
          <p>18.2 The Company shall maintain current membership and professional development requirements of CILEx throughout the term of this Agreement.</p>
          <p>18.3 In the event of any conflict between the terms of this Agreement and the professional standards required by CILEx, the higher standard shall apply.</p>
          <p>18.4 The Company reserves the right to decline work that:</p>
          <ul>
              <li>Falls outside their area of expertise</li>
              <li>Would create a conflict of interest</li>
              <li>Would require the Company to act contrary to professional standards or legal requirements</li>
          </ul>
          <p>18.5 If the Company is unable to provide services due to capacity constraints, illness or other reasonable cause, they will notify the Client as soon as practicable and will endeavour to accommodate urgent work where possible.</p>

          <h3>19. Use of Technology and Artificial Intelligence</h3>
          <p>19.1 The Company may utilise artificial intelligence tools and automated systems to enhance service delivery.</p>
          <p>19.2 AI tools may be used for administrative and support functions including document drafting assistance, research, scheduling and general business tasks. The Company shall not use AI systems for strategic decision-making, client advice or sensitive HR determinations.</p>
          <p>19.3 All AI-generated content shall be reviewed, verified and approved by the Company before use. The Company maintains full professional responsibility for all work product and advice provided to the Client or their clients.</p>
          <p>19.4 The Client may request that AI tools not be utilised for their specific engagement. Such requests shall be honoured without penalty or additional charge save for any additional time spent working on the engagement.</p>
          <p>19.5 The Company warrants that any AI tools used comply with applicable data protection laws and maintain appropriate security standards. Personal data shall not be processed through AI systems without proper safeguards and, where required, explicit consent.</p>

          <h3>20. Data Protection</h3>
          <p>20.1 The Client will collect and process information relating to the Company in accordance with the privacy notice which is available on request.</p>
          <p>20.2 The Company and the Client acknowledge that for the purposes of the Data Protection Legislation, the Client is the controller and the Company is the processor.</p>
          <p>20.3 The Company and the Client will comply with the Data Protection Legislation.</p>
          <p>20.4 Schedule 1 sets out the scope, nature and purpose of the processing by the Company, the duration of the processing and the types of personal data (as defined in the Data Protection Legislation) and categories of data subject. By entering into this Agreement, both parties agree to be bound by the terms and conditions set out in Schedule 1.</p>
          <p>20.5 The Company shall, in relation to any Personal Data processed in connection with the Services, comply with all obligations set out in Schedule 1.</p>

          <h3>21. Confidentiality</h3>
          <p>21.1 The Company acknowledges that during the Engagement they will have access to Confidential Information. The Company has therefore agreed to accept the restrictions in this clause 21.</p>
          <p>21.2 The Company shall not and shall procure that any Substitute shall not (except in the proper course of providing the Services, as authorised or required by law or as authorised by the Client), either during the Engagement or at any time after the Termination Date:</p>
          <ul>
              <li>use any Confidential Information for their own benefit or for the benefit of any other person, company or organisation whatever;</li>
              <li>make or use any Copies; or</li>
              <li>disclose any Confidential Information to any person, company or other organisation whatever.</li>
          </ul>
          <p>21.3 The restriction in clause 21.2 does not apply to any Confidential Information which is or comes into the public domain other than through the Company's unauthorised disclosure.</p>
          <p>21.4 The Company shall be responsible for protecting the confidentiality of the Confidential Information. The Company shall, and shall procure that any Substitute shall:</p>
          <ul>
              <li>use their best endeavours to prevent the use or communication of any Confidential Information by any person, company or organisation whatever (except in the proper course of providing the Services, as required by law or as authorised by the Client); and</li>
              <li>inform the Client immediately on becoming aware, or suspecting, that any such person, company or organisation knows or has used any Confidential Information.</li>
          </ul>
          <p>21.5 All Confidential Information and Copies shall be the Client's property and on termination of the Engagement, or at the Client's request at any time during the Engagement, the Company shall, and shall procure that any Substitute shall:</p>
          <ul>
              <li>hand over all Confidential Information and Copies to the Client;</li>
              <li>irretrievably delete any Confidential Information (including any Copies) stored on any magnetic or optical disk or memory, including personal computer networks, personal email accounts, or personal accounts on websites, and all matter derived from such sources which is in their possession or under their control outside the Client's premises; and</li>
              <li>provide a signed statement that they have complied fully with their obligations under this clause 21.</li>
          </ul>
          <p>21.6 Nothing in this clause 21 shall prevent the Company from:</p>
          <ul>
              <li>reporting a suspected criminal offence to the police or any law enforcement agency or co-operating with the police or any law enforcement agency regarding a criminal investigation or prosecution;</li>
              <li>doing or saying anything that is required by HMRC or a regulator, ombudsman or supervisory authority;</li>
              <li>whether required by law or not, making a disclosure to, or co-operating with any investigation by, HMRC or a regulator, ombudsman or supervisory authority regarding any misconduct, wrongdoing or serious breach of regulatory requirements (including giving evidence at a hearing);</li>
              <li>complying with an order from a court or tribunal to disclose or give evidence;</li>
              <li>disclosing information to HMRC for the purposes of establishing and paying (or recouping) tax liabilities arising from the Engagement;</li>
              <li>disclosing information to any person who owes the Company a duty of confidentiality (which the Company agrees not to waive) in respect of information disclosed to them, including legal or tax advisers or persons providing the Company with medical, therapeutic, counselling or support services; or</li>
              <li>making any other disclosure as required by law.</li>
          </ul>

          <h3>22. Ownership of Intellectual Property</h3>
          <p>22.1 All Intellectual Property Rights in any materials, documents, templates, processes, tools or deliverables created by the Company in the course of delivering the Services ("Works") shall remain the sole property of the Company.</p>
          <p>22.2 The Company grants the Client a non-exclusive, non-transferable, royalty-free licence to use the Works for the Client's internal business purposes only. This licence shall not permit the Client to share, reproduce, distribute, sell or otherwise make the Works available to any third party without the Company's prior written consent.</p>
          <p>22.3 The Company warrants that:</p>
          <ul>
              <li>they have full right and authority to grant the licence set out above;</li>
              <li>the use of the Works by the Client in accordance with this Agreement will not infringe the rights of any third party; and</li>
              <li>to the best of their knowledge, the Works are original and have not been copied or adapted from any other source without appropriate rights.</li>
          </ul>
          <p>22.4 The Client shall not alter, remove or obscure any proprietary notices or disclaimers included on or in the Works.</p>
          <p>22.5 Where appropriate, the Client agrees to credit the Company as the creator of the Works. This attribution shall be in a form mutually agreed upon by the Parties.</p>
          <p>22.6 The Client shall not modify, adapt, reverse engineer or create derivative works from the Works, except with the prior written consent of the Company. Any unauthorised modification shall be considered a material breach of this Agreement.</p>
          <p>22.7 The Client may not rebrand the Works as their own or represent the Works as being created or owned by any party other than the Company, without the Company's prior written consent. If the Client desires to white-label the Works for use with a third party, they must obtain prior written approval from the Company, and such approval will not be unreasonably withheld.</p>
          <p>22.8 The Company shall retain the right to re-use, modify or licence the Works (or parts of them) to other clients, provided that such use does not involve disclosure of the Client's confidential information.</p>
          <p>22.9 Nothing in this clause shall prevent the Company from using any general skills, knowledge, experience or know-how acquired in the course of delivering the Services, whether or not gained through exposure to the Client's business.</p>
          <p>22.10 All Intellectual Property Rights in the HR Doc Vault and Easy HR Audit remain the exclusive property of the Company. The Client is granted a non-exclusive licence to use these tools during the term of their Retainer Package for their business purposes with their own clients only.</p>
          <p>22.11 The Client may not reproduce, modify, distribute or create derivative works from HR Doc Vault materials or Easy HR Audit except as reasonably necessary for their own client work.</p>

          <h3>23. Indemnification</h3>
          <p>23.1 Except to the extent paid in settlement from any applicable insurance policies, and to the extent permitted by applicable law, each Party agrees to indemnify and hold harmless the other Party, and its respective directors, shareholders, affiliates, officers, agents, employees and permitted successors and assigns against any and all claims, losses, damages, liabilities, penalties, punitive damages, expenses, reasonable legal fees and costs of any kind or amount whatsoever, which result from or arise out of any act or omission of the indemnifying party, its respective directors, shareholders, affiliates, officers, agents, employees and permitted successors and assigns that occurs in connection with this Agreement. This indemnification will survive the termination of this Agreement.</p>

          <h3>24. Liability</h3>
          <p>24.1 The Company's total liability to the Client under or in connection with this agreement, whether in contract, tort (including negligence) or otherwise, shall not exceed the total fees paid by the Client in the twelve (12) months preceding the claim.</p>
          <p>24.2 The Company shall not be liable for:</p>
          <ul>
              <li>Loss of profits, business, revenue or goodwill</li>
              <li>Indirect or consequential losses</li>
              <li>Losses arising from the Client's failure to follow advice given</li>
              <li>Losses arising from incorrect or incomplete information provided by the Client</li>
              <li>Losses arising from the Client's relationship with their own clients</li>
          </ul>
          <p>24.3 Nothing in this agreement excludes or limits liability for:</p>
          <ul>
              <li>Death or personal injury caused by negligence</li>
              <li>Fraud or fraudulent misrepresentation</li>
              <li>Any other liability that cannot be excluded or limited by law</li>
          </ul>
          <p>24.4 The Client agrees to indemnify the Company against any claims brought by the Client's own clients arising from advice or services provided under this agreement, except where such claims arise from the Company's negligence or breach of professional duty.</p>
          <p>24.5 The Company shall not be liable for any breach of the Data Protection Legislation by the Client or any third-party processor. The Company is responsible for maintaining their own insurance coverage, including cyber insurance or equivalent, to cover liability for any data protection breaches that arise in connection with the Services.</p>

          <h3>25. TUPE Exclusion</h3>
          <p>25.1 Both parties acknowledge and agree that the Transfer of Undertakings (Protection of Employment) Regulations 2006 (as amended) ("TUPE") shall not apply to this Agreement or the services provided hereunder.</p>
          <p>25.2 The parties confirm that this Agreement is for the provision of professional advisory services only and does not constitute or involve:</p>
          <ul>
              <li>The transfer of an undertaking, business or part of an undertaking or business from the Client to the Company;</li>
              <li>A service provision change as defined under TUPE; or</li>
              <li>The transfer of any employees from the Client to the Company or vice versa.</li>
          </ul>
          <p>25.3 Each party shall be solely responsible for the employment or engagement and discharge of its own staff. Neither party shall represent themselves as being an employee, agent or partner of the other party.</p>
          <p>25.4 In the event that TUPE is found to apply, despite the intentions of the parties as expressed in this clause, the Client agrees to indemnify and keep indemnified the Company against all losses, costs, claims, demands, expenses and liabilities of whatever nature arising from or in connection with any claim that TUPE applies to this Agreement.</p>

          <h3>26. Return of Property</h3>
          <p>26.1 Upon the expiry or termination of this Agreement, the Company will return to the Client any property, documentation, records or Confidential Information which is the property of the Client.</p>

          <h3>27. Employment Status</h3>
          <p>27.1 In providing the Services under this Agreement it is expressly agreed that the Company is acting as an independent contractor and not as an employee. The Company and the Client acknowledge that this Agreement does not create a partnership or joint venture between them, and is exclusively a contract for service.</p>

          <h3>28. Equipment</h3>
          <p>28.1 Except as otherwise provided in this Agreement, the Company will provide at the Company's own expense, any and all equipment, software, materials and any other supplies necessary to deliver the Services in accordance with the Agreement.</p>

          <h3>29. No Exclusivity</h3>
          <p>29.1 The Parties acknowledge that this Agreement is non-exclusive and that either Party will be free, during and after the Term, to engage or contract with third parties for the provision of services similar to the Services.</p>
          <p>29.2 Nothing in this agreement shall prevent the Company from being engaged, concerned or having any financial interest in any capacity in any other business, trade, profession or occupation during the Engagement provided that such activity does not cause a breach of any of the Company's obligations under this agreement.</p>

          <h3>30. General Provisions</h3>
          <p>30.1 <strong>Performance:</strong> The Parties agree to do everything necessary to ensure that the terms of this Agreement take effect.</p>
          <p>30.2 <strong>Currency:</strong> Except as otherwise provided in this Agreement, all monetary amounts referred to in this Agreement are in GBP.</p>
          <p>30.3 <strong>Notices:</strong> All notices, requests, demands or other communications required or permitted under this Agreement must be given in writing. Notices may be delivered personally, sent by post or sent by email. Email shall be the primary method of communication, and a notice sent by email shall be deemed to have been received on the date it was sent, provided no delivery failure notification is received.</p>
          <p>30.4 <strong>Modification:</strong> Any amendment or modification of this Agreement or additional obligation assumed by either Party in connection with this Agreement will only be binding if evidenced in writing signed by each Party or an authorised representative of each Party.</p>
          <p>30.5 <strong>Time of the Essence:</strong> Time is of the essence in this Agreement. No extension or variation of this Agreement will operate as a waiver of this provision.</p>
          <p>30.6 <strong>Assignment:</strong> The Company will not voluntarily, or by operation of law, assign or otherwise transfer its obligations under this Agreement without the prior written consent of the Client.</p>
          <p>30.7 <strong>Entire Agreement:</strong> It is agreed that there is no representation, warranty, collateral agreement or condition affecting this Agreement except as expressly provided in this Agreement.</p>
          <p>30.8 <strong>Enurement:</strong> This Agreement will enure to the benefit of and be binding on the Parties and their respective heirs, executors, administrators and permitted successors and assigns.</p>
          <p>30.9 <strong>Titles and Headings:</strong> Headings are inserted for the convenience of the Parties only and are not to be considered when interpreting this Agreement.</p>
          <p>30.10 <strong>Third Party Rights:</strong> Except as expressly provided elsewhere in this agreement, a person who is not a party to this agreement shall not have any rights under the Contracts (Rights of Third Parties) Act 1999 to enforce any term of this agreement. This does not affect any right or remedy of a third party which exists, or is available, apart from that Act. The rights of the parties to terminate, rescind or agree any variation, waiver or settlement under this agreement are not subject to the consent of any other person.</p>
          <p>30.11 <strong>Severability:</strong> In the event that any of the provisions of this Agreement are held to be invalid or unenforceable in whole or in part, all other provisions will nevertheless continue to be valid and enforceable with the invalid or unenforceable parts severed from the remainder of this Agreement.</p>
          <p>30.12 <strong>Waiver:</strong> The waiver by either Party of a breach, default, delay or omission of any of the provisions of this Agreement by the other Party will not be construed as a waiver of any subsequent breach of the same or other provisions.</p>
          <p>30.13 <strong>Governing Law:</strong> This Agreement will be governed by and construed in accordance with the laws of England and Wales.</p>
          <p>30.14 <strong>Jurisdiction:</strong> Each party irrevocably agrees that the courts of England and Wales shall have exclusive jurisdiction to settle any dispute or claim arising out of or in connection with this agreement or its subject matter or formation (including non-contractual disputes or claims).</p>
          <p>30.15 <strong>Force Majeure:</strong> Neither party shall be liable for failure to perform obligations due to circumstances beyond their reasonable control.</p>

          <h3>31. Acceptance</h3>
          <p>31.1 By signing up for a Retainer Package via Stripe subscription or by accepting an invoice, the Client confirms that they have read, understood and agree to be bound by these terms and conditions.</p>
          <p>31.2 The Client confirms that they have authority to enter into this agreement on behalf of their consultancy.</p>

          <div class="terms-contact">
              <h3>Contact Information</h3>
              <p><strong>HR On Call Ltd</strong></p>
              <p>3 Pethill Close<br>Plymouth<br>PL6 8NL</p>
              <p>Email: <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a></p>
              <p>Phone: 01752 425526</p>
          </div>

          <h3>Schedule 1 - Processing, Personal Data and Data Subjects</h3>

          <h3>1. Processing by the Company</h3>
          <p>1.1 The Company will process Personal Data in connection with the provision of associate HR consultancy services to other HR consultants, including but not limited to:</p>
          <ul>
              <li>handling client enquiries,</li>
              <li>providing HR advice and guidance,</li>
              <li>managing employee relations matters,</li>
              <li>conducting investigations,</li>
              <li>preparing documentation,</li>
              <li>attending meetings and hearings,</li>
              <li>and any other HR-related activities as specified in the Agreement.</li>
          </ul>
          <p>1.2 The Company will process Personal Data on behalf of the Client (HR consultant), including personal and employment-related data necessary for the Company to provide effective HR associate services. The data may include information relating to the Client's own clients, their employees and other individuals relevant to ongoing HR matters. The Company will process Personal Data in accordance with the instructions of the Client and in line with the Client's established procedures and data protection obligations.</p>
          <p>1.3 The Personal Data will be processed for the purpose of providing associate HR consultancy services as detailed in the Agreement. This includes:</p>
          <ul>
              <li>Responding to enquiries from the Client's clients regarding ongoing HR matters;</li>
              <li>Providing HR advice and guidance on employee relations issues;</li>
              <li>Managing ongoing investigations, disciplinary proceedings and grievances;</li>
              <li>Preparing documentation, reports and correspondence on behalf of the Client;</li>
              <li>Attending meetings, hearings and tribunals as the Client's representative;</li>
              <li>Providing employment law advice and compliance guidance;</li>
              <li>Managing settlement negotiations and agreements;</li>
              <li>Handling ACAS conciliation and COT3 agreements; and</li>
              <li>Any other HR-related services as agreed between the Company and the Client during the cover period.</li>
          </ul>
          <p>1.4 The processing of Personal Data will be undertaken for the duration of the agreement as otherwise agreed by the Client and Company. Upon completion of the Agreement, the Company will comply with the Client's instructions for returning or securely deleting the Personal Data in line with the Agreement and applicable data protection requirements.</p>

          <h3>2. Types of Personal Data</h3>
          <p>2.1 The types of Personal Data that may be processed under this Agreement include, but are not limited to:</p>
          <ul>
              <li>Full name, date of birth, gender, nationality, employee ID;</li>
              <li>Contact details including address, phone number, email address;</li>
              <li>Employment details including job titles, work location, salary, benefits, contract terms;</li>
              <li>Performance reviews, disciplinary records, appraisals, grievance documentation;</li>
              <li>Investigation records, witness statements, meeting notes;</li>
              <li>Training records, certifications, skills assessments;</li>
              <li>Compensation data including salary, bonuses, pay grades;</li>
              <li>Absence records including sick leave, holiday entitlements, attendance data;</li>
              <li>Health information only where specifically required for workplace adjustments or occupational health referrals;</li>
              <li>Settlement agreement documentation and negotiation records;</li>
              <li>Tribunal documentation and legal correspondence;</li>
              <li>ACAS conciliation records and COT3 agreements; and</li>
              <li>Any other data necessary for the performance of associate HR consultancy services under the terms of the Agreement.</li>
          </ul>

          <h3>3. Categories of Data Subject</h3>
          <p>3.1 The categories of individuals whose Personal Data may be processed under this Agreement include, but are not limited to:</p>
          <ul>
              <li>Employees of the Client's clients, including current, former and prospective employees;</li>
              <li>Job applicants and candidates being processed by the Client's clients;</li>
              <li>Contractors, consultants and temporary workers engaged by the Client's clients;</li>
              <li>Witnesses, complainants and respondents in employee relations matters;</li>
              <li>Trade union representatives and employee representatives;</li>
              <li>Third-party contacts including legal representatives, ACAS conciliators and tribunal personnel;</li>
              <li>Healthcare professionals involved in occupational health matters; and</li>
              <li>Any other individuals whose Personal Data is processed in the course of providing associate HR consultancy services to the Client's clients.</li>
          </ul>

          <h3>4. Data Processing Obligations</h3>
          <p>4.1 The Company shall, in relation to any Personal Data processed in connection with the Services:</p>
          <ul>
              <li>process that Personal Data only on written instructions of the Client;</li>
              <li>keep the Personal Data confidential;</li>
              <li>comply with the Client's data protection policies as in force from time to time;</li>
              <li>comply with the Client's reasonable instructions with respect to processing Personal Data;</li>
              <li>only transfer Personal Data outside of the UK where such transfers comply with applicable data protection laws and include adequate safeguards such as adequacy decisions, standard contractual clauses or other appropriate transfer mechanisms, and with prior written consent where required by law or the Client's data protection policies;</li>
              <li>assist the Client at the Client's cost in responding to any data subject access request and to ensure compliance with its obligations under the Data Protection Legislation with respect to security, breach notifications, privacy impact assessments and consultations with supervisory authorities or regulators;</li>
              <li>notify the Client without undue delay and no later than 24 hours after becoming aware of a Personal Data breach or communication which relates to the Client's or Company's compliance with the Data Protection Legislation;</li>
              <li>at the written request of the Client, delete or return Personal Data (and any copies of the same) to the Client upon completion of the associate services unless required by the Data Protection Legislation to store the Personal Data; and</li>
              <li>maintain complete and accurate records and information to demonstrate compliance with this clause.</li>
          </ul>

          <h3>5. Security Measures</h3>
          <p>5.1 The Company shall ensure that they have in place appropriate technical or organisational measures, reviewed and approved by the Client, to protect against unauthorised or unlawful processing of Personal Data and against accidental loss or destruction of, or damage to, Personal Data, appropriate to the harm that might result from the unauthorised or unlawful processing or accidental loss, destruction or damage and the nature of the data to be protected, having regard to the state of technological development and the cost of implementing any measures. Such measures may include, where appropriate:</p>
          <ul>
              <li>pseudonymising and encrypting Personal Data;</li>
              <li>ensuring confidentiality, integrity, availability and resilience of its systems and services;</li>
              <li>ensuring that availability of and access to Personal Data can be restored in a timely manner after an incident; and</li>
              <li>regularly assessing and evaluating the effectiveness of the technical and organisational measures adopted.</li>
          </ul>

          <h3>6. Sub-Processors</h3>
          <p>6.1 The Company may only authorise a sub-processor to process Personal Data if:</p>
          <ul>
              <li>the Client provides prior written consent to the engagement of sub-processors;</li>
              <li>the Company enters into a written contract with the sub-processor that contains terms substantially the same as those set out in this agreement, in particular in relation to requiring appropriate technical and organisational data security measures with regards to Article 32 of the UK GDPR and any relevant requirements under Article 28 of the UK GDPR, including but not limited to the sub-processor allowing for and contributing to audits by or on behalf of the Client and, where relevant, aiding the Client to respond to subject access requests, and, upon the Client's written request, provides the Client with copies of the relevant excerpts from such contracts;</li>
              <li>the Company maintains control over all of the Personal Data it entrusts to the sub-processor; and</li>
              <li>the sub-processor's contract terminates automatically on termination of this agreement for any reason.</li>
          </ul>
          <p>6.2 The Company shall remain fully liable for all acts or omissions of any sub-processor appointed by it pursuant to this clause. The Company shall maintain a current list of all sub-processors and notify the Client of any intended changes to allow the Client to object to such changes.</p>
          <p>6.3 Sub-processors may include IT support services, cloud storage providers, email systems and other technology service providers necessary for the delivery of associate HR consultancy services.</p>

          <h3>7. Special Category Data</h3>
          <p>7.1 Where Special Category Personal Data (including health data, trade union membership or other sensitive personal data) is processed, the Company shall:</p>
          <ul>
              <li>Process such data only where explicitly instructed by the Client and where a lawful basis exists;</li>
              <li>Implement additional security measures appropriate to the sensitivity of the data;</li>
              <li>Ensure staff handling such data receive specific training on its protection; and</li>
              <li>Maintain separate records of Special Category Data processing activities.</li>
          </ul>

          <h3>8. Artificial Intelligence and Automated Processing</h3>
          <p>8.1 The Company may utilise artificial intelligence tools and automated processing systems to assist with service delivery, provided that Personal Data is not processed through AI systems unless specifically authorised in writing by the Client and appropriate safeguards are in place. The Company shall maintain full human oversight and decision-making authority for all client matters and notify the Client of any AI tools that may be used.</p>
          <p>8.2 The Company shall not engage in automated decision-making or profiling activities unless specifically authorised in writing by the Client.</p>
          <p>8.3 Where automated processing tools are used for administrative purposes (such as calendar management or document processing), appropriate human oversight shall be maintained.</p>

          <h3>9. International Transfers</h3>
          <p>9.1 Where Personal Data is transferred outside the United Kingdom, the Company shall ensure that such transfers comply with applicable data protection laws. This includes ensuring adequate safeguards are in place, such as adequacy decisions, standard contractual clauses or other appropriate transfer mechanisms.</p>
          <p>9.2 The Company shall notify the Client of any international transfers and obtain prior written consent where required by law or the Client's data protection policies.</p>

          <h3>10. Data Retention</h3>
          <p>10.1 Personal Data shall be retained only for as long as necessary to fulfil the purposes outlined in this Schedule or as instructed by the Client.</p>
          <p>10.2 Upon completion of the Agreement, all Personal Data shall be returned to the Client or securely deleted in accordance with the Client's written instructions and within the timeframe specified by the Client.</p>
          <p>10.3 The Company may retain Personal Data for longer periods only where required by law or with the express written consent of the Client.</p>

          <h3>11. Data Breach Procedures</h3>
          <p>11.1 In the event of a personal data breach, the Company shall:</p>
          <ul>
              <li>Notify the Client without undue delay and no later than 24 hours after becoming aware of the breach;</li>
              <li>Provide full details of the nature, scope and potential consequences of the breach;</li>
              <li>Describe measures taken or proposed to address the breach and mitigate its effects;</li>
              <li>Cooperate fully with the Client in any breach response activities; and</li>
              <li>Assist with any required notifications to supervisory authorities or data subjects.</li>
          </ul>
          <p>11.2 The Company shall maintain records of all personal data breaches and provide such records to the Client upon request.</p>

          <h3>12. Data Subject Rights</h3>
          <p>12.1 The Company shall assist the Client in responding to requests from data subjects exercising their rights under applicable data protection laws, including rights of access, rectification, erasure, restriction, data portability and objection.</p>
          <p>12.2 Any data subject requests received directly by the Company shall be forwarded to the Client without undue delay.</p>
          <p>12.3 The Company shall provide reasonable assistance to enable the Client to comply with data subject requests within the required timeframes.</p>

          <h3>13. Cross-Border Considerations</h3>
          <p>13.1 Where the Client's clients operate across multiple jurisdictions, the Company shall:</p>
          <ul>
              <li>Comply with the data protection requirements of all relevant jurisdictions;</li>
              <li>Ensure processing activities respect local data protection laws and cultural requirements;</li>
              <li>Obtain guidance from the Client on jurisdiction-specific requirements; and</li>
              <li>Maintain appropriate documentation for cross-border data processing activities.</li>
          </ul>

          <h3>14. Contact Information</h3>
          <p>14.1 For all data protection matters relating to this Agreement, the Company's contact details are:</p>
          <p>Grace Pariser<br>
          <a href="mailto:grace@on-call.co.uk">grace@on-call.co.uk</a><br>
          01752 425526<br>
          3 Pethill Close, Plymouth, PL6 8NL</p>
          <p>14.2 The Company shall notify the Client of any changes to these contact details within 5 working days of such changes taking effect.</p>

          <p class="terms-acceptance">By subscribing to an Associate On Call retainer package, you acknowledge that you have read, understood, and agree to be bound by these Terms &amp; Conditions.</p>
          <p class="terms-updated">Last updated: 14 November 2025</p>
        </div>
      </div>

      <!-- The Client Vault Terms -->
      <div class="terms-content" id="client-vault">
        <div class="oc-legal">
          <h2>The Client Vault - Terms &amp; Conditions</h2>
          <p class="updated">Terms and Conditions for Use of The Client Vault</p>

          <h3>1. Agreement to Terms</h3>
          <p>By accessing or subscribing to The Client Vault, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, you should not use the Service.</p>

          <h3>2. Documents and Resources Included in the Service</h3>
          <p>The Client Vault is a white-label document platform that enables HR consultants to provide their clients with access to HR templates, guides, educational resources, toolkits and documents. These documents are provided in .docx and .dotx format and are compatible with various platforms including Microsoft Word and Google Docs.</p>
          <p>Educational resources, toolkits and guides are provided for learning and reference purposes and are subject to the same licence terms as document templates.</p>

          <h3>3. Licence of Use</h3>
          <p>Upon subscribing to The Client Vault, you are granted a non-exclusive, non-transferable licence to:</p>
          <ul>
              <li>Provide your clients with access to the documents and resources through your branded platform</li>
              <li>Modify the documents to suit your specific business needs</li>
              <li>Upload additional documents to your platform for your clients' use</li>
          </ul>
          <p>The documents and resources may not be:</p>
          <ul>
              <li>Resold as standalone products outside of The Client Vault platform</li>
              <li>Shared or redistributed to other HR consultants or businesses</li>
              <li>Provided to clients who are not registered users on your platform</li>
          </ul>
          <p>You must not remove any copyright notices or claim ownership of the core documents or resources provided by HR On Call Ltd.</p>

          <h3>4. No Legal Advice Provided</h3>
          <p>The documents and resources available in The Client Vault are for informational purposes only. They are intended as general templates and educational materials to assist in HR functions and are not a substitute for legal advice.</p>
          <p>You are responsible for ensuring your clients understand that these documents do not constitute legal advice. If you or your clients require legal advice or have concerns about the legal implications of any document or policy, you should seek guidance from a qualified solicitor or legal professional.</p>

          <h3>5. Document Accuracy and Updates</h3>
          <p>While every effort is made to ensure that the documents and resources are accurate and compliant with current UK employment law, laws and regulations are subject to change. HR On Call Ltd cannot guarantee that the documents will always be up to date.</p>
          <p>You are responsible for reviewing documents before providing them to your clients and ensuring they are appropriate for your clients' specific circumstances.</p>

          <h3>6. Subscription Tiers</h3>
          <p>The Client Vault is available on the following subscription tiers:</p>
          <ul>
              <li><strong>Starter</strong> - £100/month + VAT: Up to 5 client accounts</li>
              <li><strong>Growth</strong> - £200/month + VAT: Up to 20 client accounts</li>
              <li><strong>Scale</strong> - £300/month + VAT: Unlimited client accounts</li>
          </ul>
          <p>All tiers include custom branding, the full core document library, regular legislative updates, secure hosting and technical support.</p>
          <p>A one-off set-up fee of £500 + VAT applies to all new subscriptions, covering custom branding configuration, platform setup, administrator training and client onboarding support.</p>
          <p>Optional modules are available for an additional one-off set-up fee of £125 + VAT each: the Training Videos module and the FAQs module. These may be added at sign-up or later.</p>
          <p>HR On Call Ltd reserves the right to increase these prices with 30 days' written notice. All prices are exclusive of VAT. VAT will be added to all invoices at the prevailing rate (VAT registration number: 515981373).</p>

          <h3>7. Payment Terms</h3>
          <p>The set-up fee (£500 + VAT, plus £125 + VAT for each optional module selected) and the first month's subscription will be invoiced prior to platform setup. Payment is required before your platform is configured and made live.</p>
          <p>Subsequent monthly payments are invoiced in advance. Payment is due within 7 days of the invoice date.</p>
          <p>Late payments will incur interest at a rate of 4% per month on the outstanding balance.</p>
          <p>Payment can be made by bank transfer, card or Direct Debit. Direct Debit is available for ongoing monthly payments.</p>
          <p>Failure to pay may result in suspension of your platform access.</p>

          <h3>8. Subscription Renewal and Cancellation</h3>
          <p>Subscriptions automatically renew on a rolling monthly basis unless cancelled.</p>
          <p>To cancel your subscription, please provide 30 days' written notice to <a href="mailto:hello@on-call.co.uk">hello@on-call.co.uk</a>. Cancellations take effect at the end of the notice period.</p>

          <h3>9. Termination and Access</h3>
          <p>Upon termination of your subscription:</p>
          <ul>
              <li>Your platform access will be revoked immediately at the end of your notice period</li>
              <li>Your clients will no longer be able to access the platform</li>
              <li>Any documents uploaded by you to the platform will no longer be accessible</li>
              <li>You will not be entitled to any refund of fees already paid</li>
          </ul>
          <p>HR On Call Ltd reserves the right to terminate your subscription immediately if you breach these terms and conditions.</p>

          <h3>10. Tier Upgrades and Downgrades</h3>
          <p>You may request a tier upgrade at any time by completing the upgrade request form in your Admin dashboard. Upgrades take effect upon payment of the difference in subscription fees.</p>
          <p>Tier downgrades may be requested with 30 days' notice and take effect at the start of the following billing period.</p>

          <h3>11. Your Responsibilities</h3>
          <p>As a Client Vault subscriber, you are responsible for:</p>
          <ul>
              <li>Managing your client accounts and access</li>
              <li>Ensuring your clients use the documents appropriately</li>
              <li>Providing guidance to your clients on document usage where necessary</li>
              <li>Maintaining the security of your administrator login credentials</li>
              <li>Complying with data protection legislation in relation to your clients' data</li>
              <li>Marketing and promoting your platform to your clients – HR On Call Ltd does not provide marketing services or client acquisition support</li>
              <li>Establishing your own terms and conditions with your clients for their use of your platform</li>
              <li>Ensuring you do not exceed your tier's client account limit</li>
          </ul>

          <h3>12. Custom Domain Setup</h3>
          <p>If you choose to use your own custom domain for your platform:</p>
          <ul>
              <li>You are responsible for providing cPanel access or working with your web host to configure DNS settings</li>
              <li>You are responsible for any costs associated with domain registration and hosting</li>
              <li>HR On Call Ltd will provide guidance on the required DNS configuration but cannot be held responsible for delays or issues caused by third-party hosting providers</li>
              <li>SSL certificates will be configured by HR On Call Ltd once DNS is correctly pointed</li>
          </ul>
          <p>If you choose to use a subdomain of on-call.co.uk (e.g. yourcompany.on-call.co.uk), no technical setup is required from you.</p>

          <h3>13. Branding</h3>
          <p>Your platform will be configured with your custom branding, including:</p>
          <ul>
              <li>Your company logo</li>
              <li>Your brand colours</li>
              <li>Your company name</li>
          </ul>
          <p>You are responsible for providing high-quality logo files and colour specifications during the setup process. HR On Call Ltd reserves the right to request alternative assets if those provided are unsuitable for the platform design.</p>
          <p>Branding must not include any content that is offensive, discriminatory, misleading or that infringes the intellectual property rights of others.</p>

          <h3>14. Optional Document Categories</h3>
          <p>During sign-up, you may select optional document categories to include on your platform. These categories cover more complex HR situations and are not included by default.</p>
          <p>You may request changes to your selected optional categories at any time by contacting <a href="mailto:hello@on-call.co.uk">hello@on-call.co.uk</a>.</p>
          <p>You acknowledge that you are responsible for ensuring your clients understand when and how to use documents from optional categories, or for providing appropriate guidance alongside access.</p>

          <h3>15. Client Account Limits</h3>
          <p>Your subscription tier determines the maximum number of client accounts you can create:</p>
          <ul>
              <li>Starter: Up to 5 client accounts</li>
              <li>Growth: Up to 20 client accounts</li>
              <li>Scale: Unlimited client accounts</li>
          </ul>
          <p>If you reach your tier's client limit, you will not be able to add further client accounts until you upgrade to a higher tier.</p>

          <h3>16. Document Updates</h3>
          <p>HR On Call Ltd will periodically update core documents to reflect changes in UK employment law and best practice.</p>
          <p>You will be notified by email when significant updates are made to the document library. It is your responsibility to review updates and communicate relevant changes to your clients where appropriate.</p>

          <h3>17. Support</h3>
          <p>Your subscription includes technical support for platform-related issues. Support is available via email at <a href="mailto:hello@on-call.co.uk">hello@on-call.co.uk</a> during normal business hours (Monday to Friday, 9am to 5pm, excluding bank holidays).</p>
          <p>We aim to respond to support queries within 2 working days.</p>
          <p>Support does not include HR advice, legal guidance or advice on how to use specific documents – these services are available separately through HR On Call Ltd's consultancy services.</p>

          <h3>18. Platform Availability</h3>
          <p>HR On Call Ltd will use reasonable endeavours to ensure the platform is available 24 hours a day, 7 days a week.</p>
          <p>However, we do not guarantee uninterrupted access and shall not be liable for any downtime caused by:</p>
          <ul>
              <li>Scheduled maintenance (we will endeavour to provide advance notice)</li>
              <li>Emergency maintenance required to protect the security or integrity of the platform</li>
              <li>Factors outside our reasonable control</li>
          </ul>

          <h3>19. Intellectual Property</h3>
          <p>All core documents and resources in The Client Vault are protected by copyright and intellectual property laws and remain the property of HR On Call Ltd.</p>
          <p>You may not claim ownership of the core documents or resources or use them in any way that violates the rights of HR On Call Ltd.</p>
          <p>Documents you upload to your platform remain your intellectual property.</p>

          <h3>20. Limitation of Liability</h3>
          <p>HR On Call Ltd will not be liable for any loss, damage or legal claims arising from:</p>
          <ul>
              <li>The use of the documents or resources in The Client Vault by you or your clients</li>
              <li>Any advice or guidance you provide to your clients</li>
              <li>Any modifications you make to the documents</li>
              <li>Any documents you upload to your platform</li>
          </ul>
          <p>While we strive to provide accurate and useful templates, we do not guarantee that they will be suitable for your specific needs or your clients' needs, or that they will comply with all current laws or regulations.</p>
          <p>By using the Service, you agree to accept full responsibility for the use of the documents and resources and any potential consequences.</p>
          <p>In no event shall HR On Call Ltd be held liable for any direct, indirect, incidental or consequential damages arising out of the use of the Service.</p>

          <h3>21. Indemnity</h3>
          <p>You agree to indemnify and hold harmless HR On Call Ltd from any claims, damages, losses or expenses (including legal fees) arising from:</p>
          <ul>
              <li>Your use of The Client Vault</li>
              <li>Your clients' use of documents accessed through your platform</li>
              <li>Any breach of these terms and conditions by you</li>
          </ul>

          <h3>22. Data Retention and Termination</h3>
          <p>Upon termination of your subscription:</p>
          <ul>
              <li>Your platform access will be revoked immediately at the end of your notice period</li>
              <li>Your clients will no longer be able to access the platform</li>
              <li>Any documents uploaded by you to the platform will be deleted within 30 days of termination</li>
              <li>Client account data will be deleted within 30 days of termination</li>
              <li>You will not be entitled to any refund of fees already paid</li>
          </ul>
          <p>You are responsible for exporting any data you wish to retain prior to termination.</p>
          <p>HR On Call Ltd reserves the right to terminate your subscription immediately if you breach these terms and conditions.</p>

          <h3>23. Force Majeure</h3>
          <p>HR On Call Ltd shall not be liable for any failure or delay in performing its obligations under these terms where such failure or delay results from circumstances beyond its reasonable control, including but not limited to:</p>
          <ul>
              <li>Acts of God, natural disasters or extreme weather</li>
              <li>War, terrorism or civil unrest</li>
              <li>Government actions or regulations</li>
              <li>Power failures or internet outages</li>
              <li>Pandemic or epidemic</li>
          </ul>

          <h3>24. Privacy and Data Protection</h3>
          <p>HR On Call Ltd respects your privacy and is committed to protecting your personal data. Any personal information collected will be processed in accordance with our Privacy Policy.</p>
          <p>You are responsible for complying with data protection legislation (including UK GDPR) in relation to any personal data you collect from your clients through the platform.</p>

          <h3>25. Severability</h3>
          <p>If any provision of these terms and conditions is found to be invalid, illegal or unenforceable by a court or other competent authority, such invalidity, illegality or unenforceability shall not affect the other provisions of these terms, which shall remain in full force and effect.</p>

          <h3>26. Entire Agreement</h3>
          <p>These terms and conditions, together with our Privacy Policy, constitute the entire agreement between you and HR On Call Ltd in relation to The Client Vault and supersede all prior discussions, negotiations, understandings or agreements between us, whether written or oral.</p>

          <h3>27. No Waiver</h3>
          <p>No failure or delay by HR On Call Ltd in exercising any right or remedy under these terms and conditions shall operate as a waiver of that right or remedy. No single or partial exercise of any right or remedy shall prevent any further or other exercise of that right or remedy or the exercise of any other right or remedy.</p>

          <h3>28. Changes to Terms and Conditions</h3>
          <p>HR On Call Ltd reserves the right to update these terms and conditions at any time.</p>
          <p>Any changes will be communicated to you via email and it is your responsibility to review them. Continued use of the Service after any changes indicates your acceptance of the updated terms.</p>

          <h3>29. Governing Law</h3>
          <p>These terms and conditions are governed by and construed in accordance with the laws of England and Wales. Any disputes arising under or in connection with these terms shall be subject to the exclusive jurisdiction of the courts of England and Wales.</p>

          <div class="terms-contact">
              <h3>Contact Information</h3>
              <p><strong>HR On Call Ltd</strong></p>
              <p>3 Pethill Close<br>Plymouth<br>PL6 8NL</p>
              <p>Email: <a href="mailto:hello@on-call.co.uk">hello@on-call.co.uk</a></p>
          </div>

          <p class="terms-acceptance">By subscribing to The Client Vault, you acknowledge that you have read, understood and agree to be bound by these Terms and Conditions.</p>
          <p class="terms-updated">Last Updated: January 2026</p>
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
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');

            // Update URL hash without scrolling
            history.pushState(null, null, '#' + targetTab);

            // Scroll to top of terms section
            document.querySelector('.terms-section').scrollIntoView({ behavior: 'smooth' });
        });
    });
});
</script>

<style>
.oc .terms-content { display:none; }
.oc .terms-content.active { display:block; }
.oc .terms-tabs a.active { background:var(--pink); border-color:var(--pink); color:#fff; }
.oc-legal .terms-contact { margin-top:36px; padding:24px 26px; background:var(--cream); border:1px solid var(--cream-bd); border-radius:14px; }
.oc-legal .terms-contact h3 { margin-top:0; }
.oc-legal .terms-contact p { margin:4px 0; }
.oc-legal .terms-acceptance { margin-top:28px; font-weight:600; color:var(--navy); }
.oc-legal .terms-updated { color:var(--soft); font-size:14px; margin-top:10px; }
</style>

<?php include 'includes/footer.php'; ?>
