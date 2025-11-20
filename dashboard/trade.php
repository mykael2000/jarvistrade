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
    
<div class="container mx-auto px-4 py-8" x-data="tradingMarkets()" x-cloak>
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

    <div>
    </div>
        <!-- Flash Message -->

<!-- Validation Errors -->

<!-- Notify Alert -->

<!-- Signal Alert -->

<!-- Plan Alert -->

    <!-- Page Header -->
    <div class="mb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Trading Markets</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-1">Choose from thousands of trading instruments across multiple asset classes</p>
            </div>

            <!-- Search and Stats -->
            <div class="flex items-center gap-4">
                <div class="relative">
                    <input type="text"
                           x-model="searchQuery"
                           placeholder="Search instruments..."
                           class="w-64 pl-10 pr-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-900 dark:text-white">
                    <i data-lucide="search" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400"></i>
                </div>

                <div class="hidden md:flex items-center gap-4 text-sm">
                    <div class="text-center">
                        <div class="text-gray-900 dark:text-white font-semibold" x-text="totalInstruments"></div>
                        <div class="text-gray-500 dark:text-gray-400">Instruments</div>
                    </div>
                    <div class="w-px h-8 bg-gray-300 dark:bg-gray-600"></div>
                    <div class="text-center">
                        <div class="text-green-600 dark:text-green-400 font-semibold">24/7</div>
                        <div class="text-gray-500 dark:text-gray-400">Trading</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asset Type Filters -->
    <div class="mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-1.5">
            <div class="flex flex-wrap gap-1">
                <button @click="selectedType = 'all'"
                        :class="selectedType === 'all' ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700'"
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                    <i data-lucide="grid-3x3" class="w-4 h-4"></i>
                    All Markets
                </button>

                <button @click="selectedType = 'crypto'"
                        :class="selectedType === 'crypto' ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700'"
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                    <i data-lucide="bitcoin" class="w-4 h-4"></i>
                    Cryptocurrency
                </button>

                <button @click="selectedType = 'stock'"
                        :class="selectedType === 'stock' ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700'"
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                    <i data-lucide="trending-up" class="w-4 h-4"></i>
                    Stocks
                </button>

                <button @click="selectedType = 'forex'"
                        :class="selectedType === 'forex' ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700'"
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                    <i data-lucide="globe" class="w-4 h-4"></i>
                    Forex
                </button>

                <button @click="selectedType = 'commodity'"
                        :class="selectedType === 'commodity' ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700'"
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                    <i data-lucide="zap" class="w-4 h-4"></i>
                    Commodities
                </button>

                <button @click="selectedType = 'bond'"
                        :class="selectedType === 'bond' ? 'bg-blue-500 text-white shadow-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700'"
                        class="px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                    <i data-lucide="landmark" class="w-4 h-4"></i>
                    Bonds
                </button>
            </div>
        </div>
    </div>

    <!-- Instruments Grid -->
    <div class="space-y-6">
        <!-- Loading State -->
        <div x-show="loading" class="flex items-center justify-center py-12">
            <div class="flex items-center gap-3">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
                <span class="text-gray-600 dark:text-gray-400">Loading instruments...</span>
            </div>
        </div>

        <!-- No Results -->
        <div x-show="!loading && filteredInstruments.length === 0" class="text-center py-12">
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-8">
                <i data-lucide="search-x" class="w-16 h-16 text-gray-400 mx-auto mb-4"></i>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No instruments found</h3>
                <p class="text-gray-600 dark:text-gray-400">Try adjusting your search or filter criteria</p>
            </div>
        </div>

        <!-- Instruments List -->
        <template x-for="(typeGroup, type) in groupedInstruments" :key="type">
            <div x-show="(selectedType === 'all' || selectedType === type) && typeGroup.length > 0" class="space-y-4">
                <!-- Section Header -->
                <div class="flex items-center gap-3 px-2">
                    <div class="flex items-center gap-2">
                        <template x-if="type === 'crypto'">
                            <i data-lucide="bitcoin" class="w-5 h-5 text-orange-500"></i>
                        </template>
                        <template x-if="type === 'stock'">
                            <i data-lucide="trending-up" class="w-5 h-5 text-green-500"></i>
                        </template>
                        <template x-if="type === 'forex'">
                            <i data-lucide="globe" class="w-5 h-5 text-blue-500"></i>
                        </template>
                        <template x-if="type === 'commodity'">
                            <i data-lucide="zap" class="w-5 h-5 text-yellow-500"></i>
                        </template>
                        <template x-if="type === 'bond'">
                            <i data-lucide="landmark" class="w-5 h-5 text-purple-500"></i>
                        </template>

                        <h2 class="text-xl font-bold text-gray-900 dark:text-white capitalize" x-text="getTypeDisplayName(type)"></h2>
                        <span class="text-sm text-gray-500 dark:text-gray-400" x-text="`(${typeGroup.length} instruments)`"></span>
                    </div>
                </div>

                <!-- Instruments Grid -->
                <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <!-- Table Header -->
                    <div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-200 dark:border-gray-600">
                        <div class="grid grid-cols-12 gap-4 items-center text-sm font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            <div class="col-span-8 md:col-span-3">Asset</div>
                            <div class="col-span-2 text-right hidden md:block">Price</div>
                            <div class="col-span-2 text-right hidden md:block">24h Change</div>
                            <div class="col-span-2 text-right hidden md:block">Volume</div>
                            <div class="col-span-4 md:col-span-3 text-right">Action</div>
                        </div>
                    </div>

                    <!-- Table Body -->
                    <div class="divide-y divide-gray-200 dark:divide-gray-600">
                        <template x-for="instrument in typeGroup" :key="instrument.id">
                            <div class="px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150">
                                <div class="grid grid-cols-12 gap-4 items-center">
                                    <!-- Asset Info -->
                                    <div class="col-span-8 md:col-span-3">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center flex-shrink-0">
                                                <template x-if="instrument.logo">
                                                    <img :src="instrument.logo" :alt="instrument.name" class="w-8 h-8 rounded-full object-cover">
                                                </template>
                                                <template x-if="!instrument.logo">
                                                    <span class="text-gray-500 dark:text-gray-400 font-semibold text-sm" x-text="instrument.symbol.substring(0, 2)"></span>
                                                </template>
                                            </div>
                                            <div class="min-w-0">
                                                <div class="font-semibold text-gray-900 dark:text-white truncate" x-text="instrument.name"></div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400" x-text="instrument.symbol"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-span-2 text-right hidden md:block">
                                        <div class="font-semibold text-gray-900 dark:text-white" x-text="formatPrice(instrument.price)"></div>
                                    </div>

                                    <!-- 24h Change -->
                                    <div class="col-span-2 text-right hidden md:block">
                                        <div class="flex flex-col items-end gap-1">
                                            <span :class="instrument.percent_change_24h >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                                                  class="font-semibold flex items-center gap-1">
                                                <template x-if="instrument.percent_change_24h >= 0">
                                                    <i data-lucide="trending-up" class="w-3 h-3"></i>
                                                </template>
                                                <template x-if="instrument.percent_change_24h < 0">
                                                    <i data-lucide="trending-down" class="w-3 h-3"></i>
                                                </template>
                                                <span x-text="formatPercentage(instrument.percent_change_24h)"></span>
                                            </span>
                                            <span :class="instrument.change >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                                                  class="text-sm" x-text="formatChange(instrument.change)"></span>
                                        </div>
                                    </div>

                                    <!-- Volume (hidden on mobile) -->
                                    <div class="col-span-2 text-right hidden md:block">
                                        <div class="text-gray-600 dark:text-gray-400" x-text="formatVolume(instrument.volume)"></div>
                                    </div>

                                    <!-- Trade Button -->
                                    <div class="col-span-4 md:col-span-3 text-right">
                                        <a :href="`https://jarvistradepro.com/dashboard/trade/${instrument.id}`"
                                           class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors duration-200 shadow-sm hover:shadow-md">
                                            <i data-lucide="trending-up" class="w-4 h-4"></i>
                                            <span>Trade</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>

<script>
function tradingMarkets() {
    return {
        instruments: [{"id":1,"symbol":"BTC\/USD","name":"Bitcoin","type":"crypto","open":null,"high":"119026.00000000","low":"117498.00000000","close":"118189.00000000","percent_change_24h":"0.0169","change":"19.95000000","market_cap":"2351318452138.00","volume":"39985706996.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/1\/large\/bitcoin.png?1696501400","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"118189.00000000"},{"id":2,"symbol":"ETH\/USD","name":"Ethereum","type":"crypto","open":null,"high":"3877.35000000","low":"3749.50000000","close":"3808.23000000","percent_change_24h":"0.4649","change":"17.62000000","market_cap":"459660436948.00","volume":"32503704468.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/279\/large\/ethereum.png?1696501628","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"3808.23000000"},{"id":4,"symbol":"XRP\/USD","name":"XRP","type":"crypto","open":null,"high":"3.18000000","low":"3.10000000","close":"3.12000000","percent_change_24h":"-1.1874","change":"-0.03750976","market_cap":"184880102634.00","volume":"6521469452.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/44\/large\/xrp-symbol-white-128.png?1696501442","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"3.12000000"},{"id":6,"symbol":"SOL\/USD","name":"Solana","type":"crypto","open":null,"high":"188.37000000","low":"181.05000000","close":"181.54000000","percent_change_24h":"-3.2226","change":"-6.04518085","market_cap":"97788569082.00","volume":"6395387880.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/4128\/large\/solana.png?1718769756","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"181.54000000"},{"id":9,"symbol":"TRX\/USD","name":"TRON","type":"crypto","open":null,"high":"0.34855400","low":"0.32031500","close":"0.33766200","percent_change_24h":"4.4497","change":"0.01438492","market_cap":"31976827832.00","volume":"2994245589.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/1094\/large\/tron-logo.png?1696502193","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"0.33766200"},{"id":8,"symbol":"DOGE\/USD","name":"Dogecoin","type":"crypto","open":null,"high":"0.23384900","low":"0.22346100","close":"0.22533800","percent_change_24h":"-3.5047","change":"-0.00818431","market_cap":"33811260969.00","volume":"2345363934.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/5\/large\/dogecoin.png?1696501409","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"0.22533800"},{"id":15,"symbol":"SUI\/USD","name":"Sui","type":"crypto","open":null,"high":"4.12000000","low":"3.80000000","close":"3.83000000","percent_change_24h":"-6.9540","change":"-0.28611982","market_cap":"13225417830.00","volume":"2146885528.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/26375\/large\/sui-ocean-square.png?1727791290","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"3.83000000"},{"id":5,"symbol":"BNB\/USD","name":"BNB","type":"crypto","open":null,"high":"839.05000000","low":"813.08000000","close":"814.72000000","percent_change_24h":"-2.7648","change":"-23.16562386","market_cap":"113511372111.00","volume":"2082029928.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/825\/large\/bnb-icon2_2x.png?1696501970","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"814.72000000"},{"id":11,"symbol":"ADA\/USD","name":"Cardano","type":"crypto","open":null,"high":"0.81005200","low":"0.78196400","close":"0.78650500","percent_change_24h":"-2.5832","change":"-0.02085531","market_cap":"28429580481.00","volume":"1321087841.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/975\/large\/cardano.png?1696502090","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"0.78650500"},{"id":144,"symbol":"ENA\/USD","name":"Ethena","type":"crypto","open":null,"high":"0.67619400","low":"0.57596000","close":"0.57838700","percent_change_24h":"-10.8812","change":"-0.07061959","market_cap":"3669033759.00","volume":"1131134704.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/36530\/large\/ethena.png?1711701436","created_at":"2025-07-24T18:28:21.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"0.57838700"},{"id":35,"symbol":"PEPE\/USD","name":"Pepe","type":"crypto","open":null,"high":"0.00001242","low":"0.00001156","close":"0.00001160","percent_change_24h":"-6.3515","change":"-0.00000079","market_cap":"4887005903.00","volume":"889989235.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/29850\/large\/pepe-token.jpeg?1696528776","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"0.00001160"},{"id":19,"symbol":"AVAX\/USD","name":"Avalanche","type":"crypto","open":null,"high":"26.40000000","low":"24.53000000","close":"24.71000000","percent_change_24h":"-6.2222","change":"-1.63980917","market_cap":"10442028768.00","volume":"861845050.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/12559\/large\/Avalanche_Circle_RedWhite_Trans.png?1696512369","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"24.71000000"},{"id":17,"symbol":"LINK\/USD","name":"Chainlink","type":"crypto","open":null,"high":"18.58000000","low":"17.89000000","close":"17.91000000","percent_change_24h":"-3.3851","change":"-0.62733754","market_cap":"12146204250.00","volume":"683862927.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/877\/large\/chainlink-new-logo.png?1696502009","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"17.91000000"},{"id":26,"symbol":"LTC\/USD","name":"Litecoin","type":"crypto","open":null,"high":"110.84000000","low":"107.95000000","close":"108.84000000","percent_change_24h":"-1.5330","change":"-1.69444074","market_cap":"8286455338.00","volume":"587317895.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/2\/large\/litecoin.png?1696501400","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"108.84000000"},{"id":12,"symbol":"HYPE\/USD","name":"Hyperliquid","type":"crypto","open":null,"high":"45.99000000","low":"43.23000000","close":"43.59000000","percent_change_24h":"-1.6405","change":"-0.72703706","market_cap":"14540690182.00","volume":"527169012.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/50882\/large\/hyperliquid.jpg?1729431300","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"43.59000000"},{"id":37,"symbol":"UNI\/USD","name":"Uniswap","type":"crypto","open":null,"high":"10.66000000","low":"10.19000000","close":"10.22000000","percent_change_24h":"-3.4164","change":"-0.36150447","market_cap":"6139401640.00","volume":"526266222.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/12504\/large\/uniswap-logo.png?1720676669","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"10.22000000"},{"id":27,"symbol":"HBAR\/USD","name":"Hedera","type":"crypto","open":null,"high":"0.27798500","low":"0.26566500","close":"0.26751500","percent_change_24h":"-2.7514","change":"-0.00756876","market_cap":"11339602429.00","volume":"477696854.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/3688\/large\/hbar.png?1696504364","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"0.26751500"},{"id":44,"symbol":"APT\/USD","name":"APT\/USD","type":"crypto","open":"4.90000000","high":"4.99000000","low":"4.67000000","close":"4.90000000","percent_change_24h":"-2.8571","change":"-0.14000000","market_cap":"3108771489.00","volume":"468964801.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/26455\/large\/aptos_round.png?1696525528","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-28T17:44:31.000000Z","price":"4.76000000"},{"id":34,"symbol":"CBBTC\/USD","name":"Coinbase Wrapped BTC","type":"crypto","open":null,"high":"119123.00000000","low":"117444.00000000","close":"118310.00000000","percent_change_24h":"0.1105","change":"130.55000000","market_cap":"6367800754.00","volume":"442967299.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/40143\/large\/cbbtc.webp?1726136727","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"118310.00000000"},{"id":38,"symbol":"AAVE\/USD","name":"Aave","type":"crypto","open":null,"high":"295.15000000","low":"284.13000000","close":"284.42000000","percent_change_24h":"-3.0868","change":"-9.05920736","market_cap":"4322630458.00","volume":"420475954.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/12645\/large\/aave-token-round.png?1720472354","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"284.42000000"},{"id":16,"symbol":"BCH\/USD","name":"Bitcoin Cash","type":"crypto","open":null,"high":"585.88000000","low":"565.56000000","close":"565.04000000","percent_change_24h":"-3.0524","change":"-17.79035905","market_cap":"11249148249.00","volume":"371693690.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/780\/large\/bitcoin-cash-circle.png?1696501932","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"565.04000000"},{"id":20,"symbol":"XLM\/USD","name":"Stellar","type":"crypto","open":null,"high":"0.43366800","low":"0.41624100","close":"0.42050500","percent_change_24h":"-1.6493","change":"-0.00705161","market_cap":"13115267334.00","volume":"368210869.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/100\/large\/fmpFRHHQ_400x400.jpg?1735231350","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"0.42050500"},{"id":31,"symbol":"DOT\/USD","name":"Polkadot","type":"crypto","open":null,"high":"4.11000000","low":"3.93000000","close":"3.96000000","percent_change_24h":"-3.3314","change":"-0.13650449","market_cap":"6036638699.00","volume":"310837744.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/12171\/large\/polkadot.png?1696512008","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"3.96000000"},{"id":29,"symbol":"USDE\/USD","name":"Ethena USDe","type":"crypto","open":null,"high":"1.00200000","low":"0.99822900","close":"1.00100000","percent_change_24h":"-0.0290","change":"-0.00029013","market_cap":"7655851150.00","volume":"256049272.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/33613\/large\/usde.png?1733810059","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"1.00100000"},{"id":21,"symbol":"TON\/USD","name":"Toncoin","type":"crypto","open":null,"high":"3.33000000","low":"3.19000000","close":"3.24000000","percent_change_24h":"-2.0512","change":"-0.06782397","market_cap":"7823841922.00","volume":"245843873.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/17980\/large\/photo_2024-09-10_17.09.00.jpeg?1725963446","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"3.24000000"},{"id":46,"symbol":"NEAR\/USD","name":"NEAR Protocol","type":"crypto","open":null,"high":"2.85000000","low":"2.69000000","close":"2.73000000","percent_change_24h":"-4.1586","change":"-0.11850800","market_cap":"3385634613.00","volume":"244638750.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/10365\/large\/near.jpg?1696510367","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"2.73000000"},{"id":22,"symbol":"SHIB\/USD","name":"Shiba Inu","type":"crypto","open":null,"high":"0.00001372","low":"0.00001312","close":"0.00001321","percent_change_24h":"-3.5679","change":"-0.00000049","market_cap":"7790326652.00","volume":"242610479.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/11939\/large\/shiba.png?1696511800","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"0.00001321"},{"id":143,"symbol":"ONDO\/USD","name":"Ondo","type":"crypto","open":null,"high":"1.01700000","low":"0.96405400","close":"0.96780700","percent_change_24h":"-4.4228","change":"-0.04478500","market_cap":"3064193185.00","volume":"226026491.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/26580\/large\/ONDO.png?1696525656","created_at":"2025-07-24T18:28:21.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"0.96780700"},{"id":41,"symbol":"TAO\/USD","name":"Bittensor","type":"crypto","open":null,"high":"414.86000000","low":"389.87000000","close":"392.99000000","percent_change_24h":"-4.6996","change":"-19.37988998","market_cap":"3746263398.00","volume":"152441903.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/28452\/large\/ARUsPeNQ_400x400.jpeg?1696527447","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"392.99000000"},{"id":13,"symbol":"WBTC\/USD","name":"Wrapped Bitcoin","type":"crypto","open":null,"high":"118877.00000000","low":"117388.00000000","close":"118133.00000000","percent_change_24h":"0.2127","change":"250.69000000","market_cap":"14989234508.00","volume":"151465258.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/7598\/large\/wrapped_bitcoin_wbtc.png?1696507857","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"118133.00000000"},{"id":30,"symbol":"XMR\/USD","name":"Monero","type":"crypto","open":null,"high":"326.56000000","low":"315.01000000","close":"316.25000000","percent_change_24h":"-2.9150","change":"-9.49524079","market_cap":"5831629216.00","volume":"137804527.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/69\/large\/monero_logo.png?1696501460","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"316.25000000"},{"id":33,"symbol":"BGB\/USD","name":"Bitget Token","type":"crypto","open":null,"high":"4.66000000","low":"4.54000000","close":"4.57000000","percent_change_24h":"-1.3392","change":"-0.06204713","market_cap":"5215238661.00","volume":"129935971.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/11610\/large\/Bitget_logo.png?1736925727","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"4.57000000"},{"id":50,"symbol":"ETC\/USD","name":"Ethereum Classic","type":"crypto","open":null,"high":"22.40000000","low":"21.67000000","close":"22.00000000","percent_change_24h":"-1.7228","change":"-0.38574373","market_cap":"3364744319.00","volume":"117570608.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/453\/large\/ethereum-classic-logo.png?1696501717","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"22.00000000"},{"id":14,"symbol":"WSTETH\/USD","name":"Wrapped stETH","type":"crypto","open":null,"high":"4684.17000000","low":"4526.68000000","close":"4610.08000000","percent_change_24h":"0.6106","change":"27.98000000","market_cap":"15062472992.00","volume":"103166321.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/18834\/large\/wstETH.png?1696518295","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"4610.08000000"},{"id":47,"symbol":"CRO\/USD","name":"Cronos","type":"crypto","open":null,"high":"0.14775700","low":"0.13588100","close":"0.14376200","percent_change_24h":"2.3730","change":"0.00333240","market_cap":"4655600584.00","volume":"102518190.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/7310\/large\/cro_token_logo.png?1696507599","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"0.14376200"},{"id":10,"symbol":"STETH\/USD","name":"Lido Staked Ether","type":"crypto","open":null,"high":"3876.83000000","low":"3739.40000000","close":"3801.48000000","percent_change_24h":"0.4824","change":"18.25000000","market_cap":"34093890404.00","volume":"85551926.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/13442\/large\/steth_logo.png?1696513206","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"3801.48000000"},{"id":43,"symbol":"ICP\/USD","name":"Internet Computer","type":"crypto","open":null,"high":"5.73000000","low":"5.47000000","close":"5.52000000","percent_change_24h":"-3.2688","change":"-0.18656315","market_cap":"2957786764.00","volume":"78001791.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/14495\/large\/Internet_Computer_logo.png?1696514180","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"5.52000000"},{"id":24,"symbol":"WETH\/USD","name":"WETH","type":"crypto","open":null,"high":"3882.63000000","low":"3739.58000000","close":"3808.33000000","percent_change_24h":"0.4496","change":"17.05000000","market_cap":"8607504932.00","volume":"73692922.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/2518\/large\/weth.png?1696503332","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"3808.33000000"},{"id":36,"symbol":"PI\/USD","name":"Pi Network","type":"crypto","open":null,"high":"0.44674300","low":"0.43232100","close":"0.43324600","percent_change_24h":"-2.8974","change":"-0.01292747","market_cap":"3352989927.00","volume":"72033774.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/54342\/large\/pi_network.jpg?1739347576","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"0.43324600"},{"id":32,"symbol":"WBT\/USD","name":"WhiteBIT Coin","type":"crypto","open":null,"high":"44.65000000","low":"43.88000000","close":"44.21000000","percent_change_24h":"-0.0181","change":"-0.00799320","market_cap":"6371758592.00","volume":"41392722.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/27045\/large\/wbt_token.png?1696526096","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"44.21000000"},{"id":42,"symbol":"OKB\/USD","name":"OKB","type":"crypto","open":null,"high":"48.91000000","low":"48.23000000","close":"48.70000000","percent_change_24h":"-0.1593","change":"-0.07770139","market_cap":"2904846659.00","volume":"35090639.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/4463\/large\/WeChat_Image_20220118095654.png?1696505053","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"48.70000000"},{"id":142,"symbol":"WBETH\/USD","name":"Wrapped Beacon ETH","type":"crypto","open":null,"high":"4165.12000000","low":"4030.26000000","close":"4090.52000000","percent_change_24h":"0.5041","change":"20.51000000","market_cap":"12144516973.00","volume":"33773787.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/30061\/large\/wbeth-icon.png?1696528983","created_at":"2025-07-24T18:28:20.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"4090.52000000"},{"id":40,"symbol":"SUSDE\/USD","name":"Ethena Staked USDe","type":"crypto","open":null,"high":"1.19000000","low":"1.18000000","close":"1.19000000","percent_change_24h":"0.0731","change":"0.00086625","market_cap":"4375898493.00","volume":"31401885.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/33669\/large\/sUSDe-Symbol-Color.png?1716307680","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"1.19000000"},{"id":48,"symbol":"TKX\/USD","name":"TKX\/USD","type":"crypto","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":"2627469337.00","volume":"29134412.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/4984\/large\/TKX_-_Logo_-_RGB-15.png?1696505519","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-28T17:44:58.000000Z","price":"0.00000000"},{"id":49,"symbol":"JITOSOL\/USD","name":"Jito Staked SOL","type":"crypto","open":null,"high":"229.98000000","low":"220.79000000","close":"221.32000000","percent_change_24h":"-3.2367","change":"-7.40326231","market_cap":"2897715769.00","volume":"24212494.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/28046\/large\/JitoSOL-200.png?1696527060","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-29T17:43:33.000000Z","price":"221.32000000"},{"id":25,"symbol":"WEETH\/USD","name":"Wrapped eETH","type":"crypto","open":null,"high":"4159.18000000","low":"4009.58000000","close":"4077.21000000","percent_change_24h":"0.4409","change":"17.90000000","market_cap":"10853491321.00","volume":"15461476.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/33033\/large\/weETH.png?1701438396","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"4077.21000000"},{"id":18,"symbol":"LEO\/USD","name":"LEO Token","type":"crypto","open":null,"high":"8.98000000","low":"8.95000000","close":"8.97000000","percent_change_24h":"0.1200","change":"0.01074391","market_cap":"8276630109.00","volume":"3141937.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/8418\/large\/leo-token.png?1696508607","created_at":"2025-06-16T01:29:24.000000Z","updated_at":"2025-07-29T17:43:32.000000Z","price":"8.97000000"},{"id":45,"symbol":"BUIDL\/USD","name":"BUIDL\/USD","type":"crypto","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":"2896419685.00","volume":"0.00","logo":"https:\/\/coin-images.coingecko.com\/coins\/images\/36291\/large\/blackrock.png?1711013223","created_at":"2025-06-16T01:29:25.000000Z","updated_at":"2025-07-28T17:44:40.000000Z","price":"0.00000000"},{"id":58,"symbol":"NVDA","name":"NVIDIA Corp","type":"stock","open":"174.44000000","high":"175.57000000","low":"173.97000000","close":"173.50000000","percent_change_24h":"0.9221","change":"1.59990000","market_cap":"4233400.13","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/NVDA.png","created_at":"2025-06-16T01:53:14.000000Z","updated_at":"2025-07-28T17:46:34.000000Z","price":"175.09990000"},{"id":52,"symbol":"MSFT","name":"Microsoft Corp","type":"stock","open":"516.30000000","high":"516.30000000","low":"512.36000000","close":"513.71000000","percent_change_24h":"-0.0350","change":"-0.18000000","market_cap":"3818172.19","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/MSFT.png","created_at":"2025-06-16T01:43:51.000000Z","updated_at":"2025-07-28T17:45:35.000000Z","price":"513.53000000"},{"id":51,"symbol":"AAPL","name":"Apple Inc","type":"stock","open":"214.61000000","high":"214.84500000","low":"213.58000000","close":"213.88000000","percent_change_24h":"0.2898","change":"0.61990000","market_cap":"3194474.42","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/AAPL.png","created_at":"2025-06-16T01:43:50.000000Z","updated_at":"2025-07-28T17:45:24.000000Z","price":"214.49990000"},{"id":55,"symbol":"AMZN","name":"Amazon.com Inc","type":"stock","open":"232.92000000","high":"234.29000000","low":"232.25000000","close":"231.44000000","percent_change_24h":"1.0883","change":"2.51880000","market_cap":"2457048.36","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/AMZN.png","created_at":"2025-06-16T01:53:10.000000Z","updated_at":"2025-07-28T17:46:00.000000Z","price":"233.95880000"},{"id":54,"symbol":"GOOGL","name":"Alphabet Inc","type":"stock","open":"194.21000000","high":"194.21000000","low":"191.24410000","close":"193.18000000","percent_change_24h":"-0.8904","change":"-1.72000000","market_cap":"2348539.33","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/GOOG.png","created_at":"2025-06-16T01:53:09.000000Z","updated_at":"2025-07-28T17:45:49.000000Z","price":"191.46000000"},{"id":56,"symbol":"META","name":"Meta Platforms Inc","type":"stock","open":"717.76000000","high":"724.73520000","low":"714.26000000","close":"712.68000000","percent_change_24h":"0.8566","change":"6.10500000","market_cap":"1791782.93","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/FB.png","created_at":"2025-06-16T01:53:11.000000Z","updated_at":"2025-07-28T17:46:12.000000Z","price":"718.78500000"},{"id":59,"symbol":"BRK.B","name":"Berkshire Hathaway Inc","type":"stock","open":"485.46000000","high":"486.89630000","low":"483.03860000","close":"484.07000000","percent_change_24h":"0.2603","change":"1.26000000","market_cap":"1040166.50","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/BRK.B.png","created_at":"2025-06-16T01:53:15.000000Z","updated_at":"2025-07-28T17:46:46.000000Z","price":"485.33000000"},{"id":57,"symbol":"TSLA","name":"Tesla Inc","type":"stock","open":"320.00000000","high":"326.40000000","low":"315.69000000","close":"316.06000000","percent_change_24h":"2.5818","change":"8.16000000","market_cap":"1019435.36","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/TSLA.png","created_at":"2025-06-16T01:53:12.000000Z","updated_at":"2025-07-28T17:46:22.000000Z","price":"324.22000000"},{"id":60,"symbol":"JPM","name":"JPMorgan Chase \u0026 Co","type":"stock","open":"299.02000000","high":"299.43000000","low":"297.50000000","close":"298.62000000","percent_change_24h":"0.1157","change":"0.34540000","market_cap":"829893.16","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/JPM.png","created_at":"2025-06-16T01:53:16.000000Z","updated_at":"2025-07-28T17:46:56.000000Z","price":"298.96540000"},{"id":63,"symbol":"WMT","name":"Walmart Inc","type":"stock","open":"97.58000000","high":"97.97000000","low":"97.07500000","close":"97.47000000","percent_change_24h":"0.3386","change":"0.33000000","market_cap":"777851.33","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/WMT.png","created_at":"2025-06-16T01:53:20.000000Z","updated_at":"2025-07-28T17:47:29.000000Z","price":"97.80000000"},{"id":88,"symbol":"LLY","name":"Eli Lilly and Co","type":"stock","open":"813.84000000","high":"820.22000000","low":"809.48500000","close":"812.69000000","percent_change_24h":"0.2756","change":"2.24000000","market_cap":"770215.23","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/LLY.png","created_at":"2025-06-16T01:53:46.000000Z","updated_at":"2025-07-28T17:52:13.000000Z","price":"814.93000000"},{"id":62,"symbol":"V","name":"Visa Inc","type":"stock","open":"357.65000000","high":"358.32000000","low":"355.93360000","close":"357.04000000","percent_change_24h":"0.1989","change":"0.71000000","market_cap":"692357.41","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/V.png","created_at":"2025-06-16T01:53:19.000000Z","updated_at":"2025-07-28T17:47:17.000000Z","price":"357.75000000"},{"id":80,"symbol":"ORCL","name":"Oracle Corp","type":"stock","open":"246.83000000","high":"246.83000000","low":"243.66000000","close":"245.12000000","percent_change_24h":"-0.1509","change":"-0.37000000","market_cap":"688501.15","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/ORCL.png","created_at":"2025-06-16T01:53:38.000000Z","updated_at":"2025-07-28T17:50:42.000000Z","price":"244.75000000"},{"id":65,"symbol":"MA","name":"Mastercard Inc","type":"stock","open":"568.91000000","high":"571.65000000","low":"567.14500000","close":"568.22000000","percent_change_24h":"0.4470","change":"2.54000000","market_cap":"515970.83","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/MA.png","created_at":"2025-06-16T01:53:22.000000Z","updated_at":"2025-07-28T17:47:52.000000Z","price":"570.76000000"},{"id":69,"symbol":"NFLX","name":"Netflix Inc","type":"stock","open":"1184.42000000","high":"1197.78990000","low":"1177.45700000","close":"1180.49000000","percent_change_24h":"0.6684","change":"7.89000000","market_cap":"501621.29","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/NFLX.png","created_at":"2025-06-16T01:53:26.000000Z","updated_at":"2025-07-28T17:48:41.000000Z","price":"1188.38000000"},{"id":75,"symbol":"XOM","name":"Exxon Mobil Corp","type":"stock","open":"111.20000000","high":"111.84000000","low":"110.84000000","close":"110.40000000","percent_change_24h":"1.1957","change":"1.32000000","market_cap":"475784.17","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/XOM.png","created_at":"2025-06-16T01:53:32.000000Z","updated_at":"2025-07-28T17:49:47.000000Z","price":"111.72000000"},{"id":61,"symbol":"JNJ","name":"Johnson \u0026 Johnson","type":"stock","open":"168.04000000","high":"168.04000000","low":"166.04000000","close":"168.30000000","percent_change_24h":"-0.9447","change":"-1.59000000","market_cap":"404942.12","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/JNJ.png","created_at":"2025-06-16T01:53:18.000000Z","updated_at":"2025-07-28T17:47:07.000000Z","price":"166.71000000"},{"id":85,"symbol":"HD","name":"Home Depot Inc","type":"stock","open":"375.50000000","high":"379.40320000","low":"372.98000000","close":"375.34000000","percent_change_24h":"0.9751","change":"3.66000000","market_cap":"373436.26","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/HD.png","created_at":"2025-06-16T01:53:43.000000Z","updated_at":"2025-07-28T17:51:36.000000Z","price":"379.00000000"},{"id":64,"symbol":"PG","name":"Procter \u0026 Gamble Co","type":"stock","open":"158.25000000","high":"158.25000000","low":"156.23000000","close":"158.30000000","percent_change_24h":"-0.7517","change":"-1.19000000","market_cap":"371140.99","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/PG.png","created_at":"2025-06-16T01:53:21.000000Z","updated_at":"2025-07-28T17:47:41.000000Z","price":"157.11000000"},{"id":72,"symbol":"BAC","name":"Bank of America Corp","type":"stock","open":"48.52000000","high":"48.54000000","low":"48.36000000","close":"48.45000000","percent_change_24h":"0.0310","change":"0.01500000","market_cap":"364919.39","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/BAC.png","created_at":"2025-06-16T01:53:29.000000Z","updated_at":"2025-07-28T17:49:15.000000Z","price":"48.46500000"},{"id":76,"symbol":"CVX","name":"Chevron Corp","type":"stock","open":"155.77000000","high":"156.38000000","low":"154.94840000","close":"154.84000000","percent_change_24h":"0.7298","change":"1.13000000","market_cap":"317018.48","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/CVX.png","created_at":"2025-06-16T01:53:33.000000Z","updated_at":"2025-07-28T17:49:58.000000Z","price":"155.97000000"},{"id":68,"symbol":"KO","name":"Coca-Cola Co","type":"stock","open":"69.16000000","high":"69.16000000","low":"68.54000000","close":"69.17000000","percent_change_24h":"-0.7735","change":"-0.53500000","market_cap":"297726.11","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/KO.png","created_at":"2025-06-16T01:53:25.000000Z","updated_at":"2025-07-28T17:48:28.000000Z","price":"68.63500000"},{"id":83,"symbol":"WFC","name":"Wells Fargo \u0026 Co","type":"stock","open":"84.54000000","high":"84.54000000","low":"83.88000000","close":"84.32000000","percent_change_24h":"-0.4922","change":"-0.41500000","market_cap":"274392.69","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/WFC.png","created_at":"2025-06-16T01:53:42.000000Z","updated_at":"2025-07-28T17:51:14.000000Z","price":"83.90500000"},{"id":74,"symbol":"CSCO","name":"Cisco Systems Inc","type":"stock","open":"68.75000000","high":"68.75000000","low":"67.58000000","close":"68.69000000","percent_change_24h":"-1.5650","change":"-1.07500000","market_cap":"272012.29","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/950800186156.png","created_at":"2025-06-16T01:53:31.000000Z","updated_at":"2025-07-28T17:49:36.000000Z","price":"67.61500000"},{"id":71,"symbol":"CRM","name":"Salesforce Inc","type":"stock","open":"269.90000000","high":"269.95000000","low":"266.59000000","close":"269.11000000","percent_change_24h":"-0.3196","change":"-0.86000000","market_cap":"257269.17","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/CRM.png","created_at":"2025-06-16T01:53:28.000000Z","updated_at":"2025-07-28T17:49:03.000000Z","price":"268.25000000"},{"id":86,"symbol":"UNH","name":"UnitedHealth Group Inc","type":"stock","open":"283.96000000","high":"285.00000000","low":"281.28000000","close":"281.06000000","percent_change_24h":"0.6280","change":"1.76500000","market_cap":"254960.88","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/UNH.png","created_at":"2025-06-16T01:53:44.000000Z","updated_at":"2025-07-28T17:51:49.000000Z","price":"282.82500000"},{"id":66,"symbol":"DIS","name":"Walt Disney Co","type":"stock","open":"121.86000000","high":"121.86000000","low":"120.12000000","close":"121.47000000","percent_change_24h":"-0.9344","change":"-1.13500000","market_cap":"218372.23","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/DIS.png","created_at":"2025-06-16T01:53:23.000000Z","updated_at":"2025-07-28T17:48:03.000000Z","price":"120.33500000"},{"id":87,"symbol":"MRK","name":"Merck \u0026 Co Inc","type":"stock","open":"85.05000000","high":"85.05000000","low":"83.97000000","close":"84.71000000","percent_change_24h":"-0.4132","change":"-0.35000000","market_cap":"212709.46","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/MRK.png","created_at":"2025-06-16T01:53:45.000000Z","updated_at":"2025-07-28T17:52:03.000000Z","price":"84.36000000"},{"id":79,"symbol":"T","name":"AT\u0026T Inc","type":"stock","open":"28.01000000","high":"28.01000000","low":"27.57000000","close":"28.00000000","percent_change_24h":"-1.3393","change":"-0.37500000","market_cap":"201476.86","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/T.png","created_at":"2025-06-16T01:53:37.000000Z","updated_at":"2025-07-28T17:50:31.000000Z","price":"27.62500000"},{"id":67,"symbol":"PEP","name":"PepsiCo Inc","type":"stock","open":"143.65000000","high":"143.65000000","low":"141.76000000","close":"143.45000000","percent_change_24h":"-0.9341","change":"-1.34000000","market_cap":"196394.13","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/PEP.png","created_at":"2025-06-16T01:53:24.000000Z","updated_at":"2025-07-28T17:48:15.000000Z","price":"142.11000000"},{"id":82,"symbol":"VZ","name":"Verizon Communications Inc","type":"stock","open":"43.07000000","high":"43.07000000","low":"42.32000000","close":"43.08000000","percent_change_24h":"-1.6249","change":"-0.70000000","market_cap":"181636.27","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/VZ.png","created_at":"2025-06-16T01:53:41.000000Z","updated_at":"2025-07-28T17:51:04.000000Z","price":"42.38000000"},{"id":89,"symbol":"TMO","name":"Thermo Fisher Scientific Inc","type":"stock","open":"480.92000000","high":"481.97000000","low":"474.87000000","close":"478.32000000","percent_change_24h":"0.5279","change":"2.52500000","market_cap":"180562.88","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/TMO.png","created_at":"2025-06-16T01:53:48.000000Z","updated_at":"2025-07-28T17:52:25.000000Z","price":"480.84500000"},{"id":84,"symbol":"C","name":"Citigroup Inc","type":"stock","open":"96.22000000","high":"96.22000000","low":"95.46500000","close":"96.07000000","percent_change_24h":"-0.5048","change":"-0.48500000","market_cap":"179433.17","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/C.png","created_at":"2025-06-16T01:53:43.000000Z","updated_at":"2025-07-28T17:51:26.000000Z","price":"95.58500000"},{"id":81,"symbol":"BA","name":"Boeing Co","type":"stock","open":"234.67000000","high":"235.65000000","low":"232.91000000","close":"233.06000000","percent_change_24h":"0.4484","change":"1.04500000","market_cap":"175728.52","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/BA.png","created_at":"2025-06-16T01:53:40.000000Z","updated_at":"2025-07-28T17:50:53.000000Z","price":"234.10500000"},{"id":90,"symbol":"AMGN","name":"Amgen Inc","type":"stock","open":"305.49000000","high":"306.00000000","low":"302.31000000","close":"306.58000000","percent_change_24h":"-1.1351","change":"-3.48000000","market_cap":"164849.93","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/AMGN.png","created_at":"2025-06-16T01:53:49.000000Z","updated_at":"2025-07-28T17:52:40.000000Z","price":"303.10000000"},{"id":70,"symbol":"ADBE","name":"Adobe Inc","type":"stock","open":"371.84000000","high":"372.59000000","low":"369.10000000","close":"370.74000000","percent_change_24h":"-0.2535","change":"-0.94000000","market_cap":"157267.91","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/ADBE.png","created_at":"2025-06-16T01:53:27.000000Z","updated_at":"2025-07-28T17:48:53.000000Z","price":"369.80000000"},{"id":78,"symbol":"PFE","name":"Pfizer Inc","type":"stock","open":"24.86000000","high":"24.86000000","low":"24.36000000","close":"24.79000000","percent_change_24h":"-1.1497","change":"-0.28500000","market_cap":"140940.22","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/PFE.png","created_at":"2025-06-16T01:53:36.000000Z","updated_at":"2025-07-28T17:50:20.000000Z","price":"24.50500000"},{"id":77,"symbol":"NKE","name":"Nike Inc","type":"stock","open":"76.58000000","high":"79.99000000","low":"76.58000000","close":"76.27000000","percent_change_24h":"3.9858","change":"3.04000000","market_cap":"112643.45","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/NKE.png","created_at":"2025-06-16T01:53:35.000000Z","updated_at":"2025-07-28T17:50:09.000000Z","price":"79.31000000"},{"id":73,"symbol":"INTC","name":"Intel Corp","type":"stock","open":"20.75000000","high":"21.29000000","low":"20.69000000","close":"20.70000000","percent_change_24h":"1.0870","change":"0.22500000","market_cap":"90293.40","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/INTC.png","created_at":"2025-06-16T01:53:30.000000Z","updated_at":"2025-07-28T17:49:26.000000Z","price":"20.92500000"},{"id":122,"symbol":"WTI","name":"WTI","type":"commodity","open":"1.81000000","high":"1.88000000","low":"1.76990000","close":"1.74000000","percent_change_24h":"5.7471","change":"0.10000000","market_cap":"257.65","volume":null,"logo":"https:\/\/static2.finnhub.io\/file\/publicdatany\/finnhubimage\/stock_logo\/WTI.png","created_at":"2025-06-16T02:02:07.000000Z","updated_at":"2025-07-28T17:55:06.000000Z","price":"1.84000000"},{"id":53,"symbol":"EURUSD","name":"EURUSD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:43:52.000000Z","updated_at":"2025-07-28T17:00:05.000000Z","price":"0.00000000"},{"id":91,"symbol":"USDJPY","name":"USDJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:23.000000Z","updated_at":"2025-07-28T17:06:40.000000Z","price":"0.00000000"},{"id":92,"symbol":"GBPUSD","name":"GBPUSD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:24.000000Z","updated_at":"2025-07-28T17:06:47.000000Z","price":"0.00000000"},{"id":94,"symbol":"AUDUSD","name":"AUDUSD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:27.000000Z","updated_at":"2025-07-28T17:07:05.000000Z","price":"0.00000000"},{"id":96,"symbol":"NZDUSD","name":"NZDUSD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:29.000000Z","updated_at":"2025-07-28T17:07:20.000000Z","price":"0.00000000"},{"id":97,"symbol":"EURGBP","name":"EURGBP","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:30.000000Z","updated_at":"2025-07-28T17:07:27.000000Z","price":"0.00000000"},{"id":98,"symbol":"EURJPY","name":"EURJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:31.000000Z","updated_at":"2025-07-28T17:07:35.000000Z","price":"0.00000000"},{"id":99,"symbol":"GBPJPY","name":"GBPJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:33.000000Z","updated_at":"2025-07-28T17:07:42.000000Z","price":"0.00000000"},{"id":100,"symbol":"CHFJPY","name":"CHFJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:34.000000Z","updated_at":"2025-07-28T17:07:50.000000Z","price":"0.00000000"},{"id":101,"symbol":"EURCHF","name":"EURCHF","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:35.000000Z","updated_at":"2025-07-28T17:08:00.000000Z","price":"0.00000000"},{"id":102,"symbol":"EURAUD","name":"EURAUD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:36.000000Z","updated_at":"2025-07-28T17:08:07.000000Z","price":"0.00000000"},{"id":103,"symbol":"AUDJPY","name":"AUDJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:37.000000Z","updated_at":"2025-07-28T17:08:13.000000Z","price":"0.00000000"},{"id":104,"symbol":"CADJPY","name":"CADJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:38.000000Z","updated_at":"2025-07-28T17:08:20.000000Z","price":"0.00000000"},{"id":105,"symbol":"AUDCAD","name":"AUDCAD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:39.000000Z","updated_at":"2025-07-28T17:08:27.000000Z","price":"0.00000000"},{"id":106,"symbol":"AUDNZD","name":"AUDNZD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:41.000000Z","updated_at":"2025-07-28T17:08:34.000000Z","price":"0.00000000"},{"id":107,"symbol":"GBPAUD","name":"GBPAUD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:42.000000Z","updated_at":"2025-07-28T17:08:41.000000Z","price":"0.00000000"},{"id":108,"symbol":"GBPCHF","name":"GBPCHF","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:43.000000Z","updated_at":"2025-07-28T17:08:48.000000Z","price":"0.00000000"},{"id":109,"symbol":"EURNZD","name":"EURNZD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:44.000000Z","updated_at":"2025-07-28T17:08:55.000000Z","price":"0.00000000"},{"id":110,"symbol":"EURCAD","name":"EURCAD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:45.000000Z","updated_at":"2025-07-28T17:09:02.000000Z","price":"0.00000000"},{"id":111,"symbol":"NZDJPY","name":"NZDJPY","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:47.000000Z","updated_at":"2025-07-28T17:09:11.000000Z","price":"0.00000000"},{"id":112,"symbol":"USDMXN","name":"USDMXN","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:48.000000Z","updated_at":"2025-07-28T17:09:18.000000Z","price":"0.00000000"},{"id":113,"symbol":"USDZAR","name":"USDZAR","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:50.000000Z","updated_at":"2025-07-28T17:09:25.000000Z","price":"0.00000000"},{"id":114,"symbol":"USDHKD","name":"USDHKD","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:52.000000Z","updated_at":"2025-07-28T17:09:33.000000Z","price":"0.00000000"},{"id":118,"symbol":"USDINR","name":"USDINR","type":"forex","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T01:54:58.000000Z","updated_at":"2025-07-28T17:10:01.000000Z","price":"0.00000000"},{"id":120,"symbol":"XAUUSD","name":"XAUUSD","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:04.000000Z","updated_at":"2025-07-24T18:13:56.000000Z","price":"0.00000000"},{"id":123,"symbol":"BRENT","name":"BRENT","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:08.000000Z","updated_at":"2025-07-28T17:55:12.000000Z","price":"0.00000000"},{"id":124,"symbol":"NGAS","name":"NGAS","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:09.000000Z","updated_at":"2025-07-28T17:55:17.000000Z","price":"0.00000000"},{"id":125,"symbol":"COPPER","name":"COPPER","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:10.000000Z","updated_at":"2025-07-28T17:55:21.000000Z","price":"0.00000000"},{"id":126,"symbol":"PLATINUM","name":"PLATINUM","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:12.000000Z","updated_at":"2025-07-28T17:55:26.000000Z","price":"0.00000000"},{"id":127,"symbol":"PALLADIUM","name":"PALLADIUM","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:13.000000Z","updated_at":"2025-07-28T17:55:31.000000Z","price":"0.00000000"},{"id":128,"symbol":"CORN","name":"CORN","type":"commodity","open":"17.45000000","high":"17.47000000","low":"17.29000000","close":"17.49000000","percent_change_24h":"-0.8576","change":"-0.15000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:14.000000Z","updated_at":"2025-07-28T17:55:36.000000Z","price":"17.34000000"},{"id":129,"symbol":"WHEAT","name":"WHEAT","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:15.000000Z","updated_at":"2025-07-28T17:55:41.000000Z","price":"0.00000000"},{"id":130,"symbol":"SOYBEAN","name":"SOYBEAN","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:17.000000Z","updated_at":"2025-07-28T17:55:46.000000Z","price":"0.00000000"},{"id":131,"symbol":"COCOA","name":"COCOA","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:18.000000Z","updated_at":"2025-07-28T17:55:57.000000Z","price":"0.00000000"},{"id":132,"symbol":"COFFEE","name":"COFFEE","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:19.000000Z","updated_at":"2025-07-28T17:56:02.000000Z","price":"0.00000000"},{"id":133,"symbol":"SUGAR","name":"SUGAR","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:21.000000Z","updated_at":"2025-07-28T17:56:07.000000Z","price":"0.00000000"},{"id":134,"symbol":"COTTON","name":"COTTON","type":"commodity","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:23.000000Z","updated_at":"2025-07-28T17:56:12.000000Z","price":"0.00000000"},{"id":135,"symbol":"US10Y","name":"US10Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:24.000000Z","updated_at":"2025-07-28T17:56:17.000000Z","price":"0.00000000"},{"id":136,"symbol":"US2Y","name":"US2Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:25.000000Z","updated_at":"2025-07-28T17:56:22.000000Z","price":"0.00000000"},{"id":137,"symbol":"US30Y","name":"US30Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:26.000000Z","updated_at":"2025-07-28T17:56:26.000000Z","price":"0.00000000"},{"id":138,"symbol":"DE10Y","name":"DE10Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:27.000000Z","updated_at":"2025-07-28T17:56:31.000000Z","price":"0.00000000"},{"id":139,"symbol":"JP10Y","name":"JP10Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:28.000000Z","updated_at":"2025-07-28T17:56:37.000000Z","price":"0.00000000"},{"id":140,"symbol":"UK10Y","name":"UK10Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:29.000000Z","updated_at":"2025-07-28T17:56:41.000000Z","price":"0.00000000"},{"id":141,"symbol":"FR10Y","name":"FR10Y","type":"bond","open":"0.00000000","high":"0.00000000","low":"0.00000000","close":"0.00000000","percent_change_24h":"0.0000","change":"0.00000000","market_cap":null,"volume":null,"logo":null,"created_at":"2025-06-16T02:02:31.000000Z","updated_at":"2025-07-28T17:56:46.000000Z","price":"0.00000000"},{"id":145,"symbol":"BTC","name":"BTC","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:11.000000Z","price":"45000.00000000"},{"id":146,"symbol":"ETH","name":"ETH","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:16.000000Z","price":"3000.00000000"},{"id":148,"symbol":"BNB","name":"BNB","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:26.000000Z","price":"300.00000000"},{"id":149,"symbol":"ADA","name":"ADA","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:31.000000Z","price":"0.50000000"},{"id":150,"symbol":"XRP","name":"XRP","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:35.000000Z","price":"0.60000000"},{"id":151,"symbol":"LTC","name":"LTC","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:42.000000Z","price":"100.00000000"},{"id":152,"symbol":"BCH","name":"BCH","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:46.000000Z","price":"250.00000000"},{"id":153,"symbol":"LINK","name":"LINK","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:51.000000Z","price":"15.00000000"},{"id":154,"symbol":"XLM","name":"XLM","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:57:57.000000Z","price":"0.10000000"},{"id":155,"symbol":"AAVE","name":"AAVE","type":"crypto","open":null,"high":null,"low":null,"close":null,"percent_change_24h":null,"change":null,"market_cap":null,"volume":null,"logo":null,"created_at":"2025-07-28T14:43:16.000000Z","updated_at":"2025-07-28T17:58:02.000000Z","price":"100.00000000"}],
        selectedType: 'all',
        searchQuery: '',
        loading: false,

        get totalInstruments() {
            return this.instruments.length;
        },

        get filteredInstruments() {
            let filtered = this.instruments;

            // Filter by search query
            if (this.searchQuery) {
                const query = this.searchQuery.toLowerCase();
                filtered = filtered.filter(instrument =>
                    instrument.name.toLowerCase().includes(query) ||
                    instrument.symbol.toLowerCase().includes(query)
                );
            }

            // Filter by type
            if (this.selectedType !== 'all') {
                filtered = filtered.filter(instrument => instrument.type === this.selectedType);
            }

            return filtered;
        },

        get groupedInstruments() {
            const grouped = {};
            this.filteredInstruments.forEach(instrument => {
                if (!grouped[instrument.type]) {
                    grouped[instrument.type] = [];
                }
                grouped[instrument.type].push(instrument);
            });

            // Sort each group by market cap or volume
            Object.keys(grouped).forEach(type => {
                grouped[type].sort((a, b) => (b.volume || 0) - (a.volume || 0));
            });

            return grouped;
        },

        getTypeDisplayName(type) {
            const names = {
                'crypto': 'Cryptocurrency',
                'stock': 'Stocks',
                'forex': 'Foreign Exchange',
                'commodity': 'Commodities',
                'bond': 'Bonds'
            };
            return names[type] || type;
        },

        formatPrice(price) {
            if (!price) return 'N/A';
            const num = parseFloat(price);
            if (num >= 1) {
                return '$' + num.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            } else {
                return '$' + num.toFixed(6);
            }
        },

        formatPercentage(percent) {
            if (!percent) return '0.00%';
            const num = parseFloat(percent);
            return (num >= 0 ? '+' : '') + num.toFixed(2) + '%';
        },

        formatChange(change) {
            if (!change) return '$0.00';
            const num = parseFloat(change);
            return (num >= 0 ? '+$' : '-$') + Math.abs(num).toFixed(2);
        },

        formatVolume(volume) {
            if (!volume) return 'N/A';
            const num = parseFloat(volume);
            if (num >= 1e9) {
                return '$' + (num / 1e9).toFixed(1) + 'B';
            } else if (num >= 1e6) {
                return '$' + (num / 1e6).toFixed(1) + 'M';
            } else if (num >= 1e3) {
                return '$' + (num / 1e3).toFixed(1) + 'K';
            }
            return '$' + num.toLocaleString();
        },

        init() {
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