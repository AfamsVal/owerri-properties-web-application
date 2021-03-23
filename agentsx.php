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
$referrals->visited_page('Properties',$myipAddress);

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Owerriproperty - Agents</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Afams Val">
    <meta name="keywords" content="Owerri, Owerri property agent, Owerri houses, Owerri house agent, find an agent in owerri">

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
<div id="cover-spin"></div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/nav_bar.php"; ?>
                </div>
            </div>
        </div>
    </header>
    <section class="page-search mt-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search nice-select-white">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="form-group col-12">
                                   
                                     <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-light" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
  </div>
</div>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-dark">
                        <h2 class="text-white">Agent Page</h2>
                        <p class="text-white">78 Results found</p>
                        <p>
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary mt-2 active    ">
                        <i class="fa fa-plus" aria-hidden="true"></i> Become an Agent
                         </button>
                        </p>                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="category-sidebar">
                        <div class="widget category-list">
                            <h4 class="widget-header">Top Categories</h4>
                            <ul class="category-list">
                                <li><a href="category.php">Lands <span>193</span></a></li>
                                <li><a href="category.php">Houses <span>233</span></a></li>
                                <li><a href="category.php">Offices <span>183</span></a></li>
                                <li><a href="category.php">Cars <span>343</span></a></li>
                            </ul>
                        </div>

                        <div class="widget product-shorting">
                            <h4 class="widget-header">By Condition</h4>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Brand New
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Used
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-8" id="myData">
                  
                    <!-- ad listing list  -->
                   

                    <!-- pagination -->
                    <!-- <div class="pagination justify-content-center py-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="ad-list-view.php" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="ad-list-view.php">1</a></li>
                                <li class="page-item active"><a class="page-link" href="ad-list-view.php">2</a></li>
                                <li class="page-item"><a class="page-link" href="ad-list-view.php">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="ad-list-view.php" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                    <!-- pagination -->
                </div>


            </div>
        </div>
    </section>

    <!-- Modal Box Starts Here
//////////////////////////// -->
 <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title font-weight-bold text-primary"><i class="fa fa-plus" aria-hidden="true"></i> Become an Agent</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form  id="myform" class="row" method="POST">

  <div class="form-group col-12">
  <div class="error-container">
		<center><span id="preview">
		<img id="previewimg" src="" style="max-width:160px; max-height:160px; ">
		</span>
		<button class="btn btn-danger btn-xs" style="display:none;margin-top:5px;" id="deleteimg"> Remove </button>
		<div class="progress" style="display:none;"><div class="bar"></div><div class="percent">0%</div>
		</div>

		<div id="status">
		</center>
		</div>
	</div>
</div>
  <div class="form-group col-12">
    <div class="form-group">
        <center><img class="img-responsive" id="imgupload" style="cursor: pointer;" src="images/business-logo.jpg" alt="Upload Business logo" /></center>
        <input type="file" id="upload" name="upload" style="color:#fff;background:black; display:none;" class="form-control">
    </div>
  </div>
  <div class="form-group col-12">
    <input type="text" id="business_name" name="business_name" maxlength="30" class="form-control" placeholder="Business name">
  </div>
  <div class="form-group col-12">
    <input type="text" id="business_address" name="business_address" class="form-control" placeholder="Busines Address">
  </div>
  <div class="form-group col-12">
    <input type="text" id="business_phone_no" name="business_phone_no" class="form-control" maxlength="20" placeholder="Business Phone no">
  </div>
  
  <div class="form-group col-12">
  <textarea class="form-control" name="business_description" id="business_description" rows="3"  maxlength="300" placeholder="Business Description"></textarea>
</div>  

  <div class="form-group col-12">
  <select id="no_of_employee" name="no_of_employee" class="form-control w-100">
    <option value="">No of Employee</option>
    <option value="1 - 5">1 - 5</option>
    <option value="6 - 10">6 - 10</option>
    <option value="11 - 30">11 - 30</option>
    <option value="31 - Above">31 - Above</option>
  </select>
</div>
<div class="col-12 mt-1 mb-3">
<label id="feed_e"></label><br><br>
<button type="submit" id="add_agent" class="btn btn-primary active"><i class="fa fa-plus" aria-hidden="true"></i> Add Agent</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
</div>
</form>
      </div>

    </div>
  </div>
</div>

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
    $(document).ready(function(){

    //CODE FOR FETCHING OUT NEWS STARTS HERE
    var limit_f = 10;
	var start_f = 0;
	var action = 'inactive';
	function load_all_properties(limit_f,start_f){
		$.ajax({
			method:'POST',
			url:'backend/api.php',
			cache:false,
			data:{limit_f,start_f},
			success:function(data){
				if(start_f == 0 && data != ""){ $('#myData').html(''); }
				$('#myData').append(data);
				if(data == ""){
				if(start_f == 0){
				$('.data_info').html('<button type="button" onclick="location.reload();" class="btn btn-turquoise">NO PROPERTY YET..</button>');
					}else{
				$('.data_info').html('<button type="button" onclick="location.reload();" class="btn btn-turquoise">NO MORE PROPERTY FOUND FOR NOW!!</button>');
					}
				action = 'active';
				}else{
					$('.data_info').html('<img src="images/loader.gif" alt="Loading..." style="height:50px;">');
					action = 'inactive';
				}
				 $('#cover-spin').hide(0);
			}
		})
	}
	
	setTimeout(function(){  $('#cover-spin').hide(0); },7000);
	//End of function
	
		
	if(action == 'inactive'){
		action = 'active';
		load_all_properties(limit_f,start_f);
	}
	$(window).scroll(function(){
			
		if($(window).scrollTop() + $(window).height() > $('.add_joke').height() && action == 'inactive'){
			action = 'active';
			start_f = start_f + limit_f;
			load_all_properties(limit_f,start_f);
		}

	})
	
	















    $("#myform").on('submit',(function(e){
	//$("#add_agent").html('<i class="fa fa-spinner fa-spin"></i> Add Property')
	//$('#add_agent').attr("disabled", "disabled");
e.preventDefault();
var formdata = new FormData(this);
		$.ajax({
				url: "backend/api.php",
				type: "POST",
				data: formdata,
				contentType: false,
				cache: false,
				processData:false,
                beforeSend:function(){
				},
				
		success: function(data){
		if(data ==1){
        //     $(':input').val('');
        //     $(':file').val('');
        //     $("#previewimg").hide();
        //     $("#deleteimg").hide();
        //     $('#imgupload').attr('src','images/business-logo.jpg');
        //     $("#imgupload").show();
            $('#feed_e').slideDown();
            $('#feed_e').html('<span style="color:green;"><strong>UPLOADED SUCCESSFULLY</strong></span>');
            $("#add_agent").html('<i class="fa fa-plus" aria-hidden="true"></i> Add Property');
           // setTimeout(() => { location.reload();  }, 1500);
        }else{
            $('#feed_e').slideDown();
            $('#feed_e').html('<span style="color:red;">'+data+'</span>');
            $('#add_agent').attr("disabled", false);
            $("#add_agent").html('<i class="fa fa-plus" aria-hidden="true"></i> Add Property');
        }
		}            
		});
}));		
		
$(':input').focus(function(){
	$('#feed_e').slideUp();
})		
		
		
	

        		
		// Function for Preview Image.
$("#imgupload").on('click',function(){
$("#upload").trigger('click'); 
$(":file").change(function() {
if (this.files && this.files[0]) {
$('#imgupload').css({'width':'160px'});
$('#imgupload').attr('src','images/loading.gif');
 if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) ) {
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}else{
alert('File not supported!');
}
}
});
});
function imageIsLoaded(e) {
$('#preview').css("display", "block");
$('#previewimg').attr('src', e.target.result);
$('#previewimg').show();
$("#deleteimg").text('Remove');
$("#deleteimg").show();
$("#imgupload").hide();
};
// Function for Deleting Preview Image.
$("#deleteimg").click(function(e) {
e.preventDefault();
$('.progress').hide();
$("#deleteimg").text('Deleting..');
$('#preview').css("display", "none");
$('#upload').val("");
$("#deleteimg").hide();
$('#imgupload').attr('src','images/business-logo.jpg');
$("#imgupload").show();
	$("#mysubmit").text('UPLOAD DATA')
	$('#mysubmit').attr("disabled", false);
});



    })
</script>
</body>

</html>