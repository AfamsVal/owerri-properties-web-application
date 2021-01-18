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
    <!--==================================
=            User Profile            =
===================================-->

    <section class="user-profile section mt-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- User Widget -->
                        <div class="widget user">
                            <!-- User Image -->
                            <div class="image d-flex justify-content-center">
                                <img src="images/user/user-thumb.jpg" alt="" class="">
                            </div>
                            <!-- User Name -->
                            <h5 class="text-center">Samanta Doe</h5>
                        </div>
                        <!-- Dashboard Links -->
                        <div class="widget user-dashboard-menu">
                            <ul>
                                <li><a href="indexx.php">Savings Dashboard</a></li>
                                <li><a href="indexx.php">Saved Offer <span>(5)</span></a></li>
                                <li><a href="indexx.php">Favourite Stores <span>(3)</span></a></li>
                                <li><a href="indexx.php">Recommended</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Edit Profile Welcome Text -->
                    <div class="widget welcome-message">
                        <h2>Edit profile</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    </div>
                    <!-- Edit Personal Info -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="widget personal-info">
                                <h3 class="widget-header user">Edit Personal Information</h3>
                                <form action="#">
                                    <!-- First Name -->
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" class="form-control" id="first-name">
                                    </div>
                                    <!-- Last Name -->
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" class="form-control" id="last-name">
                                    </div>
                                    <!-- File chooser -->
                                    <div class="form-group choose-file d-inline-flex">
                                        <i class="fa fa-user text-center px-3"></i>
                                        <input type="file" class="form-control-file mt-2 pt-1" id="input-file">
                                    </div>
                                    <!-- Comunity Name -->
                                    <div class="form-group">
                                        <label for="comunity-name">Comunity Name</label>
                                        <input type="text" class="form-control" id="comunity-name">
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <label class="form-check-label" for="hide-profile">
                                            <input class="form-check-input mt-1" type="checkbox" value=""
                                                id="hide-profile">
                                            Hide Profile from Public/Comunity
                                        </label>
                                    </div>
                                    <!-- Zip Code -->
                                    <div class="form-group">
                                        <label for="zip-code">Zip Code</label>
                                        <input type="text" class="form-control" id="zip-code">
                                    </div>
                                    <!-- Submit button -->
                                    <button class="btn btn-transparent">Save My Changes</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Change Password -->
                            <div class="widget change-password">
                                <h3 class="widget-header user">Edit Password</h3>
                                <form action="#">
                                    <!-- Current Password -->
                                    <div class="form-group">
                                        <label for="current-password">Current Password</label>
                                        <input type="password" class="form-control" id="current-password">
                                    </div>
                                    <!-- New Password -->
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control" id="new-password">
                                    </div>
                                    <!-- Confirm New Password -->
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirm-password">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class="btn btn-transparent">Change Password</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Change Email Address -->
                            <div class="widget change-email mb-0">
                                <h3 class="widget-header user">Edit Email Address</h3>
                                <form action="#">
                                    <!-- Current Password -->
                                    <div class="form-group">
                                        <label for="current-email">Current Email</label>
                                        <input type="email" class="form-control" id="current-email">
                                    </div>
                                    <!-- New email -->
                                    <div class="form-group">
                                        <label for="new-email">New email</label>
                                        <input type="email" class="form-control" id="new-email">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class="btn btn-transparent">Change email</button>
                                </form>
                            </div>
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