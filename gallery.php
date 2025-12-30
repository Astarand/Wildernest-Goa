<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Gallery | Wildernest Nature Resort, Goa</title>
    <meta name="description" content="Explore the stunning visuals of Wildernest Nature Resort through our gallery showcasing luxurious accommodations, breathtaking landscapes, and unforgettable experiences.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php
    $page_title = "Gallery | Wildernest Nature Resort, Goa";
    $page_description = "Explore the stunning visuals of Wildernest Nature Resort through our gallery showcasing luxurious accommodations, breathtaking landscapes, and unforgettable experiences.";
    include 'includes/header.php';

    // Gallery images array
    $galleryImages = [];
    for ($i = 1; $i <= 56; $i++) {
        $galleryImages[] = [
            'id' => $i,
            'src' => "assets/images/gallery/g{$i}.webp",
            'alt' => "Wildernest Nature Resort Gallery Image {$i}"
        ];
    }
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
                <h3 class="text-xl text-white font-handwriting mb-2">Wildernest Nature Resort</h3>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white relative mb-6">Gallery</h1>
                <p class="text-gray-100 text-base sm:text-lg max-w-3xl mx-auto px-4 sm:px-0">Browse our gallery and imagine yourself at Wildernest Nature Resort. Book now to transform inspiring moments into your own unforgettable Goa adventure.</p>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto px-4">
            <!-- Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php foreach ($galleryImages as $index => $image): ?>
                <div class="overflow-hidden rounded-xl shadow-lg cursor-pointer bg-white gallery-item hover:scale-105 transition-transform duration-300" 
                     data-aos="fade-up" 
                     data-aos-delay="<?php echo ($index % 8) * 100; ?>"
                     data-image-src="<?php echo $image['src']; ?>" 
                     data-image-alt="<?php echo $image['alt']; ?>" 
                     data-image-index="<?php echo $index; ?>">
                    <img src="<?php echo $image['src']; ?>" 
                         alt="<?php echo $image['alt']; ?>" 
                         class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105" 
                         loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4 hidden transition-opacity duration-300">
        <button id="closeLightbox" class="absolute top-6 right-6 text-white text-3xl hover:text-orange-400 transition-colors z-10">
            <i data-lucide="x" class="w-8 h-8"></i>
        </button>

        <button id="prevImage" class="absolute left-6 text-white text-3xl hover:text-orange-400 transition-colors md:left-12 z-10">
            <i data-lucide="chevron-left" class="w-8 h-8"></i>
        </button>

        <div class="max-w-4xl w-full">
            <div class="relative overflow-hidden rounded-lg">
                <img id="lightboxImage" src="" alt="" class="max-h-[80vh] w-full object-contain transition-all duration-300 transform">
                <div id="imageLoader" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-orange-400"></div>
                </div>
            </div>
            <div class="mt-4 text-center text-white">
                <p id="lightboxAlt" class="text-lg"></p>
                <p id="lightboxCounter" class="text-orange-300 capitalize mt-1"></p>
            </div>
        </div>

        <button id="nextImage" class="absolute right-6 text-white text-3xl hover:text-orange-400 transition-colors md:right-12 z-10">
            <i data-lucide="chevron-right" class="w-8 h-8"></i>
        </button>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<!-- Initialize page-specific JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lucide icons initialized in footer.php

    // Page-specific functionality (AOS initialized in footer.php)

    // Gallery lightbox functionality
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxAlt = document.getElementById('lightboxAlt');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const closeLightbox = document.getElementById('closeLightbox');
    const prevImage = document.getElementById('prevImage');
    const nextImage = document.getElementById('nextImage');
    
    let currentImageIndex = 0;
    const totalImages = <?php echo count($galleryImages); ?>;
    
    // Gallery images data
    const galleryData = <?php echo json_encode($galleryImages); ?>;
    
    // Open lightbox with smooth animation
    function openLightbox(index) {
        currentImageIndex = index;
        
        // Show lightbox
        lightbox.classList.remove('hidden');
        lightbox.style.opacity = '0';
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
        
        // Smooth fade in
        requestAnimationFrame(() => {
            lightbox.style.opacity = '1';
            updateLightboxImage();
        });
    }
    
    // Close lightbox with smooth animation
    function closeLightboxModal() {
        // Fade out
        lightbox.style.opacity = '0';
        
        // Hide after animation
        setTimeout(() => {
            lightbox.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }, 300);
    }
    
    // Update lightbox image with smooth loading
    function updateLightboxImage() {
        const image = galleryData[currentImageIndex];
        const loader = document.getElementById('imageLoader');
        
        // Show loader
        if (loader) {
            loader.classList.remove('hidden');
        }
        
        // Fade out current image
        lightboxImage.style.opacity = '0';
        lightboxImage.style.transform = 'scale(0.95)';
        
        // Create new image for preloading
        const newImg = new Image();
        newImg.onload = function() {
            // Update image source and content
            lightboxImage.src = image.src;
            lightboxImage.alt = image.alt;
            lightboxAlt.textContent = image.alt;
            lightboxCounter.textContent = `Image ${currentImageIndex + 1} of ${totalImages}`;
            
            // Hide loader and fade in new image
            if (loader) {
                loader.classList.add('hidden');
            }
            
            // Smooth fade in
            setTimeout(() => {
                lightboxImage.style.opacity = '1';
                lightboxImage.style.transform = 'scale(1)';
            }, 50);
        };
        
        newImg.onerror = function() {
            // Hide loader on error
            if (loader) {
                loader.classList.add('hidden');
            }
            lightboxImage.style.opacity = '1';
            lightboxImage.style.transform = 'scale(1)';
        };
        
        // Start loading
        newImg.src = image.src;
    }
    
    // Navigate images
    function navigateImage(direction) {
        if (direction === 'prev') {
            currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
        } else {
            currentImageIndex = (currentImageIndex + 1) % totalImages;
        }
        updateLightboxImage();
    }
    
    // Event listeners
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => openLightbox(index));
    });
    
    closeLightbox.addEventListener('click', closeLightboxModal);
    prevImage.addEventListener('click', () => navigateImage('prev'));
    nextImage.addEventListener('click', () => navigateImage('next'));
    
    // Close lightbox on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeLightboxModal();
        } else if (e.key === 'ArrowLeft') {
            navigateImage('prev');
        } else if (e.key === 'ArrowRight') {
            navigateImage('next');
        }
    });
    
    // Close lightbox when clicking outside image
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightboxModal();
        }
    });
});
</script>

</div>
</body>
</html>
