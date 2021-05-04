<?php
include 'connect.php';

class Functions {
	public $connect;
	public $con;
	
	

	public function __construct(){
		$this->connect = new Connect();
		$this->con = $this->connect->connection();
		return $this->con;
	}


	public function connect(){
	$this->connect = new Connect();
	return $this->con = $this->connect->local_connect();
	}



//ALTER TABLE message_trend CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_bin
//HTML CLEANER
public function html_clean($dirty){
		$clean = htmlentities(trim($dirty),ENT_QUOTES,'UTF-8');
		return $clean;				
}


	
//SQL CLEANER
function sql_clean($string){
$con = $this->connect();
return htmlentities(trim(mysqli_real_escape_string($con,$string)),ENT_QUOTES,'UTF-8');
}





	
public function last_seen($table){
	$con = $this->connect();
	$timer = time();
	if(isset($_SESSION['user_id_xxxxxxxx'])){
		  $id = $_SESSION['user_id_xxxxxxxx'];
	$query = mysqli_query($con,"UPDATE {$table} SET last_seen = '$timer' WHERE id = '$id'");
}
}
	



public function is_uid(){
	if(isset($_SESSION['user_id_xxxxxxxx'])){
		return $_SESSION['user_id_xxxxxxxx'];
	}else{
		return 0;
	}
}


	public function getrealip(){
	 if (isset($_SERVER)){
	if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
	$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	if(strpos($ip,",")){
	$exp_ip = explode(",",$ip);
	$ip = $exp_ip[0];
	}
	}else if(isset($_SERVER["HTTP_CLIENT_IP"])){
	$ip = $_SERVER["HTTP_CLIENT_IP"];
	}else{
	$ip = $_SERVER["REMOTE_ADDR"];
	}
	}else{
	if(getenv('HTTP_X_FORWARDED_FOR')){
	$ip = getenv('HTTP_X_FORWARDED_FOR');
	if(strpos($ip,",")){
	$exp_ip=explode(",",$ip);
	$ip = $exp_ip[0];
	}
	}else if(getenv('HTTP_CLIENT_IP')){
	$ip = getenv('HTTP_CLIENT_IP');
	}else {
	$ip = getenv('REMOTE_ADDR');
	}
	}
	return $ip; 
	}






//public function send_mail($to,$subject,$message){

//require 'PHPMailer/src/PHPMailer.php'; // Phpmail package already on server
//require 'PHPMailer/src/SMTP.php'; // Phpmail package already on server

//$mail = new PHPMailer(true);

//$mail->IsSMTP(); // telling the class to use SMTP
//$mail->SMTPAuth = true; // enable SMTP authentication
//$mail->Host = "localhost"; // sets the SMTP server
//$mail->Port = 25; // set the SMTP port for the GMAIL server
///$mail->Username = "support@laffout.com"; // SMTP account username
//$mail->Password = "Afamisval2020."; // SMTP account password

//$mail->SetFrom('Laffout.com', 'Laffout');
//$mail->AddReplyTo("support@laffout.com","Laffout");
//$mail->Subject = $subject;
//$mail->MsgHTML($message);
//$mail->AddAddress($to);
//$mail->AddAttachment(""); // attachment

//if(!$mail->Send()) {
//echo "Mailer Error: " . $mail->ErrorInfo;
//return 0;
//} else {
//echo "Message sent!";
// header("Location: www.example.com/");
//return 1;
//}
//}











public function send_mail($to, $subject, $body){
include('Mail.php'); // includes the PEAR Mail class, already on your server.

$username = 'info@triplereferrals.com'; // your email address
$password = '6=VzJ.3$mq{Y'; // your email address password

$from = "Triplereferrals.com";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($to, $headers, $body); // sending the email

if (PEAR::isError($mail)){
return 0;
}
else {
return 1;
}

}








	public function page_session_auth(){
	if(isset($_SESSION['user_id_xxxxxxxx'])){
		$uid = $_SESSION['user_id_xxxxxxxx'];
			$sql = "select status,is_blocked from users WHERE id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('i',$uid);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($status,$blocked);
			$query->fetch();
		if($status == 0 AND $blocked == 0){
				//YOU ARE COOL!!
		}else{
			session_destroy();
			die(header("Location:login"));
		}
		}else{
			session_destroy();
			die(header("Location:login"));
		}
		}else{
			session_destroy();
			die(header("Location:login"));
		}
}







		
		
public function power($table,$uid){
	$con = $this->connect();
	$uid = $this->sql_clean($uid);
	$query= mysqli_query($con, "select * from $table where id = '$uid'");
	$count =mysqli_num_rows($query);
	if($count ==1){
		$fetch = mysqli_fetch_object($query);
		if(isset($_SESSION['user_id_xxxxxxxx'])){
		if($_SESSION['user_id_xxxxxxxx'] == $uid){
			$this->last_seen('users');
		}	
		}
			
			
		return array ($count,$query,$fetch);
		
		}else{
			return array ($count,$query,null);
		}
		
		}





		
		
public function power_referrals($table,$ref_url){
	$con = $this->connect();
	$query= mysqli_query($con, "select * from $table where links = '$ref_url'");
	$count =mysqli_num_rows($query);
	if($count ==1){
		$fetch = mysqli_fetch_object($query);	
		return array($count,$fetch);
	}else{
		return array ($count,0,0);
	}
	}
		
		
		





public function time_elapsed_string($ptime){
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return 'Just Now';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
                );
    $a_plural = array( 'year'   => 'years',
                       'month'  => 'months',
                       'day'    => 'days',
                       'hour'   => 'hours',
                       'minute' => 'minutes',
                       'second' => 'seconds'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
}









//PASSWORD HASH

public function hash($pwd){
	if(!empty($pwd)){
	return password_hash($pwd,PASSWORD_DEFAULT);
	}
}

//PASSWORD VERIFY
public function verify($pwd,$hash){
	if(!empty($pwd)){
	return password_verify($pwd,$hash);
	}
}







//NEW MEMBER REGISTRATION
public function new_member($first_name,$phone,$email,$state,$pwd){
	$con = $this->connect();
	$first_name = $this->html_clean($first_name);
	$phone = $this->html_clean($phone);
	$email = $this->html_clean($email);
	$state = $this->html_clean($state);
	$reg_date = time();
	$last_seen = time();
	$status = 0;
	$is_blocked = 0;
	$letter = strtoupper(chr(65 + rand(0, 25)));
	
	if($letter == 'I' OR $letter == 'O' OR $letter == 'S'){ $letter = 'P'; }
	$email_code = $letter.rand(0,9).rand(1,9).rand(0,9).rand(1,9);
	
	$sql = "SELECT phone,email FROM users WHERE phone = ? OR email = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('ss',$phone,$email);
	$query->execute();
	$query->store_result();
	
	if($query->num_rows){
		$query->bind_result($phone_,$email_);
			$query->fetch();
			if($phone == $phone_){
				return 'Email or phone no already exist!'; 
			}else if($email == $email_){
				return 'Email or phone no already exist!';
			}	
	}else{	
		$password = $this->hash($pwd);
		$sql = "INSERT INTO users(first_name,email,phone,state,password,status,reg_date,last_seen,is_blocked,email_code) VALUES(?,?,?,?,?,?,?,?,?,?)";
		$query = $this->con->prepare($sql);
		$query->bind_param('ssssssssss',$first_name,$email,$phone,$state,$password,$status,$reg_date,$last_seen,$is_blocked,$email_code);
		$query->execute();
		$query->store_result();
		if($this->con->affected_rows){
			
			$inserted_id = $query->insert_id;			
			
			$_SESSION['user_id_xxxxxxxx'] = $inserted_id;
			
			//$message = '<div style="padding:20px 0;width:100%;background:#fff;margin:auto;"><h2 style="color:#fff;background:teal;padding:20px;"><center style="color:#fff;"><a href="https://laffout.com" style="color:#fff;">LAFFOUT.COM</a></center></h2><h2 style="color:#000;"><center>Hi, '.ucfirst($username).'</center></h2><h4 style="color:#555;"><center><p>Thanks so much for joining Laffout!</p><p> Kindly use the code below and complete your registration. Thanks!</p></center></h4><h1 style="color:teal;padding:20px;"><center>'.$code.'</center></h1><div style="height:5px;width:50%;margin:auto;"><hr style="border:1px solid teal;"></hr></div><div style="height:5px;width:60%;margin:auto;"><hr style="border:1px solid teal;"></hr></div></div>';
			
			/////////////////////email message here/////

				//$message_ = urlencode($message);
				
				//$url = $this->send_mail($email_e,'Triple Referrals Reg.',$message);

				return 1;
			
		}else{ return 'Registration failed, please refresh your page and try again!'; }
	}
	}
	
	
	
	
	
	
	
	







//NEW MEMBER REGISTRATION
public function contact_us($name,$phone,$subject,$message){
	$con = $this->connect();
	$name = $this->html_clean($name);
	$email = "none@gmail.com";
	$phone = $this->html_clean($phone);
	$subject = $this->html_clean($subject);
	$message = $this->html_clean($message);
	$timer = time();
	$status = 0;
	
		$sql = "INSERT INTO contact_us(name,email,phone,subject,message,status,timer) VALUES(?,?,?,?,?,?,?)";
		$query = $this->con->prepare($sql);
		$query->bind_param('sssssss',$name,$email,$phone,$subject,$message,$status,$timer);
		$query->execute();
		$query->store_result();
		if($this->con->affected_rows){

				return 1;
			
		}else{ return 'Something went wrong, please try again!'; }
	}
	
	
	
	
	
	
	
	
	
	
///////CHANGE ADMIN USER AMOUNT///////////////////
public function admin_update_user_amount($id,$uid,$amount,$max_ref_no,$bank_name,$account_name,$account_no){
		$con = $this->connect();
		$no = 0;
		$sql = "SELECT id FROM users WHERE referral_link IS NULL AND referral_max_no = ? AND id = ? AND is_blocked = '0'";
		$query = $this->con->prepare($sql);
		$query->bind_param('ii',$no,$uid);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
		
		$sql = "UPDATE system_users SET uid = ?, amount = ?,  max_referral_no = ?, bank_name = ?, account_name = ?, account_no = ? where id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('iiissii',$uid,$amount,$max_ref_no,$bank_name,$account_name,$account_no,$id);
		$query->execute();
		if($query->affected_rows){
			
			$aa = time();
			$letter = strtoupper(chr(65 + rand(0, 25)));
			$rand = $uid.$letter.$aa;
			$link = 'https://triplereferrals.com/referral/'.$rand.'/'.$amount;
			
			$this->check_and_insert_links($uid,$link,$amount);
			
		$sql = "UPDATE users SET referral_amount = ?, referral_link = ?, referral_max_no = ?, bank_name = ?, name = ?, account_no = ? where id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('isissii',$amount,$link,$max_ref_no,$bank_name,$account_name,$account_no,$uid);
		$query->execute();

			return 1;

		}else{
			return "No change was made!";
		}
		}else{ return "This user still have an active referral link or does not exist"; }
	}
	
	
	
	
	
	
	
	
	
	//////////////////ADMIN USER LOGIN HERE///////////////////////
	////////////////////////////////////

	public function admin_user_login($phone,$pwd){
		$phone = $this->html_clean($phone);
		$sql = "SELECT id,password,status,is_blocked FROM users WHERE  status='10' AND phone = ? LIMIT 1";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$phone);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($uid,$hash,$status,$is_blocked);
			$query->fetch();
			$password = $this->verify($pwd,$hash);
			if($password){
				
				if($is_blocked != 1){
					$hasher = mt_rand(999999999,time());
					$hasher1 = mt_rand(519999999,time());
					$cookie = $uid.$hasher.$hasher1;
					$sql = "UPDATE users SET cookie_id = ? where id = ?";
					$query = $this->con->prepare($sql);
					$query->bind_param('si',$cookie,$uid);
					$query->execute();
		
			setcookie("property_cookie_",$cookie,time()+ (10 * 365 * 24 * 60 * 60), "/");	
				$_SESSION['user_id_xxxxxxxx']= $uid;
				$_SESSION['admin_id_xxxxxxxx']= $uid;
				
				return 1;
				
				}else{ return "This account has been blocked by Support!";}
			}else{ return 'User details incorrect!';}
		}else{ return 'User details incorrect';}
	}








	
	
	
	
	//////////////////USER LOGIN HERE///////////////////////
	////////////////////////////////////

	public function user_login($email_phone,$pwd){
		$phone = $this->html_clean($email_phone);
		$email = $this->html_clean($email_phone);
		$sql = "SELECT id,password,status,is_blocked FROM users WHERE  email = ? OR phone = ? LIMIT 1";
		$query = $this->con->prepare($sql);
		$query->bind_param('ss',$email,$phone);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($uid,$hash,$status,$is_blocked);
			$query->fetch();
			$password = $this->verify($pwd,$hash);
			if($password){
				
				if($is_blocked != 1){
					if($status ==0){
					$hasher = mt_rand(999999999,time());
					$hasher1 = mt_rand(519999999,time());
					$cookie = $uid.$hasher.$hasher1;
					$sql = "UPDATE users SET cookie_id = ? where id = ?";
					$query = $this->con->prepare($sql);
					$query->bind_param('si',$cookie,$uid);
					$query->execute();
		
			setcookie("property_cookie_",$cookie,time()+ (10 * 365 * 24 * 60 * 60), "/");	
				$_SESSION['user_id_xxxxxxxx']= $uid;
				
				//$this->check_account_recovery($uid);
				
				return 1;
				exit();
				}else{
					return "Email not verified!";
				}
				}else{ return "This account has been blocked by Support!";}
			}else{ return 'User details incorrect!';}
		}else{ return 'User details incorrect';}
	}









			
	//////////////////FORGOT PASSWORD HERE///////////////////////
	////////////////////////////////////
	public function recover_password($email){
		$email = $this->html_clean($email);
		$sql = "SELECT name,is_blocked,status,email FROM users WHERE  email = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$email);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($name,$is_blocked,$status,$email);
			$query->fetch();
				if($is_blocked != 1){
					if($status == 1){
						$letter = strtoupper(chr(65 + rand(0, 25)));
						if($letter == 'I' OR $letter == 'O' OR $letter == 'S'){ $letter = 'P'; }
						$email_code = $letter.rand(0,99).rand(1,99).rand(0,99);
					$sql = "UPDATE users SET email_code = ? where email = ?";
					$query = $this->con->prepare($sql);
					$query->bind_param('ss',$email_code,$email);
					$query->execute();
		
		$message = 'Triplereferral code is: '.$email_code;
			
			/////////////////////phone message here/////
			 $mail = $this->send_mail($email,'Account Recovery',$message);
				if($mail){
					return 1;
				}else{
					return "Failed to send verification code. Please make sure this email is valid or contact support!";
				}
				 
				
				}else{ return "Email not verified!"; }
			}else{ return "This account has been blocked by Support!";}
		}else{ return 'User details incorrect';}
	}







	public function image_uploader($filefield){
		$message = '';
		$name = $filefield['name'];
		$size = $filefield['size'];
		$tmp = $filefield['tmp_name'];
		if($size > 5242880){
			$message = 120;
			return $message;
		}
		$accepted = array('jpg','JPG','jpeg','PNG','png','GIF','gif','bmp');
		//$filer = new finfo(FILEINFO_MIME_TYPE);
		$ext = explode('.',$name);
		$exten = end($ext);
		//$verify = array_search($filer->file($tmp),$accepted);
		if(!in_array($exten,$accepted)){
			
			return 121;
		}
		$store_name = substr(mt_rand(999999999,time()).$ext[0],0,15).'.'.$exten;
		$location = 'uploads/'.$store_name;
		$location1 = '../uploads/'.$store_name;
		if($tmp){
			if(move_uploaded_file($tmp,$location1)){
				return $location;
			}
		}
	}








	public function insert_image($table,$cols,$values){
		$con = $this->connect();
   if(is_array($values)){
	   $values = implode(',',$values);
   }
	   $stmt = "INSERT INTO {$table} ({$cols}) VALUES ({$values})";
	   $query = mysqli_query($con,$stmt) or die (mysqli_error($con));
	   if($query){
		   $message = "1";
	   }else{
		   $message = "Something went wrong, please try again!";
	   }
	   return $message;
   }








	public function insert_into_user_update_buz($business_name,$business_address,$business_phone_no,$business_description,$no_of_employee,$business_reg_date,$business_status,$photo,$uid){
		$con = $this->connect();
	   $stmt = "UPDATE users SET business_name='$business_name',business_address='$business_address',business_phone_no='$business_phone_no',business_description='$business_description',no_of_employee='$no_of_employee',
	   business_reg_date = '$business_reg_date',business_status = '$business_status',business_logo='$photo' WHERE id = '$uid'";
	   $query = mysqli_query($con,$stmt) or die (mysqli_error($con));
	   if($query){
		   $message = "1";
	   }else{
		   $message = "Something went wrong, please try again!";
	   }
	   return $message;
   }





   public function update_user($uid,$first_name,$last_name,$phone,$address){
	$con = $this->connect();
	$sql = "select phone from users where id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('i',$uid);
	$query->execute();
	$query->store_result();
	if($query->num_rows){
		$query->bind_result($db_phone);
		$query->fetch();
		//check phone no here
		$sql = "SELECT id FROM users WHERE phone = '$phone'";
		$q = mysqli_query($con,$sql);
		$count = mysqli_num_rows($q);
		$fetch = mysqli_fetch_object($q);
		/////////////////////////////////////
		//return $fetch->id."dd".$uid;
		if($count){
		if($fetch->id === $uid){

	mysqli_query($con,"UPDATE users SET first_name = '$first_name', last_name ='$last_name', phone ='$phone', address='$address' WHERE id = '$uid'");
			return 1;			
		
		}else{ return "Sorry, this phone no is attached to another user!"; }	
}else{
	mysqli_query($con,"UPDATE users SET first_name = '$first_name', last_name ='$last_name', phone ='$phone', address='$address' WHERE id = '$uid'");
			return 1;
}
	}else{
		return "User not found, please refresh this page!";
	}	
}





public function fetch_my_property($uid,$start,$limit){
	$uid = $this->sql_clean($uid);
	$start = $this->sql_clean($start);
	$limit = $this->sql_clean($limit);
	$con = $this->connect();
	$query = mysqli_query($con,"SELECT * from properties WHERE status = '1' AND uid = '$uid' ORDER BY timer DESC LIMIT ".$start.", ".$limit."");
	$count = mysqli_num_rows($query) or die(mysqli_error($con));
	
		return array($count,$query);

	}




public function fetch_all_admin_property(){
	$con = $this->connect();
	$query = mysqli_query($con,"SELECT * from properties where status = '1' ORDER BY timer DESC");
	$count = mysqli_num_rows($query);
	
		return array($count,$query);
	}


	public function count_item($table,$prop){
		$con = $this->connect();
		$query = mysqli_query($con,"SELECT * from ".$table." WHERE ".$prop." != '' AND status = 1");
		$count = mysqli_num_rows($query);
		if($count){
		    return $count;
		}else{
		    return "0"; 
		}
	}


	public function count_my_item($uid){
		$con = $this->connect();
		$query = mysqli_query($con,"SELECT * from properties WHERE uid = '$uid' AND status = 1");
		$count = mysqli_num_rows($query);
		if($count){
		    return $count;
		}else{
		    return "0"; 
		}
	}


	public function my_property_count($uid){
		$con = $this->connect();
		$query = mysqli_query($con,"SELECT * from properties WHERE uid = '$uid' AND status = 1");
		// $count = mysqli_num_rows($query) or die(mysqli_error($con));
		$count = mysqli_num_rows($query);
		if($count > 0){
		    return $count;
		}else{
		    return 0; 
		}
	}





public function fetch_all_agent($uid,$start,$limit){
	$uid = $this->sql_clean($uid);
	$start = $this->sql_clean($start);
	$limit = $this->sql_clean($limit);
	$con = $this->connect();
	$query = mysqli_query($con,"SELECT * from users WHERE status = '0' AND business_name != '' ORDER BY business_reg_date DESC LIMIT ".$start.", ".$limit."");
	$count = mysqli_num_rows($query) or die(mysqli_error($con));
	
		return array($count,$query);

	}







public function fetch_all_property($start,$limit){
	$start = $this->sql_clean($start);
	$limit = $this->sql_clean($limit);
	$con = $this->connect();
	$query = mysqli_query($con,"SELECT * from properties WHERE status = '1' ORDER BY timer DESC LIMIT ".$start.", ".$limit."");
	$count = mysqli_num_rows($query) or die(mysqli_error($con));
	
		return array($count,$query);
}







public function delete_props($id){
	$sql = "UPDATE properties SET status = 0 WHERE id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('s',$id);
	if($query->execute()){
	if($this->con->affected_rows > 0){
		
		return 1;
		
	}else{return 'Something went wrong, please try again!';}
	}else{return 'Something went wrong, please try again!';}
	
}






public function block_user($id){
	$sql = "UPDATE users SET is_blocked = 1 WHERE id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('s',$id);
	if($query->execute()){
	if($this->con->affected_rows > 0){
		
		return 1;
		
	}else{return 'Something went wrong, please try again!';}
	}else{return 'Something went wrong, please try again!';}
	
}






public function verifying_id($id){
	$sql = "UPDATE properties SET verified = 1 WHERE id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('s',$id);
	if($query->execute()){
	if($this->con->affected_rows > 0){
		
		return 1;
		
	}else{return 'Something went wrong, please try again!';}
	}else{return 'Something went wrong, please try again!';}
	
}





public function pending_id($id){
	$sql = "UPDATE properties SET verified = 0 WHERE id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('s',$id);
	if($query->execute()){
	if($this->con->affected_rows > 0){
		
		return 1;
		
	}else{return 'Something went wrong, please try again!';}
	}else{return 'Something went wrong, please try again!';}
	
}







public function unblock_user($id){
	$sql = "UPDATE users SET is_blocked = 0 WHERE id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('s',$id);
	if($query->execute()){
	if($this->con->affected_rows > 0){
		
		return 1;
		
	}else{return 'Something went wrong, please try again!';}
	}else{return 'Something went wrong, please try again!';}
	
}


	
	
	
	
		
public function select_all_users(){
	$con = $this->connect();
	$sql = "SELECT * FROM users ORDER BY reg_date DESC";
	$query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($query);
	return array($count,$query);
}


























   





































































































			
	//////////////////EMAIL VERIFICATION HERE///////////////////////
	////////////////////////////////////
	public function acc_varification($email,$code,$pwd){
		$sql = "SELECT email,status,is_blocked FROM users WHERE  email = ? AND email_code = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('ss',$email,$code);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($email,$status,$is_blocked);
			$query->fetch();
				
				if($is_blocked != 1){
					if($status ==1){
						
					$new_pwd = $this->hash($pwd);

					$sql = "UPDATE users SET password = ?, email_code = '0' where email = ?";
					$query = $this->con->prepare($sql);
					$query->bind_param('ss',$new_pwd,$email);
					$query->execute();
		
				return 1;
				}else{ return "Email not verified!"; }
			}else{ return "This account has been blocked by Support!";}
		}else{ return 'Wrong email or verification code';}
	}









		
	//////////////////EDIT AND ADD SUPPORT HERE///////////////////////
	////////////////////////////////////

	public function edit_and_add_support($uid,$msg_id,$subject,$message){
		$con = $this->connect();
		$is_staff = 0;
		$timer = time();
		$con = $this->connect();
		$sql = "select id,uid from support where uid = ? and id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('ii',$uid,$msg_id);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($id,$uid);
			$query->fetch();
		mysqli_query($con,"UPDATE support SET subject = '$subject', message = '$message' WHERE id = '$id' AND uid='$uid'");
			if(mysqli_affected_rows($con)){
			$data = $this->add_and_get_support($uid,".",".");
			return $data;
			}else{
			return array('no',0);
			}
			
		}
		
	}





		
	//////////////////ADD AND GET SUPPORT HERE///////////////////////
	////////////////////////////////////

	public function add_and_get_support($uid,$subject,$message){
		$con = $this->connect();
		$is_visible = 1;
		$is_visible_admin = 1;
		$is_treated = 0;
		$is_staff = 0;
		$timer = time();
		if($subject=="." AND $messag="."){
		$sql = "SELECT * FROM support WHERE uid = '$uid' AND is_visible='1' order by id desc";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		return array($count,$query);
		
		}else{
			
		$sql = "INSERT INTO support(uid,subject,message,is_visible,is_visible_admin,is_treated,is_staff,timer) VALUES(?,?,?,?,?,?,?,?)";
		$query = $this->con->prepare($sql);
		$query->bind_param('issiiiii',$uid,$subject,$message,$is_visible,$is_visible_admin,$is_treated,$is_staff,$timer);
		$query->execute();
		
		//////SELECT ITEM
		$sql = "SELECT * FROM support WHERE uid = '$uid' AND is_visible='1' order by id desc";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		return array($count,$query);
		}
		
	}







		
	//////////////////ADD ADMIN SUPPORT HERE///////////////////////
	////////////////////////////////////

	public function add_admin_support($uid,$subject,$message){
		$con = $this->connect();
		$is_visible = 0;
		$is_visible_admin = 1;
		$is_treated = 0;
		$is_staff = 0;
		$timer = time();
			
		$sql = "INSERT INTO support(uid,subject,message,is_visible,is_visible_admin,is_treated,is_staff,timer) VALUES(?,?,?,?,?,?,?,?)";
		$query = $this->con->prepare($sql);
		$query->bind_param('issiiiii',$uid,$subject,$message,$is_visible,$is_visible_admin,$is_treated,$is_staff,$timer);
		$query->execute();
		if($this->con->affected_rows){
			return 1;
		}else{
			return 4;
		}

		
	}








		
	//////////////////TESTIMONIALS HERE///////////////////////
	////////////////////////////////////

	public function add_testimonial($uid,$testimony,$url){
		$timer = time();
		$sql = "INSERT INTO testimonials(uid,testimony,url,timer) VALUES(?,?,?,?)";
		$query = $this->con->prepare($sql);
		$query->bind_param('isss',$uid,$testimony,$url,$timer);
		$query->execute();
		return 1;
	}









	
	//END OF USER LOGIN///////////
	/////////////////////////////////////////
	
	public function total_current_link($uid,$link){
		$con = $this->connect();
		$sql = "SELECT id FROM ref_link_info WHERE ref_uid = '$uid' AND referral_link = '$link'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		return $count;
		}	
	
	
	
	public function total_current_open_link($uid,$link){
		$con = $this->connect();
		$sql = "SELECT id FROM ref_link_info WHERE ref_uid = '$uid' AND referral_link = '$link' AND confirm_payment = 1";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		return $count;
	}
	
	
	







	public function check_cookie(){
		if(isset($_COOKIE['property_cookie_'])){
			$hash_c = $_COOKIE['property_cookie_'];
		$sql = "select id,cookie_id,is_blocked from users where cookie_id = ? AND status = 1";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$hash_c);
		$query->execute();
		$query->store_result();

		if($query->num_rows){
			$query->bind_result($id,$cookie_id,$is_blocked);
			$query->fetch();
			if($is_blocked != 1){
			if($hash_c == $cookie_id){
			$hasher = mt_rand(199999,time());
			$hasher1 = mt_rand(121999,time());
			$cookie = $id.'O'.$hasher.$hasher1.time();
		$sql = "UPDATE users SET cookie_id = ? where id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('si',$cookie,$id);
		$query->execute();
        $_SESSION['user_id_xxxxxxxx']= $id;
		setcookie("property_cookie_",$cookie,time()+ (10 * 365 * 24 * 60 * 60), "/");
		return true;
		}else{ return false; }
		}else{
		setcookie('new_cookie_', '' , time() - 3600,'/');
		session_destroy();
		return false;	
		}
		}else{ return false; }
	}else{ return false; }
	}	
	
	









public function visited_page($page,$myipAddress){
	$con = $this->connect();
	if(isset($_SESSION['user_id_xxxxxxxx'])){
	$uid = $_SESSION['user_id_xxxxxxxx'];
	}else{
	$uid = 0;	
	}
	$timer = time();
	$status = 1;
	$no_of_time = 1;
	$ip_change_counter = 0;
	$sql = "SELECT * FROM visited_pages WHERE uid = '$uid' AND page = '$page'";
	$query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($query);
	if($count > 0){
		$fetch = mysqli_fetch_object($query);
		if($fetch->ip == $myipAddress){
			$ip_change_counter = $fetch->ip_change_counter;
		}else{
			$ip_change_counter = $fetch->ip_change_counter + 1; 
		}
		$no_of_time = $fetch->no_of_time + 1;
		$visited_page_id = $fetch->id;
		
	$sql = "UPDATE visited_pages SET no_of_time = ?, ip = ?, ip_change_counter = ?, timer= ? WHERE id = ?";
	$query = $this->con->prepare($sql);
	$query->bind_param('isisi',$no_of_time,$myipAddress,$ip_change_counter,$timer,$visited_page_id);
	$query->execute();	
	}else{
	$sql = "INSERT INTO visited_pages(uid,page,no_of_time,ip,ip_change_counter,timer,status) VALUES(?,?,?,?,?,?,?)";
	$query = $this->con->prepare($sql);
	$query->bind_param('isisisi',$uid,$page,$no_of_time,$myipAddress,$ip_change_counter,$timer,$status);
	$query->execute();
	}
	
	
}






public function check_payment($uid,$ref_uid,$link){
		$sql = "select i_want_to_pay, i_have_paid, confirm_payment, is_open from ref_link_info where uid = ? and referral_link = ? and ref_uid = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('sss',$uid,$link,$ref_uid);
		$query->execute();
		$query->store_result();

		if($query->num_rows){
			$query->bind_result($i_want_to_pay,$i_have_paid,$confirm_payment,$is_open);
			$query->fetch();
			return array($query->num_rows,$i_want_to_pay,$i_have_paid,$confirm_payment,$is_open);
		}else{
			return array(0,0,0);
		}


}










public function is_payment_pending($uid){
		$sql = "select referral_link from ref_link_info where uid = ? and is_open = 1 and (i_want_to_pay = 1 or i_have_paid = 1)";
		$query = $this->con->prepare($sql);
		$query->bind_param('i',$uid);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($link);
			$query->fetch();
			return $link;
		}else{
			return false;
		}


}








public function check_open_payment($uid,$ref_uid,$link){
		$open = 1;
		$sql = "select id, i_want_to_pay, i_have_paid, confirm_payment from ref_link_info where uid = ? and referral_link = ? and ref_uid = ? and is_open = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('ssss',$uid,$link,$ref_uid,$open);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($id,$i_want_to_pay,$i_have_paid,$confirm_payment);
			$query->fetch();
			return array($query->num_rows,$id,$i_want_to_pay,$i_have_paid,$confirm_payment);
		}else{
			return array(0,0,0);
		}


}









public function get_amount(){
	$con = $this->connect();
	$sql = "SELECT * FROM  referral_amounts WHERE id ='1'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		if($count > 0){
			$fetch = mysqli_fetch_object($query);
			
			return array($count,$fetch);	
		}else{
			return array($count,0);
		}
		
}






public function all_users(){
	$con = $this->connect();
	$sql = "SELECT * FROM users";
	$query = mysqli_query($con,$sql);
	return $count = mysqli_num_rows($query);
}






public function support(){
	$con = $this->connect();
	$sql = "SELECT * FROM users WHERE is_support = 1";
	$query = mysqli_query($con,$sql);
	return $count = mysqli_num_rows($query);
}





public function all_referrals_(){
	$con = $this->connect();
	$sql = "SELECT * FROM referral_links";
	$query = mysqli_query($con,$sql);
	return $count = mysqli_num_rows($query);
}





public function testimonials(){
	$con = $this->connect();
	$sql = "SELECT * FROM testimonials";
	$query = mysqli_query($con,$sql);
	return $count = mysqli_num_rows($query);
}








public function ref_link_subscribers($referral_url){
	$con = $this->connect();
	$sql = "SELECT * FROM ref_link_info WHERE referral_link = '$referral_url' AND is_open='1'";
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		if($count > 0){
			$fetch = mysqli_fetch_object($query);
			
			return array($count,$fetch);	
		}else{
			return array($count,0);
		}
		
}







public function view_support_msg($uid,$msg_id){
		$con = $this->connect();
		$sql = "select id,uid,subject,message from support where uid = ? and id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('ii',$uid,$msg_id);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($id,$uid,$subject,$message);
			$query->fetch();
		return $data = '<h4 class="text-center">'.$subject.'</h4><hr style="border:1px solid #fff;"></hr><p style="text-align:justify">'.$message.'</p>';
		}	
}






public function edit_support_msg($uid,$msg_id){
		$con = $this->connect();
		$sql = "select id,uid,subject,message from support where uid = ? and id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('ii',$uid,$msg_id);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($id,$uid,$subject,$message);
			$query->fetch();
		return $data = '<div class="form">
		<h5 class="text-center pt-1">Edit Support Message </h5>
                        <form action="" method="post" role="form" class="php-email-form">
						<div id="edit_error" class="alert alert-danger d-none py-1 mb-1"></div>  
                            <div class="form-group">
                                <input type="text" class="form-control" id="edit_subject" value="'.$subject.'"
                                    placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="edit_message" rows="5" placeholder="Message">'.$message.'</textarea>
                            </div>
                            <div class="text-center"><button type="submit" data-id="'.$id.'" class="btn btn-light" data-role="edit_and_post" title="Submit Message"><i class="fa fa-edit"></i> Submit Edited Message</button>
                            </div>
                        </form>
                    </div>';
		}	
}











public function del_support_msg($uid,$msg_id){
		$con = $this->connect();
		$sql = "select id,uid from support where uid = ? and id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('ii',$uid,$msg_id);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($id,$uid);
			$query->fetch();
		mysqli_query($con,"UPDATE support SET is_visible = '0'  WHERE id = '$id' AND uid='$uid'");
				$data = $this->add_and_get_support($uid,".",".");
				return $data;			
			
		}	
}











public function is_closed_payment($link){
		$sql = "select id from referral_links where links = ? and status = 0";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$link);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			return 1;
		}else{
			return 0;
		}
}







public function change_referral_link_table($link,$uid){
	$con = $this->connect();
	mysqli_query($con,"UPDATE referral_links SET status = '0'  WHERE links = '$link' AND uid='$uid'");		
	return true;
}

	
	
	
	
	
		
		///////////////////////I WANT TO PAY////////////////////
		///////////////////////////////////////////////////////
		public function i_want_to_pay_link($uid,$ref_url){
		$url_amount = explode("/",$ref_url);
		$url_amount = end($url_amount);

		//////////fetching referral link url details and authenticating link
		$sql = "select id,referral_amount,referral_link,referral_max_no from users where referral_link = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$ref_url);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($referral_uid,$referral_amount,$referral_url,$referral_max_no);
			$query->fetch();


		//////////fetching login user information
			$sql = "select id,referral_amount,referral_link,referral_max_no from users where id = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$uid);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($uid,$uid_amount,$uid_url,$uid_max_no);
			$query->fetch();
			
			////////checking to ensure that uid and ref_uid is not same
			if($uid != $referral_uid){
			
			
			/////////////Check if users amount is thesame with the active link amount
			if(is_null($uid_amount) OR $uid_amount == 0 OR $referral_amount == $uid_amount){
				
				/////////////check if user have reached the maximum amount of 10
				if($uid_max_no < 10){
				
				/////////////Check for available active subscribers
				$ref_link_subscribers = $this->ref_link_subscribers($referral_url);
				if($ref_link_subscribers[0] < $referral_max_no){
					
				/////////////
				//return array($query->num_rows,$i_want_to_pay,$i_have_paid,$confirm_payment,$is_open);
					$sub = $this->check_payment($uid,$referral_uid,$referral_url);
					if(($sub[0] && $sub[1] ==1)){
						return '<strong class="text-white"><i class="fa fa-info-circle"></i> You have already pledged to pay this user. Please refresh this page.</strong>';
					}
					
					if((($sub[0] && $sub[2] ==1 && $sub[3] == 0))){
						return '<strong class="text-white"><i class="fa fa-info-circle"></i> Sorry, your payment is yet to be confirmed by this user.</strong>';
					}
					
					
					if((($sub[0] && $sub[3] == 1))){
						return '<strong class="text-white"><i class="fa fa-info-circle"></i> Sorry, you are only allowed to pay a link once. You have made a successful payment to this link. <a href="https://triplereferrals.com/dashboard" class="text-warning font-weight-bold" style="cursor:pointer"><u>Click Here to select another user</u></a> from the dashboard to pay in order to activate your link. </strong>';
					}
					
					
					////////Check the number of users that have subscribed to the link
					$i_want_to_pay = 1;
					$i_have_paid = 0;
					$created_date = time();
					$paid_date = time();
					$confrim_payment = 0;
					$is_open = 1;
					$is_visible = 1;
					$sql = "INSERT INTO ref_link_info(uid,referral_link,ref_uid,amount,i_want_to_pay,i_have_paid,created_date,paid_date,confirm_payment,is_open,is_visible) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
					$query = $this->con->prepare($sql);
					$query->bind_param('isiiiiiiiii',$uid,$referral_url,$referral_uid,$referral_amount,$i_want_to_pay,$i_have_paid,$created_date,$paid_date,$confrim_payment,$is_open,$is_visible);
					$query->execute();
					$query->store_result();
					if($this->con->affected_rows){
						return 1;
					}
				}else{
				return '<strong class="text-white"><i class="fa fa-info-circle"></i> Too late, maximum number of payers reached for this referral link. <a href="https://triplereferrals.com/dashboard" class="text-warning font-weight-bold" style="cursor:pointer"><u>Click Here to select another user</u></a> from the dashboard to pay in order to activate your link.</strong>';
			}
			
			}else{
				return '<strong class="text-white"><i class="fa fa-info-circle"></i> You have reach the maximum amount you active link can carry.</strong>';
			}
			}else{
				return '<strong class="text-white"><i class="fa fa-info-circle"></i> You can\'t pay for an amount that is different from your active link amount!. Kindly wait for payment to be completed for your active link or pay for an amount that is thesame with your active link.</strong>';
			}
			
			}else{
				return '<strong class="text-white"><i class="fa fa-info-circle"></i> Sorry, you can\'t pay yourself.</strong>';
			}
			
		}else{ $this->page_session_auth(); }
		
		}else{ return '<strong class="text-white"><i class="fa fa-info-circle"></i> Invalid referral link!</strong>'; }

}








	
	
	
	
	//////////////////////////////////////////////
	/////////////CANCEL REQUEST TO PAY THIS USER
	
	public function cancel_request_to_pay_link($uid,$ref_url){
	$con = $this->connect();
		//////////fetching referral link url details and authenticating link
		$sql = "select id,referral_amount,referral_link,referral_max_no from users where referral_link = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$ref_url);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($referral_uid,$referral_amount,$referral_url,$referral_max_no);
			$query->fetch();
			
		$query = mysqli_query($con,"DELETE FROM ref_link_info WHERE uid = '$uid' AND referral_link = '$referral_url' AND ref_uid = '$referral_uid' AND i_want_to_pay ='1'");
		if(mysqli_affected_rows($con)){
			return 1;
		}else{
			return '<strong class="text-white"><i class="fa fa-info-circle"></i> Something went wrong, please refresh you page and try again later!</strong>';
		}
		}else{return '<strong class="text-white"><i class="fa fa-info-circle"></i> This referral link is no longer valid!</strong>';}

	}






	
	
	
	
	//////////////////////////////////////////////
	/////////////CANCEL I HAVE PAID///////////
	
	public function cancel_i_hv_paid($uid,$ref_url){
	$con = $this->connect();
		//////////fetching referral link url details and authenticating link
		$sql = "select id,referral_amount,referral_link,referral_max_no from users where referral_link = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$ref_url);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($referral_uid,$referral_amount,$referral_url,$referral_max_no);
			$query->fetch();
			
		$query = mysqli_query($con,"DELETE FROM ref_link_info WHERE uid = '$uid' AND referral_link = '$referral_url' AND ref_uid = '$referral_uid' AND i_have_paid ='1'");
		if(mysqli_affected_rows($con)){
			return 1;
		}else{
			return '<strong class="text-white"><i class="fa fa-info-circle"></i> Something went wrong, please refresh you page and try again later!</strong>';
		}
		}else{return '<strong class="text-white"><i class="fa fa-info-circle"></i> This referral link is no longer valid!</strong>';}

	}






	
	
	
	
	//////////////////////////////////////////////
	/////////////I HAVE PAID////////////
	
	public function i_have_paid($uid,$ref_url){
	$con = $this->connect();
		//////////fetching referral link url details and authenticating link
		$sql = "select id,referral_amount,referral_link,referral_max_no from users where referral_link = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('s',$ref_url);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($referral_uid,$referral_amount,$referral_url,$referral_max_no);
			$query->fetch();
			
		//$query->bind_result($id,$i_want_to_pay,$i_have_paid,$confirm_payment);
		$sub = $this->check_open_payment($uid,$referral_uid,$referral_url);
		if($sub[0] && $sub[3] == 0){
			$timer = time();
			mysqli_query($con,"UPDATE ref_link_info SET i_want_to_pay = '0', i_have_paid = '1', paid_date= '$timer' WHERE id = '$sub[1]'");
			if(mysqli_affected_rows($con)){
			return 1;
			}else{
				return '<strong class="text-white"><i class="fa fa-info-circle"></i> Something went wrong, please refresh this page and try again later!</strong>';
			}
			
		}else{ return '<strong class="text-white"><i class="fa fa-info-circle"></i> Congrats! User have confirmed your payment. Go to your <a href="https://triplereferrals.com/dashboard" class="text-warning font-weight-bold" style="cursor:pointer"><u> Dashboard</u></a> now and copy your active link and share to friends, so that they can use your link and pay you.</strong>';}
			
		
		}else{ return '<strong class="text-white"><i class="fa fa-info-circle"></i> This referral link is no longer valid!</strong>';}

	}







		public function check_and_insert_links($uid,$link,$amount){
			$status = 1;
			$timer = time();
			$sql = "INSERT INTO referral_links(uid,links,amount,status,timer) VALUES(?,?,?,?,?)";
			$query = $this->con->prepare($sql);
			$query->bind_param('isiii',$uid,$link,$amount,$status,$timer);
			$query->execute();
		}


	
	
	
	
	//////////////////////////////////////////////
	/////////////CONFIRM USER PAYMENT////////////
	
	public function confirm_transaction($uid,$payer_uid,$transaction_id){
		$open = 1;
		$con = $this->connect();
		//////////fetching referral link url details and authenticating link
		$sql = "select id,uid,ref_uid,amount from ref_link_info where id = ? AND uid = ? AND ref_uid = ? AND is_open = ?";
		$query = $this->con->prepare($sql);
		$query->bind_param('sssi',$transaction_id,$payer_uid,$uid,$open);
		$query->execute();
		$query->store_result();
		if($query->num_rows){
			$query->bind_result($id,$payer_uid,$uid,$amount);
			$query->fetch();
			
			mysqli_query($con,"UPDATE ref_link_info SET i_want_to_pay = '0', i_have_paid = '0', confirm_payment= '1', is_open = '0' WHERE id = '$id' AND uid='$payer_uid' AND ref_uid='$uid'");
			if(mysqli_affected_rows($con)){
				$payer = $this->power('users',$payer_uid);
				if($payer[2]->referral_max_no > 0){
				$referral_max_no = $payer[2]->referral_max_no + 3;
				$link = $payer[2]->referral_link;	
				}else{
				$aa = time();
				$referral_max_no = 3;
				$letter = strtoupper(chr(65 + rand(0, 25)));
				$rand = $payer_uid.$letter.$aa;
				$link = 'https://triplereferrals.com/referral/'.$rand.'/'.$amount;
				$this->check_and_insert_links($payer_uid,$link,$amount);
				}
				
				////////////UPDATE PAYERS INFORMATION
				$timer = time();
			mysqli_query($con,"UPDATE users SET referral_amount = '$amount', referral_link = '$link', referral_time = '$timer', referral_max_no = '$referral_max_no' WHERE id = '$payer_uid' ");	
			
			
			
			//////////////////UPDATE RECEIVERS INFORMATION
			$payee = $this->power('users',$uid);
			$referral_max_no = $payee[2]->referral_max_no - 1;
			$first_timer = $payee[2]->first_timer + 1;
			$total_earning = $payee[2]->total_earning + $amount;
			if($referral_max_no == 0){
			$referral_amount = 0;
			$referral_link = NULL;
			
			//CHANGE REFERRAL LINK TABLE STATUS TO ZERO
			$link = $payee[2]->referral_link;
			$this->change_referral_link_table($link,$uid);
			
			}else{
			$referral_amount = $payee[2]->referral_amount;
			$referral_link = $payee[2]->referral_link;
			}
			mysqli_query($con,"UPDATE users SET referral_amount = '$referral_amount', referral_link = '$referral_link', referral_max_no = '$referral_max_no', total_earning = '$total_earning', first_timer= '$first_timer' WHERE id = '$uid' ");	
			
			return 1;
			
			}else{
				return '<strong class="text-white"><i class="fa fa-info-circle"></i> Something went wrong, please refresh this page and try again later!</strong>';
			}
		
		}else{ return '<strong class="text-white"><i class="fa fa-info-circle"></i> This payment have been confirmed. Kindly refresh your dashboard!</strong>';}

	}
	
	
	
		
	public function dashboard_users($limit,$offset){
		$con = $this->connect();
		$sql = "SELECT * FROM users WHERE is_blocked = '0' AND status = '1' AND referral_max_no > 0 AND referral_max_no <= 4 AND (referral_link IS NOT NULL OR referral_link != '0' OR referral_link != '') ORDER BY referral_time ASC LIMIT ".$limit." OFFSET ".$offset;
		$query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($query);
		return array($count,$query);
	}	
	
	

	



}

?>