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
    <title>Owerriproperty.com</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

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
    <section class="page-search mt-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search nice-select-white">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="form-group col-xl-10 col-lg-9 col-md-6">
                                    <input type="text" class="form-control my-2 my-lg-0" id="inputtext4"
                                        placeholder="What are you looking for">
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
    <section class="section-sm mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-dark">
                        <h2 class="text-white">My Properties</h2>
                        <p class="text-white">700 Results found</p>
                        <p>
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary mt-2 active    ">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Properties
                         </button>
                        </p>                        
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
                <div class="col-lg-9 col-md-8">
                  
                    <!-- ad listing list  -->
                    <div class="ad-listing-list mt-20">
                        <div class="row p-lg-3 p-sm-5 p-4">
                            <div class="col-lg-4 align-self-center">
                                <a href="single.php">
                                    <img src="images/products/products-1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-10">
                                        <div class="ad-listing-content">
                                            <div>
                                                <a href="single.php" class="font-weight-bold">Interior Design</a>
                                            </div>
                                            <ul class="list-inline mt-2 mb-3">
                                                <li class="list-inline-item"><a href="category.php"> <i
                                                            class="fa fa-folder-open-o"></i> Electronics</a></li>
                                                <li class="list-inline-item"><a href="category-2.php"><i
                                                            class="fa fa-calendar"></i>26th December</a></li>
                                            </ul>
                                            <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Explicabo, aliquam!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="product-ratings float-lg-right pb-3">
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
                    <div class="ad-listing-list mt-20">
                        <div class="row p-lg-3 p-sm-5 p-4">
                            <div class="col-lg-4 align-self-center">
                                <a href="single.php">
                                    <img src="images/products/products-2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-10">
                                        <div class="ad-listing-content">
                                            <div>
                                                <a href="single.php" class="font-weight-bold">Clean Toyota Car</a>
                                            </div>
                                            <ul class="list-inline mt-2 mb-3">
                                                <li class="list-inline-item"><a href="category.php"> <i
                                                            class="fa fa-folder-open-o"></i> Electronics</a></li>
                                                <li class="list-inline-item"><a href="category-2.php"><i
                                                            class="fa fa-calendar"></i>26th December</a></li>
                                            </ul>
                                            <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Explicabo, aliquam!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="product-ratings float-lg-right pb-3">
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
                    <div class="ad-listing-list mt-20">
                        <div class="row p-lg-3 p-sm-5 p-4">
                            <div class="col-lg-4 align-self-center">
                                <a href="single.php">
                                    <img src="images/products/products-3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-10">
                                        <div class="ad-listing-content">
                                            <div>
                                                <a href="single.php" class="font-weight-bold">3 Bedroom Flat</a>
                                            </div>
                                            <ul class="list-inline mt-2 mb-3">
                                                <li class="list-inline-item"><a href="category.php"> <i
                                                            class="fa fa-folder-open-o"></i> Electronics</a></li>
                                                <li class="list-inline-item"><a href="category-2.php"><i
                                                            class="fa fa-calendar"></i>26th December</a></li>
                                            </ul>
                                            <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Explicabo, aliquam!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="product-ratings float-lg-right pb-3">
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
                    <div class="ad-listing-list mt-20">
                        <div class="row p-lg-3 p-sm-5 p-4">
                            <div class="col-lg-4 align-self-center">
                                <a href="single.php">
                                    <img src="images/products/products-4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-10">
                                        <div class="ad-listing-content">
                                            <div>
                                                <a href="single.php" class="font-weight-bold">Clean Toyota Car</a>
                                            </div>
                                            <ul class="list-inline mt-2 mb-3">
                                                <li class="list-inline-item"><a href="category.php"> <i
                                                            class="fa fa-folder-open-o"></i> Electronics</a></li>
                                                <li class="list-inline-item"><a href="category-2.php"><i
                                                            class="fa fa-calendar"></i>26th December</a></li>
                                            </ul>
                                            <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Explicabo, aliquam!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="product-ratings float-lg-right pb-3">
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
                    <div class="ad-listing-list mt-20">
                        <div class="row p-lg-3 p-sm-5 p-4">
                            <div class="col-lg-4 align-self-center">
                                <a href="single.php">
                                    <img src="images/products/products-1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-10">
                                        <div class="ad-listing-content">
                                            <div>
                                                <a href="single.php" class="font-weight-bold">Interior Design</a>
                                            </div>
                                            <ul class="list-inline mt-2 mb-3">
                                                <li class="list-inline-item"><a href="category.php"> <i
                                                            class="fa fa-folder-open-o"></i> Electronics</a></li>
                                                <li class="list-inline-item"><a href="category-2.php"><i
                                                            class="fa fa-calendar"></i>26th December</a></li>
                                            </ul>
                                            <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Explicabo, aliquam!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="product-ratings float-lg-right pb-3">
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
                    <!-- ad listing list  -->

                    <!-- pagination -->
                    <div class="pagination justify-content-center py-4">
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
                    </div>
                    <!-- pagination -->
                </div>


            </div>
        </div>
    </section>

    <!-- Modal Box Starts Here
//////////////////////////// -->
 <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title font-weight-bold text-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New Property</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form class="row" action="/action_page.php">
  <div class="form-group col-12">
    <input type="email" class="form-control" placeholder="Property name">
  </div>
  <div class="form-group col-12">
    <input type="text" class="form-control" placeholder="Price">
  </div>
  <div class="form-group col-12">
    <input type="text" class="form-control" maxlength="20" placeholder="Location">
  </div>
  
  <div class="form-group col-12">
  <textarea class="form-control" rows="3"  maxlength="300" placeholder="Description"></textarea>
</div>  

  <div class="form-group col-6 pr-1">
  <select class="form-control w-100">
    <option>category</option>
    <option>Land</option>
    <option>House</option>
    <option>Office</option>
    <option>Cars</option>
  </select>
</div>
<div class="form-group col-6 pl-1">
  <select class="form-control w-100">
    <option>Type</option>
    <option>Brand New</option>
    <option>Used</option>
  </select>
</div>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary active" data-dismiss="modal"><i class="fa fa-plus" aria-hidden="true"></i> Submit Property</button>
        <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

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