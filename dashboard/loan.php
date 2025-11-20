<?php include("header.php"); ?>
  <!-- Sidebar overlay for mobile -->
  <div
    x-show="sidebarOpen"
    @click="sidebarOpen = false"
    class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" x-cloak>
  </div>

  <!-- Main content placeholder -->
  <div class="flex-1 ml-0 md:ml-64 p-4 pb-20 md:pb-4">
    <!-- Your main dashboard content goes here -->
    <!-- Alpine.js Component for Loan Application -->
<div x-data="loanApplication()" class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Section -->
        <div class="mb-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-6" aria-label="Breadcrumb">
                <a href="https://jarvistradepro.com/dashboard" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                    <i data-lucide="home" class="w-4 h-4 inline mr-1"></i>
                    Dashboard
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 dark:text-gray-100 font-medium">Loan Application</span>
            </nav>

            <!-- Page Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                    <i data-lucide="credit-card" class="w-8 h-8 inline mr-3 text-blue-600 dark:text-blue-400"></i>
                    Loan Application
                </h1>
                <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl mx-auto">
                    Apply for various credit facilities with competitive rates and flexible terms
                </p>
            </div>
        </div>

        <!-- Alert Messages -->
        <div class="mb-6">
            <div>
    </div>
                                </div>

        <!-- Loan Benefits Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 text-center">
                <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-xl w-fit mx-auto mb-4">
                    <i data-lucide="percent" class="w-6 h-6 text-green-600 dark:text-green-400"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Competitive Rates</h3>
                <p class="text-gray-600 dark:text-gray-400">Low interest rates starting from 5.5% APR</p>
            </div>

            <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 text-center">
                <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl w-fit mx-auto mb-4">
                    <i data-lucide="clock" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Quick Approval</h3>
                <p class="text-gray-600 dark:text-gray-400">Get approved within 24-48 hours</p>
            </div>

            <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 text-center">
                <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mx-auto mb-4">
                    <i data-lucide="shield-check" class="w-6 h-6 text-purple-600 dark:text-purple-400"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Secure Process</h3>
                <p class="text-gray-600 dark:text-gray-400">Bank-level security and encryption</p>
            </div>
        </div>

        <!-- Application Form -->
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 overflow-hidden">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
                <h2 class="text-xl font-bold text-white flex items-center">
                    <i data-lucide="file-text" class="w-6 h-6 mr-2"></i>
                    Loan Application Form
                </h2>
            </div>

            <!-- Form Content -->
            <form action="https://jarvistradepro.com/dashboard/loan" method="post" class="p-6 space-y-6" @submit="handleSubmit">
                <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">
                <!-- Loan Amount Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-800 pb-2">
                        <i data-lucide="dollar-sign" class="w-5 h-5 inline mr-2 text-blue-600 dark:text-blue-400"></i>
                        Loan Details
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Loan Amount -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                                Loan Amount ($)
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-400">$</span>
                                <input type="number"
                                       name="amount"
                                       x-model="loanAmount"
                                       @input="calculateMonthlyPayment()"
                                       required
                                       min="1000"
                                       step="100"
                                       class="w-full pl-12 pr-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent transition-all"
                                       placeholder="Enter loan amount" />
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Minimum amount: $1,000</p>
                        </div>

                        <!-- Duration -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                                Loan Duration
                                <span class="text-red-500">*</span>
                            </label>
                            <select name="duration"
                                    x-model="duration"
                                    @change="calculateMonthlyPayment()"
                                    required
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent transition-all">
                                <option value="">Select Duration</option>
                                <option value="6">6 Months</option>
                                <option value="12">12 Months (1 Year)</option>
                                <option value="24">24 Months (2 Years)</option>
                                <option value="36">36 Months (3 Years)</option>
                                <option value="48">48 Months (4 Years)</option>
                                <option value="60">60 Months (5 Years)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Monthly Payment Calculator -->
                    <div x-show="monthlyPayment > 0"
                         x-transition
                         class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-4 border border-blue-200 dark:border-blue-800">
                        <h4 class="text-sm font-semibold text-blue-900 dark:text-blue-300 mb-2">
                            <i data-lucide="calculator" class="w-4 h-4 inline mr-1"></i>
                            Estimated Monthly Payment
                        </h4>
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400" x-text="`$${monthlyPayment.toFixed(2)}`"></p>
                        <p class="text-sm text-blue-700 dark:text-blue-300">Based on 8.5% APR (rates may vary)</p>
                    </div>
                </div>

                <!-- Credit Facility Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-800 pb-2">
                        <i data-lucide="building-2" class="w-5 h-5 inline mr-2 text-blue-600 dark:text-blue-400"></i>
                        Credit Facility Type
                    </h3>

                    <div>
                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                            Select Credit Facility
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="facility"
                                required
                                class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent transition-all">
                            <option value="">Select Loan/Credit Facility</option>
                            <option value="Personal Home Loans">🏠 Personal Home Loans</option>
                            <option value="Joint Mortgage">🏘️ Joint Mortgage</option>
                            <option value="Automobile Loans">🚗 Automobile Loans</option>
                            <option value="Salary loans">💼 Salary Loans</option>
                            <option value="Secured Overdraft">🔒 Secured Overdraft</option>
                            <option value="Contract Finance">📋 Contract Finance</option>
                            <option value="Secured Term Loans">🏦 Secured Term Loans</option>
                            <option value="StartUp/Products Financing">🚀 StartUp/Products Financing</option>
                            <option value="Local Purchase Orders Finance">📦 Local Purchase Orders Finance</option>
                            <option value="Operational Vehicles">🚚 Operational Vehicles</option>
                            <option value="Revenue Loans and Overdraft">💰 Revenue Loans and Overdraft</option>
                            <option value="Retail TOD">🏪 Retail TOD</option>
                            <option value="Commercial Mortgage">🏢 Commercial Mortgage</option>
                            <option value="Office Equipment">💻 Office Equipment</option>
                            <option value="Health Finance">🏥 Health Finance</option>
                        </select>
                    </div>
                </div>

                <!-- Personal Information Section -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-800 pb-2">
                        <i data-lucide="user" class="w-5 h-5 inline mr-2 text-blue-600 dark:text-blue-400"></i>
                        Financial Information
                    </h3>

                    <div>
                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                            Monthly Net Income
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="income"
                                required
                                class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent transition-all">
                            <option value="">Select Income Range</option>
                            <option value="2,000-5,000">$2,000 - $5,000</option>
                            <option value="6,000-10,000">$6,000 - $10,000</option>
                            <option value="11,000-20,000">$11,000 - $20,000</option>
                            <option value="21,000-50,000">$21,000 - $50,000</option>
                            <option value="51,000-100,000">$51,000 - $100,000</option>
                            <option value="100,000 and above">$100,000 and above</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                            Purpose of Loan
                            <span class="text-red-500">*</span>
                        </label>
                        <textarea name="purpose"
                                  required
                                  rows="4"
                                  class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent transition-all resize-none"
                                  placeholder="Please provide detailed information about the purpose of this loan..."></textarea>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Minimum 50 characters required</p>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                        <i data-lucide="file-check" class="w-5 h-5 inline mr-2 text-blue-600 dark:text-blue-400"></i>
                        Terms & Conditions
                    </h3>

                    <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-green-600 dark:text-green-400 flex-shrink-0 mt-0.5"></i>
                            <p>Interest rates are subject to credit assessment and may vary based on loan type and duration.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-green-600 dark:text-green-400 flex-shrink-0 mt-0.5"></i>
                            <p>All loan applications are subject to approval and verification of provided information.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-green-600 dark:text-green-400 flex-shrink-0 mt-0.5"></i>
                            <p>Early repayment options are available with potential fee reductions.</p>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center gap-3">
                        <input type="checkbox"
                               id="terms"
                               x-model="acceptedTerms"
                               required
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="terms" class="text-sm text-gray-900 dark:text-white">
                            I accept the <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">terms and conditions</a>
                            <span class="text-red-500">*</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6">
                    <button type="submit"
                            :disabled="!acceptedTerms"
                            :class="acceptedTerms ? 'bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 transform hover:scale-105' : 'bg-gray-400 cursor-not-allowed'"
                            class="w-full text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 flex items-center justify-center gap-2">
                        <i data-lucide="send" class="w-5 h-5"></i>
                        <span>Submit Loan Application</span>
                    </button>

                    <p class="text-center text-sm text-gray-600 dark:text-gray-400 mt-4">
                        <i data-lucide="shield" class="w-4 h-4 inline mr-1"></i>
                        Your information is encrypted and secure. We'll review your application within 24-48 hours.
                    </p>
                </div>
            </form>
        </div>

        <!-- Additional Information -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 dark:text-gray-400 mb-4">Need help with your application?</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="support.php"
                   class="inline-flex items-center gap-2 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300 font-semibold py-2 px-4 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <i data-lucide="headphones" class="w-4 h-4"></i>
                    Contact Support
                </a>
                <a href="#"
                   class="inline-flex items-center gap-2 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300 font-semibold py-2 px-4 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    Download Brochure
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Alpine.js Script -->
<script>
function loanApplication() {
    return {
        loanAmount: 0,
        duration: '',
        monthlyPayment: 0,
        acceptedTerms: false,

        calculateMonthlyPayment() {
            if (this.loanAmount > 0 && this.duration > 0) {
                // Simple loan calculation with 8.5% annual interest rate
                const monthlyRate = 0.085 / 12;
                const numPayments = parseInt(this.duration);

                if (monthlyRate === 0) {
                    this.monthlyPayment = this.loanAmount / numPayments;
                } else {
                    this.monthlyPayment = this.loanAmount * (monthlyRate * Math.pow(1 + monthlyRate, numPayments)) / (Math.pow(1 + monthlyRate, numPayments) - 1);
                }
            } else {
                this.monthlyPayment = 0;
            }
        },

        handleSubmit(e) {
            // Add any additional validation here
            if (!this.acceptedTerms) {
                e.preventDefault();
                alert('Please accept the terms and conditions to proceed.');
            }
        }
    }
}

// Initialize Lucide icons when page loads
document.addEventListener('DOMContentLoaded', function() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>

  </div>
</div>





<!-- Modern Mobile Navigation with Glassmorphism -->
<link href="https://unpkg.com/lucide@latest" rel="stylesheet">

<div class="fixed bottom-0 w-full z-30 md:hidden" x-data="{ fabOpen: false }" x-cloak>
  <!-- Bottom Navigation Bar with Glassmorphism -->
  <div class="flex justify-between items-center bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg px-6 py-4 shadow-[0_-8px_30px_rgba(0,0,0,0.12)] relative border-t border-gray-200/20 dark:border-gray-700/20">
    <!-- Language Selector (Mobile) -->
    <div class="group flex flex-col items-center relative">
      <div class="relative">
        <div class="gtranslate_wrapper_mobile_nav"></div>
        <style>
          .gtranslate_wrapper_mobile_nav {
            display: flex;
            flex-direction: column;
            align-items: center;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper {
            position: static !important;
            transform: none !important;
            background: transparent !important;
            box-shadow: none !important;
            border: none !important;
            border-radius: 0 !important;
            width: auto !important;
            height: auto !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper a {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            text-decoration: none !important;
            transition: all 0.2s ease !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper a:hover {
            transform: scale(1.05) !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper img {
            width: 24px !important;
            height: 24px !important;
            border-radius: 4px !important;
            margin: 0 !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options {
            position: fixed !important;
            bottom: 80px !important;
            left: 50% !important;
            transform: translateX(-50%) !important;
            background: white !important;
            border: 1px solid #e5e7eb !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
            z-index: 1000 !important;
            max-height: 300px !important;
            overflow-y: auto !important;
            width: 280px !important;
            max-width: 90vw !important;
          }

          .dark .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options {
            background: #374151 !important;
            border-color: #4b5563 !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a {
            padding: 8px 12px !important;
            display: flex !important;
            align-items: center !important;
            flex-direction: row !important;
            gap: 8px !important;
            color: #374151 !important;
            font-size: 14px !important;
            border-bottom: 1px solid #f3f4f6 !important;
          }

          .dark .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a {
            color: #f9fafb !important;
            border-bottom-color: #4b5563 !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a:hover {
            background: #f3f4f6 !important;
            transform: none !important;
          }

          .dark .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a:hover {
            background: #4b5563 !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options a:last-child {
            border-bottom: none !important;
          }

          .gtranslate_wrapper_mobile_nav .gt_float_wrapper .gt_options img {
            width: 20px !important;
            height: 20px !important;
          }
        </style>
        <script>
          if (!window.gtranslateSettingsMobileNav) {
            window.gtranslateSettingsMobileNav = {
              "default_language": "en",
              "wrapper_selector": ".gtranslate_wrapper_mobile_nav",
              "flag_style": "3d",
              "alt_flags": {"en": "usa"},
              "switcher_horizontal_position": "center",
              "switcher_vertical_position": "bottom"
            };

            // Load script for mobile nav if not already loaded
            var script = document.createElement('script');
            script.src = 'https://cdn.gtranslate.net/widgets/latest/float.js';
            script.defer = true;
            document.head.appendChild(script);
          }
        </script>

        <i data-lucide="globe" class="w-6 h-6 text-gray-500 group-hover:text-blue-600 transition-colors duration-200"></i>
      </div>
      <span class="text-xs mt-1 text-gray-500 group-hover:text-blue-600">Language</span>
    </div>

    <a href="deposits.php"
       class="group flex flex-col items-center relative">
      <div class="p-2 rounded-xl transition-all duration-300 ease-out
                  hover:bg-gray-100 dark:hover:bg-gray-800">
        <i data-lucide="banknote" class="w-6 h-6
           text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
           transition-colors duration-300"></i>
      </div>
      <span class="text-xs font-medium mt-1
            text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
            transition-colors duration-300">Deposit</span>
    </a>

    <a href="account-settings.php"
       class="group flex flex-col items-center relative">
      <div class="p-2 rounded-xl transition-all duration-300 ease-out
                  hover:bg-gray-100 dark:hover:bg-gray-800">
        <i data-lucide="user" class="w-6 h-6
           text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
           transition-colors duration-300"></i>
      </div>
      <span class="text-xs font-medium mt-1
            text-gray-500 group-hover:text-blue-600 dark:text-gray-400 dark:group-hover:text-blue-400
            transition-colors duration-300">Profile</span>
    </a>

    <!-- Animated FAB Button -->
    <button @click="fabOpen = !fabOpen"
            class="absolute -top-7 left-1/2 transform -translate-x-1/2
                   bg-gradient-to-r from-blue-600 to-indigo-600 text-white
                   w-14 h-14 rounded-full flex items-center justify-center
                   shadow-[0_8px_30px_rgba(59,130,246,0.5)]
                   border-4 border-white dark:border-gray-900
                   hover:scale-110 hover:shadow-[0_8px_35px_rgba(59,130,246,0.6)]
                   active:scale-95
                   transition-all duration-300 ease-out">
      <i data-lucide="zap" class="w-6 h-6 transform transition-transform group-hover:scale-110"></i>
      <!-- Pulse Effect -->
      <span class="absolute w-full h-full rounded-full bg-blue-500 animate-ping opacity-20"></span>
    </button>

<a href="support.php"
   class="flex flex-col items-center
          text-gray-500
          hover:text-blue-600">
  <i data-lucide="life-buoy" class="w-6 h-6"></i>
  <span class="text-xs mt-1">Support</span>
</a>



   <a href="https://jarvistradepro.com/dashboard"
   class="flex flex-col items-center
          text-gray-500 hover:text-blue-600">
 <i data-lucide="home" class="w-6 h-6 transition-colors duration-200"></i>
  <span class="text-xs mt-1">Home</span>
</a>
  </div>

  <!-- Modern FAB Overlay Menu -->
  <div x-show="fabOpen"
       @click.away="fabOpen = false"
       class="fixed inset-0 bg-gray-900/70 backdrop-blur-sm z-40 flex items-center justify-center p-4"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0"
       x-transition:enter-end="opacity-100"
       x-transition:leave="transition ease-in duration-200"
       x-transition:leave-start="opacity-100"
       x-transition:leave-end="opacity-0" x-cloak>

    <!-- Menu Card -->
    <div class="bg-gray-900 p-6 rounded-2xl
                shadow-[0_8px_30px_rgba(0,0,0,0.3)]
                space-y-4 w-72 max-w-full
                border border-gray-700
                transform transition-all duration-300
                animate-slideUp">

      <!-- Quick Actions Grid -->
      <div class="grid grid-cols-2 gap-4 mb-6">
        <a href="buy-plan.php"
           class="flex flex-col items-center p-4 rounded-xl
                  bg-gray-800 border border-gray-700
                  hover:bg-gray-700 hover:shadow-lg hover:scale-105 transition-all duration-300
                  group">
          <i data-lucide="trending-up" class="w-6 h-6 mb-2 text-blue-400
                                              group-hover:scale-110 transition-transform duration-300"></i>
          <span class="text-sm font-medium text-gray-200">Invest</span>
        </a>

        <a href="withdrawals.php"
           class="flex flex-col items-center p-4 rounded-xl
                  bg-gray-800 border border-gray-700
                  hover:bg-gray-700 hover:shadow-lg hover:scale-105 transition-all duration-300
                  group">
          <i data-lucide="wallet" class="w-6 h-6 mb-2 text-green-400
                                       group-hover:scale-110 transition-transform duration-300"></i>
          <span class="text-sm font-medium text-gray-200">Withdraw</span>
        </a>
      </div>

      <!-- Menu Links -->
      <div class="space-y-2">
        <a href="copy.php" class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
          <i data-lucide="copy" class="w-5 h-5 mr-3 text-blue-400
                                     group-hover:scale-110 transition-transform duration-300"></i>
          <span class="font-medium">Copy Trading</span>
          <!--<span class="ml-auto text-xs font-bold text-green-400">New</span>-->
        </a>

        <a href="transfer-funds.php" class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
          <i data-lucide="refresh-ccw" class="w-5 h-5 mr-3 text-purple-400
                                             group-hover:rotate-180 transition-transform duration-500"></i>
          <span class="font-medium">Transfer Funds</span>
        </a>

        

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
          <i data-lucide="users" class="w-5 h-5 mr-3 text-orange-400
                                      group-hover:scale-110 transition-transform duration-300"></i>
          <span class="font-medium">Refer Friends</span>
          <span class="ml-auto text-xs font-bold text-orange-400">+5%</span>
        </a>

        <a href="support.php" class="flex items-center p-3 rounded-lg text-gray-100
                                               hover:bg-gray-800
                                               transition-colors duration-200 group">
          <i data-lucide="life-buoy" class="w-5 h-5 mr-3 text-cyan-400
                                           group-hover:scale-110 transition-transform duration-300"></i>
          <span class="font-medium">Support</span>
        </a>

        <a href="bot-trading.php" class="flex items-center p-3 rounded-lg text-gray-100
                          hover:bg-gray-800
                          transition-colors duration-200 group">
          <i data-lucide="newspaper" class="w-5 h-5 mr-3 text-indigo-400
                                          group-hover:scale-110 transition-transform duration-300"></i>
          <span class="font-medium">Bots Trading</span>
        </a>
      </div>

      <!-- Close Button -->
      <button @click="fabOpen = false"
              class="absolute top-2 right-2 p-2 rounded-full
                     text-gray-400 hover:text-gray-200
                     hover:bg-gray-800
                     transition-colors duration-200">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>
  </div>

  <style>
    @keyframes  slideUp {
      from { opacity: 0; transform: scale(0.95) translateY(10px); }
      to { opacity: 1; transform: scale(1) translateY(0); }
    }
    .animate-slideUp {
      animation: slideUp 0.3s ease-out forwards;
    }
  </style>
</div>

<!-- Script for Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  // Initialize Lucide icons
  document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
  });

  // Re-initialize icons when Alpine renders new content
  document.addEventListener('alpine:init', () => {
    Alpine.nextTick(() => {
      lucide.createIcons();
    });
  });
</script>

<style>
  @keyframes  fadeIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
  }
  .animate-fadeIn {
    animation: fadeIn 0.3s ease-out;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

<!-- Live Crypto Prices Script -->
<script>
// Alpine.js component for live crypto prices
function cryptoPrices() {
  return {
    btcPrice: null,
    ethPrice: null,
    btcChange: 0,
    ethChange: 0,
    lastUpdate: null,

    async fetchPrices() {
      try {
        // Using CoinGecko API (free, no API key required)
        const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum&vs_currencies=usd&include_24hr_change=true');
        const data = await response.json();

        if (data.bitcoin && data.ethereum) {
          this.btcPrice = Math.round(data.bitcoin.usd);
          this.ethPrice = Math.round(data.ethereum.usd);
          this.btcChange = data.bitcoin.usd_24h_change || 0;
          this.ethChange = data.ethereum.usd_24h_change || 0;
          this.lastUpdate = new Date();

          console.log('Crypto prices updated:', {
            BTC: this.btcPrice,
            ETH: this.ethPrice,
            time: this.lastUpdate
          });
        }
      } catch (error) {
        console.error('Error fetching crypto prices:', error);
        // Fallback to static values on error
        this.btcPrice = this.btcPrice || 45320;
        this.ethPrice = this.ethPrice || 2850;
      }

      // Update prices every 30 seconds
      setTimeout(() => this.fetchPrices(), 30000);
    }
  }
}

// Initialize when Alpine is ready
document.addEventListener('alpine:init', () => {
  // Register the component globally
  Alpine.data('cryptoPrices', cryptoPrices);
});
</script>

<div class="gtranslate_wrapper"></div>
<script>
    window.gtranslateSettings = {
        default_language: "en",
        alt_flags:{"en":"usa"},
        wrapper_selector: ".gtranslate_wrapper",
        flag_style: "3d",
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
<?php include("footer.php"); ?>