<?php
include "includes/header.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$message = "";

if (isset($_POST['profit'])) {
    $amount = $_POST['amount'];
    $account = $_POST['account'];
  	
    $fetchaccount = "SELECT * FROM users WHERE id = '$account'";
    $accquery = mysqli_query($conn, $fetchaccount);
    $getter = mysqli_fetch_assoc($accquery);

    $useremail = $getter['email'];
    $fullname = $getter['fullname'];
    $client_id = $getter['id'];
    $tranx_id = rand(000000, 999999);
    $created_at = $_POST['created_at'];

    $investment_status = 'Completed';
    
    $plan = $_POST['plan'];
    $total_deposits = $getter['total_deposits'] + $amount;
    $address = "";
   
      	$newBal = $getter['total_balance'] + $amount;
      	
		$prosql = "UPDATE users set total_balance = '$newBal', total_deposits = '$total_deposits' WHERE id = '$account'";
        $proquery = mysqli_query($conn, $prosql);
        $sqlpde = "INSERT into payments (client_id, email, tranx_id, plan, amount, status, created_at) VALUES ('$client_id','$useremail','$tranx_id','$plan','$amount','$investment_status','$created_at')";
        $stmtde = mysqli_query($conn, $sqlpde);
    
    
    
    $message = '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Deposit of ' . $amount. ' added to ' . $username . ' successfully</div>
        </div>';
    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.zoho.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'support@jarvistradepro.com'; //SMTP username
        $mail->Password = 'OCT3244@DSfdrdv'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('support@jarvistradepro.com', 'Support');
        $mail->addAddress($useremail); //Add a recipient               //Name is optional

        $mail->addCC('support@jarvistradepro.com');

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Deposit added';
        $mail->Body = '<html><head></head></head>
<body style="background-color: #1e2024; padding: 45px;">
    <div>
        <img style="position:relative; left:35%;" src="https://jarvistradepro.com/images/logooct.png">
        <h3 style="color: black;">Mail From support@jarvistradepro.com - Deposit Added</h3>
    </div>
    <div style="color: #ffff;"><hr/>
        <h3>Dear ' . $fullname . '</h3>
        <p>Deposit of $' . $amount . ' has successfully been credited to your account, kindly sign in to view your balance</p>

        <a style="background-color:#060c39;color:#ffff; padding:15px; text-decoration:none;border-radius: 10px;font-size: 20px;" href="https://jarvistradepro.com/dash/auth/login.php" class="btn btn primary">Sign in</a>

        <h5>Note : the details in this email should not be disclosed to anyone</h5>

    </div><hr/>
        <div style="background-color: white; color: black;">
            <h3 style="color: black;">support@jarvistradepro<sup>TM</sup> </h3>
        </div>

</body></html>

';

        $mail->send();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Close the database connection
mysqli_close($conn);

function get_btc_current_price_usd() {
    /**
     * Fetches the current price of 1 Bitcoin in USD from the CoinGecko API.
     *
     * @return float|null The current price of 1 BTC in USD, or null if the fetch fails.
     */

    $currency_code_lower = "usd"; // Fixed to USD
    $api_url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=" . $currency_code_lower;

    // Suppress warnings with @ for file_get_contents and handle errors explicitly.
    $response = @file_get_contents($api_url);

    if ($response === false) {
        // Log the error for debugging purposes (e.g., to your server's error log)
        error_log("Error in get_btc_current_price_usd: Could not fetch Bitcoin price from API. Check internet connection or API endpoint.");
        return null;
    }

    $data = json_decode($response, true); // Decode JSON into an associative array

    // Check if the expected data exists in the API response
    if (isset($data['bitcoin']) && isset($data['bitcoin'][$currency_code_lower])) {
        $btc_price_in_usd = $data['bitcoin'][$currency_code_lower];
        return (float)$btc_price_in_usd; // Cast to float to ensure numeric type
    } else {
        // Log if the expected keys are not found in the JSON response
        error_log("Error in get_btc_current_price_usd: Unexpected API response format. Response: " . $response);
        return null;
    }
}

function get_eth_current_price_usd() {
    /**
     * Fetches the current price of 1 Bitcoin in USD from the CoinGecko API.
     *
     * @return float|null The current price of 1 BTC in USD, or null if the fetch fails.
     */

    $currency_code_lower = "usd"; // Fixed to USD
    $api_url = "https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=" . $currency_code_lower;

    // Suppress warnings with @ for file_get_contents and handle errors explicitly.
    $response = @file_get_contents($api_url);

    if ($response === false) {
        // Log the error for debugging purposes (e.g., to your server's error log)
        error_log("Error in get_eth_current_price_usd: Could not fetch Ethereum price from API. Check internet connection or API endpoint.");
        return null;
    }

    $data = json_decode($response, true); // Decode JSON into an associative array

    // Check if the expected data exists in the API response
    if (isset($data['ethereum']) && isset($data['ethereum'][$currency_code_lower])) {
        $eth_price_in_usd = $data['ethereum'][$currency_code_lower];
        return (float)$eth_price_in_usd; // Cast to float to ensure numeric type
    } else {
        // Log if the expected keys are not found in the JSON response
        error_log("Error in get_eth_current_price_usd: Unexpected API response format. Response: " . $response);
        return null;
    }
}
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add Deposit To a User</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" role="form">
                        <?php echo $message; ?>
                        <div class="box-body">
                        
                    
                            <div class="form-group">
                                <label for="exampleInputltc">Plan</label>
                                <input type="text" name="plan" class="form-control" id="exampleInputltc"
                                    placeholder="Enter Plan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Amount($)</label>
                                <input type="text" name="amount" class="form-control" id="exampleInputltc"
                                    placeholder="Enter amount">
                            </div>
                            <div class="form-group">
                                <label style="padding-right: 5px;" for="exampleInputltc">Select an
                                    account</label>
                                <select class="form-control" name="account">
                                    <option>
                                        -- select --</option>
                                    <?php
                                    	while ($fetchuser = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <option value="<?php echo $fetchuser['id']; ?>"><?php echo $fetchuser['email']; ?>
                                    </option>
                                    <?php
                                      }
                                      ?>

                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputltc">Date of Transaction</label>
                                <input type="date" name="created_at" class="form-control" id="exampleInputltc">
                            </div>


                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button name="profit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->



            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php";

?>