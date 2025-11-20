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
    
<div class="min-h-screen bg-white dark:bg-gray-900" x-cloak>
    <!-- Simple Header -->
    <div class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="text-center">
                <h1 class="text-2xl font-medium text-gray-900 dark:text-white">Trading History</h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Track your trading activities</p>
            </div>
        </div>
    </div>

    <!-- Alert Messages -->
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div>
    </div>
            </div>

    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Trading History Card -->
        <div class="bg-white dark:bg-gray-900 rounded-lg border border-gray-100 dark:border-gray-800">
            <!-- Header -->
            <div class="p-6 border-b border-gray-100 dark:border-gray-800" x-data="{
                stats: {
                    total: 2,
                    wins: 0,
                    losses: 0,
                    trades: 2
                }
            }" x-init="$store.tradeFilter = { value: 'all' }" x-cloak>
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-1">Trading Overview</h2>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Monitor your trading performance</p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="text-center">
                            <div class="text-xl font-medium text-gray-900 dark:text-white" x-text="stats.total"></div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Total</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-medium text-green-600 dark:text-green-400" x-text="stats.wins"></div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Wins</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-medium text-red-600 dark:text-red-400" x-text="stats.losses"></div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Losses</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-medium text-blue-600 dark:text-blue-400" x-text="stats.trades"></div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Active</div>
                        </div>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <button @click="$store.tradeFilter.value = 'all'"
                            :class="$store.tradeFilter.value === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-50 dark:bg-gray-800 text-gray-600 dark:text-gray-400'"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors">
                        All
                    </button>
                    <button @click="$store.tradeFilter.value = 'WIN'"
                            :class="$store.tradeFilter.value === 'WIN' ? 'bg-green-600 text-white' : 'bg-gray-50 dark:bg-gray-800 text-gray-600 dark:text-gray-400'"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors">
                        Wins
                    </button>
                    <button @click="$store.tradeFilter.value = 'LOSE'"
                            :class="$store.tradeFilter.value === 'LOSE' ? 'bg-red-600 text-white' : 'bg-gray-50 dark:bg-gray-800 text-gray-600 dark:text-gray-400'"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors">
                        Losses
                    </button>
                    <button @click="$store.tradeFilter.value = 'Buy'"
                            :class="$store.tradeFilter.value === 'Buy' ? 'bg-blue-600 text-white' : 'bg-gray-50 dark:bg-gray-800 text-gray-600 dark:text-gray-400'"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors">
                        Buy
                    </button>
                    <button @click="$store.tradeFilter.value = 'Sell'"
                            :class="$store.tradeFilter.value === 'Sell' ? 'bg-orange-600 text-white' : 'bg-gray-50 dark:bg-gray-800 text-gray-600 dark:text-gray-400'"
                            class="px-3 py-2 rounded-lg text-sm font-medium transition-colors">
                        Sell
                    </button>
                </div>
            </div>

            <!-- Trading History List -->
            <div class="p-6" x-cloak>
                <div class="space-y-3">
                                                                        <div class="trading-item bg-gray-50 dark:bg-gray-800 rounded-lg p-4 border border-gray-100 dark:border-gray-700"
                                 x-show="$store.tradeFilter.value === 'all' || $store.tradeFilter.value === 'Buy'"
                                 x-transition>

                                <div class="flex items-center justify-between">
                                    <!-- Trade Details -->
                                    <div class="flex items-center gap-3">
                                        <!-- Icon -->
                                        <div class="flex-shrink-0">
                                                                                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                        <path fill-rule="evenodd" d="9 3a1 1 0 012 0v8.586l2.293-2.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 11.586V3z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                                                    </div>

                                        <!-- Trade Info -->
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center gap-2">
                                                <h3 class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                    Bitcoin
                                                </h3>
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium
                                                     bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400
                                                    ">
                                                    Buy
                                                </span>
                                            </div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                                Oct 03, 2025 • 11:55 AM
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Amount -->
                                    <div class="text-right">
                                                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                $ 5,737.50
                                            </div>
                                                                                                                            <div class="text-xs text-gray-500 dark:text-gray-400">
                                                1:10
                                            </div>
                                                                            </div>
                                </div>
                            </div>
                                                    <div class="trading-item bg-gray-50 dark:bg-gray-800 rounded-lg p-4 border border-gray-100 dark:border-gray-700"
                                 x-show="$store.tradeFilter.value === 'all' || $store.tradeFilter.value === 'Buy'"
                                 x-transition>

                                <div class="flex items-center justify-between">
                                    <!-- Trade Details -->
                                    <div class="flex items-center gap-3">
                                        <!-- Icon -->
                                        <div class="flex-shrink-0">
                                                                                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                        <path fill-rule="evenodd" d="9 3a1 1 0 012 0v8.586l2.293-2.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 11.586V3z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                                                    </div>

                                        <!-- Trade Info -->
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center gap-2">
                                                <h3 class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                                    BGB/USD
                                                </h3>
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium
                                                     bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400
                                                    ">
                                                    Buy
                                                </span>
                                            </div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                                Oct 02, 2025 • 5:59 PM
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Amount -->
                                    <div class="text-right">
                                                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                $ 50.00
                                            </div>
                                                                                                                            <div class="text-xs text-gray-500 dark:text-gray-400">
                                                1:20
                                            </div>
                                                                            </div>
                                </div>
                            </div>
                                                            </div>

                <!-- Modern Pagination -->
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