<?php
// PHP code must come first to avoid header conflicts
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

$page_title = "Contact Us | Wildernest Nature Resort";
$page_description = "Contact Wildernest Nature Resort in Goa for inquiries, reservations, or special requests. We're here to help make your stay perfect.";

// Include reCAPTCHA configuration
define('RECAPTCHA_HANDLER', true);
require_once 'handlers/recaptcha-config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Contact Us | Wildernest Nature Resort</title>
    <meta name="description" content="Contact Wildernest Nature Resort in Goa for inquiries, reservations, or special requests. We're here to help make your stay perfect.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php include 'includes/header.php'; ?>
    
    <!-- reCAPTCHA v3 -->
    <?php echo getRecaptchaScript(); ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    <!-- Hero Banner Section -->
    <div class="relative pt-40 pb-16 sm:pb-32 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('assets/images/cta-bg.svg');">
        <div class="container mx-auto px-4 text-center">
            <div class="pt-28 sm:pt-0" data-aos="fade-up" data-aos-duration="800">
                <h3 class="text-xl text-white font-handwriting mb-2">Connect with Wildernest</h3>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white relative mb-6">Contact Us</h1>
                <p class="text-gray-100 text-base sm:text-lg max-w-3xl mx-auto px-4 sm:px-0">Please feel free to reach out with any inquiries, reservations, or special requests.</p>
            </div>
        </div>
    </div>

    <!-- Contact Information and Form -->
    <section class="py-10 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div data-aos="fade-right" data-aos-duration="600">
                    <h2 class="mb-6 text-3xl font-bold">Contact <span class="text-orange-600">Us</span></h2>

                    <p class="text-gray-600 mb-8">
                        We're here to help with any questions you have about where to stay, what fun activities you can enjoy, or the services we offer. Feel free to contact us using any of the options listed below.
                    </p>

                    <div class="space-y-6 mb-8">
                        <!-- Address -->
                        <div class="flex items-start bg-orange-50/50 p-4 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                <i data-lucide="map-pin" class="text-orange-600 w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg mb-1">Address</h3>
                                <p class="text-gray-600">
                                    Wildernest Nature Resort <br>
                                    Off Sankhali, Ghats, Chorla <br>
                                    Charavade, Goa 403708
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start bg-orange-50/50 p-4 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                <i data-lucide="phone" class="text-orange-600 w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg mb-1">Phone</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+919480022108" class="hover:text-orange-600 transition-colors">+91 94800 22108</a><br>
                                    <a href="tel:+919480022108" class="hover:text-orange-600 transition-colors">+91 94800 22108</a>
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start bg-orange-50/50 p-4 rounded-xl" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                <i data-lucide="mail" class="text-orange-600 w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg mb-1">Email</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:book@wildernestgoa.com" class="hover:text-orange-600 transition-colors">book@wildernestgoa.com</a>
                                </p>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="flex items-start bg-orange-50/50 p-4 rounded-xl" data-aos="fade-up" data-aos-delay="400">
                            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4 flex-shrink-0">
                                <i data-lucide="clock" class="text-orange-600 w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg mb-1">Office Hours</h3>
                                <p class="text-gray-600">Monday - Sunday: 24 hours - (Front desk always available)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div data-aos="fade-left" data-aos-duration="600">
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-orange-100">
                        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Send Us a Message</h2>

                        <form id="contactForm" action="handlers/email-handler.php" method="POST">
                            <div class="space-y-6">
                                <input type="hidden" name="form_type" value="contact">
                                
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name*</label>
                                    <input type="text" id="name" name="name" required class="w-full rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white focus:outline-none focus:ring-2" placeholder="Enter your full name">
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address*</label>
                                    <input type="email" id="email" name="email" required class="w-full rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white focus:outline-none focus:ring-2" placeholder="your@email.com">
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="w-full rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white focus:outline-none focus:ring-2" placeholder="+91 ">
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject*</label>
                                    <div class="relative">
                                        <select id="subject" name="subject" required class="w-full rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white focus:outline-none focus:ring-2 appearance-none">
                                            <option value="">Select a subject</option>
                                            <option value="Booking Inquiry">Booking Inquiry</option>
                                            <option value="Cancellation/Modification">Cancellation/Modification</option>
                                            <option value="Special Request">Special Request</option>
                                            <option value="General Information">General Information</option>
                                            <option value="Feedback">Feedback</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message*</label>
                                    <textarea id="message" name="message" required rows="6" class="w-full rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white focus:outline-none focus:ring-2" placeholder="Type your message here..."></textarea>
                                </div>

                                <div>
                                    <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-medium transition-colors flex items-center justify-center">
                                        <i data-lucide="send" class="w-4 h-4 mr-2"></i>
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-10 px-4 sm:px-6 bg-orange-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="mb-4 text-3xl font-bold" data-aos="fade-up" data-aos-duration="600">
                    Frequently Asked <span class="text-orange-600">Questions</span>
                </h2>
                <p class="text-gray-600" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    Discover quick answers to frequently asked questions about Wildernest Nature Resort.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500 hover:shadow-lg transition-shadow cursor-pointer faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg mb-2">What is the check-in and check-out time?</h3>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform faq-icon"></i>
                    </div>
                    <div class="faq-answer hidden">
                        <p class="text-gray-600 pt-2">Check-in is at 1:30 PM, and check-out is by 11:30 AM. Early check-in or late check-out can be arranged based on availability.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500 hover:shadow-lg transition-shadow cursor-pointer faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg mb-2">Is there WiFi available at the resort?</h3>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform faq-icon"></i>
                    </div>
                    <div class="faq-answer hidden">
                        <p class="text-gray-600 pt-2">Yes, Wi-Fi (Jio network) is available in the reception area.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500 hover:shadow-lg transition-shadow cursor-pointer faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg mb-2">Are pets allowed at Wildernest?</h3>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform faq-icon"></i>
                    </div>
                    <div class="faq-answer hidden">
                        <p class="text-gray-600 pt-2">Pets are not permitted at Wildernest.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500 hover:shadow-lg transition-shadow cursor-pointer faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg mb-2">What dining options are available?</h3>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform faq-icon"></i>
                    </div>
                    <div class="faq-answer hidden">
                        <p class="text-gray-600 pt-2">A buffet featuring Satvik local cuisine, including both vegetarian and non-vegetarian dishes.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500 hover:shadow-lg transition-shadow cursor-pointer faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg mb-2">Is airport transfer available?</h3>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform faq-icon"></i>
                    </div>
                    <div class="faq-answer hidden">
                        <p class="text-gray-600 pt-2">We offer airport transfers for an additional fee. Please provide your flight details at least 24 hours before your arrival.</p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500 hover:shadow-lg transition-shadow cursor-pointer faq-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex justify-between items-center">
                        <h3 class="font-semibold text-lg mb-2">Are single individuals or groups allowed?</h3>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform faq-icon"></i>
                    </div>
                    <div class="faq-answer hidden">
                        <p class="text-gray-600 pt-2">Only couples and families are permitted.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<!-- Initialize page-specific JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lucide icons initialized in footer.php

    // Page-specific functionality (AOS initialized in footer.php)

    // FAQ Toggle functionality
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.addEventListener('click', function() {
            const answer = this.querySelector('.faq-answer');
            const icon = this.querySelector('.faq-icon');
            
            // Close all other FAQs
            faqItems.forEach(otherItem => {
                if (otherItem !== this) {
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    otherAnswer.classList.add('hidden');
                    otherIcon.classList.remove('rotate-180');
                }
            });
            
            // Toggle current FAQ
            answer.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });

    // Contact form submission - now handled by server
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Basic client-side validation
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value.trim();
            
            if (!name || !email || !subject || !message) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
                return;
            }
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Sending...';
            submitBtn.disabled = true;
        });
    }
});
</script>

</div>

<!-- reCAPTCHA v3 Integration -->
<?php echo getRecaptchaFormScript('contactForm', 'contact'); ?>

</body>
</html>