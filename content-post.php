<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!-- ==========================ABOUT CONTENT=========================== -->
<section class="post-header container-fluid"> <img src="<?php echo $image[0];?>" />
</section>

<!-- ==========================CONTENT=========================== -->
<section id="content" class="container">
    
	<section id="posts">

		<div class="post">

			<div class="bodycopy">
                <h1 class="text-center"><?php echo nl2p($post->post_title); ?></h1>
		
			<!--<a href="/news" class="back" style="font-size:16px; font-weight:bold; padding-bottom:10px; display:inline-block">&lt; Back</a>-->
				<div class="artist-links text-center">
					<?php $url = urlencode( get_permalink( $post->ID )); ?>
					<?php echo date("F j, Y", strtotime($post->post_date));?> <ul class="share-buttons">
						  <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" title="Share on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post->post_title." | Lava Records "); ?><?php echo $url; ?>" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="http://www.tumblr.com/share?v=3&u=<?php echo $url; ?>&t=Lava%20Records&s=" target="_blank" title="Post to Tumblr"><i class="fa fa-tumblr"></i></a></li>
						  <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=<?php echo urlencode($image); ?>&description=<?php urlencode($post->post_excerpt)?>" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a></li>
						  <li><a href="mailto:?subject=Lava Records: <?php echo $post->post_title;?>&body='<?php echo $post->post_title;?>' at Lava Records - <?php echo $url; ?>" target="_blank" title="Email"><i class="fa fa-envelope"></i></a></li>
						</ul>
				</div>
				<div class="content">
					<?php echo nl2p($post->post_content); ?>
				</div>
			</div>
		</div>
	</section>

</section>