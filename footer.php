			
			<!-- ==========================FOOTER=========================== -->
			<footer id="footer" class="container-fluid">
				<div class="logo"></div>
				<div class="disclaimer">
					&copy; Lava Records
				</div>
				<div class="disclaimer">
					All rights reserved.
				</div>
			</footer>

		</div>

		<!-- bootstrap -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		
		<!-- custom js -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
		
		<!-- carousel -->
		<script src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

				$("#slider").owlCarousel({
					navigation: true,
					slideSpeed: 300,
					paginationSpeed: 400,
					autoPlay: true,
					singleItem: true,
					transitionStyle : "goDown"
				});

			});
		</script>

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
		
	</body>
	
</html>