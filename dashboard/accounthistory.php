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
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 p-3 sm:p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="mb-6 sm:mb-10">
            <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 mb-6">
                <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-2xl sm:rounded-3xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 flex items-center justify-center backdrop-blur-sm">
                    <i data-lucide="credit-card" class="w-6 h-6 sm:w-8 sm:h-8 text-blue-600 dark:text-blue-400"></i>
                </div>
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-light text-slate-800 dark:text-white mb-1 sm:mb-2">
                        Transaction History
                    </h1>
                    <p class="text-slate-500 dark:text-slate-400 font-light text-base sm:text-lg">
                        Monitor all your financial activities
                    </p>
                </div>
            </div>
        </div>

        <!-- Modern Glass Card -->
        <div class="bg-gray-900 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 border border-gray-700 shadow-xl floating-animation">
            <!-- Navigation Tabs -->
            <div x-data="{ activeTab: 'deposits' }" class="w-full">
                <!-- Mobile-First Tab Navigation -->
                <div class="flex flex-col sm:flex-row gap-2 p-2 mb-6 sm:mb-8 bg-gray-800 rounded-xl sm:rounded-2xl backdrop-blur-sm">
                    <button @click="activeTab = 'deposits'"
                            :class="activeTab === 'deposits' ? 'bg-gray-700 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-gray-700/50'"
                            class="w-full sm:w-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4 rounded-lg sm:rounded-xl font-medium transition-all duration-300 flex items-center justify-center sm:justify-start space-x-2 sm:space-x-3 transform hover:scale-105">
                        <i data-lucide="arrow-down-circle" class="w-4 h-4 sm:w-5 sm:h-5"></i>
                        <span class="text-sm sm:text-base">Deposits</span>
                    </button>
                    <button @click="activeTab = 'withdrawals'"
                            :class="activeTab === 'withdrawals' ? 'bg-gray-700 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-gray-700/50'"
                            class="w-full sm:w-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4 rounded-lg sm:rounded-xl font-medium transition-all duration-300 flex items-center justify-center sm:justify-start space-x-2 sm:space-x-3 transform hover:scale-105">
                        <i data-lucide="arrow-up-circle" class="w-4 h-4 sm:w-5 sm:h-5"></i>
                        <span class="text-sm sm:text-base">Withdrawals</span>
                    </button>
                    <button @click="activeTab = 'others'"
                            :class="activeTab === 'others' ? 'bg-gray-700 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-gray-700/50'"
                            class="w-full sm:w-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4 rounded-lg sm:rounded-xl font-medium transition-all duration-300 flex items-center justify-center sm:justify-start space-x-2 sm:space-x-3 transform hover:scale-105">
                        <i data-lucide="activity" class="w-4 h-4 sm:w-5 sm:h-5"></i>
                        <span class="text-sm sm:text-base">Others</span>
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="p-2 sm:p-4 lg:p-6">
                    <!-- Deposits Tab -->
                    <div x-show="activeTab === 'deposits'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="mb-4 sm:mb-6 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 lg:gap-6">
                            <div class="text-center lg:text-left">
                                <h3 class="text-xl sm:text-2xl font-light text-white mb-1 sm:mb-2">Deposit History</h3>
                                <p class="text-slate-400 font-light text-sm sm:text-base">Track your deposit transactions</p>
                            </div>
                            <div class="relative">
                                <input type="text" placeholder="Search deposits..." class="w-full lg:w-80 pl-10 sm:pl-12 pr-4 sm:pr-6 py-2 sm:py-3 bg-gray-800 border border-gray-600 rounded-xl sm:rounded-2xl text-slate-200 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-sm sm:text-base">
                                <i data-lucide="search" class="absolute left-3 sm:left-4 top-1/2 transform -translate-y-1/2 w-4 h-4 sm:w-5 sm:h-5 text-slate-400"></i>
                            </div>
                        </div>

                        <!-- Mobile Card View -->
                        <div class="block lg:hidden space-y-4">
                                <?php 
                                    $hisSQLd = "SELECT * FROM payments WHERE client_id = '$user_id' ORDER BY created_at DESC";
                                    $hisQueryd = mysqli_query($conn, $hisSQLd);

                                    if (mysqli_num_rows($hisQueryd) > 0) {
                                        while ($historyd = mysqli_fetch_assoc($hisQueryd)) {
                                            ?>
                                            <div class="bg-gray-800 rounded-xl p-4 border border-gray-700 hover:border-gray-600 transition-colors duration-300">
                                                <div class="flex items-start justify-between mb-3">
                                                    <div class="flex items-center space-x-3">
                                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/20 to-blue-500/20 flex items-center justify-center">
                                                            <i data-lucide="activity" class="w-5 h-5 text-indigo-500"></i>
                                                        </div>
                                                        <div>
                                                            <div class="text-white font-medium">Deposits</div>
                                                            <div class="text-slate-400 text-sm">Transaction</div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <div class="text-white font-medium">
                                                            $<?php echo number_format($historyd['amount'], 2, '.', ','); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between items-center text-sm">
                                                    <span class="text-slate-400">Description</span>
                                                    <span class="text-slate-300"><?php echo $historyd['plan']; ?></span>
                                                </div>
                                                <div class="mt-2 text-xs text-slate-500">
                                                    <?php echo $historyd['created_at']; ?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                         <div class="text-center py-12">
                                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gray-800 mb-4">
                                                <i data-lucide="arrow-down-circle" class="w-8 h-8 text-slate-400"></i>
                                            </div>
                                            <h4 class="text-lg font-light text-white mb-2">No deposits yet</h4>
                                            <p class="text-slate-400 font-light text-sm">Your deposit history will appear here</p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                               
                        </div>

                        <!-- Desktop Table View -->
                        <div class="hidden lg:block overflow-x-auto">
                            <table class="w-full">
                                    <thead class="bg-gray-800">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Type</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Amount</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Description</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-700">
                            <?php 
                                    $hisSQLde = "SELECT * FROM payments WHERE client_id = '$user_id' ORDER BY created_at DESC";
                                    $hisQueryde = mysqli_query($conn, $hisSQLde);

                                    if (mysqli_num_rows($hisQueryde) > 0) {
                                        while ($historyde = mysqli_fetch_assoc($hisQueryde)) {
                                            ?>
                                            <tr class="hover:bg-gray-800/50 transition-colors duration-300">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center space-x-3">
                                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/20 to-blue-500/20 flex items-center justify-center">
                                                            <i data-lucide="activity" class="w-5 h-5 text-indigo-500"></i>
                                                        </div>
                                                        <div>
                                                            <div class="text-white font-medium">Deposit</div>
                                                            <div class="text-slate-400 text-sm">Transaction</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-white font-medium">
                                                    $<?php echo number_format($historyde['amount'],2,'.',','); ?>
                                                                                                        </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class="text-slate-300 font-light"><?php echo $historyde['plan']; ?></span>
                                                </td>
                                                <td class="px-6 py-4 text-slate-300 font-light">
                                                    <?php echo $historyde['created_at']; ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="text-center py-16">
                                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gray-800 mb-6">
                                                <i data-lucide="arrow-down-circle" class="w-10 h-10 text-slate-400"></i>
                                            </div>
                                            <h4 class="text-xl font-light text-white mb-3">No deposits yet</h4>
                                            <p class="text-slate-400 font-light">Your deposit history will appear here</p>
                                        </div>
                                        <?php
                                    }
                                    ?>  
                                     </tbody>
                                </table>
                                
                        </div>
                    </div>

                    <!-- Withdrawals Tab -->
                    <div x-show="activeTab === 'withdrawals'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="mb-4 sm:mb-6 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 lg:gap-6">
                            <div class="text-center lg:text-left">
                                <h3 class="text-xl sm:text-2xl font-light text-white mb-1 sm:mb-2">Withdrawal History</h3>
                                <p class="text-slate-400 font-light text-sm sm:text-base">Track your withdrawal transactions</p>
                            </div>
                            <div class="relative">
                                <input type="text" placeholder="Search withdrawals..." class="w-full lg:w-80 pl-10 sm:pl-12 pr-4 sm:pr-6 py-2 sm:py-3 bg-gray-800 border border-gray-600 rounded-xl sm:rounded-2xl text-slate-200 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-sm sm:text-base">
                                <i data-lucide="search" class="absolute left-3 sm:left-4 top-1/2 transform -translate-y-1/2 w-4 h-4 sm:w-5 sm:h-5 text-slate-400"></i>
                            </div>
                        </div>

                        <!-- Mobile Card View -->
                        <div class="block lg:hidden space-y-4">
                                <?php 
                                    $hisSQLw = "SELECT * FROM withdrawals WHERE user_id = '$user_id' ORDER BY created_at DESC";
                                    $hisQueryw = mysqli_query($conn, $hisSQLw);

                                    if (mysqli_num_rows($hisQueryw) > 0) {
                                        while ($historyw = mysqli_fetch_assoc($hisQueryw)) {
                                            ?>
                                            <div class="bg-gray-800 rounded-xl p-4 border border-gray-700 hover:border-gray-600 transition-colors duration-300">
                                                <div class="flex items-start justify-between mb-3">
                                                    <div class="flex items-center space-x-3">
                                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/20 to-blue-500/20 flex items-center justify-center">
                                                            <i data-lucide="activity" class="w-5 h-5 text-indigo-500"></i>
                                                        </div>
                                                        <div>
                                                            <div class="text-white font-medium">Withdrawal</div>
                                                            <div class="text-slate-400 text-sm">Transaction</div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <div class="text-white font-medium">
                                                            $<?php echo number_format($historyw['amount'], 2, '.', ','); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between items-center text-sm">
                                                    <span class="text-slate-400">Description</span>
                                                    <span class="text-slate-300"><?php echo $historyw['coin'].':'.$historyw['address']; ?></span>
                                                </div>
                                                <div class="mt-2 text-xs text-slate-500">
                                                    <?php echo $historyw['created_at']; ?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="text-center py-12">
                                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gray-800 mb-4">
                                                <i data-lucide="arrow-up-circle" class="w-8 h-8 text-slate-400"></i>
                                            </div>
                                            <h4 class="text-lg font-light text-white mb-2">No withdrawals yet</h4>
                                            <p class="text-slate-400 font-light text-sm">Your withdrawal history will appear here</p>
                                        </div>
                                        <?php
                                    }
                                    ?>

                            </div>

                        <!-- Desktop Table View -->
                        <div class="hidden lg:block overflow-x-auto">
                            <table class="w-full">
                                    <thead class="bg-gray-800">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Type</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Amount</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Description</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-700">
                            <?php 
                                    $hisSQLwi = "SELECT * FROM withdrawals WHERE user_id = '$user_id' ORDER BY created_at DESC";
                                    $hisQuerywi = mysqli_query($conn, $hisSQLwi);

                                    if (mysqli_num_rows($hisQuerywi) > 0) {
                                        while ($historywi = mysqli_fetch_assoc($hisQuerywi)) {
                                            ?>
                                            <tr class="hover:bg-gray-800/50 transition-colors duration-300">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center space-x-3">
                                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/20 to-blue-500/20 flex items-center justify-center">
                                                            <i data-lucide="activity" class="w-5 h-5 text-indigo-500"></i>
                                                        </div>
                                                        <div>
                                                            <div class="text-white font-medium">Withdrawal</div>
                                                            <div class="text-slate-400 text-sm">Transaction</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-white font-medium">
                                                    $<?php echo number_format($historywi['amount'],2,'.',','); ?>
                                                                                                        </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class="text-slate-300 font-light"><?php echo $historywi['coin'].':'.$historywi['address']; ?></span>
                                                </td>
                                                <td class="px-6 py-4 text-slate-300 font-light">
                                                    <?php echo $historywi['created_at']; ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                         </tbody>
                                </table>
                                        <div class="text-center py-16">
                                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gray-800 mb-6">
                                                <i data-lucide="arrow-up-circle" class="w-10 h-10 text-slate-400"></i>
                                            </div>
                                            <h4 class="text-xl font-light text-white mb-3">No withdrawals yet</h4>
                                            <p class="text-slate-400 font-light">Your withdrawal history will appear here</p>
                                        </div>
                                        <?php
                                    }
                                    ?>  
                        </div>
                    </div>

                    <!-- Other Transactions Tab -->
                    <div x-show="activeTab === 'others'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                        <div class="mb-4 sm:mb-6 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 lg:gap-6">
                            <div class="text-center lg:text-left">
                                <h3 class="text-xl sm:text-2xl font-light text-white mb-1 sm:mb-2">Other Transactions</h3>
                                <p class="text-slate-400 font-light text-sm sm:text-base">Additional transaction history</p>
                            </div>
                            <div class="relative">
                                <input type="text" placeholder="Search transactions..." class="w-full lg:w-80 pl-10 sm:pl-12 pr-4 sm:pr-6 py-2 sm:py-3 bg-gray-800 border border-gray-600 rounded-xl sm:rounded-2xl text-slate-200 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-sm sm:text-base">
                                <i data-lucide="search" class="absolute left-3 sm:left-4 top-1/2 transform -translate-y-1/2 w-4 h-4 sm:w-5 sm:h-5 text-slate-400"></i>
                            </div>
                        </div>

                            <!-- Mobile Card View -->
                            <div class="block lg:hidden space-y-4">
                                <?php 
                                    $hisSQL = "SELECT * FROM history WHERE client_id = '$user_id' ORDER BY created_at DESC";
                                    $hisQuery = mysqli_query($conn,$hisSQL);
                                    while($history = mysqli_fetch_assoc($hisQuery)){
                                ?>
                                <div class="bg-gray-800 rounded-xl p-4 border border-gray-700 hover:border-gray-600 transition-colors duration-300">
                                    <div class="flex items-start justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/20 to-blue-500/20 flex items-center justify-center">
                                                <i data-lucide="activity" class="w-5 h-5 text-indigo-500"></i>
                                            </div>
                                            <div>
                                                <div class="text-white font-medium"><?php echo ucfirst($history['type']); ?></div>
                                                <div class="text-slate-400 text-sm">Transaction</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-white font-medium">
                                                    $<?php echo number_format($history['amount'],2,'.',','); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-400">Description</span>
                                        <span class="text-slate-300"><?php echo $history['description']; ?></span>
                                    </div>
                                    <div class="mt-2 text-xs text-slate-500">
                                        <?php echo $history['created_at']; ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                        <!-- Desktop Table View -->
                        <div class="hidden lg:block overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-800">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Type</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Amount</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Description</th>
                                            <th class="px-6 py-4 text-left text-xs font-medium text-slate-400 uppercase tracking-wider">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-700">
                                        <?php 
                                            $hisSQLm = "SELECT * FROM history WHERE client_id = '$user_id' ORDER BY created_at DESC";
                                            $hisQuerym = mysqli_query($conn,$hisSQLm);
                                            while($historym = mysqli_fetch_assoc($hisQuerym)){
                                        ?>
                                        <tr class="hover:bg-gray-800/50 transition-colors duration-300">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/20 to-blue-500/20 flex items-center justify-center">
                                                        <i data-lucide="activity" class="w-5 h-5 text-indigo-500"></i>
                                                    </div>
                                                    <div>
                                                        <div class="text-white font-medium"><?php echo ucfirst($historym['type']); ?></div>
                                                        <div class="text-slate-400 text-sm">Transaction</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-white font-medium">
                                                 $<?php echo number_format($historym['amount'],2,'.',','); ?>
                                                                                                    </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-slate-300 font-light"><?php echo $historym['description']; ?></span>
                                            </td>
                                            <td class="px-6 py-4 text-slate-300 font-light">
                                                <?php echo $historym['created_at']; ?>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Modern Mobile-First Responsive Styles */
    .glass-card {
        background: rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.15);
    }

    .glass-input {
        background: rgba(31, 41, 55, 0.8);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(75, 85, 99, 0.6);
    }

    .glass-input:focus {
        background: rgba(31, 41, 55, 0.9);
        border-color: rgba(59, 130, 246, 0.8);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    /* Floating Animation - Reduced for mobile */
    .floating-animation {
        animation: floating 8s ease-in-out infinite;
    }

    @keyframes  floating {
        0%, 100% { transform: translate(0, 0px); }
        50% { transform: translate(0, -5px); }
    }

    /* Enhanced Mobile Responsiveness */
    @media (max-width: 640px) {
        .floating-animation {
            animation: none; /* Disable animation on mobile for better performance */
        }

        /* Reduce padding on mobile */
        .mobile-padding {
            padding: 0.75rem;
        }

        /* Better touch targets */
        button {
            min-height: 44px;
        }

        /* Improved readability */
        .mobile-text {
            font-size: 0.875rem;
            line-height: 1.5;
        }
    }

    @media (max-width: 768px) {
        /* Stack elements vertically on tablets */
        .tablet-stack {
            flex-direction: column;
            gap: 1rem;
        }

        /* Full width search on mobile */
        .mobile-search {
            width: 100%;
        }
    }

    /* Custom scrollbar for better mobile experience */
    .overflow-x-auto::-webkit-scrollbar {
        height: 6px;
    }

    .overflow-x-auto::-webkit-scrollbar-track {
        background: rgba(75, 85, 99, 0.3);
        border-radius: 3px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: rgba(156, 163, 175, 0.5);
        border-radius: 3px;
    }

    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: rgba(156, 163, 175, 0.7);
    }

    /* Enhanced focus states for accessibility */
    button:focus,
    input:focus {
        outline: 2px solid rgba(59, 130, 246, 0.5);
        outline-offset: 2px;
    }

    /* Smooth transitions for better UX */
    * {
        transition: all 0.2s ease-in-out;
    }

    /* Status indicators */
    .status-indicator {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    /* Card hover effects */
    .transaction-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .transaction-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Loading states */
    .loading {
        opacity: 0.6;
        pointer-events: none;
    }

    /* Print styles */
    @media  print {
        .floating-animation {
            animation: none;
        }

        .glass-card {
            background: white;
            border: 1px solid #e5e7eb;
            box-shadow: none;
        }
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .glass-card {
            background: #1f2937;
            border: 2px solid #6b7280;
        }

        .text-slate-400 {
            color: #d1d5db;
        }
    }

    /* Reduced motion support */
    @media (prefers-reduced-motion: reduce) {
        .floating-animation,
        .transition-all,
        .transition-colors,
        .transition-transform {
            animation: none;
            transition: none;
        }
    }
</style>

<script>
    // Initialize Lucide icons
    lucide.createIcons();
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



   <a href="index.php"
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