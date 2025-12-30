// Mobile Menu Controller for Wildernest PHP Version

class MobileMenuController {
  constructor() {
    this.isOpen = false;
    this.isAccommodationOpen = false;
    this.init();
  }

  init() {
    this.setupElements();
    this.setupEventListeners();
    this.setupAccommodationDropdown();
  }

  setupElements() {
    this.menuButton = document.getElementById('mobile-menu-btn');
    this.sidebar = document.getElementById('mobile-sidebar');
    this.overlay = document.getElementById('mobile-sidebar-overlay');
    this.accommodationBtn = document.getElementById('mobile-accommodation-btn');
    this.accommodationMenu = document.getElementById('mobile-accommodation-menu');
    this.accommodationChevron = document.querySelector('.mobile-accommodation-chevron');

    // Desktop accommodation dropdown
    this.desktopAccommodationBtn = document.querySelector('.accommodation-dropdown button');
    this.desktopAccommodationMenu = document.querySelector('.accommodation-menu');
    this.desktopAccommodationChevron = document.querySelector('.accommodation-chevron');
  }

  setupEventListeners() {
    // Mobile menu toggle
    if (this.menuButton) {
      this.menuButton.addEventListener('click', () => {
        this.toggleMenu();
      });
    }

    // Overlay click to close
    if (this.overlay) {
      this.overlay.addEventListener('click', () => {
        this.closeMenu();
      });
    }

    // Close menu when clicking on navigation links
    if (this.sidebar) {
      const navLinks = this.sidebar.querySelectorAll('a[href]');
      navLinks.forEach((link) => {
        link.addEventListener('click', () => {
          this.closeMenu();
        });
      });
    }

    // Escape key to close menu
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.isOpen) {
        this.closeMenu();
      }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024 && this.isOpen) {
        this.closeMenu();
      }
    });

    // Desktop accommodation dropdown
    if (this.desktopAccommodationBtn) {
      this.desktopAccommodationBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        this.toggleDesktopAccommodation();
      });

      // Close dropdown when clicking outside
      document.addEventListener('click', (e) => {
        if (
          !this.desktopAccommodationBtn.contains(e.target) &&
          !this.desktopAccommodationMenu?.contains(e.target)
        ) {
          this.closeDesktopAccommodation();
        }
      });
    }
  }

  setupAccommodationDropdown() {
    if (this.accommodationBtn) {
      this.accommodationBtn.addEventListener('click', () => {
        this.toggleAccommodationMenu();
      });
    }
  }

  toggleMenu() {
    if (this.isOpen) {
      this.closeMenu();
    } else {
      this.openMenu();
    }
  }

  openMenu() {
    this.isOpen = true;

    // Add classes for animation
    if (this.sidebar) {
      this.sidebar.classList.add('open');
      this.sidebar.style.transform = 'translateX(0)';
    }

    if (this.overlay) {
      this.overlay.classList.add('show');
      this.overlay.style.opacity = '0.5';
      this.overlay.style.visibility = 'visible';
    }

    // Lock body scroll
    document.body.style.overflow = 'hidden';

    // Update menu button icon
    this.updateMenuButtonIcon();

    // Add animation classes
    this.animateMenuOpen();
  }

  closeMenu() {
    this.isOpen = false;

    // Remove classes for animation
    if (this.sidebar) {
      this.sidebar.classList.remove('open');
      this.sidebar.style.transform = 'translateX(100%)';
    }

    if (this.overlay) {
      this.overlay.classList.remove('show');
      this.overlay.style.opacity = '0';
      this.overlay.style.visibility = 'hidden';
    }

    // Unlock body scroll
    document.body.style.overflow = 'auto';

    // Close accommodation submenu if open
    if (this.isAccommodationOpen) {
      this.closeAccommodationMenu();
    }

    // Update menu button icon
    this.updateMenuButtonIcon();

    // Add animation classes
    this.animateMenuClose();
  }

  updateMenuButtonIcon() {
    if (!this.menuButton) return;

    const icon = this.menuButton.querySelector('i');
    if (icon) {
      if (this.isOpen) {
        icon.setAttribute('data-lucide', 'x');
      } else {
        icon.setAttribute('data-lucide', 'menu');
      }

      // Reinitialize Lucide icons
      if (typeof lucide !== 'undefined') {
        lucide.createIcons();
      }
    }
  }

  animateMenuOpen() {
    if (this.sidebar) {
      // Animate menu items with stagger effect
      const menuItems = this.sidebar.querySelectorAll('nav > *');
      menuItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(20px)';

        setTimeout(() => {
          item.style.transition = 'all 0.3s ease';
          item.style.opacity = '1';
          item.style.transform = 'translateX(0)';
        }, index * 50 + 100);
      });
    }
  }

  animateMenuClose() {
    if (this.sidebar) {
      const menuItems = this.sidebar.querySelectorAll('nav > *');
      menuItems.forEach((item) => {
        item.style.transition = 'none';
        item.style.opacity = '';
        item.style.transform = '';
      });
    }
  }

  toggleAccommodationMenu() {
    if (this.isAccommodationOpen) {
      this.closeAccommodationMenu();
    } else {
      this.openAccommodationMenu();
    }
  }

  openAccommodationMenu() {
    this.isAccommodationOpen = true;

    if (this.accommodationMenu) {
      this.accommodationMenu.classList.add('open');
      this.accommodationMenu.style.maxHeight = '300px';
      this.accommodationMenu.style.opacity = '1';
    }

    if (this.accommodationChevron) {
      this.accommodationChevron.classList.add('rotate');
      this.accommodationChevron.style.transform = 'rotate(180deg)';
    }

    // Animate submenu items
    if (this.accommodationMenu) {
      const subItems = this.accommodationMenu.querySelectorAll('a');
      subItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-10px)';

        setTimeout(() => {
          item.style.transition = 'all 0.2s ease';
          item.style.opacity = '1';
          item.style.transform = 'translateX(0)';
        }, index * 50);
      });
    }
  }

  closeAccommodationMenu() {
    this.isAccommodationOpen = false;

    if (this.accommodationMenu) {
      this.accommodationMenu.classList.remove('open');
      this.accommodationMenu.style.maxHeight = '0';
      this.accommodationMenu.style.opacity = '0';
    }

    if (this.accommodationChevron) {
      this.accommodationChevron.classList.remove('rotate');
      this.accommodationChevron.style.transform = 'rotate(0deg)';
    }

    // Reset submenu items
    if (this.accommodationMenu) {
      const subItems = this.accommodationMenu.querySelectorAll('a');
      subItems.forEach((item) => {
        item.style.transition = 'none';
        item.style.opacity = '';
        item.style.transform = '';
      });
    }
  }

  // Desktop accommodation dropdown methods
  toggleDesktopAccommodation() {
    if (this.desktopAccommodationMenu) {
      const isVisible = this.desktopAccommodationMenu.style.opacity === '1';

      if (isVisible) {
        this.closeDesktopAccommodation();
      } else {
        this.openDesktopAccommodation();
      }
    }
  }

  openDesktopAccommodation() {
    if (this.desktopAccommodationMenu) {
      this.desktopAccommodationMenu.style.opacity = '1';
      this.desktopAccommodationMenu.style.visibility = 'visible';
      this.desktopAccommodationMenu.style.transform = 'translateY(0)';
    }

    if (this.desktopAccommodationChevron) {
      this.desktopAccommodationChevron.style.transform = 'rotate(180deg)';
    }
  }

  closeDesktopAccommodation() {
    if (this.desktopAccommodationMenu) {
      this.desktopAccommodationMenu.style.opacity = '0';
      this.desktopAccommodationMenu.style.visibility = 'hidden';
      this.desktopAccommodationMenu.style.transform = 'translateY(-10px)';
    }

    if (this.desktopAccommodationChevron) {
      this.desktopAccommodationChevron.style.transform = 'rotate(0deg)';
    }
  }

  // Utility methods
  isMenuOpen() {
    return this.isOpen;
  }

  isAccommodationMenuOpen() {
    return this.isAccommodationOpen;
  }

  // Force close all menus
  closeAllMenus() {
    this.closeMenu();
    this.closeDesktopAccommodation();
  }

  // Update active navigation state
  updateActiveNavigation() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach((link) => {
      const href = link.getAttribute('href');
      if (href && currentPath.includes(href.replace('.php', ''))) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  // Smooth scroll to anchor links
  setupSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          const headerHeight = 100; // Account for fixed header
          const targetPosition = targetElement.offsetTop - headerHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth',
          });

          // Close mobile menu if open
          if (this.isOpen) {
            this.closeMenu();
          }
        }
      });
    });
  }

  // Initialize smooth scroll
  init() {
    this.setupElements();
    this.setupEventListeners();
    this.setupAccommodationDropdown();
    this.setupSmoothScroll();
    this.updateActiveNavigation();
  }
}

// Initialize Mobile Menu Controller when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  window.mobileMenuController = new MobileMenuController();
});

// Handle page navigation to update active states
window.addEventListener('popstate', () => {
  if (window.mobileMenuController) {
    window.mobileMenuController.updateActiveNavigation();
  }
});

// Export for use in other files
window.MobileMenuController = MobileMenuController;
