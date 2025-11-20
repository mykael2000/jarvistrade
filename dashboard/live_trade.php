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
    
<div class="container mx-auto px-4 py-8" x-data="tradingSingle()" x-cloak>
    <!-- TradingView Ticker Tape Widget -->
    <!--<div class="mb-6">-->
    <!--    <div class="tradingview-widget-container">-->
    <!--        <div class="tradingview-widget-container__widget"></div>-->
    <!--        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>-->
    <!--        {-->
    <!--            "symbols": [-->
    <!--                {"proName": "BINANCE:BTCUSDT", "title": "BTC/USDT"},-->
    <!--                {"proName": "BINANCE:ETHUSDT", "title": "ETH/USDT"},-->
    <!--                {"proName": "FX:EURUSD", "title": "EUR/USD"},-->
    <!--                {"proName": "NASDAQ:AAPL", "title": "APPLE"},-->
    <!--                {"proName": "NASDAQ:TSLA", "title": "TESLA"},-->
    <!--                {"proName": "TVC:GOLD", "title": "GOLD"}-->
    <!--            ],-->
    <!--            "showSymbolLogo": true,-->
    <!--            "colorTheme": "dark",-->
    <!--            "isTransparent": true,-->
    <!--            "displayMode": "adaptive",-->
    <!--            "locale": "en"-->
    <!--        }-->
    <!--        </script>-->
    <!--    </div>-->
    <!--</div>-->


    <!-- Flash Message -->

<!-- Validation Errors -->

<!-- Notify Alert -->

<!-- Signal Alert -->

<!-- Plan Alert -->
    <div>
    </div>
    
    <!-- Back Button -->
    <div class="mb-6">
        <a href="https://jarvistradepro.com/dashboard/trade"
           class="inline-flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            Back to Markets
        </a>
    </div>

    <!-- Trading Interface -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <!-- Chart Section (Left Side) -->
        <div class="xl:col-span-2 space-y-6">
            <!-- Instrument Header -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                                                            <img src="https://coin-images.coingecko.com/coins/images/54342/large/pi_network.jpg?1739347576" alt="Pi Network" class="w-10 h-10 rounded-full object-cover">
                                                    </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Pi Network</h1>
                            <p class="text-gray-600 dark:text-gray-400">PI/USD</p>
                        </div>
                    </div>

                    <!-- Price Info -->
                    <div class="text-right">
                        <div class="text-2xl font-bold text-gray-900 dark:text-white">
                            $0.433246
                        </div>
                        <div class="flex items-center gap-1 text-red-600 dark:text-red-400">
                                                            <i data-lucide="trending-down" class="w-4 h-4"></i>
                                                        <span>-2.90%</span>
                            <span class="text-sm">($-0.01)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Widget -->
           <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6">
    <div class="mb-4">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Price Chart</h2>
    </div>

    <!-- TradingView Chart -->
    <div class="tradingview-widget-container h-[600px]">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
        {
            "height": 600,
            "symbol": "PI/USD",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "dark",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "container_id": "tradingview_chart"
        }
        </script>
    </div>
</div>
           <!-- Market Stats -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Market Statistics</h3>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                        <div class="text-sm text-gray-600 dark:text-gray-400 mb-1">24h High</div>
                        <div class="font-semibold text-gray-900 dark:text-white">
                            $0.446743
                        </div>
                    </div>

                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                        <div class="text-sm text-gray-600 dark:text-gray-400 mb-1">24h Low</div>
                        <div class="font-semibold text-gray-900 dark:text-white">
                            $0.432321
                        </div>
                    </div>

                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                        <div class="text-sm text-gray-600 dark:text-gray-400 mb-1">24h Volume</div>
                        <div class="font-semibold text-gray-900 dark:text-white">
                                                            $72.0M
                                                    </div>
                    </div>

                    <div class="text-center p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                        <div class="text-sm text-gray-600 dark:text-gray-400 mb-1">Market Cap</div>
                        <div class="font-semibold text-gray-900 dark:text-white">
                                                            $3.4B
                                                    </div>
                    </div>
                </div>
            </div>

            <!-- Trade History Section -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6">




                <!-- Trade History Tabs -->
                <div class="flex bg-gray-100 dark:bg-gray-700 rounded-lg p-1 mb-6">
                    <button @click="activeTab = 'open'"
                            :class="activeTab === 'open' ? 'bg-white dark:bg-gray-600 text-gray-900 dark:text-white shadow-sm' : 'text-gray-600 dark:text-gray-400'"
                            class="flex-1 py-2 px-4 rounded-md font-medium transition-colors text-sm">
                        Open Trades (0)
                    </button>
                    <button @click="activeTab = 'closed'"
                            :class="activeTab === 'closed' ? 'bg-white dark:bg-gray-600 text-gray-900 dark:text-white shadow-sm' : 'text-gray-600 dark:text-gray-400'"
                            class="flex-1 py-2 px-4 rounded-md font-medium transition-colors text-sm">
                        Closed Trades (0)
                    </button>
                </div>

                <!-- Open Trades -->
                <div x-show="activeTab === 'open'" x-transition>
                                            <div class="text-center py-12">
                            <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center">
                                <i data-lucide="chart-line" class="w-8 h-8 text-gray-400"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Open Trades</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">You don't have any open trades for PI/USD</p>
                            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors text-sm font-medium">
                                Start Trading
                            </button>
                        </div>
                                    </div>

                <!-- Closed Trades -->
                <div x-show="activeTab === 'closed'" x-transition>
                                            <div class="text-center py-12">
                            <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center">
                                <i data-lucide="history" class="w-8 h-8 text-gray-400"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No Trade History</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">You haven't completed any trades for PI/USD yet</p>
                            <div class="space-y-3">
                                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors text-sm font-medium">
                                    Start Trading
                                </button>
                                <div>
                                    <a href="https://jarvistradepro.com/user-trades-debug.php" class="text-sm text-blue-600 hover:underline">
                                        View All Your Trades
                                    </a>
                                </div>
                            </div>
                                                    </div>
                                    </div>
            </div>
        </div>

        <!-- Trading Panel (Right Side) -->
        <div class="xl:col-span-1">
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6 sticky top-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Place Order</h3>

                <!-- Order Type Tabs -->
                <div class="flex bg-gray-100 dark:bg-gray-700 rounded-lg p-1 mb-6">
                    <button @click="orderType = 'Buy'"
                            :class="orderType === 'Buy' ? 'bg-green-500 text-white' : 'text-gray-600 dark:text-gray-400'"
                            class="flex-1 py-2 px-4 rounded-md font-medium transition-colors">
                        Buy
                    </button>
                    <button @click="orderType = 'Sell'"
                            :class="orderType === 'Sell' ? 'bg-red-500 text-white' : 'text-gray-600 dark:text-gray-400'"
                            class="flex-1 py-2 px-4 rounded-md font-medium transition-colors">
                        Sell
                    </button>
                </div>

                <!-- Order Form -->
                <form action="https://jarvistradepro.com/dashboard/joinplan" method="POST" class="space-y-4" @submit.prevent="submitOrder">
                    <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                    <!-- Hidden fields for instrument data -->
                    <input type="hidden" name="plan_id" value="36">
                    <input type="hidden" name="symbol" value="PI/USD">
                    <input type="hidden" name="asset" value="Pi Network">
                    <input type="hidden" name="instrument_price" value="0.43324600">
                    <input type="hidden" name="order_type" x-model="orderType">

                    <!-- Order Type Selector -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Order Type</label>
                        <select x-model="tradeType" name="trade_type" class="w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white">

                            <option value="market">Market Order</option>
                            <option value="limit">Limit Order</option>

                            <option value="stop">Stop Order</option>
                        </select>
                    </div>

                    <!-- Leverage Selector -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Leverage</label>
                        <select name="leverage" id="leverage" required
                                class="block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                            <option disabled selected value="">Leverage</option>
                            <option value="10">1:10</option>
                            <option value="20">1:20</option>
                            <option value="30">1:30</option>
                            <option value="40">1:40</option>
                            <option value="50">1:50</option>
                            <option value="60">1:60</option>
                            <option value="70">1:70</option>
                            <option value="80">1:80</option>
                            <option value="90">1:90</option>
                            <option value="100">1:100</option>
                        </select>
                    </div>

                    <!-- Expiration Selector -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Expiration</label>
                        <select name="expire" id="expire" required
                                class="block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                            <option disabled selected value="">Expiration</option>
                            <option value="3 Minutes">3 Minute</option>
                            <option value="5 Minutes">5 Minutes</option>
                            <option value="15 Minutes">15 Minutes</option>
                            <option value="30 Minutes">30 Minutes</option>
                            <option value="60 Minutes">1 Hour</option>
                            <option value="4 Hours">4 Hours</option>
                            <option value="1 Days">1 Day</option>
                            <option value="2 Days">2 Days</option>
                            <option value="7 Days">7 Days</option>
                        </select>
                    </div>

                    <!-- Price Input (for limit/stop orders) -->
                    <div >
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price ($)</label>
                        <input type="number"
                               x-model="price"
                               name="price"
                               step="any"
                               min="0"
                               placeholder="0.43324600"
                               class="w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white">
                    </div>

                    <!-- Amount Input (Total Investment) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Investment Amount ($)</label>
                        <input type="number"
                               x-model="amount"
                               name="amount"
                               step="0.01"
                               min="0"
                               placeholder="0.00"
                               required
                               class="w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white">
                    </div>                    <!-- Investment Summary -->
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Investment Amount:</span>
                            <span class="font-semibold text-gray-900 dark:text-white" x-text="formatAmount()"></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Units:</span>
                            <span class="text-sm text-gray-900 dark:text-white" x-text="formatUnits()"></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Available Balance:</span>
                            <span class="text-sm text-gray-900 dark:text-white">$13,217.50</span>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            :disabled="!amount || amount <= 0 || loading"
                            :class="orderType === 'Buy' ? 'bg-green-600 hover:bg-green-700 disabled:bg-green-300' : 'bg-red-600 hover:bg-red-700 disabled:bg-red-300'"
                            class="w-full py-3 px-4 text-white font-semibold rounded-lg transition-colors disabled:cursor-not-allowed flex items-center justify-center gap-2">
                        <template x-if="loading">
                            <div class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></div>
                        </template>
                        <span x-text="loading ? 'Processing...' : (orderType === 'Buy' ? 'Buy ' + 'PI/USD' : 'Sell ' + 'PI/USD')"></span>
                    </button>
                </form>

                <!-- Quick Amount Buttons -->
                <div class="mt-4">
                    <div class="text-sm text-gray-600 dark:text-gray-400 mb-2">Quick amounts:</div>
                    <div class="grid grid-cols-4 gap-2">
                        <button @click="setQuickAmount(25)" class="py-1 px-2 text-xs bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded text-gray-700 dark:text-gray-300 transition-colors">25%</button>
                        <button @click="setQuickAmount(50)" class="py-1 px-2 text-xs bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded text-gray-700 dark:text-gray-300 transition-colors">50%</button>
                        <button @click="setQuickAmount(75)" class="py-1 px-2 text-xs bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded text-gray-700 dark:text-gray-300 transition-colors">75%</button>
                        <button @click="setQuickAmount(100)" class="py-1 px-2 text-xs bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded text-gray-700 dark:text-gray-300 transition-colors">Max</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function tradingSingle() {
    return {
        instrument: {"id":36,"symbol":"PI\/USD","name":"Pi Network","type":"crypto","open":null,"high":"0.44674300","low":"0.43232100","close":"0.43324600","percent_change_24h":"-2.8974","change":"-0.01292747","market_cap":"3352989927.00","volume":"72033774.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/54342\/large\/pi_network.jpg?1739347576","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"0.43324600"},
        orderType: 'Buy',
        tradeType: 'market',
        amount: '',
        price: '',
        loading: false,
        activeTab: 'open', // Add tab state to the main Alpine component

        formatAmount() {
            if (!this.amount) return '$0.00';
            const amount = parseFloat(this.amount);
            return '$' + amount.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        },

        formatUnits() {
            if (!this.amount) return '0';
            const amount = parseFloat(this.amount);
            const price = this.tradeType === 'market' ? this.instrument.price : (this.price || this.instrument.price);
            const units = amount / parseFloat(price);
            return units.toLocaleString('en-US', { minimumFractionDigits: 6, maximumFractionDigits: 6 });
        },

        setQuickAmount(percentage) {
            const balance = 13217.5;
            this.amount = (balance * percentage / 100).toFixed(2);
        },

        submitOrder() {
            if (!this.amount || this.amount <= 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Amount',
                    text: 'Please enter a valid amount to trade.',
                    confirmButtonColor: '#3B82F6'
                });
                return;
            }

            const leverage = document.getElementById('leverage').value;
            const expire = document.getElementById('expire').value;

            if (!leverage) {
                Swal.fire({
                    icon: 'error',
                    title: 'Select Leverage',
                    text: 'Please select a leverage ratio.',
                    confirmButtonColor: '#3B82F6'
                });
                return;
            }

            if (!expire) {
                Swal.fire({
                    icon: 'error',
                    title: 'Select Expiration',
                    text: 'Please select an expiration time.',
                    confirmButtonColor: '#3B82F6'
                });
                return;
            }

            const total = this.formatAmount();
            const units = this.formatUnits();
            const action = this.orderType.toUpperCase();

            Swal.fire({
                title: `Confirm ${action} Order`,
                html: `
                    <div class="text-left space-y-2">
                        <p><strong>Instrument:</strong> ${this.instrument.symbol}</p>
                        <p><strong>Action:</strong> ${action}</p>
                        <p><strong>Investment Amount:</strong> ${total}</p>
                        <p><strong>Units:</strong> ${units}</p>
                        <p><strong>Leverage:</strong> 1:${leverage}</p>
                        <p><strong>Expiration:</strong> ${expire}</p>
                    </div>
                `,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: this.orderType === 'Buy' ? '#10B981' : '#EF4444',
                cancelButtonColor: '#6B7280',
                confirmButtonText: `Yes, ${action}!`,
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.loading = true;

                    // Show processing message
                    Swal.fire({
                        title: 'Processing Order...',
                        text: 'Please wait while we process your trade.',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Submit the form
                    this.$el.closest('form').submit();
                }
            });
        },        init() {
            // Initialize price for limit/stop orders
            this.price = this.instrument.price;

            // Initialize Lucide icons
            this.$nextTick(() => {
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            });
        }
    }
}

// Re-initialize icons after Alpine updates
document.addEventListener('alpine:updated', () => {
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