<?php
/**
 * Email Configuration for Wildernest Nature Resort
 * Handles all email settings and credentials
 */

// Prevent direct access
if (!defined('EMAIL_HANDLER')) {
    die('Direct access not allowed');
}

// Admin Email Configuration
define('ADMIN_EMAIL', 'book@wildernestgoa.com');
define('ADMIN_PASSWORD', 'Npy~{F{Yq^W;');
define('ADMIN_NAME', 'Wildernest Nature Resort');

// Auto-reply Email Configuration  
define('NOREPLY_EMAIL', 'book@wildernestgoa.com');
define('NOREPLY_PASSWORD', 'Npy~{F{Yq^W;');
define('NOREPLY_NAME', 'Wildernest Nature Resort');

// SMTP Configuration
define('SMTP_HOST', 'mail.wildernestgoa.com');
define('SMTP_PORT', 465);
define('SMTP_SECURE', 'ssl');

// IMAP Configuration (for future use)
define('IMAP_HOST', 'mail.wildernestgoa.com');
define('IMAP_PORT', 993);

// Email Templates Configuration
define('TEMPLATE_PATH', __DIR__ . '/email-templates/');

// Cottage Information for Email Context
$cottage_info = [
    'forest_view' => [
        'name' => 'Forest View Cottage',
        'price' => '₹8,000',
        'description' => 'Experience tranquil forest views from your private balcony'
    ],
    'valley_view' => [
        'name' => 'Valley View Cottage', 
        'price' => '₹9,000',
        'description' => 'Wake up to breathtaking panoramic valley views'
    ],
    'family_valley' => [
        'name' => 'Family Valley View',
        'price' => '₹13,500', 
        'description' => 'Spacious family accommodation with separate children\'s area'
    ],
    'plunge_pool' => [
        'name' => 'Private Plunge Pool',
        'price' => '₹12,000',
        'description' => 'Indulge in ultimate privacy with your own plunge pool'
    ],
    'plunge_pool_ac' => [
        'name' => 'Private Plunge Pool (AC)',
        'price' => '₹13,500',
        'description' => 'The ultimate luxury experience with climate-controlled comfort'
    ]
];

// Form Types
$form_types = [
    'contact' => 'General Contact Form',
    'booking' => 'General Booking Inquiry',
    'forest_view' => 'Forest View Cottage Booking',
    'valley_view' => 'Valley View Cottage Booking', 
    'family_valley' => 'Family Valley View Booking',
    'plunge_pool' => 'Private Plunge Pool Booking',
    'plunge_pool_ac' => 'Private Plunge Pool (AC) Booking'
];

// Success/Error Redirect URLs
define('SUCCESS_URL', '../success.php');
define('ERROR_URL', '../error.php');

?>