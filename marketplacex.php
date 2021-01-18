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
                                <div class="form-group col-xl-4 col-lg-3 col-md-6">
                                    <input type="text" class="form-control my-2 my-lg-0" id="inputtext4"
                                        placeholder="What are you looking for">
                                </div>
                                <div class="form-group col-lg-3 col-md-6">
                                    <select class="w-100 form-control my-2 my-lg-0">
                                        <option>Category</option>
                                        <option value="1">Top rated</option>
                                        <option value="2">Lowest Price</option>
                                        <option value="4">Highest Price</option>
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
                        <h2>Results For "Electronics"</h2>
                        <p>123 Results on 12 December, 2020</p>
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

                        <div class="widget price-range w-100">
                            <h4 class="widget-header">Price Limit</h4>
                            <div class="block">
                                <input class="range-track w-100" type="text" placeholder="E.g 35000">
                                <div class="d-flex justify-content-between mt-2">
                                    <span class="value">Maximum Amount</span>
                                </div>
                            </div>
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
                    <div class="category-search-filter">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-left">
                                <div class="view">
                                    <strong>View All</strong>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
                                <strong>Filter: </strong>
                                <select>
                                    <option>Most Recent</option>
                                    <option value="1">Most Popular</option>
                                    <option value="2">Lowest Price</option>
                                    <option value="4">Highest Price</option>
                                </select>
                            </div>

                        </div>
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
                        </div>
                    </div>
                    <div class="pagination justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="category.php" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="category.php">1</a></li>
                                <li class="page-item active"><a class="page-link" href="category.php">2</a></li>
                                <li class="page-item"><a class="page-link" href="category.php">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="category.php" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
    <script src="plugins/jquery/jquery.min.php"></script>
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/bootstrap-slider.js"></script>
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>


    <script src="js/script.js"></script>

</body>


<!-- Mirrored from demo.themefisher.com/classimax/category.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 11:40:29 GMT -->

</html>