			
			<!-- ==========================FOOTER=========================== -->
			

		</article>
		</div>
		<footer id="footer" class="container-fluid">
				<div class="logo"></div>
				<div class="disclaimer">
					&copy; Lava Records. All rights reserved. Designed by MATTE
				</div>
			</footer>
		<!-- bootstrap -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		
		<!-- custom js -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
		
		<!-- carousel -->
		<script src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>

		<script>
			//UA-55710260-1
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-16905879-3']);
			_gaq.push(['_trackPageview']);
			_gaq.push(['_trackPageLoadTime']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>

		<script>
		var stopScroll = function(e) { e.preventDefault() }
		var toggleMenu = function (e) {
			e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	        $(e.currentTarget).find('span').toggleClass('hidden')
	        $(e.currentTarget).find('i').toggleClass('hidden')
			if ((typeof $._data($('body')[0], 'events') !== 'undefined')) {
				$('body').unbind('touchmove')
			}
			else {
				$('body').bind('touchmove', stopScroll)
			}
		}
	    $("#menu-toggle").on('touchstart click', toggleMenu);
	    </script>
		
	</body>
	
</html>