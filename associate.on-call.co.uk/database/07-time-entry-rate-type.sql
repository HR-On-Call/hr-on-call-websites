-- =============================================
-- Add Rate Type to Time Entries
-- Allows specifying work type for billing
-- =============================================

-- Add rate_type column to time_entries table
ALTER TABLE `time_entries`
ADD COLUMN `rate_type` ENUM('admin', 'advisory', 'specialist', 'flat_fee') NULL AFTER `work_type`;

-- Note: NULL means not specified/unknown, which is fine for existing entries
