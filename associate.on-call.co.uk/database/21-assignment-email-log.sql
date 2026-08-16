-- =============================================
-- Assignment Email Communication Log
-- Migration: Add email logging feature
-- Created: 2026-01-12
-- =============================================

CREATE TABLE IF NOT EXISTS `assignment_emails` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `assignment_id` INT UNSIGNED NOT NULL,
    `associate_id` INT UNSIGNED NOT NULL,

    -- Email metadata
    `email_direction` ENUM('sent', 'received') NOT NULL COMMENT 'Whether email was sent by associate or received from client',
    `email_type` ENUM('inquiry', 'update', 'issue', 'resolution', 'general') DEFAULT 'general' COMMENT 'Categorization for filtering',
    `email_datetime` DATETIME NOT NULL COMMENT 'When the email was sent/received',

    -- Email content
    `subject` VARCHAR(500) NOT NULL,
    `recipients` VARCHAR(1000) NOT NULL COMMENT 'Comma-separated email addresses (To/From field)',
    `cc_recipients` VARCHAR(1000) NULL COMMENT 'CC recipients if applicable',
    `body_summary` TEXT NOT NULL COMMENT 'Full email body or summary',

    -- Metadata
    `created_by` VARCHAR(100) NOT NULL COMMENT 'Name of person who logged this',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    -- Indexes for performance
    INDEX `idx_assignment_id` (`assignment_id`),
    INDEX `idx_associate_id` (`associate_id`),
    INDEX `idx_email_datetime` (`email_datetime`),
    INDEX `idx_email_direction` (`email_direction`),
    INDEX `idx_email_type` (`email_type`),
    INDEX `idx_created_at` (`created_at`),

    -- Foreign key constraints
    CONSTRAINT `fk_assignment_emails_assignment`
        FOREIGN KEY (`assignment_id`) REFERENCES `assignments`(`id`)
        ON DELETE CASCADE,
    CONSTRAINT `fk_assignment_emails_associate`
        FOREIGN KEY (`associate_id`) REFERENCES `associates`(`id`)
        ON DELETE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Verification query
SELECT
    COUNT(*) as table_exists,
    (SELECT COUNT(*) FROM information_schema.COLUMNS
     WHERE TABLE_SCHEMA = DATABASE()
     AND TABLE_NAME = 'assignment_emails') as column_count
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = DATABASE()
AND TABLE_NAME = 'assignment_emails';
