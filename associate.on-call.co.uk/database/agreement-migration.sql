-- Agreement Signing System Migration
-- Run this SQL in phpMyAdmin to add agreement functionality

-- Add columns to existing applicants table
ALTER TABLE applicants ADD COLUMN agreement_token VARCHAR(64) NULL;
ALTER TABLE applicants ADD COLUMN agreement_token_expires DATETIME NULL;
ALTER TABLE applicants ADD COLUMN agreement_sent_at DATETIME NULL;
ALTER TABLE applicants ADD COLUMN agreement_signed_at DATETIME NULL;
ALTER TABLE applicants ADD COLUMN agreement_pdf_path VARCHAR(500) NULL;
ALTER TABLE applicants ADD COLUMN agreement_ip_address VARCHAR(45) NULL;
ALTER TABLE applicants ADD COLUMN agreement_user_agent TEXT NULL;

-- Add index for token lookups
ALTER TABLE applicants ADD INDEX idx_agreement_token (agreement_token);

-- Update status ENUM to include agreement statuses
ALTER TABLE applicants MODIFY COLUMN status ENUM('new', 'reviewing', 'call_scheduled', 'approved', 'agreement_sent', 'agreement_signed', 'not_suitable', 'withdrawn') NOT NULL DEFAULT 'new';

-- Create agreement_fields table for additional fields collected during signing
CREATE TABLE IF NOT EXISTS `agreement_fields` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `applicant_id` INT NOT NULL,
    `field_name` VARCHAR(100) NOT NULL,
    `field_value` TEXT,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`applicant_id`) REFERENCES `applicants`(`id`) ON DELETE CASCADE,
    INDEX `idx_applicant_id` (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Add agreement email templates
INSERT INTO `email_templates` (`template_key`, `name`, `subject`, `body`) VALUES
('agreement_link', 'Agreement Link Email', 'Your HR On Call Associate Agreement', 'Hi {{first_name}},

Following our conversation, I''m pleased to invite you to join the HR On Call associate network.

Please click the link below to review and sign your Associate Agreement:

{{agreement_button}}

This link will expire in 14 days. If you have any questions about the agreement before signing, just reply to this email.

Once signed, you''ll receive a copy for your records and I''ll be in touch when suitable work becomes available.

Kind regards,

Grace Pariser
HR On Call Ltd'),

('agreement_signed', 'Agreement Signed Confirmation', 'Associate Agreement signed – HR On Call', 'Hi {{first_name}},

Thank you for signing your Associate Agreement with HR On Call Ltd.

Please find a copy of the signed agreement attached for your records.

You''re now part of our associate network. I''ll be in touch when suitable work comes up that matches your experience. Remember, there''s no obligation to accept any work offered – it''s simply about having trusted consultants I can call on when needed.

If you have any questions, just get in touch.

Welcome aboard!

Kind regards,

Grace Pariser
HR On Call Ltd'),

('agreement_admin_notification', 'Agreement Signed Admin Notification', 'Agreement signed: {{full_name}}', '{{full_name}} has signed their Associate Agreement.

Details:
- Name: {{full_name}}
- Business: {{business_name}}
- Email: {{email}}
- Location: {{location}}
- Primary specialism: {{specialism}}
- Hourly rate: £{{hourly_rate}}
- Signed: {{signed_date}}

View in ATS: {{admin_link}}

Signed agreement attached.');
