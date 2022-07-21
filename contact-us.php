<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->

<?php 
include("include/head.php");
$activemenu = 4;
?>

<body class="contact-page" >


<div id="page" class="hfeed site">
<?php include("include/header.php"); ?>
<!--Main section start-->
	<div id="fullpage" class="wrapper">

		
		<div class="contact_main_section section_gapping">
			<div class="container">     
				<div class="wow pulse animated page_title">Contact <span class="green">Us</span></div>
				<div class="wow zoomIn animated head_down_dtc animated" style="visibility: visible;">We follow First Time Right policy for complete customer satisfaction. This helps us<br> in growing customer's confidence and our growth.</div>
				<div class="contact-main-left">
					<div class="address-info">
						<h3>Address Info</h3>
						<ul class="info-list">
							<li class="address-block">
								<h4>Address</h4>
								<!-- <p>Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,UK,<br> 0000</p> -->
								<b>Distributor</b><br>
									<div class="cont_dtc">
										
										Mahavir Enterprice<br/>
										Junction Plot,Main Road,<br/>
										Rajkot-360001, Gujarat,<br/>
										Office : 0281 2444549,<br/>
										Mo : 94271 69808
									</div>
									<br>
									<div class="cont_dtc">
										Thakar Enterprice<br/>
										A-22, Old Marketing Yard,<br/>
										Rajkot-360003, Gujarat,<br/>
										Mo : 97259 69968 <br>
									</div>
									<br>
									<b>Contact Us</b><br>
									<div class="cont_dtc">
										
										Danev Overseas<br/>
										Customer Care :<br>
										Mo : +91 94298 10011 <br>
									</div>
							</li>
							<li class="phone-block">
								<h4>Phone Number</h4>
								<p><a href="tel:+919429810011">+91 94298 10011</a></p>
							</li>
							<li class="mail-block">
								<h4>E -mail Address</h4>
								<p><a href="mailto:info@danevrice.com">info@danevrice.com</a></p>
							</li>
						</ul>
					</div>
				</div>
				<div class="contact-main-right">
					<div class="contact-form-main">
						<h3>Quick Contact</h3>
						<form id="contact-form"  name="contact-form" class="contactform" method="post">
							<fieldset>
								<ul class="form_set">
									<li class="wow slideInRight animated text-field">			
										<input type="text" class="form-control" name="name" placeholder="Name" id="name">
									</li>   
									<li class="wow slideInRight animated text-field">
										<input type="email" class="form-control" name="email" placeholder="Email" id="email">
									</li>
									<li class="wow slideInRight animated text-field">
										<input type="text" class="form-control" name="phone" placeholder="Phone" id="phone">
									</li>
									<li class="wow slideInRight animated textarea-field">
										<textarea class="form-control" name="message" placeholder="Message" id="message"></textarea>
									</li>
									<li class="wow slideInRight animated submit-button">
										<div id="ajaxLoader" style="display:none;"><img src="images/loader.gif" alt="" /></div>
										<input type="submit" class="submit btn" value="SEND NOW" name="sendemail">
									</li>
								</ul>
								<div id="result" style="display:none;"></div>
							</fieldset>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		
				 
</div><!-- #main .wrapper -->		
<!--Main section close-->
<?php include("include/footerwithmap.php"); ?>
</div>
<?php include("include/js.php"); ?>
</body>		

</html>
