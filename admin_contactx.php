<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();

	if(isset($_SESSION['user_id_xxxxxxxx'])){
		
	$select_all_contact_us = $referrals->select_all_contact_us();	
		
	}else{ die(header('Location:home')); }


$myipAddress = $referrals->getrealip();
$referrals->visited_page('Admin Contact',$myipAddress);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
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
<body>
<header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/admin_nav.php"; ?>
                </div>
            </div>
        </div>
    </header>

<main class="mt-6" >
<section class="contact-section">
<div class="container">

<div class="row">
<div class="col-12 pt-5 pb-3">
<h2 class="contact-title">Admin Contact Us</h2>
</div>
<div class="col-lg-8 pb-3">
<?php
	if($select_all_contact_us[0] > 0){
	$i ="";
	$i = 0;
	while($check = mysqli_fetch_object($select_all_contact_us[1])){
		$i++;
	?>
              <div class="single-blog" style="border:solid 1px #ccc;margin-bottom:12px;padding:15px;">                
                <div class="blog-text">
                  <h4 style="color:brown;text-transform:uppercase;background:#ccc;padding:3px;"> <?php echo $check->subject; ?></h4>
				  <h5><?php echo $check->name.' ('.$check->phone.')'; ?></h5>
                  <p><?php echo $check->message; ?></p>
                </div>
				<div class="blog-meta">
				<span class="date-type"><i class="fa fa-calendar"></i> <?php echo $referrals->time_elapsed_string($check->timer); ?></span>
				<span class="date-type"><i class="fa fa-envelope"></i> <?php echo $check->email; ?></span>
                </div>
              </div>
			  
		<?php }			
			}else{
		echo '<h4><center style="color:brown;">NO FEEDBACK YET FROM USERS!!</center></h4>';
	} ?> 
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Imo State, Nigeria</h3>
<p class="py-0 my-0">Plot 07, 141/146 Industrial Layout Owerri</p>
<p class="py-0 my-0">Onitsha road.</p>
<p class="py-0 my-0">P.O box 334 Owerri,</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3> +234 816 477 6544</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="">support@disabilitycharity.com</a></h3>
<p>Send us a mail today!</p>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
<?php include './components/footer.php'; ?>

<div id="back-top">
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

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