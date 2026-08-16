<?php
/**
 * Email Class with Brevo Integration
 */

class Email {
    private $db;
    private $apiKey;

    public function __construct() {
        $this->db = Database::getInstance();
        $this->apiKey = BREVO_API_KEY;
    }

    /**
     * Wrap content in styled email template
     */
    private function wrapInTemplate($content) {
        $logoUrl = ATS_SITE_URL . '/assets/images/hr-on-call-logo-light.webp';

        // Check if content is already HTML (starts with <p>, <h, <div, etc.)
        $trimmedContent = trim($content);
        if (preg_match('/^<(p|h[1-6]|div|table)/i', $trimmedContent)) {
            // Already HTML - just use it directly with basic styling applied
            $htmlContent = $trimmedContent;
            // Add default paragraph styling if not already styled
            $htmlContent = preg_replace('/<p>/', '<p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">', $htmlContent);
        } else {
            // Convert double line breaks to paragraphs, single line breaks within paragraphs are kept together
            $paragraphs = preg_split('/\n\s*\n/', $trimmedContent);
            $htmlContent = '';
            foreach ($paragraphs as $para) {
                $para = trim($para);
                if (empty($para)) continue;
                // Check if it's already HTML (like a button or div)
                if (preg_match('/^<(table|a\s|div)/i', $para)) {
                    $htmlContent .= $para;
                } else {
                    // Regular text paragraph - remove single line breaks within paragraph
                    $para = preg_replace('/\n/', ' ', $para);
                    // Preserve inline links by temporarily replacing them, then restoring after htmlspecialchars
                    $links = [];
                    $para = preg_replace_callback('/<a\s[^>]*>.*?<\/a>/i', function($match) use (&$links) {
                        $placeholder = '{{LINK_' . count($links) . '}}';
                        $links[$placeholder] = $match[0];
                        return $placeholder;
                    }, $para);
                    $para = htmlspecialchars($para);
                    // Restore links
                    foreach ($links as $placeholder => $link) {
                        $para = str_replace(htmlspecialchars($placeholder), $link, $para);
                    }
                    $htmlContent .= '<p style="margin: 0 0 16px 0; font-size: 15px; line-height: 1.6; color: #2D3748;">' . $para . '</p>';
                }
            }
        }

        return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR On Call</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #FDFCFA; color: #2D3748;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FDFCFA;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width: 600px; width: 100%;">
                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding: 0 0 30px 0;">
                            <img src="' . $logoUrl . '" alt="HR On Call" width="180" style="display: block; max-width: 180px; height: auto;">
                        </td>
                    </tr>
                    <!-- Main Content Card -->
                    <tr>
                        <td>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #FFFFFF; border-radius: 6px; border: 2px solid #C9A962;">
                                <tr>
                                    <td style="padding: 35px 40px;">
                                        ' . $htmlContent . '
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding: 30px 20px;">
                            <p style="margin: 0; font-size: 13px; color: #718096;">
                                <a href="https://clients.on-call.co.uk/associates" style="color: #DB2777; text-decoration: none;">clients.on-call.co.uk/associates</a>
                                &nbsp;|&nbsp;
                                <a href="mailto:grace@on-call.co.uk" style="color: #DB2777; text-decoration: none;">grace@on-call.co.uk</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
    }

    /**
     * Send email via Brevo API
     */
    public function send($to, $toName, $subject, $htmlContent, $textContent = null, $useTemplate = true) {
        $url = 'https://api.brevo.com/v3/smtp/email';

        // Wrap content in styled template unless disabled
        $finalHtml = $useTemplate ? $this->wrapInTemplate($htmlContent) : nl2br($htmlContent);

        $data = [
            'sender' => [
                'name' => EMAIL_FROM_NAME,
                'email' => EMAIL_FROM_ADDRESS
            ],
            'replyTo' => [
                'name' => EMAIL_FROM_NAME,
                'email' => EMAIL_REPLY_TO
            ],
            'to' => [
                [
                    'email' => $to,
                    'name' => $toName
                ]
            ],
            'subject' => $subject,
            'htmlContent' => $finalHtml,
            'textContent' => $textContent ?? strip_tags($htmlContent)
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'api-key: ' . $this->apiKey
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 300) {
            return ['success' => true, 'response' => json_decode($response, true)];
        } else {
            error_log("Brevo API Error: " . $response . " | HTTP Code: " . $httpCode);
            return ['success' => false, 'error' => $response, 'http_code' => $httpCode];
        }
    }

    /**
     * Get email template by key
     */
    public function getTemplate($templateKey) {
        return $this->db->fetchOne(
            "SELECT * FROM email_templates WHERE template_key = ?",
            [$templateKey]
        );
    }

    /**
     * Update email template
     */
    public function updateTemplate($templateKey, $subject, $body) {
        return $this->db->update(
            'email_templates',
            ['subject' => $subject, 'body' => $body],
            'template_key = ?',
            [$templateKey]
        );
    }

    /**
     * Get all templates
     */
    public function getAllTemplates() {
        return $this->db->fetchAll("SELECT * FROM email_templates ORDER BY name");
    }

    /**
     * Parse template with variables
     */
    public function parseTemplate($template, $variables) {
        $subject = $template['subject'];
        $body = $template['body'];

        foreach ($variables as $key => $value) {
            $subject = str_replace('{{' . $key . '}}', $value, $subject);
            $body = str_replace('{{' . $key . '}}', $value, $body);
        }

        return [
            'subject' => $subject,
            'body' => $body
        ];
    }

    /**
     * Log sent email
     */
    public function logEmail($applicantId, $emailType, $subject, $body, $status = 'sent', $errorMessage = null) {
        $this->db->insert('email_log', [
            'applicant_id' => $applicantId,
            'email_type' => $emailType,
            'subject' => $subject,
            'body_preview' => substr($body, 0, 500),
            'status' => $status,
            'error_message' => $errorMessage
        ]);
    }

    /**
     * Get email log for applicant
     */
    public function getEmailLog($applicantId) {
        return $this->db->fetchAll(
            "SELECT * FROM email_log WHERE applicant_id = ? ORDER BY sent_at DESC",
            [$applicantId]
        );
    }

    /**
     * Check if email type already sent to applicant
     */
    public function hasBeenSent($applicantId, $emailType) {
        $result = $this->db->fetchOne(
            "SELECT COUNT(*) as count FROM email_log WHERE applicant_id = ? AND email_type = ? AND status = 'sent'",
            [$applicantId, $emailType]
        );
        return $result['count'] > 0;
    }

    /**
     * Send acknowledgement email
     */
    public function sendAcknowledgement($applicant) {
        $template = $this->getTemplate('acknowledgement');
        $firstName = explode(' ', $applicant['full_name'])[0];

        $parsed = $this->parseTemplate($template, [
            'first_name' => $firstName,
            'full_name' => $applicant['full_name']
        ]);

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $parsed['subject'],
            $parsed['body']
        );

        $this->logEmail(
            $applicant['id'],
            'acknowledgement',
            $parsed['subject'],
            $parsed['body'],
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send call invite email
     */
    public function sendCallInvite($applicant) {
        $template = $this->getTemplate('call_invite');
        $firstName = explode(' ', $applicant['full_name'])[0];

        // Create styled booking button
        $bookingButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 8px 0 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="https://cal.com/hr-on-call/associate-network" target="_blank" style="display: inline-block; padding: 12px 24px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Book a Call</a></td></tr></table>';

        $parsed = $this->parseTemplate($template, [
            'first_name' => $firstName,
            'full_name' => $applicant['full_name'],
            'booking_button' => $bookingButton
        ]);

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $parsed['subject'],
            $parsed['body']
        );

        $this->logEmail(
            $applicant['id'],
            'call_invite',
            $parsed['subject'],
            $parsed['body'],
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send approved email with agreement link
     */
    public function sendApproved($applicant, $agreementToken = null) {
        $template = $this->getTemplate('approved');
        $firstName = explode(' ', $applicant['full_name'])[0];

        $placeholders = [
            'first_name' => $firstName,
            'full_name' => $applicant['full_name']
        ];

        // Add agreement link if token provided
        if ($agreementToken) {
            $signingUrl = ATS_SITE_URL . '/sign/sign-agreement.php?token=' . $agreementToken;
            $agreementButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="' . $signingUrl . '" target="_blank" style="display: inline-block; padding: 14px 28px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Review & Sign Agreement</a></td></tr></table>';
            $placeholders['agreement_button'] = $agreementButton;
            $placeholders['signing_link'] = $signingUrl;
        } else {
            $placeholders['agreement_button'] = '';
            $placeholders['signing_link'] = '';
        }

        $parsed = $this->parseTemplate($template, $placeholders);

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $parsed['subject'],
            $parsed['body']
        );

        $this->logEmail(
            $applicant['id'],
            'approved',
            $parsed['subject'],
            $parsed['body'],
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send not suitable email
     */
    public function sendNotSuitable($applicant, $rejectionReason = '') {
        $template = $this->getTemplate('not_suitable');
        $firstName = explode(' ', $applicant['full_name'])[0];

        if (empty($rejectionReason)) {
            $rejectionReason = "the work we typically handle requires specific experience, and I want to make sure I'm matching consultants to work that plays to their strengths.";
        }

        $parsed = $this->parseTemplate($template, [
            'first_name' => $firstName,
            'full_name' => $applicant['full_name'],
            'rejection_reason' => $rejectionReason
        ]);

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $parsed['subject'],
            $parsed['body']
        );

        $this->logEmail(
            $applicant['id'],
            'not_suitable',
            $parsed['subject'],
            $parsed['body'],
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send withdrawn confirmation email
     */
    public function sendWithdrawn($applicant) {
        $template = $this->getTemplate('withdrawn');
        $firstName = explode(' ', $applicant['full_name'])[0];

        $parsed = $this->parseTemplate($template, [
            'first_name' => $firstName,
            'full_name' => $applicant['full_name']
        ]);

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $parsed['subject'],
            $parsed['body']
        );

        $this->logEmail(
            $applicant['id'],
            'withdrawn',
            $parsed['subject'],
            $parsed['body'],
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send admin notification of new application
     */
    public function sendAdminNotification($applicant) {
        $subject = "New Associate Application: " . $applicant['full_name'];

        $adminUrl = ATS_ADMIN_URL . "/applicant.php?id=" . $applicant['id'];
        $adminLink = '<a href="' . $adminUrl . '" style="color: #DB2777; text-decoration: none;">View Application</a>';

        $body = "<p>A new associate application has been submitted.</p>

<table style=\"margin: 16px 0; font-size: 15px; line-height: 1.8; color: #2D3748;\">
<tr><td style=\"padding-right: 16px;\"><strong>Name:</strong></td><td>" . $applicant['full_name'] . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Email:</strong></td><td>" . $applicant['email'] . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Location:</strong></td><td>" . $applicant['location'] . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>CIPD Level:</strong></td><td>" . Applicant::formatCipdLevel($applicant['cipd_level']) . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Primary Specialism:</strong></td><td>" . Applicant::formatSpecialism($applicant['primary_specialism']) . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Hourly Rate:</strong></td><td>£" . number_format($applicant['hourly_rate'], 2) . "</td></tr>
</table>

<p>{$adminLink}</p>";

        return $this->send(
            ADMIN_NOTIFICATION_EMAIL,
            'Grace Pariser',
            $subject,
            $body
        );
    }

    // ==========================================
    // AGREEMENT EMAIL METHODS
    // ==========================================

    /**
     * Send agreement link email
     */
    public function sendAgreementLink($applicant, $token) {
        $template = $this->getTemplate('agreement_link');
        $firstName = explode(' ', $applicant['full_name'])[0];

        // Create styled agreement button
        $signingUrl = ATS_SITE_URL . '/sign/sign-agreement.php?token=' . $token;
        $agreementButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 8px 0 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="' . $signingUrl . '" target="_blank" style="display: inline-block; padding: 12px 24px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Review & Sign Agreement</a></td></tr></table>';

        $parsed = $this->parseTemplate($template, [
            'first_name' => $firstName,
            'full_name' => $applicant['full_name'],
            'agreement_button' => $agreementButton,
            'signing_link' => $signingUrl
        ]);

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $parsed['subject'],
            $parsed['body']
        );

        $this->logEmail(
            $applicant['id'],
            'agreement_link',
            $parsed['subject'],
            $parsed['body'],
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send updated agreement email (when terms have been amended)
     */
    public function sendUpdatedAgreement($applicant, $token) {
        $firstName = explode(' ', $applicant['full_name'])[0];

        // Create styled agreement button
        $signingUrl = ATS_SITE_URL . '/sign/sign-agreement.php?token=' . $token;
        $agreementButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="' . $signingUrl . '" target="_blank" style="display: inline-block; padding: 14px 28px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Review & Sign Updated Agreement</a></td></tr></table>';

        $subject = 'Updated Agreement - HR On Call';

        $body = "<p>Dear {$firstName},</p>

<p>Following our discussion, I've made some amendments to the Associate Agreement terms.</p>

<p>Please review the updated agreement and sign electronically using the button below:</p>

{$agreementButton}

<p>This link will expire in 14 days.</p>

<p>If you have any questions about the changes, please don't hesitate to get in touch.</p>

<p>Best regards,<br>
Grace Pariser<br>
HR On Call Ltd</p>";

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $subject,
            $body
        );

        $this->logEmail(
            $applicant['id'],
            'updated_agreement',
            $subject,
            $body,
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send agreement signed confirmation to associate (with PDF attachment)
     */
    public function sendAgreementSigned($applicant, $pdfPath) {
        $firstName = explode(' ', $applicant['full_name'])[0];

        // Generate profile token and save it
        $profileToken = bin2hex(random_bytes(32));
        $this->db->update('applicants', [
            'profile_token' => $profileToken
        ], 'id = ?', [$applicant['id']]);

        // Create profile submission link and button
        $profileUrl = ATS_SITE_URL . '/profile-submission.php?token=' . $profileToken;
        $profileButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="' . $profileUrl . '" target="_blank" style="display: inline-block; padding: 14px 28px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Complete Your Profile</a></td></tr></table>';

        $subject = 'Agreement Signed - HR On Call';

        $body = "<p>Dear {$firstName},</p>

<p>Thank you for signing your Associate Agreement with HR On Call Ltd.</p>

<p>Your signed agreement is attached to this email for your records.</p>

<h3 style=\"color: #1A2E4A; margin: 28px 0 16px 0; font-size: 18px;\">Next Steps</h3>

<p><strong>1. Set Up Your Portal Account</strong><br>
You will receive a separate email shortly with instructions to set up your password for the Associate Portal, where you'll be able to view and respond to assignment opportunities.</p>

<p><strong>2. Complete Your Profile</strong><br>
Please take a few minutes to complete your profile for our website. This helps us showcase your expertise to potential clients.</p>

{$profileButton}

<p>If you have any questions, please don't hesitate to get in touch.</p>

<p>Best regards,<br>
Grace Pariser<br>
HR On Call Ltd</p>";

        $result = $this->sendWithAttachment(
            $applicant['email'],
            $applicant['full_name'],
            $subject,
            $body,
            $pdfPath
        );

        $this->logEmail(
            $applicant['id'],
            'agreement_signed',
            $subject,
            $body,
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send profile request email to associate
     */
    public function sendProfileRequest($applicant, $profileToken) {
        $firstName = explode(' ', $applicant['full_name'])[0];

        // Create profile submission link and button
        $profileUrl = ATS_SITE_URL . '/profile-submission.php?token=' . $profileToken;
        $profileButton = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: 16px 0;"><tr><td style="border-radius: 6px; background-color: #DB2777;"><a href="' . $profileUrl . '" target="_blank" style="display: inline-block; padding: 14px 28px; font-family: Arial, sans-serif; font-size: 14px; font-weight: 600; color: #ffffff; text-decoration: none; border-radius: 6px;">Submit Your Profile</a></td></tr></table>';

        $subject = 'Submit Your Profile - HR On Call';

        $body = "<p>Dear {$firstName},</p>

<p>We'd like to feature you on the HR On Call website. Please complete your profile by clicking the button below:</p>

{$profileButton}

<p>You'll be asked to provide:</p>
<ul style=\"margin: 0 0 16px 0; padding-left: 20px; font-size: 15px; line-height: 1.8; color: #2D3748;\">
<li>A professional headshot</li>
<li>Your name and qualifications</li>
<li>Your HR specialisms (up to 3)</li>
<li>A brief professional background</li>
<li>What you enjoy about HR work</li>
<li>Your location</li>
</ul>

<p>Keep your answers brief – we'll edit for consistency before publishing.</p>

<p>Best regards,<br>
Grace Pariser<br>
HR On Call</p>";

        $result = $this->send(
            $applicant['email'],
            $applicant['full_name'],
            $subject,
            $body
        );

        $this->logEmail(
            $applicant['id'],
            'profile_request',
            $subject,
            $body,
            $result['success'] ? 'sent' : 'failed',
            $result['success'] ? null : json_encode($result)
        );

        return $result;
    }

    /**
     * Send agreement signed notification to admin (with PDF attachment)
     */
    public function sendAgreementAdminNotification($applicant, $agreementFields, $pdfPath) {
        // Create clickable admin link
        $adminUrl = ATS_ADMIN_URL . '/applicant.php?id=' . $applicant['id'];
        $adminLink = '<a href="' . $adminUrl . '" style="color: #DB2777; text-decoration: none;">View in Admin</a>';

        $subject = 'Agreement Signed: ' . $applicant['full_name'];

        $body = "<p>An associate has signed their agreement.</p>

<table style=\"margin: 16px 0; font-size: 15px; line-height: 1.8; color: #2D3748;\">
<tr><td style=\"padding-right: 16px;\"><strong>Name:</strong></td><td>" . $applicant['full_name'] . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Business Name:</strong></td><td>" . ($agreementFields['business_name'] ?? 'N/A') . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Email:</strong></td><td>" . $applicant['email'] . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Location:</strong></td><td>" . $applicant['location'] . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Primary Specialism:</strong></td><td>" . Applicant::formatSpecialism($applicant['primary_specialism']) . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Hourly Rate:</strong></td><td>£" . number_format($applicant['hourly_rate'], 2) . "</td></tr>
<tr><td style=\"padding-right: 16px;\"><strong>Signed:</strong></td><td>" . date('j F Y \a\t H:i') . "</td></tr>
</table>

<p>{$adminLink}</p>

<p>The signed agreement PDF is attached.</p>";

        $result = $this->sendWithAttachment(
            ADMIN_NOTIFICATION_EMAIL,
            'Grace Pariser',
            $subject,
            $body,
            $pdfPath
        );

        return $result;
    }

    /**
     * Send email with attachment via Brevo API
     */
    public function sendWithAttachment($to, $toName, $subject, $htmlContent, $attachmentPath) {
        $url = 'https://api.brevo.com/v3/smtp/email';

        // Wrap content in styled template
        $finalHtml = $this->wrapInTemplate($htmlContent);

        // Prepare attachment
        $attachment = null;
        if (file_exists($attachmentPath)) {
            $attachmentContent = base64_encode(file_get_contents($attachmentPath));
            $attachmentName = basename($attachmentPath);
            $attachment = [
                [
                    'content' => $attachmentContent,
                    'name' => $attachmentName
                ]
            ];
        }

        $data = [
            'sender' => [
                'name' => EMAIL_FROM_NAME,
                'email' => EMAIL_FROM_ADDRESS
            ],
            'replyTo' => [
                'name' => EMAIL_FROM_NAME,
                'email' => EMAIL_REPLY_TO
            ],
            'to' => [
                [
                    'email' => $to,
                    'name' => $toName
                ]
            ],
            'subject' => $subject,
            'htmlContent' => $finalHtml,
            'textContent' => strip_tags($htmlContent)
        ];

        if ($attachment) {
            $data['attachment'] = $attachment;
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'api-key: ' . $this->apiKey
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 300) {
            return ['success' => true, 'response' => json_decode($response, true)];
        } else {
            error_log("Brevo API Error (with attachment): " . $response . " | HTTP Code: " . $httpCode);
            return ['success' => false, 'error' => $response, 'http_code' => $httpCode];
        }
    }
}
