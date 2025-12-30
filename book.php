<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Basic SEO Meta Tags -->
    <title>Book Your Stay | Wildernest Nature Resort, Goa</title>
    <meta name="description" content="Immerse yourself in the rarefied world of luxury eco-tourism at Wildernest Nature Resort, Goa. Secure your place in our elegantly appointed accommodations, harmoniously nestled within untouched wilderness.">
    <meta name="keywords" content="Wildernest, Nature Resort, Goa, Eco-Tourism, Luxury Resort, Western Ghats, Accommodation, Activities">
    <meta name="author" content="Wildernest Nature Resort">
    <meta name="robots" content="index, follow">
    <?php
    $page_title = "Book Your Stay | Wildernest Nature Resort, Goa";
    $page_description = "Immerse yourself in the rarefied world of luxury eco-tourism at Wildernest Nature Resort, Goa. Secure your place in our elegantly appointed accommodations, harmoniously nestled within untouched wilderness.";
    include 'includes/header.php';

    // Include reCAPTCHA configuration
    define('RECAPTCHA_HANDLER', true);
    require_once 'handlers/recaptcha-config.php';
    ?>

    <!-- reCAPTCHA v3 -->
    <?php echo getRecaptchaScript(); ?>
</head>
<body class="font-sans text-gray-800 bg-white">
<div class="flex bg-transparent flex-col min-h-screen">

<main class="flex-grow">
    <?php include 'includes/navbar.php'; ?>
    <!-- Hero Banner Section -->
    <div class="relative pt-40 pb-16 sm:pb-32 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('assets/images/cta-bg.svg');">
        <div class="container mx-auto px-4 text-center">
            <div class="pt-28 sm:pt-0" data-aos="fade-up" data-aos-duration="800">
                <h3 class="text-xl text-white font-handwriting mb-2">Luxury Eco-Tourism in Goa</h3>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white relative mb-6">Plan Your Trip</h1>
                <p class="text-gray-100 text-base sm:text-lg max-w-3xl mx-auto px-4 sm:px-0">Experience the ultimate in luxury eco-tourism at Wildernest Nature Resort in Goa, India. Book your stay in our beautiful accommodations surrounded by nature.</p>
            </div>
        </div>
    </div>

    <!-- Booking Form Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Booking Form -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100" data-aos="fade-right" data-aos-duration="600">
                    <div class="bg-orange-600 p-6 text-white">
                        <h2 class="text-2xl font-bold">Reservation Details</h2>
                        <p class="text-orange-100">Complete the form to check availability</p>
                    </div>

                    <div id="bookingForm" class="p-6 md:p-8">
                        <form id="reservationForm" action="handlers/email-handler.php" method="POST" class="space-y-6">
                            <input type="hidden" name="form_type" value="booking">

                            <!-- Name Field -->
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="user" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input type="text" name="name" required placeholder="Full Name" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                            </div>

                            <!-- Email Field -->
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="mail" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input type="email" name="email" required placeholder="Email Address" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                            </div>

                            <!-- Phone Field -->
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="phone" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input type="tel" name="phone" required placeholder="Phone Number" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                            </div>

                            <!-- Cottage Selection -->
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-lucide="home" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <select name="cottage_type" required class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 appearance-none">
                                    <option value="">Select Cottage Type</option>
                                    <option value="forest_view">Forest View Cottage</option>
                                    <option value="valley_view">Valley View Cottage</option>
                                    <option value="family_valley">Family Valley View Cottage</option>
                                    <option value="plunge_pool">Private Plunge Pool</option>
                                    <option value="plunge_pool_ac">Private Plunge Pool - AC</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                </div>
                            </div>

                            <!-- Date Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Check-in -->
                                <div class="relative">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Check-in Date*</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-lucide="calendar" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input type="date" name="checkin" id="checkin-date" required class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Select your arrival date</p>
                                    <p id="checkin-error" class="text-xs text-red-600 mt-1 hidden"></p>
                                </div>

                                <!-- Check-out -->
                                <div class="relative">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Check-out Date*</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i data-lucide="calendar" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input type="date" name="checkout" id="checkout-date" required class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1" id="checkout-helper">Must be after check-in date</p>
                                    <p id="checkout-error" class="text-xs text-red-600 mt-1 hidden flex items-center">
                                        <i data-lucide="alert-circle" class="w-4 h-4 mr-1"></i>
                                        <span></span>
                                    </p>
                                    <p id="nights-display" class="text-xs text-green-600 mt-1 hidden flex items-center">
                                        <i data-lucide="calendar-check" class="w-4 h-4 mr-1"></i>
                                        <span></span>
                                    </p>
                                </div>
                            </div>

                            <!-- Guest Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Adults -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="users" class="h-5 w-5 text-gray-400"></i>
                                    </div>
                                    <select name="adults" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 appearance-none">
                                        <option value="1">1 Adult</option>
                                        <option value="2">2 Adults</option>
                                        <option value="3">3 Adults</option>
                                        <option value="4">4 Adults</option>
                                        <option value="5">5 Adults</option>
                                        <option value="6">6 Adults</option>
                                    </select>
                                </div>

                                <!-- Children -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i data-lucide="baby" class="h-5 w-5 text-gray-400"></i>
                                    </div>
                                    <select name="children" class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 appearance-none">
                                        <option value="0">0 Children</option>
                                        <option value="1">1 Child</option>
                                        <option value="2">2 Children</option>
                                        <option value="3">3 Children</option>
                                        <option value="4">4 Children</option>
                                    </select>
                                </div>
                            </div>



                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white py-4 px-6 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                                Check Availability
                            </button>
                        </form>
                    </div>

                    <!-- Success Message (hidden by default) -->
                    <div id="successMessage" class="p-8 text-center hidden">
                        <div class="bg-green-50 border border-green-200 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="check" class="h-10 w-10 text-green-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Booking Request Received!</h3>
                        <p class="text-gray-600 mb-6">Thank you for choosing Wildernest. We've received your reservation request and will contact you within 24 hours to confirm your booking.</p>
                        <button onclick="resetForm()" class="bg-orange-600 hover:bg-orange-700 text-white py-3 px-6 rounded-lg font-medium transition-all">
                            Make Another Reservation
                        </button>
                    </div>
                </div>

                <!-- Booking Benefits -->
                <div class="space-y-8" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <div class="bg-orange-50 p-8 rounded-2xl border border-orange-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Why Book Directly With Us?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="bg-orange-100 rounded-full p-1 mr-3 mt-0.5">
                                    <i data-lucide="check" class="h-5 w-5 text-orange-600"></i>
                                </div>
                                <span class="text-gray-700">Best rate guarantee - no booking fees</span>
                            </li>
                            <li class="flex items-start">
                                <div class="bg-orange-100 rounded-full p-1 mr-3 mt-0.5">
                                    <i data-lucide="check" class="h-5 w-5 text-orange-600"></i>
                                </div>
                                <span class="text-gray-700">Priority room assignment and upgrades</span>
                            </li>
                            <li class="flex items-start">
                                <div class="bg-orange-100 rounded-full p-1 mr-3 mt-0.5">
                                    <i data-lucide="check" class="h-5 w-5 text-orange-600"></i>
                                </div>
                                <span class="text-gray-700">Flexible cancellation policy</span>
                            </li>
                            <li class="flex items-start">
                                <div class="bg-orange-100 rounded-full p-1 mr-3 mt-0.5">
                                    <i data-lucide="check" class="h-5 w-5 text-orange-600"></i>
                                </div>
                                <span class="text-gray-700">Personalized pre-arrival concierge service</span>
                            </li>
                            <li class="flex items-start">
                                <div class="bg-orange-100 rounded-full p-1 mr-3 mt-0.5">
                                    <i data-lucide="check" class="h-5 w-5 text-orange-600"></i>
                                </div>
                                <span class="text-gray-700">Exclusive direct-booking offers</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-2xl border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Need Assistance?</h3>
                        <p class="text-gray-600 mb-4">Our dedicated reservations specialists are available around the clock to ensure your arrangements are seamless and your inquiries receive exceptional attention.</p>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i data-lucide="phone" class="w-5 h-5 text-orange-600 mr-3"></i>
                                <span class="text-gray-700">+91 94800 22108</span>
                            </div>
                            <div class="flex items-center">
                                <i data-lucide="mail" class="w-5 h-5 text-orange-600 mr-3"></i>
                                <span class="text-gray-700">book@wildernestgoa.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-8 rounded-2xl text-white">
                        <h3 class="text-2xl font-bold mb-4">Cancellation Policy</h3>
                        <p class="text-gray-300 mb-5">Enjoy complimentary cancellation up to 7 days before arrival. Flexible, privileged options are reserved for guests booking directly.</p>
                        <a href="cancellation.php" class="border border-white text-white hover:bg-white/10 py-3 px-6 rounded-lg font-medium transition-all">
                            View Full Policy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Peace of Mind Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Book With Confidence</h2>
                <p class="text-lg text-gray-600 mb-8 max-w-3xl mx-auto">Your well-being is our utmost privilege. Expect the highest standards of discrete comfort and attentive care.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-duration="500">
                    <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="shield-check" class="h-8 w-8 text-orange-600"></i>
                    </div>
                    <p class="font-medium text-gray-700">Discreet Secure Payment</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="package" class="h-8 w-8 text-orange-600"></i>
                    </div>
                    <p class="font-medium text-gray-700">Tailored Cancellation Options</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="lock" class="h-8 w-8 text-orange-600"></i>
                    </div>
                    <p class="font-medium text-gray-700">Assured Privacy Protection</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="cloud" class="h-8 w-8 text-orange-600"></i>
                    </div>
                    <p class="font-medium text-gray-700">Exclusive Price Guarantee</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.getElementById('reservationForm').addEventListener('submit', function(e) {
    // Basic client-side validation
    const name = this.querySelector('input[name="name"]').value.trim();
    const email = this.querySelector('input[name="email"]').value.trim();
    const phone = this.querySelector('input[name="phone"]').value.trim();
    const cottage_type = this.querySelector('select[name="cottage_type"]').value;
    const checkin = this.querySelector('input[name="checkin"]').value;
    const checkout = this.querySelector('input[name="checkout"]').value;

    if (!name || !email || !phone || !cottage_type || !checkin || !checkout) {
        e.preventDefault();
        alert('Please fill in all required fields including cottage type.');
        return;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        e.preventDefault();
        alert('Please enter a valid email address.');
        return;
    }

    // Date validation
    const checkinDate = new Date(checkin);
    const checkoutDate = new Date(checkout);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (checkinDate < today) {
        e.preventDefault();
        alert('Check-in date cannot be in the past.');
        return;
    }

    if (checkoutDate <= checkinDate) {
        e.preventDefault();
        alert('Check-out date must be after check-in date.');
        return;
    }

    // Show loading state
    const submitButton = e.target.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    submitButton.innerHTML = '<i data-lucide="loader" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline"></i>Processing...';
    submitButton.disabled = true;
});

function resetForm() {
    // Show form and hide success message
    document.getElementById('bookingForm').classList.remove('hidden');
    document.getElementById('successMessage').classList.add('hidden');

    // Reset form
    document.getElementById('reservationForm').reset();
}

// Set minimum date to today and handle date validation with error messages
document.addEventListener('DOMContentLoaded', function() {
    const today = new Date().toISOString().split('T')[0];
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
            checkoutHelper.classList.add('hidden');
            nightsDisplay.classList.add('hidden');
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
            checkoutHelper.classList.remove('hidden');
            checkOutInput.classList.remove('border-red-500');
            checkOutInput.classList.add('border-gray-300');
        }
    }

    // Function to calculate and display nights and days
    function calculateNights(checkin, checkout) {
        const checkinDate = new Date(checkin);
        const checkoutDate = new Date(checkout);
        const nights = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
        const days = nights + 1; // Days = Nights + 1 (e.g., 3 nights = 4 days)

        if (nights > 0 && nightsDisplay) {
            const nightText = `${nights} night${nights > 1 ? 's' : ''}`;
            const dayText = `${days} day${days > 1 ? 's' : ''}`;
            nightsDisplay.querySelector('span').textContent = `${dayText} / ${nightText} stay`;
            nightsDisplay.classList.remove('hidden');
            checkoutHelper.classList.add('hidden');

            // Re-initialize lucide icons for the moon icon
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        } else {
            nightsDisplay.classList.add('hidden');
            checkoutHelper.classList.remove('hidden');
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
});
</script>
</main>

<?php include 'includes/footer.php'; ?>

</div>

<!-- reCAPTCHA v3 Integration -->
<?php echo getRecaptchaFormScript('reservationForm', 'booking'); ?>

</body>
</html>
