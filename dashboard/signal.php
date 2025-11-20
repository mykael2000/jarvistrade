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
    <!-- Alpine.js Component for Signal Subscriptions -->
<div x-data="signalManager()" class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Section -->
        <div class="mb-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-6" aria-label="Breadcrumb">
                <a href="https://jarvistradepro.com/dashboard" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                    <i data-lucide="home" class="w-4 h-4 inline mr-1"></i>
                    Dashboard
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 dark:text-gray-100 font-medium">Trading Signals</span>
            </nav>

            <!-- Page Title & Description -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                        <i data-lucide="signal" class="w-8 h-8 inline mr-3 text-blue-600 dark:text-blue-400"></i>
                        Premium Trading Signals
                    </h1>
                    <p class="text-gray-600 dark:text-gray-400 text-lg">
                        Subscribe to professional trading signals and enhance your trading success
                    </p>
                </div>

                <!-- Stats Cards -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="bg-white dark:bg-gray-900 rounded-xl p-4 shadow-sm ring-1 ring-gray-200 dark:ring-gray-800">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                                <i data-lucide="trending-up" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">7</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Available Signals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signals Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Monentum Signals</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 200.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 63%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('1', 'Monentum Signals', '200')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Breakout Signals</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 500.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 68.7%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('2', 'Breakout Signals', '500')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Buying Oversold</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 750.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 75%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('4', 'Buying Oversold', '750')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Trend Signal</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 1,000.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 80.4%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('5', 'Trend Signal', '1000')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">BTC Miner S9 Data Circuit</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 1,200.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 85.4%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('7', 'BTC Miner S9 Data Circuit', '1200')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">AntMiner-S7-4.8THs-1250w</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 1,500.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 85.4%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('8', 'AntMiner-S7-4.8THs-1250w', '1500')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                        <!-- Signal Card -->
            <div class="group relative bg-white dark:bg-gray-900 rounded-2xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-800 hover:shadow-lg hover:ring-blue-300 dark:hover:ring-blue-700 transition-all duration-300 overflow-hidden">

                <!-- Signal Header -->
                <div class="relative p-6 pb-4">
                    <!-- Premium Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                            <i data-lucide="star" class="w-3 h-3 mr-1"></i>
                            Premium
                        </span>
                    </div>

                    <!-- Signal Icon & Name -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <i data-lucide="radio" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Bitfury-B8-Bitcoin-Dana</h3>
                    </div>

                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">$ 2,000.00</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Professional trading signals subscription</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Success Rate: 93.4%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Real-time notifications</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">Expert analysis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-3 h-3 text-green-600 dark:text-green-400"></i>
                            </div>
                            <span class="text-sm text-gray-700 dark:text-gray-300">24/7 support</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="p-6 pt-0">
                    <button @click="openSubscriptionModal('10', 'Bitfury-B8-Bitcoin-Dana', '2000')"
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                        <i data-lucide="plus-circle" class="w-5 h-5 inline mr-2"></i>
                        Subscribe Now
                    </button>
                </div>

                <!-- Hover Effect Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
                    </div>

        <!-- Subscription Modal -->
        <div x-show="showModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 overflow-y-auto"
             aria-labelledby="modal-title"
             role="dialog"
             aria-modal="true"
             style="display: none;">

            <!-- Backdrop -->
            <div class="fixed inset-0 bg-gray-500 dark:bg-gray-900 bg-opacity-75 dark:bg-opacity-75 transition-opacity"
                 @click="closeModal()"></div>

            <!-- Modal Content -->
            <div class="flex min-h-full items-end sm:items-center justify-center p-4 text-center sm:p-0">
                <div x-show="showModal"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-gray-900 px-6 pt-6 pb-6 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-8">

                    <!-- Modal Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                                <i data-lucide="signal" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Subscribe to Signal</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400" x-text="selectedSignal.name"></p>
                            </div>
                        </div>
                        <button @click="closeModal()"
                                class="rounded-lg p-1 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                            <i data-lucide="x" class="w-6 h-6"></i>
                        </button>
                    </div>

                    <!-- Subscription Form -->
                    <form method="POST" action="https://jarvistradepro.com/dashboard/newdeposit" class="space-y-6">
                        <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                        <input type="hidden" name="asset" :value="selectedSignal.name">

                        <!-- Payment Method Selection -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">
                                <i data-lucide="credit-card" class="w-4 h-4 inline mr-2"></i>
                                Payment Method
                            </label>
                            <select name="payment_method"
                                    required
                                    class="w-full px-4 py-3 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 focus:border-transparent transition-all">
                                <option value="" selected disabled>Choose Payment Method</option>
                                                                <option value="USDT TRC-20">USDT TRC-20</option>
                                                                <option value="TON">TON</option>
                                                                <option value="BNB">BNB</option>
                                                                <option value="Doge">Doge</option>
                                                                <option value="Trump">Trump</option>
                                                                <option value="XRP">XRP</option>
                                                                <option value="Solana">Solana</option>
                                                                <option value="USDT">USDT</option>
                                                                <option value="Litecoin">Litecoin</option>
                                                                <option value="Ethereum">Ethereum</option>
                                                                <option value="Bitcoin">Bitcoin</option>
                                                            </select>
                        </div>

                        <!-- Amount Display -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-3">
                                <i data-lucide="dollar-sign" class="w-4 h-4 inline mr-2"></i>
                                Subscription Amount ($)
                            </label>
                            <div class="relative">
                                <input type="number"
                                       name="amount"
                                       :value="selectedSignal.price"
                                       readonly
                                       class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl text-gray-900 dark:text-white font-semibold text-lg">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">/month</span>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                                <i data-lucide="info" class="w-4 h-4 inline mr-1"></i>
                                Recurring monthly subscription
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3 pt-4">
                            <button type="button"
                                    @click="closeModal()"
                                    class="flex-1 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 font-semibold py-3 px-6 rounded-xl hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                Cancel
                            </button>
                            <button type="submit"
                                    class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-xl transition-all transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                                <i data-lucide="check-circle" class="w-5 h-5 inline mr-2"></i>
                                Complete Subscription
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alpine.js Script -->
<script>
function signalManager() {
    return {
        showModal: false,
        selectedSignal: {
            id: '',
            name: '',
            price: ''
        },

        openSubscriptionModal(id, name, price) {
            this.selectedSignal = { id, name, price };
            this.showModal = true;
            document.body.style.overflow = 'hidden';
        },

        closeModal() {
            this.showModal = false;
            document.body.style.overflow = 'auto';
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