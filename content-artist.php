<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!-- ==========================ABOUT CONTENT=========================== -->
<section id="header" class="container-fluid">
	<img src="<?php echo $image[0];?>" />
</section>

<!-- ==========================CONTENT=========================== -->
<section id="content" class="container">
	
	<section id="posts" class="col-md-12">

		<div class="post">
			<a href="/news" class="back" style="font-size:16px; font-weight:bold; padding-bottom:10px; display:inline-block">&lt; Back</a>
			<div class="info">
				<i class="fa fa-calendar"></i> <?php echo date("F, j Y", strtotime($post->post_date));?>
			</div>
			<div class="content">
				<?php echo nl2p($post->post_content); ?>
			</div>
		</div>

	</section>

</section>