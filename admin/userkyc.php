<?php
include "includes/header.php";

$sqldepo = "SELECT * FROM kyc_submissions ORDER BY created_at DESC";
$querydepo = mysqli_query($conn, $sqldepo);

if(isset($_POST['Approve'])){
    $id = $_POST['id'];
    $user_id = $_POST['userid'];
    $status = "approved";
    $sqlkyc = "UPDATE kyc_submissions set status = '$status' WHERE id = '$id'";
    $querykyc = mysqli_query($conn, $sqlkyc);

    $sqlkycu = "UPDATE users set kyc_status = '$status' WHERE id = '$user_id'";
    $querykycu = mysqli_query($conn, $sqlkycu);
    header("location:userkyc.php");
}

if(isset($_POST['Reject'])){
    $id = $_POST['id'];
    $user_id = $_POST['userid'];
    $status = "rejected";
    $sqlkyc = "UPDATE kyc_submissions set status = '$status' WHERE id = '$id'";
    $querykyc = mysqli_query($conn, $sqlkyc);

    $sqlkycu = "UPDATE users set kyc_status = '$status' WHERE id = '$user_id'";
    $querykycu = mysqli_query($conn, $sqlkycu);
    header("location:userkyc.php");
}
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            jarvistradepro KYC List

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Home</a></li>
            <li class="active">kyc</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">KYC</h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right"
                                    style="width: 150px;" placeholder="Search" />
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>


                                <th>Email</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>DOB</th>
                                <th>Social Media</th>
                                <th>Document Type</th>
                                <th>Document Front</th>
                                <th>Document Back</th>
                                <th>Status</th>
                                <th>Submission Date</th>
                                <th>Action</th>

                            </tr>
                            <?php while ($depo = mysqli_fetch_assoc($querydepo)) {?>
                            <tr>
                                <td><?php echo $depo['email']; ?></td>
                                <td><?php echo $depo['first_name']; ?></td>
                                <td><?php echo $depo['last_name']; ?></td>
                                <td><?php echo $depo['phone_number']; ?></td>
                                <td><?php echo $depo['address']; ?></td>
                                <td><?php echo $depo['city']; ?></td>
                                <td><?php echo $depo['state']; ?></td>
                                <td><?php echo $depo['country']; ?></td>
                                <td><?php echo $depo['dob']; ?></td>
                                <td><?php echo $depo['social_media']; ?></td>
                                <td><?php echo $depo['document_type']; ?></td>
                                <td><a href="../dashboard/<?php echo $depo['front_image_path']; ?>" target="__blank"
                                        class="btn btn-block btn-success btn-xs">Download</a></td>
                                <td><a href="../dashboard/<?php echo $depo['back_image_path']; ?>" target="__blank"
                                        class="btn btn-block btn-success btn-xs">Download</a></td>
                                <td><?php echo $depo['status']; ?></td>
                                <td><?php echo $depo['created_at']; ?></td>
                                <?php if($depo['status'] == "pending"){ ?>
                                <td><form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $depo['id']; ?>">
                                    <input type="hidden" name="userid" value="<?php echo $depo['user_id']; ?>">
                                    <button class="btn btn-success" type="submit" name="Approve">Approve</button>
                                </form></td>
                                <td><form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $depo['id']; ?>">
                                    <input type="hidden" name="userid" value="<?php echo $depo['user_id']; ?>">
                                    <button class="btn btn-danger" type="submit" name="Reject">Reject</button>
                                </form></td>
                                <?php }else{ ?>
                                    <td><span><?php echo $depo['status']; ?></span></td>
                                <?php } ?>
                                



                            </tr>
                            <?php }?>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php";

?>