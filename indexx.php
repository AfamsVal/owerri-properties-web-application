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

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs #0062CC ** -->
    <meta charset="utf-8">
    <title>Owerriproperty.com</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Join the millions of users in who buy and sell different kinds of properties everyday in local communities around you">
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
                                            <div class="form-group col-xl-4 col-lg-3 col-md-6">
                                                <input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
                                                    placeholder="What are you looking for">
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                    <option>Category</option>
                                                    <option value="1">Top rated</option>
                                                    <option value="2">Lowest Price</option>
                                                    <option value="4">Highest Price</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6">
                                                <input type="text" class="form-control my-2 my-lg-1" id="inputLocation4"
                                                    placeholder="Location">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Trending Adds</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- offer 01 -->
                <div class="col-lg-12">
                    <div class="trending-ads-slide">
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
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
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
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
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
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
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
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
            </div>
        </div>
    </section>



    <!--==========================================
=            All Category Section            =
===========================================-->

    <section class=" section">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>All Categories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
                    </div>
                    <div class="product-grid-list">
                        <div class="row mt-30">
                            <div class="col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.php">
                                                <img class="card-img-top img-fluid" src="images/products/products-1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.php">Interior Design</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.php"><i
                                                            class="fa fa-folder-open-o"></i>Electronics</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.php"><i class="fa fa-calendar"></i>26th
                                                        December</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.php">
                                                <img class="card-img-top img-fluid" src="images/products/products-2.jpg"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.php">Clean Toyota Car</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.php"><i
                                                            class="fa fa-folder-open-o"></i>Furnitures</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.php"><i class="fa fa-calendar"></i>26th
                                                        December</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="single.php">
                                                <img class="card-img-top img-fluid" src="images/products/products-3.jpg"
                                                    alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="single.php">3 Bedroom Flat</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="single.php"><i
                                                            class="fa fa-folder-open-o"></i>Electronics</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="category.php"><i class="fa fa-calendar"></i>26th
                                                        December</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Explicabo, aliquam!</p>
                                            <div class="product-ratings">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item selected"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
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
                        <h2>Start today to get more exposure and
                            grow your business</h2>
                        <ul class="list-inline mt-30">
                            <li class="list-inline-item"><a class="btn btn-main" href="ad-listing.php">Add Listing</a>
                            </li>
                            <li class="list-inline-item"><a class="btn btn-secondary" href="category.php">Browser
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

</body>

</html>