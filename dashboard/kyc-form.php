<?php 

include("header.php"); 

$errors  = [];
$success = false;

// Helper to clean inputs
function clean($value) {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // --- COLLECT & VALIDATE FIELDS ---
    $first_name    = clean($_POST['first_name'] ?? '');
    $last_name     = clean($_POST['last_name'] ?? '');
    $email         = clean($_POST['email'] ?? '');
    $phone_number  = clean($_POST['phone_number'] ?? '');
    $dob           = clean($_POST['dob'] ?? '');
    $social_media  = clean($_POST['social_media'] ?? '');
    $address       = clean($_POST['address'] ?? '');
    $city          = clean($_POST['city'] ?? '');
    $state         = clean($_POST['state'] ?? '');
    $country       = clean($_POST['country'] ?? '');
    $document_type = $_POST['document_type'] ?? '';

    if ($first_name === '')     $errors[] = 'First name is required.';
    if ($last_name === '')      $errors[] = 'Last name is required.';
    if ($email === '')          $errors[] = 'Email is required.';
    if ($phone_number === '')   $errors[] = 'Phone number is required.';
    if ($dob === '')            $errors[] = 'Date of birth is required.';
    if ($address === '')        $errors[] = 'Address is required.';
    if ($city === '')           $errors[] = 'City is required.';
    if ($state === '')          $errors[] = 'State/Province is required.';
    if ($country === '')        $errors[] = 'Country is required.';
    if ($document_type === '')  $errors[] = 'Document type is required.';

    if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email address format.';
    }

   

    // --- FILE UPLOADS ---
    $uploadDir = __DIR__ . '/uploads/kyc_submissions';

    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            $errors[] = 'Failed to create upload directory on server.';
        }
    }

    function handleUpload($fileKey, $uploadDir, &$errors, $label) {
        if (!isset($_FILES[$fileKey]) || $_FILES[$fileKey]['error'] === UPLOAD_ERR_NO_FILE) {
            $errors[] = $label . ' is required.';
            return null;
        }

        $file = $_FILES[$fileKey];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            $errors[] = $label . ' upload error (code: ' . $file['error'] . ').';
            return null;
        }

        // 10MB max
        $maxSize = 10 * 1024 * 1024;
        if ($file['size'] > $maxSize) {
            $errors[] = $label . ' must be less than 10MB.';
            return null;
        }

        // Mime check
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime  = $finfo->file($file['tmp_name']);
        $allowed = [
            'image/jpeg' => 'jpg',
            'image/png'  => 'png',
        ];

        if (!array_key_exists($mime, $allowed)) {
            $errors[] = $label . ' must be a JPG or PNG image.';
            return null;
        }

        $ext      = $allowed[$mime];
        $basename = bin2hex(random_bytes(16));
        $filename = sprintf('%s_%s.%s', $fileKey, $basename, $ext);
        $target   = rtrim($uploadDir, '/') . '/' . $filename;

        if (!move_uploaded_file($file['tmp_name'], $target)) {
            $errors[] = 'Failed to save ' . $label . ' to the server.';
            return null;
        }

        // Return relative path (for DB)
        return 'uploads/kyc_submissions/' . $filename;
    }

    $frontimg_path = null;
    $backimg_path  = null;

    if (empty($errors)) {
        $frontimg_path = handleUpload('frontimg', $uploadDir, $errors, 'Front side image');
        $backimg_path  = handleUpload('backimg',  $uploadDir, $errors, 'Back side image');
    }

 
    if (empty($errors)) {
        $status = 'pending';

        $sqlus = "UPDATE users set kyc_status = '$status' WHERE id = '$user_id'";
        $queryus = mysqli_query($conn,$sqlus);

        $sql = "INSERT INTO kyc_submissions (
                    user_id,
                    first_name,
                    last_name,
                    email,
                    phone_number,
                    dob,
                    social_media,
                    address,
                    city,
                    state,
                    country,
                    document_type,
                    front_image_path,
                    back_image_path,
                    status
                ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            $errors[] = 'Database error (prepare): ' . $conn->error;
        } else {
            // 15 string parameters
            $stmt->bind_param(
                "issssssssssssss",
                $user_id,
                $first_name,
                $last_name,
                $email,
                $phone_number,
                $dob,
                $social_media,
                $address,
                $city,
                $state,
                $country,
                $document_type,
                $frontimg_path,
                $backimg_path,
                $status
            );

            if (!$stmt->execute()) {
                $errors[] = 'Database error (execute): ' . $stmt->error;
            } else {
                $success = true;
            }

            $stmt->close();
        }
    }
}


$kycStatus = $user['kyc_status'];      // default: no submission yet
$canShowForm = true;      // default: allow form


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
    <div class="container mx-auto px-3 sm:px-4 lg:px-6 py-4 sm:py-6 lg:py-8"
     x-data="{
        currentStep: 1,
        documentType: 'passport',
        isSubmitting: false,
        progress: 33,
        showPreview: false,
        frontPreview: null,
        backPreview: null,
        documentTypes: {
            passport: 'International Passport',
            national_id: 'National ID Card',
            drivers_license: 'Driver\'s License'
        }
     }">

    <!-- Alert Messages -->
    <div>
    </div>
        
    <!-- Header Section -->
    <div class="mb-6 sm:mb-8">
        <div class="text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-600/10 text-blue-400 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Secure Verification Process
            </div>
            <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2">Account Verification</h1>
            <p class="text-gray-400 text-sm sm:text-base max-w-2xl mx-auto">
                Complete your KYC verification to unlock full trading features and ensure account security
            </p>
        </div>
    </div>

    <!-- Progress Indicator -->
    <div class="bg-gray-900 rounded-xl p-4 sm:p-6 border border-gray-800 mb-6 sm:mb-8">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-white">Verification Progress</h2>
            <span class="text-sm text-gray-400" x-text="`Step ${currentStep} of 3`"></span>
        </div>

        <!-- Progress Bar -->
        <div class="w-full bg-gray-800 rounded-full h-2 mb-4">
            <div class="bg-gradient-to-r from-blue-600 to-blue-500 h-2 rounded-full transition-all duration-500"
                 :style="`width: ${progress}%`"></div>
        </div>

        <!-- Steps -->
        <div class="flex items-center justify-between">
            <div class="flex items-center" :class="currentStep >= 1 ? 'text-blue-400' : 'text-gray-500'">
                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-medium border-2"
                     :class="currentStep >= 1 ? 'bg-blue-600 border-blue-600 text-white' : 'border-gray-600 text-gray-400'">
                    <svg x-show="currentStep > 1" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span x-show="currentStep <= 1">1</span>
                </div>
                <span class="ml-2 text-xs sm:text-sm font-medium hidden sm:block">Personal Info</span>
            </div>

            <div class="flex items-center" :class="currentStep >= 2 ? 'text-blue-400' : 'text-gray-500'">
                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-medium border-2"
                     :class="currentStep >= 2 ? 'bg-blue-600 border-blue-600 text-white' : 'border-gray-600 text-gray-400'">
                    <svg x-show="currentStep > 2" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span x-show="currentStep <= 2">2</span>
                </div>
                <span class="ml-2 text-xs sm:text-sm font-medium hidden sm:block">Address</span>
            </div>

            <div class="flex items-center" :class="currentStep >= 3 ? 'text-blue-400' : 'text-gray-500'">
                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-medium border-2"
                     :class="currentStep >= 3 ? 'bg-blue-600 border-blue-600 text-white' : 'border-gray-600 text-gray-400'">
                    <span>3</span>
                </div>
                <span class="ml-2 text-xs sm:text-sm font-medium hidden sm:block">Documents</span>
            </div>
        </div>
    </div>
    <?php if ($kycStatus === 'approved'): ?>
    <!-- VERIFIED / APPROVED STATE -->
    <div class="mb-6 rounded-lg border border-green-600/40 bg-green-900/30 p-4">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-green-600 flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div>
                <p class="font-semibold text-green-300 text-sm">KYC Verified</p>
                <p class="text-green-100/80 text-xs">
                    Your identity has been successfully verified. No further action is required.
                </p>
            </div>
        </div>
    </div>

<?php elseif ($kycStatus == 'pending' || empty($kycStatus)): ?>
    <!-- PENDING STATE -->
    <div class="mb-6 rounded-lg border border-amber-500/40 bg-amber-900/20 p-4">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center">
                <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l2 2m6-4a8 8 0 11-16 0 8 8 0 0116 0z" />
                </svg>
            </div>
            <div>
                <p class="font-semibold text-amber-200 text-sm">KYC Under Review</p>
                <p class="text-amber-100/80 text-xs">
                    Your KYC submission is currently being reviewed. You cannot submit a new request until a decision is made.
                </p>
            </div>
        </div>
    </div>

    <?php elseif ($kycStatus === 'rejected'): ?>
        <!-- REJECTED STATE (show info + allow resubmission) -->
        <div class="mb-6 rounded-lg border border-red-500/40 bg-red-900/30 p-4">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-red-600 flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-red-200 text-sm">KYC Rejected</p>
                    <p class="text-red-100/80 text-xs">
                        Your previous KYC submission was rejected. Please review the requirements and submit clear, valid documents.
                    </p>
                </div>
            </div>
        </div>

    <?php else: ?>
        <!-- NO SUBMISSION YET -->
        <div class="mb-6 rounded-lg border border-blue-500/40 bg-blue-900/20 p-4">
            <p class="text-blue-100 text-sm">
                Please complete your KYC verification to unlock full account features.
            </p>
        </div>
    <?php endif; ?>

    <?php if ($canShowForm): ?>
    <!-- Main Verification Form -->
    <div class="bg-gray-900 rounded-xl border border-gray-800 overflow-hidden">
        <!-- Form Header -->
        <div class="p-4 sm:p-6 border-b border-gray-800">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600/10 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-white">Identity Verification</h2>
                    <p class="text-gray-400 text-xs sm:text-sm">Secure your account with government-issued ID verification</p>
                </div>
            </div>
        </div>
        <?php if (!empty($errors)): ?>
            <div class="mb-4 rounded-lg bg-red-900/40 border border-red-600/40 p-3 text-sm text-red-200">
                <ul class="list-disc list-inside space-y-1">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php elseif (!empty($success) && $success === true): ?>
            <div class="mb-4 rounded-lg bg-green-900/40 border border-green-600/40 p-3 text-sm text-green-200">
                KYC submitted successfully. We’ll review your documents shortly.
            </div>
        <?php endif; ?>

        <!-- Form Content -->
        <form action="" method="POST" enctype="multipart/form-data"
              x-on:submit="isSubmitting = true" class="p-4 sm:p-6">
            <input type="hidden" name="_token" value="9hQhh0UnS3AhQjazXjo50ca9bygG8W2IBBo3e9Xt">
            <!-- Step 1: Personal Details -->
            <div x-show="currentStep === 1" x-transition>
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-blue-600/10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Personal Information</h3>
                            <p class="text-gray-400 text-sm">Provide your personal details as they appear on your ID</p>
                        </div>
                    </div>

                    <div class="bg-blue-600/10 rounded-lg p-3 sm:p-4 mb-6 border border-blue-600/20">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-blue-400 font-medium text-sm mb-1">Important Notice</p>
                                <p class="text-blue-300 text-xs sm:text-sm">
                                    Please ensure all information matches exactly with your government-issued ID. Details cannot be modified after submission.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            First Name <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="first_name" required
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Last Name <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="last_name" required
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Email Address <span class="text-red-400">*</span>
                        </label>
                        <input type="email" name="email" required
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Phone Number <span class="text-red-400">*</span>
                        </label>
                        <input type="tel" name="phone_number" required
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Date of Birth <span class="text-red-400">*</span>
                        </label>
                        <input type="date" name="dob" required
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Social Media Username (Optional)
                        </label>
                        <input type="text" name="social_media"
                               placeholder="@username"
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>
                </div>

                <div class="flex justify-end mt-8">
                    <button type="button" @click="currentStep = 2; progress = 66"
                            class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg font-medium transition-all duration-200 shadow-lg hover:shadow-xl">
                        Continue to Address
                        <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Step 2: Address Details -->
            <div x-show="currentStep === 2" x-transition>
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-green-600/10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Address Information</h3>
                            <p class="text-gray-400 text-sm">Your current residential address for verification</p>
                        </div>
                    </div>

                    <div class="bg-amber-600/10 rounded-lg p-3 sm:p-4 mb-6 border border-amber-600/20">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.664-.833-2.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                            <div>
                                <p class="text-amber-400 font-medium text-sm mb-1">Address Verification</p>
                                <p class="text-amber-300 text-xs sm:text-sm">
                                    Ensure your address matches your supporting documents exactly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Street Address <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="address" required
                               placeholder="Enter your complete street address"
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-300">
                                City <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="city" required
                                   placeholder="Enter your city"
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-300">
                                State/Province <span class="text-red-400">*</span>
                            </label>
                            <input type="text" name="state" required
                                   placeholder="Enter your state or province"
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-300">
                            Country/Nationality <span class="text-red-400">*</span>
                        </label>
                        <input type="text" name="country" required
                               placeholder="Enter your country"
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all">
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row justify-between gap-4 mt-8">
                    <button type="button" @click="currentStep = 1; progress = 33"
                            class="px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white rounded-lg font-medium transition-all duration-200 order-2 sm:order-1">
                        <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Previous
                    </button>
                    <button type="button" @click="currentStep = 3; progress = 100"
                            class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-lg font-medium transition-all duration-200 shadow-lg hover:shadow-xl order-1 sm:order-2">
                        Continue to Documents
                        <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Step 3: Document Upload -->
            <div x-show="currentStep === 3" x-transition>
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-purple-600/10 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Document Upload</h3>
                            <p class="text-gray-400 text-sm">Upload clear photos of your government-issued ID</p>
                        </div>
                    </div>
                </div>

                <!-- Document Type Selection -->
                <div x-data="{ documentType: '' }" class="mb-8">
                    <label class="block text-sm font-medium text-gray-300 mb-4">
                        Select Document Type <span class="text-red-400">*</span>
                    </label>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                        <!-- International Passport -->
                        <label class="relative cursor-pointer group">
                            <input
                                type="radio"
                                name="document_type"
                                value="Int'l Passport"
                                x-model="documentType"
                                class="sr-only"
                            >

                            <div
                                class="p-4 rounded-xl border-2 text-center bg-gray-800 hover:bg-gray-700
                                    transition-all duration-200 ease-in-out"
                                :class="documentType === `Int'l Passport`
                                    ? 'border-blue-500 bg-blue-600/10 shadow-lg shadow-blue-900/40 scale-[1.05]'
                                    : 'border-gray-700 hover:border-gray-600'"
                            >
                                <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>

                                <div class="font-medium text-white text-sm">International Passport</div>
                                <div class="text-gray-400 text-xs mt-1">Most accepted globally</div>

                                <!-- Checkmark when selected -->
                                <div
                                    x-show="documentType === `Int'l Passport`"
                                    class="absolute top-2 right-2 w-5 h-5 rounded-full bg-blue-600 flex items-center justify-center"
                                >
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                        </label>

                        <!-- National ID -->
                        <label class="relative cursor-pointer group">
                            <input
                                type="radio"
                                name="document_type"
                                value="National ID"
                                x-model="documentType"
                                class="sr-only"
                            >

                            <div
                                class="p-4 rounded-xl border-2 text-center bg-gray-800 hover:bg-gray-700
                                    transition-all duration-200 ease-in-out"
                                :class="documentType === 'National ID'
                                    ? 'border-blue-500 bg-blue-600/10 shadow-lg shadow-blue-900/40 scale-[1.05]'
                                    : 'border-gray-700 hover:border-gray-600'"
                            >
                                <div class="w-12 h-12 bg-green-600/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                </div>

                                <div class="font-medium text-white text-sm">National ID Card</div>
                                <div class="text-gray-400 text-xs mt-1">Government issued ID</div>

                                <div
                                    x-show="documentType === 'National ID'"
                                    class="absolute top-2 right-2 w-5 h-5 rounded-full bg-blue-600 flex items-center justify-center"
                                >
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                        </label>

                        <!-- Driver's License -->
                        <label class="relative cursor-pointer group">
                            <input
                                type="radio"
                                name="document_type"
                                value="Drivers License"
                                x-model="documentType"
                                class="sr-only"
                            >

                            <div
                                class="p-4 rounded-xl border-2 text-center bg-gray-800 hover:bg-gray-700
                                    transition-all duration-200 ease-in-out"
                                :class="documentType === 'Drivers License'
                                    ? 'border-blue-500 bg-blue-600/10 shadow-lg shadow-blue-900/40 scale-[1.05]'
                                    : 'border-gray-700 hover:border-gray-600'"
                            >
                                <div class="w-12 h-12 bg-amber-600/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>

                                <div class="font-medium text-white text-sm">Driver's License</div>
                                <div class="text-gray-400 text-xs mt-1">Valid driving license</div>

                                <div
                                    x-show="documentType === 'Drivers License'"
                                    class="absolute top-2 right-2 w-5 h-5 rounded-full bg-blue-600 flex items-center justify-center"
                                >
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>


                <!-- Requirements Notice -->
                <div class="bg-gradient-to-r from-amber-600/10 to-orange-600/10 rounded-xl p-4 sm:p-6 mb-8 border border-amber-600/20">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-amber-600/20 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-amber-300 mb-3 text-sm">Document Requirements</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-amber-200 text-xs">Not expired or damaged</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-amber-200 text-xs">All text clearly visible</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-amber-200 text-xs">No glare or shadows</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-amber-200 text-xs">High resolution image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- File Upload Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <!-- Front Side Upload -->
                    <div class="space-y-3">
                        <label class="block text-sm font-medium text-gray-300">
                            Front Side <span class="text-red-400">*</span>
                        </label>
                        <div class="relative">
                            <input type="file" name="frontimg" required accept="image/*"
                                   @change="frontPreview = $event.target.files[0] ? URL.createObjectURL($event.target.files[0]) : null"
                                   class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            <div class="border-2 border-dashed border-gray-600 rounded-xl p-6 text-center bg-gray-800 hover:bg-gray-750 hover:border-blue-500 transition-all">
                                <div x-show="!frontPreview">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="text-gray-400 font-medium mb-2">Upload Front Side</p>
                                    <p class="text-gray-500 text-xs">PNG, JPG up to 10MB</p>
                                </div>
                                <div x-show="frontPreview" class="space-y-3">
                                    <img :src="frontPreview" class="w-full h-32 object-cover rounded-lg mx-auto">
                                    <p class="text-green-400 text-sm font-medium">Front side uploaded</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Back Side Upload -->
                    <div class="space-y-3">
                        <label class="block text-sm font-medium text-gray-300">
                            Back Side <span class="text-red-400">*</span>
                        </label>
                        <div class="relative">
                            <input type="file" name="backimg" required accept="image/*"
                                   @change="backPreview = $event.target.files[0] ? URL.createObjectURL($event.target.files[0]) : null"
                                   class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            <div class="border-2 border-dashed border-gray-600 rounded-xl p-6 text-center bg-gray-800 hover:bg-gray-750 hover:border-blue-500 transition-all">
                                <div x-show="!backPreview">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="text-gray-400 font-medium mb-2">Upload Back Side</p>
                                    <p class="text-gray-500 text-xs">PNG, JPG up to 10MB</p>
                                </div>
                                <div x-show="backPreview" class="space-y-3">
                                    <img :src="backPreview" class="w-full h-32 object-cover rounded-lg mx-auto">
                                    <p class="text-green-400 text-sm font-medium">Back side uploaded</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Terms Agreement -->
                <div class="bg-gray-800 rounded-xl p-4 sm:p-6 mb-8 border border-gray-700">
                    <label class="flex items-start gap-3 cursor-pointer group">
                        <input type="checkbox" required
                               class="mt-1 w-4 h-4 text-blue-600 bg-gray-700 border-gray-600 rounded focus:ring-blue-500 focus:ring-2">
                        <div class="flex-1">
                            <span class="text-gray-300 text-sm leading-relaxed">
                                I confirm that all information provided is accurate and the documents are authentic.
                                I understand that providing false information may result in account suspension and
                                agree to the <a href="#" class="text-blue-400 hover:text-blue-300 underline">Terms of Service</a>
                                and <a href="#" class="text-blue-400 hover:text-blue-300 underline">Privacy Policy</a>.
                            </span>
                        </div>
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-between gap-4">
                    <button type="button" @click="currentStep = 2; progress = 66"
                            class="px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white rounded-lg font-medium transition-all duration-200 order-2 sm:order-1">
                        <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Previous
                    </button>

                                            <button type="submit"
                                :disabled="isSubmitting"
                                class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 disabled:from-gray-600 disabled:to-gray-700 text-white rounded-lg font-medium transition-all duration-200 shadow-lg hover:shadow-xl disabled:cursor-not-allowed order-1 sm:order-2 flex items-center justify-center gap-2">
                            <svg x-show="isSubmitting" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <svg x-show="!isSubmitting" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span x-show="!isSubmitting">Submit Application</span>
                            <span x-show="isSubmitting">Submitting...</span>
                        </button>
                                    </div>
            </div>
        </form>
    </div>
    <?php endif; ?>
    <!-- Security Notice -->
    <div class="mt-6 sm:mt-8 bg-gray-900/50 rounded-xl p-4 sm:p-6 border border-gray-800">
        <div class="flex items-start gap-3">
            <div class="w-10 h-10 bg-green-600/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-2">Your Privacy is Protected</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Your documents are encrypted and stored securely. We use bank-level security measures to protect your personal information
                    and comply with international data protection regulations.
                </p>
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