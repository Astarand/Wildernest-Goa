<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent Successfully | Wildernest Nature Resort</title>
    <meta name="description" content="Your message has been sent successfully to Wildernest Nature Resort. We'll get back to you soon.">
    <meta name="robots" content="noindex, nofollow">
    <?php
    $page_title = "Message Sent Successfully | Wildernest Nature Resort";
    $page_description = "Your message has been sent successfully to Wildernest Nature Resort. We'll get back to you soon.";
    include 'includes/header.php';
    ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    
    <!-- Success Section -->
    <section class="py-20 px-4 sm:px-6 bg-gradient-to-br from-green-50 to-emerald-50 min-h-screen flex items-center">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Success Icon -->
            <div class="mb-8 pt-12" data-aos="zoom-in" data-aos-duration="600">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i data-lucide="check-circle" class="w-12 h-12 text-green-600"></i>
                </div>
            </div>
            
            <!-- Success Message -->
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Message Sent Successfully!</h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Thank you for contacting Wildernest Nature Resort. We have received your message and will get back to you within 24 hours.
                </p>
                
                <!-- Confirmation Details -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-green-100 mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">What happens next?</h3>
                    <div class="space-y-3 text-left">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <span class="text-green-600 text-sm font-bold">1</span>
                            </div>
                            <p class="text-gray-600">Our team will review your inquiry carefully</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <span class="text-green-600 text-sm font-bold">2</span>
                            </div>
                            <p class="text-gray-600">You'll receive a personalized response within 24 hours</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <span class="text-green-600 text-sm font-bold">3</span>
                            </div>
                            <p class="text-gray-600">We'll help you plan your perfect nature getaway</p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.php" class="bg-orange-600 hover:bg-orange-700 hover:text-white text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i data-lucide="home" class="w-5 h-5 mr-2"></i>
                        Back to Home
                    </a>
                    <a href="accommodation.php" class="bg-white hover:bg-gray-50 hover:text-white text-gray-800 border border-gray-300 px-8 py-4 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i data-lucide="bed" class="w-5 h-5 mr-2"></i>
                        View Accommodations
                    </a>
                </div>
                
                <!-- Contact Information -->
                <div class="mt-12 pt-8 border-t border-green-200">
                    <p class="text-gray-600 mb-4">Need immediate assistance?</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="tel:+919480022108" class="flex items-center text-orange-600 hover:text-orange-700 font-medium">
                            <i data-lucide="phone" class="w-5 h-5 mr-2"></i>
                            +91 94800 22108
                        </a>
                        <span class="hidden sm:block text-gray-400">|</span>
                        <a href="mailto:book@wildernestgoa.com" class="flex items-center text-orange-600 hover:text-orange-700 font-medium">
                            <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                            book@wildernestgoa.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

</div>
</body>
</html>