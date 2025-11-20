<?php
include "includes/header.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$userid = $_GET['id'];
$sqleu = "SELECT * FROM users WHERE id='$userid'";
$queryeu = mysqli_query($conn, $sqleu);
$usereu = mysqli_fetch_assoc($queryeu);
$message = "";
if (isset($_POST['submit'])) {
    $total_balance = $_POST['total_balance'];
    $total_profit = $_POST['total_profit'];
  	$total_bonus = $_POST['total_bonus'];
   	$total_deposits = $_POST['total_deposits'];
    $withdrawal = $_POST['total_withdrawals'];
    $withdrawal_pin = $_POST['withdrawal_pin'];
    $kyc_status = $_POST['kyc_status'];
    $sqlup = "UPDATE users set total_balance='$total_balance', total_profit='$total_profit', total_bonus='$total_bonus', total_deposits='$total_deposits', total_withdrawals='$withdrawal', withdrawal_pin = '$withdrawal_pin', kyc_status = '$kyc_status' WHERE id='$userid'";
    $queryup = mysqli_query($conn, $sqlup);
    header("location: edit.php?id=$userid&message=success");
}
if (@$_GET['message'] == "success") {
    $message = '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Details Updated Successfully</div>
        </div>';
}

?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Checta Users List

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Home</a></li>
            <li class="#">users</li>
            <li class="active">edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit User</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" role="form">
                        <?php echo $message; ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    value="<?php echo $usereu['email']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Balance</label>
                                <input type="text" name="total_balance" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['total_balance']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Profit</label>
                                <input type="text" name="total_profit" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['total_profit']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Bonus</label>
                                <input type="text" name="total_bonus" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['total_bonus']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Deposit</label>
                                <input type="text" name="total_deposits" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['total_deposits']; ?>">
                            </div>
              
                            <div class="form-group">
                                <label for="exampleInputbtc">Withdrawal Pin</label>
                                <input type="text" step="any" name="withdrawal_pin" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter pin" value="<?php echo $usereu['withdrawal_pin']; ?>">
                            </div>
    
                          
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Withdrawals</label>
                                <input type="text" name="total_withdrawals" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['total_withdrawals']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">KYC Status</label>
                                <select name="kyc_status" class="form-control">
                                    <option value="<?php echo $usereu['kyc_status']; ?>"><?php echo $usereu['kyc_status']; ?>
                                    </option>
                                    <option value="approved">Approve
                                    </option>
                                    <option value="pending">Pending
                                    </option>
                                    <option value="rejected">Reject
                                    </option>
                                </select>
                            </div>
                           
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->



            </div>
            <!--/.col (left) -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php";

?>