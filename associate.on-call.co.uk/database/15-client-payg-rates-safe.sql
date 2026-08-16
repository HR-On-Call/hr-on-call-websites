-- =============================================
-- Client Pay-As-You-Go Rates (Safe Version)
-- Hourly rates for clients without retainer packages
-- =============================================

-- Add admin_rate if it doesn't exist
SET @col_exists = 0;
SELECT COUNT(*) INTO @col_exists
FROM information_schema.COLUMNS
WHERE TABLE_SCHEMA = DATABASE()
AND TABLE_NAME = 'clients'
AND COLUMN_NAME = 'admin_rate';

SET @sql = IF(@col_exists = 0,
    'ALTER TABLE `clients` ADD COLUMN `admin_rate` DECIMAL(10,2) NULL DEFAULT NULL AFTER `billing_contact_email`',
    'SELECT "Column admin_rate already exists" AS message');
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Add advisory_rate if it doesn't exist
SET @col_exists = 0;
SELECT COUNT(*) INTO @col_exists
FROM information_schema.COLUMNS
WHERE TABLE_SCHEMA = DATABASE()
AND TABLE_NAME = 'clients'
AND COLUMN_NAME = 'advisory_rate';

SET @sql = IF(@col_exists = 0,
    'ALTER TABLE `clients` ADD COLUMN `advisory_rate` DECIMAL(10,2) NULL DEFAULT NULL',
    'SELECT "Column advisory_rate already exists" AS message');
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Add specialist_rate if it doesn't exist
SET @col_exists = 0;
SELECT COUNT(*) INTO @col_exists
FROM information_schema.COLUMNS
WHERE TABLE_SCHEMA = DATABASE()
AND TABLE_NAME = 'clients'
AND COLUMN_NAME = 'specialist_rate';

SET @sql = IF(@col_exists = 0,
    'ALTER TABLE `clients` ADD COLUMN `specialist_rate` DECIMAL(10,2) NULL DEFAULT NULL',
    'SELECT "Column specialist_rate already exists" AS message');
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
