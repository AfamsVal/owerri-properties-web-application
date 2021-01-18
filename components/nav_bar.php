	<?php
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
							<li class="nav-item <?php  if($path ==="home"){ echo "active"; }; ?>"><a class="nav-link" href="home">
							Homes</a></li>
							<li class="nav-item  <?php  if($path ==="about"){ echo "active"; }; ?>"><a class="nav-link" href="about">About Us</a></li>
							<li class="nav-item  <?php  if($path ==="properties"){ echo "active"; }; ?>"><a class="nav-link" href="properties">Properties</a></li>
							
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="marketplace">Marketplace</a></li>
									<li><a class="dropdown-item @@listView" href="agents">Agents</a></li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="register"><i class="fa fa-plus-circle"></i> Register</a>
							</li>
						</ul>
					</div>
				</nav>