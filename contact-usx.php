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
$referrals->visited_page('ContactUs',$myipAddress);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - contact us</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Owerri, Owerri property, contact us, contact support">

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

    <!-- page title -->
    <!--================================
=            Page Title            =
=================================-->
    <section class="page-title mt-6">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <!-- Title text -->
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <!-- page title -->

    <!-- contact us start-->
    <section class="section">
        <div class="container">
            <div class="row">
            <div class="col-sm-6">
            <div class="row text-center">

                <div class="col-md-12 mb-5">
                <img src="images/blog/contact.jpg" class="img-fluid w-100 rounded" alt="">
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>Owerri, Imo subject,<br> Nigeria</p>
                    
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+2348029361486</p>
                    <p>+2349038751457</p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>owerriproperty@gmail.com</p>
                    <p>info@owerriproperty.com</p>
                    <p>support@owerriproperty.com</p>
                </div>
            </div>
        </div>
                <div class="col-md-6">
                    <form action="#">
                        <fieldset class="px-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 py-2">
                                        <input type="text" id="name" placeholder="Name *" class="form-control">
                                    </div>
                                    <div class="col-lg-6 pt-2">
                                        <input type="text" id="phone" placeholder="Phone *" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <input type="email" id="subject" placeholder="Subject *" class="form-control">
                                    
                            <textarea name="message" id="message" placeholder="Message *"
                                class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
                            <div class="btn-grounp">
                             <!-- ALERT  DIV HERE -->
                             <div id="reg_error" class="alert alert-danger d-none py-1 my-1"></div>

                                <button type="submit" id="reg_now" class="btn btn-primary mt-2 float-right"><i class="fa fa-plus" aria-hidden="true"></i> SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us end -->

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
        $('#reg_now').click(function(e) {
            e.preventDefault()
            var name = $("#name").val();
            var phone = $("#phone").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            let error = "";
            let success = "";
                        if (name.trim().length > 0) {
                            if (phone.trim().length > 0) {
                                if (subject.trim().length > 0) {
                                    if (message.trim().length > 10) {
                                                $('#reg_now').html(
                                                    '<i class="fa fa-spinner fa-spin"></i> SUBMIT...'
                                                );
                                                $('#reg_now').attr('disabled', 'disabled');

                                                $.ajax({
                                                    method: 'POST',
                                                    url: 'backend/api.php',
                                                    cache: false,
                                                    data: {
                                                        contactUs: 'contactUs',
                                                        name: name,
                                                        phone: phone,
                                                        subject: subject,
                                                        message: message,
                                                    },
                                                    success: function(data) {
                                                        if (data == 1) {
                                                            $('#reg_now').html(
                                                                '<i class="fa fa-plus" aria-hidden="true"></i> SUBMIT '
                                                            );
                                                            $('#reg_error').removeClass(
                                                                'd-none alert-danger')
                                                            $('#reg_error').addClass(
                                                                'alert-success')
                                                            $('#reg_error').html(
                                                                '<strong>Sent Successfully!</strong>'
                                                            );

                                                            $("#name").val('');
                                                            $("#phone").val('');
                                                            $("#subject").val('');
                                                            $("#message").val('');

                                                        } else if(data !="") {

                                                            $('#reg_now').html(
                                                                '<i class="fa fa-unlock-alt"></i> Register Now '
                                                            );
                                                            $('#reg_error').removeClass(
                                                                'd-none  alert-success')
                                                            $('#reg_error').addClass(
                                                                'alert-danger')
                                                            $('#reg_error').html(data);
                                                        }
                                                        $('#reg_now').attr('disabled',
                                                            false);
                                                    }
                                                })
                                          
                                        } else {
                                            error = 'Message must contain min of 10 characters!';
                                        }

                            } else {
                                error = 'Subject is required!!';
                            }
                        
                    } else {
                        error = 'Phone is required!';
                    }
             
            } else {
                error = 'Name is required!';
            }

            if (error.trim().length > 0) {
                $('#reg_error').removeClass('d-none alert-success')
                $('#reg_error').addClass('alert-danger')
                $('#reg_error').html(error);

                setTimeout(() => {
                    $('#reg_error').addClass('d-none')
                }, 2000);
            }
        })
    </script>

</body>

</html>