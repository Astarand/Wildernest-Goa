<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Forest View Package | Wildernest Nature Resort</title>
    <meta name="description" content="Deluxe cottage with forest views at Wildernest Nature Resort. Perfect for nature lovers seeking a peaceful, rejuvenating escape.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php
    $page_title = "Forest View Package | Wildernest Nature Resort";
    $page_description = "Deluxe cottage with forest views at Wildernest Nature Resort. Perfect for nature lovers seeking a peaceful, rejuvenating escape.";
    include 'includes/header.php';

    // Include reCAPTCHA configuration
    define('RECAPTCHA_HANDLER', true);
    require_once 'handlers/recaptcha-config.php';
    ?>

    <!-- reCAPTCHA v3 -->
    <?php echo getRecaptchaScript(); ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    <!-- Hero Section -->
    <div class="relative">
        <div class="h-screen max-h-[500px] bg-cover bg-center overflow-hidden" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('assets/images/cta-bg.svg');">
            <img src="assets/images/cta-bg.svg" alt="Forest View Package" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/30 to-transparent"></div>
        </div>

        <div class="absolute inset-0 container mx-auto px-4 sm:px-6 flex items-center">
            <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-10 items-center w-full">
                <!-- Left Column - Content -->
                <div class="max-w-2xl mt-16 md:mt-20 mx-auto lg:mx-0 text-center lg:text-left px-4 sm:px-6" data-aos="fade-up" data-aos-duration="800">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">Forest View Package</h1>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-200 mb-6 md:mb-8 max-w-lg mx-auto lg:mx-0">Nature, Privacy & Serene Forest Views</p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-3 sm:gap-4">
                        <a href="book.php" class="flex items-center justify-center gap-2 bg-gradient-to-tl from-orange-400 to-yellow-400 hover:bg-gradient-to-tl hover:text-white hover:from-orange-500 hover:to-yellow-500 text-white px-4 sm:px-6 py-3 rounded-full font-medium transition-all duration-300 shadow-lg hover:shadow-xl text-sm sm:text-base min-h-[48px]">
                            Book Your Forest Retreat
                        </a>
                        <div class="flex items-center justify-center text-white bg-white/10 px-3 sm:px-4 py-2 sm:py-3 backdrop-blur-xl rounded-full min-h-[48px]">
                            <span class="mr-2 text-xs sm:text-sm">From</span>
                            <span class="text-lg sm:text-xl font-bold">₹8,000</span>
                            <span class="ml-1 line-through text-gray-300 text-xs sm:text-sm">₹9,000</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image Section -->
                <div class="relative w-full h-[250px] sm:h-[300px] mt-8 lg:mt-16 hidden md:block" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <img src="assets/images/ForestView/5.jpg" alt="Forest View Package" class="absolute inset-0 w-full h-full rounded-2xl object-cover shadow-2xl border-4 border-white/20 transition-transform duration-700 hover:scale-[1.02]" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <!-- Highlights Ribbon -->
    <div class="bg-amber-50 py-6 border-y border-amber-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 justify-center">
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-amber-600">
                        <i data-lucide="mountain" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">Stunning forest views</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-amber-600">
                        <i data-lucide="sun" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">All meals included</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-amber-600">
                        <i data-lucide="waves" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">Nature-inspired design</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-amber-600">
                        <i data-lucide="map-pin" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">Peaceful location</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery & Details Section -->
    <section class="py-10 pt-20 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Gallery -->
                <div data-aos="fade-right">
                    <div class="relative rounded-2xl overflow-hidden mb-4 aspect-[4/3]">
                        <img id="mainImage" src="assets/images/ForestView/1.jpg" alt="Forest View Package main view" class="w-full h-full object-cover transition-opacity duration-300">
                        <div class="absolute bottom-4 right-4 bg-white/90 px-3 py-1 rounded-full flex items-center shadow-sm">
                            <i data-lucide="star" class="text-amber-500 fill-amber-500 w-4 h-4 mr-1"></i>
                            <span class="text-sm font-medium">4.7 Guest Rating</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-2">
                        <button onclick="changeImage('assets/images/ForestView/1.jpg', 0)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all ring-2 ring-amber-500 scale-105">
                            <img src="assets/images/ForestView/1.jpg" alt="Thumbnail 1" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/2.jpg', 1)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/2.jpg" alt="Thumbnail 2" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/3.jpg', 2)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/3.jpg" alt="Thumbnail 3" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/4.jpg', 3)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/4.jpg" alt="Thumbnail 4" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/5.jpg', 4)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/5.jpg" alt="Thumbnail 5" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/6.jpg', 5)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/6.jpg" alt="Thumbnail 6" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/7.jpg', 6)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/7.jpg" alt="Thumbnail 7" class="w-full h-full object-cover">
                        </button>
                        <button onclick="changeImage('assets/images/ForestView/8.jpg', 7)" class="w-[140px] h-[140px] rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100">
                            <img src="assets/images/ForestView/8.jpg" alt="Thumbnail 8" class="w-full h-full object-cover">
                        </button>
                    </div>
                </div>

                <!-- Details -->
                <div data-aos="fade-left">
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold mb-4">Cottage Features</h3>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">King-sized bed</span>
                            </li>
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="150">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">Private balcony with forest views</span>
                            </li>
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">Spacious open-air bathroom</span>
                            </li>
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="250">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">Complimentary welcome drink</span>
                            </li>
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">Daily housekeeping</span>
                            </li>
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="350">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">Premium bath amenities</span>
                            </li>
                            <li class="flex items-start bg-amber-50/50 p-3 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                                <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                <span class="text-gray-700">Nature-inspired design</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-r from-amber-50 to-amber-100 p-6 rounded-2xl border border-amber-200 mb-8">
                        <h3 class="text-xl font-semibold mb-3">Nature Experiences</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">1</span>
                                <span class="text-gray-700">Private balcony dining available</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">2</span>
                                <span class="text-gray-700">Spa & massage packages</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">3</span>
                                <span class="text-gray-700">Sunset bonfire setup</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">4</span>
                                <span class="text-gray-700">Guided nature walks</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">5</span>
                                <span class="text-gray-700">Bird watching tours</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Pricing Card -->
                    <div class="w-full mb-6">
                        <!-- Single Pricing Card -->
                        <div class="relative overflow-hidden bg-gradient-to-br from-amber-50 to-amber-100 p-5 rounded-xl border border-amber-200">
                            <div class="absolute top-3 right-3 bg-amber-600 text-white text-xs font-medium px-2 py-1 rounded-full">BEST VALUE</div>
                            <div class="flex flex-col h-full">
                                <div class="mb-3">
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="calendar" class="w-4 h-4 text-amber-600"></i>
                                        <span class="text-sm font-medium text-amber-600">Price Per Couple</span>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">Per Pight</div>
                                </div>
                                <div class="mt-auto">
                                    <div class="flex items-end gap-2 mb-1">
                                        <span class="text-3xl font-bold text-gray-800">₹8,000</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs line-through text-gray-500">₹9,000</span>
                                        <span class="text-xs bg-amber-100 text-amber-600 px-2 py-1 rounded-full">Inclusive of all Taxes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="relative py-20 px-4 sm:px-6 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('assets/images/cta-bg.svg');">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-10">
                <div class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 sm:p-10 shadow-xl hover:shadow-2xl transition-all duration-500">
                    <p class="text-sm font-medium text-center text-amber-400 mb-3 uppercase tracking-wider">Forest View Package</p>
                    <h2 class="text-4xl text-center sm:text-4xl font-bold text-white mb-8 leading-tight">
                        Nature & Tranquility at <span class="text-amber-400">Wildernest</span>
                    </h2>
                    <div class="space-y-6 mb-10">
                        <p class="text-gray-100 text-center leading-relaxed">
                            Your stay includes exclusive activities and amenities designed for nature lovers seeking a peaceful, rejuvenating getaway.
                        </p>
                    </div>
                    <div class="flex flex-col justify-center sm:flex-row sm:flex-wrap gap-4 mt-8">
                        <div class="flex items-center gap-3 border-2 border-white/20 hover:border-amber-400 text-white px-6 py-3 rounded-xl transition-all">
                            <i data-lucide="mountain" class="w-5 h-5 text-amber-400"></i>
                            Private Forest Views
                        </div>
                        <div class="flex items-center gap-3 border-2 border-white/20 hover:border-amber-400 text-white px-6 py-3 rounded-xl transition-all">
                            <i data-lucide="flame" class="w-5 h-5 text-amber-400"></i>
                            Evening Bonfire Setup
                        </div>
                        <div class="flex items-center gap-3 border-2 border-white/20 hover:border-amber-400 text-white px-6 py-3 rounded-xl transition-all">
                            <i data-lucide="palette" class="w-5 h-5 text-amber-400"></i>
                            Spa Packages
                        </div>
                        <div class="flex items-center gap-3 border-2 border-white/20 hover:border-amber-400 text-white px-6 py-3 rounded-xl transition-all">
                            <i data-lucide="sun" class="w-5 h-5 text-amber-400"></i>
                            Private Balcony
                        </div>
                        <div class="flex items-center gap-3 border-2 border-white/20 hover:border-amber-400 text-white px-6 py-3 rounded-xl transition-all">
                            <i data-lucide="video" class="w-5 h-5 text-amber-400"></i>
                            In-room Dining Service
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="py-10 pt-20 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">Package Details</h2>
                    <p class="text-gray-700 mb-6">
                        Our forest view cottages offer a peaceful retreat surrounded by nature. Enjoy stunning forest views, open-air living, and complete tranquility—perfect for nature lovers seeking a rejuvenating escape.
                    </p>

                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
                        <div class="p-6 border-b border-gray-100">
                            <h3 class="text-xl font-semibold mb-2">Forest View Cottage</h3>
                            <p class="text-gray-600 mb-4">All-inclusive nature-inspired package</p>
                            <div class="flex items-end gap-2">
                                <span class="text-3xl font-bold text-amber-600">₹8,000</span>
                                <span class="text-gray-500 line-through">₹9,000</span>
                                <span class="ml-2 text-sm bg-amber-100 text-amber-800 px-2 py-1 rounded">Inclusive of all Taxes</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="font-medium mb-3">Package Includes:</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                    <span>Private balcony with forest views</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                    <span>Nature-inspired open-air bathroom</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                    <span>All meals (breakfast, lunch, dinner)</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                    <span>Evening tea and snacks</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-lucide="check" class="text-amber-600 w-5 h-5 mr-2 mt-0.5 flex-shrink-0"></i>
                                    <span>Access to all resort activities</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-amber-50 rounded-xl p-6 border border-amber-100">
                        <h3 class="font-semibold text-lg mb-3">Special Nature Packages</h3>
                        <p class="text-gray-700 mb-4">Enhance your stay with these nature experiences:</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-5 h-5 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs">1</span>
                                <span>Guided nature walk (₹1500)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-5 h-5 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs">2</span>
                                <span>Spa package (₹2500)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-amber-600 text-white rounded-full w-5 h-5 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs">3</span>
                                <span>Bird watching tour (₹1200)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="sticky top-24">
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                            <!-- Header -->
                            <div class="p-6 bg-gradient-to-r from-amber-500 to-amber-600">
                                <h3 class="text-xl font-semibold text-white text-center">Book Your Forest Retreat</h3>
                            </div>

                            <!-- Body -->
                            <div class="p-6">
                                <!-- Form Fields -->
                                <form id="forestViewBookingForm" action="handlers/email-handler.php" method="POST" class="space-y-5">
                                    <input type="hidden" name="form_type" value="forest_view">

                                    <!-- Name and Phone in one row -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                            <div class="relative">
                                                <input type="text" name="name" placeholder="Your name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all" required>
                                                <i data-lucide="user" class="absolute right-3 top-3.5 h-5 w-5 text-gray-400"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Mobile Number</label>
                                            <div class="relative">
                                                <input type="tel" name="phone" placeholder="+91 " class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all" required>
                                                <i data-lucide="phone" class="absolute right-3 top-3.5 h-5 w-5 text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email Field -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                        <div class="relative">
                                            <input type="email" name="email" placeholder="your@email.com" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all" required>
                                            <i data-lucide="mail" class="absolute right-3 top-3.5 h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>

                                    <!-- Date Fields -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Check-In Date*</label>
                                            <input type="date" name="checkin" id="checkin-date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all" required>
                                            <p class="text-xs text-gray-500 mt-1">Select your arrival date</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Check-Out Date*</label>
                                            <input type="date" name="checkout" id="checkout-date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all" required>
                                            <p class="text-xs text-gray-500 mt-1" id="checkout-helper">Must be after check-in date</p>
                                            <p id="checkout-error" class="text-xs text-red-600 mt-1 hidden flex items-center">
                                                <i data-lucide="alert-circle" class="w-4 h-4 mr-1"></i>
                                                <span></span>
                                            </p>
                                            <p id="nights-display" class="text-xs text-green-600 mt-1 hidden flex items-center">
                                                <i data-lucide="calendar-check" class="w-4 h-4 mr-1"></i>
                                                <span></span>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="w-full mt-8 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white py-4 rounded-xl font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                                        PLAN YOUR TRIP
                                    </button>
                                </form>

                                <!-- Contact Info -->
                                <div class="mt-6 pt-6 border-t border-gray-100 text-center">
                                    <p class="text-sm text-gray-500">
                                        Need help? Call us at <a href="tel:+919480022108" class="text-amber-600 font-medium hover:underline">+91 94800 22108</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Special Notes -->
                        <div class="bg-amber-50 mt-8 p-6 rounded-xl border border-amber-200 mb-8">
                            <h3 class="text-xl font-semibold mb-3">Special Notes</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <span class="bg-amber-600 text-white rounded-full w-5 h-5 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs">1</span>
                                    <span class="text-gray-700">Maximum 2 adults per cottage</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-amber-600 text-white rounded-full w-5 h-5 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs">2</span>
                                    <span class="text-gray-700">Kids Below 10 Years are complimentary</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-amber-600 text-white rounded-full w-5 h-5 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs">3</span>
                                    <span class="text-gray-700">Non-AC accommodation for a true nature experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-10 pt-20 px-4 sm:px-6 bg-amber-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">Perfectly Located in North Goa</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Our Forest View cottages are situated on a private hillside in North Goa, offering both tranquility and spectacular forest views.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-amber-100 dark:bg-amber-900/30 p-3 rounded-full mt-0.5">
                                <i data-lucide="mountain" class="text-amber-600 dark:text-amber-400 w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-medium mb-1">Peaceful Location</h4>
                                <p class="text-gray-600 dark:text-gray-400">Secluded location surrounded by nature</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-amber-100 dark:bg-amber-900/30 p-3 rounded-full mt-0.5">
                                <i data-lucide="waves" class="text-amber-600 dark:text-amber-400 w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-medium mb-1">Beach Access</h4>
                                <p class="text-gray-600 dark:text-gray-400">Easy access to pristine beaches and coastal activities</p>
                            </div>
                        </div>
                         <div class="flex items-start gap-4">
                            <div class="bg-amber-100 dark:bg-amber-900/30 p-3 rounded-full mt-0.5">
                                <i data-lucide="sun" class="text-amber-600 dark:text-amber-400 w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-medium mb-1">Nature Experience</h4>
                                <p class="text-gray-600 dark:text-gray-400">Non-AC cottages for a true nature stay</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img src="assets/images/ForestView/1.jpg" alt="Resort Location" class="w-full h-96 object-cover">
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

    // Form submission
    const bookingForm = document.getElementById('forestViewBookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            // Basic validation
            const formData = new FormData(this);
            const name = formData.get('name');
            const phone = formData.get('phone');
            const email = formData.get('email');
            const checkin = formData.get('checkin');
            const checkout = formData.get('checkout');

            if (!name || !email) {
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

            // Date validation if provided
            if (checkin && checkout) {
                const checkinDate = new Date(checkin);
                const checkoutDate = new Date(checkout);
                const today = new Date();
                today.setHours(0, 0, 0, 0);

                if (checkinDate < today) {
                    e.preventDefault();
                    alert('Check-in date cannot be in the past.');
                    return;
                }

                if (checkoutDate <= checkinDate) {
                    e.preventDefault();
                    alert('Check-out date must be after check-in date.');
                    return;
                }
            }

            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Processing...';
            submitButton.disabled = true;
        });
    }
});
</script>

<script>
let currentImageIndex = 0;
const images = [
    'assets/images/ForestView/1.jpg',
    'assets/images/ForestView/2.jpg',
    'assets/images/ForestView/3.jpg',
    'assets/images/ForestView/4.jpg'
];

function changeImage(imageSrc, index) {
    document.getElementById('mainImage').src = imageSrc;

    // Update button states
    const buttons = document.querySelectorAll('.grid button');
    buttons.forEach((button, i) => {
        if (i === index) {
            button.className = 'aspect-square rounded-lg overflow-hidden transition-all ring-2 ring-amber-500 scale-105';
        } else {
            button.className = 'aspect-square rounded-lg overflow-hidden transition-all opacity-80 hover:opacity-100';
        }
    });

    currentImageIndex = index;
}
</script>

</div>

<!-- Date Validation Script -->
<script src="assets/js/date-validation.js"></script>

<!-- reCAPTCHA v3 Integration -->
<?php echo getRecaptchaFormScript('forestViewBookingForm', 'forest_view_booking'); ?>

</body>
</html>
