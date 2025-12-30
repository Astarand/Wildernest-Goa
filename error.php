<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Failed | Wildernest Nature Resort</title>
    <meta name="description" content="There was an issue sending your message. Please try again or contact us directly.">
    <meta name="robots" content="noindex, nofollow">
    <?php
    $page_title = "Message Failed | Wildernest Nature Resort";
    $page_description = "There was an issue sending your message. Please try again or contact us directly.";
    include 'includes/header.php';
    ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    
    <!-- Error Section -->
    <section class="py-20 px-4 sm:px-6 bg-gradient-to-br from-red-50 to-pink-50 min-h-screen flex items-center">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Error Icon -->
            <div class="mb-8 pt-12" data-aos="zoom-in" data-aos-duration="600">
                <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i data-lucide="x-circle" class="w-12 h-12 text-red-600"></i>
                </div>
            </div>
            
            <!-- Error Message -->
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Oops! Something went wrong</h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    We're sorry, but there was an issue sending your message. Please try again or contact us directly using the information below.
                </p>
                
                <!-- Error Details -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-red-100 mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">What you can do:</h3>
                    <div class="space-y-3 text-left">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <span class="text-red-600 text-sm font-bold">1</span>
                            </div>
                            <p class="text-gray-600">Try submitting the form again</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <span class="text-red-600 text-sm font-bold">2</span>
                            </div>
                            <p class="text-gray-600">Call us directly at +91 94800 22108</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <span class="text-red-600 text-sm font-bold">3</span>
                            </div>
                            <p class="text-gray-600">Send us an email at book@wildernestgoa.com</p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="history.back()" class="bg-orange-600 hover:bg-orange-700 hover:text-white text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i data-lucide="arrow-left" class="w-5 h-5 mr-2"></i>
                        Try Again
                    </button>
                    <a href="contact.php" class="bg-white hover:bg-gray-50 hover:text-white text-gray-800 border border-gray-300 px-8 py-4 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                        Contact Form
                    </a>
                    <a href="index.php" class="bg-white hover:bg-gray-50 hover:text-white text-gray-800 border border-gray-300 px-8 py-4 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i data-lucide="home" class="w-5 h-5 mr-2"></i>
                        Back to Home
                    </a>
                </div>
                
                <!-- Direct Contact Information -->
                <div class="mt-12 pt-8 border-t border-red-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact us directly:</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Phone -->
                        <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                            <div class="flex items-center justify-center mb-2">
                                <i data-lucide="phone" class="w-6 h-6 text-orange-600 mr-2"></i>
                                <span class="font-medium text-gray-800">Phone</span>
                            </div>
                            <a href="tel:+919480022108" class="text-orange-600 hover:text-orange-700 font-medium text-lg">
                                +91 94800 22108
                            </a>
                        </div>
                        
                        <!-- Email -->
                        <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-200">
                            <div class="flex items-center justify-center mb-2">
                                <i data-lucide="mail" class="w-6 h-6 text-orange-600 mr-2"></i>
                                <span class="font-medium text-gray-800">Email</span>
                            </div>
                            <a href="mailto:book@wildernestgoa.com" class="text-orange-600 hover:text-orange-700 font-medium">
                                book@wildernestgoa.com
                            </a>
                        </div>
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