<head>

<meta charset="utf-8">
<title>DANEV RICE</title>

<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<link href="images/favicon.ico" rel="icon" type="image/x-icon">
		            
<link href="css/animate.css" rel="stylesheet" type="text/css">     
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" /> 
<link href="css/font-awesome.min.css" rel="stylesheet"> 
<link href="css/owl.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css">      
<link href="css/responsive.css" rel="stylesheet" type="text/css"> 
<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Open+Sans:400,400italic,700,700italic|Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery_002.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/respond.js"></script>
<script type="text/javascript" src="js/enquiry.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script src="../js/jquery.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<script type="text/javascript">
	jQuery(window).scroll(function(){
	  var sticky = jQuery('body'),
		  scroll = jQuery(window).scrollTop();

	  if (scroll >= 100) sticky.addClass('sticky_header');
	  else sticky.removeClass('sticky_header');
	}); 
</script> 

<script>
	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>

<script>
	$(document).ready(function(){
		$(".menu_tog").click(function(){
			$("body").toggleClass("toggle_menu");
		});
		$('.main-navigation .close_button').click(function(){
			$('body').removeClass('toggle_menu');
		});
	});
</script>


<script>
     new WOW().init();
</script>


</head>