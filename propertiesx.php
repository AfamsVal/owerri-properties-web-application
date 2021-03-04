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
$referrals->visited_page('Properties',$myipAddress);

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - All properties</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Owerri, List of Owerri properties, Owerri houses, All available Owerri house to let">

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
    <section class="page-search mt-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search nice-select-white">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="form-group col-xl-4 col-lg-3 col-md-6">
                                    <input type="text" class="form-control my-2 my-lg-0" id="inputtext4"
                                        placeholder="What are you looking for">
                                </div>
                                <div class="form-group col-lg-3 col-md-6">
                                    <select class="w-100 form-control my-2 my-lg-0">
                                    <option value="All">Category</option>
                                    <option value="All">All</option>
                                    <option value="2">Cars</option>
                                    <option value="4">Land</option>
                                    <option value="4">House</option>
                                    <option value="4">Office</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3 col-md-6">
                                    <input type="text" class="form-control my-2 my-lg-0" id="inputLocation4"
                                        placeholder="Location">
                                </div>
                                <div class="form-group col-xl-2 col-lg-3 col-md-6">

                                    <button type="submit" class="btn btn-primary active w-100">Search Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-gray">
                        <h2>Results For All Properties</h2>
                        <p>700 Results found</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="category-sidebar">
                        <div class="widget category-list">
                            <h4 class="widget-header">Top Categories</h4>
                            <ul class="category-list">
                                <li><a href="category.php">Lands <span>193</span></a></li>
                                <li><a href="category.php">Houses <span>233</span></a></li>
                                <li><a href="category.php">Offices <span>183</span></a></li>
                                <li><a href="category.php">Cars <span>343</span></a></li>
                            </ul>
                        </div>

                        <div class="widget product-shorting">
                            <h4 class="widget-header">By Condition</h4>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Brand New
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Used
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-8" id="myData">
                      <!-- ad listing list  -->
                   

                    <!-- pagination -->
                    <!-- <div class="pagination justify-content-center py-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="ad-list-view.php" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="ad-list-view.php">1</a></li>
                                <li class="page-item active"><a class="page-link" href="ad-list-view.php">2</a></li>
                                <li class="page-item"><a class="page-link" href="ad-list-view.php">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="ad-list-view.php" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                    <!-- pagination -->
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

    //CODE FOR FETCHING OUT NEWS STARTS HERE
    var limit_full = 10;
	var start_full = 0;
	var action = 'inactive';
	function load_all_properties(limit_full,start_full){
		$.ajax({
			method:'POST',
			url:'backend/api.php',
			cache:false,
			data:{limit_full,start_full},
			success:function(data){
				if(start_full == 0 && data != ""){ $('#myData').html(''); }
				$('#myData').append(data);
				if(data == ""){
				if(start_full == 0){
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
		load_all_properties(limit_full,start_full);
	}

	$(window).scroll(function(){
			
		if($(window).scrollTop() + $(window).height() > $('.add_joke').height() && action == 'inactive'){
			action = 'active';
			start_full = start_full + limit_full;
			load_all_properties(limit_full,start_full);
		}

	})
	})

</script>

</body>

</html>