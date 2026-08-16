-- =============================================
-- Client Portals Table for Reseller Program
-- Allows clients to have multiple portal instances
-- =============================================

-- First, add is_reseller flag to clients table
ALTER TABLE `clients`
ADD COLUMN IF NOT EXISTS `is_reseller` TINYINT(1) DEFAULT 0 AFTER `is_website_client`;

-- Create client_portals table
CREATE TABLE IF NOT EXISTS `client_portals` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `client_id` INT NOT NULL,
    `portal_name` VARCHAR(255) NOT NULL COMMENT 'Name of this portal instance',
    `end_client_name` VARCHAR(255) NULL COMMENT 'End client/reseller client name',
    `subdomain` VARCHAR(100) NULL COMMENT 'Portal subdomain',
    `consultant` VARCHAR(255) NULL COMMENT 'Consultant managing this portal',
    `setup_date` DATE NULL,
    `payment_day` TINYINT NULL COMMENT 'Day of month for billing (1-28)',
    `status` ENUM('setup', 'active', 'cancelled') NOT NULL DEFAULT 'setup',
    `retainer_type` ENUM('none', 'essentials', 'partnership', 'full_support') NOT NULL DEFAULT 'none',
    `notes` TEXT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_client_id` (`client_id`),
    INDEX `idx_status` (`status`),
    INDEX `idx_subdomain` (`subdomain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Add foreign key constraint separately (in case table already exists)
-- Note: If you get an error here, the constraint may already exist - you can ignore it
ALTER TABLE `client_portals`
ADD CONSTRAINT `fk_client_portals_client_id`
FOREIGN KEY (`client_id`) REFERENCES `clients`(`id`) ON DELETE CASCADE;

-- Note: Existing handbook portal data in clients table will remain for backward compatibility
-- New portal instances should be added to client_portals table
