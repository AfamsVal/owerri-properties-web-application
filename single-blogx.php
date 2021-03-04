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
$referrals->visited_page('Blog',$myipAddress);

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
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="">

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
    <!--=================================
=            Single Blog            =
==================================-->
    <section class="blog single-blog section mt-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="single-post">
                        <h2>Donec id dolor in erat imperdiet.</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">by <a href="user-profile.php">Admin</a></li>
                            <li class="list-inline-item">Nov 22, 2016</li>
                        </ul>
                        <img src="images/blog/post-4.jpg" alt="article-01">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut
                            aliquip.ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                            sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

                        <p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                            quisquam est,
                            qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                            eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <ul class="social-circle-icons list-inline">
                            <li class="list-inline-item text-center"><a class="fa fa-facebook"
                                    href="https://themefisher.com/"></a></li>
                            <li class="list-inline-item text-center"><a class="fa fa-twitter"
                                    href="https://themefisher.com/"></a></li>
                            <li class="list-inline-item text-center"><a class="fa fa-google-plus"
                                    href="https://themefisher.com/"></a></li>
                            <li class="list-inline-item text-center"><a class="fa fa-pinterest-p"
                                    href="https://themefisher.com/"></a></li>
                            <li class="list-inline-item text-center"><a class="fa fa-linkedin"
                                    href="https://themefisher.com/"></a></li>
                        </ul>
                    </article>
                    <div class="block comment">
                        <h4>Leave A Comment</h4>
                        <form action="#">
                            <!-- Message -->
                            <div class="form-group mb-30">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="8" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <!-- Name -->
                                    <div class="form-group mb-30">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- Email -->
                                    <div class="form-group mb-30">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-transparent">Leave Comment</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Search Widget -->
                        <div class="widget search p-0">
                            <div class="input-group">
                                <input type="text" class="form-control" id="expire" placeholder="Search...">
                                <span class="input-group-addon"><i class="fa fa-search px-3"></i></span>
                            </div>
                        </div>
                        <!-- Category Widget -->
                        <div class="widget category">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Categories</h5>
                            <ul class="category-list">
                                <li><a href="category.php">Appearel <span class="float-right">(2)</span></a></li>
                                <li><a href="category.php">Accesories <span class="float-right">(5)</span></a></li>
                                <li><a href="category.php">Business<span class="float-right">(7)</span></a></li>
                                <li><a href="category.php">Entertaiment<span class="float-right">(3)</span></a></li>
                                <li><a href="category.php">Education<span class="float-right">(9)</span></a></li>
                            </ul>
                        </div>
                        <!-- Archive Widget -->
                        <div class="widget archive">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Archives</h5>
                            <ul class="archive-list">
                                <li><a href="ad-list-view.php">January 2017</a></li>
                                <li><a href="ad-list-view.php">February 2017</a></li>
                                <li><a href="ad-list-view.php">March 2017</a></li>
                                <li><a href="ad-list-view.php">April 2017</a></li>
                                <li><a href="ad-list-view.php">May 2017</a></li>
                            </ul>
                        </div>
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