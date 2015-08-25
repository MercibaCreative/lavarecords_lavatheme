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
			<div class="navigation">
				<i class="fa fa-bars nav-button"></i>
				<ul>
					<li><a href="/about">About</a></li>
					<li><a href="/news">News</a></li>
					<li><a href="/contact">Contact</a></li>
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
		</header>