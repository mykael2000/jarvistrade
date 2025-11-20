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
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-600 to-indigo-800 text-white">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-6 py-16">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Bot Trading Dashboard</h1>
                    <p class="text-xl text-white/90 max-w-2xl">Monitor and manage your automated trading investments</p>
                </div>
                <div class="hidden lg:block">
                    <div class="w-32 h-32 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center">
                        <i data-lucide="bar-chart-3" class="w-16 h-16"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-4 -left-4 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute top-1/2 -right-8 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute -bottom-8 left-1/3 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-pulse delay-500"></div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-12 -mt-8 relative z-10">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/50 dark:to-blue-800/50 rounded-2xl flex items-center justify-center">
                        <i data-lucide="wallet" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">
                    $0.00
                </div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Total Invested</div>
            </div>

            <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900/50 dark:to-green-800/50 rounded-2xl flex items-center justify-center">
                        <i data-lucide="trending-up" class="w-6 h-6 text-green-600 dark:text-green-400"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">
                    $0.00
                </div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Current Balance</div>
            </div>

            <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-100 to-emerald-200 dark:from-emerald-900/50 dark:to-emerald-800/50 rounded-2xl flex items-center justify-center">
                        <i data-lucide="arrow-up" class="w-6 h-6 text-emerald-600 dark:text-emerald-400"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">
                    +$0.00
                </div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Total Profit</div>
            </div>

            <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-100 to-red-200 dark:from-red-900/50 dark:to-red-800/50 rounded-2xl flex items-center justify-center">
                        <i data-lucide="arrow-down" class="w-6 h-6 text-red-600 dark:text-red-400"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-red-600 dark:text-red-400 mb-1">
                    -$0.00
                </div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Total Loss</div>
            </div>

            <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/50 dark:to-blue-800/50 rounded-2xl flex items-center justify-center">
                        <i data-lucide="bot" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">0</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Active Bots</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Active Investments -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden">
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Your Investments</h2>
                            <a href="bot-trading.php" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-2xl transition-colors duration-200">
                                <i data-lucide="plus" class="w-4 h-4 mr-2"></i>
                                New Investment
                            </a>
                        </div>

                                                    <div class="text-center py-16">
                                <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i data-lucide="bot" class="w-12 h-12 text-gray-400"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Investments Yet</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-6">Start your automated trading journey today</p>
                                <a href="bot-trading.php" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white font-medium rounded-2xl transition-all duration-300 transform hover:scale-105">
                                    <i data-lucide="plus" class="w-5 h-5 mr-2"></i>
                                    Start Investing
                                </a>
                            </div>
                                            </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                <!-- Recent Trading Activity -->
                <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Recent Activity</h3>

                                                    <div class="text-center py-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i data-lucide="activity" class="w-8 h-8 text-gray-400"></i>
                                </div>
                                <p class="text-gray-600 dark:text-gray-400">No trading activity yet</p>
                            </div>
                                            </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Quick Actions</h3>

                        <div class="space-y-3">
                            <a href="bot-trading.php" class="flex items-center w-full px-4 py-3 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 text-blue-700 dark:text-blue-300 rounded-2xl hover:from-blue-100 hover:to-blue-200 dark:hover:from-blue-900/30 dark:hover:to-blue-800/30 transition-all duration-200 group">
                                <i data-lucide="plus" class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform duration-200"></i>
                                <span class="font-medium">New Investment</span>
                            </a>

                            <a href="withdrawals.php" class="flex items-center w-full px-4 py-3 bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 text-green-700 dark:text-green-300 rounded-2xl hover:from-green-100 hover:to-green-200 dark:hover:from-green-900/30 dark:hover:to-green-800/30 transition-all duration-200 group">
                                <i data-lucide="download" class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform duration-200"></i>
                                <span class="font-medium">Withdraw Funds</span>
                            </a>

                            <a href="deposits.php" class="flex items-center w-full px-4 py-3 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 text-blue-700 dark:text-blue-300 rounded-2xl hover:from-blue-100 hover:to-blue-200 dark:hover:from-blue-900/30 dark:hover:to-blue-800/30 transition-all duration-200 group">
                                <i data-lucide="upload" class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform duration-200"></i>
                                <span class="font-medium">Deposit Funds</span>
                            </a>

                            <a href="support.php" class="flex items-center w-full px-4 py-3 bg-gradient-to-r from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 text-orange-700 dark:text-orange-300 rounded-2xl hover:from-orange-100 hover:to-orange-200 dark:hover:from-orange-900/30 dark:hover:to-orange-800/30 transition-all duration-200 group">
                                <i data-lucide="life-buoy" class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform duration-200"></i>
                                <span class="font-medium">Get Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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