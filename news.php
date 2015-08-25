<?php
/*
Template Name: News Template
*/

$news_options = array(
	'posts_per_page'   => 15,
	'offset'           => 0,
	'category'         => '',
	'orderby'          => 'published_at',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);

$posts = get_posts($news_options); 

?>



<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>


<!-- ==========================MAIN CONTENT=========================== -->
		<div id="sb-site">

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
				
				<section id="posts" class="col-md-12">
					<?php foreach($posts as $post):?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>
					<?php setup_postdata( $post ); ?>
					<div class="post">
						<h2>
							<a href="<?php echo $post->guid;?>"><?php echo $post->post_title;?></a>
						</h2>
						<div class="info">
							<i class="fa fa-calendar"></i> <?php echo date("F, j Y", strtotime($post->post_date));?>
						</div>
						<div class="content">
							<a href="<?php echo $post->guid;?>"><img src="<?php echo $image[0];?>" width="100%"/></a>
						</div>
					</div>
					<?php endforeach; ?>
				</section>

			<!-- 	<section id="sidebar" class="col-md-4">
					<h3>Twitter Feed</h3>

					<div class="block">
						<img class="img-responsive img-rounded" src="http://placehold.it/250x500" />
					</div>
				</section> -->
					
			</section>


<?php get_footer(); ?>