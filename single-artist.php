<?php
/*
Template Name: Single Artist Template
*/


?>

<?php get_header(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>


<!-- ==========================MAIN CONTENT=========================== -->
<?php 
	// Start the Loop.
	while ( have_posts() ) : the_post();

		get_template_part( 'content-artist', get_post_format() );

	
	endwhile;
?>

<?php get_footer(); ?>