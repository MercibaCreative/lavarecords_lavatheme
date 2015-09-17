<?php
/*
Template Name: Tours & Events Template
*/
?>
<?php get_header(); ?>
<?php

	$tours = get_posts(array(
		'post_type'        => 'event'
		));
	$artists = get_posts(array(
		'post_type' => 'artist' 
		));
	
	$next_show = $tours[0];
	$next_show_meta = get_post_meta($next_show->ID); 
	$next_show_artist_id = unserialize($next_show_meta["artists"][0])[0];
	foreach($artists as $i => $artist):
		if ($artist->ID == $next_show_artist_id) {
			$next_show_artist = $artist;
			$header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' )[0];
		}
	endforeach; 

?>

<section class="post-header tours-header full-width"> <img src="<?php echo $header_image; ?>" />
	<div class="mask">
		<h1><?php echo $next_show_artist->post_title; ?></h1>
		<h3><?php echo $next_show_meta["venue"][0]; ?> tickets available</h3>
	</div>
</section>

<section id="content" class="tours-container container">
	<h2 class="text-center">Tours & Events</h2>
	<table class="table tours-full">
	    <thead>
	      <tr>
	        <th>DATE</th>
	        <th>ARTIST</th>
	        <th>TYPE</th>
	        <th>VENUE</th>
	        <th>LOCATION</th>
	        <th></th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php foreach($tours as $i => $tour): ?>
			  <?php $tour_meta = get_post_meta($tour->ID); ?>
		      <tr>
		        <td><?php echo date_format(new DateTime($tour_meta["date"][0]), "M d"); ?></td>
		        <td>
		        	<?php $tour_artists = unserialize($tour_meta["artists"][0]) ?>
		        	<?php foreach($artists as $i => $artist): 
		        		if ($artist->ID == $tour_artists[0]) { ?>
			        	<a href="<?php echo get_permalink($artist->ID); ?>"><?php echo $artist->post_title; ?></a>
		        	<?php }
		        		endforeach; ?>
		        </td>
		        <td><?php echo($tour_meta["type"][0]); ?></td>
		        <td><?php echo($tour_meta["venue"][0]); ?></td>
		        <td><?php echo($tour_meta["location"][0]); ?></td>
<<<<<<< HEAD
		        <td class="ticketscolumn"> <button type="button" class="btn-primary btn-danger btn-lg btn-block">  <a target="_blank" href="http://<?php echo($tour_meta["tickets"][0]); ?>"><h5>TICKETS</h5></a> </button> </td> 
						
=======
		        <td> <button type="button" class="btn-primary btn-danger btn-lg btn-block">  <a href="http://<?php echo($tour_meta["tickets"][0]); ?>"><h5>TICKETS</h5></a> </button> </td> 
>>>>>>> b56f31bf7b82c77ab952fa7807fda11b48f9ab98
		      </tr>
			<?php endforeach; ?>
	    </tbody>
		</table>
</section>

<?php get_footer(); ?>
