// GSAP Animations Configuration - EXACT REACT REPLICA
// Matches all animations from React components using Framer Motion

document.addEventListener('DOMContentLoaded', function () {
  if (typeof gsap !== 'undefined') {
    initializeGSAPAnimations();
  }
});

function initializeGSAPAnimations() {
  // Register ScrollTrigger plugin
  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  // Initialize all animation sets
  initializeHeroAnimations();
  initializeScrollTriggeredAnimations();
  initializeHoverAnimations();
  initializePageTransitions();
  initializeCounterAnimations();
  initializeParallaxEffects();
}

// Hero Section Animations (EXACT REACT REPLICA)
// Matching React: motion.div initial={{ opacity: 0, y: 50 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.8 }}
function initializeHeroAnimations() {
  const heroElements = {
    title: document.querySelector('.hero-title'),
    subtitle: document.querySelector('.hero-subtitle'),
    buttons: document.querySelector('.hero-buttons'),
    image: document.querySelector('.hero-image'),
  };

  // Hero title animation (matching React motion.h1)
  if (heroElements.title) {
    gsap.fromTo(
      heroElements.title,
      {
        opacity: 0,
        y: 50,
        scale: 0.95,
      },
      {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 0.8,
        ease: 'power3.out',
        delay: 0.2,
      },
    );
  }

  // Hero subtitle animation (matching React motion.p)
  if (heroElements.subtitle) {
    gsap.fromTo(
      heroElements.subtitle,
      {
        opacity: 0,
        y: 30,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: 'power3.out',
        delay: 0.4,
      },
    );
  }

  // Hero buttons animation (matching React motion.div)
  if (heroElements.buttons) {
    gsap.fromTo(
      heroElements.buttons,
      {
        opacity: 0,
        y: 30,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: 'power3.out',
        delay: 0.6,
      },
    );
  }

  // Hero image animation (matching React motion.img)
  if (heroElements.image) {
    gsap.fromTo(
      heroElements.image,
      {
        opacity: 0,
        scale: 1.1,
      },
      {
        opacity: 1,
        scale: 1,
        duration: 1.2,
        ease: 'power2.out',
        delay: 0.3,
      },
    );
  }
}

// Scroll-Triggered Animations (EXACT REACT REPLICA)
// Matching React: motion.div whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true }}
function initializeScrollTriggeredAnimations() {
  // Section fade-in animations
  const sections = document.querySelectorAll('.animate-section');

  sections.forEach((section, index) => {
    gsap.fromTo(
      section,
      {
        opacity: 0,
        y: 60,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: section,
          start: 'top 80%',
          end: 'bottom 20%',
          toggleActions: 'play none none reverse',
        },
      },
    );
  });

  // Card animations (matching React: motion.div variants={cardVariants})
  const cards = document.querySelectorAll('.animate-card');

  cards.forEach((card, index) => {
    gsap.fromTo(
      card,
      {
        opacity: 0,
        y: 40,
        scale: 0.95,
      },
      {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 0.6,
        ease: 'power2.out',
        delay: index * 0.1,
        scrollTrigger: {
          trigger: card,
          start: 'top 85%',
          toggleActions: 'play none none reverse',
        },
      },
    );
  });

  // Stagger animations for grid items
  const gridItems = document.querySelectorAll('.animate-grid-item');

  if (gridItems.length > 0) {
    gsap.fromTo(
      gridItems,
      {
        opacity: 0,
        y: 30,
        scale: 0.9,
      },
      {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 0.5,
        ease: 'power2.out',
        stagger: 0.1,
        scrollTrigger: {
          trigger: gridItems[0].parentElement,
          start: 'top 80%',
          toggleActions: 'play none none reverse',
        },
      },
    );
  }
}

// Hover Animations (EXACT REACT REPLICA)
// Matching React: whileHover={{ scale: 1.05, y: -5 }}
function initializeHoverAnimations() {
  // Card hover effects
  const hoverCards = document.querySelectorAll('.hover-card');

  hoverCards.forEach((card) => {
    card.addEventListener('mouseenter', () => {
      gsap.to(card, {
        scale: 1.05,
        y: -5,
        duration: 0.3,
        ease: 'power2.out',
      });
    });

    card.addEventListener('mouseleave', () => {
      gsap.to(card, {
        scale: 1,
        y: 0,
        duration: 0.3,
        ease: 'power2.out',
      });
    });
  });

  // Button hover effects (matching React: whileHover={{ scale: 1.02 }})
  const hoverButtons = document.querySelectorAll('.hover-button');

  hoverButtons.forEach((button) => {
    button.addEventListener('mouseenter', () => {
      gsap.to(button, {
        scale: 1.02,
        duration: 0.2,
        ease: 'power2.out',
      });
    });

    button.addEventListener('mouseleave', () => {
      gsap.to(button, {
        scale: 1,
        duration: 0.2,
        ease: 'power2.out',
      });
    });
  });

  // Image hover effects
  const hoverImages = document.querySelectorAll('.hover-image');

  hoverImages.forEach((image) => {
    image.addEventListener('mouseenter', () => {
      gsap.to(image, {
        scale: 1.1,
        duration: 0.4,
        ease: 'power2.out',
      });
    });

    image.addEventListener('mouseleave', () => {
      gsap.to(image, {
        scale: 1,
        duration: 0.4,
        ease: 'power2.out',
      });
    });
  });
}

// Page Transition Animations
function initializePageTransitions() {
  // Fade in page content on load
  const pageContent = document.querySelector('main');

  if (pageContent) {
    gsap.fromTo(
      pageContent,
      {
        opacity: 0,
      },
      {
        opacity: 1,
        duration: 0.5,
        ease: 'power2.out',
      },
    );
  }

  // Loading animation for dynamic content
  const loadingElements = document.querySelectorAll('.loading');

  loadingElements.forEach((element) => {
    gsap.fromTo(
      element,
      {
        opacity: 0,
        y: 20,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: 'power2.out',
        delay: 0.1,
      },
    );
  });
}

// Counter Animations (for statistics, numbers, etc.)
function initializeCounterAnimations() {
  const counters = document.querySelectorAll('.counter');

  counters.forEach((counter) => {
    const target = parseInt(counter.getAttribute('data-target'));
    const duration = parseFloat(counter.getAttribute('data-duration')) || 2;

    ScrollTrigger.create({
      trigger: counter,
      start: 'top 80%',
      onEnter: () => {
        gsap.fromTo(
          counter,
          { textContent: 0 },
          {
            textContent: target,
            duration: duration,
            ease: 'power2.out',
            snap: { textContent: 1 },
            stagger: 0.1,
          },
        );
      },
    });
  });
}

// Parallax Effects (matching React parallax implementations)
function initializeParallaxEffects() {
  // Background parallax
  const parallaxBgs = document.querySelectorAll('.parallax-bg');

  parallaxBgs.forEach((bg) => {
    gsap.to(bg, {
      yPercent: -50,
      ease: 'none',
      scrollTrigger: {
        trigger: bg,
        start: 'top bottom',
        end: 'bottom top',
        scrub: true,
      },
    });
  });

  // Element parallax
  const parallaxElements = document.querySelectorAll('.parallax-element');

  parallaxElements.forEach((element) => {
    const speed = element.getAttribute('data-speed') || 0.5;

    gsap.to(element, {
      y: () => -ScrollTrigger.maxScroll(window) * speed,
      ease: 'none',
      scrollTrigger: {
        start: 0,
        end: 'max',
        invalidateOnRefresh: true,
        scrub: true,
      },
    });
  });
}

// Text reveal animations (matching React text animations)
function initializeTextRevealAnimations() {
  const textElements = document.querySelectorAll('.text-reveal');

  textElements.forEach((element) => {
    const text = element.textContent;
    element.innerHTML = '';

    // Split text into spans
    text.split('').forEach((char) => {
      const span = document.createElement('span');
      span.textContent = char === ' ' ? '\u00A0' : char;
      span.style.display = 'inline-block';
      element.appendChild(span);
    });

    const chars = element.querySelectorAll('span');

    gsap.fromTo(
      chars,
      {
        opacity: 0,
        y: 50,
        rotationX: -90,
      },
      {
        opacity: 1,
        y: 0,
        rotationX: 0,
        duration: 0.8,
        ease: 'back.out(1.7)',
        stagger: 0.02,
        scrollTrigger: {
          trigger: element,
          start: 'top 80%',
          toggleActions: 'play none none reverse',
        },
      },
    );
  });
}

// Morphing animations (for shape changes, etc.)
function initializeMorphingAnimations() {
  const morphElements = document.querySelectorAll('.morph-element');

  morphElements.forEach((element) => {
    const timeline = gsap.timeline({ paused: true });

    timeline.to(element, {
      morphSVG: element.getAttribute('data-morph-to'),
      duration: 0.5,
      ease: 'power2.inOut',
    });

    element.addEventListener('mouseenter', () => timeline.play());
    element.addEventListener('mouseleave', () => timeline.reverse());
  });
}

// Floating animations (for decorative elements)
function initializeFloatingAnimations() {
  const floatingElements = document.querySelectorAll('.floating');

  floatingElements.forEach((element, index) => {
    gsap.to(element, {
      y: 'random(-20, 20)',
      x: 'random(-10, 10)',
      rotation: 'random(-5, 5)',
      duration: 'random(3, 6)',
      ease: 'sine.inOut',
      yoyo: true,
      repeat: -1,
      delay: index * 0.2,
    });
  });
}

// Refresh ScrollTrigger on window resize
window.addEventListener(
  'resize',
  debounce(() => {
    if (typeof ScrollTrigger !== 'undefined') {
      ScrollTrigger.refresh();
    }
  }, 250),
);

// Utility function for debouncing
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

// Make functions globally available
window.animationController = {
  initializeGSAPAnimations,
  initializeHeroAnimations,
  initializeScrollTriggeredAnimations,
  initializeHoverAnimations,
  initializePageTransitions,
  initializeCounterAnimations,
  initializeParallaxEffects,
  initializeTextRevealAnimations,
  initializeMorphingAnimations,
  initializeFloatingAnimations,
};

// Initialize text reveal and floating animations
document.addEventListener('DOMContentLoaded', () => {
  if (typeof gsap !== 'undefined') {
    initializeTextRevealAnimations();
    initializeFloatingAnimations();
  }
});
