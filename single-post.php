<?php
/*
Template Name: Single Post Template
*/


?>

<?php get_header(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>


<!-- ==========================MAIN CONTENT=========================== -->
	<section>
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'content-post', get_post_format() );

			
			endwhile;
		?>
					
	</section>


<?php get_footer(); ?>