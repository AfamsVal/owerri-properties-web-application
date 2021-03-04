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

	?>
	<nav class="navbar navbar-expand-md navbar-light px-4 bg-light fixed-top navigation">
					<a class="navbar-brand" href="home">
						<img src="images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item <?php  if($path ==="home"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" href="home">Home</a></li>
							<li class="nav-item  <?php  if($path ==="about"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" target="_blank" href="about">About Us</a></li>
							<li class="nav-item  <?php  if($path ==="properties"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" target="_blank" href="properties">Properties</a></li>
							<li class="nav-item <?php  if($path ==="marketplace"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" target="_blank" href="marketplace">Marketplace</a></li>
							<li class="nav-item <?php  if($path ==="agents"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" target="_blank" href="agents">Agents</a></li>	
							<li class="nav-item <?php  if($path ==="contact-us"){ echo "active font-weight-bold"; }; ?>"><a class="nav-link" target="_blank" href="contact-us">Contact-Us</a></li>	
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
						  <a class="dropdown-item" href="my-account">My Account</a>
						  <a class="dropdown-item" href="my-property">My Property</a>
						  <a class="dropdown-item" href="logout">Logout</a>
						</div>
					  </div>
					  </li>
						</ul>';
						}else{
							echo '<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="register"><i class="fa fa-plus-circle"></i> Register</a>
							</li>
						</ul>';

						}
						
						?>
					</div>
				</nav>