<?php 

$artist_options = array(
	'posts_per_page'   => 15,
	'offset'           => 0,
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
<div id="artistcontainer">
    
<?php foreach($artists as $i => $artist): ?>
    
    <?php //var_dump($artist) ?>

    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $artist->ID ), 'single-post-thumbnail' ); ?>
    <?php if (((count($artists) % 3) == 1) && ($i == (count($artists) - 1))) { ?>
		<section class="col-md-4" style="height: 1px;">
		</section>
	<?php } ?>
	<?php if (((count($artists) % 3) == 2) && ($i == (count($artists) - 2))) { ?>
		<section class="col-md-2" style="height: 1px;">
		</section>
	<?php } ?>
	<a class="artist-links" href="<?php echo get_permalink($artist->ID); ?>">   
		<section 
	             class="artist-section container-fluid col-md-4 col-sm-6 col-xs-6" 
	             style="background-image: url('<?php echo $image[0];?>'); filter: grayscale(100%); -webkit-filter: grayscale(100%);";
	    >
	    <h1><?php echo $artist->post_title; ?></h1>
		</section>
	    
	</a>
	<?php if (((count($artists) % 3) == 2) && ($i == (count($artists) - 1))) { ?>
		<section class="col-md-2" style="height: 1px;">
		</section>
	<?php } ?>
	<?php if (((count($artists) % 3) == 1) && ($i == (count($artists) - 1))) { ?>
		<section class="col-md-4" style="height: 1px;">
		</section>
	<?php } ?>

<?php endforeach; ?>
    
    </div>

<?php get_footer(); ?>