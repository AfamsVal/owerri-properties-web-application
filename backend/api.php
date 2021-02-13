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








if(isset($_POST['confirm_transaction_id'])){
    $transaction_id = trim($_POST['confirm_transaction_id']);
	$payer_uid = trim($_POST['payer_uid']);
	$uid = $obj->is_uid();
    if($uid != $payer_uid){
		if(!empty($uid)){
			if(!empty($payer_uid) AND !empty($transaction_id)){
			
		echo $a = $obj->confirm_transaction($uid,$payer_uid,$transaction_id);
		
			}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Please refresh this page and try again!</strong>'; }
		}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Please refresh this page and try again!</strong>'; }
	}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Please refresh this page and try again!</strong>'; }
}







if(isset($_POST['i_want_to_pay_link'])){
    $ref_url = trim($_POST['i_want_to_pay_link']);
	$uid = $obj->is_uid();
    if(!empty($uid)){
		if(!empty($ref_url)){
		if (filter_var($ref_url, FILTER_VALIDATE_URL)) {
			$is_pending_link = $obj->is_payment_pending($uid);
			if(!$is_pending_link){
		echo $a = $obj->i_want_to_pay_link($uid,$ref_url);
		
		}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> You are not allowed to make new payment for now because you have pending payment already. <a href="'.$is_pending_link.'" class="text-warning font-weight-bold" style="cursor:pointer"><u>Click Here to view pending payment</u></a>. If you wish to proceed with new payment now, cancel pending payment or wait for user to confirm your payment.</strong>'; }
		}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is invalid!</strong>'; }
    }else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is required!</strong>'; }
	}else{ echo 10; }
}






if(isset($_POST['cancel_request_to_pay_link'])){
    $ref_url = trim($_POST['cancel_request_to_pay_link']);
	$uid = $obj->is_uid();
    if(!empty($uid)){
		if(!empty($ref_url)){
		if (filter_var($ref_url, FILTER_VALIDATE_URL)) {
		echo $a = $obj->cancel_request_to_pay_link($uid,$ref_url);
		}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is invalid!!</strong>'; }
    }else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is required!!</strong>'; }
	}else{ echo 10; }
}








if(isset($_POST['i_have_paid'])){
    $ref_url = trim($_POST['i_have_paid']);
	$uid = $obj->is_uid();
    if(!empty($uid)){
		if(!empty($ref_url)){
		if (filter_var($ref_url, FILTER_VALIDATE_URL)) {
		echo $a = $obj->i_have_paid($uid,$ref_url);
		}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is invalid!!</strong>'; }
    }else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is required!!</strong>'; }
	}else{ echo 10; }
}






if(isset($_POST['cancel_i_hv_paid'])){
    $ref_url = trim($_POST['cancel_i_hv_paid']);
	$uid = $obj->is_uid();
    if(!empty($uid)){
		if(!empty($ref_url)){
		if (filter_var($ref_url, FILTER_VALIDATE_URL)) {
		echo $a = $obj->cancel_i_hv_paid($uid,$ref_url);
		}else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is invalid!!</strong>'; }
    }else{ echo '<strong class="text-white"><i class="fa fa-info-circle"></i> Referral link is required!!</strong>'; }
	}else{ echo 10; }
}









?>