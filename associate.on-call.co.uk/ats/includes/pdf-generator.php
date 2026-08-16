<?php
/**
 * Agreement PDF Generator
 * Uses Dompdf for proper PDF generation
 */

// Try to load Dompdf
$autoloadPath = dirname(__DIR__) . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

class AgreementPdfGenerator {

    private $agreementsDir;
    private $useDompdf = false;

    public function __construct() {
        $this->agreementsDir = dirname(__DIR__) . '/agreements/';

        // Create directory if it doesn't exist
        if (!file_exists($this->agreementsDir)) {
            mkdir($this->agreementsDir, 0755, true);
        }

        // Check if Dompdf is available
        $this->useDompdf = class_exists('Dompdf\Dompdf');
    }

    /**
     * Generate the agreement document
     */
    public function generate($data) {
        try {
            // Generate filename
            $nameParts = explode(' ', $data['applicant']['full_name']);
            $surname = preg_replace('/[^a-z]/i', '', end($nameParts) ?? 'unknown');
            $baseFilename = 'associate-agreement-' . $data['applicant']['id'] . '-' . strtolower($surname) . '-' . date('Ymd');

            // Get agreement text - use custom text if set, otherwise use template
            if (!empty($data['applicant']['custom_agreement_text'])) {
                $agreementText = $data['applicant']['custom_agreement_text'];
            } else {
                $agreementText = include dirname(__DIR__) . '/templates/agreement-text.php';
            }

            if ($this->useDompdf) {
                // Build HTML for PDF (no print button)
                $html = $this->buildHtml($data, $agreementText, true);
                // Generate proper PDF with Dompdf
                $filename = $baseFilename . '.pdf';
                $filepath = $this->agreementsDir . $filename;

                $dompdf = new \Dompdf\Dompdf([
                    'isRemoteEnabled' => true,
                    'defaultFont' => 'sans-serif'
                ]);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();

                file_put_contents($filepath, $dompdf->output());

                return [
                    'success' => true,
                    'path' => $filepath,
                    'filename' => $filename,
                    'type' => 'pdf'
                ];
            } else {
                // Fallback to HTML (include print button)
                $html = $this->buildHtml($data, $agreementText, false);
                $filename = $baseFilename . '.html';
                $filepath = $this->agreementsDir . $filename;

                file_put_contents($filepath, $html);

                return [
                    'success' => true,
                    'path' => $filepath,
                    'filename' => $filename,
                    'type' => 'html',
                    'note' => 'Install Dompdf for proper PDF generation: composer require dompdf/dompdf'
                ];
            }

        } catch (Exception $e) {
            error_log('PDF Generator Error: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }

    /**
     * Build the HTML document
     * @param bool $forPdf - if true, hides browser-only elements
     */
    public function buildHtml($data, $agreementText, $forPdf = false) {
        $logoUrl = 'https://associate.on-call.co.uk/assets/images/hr-on-call-logo-light.webp';

        // Format agreement text with proper paragraphs
        $formattedAgreement = $this->formatAgreementText($agreementText);

        return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate Agreement - ' . htmlspecialchars($data['applicant']['full_name']) . '</title>
    <style>
        @page {
            size: A4;
            margin: 25mm 15mm 20mm 15mm;
        }

        @page {
            footer: page-footer;
        }

        #page-footer {
            position: fixed;
            bottom: -10mm;
            left: 0;
            right: 0;
            height: 15mm;
            text-align: center;
            font-size: 9pt;
            color: #718096;
        }

        .page-number:after {
            content: counter(page);
        }

        .page-total:after {
            content: counter(pages);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            font-size: 10pt;
            line-height: 1.4;
            color: #2D3748;
            background: #fff;
        }

        .document {
            max-width: 800px;
            margin: 0 auto;
            background: white;
        }

        .page {
            padding: 20px 30px;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid #C9A962;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }

        h1 {
            color: #1A2E4A;
            font-size: 20pt;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .date {
            color: #4A5568;
            font-size: 10pt;
        }

        .parties {
            margin: 20px 0;
            padding: 20px;
            background: #FAFAFA;
            border-radius: 6px;
            border-left: 4px solid #C9A962;
        }

        .parties h3 {
            color: #1A2E4A;
            font-size: 11pt;
            margin-bottom: 8px;
        }

        .parties p {
            margin-bottom: 5px;
            font-size: 10pt;
        }

        .agreement-body {
            margin: 20px 0;
        }

        .agreement-body h2 {
            color: #1A2E4A;
            font-size: 11pt;
            font-weight: 700;
            margin: 20px 0 8px 0;
            padding-bottom: 4px;
            border-bottom: 1px solid #E2E8F0;
        }

        .agreement-body p {
            margin-bottom: 6px;
            text-align: justify;
            font-size: 10pt;
        }

        .agreement-body ul {
            margin: 6px 0 6px 25px;
            padding: 0;
        }

        .agreement-body li {
            margin-bottom: 6px;
            font-size: 10pt;
        }

        .signature-section {
            margin-top: 30px;
            padding: 20px;
            border: 2px solid #C9A962;
            border-radius: 6px;
            background: #FFFBEB;
            page-break-inside: avoid;
        }

        .signature-section h3 {
            color: #1A2E4A;
            font-size: 11pt;
            margin-bottom: 12px;
        }

        .signature {
            font-family: "Brush Script MT", "Segoe Script", cursive;
            font-size: 22pt;
            color: #1A2E4A;
            margin: 10px 0;
        }

        .signature-details {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #E2E8F0;
        }

        .signature-details p {
            margin-bottom: 4px;
            font-size: 10pt;
        }

        .signatures-grid {
            display: table;
            width: 100%;
        }

        .signature-col {
            display: table-cell;
            width: 48%;
            vertical-align: top;
            padding-right: 20px;
        }

        .signature-col:last-child {
            padding-right: 0;
            padding-left: 20px;
        }

        .audit {
            margin-top: 20px;
            padding: 15px;
            background: #F7FAFC;
            border-radius: 6px;
            font-size: 8pt;
            color: #718096;
            text-align: center;
            page-break-inside: avoid;
        }

        .audit p {
            margin-bottom: 3px;
        }

        .print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #DB2777;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(219, 39, 119, 0.3);
            z-index: 1000;
        }

        .print-button:hover {
            background: #BE185D;
        }

        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    ' . ($forPdf ? '<div id="page-footer">Page <span class="page-number"></span> of <span class="page-total"></span></div>' : '<button class="print-button" onclick="window.print()">Print / Save as PDF</button>') . '

    <div class="document">
        <div class="page">
            <div class="header">
                <img src="' . $logoUrl . '" alt="HR On Call" class="logo">
                <h1>ASSOCIATE AGREEMENT</h1>
                <p class="date">Dated: ' . htmlspecialchars($data['signed_date']) . '</p>
            </div>

            <div class="parties">
                <p style="text-align: center; font-style: italic; margin-bottom: 20px;">This Agreement is made between:</p>

                <div style="margin-bottom: 20px;">
                    <p style="margin-bottom: 3px;"><strong>HR On Call Ltd</strong></p>
                    <p style="margin-bottom: 3px;">3 Pethill Close, Plymouth, PL6 8NL</p>
                    <p style="margin-bottom: 3px;">Company Number: 16891106</p>
                    <p style="color: #4A5568;">("The Company", "we", "us" or "our")</p>
                    <div style="border-top: 1px solid #E2E8F0; padding-top: 8px; margin-top: 8px;">
                        <p style="margin-bottom: 3px;"><strong>Contact:</strong> Grace Pariser</p>
                        <p style="margin-bottom: 3px;"><strong>Email:</strong> grace@on-call.co.uk</p>
                        <p style="margin-bottom: 0;"><strong>Phone:</strong> 01752 425526</p>
                    </div>
                </div>

                <p style="text-align: center; font-style: italic; margin-bottom: 20px;">and</p>

                <div style="margin-bottom: 20px;">
                    <p style="margin-bottom: 3px;"><strong>' . htmlspecialchars($data['business_name']) . '</strong></p>
                    <p style="margin-bottom: 3px;">' . nl2br(htmlspecialchars($data['business_address'])) . '</p>
                    ' . ($data['company_number'] ? '<p style="margin-bottom: 3px;">Company Number: ' . htmlspecialchars($data['company_number']) . '</p>' : '') . '
                    ' . ($data['vat_number'] ? '<p style="margin-bottom: 3px;">VAT Number: ' . htmlspecialchars($data['vat_number']) . '</p>' : '') . '
                    <p style="color: #4A5568;">("the Associate", "you" or "your")</p>
                    <div style="border-top: 1px solid #E2E8F0; padding-top: 8px; margin-top: 8px;">
                        <p style="margin-bottom: 3px;"><strong>Contact:</strong> ' . htmlspecialchars($data['applicant']['full_name']) . '</p>
                        <p style="margin-bottom: 3px;"><strong>Email:</strong> ' . htmlspecialchars($data['applicant']['email']) . '</p>
                        <p style="margin-bottom: 0;"><strong>Phone:</strong> ' . htmlspecialchars($data['applicant']['phone']) . '</p>
                    </div>
                </div>
            </div>

            <div class="agreement-body">
                ' . $formattedAgreement . '
            </div>

            <div class="signature-section">
                <div class="signatures-grid">
                    <div class="signature-col">
                        <h3>SIGNED for and on behalf of HR On Call Ltd:</h3>
                        <p class="signature">Grace Pariser</p>
                        <div class="signature-details">
                            <p><strong>Name:</strong> Grace Pariser</p>
                            <p><strong>Title:</strong> Director</p>
                            <p><strong>Date:</strong> ' . htmlspecialchars($data['signed_datetime']) . '</p>
                        </div>
                    </div>
                    <div class="signature-col">
                        <h3>SIGNED by the Associate:</h3>
                        <p class="signature">' . htmlspecialchars($data['signature']) . '</p>
                        <div class="signature-details">
                            <p><strong>Name:</strong> ' . htmlspecialchars($data['applicant']['full_name']) . '</p>
                            <p><strong>Date:</strong> ' . htmlspecialchars($data['signed_datetime']) . '</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="audit">
                <p><strong>Electronic Signature Certificate</strong></p>
                <p>This document was electronically signed via HR On Call Ltd</p>
                <p>Timestamp: ' . htmlspecialchars($data['signed_datetime']) . ' | IP Address: ' . htmlspecialchars($data['ip_address']) . '</p>
                <p>Reference: APP-' . str_pad($data['applicant']['id'], 5, '0', STR_PAD_LEFT) . '</p>
            </div>
        </div>
    </div>
</body>
</html>';
    }

    /**
     * Format agreement text into proper HTML
     */
    private function formatAgreementText($text) {
        $lines = explode("\n", $text);
        $html = '';
        $inList = false;

        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;

            // Check for main section headings (e.g., "1. ENGAGEMENT", "6. SUB-PROCESSORS")
            if (preg_match('/^(\d+)\.\s+([A-Z][A-Z0-9 &-]+)$/', $line, $matches) && strlen($line) < 50 && strtoupper($matches[2]) === $matches[2]) {
                if ($inList) {
                    $html .= '</ul>';
                    $inList = false;
                }
                $html .= '<h2>' . $matches[1] . '. ' . $matches[2] . '</h2>';
            }
            // Check for sub-points (e.g., "1.1", "2.3")
            elseif (preg_match('/^(\d+\.\d+)\s+(.+)$/', $line, $matches)) {
                if ($inList) {
                    $html .= '</ul>';
                    $inList = false;
                }
                $html .= '<p><strong>' . $matches[1] . '</strong> ' . htmlspecialchars($matches[2]) . '</p>';
            }
            // Check for lettered sub-points (e.g., "(a)", "(b)")
            elseif (preg_match('/^\(([a-z])\)\s+(.+)$/', $line, $matches)) {
                if (!$inList) {
                    $html .= '<ul style="list-style-type: none; margin-left: 20px; margin-bottom: 6px; padding-left: 0;">';
                    $inList = true;
                }
                $html .= '<li style="margin-bottom: 6px;"><strong>(' . $matches[1] . ')</strong> ' . htmlspecialchars($matches[2]) . '</li>';
            }
            // Check for SCHEDULE headings
            elseif (preg_match('/^SCHEDULE\s+\d+/i', $line)) {
                if ($inList) {
                    $html .= '</ul>';
                    $inList = false;
                }
                $html .= '<h2>' . htmlspecialchars($line) . '</h2>';
            }
            // Check for standalone headings like BACKGROUND, IT IS AGREED
            elseif (preg_match('/^(BACKGROUND|IT IS AGREED.*|SIGNED.*)$/i', $line)) {
                if ($inList) {
                    $html .= '</ul>';
                    $inList = false;
                }
                $html .= '<h2>' . htmlspecialchars($line) . '</h2>';
            }
            // Regular paragraph
            else {
                if ($inList) {
                    $html .= '</ul>';
                    $inList = false;
                }
                $html .= '<p>' . htmlspecialchars($line) . '</p>';
            }
        }

        if ($inList) {
            $html .= '</ul>';
        }

        return $html;
    }
}
