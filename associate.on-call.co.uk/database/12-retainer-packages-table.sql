-- =============================================
-- Custom Retainer Packages Table
-- Allows creating and managing custom retainer packages
-- =============================================

CREATE TABLE IF NOT EXISTS `retainer_packages` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `monthly_fee` DECIMAL(10,2) NOT NULL,
    `included_hours` DECIMAL(5,2) NOT NULL,
    `max_banked_hours` DECIMAL(5,2) NOT NULL,
    `admin_rate` DECIMAL(10,2) NOT NULL,
    `advisory_rate` DECIMAL(10,2) NOT NULL,
    `specialist_rate` DECIMAL(10,2) NOT NULL,
    `is_custom` TINYINT(1) DEFAULT 1,
    `is_active` TINYINT(1) DEFAULT 1,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY `idx_active` (`is_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Update clients table to reference custom packages
ALTER TABLE `clients`
ADD COLUMN `retainer_package_id` INT NULL AFTER `retainer_type`,
ADD KEY `idx_retainer_package` (`retainer_package_id`);

-- Note: retainer_type will still hold preset package names like 'full_support', 'kickstart', etc.
-- retainer_package_id will reference custom packages from retainer_packages table
-- If retainer_package_id is set, it overrides retainer_type
