<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>About Us | Wildernest Nature Resort - Western Ghats Eco Retreat</title>
    <meta name="description" content="Discover Wildernest Nature Resort in the Western Ghats, a 700-acre eco-retreat at the meeting point of Goa, Karnataka, and Maharashtra since 2005.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php
    $page_title = "About Us | Wildernest Nature Resort - Western Ghats Eco Retreat";
    $page_description = "Discover Wildernest Nature Resort in the Western Ghats, a 700-acre eco-retreat at the meeting point of Goa, Karnataka, and Maharashtra since 2005.";
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
                <h3 class="text-xl text-white font-handwriting mb-2">Discover our essence</h3>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white relative mb-6">About Wildernest</h1>
                <p class="text-gray-100 text-base sm:text-lg max-w-3xl mx-auto px-4 sm:px-0">Wildernest Nature Resort: In the Heart of the Western Ghats</p>
            </div>
        </div>
    </div>

    <!-- Location & Introduction Section -->
    <section class="py-10 pt-20 px-4 sm:px-6 bg-white">
        <div class="text-center mb-20">
            <h3 class="text-xl text-black font-handwriting">Our sanctuary</h3>
            <h2 class="text-5xl font-bold text-black relative">
                Nestled Amid Two States, Bordered By Rainforests
                <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Location</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">Where Goa, Karnataka, and Maharashtra meet in natural harmony</p>
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Left Column - Image Section -->
                <div class="relative rounded-3xl overflow-hidden h-full shadow-xl hover:shadow-2xl transition-shadow duration-500" data-aos="fade-right">
                    <img src="assets/images/about/abt-1.webp" alt="Wildernest Nature Resort nestled in the Western Ghats" class="w-full h-full object-cover bg-cover bg-center transition-transform duration-700 hover:scale-105" loading="lazy">

                    <!-- Location Badge -->
                    <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
                        <p class="text-orange-400 flex items-center gap-2 text-sm font-medium">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Chorla Ghats, Western Ghats</span>
                        </p>
                    </div>

                    <!-- Acreage Badge -->
                    <div class="absolute bottom-6 right-6 bg-gradient-to-br from-green-600 to-green-700 p-4 rounded-xl shadow-2xl">
                        <div class="flex items-center gap-2">
                            <div class="p-2 rounded-full bg-white/20">
                                <i data-lucide="leaf" class="w-5 h-5 text-white fill-white"></i>
                            </div>
                            <div class="text-white">
                                <p class="text-xl font-bold">700</p>
                                <p class="text-xs font-light opacity-80">Protected Acres</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Text Section -->
                <div class="bg-white border border-gray-100 rounded-3xl p-8 sm:p-10 shadow-lg hover:shadow-xl transition-all duration-500" data-aos="fade-left">
                    <p class="text-sm font-medium text-orange-400 mb-3 uppercase tracking-wider">Since 2005</p>
                    <h2 class="text-4xl sm:text-4xl font-bold text-gray-900 mb-8 leading-tight">
                        A Sanctuary in <span class="text-orange-400">Swapnagandha Valley</span>
                    </h2>

                    <div class="space-y-6 mb-10">
                        <p class="text-gray-600 leading-relaxed">
                            Wildernest Nature Resort stands atop the lush Chorla Ghats, at the meeting point of Goa, Karnataka, and Maharashtra. Since 2005, this 700-acre retreat in the Swapnagandha Valley has been surrounded by ancient rainforests teeming with rare species, medicinal plants, and waterfalls.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Our close partnerships with nearby villages have fostered sustainable employment and supported local livelihoods. Together, we've safeguarded the beauty and diversity of the valley, enriching the surrounding community.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="gallery.php" class="flex items-center justify-center gap-3 bg-gradient-to-tl from-orange-400 to-yellow-400 hover:bg-orange-400 text-white hover:text-white px-8 py-3 rounded-xl font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                            Gallery
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="accommodation.php" class="flex items-center justify-center gap-3 bg-transparent border-2 border-gray-200 hover:border-orange-400 text-gray-800 px-8 py-3 rounded-xl font-medium transition-all duration-300">
                            Accommodation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="py-10 px-4 sm:px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Left Column - Text Section -->
                <div class="bg-white border border-gray-100 rounded-3xl p-8 sm:p-10 shadow-lg hover:shadow-xl transition-all duration-500" data-aos="fade-right">
                    <p class="text-sm font-medium text-orange-400 mb-3 uppercase tracking-wider">Our Foundation</p>
                    <h2 class="text-4xl sm:text-4xl font-bold text-gray-900 mb-8 leading-tight">
                        A Vision Born From <span class="text-orange-400">Urgency</span>
                    </h2>

                    <div class="space-y-6 mb-10">
                        <p class="text-gray-600 leading-relaxed">
                            More than 20 years ago, Captain Nitin Dhond, now Managing Director, began protecting this region from timber extraction, mining, and monocultures. He united nature lovers and wildlife experts in a new conservation movement.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Since welcoming guests in 2005, Wildernest has been a leader in eco-tourism in Goa, setting the standard for responsible travel. By staying with us, you directly aid conservation and help preserve this unique ecosystem.
                        </p>
                    </div>

                    <div class="bg-amber-50 p-4 rounded-xl border-l-4 border-amber-400">
                        <p class="text-amber-700 italic">
                            "Let your heart beat with the forests, let your mind rest in the clouds—welcome to Wildernest."
                        </p>
                        <p class="text-amber-600 text-sm mt-2">- Captain Nitin Dhond, Managing Director</p>
                    </div>
                </div>

                <!-- Right Column - Image Section -->
                <div class="relative rounded-3xl overflow-hidden h-full shadow-xl hover:shadow-2xl transition-shadow duration-500" data-aos="fade-left">
                    <img src="assets/images/about/abt-2.webp" alt="Captain Nitin Dhond, Managing Director of Wildernest" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" loading="lazy">

                    <!-- Founding Year Badge -->
                    <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
                        <p class="text-orange-400 flex items-center gap-2 text-sm font-medium">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                            <span>Founded in 2005</span>
                        </p>
                    </div>

                    <!-- Elevation Badge -->
                    <div class="absolute bottom-6 right-6 bg-gradient-to-br from-blue-600 to-blue-700 p-4 rounded-xl shadow-2xl">
                        <div class="flex items-center gap-2">
                            <div class="p-2 rounded-full bg-white/20">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="text-white">
                                <p class="text-xl font-bold">800m</p>
                                <p class="text-xs font-light opacity-80">Above Sea Level</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>    
<!-- Climate Section -->
    <section class="py-10 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="fade-right">
                    <img src="assets/images/about/abt-3.webp" alt="Monsoon season at Wildernest Nature Resort" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div data-aos="fade-left">
                    <h3 class="text-xl text-black font-handwriting mb-2">Our Unique Environment</h3>
                    <h2 class="text-4xl font-bold text-black mb-6">Rain or Shine: The Wildernest Climate</h2>
                    <p class="text-gray-600 mb-6">
                        We thrive in misty valleys and rolling clouds. From June to September, the monsoons transform the forest into a vibrant green, fed by the Halatar and Valvanti rivers, both of which are vital to the Mahadayi River.
                    </p>
                    <p class="text-gray-600 mb-6">
                        The rest of the year brings fresh mountain air, birdsong, and temperatures from 15°C to 28°C—perfect for exploring the natural wonders of the Western Ghats.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div>
                            <h4 class="text-2xl font-bold text-orange-400 mb-2 flex items-center">
                                <i data-lucide="cloud-rain" class="w-6 h-6 mr-2"></i>
                                15°C
                            </h4>
                            <p class="text-gray-600">Coolest temperatures</p>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-orange-400 mb-2 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                28°C
                            </h4>
                            <p class="text-gray-600">Warmest temperatures</p>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-orange-400 mb-2">Jun-Sept</h4>
                            <p class="text-gray-600">Monsoon season</p>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-orange-400 mb-2">2 Rivers</h4>
                            <p class="text-gray-600">Halatar & Valvanti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conservation Section -->
    <section class="py-10 px-4 sm:px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h3 class="text-xl text-black font-handwriting mb-2">Our Commitment</h3>
                    <h2 class="text-4xl font-bold text-black mb-6">Conservation in Action</h2>
                    <p class="text-gray-600 mb-6">
                        We follow a 'minimal interference' philosophy: only 5 of our 700 acres are developed, with structures blending into the forest canopy. We conduct regular impact assessments, respect the area's carrying capacity, and have declared the forest a private wildlife sanctuary to prevent poaching and protect river catchments.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Since 2005, we have observed a 15% increase in sightings of native species, underscoring our commitment to preserving biodiversity.
                    </p>
                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-orange-100 p-2 rounded-full mr-4">
                                <i data-lucide="leaf" class="w-6 h-6 text-orange-400"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-800">Minimal Interference</h4>
                                <p class="text-gray-600">Only 5 of 700 acres developed</p>
                            </div>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="bg-orange-100 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-800">Wildlife Sanctuary</h4>
                                <p class="text-gray-600">Private sanctuary protecting native species</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-orange-100 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-800">15% Increase</h4>
                                <p class="text-gray-600">In native species sightings since 2005</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-xl" data-aos="fade-left">
                    <img src="assets/images/about/abt-4.webp" alt="Wildlife at Wildernest Nature Resort sanctuary" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-10 px-4 sm:px-6 bg-white">
        <div class="text-center mb-20">
            <h3 class="text-xl text-black font-handwriting">Your stay with us</h3>
            <h2 class="text-5xl font-bold text-black relative">
                More Than a Stay—An Immersion
                <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Experience</span>
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">Discover the authentic Western Ghats through immersive experiences</p>
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Left Column - Text Section -->
                <div class="bg-white border border-gray-100 rounded-3xl p-8 sm:p-10 shadow-lg hover:shadow-xl transition-all duration-500" data-aos="fade-right">
                    <p class="text-sm font-medium text-orange-400 mb-3 uppercase tracking-wider">Authentic Experiences</p>
                    <h2 class="text-4xl sm:text-4xl font-bold text-gray-900 mb-8 leading-tight">
                        Connect With Nature & <span class="text-orange-400">Community</span>
                    </h2>

                    <div class="space-y-6 mb-10">
                        <p class="text-gray-600 leading-relaxed">
                            The guest experience at Wildernest unfolds seamlessly from arrival. Guests begin by choosing one of 18 eco-cottages, each crafted from local materials and set amid the forest.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Upon settling in, guests can enjoy regional cuisine at our restaurant, relax in the Ayurvedic wellness center, or take a dip in the infinity pool overlooking the valley.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Each day reveals new moments: embark on guided nature walks, attend folk performances, or join naturalist-led talks that reveal Goa's secret wild soul. Throughout your stay, every activity directly supports the livelihoods of neighboring villages, with local communities playing a vital role in their preservation.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="accommodation.php" class="flex items-center justify-center gap-3 bg-gradient-to-tl from-orange-400 to-yellow-400 hover:bg-orange-400 hover:text-white text-white px-8 py-3 rounded-xl font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                            Accommodation
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="activities.php" class="flex items-center justify-center gap-3 bg-transparent border-2 border-gray-200 hover:border-orange-400 text-gray-800 px-8 py-3 rounded-xl font-medium transition-all duration-300">
                            Activities
                        </a>
                    </div>
                </div>

                <!-- Right Column - Image Section -->
                <div class="relative rounded-3xl overflow-hidden h-full shadow-xl hover:shadow-2xl transition-shadow duration-500" data-aos="fade-left">
                    <img src="assets/images/about/abt-5.webp" alt="Eco cottage at Wildernest Nature Resort" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" loading="lazy">

                    <!-- Cottage Badge -->
                    <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
                        <p class="text-orange-400 flex items-center gap-2 text-sm font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>18 Eco-Cottages</span>
                        </p>
                    </div>

                    <!-- Community Badge -->
                    <div class="absolute bottom-6 right-6 bg-gradient-to-br from-purple-600 to-purple-700 p-4 rounded-xl shadow-2xl">
                        <div class="flex items-center gap-2">
                            <div class="p-2 rounded-full bg-white/20">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="text-white">
                                <p class="text-xl font-bold">Local</p>
                                <p class="text-xs font-light opacity-80">Community Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our Promise Section -->
    <section class="pt-20 pb-10 px-4 sm:px-6 bg-gradient-to-br from-amber-50 to-amber-50">
        <div class="text-center mb-16">
            <h3 class="text-xl text-black font-handwriting">Our commitment to you</h3>
            <h2 class="text-5xl font-bold text-black relative">
                Our Promise
                <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Commitment</span>
            </h2>
        </div>

        <div class="max-w-4xl mx-auto text-center">
            <p class="text-lg text-gray-700 mb-10 leading-relaxed">
                Wildernest is a living example of the powerful alliance between conservation and hospitality. We invite you to reconnect with nature, experience the pulse of the Western Ghats, and leave only footprints—so this valley remains wild and wondrous for generations to come.
            </p>

            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 divide-x-2 divide-gray-200 gap-6">
                    <div class="text-center p-4">
                        <div class="bg-amber-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800">Founded</h3>
                        <p class="text-gray-600">2005</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="bg-amber-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800">Elevation</h3>
                        <p class="text-gray-600">800m ASL</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="bg-amber-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="cloud-rain" class="w-7 h-7 text-amber-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Climate</h3>
                        <p class="text-gray-600">Monsoon Green</p>
                    </div>
                </div>
            </div>

            <p class="mt-10 text-2xl font-handwriting text-gray-800">Come, find your wild.</p>
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