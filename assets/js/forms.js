// Forms JavaScript - EXACT REACT REPLICA
// Handles all form interactions, validation, and AJAX submissions

document.addEventListener('DOMContentLoaded', function () {
  initializeAllForms();
});

function initializeAllForms() {
  // Initialize contact forms
  initializeContactForms();

  // Initialize booking forms
  initializeBookingForms();

  // Initialize newsletter forms
  initializeNewsletterForms();

  // Initialize search forms
  initializeSearchForms();
}

// Contact Form Initialization (EXACT REACT REPLICA)
function initializeContactForms() {
  const contactForms = document.querySelectorAll('form[action*="contact-handler"]');

  contactForms.forEach((form) => {
    // Add AJAX submission
    form.addEventListener('submit', handleContactFormSubmission);

    // Add real-time validation
    addRealTimeValidation(form);

    // Add character counters
    addCharacterCounters(form);

    // Add form state management
    addFormStateManagement(form);
  });
}

// Booking Form Initialization (EXACT REACT REPLICA)
function initializeBookingForms() {
  const bookingForms = document.querySelectorAll('form[action*="booking-handler"]');

  bookingForms.forEach((form) => {
    // Add AJAX submission
    form.addEventListener('submit', handleBookingFormSubmission);

    // Add real-time validation
    addRealTimeValidation(form);

    // Add date validation
    addDateValidation(form);

    // Add pricing calculation
    addPricingCalculation(form);

    // Add guest counter functionality
    addGuestCounters(form);

    // Add add-ons handling
    addAddOnsHandling(form);
  });
}

// Contact Form Submission Handler (EXACT REACT REPLICA)
async function handleContactFormSubmission(e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);
  const submitBtn = form.querySelector('button[type="submit"]');
  const originalText = submitBtn.textContent;

  // Validate form before submission
  if (!validateForm(form)) {
    return;
  }

  // Show loading state (matching React loading state)
  setFormLoading(form, true);
  submitBtn.disabled = true;
  submitBtn.innerHTML = `
    <i data-lucide="loader-2" class="w-4 h-4 mr-2 animate-spin"></i>
    Sending Message...
  `;
  lucide.createIcons();

  try {
    const response = await fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
      },
    });

    const result = await response.json();

    if (result.success) {
      // Show success message (matching React success state)
      showFormMessage(form, result.message, 'success');

      // Reset form (matching React form reset)
      form.reset();
      clearAllFieldErrors(form);

      // Track success event (if analytics available)
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', {
          event_category: 'Contact',
          event_label: 'Contact Form Success',
        });
      }
    } else {
      // Show error message (matching React error state)
      showFormMessage(form, result.message, 'error');

      // Track error event
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_error', {
          event_category: 'Contact',
          event_label: 'Contact Form Error',
        });
      }
    }
  } catch (error) {
    // Form submission error
    showFormMessage(
      form,
      'An unexpected error occurred. Please try again or contact us directly.',
      'error',
    );
  } finally {
    // Reset loading state (matching React loading state reset)
    setFormLoading(form, false);
    submitBtn.disabled = false;
    submitBtn.textContent = originalText;
  }
}

// Booking Form Submission Handler (EXACT REACT REPLICA)
async function handleBookingFormSubmission(e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);
  const submitBtn = form.querySelector('button[type="submit"]');
  const originalText = submitBtn.textContent;

  // Validate form before submission
  if (!validateBookingForm(form)) {
    return;
  }

  // Show loading state
  setFormLoading(form, true);
  submitBtn.disabled = true;
  submitBtn.innerHTML = `
    <i data-lucide="loader-2" class="w-4 h-4 mr-2 animate-spin"></i>
    Processing Booking...
  `;
  lucide.createIcons();

  try {
    const response = await fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
      },
    });

    const result = await response.json();

    if (result.success) {
      // Show success message with booking reference
      showFormMessage(form, result.message, 'success');

      // Show booking reference prominently
      if (result.booking_ref) {
        showBookingReference(form, result.booking_ref);
      }

      // Reset form
      form.reset();
      clearAllFieldErrors(form);
      updatePricingDisplay(form, 0);

      // Track booking event
      if (typeof gtag !== 'undefined') {
        gtag('event', 'booking_submit', {
          event_category: 'Booking',
          event_label: 'Booking Form Success',
          value: result.total_amount || 0,
        });
      }
    } else {
      showFormMessage(form, result.message, 'error');
    }
  } catch (error) {
    // Booking submission error
    showFormMessage(
      form,
      'An unexpected error occurred. Please try again or call us directly.',
      'error',
    );
  } finally {
    setFormLoading(form, false);
    submitBtn.disabled = false;
    submitBtn.textContent = originalText;
  }
}

// Real-time Validation (EXACT REACT REPLICA)
function addRealTimeValidation(form) {
  const inputs = form.querySelectorAll('input, textarea, select');

  inputs.forEach((input) => {
    // Validate on blur (matching React onBlur validation)
    input.addEventListener('blur', () => validateField(input));

    // Clear errors on input (matching React onChange)
    input.addEventListener('input', () => clearFieldError(input));

    // Special handling for email fields
    if (input.type === 'email') {
      input.addEventListener(
        'input',
        debounce(() => {
          if (input.value && !isValidEmail(input.value)) {
            showFieldError(input, 'Please enter a valid email address');
          }
        }, 500),
      );
    }

    // Special handling for phone fields
    if (input.type === 'tel') {
      input.addEventListener(
        'input',
        debounce(() => {
          if (input.value && !isValidPhone(input.value)) {
            showFieldError(input, 'Please enter a valid phone number');
          }
        }, 500),
      );
    }
  });
}

// Date Validation for Booking Forms
function addDateValidation(form) {
  const checkInInput = form.querySelector('input[name="check_in"]');
  const checkOutInput = form.querySelector('input[name="check_out"]');

  if (checkInInput && checkOutInput) {
    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    checkInInput.min = today;
    checkOutInput.min = today;

    // Validate check-in date
    checkInInput.addEventListener('change', () => {
      const checkInDate = new Date(checkInInput.value);
      const today = new Date();

      if (checkInDate < today) {
        showFieldError(checkInInput, 'Check-in date cannot be in the past');
        return;
      }

      // Update check-out minimum date
      const nextDay = new Date(checkInDate);
      nextDay.setDate(nextDay.getDate() + 1);
      checkOutInput.min = nextDay.toISOString().split('T')[0];

      // Clear check-out if it's now invalid
      if (checkOutInput.value && new Date(checkOutInput.value) <= checkInDate) {
        checkOutInput.value = '';
      }

      clearFieldError(checkInInput);
      calculatePricing(form);
    });

    // Validate check-out date
    checkOutInput.addEventListener('change', () => {
      const checkInDate = new Date(checkInInput.value);
      const checkOutDate = new Date(checkOutInput.value);

      if (checkOutDate <= checkInDate) {
        showFieldError(checkOutInput, 'Check-out date must be after check-in date');
        return;
      }

      clearFieldError(checkOutInput);
      calculatePricing(form);
    });
  }
}

// Pricing Calculation (EXACT REACT REPLICA)
function addPricingCalculation(form) {
  const pricingElements = {
    accommodation: form.querySelector('select[name="accommodation"]'),
    checkIn: form.querySelector('input[name="check_in"]'),
    checkOut: form.querySelector('input[name="check_out"]'),
    addOns: form.querySelectorAll('input[name="add_ons[]"]'),
  };

  // Room rates (matching PHP config)
  const roomRates = {
    'forest-view': 8500,
    'valley-view': 9500,
    'family-valley': 12500,
    'plunge-pool': 15500,
    'plunge-pool-ac': 18500,
  };

  // Add-on rates (matching PHP config)
  const addOnRates = {
    airport_transfer: 2500,
    guided_tour: 1500,
    spa_package: 3000,
    adventure_package: 2000,
  };

  // Add event listeners for pricing calculation
  if (pricingElements.accommodation) {
    pricingElements.accommodation.addEventListener('change', () => calculatePricing(form));
  }

  if (pricingElements.checkIn) {
    pricingElements.checkIn.addEventListener('change', () => calculatePricing(form));
  }

  if (pricingElements.checkOut) {
    pricingElements.checkOut.addEventListener('change', () => calculatePricing(form));
  }

  pricingElements.addOns.forEach((addOn) => {
    addOn.addEventListener('change', () => calculatePricing(form));
  });

  function calculatePricing(form) {
    const accommodation = form.querySelector('select[name="accommodation"]')?.value;
    const checkIn = form.querySelector('input[name="check_in"]')?.value;
    const checkOut = form.querySelector('input[name="check_out"]')?.value;
    const selectedAddOns = Array.from(form.querySelectorAll('input[name="add_ons[]"]:checked')).map(
      (cb) => cb.value,
    );

    if (!accommodation || !checkIn || !checkOut) {
      updatePricingDisplay(form, 0);
      return;
    }

    // Calculate nights
    const nights = Math.ceil((new Date(checkOut) - new Date(checkIn)) / (1000 * 60 * 60 * 24));

    if (nights <= 0) {
      updatePricingDisplay(form, 0);
      return;
    }

    // Calculate room total
    const roomRate = roomRates[accommodation] || 0;
    const roomTotal = roomRate * nights;

    // Calculate add-ons total
    const addOnsTotal = selectedAddOns.reduce((total, addOn) => {
      return total + (addOnRates[addOn] || 0);
    }, 0);

    const totalAmount = roomTotal + addOnsTotal;

    // Update pricing display
    updatePricingDisplay(form, totalAmount, {
      roomRate,
      nights,
      roomTotal,
      addOnsTotal,
      selectedAddOns,
    });
  }
}

// Update Pricing Display
function updatePricingDisplay(form, totalAmount, breakdown = null) {
  const pricingContainer = form.querySelector('.pricing-breakdown');

  if (!pricingContainer) return;

  if (totalAmount === 0) {
    pricingContainer.innerHTML =
      '<p class="text-gray-500">Select dates and accommodation to see pricing</p>';
    return;
  }

  let html = '<div class="space-y-2">';

  if (breakdown) {
    html += `
      <div class="flex justify-between">
        <span>Room Rate (${breakdown.nights} night${breakdown.nights > 1 ? 's' : ''})</span>
        <span>₹${breakdown.roomTotal.toLocaleString()}</span>
      </div>
    `;

    if (breakdown.addOnsTotal > 0) {
      html += `
        <div class="flex justify-between">
          <span>Add-ons</span>
          <span>₹${breakdown.addOnsTotal.toLocaleString()}</span>
        </div>
      `;
    }

    html += '<hr class="my-2">';
  }

  html += `
    <div class="flex justify-between font-bold text-lg">
      <span>Total Amount</span>
      <span class="text-orange-500">₹${totalAmount.toLocaleString()}</span>
    </div>
  </div>`;

  pricingContainer.innerHTML = html;
}

// Guest Counters
function addGuestCounters(form) {
  const adultsInput = form.querySelector('input[name="adults"]');
  const childrenInput = form.querySelector('input[name="children"]');

  if (adultsInput) {
    addCounterControls(adultsInput, 1, 10);
  }

  if (childrenInput) {
    addCounterControls(childrenInput, 0, 8);
  }
}

function addCounterControls(input, min, max) {
  const container = input.parentElement;

  // Create counter controls
  const controls = document.createElement('div');
  controls.className = 'flex items-center space-x-2';

  const decreaseBtn = document.createElement('button');
  decreaseBtn.type = 'button';
  decreaseBtn.className =
    'w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition-colors';
  decreaseBtn.innerHTML = '<i data-lucide="minus" class="w-4 h-4"></i>';

  const increaseBtn = document.createElement('button');
  increaseBtn.type = 'button';
  increaseBtn.className =
    'w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition-colors';
  increaseBtn.innerHTML = '<i data-lucide="plus" class="w-4 h-4"></i>';

  // Replace input with controls
  controls.appendChild(decreaseBtn);
  controls.appendChild(input);
  controls.appendChild(increaseBtn);

  container.appendChild(controls);

  // Add event listeners
  decreaseBtn.addEventListener('click', () => {
    const currentValue = parseInt(input.value) || min;
    if (currentValue > min) {
      input.value = currentValue - 1;
      input.dispatchEvent(new Event('change'));
    }
  });

  increaseBtn.addEventListener('click', () => {
    const currentValue = parseInt(input.value) || min;
    if (currentValue < max) {
      input.value = currentValue + 1;
      input.dispatchEvent(new Event('change'));
    }
  });

  lucide.createIcons();
}

// Form Validation Functions
function validateForm(form) {
  const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
  let isValid = true;

  inputs.forEach((input) => {
    if (!validateField(input)) {
      isValid = false;
    }
  });

  return isValid;
}

function validateBookingForm(form) {
  // Standard validation
  if (!validateForm(form)) {
    return false;
  }

  // Additional booking-specific validation
  const checkIn = form.querySelector('input[name="check_in"]')?.value;
  const checkOut = form.querySelector('input[name="check_out"]')?.value;

  if (checkIn && checkOut) {
    const checkInDate = new Date(checkIn);
    const checkOutDate = new Date(checkOut);

    if (checkOutDate <= checkInDate) {
      showFormMessage(form, 'Check-out date must be after check-in date', 'error');
      return false;
    }
  }

  return true;
}

function validateField(input) {
  const value = input.value.trim();

  clearFieldError(input);

  // Required field validation
  if (input.hasAttribute('required') && !value) {
    showFieldError(input, 'This field is required');
    return false;
  }

  // Email validation
  if (input.type === 'email' && value && !isValidEmail(value)) {
    showFieldError(input, 'Please enter a valid email address');
    return false;
  }

  // Phone validation
  if (input.type === 'tel' && value && !isValidPhone(value)) {
    showFieldError(input, 'Please enter a valid phone number');
    return false;
  }

  // Date validation
  if (input.type === 'date' && value) {
    const inputDate = new Date(value);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (inputDate < today) {
      showFieldError(input, 'Date cannot be in the past');
      return false;
    }
  }

  return true;
}

// Utility Functions
function showFormMessage(form, message, type) {
  // Remove existing messages
  const existingMessages = form.querySelectorAll('.form-message');
  existingMessages.forEach((msg) => msg.remove());

  // Create new message
  const messageDiv = document.createElement('div');
  messageDiv.className = `form-message alert alert-${type} mb-4`;
  messageDiv.innerHTML = `
    <div class="flex items-center">
      <i data-lucide="${
        type === 'success' ? 'check-circle' : 'alert-circle'
      }" class="w-5 h-5 mr-2"></i>
      <span>${message}</span>
    </div>
  `;

  form.insertBefore(messageDiv, form.firstChild);
  lucide.createIcons();

  // Auto-remove after 8 seconds
  setTimeout(() => {
    messageDiv.remove();
  }, 8000);

  // Scroll to message
  messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function showBookingReference(form, bookingRef) {
  const referenceDiv = document.createElement('div');
  referenceDiv.className = 'bg-green-50 border border-green-200 rounded-lg p-4 mb-4';
  referenceDiv.innerHTML = `
    <div class="flex items-center">
      <i data-lucide="bookmark" class="w-5 h-5 text-green-600 mr-2"></i>
      <div>
        <p class="font-semibold text-green-800">Booking Reference</p>
        <p class="text-green-700 font-mono text-lg">${bookingRef}</p>
        <p class="text-sm text-green-600">Please save this reference number for your records</p>
      </div>
    </div>
  `;

  const firstMessage = form.querySelector('.form-message');
  if (firstMessage) {
    form.insertBefore(referenceDiv, firstMessage.nextSibling);
  } else {
    form.insertBefore(referenceDiv, form.firstChild);
  }

  lucide.createIcons();
}

function setFormLoading(form, isLoading) {
  const inputs = form.querySelectorAll('input, textarea, select, button');

  inputs.forEach((input) => {
    input.disabled = isLoading;
  });

  if (isLoading) {
    form.classList.add('form-loading');
  } else {
    form.classList.remove('form-loading');
  }
}

function showFieldError(input, message) {
  clearFieldError(input);

  const errorDiv = document.createElement('div');
  errorDiv.className = 'field-error text-red-500 text-sm mt-1';
  errorDiv.textContent = message;

  input.classList.add('border-red-500', 'focus:border-red-500');
  input.parentNode.appendChild(errorDiv);
}

function clearFieldError(input) {
  const errorDiv = input.parentNode.querySelector('.field-error');
  if (errorDiv) {
    errorDiv.remove();
  }
  input.classList.remove('border-red-500', 'focus:border-red-500');
}

function clearAllFieldErrors(form) {
  const errorDivs = form.querySelectorAll('.field-error');
  errorDivs.forEach((div) => div.remove());

  const errorInputs = form.querySelectorAll('.border-red-500');
  errorInputs.forEach((input) => {
    input.classList.remove('border-red-500', 'focus:border-red-500');
  });
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function isValidPhone(phone) {
  const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
  return phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''));
}

function addCharacterCounters(form) {
  const textareas = form.querySelectorAll('textarea[maxlength]');

  textareas.forEach((textarea) => {
    const maxLength = parseInt(textarea.getAttribute('maxlength'));
    const counter = document.createElement('div');
    counter.className = 'text-sm text-gray-500 mt-1 text-right';

    const updateCounter = () => {
      const remaining = maxLength - textarea.value.length;
      counter.textContent = `${remaining} characters remaining`;

      if (remaining < 50) {
        counter.classList.add('text-orange-500');
      } else {
        counter.classList.remove('text-orange-500');
      }
    };

    textarea.addEventListener('input', updateCounter);
    textarea.parentNode.appendChild(counter);
    updateCounter();
  });
}

function addFormStateManagement(form) {
  // Save form state to localStorage
  const formId = form.id || 'form-' + Math.random().toString(36).substr(2, 9);
  const storageKey = 'form-state-' + formId;

  // Load saved state
  const savedState = localStorage.getItem(storageKey);
  if (savedState) {
    try {
      const state = JSON.parse(savedState);
      Object.keys(state).forEach((name) => {
        const input = form.querySelector(`[name="${name}"]`);
        if (input && input.type !== 'password') {
          if (input.type === 'checkbox' || input.type === 'radio') {
            input.checked = state[name];
          } else {
            input.value = state[name];
          }
        }
      });
    } catch (e) {
      // Failed to restore form state
    }
  }

  // Save state on input
  const inputs = form.querySelectorAll('input, textarea, select');
  inputs.forEach((input) => {
    input.addEventListener(
      'input',
      debounce(() => {
        const formData = new FormData(form);
        const state = {};

        for (let [name, value] of formData.entries()) {
          state[name] = value;
        }

        localStorage.setItem(storageKey, JSON.stringify(state));
      }, 500),
    );
  });

  // Clear state on successful submission
  form.addEventListener('form-success', () => {
    localStorage.removeItem(storageKey);
  });
}

function initializeNewsletterForms() {
  const newsletterForms = document.querySelectorAll('form[action*="newsletter"]');

  newsletterForms.forEach((form) => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const email = form.querySelector('input[type="email"]').value;

      if (!isValidEmail(email)) {
        showFormMessage(form, 'Please enter a valid email address', 'error');
        return;
      }

      // Simple newsletter signup (you can enhance this)
      showFormMessage(form, 'Thank you for subscribing to our newsletter!', 'success');
      form.reset();
    });
  });
}

function initializeSearchForms() {
  const searchForms = document.querySelectorAll('form[role="search"]');

  searchForms.forEach((form) => {
    const searchInput = form.querySelector('input[type="search"]');

    if (searchInput) {
      searchInput.addEventListener(
        'input',
        debounce((e) => {
          const query = e.target.value.trim();

          if (query.length >= 3) {
            // Implement search functionality here
            // Search query: query
          }
        }, 300),
      );
    }
  });
}

function addAddOnsHandling(form) {
  const addOnCheckboxes = form.querySelectorAll('input[name="add_ons[]"]');

  addOnCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
      calculatePricing(form);

      // Visual feedback for selected add-ons
      const card = checkbox.closest('.add-on-card');
      if (card) {
        if (checkbox.checked) {
          card.classList.add('border-orange-500', 'bg-orange-50');
        } else {
          card.classList.remove('border-orange-500', 'bg-orange-50');
        }
      }
    });
  });
}

// Debounce utility function
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
window.formController = {
  initializeAllForms,
  initializeContactForms,
  initializeBookingForms,
  validateForm,
  validateBookingForm,
  showFormMessage,
  clearAllFieldErrors,
};
