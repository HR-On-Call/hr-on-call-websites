-- =============================================
-- Client Portals Table for Reseller Program
-- Run each statement ONE AT A TIME in phpMyAdmin
-- =============================================

-- STEP 1: Add is_reseller flag to clients table
-- (If this fails with "Duplicate column", that's OK - skip to step 2)
ALTER TABLE `clients`
ADD COLUMN `is_reseller` TINYINT(1) DEFAULT 0 AFTER `is_website_client`;

-- STEP 2: Create client_portals table
CREATE TABLE IF NOT EXISTS `client_portals` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `client_id` INT NOT NULL,
    `portal_name` VARCHAR(255) NOT NULL,
    `end_client_name` VARCHAR(255) NULL,
    `subdomain` VARCHAR(100) NULL,
    `consultant` VARCHAR(255) NULL,
    `setup_date` DATE NULL,
    `payment_day` TINYINT NULL,
    `status` ENUM('setup', 'active', 'cancelled') NOT NULL DEFAULT 'setup',
    `retainer_type` ENUM('none', 'essentials', 'partnership', 'full_support') NOT NULL DEFAULT 'none',
    `notes` TEXT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY `idx_client_id` (`client_id`),
    KEY `idx_status` (`status`),
    KEY `idx_subdomain` (`subdomain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- STEP 3: Add foreign key constraint
-- (If this fails with "Duplicate foreign key", that's OK - you're done)
ALTER TABLE `client_portals`
ADD CONSTRAINT `fk_client_portals_client_id`
FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`) ON DELETE CASCADE;
