<!---Header start-->
	<header class="site-header">
		<div class="container">	
			<div class="logo ">
				<a href="index.html"><img src="images/main-logo.png" title="DANEV RICE" width="300" height="75" alt="" /></a>
			</div>
			<div class="menu_tog">
				<div class="trigger_icon">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>
			<div class="animated header_right">
				<div class="header_top">
					<div class="site-contact">
						<ul>
							<li class="phone">
								<span class="head-icon"><i aria-hidden="true" class="fa fa-phone"></i></span><a href="tel:+919429810011">+91-9429810011</a></li>
							<li class="email">
								<span class="head-icon"><i aria-hidden="true" class="fa fa-envelope"></i></span>
								<a href="mailto:info@danevrice.com">info@danevrice.com</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="header_bottom">
					<nav class="navbar main-navigation">
						<div class="close_button">x</div>
						<ul class="primary-menu nav">
							<li class="menu-item">
								<a <?php if($activemenu == 1) {echo 'class="active"';} ?> href="index">Home</a>
							</li>          
							<li class="menu-item ">
								<a <?php if($activemenu == 2) {echo 'class="active"';} ?> href="about-us">About Us</a>
							</li>           
							<li class="menu-item ">
								<a <?php if($activemenu == 3) {echo 'class="active"';} ?> href="product">Products</a>
							</li>           
							<li class="menu-item ">
								<a <?php if($activemenu == 4) {echo 'class="active"';} ?> href="contact-us">Contact Us</a>
							</li>                
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
<!---Header close-->