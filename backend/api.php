<?php
include 'functions.php';
$obj = new Functions();

if(isset($_POST['register'])){
	$first_name = $_SESSION['first_name'] = $_POST['first_name'];
    $phone = $_SESSION['phone'] = trim($_POST['phone']);
    $email = $_SESSION['email'] = $_POST['email'];
	$state = $_SESSION['state'] = trim($_POST['state']);
    $password = $_SESSION['password'] = trim($_POST['password']);
    $c_password = $_SESSION['c_password'] = trim($_POST['c_password']);
	
	if(!empty($first_name)){
		if(!empty($phone)){
			if(!empty($email)){
				if(!empty($state)){
				if(!empty($password)){
					if($c_password === $password){
								
		$alphabet = preg_match('@[a-zA-Z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
			if($alphabet) {
				if($number) {
					if(strlen($password) > 5) {
						if(strlen($password) > 5 && strlen($password) < 25) {
			
               echo $a = $obj->new_member($first_name,$phone,$email,$state,$password);
			   	unset($_SESSION['first_name_reg']);
				unset($_SESSION['phone_reg']);
				unset($_SESSION['email_reg']);
				unset($_SESSION['state_reg']);
				unset($_SESSION['password_reg']);
				unset($_SESSION['c_password_reg']);
				unset($_SESSION['referral']);

										}else{ echo 'Password is too long'; }
									}else{ echo 'Password is less than six(6) character'; }
								}else{ echo 'Password must contain a number!'; }
							}else{ echo 'Password must contain an alphabet!'; } 
						}else{ echo 'Password does not match!';}
					}else{ echo 'Password is required!';}
				}else{ echo 'Email is required!';}
			} else{ echo 'State is required!';}
		} else{ echo 'Phone is required!';}
	}else{ echo 'First name is required!';}
}











//////////////////ADNIM UPDATE USER AMOUNT DETAILS////////////
///////////////////////////////////////////////////////////
if(isset($_POST['admin_update_user_amount'])){
    $id = trim($_POST['id']);
    $uid = $_POST['uid'];
	$amount = $_POST['amount'];
	$max_ref_no = $_POST['max_ref_no'];
    $first_name =  $_POST['first_name'];
	$state = trim($_POST['state']);
	$account_no = trim($_POST['account_no']);
    $password = trim($_POST['password']);
	$response = $_POST["captcha"];
	if(isset($_SESSION['referrals_uid_600725O31408'])){
	if(isset($_POST["captcha"])) {
	  $captcha = $_POST["captcha"];
	  $secret = "6LdUeLAZAAAAAK3THKy5xnu032X4DB8oOiAeYYe_";
	 $json = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=". $secret . "&response=" . $captcha), true);
	if($json['success']) {
		//echo $json['score'];
			   if(!empty($id)){
					if(!empty($uid)){
						if(!empty($amount)){
							if(!empty($max_ref_no)){
						if(!empty($first_name)){
							if(!empty($state)){
								if(!empty($account_no)){
							if(!empty($password)){
								
						if($password == "12345678") {
			
               echo $a = $obj->admin_update_user_amount($id,$uid,$amount,$max_ref_no,$first_name,$state,$account_no);
			   

							}else{ echo 'Password must relate to your name'; }
							  
										}else{ echo 'Password is required!';}
								}else{ echo 'Account no is required!';}
							}else{ echo 'Account name is required'; }
					}else{ echo 'Bank name is required!';}
				}else{ echo 'max referral no is required!';}
				}else{ echo 'Amount is required!';}
            } else{ echo 'UID is required!';}
			} else{ echo 'ID is required!';}
	}else { echo "Cannot validate user. Kindly refresh page!!"; }
	} else { echo "Cannot validate user. Kindly refresh page!"; }
	} else { echo "Cannot validate user. Kindly refresh page!"; }
}













//////USER LOGIN///////////////
if(isset($_POST['user_login'])){
    $email_phone = trim($_POST['email_phone']);
    $password = trim($_POST['password']);
    if(!empty($email_phone)){
        if(!empty($password)){

          echo $login = $obj->user_login($email_phone,$password);

        }else{ echo 'Password is required!!'; }
    }else{ echo 'Email or phone number is required!!'; }
}





//////USER LOGIN///////////////
if(isset($_POST['user_login_admin'])){
    $email_phone = trim($_POST['email_phone']);
    $password = $_POST['password'];
    if(!empty($email_phone)){
        if(!empty($password)){

          echo $login = $obj->user_login_admin($email_phone,$password);

        }else{ echo 'Password is required!!'; }
    }else{ echo 'Email or phone number is required!!'; }
}







if(isset($_POST["property_name"]) AND isset($_FILES['upload'])) {
	if($_FILES['upload']['error'] != 4){
			if($_FILES['upload']['error'] == 0){
				if($_POST['property_name'] !=""){
					if($_POST['property_price'] !=""){
						if($_POST['location'] !=""){
							if($_POST['description'] !=""){
								if($_POST['category'] !=""){
									if($_POST['type'] !=""){

	$values = array();
	foreach ($_POST as $key => $value){
		if($key != 'send' && $key != 'upload'){
			$values[$key] = "'".$obj->sql_clean($value)."'";
			
		}//var_dump($key);
	}

	$filetype = $_FILES['upload']['type'];
		if(strstr($filetype, "image/")){

	$picture = $obj->image_uploader($_FILES['upload']);
	if($picture == 121){
		echo 'File type not supported';
		exit();
	}else if($picture == 120){
		echo 'File size is too big!';
		exit();
	}
	
	
	$values['photo'] = "'".$picture."'";
	$identity = $_SESSION['user_id_xxxxxxxx'].'-'.time();
	$values['identity'] = "'".$identity."'";
	$timer = time();
	$values['timer'] = "'".$timer."'";
	$values['status'] = 1;
	$values['uid'] = $_SESSION['user_id_xxxxxxxx'];
	$cols = "property_name,property_price,location,description,category,type,photo,identity,timer,status,uid";
	$values = array_values($values);
	echo $insert = $obj->insert_image('properties',$cols,$values);	
		
	}else { echo 'File not supported!'; }
		
										
							}else { echo 'Property type is required!'; }
						}else { echo 'Property category is required!'; }
					}else { echo 'Property description is required!'; }
				}else { echo 'Property location is required!'; }
			}else { echo 'Property price is required!'; }
			}else { echo 'Property name is required!'; }
		}else { echo 'File not supported!'; }
	}else { echo 'Please select Event photo to upload!'; }

}








////////////ADD TESTIMONIAL//////////////
if(isset($_POST['add_testimonial'])){
    $testimonial = trim($_POST['add_testimonial']);
    $url = $_POST['url'];
	$uid = $obj->is_uid();
		if(!empty($uid)){
    if(!empty($testimonial)){

          echo $t = $obj->add_testimonial($uid,$testimonial,$url);

    }else{ echo 'Testimonial is required!!'; }
	}else{ echo 'Something went wrong, please refresh this page!'; }
}





////////////SHOW SUPPORT MESSAGE//////////////
if(isset($_POST['view_support_msg'])){
    $msg_id = trim($_POST['id']);
	$uid = $obj->is_uid();
		if(!empty($uid)){
    if(!empty($msg_id)){

        echo $table = $obj->view_support_msg($uid,$msg_id);

    }else{ echo 'Something went wrong,.. please refresh this page!'; }
	}else{ echo 'Something went wrong,,, please refresh this page!'; }
}




////////////UPDATE USER ACCOUNT//////////////
if(isset($_POST['account_update'])){
    $first_name = $obj->sql_clean($_POST['first_name']);
    $last_name = $obj->sql_clean($_POST['last_name']);
    $phone = $obj->sql_clean($_POST['phone']);
    $address = $obj->sql_clean($_POST['address']);
	$uid = $obj->is_uid();
		if(!empty($uid)){

        echo $table = $obj->update_user($uid,$first_name,$last_name,$phone,$address);

		}else{ echo 'Something went wrong, please refresh this page!'; }
}




////////////EDIT SUPPORT MESSAGE//////////////
if(isset($_POST['edit_support_msg'])){
    $msg_id = trim($_POST['id']);
	$uid = $obj->is_uid();
		if(!empty($uid)){
    if(!empty($msg_id)){

        echo $table = $obj->edit_support_msg($uid,$msg_id);

    }else{ echo 'Something went wrong,.. please refresh this page!'; }
	}else{ echo 'Something went wrong,,, please refresh this page!'; }
}




////////////DELETE SUPPORT MESSAGE//////////////
if(isset($_POST['del_support_msg'])){
    $msg_id = trim($_POST['id']);
	$uid = $obj->is_uid();
		if(!empty($uid)){
    if(!empty($msg_id)){

          $table = $obj->del_support_msg($uid,$msg_id);
		  if($table[0]){
			  $no = 1;
			while($data = mysqli_fetch_object($table[1])){
			echo '<tr>
			<td>'.$no++.'</td>
			<td class="text-left">'.substr($data->subject,0,100);
			if(strlen($data->subject) > 100){ echo '...'; }
			echo '</td>';
			if($data->is_staff){
				echo '<td><button class="btn btn-info btn-sm" data-id="'.$data->id.'" data-role="view_ticket"><i class="fa fa-eye"> View </button></td>';
			}else{
				echo '<td><button class="btn btn-primary btn-sm" data-id="'.$data->id.'" data-role="edit_ticket"><i class="fa fa-edit"> Edit</button></td>';

			}
				echo '<td><button class="btn btn-danger btn-sm" data-id="'.$data->id.'" data-role="delete_ticket"><i class="fa fa-trash"></i></button></td>
		  </tr>';
		  }
		  }else{
			  echo '<tr class="mt-2"><th colspan="4" class="text-info"> No Message Found!</th></tr>';
		  }

    }else{ echo 'Something went wrong,.. please refresh this page!'; }
	}else{ echo 'Something went wrong,,, please refresh this page!'; }
}








////////////EDIT AND ADD SUPPORT//////////////
if(isset($_POST['edit_and_post'])){
    $subject = $obj->sql_clean(trim($_POST['subject']));
    $message = $obj->sql_clean(trim($_POST['message']));
		$msg_id = trim($_POST['msg_id']);
	$uid = $obj->is_uid();
		if(!empty($uid)){
    if(!empty($subject)){
		if(!empty($message)){
		  $table = $obj->edit_and_add_support($uid,$msg_id,$subject,$message);
		  if($table[0] == "no"){
			  echo 100;
		  }else if($table[0]){
			  $no = 1;
			while($data = mysqli_fetch_object($table[1])){
			echo '<tr>
			<td>'.$no++.'</td>
			<td class="text-left">'; if($data->is_staff){ echo '<i class="fa fa-user"></i>'; } 
			echo substr($data->subject,0,100);
			if(strlen($data->subject) > 100){ echo '...'; }
			echo '</td>';
			if($data->is_staff){
				echo '<td><button class="btn btn-info btn-sm" data-id="'.$data->id.'" data-role="view_ticket"><i class="fa fa-eye"> View </button></td>';
			}else{
				echo '<td><button class="btn btn-primary btn-sm" data-id="'.$data->id.'" data-role="edit_ticket"><i class="fa fa-edit"> Edit</button></td>';

			}
				echo '<td><button class="btn btn-danger btn-sm" data-id="'.$data->id.'" data-role="delete_ticket"><i class="fa fa-trash"></i></button></td>
		  </tr>';
		  }
		  }else{
			  echo '<tr class="mt-2"><th colspan="4" class="text-info"> No Message Found!</th></tr>';
		  }
		}else{ echo 2; }
	}else{ echo 1; }
	}else{ echo 3; }
}







if(isset($_POST['limit_f'],$_POST['start_f'])){
	$start = $obj->sql_clean($_POST['start_f']);
	$limit = $obj->sql_clean($_POST['limit_f']);
	if(isset($_SESSION['user_id_xxxxxxxx'])){
	$uid = $_SESSION['user_id_xxxxxxxx'];
	}else{return false; }

		$gets = $obj->fetch_my_property($uid,$start,$limit);
		
	if($gets[0] > 0){
		while($get = mysqli_fetch_object($gets[1])){
		
		
echo '<div class="ad-listing-list mt-20">
<div class="row p-lg-3 p-sm-5 p-4">
	<div class="col-lg-4 align-self-center">
		<a href="single.php">
			<img src="'.$get->photo.'" class="img-fluid" alt="">
		</a>
	</div>
	<div class="col-lg-8">
		<div class="row">
			<div class="col-lg-6 col-md-10">
				<div class="ad-listing-content">
					<div>
						<a href="single.php" class="font-weight-bold text-uppercase">'.$get->property_name.'</a>
					</div>
					<ul class="list-inline mt-2 mb-3">
						<li class="list-inline-item"><a href="category.php"> <i
									class="fa fa-folder-open-o"></i> '.$get->category.'</a></li>
						<li class="list-inline-item"><a href="category-2.php"><i
									class="fa fa-calendar"></i> '.date("m-d-Y", $get->timer).'</a></li>
					</ul>
					<p class="pr-5" title="'.$get->description.'">'.substr($get->description,0,100).'<span>...</span></p>
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<div class="product-ratings float-lg-right pb-3">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>';
	
	}
	}
	}










if(isset($_POST['limit_full_h'],$_POST['start_full_h'])){
	$start = $obj->sql_clean($_POST['start_full_h']);
	$limit = $obj->sql_clean($_POST['limit_full_h']);

		$gets = $obj->fetch_all_property($start,$limit);
		
	if($gets[0] > 0){
		while($get = mysqli_fetch_object($gets[1])){
		
		
echo '<div class="col-lg-4 col-md-6">
<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.php">
				<img class="card-img-top img-fluid" src="'.$get->photo.'"
					alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
			<h4 class="card-title"><a href="single.php">'.$get->property_name.'</a></h4>
			<ul class="list-inline product-meta">
				<li class="list-inline-item">
					<a href="single.php"><i
							class="fa fa-folder-open-o"></i>'.$get->category.'</a>
				</li>
				<li class="list-inline-item">
					<a href="category.php"><i class="fa fa-calendar"></i> '.date("m-d-Y", $get->timer).'</a>
				</li>
			</ul>
			<p class="card-text" title="'.$get->description.'">'.substr($get->description,0,100).'<span>...</span></p>
			<div class="product-ratings">
				<ul class="list-inline">
					<li class="list-inline-item selected"><i class="fa fa-star"></i>
					</li>
					<li class="list-inline-item selected"><i class="fa fa-star"></i>
					</li>
					<li class="list-inline-item selected"><i class="fa fa-star"></i>
					</li>
					<li class="list-inline-item selected"><i class="fa fa-star"></i>
					</li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>';
	
	}
	}
	}










if(isset($_POST['limit_full'],$_POST['start_full'])){
	$start = $obj->sql_clean($_POST['start_full']);
	$limit = $obj->sql_clean($_POST['limit_full']);

		$gets = $obj->fetch_all_property($start,$limit);
		
	if($gets[0] > 0){
		while($get = mysqli_fetch_object($gets[1])){
		
		
echo '<div class="ad-listing-list mt-20">
<div class="row p-lg-3 p-sm-5 p-4">
	<div class="col-lg-4 align-self-center">
		<a href="single.php">
			<img src="'.$get->photo.'" class="img-fluid" alt="">
		</a>
	</div>
	<div class="col-lg-8">
		<div class="row">
			<div class="col-lg-6 col-md-10">
				<div class="ad-listing-content">
					<div>
						<a href="single.php" class="font-weight-bold text-uppercase">'.$get->property_name.'</a>
					</div>
					<ul class="list-inline mt-2 mb-3">
						<li class="list-inline-item"><a href="category.php"> <i
									class="fa fa-folder-open-o"></i> '.$get->category.'</a></li>
						<li class="list-inline-item"><a href="category-2.php"><i
									class="fa fa-calendar"></i> '.date("m-d-Y", $get->timer).'</a></li>
					</ul>
					<p class="pr-5" title="'.$get->description.'">'.substr($get->description,0,100).'<span>...</span></p>
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<div class="product-ratings float-lg-right pb-3">
					<ul class="list-inline">
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>';
	
	}
	}
	}









////////////ADD SUPPORT//////////////
if(isset($_POST['add_support'])){
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
	$uid = $obj->is_uid();
		if(!empty($uid)){
    if(!empty($subject)){
		if(!empty($message)){
			
          echo $table = $obj->add_and_get_support($uid,$subject,$message);

		  if($table[0]){
			  $no = 1;
			while($data = mysqli_fetch_object($table[1])){
			echo '<tr>
			<td>'.$no++.'</td>
			<td class="text-left">'.substr($data->subject,0,100);
			if(strlen($data->subject) > 100){ echo '...'; }
			echo '</td>';
			if($data->is_staff){
				echo '<td><button class="btn btn-info btn-sm" data-id="'.$data->id.'" data-role="view_ticket"><i class="fa fa-eye"> View </button></td>';
			}else{
				echo '<td><button class="btn btn-primary btn-sm" data-id="'.$data->id.'" data-role="edit_ticket"><i class="fa fa-edit"> Edit</button></td>';

			}
				echo '<td><button class="btn btn-danger btn-sm" data-id="'.$data->id.'" data-role="delete_ticket"><i class="fa fa-trash"></i></button></td>
		  </tr>';
		  }
		  }else{
			  echo '<tr class="mt-2"><th colspan="4" class="text-info"> No Message Found!</th></tr>';
		  }
		}else{ echo 2; }
	}else{ echo 1; }
	}else{ echo 3; }
}








////////////ADD REPORTED SUPPORT//////////////
if(isset($_POST['add_admin_support'])){
    $subject = "I wish to report this user";
	$user_id = trim($_POST['user_id']);
    $report_msg = trim($_POST['report_msg']);
	$message = '<a href="https://triplereferrals.com/user/'.$user_id.'"><u>Reported User</u></a>: <br> '.$report_msg;
	$user = $obj->power('users',$user_id);
	if($user[0]){
	$uid = $obj->is_uid();
		if(!empty($uid)){
		if(!empty($message)){
			
         echo $table = $obj->add_admin_support($uid,$subject,$message);
		 
		}else{ echo 2; }
	}else{ echo 3; }
	}else{ echo 4; }
}









if(isset($_POST['recover_password'])){
    $email = trim($_POST['email']);
    if(!empty($email)){
		$email_var = filter_var($email,FILTER_SANITIZE_EMAIL);
		if(filter_var($email_var,FILTER_VALIDATE_EMAIL)){
		
          echo $a = $obj->recover_password($email_var);

		}else{ echo 'Email is not valid!'; }
	}else{ echo 'Email is required!'; }
}









if(isset($_POST['acc_varification'])){
    $email = trim($_POST['acc_varification']);
	$code = trim($_POST['code']);
	$new_password = trim($_POST['new_password']);
    if(!empty($email)){
		$email_var = filter_var($email,FILTER_SANITIZE_EMAIL);
		if(filter_var($email_var,FILTER_VALIDATE_EMAIL)){
			if(!empty($code)){
				if(!empty($code)){
					
          echo $a = $obj->acc_varification($email,$code,$new_password);

				}else{ echo 'New password is required!'; }
			}else{ echo 'Verificatiion code is not valid!'; }
		}else{ echo 'Email is not valid!'; }
	}else{ echo 'Email is required!d'; }
}














?>