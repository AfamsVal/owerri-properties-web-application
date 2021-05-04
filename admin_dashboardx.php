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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/admin_nav.php"; ?>
                </div>
            </div>
        </div>
    </header>

    <!--================================
=            Page Title            =
=================================-->
    <section class="mt-6">
        <!-- Container Start -->
        <div class="container-fluid">
            <div class="row mb-5 mt-3 bg-dark">
                <div class="col-md-12 text-center">
                    <!-- Title text -->
                    <h1 class="text-white py-2">All Users (<?php echo $select_all_users[0]; ?>)</h1>
                    <?php
	if($select_all_users[0] > 0){
		echo '					
		<div class="table-responsive">          
  <table class="table table-bordered table-striped" id="delTable" style="background:#ccd;">
    <thead style="background:grey;color:#fff;">
      <tr>
        <th>ID</th>
        <th>NAME</th>
		<th>PHONE</th>
		<th>EMAIL</th>
        <th>ADDRESS</th>
        <th>REG. DATE</th>
		<th>STATE</th>
		<th>PROPERTIES</th>
		<th>BUZ NAME</th>
		<th>BUZ ADDRESS</th>
		<th>BUZ DESCRIPTION</th>
		<th>BUZ CREATED</th>
		<th>ACTION</th>
      </tr>
    </thead>
    <tbody>';
	$i ="";
	$i = 0;
	while($check = mysqli_fetch_object($select_all_users[1])){
		$i++;
        $c = $referrals->my_property_count($check->id);
	?>
      <tr id="evt_<?php echo $check->id; ?>">
        <td><?php echo $i; ?></td>
		<td><?php echo $check->last_name.' '.$check->first_name; ?></td>
        <td> <?php echo $check->phone; ?></td>
		<td> <?php echo $check->email; ?></td>		
		<td> <?php echo $check->address; ?></td>		
		<td> <?php echo date("m-d-Y", $check->reg_date); ?></td>		
		<td> <?php echo $check->state; ?></td>		
		<td> <?php  echo $c;  ?></td>
        <td> <?php echo $check->business_name; ?></td>		
        <td> <?php echo $check->business_address; ?></td>		
        <td> <?php echo $check->business_description; ?></td>		
        <td> <?php echo date("m-d-Y", $check->business_reg_date); ?></td>		
		<td> 
        <?php
        if($check->is_blocked){
            ?>
        <button data-id="<?php echo $check->id; ?>" data-role="unblock-user" class="btn btn-info py-1"><i class="fas fa-user-slash"></i> Unblock</button>
        <?php
        }else{
           ?>
        <button data-id="<?php echo $check->id; ?>" data-role="block-user" class="btn btn-danger py-1"><i class="fa fa-ban" aria-hidden="true"></i> Block</button>

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

    <script>
    $(document).ready(function(){
		$(document).on('click','button[data-role="block-user"]',function(){
			if (confirm("Are you sure you want to block this user?")){
				$(this).html('<i class="fa fa-spinner fa-spin"></i> Block');
				var block_user_id = $(this).data('id');
				$.ajax({
					   method: "POST",
					   url: "backend/api.php",
					   data: {block_user_id:block_user_id},
					   cache: false,
					   success: function(data)
					   {
							   if(data ==1){
							   //parent.fadeOut(300,function() {
							 $('#evt_'+block_user_id).slideUp('slow', function(){
								 $(this).remove();
								 });
								}else{
									alert(data);
								}
						}
				 });				
			}else{ return false; }
		});






////////////////////////////////
////////////UNBLOCK USER///
////////////////////////////////
$(document).on('click','button[data-role="unblock-user"]',function(){
			if (confirm("Are you sure you want to unblock this user?")){
				$(this).html('<i class="fa fa-spinner fa-spin"></i> Block');
				var unblock_user_id = $(this).data('id');
				$.ajax({
					   method: "POST",
					   url: "backend/api.php",
					   data: {unblock_user_id:unblock_user_id},
					   cache: false,
					   success: function(data)
					   {
							   if(data ==1){
							   //parent.fadeOut(300,function() {
							 $('#evt_'+unblock_user_id).slideUp('slow', function(){
								 $(this).remove();
								 });
								}else{
									alert(data);
								}
						}
				 });				
			}else{ return false; }
		});

    })
        </script>

</body>


</html>