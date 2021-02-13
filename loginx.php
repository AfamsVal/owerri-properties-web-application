<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();

$uid = $_SESSION['user_id_xxxxxxxx'];
if($uid){
    $power = $referrals->power('users',$uid);
}

$myipAddress = $referrals->getrealip();
$referrals->visited_page('Login',$myipAddress);

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

<section class="login py-5 border-top-1 mt-6">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">Login Now</h3>
           <!-- ALERT  DIV HERE -->
           <div id="user_err" class="alert alert-danger d-none py-1 mx-2"></div>
          <form action="#">
            <fieldset class="p-4">
              <input class="form-control mb-3" type="text" id="email_phone" placeholder="E-mail">
              <input class="form-control mb-3" type="password" id="password" placeholder="Password">
              <div class="loggedin-forgot">
                <input type="checkbox" id="keep-me-logged-in">
                <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
              </div>
              <button type="submit" id="login" class="btn btn-primary font-weight-bold mt-3">Log in</button>
              <a class="mt-3 d-block text-primary" href="forgot-password">Forget Password?</a>
              <a class="mt-3 d-inline-block text-primary" href="register">Register Now</a>
            </fieldset>
          </form>
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
        $('#login').click(function(e) {
            e.preventDefault()
            var email_phone = $("#email_phone").val();
            var password = $("#password").val();
            $('#user_err').addClass('d-none');
            let error = "";
            let success = "";
            if (email_phone.trim().length > 0) {
                if (password.trim().length > 0) {
                    $('#login').html('<i class="fa fa-spinner fa-spin"></i> Login...');
                    $('#login').attr('disabled', 'disabled');

                    $.ajax({
                        method: 'POST',
                        url: 'backend/api.php',
                        cache: false,
                        data: {
                            user_login: 'user_login',
                            email_phone: email_phone,
                            password: password
                        },
                        success: function(data) {
                            if (data == 1) {
                                $('#login').html('<i class="fa fa-lock"></i> Login');
                                $('#user_err').removeClass('d-none alert-danger')
                                $('#user_err').addClass('alert-success')
                                $('#user_err').html('<strong class="text-center">Login Successful!</strong>');
                                 window.location.replace("home");
                            } else if (data == 2) {
								//ALLOW USERS NOT TO VERIFY EMAIL FOR NOW
							                	window.location.replace("home");
                                $('#login').html('<i class="fa fa-lock"></i> Login');
                                $('#user_err').removeClass('d-none  alert-success')
                                $('#user_err').addClass('alert-danger')
                                $('#user_err').html('<strong class="text-center">Email not verified!</strong>');
                                 
                            } else if(data !="") {
                                $('#login').html('<i class="fa fa-lock"></i> Login ');
                                $('#user_err').removeClass('d-none  alert-success')
                                $('#user_err').addClass('alert-danger')
                                $('#user_err').html(data);
                            }
                            $('#login').attr('disabled',false);
                        }
                    })


                } else {
                    error = 'Password is required!';
                }
            } else {
                error = 'Email is required!';
            }

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
    })
</script>
</body>

</html>