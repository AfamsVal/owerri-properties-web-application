<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();
if(isset($_SESSION['user_id_xxxxxxxx'])){

// $myipAddress = $referrals->getrealip();
// $referrals->visited_page('Admin Page',$myipAddress);

}else{ die(header('Location:home')); }

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
<main class="mt-6">

<section class="contact-section">
<div class="container pb-3">

<div class="row">
<div class="col-12 my-3">
<h2 class="contact-title">All Visited Pages</h2>
</div>
<div class="col-lg-8">
<p class="aligne-right"><button type="button" data-role="clear_all_visit" class="aligne-right button button-contactForm boxed-btn">Clear All</button>
</p>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th><center>PAGE</center></th>
                    <th><center>PAGE COUNT</center></th>
                    <th><center>IP</center></th>
                    <th><center>IP COUNT</center></th>
                    <th><center>IP CHANGED</center></th>
                    <th><center>LAST SEEN</center></th>
                </tr>
            </thead>
            <tbody id="mywall">
            
            </tbody>
            </table>
            </div>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Imo State, Nigeria</h3>
<p class="text-dark py-0 my-0">Industrial Layout Owerri</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<p class="text-dark">Mon to Fri 9am to 6pm</p>
<h6> +2348029361486</h6>
<h6> +2349038751457</h6>

</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body mt-2">
<h6><a href="">info@owerriproperty .com</a></h6>
<p class="text-dark">Send us a mail today!</p>
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

<script>

	$(document).ready(function(){
			
	var limit_f = 30;
	var start_f = 0;
	var action = 'inactive';
	function load_all_news(limit_f,start_f){
		$.ajax({
			method:'POST',
			url:'backend/fetch_all_visitors.php',
			cache:false,
			data:{limit_f,start_f},
			success:function(data){
			$('#mywall').append(data);
			if(data == ""){
				if(start_f == 0){
			$('.data_info').html('<button type="button" onclick="location.reload();" class="btn btn-turquoise">NO PAGE FOR NOW!! </button>');
				}else{
			$('.data_info').html('<button type="button" onclick="location.reload();" class="btn btn-turquoise">NO MORE PAGES FOUND!! </button>');
				}
			action = 'active';
			}else{
				$('.data_info').html('<img src="images/load.gif" alt="Loading..." style="height:50px;">');
				action = 'inactive';
			}
			 $('#cover-spin').hide(0);
			}
		})
	}
	//End of function
	
		
	if(action == 'inactive'){
		action = 'active';
		load_all_news(limit_f,start_f);
	}
	$(window).scroll(function(){
			
		if($(window).scrollTop() + $(window).height() > $('.add_joke').height() && action == 'inactive'){
			action = 'active';
			start_f = start_f + limit_f;
				load_all_news(limit_f,start_f);
		}

	})



	
	
////////////////////////////////
////////////CLEAR ALL VISITED PAGES///
////////////////////////////////
$(document).on('click','button[data-role="clear_all_visit"]',function(){
	if (confirm("Are you sure you want to clear visited pages?")){
		$(this).html('<i class="fa fa-spinner fa-spin"></i> Clear All');
		$.ajax({
				method: "POST",
				url: "backend/api.php",
				data: {clear_all_visit:'clear_all_visit'},
				cache: false,
				success: function(data){
						if(data ==1){
							location.reload();
						}else{
							alert('failed to clear data!!');
						}
				}
				 });				
			}else{ return false; }
		});




	})
		
	</script>	
		
		

</html>