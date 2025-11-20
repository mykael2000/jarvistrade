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
    
<!-- Notification Alerts -->

<!-- Main Payment Container -->
<div class="min-h-screen bg-gray-900" x-data="paymentHandler()">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="space-y-4 mb-6">

    <div>
    </div>
    </div>

        <!-- Header Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-500/10 rounded-full border border-blue-500/20 mb-6">
                <i data-lucide="shield-check" class="w-5 h-5 text-blue-400"></i>
                <span class="text-sm font-medium text-blue-300">Secure Payment Gateway</span>
            </div>
            <h1 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Complete Your Deposit
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Securely deposit funds using <span class="text-blue-400 font-semibold">USDT TRC-20</span>
                to start trading immediately
            </p>
        </div>

        <!-- Progress Steps -->
        <div class="flex items-center justify-center mb-12">
            <div class="flex items-center space-x-4 sm:space-x-8">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                        <i data-lucide="check" class="w-5 h-5 text-white"></i>
                    </div>
                    <span class="ml-3 text-sm font-medium text-blue-400">Payment Method</span>
                </div>
                <div class="w-8 h-0.5 bg-blue-500"></div>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-500/20 border-2 border-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-sm font-bold text-blue-400">2</span>
                    </div>
                    <span class="ml-3 text-sm font-medium text-white">Send Payment</span>
                </div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center">
                        <span class="text-sm font-bold text-gray-400">3</span>
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-400">Confirmation</span>
                </div>
            </div>
        </div>

        <form method="POST" enctype="multipart/form-data" action="https://jarvistradepro.com/dashboard/savedeposit" class="space-y-8">
            <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">
            <!-- Main Payment Card -->
            <div class="bg-gray-900 rounded-2xl border border-gray-800 shadow-2xl overflow-hidden">

                <!-- Card Header -->
                <div class="bg-gradient-to-r from-blue-600/10 to-purple-600/10 border-b border-gray-800 p-6">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center">
                                <i data-lucide="credit-card" class="w-6 h-6 text-blue-400"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-white">Payment Details</h2>
                                <p class="text-gray-400">USDT TRC-20 Deposit</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400 border border-green-500/30">
                                <i data-lucide="shield" class="w-3 h-3 mr-1"></i>
                                SSL Secured
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-500/20 text-blue-400 border border-blue-500/30">
                                <i data-lucide="clock" class="w-3 h-3 mr-1"></i>
                                24/7 Support
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 space-y-8">

                    <!-- Amount Display -->
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-2xl blur-xl"></div>
                        <div class="relative bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700">
                            <div class="text-center">
                                <div class="inline-flex items-center gap-2 text-sm text-gray-400 mb-2">
                                    <i data-lucide="banknote" class="w-4 h-4"></i>
                                    <span>Amount to Deposit</span>
                                </div>
                                <div class="text-4xl sm:text-5xl font-bold text-white mb-4">
                                    500<span class="text-2xl text-gray-400">$</span>
                                </div>
                                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-500/20 rounded-full border border-amber-500/30">
                                    <i data-lucide="alert-triangle" class="w-4 h-4 text-amber-400"></i>
                                    <span class="text-sm text-amber-300">Send exact amount to avoid delays</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Instructions -->
                    <div class="bg-gray-800/30 rounded-2xl p-6 border border-gray-700">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-500/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="info" class="w-5 h-5 text-blue-400"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-white mb-3">How to Complete Your Payment</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0">1</div>
                                        <div>
                                            <h4 class="font-medium text-white">Send Payment</h4>
                                            <p class="text-sm text-gray-400">Transfer 500$ to the wallet address</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0">2</div>
                                        <div>
                                            <h4 class="font-medium text-white">Upload Proof</h4>
                                            <p class="text-sm text-gray-400">Take a screenshot of your transaction</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0">3</div>
                                        <div>
                                            <h4 class="font-medium text-white">Submit & Wait</h4>
                                            <p class="text-sm text-gray-400">Submit proof and wait for confirmation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Details Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                        <!-- QR Code Section -->
                        <div class="space-y-6">
                            <h3 class="text-lg font-semibold text-white flex items-center gap-2">
                                <i data-lucide="qr-code" class="w-5 h-5 text-blue-400"></i>
                                QR Code Payment
                            </h3>

                            <div class="relative group">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-2xl blur-lg"></div>
                                <div class="relative bg-white p-6 rounded-2xl">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=TRrzHa37jFUbty9oHo1bqz9ZT23yN5PAsB"
                                         alt="Payment QR Code"
                                         class="w-full h-auto max-w-[250px] mx-auto rounded-lg">
                                    <button type="button"
                                            @click="downloadQR()"
                                            class="absolute top-2 right-2 p-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200">
                                        <i data-lucide="download" class="w-4 h-4 text-gray-600"></i>
                                    </button>
                                </div>
                            </div>

                            <p class="text-sm text-gray-400 text-center">
                                Scan with your wallet app to send payment instantly
                            </p>
                        </div>

                        <!-- Wallet Address & Upload Section -->
                        <div class="space-y-6">

                            <!-- Wallet Address -->
                            <div class="space-y-3">
                                <label class="text-lg font-semibold text-white flex items-center gap-2">
                                    <i data-lucide="wallet" class="w-5 h-5 text-blue-400"></i>
                                    Wallet Address
                                </label>
                                <div class="relative group">
                                    <div class="flex">
                                        <input type="text"
                                               value="TRrzHa37jFUbty9oHo1bqz9ZT23yN5PAsB"
                                               class="flex-1 bg-gray-800 border border-gray-700 rounded-l-xl px-4 py-3 text-white text-sm focus:outline-none focus:border-blue-500 transition-colors duration-200"
                                               readonly>
                                        <button type="button"
                                                @click="copyToClipboard('TRrzHa37jFUbty9oHo1bqz9ZT23yN5PAsB')"
                                                class="px-4 py-3 bg-blue-600 hover:bg-blue-700 border border-blue-600 rounded-r-xl text-white transition-all duration-200 flex items-center gap-2">
                                            <i data-lucide="copy" class="w-4 h-4"></i>
                                            <span x-text="copied ? 'Copied!' : 'Copy'" class="text-sm font-medium"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="space-y-3">
                                <label class="text-lg font-semibold text-white flex items-center gap-2">
                                    <i data-lucide="upload" class="w-5 h-5 text-blue-400"></i>
                                    Upload Payment Proof
                                </label>

                                <div class="relative">
                                    <input type="file"
                                           id="proof"
                                           name="proof"
                                           accept="image/*"
                                           required
                                           class="hidden"
                                           @change="handleFileUpload($event)">

                                    <label for="proof"
                                           class="relative block w-full border-2 border-dashed border-gray-600 hover:border-blue-500 rounded-2xl p-8 text-center cursor-pointer transition-all duration-200 group"
                                           :class="{ 'border-blue-500 bg-blue-500/5': isDragOver }"
                                           @dragover.prevent="isDragOver = true"
                                           @dragleave.prevent="isDragOver = false"
                                           @drop.prevent="handleFileDrop($event)">

                                        <div class="space-y-4">
                                            <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto group-hover:bg-blue-500/30 transition-colors duration-200">
                                                <i data-lucide="upload-cloud" class="w-8 h-8 text-blue-400"></i>
                                            </div>

                                            <div x-show="!fileName">
                                                <p class="text-lg font-medium text-white">Choose file or drag & drop</p>
                                                <p class="text-sm text-gray-400">PNG, JPG, GIF up to 10MB</p>
                                            </div>

                                            <div x-show="fileName" class="text-center">
                                                <p class="text-lg font-medium text-white" x-text="fileName"></p>
                                                <p class="text-sm text-gray-400" x-text="fileSize"></p>
                                                <button type="button"
                                                        @click.stop="removeFile()"
                                                        class="mt-2 text-red-400 hover:text-red-300 text-sm">
                                                    Remove file
                                                </button>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden Fields -->
                    <input type="hidden" name="amount" value="500">
                    <input type="hidden" name="method" value="USDT TRC-20">
                    <input type="hidden" name="paymethd_method" value="USDT TRC-20">
                                        <input type="hidden" name="asset" value="Breakout Signals">
                    
                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit"
                                :disabled="!fileName"
                                class="w-full relative group overflow-hidden"
                                :class="!fileName ? 'opacity-50 cursor-not-allowed' : 'hover:scale-[1.02] active:scale-[0.98]'">
                            <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-200"></div>
                            <div class="relative bg-gradient-to-r from-green-600 to-emerald-600 text-white px-8 py-4 rounded-2xl flex items-center justify-center gap-3 transition-all duration-200">
                                <i data-lucide="send" class="w-5 h-5"></i>
                                <span class="text-lg font-semibold">Submit Payment Proof</span>
                            </div>
                        </button>

                        <!-- Security Notice -->
                        <div class="mt-6 flex items-center justify-center gap-3 text-sm text-gray-400">
                            <i data-lucide="shield-check" class="w-5 h-5 text-green-400"></i>
                            <span>Protected by 256-bit SSL encryption</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Help Section -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-900 rounded-xl p-6 border border-gray-800 text-center">
                <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="headphones" class="w-6 h-6 text-blue-400"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">24/7 Support</h3>
                <p class="text-gray-400 text-sm">Need help? Our support team is available around the clock</p>
            </div>

            <div class="bg-gray-900 rounded-xl p-6 border border-gray-800 text-center">
                <div class="w-12 h-12 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="zap" class="w-6 h-6 text-green-400"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Instant Processing</h3>
                <p class="text-gray-400 text-sm">Deposits are processed within minutes of confirmation</p>
            </div>

            <div class="bg-gray-900 rounded-xl p-6 border border-gray-800 text-center">
                <div class="w-12 h-12 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="shield" class="w-6 h-6 text-purple-400"></i>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Bank-Grade Security</h3>
                <p class="text-gray-400 text-sm">Your funds and data are protected with enterprise security</p>
            </div>
        </div>
    </div>
</div>

<script>
    function paymentHandler() {
        return {
            copied: false,
            fileName: '',
            fileSize: '',
            isDragOver: false,

            copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(() => {
                    this.copied = true;
                    setTimeout(() => {
                        this.copied = false;
                    }, 2000);
                });
            },

            handleFileUpload(event) {
                const file = event.target.files[0];
                if (file) {
                    this.fileName = file.name;
                    this.fileSize = `${(file.size / 1024 / 1024).toFixed(2)}MB`;
                }
            },

            handleFileDrop(event) {
                this.isDragOver = false;
                const file = event.dataTransfer.files[0];
                if (file && file.type.startsWith('image/')) {
                    document.getElementById('proof').files = event.dataTransfer.files;
                    this.fileName = file.name;
                    this.fileSize = `${(file.size / 1024 / 1024).toFixed(2)}MB`;
                }
            },

            removeFile() {
                document.getElementById('proof').value = '';
                this.fileName = '';
                this.fileSize = '';
            },

            downloadQR() {
                const img = document.querySelector('img[alt="Payment QR Code"]');
                const link = document.createElement('a');
                link.href = img.src;
                link.download = 'payment-qr-code.png';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }
    }

    // Initialize Lucide icons
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>

<style>
    @keyframes  float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>

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