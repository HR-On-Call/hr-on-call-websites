-- HR On Call ATS Database Schema
-- Run this SQL in phpMyAdmin to create the required tables

-- Create applicants table
CREATE TABLE IF NOT EXISTS `applicants` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `status` ENUM('new', 'reviewing', 'call_scheduled', 'approved', 'not_suitable', 'withdrawn') NOT NULL DEFAULT 'new',
    `full_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(50) NOT NULL,
    `location` VARCHAR(255) NOT NULL,
    `linkedin_url` VARCHAR(500) NULL,
    `website_url` VARCHAR(500) NULL,
    `cipd_level` VARCHAR(50) NOT NULL,
    `years_experience` VARCHAR(20) NOT NULL,
    `work_situation` VARCHAR(100) NOT NULL,
    `primary_specialism` VARCHAR(100) NOT NULL,
    `secondary_specialisms` TEXT NULL COMMENT 'JSON array of selected specialisms',
    `experience_summary` TEXT NOT NULL,
    `has_pi_insurance` VARCHAR(50) NOT NULL,
    `referral_source` VARCHAR(100) NULL,
    `hourly_rate` DECIMAL(10,2) NOT NULL,
    `cv_filename` VARCHAR(255) NULL,
    `cv_path` VARCHAR(500) NULL,
    `self_employed_confirmed` TINYINT(1) NOT NULL DEFAULT 0,
    `consent_confirmed` TINYINT(1) NOT NULL DEFAULT 0,
    `notes` TEXT NULL COMMENT 'Admin notes',
    `call_scheduled_date` DATETIME NULL,
    `approved_date` DATETIME NULL,
    INDEX `idx_status` (`status`),
    INDEX `idx_created_at` (`created_at`),
    INDEX `idx_primary_specialism` (`primary_specialism`),
    INDEX `idx_cipd_level` (`cipd_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create email log table
CREATE TABLE IF NOT EXISTS `email_log` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `applicant_id` INT NOT NULL,
    `email_type` VARCHAR(50) NOT NULL COMMENT 'e.g. acknowledgement, call_invite, approved, not_suitable',
    `sent_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `subject` VARCHAR(255) NOT NULL,
    `body_preview` TEXT NULL COMMENT 'First 500 chars of email body',
    `status` ENUM('sent', 'failed') NOT NULL DEFAULT 'sent',
    `error_message` TEXT NULL,
    FOREIGN KEY (`applicant_id`) REFERENCES `applicants`(`id`) ON DELETE CASCADE,
    INDEX `idx_applicant_id` (`applicant_id`),
    INDEX `idx_email_type` (`email_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create activity log table
CREATE TABLE IF NOT EXISTS `activity_log` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `applicant_id` INT NOT NULL,
    `action` VARCHAR(100) NOT NULL COMMENT 'e.g. status_changed, note_added, email_sent',
    `details` TEXT NULL COMMENT 'JSON with before/after or additional info',
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`applicant_id`) REFERENCES `applicants`(`id`) ON DELETE CASCADE,
    INDEX `idx_applicant_id` (`applicant_id`),
    INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create admin users table
CREATE TABLE IF NOT EXISTS `admin_users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password_hash` VARCHAR(255) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `last_login` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default admin user (password: changeme123 - CHANGE THIS IMMEDIATELY)
-- Password hash generated with password_hash('changeme123', PASSWORD_DEFAULT)
INSERT INTO `admin_users` (`username`, `password_hash`, `name`, `email`) VALUES
('grace', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Grace Pariser', 'grace@on-call.co.uk');

-- Create email templates table
CREATE TABLE IF NOT EXISTS `email_templates` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `template_key` VARCHAR(50) NOT NULL UNIQUE,
    `name` VARCHAR(100) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `body` TEXT NOT NULL,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default email templates
INSERT INTO `email_templates` (`template_key`, `name`, `subject`, `body`) VALUES
('acknowledgement', 'Acknowledgement Email', 'Thanks for registering your interest – HR On Call', 'Hi {{first_name}},

Thank you for registering your interest in joining the HR On Call associate network.

We''ve received your details and will review your application shortly. If your experience looks like a good fit for the type of work we handle, we''ll be in touch to arrange an initial conversation.

In the meantime, if you have any questions, just reply to this email.

Kind regards,

Grace Pariser
HR On Call Ltd'),

('call_invite', 'Call Invite Email', 'Let''s have a chat – HR On Call', 'Hi {{first_name}},

Thanks again for your interest in joining our associate network. I''ve had a look at your details and I think there could be a good fit.

I''d love to arrange a quick call to learn more about your experience and tell you a bit more about how we work. It''s informal – just a chance to see if we''d work well together.

{{booking_button}}

Looking forward to speaking with you.

Kind regards,

Grace Pariser
HR On Call Ltd'),

('approved', 'Approved Email', 'Welcome to the HR On Call network', 'Hi {{first_name}},

Great news – I''m pleased to confirm you''ve been approved to join the HR On Call associate network.

Here''s what happens next:

1. I''ll send over our Associate Agreement for you to review and sign
2. I''ll add you to our associate contact list
3. When suitable work comes up that matches your experience, I''ll reach out to see if you''re available

There''s no obligation to accept any work offered, and no minimum commitment. It''s simply about having a network of trusted consultants I can call on when needed.

If you have any questions, just give me a shout.

Welcome aboard!

Kind regards,

Grace Pariser
HR On Call Ltd'),

('not_suitable', 'Not Suitable Email', 'Your HR On Call application', 'Hi {{first_name}},

Thank you for your interest in joining the HR On Call associate network.

After reviewing your details, I don''t think there''s a strong fit at the moment – {{rejection_reason}}

This isn''t a reflection on your abilities – it''s simply about finding the right match. If your circumstances change or you gain additional experience in the relevant areas, please do get back in touch.

I wish you all the best with your consultancy work.

Kind regards,

Grace Pariser
HR On Call Ltd'),

('withdrawn', 'Withdrawn Confirmation', 'Application withdrawn – HR On Call', 'Hi {{first_name}},

I''m confirming that your application to join the HR On Call associate network has been withdrawn as requested.

If you change your mind in future, you''re welcome to reapply.

Kind regards,

Grace Pariser
HR On Call Ltd');
