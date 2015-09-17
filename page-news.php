<?php
/*
Template Name: News Template
*/

$news = get_posts(array(
'post_type'        => 'post',
'posts_per_page'	=> 40
));

?>
<?php get_header(); ?>

<div class="news-left">
	<?php foreach($news as $i => $article): ?>

		<?php if (($i % 2) == 1) continue; ?>
		<?php 
			$meta = get_post_meta($article->ID);
			$multiple = 1; 
			$heading = 2;
		?>
		<?php 
			if (($i % 5) == 0) {
				$multiple = 2; 
				$heading = 1;
			}
		?>
		<a class="news-links" href="<?php echo get_permalink($article->ID); ?>">
			<div class="news-section col-md-<?php echo $multiple*6; ?> row-<?php echo $multiple; ?>">
			<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0] ?>" />
			<h<?php echo $heading ?> class="col-md-12"><?php echo $article->post_title ?></h<?php echo $heading ?>>
			<p><?php echo $meta["sub_heading"][0]; ?></p>
			</div>
		</a>
	<?php endforeach; ?>
</div>

<div class="news-right">
	<?php foreach($news as $i => $article): ?>
		<?php if (($i % 2) == 0) continue; ?>
		<?php 
			$meta = get_post_meta($article->ID);
			$multiple = 1; 
			$heading = 2;
		?>
		<?php 
			if (($i % 5) == 0) {
				$multiple = 2; 
				$heading = 1;
			}
		?>
		<a class="news-links" href="<?php echo get_permalink($article->ID); ?>">
			<div class="news-section col-md-<?php echo $multiple*6; ?> row-<?php echo $multiple; ?>">
			<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0] ?>" />
			<h<?php echo $heading ?> class="col-md-12"><?php echo $article->post_title ?></h<?php echo $heading ?>>
			<p><?php echo $meta["sub_heading"][0]; ?></p>
			</div>
		</a>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>