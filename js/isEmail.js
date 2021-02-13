//email validation ///
/////////////////////////////////////

$("#email").blur(function () {
  email = $("#email").val();
  if (email.trim().length > 0) {
    if (IsEmail(email) == true) {
      $("#user_err").fadeOut();
    } else {
      $("#user_err").fadeIn();
      $("#user_err").html("Email not valid!");
    }
  } else {
    $("#user_err").fadeIn();
    $("#user_err").html("Email is required!");
  }
});

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
