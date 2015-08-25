<?php
/*
Template Name: Single Post Template
*/


?>



<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>


<!-- ==========================MAIN CONTENT=========================== -->
		<div id="sb-site">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'content-post', get_post_format() );

			
			endwhile;
		?>

			

				<!-- <section id="sidebar" class="col-md-4">
					<h3>Twitter Feed</h3>

					<div class="block">
						<img class="img-responsive img-rounded" src="http://placehold.it/250x500" />
					</div>
				</section> -->
					
			</section>


<?php get_footer(); ?>