<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();
// $referrals->page_session_auth();
if(!isset($_SESSION['admin_id_xxxxxxxx'])) header("Location:login");

$uid = $_SESSION['user_id_xxxxxxxx'];
if($uid){
    $power = $referrals->power('users',$uid);
}

$select_all_users = $referrals->select_all_users();

$myipAddress = $referrals->getrealip();
$referrals->visited_page('About',$myipAddress);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - Admin</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Admin">

    <!-- favicon -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- 
  Essential stylesheets
  =====================================-->
    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/nav_bar.php"; ?>
                </div>
            </div>
        </div>
    </header>

    <!--================================
=            Page Title            =
=================================-->
    <section class="mt-6">
        <!-- Container Start -->
        <div class="container">
            <div class="row mb-5 mt-3 bg-dark">
                <div class="col-md-12 text-center">
                    <!-- Title text -->
                    <h1 class="text-white py-2">All Users</h1>
                    <?php
	if($select_all_users[0] > 0){
		echo '					
		<div class="table-responsive">          
  <table class="table table-bordered" id="delTable" style="background:#ccd;">
    <thead style="background:grey;color:#fff;">
      <tr>
        <th>#</th>
        <th>NAME</th>
		<th>PHONE</th>
		<th>EMAIL</th>
        <th>ADDRESS</th>
		<th>STATE</th>
		<th>PROPERTIES</th>
		<th>ACTION</th>
      </tr>
    </thead>
    <tbody>';
	$i ="";
	$i = 0;
	while($check = mysqli_fetch_object($select_all_users[1])){
		$i++;
	?>
      <tr>
        <td><?php echo $i; ?></td>
		<td><?php echo $check->last_name.' '.$check->first_name; ?></td>
        <td> <?php echo $check->phone; ?></td>
		<td> <?php echo $check->email; ?></td>		
		<td> <?php echo $check->address; ?></td>		
		<td> <?php echo $check->state; ?></td>		
		<td> 2</td>		
		<td> 
        <?php
        if($check->is_blocked){
            ?>
        <button type="submit" id="login" class="btn btn-info py-1">Unblock</button>
        <?php
        }else{
           ?>
        <button type="submit" id="login" class="btn btn-danger py-1"><i class="fa fa-ban" aria-hidden="true"></i> Block</button>

           <?php 
        }
        ?>
        </td>		
      </tr>
         	<?php }
			echo '</tbody></table></div>';
			
			}else{
		echo '<h4><center style="color:brown;">NO REGISTERED USERS YET!!</center></h4>';
	} ?> 
                </div>
            </div>


        </div>
    </section>

    <!--============================
=            Footer            =
=============================-->

    <?php include "components/footer.php" ?>
    <!-- 
Essential Scripts
=====================================-->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/bootstrap-slider.js"></script>
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>


    <script src="js/script.js"></script>

</body>


</html>