-- Add custom_agreement_text column to applicants table
-- Run this in phpMyAdmin

ALTER TABLE applicants
ADD COLUMN custom_agreement_text LONGTEXT DEFAULT NULL AFTER notes;
