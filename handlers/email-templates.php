<?php
/**
 * Email Templates for Wildernest Nature Resort
 * Contains HTML templates for admin and customer emails
 */

// Prevent direct access
if (!defined('EMAIL_HANDLER')) {
    die('Direct access not allowed');
}

/**
 * Generate admin notification email template
 */
function generateAdminEmailTemplate($form_type, $data) {
    global $cottage_info, $form_types;
    
    $form_type_name = $form_types[$form_type] ?? 'Form Submission';
    $current_time = date('F j, Y \a\t g:i A');
    
    // Build customer information section
    $customer_info = "
                <p style='margin: 5px 0; color: #333;'><strong>👤 Name:</strong> " . htmlspecialchars($data['name']) . "</p>
                <p style='margin: 5px 0; color: #333;'><strong>📧 Email:</strong> <a href='mailto:" . htmlspecialchars($data['email']) . "' style='color: #ff6b35;'>" . htmlspecialchars($data['email']) . "</a></p>";
    
    if (isset($data['phone']) && !empty($data['phone'])) {
        $customer_info .= "<p style='margin: 5px 0; color: #333;'><strong>📞 Phone:</strong> <a href='tel:" . htmlspecialchars($data['phone']) . "' style='color: #ff6b35;'>" . htmlspecialchars($data['phone']) . "</a></p>";
    }
    
    // Build booking details section
    $booking_details = '';
    if (isset($data['checkin']) || isset($data['checkout']) || isset($data['adults']) || isset($data['children']) || isset($data['cottage_type'])) {
        $booking_details = "
        <tr>
            <td style='padding: 15px; background: #f0f9ff; border-left: 4px solid #0ea5e9;'>
                <h3 style='color: #0ea5e9; margin: 0 0 10px 0; font-size: 18px;'>📅 Booking Details</h3>";
        
        // Cottage Type
        if (isset($data['cottage_type']) && !empty($data['cottage_type'])) {
            $cottage_names = [
                'forest_view' => 'Forest View Cottage',
                'valley_view' => 'Valley View Cottage', 
                'family_valley' => 'Family Valley View Cottage',
                'plunge_pool' => 'Private Plunge Pool',
                'plunge_pool_ac' => 'Private Plunge Pool - AC'
            ];
            $cottage_name = $cottage_names[$data['cottage_type']] ?? htmlspecialchars($data['cottage_type']);
            $booking_details .= "<p style='margin: 5px 0; color: #333;'><strong>🏠 Cottage Type:</strong> {$cottage_name}</p>";
        }
        
        // Dates
        if (isset($data['checkin']) && !empty($data['checkin'])) {
            $booking_details .= "<p style='margin: 5px 0; color: #333;'><strong>📅 Check-in Date:</strong> " . date('F j, Y', strtotime($data['checkin'])) . "</p>";
        }
        if (isset($data['checkout']) && !empty($data['checkout'])) {
            $booking_details .= "<p style='margin: 5px 0; color: #333;'><strong>📅 Check-out Date:</strong> " . date('F j, Y', strtotime($data['checkout'])) . "</p>";
        }
        
        // Calculate nights if both dates are provided
        // Hotel Logic: Check-in 20th Oct, Check-out 23rd Oct = 3 nights (20th, 21st, 22nd nights)
        // Customer checks in 20th morning, spends nights of 20th, 21st, 22nd, checks out 23rd morning
        if (isset($data['checkin']) && isset($data['checkout']) && !empty($data['checkin']) && !empty($data['checkout'])) {
            $checkin_date = new DateTime($data['checkin']);
            $checkout_date = new DateTime($data['checkout']);
            
            // Ensure checkout is after checkin
            if ($checkout_date > $checkin_date) {
                $nights = $checkin_date->diff($checkout_date)->days;
                
                if ($nights > 0) {
                    $night_text = $nights == 1 ? 'night' : 'nights';
                    $booking_details .= "<p style='margin: 5px 0; color: #333;'><strong>🌙 Number of Nights:</strong> {$nights} {$night_text}</p>";
                    
                    // Add example for clarity
                    $example_checkin = date('M j', strtotime($data['checkin']));
                    $example_checkout = date('M j', strtotime($data['checkout']));
                    $booking_details .= "<p style='margin: 5px 0; color: #666; font-size: 14px;'>({$example_checkin} check-in to {$example_checkout} check-out)</p>";
                }
            } else {
                $booking_details .= "<p style='margin: 5px 0; color: #ff6b35;'><strong>⚠️ Date Issue:</strong> Check-out date should be after check-in date</p>";
            }
        }
        
        // Guests
        if (isset($data['adults']) && !empty($data['adults'])) {
            $booking_details .= "<p style='margin: 5px 0; color: #333;'><strong>👥 Adults:</strong> " . htmlspecialchars($data['adults']) . "</p>";
        }
        if (isset($data['children']) && !empty($data['children'])) {
            $booking_details .= "<p style='margin: 5px 0; color: #333;'><strong>👶 Children:</strong> " . htmlspecialchars($data['children']) . "</p>";
        }
        
        $booking_details .= "
            </td>
        </tr>";
    }
    
    // Build cottage details section
    $cottage_details = '';
    if (isset($cottage_info[$form_type])) {
        $cottage = $cottage_info[$form_type];
        $cottage_details = "
        <tr>
            <td style='padding: 15px; background: #fff3e6; border-left: 4px solid #ff6b35;'>
                <h3 style='color: #ff6b35; margin: 0 0 10px 0; font-size: 18px;'>🏡 Cottage Information</h3>
                <p style='margin: 5px 0; color: #333;'><strong>Cottage:</strong> {$cottage['name']}</p>
                <p style='margin: 5px 0; color: #333;'><strong>Price:</strong> {$cottage['price']} per night</p>
                <p style='margin: 5px 0; color: #666;'>{$cottage['description']}</p>
            </td>
        </tr>";
    }
    
    // Build message section
    $message_section = '';
    if (isset($data['message']) && !empty($data['message'])) {
        $message_section = "
        <tr>
            <td style='padding: 15px; background: #fef3c7; border-left: 4px solid #f59e0b;'>
                <h3 style='color: #f59e0b; margin: 0 0 10px 0; font-size: 18px;'>💬 Customer Message</h3>
                <p style='margin: 0; color: #333; line-height: 1.6;'>" . nl2br(htmlspecialchars($data['message'])) . "</p>
            </td>
        </tr>";
    }
    
    // Build subject section
    $subject_section = '';
    if (isset($data['subject']) && !empty($data['subject'])) {
        $subject_section = "
        <tr>
            <td style='padding: 15px; background: #f3e8ff; border-left: 4px solid #8b5cf6;'>
                <h3 style='color: #8b5cf6; margin: 0 0 10px 0; font-size: 18px;'>📝 Subject</h3>
                <p style='margin: 0; color: #333;'>" . htmlspecialchars($data['subject']) . "</p>
            </td>
        </tr>";
    }
    
    return "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>New {$form_type_name} - Wildernest</title>
    </head>
    <body style='margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f5f5;'>
        <table width='100%' cellpadding='0' cellspacing='0' style='background-color: #f5f5f5; padding: 20px;'>
            <tr>
                <td align='center'>
                    <table width='600' cellpadding='0' cellspacing='0' style='background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);'>
                        <!-- Header -->
                        <tr>
                            <td style='background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%); padding: 30px; text-align: center;'>
                                <h1 style='color: white; margin: 0; font-size: 24px; font-weight: bold;'>🌿 Wildernest Nature Resort</h1>
                                <p style='color: rgba(255,255,255,0.9); margin: 10px 0 0 0; font-size: 16px;'>New Customer Inquiry</p>
                            </td>
                        </tr>
                        
                        <!-- Form Type -->
                        <tr>
                            <td style='padding: 20px; background: #f8f9fa; border-bottom: 1px solid #e9ecef;'>
                                <h2 style='color: #333; margin: 0; font-size: 20px;'>📋 {$form_type_name}</h2>
                                <p style='color: #666; margin: 5px 0 0 0; font-size: 14px;'>Received on {$current_time}</p>
                            </td>
                        </tr>
                        
                        <!-- Customer Information -->
                        <tr>
                            <td style='padding: 15px; background: #e8f5e8; border-left: 4px solid #22c55e;'>
                                <h3 style='color: #22c55e; margin: 0 0 10px 0; font-size: 18px;'>👤 Customer Information</h3>
                                {$customer_info}
                            </td>
                        </tr>
                        
                        {$booking_details}
                        {$cottage_details}
                        {$subject_section}
                        {$message_section}
                        
                        <!-- Footer -->
                        <tr>
                            <td style='padding: 20px; background: #f8f9fa; text-align: center; border-top: 1px solid #e9ecef;'>
                                <p style='margin: 0; color: #666; font-size: 14px;'>
                                    📧 This email was sent from the Wildernest Nature Resort website contact form.
                                </p>
                                <p style='margin: 10px 0 0 0; color: #999; font-size: 12px;'>
                                    Please respond to the customer directly at their email address.
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>";
}

/**
 * Generate customer confirmation email template
 */
function generateCustomerEmailTemplate($form_type, $data) {
    global $cottage_info;
    
    $cottage_details = '';
    if (isset($data['cottage_type']) && !empty($data['cottage_type'])) {
        $cottage_names = [
            'forest_view' => 'Forest View Cottage',
            'valley_view' => 'Valley View Cottage', 
            'family_valley' => 'Family Valley View Cottage',
            'plunge_pool' => 'Private Plunge Pool',
            'plunge_pool_ac' => 'Private Plunge Pool - AC'
        ];
        $cottage_name = $cottage_names[$data['cottage_type']] ?? htmlspecialchars($data['cottage_type']);
        
        $cottage_details = "
        <tr>
            <td style='padding: 20px; background: #fff3e6; border-radius: 8px; margin: 10px 0;'>
                <h3 style='color: #ff6b35; margin: 0 0 15px 0; font-size: 20px;'>🏡 Your Selected Cottage</h3>
                <div style='background: white; padding: 15px; border-radius: 6px;'>
                    <p style='margin: 5px 0; color: #333; font-size: 16px;'><strong>{$cottage_name}</strong></p>";
        
        if (isset($data['checkin']) && isset($data['checkout'])) {
            $cottage_details .= "
                    <p style='margin: 5px 0; color: #666;'>📅 " . date('F j, Y', strtotime($data['checkin'])) . " - " . date('F j, Y', strtotime($data['checkout'])) . "</p>";
            
            $checkin_date = new DateTime($data['checkin']);
            $checkout_date = new DateTime($data['checkout']);
            $nights = $checkin_date->diff($checkout_date)->days;
            if ($nights > 0) {
                $night_text = $nights == 1 ? 'night' : 'nights';
                $cottage_details .= "<p style='margin: 5px 0; color: #666;'>🌙 {$nights} {$night_text}</p>";
            }
        }
        
        if (isset($data['adults']) || isset($data['children'])) {
            $guests = [];
            if (isset($data['adults']) && $data['adults'] > 0) {
                $guests[] = $data['adults'] . ' Adult' . ($data['adults'] > 1 ? 's' : '');
            }
            if (isset($data['children']) && $data['children'] > 0) {
                $guests[] = $data['children'] . ' Child' . ($data['children'] > 1 ? 'ren' : '');
            }
            if (!empty($guests)) {
                $cottage_details .= "<p style='margin: 5px 0; color: #666;'>👥 " . implode(', ', $guests) . "</p>";
            }
        }
        
        $cottage_details .= "
                </div>
            </td>
        </tr>";
    }
    
    return "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Thank You - Wildernest Nature Resort</title>
    </head>
    <body style='margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f5f5;'>
        <table width='100%' cellpadding='0' cellspacing='0' style='background-color: #f5f5f5; padding: 20px;'>
            <tr>
                <td align='center'>
                    <table width='600' cellpadding='0' cellspacing='0' style='background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);'>
                        <!-- Header -->
                        <tr>
                            <td style='background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%); padding: 40px 30px; text-align: center;'>
                                <h1 style='color: white; margin: 0 0 10px 0; font-size: 28px; font-weight: bold;'>🌿 Wildernest Nature Resort</h1>
                                <p style='color: rgba(255,255,255,0.9); margin: 0; font-size: 16px;'>Luxury Eco-Tourism in Goa</p>
                            </td>
                        </tr>

                        <!-- Welcome Message -->
                        <tr>
                            <td style='padding: 30px; text-align: center;'>
                                <h2 style='color: #333; margin: 0 0 15px 0; font-size: 24px;'>Thank You, " . htmlspecialchars($data['name']) . "! 🙏</h2>
                                <p style='color: #666; margin: 0; font-size: 16px; line-height: 1.6;'>Thank you for reaching out to us! We've received your message and will get back to you as soon as possible.</p>
                            </td>
                        </tr>

                        {$cottage_details}

                        <!-- What's Next -->
                        <tr>
                            <td style='padding: 20px; background: #e8f5e8; border-radius: 8px; margin: 10px 0;'>
                                <h3 style='color: #22c55e; margin: 0 0 15px 0; font-size: 20px;'>✨ What Happens Next?</h3>
                                <div style='background: white; padding: 15px; border-radius: 6px;'>
                                    <ul style='margin: 0; padding-left: 20px; color: #333; line-height: 1.8;'>
                                        <li>Our team will review your inquiry within 2-4 hours</li>
                                        <li>We'll contact you via email or phone to confirm details</li>
                                        <li>You'll receive a detailed booking confirmation</li>
                                        <li>We'll send you pre-arrival information and directions</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <!-- Contact Information -->
                        <tr>
                            <td style='padding: 20px; background: #f8f9fa; border-top: 1px solid #e9ecef;'>
                                <h3 style='color: #333; margin: 0 0 15px 0; font-size: 18px; text-align: center;'>📞 Need Immediate Assistance?</h3>
                                <div style='text-align: center;'>
                                    <p style='margin: 5px 0; color: #333;'>
                                        <strong>Call us:</strong> <a href='tel:+919480022108' style='color: #ff6b35; text-decoration: none;'>+91 94800 22108</a>
                                    </p>
                                    <p style='margin: 5px 0; color: #333;'>
                                        <strong>Email:</strong> <a href='mailto:book@wildernestgoa.com' style='color: #ff6b35; text-decoration: none;'>book@wildernestgoa.com</a>
                                    </p>
                                    <p style='margin: 15px 0 5px 0; color: #666; font-size: 14px;'>
                                        <strong>Address:</strong> Off Sankhali, Ghats, Chorla, Charavade, Goa 403708
                                    </p>
                                </div>
                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td style='padding: 20px; background: #333; text-align: center;'>
                                <p style='margin: 0 0 10px 0; color: white; font-size: 16px; font-weight: bold;'>Experience Nature's Luxury</p>
                                <p style='margin: 0; color: rgba(255,255,255,0.7); font-size: 14px;'>
                                    © 2025 Wildernest Nature Resort. All rights reserved.
                                </p>
                                <div style='margin-top: 15px;'>
                                    <a href='https://wildernestgoa.com' style='color: #ff6b35; text-decoration: none; font-size: 14px;'>Visit Our Website</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>";
}

?>