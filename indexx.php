<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();
// $referrals->page_session_auth();


$uid = $_SESSION['user_id_xxxxxxxx'];
if($uid){
    $power = $referrals->power('users',$uid);
}

$myipAddress = $referrals->getrealip();
$referrals->visited_page('Dashboard',$myipAddress);


$host =  $_SERVER["HTTP_HOST"];
$host  = $host == 'localhost' ?  'http://localhost/RealEstate/' : "https://www.owerriproperty.com/"

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs #0062CC ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - buy and sell different kinds of properties</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Join the millions of users in Owerri who buy and sell different kinds of properties everyday">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Owerri, Owerri property, Owerri houses, Owerri house to let, House to let in Owerri, Land for sale in Owerri, Property, Imo property, Imo, Lands, Houses">

    <!-- favicon -->
    <link href="<?php echo $host; ?>images/favicon.png" rel="shortcut icon">

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
<div id="cover-spin"></div>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/nav_bar.php"; ?>
                </div>
            </div>
        </div>
    </header>

    <!--===============================
=            Hero Area            =
================================-->

    <section class="hero-area bg-1 text-center overly mt-6">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>Buy & Sell Near You</h1>
                        <p>Join the millions of users who buy and sell different kinds of properties <br> everyday in
                            local communities around
                            you</p>
                        <div class="short-popular-category-list text-center">
                            <h2>Popular Category</h2>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="category.php"><i class="fa fa-hotel"></i> Hotel</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.php"><i class="fa fa-grav"></i> Land</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.php"><i class="fa fa-car"></i> Cars</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.php"><i class="fa fa-building"></i> Office</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.php"><i class="fa fa-home"></i> House</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 align-content-center">
                                    <form>
                                        <div class="form-row">
                                            
                                            <div class="form-group col-lg-3 col-md-6">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                    <option value="All">LET PROPERTY</option>
                                                    <option value="All">1 BEDROOM FLAT</option>
                                                    <option value="2">2 BEDROOM FLAT</option>
                                                    <option value="4">3 BEDROOM FLAT</option>
                                                    <option value="4">4 BEDROOM FLAT</option>
                                                    <option value="4">OTHERS</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-lg-3 col-md-6">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                    <option value="All">LAND FOR SALE</option>
                                                    <option value="All">1 PLOT</option>
                                                    <option value="2">2 PLOTS</option>
                                                    <option value="4">3 PLOTS</option>
                                                    <option value="4">4 PLOTS</option>
                                                    <option value="4">OTHERS</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-6">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                    <option value="All">PRICE RANCE</option>
                                                    <option value="All">50,000 - 499,999</option>
                                                    <option value="2">500,000 - 999,999</option>
                                                    <option value="4">1,000,000 - 2,499,000</option>
                                                    <option value="4">2,500,000 - 4,999,000</option>
                                                    <option value="4">5,000,000 - Above</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
                                                <button type="submit" class="btn btn-primary active w-100">Search
                                                    Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>


    <!--===========================================
=            Popular deals section            =
============================================-->

    <section class="popular-deals section bg-gray">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Trending Adds</h2>
                        <p>Buy from one of our tending products today.</p>
                    </div>
                </div>
            </div>
             <div class="row">
                <!-- offer 01 --
                <div class="col-lg-12">
                    <div class="trending-ads-slide">
                        <div class="col-sm-12 col-lg-4">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                         <div class="price">Verified</div>
                                        <a href="single.php">
                                            <img class="card-img-top img-fluid" src="images/products/products-1.jpg"
                                                alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="single.php">Interior Design</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="single.php"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="category.php"><i class="fa fa-calendar"></i>26th December</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Explicabo, aliquam!</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card --
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                         <div class="price">Verified</div>
                                        <a href="single.php">
                                            <img class="card-img-top img-fluid" src="images/products/products-2.jpg"
                                                alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="single.php">Full Clean Toyota Car</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="single.php"><i class="fa fa-folder-open-o"></i>Furnitures</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="category.php"><i class="fa fa-calendar"></i>26th December</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Explicabo, aliquam!</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card --
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                         <div class="price">Verified</div>
                                        <a href="single.php">
                                            <img class="card-img-top img-fluid" src="images/products/products-3.jpg"
                                                alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="single.php">3 Bedroom Flat</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="single.php"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="category.php"><i class="fa fa-calendar"></i>26th December</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Explicabo, aliquam!</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card --
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                         <div class="price">Pending</div>
                                        <a href="single.php">
                                            <img class="card-img-top img-fluid" src="images/products/products-2.jpg"
                                                alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="single.php">Full Clean Toyota Car</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="single.php"><i class="fa fa-folder-open-o"></i>Furnitures</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="category.php"><i class="fa fa-calendar"></i>26th December</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Explicabo, aliquam!</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>  -->

            <div class="row mt-5  bg-light py-3">
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="about-content pt-4">
                        <h1 class="font-weight-bold" style="line-height:50px">Are you looking for a property to buy anywhere in Owerri?</h1>
                        <h3 class="mt-4" style="line-height:30px;">Welcome to Owerriproperty! This is Owerri foremost real estate marketplace. It is the largest clearing house for everyone in the real estate business in Owerri. It is the ideal place for the smart man or lady looking for a suitable home within this fast-growing and beautiful city in the eastern Nigerian heartland.</h3>
                        <button type="submit" class="btn btn-primary active w-100 mt-5">Search for Property</button>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="images/why-us.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>


    <!--==========================================
=            All Category Section            =
===========================================-->


            <div class="row py-2" style="margin-top:80px;">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>All Categories</h2>
                        <p>Feel free to go through all of our categories for better decision!</p>
                    </div>
                    <div class="product-grid-list">
                        <div class="row mt-30"  id="myData">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>


    <!--====================================
=            Call to Action            =
=====================================-->

    <section class="call-to-action overly bg-3 section-sm">
        <!-- Container Start -->
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col-md-8">
                    <div class="content-holder">
                        <h2>Browse and sell properties around you with ease. We make it smart, fast and simple.</h2>
                        <ul class="list-inline mt-30">
                            <li class="list-inline-item"><a class="btn btn-main" href="my-property">Add Listing</a>
                            </li>
                            <li class="list-inline-item"><a class="btn btn-secondary" href="properties">Browser
                                    Listing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
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

    //CODE FOR FETCHING OUT NEWS STARTS HERE
    var limit_full_h = 10;
	var start_full_h = 0;
	var action = 'inactive';
	function load_all_properties(limit_full_h,start_full_h){
		$.ajax({
			method:'POST',
			url:'backend/api.php',
			cache:false,
			data:{limit_full_h,start_full_h},
			success:function(data){
				if(start_full_h == 0 && data != ""){ $('#myData').html(''); }
				$('#myData').append(data);
				if(data == ""){
				if(start_full_h == 0){
				$('.data_info').html('<button type="button" onclick="location.reload();" class="btn btn-turquoise">NO PROPERTY YET..</button>');
					}else{
				$('.data_info').html('<button type="button" onclick="location.reload();" class="btn btn-turquoise">NO MORE PROPERTY FOUND FOR NOW!!</button>');
					}
				action = 'active';
				}else{
					$('.data_info').html('<img src="images/loader.gif" alt="Loading..." style="height:50px;">');
					action = 'inactive';
				}
				 $('#cover-spin').hide(0);
			}
		})
	}
	
	setTimeout(function(){  $('#cover-spin').hide(0); },7000);
	//End of function
	
		
	if(action == 'inactive'){
		action = 'active';
		load_all_properties(limit_full_h,start_full_h);
	}

	$(window).scroll(function(){
			
		if($(window).scrollTop() + $(window).height() > $('.add_joke').height() && action == 'inactive'){
			action = 'active';
			start_full_h = start_full_h + limit_full_h;
			load_all_properties(limit_full_h,start_full_h);
		}

	})
	})

</script>
</body>

</html>