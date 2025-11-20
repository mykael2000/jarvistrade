<?php 
include("function.php");

?>

<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('theme') === 'light' ? false : true }"
      :class="{ 'dark': darkMode }"
      class="dark bg-gray-900">
<head>
    <meta charset="UTF-8">
    <title>Account Dashboard</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="" rel="icon" type="image/x-icon" />
    <!-- Inter Font -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Enable dark mode class strategy -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                        },
                        'glass': 'rgba(255, 255, 255, 0.05)',
                    },
                    backdropBlur: {
                        'xs': '2px',
                    },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'gradient-y': 'gradient-y 15s ease infinite',
                        'gradient-xy': 'gradient-xy 15s ease infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        'gradient-y': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'center top'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'center center'
                            }
                        },
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'gradient-xy': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // Set dark mode as default if no preference is stored
        if (!localStorage.getItem('theme')) {
            localStorage.setItem('theme', 'dark');
            document.documentElement.classList.add('dark');
        }

        document.addEventListener('alpine:init', () => {
            Alpine.store('theme', {
                init() {
                    // Default to dark if no preference is set
                    this.darkMode = localStorage.getItem('theme') === 'dark' || !localStorage.getItem('theme');
                    this.updateTheme();
                },
                darkMode: true, // Set default to true
                toggle() {
                    this.darkMode = !this.darkMode;
                    this.updateTheme();
                },
                updateTheme() {
                    localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                    document.documentElement.classList.toggle('dark', this.darkMode);
                }
            });
        });
    </script>
<script src="https://unpkg.com/lucide@latest"></script>
<!-- Tailwind CDN -->


</>
<body x-data="{ darkMode: localStorage.theme === 'dark' || !localStorage.theme, sidebarOpen: false }"
      :class="{ 'dark': darkMode }"
      class="dark text-gray-100 bg-gray-900" x-cloak>
      <style>
       body {
    overflow-x: hidden;
  }

  [x-cloak] {
    display: none !important;
  }
        </style>
<!-- Professional Trading Navbar -->
<nav x-data="{
  open: false,
  darkMode: localStorage.theme === 'dark' || !localStorage.theme,
  notificationOpen: false,
  quickActionsOpen: false
}"
     class="bg-white/98 dark:bg-gray-900/98 backdrop-blur-xl border-b border-gray-200/80 dark:border-gray-700/80 sticky top-0 z-50 shadow-sm dark:shadow-gray-900/20" x-cloak>

  <!-- Main Navigation Container -->
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">

      <!-- Left Section: Logo & Quick Market Info -->
      <div class="flex items-center space-x-4">
        <!-- Logo -->
        <a href="index.php" class="flex items-center space-x-3 group">
          <img src="../logo.png" class="h-8 w-auto" alt="Logo" />
          <div class="hidden sm:block">
            <span class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
              Jarvis Trade Pro
            </span>
            <div class="text-xs text-gray-500 dark:text-gray-400 font-medium">
              Professional Trading
            </div>
          </div>
        </a>

        <!-- Live Market Ticker (Hidden on small screens) -->
        <div class="hidden lg:flex items-center space-x-4 ml-8 pl-8 border-l border-gray-200 dark:border-gray-700"
             x-data="cryptoPrices()" x-init="fetchPrices()">
          <div class="flex items-center space-x-2">
            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            <span class="text-xs font-medium text-gray-600 dark:text-gray-300">LIVE</span>
          </div>
          <div class="text-sm">
            <span class="text-gray-500 dark:text-gray-400">BTC:</span>
            <span class="font-mono ml-1"
                  :class="btcChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                  x-text="'$' + (btcPrice ? btcPrice.toLocaleString() : '...')"></span>
          </div>
          <div class="text-sm">
            <span class="text-gray-500 dark:text-gray-400">ETH:</span>
            <span class="font-mono ml-1"
                  :class="ethChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                  x-text="'$' + (ethPrice ? ethPrice.toLocaleString() : '...')"></span>
          </div>
        </div>
      </div>

      <!-- Center Section: Account Balance (Desktop) -->
      <div class="hidden md:flex items-center space-x-6">
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 px-4 py-2 rounded-lg border border-blue-100 dark:border-blue-800">
          <div class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Account Balance</div>
          <div class="text-lg font-bold text-gray-900 dark:text-white">
            $<?php  echo number_format($user['total_balance'],2,'.',','); ?>
          </div>
        </div>
      </div>

      <!-- Right Section: Actions & User -->
      <div class="flex items-center space-x-2">

        <!-- Quick Actions Dropdown (Desktop) -->
        <div class="hidden md:block relative" x-data="{ quickActionsOpen: false }">
          <button @click="quickActionsOpen = !quickActionsOpen"
                  class="flex items-center space-x-2 px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
            <i data-lucide="zap" class="w-4 h-4"></i>
            <span>Quick Trade</span>
            <i data-lucide="chevron-down" class="w-4 h-4" :class="quickActionsOpen ? 'rotate-180' : ''"></i>
          </button>

          <div x-show="quickActionsOpen" @click.away="quickActionsOpen = false"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               class="absolute right-0 mt-2 w-56 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-20" x-cloak>
            <div class="p-2">
              <a href="deposits.php" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="plus-circle" class="w-4 h-4 mr-3 text-green-500"></i>
                Deposit Funds
              </a>
              <a href="withdrawals.php" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="minus-circle" class="w-4 h-4 mr-3 text-red-500"></i>
                Withdraw
              </a>
              <a href="trade.php" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="trending-up" class="w-4 h-4 mr-3 text-blue-500"></i>
                Trade Markets
              </a>
            </div>
          </div>
        </div>

        <!-- Notifications -->
        <div class="relative" x-data="{ notificationOpen: false }">
          <button @click="notificationOpen = !notificationOpen"
                  class="relative p-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
            <i data-lucide="bell" class="w-5 h-5"></i>
                                        <span class="absolute -top-1 -right-1 flex items-center justify-center min-w-[18px] h-[18px] text-xs font-medium text-white bg-red-500 rounded-full px-1 border-2 border-white dark:border-gray-900">
                    26
                </span>
                      </button>

          <div x-show="notificationOpen" @click.away="notificationOpen = false"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               class="absolute right-0 sm:right-0 sm:left-auto left-1/2 sm:transform-none transform -translate-x-1/2 mt-2 w-80 max-w-[90vw] bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-20" x-cloak>
            <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
              <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                Notifications
                                  <span class="ml-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-500 rounded-full">
                    26
                  </span>
                              </h3>
              
            </div>

            <div class="max-h-[60vh] overflow-y-auto">
              
                              <a href="https://jarvistradepro.com/notifications/1493" class="block border-b border-gray-100 dark:border-gray-700 last:border-0 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                  <div class="px-4 py-3 bg-blue-50 dark:bg-blue-900/10">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 mt-0.5">
                        <span class="flex h-8 w-8 rounded-full items-center justify-center bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-500">
                          <i data-lucide="info" class="w-4 h-4"></i>
                        </span>
                      </div>
                      <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white font-semibold">
                          New Login
                        </p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                          New login detected from IP: 102.91.78.122 on WebKit - Chrome at 2025-11-13 23:53:31
                        </p>
                        <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                          1 second ago
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
                              <a href="https://jarvistradepro.com/notifications/1491" class="block border-b border-gray-100 dark:border-gray-700 last:border-0 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                  <div class="px-4 py-3 bg-blue-50 dark:bg-blue-900/10">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 mt-0.5">
                        <span class="flex h-8 w-8 rounded-full items-center justify-center bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-500">
                          <i data-lucide="info" class="w-4 h-4"></i>
                        </span>
                      </div>
                      <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white font-semibold">
                          New Login
                        </p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                          New login detected from IP: 41.217.86.54 on iPhone - Safari at 2025-11-13 23:53:00
                        </p>
                        <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                          31 seconds ago
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
                              <a href="https://jarvistradepro.com/notifications/1291" class="block border-b border-gray-100 dark:border-gray-700 last:border-0 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                  <div class="px-4 py-3 bg-blue-50 dark:bg-blue-900/10">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 mt-0.5">
                        <span class="flex h-8 w-8 rounded-full items-center justify-center bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-500">
                          <i data-lucide="info" class="w-4 h-4"></i>
                        </span>
                      </div>
                      <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white font-semibold">
                          Investment Plan Activated
                        </p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                          Your investment in Premier investment plan for $999 has been activated.
                        </p>
                        <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                          1 week ago
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
                              <a href="notifications/1289" class="block border-b border-gray-100 dark:border-gray-700 last:border-0 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                  <div class="px-4 py-3 bg-blue-50 dark:bg-blue-900/10">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 mt-0.5">
                        <span class="flex h-8 w-8 rounded-full items-center justify-center bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-500">
                          <i data-lucide="info" class="w-4 h-4"></i>
                        </span>
                      </div>
                      <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white font-semibold">
                          Investment Plan Activated
                        </p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                          Your investment in Standard plan plan for $1499 has been activated.
                        </p>
                        <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                          1 week ago
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
                              <a href="notifications/1287" class="block border-b border-gray-100 dark:border-gray-700 last:border-0 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                  <div class="px-4 py-3 bg-blue-50 dark:bg-blue-900/10">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 mt-0.5">
                        <span class="flex h-8 w-8 rounded-full items-center justify-center bg-blue-100 text-blue-600 dark:bg-blue-900/20 dark:text-blue-500">
                          <i data-lucide="info" class="w-4 h-4"></i>
                        </span>
                      </div>
                      <div class="ml-3 w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white font-semibold">
                          Investment Plan Activated
                        </p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                          Your investment in Premier investment plan for $499 has been activated.
                        </p>
                        <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                          1 week ago
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
                          </div>

                          <div class="px-4 py-3 border-t border-gray-200 dark:border-gray-700 text-center">
                <a href="notifications.php" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">View all notifications</a>
              </div>
                      </div>
        </div>

        <!-- Dark Mode Toggle -->
        <button
          x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }"
          @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', darkMode)"
          class="p-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200"
          :aria-pressed="darkMode">
          <i data-lucide="sun" x-show="!darkMode" class="w-5 h-5"></i>
          <i data-lucide="moon" x-show="darkMode" class="w-5 h-5"></i>
        </button>

        <!-- Language Translator (Desktop) -->
       

        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ dropdownOpen: false }">
          <button @click="dropdownOpen = !dropdownOpen"
                  class="flex items-center space-x-3 px-2 py-2 text-sm rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 focus:outline-none">
            <div class="flex items-center space-x-2">
              <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white text-sm font-medium">
                E
              </div>
              <div class="hidden sm:block text-left">
                <div class="text-sm font-medium text-gray-900 dark:text-white truncate max-w-[120px]">
                  <?php  echo $user['username']; ?>
                </div>
                <div class="text-xs text-gray-500 dark:text-gray-400">
                  Trading Account
                </div>
              </div>
            </div>
            <i data-lucide="chevron-down" class="w-4 h-4 text-gray-400" :class="dropdownOpen ? 'rotate-180' : ''"></i>
          </button>

          <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-20" x-cloak>

            <!-- User Info Header -->
            <div class="p-4 border-b border-gray-200 dark:border-gray-700">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white text-lg font-medium">
                  E
                </div>
                <div>
                  <div class="text-sm font-medium text-gray-900 dark:text-white">
                    <?php  echo $user['username']; ?>
                  </div>
                  <div class="text-xs text-gray-500 dark:text-gray-400">
                    $<?php  echo number_format($user['total_balance'],2,'.',','); ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- Menu Items -->
            <div class="p-2">
              <a href="account-settings.php" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="user" class="w-4 h-4 mr-3"></i>
                Profile Settings
              </a>
              <a href="accounthistory.php" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="receipt" class="w-4 h-4 mr-3"></i>
                Account History
              </a>
              <a href="support.php" class="flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-md">
                <i data-lucide="help-circle" class="w-4 h-4 mr-3"></i>
                Support Center
              </a>
              <div class="border-t border-gray-200 dark:border-gray-600 my-2"></div>
              
                
                <a href="logout.php" class="w-full flex items-center px-3 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-md">
                  <i data-lucide="log-out" class="w-4 h-4 mr-3"></i>
                  Sign Out
                </a>
             
            </div>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="sidebarOpen = !sidebarOpen"
                class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all duration-200">
          <i data-lucide="menu" x-show="!sidebarOpen" class="w-5 h-5"></i>
          <i data-lucide="x" x-show="sidebarOpen" class="w-5 h-5"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Market Ticker -->
  <div class="lg:hidden bg-gray-50 dark:bg-gray-800/50 border-t border-gray-200 dark:border-gray-700 px-4 py-2"
       x-data="cryptoPrices()" x-init="fetchPrices()">
    <div class="flex items-center justify-between text-xs">
      <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-1">
          <div class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></div>
          <span class="text-gray-600 dark:text-gray-400">LIVE</span>
        </div>
        <div>
          <span class="text-gray-500 dark:text-gray-400">BTC:</span>
          <span class="font-mono ml-1"
                :class="btcChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                x-text="'$' + (btcPrice ? btcPrice.toLocaleString() : '...')"></span>
        </div>
        <div>
          <span class="text-gray-500 dark:text-gray-400">ETH:</span>
          <span class="font-mono ml-1"
                :class="ethChange >= 0 ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                x-text="'$' + (ethPrice ? ethPrice.toLocaleString() : '...')"></span>
        </div>
      </div>
      <div class="md:hidden">
        <div class="text-gray-500 dark:text-gray-400">Balance:</div>
        <div class="font-semibold text-gray-900 dark:text-white">
          $<?php  echo number_format($user['total_balance'],2,'.',','); ?>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Sidebar Toggle Wrapper -->
<div class="flex min-h-screen bg-gray-900" x-cloak>

  <!-- Sidebar -->
<aside x-cloak
  :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
  class="fixed z-50 md:z-40 top-0 left-0 w-72 h-full bg-white dark:bg-gray-900 shadow-xl transform transition-transform duration-300 ease-in-out md:translate-x-0 overflow-y-auto">

    <!-- User Profile Section -->
    <div class="relative p-4 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center gap-4">
            <div class="relative">

<div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 text-lg font-medium mx-auto mb-3">
    E
</div>
                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white dark:border-gray-900"></div>
            </div>
            <div class="flex-1 min-w-0">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                    <?php  echo $user['username']; ?>
                </h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                    Account Balance: $<?php  echo number_format($user['total_balance'],2,'.',','); ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Live Market Prices -->
    <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20" x-cloak>
        <div class="flex items-center justify-between mb-3">
            <h3 class="text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase">Live Market</h3>
            <span class="flex items-center text-xs text-green-600 dark:text-green-400">
                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>
                <span class="font-medium">LIVE</span>
            </span>
        </div>
        <div class="space-y-2">
            <coingecko-coin-price-marquee-widget
                coin-ids="bitcoin,ethereum,eos,ripple,litecoin"
                currency="usd"
                background-color="transparent"
                locale="en"
                font-color="#333">
            </coingecko-coin-price-marquee-widget>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="p-4 space-y-6 text-sm pb-20" x-cloak>
        <!-- Overview Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                <span>Overview</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="dashboard.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 bg-blue-50 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 font-medium">
                        <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="accounthistory.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="receipt" class="w-5 h-5 mr-3"></i>
                        Account Statement
                    </a>
                </li>
            </ul>
        </div>

        <!-- Portfolio & Investments Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="briefcase" class="w-4 h-4"></i>
                <span>Portfolio & Investments</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="buy-plan.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="target" class="w-5 h-5 mr-3"></i>
                        Investment Plans
                    </a>
                </li>
                <li>
                    <a href="all.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="pie-chart" class="w-5 h-5 mr-3"></i>
                        My Portfolio
                    </a>
                </li>
                <li>
                    <a href="tradinghistory.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="activity" class="w-5 h-5 mr-3"></i>
                        Performance History
                    </a>
                </li>
            </ul>
        </div>

        <!-- Trading & Markets Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="trending-up" class="w-4 h-4"></i>
                <span>Trading & Markets</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="trade.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="candlestick-chart" class="w-5 h-5 mr-3"></i>
                        Live Markets
                        <span class="ml-auto flex items-center px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-green-500 to-green-600 rounded-full">
                            <div class="w-1.5 h-1.5 bg-white rounded-full animate-pulse mr-1.5"></div>
                            Live
                        </span>
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Real-time market trading
                        </div>
                    </a>
                </li>
                <li>
                    <a href="copytrade.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="users-2" class="w-5 h-5 mr-3"></i>
                        Copy Trading
                        <span class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-purple-500 to-purple-600 rounded-full">Pro</span>
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Follow expert traders
                        </div>
                    </a>
                </li>
                <li>
                    <a href="bot-trading.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="bot" class="w-5 h-5 mr-3"></i>
                        AI Trading Bots
                        <span class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-full">AI</span>
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Automated trading algorithms
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Trading Signals Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="radio" class="w-4 h-4"></i>
                <span>Market Intelligence</span>
            </div>
            
            <ul class="space-y-1">
                <!---->
                <li>
                    <a href="signal.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="zap" class="w-5 h-5 mr-3"></i>
                        Premium Signals
                        <span class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-yellow-500 to-orange-600 rounded-full">Premium</span>
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Expert trading insights
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Wallet & Funds Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="wallet" class="w-4 h-4"></i>
                <span>Wallet & Funds</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="deposits.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="plus-circle" class="w-5 h-5 mr-3"></i>
                        Deposit Funds
                    </a>
                </li>
                <li>
                    <a href="withdrawals.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="minus-circle" class="w-5 h-5 mr-3"></i>
                        Withdraw Funds
                    </a>
                </li>
                <li>
                    <a href="transfer-funds.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="arrow-left-right" class="w-5 h-5 mr-3"></i>
                        Internal Transfer
                    </a>
                </li>
                
            </ul>
        </div>

        <!-- Credit & Financing Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="credit-card" class="w-4 h-4"></i>
                <span>Credit & Financing</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="loan.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="file-plus" class="w-5 h-5 mr-3"></i>
                        Apply for Credit
                        <span class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-green-500 to-green-600 rounded-full">Fast</span>
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Apply for loans and credit facilities
                        </div>
                    </a>
                </li>
                <li>
                    <a href="viewloan.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="file-text" class="w-5 h-5 mr-3"></i>
                        Credit History
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            View your loan applications and status
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Account Management Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="user-circle" class="w-4 h-4"></i>
                <span>Account Management</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="account-settings.php"
                       class="flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="user" class="w-5 h-5 mr-3"></i>
                        Profile Settings
                    </a>
                </li>
                                <li x-data="{ kycOpen: false }" x-cloak>
                                            <!-- KYC Dropdown -->
                        <div class="relative">
                            <button @click="kycOpen = !kycOpen"
                                    class="flex items-center w-full px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-200 ">
                                <i data-lucide="shield-alert" class="w-5 h-5 mr-3"></i>
                                <span class="flex-1 text-left">Identity Verification</span>
                                <i data-lucide="chevron-down"
                                   :class="kycOpen ? 'rotate-180' : 'rotate-0'"
                                   class="w-4 h-4 transition-transform duration-200"></i>
                            </button>

                            <!-- Dropdown Content -->
                            <div x-show="kycOpen"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-2"
                                 class="mt-2 ml-8 p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700 shadow-sm" x-cloak>

                                <h4 class="text-sm font-medium text-gray-900 dark:text-white mb-3">
                                    Identity Verification
                                </h4>

                                                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                        Complete your identity verification to unlock full trading features
                                    </p>
                                    <a href="verify-account"
                                       class="inline-flex items-center gap-2 px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                                        <i data-lucide="shield-check" class="w-4 h-4"></i>
                                        <span>Verify Now</span>
                                    </a>
                                                            </div>
                        </div>
                                    </li>
                            </ul>
        </div>

        <!-- Growth & Referrals Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="trending-up" class="w-4 h-4"></i>
                <span>Growth & Rewards</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="referuser.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                        Referral Program
                        <span class="ml-auto px-2 py-0.5 text-xs font-medium text-white bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-full">5%</span>
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Earn 5% commission on referrals
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Support & Help Section -->
        <div class="space-y-2">
            <div class="flex items-center gap-2 px-2 mt-6 text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase">
                <i data-lucide="help-circle" class="w-4 h-4"></i>
                <span>Support & Help</span>
            </div>
            <ul class="space-y-1">
                <li>
                    <a href="support.php"
                       class="group relative flex items-center px-3 py-2 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/50 transition-colors duration-150 ">
                        <i data-lucide="headphones" class="w-5 h-5 mr-3"></i>
                        Support Center
                        <div class="hidden group-hover:block absolute left-full ml-2 px-2 py-1 bg-gray-900 text-xs text-white rounded whitespace-nowrap">
                            Get help from our support team
                        </div>
                    </a>
                </li>
            </ul>
        </div>

            <!-- Account Actions -->
            <div class="mt-6 p-4 border-t border-gray-200 dark:border-gray-700">
                <!-- Language Translator (Mobile/Sidebar) -->
                
                     <a href="logout.php"
                            class="flex items-center w-full px-3 py-2 text-red-600 dark:text-red-400 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/50 transition-colors duration-150">
                        <i data-lucide="log-out" class="w-5 h-5 mr-3"></i>
                        <span>Sign Out</span>
                    </a>
                </form>
            </div>
        </nav>
    </aside>
