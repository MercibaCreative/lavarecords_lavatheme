<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!-- ==========================ABOUT CONTENT=========================== -->

<section class="post-header container-fluid"> <img src="<?php echo $image[0];?>" />
</section>


<!-- ==========================CONTENT=========================== -->
<section id="content" class="container">
    

	
	<section id="posts">

		<div class="post">
        
			
			<div class="content">
                
                <?php echo nl2p($post->post_title); ?> 
				<?php echo nl2p($post->post_content); ?>
			</div>
		</div>

	</section>

</section>