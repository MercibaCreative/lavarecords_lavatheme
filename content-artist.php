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
    
	<section id="posts">

		<div class="post">

			<div class="bodycopy">
                <h1 class="text-center"><?php echo nl2p($post->post_title); ?></h1>
                <div class="artist-links">
                	<?php if ($artist["website_link"][0] != "") { ?>
                		<a href="http://<?php echo $artist["website_link"][0]; ?>"><?php echo $artist["website_link"][0]; ?></a>
                	<?php } ?>
                	<?php if ($artist["instagram_link"][0] != "") { ?>
                		<a href="https://instagram.com/<?php echo $artist["instagram_link"][0]; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                	<?php } ?>
                	<?php if ($artist["twitter_link"][0] != "") { ?>
                		<a href="https://twitter.com/<?php echo $artist["twitter_link"][0]; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					<?php } ?>
					<?php if ($artist["facebook_link"][0] != "") { ?>
						<a href="https://facebook.com/<?php echo $artist["facebook_link"][0]; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                	<?php } ?>
                	<?php if ($artist["soundcloud_link"][0] != "") { ?>
                		<a href="https://soundcloud.com/<?php echo $artist["soundcloud_link"][0]; ?>" target="_blank"><i class="fa fa-soundcloud"></i></a>
                	<?php } ?>
                </div>
				<?php echo nl2p($post->post_content); ?>
			</div>
            
            <h2 class="text-center">Current Tours</h2>
            <table class="table tours">
	            <thead>
			      <tr>
			        <th>DATE</th>
			        <th>VENUE</th>
			        <th>LOCATION</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php foreach($tours as $i => $tour): ?>
						<?php $tour_meta = get_post_meta($tour->ID); ?>
						<?php $tour_artists = $tour_meta["artists"][0]; ?>
						<?php if (unserialize($tour_artists)[0] == $post->ID) { ?>
					      <tr>
					        <td><?php echo date_format(new DateTime($tour_meta["date"][0]), "M d"); ?></td>
					        <td><?php echo($tour_meta["venue"][0]); ?></td>
					        <td><?php echo($tour_meta["location"][0]); ?></td>
					        <td><a href="http://<?php echo($tour_meta["tickets"][0]); ?>">TICKETS</a></td>
					      </tr>
					    <?php } ?>
					<?php endforeach; ?>
			    </tbody>
		  	</table>
		
        </div>

	</section>

</section>