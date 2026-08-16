<?php
/**
 * Applicant Model Class
 */

class Applicant {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    /**
     * Create a new applicant
     */
    public function create($data) {
        $applicantId = $this->db->insert('applicants', $data);
        $this->logActivity($applicantId, 'application_submitted', [
            'email' => $data['email'],
            'name' => $data['full_name']
        ]);
        return $applicantId;
    }

    /**
     * Get applicant by ID
     */
    public function getById($id) {
        return $this->db->fetchOne(
            "SELECT * FROM applicants WHERE id = ?",
            [$id]
        );
    }

    /**
     * Get applicant by email
     */
    public function getByEmail($email) {
        return $this->db->fetchOne(
            "SELECT * FROM applicants WHERE email = ?",
            [$email]
        );
    }

    /**
     * Get all applicants with optional filters
     */
    public function getAll($filters = [], $orderBy = 'created_at DESC', $limit = null, $offset = null) {
        $sql = "SELECT * FROM applicants WHERE 1=1";
        $params = [];

        if (!empty($filters['status'])) {
            $sql .= " AND status = ?";
            $params[] = $filters['status'];
        }

        if (!empty($filters['primary_specialism'])) {
            $sql .= " AND primary_specialism = ?";
            $params[] = $filters['primary_specialism'];
        }

        if (!empty($filters['cipd_level'])) {
            $sql .= " AND cipd_level = ?";
            $params[] = $filters['cipd_level'];
        }

        if (!empty($filters['search'])) {
            $sql .= " AND (full_name LIKE ? OR email LIKE ? OR location LIKE ?)";
            $searchTerm = '%' . $filters['search'] . '%';
            $params[] = $searchTerm;
            $params[] = $searchTerm;
            $params[] = $searchTerm;
        }

        if (!empty($filters['hourly_rate_min'])) {
            $sql .= " AND hourly_rate >= ?";
            $params[] = $filters['hourly_rate_min'];
        }

        if (!empty($filters['hourly_rate_max'])) {
            $sql .= " AND hourly_rate <= ?";
            $params[] = $filters['hourly_rate_max'];
        }

        $sql .= " ORDER BY {$orderBy}";

        if ($limit !== null) {
            $sql .= " LIMIT ?";
            $params[] = (int)$limit;
            if ($offset !== null) {
                $sql .= " OFFSET ?";
                $params[] = (int)$offset;
            }
        }

        return $this->db->fetchAll($sql, $params);
    }

    /**
     * Count applicants with optional filters
     */
    public function count($filters = []) {
        $sql = "SELECT COUNT(*) as count FROM applicants WHERE 1=1";
        $params = [];

        if (!empty($filters['status'])) {
            $sql .= " AND status = ?";
            $params[] = $filters['status'];
        }

        if (!empty($filters['primary_specialism'])) {
            $sql .= " AND primary_specialism = ?";
            $params[] = $filters['primary_specialism'];
        }

        $result = $this->db->fetchOne($sql, $params);
        return $result['count'];
    }

    /**
     * Get counts by status
     */
    public function getStatusCounts() {
        $results = $this->db->fetchAll(
            "SELECT status, COUNT(*) as count FROM applicants GROUP BY status"
        );
        $counts = [
            'total' => 0,
            'new' => 0,
            'reviewing' => 0,
            'call_scheduled' => 0,
            'approved' => 0,
            'agreement_sent' => 0,
            'agreement_signed' => 0,
            'not_suitable' => 0,
            'withdrawn' => 0
        ];
        foreach ($results as $row) {
            $counts[$row['status']] = (int)$row['count'];
            $counts['total'] += (int)$row['count'];
        }
        return $counts;
    }

    /**
     * Get this month's application count
     */
    public function getThisMonthCount() {
        $result = $this->db->fetchOne(
            "SELECT COUNT(*) as count FROM applicants WHERE MONTH(created_at) = MONTH(CURRENT_DATE()) AND YEAR(created_at) = YEAR(CURRENT_DATE())"
        );
        return $result['count'];
    }

    /**
     * Update applicant status
     */
    public function updateStatus($id, $newStatus, $additionalData = []) {
        $applicant = $this->getById($id);
        if (!$applicant) {
            return false;
        }

        $oldStatus = $applicant['status'];
        $data = array_merge(['status' => $newStatus], $additionalData);

        // Set approved_date if moving to approved status
        if ($newStatus === 'approved' && $oldStatus !== 'approved') {
            $data['approved_date'] = date('Y-m-d H:i:s');
        }

        $this->db->update('applicants', $data, 'id = ?', [$id]);

        $this->logActivity($id, 'status_changed', [
            'old_status' => $oldStatus,
            'new_status' => $newStatus
        ]);

        return true;
    }

    /**
     * Update applicant notes
     */
    public function updateNotes($id, $notes) {
        $this->db->update('applicants', ['notes' => $notes], 'id = ?', [$id]);
        $this->logActivity($id, 'note_updated', ['notes' => substr($notes, 0, 100)]);
        return true;
    }

    /**
     * Schedule a call
     */
    public function scheduleCall($id, $callDate) {
        $this->db->update('applicants', [
            'status' => 'call_scheduled',
            'call_scheduled_date' => $callDate
        ], 'id = ?', [$id]);

        $this->logActivity($id, 'call_scheduled', ['call_date' => $callDate]);
        return true;
    }

    /**
     * Log activity
     */
    public function logActivity($applicantId, $action, $details = []) {
        $this->db->insert('activity_log', [
            'applicant_id' => $applicantId,
            'action' => $action,
            'details' => json_encode($details)
        ]);
    }

    /**
     * Get activity log for an applicant
     */
    public function getActivityLog($applicantId) {
        return $this->db->fetchAll(
            "SELECT * FROM activity_log WHERE applicant_id = ? ORDER BY created_at DESC",
            [$applicantId]
        );
    }

    /**
     * Get recent applicants
     */
    public function getRecent($limit = 10) {
        return $this->db->fetchAll(
            "SELECT * FROM applicants ORDER BY created_at DESC LIMIT ?",
            [$limit]
        );
    }

    /**
     * Get unique values for filters
     */
    public function getUniqueSpecialisms() {
        return $this->db->fetchAll(
            "SELECT DISTINCT primary_specialism FROM applicants ORDER BY primary_specialism"
        );
    }

    public function getUniqueCipdLevels() {
        return $this->db->fetchAll(
            "SELECT DISTINCT cipd_level FROM applicants ORDER BY cipd_level"
        );
    }

    /**
     * Helper to get formatted specialism name
     */
    public static function formatSpecialism($key) {
        $specialisms = [
            'employee_relations' => 'Employee Relations',
            'workplace_investigations' => 'Workplace Investigations',
            'employment_law' => 'Employment Law',
            'settlement_agreements' => 'Settlement Agreements',
            'general_hr_advisory' => 'General HR Advisory',
            'hr_administration' => 'HR Administration',
            'talent_recruitment' => 'Talent & Recruitment',
            'hris_systems' => 'HRIS & Systems',
            'learning_development' => 'Learning & Development',
            'reward_benefits' => 'Reward & Benefits',
            'other' => 'Other'
        ];
        return $specialisms[$key] ?? $key;
    }

    /**
     * Helper to get formatted CIPD level
     */
    public static function formatCipdLevel($key) {
        $levels = [
            'level_3' => 'Level 3',
            'level_5' => 'Level 5',
            'level_7' => 'Level 7',
            'other' => 'Other qualification',
            'none' => 'Not CIPD qualified'
        ];
        return $levels[$key] ?? $key;
    }

    /**
     * Helper to get formatted status
     */
    public static function formatStatus($status) {
        $statuses = [
            'new' => 'New',
            'reviewing' => 'Reviewing',
            'call_scheduled' => 'Call Scheduled',
            'approved' => 'Approved',
            'agreement_sent' => 'Agreement Sent',
            'agreement_signed' => 'Agreement Signed',
            'not_suitable' => 'Not Suitable',
            'withdrawn' => 'Withdrawn'
        ];
        return $statuses[$status] ?? $status;
    }

    /**
     * Helper to get status badge class
     */
    public static function getStatusClass($status) {
        $classes = [
            'new' => 'badge-new',
            'reviewing' => 'badge-reviewing',
            'call_scheduled' => 'badge-scheduled',
            'approved' => 'badge-approved',
            'agreement_sent' => 'badge-agreement-sent',
            'agreement_signed' => 'badge-agreement-signed',
            'not_suitable' => 'badge-rejected',
            'withdrawn' => 'badge-withdrawn'
        ];
        return $classes[$status] ?? 'badge-default';
    }

    // ==========================================
    // AGREEMENT SIGNING METHODS
    // ==========================================

    /**
     * Generate a unique agreement token
     */
    public function generateAgreementToken($applicantId) {
        $token = bin2hex(random_bytes(32)); // 64 character hex string
        $expires = date('Y-m-d H:i:s', strtotime('+14 days'));

        $this->db->update('applicants', [
            'agreement_token' => $token,
            'agreement_token_expires' => $expires,
            'agreement_sent_at' => date('Y-m-d H:i:s'),
            'status' => 'agreement_sent'
        ], 'id = ?', [$applicantId]);

        $this->logActivity($applicantId, 'agreement_sent', [
            'token_expires' => $expires
        ]);

        return $token;
    }

    /**
     * Get applicant by agreement token
     */
    public function getByAgreementToken($token) {
        return $this->db->fetchOne(
            "SELECT * FROM applicants WHERE agreement_token = ?",
            [$token]
        );
    }

    /**
     * Validate agreement token
     * Returns: ['valid' => bool, 'error' => string|null, 'applicant' => array|null]
     */
    public function validateAgreementToken($token) {
        if (empty($token) || strlen($token) !== 64) {
            return ['valid' => false, 'error' => 'invalid', 'applicant' => null];
        }

        $applicant = $this->getByAgreementToken($token);

        if (!$applicant) {
            return ['valid' => false, 'error' => 'invalid', 'applicant' => null];
        }

        if ($applicant['agreement_signed_at'] !== null) {
            return ['valid' => false, 'error' => 'already_signed', 'applicant' => $applicant];
        }

        if (strtotime($applicant['agreement_token_expires']) < time()) {
            return ['valid' => false, 'error' => 'expired', 'applicant' => $applicant];
        }

        return ['valid' => true, 'error' => null, 'applicant' => $applicant];
    }

    /**
     * Mark agreement as signed
     */
    public function markAgreementSigned($applicantId, $pdfPath, $ipAddress, $userAgent) {
        $this->db->update('applicants', [
            'status' => 'agreement_signed',
            'agreement_signed_at' => date('Y-m-d H:i:s'),
            'agreement_pdf_path' => $pdfPath,
            'agreement_ip_address' => $ipAddress,
            'agreement_user_agent' => $userAgent,
            'agreement_token' => null // Invalidate token
        ], 'id = ?', [$applicantId]);

        $this->logActivity($applicantId, 'agreement_signed', [
            'ip_address' => $ipAddress,
            'pdf_path' => $pdfPath
        ]);

        return true;
    }

    /**
     * Save additional fields collected during signing
     */
    public function saveAgreementFields($applicantId, $fields) {
        foreach ($fields as $fieldName => $fieldValue) {
            $this->db->insert('agreement_fields', [
                'applicant_id' => $applicantId,
                'field_name' => $fieldName,
                'field_value' => $fieldValue
            ]);
        }
        return true;
    }

    /**
     * Get agreement fields for an applicant
     */
    public function getAgreementFields($applicantId) {
        $results = $this->db->fetchAll(
            "SELECT field_name, field_value FROM agreement_fields WHERE applicant_id = ?",
            [$applicantId]
        );

        $fields = [];
        foreach ($results as $row) {
            $fields[$row['field_name']] = $row['field_value'];
        }
        return $fields;
    }

    /**
     * Resend agreement (generates new token)
     */
    public function resendAgreement($applicantId) {
        return $this->generateAgreementToken($applicantId);
    }

    /**
     * Delete an applicant and all related data
     */
    public function delete($id) {
        $applicant = $this->getById($id);
        if (!$applicant) {
            return false;
        }

        // Delete CV file if exists
        if (!empty($applicant['cv_path']) && file_exists($applicant['cv_path'])) {
            unlink($applicant['cv_path']);
        }

        // Delete agreement PDF if exists
        if (!empty($applicant['agreement_pdf_path']) && file_exists($applicant['agreement_pdf_path'])) {
            unlink($applicant['agreement_pdf_path']);
        }

        // Delete related records
        $this->db->delete('activity_log', 'applicant_id = ?', [$id]);
        $this->db->delete('email_log', 'applicant_id = ?', [$id]);
        $this->db->delete('agreement_fields', 'applicant_id = ?', [$id]);

        // Delete the applicant
        $this->db->delete('applicants', 'id = ?', [$id]);

        return true;
    }
}
