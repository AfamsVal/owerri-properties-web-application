<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();
$referrals->page_session_auth();


$uid = $_SESSION['user_id_xxxxxxxx'];
if($uid){
    $power = $referrals->power('users',$uid);
}

$myipAddress = $referrals->getrealip();
$referrals->visited_page('myAccount',$myipAddress);

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
                                <li class="mt-3"><strong>Ads Type:</strong> <span>Paid</span></li>
                                <li class="mt-3"><strong>Email:</strong> <span><?php echo $power[2]->email?></span></li>
                                <li class="mt-3"><strong>Phone:</strong> <span><?php echo $power[2]->phone?></span></li>
                                <li class="mt-3"><strong>State:</strong> <span><?php echo $power[2]->state?></span></li>
                                <li class="mt-3"><strong>Address:</strong> <span><?php echo $power[2]->address?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Edit Profile Welcome Text -->
                    <div class="widget welcome-message">
                        <h2>Edit profile</h2>
                        <p>No address found. Kindly update your account below by adding official home or office address that will enable users and others locate you.</p>
                    </div>
                    <!-- Edit Personal Info -->
                    <div class="row">
                        <div class="col-12">
                            <div class="widget personal-info">
                                <h3 class="widget-header user">Edit Personal Information</h3>
                                <form class="row" action="#">
                                     <!-- File chooser -->
                                     <div class="col-12 form-group choose-file d-inline-flex">
                                        <i class="fa fa-user text-center px-3"></i>
                                        <input type="file" class="form-control-file mt-2 pt-1" id="input-file">
                                    </div>
                                    <!-- First Name -->
                                    <div class="col-6 form-group">
                                        <label for="first-name">First Name</label>
                                        <input id="first_name" type="text" value="<?php echo $power[2]->first_name; ?>" class="form-control" id="first-name">
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-6 form-group">
                                        <label for="last-name">Last Name</label>
                                        <input id="last_name" type="text" value="<?php echo $power[2]->last_name; ?>" class="form-control" id="last-name">
                                    </div>
                                    
                                    <!-- First Name -->
                                    <div class="col-12 form-group">
                                        <label for="Phone No">Phone No</label>
                                        <input id="phone" type="text" value="<?php echo $power[2]->phone; ?>" class="form-control" id="Phone-no">
                                    </div>
                                    <!-- Comunity Name -->
                                    <div class="col-12 form-group">
                                        <label for="comunity-name">Address</label>
                                        <textarea id="address" class="form-control" rows="3"  maxlength="300" placeholder="Address"><?php echo $power[2]->address; ?> </textarea>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="col-12 form-group">
                                         <!-- ALERT  DIV HERE -->
                                         <div id="user_err" class="alert alert-danger d-none"></div>
                                    <button type="button" id="update_user" class="btn btn-primary active">Save My Changes</button>
                                    </div>
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

    <script>
    $(document).ready(function() {
        $('#update_user').click(function(e) {
            e.preventDefault()
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var phone = $("#phone").val();
            var address = $("#address").val();
            $('#user_err').addClass('d-none');
            let error = "";
            let success = "";
            $('#user_err').slideDown();
            if (first_name.trim().length > 0) {
              if (last_name.trim().length > 0) {
                if (phone.trim().length > 0) {
                 if (address.trim().length > 0) {
                    $('#login').html('<i class="fa fa-spinner fa-spin"></i> Login...');
                    $('#login').attr('disabled', 'disabled');

                    $.ajax({
                        method: 'POST',
                        url: 'backend/api.php',
                        cache: false,
                        data: {
                            account_update: 'account_update',
                            first_name: first_name,
                            last_name: last_name,
                            phone: phone,
                            address: address
                        },
                        success: function(data) {
                            if (data == 1) {
                                $('#login').html('<i class="fa fa-lock"></i> Login');
                                $('#user_err').removeClass('d-none alert-danger')
                                $('#user_err').addClass('alert-success')
                                $('#user_err').html('<strong class="text-center">Updated Successful!</strong>');
                                setTimeout(() => { location.reload();  }, 1500);
                            } else if (data == 2) {
								//ALLOW USERS NOT TO VERIFY EMAIL FOR NOW
							                	window.location.replace("home");
                                $('#login').html('<i class="fa fa-lock"></i> Login');
                                $('#user_err').removeClass('d-none  alert-success')
                                $('#user_err').addClass('alert-danger')
                                $('#user_err').html('<strong class="text-center">Email not verified!</strong>');
                                 
                            } else {
                                $('#login').html('<i class="fa fa-lock"></i> Login ');
                                $('#user_err').removeClass('d-none  alert-success')
                                $('#user_err').addClass('alert-danger')
                                $('#user_err').html(data);
                            }
                            $('#login').attr('disabled',false);
                        }
                    })


                        } else { error = 'Address is required!'; }
                    } else { error = 'Phone is required!'; }
                } else { error = 'Last Name is required!'; }
            } else { error = 'First name is required!'; }

            if (error.trim().length > 0) {
                $('#user_err').removeClass('d-none alert-success')
                $('#user_err').addClass('alert-danger')
                $('#user_err').html(error);

            }
        })





        //email validation ///
        /////////////////////////////////////

        $("#email_phone").blur(function() {
            email = $('#email_phone').val();
            if (email.trim().length > 0) {
                if (IsEmail(email) == true) {

                    $('#user_err').addClass('d-none')

                } else {
                    $('#user_err').removeClass('d-none alert-success')
                $('#user_err').addClass('alert-danger')
                    $('#user_err').html('Email not valid!');
                }
            } else {
                 $('#user_err').removeClass('d-none alert-success')
                $('#user_err').addClass('alert-danger')
                $('#user_err').html('Email is required!');
            }
        })


        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }

            //end of email validation ///
            /////////////////////////////////////
        }

        $(':input').focus(function(){
	    $('#user_err').slideUp();
        })
    })
</script>

</body>

</html>