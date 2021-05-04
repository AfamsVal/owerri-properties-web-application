<?php
	// include '../backend/functions.php';
	// $referrals = new Functions();
	// $referrals->check_cookie();
	
	$session_id = $_SESSION['user_id_xxxxxxxx'];

	if($session_id){
		$power = $referrals->power('users',$session_id);
	}
	
	$server = explode("/",$_SERVER['REQUEST_URI']);
	$path = end($server);
	

	$host =  $_SERVER["HTTP_HOST"];
	$host  = $host == 'localhost' ?  'http://localhost/RealEstate/' : "https://www.owerriproperty.com/";

	?>
	<nav class="navbar navbar-expand-md navbar-dark px-4 bg-dark fixed-top navigation">
					<a class="navbar-brand" href="home">
						<img src="<?php echo $host; ?>images/logo.png" alt="logo">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item <?php  if($path ==="admin-dashboard"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" href="<?php echo $host; ?>admin-dashboard">Admin</a></li>
							<li class="nav-item  <?php  if($path ==="admin-properties"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" href="<?php echo $host; ?>admin-properties">Properties</a></li>
							<!-- <li class="nav-item <?php  if($path ==="marketplace"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" href="<?php echo $host; ?>marketplace">Marketplace</a></li>
							<li class="nav-item <?php  if($path ==="agents"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" href="<?php echo $host; ?>agents">Agents</a></li>	
							<li class="nav-item <?php  if($path ==="contact-us"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" href="<?php echo $host; ?>contact-us">Contact-Us</a></li>	
						-->
						</ul> 
						<?php
						
						if($session_id){
							$power = $referrals->power('users',$session_id);
					
						echo '<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
						<div class="dropdown">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						<strong>'.substr($power[2]->first_name,0,11).'</strong>
						</button>
						<div class="dropdown-menu">
						  <a class="dropdown-item" href="'.$host.'my-account">My Account</a>
						  <a class="dropdown-item" href="'.$host.'my-property">My Property</a>
						  <a class="dropdown-item" href="'.$host.'logout">Logout</a>
						</div>
					  </div>
					  </li>
						</ul>';
						}else{
							echo '<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="'.$host.'login">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="'.$host.'register"><i class="fa fa-plus-circle"></i> Register</a>
							</li>
						</ul>';

						}
						
						?>
					</div>
				</nav>