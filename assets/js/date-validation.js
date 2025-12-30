/**
 * Date Validation Script for Wildernest Booking Forms
 * Handles check-in/check-out date validation with real-time error messages
 */

function initializeDateValidation() {
    const today = new Date().toISOString().sp0];
    const checkInInput = document.getElementById('checkin-date');
    const checkOutInput = document.getElementById('checkout-date');
    const checkoutError = document.getElementById('checkout-error');
    const checkoutHelper = document.getElementById('checkout-helper');
    const nightsDisplay = document.getElementById('nights-display');

    // Function to show error message
    function showError(message) {
        if (checkoutError) {
            checkoutError.querySelector('span').textContent = message;
            checkoutError.classList.remove('hidden');
            if (checkoutHelper) checkoutHelper.classList.add('hidden');
            if (nightsDisplay) nightsDisplay.classList.add('hidden');
            checkOutInput.classList.add('border-red-500');
            checkOutInput.classList.remove('border-gray-300');

            // Re-initialize lucide icons for the error icon
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }
    }

    // Function to hide error message
    function hideError() {
        if (checkoutError) {
            checkoutError.classList.add('hidden');
            if (checkoutHelper) checkoutHelper.classList.remove('hidden');
            checkOutInput.classList.remove('border-red-500');
            checkOutInput.classList.add('border-gray-300');
        }
    }

    // Function to calculate and display nights and days
    function calculateNights(checkin, checkout) {
        const checkinDate = new Date(checkin);
        const checkoutDate = new Date(checkout);
        const nights = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
        const days = nights + 1; // Days = Nights + 1

        if (nights > 0 && nightsDisplay) {
            const nightText = `${nights} night${nights > 1 ? 's' : ''}`;
            const dayText = `${days} day${days > 1 ? 's' : ''}`;
            nightsDisplay.querySelector('span').textContent = `${dayText} / ${nightText} stay`;
            nightsDisplay.classList.remove('hidden');
            if (checkoutHelper) checkoutHelper.classList.add('hidden');

            // Re-initialize lucide icons
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        } else {
            if (nightsDisplay) nightsDisplay.classList.add('hidden');
            if (checkoutHelper) checkoutHelper.classList.remove('hidden');
        }
    }

    if (checkInInput) {
        // Set minimum check-in date to today
        checkInInput.min = today;

        // When check-in date changes
        checkInInput.addEventListener('change', function() {
            const checkinDate = this.value;

            if (checkOutInput) {
                // Set minimum check-out date to day after check-in
                const nextDay = new Date(checkinDate);
                nextDay.setDate(nextDay.getDate() + 1);
                checkOutInput.min = nextDay.toISOString().split('T')[0];

                // Validate existing checkout date
                if (checkOutInput.value) {
                    if (checkOutInput.value <= checkinDate) {
                        showError('❌ Check-out date must be after check-in date!');
                        checkOutInput.value = '';
                    } else {
                        hideError();
                        calculateNights(checkinDate, checkOutInput.value);
                    }
                }
            }
        });
    }

    if (checkOutInput) {
        // Set minimum check-out date to today initially
        checkOutInput.min = today;

        // Validate on change
        checkOutInput.addEventListener('change', function() {
            if (checkInInput && checkInInput.value) {
                const checkinDate = checkInInput.value;
                const checkoutDate = this.value;

                if (checkoutDate <= checkinDate) {
                    showError('❌ Check-out must be after ' + new Date(checkinDate).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }));
                    this.value = '';
                } else {
                    hideError();
                    calculateNights(checkinDate, checkoutDate);
                    // Add green border for valid date
                    this.classList.remove('border-red-500');
                    this.classList.add('border-green-500');
                    setTimeout(() => {
                        this.classList.remove('border-green-500');
                        this.classList.add('border-gray-300');
                    }, 2000);
                }
            } else if (this.value) {
                // If checkout is selected but no checkin
                showError('⚠️ Please select check-in date first');
                this.value = '';
            }
        });

        // Also validate on input (for manual typing)
        checkOutInput.addEventListener('input', function() {
            if (checkInInput && checkInInput.value && this.value) {
                const checkinDate = checkInInput.value;
                const checkoutDate = this.value;

                if (checkoutDate <= checkinDate) {
                    showError('❌ Invalid date - must be after check-in');
                }
            }
        });
    }
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeDateValidation);
} else {
    initializeDateValidation();
}

