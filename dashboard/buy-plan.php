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
    <!-- Main Content Container -->
<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="mb-8">
        <!-- Breadcrumb Navigation -->
        <nav class="flex mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="https://jarvistradepro.com/dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Investment Plans</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Page Title with Animation -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Investment Plans</h1>
                <p class="text-gray-600 dark:text-gray-300">Upgrade your account with our high-yield investment opportunities</p>
            </div>
            <div class="mt-4 md:mt-0">
                <span class="inline-flex items-center px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 rounded-full text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    Grow Your Portfolio
                </span>
            </div>
        </div>
    </div>

    <div>
    </div>
    
    <!-- Plans Grid -->
    <div x-data="{ selectedPlan: null }" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <!-- Plan Card -->
            <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700"
                 :class="{'ring-4 ring-blue-500 dark:ring-blue-600': selectedPlan === 0}">
                
                <!-- ROI Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd" />
                        </svg>
                        150% ROI
                    </span>
                </div>
                
                <!-- Card Header with Gradient -->
                <div class="pt-8 px-6 pb-6 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Premier investment</h3>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full"></div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                        $499
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">minimum</span>
                    </div>
                </div>
                
                <!-- Plan Features -->
                <div class="p-6">
                    <ul class="space-y-4">
                        <!-- Minimum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Min Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$500</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Maximum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Max Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$1,000</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- ROI Details -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Return Rate:</span> 
                                    <span class="text-green-600 dark:text-green-400">150% Daily</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Duration -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Duration:</span> 
                                    <span class="text-gray-900 dark:text-white">3 Days</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- Investment Form -->
                    <form method="post" action="deposits.php?plan=premier" class="mt-6">
                        <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                        <div x-data="{ amount: '499' }" class="space-y-4">
                            <!-- Amount Input with Animation -->
                            <div>
                                <label for="amount-0" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Investment Amount ($)
                                </label>
                                
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 dark:text-gray-400">$</span>
                                    </span>
                                    <input 
                                        type="number" 
                                        id="amount-0"
                                        name="iamount" 
                                        min="499" 
                                        max="999" 
                                        x-model="amount"
                                        placeholder="Enter amount" 
                                        class="pl-8 block w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 py-3 px-4 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors duration-200"
                                        @click="selectedPlan = 0"
                                    >
                                </div>
                                
                                <!-- Range Input -->
                                <div class="mt-4 px-1">
                                    <input 
                                        type="range" 
                                        min="499" 
                                        max="999" 
                                        x-model="amount"
                                        class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600 dark:accent-blue-500"
                                    >
                                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        <span>Min: $499</span>
                                        <span>Max: $999</span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 text-center">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Potential Return: 
                                        <span class="text-green-600 dark:text-green-400 font-medium">
                                            $<span x-text="(amount * 150 / 100).toFixed(2)"></span>
                                        </span>
                                        <span x-text="' ' + 'Daily'"></span>
                                    </p>
                                </div>
                            </div>
                            
                            <input type="hidden" name="duration" value="3 Days">
                            <input type="hidden" name="id" value="1">
                            
                            <!-- Submit Button with Animation -->
                            <button 
                                type="submit" 
                                class="w-full relative py-3 px-6 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium shadow-md hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-900"
                                @mouseenter="selectedPlan = 0"
                            >
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                    Join Investment Plan
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                    <!-- Plan Card -->
            <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700"
                 :class="{'ring-4 ring-blue-500 dark:ring-blue-600': selectedPlan === 1}">
                
                <!-- ROI Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd" />
                        </svg>
                        27% ROI
                    </span>
                </div>
                
                <!-- Card Header with Gradient -->
                <div class="pt-8 px-6 pb-6 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Beginner Plan</h3>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full"></div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                        $199
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">minimum</span>
                    </div>
                </div>
                
                <!-- Plan Features -->
                <div class="p-6">
                    <ul class="space-y-4">
                        <!-- Minimum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Min Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$199</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Maximum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Max Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$500</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- ROI Details -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Return Rate:</span> 
                                    <span class="text-green-600 dark:text-green-400">27% Every 30 Minutes</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Duration -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Duration:</span> 
                                    <span class="text-gray-900 dark:text-white">24Hours</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- Investment Form -->
                    <form method="post" action="deposits.php?plan=beginner" class="mt-6">
                        <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                        <div x-data="{ amount: '199' }" class="space-y-4">
                            <!-- Amount Input with Animation -->
                            <div>
                                <label for="amount-1" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Investment Amount ($)
                                </label>
                                
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 dark:text-gray-400">$</span>
                                    </span>
                                    <input 
                                        type="number" 
                                        id="amount-1"
                                        name="iamount" 
                                        min="199" 
                                        max="500" 
                                        x-model="amount"
                                        placeholder="Enter amount" 
                                        class="pl-8 block w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 py-3 px-4 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors duration-200"
                                        @click="selectedPlan = 1"
                                    >
                                </div>
                                
                                <!-- Range Input -->
                                <div class="mt-4 px-1">
                                    <input 
                                        type="range" 
                                        min="199" 
                                        max="500" 
                                        x-model="amount"
                                        class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600 dark:accent-blue-500"
                                    >
                                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        <span>Min: $199</span>
                                        <span>Max: $500</span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 text-center">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Potential Return: 
                                        <span class="text-green-600 dark:text-green-400 font-medium">
                                            $<span x-text="(amount * 27 / 100).toFixed(2)"></span>
                                        </span>
                                        <span x-text="' ' + 'Every 30 Minutes'"></span>
                                    </p>
                                </div>
                            </div>
                            
                            <input type="hidden" name="duration" value="24Hours">
                            <input type="hidden" name="id" value="10">
                            
                            <!-- Submit Button with Animation -->
                            <button 
                                type="submit" 
                                class="w-full relative py-3 px-6 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium shadow-md hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-900"
                                @mouseenter="selectedPlan = 1"
                            >
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                    Join Investment Plan
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                    <!-- Plan Card -->
            <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700"
                 :class="{'ring-4 ring-blue-500 dark:ring-blue-600': selectedPlan === 2}">
                
                <!-- ROI Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd" />
                        </svg>
                        170% ROI
                    </span>
                </div>
                
                <!-- Card Header with Gradient -->
                <div class="pt-8 px-6 pb-6 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Standard plan</h3>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full"></div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                        $1,499
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">minimum</span>
                    </div>
                </div>
                
                <!-- Plan Features -->
                <div class="p-6">
                    <ul class="space-y-4">
                        <!-- Minimum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Min Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$1,499</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Maximum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Max Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$2,999</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- ROI Details -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Return Rate:</span> 
                                    <span class="text-green-600 dark:text-green-400">170% Daily</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Duration -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Duration:</span> 
                                    <span class="text-gray-900 dark:text-white">7 Days</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- Investment Form -->
                    <form method="post" action="deposits.php?plan=standard" class="mt-6">
                        <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                        <div x-data="{ amount: '1499' }" class="space-y-4">
                            <!-- Amount Input with Animation -->
                            <div>
                                <label for="amount-2" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Investment Amount ($)
                                </label>
                                
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 dark:text-gray-400">$</span>
                                    </span>
                                    <input 
                                        type="number" 
                                        id="amount-2"
                                        name="iamount" 
                                        min="1499" 
                                        max="2999" 
                                        x-model="amount"
                                        placeholder="Enter amount" 
                                        class="pl-8 block w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 py-3 px-4 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors duration-200"
                                        @click="selectedPlan = 2"
                                    >
                                </div>
                                
                                <!-- Range Input -->
                                <div class="mt-4 px-1">
                                    <input 
                                        type="range" 
                                        min="1499" 
                                        max="2999" 
                                        x-model="amount"
                                        class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600 dark:accent-blue-500"
                                    >
                                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        <span>Min: $1,499</span>
                                        <span>Max: $2,999</span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 text-center">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Potential Return: 
                                        <span class="text-green-600 dark:text-green-400 font-medium">
                                            $<span x-text="(amount * 170 / 100).toFixed(2)"></span>
                                        </span>
                                        <span x-text="' ' + 'Daily'"></span>
                                    </p>
                                </div>
                            </div>
                            
                            <input type="hidden" name="duration" value="7 Days">
                            <input type="hidden" name="id" value="11">
                            
                            <!-- Submit Button with Animation -->
                            <button 
                                type="submit" 
                                class="w-full relative py-3 px-6 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium shadow-md hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-900"
                                @mouseenter="selectedPlan = 2"
                            >
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                    Join Investment Plan
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                    <!-- Plan Card -->
            <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700"
                 :class="{'ring-4 ring-blue-500 dark:ring-blue-600': selectedPlan === 3}">
                
                <!-- ROI Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd" />
                        </svg>
                        170% ROI
                    </span>
                </div>
                
                <!-- Card Header with Gradient -->
                <div class="pt-8 px-6 pb-6 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Business plan</h3>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full"></div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                        $2,999
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">minimum</span>
                    </div>
                </div>
                
                <!-- Plan Features -->
                <div class="p-6">
                    <ul class="space-y-4">
                        <!-- Minimum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Min Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$2,999</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Maximum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Max Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$4,999</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- ROI Details -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Return Rate:</span> 
                                    <span class="text-green-600 dark:text-green-400">170% Daily</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Duration -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Duration:</span> 
                                    <span class="text-gray-900 dark:text-white">12 Days</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- Investment Form -->
                    <form method="post" action="deposits.php?plan=business" class="mt-6">
                        <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                        <div x-data="{ amount: '2999' }" class="space-y-4">
                            <!-- Amount Input with Animation -->
                            <div>
                                <label for="amount-3" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Investment Amount ($)
                                </label>
                                
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 dark:text-gray-400">$</span>
                                    </span>
                                    <input 
                                        type="number" 
                                        id="amount-3"
                                        name="iamount" 
                                        min="2999" 
                                        max="4999" 
                                        x-model="amount"
                                        placeholder="Enter amount" 
                                        class="pl-8 block w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 py-3 px-4 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors duration-200"
                                        @click="selectedPlan = 3"
                                    >
                                </div>
                                
                                <!-- Range Input -->
                                <div class="mt-4 px-1">
                                    <input 
                                        type="range" 
                                        min="2999" 
                                        max="4999" 
                                        x-model="amount"
                                        class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600 dark:accent-blue-500"
                                    >
                                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        <span>Min: $2,999</span>
                                        <span>Max: $4,999</span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 text-center">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Potential Return: 
                                        <span class="text-green-600 dark:text-green-400 font-medium">
                                            $<span x-text="(amount * 170 / 100).toFixed(2)"></span>
                                        </span>
                                        <span x-text="' ' + 'Daily'"></span>
                                    </p>
                                </div>
                            </div>
                            
                            <input type="hidden" name="duration" value="12 Days">
                            <input type="hidden" name="id" value="12">
                            
                            <!-- Submit Button with Animation -->
                            <button 
                                type="submit" 
                                class="w-full relative py-3 px-6 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium shadow-md hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-900"
                                @mouseenter="selectedPlan = 3"
                            >
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                    Join Investment Plan
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                    <!-- Plan Card -->
            <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700"
                 :class="{'ring-4 ring-blue-500 dark:ring-blue-600': selectedPlan === 4}">
                
                <!-- ROI Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586l3.293-3.293A1 1 0 0112 7z" clip-rule="evenodd" />
                        </svg>
                        250% ROI
                    </span>
                </div>
                
                <!-- Card Header with Gradient -->
                <div class="pt-8 px-6 pb-6 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Basic  Plan</h3>
                    <div class="flex items-center justify-center mb-4">
                        <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full"></div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">
                        $999
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">minimum</span>
                    </div>
                </div>
                
                <!-- Plan Features -->
                <div class="p-6">
                    <ul class="space-y-4">
                        <!-- Minimum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Min Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$999</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Maximum Amount -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Max Investment:</span> 
                                    <span class="text-gray-900 dark:text-white">$1,499</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- ROI Details -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Return Rate:</span> 
                                    <span class="text-green-600 dark:text-green-400">250% Daily</span>
                                </p>
                            </div>
                        </li>
                        
                        <!-- Duration -->
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 dark:text-gray-300">
                                    <span class="font-medium">Duration:</span> 
                                    <span class="text-gray-900 dark:text-white">5 Days</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- Investment Form -->
                    <form method="post" action="deposits.php?plan=basic" class="mt-6">
                        <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                        <div x-data="{ amount: '999' }" class="space-y-4">
                            <!-- Amount Input with Animation -->
                            <div>
                                <label for="amount-4" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Investment Amount ($)
                                </label>
                                
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 dark:text-gray-400">$</span>
                                    </span>
                                    <input 
                                        type="number" 
                                        id="amount-4"
                                        name="iamount" 
                                        min="999" 
                                        max="1499" 
                                        x-model="amount"
                                        placeholder="Enter amount" 
                                        class="pl-8 block w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 py-3 px-4 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 transition-colors duration-200"
                                        @click="selectedPlan = 4"
                                    >
                                </div>
                                
                                <!-- Range Input -->
                                <div class="mt-4 px-1">
                                    <input 
                                        type="range" 
                                        min="999" 
                                        max="1499" 
                                        x-model="amount"
                                        class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-600 dark:accent-blue-500"
                                    >
                                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        <span>Min: $999</span>
                                        <span>Max: $1,499</span>
                                    </div>
                                </div>
                                
                                <div class="mt-2 text-center">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Potential Return: 
                                        <span class="text-green-600 dark:text-green-400 font-medium">
                                            $<span x-text="(amount * 250 / 100).toFixed(2)"></span>
                                        </span>
                                        <span x-text="' ' + 'Daily'"></span>
                                    </p>
                                </div>
                            </div>
                            
                            <input type="hidden" name="duration" value="5 Days">
                            <input type="hidden" name="id" value="13">
                            
                            <!-- Submit Button with Animation -->
                            <button 
                                type="submit" 
                                class="w-full relative py-3 px-6 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium shadow-md hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-900"
                                @mouseenter="selectedPlan = 4"
                            >
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                    Join Investment Plan
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            </div>

    <!-- Investment Guide Section -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 mb-8 border border-gray-100 dark:border-gray-700">
        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Investment Guide
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-1">Choose your plan</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Select an investment plan that matches your financial goals and risk tolerance.</p>
                </div>
            </div>
            
            <div class="flex space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-1">Invest securely</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Your funds are securely managed with state-of-the-art investment strategies.</p>
                </div>
            </div>
            
            <div class="flex space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                        <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-1">Earn returns</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Watch your investment grow with competitive returns deposited directly to your account.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for No Plans -->
<div id="withdrawdisabled" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="noPlansModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-200 dark:border-gray-700">
            <div class="p-6">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-center text-gray-900 dark:text-white mb-2" id="noPlansModalTitle">No Plans Available</h3>
                <p class="text-gray-600 dark:text-gray-400 text-center mb-6">
                    There are currently no investment plans available. Please check back later.
                </p>
                <div class="flex justify-center">
                    <button type="button" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alpine.js Initialization -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('plans', () => ({
            init() {
                // Any initialization code can go here
            }
        }))
    })
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