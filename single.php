<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();
// $referrals->page_session_auth();


$uid = $_SESSION['user_id_xxxxxxxx'];

if(isset($_GET['id'])){
	$property_id = $referrals->sql_clean(preg_replace('#[^0-9]#i','',$_GET['id']));
    $property_details = $referrals->power('properties',$property_id);
    if(!$property_details[0]) die(header('Location:home'));
        


if($uid){
    $power = $referrals->power('users',$uid);
}

$user = $referrals->power('users',$property_details[2]->uid);
$first_name = $user[2]->first_name;
$last_name = $user[2]->last_name;
$phone = $user[2]->phone;

$myipAddress = $referrals->getrealip();
$referrals->visited_page('Blog',$myipAddress);
}else{
    
    die(header('Location:home'));

}
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
    <link href="../images/favicon.png" rel="shortcut icon">

    <!-- 
  Essential stylesheets
  =====================================-->
    <link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/slick/slick.css" rel="stylesheet">
    <link href="../plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">

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
                        <h2><?php echo $property_details[2]->property_name; ?></h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">by <a href="user-profile.php"><?php echo $first_name.' '.$last_name; ?></a></li>
                            <li class="list-inline-item"><?php echo $referrals->time_elapsed_string($property_details[2]->timer); ?></li>
                        </ul>
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner bg-gray" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="../<?php echo $property_details[2]->photo; ?>" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
        </div>
        <!-- <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div> -->
    </div>

    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<div class="pb-3 bg-gray mb-3">
                        <h2 class="text-center">Interested in this property?</h2>

                        <h3 class="text-center">Call <span class="font-weight-bold py-1 px-1 text-info"><?php echo $phone; ?></span></h3>
                        </div>

                        <div>
                        <h3>Property Description</h3>    
                        <?php echo $property_details[2]->description; ?></div>

                        <div class="pt-3">
                        <h3>Property Details</h3> 
    <p>
    <div class="table-responsive">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Type</th>
        <td><?php echo $property_details[2]->type; ?></td>
        </tr>
        <tr>
        <th>Property Ref</th>
        <td><?php echo $property_details[2]->identity; ?></td>
        </tr>
        <tr>
        <th>Location</th>
        <td><?php echo $property_details[2]->location; ?></td>
        </tr>
        <tr>
        <th>Status</th>
        <td><?php echo $property_details[2]->available ? 'AVAILABLE' : '<strong style="color:red">SOLD OUT</strong>'; ?></td>
      </tr>
    </thead>
  </table>
</div>
    </p>
                       
                    </article>
                    <div class="block comment">
                        <h4>Contact Agent via Email</h4>
                        <form action="#">
                            <!-- Message -->
                            <div class="form-group mb-30">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" required></textarea>
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
                            <button class="btn btn-transparent">Drop a Message</button>
                        </form>
                    </div>
                    <div class="p-3 bg-gray text-justify">
                   <h3 style="color:brown"> Disclaimer </h3>
<small>The information displayed about this property comprises a property advertisement. Owerri Property makes no warranty as to the accuracy or completeness of the advertisement or any linked or associated information, and we have no control over the content. This property listing does not constitute property particulars.The information is provided and maintained by Alhicon Global Investment Ltd. Nigeria Property Centre shall not in any way be held liable for the actions of any agent and/or property owner/landlord on or off this website.</small>
</div>
</div>
                <div class="col-lg-4">
                    <div class="sidebar">
                          <!-- Archive Widget -->
                          <div class="widget archive">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Marketed By</h5>
                            <h6 style="font-size:18px;color:#666;">Alhicon Global Investment Ltd</h6>
                            <p class="text-dark pr-2 pt-2"><i class="fa fa-map-marker" aria-hidden="true"></i> Alhicon Global Investment Ltd2</p>
                            <p class="text-dark pr-2"><i class="fa fa-phone" aria-hidden="true"></i> 080748339932</p>
                            <p class="text-dark pr-2"><i class="fa fa-whatsapp" aria-hidden="true"></i> 080748339932</p>
                            <p class="text-dark pr-2"><i class="fa fa-envelope" aria-hidden="true"></i> myceet1@gmail.com</p>
                        </div>
                        <div class="widget category">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Other Properties</h5>
                            <ul class="category-list">
                                <li><a href="category.php">Cars for sale<span class="float-right">(3)</span></a></li>
                                <li><a href="category.php">Lands for sale <span class="float-right">(2)</span></a></li>
                                <li><a href="category.php">Houses (Buy/Rent)<span class="float-right">(5)</span></a></li>
                                <li><a href="category.php">Offices for rent<span class="float-right">(7)</span></a></li>
                                <li><a href="category.php">All Properties<span class="float-right">(9)</span></a></li>
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
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/bootstrap/popper.min.js"></script>
    <script src="../plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../plugins/bootstrap/bootstrap-slider.js"></script>
    <script src="../plugins/tether/js/tether.min.js"></script>
    <script src="../plugins/raty/jquery.raty-fa.js"></script>
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>


    <script src="js/script.js"></script>

</body>

</html>