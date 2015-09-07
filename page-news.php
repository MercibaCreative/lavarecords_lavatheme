<?php
/*
Template Name: News Template
*/

$news = get_posts(array(
		'post_type'        => 'post'
		));

?>
<?php get_header(); ?>
<?php foreach($news as $i => $article): ?>
	<?php $xmultiple = rand(1, 4); ?>
	<?php $ymultiple = rand(1, 2); ?>
	<div class="news-section col-md-<?php echo $xmultiple*6; ?>">
		<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0] ?>" />
		<h1><?php echo $article->post_title ?></h1>
	</div>
<?php endforeach; ?>
