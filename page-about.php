<?php
/*
Template Name: About Template
*/
?>

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

<?php get_header(); ?>


<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>

<section class="post-header container-fluid"> <img src="<?php echo $image[0];?>" />
</section>


<section id="content" class="container">
    
	<section id="posts">

		<div class="post">

			<div class="bodycopy">
                <h1 class="text-center"><?php echo nl2p($post->post_title); ?></h1>
				<?php echo nl2p($post->post_content); ?>
			</div>

		
        </div>

	</section>

</section>


<?php get_footer(); ?>