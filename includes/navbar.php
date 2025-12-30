<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Function to check if accommodation page is active
function isAccommodationActive() {
    global $current_page;
    $accommodation_pages = ['forest-view', 'valley-view', 'family-valley', 'plunge-pool', 'plunge-pool-ac', 'accommodation'];
    return in_array($current_page, $accommodation_pages);
}
?>

<!-- Top Contact Ribbon -->
<header class="fixed top-0 pt-0 mx-auto z-50 transition-all duration-300 w-screen font-sans bg-primary-900/25 backdrop-blur-md py-2 border-gray-200/5" id="main-header">
    <div class="w-full mb-2 mt-0 z-50 top-0 left-0 border-b transition-all duration-300 border-yellow-500/30 text-white text-sm py-1 px-4 sm:px-6 flex justify-end items-center bg-primary-900/25 backdrop-blur-md py-2" id="contact-ribbon">
        <div class="flex flex-row items-center gap-3 overflow-x-auto whitespace-nowrap scrollbar-hide w-full justify-end">
            <a href="tel:+919480022108" class="flex items-center min-w-0 hover:text-primary-200 flex-shrink-0">
                <div class="bg-orange-500 mr-2 rounded-full w-6 h-6 flex items-center justify-center p-1 flex-shrink-0">
                    <i data-lucide="phone" size="14" class="text-white"></i>
                </div>
                <span class="text-sm sm:text-base truncate">94800 22108</span>
            </a>
            <a href="mailto:book@wildernestgoa.com" class="flex items-center min-w-0 hover:text-primary-200 flex-shrink-0">
                <div class="bg-orange-500 mr-2 rounded-full w-6 h-6 flex items-center justify-center p-1 flex-shrink-0">
                    <i data-lucide="mail" size="14" class="text-white"></i>
                </div>
                <span class="text-sm sm:text-base truncate">book@wildernestgoa.com</span>
            </a>
        </div>
    </div>

    <div class="w-full mx-auto flex items-center justify-between px-10 sm:px-8">
        <a href="index.php" class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 flex items-center justify-center shadow-sm">
                <span class="text-white font-bold text-base sm:text-lg">W</span>
            </div>
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white" id="logo-text">
                Wildernest
            </h1>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center font-semibold uppercase space-x-3">
            <a href="about.php" class="px-4 py-2 rounded-lg text-base transition-colors <?php echo isActivePage('about') ? 'text-orange-500 font-semibold' : 'text-white hover:text-orange-500'; ?>">
                About
            </a>

            <!-- Accommodation Dropdown -->
            <div class="relative" id="accommodation-dropdown">
                <button class="px-4 py-2 rounded-lg text-base transition-colors uppercase flex items-center gap-1 <?php echo isAccommodationActive() ? 'text-orange-600 font-semibold' : 'text-white hover:text-orange-500'; ?>" id="accommodation-btn">
                    Accommodation
                    <i data-lucide="chevron-down" size="16" class="transition-transform" id="accommodation-chevron"></i>
                </button>

                <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-xl py-2 z-50 border border-gray-200 opacity-0 invisible transition-all duration-200" id="accommodation-menu">
                    <a href="forest-view.php" class="block px-4 py-3 text-base !text-black hover:bg-amber-50 hover:!text-orange-600" onclick="closeAccommodationMenu()">
                        Forest View Cottage
                    </a>
                    <a href="valley-view.php" class="block px-4 py-3 text-base !text-black hover:bg-amber-50 hover:!text-orange-600" onclick="closeAccommodationMenu()">
                        Valley View Cottage
                    </a>
                    <a href="family-valley.php" class="block px-4 py-3 text-base !text-black hover:bg-amber-50 hover:!text-orange-600" onclick="closeAccommodationMenu()">
                        Family Valley View
                    </a>
                    <a href="plunge-pool.php" class="block px-4 py-3 text-base !text-black hover:bg-amber-50 hover:!text-orange-600" onclick="closeAccommodationMenu()">
                        Private Plunge Pool
                    </a>
                    <a href="plunge-pool-ac.php" class="block px-4 py-3 text-base !text-black hover:bg-amber-50 hover:!text-orange-600" onclick="closeAccommodationMenu()">
                        Private Plunge Pool (AC)
                    </a>
                </div>
            </div>

            <a href="activities.php" class="px-4 py-2 rounded-lg text-base transition-colors <?php echo isActivePage('activities') ? 'text-orange-500 font-semibold' : 'text-white hover:text-orange-500'; ?>">
                Activities
            </a>

            <a href="gallery.php" class="px-4 py-2 rounded-lg text-base transition-colors <?php echo isActivePage('gallery') ? 'text-orange-500 font-semibold' : 'text-white hover:text-orange-500'; ?>">
                Gallery
            </a>

            <a href="how-to-reach.php" class="px-4 py-2 rounded-lg text-base transition-colors <?php echo isActivePage('how-to-reach') ? 'text-orange-500 font-semibold' : 'text-white hover:text-orange-500'; ?>">
                Location
            </a>

            <a href="contact.php" class="px-4 py-2 rounded-lg text-base transition-colors <?php echo isActivePage('contact') ? 'text-orange-500 font-semibold' : 'text-white hover:text-orange-500'; ?>">
                Contact
            </a>
        </nav>

        <!-- Desktop Buttons -->
        <div class="hidden lg:flex items-center gap-3">
            <a href="book.php" class="px-5 py-2.5 rounded-lg text-base font-semibold transition-all shadow-sm hover:shadow-md bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white hover:text-white">
                PLAN YOUR TRIP
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex items-center lg:hidden gap-2">
            <button class="p-2 rounded-lg transition-colors text-white hover:bg-white/20" aria-label="Open menu" id="mobile-menu-btn">
                <i data-lucide="menu" size="24" id="menu-icon"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Sidebar -->
<div class="fixed top-0 right-0 h-screen w-80 bg-white z-50 shadow-2xl rounded-l-3xl transform translate-x-full transition-transform duration-300 ease-in-out" id="mobile-sidebar">
    <div class="flex flex-col h-screen pt-16 pb-6 px-6">
        <!-- Close Button -->
        <button class="absolute top-4 right-4 p-2 rounded-full hover:bg-gray-100 transition-colors" onclick="closeMobileMenu()" aria-label="Close menu">
            <i data-lucide="x" size="24" class="text-gray-600"></i>
        </button>
        
        <!-- Mobile Breadcrumb Header -->
        <div class="mb-4 pb-3 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900 mb-2">Navigation</h2>
            <div class="flex items-center text-sm text-gray-600">
                <i data-lucide="home" size="14" class="mr-1 text-gray-600"></i>
                <span class="text-gray-600">Wildernest</span>
                <i data-lucide="chevron-right" size="14" class="mx-1 text-gray-400"></i>
                <span class="text-orange-600 font-medium">Menu</span>
            </div>
        </div>
        
        <nav class="flex flex-col space-y-1 flex-grow overflow-y-auto">
            <a href="index.php" class="py-3 px-4 text-base rounded-lg flex items-center gap-3 transition-all <?php echo isActivePage('index') ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                <i data-lucide="home" size="18" class="text-gray-700"></i>
                <span>Home</span>
            </a>
            <a href="about.php" class="py-3 px-4 text-base rounded-lg flex items-center gap-3 transition-all <?php echo isActivePage('about') ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                <i data-lucide="info" size="18" class="text-gray-700"></i>
                <span>About</span>
            </a>

            <!-- Mobile Accommodation Dropdown -->
            <div class="border-l-4 border-transparent">
                <button class="w-full py-3 px-4 text-base rounded-lg flex items-center justify-between transition-all <?php echo isAccommodationActive() ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" id="mobile-accommodation-btn">
                    <div class="flex items-center gap-3">
                        <i data-lucide="bed" size="18" class="text-gray-700"></i>
                        <span>Accommodation</span>
                    </div>
                    <i data-lucide="chevron-down" size="16" class="transition-transform text-gray-700" id="mobile-accommodation-chevron"></i>
                </button>

                <div class="overflow-hidden pl-6 mt-1 max-h-0 transition-all duration-200" id="mobile-accommodation-menu">
                    <div class="border-l-2 border-gray-200 ml-2 pl-4 space-y-1">
                        <a href="forest-view.php" class="block py-2 px-3 text-sm text-gray-800 hover:text-orange-600 hover:bg-amber-50 rounded-md transition-all" onclick="closeMobileAccommodation(); closeMobileMenu();">
                            Forest View Cottage
                        </a>
                        <a href="valley-view.php" class="block py-2 px-3 text-sm text-gray-800 hover:text-orange-600 hover:bg-amber-50 rounded-md transition-all" onclick="closeMobileAccommodation(); closeMobileMenu();">
                            Valley View Cottage
                        </a>
                        <a href="family-valley.php" class="block py-2 px-3 text-sm text-gray-800 hover:text-orange-600 hover:bg-amber-50 rounded-md transition-all" onclick="closeMobileAccommodation(); closeMobileMenu();">
                            Family Valley View
                        </a>
                        <a href="plunge-pool.php" class="block py-2 px-3 text-sm text-gray-800 hover:text-orange-600 hover:bg-amber-50 rounded-md transition-all" onclick="closeMobileAccommodation(); closeMobileMenu();">
                            Private Plunge Pool
                        </a>
                        <a href="plunge-pool-ac.php" class="block py-2 px-3 text-sm text-gray-800 hover:text-orange-600 hover:bg-amber-50 rounded-md transition-all" onclick="closeMobileAccommodation(); closeMobileMenu();">
                            Private Plunge Pool (AC)
                        </a>
                    </div>
                </div>
            </div>

            <a href="activities.php" class="py-3 px-4 text-base rounded-lg flex items-center gap-3 transition-all <?php echo isActivePage('activities') ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                <i data-lucide="calendar" size="18" class="text-gray-700"></i>
                <span>Activities</span>
            </a>
            <a href="gallery.php" class="py-3 px-4 text-base rounded-lg flex items-center gap-3 transition-all <?php echo isActivePage('gallery') ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                <i data-lucide="image" size="18" class="text-gray-700"></i>
                <span>Gallery</span>
            </a>
            <a href="how-to-reach.php" class="py-3 px-4 text-base rounded-lg flex items-center gap-3 transition-all <?php echo isActivePage('how-to-reach') ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                <i data-lucide="map-pin" size="18" class="text-gray-700"></i>
                <span>Location</span>
            </a>
            <a href="contact.php" class="py-3 px-4 text-base rounded-lg flex items-center gap-3 transition-all <?php echo isActivePage('contact') ? 'bg-amber-50 text-orange-600 font-semibold border-l-4 border-orange-500' : 'text-gray-900 hover:bg-gray-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                <i data-lucide="phone" size="18" class="text-gray-700"></i>
                <span>Contact</span>
            </a>
        </nav>

        <!-- Mobile Action Buttons -->
        <div class="mt-4 pt-4 border-t border-gray-200 space-y-3">
            <div class="mb-2">
                <h3 class="text-sm font-medium text-gray-700 mb-2">Quick Actions</h3>
            </div>
            <a href="book.php" class="block py-3 px-4 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white hover:text-white rounded-lg text-center font-semibold text-base transition-all shadow-sm hover:shadow-md flex items-center justify-center gap-3" onclick="closeMobileMenu()">
                <i data-lucide="calendar" size="18"></i>
                <span>Plan Your Trip</span>
            </a>
            <a href="tel:+919480022108" class="block py-3 px-4 bg-green-600 hover:bg-green-700 text-white hover:text-white rounded-lg text-center font-semibold text-base transition-colors shadow-sm hover:shadow-md flex items-center justify-center gap-3" onclick="closeMobileMenu()">
                <i data-lucide="phone" size="18"></i>
                <span>Call Us Now</span>
            </a>
        </div>
    </div>
</div>

<!-- Mobile Sidebar Overlay -->
<div class="fixed h-screen w-screen top-0 left-0 inset-0 bg-black z-40 opacity-0 invisible transition-all duration-300" id="mobile-sidebar-overlay"></div>