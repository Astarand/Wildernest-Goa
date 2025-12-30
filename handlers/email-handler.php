<?php
/**
 * Main Email Handler for Wildernest Nature Resort
 * Handles all form submissions and email sending
 */

// Security check
define('EMAIL_HANDLER', true);
define('RECAPTCHA_HANDLER', true);

// Include required files
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/email-config.php';
require_once __DIR__ . '/email-templates.php';
require_once __DIR__ . '/recaptcha-config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailHandler {
    
    private $admin_mailer;
    private $noreply_mailer;
    
    public function __construct() {
        $this->setupMailers();
    }
    
    /**
     * Setup PHPMailer instances for admin and no-reply emails
     */
    private function setupMailers() {
        // Admin mailer setup
        $this->admin_mailer = new PHPMailer(true);
        $this->admin_mailer->isSMTP();
        $this->admin_mailer->Host = SMTP_HOST;
        $this->admin_mailer->SMTPAuth = true;
        $this->admin_mailer->Username = ADMIN_EMAIL;
        $this->admin_mailer->Password = ADMIN_PASSWORD;
        $this->admin_mailer->SMTPSecure = SMTP_SECURE;
        $this->admin_mailer->Port = SMTP_PORT;
        $this->admin_mailer->CharSet = 'UTF-8';
        
        // No-reply mailer setup
        $this->noreply_mailer = new PHPMailer(true);
        $this->noreply_mailer->isSMTP();
        $this->noreply_mailer->Host = SMTP_HOST;
        $this->noreply_mailer->SMTPAuth = true;
        $this->noreply_mailer->Username = NOREPLY_EMAIL;
        $this->noreply_mailer->Password = NOREPLY_PASSWORD;
        $this->noreply_mailer->SMTPSecure = SMTP_SECURE;
        $this->noreply_mailer->Port = SMTP_PORT;
        $this->noreply_mailer->CharSet = 'UTF-8';
    }
    
    /**
     * Process form submission
     */
    public function processForm($form_type, $form_data) {
        try {
            // Verify reCAPTCHA first
            $this->verifyRecaptcha($form_data);
            
            // Validate and sanitize data
            $clean_data = $this->validateAndSanitize($form_data);
            
            // Send admin notification
            $admin_sent = $this->sendAdminNotification($form_type, $clean_data);
            
            // Send customer confirmation
            $customer_sent = $this->sendCustomerConfirmation($form_type, $clean_data);
            
            if ($admin_sent && $customer_sent) {
                $this->redirectToSuccess();
            } else {
                throw new Exception('Failed to send one or more emails');
            }
            
        } catch (Exception $e) {
            error_log("Email Handler Error: " . $e->getMessage());
            $this->redirectToError($e->getMessage());
        }
    }
    
    /**
     * Verify reCAPTCHA token
     */
    private function verifyRecaptcha($data) {
        if (!isset($data['recaptcha_token']) || empty($data['recaptcha_token'])) {
            throw new Exception('reCAPTCHA verification required');
        }
        
        $action = $data['recaptcha_action'] ?? 'submit';
        $result = verifyRecaptcha($data['recaptcha_token'], $action);
        
        if (!$result['success']) {
            throw new Exception('Security verification failed: ' . $result['error']);
        }
        
        // Log successful verification (optional)
        error_log("reCAPTCHA verified successfully. Score: " . $result['score']);
    }
    
    /**
     * Validate and sanitize form data
     */
    private function validateAndSanitize($data) {
        $clean = [];
        
        // Required fields
        $required_fields = ['name', 'email'];
        
        foreach ($required_fields as $field) {
            if (empty($data[$field])) {
                throw new Exception("Required field '$field' is missing");
            }
        }
        
        // Sanitize data
        $clean['name'] = htmlspecialchars(trim($data['name']), ENT_QUOTES, 'UTF-8');
        $clean['email'] = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
        
        // Validate email
        if (!filter_var($clean['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email address");
        }
        
        // Optional fields
        $optional_fields = ['phone', 'subject', 'message', 'checkin', 'checkout', 'adults', 'children', 'cottage_type'];
        
        foreach ($optional_fields as $field) {
            if (isset($data[$field])) {
                $clean[$field] = htmlspecialchars(trim($data[$field]), ENT_QUOTES, 'UTF-8');
            }
        }
        
        return $clean;
    }
    
    /**
     * Send notification email to admin
     */
    private function sendAdminNotification($form_type, $data) {
        try {
            $this->admin_mailer->clearAddresses();
            $this->admin_mailer->clearAttachments();
            
            $this->admin_mailer->setFrom(ADMIN_EMAIL, ADMIN_NAME);
            $this->admin_mailer->addAddress(ADMIN_EMAIL, ADMIN_NAME);
            $this->admin_mailer->addReplyTo($data['email'], $data['name']);
            
            // Generate subject and body
            $subject = $this->generateAdminSubject($form_type, $data);
            $body = $this->generateAdminBody($form_type, $data);
            
            $this->admin_mailer->Subject = $subject;
            $this->admin_mailer->isHTML(true);
            $this->admin_mailer->Body = $body;
            
            return $this->admin_mailer->send();
            
        } catch (Exception $e) {
            error_log("Admin email error: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Send confirmation email to customer
     */
    private function sendCustomerConfirmation($form_type, $data) {
        try {
            $this->noreply_mailer->clearAddresses();
            $this->noreply_mailer->clearAttachments();
            
            $this->noreply_mailer->setFrom(NOREPLY_EMAIL, NOREPLY_NAME);
            $this->noreply_mailer->addAddress($data['email'], $data['name']);
            
            // Generate subject and body
            $subject = $this->generateCustomerSubject($form_type, $data);
            $body = $this->generateCustomerBody($form_type, $data);
            
            $this->noreply_mailer->Subject = $subject;
            $this->noreply_mailer->isHTML(true);
            $this->noreply_mailer->Body = $body;
            
            return $this->noreply_mailer->send();
            
        } catch (Exception $e) {
            error_log("Customer email error: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Generate admin email subject
     */
    private function generateAdminSubject($form_type, $data) {
        global $form_types, $cottage_info;
        
        $base_subject = "New " . ($form_types[$form_type] ?? 'Form Submission');
        
        if (isset($cottage_info[$form_type])) {
            $base_subject .= " - " . $cottage_info[$form_type]['name'];
        }
        
        return $base_subject . " from " . $data['name'];
    }
    
    /**
     * Generate customer email subject
     */
    private function generateCustomerSubject($form_type, $data) {
        if (strpos($form_type, 'booking') !== false || in_array($form_type, array_keys($GLOBALS['cottage_info']))) {
            return "Thank you for your booking inquiry - Wildernest Nature Resort";
        } else {
            return "Thank you for contacting us - Wildernest Nature Resort";
        }
    }
    
    /**
     * Generate admin email body
     */
    private function generateAdminBody($form_type, $data) {
        return generateAdminEmailTemplate($form_type, $data);
    }
    
    /**
     * Generate customer email body
     */
    private function generateCustomerBody($form_type, $data) {
        return generateCustomerEmailTemplate($form_type, $data);
    }
    
    /**
     * Redirect to success page
     */
    private function redirectToSuccess() {
        header('Location: ' . SUCCESS_URL . '?status=success');
        exit();
    }
    
    /**
     * Redirect to error page
     */
    private function redirectToError($message = '') {
        $url = ERROR_URL . '?status=error';
        if ($message) {
            $url .= '&message=' . urlencode($message);
        }
        header('Location: ' . $url);
        exit();
    }
}

// Handle form submission if this file is accessed directly
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_type = $_POST['form_type'] ?? 'contact';
    $handler = new EmailHandler();
    $handler->processForm($form_type, $_POST);
}

?>