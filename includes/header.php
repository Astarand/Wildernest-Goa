<?php
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

function isActivePage($page) {
    return getCurrentPage() === $page;
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('Asia/Kolkata');
?>
    
    <!-- Canonical URL -->
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $canonical_url = 'https://wildernestgoa.com/' . ($current_page === 'index.php' ? '' : $current_page);
    ?>
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    
    <!-- Resource Hints for Performance -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdn.tailwindcss.com">
    <link rel="dns-prefetch" href="//unpkg.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//code.jquery.com">
    
    <!-- Preload Critical Images -->
    <link rel="preload" href="assets/images/Home/hero.webp" as="image" type="image/webp">
    
    <!-- Tailwind CSS CDN - Development Only -->
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Note: Replace with compiled Tailwind CSS for production -->
    
    <!-- Tailwind Config (Exact from React Version) -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#e6f9f5',
                            100: '#ccf3eb',
                            200: '#99e8d6',
                            300: '#66dcc2',
                            400: '#33d1ad',
                            500: '#00c599',
                            600: '#009e7a',
                            700: '#00765c',
                            800: '#004f3d',
                            900: '#00271f',
                        },
                        secondary: {
                            50: '#e6f1ff',
                            100: '#cce3ff',
                            200: '#99c8ff',
                            300: '#66acff',
                            400: '#3391ff',
                            500: '#0075ff',
                            600: '#005ecc',
                            700: '#004699',
                            800: '#002f66',
                            900: '#001733',
                        },
                        accent: {
                            50: '#fff3e6',
                            100: '#ffe8cc',
                            200: '#ffd199',
                            300: '#ffba66',
                            400: '#ffa333',
                            500: '#ff8c00',
                            600: '#cc7000',
                            700: '#995400',
                            800: '#663800',
                            900: '#331c00',
                        },
                        success: {
                            50: '#e7f9e7',
                            100: '#cff3cf',
                            200: '#9fe89f',
                            300: '#6fdc6f',
                            400: '#3fd13f',
                            500: '#10c610',
                            600: '#0d9e0d',
                            700: '#0a770a',
                            800: '#064f06',
                            900: '#032803',
                        },
                        warning: {
                            50: '#fff9e6',
                            100: '#fff3cc',
                            200: '#ffe799',
                            300: '#ffdb66',
                            400: '#ffcf33',
                            500: '#ffc300',
                            600: '#cc9c00',
                            700: '#997500',
                            800: '#664e00',
                            900: '#332700',
                        },
                        error: {
                            50: '#fde9e9',
                            100: '#fbd3d3',
                            200: '#f7a6a6',
                            300: '#f37a7a',
                            400: '#ef4d4d',
                            500: '#eb2121',
                            600: '#bc1a1a',
                            700: '#8d1414',
                            800: '#5e0d0d',
                            900: '#2f0707',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                    },
                    borderRadius: {
                        '4xl': '2rem',
                    },
                    boxShadow: {
                        glow: '0 0 20px rgba(0, 197, 153, 0.3)',
                        glass: '0 4px 30px rgba(0, 0, 0, 0.1)',
                    },
                    backgroundImage: {
                        'gradient-primary': 'linear-gradient(to right, #00c599, #0075ff)',
                        'gradient-secondary': 'linear-gradient(to right, #0075ff, #ff8c00)',
                        'hero-pattern': 'linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3))',
                    },
                    animation: {
                        float: 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                    },
                }
            }
        }
    </script>
    
    <!-- Google Fonts - Load immediately -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- External CSS Libraries - Load immediately -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    
    <!-- Main CSS Files - Aggressive Loading -->
    <link rel="preload" href="assets/css/global.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/global.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </noscript>
    
    <!-- Immediate CSS Loading (Fallback) -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Additional CSS -->
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/mobile-responsive.css">
    
    <!-- Image Zoom Fix -->
    <style>
        /* Override Tailwind transitions for smooth zoom */
        .transition-transform.duration-1000 {
            transition: transform 0.5s ease !important;
        }
        
        .transition-transform.duration-700 {
            transition: transform 0.4s ease !important;
        }
        
        .transition-transform.duration-300 {
            transition: transform 0.3s ease !important;
        }
        
        /* Direct hover scale effects */
        .hover\:scale-105:hover {
            transform: scale(1.05) !important;
        }
        
        .hover\:scale-110:hover {
            transform: scale(1.1) !important;
        }
        
        .hover\:scale-\[1\.02\]:hover {
            transform: scale(1.02) !important;
        }
        
        /* Group hover effects */
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1) !important;
        }
        
        .group:hover .group-hover\:scale-105 {
            transform: scale(1.05) !important;
        }
        
        /* Gallery specific */
        .gallery-item:hover {
            transform: scale(1.05) !important;
        }
        
        /* Ensure all images have smooth transitions */
        img {
            transition: transform 0.3s ease;
        }
        
        /* AOS basic styles */
        [data-aos] {
            pointer-events: auto;
        }
        
        /* Hero content - always visible (fix for AOS issues) */
        .hero-title, .hero-subtitle, .hero-buttons {
            opacity: 1 !important;
            visibility: visible !important;
            transform: none !important;
        }
        
        /* Override AOS hiding on critical content */
        .hero-title[data-aos],
        .hero-subtitle[data-aos],
        .hero-buttons[data-aos] {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }
        
        /* Ensure hero text is always visible */
        .hero-section h1,
        .hero-section p,
        .hero-section a,
        .hero-section div {
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>