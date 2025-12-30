// Main JavaScript for Wildernest PHP Version - EXACT REACT REPLICA

document.addEventListener('DOMContentLoaded', function () {
  // AOS and Lucide are initialized in footer.php to avoid conflicts

  // Wait a bit for footer initialization to complete
  setTimeout(() => {
    // Initialize all components
    initializeHeader();
    initializeMobileMenu();
    initializeDesktopDropdowns();
    initializeGSAP();
    initializeSwipers();
    initializeScrollAnimations();
    initializeForms();
    initializeSmoothScroll();
    initializeImageLazyLoading();

    // Initialize scroll to top button
    initializeScrollToTop();
  }, 100);
});

// Header scroll effect (EXACT REPLICA of React Header useState and useEffect)
function initializeHeader() {
  const header = document.getElementById('main-header');
  const contactRibbon = document.getElementById('contact-ribbon');
  const logoText = document.getElementById('logo-text');

  if (!header) return;

  let isScrolled = false;

  function handleScroll() {
    const scrollY = window.scrollY;
    const shouldBeScrolled = scrollY > 10;

    if (shouldBeScrolled !== isScrolled) {
      isScrolled = shouldBeScrolled;

      if (isScrolled) {
        // Header changes (matching React: isScrolled ? "bg-white backdrop-blur-lg shadow-xl py-2 border-gray-200" : "bg-primary-900/25 backdrop-blur-md py-2 border-gray-200/5")
        header.classList.remove('bg-primary-900/25', 'backdrop-blur-md', 'border-gray-200/5');
        header.classList.add('bg-white', 'backdrop-blur-lg', 'shadow-xl', 'border-gray-200');

        // Contact ribbon changes (matching React conditional classes)
        if (contactRibbon) {
          contactRibbon.classList.remove('bg-primary-900/25', 'backdrop-blur-md');
          contactRibbon.classList.add(
            'bg-gradient-to-l',
            'from-green-950',
            'to-[#3e3500]',
            'backdrop-blur-lg',
            'shadow-xl',
          );
        }

        // Logo text changes (matching React: isScrolled ? "" : "text-white")
        if (logoText) {
          logoText.classList.remove('text-white');
        }

        // Navigation link color changes (matching React conditional styling)
        updateNavigationColors(true);
      } else {
        // Revert header changes
        header.classList.add('bg-primary-900/25', 'backdrop-blur-md', 'border-gray-200/5');
        header.classList.remove('bg-white', 'backdrop-blur-lg', 'shadow-xl', 'border-gray-200');

        // Revert contact ribbon changes
        if (contactRibbon) {
          contactRibbon.classList.add('bg-primary-900/25', 'backdrop-blur-md');
          contactRibbon.classList.remove(
            'bg-gradient-to-l',
            'from-green-950',
            'to-[#3e3500]',
            'backdrop-blur-lg',
            'shadow-xl',
          );
        }

        // Revert logo text changes
        if (logoText) {
          logoText.classList.add('text-white');
        }

        // Revert navigation link colors
        updateNavigationColors(false);
      }
    }
  }

  function updateNavigationColors(isScrolled) {
    // Desktop navigation links
    const navLinks = document.querySelectorAll('nav a:not(.text-orange-500):not(.text-orange-600)');
    navLinks.forEach((link) => {
      if (isScrolled) {
        link.classList.remove('text-white');
        link.classList.add('text-gray-700');
      } else {
        link.classList.add('text-white');
        link.classList.remove('text-gray-700');
      }
    });

    // Accommodation button (if not active)
    const accommodationBtn = document.getElementById('accommodation-btn');
    if (accommodationBtn && !accommodationBtn.classList.contains('text-orange-600')) {
      if (isScrolled) {
        accommodationBtn.classList.remove('text-white');
        accommodationBtn.classList.add('text-gray-700');
      } else {
        accommodationBtn.classList.add('text-white');
        accommodationBtn.classList.remove('text-gray-700');
      }
    }

    // Mobile menu button
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    if (mobileMenuBtn) {
      if (isScrolled) {
        mobileMenuBtn.classList.remove('text-white', 'hover:bg-white/20');
        mobileMenuBtn.classList.add('text-gray-700', 'hover:bg-gray-100');
      } else {
        mobileMenuBtn.classList.add('text-white', 'hover:bg-white/20');
        mobileMenuBtn.classList.remove('text-gray-700', 'hover:bg-gray-100');
      }
    }
  }

  window.addEventListener('scroll', handleScroll);
  handleScroll(); // Initial call
}

// Mobile menu functionality (EXACT REPLICA of React mobile sidebar)
function initializeMobileMenu() {
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileSidebar = document.getElementById('mobile-sidebar');
  const mobileOverlay = document.getElementById('mobile-sidebar-overlay');
  const menuIcon = document.getElementById('menu-icon');

  if (!mobileMenuBtn || !mobileSidebar || !mobileOverlay) return;

  let isSidebarOpen = false;

  // Toggle sidebar function (matching React useState)
  function toggleSidebar() {
    isSidebarOpen = !isSidebarOpen;

    if (isSidebarOpen) {
      openSidebar();
    } else {
      closeSidebar();
    }
  }

  function openSidebar() {
    // Sidebar animation (matching React: variants sidebarVariants open: { x: 0, opacity: 1 })
    mobileSidebar.style.transform = 'translateX(0)';
    mobileSidebar.style.opacity = '1';

    // Overlay animation (matching React: variants overlayVariants open: { opacity: 0.5 })
    mobileOverlay.style.opacity = '0.5';
    mobileOverlay.style.visibility = 'visible';

    // Lock body scroll (matching React useEffect)
    document.body.style.overflow = 'hidden';

    // Update menu icon (matching React conditional: isSidebarOpen ? <X size={24} /> : <Menu size={24} />)
    if (menuIcon) {
      menuIcon.setAttribute('data-lucide', 'x');
      lucide.createIcons();
    }
  }

  function closeSidebar() {
    // Sidebar animation (matching React: variants sidebarVariants closed: { x: "100%", opacity: 0 })
    mobileSidebar.style.transform = 'translateX(100%)';
    mobileSidebar.style.opacity = '0';

    // Overlay animation (matching React: variants overlayVariants closed: { opacity: 0 })
    mobileOverlay.style.opacity = '0';
    mobileOverlay.style.visibility = 'hidden';

    // Unlock body scroll
    document.body.style.overflow = 'auto';

    // Update menu icon
    if (menuIcon) {
      menuIcon.setAttribute('data-lucide', 'menu');
      lucide.createIcons();
    }

    // Close accommodation submenu if open
    closeMobileAccommodation();
  }

  // Event listeners
  mobileMenuBtn.addEventListener('click', toggleSidebar);
  mobileOverlay.addEventListener('click', closeSidebar);

  // Close sidebar when clicking on navigation links
  const sidebarLinks = mobileSidebar.querySelectorAll('a[href]');
  sidebarLinks.forEach((link) => {
    link.addEventListener('click', closeSidebar);
  });

  // Escape key to close menu
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && isSidebarOpen) {
      closeSidebar();
    }
  });

  // Handle window resize (close menu on desktop)
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024 && isSidebarOpen) {
      closeSidebar();
    }
  });

  // Make functions globally available
  window.closeMobileMenu = closeSidebar;
}

// Desktop accommodation dropdown (EXACT REPLICA of React dropdown)
document.addEventListener('DOMContentLoaded', function () {
  const accommodationBtn = document.getElementById('accommodation-btn');
  const accommodationMenu = document.getElementById('accommodation-menu');
  const accommodationChevron = document.getElementById('accommodation-chevron');

  let isAccommodationOpen = false;

  if (accommodationBtn && accommodationMenu) {
    accommodationBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleAccommodationMenu();
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
      if (!accommodationBtn.contains(e.target) && !accommodationMenu.contains(e.target)) {
        closeAccommodationMenu();
      }
    });
  }

  function toggleAccommodationMenu() {
    isAccommodationOpen = !isAccommodationOpen;

    if (isAccommodationOpen) {
      // Show menu (matching React: initial={{ opacity: 0, y: -10 }} animate={{ opacity: 1, y: 0 }})
      accommodationMenu.style.opacity = '1';
      accommodationMenu.style.visibility = 'visible';
      accommodationMenu.style.transform = 'translateY(0)';

      // Rotate chevron (matching React: isAccommodationOpen ? "rotate-180" : "")
      if (accommodationChevron) {
        accommodationChevron.style.transform = 'rotate(180deg)';
      }
    } else {
      closeAccommodationMenu();
    }
  }

  function closeAccommodationMenu() {
    isAccommodationOpen = false;

    // Hide menu (matching React: exit={{ opacity: 0, y: -10 }})
    accommodationMenu.style.opacity = '0';
    accommodationMenu.style.visibility = 'hidden';
    accommodationMenu.style.transform = 'translateY(-10px)';

    // Reset chevron
    if (accommodationChevron) {
      accommodationChevron.style.transform = 'rotate(0deg)';
    }
  }

  // Make function globally available
  window.closeAccommodationMenu = closeAccommodationMenu;
});

// Mobile accommodation dropdown (EXACT REPLICA of React mobile dropdown)
document.addEventListener('DOMContentLoaded', function () {
  const mobileAccommodationBtn = document.getElementById('mobile-accommodation-btn');
  const mobileAccommodationMenu = document.getElementById('mobile-accommodation-menu');
  const mobileAccommodationChevron = document.getElementById('mobile-accommodation-chevron');

  let isMobileAccommodationOpen = false;

  if (mobileAccommodationBtn && mobileAccommodationMenu) {
    mobileAccommodationBtn.addEventListener('click', toggleMobileAccommodation);
  }

  function toggleMobileAccommodation() {
    isMobileAccommodationOpen = !isMobileAccommodationOpen;

    if (isMobileAccommodationOpen) {
      // Show menu (matching React: animate={{ opacity: 1, height: "auto" }})
      mobileAccommodationMenu.style.maxHeight = '300px';
      mobileAccommodationMenu.style.opacity = '1';

      // Rotate chevron
      if (mobileAccommodationChevron) {
        mobileAccommodationChevron.style.transform = 'rotate(180deg)';
      }
    } else {
      closeMobileAccommodation();
    }
  }

  function closeMobileAccommodation() {
    isMobileAccommodationOpen = false;

    // Hide menu (matching React: exit={{ opacity: 0, height: 0 }})
    mobileAccommodationMenu.style.maxHeight = '0';
    mobileAccommodationMenu.style.opacity = '0';

    // Reset chevron
    if (mobileAccommodationChevron) {
      mobileAccommodationChevron.style.transform = 'rotate(0deg)';
    }
  }

  // Make function globally available
  window.closeMobileAccommodation = closeMobileAccommodation;
});

// AOS initialization moved to footer.php to avoid conflicts

// Initialize GSAP animations
function initializeGSAP() {
  if (typeof gsap === 'undefined') return;

  // Register ScrollTrigger plugin
  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  // Hero animations (matching React Hero component)
  const heroTitle = document.querySelector('.hero-title');
  const heroSubtitle = document.querySelector('.hero-subtitle');
  const heroButtons = document.querySelector('.hero-buttons');

  if (heroTitle) {
    gsap.from(heroTitle, {
      duration: 0.8,
      y: 50,
      opacity: 0,
      ease: 'power3.out',
    });
  }

  if (heroSubtitle) {
    gsap.from(heroSubtitle, {
      duration: 0.8,
      y: 50,
      opacity: 0,
      ease: 'power3.out',
      delay: 0.2,
    });
  }

  if (heroButtons) {
    gsap.from(heroButtons, {
      duration: 0.8,
      y: 50,
      opacity: 0,
      ease: 'power3.out',
      delay: 0.4,
    });
  }
}

// Initialize Swiper sliders
function initializeSwipers() {
  // This will be handled by swiper-config.js
  if (window.swiperController) {
    window.swiperController.initializeAllSwipers();
  }
}

// Initialize scroll animations
function initializeScrollAnimations() {
  const animateElements = document.querySelectorAll('.animate-on-scroll');

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
        }
      });
    },
    {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px',
    },
  );

  animateElements.forEach((element) => {
    observer.observe(element);
  });
}

// Initialize forms
function initializeForms() {
  // Contact and booking forms with AJAX
  const forms = document.querySelectorAll('form[data-ajax]');

  forms.forEach((form) => {
    form.addEventListener('submit', handleFormSubmission);

    // Real-time validation
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach((input) => {
      input.addEventListener('blur', validateField);
      input.addEventListener('input', clearFieldError);
    });
  });
}

// Handle form submission with AJAX
async function handleFormSubmission(e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);
  const submitBtn = form.querySelector('button[type="submit"]');
  const originalText = submitBtn.textContent;

  // Show loading state
  submitBtn.disabled = true;
  submitBtn.innerHTML =
    '<i data-lucide="loader-2" class="w-4 h-4 mr-2 animate-spin"></i>Sending...';
  lucide.createIcons();

  // Clear previous messages
  clearFormMessages(form);

  try {
    const response = await fetch(form.action, {
      method: 'POST',
      body: formData,
    });

    const result = await response.json();

    if (result.success) {
      showFormMessage(form, result.message, 'success');
      form.reset();
    } else {
      showFormMessage(form, result.message, 'error');
    }
  } catch (error) {
    showFormMessage(form, 'An error occurred. Please try again.', 'error');
  } finally {
    // Reset button
    submitBtn.disabled = false;
    submitBtn.textContent = originalText;
  }
}

// Field validation
function validateField(e) {
  const field = e.target;
  const value = field.value.trim();

  clearFieldError(field);

  if (field.hasAttribute('required') && !value) {
    showFieldError(field, 'This field is required');
    return false;
  }

  if (field.type === 'email' && value && !isValidEmail(value)) {
    showFieldError(field, 'Please enter a valid email address');
    return false;
  }

  if (field.type === 'tel' && value && !isValidPhone(value)) {
    showFieldError(field, 'Please enter a valid phone number');
    return false;
  }

  return true;
}

// Smooth scroll for anchor links (EXACT React behavior)
function initializeSmoothScroll() {
  document.addEventListener('click', function (e) {
    const link = e.target.closest('a[href^="#"]');
    if (link) {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        const headerHeight = 100; // Account for fixed header
        const targetPosition = target.offsetTop - headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth',
        });
      }
    }
  });
}

// Utility functions
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Performance optimization: Preload critical resources
function preloadCriticalResources() {
  const criticalImages = ['assets/images/Home/hero.webp', 'assets/images/favicon.svg'];

  criticalImages.forEach((src) => {
    const link = document.createElement('link');
    link.rel = 'preload';
    link.as = 'image';
    link.href = src;
    document.head.appendChild(link);
  });
}

// Initialize desktop dropdowns
function initializeDesktopDropdowns() {
  // This function was already implemented above in the DOMContentLoaded sections
  // Keeping it here for consistency with the initialization pattern
}

// Initialize image lazy loading
function initializeImageLazyLoading() {
  const images = document.querySelectorAll('img[data-src]');

  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.classList.remove('opacity-0');
        img.classList.add('opacity-100', 'transition-opacity', 'duration-500');
        observer.unobserve(img);
      }
    });
  });

  images.forEach((img) => imageObserver.observe(img));
}

// Initialize scroll to top button
function initializeScrollToTop() {
  const scrollToTopBtn = document.getElementById('scroll-to-top');

  if (scrollToTopBtn) {
    window.addEventListener(
      'scroll',
      debounce(() => {
        if (window.pageYOffset > 300) {
          scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
          scrollToTopBtn.classList.add('opacity-100');
        } else {
          scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
          scrollToTopBtn.classList.remove('opacity-100');
        }
      }, 100),
    );

    scrollToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    });
  }
}

// Form utility functions
function showFormMessage(form, message, type) {
  const messageDiv = document.createElement('div');
  messageDiv.className = `alert alert-${type} mb-4`;
  messageDiv.textContent = message;

  form.insertBefore(messageDiv, form.firstChild);

  // Auto-remove after 5 seconds
  setTimeout(() => {
    messageDiv.remove();
  }, 5000);
}

function clearFormMessages(form) {
  const messages = form.querySelectorAll('.alert');
  messages.forEach((msg) => msg.remove());
}

function showFieldError(field, message) {
  const errorDiv = document.createElement('div');
  errorDiv.className = 'text-red-500 text-sm mt-1 field-error';
  errorDiv.textContent = message;

  field.classList.add('border-red-500');
  field.parentNode.appendChild(errorDiv);
}

function clearFieldError(field) {
  const errorDiv = field.parentNode.querySelector('.field-error');
  if (errorDiv) {
    errorDiv.remove();
  }
  field.classList.remove('border-red-500');
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function isValidPhone(phone) {
  const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
  return phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''));
}

// Gallery lightbox functionality
function initializeGallery() {
  const galleryImages = document.querySelectorAll('.gallery-image');

  galleryImages.forEach((img, index) => {
    img.addEventListener('click', () => openLightbox(index));
  });
}

function openLightbox(index) {
  // Create lightbox modal
  const lightbox = document.createElement('div');
  lightbox.className = 'fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center';
  lightbox.innerHTML = `
    <div class="relative max-w-4xl max-h-full p-4">
      <img src="${
        document.querySelectorAll('.gallery-image')[index].src
      }" class="max-w-full max-h-full object-contain">
      <button class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors" onclick="closeLightbox()">
        <i data-lucide="x" class="w-8 h-8"></i>
      </button>
    </div>
  `;

  document.body.appendChild(lightbox);
  document.body.style.overflow = 'hidden';
  lucide.createIcons();

  // Close on escape key
  document.addEventListener('keydown', handleLightboxEscape);

  // Close on background click
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      closeLightbox();
    }
  });
}

function closeLightbox() {
  const lightbox = document.querySelector('.fixed.inset-0.bg-black');
  if (lightbox) {
    lightbox.remove();
    document.body.style.overflow = 'auto';
    document.removeEventListener('keydown', handleLightboxEscape);
  }
}

function handleLightboxEscape(e) {
  if (e.key === 'Escape') {
    closeLightbox();
  }
}

// Make functions globally available
window.closeLightbox = closeLightbox;

// Call preload function
preloadCriticalResources();

// Initialize gallery if on gallery page
if (document.querySelector('.gallery-image')) {
  document.addEventListener('DOMContentLoaded', initializeGallery);
}
