<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Accommodation | Wildernest Nature Resort - Luxury Eco Cottages</title>
    <meta name="description" content="Discover our 5 unique accommodation options at Wildernest Nature Resort. From forest views to private plunge pools, find your perfect eco-luxury retreat in Goa.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php
    $page_title = "Accommodation | Wildernest Nature Resort - Luxury Eco Cottages";
    $page_description = "Discover our 5 unique accommodation options at Wildernest Nature Resort. From forest views to private plunge pools, find your perfect eco-luxury retreat in Goa.";
    include 'includes/header.php';
    ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    <!-- Hero Section -->
    <div class="relative">
        <div class="h-screen max-h-[500px] bg-cover bg-center overflow-hidden" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('assets/images/cta-bg.svg');">
            <img src="assets/images/cta-bg.svg" alt="Wildernest Accommodation" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/30 to-transparent"></div>
        </div>

        <div class="absolute inset-0 container mx-auto px-6 flex items-center">
            <div class="relative text-center w-full">
                <div class="max-w-4xl mx-auto pt-28 sm:pt-0" data-aos="fade-up" data-aos-duration="800">
                    <h1 class="text-3xl md:text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight">Our Accommodation</h1>
                    <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Discover 5 unique eco-luxury cottages, each designed to offer you an unforgettable experience in the heart of nature</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#accommodations" class="flex items-center justify-center gap-3 bg-gradient-to-tl from-orange-400 to-yellow-400 hover:bg-gradient-to-tl hover:from-orange-500 hover:to-yellow-500 text-white hover:text-white px-8 py-4 rounded-full font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                            Explore Our Cottages
                            <i data-lucide="arrow-down" class="w-5 h-5"></i>
                        </a>
                        <div class="flex items-center text-white bg-white/10 px-4 py-3 backdrop-blur-xl rounded-full">
                            <span class="mr-2">Starting from</span>
                            <span class="text-2xl font-bold">₹8,000</span>
                            <span class="ml-1">per night</span>
                        </div>
                    </div>
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
                        <i data-lucide="leaf" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">Eco-friendly design</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-amber-600">
                        <i data-lucide="mountain" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">Stunning nature views</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-amber-600">
                        <i data-lucide="sun" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">All meals included</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-3 text-center sm:text-left justify-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-amber-600">
                        <i data-lucide="wifi" class="w-5 h-5"></i>
                    </div>
                    <span class="font-medium text-gray-800 text-sm sm:text-base">Modern amenities</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Accommodations Section -->
    <section id="accommodations" class="py-20 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h3 class="text-xl text-black font-handwriting mb-2">Choose your perfect retreat</h3>
                <h2 class="text-4xl sm:text-5xl font-bold text-black mb-6">Our 5 Unique Cottages</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Each cottage is thoughtfully designed to offer you a unique experience, from intimate forest views to luxurious plunge pools</p>
            </div>

            <!-- Accommodation Cards - One Per Row -->
            <div class="space-y-12">
                
                <!-- 1. Forest View Cottage -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-[450px]">
                        <!-- Image Section -->
                        <div class="relative h-[250px] lg:h-[500px] overflow-hidden">
                            <img src="assets/images/ForestView/1.jpg" alt="Forest View Cottage" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Most Popular
                            </div>
                            <div class="absolute bottom-4 right-4 bg-white/90 px-3 py-1 rounded-full flex items-center shadow-sm">
                                <i data-lucide="star" class="text-amber-500 fill-amber-500 w-4 h-4 mr-1"></i>
                                <span class="text-sm font-medium">4.7 Rating</span>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-8">
                            <div class="mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Forest View Cottage</h3>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 mb-4">
                                    <div class="flex items-center gap-2">
                                        <div class="text-3xl font-bold text-gray-900">₹8,000</div>
                                        <div class="text-sm text-gray-500">per night</div>
                                    </div>
                                    <div class="text-sm text-green-600 font-medium hidden sm:block">Save 13%</div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6">Experience tranquil forest views from your private balcony. This eco-friendly cottage offers the perfect blend of comfort and nature, featuring sustainable design and modern amenities.</p>
                            
                            <!-- Key Features -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="users" class="w-4 h-4 text-amber-600"></i>
                                    <span>2 Guests Maximum</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bed" class="w-4 h-4 text-amber-600"></i>
                                    <span>King-sized Bed</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="mountain" class="w-4 h-4 text-amber-600"></i>
                                    <span>Forest Views</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bath" class="w-4 h-4 text-amber-600"></i>
                                    <span>Open-air Bathroom</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="wifi" class="w-4 h-4 text-amber-600"></i>
                                    <span>Free WiFi</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="utensils" class="w-4 h-4 text-amber-600"></i>
                                    <span>All Meals Included</span>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="mb-6">
                                <h4 class="font-semibold text-gray-900 mb-2">Included Amenities:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Private Balcony</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Daily Housekeeping</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Welcome Drink</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Nature Activities</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="forest-view.php" class="flex-1 bg-amber-600 hover:bg-amber-700 text-white hover:text-white text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    View Full Details
                                </a>
                                <a href="book.php" class="flex-1 border-2 border-amber-600 text-amber-600 hover:bg-amber-50 text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Valley View Cottage -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-[450px]">
                        <!-- Content Section -->
                        <div class="p-8 order-2 lg:order-1">
                            <div class="mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Valley View Cottage</h3>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 mb-4">
                                    <div class="flex items-center gap-2">
                                        <div class="text-3xl font-bold text-gray-900">₹9,000</div>
                                        <div class="text-sm text-gray-500">per night</div>
                                    </div>
                                    <div class="text-sm text-blue-600 font-medium hidden sm:block">Premium Choice</div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6">Wake up to breathtaking panoramic valley views. This premium cottage features elevated positioning for spectacular sunrise and sunset vistas, with luxury amenities throughout.</p>
                            
                            <!-- Key Features -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="users" class="w-4 h-4 text-amber-600"></i>
                                    <span>2 Guests Maximum</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bed" class="w-4 h-4 text-amber-600"></i>
                                    <span>King-sized Bed</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="eye" class="w-4 h-4 text-amber-600"></i>
                                    <span>Panoramic Valley Views</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bath" class="w-4 h-4 text-amber-600"></i>
                                    <span>Spacious Bathroom</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="sun" class="w-4 h-4 text-amber-600"></i>
                                    <span>Sunrise Views</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="utensils" class="w-4 h-4 text-amber-600"></i>
                                    <span>All Meals Included</span>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="mb-6">
                                <h4 class="font-semibold text-gray-900 mb-2">Included Amenities:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Private Balcony</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Premium Amenities</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Valley Dining</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Spa Packages</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="valley-view.php" class="flex-1 bg-amber-600 hover:bg-amber-700 text-white hover:text-white text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    View Full Details
                                </a>
                                <a href="book.php" class="flex-1 border-2 border-amber-600 text-amber-600 hover:bg-amber-50 text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    Book Now
                                </a>
                            </div>
                        </div>
                        
                        <!-- Image Section -->
                        <div class="relative h-[250px] lg:h-[500px] overflow-hidden order-1 lg:order-2">
                            <img src="assets/images/ValleyView/1.jpg" alt="Valley View Cottage" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute bottom-4 right-4 bg-white/90 px-3 py-1 rounded-full flex items-center shadow-sm">
                                <i data-lucide="star" class="text-amber-500 fill-amber-500 w-4 h-4 mr-1"></i>
                                <span class="text-sm font-medium">4.8 Rating</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Family Valley View -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-[450px]">
                        <!-- Image Section -->
                        <div class="relative h-[250px] lg:h-[500px] overflow-hidden">
                            <img src="assets/images/FamilyValleyView/1.jpg" alt="Family Valley View" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Family Friendly
                            </div>
                            <div class="absolute bottom-4 right-4 bg-white/90 px-3 py-1 rounded-full flex items-center shadow-sm">
                                <i data-lucide="star" class="text-amber-500 fill-amber-500 w-4 h-4 mr-1"></i>
                                <span class="text-sm font-medium">4.9 Rating</span>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-8">
                            <div class="mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Family Valley View</h3>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 mb-4">
                                    <div class="flex items-center gap-2">
                                        <div class="text-3xl font-bold text-gray-900">₹13,500</div>
                                        <div class="text-sm text-gray-500">per night</div>
                                    </div>
                                    <div class="text-sm text-blue-600 font-medium hidden sm:block">Family Suite</div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6">Spacious family accommodation with separate children's area and panoramic valley views. Perfect for families seeking adventure and comfort with kid-friendly amenities throughout.</p>
                            
                            <!-- Key Features -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="users" class="w-4 h-4 text-amber-600"></i>
                                    <span>4-6 Guests</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="home" class="w-4 h-4 text-amber-600"></i>
                                    <span>2 Bedrooms</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="baby" class="w-4 h-4 text-amber-600"></i>
                                    <span>Kid-Friendly</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bath" class="w-4 h-4 text-amber-600"></i>
                                    <span>2 Bathrooms</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="tv" class="w-4 h-4 text-amber-600"></i>
                                    <span>Entertainment System</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="utensils" class="w-4 h-4 text-amber-600"></i>
                                    <span>Kitchenette</span>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="mb-6">
                                <h4 class="font-semibold text-gray-900 mb-2">Family Amenities:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Kids' Bunk Room</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Family Activities</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Adventure Backpack</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Movie Nights</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="family-valley.php" class="flex-1 bg-amber-600 hover:bg-amber-700 text-white hover:text-white text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    View Full Details
                                </a>
                                <a href="book.php" class="flex-1 border-2 border-amber-600 text-amber-600 hover:bg-amber-50 text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Private Plunge Pool -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-[450px]">
                        <!-- Content Section -->
                        <div class="p-8 order-2 lg:order-1">
                            <div class="mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Private Plunge Pool</h3>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 mb-4">
                                    <div class="flex items-center gap-2">
                                        <div class="text-3xl font-bold text-gray-900">₹12,000</div>
                                        <div class="text-sm text-gray-500">per night</div>
                                    </div>
                                    <div class="text-sm text-purple-600 font-medium hidden sm:block">Luxury</div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6">Indulge in ultimate privacy with your own plunge pool overlooking stunning valley views. Perfect for romantic getaways and special occasions with luxury amenities.</p>
                            
                            <!-- Key Features -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="users" class="w-4 h-4 text-amber-600"></i>
                                    <span>2 Guests Maximum</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="waves" class="w-4 h-4 text-amber-600"></i>
                                    <span>Private Plunge Pool</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="mountain" class="w-4 h-4 text-amber-600"></i>
                                    <span>Valley Views</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bed" class="w-4 h-4 text-amber-600"></i>
                                    <span>King-sized Bed</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="bath" class="w-4 h-4 text-amber-600"></i>
                                    <span>Luxury Bathroom</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="utensils" class="w-4 h-4 text-amber-600"></i>
                                    <span>All Meals Included</span>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="mb-6">
                                <h4 class="font-semibold text-gray-900 mb-2">Luxury Amenities:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Private Pool</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Pool Deck</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Premium Service</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Romantic Setup</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="plunge-pool.php" class="flex-1 bg-amber-600 hover:bg-amber-700 text-white hover:text-white text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    View Full Details
                                </a>
                                <a href="book.php" class="flex-1 border-2 border-amber-600 text-amber-600 hover:bg-amber-50 text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    Book Now
                                </a>
                            </div>
                        </div>
                        
                        <!-- Image Section -->
                        <div class="relative h-[250px] lg:h-[500px] overflow-hidden order-1 lg:order-2">
                            <img src="assets/images/PlungePoolAC/1.jpg" alt="Private Plunge Pool" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Luxury
                            </div>
                            <div class="absolute bottom-4 right-4 bg-white/90 px-3 py-1 rounded-full flex items-center shadow-sm">
                                <i data-lucide="star" class="text-amber-500 fill-amber-500 w-4 h-4 mr-1"></i>
                                <span class="text-sm font-medium">4.8 Rating</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Private Plunge Pool (AC) -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-[450px]">
                        <!-- Image Section -->
                        <div class="relative h-[250px] lg:h-[500px] overflow-hidden">
                            <img src="assets/images/PlungePoolAC/2.png" alt="Private Plunge Pool AC" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Premium Luxury
                            </div>
                            <div class="absolute bottom-4 right-4 bg-white/90 px-3 py-1 rounded-full flex items-center shadow-sm">
                                <i data-lucide="star" class="text-amber-500 fill-amber-500 w-4 h-4 mr-1"></i>
                                <span class="text-sm font-medium">4.9 Rating</span>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-8">
                            <div class="mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Private Plunge Pool (AC)</h3>
                                <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 mb-4">
                                    <div class="flex items-center gap-2">
                                        <div class="text-3xl font-bold text-gray-900">₹13,500</div>
                                        <div class="text-sm text-gray-500">per night</div>
                                    </div>
                                    <div class="text-sm text-red-600 font-medium hidden sm:block">Premium Luxury</div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6">The ultimate luxury experience with climate-controlled comfort and your private plunge pool. Features premium amenities and personalized service for the most discerning guests.</p>
                            
                            <!-- Key Features -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="users" class="w-4 h-4 text-amber-600"></i>
                                    <span>2 Guests Maximum</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="snowflake" class="w-4 h-4 text-amber-600"></i>
                                    <span>Air Conditioned</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="waves" class="w-4 h-4 text-amber-600"></i>
                                    <span>Private Plunge Pool</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="mountain" class="w-4 h-4 text-amber-600"></i>
                                    <span>Valley Views</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="crown" class="w-4 h-4 text-amber-600"></i>
                                    <span>Premium Service</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <i data-lucide="utensils" class="w-4 h-4 text-amber-600"></i>
                                    <span>Gourmet Meals</span>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="mb-6">
                                <h4 class="font-semibold text-gray-900 mb-2">Premium Amenities:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Climate Control</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Butler Service</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Premium Toiletries</span>
                                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs">Luxury Linens</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="plunge-pool-ac.php" class="flex-1 bg-amber-600 hover:bg-amber-700 text-white hover:text-white text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    View Full Details
                                </a>
                                <a href="book.php" class="flex-1 border-2 border-amber-600 text-amber-600 hover:bg-amber-50 text-center py-3 px-6 rounded-lg font-medium transition-colors">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features & Amenities Section -->
    <section class="py-20 px-4 sm:px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">What's Included</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Every stay includes these premium amenities and experiences</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="utensils" class="w-8 h-8 text-amber-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">All Meals Included</h3>
                    <p class="text-gray-600">Breakfast, lunch, dinner & evening snacks</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="mountain" class="w-8 h-8 text-amber-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Nature Activities</h3>
                    <p class="text-gray-600">Guided treks, bird watching & nature walks</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="wifi" class="w-8 h-8 text-amber-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Modern Amenities</h3>
                    <p class="text-gray-600">Free WiFi, hot water & daily housekeeping</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="phone" class="w-8 h-8 text-amber-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Concierge service & guest assistance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="relative py-20 px-4 sm:px-6 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/images/cta-bg.svg');">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Experience Wildernest?</h2>
            <p class="text-xl text-gray-200 mb-8">Book your perfect eco-luxury retreat today and create memories that will last a lifetime</p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="book.php" class="bg-gradient-to-tl from-orange-400 to-yellow-400 hover:bg-gradient-to-tl hover:from-orange-500 hover:to-yellow-500 text-white hover:text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 shadow-lg hover:shadow-xl">
                    Book Your Stay Now
                </a>
                <a href="contact.php" class="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300">
                    Contact Us
                </a>
            </div>

            <div class="mt-8 text-center">
                <p class="text-gray-300 mb-2">Need help choosing? Call our experts</p>
                <a href="tel:+919480022108" class="text-2xl font-bold text-amber-400 hover:text-amber-300 transition-colors">
                    +91 94800 22108
                </a>
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
});
</script>

</div>
</body>
</html>