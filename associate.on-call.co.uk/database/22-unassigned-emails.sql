-- =============================================
-- Add Support for Unassigned Emails
-- Migration: Allow emails to be stored before assignment
-- Created: 2026-01-12
-- =============================================

-- Make assignment_id and associate_id nullable (for unassigned emails)
ALTER TABLE `assignment_emails`
    MODIFY `assignment_id` INT UNSIGNED NULL,
    MODIFY `associate_id` INT UNSIGNED NULL,
    MODIFY `email_direction` ENUM('sent', 'received') NULL;

-- Add columns for unassigned email tracking
ALTER TABLE `assignment_emails`
    ADD COLUMN `raw_email_from` VARCHAR(255) NULL COMMENT 'Original From address from email' AFTER `body_summary`,
    ADD COLUMN `is_assigned` TINYINT(1) DEFAULT 0 COMMENT 'Whether email has been assigned to assignment' AFTER `raw_email_from`,
    ADD COLUMN `assigned_at` TIMESTAMP NULL COMMENT 'When email was assigned' AFTER `is_assigned`,
    ADD COLUMN `assigned_by` VARCHAR(100) NULL COMMENT 'Who assigned the email' AFTER `assigned_at`;

-- Add index for unassigned email queries
ALTER TABLE `assignment_emails`
    ADD INDEX `idx_is_assigned` (`is_assigned`),
    ADD INDEX `idx_raw_email_from` (`raw_email_from`);

-- Update existing emails to be marked as assigned
UPDATE `assignment_emails`
SET `is_assigned` = 1
WHERE `assignment_id` IS NOT NULL;
