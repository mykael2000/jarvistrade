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
    
<div class="min-h-screen bg-gray-50 dark:bg-gray-900" x-cloak>
    <!-- Clean Header Section -->
    <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 py-8">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-gray-100 dark:bg-gray-700 rounded-lg mb-4" x-cloak>
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    <span class="text-gray-600 dark:text-gray-300 text-sm">30 Expert Traders Available</span>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-semibold text-gray-900 dark:text-white mb-4">
                    Copy Expert Traders
                </h1>

                <!-- Description -->
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Choose from our top-performing traders and automatically copy their trades to your portfolio.
                </p>

                <!-- Navigation -->
                <div class="flex flex-wrap items-center justify-center gap-4" x-cloak>
                    <a href="copy.php"
                       class="inline-flex items-center gap-2 px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                        Back to Dashboard
                    </a>

                    <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center gap-1">
                            <i data-lucide="shield-check" class="w-4 h-4"></i>
                            <span>Verified</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <i data-lucide="trending-up" class="w-4 h-4"></i>
                            <span>Proven Results</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8">
        <!-- Alert Messages -->
        
        

        <!-- Expert Traders Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6" x-cloak>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar9.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Isabella Foster">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Isabella Foster</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Fixed Income</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    13,801 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">93%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 93%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+124,500%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$385,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,789</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Fixed income and bond trading expert with institutional background. Specializes in yield curve strategies and credit spread trading.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$3,800.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(16, &quot;Isabella Foster&quot;, 3800.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($3,800.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar9.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Isabella Foster">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Isabella Foster</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Fixed Income</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    13,800 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">93%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 93%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+124,500%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$385,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,789</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Fixed income and bond trading expert with institutional background. Specializes in yield curve strategies and credit spread trading.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$3,800.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(28, &quot;Isabella Foster&quot;, 3800.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($3,800.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                                        A
                                    </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Alex Thompson</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Forex Expert</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    235 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">92%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 92%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+86%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$125,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,547</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Experienced forex trader specializing in major currency pairs with a focus on risk management.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$100.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(32, &quot;Alex Thompson&quot;, 100.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($100.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar4.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="David Kim">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">David Kim</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Swing Trader</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    178 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">91%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 91%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+94%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$198,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">687</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Swing trading specialist using fundamental and technical analysis for medium-term positions.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$300.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(11, &quot;David Kim&quot;, 300.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($300.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar1.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Alexandra Chen">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Alexandra Chen</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Quant Expert</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    12,450 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">89%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 89%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+84,750%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$285,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">3,247</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Former Goldman Sachs quantitative analyst specializing in algorithmic trading strategies. 15+ years experience in institutional trading with consistent alpha generation.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,500.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(8, &quot;Alexandra Chen&quot;, 2500.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,500.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar2.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Marcus Rodriguez">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Marcus Rodriguez</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Stock Market Pro</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    412 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">89%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 89%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+204%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$310,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,341</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Professional stock trader with 15+ years experience in equity markets and technical analysis.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$500.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(9, &quot;Marcus Rodriguez&quot;, 500.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($500.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar1.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Alexandra Chen">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Alexandra Chen</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Quant Expert</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    12,450 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">89%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 89%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+84,750%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$285,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">3,247</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Former Goldman Sachs quantitative analyst specializing in algorithmic trading strategies. 15+ years experience in institutional trading with consistent alpha generation.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,500.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(20, &quot;Alexandra Chen&quot;, 2500.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,500.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar7.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Yuki Tanaka">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Yuki Tanaka</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Asian Markets</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    7,650 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">88%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 88%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+78,940%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$265,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">3,123</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Asian markets expert with deep understanding of Japanese and Chinese equity markets. Specializes in cross-border arbitrage and currency hedging.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,600.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(14, &quot;Yuki Tanaka&quot;, 2600.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,600.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar7.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Yuki Tanaka">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Yuki Tanaka</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Asian Markets</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    7,650 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">88%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 88%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+78,940%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$265,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">3,123</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Asian markets expert with deep understanding of Japanese and Chinese equity markets. Specializes in cross-border arbitrage and currency hedging.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,600.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(26, &quot;Yuki Tanaka&quot;, 2600.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,600.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar11.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Lisa Anderson">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Lisa Anderson</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">ESG Investing</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    16,750 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">87%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 87%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+145,600%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$420,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,345</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">ESG and sustainable investing pioneer. Combines fundamental analysis with environmental and social impact criteria for long-term wealth creation.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$4,200.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(18, &quot;Lisa Anderson&quot;, 4200.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($4,200.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar11.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Lisa Anderson">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Lisa Anderson</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">ESG Investing</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    16,750 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">87%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 87%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+145,600%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$420,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,345</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">ESG and sustainable investing pioneer. Combines fundamental analysis with environmental and social impact criteria for long-term wealth creation.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$4,200.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(30, &quot;Lisa Anderson&quot;, 4200.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($4,200.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar5.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Elena Volkov">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Elena Volkov</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Options Pro</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    9,340 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">86%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 86%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+63,480%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$210,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,945</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Options trading expert with deep knowledge of volatility strategies. Specializes in complex multi-leg options strategies and volatility arbitrage.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,800.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(12, &quot;Elena Volkov&quot;, 2800.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,800.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar5.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Elena Volkov">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Elena Volkov</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Options Pro</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    9,340 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">86%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 86%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+63,480%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$210,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,945</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Options trading expert with deep knowledge of volatility strategies. Specializes in complex multi-leg options strategies and volatility arbitrage.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,800.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(24, &quot;Elena Volkov&quot;, 2800.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,800.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar2.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Marcus Rodriguez">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Marcus Rodriguez</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Crypto Specialist</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    8,920 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">84%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 84%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+56,780%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$195,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">2,156</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Crypto trading pioneer with deep expertise in DeFi protocols and yield farming strategies. Known for identifying emerging crypto trends before the market.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$1,800.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(21, &quot;Marcus Rodriguez&quot;, 1800.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($1,800.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                                        S
                                    </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Stacy R. Hall</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">MID</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    0 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">80%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 80%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+0%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$0</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">0</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$6,500.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(5, &quot;Stacy R. Hall&quot;, 6500.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($6,500.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                                        J
                                    </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Jarvis B. Buckley</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">PRO</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    0 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">80%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 80%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+0%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$0</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">0</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$20,000.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(6, &quot;Jarvis B. Buckley&quot;, 20000.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($20,000.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                                        M
                                    </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Mara Dao</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Pro</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    0 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">80%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 80%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+0%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$0</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">0</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$4,000.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(7, &quot;Mara Dao&quot;, 4000.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($4,000.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar4.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="David Kim">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">David Kim</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Growth Stocks</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(5)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    6,780 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">78%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 78%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+42,360%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$145,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,889</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Growth stock specialist focusing on technology and biotech sectors. Former hedge fund manager with proven track record in identifying multi-bagger stocks.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,200.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(23, &quot;David Kim&quot;, 2200.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,200.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar3.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Sarah Williams">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Sarah Williams</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Forex Master</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    15,600 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">91%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 91%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+94,500%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$320,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">4,567</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Forex market veteran with 20 years of experience in currency trading. Specializes in major pairs and carries trade strategies with exceptional risk management.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$3,200.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(10, &quot;Sarah Williams&quot;, 3200.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($3,200.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar3.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Sarah Williams">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Sarah Williams</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Forex Master</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    15,600 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">91%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 91%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+94,500%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$320,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">4,567</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Forex market veteran with 20 years of experience in currency trading. Specializes in major pairs and carries trade strategies with exceptional risk management.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$3,200.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(22, &quot;Sarah Williams&quot;, 3200.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($3,200.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                                        S
                                    </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Sarah Chen</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Crypto Specialist</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    156 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">87%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 87%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+127%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$89,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">892</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Cryptocurrency trading expert with deep knowledge of altcoin markets and DeFi protocols.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$250.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(33, &quot;Sarah Chen&quot;, 250.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($250.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar12.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Viktor Petrov">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Viktor Petrov</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">HFT Expert</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    10,250 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">85%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 85%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+67,890%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$240,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">5,678</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">High-frequency trading specialist with expertise in market microstructure. Former prop trader with deep knowledge of algorithmic execution strategies.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,900.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(19, &quot;Viktor Petrov&quot;, 2900.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,900.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar12.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Viktor Petrov">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Viktor Petrov</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">HFT Expert</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    10,250 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">85%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 85%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+67,890%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$240,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">5,678</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">High-frequency trading specialist with expertise in market microstructure. Former prop trader with deep knowledge of algorithmic execution strategies.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,900.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(31, &quot;Viktor Petrov&quot;, 2900.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,900.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
                                        E
                                    </div>
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Emma Wilson</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Day Trader</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    298 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">85%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 85%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+157%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$67,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">3,247</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">High-frequency day trader focusing on scalping strategies and momentum trading.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$150.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(34, &quot;Emma Wilson&quot;, 150.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($150.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar6.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="James Thompson">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">James Thompson</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Commodities</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    11,200 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">82%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 82%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+49,870%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$185,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,678</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Commodities trading specialist with expertise in energy and agricultural markets. Uses fundamental analysis and seasonal patterns for consistent profits.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$1,950.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(13, &quot;James Thompson&quot;, 1950.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($1,950.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar6.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="James Thompson">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">James Thompson</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Commodities</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    11,200 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">82%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 82%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+49,870%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$185,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,678</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Commodities trading specialist with expertise in energy and agricultural markets. Uses fundamental analysis and seasonal patterns for consistent profits.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$1,950.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(25, &quot;James Thompson&quot;, 1950.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($1,950.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar10.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Mohammed Al-Rashid">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Mohammed Al-Rashid</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Energy Sector</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    8,450 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">81%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 81%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+45,670%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$175,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,934</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Middle Eastern markets specialist with expertise in oil and gas sector investments. Strong background in geopolitical analysis and energy trading.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,100.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(17, &quot;Mohammed Al-Rashid&quot;, 2100.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,100.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar10.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Mohammed Al-Rashid">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Mohammed Al-Rashid</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Energy Sector</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    8,450 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">81%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 81%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+45,670%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$175,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,934</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Middle Eastern markets specialist with expertise in oil and gas sector investments. Strong background in geopolitical analysis and energy trading.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$2,100.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(29, &quot;Mohammed Al-Rashid&quot;, 2100.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($2,100.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar8.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Roberto Silva">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Roberto Silva</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Emerging Markets</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    5,890 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">79%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 79%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+35,680%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$132,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,456</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Emerging markets specialist focusing on Latin American and Brazilian markets. Expert in currency volatility and emerging market dynamics.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$1,600.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(15, &quot;Roberto Silva&quot;, 1600.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($1,600.00)
                                    </span>
                                </button>
                                                    </div>
                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">

                        <!-- Expert Header -->
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded text-xs font-medium">
                                    Active
                                </span>
                            </div>

                            <!-- Expert Avatar & Info -->
                            <div class="text-center">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/avatar8.jpg"
                                         class="w-16 h-16 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600 mx-auto mb-3"
                                         alt="Roberto Silva">
                                
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Roberto Silva</h3>

                                                                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Emerging Markets</p>
                                
                                <!-- Rating -->
                                <div class="flex items-center justify-center gap-1 mb-3">
                                                                                                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                                                                                                                                                <i data-lucide="star" class="w-4 h-4 text-gray-300 dark:text-gray-600"></i>
                                                                                                                <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">(4)</span>
                                </div>

                                <!-- Followers -->
                                <div class="text-sm text-gray-500 dark:text-gray-400">
                                    5,890 followers
                                </div>
                            </div>
                        </div>

                        <!-- Performance Stats -->
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <!-- Win Rate -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">79%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Win Rate</div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-1 mt-2">
                                        <div class="bg-green-500 h-1 rounded-full transition-all duration-500"
                                             style="width: 79%"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-green-600 dark:text-green-400">+35,680%</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Return</div>
                                </div>

                                <!-- Equity -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">$132,000</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Equity</div>
                                </div>

                                <!-- Total Trades -->
                                <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg">
                                    <div class="text-lg font-semibold text-gray-900 dark:text-white">1,456</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Total Trades</div>
                                </div>
                            </div>

                            <!-- Description -->
                                                            <div class="mb-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">Emerging markets specialist focusing on Latin American and Brazilian markets. Expert in currency volatility and emerging market dynamics.</p>
                                </div>
                            
                            <!-- Minimum Investment -->
                            <div class="mb-4 p-3 bg-gray-50 dark:bg-gray-700/30 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Minimum Investment</span>
                                    <span class="text-base font-semibold text-gray-900 dark:text-white">$1,600.00</span>
                                </div>
                            </div>

                            <!-- Action Button -->
                                                            <button type="button"
                                        onclick="console.log('Button clicked!'); try { startCopyTrading(27, &quot;Roberto Silva&quot;, 1600.00); } catch(e) { console.error('Error:', e); alert('Error: ' + e.message); }"
                                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl" x-cloak>
                                    <span class="flex items-center justify-center gap-2">
                                        <i data-lucide="copy" class="w-4 h-4"></i>
                                        Start Copying ($1,600.00)
                                    </span>
                                </button>
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
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script x-cloak>
        // Initialize Lucide icons when page loads
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing Lucide icons...');
            lucide.createIcons();
            console.log('SweetAlert2 available:', typeof Swal !== 'undefined');
        });

        // Simple copy trading function with SweetAlert confirmation
        window.startCopyTrading = function(expertId, expertName, minAmount) {
            console.log('startCopyTrading called with:', expertId, expertName, minAmount);
            if (typeof Swal === 'undefined') {
                alert('SweetAlert2 not loaded. Falling back to basic confirmation.');
                if (confirm(`Start copying ${expertName} with minimum investment of $${minAmount}?`)) {
                    submitCopyForm(expertId, minAmount);
                }
                return;
            }
            Swal.fire({
                title: `Start copying ${expertName}?`,
                html: `<div class="text-left space-y-4">Minimum investment: <b>$${minAmount}</b></div>`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Start Copying',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    submitCopyForm(expertId, minAmount);
                }
            });
        }

        function submitCopyForm(expertId, minAmount) {
            console.log('Submitting copy form...', expertId, minAmount);
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'https://jarvistradepro.com/dashboard/copy/start';
            // CSRF token
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = '9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt';
            form.appendChild(csrfInput);
            // Expert ID
            const expertInput = document.createElement('input');
            expertInput.type = 'hidden';
            expertInput.name = 'expert_id';
            expertInput.value = expertId;
            form.appendChild(expertInput);
            // Amount
            const amountInput = document.createElement('input');
            amountInput.type = 'hidden';
            amountInput.name = 'amount';
            amountInput.value = minAmount;
            form.appendChild(amountInput);
            document.body.appendChild(form);
            form.submit();
        }
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