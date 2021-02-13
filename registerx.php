<?php
include 'backend/functions.php';
$referrals = new Functions();
$referrals->check_cookie();
// $referrals->page_session_auth();


if($_SESSION['user_id_xxxxxxxx']){
    $uid = $_SESSION['user_id_xxxxxxxx'];
    $power = $referrals->power('users',$uid);
}

$myipAddress = $referrals->getrealip();
$referrals->visited_page('Register',$myipAddress);

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
                <div class="col-lg-8 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>
                        <form action="#">
                            <fieldset class="p-4">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input class="form-control mb-3" id="first_name" type="text" placeholder="First Name*" >
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input autocomplete="off" class="form-control mb-3" id="phone" type="text" placeholder="Phone*" >
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control mb-3" id="email" type="email" placeholder="Email*" >
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select class="form-control w-100" id="state">
                                            <option value="<?php if(isset($_SESSION['state_reg'])){ echo $_SESSION['state_reg']; }else{ echo ''; } ?>">
                                                <?php if(isset($_SESSION['state_reg'])){ echo $_SESSION['state_reg']; }else{ echo 'Select State*'; } ?>
                                            </option>
                                            <option value="Abuja FCT">Abuja FCT</option>
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nassarawa">Nassarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara</option>
                                            <option value="Non-Nigerian">Non-Nigerian</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control mb-3" id="password" type="password" placeholder="Password*"
                                            >
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control mb-3" id="c_password" type="password" placeholder="Confirm Password*"
                                            >
                                    </div>

                                    <div class="col-12 loggedin-forgot d-inline-flex mt-3">
                                        <input type="checkbox" id="registering" class="mt-1">
                                        <label for="registering" class="px-2">By registering, you accept our <a
                                                class="text-primary font-weight-bold" href="terms-conditions">Terms &
                                                Conditions</a></label>
                                    </div>
                                    
                                    <div class="col-12">
                                        <!-- ALERT  DIV HERE -->
                                        <div id="reg_error" class="alert alert-danger d-none py-1"></div>

                                        <a class="d-block text-primary" href="login">Already a member?</a>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" id="reg_now" class="btn btn-primary font-weight-bold mt-3">Register
                                            Now</button>
                                    </div>
                                </div>
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
    <script src="js/isEmail.js"></script>
    <script src="js/script.js"></script>
    <script>
        $('#reg_now').click(function(e) {
            e.preventDefault()
            var first_name = $("#first_name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var state = $("#state").val();
            var password = $("#password").val();
            var c_password = $("#c_password").val();
            $('#user_err').hide();
            let error = "";
            let success = "";
             if (first_name.trim().length > 0) {
                 if (phone.trim().length > 0) {
                     if (email.trim().length > 0) {
                         if (IsEmail(email) == true) {
                            if (state.trim().length > 0) {
                                    if (password.trim().length > 0) {
                                        if (password.trim().length > 5) {
                                            if (password === c_password) {
                                                $('#reg_now').html(
                                                    '<i class="fa fa-spinner fa-spin"></i> Registering...'
                                                );
                                                $('#reg_now').attr('disabled', 'disabled');

                                                $.ajax({
                                                    method: 'POST',
                                                    url: 'backend/api.php',
                                                    cache: false,
                                                    data: {
                                                        register: 'register',
                                                        phone: phone,
                                                        email: email,
                                                        first_name: first_name,
                                                        state: state,
                                                        password: password,
                                                        c_password: c_password
                                                    },
                                                    success: function(data) {
                                                        if (data == 1) {
                                                            $('#reg_now').html(
                                                                '<i class="fa fa-unlock-alt"></i> Register Now '
                                                            );
                                                            $('#reg_error').removeClass(
                                                                'd-none alert-danger')
                                                            $('#reg_error').addClass(
                                                                'alert-success')
                                                            $('#reg_error').html(
                                                                '<strong>Registration Successful!</strong>'
                                                            );
                                                           window.location.replace("home");

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
                                                error = 'Password does not match!';
                                            }
                                        } else {
                                            error = 'Password is less than six(6) characters!';
                                        }

                                    } else {
                                        error = 'Password is required!';
                                    }
                            } else {
                                error = 'State is required!';
                            }
                        } else {
                            error = 'Email is not valid!';
                        }
                    } else {
                        error = 'Email is required!';
                    }
                } else {
                    error = 'Phone is required!';
                }
            } else {
                error = 'Firstname is required!';
            }

            if (error.trim().length > 0) {
                $('#reg_error').removeClass('d-none alert-success')
                $('#reg_error').addClass('alert-danger')
                $('#reg_error').html(error);
            }
        })
    </script>
</body>

</html>