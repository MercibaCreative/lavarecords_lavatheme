<?php
/*
Template Name: Tours & Events Template
*/
?>
<?php get_header(); ?>
<?php
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

	$tours = get_posts(array(
		'post_type'        => 'event'
		));
	$artists = get_posts(array(
		'post_type' => 'artist' 
		));

?>

<section class="post-header full-width"> <img src="<?php echo $image[0];?>" />
</section>

<section id="content" class="tours-container container">
	<h2 class="text-center">Tours and Events</h2>
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
		        	<?php 
			        	foreach($artists as $i => $artist):
			        		if ($artist->ID == $tour_artists[0]) echo $artist->post_title;
			        	endforeach; 
		        	?>
		        </td>
		        <td><?php echo($tour_meta["type"][0]); ?></td>
		        <td><?php echo($tour_meta["venue"][0]); ?></td>
		        <td><?php echo($tour_meta["location"][0]); ?></td>
		        <td><a href="http://<?php echo($tour_meta["tickets"][0]); ?>">TICKETS</a></td>
		      </tr>
			<?php endforeach; ?>
	    </tbody>
		</table>
</section>
