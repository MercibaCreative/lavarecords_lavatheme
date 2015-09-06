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
<?php get_sidebar(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>


<!-- ==========================MAIN CONTENT=========================== -->

			<!-- ==========================ABOUT CONTENT=========================== -->
			<section id="header" class="container-fluid" style="background-image: url('<?php echo $image[0];?>');">
				<h1>
					<?php
						$post = get_post($page->ID); 
						$title = apply_filters('the_title', $post->post_title); 
						echo $title;
					?>
				</h1>
				<div class="load"></div>
			</section>

			<!-- ==========================CONTENT=========================== -->
			<section id="content" class="container">
				
					<?php 
						$post = get_post($page->ID); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content; 
					?>
				
				<div class="roster">
					<h1>
						Roster
					</h1>
					<?php foreach($artists as $artist): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' ); ?>
					<div class="col-md-4">
						<div class="image" style="background-image: url('<?php echo $image[0];?>');" alt="<?php echo $artist->post_title; ?>"></div>
						<h3>
							<?php echo $artist->post_title; ?>
						</h3>
					</div>
					<?php endforeach; ?>
					
				</div>
			</section>


<?php get_footer(); ?>