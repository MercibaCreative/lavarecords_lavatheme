<?php
/*
Template Name: News Template
*/

$news = get_posts(array(
'post_type'        => 'post'
));
?>
<?php get_header(); ?>

<div class="news-left">
	<?php foreach($news as $i => $article): ?>
		<?php if (($i % 2) == 1) continue; ?>
		<?php $multiple = 1; ?>
		<?php if (($i % 10) == 0) $multiple = 2; ?>

		<div class="news-section col-md-<?php echo $multiple*6; ?> row-<?php echo $multiple; ?>">
		<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0] ?>" />
		<h1><?php echo $article->post_title ?></h1>
		</div>
	<?php endforeach; ?>
</div>

<div class="news-right">
	<?php foreach($news as $i => $article): ?>
		<?php if (($i % 2) == 0) continue; ?>
		<?php $multiple = 1; ?>
		<?php if (($i % 10) == 0) $multiple = 2; ?>

		<div class="news-section col-md-<?php echo $multiple*6; ?> row-<?php echo $multiple; ?>">
		<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0] ?>" />
		<h1><?php echo $article->post_title ?></h1>
		</div>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>