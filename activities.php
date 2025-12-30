<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Activities | Wildernest Nature Resort</title>
    <meta name="description" content="Experience diverse activities at Wildernest Resort Goa - from treks and cultural experiences to nature exploration and relaxation.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php
    $page_title = "Activities | Wildernest Nature Resort";
    $page_description = "Experience diverse activities at Wildernest Resort Goa - from treks and cultural experiences to nature exploration and relaxation.";
    include 'includes/header.php';
    ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    <!-- Hero Banner Section -->
    <div class="relative pt-40 pb-16 sm:pb-32 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('assets/images/cta-bg.svg');">
        <div class="container mx-auto px-4 text-center">
            <div class="pt-28 sm:pt-0" data-aos="fade-up" data-aos-duration="800">
                <h3 class="text-xl text-white font-handwriting mb-2">Connect with Goa's Nature & Culture</h3>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white relative mb-6">Immersive Experiences</h1>
                <p class="text-gray-100 text-base sm:text-lg max-w-3xl mx-auto px-4 sm:px-0">Each activity is designed to foster connections.</p>
            </div>
        </div>
    </div>

    <!-- Introduction Section -->
    <section class="py-10 pt-20 px-4 sm:px-6 bg-white">
        <div class="text-center">
            <h3 class="text-xl text-black font-handwriting">Interests</h3>
            <h2 class="text-5xl font-bold text-black relative">
                Goa Experience
                <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Adventure</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">
                Explore diverse activities at Wildernest Resort Goa, where nature, culture, and relaxation blend seamlessly.
            </p>
        </div>
    </section>

    <!-- Activity 1: Property Treks -->
    <section class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/trekking.png" alt="Property Treks" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.9</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Property Treks</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Explore our expansive property on guided treks through spice plantations, fruit orchards, and spring-fed forests. Expert naturalists identify native flora and fauna, sharing details on their ecological roles and significance.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">1-2 Hours</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Moderate</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Morning or Evening</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Multiple route options for different fitness levels</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Photography stops at scenic viewpoints</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Learn about medicinal plants and their uses</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity 2: Sunset Point Trek -->
    <section class="py-6 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/sunset.png" alt="Sunset Point Trek" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">5.0</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Sunset Point Trek</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Join our signature sunset trek along lush forest trails to a secluded viewpoint overlooking the Goan coastline. Sip refreshing drinks while enjoying panoramic sunset views in a private, tranquil setting.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">1.5 Hours</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Moderate</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Evening</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Exclusive access to a private viewpoint</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Complimentary tropical drinks</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Perfect photo opportunities</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>    
<!-- Activity 3: Heena Sessions -->
    <section class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/heena.png" alt="Heena Sessions" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.8</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Heena Sessions</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Discover the art of henna as local artists create intricate, all-natural tattoos in a serene garden setting. Discover the meaning and beauty behind each design.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">45-60 mins</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Relaxing</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Afternoon</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Authentic natural henna paste</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Custom designs to choose from</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Cultural explanation of traditions</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity 4: Forest Walk & Waterfalls Trek -->
    <section class="py-6 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/watterfall.png" alt="Forest Walk & Waterfalls Trek" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.7</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Forest Walk & Waterfalls Trek</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Trek into the surrounding forests led by expert guides, where hidden seasonal waterfalls and crystal-clear pools await. Discover local wildlife while listening to the sounds of flowing water and chirping birds.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">2-3 Hours</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Moderate to Challenging</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Morning</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Seasonal waterfalls (Nov-Aug)</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Natural swimming pools</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Forest ecology education</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity 5: Folk Dance & Music Night -->
    <section class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/trd_dance.png" alt="Folk Dance & Music Night" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.9</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Folk Dance & Music Night</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Celebrate Goan tradition around a bonfire as local artists showcase vibrant folk dances and music. Participate in interactive performances and try traditional dance moves yourself.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">1.5 Hours</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Relaxing</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Evening</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Authentic Goan folk performances</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Bonfire setting</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Interactive participation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity 6: Bird Watching Trail -->
    <section class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/bird_watching.png" alt="Bird Watching Trail" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.6</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Bird Watching Trail</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Set out at dawn with our ornithologist to spot kingfishers, eagles, and visiting migratory birds. Use provided binoculars and guides to enhance your birdwatching adventure in peaceful surroundings.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">1.5 Hours</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Easy</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Dawn</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Expert-guided tour</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Spot rare migratory birds</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Includes equipment</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Activity 7: Wildlife Presentation -->
    <section class="py-6 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/projector.png" alt="Wildlife Presentation" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.5</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Wildlife Presentation</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            TEnjoy a vivid presentation on regional biodiversity. Discover local wildlife and learn about conservation efforts during your stay.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">45 Minutes</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Relaxing</span>
                            </div>
                            <p class="font-bold text-xs">Moderate to Challenging</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Evening</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">HD wildlife footage</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Conservation education</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Q&A with naturalists</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity 8: Pottery Workshop -->
    <section class="py-6 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/pottery.png" alt="Pottery Workshop" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                    
                    <!-- Eco Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full shadow-sm">
                        <p class="text-orange-400 flex items-center gap-1 text-xs font-medium">
                            <i data-lucide="leaf" class="w-3 h-3"></i>
                            <span>Eco-Certified</span>
                        </p>
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.7</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Pottery Workshop</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Shape your own clay creation with guidance from Goan master potters using authentic traditional techniques. Take home your personalised masterpiece as a lasting memory.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">1 Hour</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Creative</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Morning or Afternoon</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">All materials provided</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Traditional techniques</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Take home your creation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Activity 9: Resort Facilities -->
    <section class="py-6 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-stretch" data-aos="fade-up" data-aos-duration="400">
                <!-- Image Column -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="assets/images/activities/pool.jpg" alt="Resort Facilities" class="w-full h-[430px] object-cover transition-transform duration-500 hover:scale-105" loading="lazy">

                    <!-- Rating Badge -->
                    <div class="absolute bottom-4 right-4 bg-gradient-to-br from-amber-500 to-amber-600 p-3 rounded-lg shadow-lg">
                        <div class="flex items-center gap-1">
                            <div class="p-1 rounded-full bg-white/20">
                                <i data-lucide="star" class="w-4 h-4 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-lg font-bold">4.8</p>
                                <p class="text-[10px] font-light opacity-80">Guest Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="bg-white border border-gray-100 rounded-2xl p-4 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 leading-tight">Resort Facilities</h2>
                    
                    <div class="space-y-3 mb-4">
                        <p class="text-gray-600 mb-6">
                            Enjoy our infinity pool with sweeping views, tranquil garden paths, and comfortable relaxation areas. Attentive staff ensure your stay is seamless and enjoyable throughout.
                        </p>
                    </div>

                    <!-- Activity Info Cards -->
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="clock" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Duration</span>
                            </div>
                            <p class="font-bold text-xs">All Day</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="gauge" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Intensity</span>
                            </div>
                            <p class="font-bold text-xs">Relaxing</p>
                        </div>
                        <div class="bg-orange-50 p-2 rounded-lg">
                            <div class="flex items-center gap-1 mb-1">
                                <i data-lucide="sun" class="w-3 h-3 text-amber-500"></i>
                                <span class="text-xs font-lg">Best Time</span>
                            </div>
                            <p class="font-bold text-nowrap text-xs">Any Time</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="mb-6">
                        <h4 class="text-base font-semibold mb-2">Experience Highlights</h4>
                        <ul class="space-y-1">
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Infinity swimming pool</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">Lush garden spaces</span>
                            </li>
                            <li class="flex items-start">
                                <i data-lucide="check" class="text-amber-500 w-4 h-4 mt-0.5 mr-1 flex-shrink-0"></i>
                                <span class="text-gray-600">24/7 staff assistance</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Page-specific JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Page-specific functionality (AOS and Lucide are initialized in footer.php)
        // Activities page loaded
    });
    </script>
</main>

<?php include 'includes/footer.php'; ?>

</div>
</body>
</html>