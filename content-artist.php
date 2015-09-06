<?php 

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$artist = get_post_meta(get_the_ID());
$tours = get_posts(array(
	'post_type'        => 'event'
	));
?>

<!-- ==========================ABOUT CONTENT=========================== -->

<section class="post-header container-fluid"> <img src="<?php echo $image[0];?>" />
</section>


<!-- ==========================CONTENT=========================== -->
<section id="content" class="container">
	
	<section id="posts" class="col-md-12">

		<div class="post">
		
			<div class="content">
				<?php echo nl2p($post->post_content); ?>
			</div>
			<ul class="tours">
			<?php foreach($tours as $i => $tour): ?>
				<?php $tour_meta = get_post_meta($tour->ID); ?>
				<?php $tour_artists = $tour_meta["artists"][0]; ?>
				<?php if (unserialize($tour_artists)[0] == $post->ID) { ?>
					<li>
						<?php echo($tour_meta["date"][0]); ?>, 
						<?php echo($tour->post_title); ?>, 
						<?php echo($tour_meta["type"][0]); ?>, 
						<?php echo($tour_meta["venue"][0]); ?>, 
						<?php echo($tour_meta["location"][0]); ?>
					</li>
				<?php } ?>
			<?php endforeach; ?>
			</ul>
		</div>

	</section>

</section>