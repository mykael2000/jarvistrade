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
    
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-4 sm:py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between mb-6 sm:mb-8 gap-4">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white">Copy Trading Dashboard</h1>
                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mt-2">Manage your copy trading portfolio and track performance</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="experts.php"
                   class="inline-flex items-center justify-center gap-2 px-4 sm:px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-medium transition-all duration-200 shadow-lg hover:shadow-xl text-sm sm:text-base">
                    <i data-lucide="users" class="w-4 h-4 sm:w-5 sm:h-5"></i>
                    <span class="hidden sm:inline">Browse Experts</span>
                    <span class="sm:hidden">Experts</span>
                </a>
                <button onclick="refreshDashboard()"
                        class="inline-flex items-center justify-center gap-2 px-4 sm:px-6 py-3 bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-xl font-medium transition-all duration-200 shadow-lg hover:shadow-xl text-sm sm:text-base">
                    <i data-lucide="refresh-cw" class="w-4 h-4 sm:w-5 sm:h-5"></i>
                    <span class="hidden sm:inline">Refresh</span>
                </button>
            </div>
        </div>

        <!-- Alert Messages -->
        
        
        <!-- Portfolio Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8">
            <!-- Active Copies -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]">
                <div class="flex items-center justify-between">
                    <div class="flex-1 min-w-0">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 mb-1 sm:mb-2">Active Copies</p>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1 truncate">0</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Experts being copied</p>
                    </div>
                    <div class="p-2 sm:p-3 bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl flex-shrink-0">
                        <i data-lucide="users" class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600 dark:text-blue-400"></i>
                    </div>
                </div>
            </div>

            <!-- Total Invested -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]">
                <div class="flex items-center justify-between">
                    <div class="flex-1 min-w-0">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 mb-1 sm:mb-2">Total Invested</p>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1 truncate">$0.00</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Capital deployed</p>
                    </div>
                    <div class="p-2 sm:p-3 bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900/30 dark:to-green-800/30 rounded-xl flex-shrink-0">
                        <i data-lucide="dollar-sign" class="w-5 h-5 sm:w-6 sm:h-6 text-green-600 dark:text-green-400"></i>
                    </div>
                </div>
            </div>

            <!-- Current Value -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]">
                <div class="flex items-center justify-between">
                    <div class="flex-1 min-w-0">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 mb-1 sm:mb-2">Current Value</p>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1 truncate">$0.00</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Portfolio value</p>
                    </div>
                    <div class="p-2 sm:p-3 bg-gradient-to-br from-indigo-100 to-indigo-200 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl flex-shrink-0">
                        <i data-lucide="wallet" class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                </div>
            </div>

            <!-- Total P&L -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02]">
                <div class="flex items-center justify-between">
                    <div class="flex-1 min-w-0">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400 mb-1 sm:mb-2">Total P&L</p>
                        <p class="text-2xl sm:text-3xl font-bold text-green-600 dark:text-green-400 mb-1 truncate">
                            +$0.00
                        </p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            0% ROI
                        </p>
                    </div>
                    <div class="p-2 sm:p-3 bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900/30 dark:to-green-800/30 rounded-xl flex-shrink-0">
                        <i data-lucide="trending-up"
                           class="w-5 h-5 sm:w-6 sm:h-6 text-green-600 dark:text-green-400"></i>
                    </div>
                </div>
            </div>
        </div>

        
                    <!-- Copy Trading History -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 mb-6 sm:mb-8 overflow-hidden">
                <div class="px-4 sm:px-6 py-4 sm:py-5 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800/50 dark:to-gray-700/50">
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                        <i data-lucide="history" class="w-4 h-4 sm:w-5 sm:h-5 text-gray-600 dark:text-gray-400"></i>
                        Copy Trading History
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mt-1">Previous copy positions and their performance</p>
                </div>

                <!-- Mobile Card View -->
                <div class="block sm:hidden">
                    <div class="p-4 space-y-4">
                                                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4 border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center space-x-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-sm shadow-md flex-shrink-0">
                                        D
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div class="font-medium text-gray-900 dark:text-white truncate">David Kim</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 truncate">Swing Trader</div>
                                    </div>
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded-lg text-xs font-medium flex-shrink-0">
                                        Closed
                                    </span>
                                </div>

                                <div class="grid grid-cols-2 gap-3 text-sm">
                                    <div>
                                        <div class="text-gray-500 dark:text-gray-400 text-xs">Investment</div>
                                        <div class="font-medium text-gray-900 dark:text-white">$300.00</div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 dark:text-gray-400 text-xs">Final Value</div>
                                        <div class="font-medium text-gray-900 dark:text-white">$300.00</div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 dark:text-gray-400 text-xs">P&L</div>
                                        <div class="font-bold text-green-600 dark:text-green-400">
                                            +$0.00
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 dark:text-gray-400 text-xs">ROI</div>
                                        <div class="font-bold text-green-600 dark:text-green-400">
                                            +0.00%
                                        </div>
                                    </div>
                                </div>

                                                                                                        <div class="mt-3 pt-3 border-t border-gray-200 dark:border-gray-600">
                                        <div class="text-xs text-gray-500 dark:text-gray-400">
                                            Duration: 0 days
                                        </div>
                                    </div>
                                                            </div>
                                            </div>
                </div>

                <!-- Desktop Table View -->
                <div class="hidden sm:block overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 dark:bg-gray-700/50">
                            <tr>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">Expert</th>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">Investment</th>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">Final Value</th>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">P&L</th>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">ROI</th>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">Duration</th>
                                <th class="text-left py-3 px-6 font-semibold text-gray-900 dark:text-white text-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-sm">
                                                D
                                            </div>
                                            <div>
                                                <span class="font-medium text-gray-900 dark:text-white">David Kim</span>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">Swing Trader</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-gray-900 dark:text-white font-medium">$300.00</td>
                                    <td class="py-4 px-6 text-gray-900 dark:text-white font-medium">$300.00</td>
                                    <td class="py-4 px-6">
                                        <span class="font-semibold text-green-600">
                                            +$0.00
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="font-semibold text-green-600">
                                            +0.00%
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-gray-600 dark:text-gray-400">
                                                                                                                                0 days
                                                                            </td>
                                    <td class="py-4 px-6">
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded-lg text-xs font-medium">
                                            Closed
                                        </span>
                                    </td>
                                </tr>
                                                    </tbody>
                    </table>
                </div>
            </div>
        
            </div>
</div>

<!-- Position Details Modal -->
<div id="detailsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-2 sm:p-4 backdrop-blur-sm">
    <div class="bg-white dark:bg-gray-800 rounded-2xl max-w-5xl w-full max-h-[95vh] sm:max-h-[90vh] overflow-y-auto shadow-2xl border border-gray-200 dark:border-gray-700 mx-2 sm:mx-0">
        <div class="flex justify-between items-center p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                <i data-lucide="bar-chart-3" class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600 dark:text-blue-400"></i>
                <span class="hidden sm:inline">Copy Position Details</span>
                <span class="sm:hidden">Position Details</span>
            </h3>
            <button onclick="closeDetailsModal()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                <i data-lucide="x" class="w-5 h-5 sm:w-6 sm:h-6"></i>
            </button>
        </div>
        <div id="detailsContent" class="p-4 sm:p-6">
            <!-- Content will be loaded here -->
        </div>
    </div>
</div>

<!-- How It Works Modal -->
<div id="howItWorksModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-2 sm:p-4 backdrop-blur-sm">
    <div class="bg-white dark:bg-gray-800 rounded-2xl max-w-4xl w-full max-h-[95vh] sm:max-h-[90vh] overflow-y-auto shadow-2xl border border-gray-200 dark:border-gray-700 mx-2 sm:mx-0">
        <div class="flex justify-between items-center p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                <i data-lucide="help-circle" class="w-5 h-5 sm:w-6 sm:h-6 text-green-600 dark:text-green-400"></i>
                How Copy Trading Works
            </h3>
            <button onclick="closeHowItWorksModal()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                <i data-lucide="x" class="w-5 h-5 sm:w-6 sm:h-6"></i>
            </button>
        </div>
        <div class="p-4 sm:p-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
                <div class="space-y-4 sm:space-y-6">
                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-sm sm:text-base">1</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">Choose an Expert</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Browse through our verified expert traders and select one based on their performance, strategy, and risk profile.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-sm sm:text-base">2</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">Set Your Investment</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Decide how much you want to invest and set your risk parameters including stop-loss and take-profit levels.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-sm sm:text-base">3</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">Auto-Copy Trades</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Our system automatically copies the expert's trades to your account in real-time, proportional to your investment.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 sm:space-x-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-orange-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-sm sm:text-base">4</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">Monitor & Profit</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Track your performance in real-time and watch your investment grow as the expert trader makes profitable trades.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-xl p-4 sm:p-6">
                    <h4 class="font-bold text-gray-900 dark:text-white mb-4 text-sm sm:text-base">Benefits of Copy Trading</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check" class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 flex-shrink-0"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">No trading experience required</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check" class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 flex-shrink-0"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Learn from expert strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check" class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 flex-shrink-0"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Diversify your portfolio</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check" class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 flex-shrink-0"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">24/7 automated trading</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check" class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 flex-shrink-0"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm">Full control over your funds</span>
                        </li>
                    </ul>

                    <div class="mt-4 sm:mt-6 p-3 sm:p-4 bg-yellow-50 dark:bg-yellow-900/20 border-l-4 border-yellow-500 rounded">
                        <p class="text-xs sm:text-sm text-yellow-700 dark:text-yellow-400">
                            <strong>Risk Warning:</strong> Copy trading involves risk. Past performance is not indicative of future results.
                        </p>
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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function stopCopyPosition(copyTradeId, expertName) {
            Swal.fire({
                title: 'Stop Copy Trading?',
                html: `
                    <div class="text-left">
                        <p class="mb-4">Are you sure you want to stop copying <strong>${expertName}</strong>?</p>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-blue-800">
                                <i class="fas fa-info-circle mr-1"></i>
                                Your current balance will be returned to your account immediately.
                            </p>
                        </div>
                    </div>
                `,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Stop Copying',
                cancelButtonText: 'Cancel',
                customClass: {
                    popup: 'rounded-2xl',
                    confirmButton: 'bg-red-600 hover:bg-red-700 text-white rounded-xl px-6 py-2',
                    cancelButton: 'bg-gray-300 hover:bg-gray-400 text-gray-700 rounded-xl px-6 py-2'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `https://jarvistradepro.com/dashboard/copy/stop/${copyTradeId}`;

                    const csrfToken = document.createElement('input');
                    csrfToken.type = 'hidden';
                    csrfToken.name = '_token';
                    csrfToken.value = '9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt';
                    form.appendChild(csrfToken);

                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }

        function viewDetails(copyTradeId) {
            document.getElementById('detailsModal').classList.remove('hidden');
            document.getElementById('detailsModal').classList.add('flex');

            // Show loading indicator
            document.getElementById('detailsContent').innerHTML = '<div class="flex justify-center p-10"><div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div></div>';

            // Use the correct URL format with route parameter
            const url = `https://jarvistradepro.com/dashboard/copy-trading/analytics/${copyTradeId}`;
            console.log('Fetching URL:', url);

            fetch(url)
                .then(response => {
                    console.log('Response status:', response.status);
                    console.log('Response headers:', response.headers);

                    // Check if response is OK
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    // Check if response is JSON
                    const contentType = response.headers.get('content-type');
                    if (!contentType || !contentType.includes('application/json')) {
                        throw new Error('Response is not JSON');
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response data:', data);

                    // Check if this is an error response
                    if (data.error) {
                        document.getElementById('detailsContent').innerHTML = `
                            <div class="p-4 bg-red-100 dark:bg-red-900/30 border-l-4 border-red-500 text-red-700 dark:text-red-300 rounded-lg">
                                <h3 class="font-bold mb-2">Server Response Error</h3>
                                <p>Server returned: ${data.error}</p>
                            </div>
                        `;
                        return;
                    }

                    // Handle successful response (has copyTrade field)
                    if (data.copyTrade) {
                        const copyTrade = data.copyTrade;
                        const trades = data.trades || [];
                        const dailyPerformance = data.dailyPerformance || [];

                        // Debug logging for ROI values
                        console.log('ROI Debug Info:');
                        console.log('data.roi:', data.roi);
                        console.log('copyTrade.profit_percentage:', copyTrade.profit_percentage);
                        console.log('copyTrade.price:', copyTrade.price);
                        console.log('copyTrade.current_balance:', copyTrade.current_balance);
                        console.log('copyTrade.total_profit:', copyTrade.total_profit);

                        // Calculate ROI using total_profit / price ratio (same as dashboard)
                        let calculatedROI = 0;
                        if (copyTrade.price && copyTrade.price > 0 && copyTrade.total_profit !== undefined) {
                            calculatedROI = (copyTrade.total_profit / copyTrade.price) * 100;
                        }
                        console.log('Calculated ROI from total_profit/price:', calculatedROI);

                        // Use profit_percentage from database if available, otherwise use calculated ROI
                        const finalROI = copyTrade.profit_percentage !== undefined && copyTrade.profit_percentage !== null && copyTrade.profit_percentage !== 0
                                        ? copyTrade.profit_percentage
                                        : calculatedROI;
                        console.log('Final ROI used:', finalROI);                        document.getElementById('detailsContent').innerHTML = `
                            <div class="space-y-6">
                                <!-- Expert Info -->
                                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-6">
                                    <div class="flex items-center space-x-4 mb-4">
                                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-xl">
                                            ${copyTrade.name ? copyTrade.name.charAt(0) : 'E'}
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">${copyTrade.name || 'Expert Trader'}</h4>
                                            <p class="text-gray-600 dark:text-gray-400">${copyTrade.tag || 'Professional Trader'}</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-gray-900 dark:text-white">$${Number(copyTrade.price || 0).toLocaleString()}</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Investment</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-gray-900 dark:text-white">$${Number(copyTrade.current_balance || 0).toLocaleString()}</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">Current Value</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold ${(copyTrade.total_profit || 0) >= 0 ? 'text-green-600' : 'text-red-600'}">${(copyTrade.total_profit || 0) >= 0 ? '+' : ''}$${Number(copyTrade.total_profit || 0).toLocaleString()}</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">P&L</div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-2xl font-bold ${finalROI >= 0 ? 'text-green-600' : 'text-red-600'}">${finalROI >= 0 ? '+' : ''}${Number(finalROI).toFixed(2)}%</div>
                                            <div class="text-sm text-gray-600 dark:text-gray-400">ROI</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Performance Chart -->
                                <div>
                                    <h5 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Performance History</h5>
                                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 text-center">
                                            Days Active: ${data.daysActive || 0} days
                                        </p>
                                        ${dailyPerformance.length > 0 ? `
                                            <div class="mt-4 space-y-2 max-h-40 overflow-y-auto">
                                                ${dailyPerformance.slice(-7).map(day => `
                                                    <div class="flex justify-between items-center text-sm">
                                                        <span class="text-gray-600 dark:text-gray-400">${new Date(day.date).toLocaleDateString()}</span>
                                                        <span class="font-medium ${day.change >= 0 ? 'text-green-600' : 'text-red-600'}">
                                                            ${day.change >= 0 ? '+' : ''}${day.change}%
                                                        </span>
                                                        <span class="font-bold text-gray-900 dark:text-white">$${Number(day.balance).toLocaleString()}</span>
                                                    </div>
                                                `).join('')}
                                            </div>
                                        ` : '<p class="text-gray-600 dark:text-gray-400 text-center mt-4">No performance data available</p>'}
                                    </div>
                                </div>
                            </div>
                        `;
                    } else {
                        document.getElementById('detailsContent').innerHTML = `
                            <div class="p-4 bg-red-100 dark:bg-red-900/30 border-l-4 border-red-500 text-red-700 dark:text-red-300 rounded-lg">
                                <h3 class="font-bold mb-2">Invalid Response</h3>
                                <p>Unexpected response format from server</p>
                                <pre class="text-xs mt-2 bg-red-50 dark:bg-red-900/50 p-2 rounded">${JSON.stringify(data, null, 2)}</pre>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error fetching analytics:', error);
                    document.getElementById('detailsContent').innerHTML = `
                        <div class="p-4 bg-red-100 dark:bg-red-900/30 border-l-4 border-red-500 text-red-700 dark:text-red-300 rounded-lg">
                            <h3 class="font-bold mb-2">Network/Server Error</h3>
                            <p>Error: ${error.message}</p>
                            <div class="mt-3 text-xs">
                                <p><strong>Troubleshooting steps:</strong></p>
                                <ul class="list-disc list-inside mt-1">
                                    <li>Check if the route exists in web.php</li>
                                    <li>Verify the controller method exists</li>
                                    <li>Check server logs for errors</li>
                                    <li>Ensure the copyTradeId is valid: ${copyTradeId}</li>
                                </ul>
                            </div>
                        </div>
                    `;
                });
        }

        function closeDetailsModal() {
            document.getElementById('detailsModal').classList.add('hidden');
            document.getElementById('detailsModal').classList.remove('flex');
        }

        function showHowItWorks() {
            document.getElementById('howItWorksModal').classList.remove('hidden');
            document.getElementById('howItWorksModal').classList.add('flex');
        }

        function closeHowItWorksModal() {
            document.getElementById('howItWorksModal').classList.add('hidden');
            document.getElementById('howItWorksModal').classList.remove('flex');
        }

        function refreshDashboard() {
            window.location.reload();
        }

        // Initialize Lucide icons and add event listeners
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Add event listeners for the details buttons
            document.querySelectorAll('.view-details-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const copyTradeId = this.getAttribute('data-id');
                    viewDetails(copyTradeId);
                });
            });

            // Add event listeners for the stop copy buttons
            document.querySelectorAll('.stop-copy-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const copyTradeId = this.getAttribute('data-id');
                    const expertName = this.getAttribute('data-name');
                    stopCopyPosition(copyTradeId, expertName);
                });
            });

            console.log('Event listeners attached to buttons');
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