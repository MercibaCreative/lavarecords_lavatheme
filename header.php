<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Lava Records</title>
		Test
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- font awesome magic -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- google font magic -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
		
		<!-- bootstrap magic -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
		
		<!-- slidebars magic -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slidebars.min.css">
		
		<!-- jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- slidein menu -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/slidebars.min.js"></script>
		
		<!-- blur.js -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/blur.min.js"></script>
		
		<!-- carousel -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.transitions.css">
		
		<!-- Brandon fonts -->
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" type="text/css" charset="utf-8" />
        
        <!-- custom css magic -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/navigation.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/headers.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/content.css?v=2" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/about.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/artist-section.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
		
		<!-- com-score -->
		<script> 
			var _comscore = _comscore || []; 
			_comscore.push({ c1: "2", c2: "9923941", c3: "", c4: "" });
			
			(function() { var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
			s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
			el.parentNode.insertBefore(s, el); })();
		</script>
		<noscript>
			<img src="http://b.scorecardresearch.com/p?c1=2&c2=9923941&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1" />
		</noscript>
		<!-- /com-score -->
	</head>

	<body>
		<?php

		$artist_options = array(
			'posts_per_page'   => 25,
			'offset'           => 0,
			'category'         => '',
			'orderby'          => 'title',
			'order'            => 'ASC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'artist',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);

		$artists = get_posts($artist_options); 

		?>
		<div class="sb-slidebar sb-right">
			<div class="logo"></div>
			<ul>
				<li><a href="/"><i class="fa fa-bank"></i> Home</a></li>
				<li><a href="/about"><i class="fa fa-book"></i> About</a></li>
				<!-- <li><a href="blog.php"><i class="fa fa-file-text"></i> Blog</a></li> -->
				<li><a href="/contact"><i class="fa fa-envelope"></i> Contact</a></li>
			</ul>
			<h3 id="roster-nav-list-toggle">
				Roster <i id="roster-button" class="fa fa-plus pull-right"></i>
			</h3>
			<ul id="roster-nav-list">
			<?php foreach($artists as $artist): ?>
				<li><a href="#"><i class="fa fa-user"></i> <?php echo $artist->post_title;?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>

		<!-- ==========================NAVIGATION=========================== -->
		<header id="header-navigation" class="sb-slide">
			<div class="navigation-left">
				<i class="fa fa-bars nav-button"></i>
				<ul>
					<li><a href="/artists">Artists</a></li>
					<li><a href="/events">Tours & Events</a></li>
					<li><a href="/news">News</a></li>
					<li><a href="/gallery">Gallery</a></li>
				</ul>
			</div>
			<a href="/" class="logo"></a>
			<div class="social-media">
				<a href="http://instagram.com/lavarecordsus" target="_blank"><i class="fa fa-instagram fa-fw"></i></a>
				<a href="https://www.facebook.com/LavaRecordsUS" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/LavaRecordsUS" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest fa-fw"></i></a>
				<a href="https://www.linkedin.com/vsearch/p?company=Lava+Records&trk=prof-0-ovw-curr_pos" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
			</div>
			<div class="navigation-right">
				<ul>
					<li><a href="/about">About</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</header>		