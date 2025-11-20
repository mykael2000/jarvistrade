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
<!-- Modern Hero Section -->
<div class="relative min-h-[40vh] overflow-hidden bg-gradient-to-br from-blue-600 via-blue-600 to-indigo-800">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMzYjgyZjYiIGZpbGwtb3BhY2l0eT0iMC4xIj48Y2lyY2xlIGN4PSIyIiBjeT0iMiIgcj0iMiIvPjxjaXJjbGUgY3g9IjIiIGN5PSI1OCIgcj0iMiIvPjxjaXJjbGUgY3g9IjU4IiBjeT0iNTgiIHI9IjIiLz48Y2lyY2xlIGN4PSI1OCIgY3k9IjIiIHI9IjIiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-20"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500/20 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-blue-500/20 rounded-full filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-6 py-12">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500/10 rounded-full border border-blue-500/20 mb-4">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                <span class="text-blue-200 text-sm font-medium">AI-Powered Trading</span>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <span class="bg-gradient-to-r from-white via-blue-200 to-blue-200 bg-clip-text text-transparent">
                    Bot Trading
                </span>
                <br>
                <span class="bg-gradient-to-r from-blue-400 to-blue-400 bg-clip-text text-transparent">
                    Hub
                </span>
            </h1>

            <p class="text-lg text-blue-100/80 mb-6 max-w-xl mx-auto leading-relaxed">
                Invest in AI-powered trading bots that work 24/7 to maximize your profits across multiple markets.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="https://jarvistradepro.com/dashboard"
                   class="group relative inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-lg rounded-xl border border-white/20 text-white hover:bg-white/20 transition-all duration-300">
                    <i data-lucide="arrow-left" class="w-4 h-4 transition-transform group-hover:-translate-x-1"></i>
                    Back to Dashboard
                </a>
                <a href="bot-trading.php/dashboard"
                   class="group relative inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-xl text-white transition-all duration-300">
                    <i data-lucide="activity" class="w-4 h-4"></i>
                    My Bot Investments
                </a>
            </div>
        </div>
    </div>

    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" class="w-full h-[120px]">
            <path fill="rgb(249 250 251)" d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,64C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path>
        </svg>
    </div>
</div>

<!-- Main Content -->
<div class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="container mx-auto px-6 py-12">

        
        <!-- Available Trading Bots -->
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Available Trading Bots</h2>
                    <p class="text-gray-600 dark:text-gray-400">Choose from our AI-powered trading bots</p>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-2">
                    <button class="filter-btn active px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-filter="all">
                        All Bots
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-filter="forex">
                        Forex
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-filter="crypto">
                        Crypto
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-filter="stocks">
                        Stocks
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-filter="commodities">
                        Commodities
                    </button>
                </div>
            </div>

            <!-- Bots Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        ForexMaster Pro
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                87% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced forex trading bot specializing in major currency pairs. Uses sophisticated algorithms to analyze market trends...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.80% - 2.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $100 - $10,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GBP/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/JPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/CHF
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>1 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/1"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        CryptoGain Elite
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                82% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            High-performance cryptocurrency trading bot designed for the volatile crypto markets. Leverages machine learning to iden...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.20% - 4.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $250 - $25,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BNB/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ADA/USD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$23 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/2"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="stocks">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        StockTrader AI
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">stocks Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                89% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Intelligent stock trading bot focusing on blue-chip stocks and growth companies. Combines fundamental analysis with tech...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.50% - 2.00%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $500 - $50,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GOOGL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    MSFT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AMZN
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$454 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/3"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        GoldRush Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                84% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Specialized commodities trading bot with expertise in precious metals and energy markets. Ideal for portfolio diversific...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.70% - 2.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $200 - $15,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GOLD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SILVER
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COPPER
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$1,550 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/4"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="indices">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        IndexMaster Pro
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">indices Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                86% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced index trading bot that capitalizes on major market indices movements. Uses correlation analysis and macro-econo...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.60% - 2.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">75 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $300 - $20,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    S&amp;P500
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NASDAQ
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    DOW
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    FTSE
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/5"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        ScalpMaster Quick
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                79% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            High-frequency scalping bot designed for quick profits from small price movements. Perfect for active traders seeking mu...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.50% - 3.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">21 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $150 - $5,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GBP/JPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/CAD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AUD/NZD
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$23 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/6"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="stocks">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        BTCUSDT
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">stocks Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                85% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            SmartBot: Automated trading bot for crypto &amp; forex markets.
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.50% - 3.00%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $100 - $10,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    Euro/USD
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/7"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AlgoTrader Supreme
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                91% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Next-generation algorithmic trading bot powered by quantum computing principles. Specializes in high-frequency crypto ar...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.10% - 6.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $500 - $100,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BNB/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ADA/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/8"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        DeFi Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Specialized DeFi protocol explorer that identifies the most profitable yield farming opportunities across decentralized...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.80% - 5.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,000 - $75,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UNI/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAVE/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COMP/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SUSHI/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/9"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Forex Precision Elite
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                93% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Premium forex trading bot utilizing advanced neural networks and sentiment analysis. Designed for institutional-grade pr...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.50% - 4.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $750 - $50,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GBP/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/JPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AUD/USD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/10"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="stocks">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Stock Momentum Master
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">stocks Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                89% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced momentum trading bot that identifies breakout patterns and trending stocks. Focuses on high-volume stocks with...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.20% - 3.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">120 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,500 - $80,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NVDA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AMD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +4 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/11"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="options">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Options Gamma Scalper
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">options Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                85% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated options trading bot specializing in gamma scalping strategies. Exploits volatility changes and time decay...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.50% - 7.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,000 - $60,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    QQQ
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    IWM
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/12"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Commodity Weather AI
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                87% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Intelligent commodity trading bot that incorporates weather data, supply chain analysis, and seasonal patterns for agric...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.30% - 4.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">180 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $800 - $40,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WHEAT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORN
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SOYBEANS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COFFEE
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/13"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Energy Futures Pro
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                83% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Professional energy trading bot focused on oil, gas, and renewable energy futures. Uses geopolitical analysis and supply...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.70% - 5.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,200 - $70,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WTI_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BRENT_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NATURAL_GAS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    HEATING_OIL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/14"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="indices">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Index Arbitrage Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">indices Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                95% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced arbitrage bot that exploits price differences between index futures and their underlying components. High-frequ...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.80% - 2.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,500 - $120,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NDX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    RUT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/15"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="bonds">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Bond Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">bonds Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                92% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated fixed-income trading bot that navigates interest rate changes and yield curve movements. Perfect for insti...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.40% - 1.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $5,000 - $200,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    30Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    2Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORPORATE_BONDS
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/16"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AI Sentiment Trader
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                86% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Revolutionary sentiment-based trading bot that analyzes social media, news, and market sentiment across multiple asset c...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.90% - 5.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $600 - $35,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/17"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="volatility">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Volatility Surface Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">volatility Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced volatility trading bot that maps and trades the volatility surface across multiple assets. Ideal for sophistica...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.10% - 4.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $3,000 - $150,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VXX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UVXY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SVXY
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/18"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Global Macro Beast
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                90% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Comprehensive macro trading bot that implements global macro strategies across currencies, bonds, commodities, and equit...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.70% - 2.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $10,000 - $500,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD_INDEX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GOLD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_BOND
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/19"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AlgoTrader Supreme
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                91% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Next-generation algorithmic trading bot powered by quantum computing principles. Specializes in high-frequency crypto ar...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.10% - 6.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $500 - $100,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BNB/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ADA/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/20"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        DeFi Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Specialized DeFi protocol explorer that identifies the most profitable yield farming opportunities across decentralized...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.80% - 5.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,000 - $75,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UNI/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAVE/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COMP/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SUSHI/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$98 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/21"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Forex Precision Elite
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                93% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Premium forex trading bot utilizing advanced neural networks and sentiment analysis. Designed for institutional-grade pr...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.50% - 4.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $750 - $50,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GBP/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/JPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AUD/USD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/22"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="stocks">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Stock Momentum Master
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">stocks Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                89% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced momentum trading bot that identifies breakout patterns and trending stocks. Focuses on high-volume stocks with...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.20% - 3.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">120 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,500 - $80,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NVDA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AMD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +4 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/23"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="options">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Options Gamma Scalper
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">options Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                85% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated options trading bot specializing in gamma scalping strategies. Exploits volatility changes and time decay...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.50% - 7.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,000 - $60,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    QQQ
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    IWM
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/24"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Commodity Weather AI
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                87% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Intelligent commodity trading bot that incorporates weather data, supply chain analysis, and seasonal patterns for agric...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.30% - 4.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">180 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $800 - $40,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WHEAT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORN
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SOYBEANS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COFFEE
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/25"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Energy Futures Pro
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                83% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Professional energy trading bot focused on oil, gas, and renewable energy futures. Uses geopolitical analysis and supply...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.70% - 5.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,200 - $70,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WTI_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BRENT_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NATURAL_GAS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    HEATING_OIL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/26"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="indices">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Index Arbitrage Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">indices Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                95% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced arbitrage bot that exploits price differences between index futures and their underlying components. High-frequ...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.80% - 2.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,500 - $120,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NDX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    RUT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/27"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="bonds">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Bond Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">bonds Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                92% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated fixed-income trading bot that navigates interest rate changes and yield curve movements. Perfect for insti...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.40% - 1.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $5,000 - $200,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    30Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    2Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORPORATE_BONDS
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/28"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AI Sentiment Trader
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                86% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Revolutionary sentiment-based trading bot that analyzes social media, news, and market sentiment across multiple asset c...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.90% - 5.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $600 - $35,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/29"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="volatility">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Volatility Surface Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">volatility Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced volatility trading bot that maps and trades the volatility surface across multiple assets. Ideal for sophistica...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.10% - 4.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $3,000 - $150,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VXX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UVXY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SVXY
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/30"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Global Macro Beast
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                90% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Comprehensive macro trading bot that implements global macro strategies across currencies, bonds, commodities, and equit...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.70% - 2.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $10,000 - $500,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD_INDEX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GOLD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_BOND
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/31"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AlgoTrader Supreme
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                91% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Next-generation algorithmic trading bot powered by quantum computing principles. Specializes in high-frequency crypto ar...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.10% - 6.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $500 - $100,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BNB/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ADA/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/32"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        DeFi Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Specialized DeFi protocol explorer that identifies the most profitable yield farming opportunities across decentralized...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.80% - 5.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,000 - $75,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UNI/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAVE/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COMP/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SUSHI/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/33"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Forex Precision Elite
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                93% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Premium forex trading bot utilizing advanced neural networks and sentiment analysis. Designed for institutional-grade pr...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.50% - 4.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $750 - $50,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GBP/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/JPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AUD/USD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/34"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="stocks">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Stock Momentum Master
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">stocks Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                89% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced momentum trading bot that identifies breakout patterns and trending stocks. Focuses on high-volume stocks with...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.20% - 3.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">120 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,500 - $80,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NVDA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AMD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +4 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/35"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="options">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Options Gamma Scalper
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">options Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                85% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated options trading bot specializing in gamma scalping strategies. Exploits volatility changes and time decay...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.50% - 7.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,000 - $60,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    QQQ
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    IWM
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$653 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/36"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Commodity Weather AI
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                87% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Intelligent commodity trading bot that incorporates weather data, supply chain analysis, and seasonal patterns for agric...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.30% - 4.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">180 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $800 - $40,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WHEAT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORN
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SOYBEANS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COFFEE
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/37"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Energy Futures Pro
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                83% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Professional energy trading bot focused on oil, gas, and renewable energy futures. Uses geopolitical analysis and supply...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.70% - 5.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,200 - $70,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WTI_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BRENT_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NATURAL_GAS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    HEATING_OIL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/38"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="indices">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Index Arbitrage Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">indices Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                95% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced arbitrage bot that exploits price differences between index futures and their underlying components. High-frequ...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.80% - 2.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,500 - $120,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NDX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    RUT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/39"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="bonds">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Bond Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">bonds Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                92% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated fixed-income trading bot that navigates interest rate changes and yield curve movements. Perfect for insti...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.40% - 1.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $5,000 - $200,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    30Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    2Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORPORATE_BONDS
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/40"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AI Sentiment Trader
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                86% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Revolutionary sentiment-based trading bot that analyzes social media, news, and market sentiment across multiple asset c...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.90% - 5.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $600 - $35,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/41"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="volatility">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Volatility Surface Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">volatility Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced volatility trading bot that maps and trades the volatility surface across multiple assets. Ideal for sophistica...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.10% - 4.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $3,000 - $150,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VXX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UVXY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SVXY
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/42"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Global Macro Beast
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                90% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Comprehensive macro trading bot that implements global macro strategies across currencies, bonds, commodities, and equit...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.70% - 2.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $10,000 - $500,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD_INDEX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GOLD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_BOND
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/43"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AlgoTrader Supreme
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                91% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Next-generation algorithmic trading bot powered by quantum computing principles. Specializes in high-frequency crypto ar...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.10% - 6.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $500 - $100,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BNB/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ADA/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/44"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="crypto">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        DeFi Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">crypto Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Specialized DeFi protocol explorer that identifies the most profitable yield farming opportunities across decentralized...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.80% - 5.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,000 - $75,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UNI/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAVE/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COMP/USDT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SUSHI/USDT
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/45"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Forex Precision Elite
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                93% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Premium forex trading bot utilizing advanced neural networks and sentiment analysis. Designed for institutional-grade pr...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.50% - 4.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $750 - $50,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GBP/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD/JPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AUD/USD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/46"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="stocks">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Stock Momentum Master
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">stocks Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                89% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced momentum trading bot that identifies breakout patterns and trending stocks. Focuses on high-volume stocks with...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.20% - 3.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">120 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,500 - $80,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NVDA
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AMD
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +4 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/47"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="options">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Options Gamma Scalper
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">options Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                85% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated options trading bot specializing in gamma scalping strategies. Exploits volatility changes and time decay...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">2.50% - 7.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,000 - $60,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    QQQ
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    IWM
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/48"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Commodity Weather AI
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                87% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Intelligent commodity trading bot that incorporates weather data, supply chain analysis, and seasonal patterns for agric...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.30% - 4.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">180 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $800 - $40,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WHEAT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORN
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SOYBEANS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    COFFEE
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/49"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="commodities">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Energy Futures Pro
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">commodities Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                83% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Professional energy trading bot focused on oil, gas, and renewable energy futures. Uses geopolitical analysis and supply...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.70% - 5.10%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">90 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $1,200 - $70,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    WTI_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BRENT_OIL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NATURAL_GAS
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    HEATING_OIL
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/50"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="indices">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Index Arbitrage Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">indices Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                95% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced arbitrage bot that exploits price differences between index futures and their underlying components. High-frequ...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.80% - 2.50%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $2,500 - $120,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SPX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    NDX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    RUT
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +2 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/51"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="bonds">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Bond Yield Hunter
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">bonds Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                92% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Sophisticated fixed-income trading bot that navigates interest rate changes and yield curve movements. Perfect for insti...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.40% - 1.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $5,000 - $200,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    30Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    2Y_TREASURY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    CORPORATE_BONDS
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/52"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        AI Sentiment Trader
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                86% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Revolutionary sentiment-based trading bot that analyzes social media, news, and market sentiment across multiple asset c...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.90% - 5.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">60 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $600 - $35,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    BTC/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    ETH/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    AAPL
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    TSLA
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/53"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="volatility">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Volatility Surface Bot
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">volatility Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                88% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Advanced volatility trading bot that maps and trades the volatility surface across multiple assets. Ideal for sophistica...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">1.10% - 4.20%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">45 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $3,000 - $150,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VIX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    VXX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    UVXY
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    SVXY
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/54"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="mixed">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center border-2 border-white dark:border-gray-700 shadow-lg">
                                        <i data-lucide="bot" class="w-7 h-7 text-white"></i>
                                    </div>
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Global Macro Beast
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">mixed Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                90% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Comprehensive macro trading bot that implements global macro strategies across currencies, bonds, commodities, and equit...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.70% - 2.80%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">365 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $10,000 - $500,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    USD_INDEX
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    EUR/USD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    GOLD
                                </span>
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    10Y_BOND
                                </span>
                                                                                                <span class="px-2 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 rounded">
                                    +1 more
                                </span>
                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>0 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/55"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                                <div class="bot-card group relative bg-white dark:bg-gray-900 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-200/20 dark:border-gray-700/30 overflow-hidden hover:shadow-2xl transition-all duration-300"
                     data-category="forex">

                    <!-- Bot Header -->
                    <div class="relative p-6 pb-4">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                                                    <img src="https://jarvistradepro.com/storage/app/public/bots/DYU24yfq27As2gof7EdH02blZv3gvOlvCSIZZmqJ.jpg"
                                         alt="X NOVA"
                                         class="w-14 h-14 rounded-xl object-cover border-2 border-white dark:border-gray-700 shadow-lg">
                                                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        X NOVA
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 capitalize">forex Trading</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">
                                85% Success
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Premium forex trading bot utilizing advanced neural networks and sentiment analysis. Designed for institutional-grade pr...
                        </p>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">0.50% - 3.00%</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Daily Profit</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <div class="text-lg font-bold text-gray-900 dark:text-white">30 Days</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Duration</div>
                            </div>
                        </div>

                        <!-- Investment Range -->
                        <div class="flex items-center justify-between text-sm mb-4">
                            <span class="text-gray-600 dark:text-gray-400">Investment Range:</span>
                            <span class="font-medium text-gray-900 dark:text-white">
                                $500 - $50,000
                            </span>
                        </div>

                        <!-- Trading Pairs -->
                                                <div class="mb-4">
                            <div class="text-xs text-gray-500 dark:text-gray-400 mb-2">Trading Pairs:</div>
                            <div class="flex flex-wrap gap-1">
                                                                <span class="px-2 py-1 text-xs bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 rounded">
                                    XAU/USD
                                </span>
                                                                                            </div>
                        </div>
                        
                        <!-- Performance Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-3 h-3"></i>
                                <span>1 Active Users</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="trending-up" class="w-3 h-3"></i>
                                <span>$0 Total Earned</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="bot-trading.php/56"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-600 hover:from-blue-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 group">
                            <span>Invest Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                            </div>

                    </div>
    </div>
</div>

<style>
.filter-btn {
    background: rgb(249 250 251);
    color: rgb(75 85 99);
}

.dark .filter-btn {
    background: rgb(31 41 55);
    color: rgb(156 163 175);
}

.filter-btn:hover,
.filter-btn.active {
    background: rgb(59 130 246);
    color: white;
}

.dark .filter-btn:hover,
.dark .filter-btn.active {
    background: rgb(59 130 246);
    color: white;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const botCards = document.querySelectorAll('.bot-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            // Filter cards
            botCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.3s ease-in-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});

// CSS animation
const style = document.createElement('style');
style.textContent = `
    @keyframes  fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(style);
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