   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


<script src="js/jquery-ui.js"></script>
<script>
$( "#tabs" ).tabs();
</script>
<script type="text/javascript" src="js/owl.js"></script>
<script>
	$(document).ready(function(){
		$('.home-slider').owlCarousel({
			loop:true,
			margin:15,
			nav:true,
			autoplay:true,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			responsive:{
				0:{items:1},
				600:{items:1},
				1000:{items:1}
			}
		})
	});
	$(document).ready(function(){
		$('.gallery-list').owlCarousel({
			loop:true,
			margin:25,
			nav:true,
			autoplay:true,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			responsive:{
				0:{items:1},
				768:{items:3},
				1025:{items:4}
			}
		})
	});
</script>
<script type='text/javascript'> 
function attracta_loadjs(url) {
   (function() {
       var s = document.createElement('script');
       s.type = 'text/javascript';
       s.async = true;
       s.src = url;
       var x = document.getElementsByTagName('script')[0];
       x.parentNode.insertBefore(s, x);
   })();
}
function attracta_shouldrun() {
   var v = ["/admin/","/adm/","/wp-admin/","/administrator/"];
   for (x in v) if(window.location.pathname.indexOf(v[x]) == 0) return false;
   return true;
}
function attracta_window_width() {
   if (document.body && document.body.offsetWidth) return document.body.offsetWidth;
   if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetWidth ) return document.documentElement.offsetWidth;
   if (window.innerWidth) return window.innerWidth;
   return 0;
}
function attracta_window_height() {
   if (document.body && document.body.offsetHeight) return document.body.offsetHeight;
   if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetHeight ) return document.documentElement.offsetHeight;
   if (window.innerHeight) return window.innerHeight;
   return 0;
}
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-63845221-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();

	});
</script>