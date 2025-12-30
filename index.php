<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Wildernest Nature Resort | Luxury Eco-Tourism in Goa</title>
    <meta name="description" content="Experience luxury eco-tourism at Wildernest Nature Resort in Goa, India. Book your stay in our beautiful accommodations surrounded by nature.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Wildernest Nature Resort | Luxury Eco-Tourism in Goa">
    <meta property="og:description" content="Experience luxury eco-tourism at Wildernest Nature Resort in Goa, India. Book your stay in our beautiful accommodations surrounded by nature.">
    <meta property="og:url" content="https://wildernestgoa.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Wildernest Nature Resort">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wildernest Nature Resort | Luxury Eco-Tourism in Goa">
    <meta name="twitter:description" content="Experience luxury eco-tourism at Wildernest Nature Resort in Goa, India. Book your stay in our beautiful accommodations surrounded by nature.">

    <?php include 'includes/header.php'; ?>
</head>
<body class="font-sans text-gray-800 bg-white">
    <div class="flex bg-transparent flex-col min-h-screen">

        <main class="flex-grow">
            <?php include 'includes/navbar.php'; ?>
            <!-- Hero Section -->
            <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url('assets/images/Home/hero.webp');"></div>

                <div class="container mx-auto px-6 relative z-10 text-center">
                    <div class="max-w-3xl mx-auto hero-title">
                        <h1 class="text-white font-display mb-6 text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight font-bold lg:font-black">
                            Experience Nature's Luxury in
                            <span class="text-gradient">Goa</span>
                        </h1>
                        <p class="text-gray-200 text-base sm:text-lg mb-6 sm:mb-8 max-w-2xl mx-auto hero-subtitle px-4 sm:px-0">
                            Discover Wildernest, where modern luxury meets untouched nature. Our
                            eco-friendly resort offers a perfect blend of comfort and adventure
                            in Goa's most serene landscapes.
                        </p>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 hero-buttons px-4 sm:px-0">
                            <a href="book.php" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-tl from-orange-400 to-yellow-400 hover:bg-gradient-to-tl hover:from-orange-500 hover:to-yellow-500 text-white hover:text-white shadow-lg hover:shadow-xl transition-all rounded-full font-semibold text-base sm:text-lg min-h-[48px] flex items-center justify-center">
                                Book Your Stay
                            </a>
                            <a href="accommodation.php" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-4 border-2 border-white text-white hover:bg-white/10 transition-all rounded-full font-semibold text-base sm:text-lg flex items-center justify-center min-h-[48px]">
                                Explore Rooms
                                <i data-lucide="chevron-right" class="ml-1 w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Resort Highlights Section -->
            <section class="relative bottom-10 bg-gradient-to-b from-white/5 to-[#f6f2e9] py-20 overflow-hidden">
                <!-- Wavy top border -->
                <div class="absolute top-0 left-0 right-0 overflow-hidden rotate-180">
                    <svg viewBox="0 0 1200 120" class="w-full h-12 text-white" preserveAspectRatio="none">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="currentColor" opacity="1"></path>
                    </svg>
                </div>

                <div class="container mx-auto px-4 sm:px-6 relative z-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                        <!-- Feature 1: Best Destinations -->
                        <div class="relative p-4 sm:p-6 lg:p-8 group hover:bg-white/30 transition-all duration-300 rounded-xl" data-aos="fade-up" data-aos-delay="100">
                            <span class="absolute -top-2 sm:-top-4 left-2 sm:left-4 text-[60px] sm:text-[80px] lg:text-[100px] font-bold text-gray-300/30 -z-10">01</span>
                            <div class="flex flex-col items-center text-center gap-3 sm:gap-4">
                                <div class="text-amber-600 text-2xl sm:text-3xl flex items-center justify-center">
                                    <i data-lucide="map-pin" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Best Destinations</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Discover the most breathtaking locations in Goa, from pristine beaches to lush hills, all accessible from our resort.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2: Beaches -->
                        <div class="relative p-4 sm:p-6 lg:p-8 group hover:bg-white/30 transition-all duration-300 rounded-xl" data-aos="fade-up" data-aos-delay="200">
                            <span class="absolute -top-2 sm:-top-4 left-2 sm:left-4 text-[60px] sm:text-[80px] lg:text-[100px] font-bold text-gray-300/30 -z-10">02</span>
                            <div class="flex flex-col items-center text-center gap-3 sm:gap-4">
                                <div class="text-amber-600 text-2xl sm:text-3xl flex items-center justify-center">
                                    <i data-lucide="umbrella" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Beaches</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Relax on Goa's stunning beaches, just a short distance from Wildernest, offering sun, sand, and serenity.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3: Hiking -->
                        <div class="relative p-4 sm:p-6 lg:p-8 group hover:bg-white/30 transition-all duration-300 rounded-xl" data-aos="fade-up" data-aos-delay="300">
                            <span class="absolute -top-2 sm:-top-4 left-2 sm:left-4 text-[60px] sm:text-[80px] lg:text-[100px] font-bold text-gray-300/30 -z-10">03</span>
                            <div class="flex flex-col items-center text-center gap-3 sm:gap-4">
                                <div class="text-amber-600 text-2xl sm:text-3xl flex items-center justify-center">
                                    <i data-lucide="mountain" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Hiking</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Embark on scenic hiking trails through the Western Ghats, exploring diverse flora and fauna.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4: Cycling -->
                        <div class="relative p-4 sm:p-6 lg:p-8 group hover:bg-white/30 transition-all duration-300 rounded-xl" data-aos="fade-up" data-aos-delay="400">
                            <span class="absolute -top-2 sm:-top-4 left-2 sm:left-4 text-[60px] sm:text-[80px] lg:text-[100px] font-bold text-gray-300/30 -z-10">04</span>
                            <div class="flex flex-col items-center text-center gap-3 sm:gap-4">
                                <div class="text-amber-600 text-2xl sm:text-3xl flex items-center justify-center">
                                    <i data-lucide="bike" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Cycling</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Cycle through picturesque paths and enjoy the fresh air and panoramic views of Goa's countryside.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 5: Boating -->
                        <div class="relative p-4 sm:p-6 lg:p-8 group hover:bg-white/30 transition-all duration-300 rounded-xl" data-aos="fade-up" data-aos-delay="500">
                            <span class="absolute -top-2 sm:-top-4 left-2 sm:left-4 text-[60px] sm:text-[80px] lg:text-[100px] font-bold text-gray-300/30 -z-10">05</span>
                            <div class="flex flex-col items-center text-center gap-3 sm:gap-4">
                                <div class="text-amber-600 text-2xl sm:text-3xl flex items-center justify-center">
                                    <i data-lucide="ship" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Boating</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Experience thrilling boat rides on local rivers and lakes, immersing yourself in Goa's aquatic beauty.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 6: Trekking -->
                        <div class="relative p-4 sm:p-6 lg:p-8 group hover:bg-white/30 transition-all duration-300 rounded-xl" data-aos="fade-up" data-aos-delay="600">
                            <span class="absolute -top-2 sm:-top-4 left-2 sm:left-4 text-[60px] sm:text-[80px] lg:text-[100px] font-bold text-gray-300/30 -z-10">06</span>
                            <div class="flex flex-col items-center text-center gap-3 sm:gap-4">
                                <div class="text-amber-600 text-2xl sm:text-3xl flex items-center justify-center">
                                    <i data-lucide="mountain" class="w-6 h-6 sm:w-8 sm:h-8"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Trekking</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Join guided treks to hidden gems, uncovering the natural wonders of the region.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wavy bottom border -->
                <div class="absolute bottom-0 left-0 right-0 overflow-hidden rotate-180">
                    <svg viewBox="0 0 1200 120" class="w-full h-12 text-white" preserveAspectRatio="none">
                        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="currentColor" opacity="1"></path>
                    </svg>
                </div>
            </section>

        <!-- Adventure Ideas Section -->
            <section class="bg-white py-20 px-4 relative overflow-hidden">
                <div class="text-center mb-20">
                    <h3 class="text-xl text-black font-handwriting">Find your best adventure</h3>
                    <h2 class="text-5xl font-bold text-black relative">
                        Adventure Ideas
                        <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Travel</span>
                    </h2>
                </div>

                <!-- Adventure Cards Swiper -->
                <div class="container mx-auto">
                    <!-- Desktop Grid (4 columns) -->
                    <div class="hidden lg:grid grid-cols-4 gap-8">
                        <!-- Adventure 1: Kayaking -->
                        <div class="flex flex-col items-center text-center px-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md">
                                <img src="assets/images/Home/2.jpg" alt="KAYAKING" class="w-full h-full bg-cover bg-center object-cover">
                            </div>
                            <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">KAYAKING</h3>
                            <p class="text-gray-600 text-base mb-4 max-w-xs">Explore tranquil rivers and winding waters with thrilling kayaking adventures.</p>
                        </div>

                        <!-- Adventure 2: Hiking -->
                        <div class="flex flex-col items-center text-center px-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md">
                                <img src="assets/images/Home/3.jpg" alt="HIKING" class="w-full h-full bg-cover bg-center object-cover">
                            </div>
                            <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">HIKING</h3>
                            <p class="text-gray-600 text-base mb-4 max-w-xs">Trek through scenic trails and reconnect with nature on foot.</p>
                        </div>

                        <!-- Adventure 3: Mountain Climbing -->
                        <div class="flex flex-col items-center text-center px-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md">
                                <img src="assets/images/Home/4.jpg" alt="MOUNTAIN CLIMBING" class="w-full h-full bg-cover bg-center object-cover">
                            </div>
                            <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">MOUNTAIN CLIMBING</h3>
                            <p class="text-gray-600 text-base mb-4 max-w-xs">Conquer rugged peaks with exciting mountain climbing challenges.</p>
                        </div>

                        <!-- Adventure 4: Forest Adventure -->
                        <div class="flex flex-col items-center text-center px-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md">
                                <img src="assets/images/Home/5.jpg" alt="FOREST ADVENTURE" class="w-full h-full bg-cover bg-center object-cover">
                            </div>
                            <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">FOREST ADVENTURE</h3>
                            <p class="text-gray-600 text-base mb-4 max-w-xs">Dive into the wilderness and explore the lush green forests.</p>
                        </div>
                    </div>

                    <!-- Mobile/Tablet Swiper (1 slide visible) -->
                    <div class="lg:hidden">
                        <div class="swiper adventure-swiper">
                            <div class="swiper-wrapper">
                                <!-- Adventure 1: Kayaking -->
                                <div class="swiper-slide">
                                    <div class="flex flex-col items-center text-center px-6">
                                        <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md mx-auto">
                                            <img src="assets/images/Home/2.jpg" alt="KAYAKING" class="w-full h-full bg-cover bg-center object-cover">
                                        </div>
                                        <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">KAYAKING</h3>
                                        <p class="text-gray-600 text-base mb-4 max-w-xs mx-auto">Explore tranquil rivers and winding waters with thrilling kayaking adventures.</p>
                                    </div>
                                </div>

                                <!-- Adventure 2: Hiking -->
                                <div class="swiper-slide">
                                    <div class="flex flex-col items-center text-center px-6">
                                        <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md mx-auto">
                                            <img src="assets/images/Home/3.jpg" alt="HIKING" class="w-full h-full bg-cover bg-center object-cover">
                                        </div>
                                        <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">HIKING</h3>
                                        <p class="text-gray-600 text-base mb-4 max-w-xs mx-auto">Trek through scenic trails and reconnect with nature on foot.</p>
                                    </div>
                                </div>

                                <!-- Adventure 3: Mountain Climbing -->
                                <div class="swiper-slide">
                                    <div class="flex flex-col items-center text-center px-6">
                                        <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md mx-auto">
                                            <img src="assets/images/Home/4.jpg" alt="MOUNTAIN CLIMBING" class="w-full h-full bg-cover bg-center object-cover">
                                        </div>
                                        <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">MOUNTAIN CLIMBING</h3>
                                        <p class="text-gray-600 text-base mb-4 max-w-xs mx-auto">Conquer rugged peaks with exciting mountain climbing challenges.</p>
                                    </div>
                                </div>

                                <!-- Adventure 4: Forest Adventure -->
                                <div class="swiper-slide">
                                    <div class="flex flex-col items-center text-center px-6">
                                        <div class="w-60 h-60 mb-6 rounded-full overflow-hidden shadow-md mx-auto">
                                            <img src="assets/images/Home/5.jpg" alt="FOREST ADVENTURE" class="w-full h-full bg-cover bg-center object-cover">
                                        </div>
                                        <h3 class="text-xl font-extrabold tracking-wider mb-2 uppercase">FOREST ADVENTURE</h3>
                                        <p class="text-gray-600 text-base mb-4 max-w-xs mx-auto">Dive into the wilderness and explore the lush green forests.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Swiper Pagination -->
                            <div class="swiper-pagination mt-8"></div>

                            <!-- Swiper Navigation -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resort Section First (About2SectionHome) -->
            <section class="relative py-20 px-4 sm:px-6 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('assets/images/cta-bg.svg');">
                <!-- Dark overlay for better text contrast -->
                <div class="absolute inset-0 bg-black/30"></div>

                <div class="max-w-7xl mx-auto relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <!-- Left Column - Text Section -->
                        <div class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 sm:p-10 shadow-xl hover:shadow-2xl transition-all duration-500" data-aos="fade-right">
                            <p class="text-sm font-medium text-amber-400 mb-3 uppercase tracking-wider text-center lg:text-left">Luxury Meets Nature</p>
                            <h2 class="text-4xl sm:text-4xl font-bold text-white mb-8 leading-tight text-center lg:text-left">
                                Unforgettable Experiences <br> at <span class="text-amber-400">Wildernest Goa</span>
                            </h2>

                            <div class="space-y-6 mb-10">
                                <p class="text-gray-100 text-md leading-relaxed text-center lg:text-left">
                                    Nestled along Goa's pristine coastline, Wildernest Resort offers a perfect blend of luxury and nature, where you can unwind amidst palm trees and golden sands.
                                </p>
                                <p class="text-gray-100 text-md leading-relaxed text-center lg:text-left">
                                    Our eco-friendly resort is committed to sustainable tourism while providing world-class amenities and unparalleled comfort.
                                </p>
                            </div>

                            <ul class="space-y-5 mb-10">
                                <li class="flex items-center flex-col lg:flex-row lg:items-start text-center lg:text-left">
                                    <div class="flex-shrink-0 mb-3 lg:mb-0 lg:mt-1 lg:mr-4">
                                        <div class="w-8 h-8 rounded-full bg-amber-500/20 flex items-center justify-center mx-auto">
                                            <i data-lucide="palmtree" class="w-5 h-5 text-amber-400"></i>
                                        </div>
                                    </div>
                                    <p class="text-gray-200 text-md">Private beach access with exclusive cabanas and sunset views</p>
                                </li>
                                <li class="flex items-center flex-col lg:flex-row lg:items-start text-center lg:text-left">
                                    <div class="flex-shrink-0 mb-3 lg:mb-0 lg:mt-1 lg:mr-4">
                                        <div class="w-8 h-8 rounded-full bg-amber-500/20 flex items-center justify-center mx-auto">
                                            <i data-lucide="leaf" class="w-5 h-5 text-amber-400"></i>
                                        </div>
                                    </div>
                                    <p class="text-gray-200 text-md">Eco-conscious resort with sustainable practices</p>
                                </li>
                                <li class="flex items-center flex-col lg:flex-row lg:items-start text-center lg:text-left">
                                    <div class="flex-shrink-0 mb-3 lg:mb-0 lg:mt-1 lg:mr-4">
                                        <div class="w-8 h-8 rounded-full bg-amber-500/20 flex items-center justify-center mx-auto">
                                            <i data-lucide="waves" class="w-5 h-5 text-amber-400"></i>
                                        </div>
                                    </div>
                                    <p class="text-gray-200 text-md">Award-winning spa with organic treatments</p>
                                </li>
                            </ul>

                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                <a href="book.php" class="flex items-center justify-center gap-3 bg-amber-500 hover:bg-amber-600 text-white hover:text-white px-8 py-3 rounded-xl font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                                    Book Your Stay
                                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                </a>
                                <a href="accommodation.php" class="flex items-center justify-center gap-3 bg-transparent border-2 border-white/20 hover:border-amber-400 text-white px-8 py-3 rounded-xl font-medium transition-all duration-300">
                                    Explore Villas
                                </a>
                            </div>
                        </div>

                        <!-- Right Column - Image Section -->
                        <div class="relative rounded-3xl overflow-hidden h-[500px] lg:h-auto shadow-2xl" data-aos="fade-left">
                            <img src="assets/images/Home/3.jpg" alt="Luxury resort in Goa with palm trees and pool" class="w-full h-full object-cover transition-transform duration-1000 hover:scale-105">

                            <!-- Rating badge -->
                            <div class="absolute bottom-6 right-6 bg-gradient-to-br from-amber-500 to-amber-600 p-4 rounded-xl shadow-2xl">
                                <div class="flex items-center gap-2">
                                    <div class="p-2 rounded-full bg-white/20">
                                        <i data-lucide="star" class="w-5 h-5 text-white fill-white"></i>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-xl font-bold">5.0</p>
                                        <p class="text-xs font-light opacity-80">Guest Rating</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Location tag -->
                            <div class="absolute top-6 left-6 bg-black/60 backdrop-blur-sm px-4 py-2 rounded-full">
                                <p class="text-white flex items-center gap-2">
                                    <i data-lucide="palmtree" class="w-4 h-4 text-amber-400"></i>
                                    <span>Goa, India</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Journey Timeline Section -->
            <section class="py-20 px-4">
                <div class="text-center mb-20">
                    <h3 class="text-xl text-black font-handwriting">Our Successful Journey</h3>
                    <h2 class="text-5xl font-bold text-black relative">
                        Know Us
                        <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Journey</span>
                    </h2>
                    <p class="mt-4 max-w-2xl mx-auto text-gray-600">
                        From humble beginnings to a leading eco-tourism destination, discover the milestones that shaped Wildernest Nature Resort into the sanctuary it is today.
                    </p>
                </div>

                <div class="relative">
                    <div class="flex flex-wrap justify-between items-center max-w-7xl mx-auto gap-y-20">
                        <!-- Timeline Item 1: 1988 -->
                        <div class="flex flex-col items-center text-center w-[230px]" data-aos="fade-up" data-aos-delay="100">
                            <p class="text-gray-600 text-sm mb-4">Achieved eco-certification and began conservation programs for the Western Ghats.</p>
                            <h3 class="text-2xl font-bold mb-2">1988</h3>
                            <div class="w-3 h-3 bg-black rounded-full mb-4"></div>
                            <img src="assets/images/Home/2.jpg" alt="1988" class="w-full rounded-md shadow-md">
                        </div>

                        <!-- Timeline Item 2: 1986 -->
                        <div class="flex flex-col items-center text-center w-[230px]" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/images/Home/4.jpg" alt="1986" class="w-full rounded-md shadow-md mb-4">
                            <div class="w-3 h-3 bg-black rounded-full mb-4"></div>
                            <h3 class="text-2xl font-bold mb-2">1986</h3>
                            <p class="text-gray-600 text-sm">Introduced community-based tourism initiatives, supporting local artisans and culture.</p>
                        </div>

                        <!-- Timeline Item 3: 1984 -->
                        <div class="flex flex-col items-center text-center w-[230px]" data-aos="fade-up" data-aos-delay="300">
                            <p class="text-gray-600 text-sm mb-4">Expanded to include guided nature trails and wildlife observation experiences.</p>
                            <h3 class="text-2xl font-bold mb-2">1984</h3>
                            <div class="w-3 h-3 bg-black rounded-full mb-4"></div>
                            <img src="assets/images/Home/8.jpg" alt="1984" class="w-full rounded-md shadow-md">
                        </div>

                        <!-- Timeline Item 4: 1982 -->
                        <div class="flex flex-col items-center text-center w-[230px]" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/images/Home/7.jpg" alt="1982" class="w-full rounded-md shadow-md mb-4">
                            <div class="w-3 h-3 bg-black rounded-full mb-4"></div>
                            <h3 class="text-2xl font-bold mb-2">1982</h3>
                            <p class="text-gray-600 text-sm">Founded as a small eco-lodge in Goa, committed to sustainable tourism practices.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Accommodation Section -->
            <section class="bg-cover bg-center py-20 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-20">
                        <h3 class="text-xl text-black font-handwriting">Find your perfect stay</h3>
                        <h2 class="text-5xl font-bold text-black relative">
                            Our Accommodations
                            <span class="absolute text-[120px] top-[-60px] left-1/2 transform -translate-x-1/2 text-black/5 font-bold select-none">Retreats</span>
                        </h2>
                        <p class="mt-4 max-w-2xl mx-auto text-gray-600">
                            Experience comfort amidst nature with our carefully curated selection of cottages and villas, each offering unique views and amenities.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Accommodation 1: Forest View Cottage -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative overflow-hidden h-64">
                                <a href="forest-view.php" class="block w-full h-full">
                                    <img src="assets/images/Home/6.jpg" alt="Forest View Cottage" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                </a>
                                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full shadow-md">
                                    <i data-lucide="heart" class="w-5 h-5 text-amber-600 fill-amber-600"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <h3 class="text-xl font-bold text-white">Forest View Cottage</h3>
                                    <div class="flex items-center text-white/90 mt-1">
                                        <i data-lucide="users" class="w-4 h-4 mr-1"></i>
                                        <span class="text-sm">Couple Retreat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-0.5 bg-amber-400 mr-3"></div>
                                    <p class="text-sm font-medium text-amber-600">Secluded forest immersion</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹8,000/night</span>
                                    </div>
                                    <a href="forest-view.php" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-sm hover:text-white">
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Accommodation 2: Valley View Cottage -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                            <div class="relative overflow-hidden h-64">
                                <a href="valley-view.php" class="block w-full h-full">
                                    <img src="assets/images/Home/7.jpg" alt="Valley View Cottage" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                </a>
                                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full shadow-md">
                                    <i data-lucide="heart" class="w-5 h-5 text-amber-600 fill-amber-600"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <h3 class="text-xl font-bold text-white">Valley View Cottage</h3>
                                    <div class="flex items-center text-white/90 mt-1">
                                        <i data-lucide="users" class="w-4 h-4 mr-1"></i>
                                        <span class="text-sm">Couple Retreat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-0.5 bg-amber-400 mr-3"></div>
                                    <p class="text-sm font-medium text-amber-600">Sunrise valley vistas</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹9,000/night</span>
                                    </div>
                                    <a href="valley-view.php" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-sm hover:text-white">
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Accommodation 3: Family Valley View -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                            <div class="relative overflow-hidden h-64">
                                <a href="family-valley.php" class="block w-full h-full">
                                    <img src="assets/images/Home/4.jpg" alt="Family Valley View" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                </a>
                                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full shadow-md">
                                    <i data-lucide="heart" class="w-5 h-5 text-amber-600 fill-amber-600"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <h3 class="text-xl font-bold text-white">Family Valley View</h3>
                                    <div class="flex items-center text-white/90 mt-1">
                                        <i data-lucide="users" class="w-4 h-4 mr-1"></i>
                                        <span class="text-sm">For 4 Adults</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-0.5 bg-amber-400 mr-3"></div>
                                    <p class="text-sm font-medium text-amber-600">Panoramic valley views</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹13,500/night</span>
                                    </div>
                                    <a href="family-valley.php" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-sm hover:text-white">
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Accommodation 4: Private Plunge Pool (Valley view) -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group" data-aos="fade-up" data-aos-delay="400">
                            <div class="relative overflow-hidden h-64">
                                <a href="plunge-pool.php" class="block w-full h-full">
                                    <img src="assets/images/Home/5.jpg" alt="Private Plunge Pool (Valley view)" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                </a>
                                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full shadow-md">
                                    <i data-lucide="heart" class="w-5 h-5 text-amber-600 fill-amber-600"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <h3 class="text-xl font-bold text-white">Private Plunge Pool (Valley view)</h3>
                                    <div class="flex items-center text-white/90 mt-1">
                                        <i data-lucide="users" class="w-4 h-4 mr-1"></i>
                                        <span class="text-sm">Couple Retreat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-0.5 bg-amber-400 mr-3"></div>
                                    <p class="text-sm font-medium text-amber-600">Private plunge pool</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹12,000/night</span>
                                    </div>
                                    <a href="plunge-pool.php" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-sm hover:text-white">
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Accommodation 5: Private Plunge Pool (Valley view-AC) -->
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group" data-aos="fade-up" data-aos-delay="500">
                            <div class="relative overflow-hidden h-64">
                                <a href="plunge-pool-ac.php" class="block w-full h-full">
                                    <img src="assets/images/Home/8.jpg" alt="Private Plunge Pool (Valley view-AC)" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                </a>
                                <div class="absolute top-4 right-4 bg-white/90 p-2 rounded-full shadow-md">
                                    <i data-lucide="heart" class="w-5 h-5 text-amber-600 fill-amber-600"></i>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <h3 class="text-xl font-bold text-white">Private Plunge Pool (Valley view-AC)</h3>
                                    <div class="flex items-center text-white/90 mt-1">
                                        <i data-lucide="users" class="w-4 h-4 mr-1"></i>
                                        <span class="text-sm">Couple Retreat</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <div class="w-8 h-0.5 bg-amber-400 mr-3"></div>
                                    <p class="text-sm font-medium text-amber-600">Private AC plunge pool</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-2xl font-bold text-gray-900">₹13,500/night</span>
                                    </div>
                                    <a href="plunge-pool-ac.php" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg font-medium transition-colors text-sm hover:text-white">
                                        More Info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Extra Information Card -->
                        <div class="bg-white rounded-2xl shadow-lg border border-amber-100 overflow-hidden flex flex-col h-full" data-aos="fade-up" data-aos-delay="600">
                            <div class="bg-amber-50 p-6 flex items-center">
                                <div class="bg-amber-100 p-3 rounded-full mr-4">
                                    <i data-lucide="user-plus" class="w-6 h-6 text-amber-600"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Extra Guest Information</h3>
                            </div>
                            <div class="p-6 flex-grow">
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-amber-500 mt-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            <span class="font-medium">Extra Adult Charge:</span> ₹3,000 per night
                                        </p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-amber-500 mt-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            <span class="font-medium">Children Policy:</span> Children under 10 stay free
                                        </p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-amber-500 mt-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">
                                            <span class="font-medium">Maximum Occupancy:</span> Varies by room type
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-6 bg-amber-50 rounded-lg p-4">
                                    <p class="text-xs text-amber-800">
                                        Note: All rates are subject to 18% GST. Additional charges may apply for extra amenities.
                                    </p>
                                </div>
                            </div>
                            <div class="px-6 pb-6">
                                <a href="book.php" class="w-full py-3 bg-gradient-to-tl from-orange-400 to-yellow-400 hover:from-orange-500 hover:to-yellow-500 text-white hover:text-white font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                                    Plan Your Trip
                                    <i data-lucide="arrow-up-right" class="w-4 h-4 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                    <!-- Feature 1: Famous Hill Stations -->
                    <div class="relative text-white flex items-center justify-center px-8 py-16 min-h-[400px]" style="background-image: url('assets/images/Home/2.jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-delay="100">
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        <div class="relative z-10 text-center max-w-xs">
                            <div class="mb-5 flex justify-center">
                                <i data-lucide="mountain" class="w-12 h-12 text-white border-4 border-white rounded-full p-2"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Nature’s Luxury Unveiled</h3>
                            <p class="text-sm">Embrace serene landscapes, eco-friendly comfort, and unforgettable Goa adventures at Wildernest Resort.</p>
                        </div>
                    </div>

                    <!-- Feature 2: Boat Visiting Place -->
                    <div class="relative text-white flex items-center justify-center px-8 py-16 min-h-[400px]" style="background-image: url('assets/images/Home/4.jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-delay="200">
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        <div class="relative z-10 text-center max-w-xs">
                            <div class="mb-5 flex justify-center">
                                <i data-lucide="compass" class="w-12 h-12 text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Adventure Awaits Here</h3>
                            <p class="text-sm">Explore scenic hiking, cycling, and kayaking trails nestled among Goa’s lush forests and peaceful rivers.</p>
                        </div>
                    </div>

                    <!-- Feature 3: Best Hiking Place -->
                    <div class="relative text-white flex items-center justify-center px-8 py-16 min-h-[400px]" style="background-image: url('assets/images/Home/3.jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-delay="300">
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        <div class="relative z-10 text-center max-w-xs">
                            <div class="mb-5 flex justify-center">
                                <i data-lucide="map-pin" class="w-12 h-12 text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Eco-Friendly Retreats</h3>
                            <p class="text-sm">Stay in thoughtfully designed cottages, enjoy panoramic views, and experience nature with sustainable practices.</p>
                        </div>
                    </div>
                </div>
            </section>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Initialize scroll indicator animation
                    const scrollIndicator = document.querySelector('.scroll-indicator');
                    if (scrollIndicator) {
                        // Hide on scroll
                        window.addEventListener('scroll', () => {
                            if (window.pageYOffset > 100) {
                                scrollIndicator.style.opacity = '0';
                            } else {
                                scrollIndicator.style.opacity = '1';
                            }
                        });
                    }

                    // Page-specific functionality (AOS and Lucide are initialized in footer.php)

                    // Add smooth scrolling for anchor links
                    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                        anchor.addEventListener('click', function (e) {
                            e.preventDefault();
                            const target = document.querySelector(this.getAttribute('href'));
                            if (target) {
                                target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }
                        });
                    });

                    // Add bounce animation for scroll indicator
                    const style = document.createElement('style');
                    style.textContent = `
                        @keyframes bounce-scroll {
                            0%, 100% { transform: translateY(0); }
                            50% { transform: translateY(10px); }
                        }
                        .animate-bounce-scroll {
                            animation: bounce-scroll 1.5s infinite;
                        }
                    `;
                    document.head.appendChild(style);

                    // Image loading optimization
                    const images = document.querySelectorAll('img');
                    images.forEach(img => {
                        img.addEventListener('load', function() {
                            this.classList.add('loaded');
                            this.classList.remove('loading');
                        });

                        img.addEventListener('error', function() {
                            // Failed to load image
                            this.classList.add('error');
                        });

                        // Add loading class initially
                        if (!img.complete) {
                            img.classList.add('loading');
                        } else {
                            img.classList.add('loaded');
                        }
                    });

                    // Lazy loading for images
                    if ('IntersectionObserver' in window) {
                        const imageObserver = new IntersectionObserver((entries, observer) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    const img = entry.target;
                                    if (img.dataset.src) {
                                        img.src = img.dataset.src;
                                        img.removeAttribute('data-src');
                                        observer.unobserve(img);
                                    }
                                }
                                });
                            });
                        document.querySelectorAll('img[data-src]').forEach(img => {
                            imageObserver.observe(img);
                        });
                    }
                });
            </script>
        </main>

        <?php include 'includes/footer.php'; ?>

    </div>
</body>
</html>
