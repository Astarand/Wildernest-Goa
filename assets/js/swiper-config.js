// Swiper Configuration - v2.1 Clean (No Console Logs)
// Matches all Swiper instances from React components

document.addEventListener('DOMContentLoaded', function () {
  initializeAllSwipers();
});

function initializeAllSwipers() {
  // Hero Slider (Homepage)
  initializeHeroSlider();

  // Accommodation Slider (Homepage)
  initializeAccommodationSlider();

  // Testimonials Slider (Homepage)
  initializeTestimonialsSlider();

  // Gallery Slider (Individual room pages)
  initializeGallerySlider();

  // Activities Slider (Activities page)
  initializeActivitiesSlider();

  // Adventure Slider (Homepage)
  initializeAdventureSlider();
}

// Hero Slider Configuration (EXACT REACT REPLICA)
function initializeHeroSlider() {
  const heroSlider = document.querySelector('.hero-swiper');

  if (heroSlider && typeof Swiper !== 'undefined') {
    new Swiper('.hero-swiper', {
      // Matching React: autoplay: { delay: 5000, disableOnInteraction: false }
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },

      // Matching React: loop: true
      loop: true,

      // Matching React: effect: "fade"
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },

      // Matching React: speed: 1000
      speed: 1000,

      // Pagination (matching React pagination configuration)
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        bulletClass: 'swiper-pagination-bullet',
        bulletActiveClass: 'swiper-pagination-bullet-active',
      },

      // Navigation arrows (matching React navigation)
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // Keyboard control
      keyboard: {
        enabled: true,
        onlyInViewport: true,
      },

      // Accessibility
      a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
        paginationBulletMessage: 'Go to slide {{index}}',
      },
    });
  }
}

// Accommodation Slider Configuration (EXACT REACT REPLICA)
function initializeAccommodationSlider() {
  const accommodationSlider = document.querySelector('.accommodation-swiper');

  if (accommodationSlider && typeof Swiper !== 'undefined') {
    new Swiper('.accommodation-swiper', {
      // Matching React: slidesPerView: "auto"
      slidesPerView: 'auto',

      // Matching React: spaceBetween: 24
      spaceBetween: 24,

      // Matching React: centeredSlides: true
      centeredSlides: true,

      // Matching React: loop: true
      loop: true,

      // Matching React: autoplay: { delay: 4000 }
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },

      // Responsive breakpoints (matching React responsive configuration)
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 16,
          centeredSlides: true,
        },
        640: {
          slidesPerView: 1.2,
          spaceBetween: 20,
          centeredSlides: true,
        },
        768: {
          slidesPerView: 1.5,
          spaceBetween: 24,
          centeredSlides: true,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 24,
          centeredSlides: false,
        },
        1280: {
          slidesPerView: 2.5,
          spaceBetween: 32,
          centeredSlides: false,
        },
      },

      // Pagination
      pagination: {
        el: '.accommodation-pagination',
        clickable: true,
        dynamicBullets: true,
      },

      // Navigation
      navigation: {
        nextEl: '.accommodation-next',
        prevEl: '.accommodation-prev',
      },

      // Grab cursor
      grabCursor: true,

      // Touch events
      touchRatio: 1,
      touchAngle: 45,

      // Smooth transitions
      speed: 600,

      // Free mode for smooth scrolling
      freeMode: {
        enabled: true,
        sticky: true,
      },
    });
  }
}

// Testimonials Slider Configuration (EXACT REACT REPLICA)
function initializeTestimonialsSlider() {
  const testimonialsSlider = document.querySelector('.testimonials-swiper');

  if (testimonialsSlider && typeof Swiper !== 'undefined') {
    new Swiper('.testimonials-swiper', {
      // Matching React: slidesPerView: 1
      slidesPerView: 1,

      // Matching React: spaceBetween: 32
      spaceBetween: 32,

      // Matching React: centeredSlides: true
      centeredSlides: true,

      // Matching React: loop: true
      loop: true,

      // Matching React: autoplay: { delay: 6000 }
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },

      // Responsive breakpoints
      breakpoints: {
        768: {
          slidesPerView: 1.2,
          spaceBetween: 32,
        },
        1024: {
          slidesPerView: 1.5,
          spaceBetween: 40,
        },
      },

      // Pagination with custom styling
      pagination: {
        el: '.testimonials-pagination',
        clickable: true,
        bulletClass: 'testimonial-bullet',
        bulletActiveClass: 'testimonial-bullet-active',
        renderBullet: function (index, className) {
          return '<span class="' + className + '"></span>';
        },
      },

      // Smooth transitions
      speed: 800,

      // Effect
      effect: 'slide',

      // Grab cursor
      grabCursor: true,
    });
  }
}

// Gallery Slider Configuration (Individual Room Pages)
function initializeGallerySlider() {
  const gallerySlider = document.querySelector('.gallery-swiper');

  if (gallerySlider && typeof Swiper !== 'undefined') {
    // Main gallery slider
    const galleryMain = new Swiper('.gallery-swiper', {
      spaceBetween: 10,
      loop: true,

      // Navigation
      navigation: {
        nextEl: '.gallery-next',
        prevEl: '.gallery-prev',
      },

      // Pagination
      pagination: {
        el: '.gallery-pagination',
        type: 'fraction',
      },

      // Keyboard control
      keyboard: {
        enabled: true,
      },

      // Zoom functionality
      zoom: {
        maxRatio: 3,
        minRatio: 1,
      },

      // Thumbs configuration
      thumbs: {
        swiper: galleryThumbs,
      },
    });

    // Thumbnail slider
    const galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,

      breakpoints: {
        640: {
          slidesPerView: 6,
        },
        768: {
          slidesPerView: 8,
        },
      },
    });

    // Connect main slider with thumbs
    galleryMain.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryMain;
  }
}

// Activities Slider Configuration
function initializeActivitiesSlider() {
  const activitiesSlider = document.querySelector('.activities-swiper');

  if (activitiesSlider && typeof Swiper !== 'undefined') {
    new Swiper('.activities-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,

      // Autoplay
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },

      // Loop
      loop: true,

      // Responsive breakpoints
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 32,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 32,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 32,
        },
      },

      // Pagination
      pagination: {
        el: '.activities-pagination',
        clickable: true,
        dynamicBullets: true,
      },

      // Navigation
      navigation: {
        nextEl: '.activities-next',
        prevEl: '.activities-prev',
      },

      // Grab cursor
      grabCursor: true,

      // Speed
      speed: 600,
    });
  }
}

// Utility function to reinitialize swipers (useful for dynamic content)
function reinitializeSwipers() {
  // Destroy existing swipers
  const existingSwipers = document.querySelectorAll('.swiper');
  existingSwipers.forEach((swiperEl) => {
    if (swiperEl.swiper) {
      swiperEl.swiper.destroy(true, true);
    }
  });

  // Reinitialize all swipers
  setTimeout(() => {
    initializeAllSwipers();
  }, 100);
}

// Adventure Slider Configuration (Homepage)
function initializeAdventureSlider() {
  const adventureSlider = document.querySelector('.adventure-swiper');

  if (adventureSlider && typeof Swiper !== 'undefined') {
    // Destroy existing instance if it exists
    if (adventureSlider.swiper) {
      adventureSlider.swiper.destroy(true, true);
    }

    const adventureSwiper = new Swiper('.adventure-swiper', {
      // Mobile: 1 slide, Desktop: handled by CSS grid
      slidesPerView: 1,
      spaceBetween: 20,
      centeredSlides: true,

      // Autoplay
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
        waitForTransition: true,
      },

      // Loop
      loop: true,

      // Pagination
      pagination: {
        el: '.adventure-swiper .swiper-pagination',
        clickable: true,
        dynamicBullets: true,
      },

      // Navigation
      navigation: {
        nextEl: '.adventure-swiper .swiper-button-next',
        prevEl: '.adventure-swiper .swiper-button-prev',
      },

      // Touch settings
      touchRatio: 1,
      touchAngle: 45,
      grabCursor: true,
      allowTouchMove: true,

      // Mouse wheel support for desktop
      mousewheel: {
        enabled: true,
        forceToAxis: true,
      },

      // Speed
      speed: 600,

      // Breakpoints for responsive behavior
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
          centeredSlides: true,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
          centeredSlides: true,
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 40,
          centeredSlides: true,
          // Keep swiper enabled on desktop for mouse interaction
        },
      },

      // Events - Silent mode
      on: {
        init: function () {
          // Silent initialization
        },
        slideChange: function () {
          // Silent slide change
        },
      },
    });

    // Store reference for debugging
    window.adventureSwiper = adventureSwiper;
  } else {
    // Adventure swiper element not found or Swiper not loaded
  }
}

// Make functions globally available
window.swiperController = {
  initializeAllSwipers,
  reinitializeSwipers,
  initializeHeroSlider,
  initializeAccommodationSlider,
  initializeTestimonialsSlider,
  initializeGallerySlider,
  initializeActivitiesSlider,
  initializeAdventureSlider,
};

// Auto-reinitialize on window resize (debounced)
let resizeTimeout;
window.addEventListener('resize', () => {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {
    reinitializeSwipers();
  }, 250);
});

// Force initialize Adventure Swiper on mobile after DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
  // Wait a bit for all elements to be rendered
  setTimeout(() => {
    if (window.innerWidth < 1024) {
      initializeAdventureSlider();
    }
  }, 500);
});

// Also initialize when images are loaded
window.addEventListener('load', function () {
  if (window.innerWidth < 1024) {
    setTimeout(() => {
      initializeAdventureSlider();
    }, 100);
  }
});
