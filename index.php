<?php 

$artist_options = array(
	'posts_per_page'   => 15,
	'offset'           => 0,
	'category'         => 'featured',
	'orderby'          => 'menu_order',
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

<!-- ==========================MAIN CONTENT=========================== -->

<?php foreach($artists as $i => $artist): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' ); ?>
	<section id="artist-section" class="container-fluid jessie-j <?php echo ($i % 2 == 0) ?  'text-left' :  'text-right';?>" style="background-image: url('<?php echo $image[0];?>');">
		<h1>
			<?php echo $artist->post_title; ?>
		</h1>
		<div class="buttons">
			<ul class="clearfix">

				<li><a href="<?php echo $artist->tour;?>" class="tour-button">Tour</a></li>
				<li><a href="<?php echo $artist->website;?>" class="website-button">Website</a></li><br />
				<li><a href="<?php echo $artist->itunes;?>"><i class="fa fa-music fa-lg"></i></a></li>
				<li><a href="<?php echo $artist->spotify;?>"><i class="fa fa-spotify fa-lg"></i></a></li>
				<li><a href="<?php echo $artist->facebook;?>"><i class="fa fa-facebook fa-lg"></i></a></li>
				<li><a href="<?php echo $artist->twitter;?>"><i class="fa fa-twitter fa-lg"></i></a></li>
			</ul>
		</div>
		<div class="video">
			<?php echo $artist->video; ?>
		</div>
	</section>

<?php endforeach; ?>

<?php get_footer(); ?>