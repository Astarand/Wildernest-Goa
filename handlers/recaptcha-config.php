<?php
/**
 * reCAPTCHA v3 Configuration for Wildernest Nature Resort
 */

// Prevent direct access
if (!defined('RECAPTCHA_HANDLER')) {
    die('Direct access not allowed');
}

// reCAPTCHA v3 Configuration
define('RECAPTCHA_SITE_KEY', '6LdPWuYrAAAAAMIJ1lFN6ES_Q1ROxmD2g_D8SnV0');
define('RECAPTCHA_SECRET_KEY', '6LdPWuYrAAAAANzeCfBcCPgo_hYZMh9BsBu0Qg2l');
define('RECAPTCHA_VERIFY_URL', 'https://www.google.com/recaptcha/api/siteverify');
define('RECAPTCHA_MIN_SCORE', 0.5); // Minimum score to accept (0.0 to 1.0)

/**
 * Verify reCAPTCHA v3 token
 */
function verifyRecaptcha($token, $action = 'submit') {
    $data = [
        'secret' => RECAPTCHA_SECRET_KEY,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents(RECAPTCHA_VERIFY_URL, false, $context);
    
    if ($result === false) {
        return ['success' => false, 'error' => 'Failed to connect to reCAPTCHA service'];
    }
    
    $response = json_decode($result, true);
    
    if (!$response) {
        return ['success' => false, 'error' => 'Invalid reCAPTCHA response'];
    }
    
    // Check if verification was successful
    if (!$response['success']) {
        $errors = isset($response['error-codes']) ? implode(', ', $response['error-codes']) : 'Unknown error';
        return ['success' => false, 'error' => 'reCAPTCHA verification failed: ' . $errors];
    }
    
    // Check action (optional but recommended)
    if (isset($response['action']) && $response['action'] !== $action) {
        return ['success' => false, 'error' => 'reCAPTCHA action mismatch'];
    }
    
    // Check score
    $score = $response['score'] ?? 0;
    if ($score < RECAPTCHA_MIN_SCORE) {
        return ['success' => false, 'error' => 'reCAPTCHA score too low: ' . $score];
    }
    
    return [
        'success' => true, 
        'score' => $score,
        'action' => $response['action'] ?? '',
        'hostname' => $response['hostname'] ?? ''
    ];
}

/**
 * Generate reCAPTCHA v3 JavaScript
 */
function getRecaptchaScript() {
    return '<script src="https://www.google.com/recaptcha/api.js?render=' . RECAPTCHA_SITE_KEY . '"></script>';
}

/**
 * Generate reCAPTCHA v3 form integration JavaScript
 */
function getRecaptchaFormScript($formId, $action = 'submit') {
    return "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('{$formId}');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    grecaptcha.ready(function() {
                        grecaptcha.execute('" . RECAPTCHA_SITE_KEY . "', {action: '{$action}'}).then(function(token) {
                            // Add token to form
                            let tokenInput = form.querySelector('input[name=\"recaptcha_token\"]');
                            if (!tokenInput) {
                                tokenInput = document.createElement('input');
                                tokenInput.type = 'hidden';
                                tokenInput.name = 'recaptcha_token';
                                form.appendChild(tokenInput);
                            }
                            tokenInput.value = token;
                            
                            // Add action to form
                            let actionInput = form.querySelector('input[name=\"recaptcha_action\"]');
                            if (!actionInput) {
                                actionInput = document.createElement('input');
                                actionInput.type = 'hidden';
                                actionInput.name = 'recaptcha_action';
                                form.appendChild(actionInput);
                            }
                            actionInput.value = '{$action}';
                            
                            // Submit form
                            form.submit();
                        });
                    });
                });
            }
        });
    </script>";
}
?>