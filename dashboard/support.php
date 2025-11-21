<?php include("header.php"); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer classes
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';
$message="";
if(isset($_POST['send'])){
  $new_message = $_POST['message'];

  $mail = new PHPMailer(true);
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.zoho.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'support@jarvistradepro.com'; // Your SMTP username
                    $mail->Password   = 'Jarv3524@DHes';           // Your SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL implicit TLS
                    $mail->Port       = 465;

                    // Recipients
                    $mail->setFrom('support@jarvistradepro.com', 'Support');
                    $mail->addAddress($user_email); // Add a recipient
                    $mail->addCC('support@jarvistradepro.com'); // Add a recipient

                    // Content
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Subject = 'Support Ticket Created - jarvistradepro';
                    $mail->Body    = "
                    <html>
                    <head></head>
                    <body style='background-color: #1e2024; padding: 45px;'>
                        <div>
                            <img style='position:relative; left:35%; border-radius: 50%; height: 100px; width: 100px;' src='https://jarvistradepro.com/logo.jpg'>
                            <h3 style='color: black;'>Mail From support@jarvistradepro.com - Support Team</h3>
                        </div>
                        <div style='color: #fff;'>
                            ".$new_message."
                        </div>
                        <div style='background-color: white; color: black;'>
                            <h3 style='color: black;'>Support@jarvistradepro.com</h3>
                        </div>
                    </body>
                    </html>";
                    // $mail->AltBody = 'This is the plain text version for non-HTML mail clients'; // Optional plain text body

                    $mail->send();
                    $message = "<div class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative'>Message sent to Support Team.</div>";
                   
                } catch (Exception $e) {
                    $message = "<div class='bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative'>Error sending email. Mailer Error: {$mail->ErrorInfo}</div>";
                    // Log the error for debugging, but don't prevent user from seeing success
                    error_log("PHPMailer Error for email {$email}: {$mail->ErrorInfo}");
                    
                   
                }
}

?>
  <!-- Sidebar overlay for mobile -->
  <div
    x-show="sidebarOpen"
    @click="sidebarOpen = false"
    class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" x-cloak>
  </div>

  <!-- Main content placeholder -->
  <div class="flex-1 ml-0 md:ml-64 p-4 pb-20 md:pb-4">
    <!-- Your main dashboard content goes here -->
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 p-6" x-data="{ 
    showSuccess: false, 
    showError: false,
    isSubmitting: false,
    message: '',
    showContactModal: false 
}">
    <div class="max-w-4xl mx-auto">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center space-x-4 mb-6">
                <div class="w-16 h-16 rounded-3xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 flex items-center justify-center backdrop-blur-sm">
                    <i data-lucide="headphones" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                </div>
                <div>
                    <h1 class="text-4xl font-light text-gray-800 dark:text-white mb-2">
                        Support Center
                    </h1>
                    <p class="text-gray-500 dark:text-gray-400 font-light text-lg">
                        We're here to help you with any questions or concerns
                    </p>
                </div>
            </div>
        </div>

        <!-- Alert Components -->
        <div x-show="showSuccess" x-transition class="mb-6">
                    </div>
        <div x-show="showError" x-transition class="mb-6">
            <div>
    </div>
        </div>

        <!-- Support Options Grid -->
        <div class="grid md:grid-cols-1 gap-6 mb-8">
            <!-- Email Support Card -->
            <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/10 to-blue-600/10 flex items-center justify-center">
                        <i data-lucide="mail" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Email Support</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Get help via email</p>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm">Direct email communication for detailed inquiries and support requests.</p>
                <a href="mailto:admin@jarvistradepro.com" 
                   class="inline-flex items-center space-x-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium transition-colors">
                    <span>admin@jarvistradepro.com</span>
                    <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
            </div>

           

         

        <!-- Contact Form Section -->
        <div class="bg-white dark:bg-gray-900 rounded-3xl p-8 border border-gray-200 dark:border-gray-700 shadow-sm">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-light text-gray-800 dark:text-white mb-4">Send us a Message</h2>
                <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                    Have a specific question or need assistance? Fill out the form below and our support team will get back to you as soon as possible.
                </p>
            </div>

            <div class="max-w-2xl mx-auto">
                <form method="post" action="https://jarvistradepro.com/sendcontact" 
                      @submit="isSubmitting = true" 
                      x-data="{ messageLength: 0 }">
                    <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">                    <input type="hidden" name="name" value="<?php  echo $user['username']; ?>" />
                    <input type="hidden" name="email" value="<?php echo $user['email']; ?>">

                    <!-- User Info Display -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 border border-gray-200 dark:border-gray-700">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Your Name</label>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">
                                    <span class="text-white font-semibold text-sm">E</span>
                                </div>
                                <span class="text-gray-800 dark:text-white font-medium"><?php  echo $user['username']; ?></span>
                            </div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 border border-gray-200 dark:border-gray-700">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Your Email</label>
                            <div class="flex items-center space-x-3">
                                <i data-lucide="mail" class="w-5 h-5 text-gray-500"></i>
                                <span class="text-gray-800 dark:text-white"><?php echo $user['email']; ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            name="message" 
                            id="message"
                            x-model="message"
                            @input="messageLength = $el.value.length"
                            class="w-full px-4 py-4 bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none" 
                            rows="6" 
                            placeholder="Please describe your issue or question in detail..."
                            required
                            maxlength="1000"></textarea>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Please provide as much detail as possible to help us assist you better.
                            </p>
                            <span class="text-sm text-gray-400" x-text="messageLength + '/1000'"></span>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button 
                            type="submit" 
                            :disabled="isSubmitting || message.trim().length < 10"
                            :class="isSubmitting ? 'opacity-50 cursor-not-allowed' : 'hover:scale-105'"
                            class="inline-flex items-center space-x-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform disabled:opacity-50 disabled:cursor-not-allowed">
                            <span x-show="!isSubmitting">Send Message</span>
                            <span x-show="isSubmitting" class="flex items-center space-x-2">
                                <svg class="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>Sending...</span>
                            </span>
                            <i data-lucide="send" class="w-5 h-5" x-show="!isSubmitting"></i>
                        </button>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">
                            We typically respond within 24 hours during business days.
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact Modal -->
        <div x-show="showContactModal" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4"
             @click.self="showContactModal = false">
            <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 max-w-md w-full border border-gray-200 dark:border-gray-700"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="message-circle" class="w-8 h-8 text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Live Chat Support</h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-6">
                        Our live chat feature is coming soon! For now, please use the contact form or email us directly.
                    </p>
                    <button @click="showContactModal = false" 
                            class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white rounded-xl hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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
          text-blue-600 font-semibold
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