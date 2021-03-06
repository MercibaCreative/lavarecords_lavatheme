<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Lava Records</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon"/>

		<!-- font awesome magic -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" charset="utf-8" rel="stylesheet">

		<!-- google font magic -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' charset="utf-8" type='text/css'>
		
		<!-- jquery -->
		<script charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- slidein menu -->
		<script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/js/slidebars.min.js"></script>
		
		<!-- blur.js -->
		<script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/js/blur.min.js"></script>

		<!-- google maps API -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAavLki6mJxk8CMNhmJem2gIHFPkh-sHiQ" type="text/javascript"></script>
		
    	<link charset="utf-8" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" type="text/css" charset="utf-8" />
        
        <!-- custom css magic -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/audio-player.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/artist-section.css" />
		<link charset="utf-8" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-artist.css">
		<link charset="utf-8" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
		<link charset="utf-8" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
		<link charset="utf-8" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lavatheme.css" />
		<link charset="utf-8" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/simple-sidebar.css" />
		<link charset="utf-8" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tours.css" />
		<link charset="utf-8" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />

		
        <!-- fontawesome -->
        <link charset="utf-8" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
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

	<div id="wrapper" class="container">
		<!-- ==========================NAVIGATION=========================== -->
	  <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" id="menu-toggle" class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <i class="fa fa-times hidden"></i>
            </button>
            <a href="/" class="logo"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              	<li><a href="/artists">Artists</a></li>
				<li><a href="/events">Tours & Events</a></li>
				<li><a href="/news">News</a></li>
				<li><a href="/gallery">Gallery</a></li>
            </ul>
            <div class="social-media">
				<a href="https://instagram.com/lavarecordsofficial" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/lavarecordsus" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/LavaRecordsUS" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://open.spotify.com/user/lavarecords" target="_blank"><i class="fa fa-spotify"></i></a>
			</div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/about">About</a></li>
			  <li><a href="/contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <li><a href="/artists">Artists</a></li>
			<li><a href="/events">Tours & Events</a></li>
			<li><a href="/news">News</a></li>
			<li><a href="/gallery">Gallery</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="https://instagram.com/lavarecordsofficial" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/lavarecordsus" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/LavaRecordsUS" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://open.spotify.com/user/lavarecords" target="_blank"><i class="fa fa-spotify"></i></a></li>
          </ul>
      </div>
	  <article id="page-content-wrapper">

	  <?php
	  	$playlist = get_posts(array(
			'post_type'        => 'track'
		));
	  ?>
	 <div id="audio-container">
        <div class="audio-player">
            <i class="fa fa-step-backward"></i>
	  	    <i class="play-btn fa fa-play"></i>
	  	    <i class="pause-btn fa fa-pause hidden"></i>
            <i class="fa fa-step-forward"></i>
            <i class="fa fa-volume-up"></i>
	  	    <p id="player-title"></p>
	  	
	  	    <?php foreach($playlist as $i => $track): ?>
			<?php $track_meta = get_post_meta($track->ID); ?>
			<audio src="<?php echo wp_get_attachment_url($track_meta["mp3"][0]); ?>" type="audio/mp3" controls="controls" data-title="<?php echo $track->post_title ?>"></audio>
		<?php endforeach; ?>
	  </div>
    </div>
          