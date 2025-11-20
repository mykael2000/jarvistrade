<?php include("function.php"); ?>
<!DOCTYPE html>
<html lang="en" class="dark">

<!-- Mirrored from jarvistradepro.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Nov 2025 13:24:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com/"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#6366F1',
                        warning: '#F59E0B',
                        danger: '#EF4444',
                        dark: {
                            100: '#374151',
                            200: '#1F2937',
                            300: '#111827',
                            400: '#0F172A',
                            500: '#0B1120',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="unpkg.com/alpinejs%403.15.1/dist/cdn.min.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        /* Alpine.js x-cloak directive */
        [x-cloak] {
            display: none !important;
        }

        /* Custom scrollbar for dark mode */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1F2937;
        }
        ::-webkit-scrollbar-thumb {
            background: #4B5563;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #6B7280;
        }

        /* Form elements styling */
        .form-input {
            @apply  bg-dark-100 border-0 rounded-lg px-4 py-3 text-gray-100 font-medium focus:ring-2 focus:ring-primary focus:outline-none transition-all duration-200;
        }

        .form-select {
            @apply  bg-dark-100 border-0 rounded-lg px-4 py-3 text-gray-100 font-medium focus:ring-2 focus:ring-primary focus:outline-none transition-all duration-200;
        }

        .btn-primary {
            @apply  bg-primary hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-all duration-200;
        }

        .btn-secondary {
            @apply  bg-dark-100 hover:bg-dark-200 text-white font-bold py-3 px-6 rounded-lg transition-all duration-200;
        }

        /* Navbar and mobile menu animations */
        .navbar-dropdown {
            @apply  transition-all duration-300 ease-in-out transform origin-top;
        }

        @keyframes  fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out forwards;
        }

        /* Light mode overrides */
        html:not(.dark) {
            @apply  bg-gray-100 text-gray-900;
        }

        html:not(.dark) body {
            @apply  bg-gray-100 text-gray-900;
        }

        html:not(.dark) .bg-dark-400 {
            @apply  bg-white;
        }

        html:not(.dark) .bg-dark-300 {
            @apply  bg-gray-50;
        }

        html:not(.dark) .border-gray-800 {
            @apply  border-gray-200;
        }

        html:not(.dark) .text-gray-200,
        html:not(.dark) .text-gray-300,
        html:not(.dark) .text-gray-400 {
            @apply  text-gray-700;
        }

        html:not(.dark) .hover\:bg-dark-200:hover,
        html:not(.dark) .hover\:bg-gray-700:hover {
            @apply  hover:bg-gray-200;
        }

        html:not(.dark) .bg-dark-500 {
            @apply  bg-gray-100;
        }
    </style>

    <title>Jarvis Trade Pro | CFD Trading — Trading on Stocks, Gold, Oil, Indices</title>
    <link rel="manifest" href="index.php">
    <meta name="theme-color" content="#111827">    <meta property="x-session-id" content="ghJjEOrjZ3KUPun1UQksVUbvK88y21dgIhKtb8GT">
    <meta property="og:site_name" content="Jarvis Trade Pro">
    <meta property="og:description" content="CFD Trading with Jarvis Trade Pro. Trading on Stocks, Gold, Oil, Indices with ultra-fast execution &amp; spreads from 0.0 pips. News, articles and training materials for experienced and novice traders.">
    <meta name="description" content="CFD Trading with Jarvis Trade Pro. Trading on Stocks, Gold, Oil, Indices with ultra-fast execution &amp; spreads from 0.0 pips. News, articles and training materials for experienced and novice traders.">
    <meta name="keywords" content="forex, CFDs, CFD, Bitcoin trading, crypto trading, online trading, Forex trading, Oil trading, Gold trading, trading indexes, shares trading, commodities trading, trading platform, Cryptocurrencies day trading">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CFD Trading — Trading on Stocks, Gold, Oil, Indices | Jarvis Trade Pro">
    <meta property="og:image" content="img/share.jpg">

    <!-- Favicon -->
    <link rel="shortcut icon" href="storage/app/public/photos/pJn9PS13POLAdzHoPqQK0XS0OXycTBtcumJyeBBE.png" type="image/x-icon">

    <!-- Preload key assets -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- jQuery (required for some components) -->
    <script src="code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript utilities -->
    <script>
        // Utility function for mobile menu
        document.addEventListener('alpine:init', () => {
            Alpine.store('navigation', {
                open: false,
                toggle() {
                    this.open = !this.open;
                },
                close() {
                    this.open = false;
                }
            });

            // Theme toggler
            Alpine.store('darkMode', {
                on: true,
                toggle() {
                    this.on = !this.on;
                    if (this.on) {
                        document.documentElement.classList.add('dark');
                        document.body.classList.add('bg-gray-900');
                        document.body.classList.remove('bg-gray-100');
                    } else {
                        document.documentElement.classList.remove('dark');
                        document.body.classList.remove('bg-gray-900');
                        document.body.classList.add('bg-gray-100');
                    }
                    localStorage.setItem('darkMode', this.on ? 'dark' : 'light');
                }
            });
        });

        // Initialize theme from local storage
        document.addEventListener('DOMContentLoaded', () => {
            const theme = localStorage.getItem('darkMode');
            if (theme === 'light') {
                document.documentElement.classList.remove('dark');
                document.body.classList.remove('bg-gray-900');
                document.body.classList.add('bg-gray-100');
                if (window.Alpine) {
                    Alpine.store('darkMode').on = false;
                }
            }
        });
    </script>
</head>

<body class="antialiased text-gray-200 bg-gray-900 font-sans min-h-screen flex flex-col">
    <!-- Accessibility Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:bg-blue-700 focus:text-white focus:fixed focus:px-4 focus:py-2 focus:top-2 focus:left-2 focus:z-50">
        Skip to main content
    </a>

    <!-- Header -->
<header class="bg-gray-900 border-b border-gray-800 relative z-50">
    <!-- Top Navigation Bar -->
    <div x-data="{ mobileMenuOpen: false }" class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="index.php" class="flex items-center">
                        <img class="h-8 w-auto" src="logo.png" alt="Jarvis Trade Pro">
                    </a>
                </div>

                <!-- Main Navigation - Desktop -->
                <nav class="hidden md:flex space-x-8">
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" class="group inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-200 hover:text-white focus:outline-none">
                            <span>Trading</span>
                            <svg class="ml-2 h-4 w-4 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-dark-300 ring-1 ring-black ring-opacity-5 z-50" style="display: none;">
                            <a href="cryptocurrencies.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Cryptocurrencies</a>
                            <a href="forex.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Forex</a>
                            <a href="shares.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Shares</a>
                            <a href="indices.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Indices</a>
                            <a href="etfs.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">ETFs</a>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" class="group inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-200 hover:text-white focus:outline-none">
                            <span>System</span>
                            <svg class="ml-2 h-4 w-4 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-dark-300 ring-1 ring-black ring-opacity-5 z-50" style="display: none;">
                            <a href="trade.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Trade</a>
                            <a href="copy.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Copy Trading</a>
                            <a href="automate.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Automated Trading</a>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" class="group inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-200 hover:text-white focus:outline-none">
                            <span>Company</span>
                            <svg class="ml-2 h-4 w-4 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-dark-300 ring-1 ring-black ring-opacity-5 z-50" style="display: none;">
                            <a href="about.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">About Us</a>
                            <a href="why-us.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Why Us</a>
                            <a href="faq.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">FAQ</a>
                            <a href="regulation.php" class="block px-4 py-2 text-sm text-gray-200 hover:bg-dark-200">Legal & Regulation</a>
                        </div>
                    </div>

                    <a href="for-traders.php" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-200 hover:text-white">Education</a>
                    <a href="contacts.php" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-200 hover:text-white">Contact</a>
                </nav>

                <!-- Right Navigation -->
                <div class="hidden md:flex items-center">
                    <div class="flex space-x-1 mr-4">
                        <a href="#" class="text-gray-400 hover:text-gray-200 p-1" aria-label="Desktop Version">
                            <i class="fas fa-desktop"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-200 p-1" aria-label="Windows App">
                            <i class="fab fa-windows"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-200 p-1" aria-label="Android App">
                            <i class="fab fa-android"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-200 p-1" aria-label="iOS App">
                            <i class="fab fa-apple"></i>
                        </a>
                    </div>

                    <!-- Language Selector (Desktop) -->
                 

                    <!-- Dark/Light Mode Toggle -->
                    <!--<button-->
                    <!--    x-data-->
                    <!--    @click="$store.darkMode.toggle()"-->
                    <!--    class="p-2 text-gray-400 hover:text-gray-200 mr-4 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600"-->
                    <!--    aria-label="Toggle dark/light mode"-->
                    <!-->-->
                    <!--    <i x-show="$store.darkMode.on" class="fas fa-sun"></i>-->
                    <!--    <i x-show="!$store.darkMode.on" class="fas fa-moon"></i>-->
                    <!--</button>-->

                    <div class="flex items-center space-x-4">
                        <a href="login.php" class="text-gray-200 hover:text-white flex items-center">
                            <i class="fas fa-lock mr-1"></i>
                            <span>Log in</span>
                        </a>
                        <a href="register.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                            Sign up
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button and theme toggle -->
                <div class="flex md:hidden items-center space-x-2">
                    <!-- Mobile Theme Toggle -->
                    <!--<button-->
                    <!--    x-data-->
                    <!--    @click="$store.darkMode.toggle()"-->
                    <!--    class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"-->
                    <!--    aria-label="Toggle dark/light mode"-->
                    <!-->-->
                    <!--    <i x-show="$store.darkMode.on" class="fas fa-sun text-lg"></i>-->
                    <!--    <i x-show="!$store.darkMode.on" class="fas fa-moon text-lg"></i>-->
                    <!--</button>-->

                    <!-- Mobile Menu Toggle -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" class="md:hidden" id="mobile-menu" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Mobile Navigation -->
                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-200 hover:bg-gray-700">
                        <span>Trading</span>
                        <svg class="h-4 w-4 text-gray-400" :class="{'transform rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="pl-4">
                        <a href="cryptocurrencies.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Cryptocurrencies</a>
                        <a href="forex.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Forex</a>
                        <a href="shares.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Shares</a>
                        <a href="indices.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Indices</a>
                        <a href="etfs.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">ETFs</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-200 hover:bg-gray-700">
                        <span>System</span>
                        <svg class="h-4 w-4 text-gray-400" :class="{'transform rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="pl-4">
                        <a href="trade.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Trade</a>
                        <a href="copy.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Copy Trading</a>
                        <a href="automate.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Automated Trading</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="py-1">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-2 text-sm text-gray-200 hover:bg-gray-700">
                        <span>Company</span>
                        <svg class="h-4 w-4 text-gray-400" :class="{'transform rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" class="pl-4">
                        <a href="about.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">About Us</a>
                        <a href="why-us.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Why Us</a>
                        <a href="faq.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">FAQ</a>
                        <a href="regulation.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Legal & Regulation</a>
                    </div>
                </div>

                <a href="for-traders.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Education</a>
                <a href="contacts.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Contact</a>

                <!-- Language Selector (Mobile) -->
               
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center justify-between px-4">
                        <div class="flex items-center space-x-3">
                            <a href="login.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                <i class="fas fa-lock mr-1"></i> Log in
                            </a>
                            <a href="register.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                Sign up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


    <!--  sub menu -->

<!-- Market Ticker Widget -->
<div class="bg-dark-300 border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-1">
            <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener nofollow" target="_blank"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                "symbols": [
                    {
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500 Index"
                    },
                    {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100 Cash CFD"
                    },
                    {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR to USD"
                    },
                    {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                    },
                    {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                    }
                ],
                "colorTheme": "dark",
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": false,
                "showSymbolLogo": true,
                "displayMode": "adaptive"
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
        </div>
    </div>
</div>

<!-- Main Content Area -->
<main id="main-content" class="flex-grow">
 