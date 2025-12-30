<?php
// Configuration file for Wildernest Nature Resort PHP Website

// Site Configuration
define('SITE_NAME', 'Wildernest Nature Resort');
define('SITE_URL', 'https://wildernestgoa.com'); // Change this to your actual domain
define('SITE_EMAIL', 'info@wildernestgoa.com');
define('BOOKING_EMAIL', 'book@wildernestgoa.com');
define('SITE_PHONE', '+91 94800 22108');

// Database Configuration (if needed for future enhancements)
define('DB_HOST', 'localhost');
define('DB_NAME', 'wildernest_db');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com'); // Change to your SMTP server
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@gmail.com'); // Change to your email
define('SMTP_PASS', 'your-app-password'); // Use app password for Gmail

// File Upload Configuration
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'gif', 'pdf']);

// Security Configuration
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_TIMEOUT', 3600); // 1 hour

// Room Rates (in INR)
define('ROOM_RATES', [
    'forest-view' => 8500,
    'valley-view' => 9500,
    'family-valley' => 12500,
    'plunge-pool' => 15500,
    'plunge-pool-ac' => 18500
]);

// Add-on Rates (in INR)
define('ADDON_RATES', [
    'airport_transfer' => 2500,
    'guided_tour' => 1500,
    'spa_package' => 3000,
    'adventure_package' => 2000
]);

// Social Media Links
define('SOCIAL_LINKS', [
    'facebook' => 'https://facebook.com/wildernestgoa',
    'instagram' => 'https://instagram.com/wildernestgoa',
    'twitter' => 'https://twitter.com/wildernestgoa',
    'youtube' => 'https://youtube.com/wildernestgoa'
]);

// Google Analytics ID (optional)
define('GA_TRACKING_ID', 'G-XXXXXXXXXX'); // Replace with your GA4 tracking ID

// Error Reporting (set to false in production)
define('DEBUG_MODE', true);

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Timezone
date_default_timezone_set('Asia/Kolkata');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// CSRF Token Generation
function generateCSRFToken() {
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

// CSRF Token Validation
function validateCSRFToken($token) {
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

// Sanitize Input Function
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

// Validate Email Function
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Format Currency Function
function formatCurrency($amount) {
    return '₹' . number_format($amount);
}

// Log Function
function logMessage($message, $type = 'info') {
    $logFile = __DIR__ . '/logs/' . $type . '.log';
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[{$timestamp}] {$message}" . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

// Redirect Function
function redirect($url, $statusCode = 302) {
    header("Location: {$url}", true, $statusCode);
    exit;
}

// Get Current Page Function
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

// Check if page is active
function isActivePage($page) {
    return getCurrentPage() === $page;
}
?>