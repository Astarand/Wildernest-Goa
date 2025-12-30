// Mobile Enhancement JavaScript for Wildernest Website

document.addEventListener('DOMContentLoaded', function () {
  // Mobile Detection
  const isMobile = window.innerWidth <= 767;
  const isTablet = window.innerWidth >= 768 && window.innerWidth <= 1023;
  const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

  // Mobile-specific optimizations
  if (isMobile) {
    // Optimize hero section height for mobile
    optimizeHeroSections();

    // Enhance touch interactions
    enhanceTouchInteractions();

    // Optimize form inputs for mobile
    optimizeFormInputs();

    // Handle mobile navigation
    handleMobileNavigation();

    // Optimize gallery for mobile
    optimizeGalleryForMobile();

    // Handle mobile-specific animations
    optimizeAnimationsForMobile();
  }

  // Touch device optimizations
  if (isTouchDevice) {
    // Remove hover effects on touch devices
    removeHoverEffectsOnTouch();

    // Enhance button touch targets
    enhanceButtonTouchTargets();
  }

  // Responsive image loading
  handleResponsiveImages();

  // Mobile viewport fixes
  handleViewportFixes();

  // Performance optimizations for mobile
  if (isMobile) {
    optimizePerformanceForMobile();
  }
});

// Optimize hero sections for mobile
function optimizeHeroSections() {
  const heroSections = document.querySelectorAll('.min-h-screen');
  heroSections.forEach((hero) => {
    // Adjust height for mobile viewport
    hero.style.minHeight = '100vh';
    hero.style.paddingTop = '120px';
    hero.style.paddingBottom = '60px';
  });
}

// Enhance touch interactions
function enhanceTouchInteractions() {
  // Add touch feedback to buttons
  const buttons = document.querySelectorAll('button, .btn, a[role="button"]');
  buttons.forEach((button) => {
    button.addEventListener('touchstart', function () {
      this.style.transform = 'scale(0.98)';
    });

    button.addEventListener('touchend', function () {
      this.style.transform = 'scale(1)';
    });
  });

  // Enhance swipe gestures for galleries
  enhanceSwipeGestures();
}

// Optimize form inputs for mobile
function optimizeFormInputs() {
  const inputs = document.querySelectorAll('input, select, textarea');
  inputs.forEach((input) => {
    // Prevent zoom on iOS
    if (input.type !== 'file') {
      input.style.fontSize = '16px';
    }

    // Add mobile-friendly attributes
    if (input.type === 'email') {
      input.setAttribute('autocomplete', 'email');
      input.setAttribute('inputmode', 'email');
    }

    if (input.type === 'tel') {
      input.setAttribute('autocomplete', 'tel');
      input.setAttribute('inputmode', 'tel');
    }

    if (input.type === 'number') {
      input.setAttribute('inputmode', 'numeric');
    }
  });
}

// Handle mobile navigation
function handleMobileNavigation() {
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileSidebar = document.getElementById('mobile-sidebar');
  const mobileOverlay = document.getElementById('mobile-sidebar-overlay');

  if (mobileMenuBtn && mobileSidebar) {
    // Prevent body scroll when menu is open
    mobileMenuBtn.addEventListener('click', function () {
      document.body.style.overflow = 'hidden';
    });

    // Close menu function
    function closeMobileMenu() {
      document.body.style.overflow = '';
      mobileSidebar.style.transform = 'translateX(100%)';
      if (mobileOverlay) {
        mobileOverlay.style.opacity = '0';
        mobileOverlay.style.visibility = 'hidden';
      }
    }

    // Close on overlay click
    if (mobileOverlay) {
      mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    // Close on escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeMobileMenu();
      }
    });

    // Make closeMobileMenu globally available
    window.closeMobileMenu = closeMobileMenu;
  }
}

// Optimize gallery for mobile
function optimizeGalleryForMobile() {
  const galleryItems = document.querySelectorAll('.gallery-item');
  galleryItems.forEach((item) => {
    // Optimize image loading
    const img = item.querySelector('img');
    if (img) {
      img.loading = 'lazy';
      img.style.height = '200px';
      img.style.objectFit = 'cover';
    }
  });

  // Optimize lightbox for mobile
  const lightbox = document.getElementById('lightbox');
  if (lightbox) {
    const lightboxImage = document.getElementById('lightboxImage');
    if (lightboxImage) {
      lightboxImage.style.maxHeight = '70vh';
      lightboxImage.style.width = '100%';
      lightboxImage.style.objectFit = 'contain';
    }
  }
}

// Optimize animations for mobile
function optimizeAnimationsForMobile() {
  // Reduce animation duration on mobile for better performance
  const animatedElements = document.querySelectorAll('[data-aos]');
  animatedElements.forEach((element) => {
    const currentDuration = element.getAttribute('data-aos-duration');
    if (currentDuration) {
      const newDuration = Math.min(parseInt(currentDuration), 600);
      element.setAttribute('data-aos-duration', newDuration.toString());
    }
  });

  // Disable complex animations on low-end devices
  if (navigator.hardwareConcurrency && navigator.hardwareConcurrency < 4) {
    document.documentElement.style.setProperty('--animation-duration', '0.1s');
  }
}

// Remove hover effects on touch devices
function removeHoverEffectsOnTouch() {
  const hoverElements = document.querySelectorAll('[class*="hover:"]');
  hoverElements.forEach((element) => {
    element.addEventListener('touchstart', function () {
      // Add active state
      this.classList.add('touch-active');
    });

    element.addEventListener('touchend', function () {
      // Remove active state after delay
      setTimeout(() => {
        this.classList.remove('touch-active');
      }, 150);
    });
  });
}

// Enhance button touch targets
function enhanceButtonTouchTargets() {
  const buttons = document.querySelectorAll('button, .btn, a[role="button"]');
  buttons.forEach((button) => {
    const rect = button.getBoundingClientRect();
    if (rect.height < 44 || rect.width < 44) {
      button.style.minHeight = '44px';
      button.style.minWidth = '44px';
      button.style.display = 'flex';
      button.style.alignItems = 'center';
      button.style.justifyContent = 'center';
    }
  });
}

// Handle responsive images
function handleResponsiveImages() {
  const images = document.querySelectorAll('img');
  images.forEach((img) => {
    // Add responsive classes
    if (!img.classList.contains('w-full')) {
      img.style.maxWidth = '100%';
      img.style.height = 'auto';
    }

    // Lazy loading for better performance
    if (!img.hasAttribute('loading')) {
      img.loading = 'lazy';
    }
  });
}

// Handle viewport fixes
function handleViewportFixes() {
  // Fix viewport height issues on mobile browsers
  function setVH() {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  }

  setVH();
  window.addEventListener('resize', setVH);
  window.addEventListener('orientationchange', () => {
    setTimeout(setVH, 100);
  });

  // Prevent zoom on double tap
  let lastTouchEnd = 0;
  document.addEventListener(
    'touchend',
    function (event) {
      const now = new Date().getTime();
      if (now - lastTouchEnd <= 300) {
        event.preventDefault();
      }
      lastTouchEnd = now;
    },
    false,
  );
}

// Performance optimizations for mobile
function optimizePerformanceForMobile() {
  // Debounce scroll events
  let scrollTimeout;
  window.addEventListener('scroll', function () {
    if (scrollTimeout) {
      clearTimeout(scrollTimeout);
    }
    scrollTimeout = setTimeout(function () {
      // Handle scroll events here
    }, 16); // ~60fps
  });

  // Optimize resize events
  let resizeTimeout;
  window.addEventListener('resize', function () {
    if (resizeTimeout) {
      clearTimeout(resizeTimeout);
    }
    resizeTimeout = setTimeout(function () {
      // Handle resize events here
      handleViewportFixes();
    }, 250);
  });

  // Reduce animation complexity on low-end devices
  if (navigator.deviceMemory && navigator.deviceMemory < 4) {
    document.documentElement.classList.add('low-memory-device');
  }
}

// Enhance swipe gestures
function enhanceSwipeGestures() {
  let startX, startY, distX, distY;
  const threshold = 50; // Minimum distance for swipe

  document.addEventListener('touchstart', function (e) {
    const touch = e.touches[0];
    startX = touch.clientX;
    startY = touch.clientY;
  });

  document.addEventListener('touchmove', function (e) {
    if (!startX || !startY) return;

    const touch = e.touches[0];
    distX = touch.clientX - startX;
    distY = touch.clientY - startY;
  });

  document.addEventListener('touchend', function (e) {
    if (!startX || !startY) return;

    // Horizontal swipe
    if (Math.abs(distX) > Math.abs(distY) && Math.abs(distX) > threshold) {
      if (distX > 0) {
        // Swipe right
        handleSwipeRight();
      } else {
        // Swipe left
        handleSwipeLeft();
      }
    }

    // Reset values
    startX = startY = distX = distY = null;
  });
}

// Handle swipe gestures
function handleSwipeRight() {
  // Handle swipe right (e.g., close mobile menu, previous image)
  const mobileSidebar = document.getElementById('mobile-sidebar');
  if (mobileSidebar && !mobileSidebar.classList.contains('translate-x-full')) {
    if (window.closeMobileMenu) {
      window.closeMobileMenu();
    }
  }
}

function handleSwipeLeft() {
  // Handle swipe left (e.g., next image in gallery)
  // Implementation depends on specific gallery component
}

// Intersection Observer for lazy loading and animations
const observerOptions = {
  root: null,
  rootMargin: '50px',
  threshold: 0.1,
};

const observer = new IntersectionObserver(function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Handle lazy loading
      if (entry.target.dataset.src) {
        entry.target.src = entry.target.dataset.src;
        entry.target.removeAttribute('data-src');
      }

      // Trigger animations
      if (entry.target.dataset.aos) {
        entry.target.classList.add('aos-animate');
      }

      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

// Observe elements for lazy loading
document.querySelectorAll('[data-src], [data-aos]').forEach((el) => {
  observer.observe(el);
});

// Export functions for global use
window.mobileEnhancements = {
  optimizeHeroSections,
  enhanceTouchInteractions,
  optimizeFormInputs,
  handleMobileNavigation,
  optimizeGalleryForMobile,
};
