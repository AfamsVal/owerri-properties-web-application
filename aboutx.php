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
$referrals->visited_page('About',$myipAddress);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - About us</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Owerri, About Owerri property, About Owerri houses, meet MD Owerri property">

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

    <!--================================
=            Page Title            =
=================================-->
    <section class="page-title mt-6">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <!-- Title text -->
                    <h3>About Us</h3>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="images/about/about.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="about-content">
                        <h3 class="font-weight-bold">Introduction</h3>
                        <p>Owerri Property is our response to the current chaotic method of renting or acquiring property in Owerri. We could not find a solution to renting or buying properties in Owerri, so we decided build one. Not for us, but for everyone who seeks to sell or acquire property in this beautiful city we call home. We all are stakeholders..</p>
                        <p>It took us lots of time and effort to build this and it is with great pleasure we share the results with you.</p>
                        <p>Owerriproperty is for prospective tenants seeking to rent house, landowners seeking to sell lands, real estate agents and companies.</p>
                        <p>I am pleased to share this platform with you and it gladens my heart each time you use our solution <a class="text-primary" href="https/www.owerriproperty.com">(Owerri Property)</a> to meet your real estate needs in Owerri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading text-center text-capitalize font-weight-bold pb-5">
                        <h2>our team</h2>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" src="images/team/team1.jpg" class="img-fluid w-100"
                            alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">Mr. Kingsly</h5>
                            <p class="card-text">Founder / CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" src="images/team/team1.jpg" class="img-fluid w-100"
                            alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">Joy Kenkwo</h5>
                            <p class="card-text">MD, Owerriproperty</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" src="images/team/team1.jpg" class="img-fluid w-100"
                            alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">Eleanora</h5>
                            <p class="card-text">Accountant</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6">
                    <div class="card my-3 my-lg-0">
                        <img class="card-img-top" src="images/team/team1.jpg" class="img-fluid w-100"
                            alt="Card image cap">
                        <div class="card-body bg-gray text-center">
                            <h5 class="card-title">John</h5>
                            <p class="card-text">Marketer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-smile-o d-block"></i>
                        <span class="counter my-2 d-block" data-count="2314">850</span>
                        <h5>Happy Customers</h5>
                        </script>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-user-o d-block"></i>
                        <span class="counter my-2 d-block" data-count="1013">2.1K</span>
                        <h5>Active Members</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-bookmark-o d-block"></i>
                        <span class="counter my-2 d-block" data-count="2413">622</span>
                        <h5>Verified Ads</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                    <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-home d-block"></i>
                        <span class="counter my-2 d-block" data-count="200">1K+</span>
                        <h5>Properties</h5>
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