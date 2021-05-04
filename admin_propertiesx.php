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

$property_count = $referrals->count_item('properties','property_name');
$fetch_all_property = $referrals->fetch_all_admin_property();

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
                    <h1 class="text-white py-2">All Properties (<?php echo $property_count; ?>)</h1>
                    <?php
	if($fetch_all_property[0] > 0){
		echo '					
		<div class="table-responsive">          
  <table class="table table-bordered table-striped" id="delTable" style="background:#ccd;">
    <thead style="background:grey;color:#fff;">
      <tr>
        <th>#</th>
        <th>ID</th>
        <th>IMAGES</th>
        <th>PROPERTY NAME</th>
		<th>PRICE</th>
		<th>LOCATION</th>
        <th>DESCRIPTION</th>
		<th>IDENTITY</th>
		<th>AVAILABLE</th>
		<th>CREATED</th>
		<th>ACTION</th>
		<th>ACTION</th>
      </tr>
    </thead>
    <tbody>';
	$i ="";
	$i = 0;
	while($check = mysqli_fetch_object($fetch_all_property[1])){
		$i++;
        $c = $referrals->my_property_count($check->id);
	?>
      <tr id="evt_<?php echo $check->id; ?>">
        <td><?php echo $i; ?></td>
        <td><?php echo $check->uid; ?></td>
        <td><?php echo ' <img class="d-block w-100" src="'.$check->photo.'" alt="Property">'; ?></td>
		<td><?php echo $check->property_name; ?></td>
        <td> <?php echo $check->property_price; ?></td>
		<td> <?php echo $check->location; ?></td>		
        <td> <?php echo $check->description; ?></td>
		<td> <?php echo $check->identity; ?></td>		
		<td> <?php echo $check->available ? '<strong style="color:green">YES</strong>' : 'SOLD'; ?></td>				
		<td> <?php echo date("m-d-Y", $check->timer); ?></td>		
		<td> 
        <?php
        if($check->verified){
            ?>
       <button data-id="<?php echo $check->id; ?>" data-role="pending" class="btn btn-xs btn-success py-1">Verified</button>
        <?php
        }else{
           ?>
               <button data-id="<?php echo $check->id; ?>" data-role="verifing" class="btn btn-xs btn-warning py-1"> Pending</button>
           <?php 
        }
        ?>
        </td>	
        <td>
        <button data-id="<?php echo $check->id; ?>" data-role="delete-props" class="btn btn-danger py-1"><i class="fas fa-user-slash"></i> Delete</button>
        </td>	
      </tr>
         	<?php }
			echo '</tbody></table></div>';
			
			}else{
		echo '<h4><center style="color:brown;">NO PROPERTY FOUND!!</center></h4>';
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



		$(document).on('click','button[data-role="verifing"]',function(){
            var btn = $(this);
				btn.html('<i class="fa fa-spinner fa-spin"></i> Pending');
				var verifying_id = btn.data('id');
				$.ajax({
					   method: "POST",
					   url: "backend/api.php",
					   data: {verifying_id:verifying_id},
					   cache: false,
					   success: function(data)
					   {
							   if(data ==1){
							   //parent.fadeOut(300,function() {
							 btn.removeClass('btn-warning')
							 btn.addClass('btn-success')
                             btn.html('Verified');
                             btn.attr('data-role','pending');
								}else{
									alert(data);
								}
						}
				 });				
		});







		$(document).on('click','button[data-role="pending"]',function(){
            var btn = $(this);
				btn.html('<i class="fa fa-spinner fa-spin"></i> Verified');
				var pending_id = btn.data('id');
				$.ajax({
					   method: "POST",
					   url: "backend/api.php",
					   data: {pending_id:pending_id},
					   cache: false,
					   success: function(data)
					   {
							   if(data ==1){
							   //parent.fadeOut(300,function() {
							 btn.removeClass('btn-success')
							 btn.addClass('btn-warning')
                             btn.html('Pending');
                             btn.attr('data-role','verifying');
								}else{
									alert(data);
								}
						}
				 });				
		});






////////////////////////////////
////////////DELETE PROPERTY///
////////////////////////////////
$(document).on('click','button[data-role="delete-props"]',function(){
			if (confirm("Are you sure you want to delete this property?")){
				$(this).html('<i class="fa fa-spinner fa-spin"></i> Block');
				var delete_props_id = $(this).data('id');
				$.ajax({
					   method: "POST",
					   url: "backend/api.php",
					   data: {delete_props_id:delete_props_id},
					   cache: false,
					   success: function(data)
					   {
							   if(data ==1){
							   //parent.fadeOut(300,function() {
							 $('#evt_'+delete_props_id).slideUp('slow', function(){
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