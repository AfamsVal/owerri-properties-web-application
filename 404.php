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
$referrals->visited_page('404',$myipAddress);


$host =  $_SERVER["HTTP_HOST"];
	$host  = $host == 'localhost' ?  'http://localhost/RealEstate/' : "https://www.owerriproperty.com/"
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - 404</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Owerri, Owerri property, 404">

    <!-- favicon -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- 
  Essential stylesheets
  =====================================-->
    <link href="<?php echo $host; ?>plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $host; ?>plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="<?php echo $host; ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $host; ?>plugins/slick/slick.css" rel="stylesheet">
    <link href="<?php echo $host; ?>plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="<?php echo $host; ?>plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="<?php echo $host; ?>css/style.css" rel="stylesheet">

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

    <section class="section bg-gray mt-6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    <div class="404-img">
                        <img src="<?php echo $host; ?>images/404/404.png" class="img-fluid" alt="404">
                    </div>
                    <div class="404-content">
                        <h1 class="display-1 pt-1 pb-2">Opps!</h1>
                        <p class="px-3 pb-2 text-dark">Something went wrong,we can't find the page that you are looking
                            for :(But
                            there is a lot more for you!</p>
                        <a href="indexx.php" class="btn btn-info">GO HOME</a>
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