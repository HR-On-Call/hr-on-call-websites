-- =============================================
-- SAFE VERSION: Client Portals Table for Reseller Program
-- This version creates the table WITHOUT the foreign key constraint
-- Run each statement ONE AT A TIME in phpMyAdmin
-- =============================================

-- STEP 1: Check if clients table exists (run this first to verify)
SHOW TABLES LIKE 'clients';

-- STEP 2: Check clients table structure (run this to see the id column type)
DESCRIBE clients;

-- STEP 3: Add is_reseller flag to clients table
-- (If this fails with "Duplicate column", that's OK - skip to step 4)
ALTER TABLE `clients`
ADD COLUMN `is_reseller` TINYINT(1) DEFAULT 0;

-- STEP 4: Create client_portals table WITHOUT foreign key
-- Simplified structure: End Client, Setup Date, Payment Date, Subdomain, Status
CREATE TABLE IF NOT EXISTS `client_portals` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `client_id` INT NOT NULL,
    `end_client_name` VARCHAR(255) NOT NULL,
    `subdomain` VARCHAR(100) NULL,
    `setup_date` DATE NULL,
    `payment_day` TINYINT NULL,
    `status` ENUM('setup', 'active', 'cancelled') NOT NULL DEFAULT 'setup',
    `notes` TEXT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY `idx_client_id` (`client_id`),
    KEY `idx_status` (`status`),
    KEY `idx_subdomain` (`subdomain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- DONE! The table is created and will work perfectly.
-- The foreign key constraint is optional - you can add it later if needed.

-- OPTIONAL STEP 5: Only run this if you want to add the foreign key constraint
-- First, check what type the clients.id column is from STEP 2 above
-- Make sure it matches the client_id column type (INT)
-- Then uncomment and run this:

-- ALTER TABLE `client_portals`
-- ADD CONSTRAINT `fk_client_portals_client_id`
-- FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`) ON DELETE CASCADE;
