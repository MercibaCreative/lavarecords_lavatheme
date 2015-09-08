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
					<?php echo date("F j, Y", strtotime($post->post_date));?> | <a href="#" id="share-toggle">Share</a>
				</div>
				<div class="content">
					<?php echo nl2p($post->post_content); ?>
				</div>
			</div>
		</div>
	</section>

</section>