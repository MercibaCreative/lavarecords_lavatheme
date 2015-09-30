<?php
/*
Template Name: Tours & Events Template
*/
?>
<?php get_header(); ?>
<?php

	$tours = get_posts(array(
		'post_type'        => 'event',
		'posts_per_page'   => 100,
		'orderby'          => 'meta_value',
		'meta_key'		   => 'date',
		'order'            => 'ASC',
		));
	$artists = get_posts(array(
		'post_type' => 'artist',
		'posts_per_page'   => 100,
		'orderby'          => 'menu_order',
		'order'            => 'ASC',
		));
	
	$first_show = $tours[0];
	$first_show_meta = get_post_meta($first_show->ID); 
	$first_show_artist_id = unserialize($first_show_meta["artists"][0])[0];
	foreach($artists as $i => $artist):
		if ($artist->ID == $first_show_artist_id) {
			$first_show_artist = $artist;
			$first_header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' )[0];
		}
	endforeach;

	$second_show = $tours[1];
	$second_show_meta = get_post_meta($second_show->ID); 
	$second_show_artist_id = unserialize($second_show_meta["artists"][0])[0];
	foreach($artists as $i => $artist):
		if ($artist->ID == $second_show_artist_id) {
			$second_show_artist = $artist;
			$second_header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' )[0];
		}
	endforeach;

	$third_show = $tours[2];
	$third_show_meta = get_post_meta($third_show->ID); 
	$third_show_artist_id = unserialize($third_show_meta["artists"][0])[0];
	foreach($artists as $i => $artist):
		if ($artist->ID == $third_show_artist_id) {
			$third_show_artist = $artist;
			$third_header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' )[0];
		}
	endforeach;
	
?>

<section class="post-header tours-header full-width"> 
	<div>
		<img src="<?php echo $first_header_image; ?>" data-carousel-id="1"/>
		<div class="mask" data-carousel-id="1">
			<h1><?php echo $first_show_artist->post_title; ?></h1>
			<h3><?php echo $first_show_meta["venue"][0]; ?> tickets available</h3>
		</div>
	</div>
	<div>
		<img src="<?php echo $second_header_image; ?>" data-carousel-id="2"/>
		<div class="mask" data-carousel-id="2" >
			<h1><?php echo $second_show_artist->post_title; ?></h1>
			<h3><?php echo $second_show_meta["venue"][0]; ?> tickets available</h3>
		</div>
	</div>
	<div>
		<img src="<?php echo $third_header_image; ?>" data-carousel-id="3"/>
		<div class="mask" data-carousel-id="3">
			<h1><?php echo $third_show_artist->post_title; ?></h1>
			<h3><?php echo $third_show_meta["venue"][0]; ?> tickets available</h3>
		</div>
	</div>
</section>

<section id="content" class="tours-container container">
	<h2 class="text-center">Tours & Events</h2>
	<table class="table tours-full">
	    <thead>
	      <tr>
	        <th><h6>DATE</h6></th>
	        <th><h6>ARTIST</h6></th>
	        <th><h6>TYPE</h6></th>
	        <th><h6>VENUE</h6></th>
	        <th><h6>LOCATION</h6></th>
	        <th></th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php foreach($tours as $i => $tour): ?>
			  <?php $tour_meta = get_post_meta($tour->ID); ?>
			  <?php if (new DateTime($tour_meta["date"][0]) > new DateTime()) { ?>
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
			        <td class="ticketscolumn"> <button type="button" class="btn-primary btn-danger btn-lg btn-block">  <a target="_blank" href="http://<?php echo($tour_meta["tickets"][0]); ?>"><h5>TICKETS</h5></a> </button> </td> 
							
			      </tr>
			  <?php } ?>
			<?php endforeach; ?>
	    </tbody>
		</table>
</section>

<?php get_footer(); ?>
