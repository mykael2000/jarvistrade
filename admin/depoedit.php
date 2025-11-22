<?php
include "includes/header.php";
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../dash/PHPMailer-master/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$depoid = $_GET['id'];
$sqleu = "SELECT * FROM payments WHERE id='$depoid'";
$queryeu = mysqli_query($conn, $sqleu);
$usereu = mysqli_fetch_assoc($queryeu);
$message = "";

$userid = $usereu['client_id'];
$sqlSu = "SELECT * FROM users WHERE id='$userid'";
$querySu = mysqli_query($conn, $sqlSu);
$userSu = mysqli_fetch_assoc($querySu);
$firstname = $userSu['first_name'];
$email = $userSu['email'];
if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    
    $amount = $_POST['amount'];
    $created_at = $_POST['created_at'];
    $plan = $_POST['plan'];
    $sqlup = "UPDATE payments set status='$status', amount='$amount', plan='$plan', created_at='$created_at' WHERE id='$depoid'";
    $queryup = mysqli_query($conn, $sqlup);


    $message = '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Status Updated Successfully</div>
        </div>';
}
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            JarvisTrade Users List

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
                        <h3 class="box-title">Edit User Deposit</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" role="form">
                        <?php echo $message; ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    value="<?php echo $usereu['username']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Transaction ID</label>
                                <input type="text" name="tranx_id" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['tranx_id']; ?>" readonly>
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputusdt">Amount</label>
                                <input type="number" name="amount" class="form-control" id="exampleInputusdt"
                                    placeholder="Enter amount" value="<?php echo $usereu['amount']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Deposit Status</label>
                                <select name="status" class="form-control">
                                    <option value="<?php echo $usereu['status']; ?>"><?php echo $usereu['status']; ?>
                                    </option>
                                    <option value="completed">Completed
                                    </option>
                                    <option value="pending">pending
                                    </option>
                                    <option value="failed">Failed
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Plan</label>
                                <input type="text" name="plan" class="form-control" id="exampleInputltc"
                                    placeholder="Enter Plan" value="<?php echo $usereu['plan']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputusdt">Date of transaction</label>
                                <input type="text" name="created_at" class="form-control" id="exampleInputusdt"
                                    value="<?php echo $usereu['created_at']; ?>">
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