<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!-- ==========================ABOUT CONTENT=========================== -->
<section class="post-header container-fluid"> <img src="<?php echo $image[0];?>" />
</section>

<!-- ==========================CONTENT=========================== -->
<section id="content" class="container">
    
	<section id="posts">

		<div class="post">

			<div class="bodycopy">
                <h1 class="text-center"><?php echo nl2p($post->post_title); ?></h1>
		
			<!--<a href="/news" class="back" style="font-size:16px; font-weight:bold; padding-bottom:10px; display:inline-block">&lt; Back</a>-->
				<div class="artist-links text-center">
					<?php $url = urlencode( get_permalink( $post->ID )); ?>
					<?php echo date("F j, Y", strtotime($post->post_date));?> | <ul class="share-buttons">
						  <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" title="Share on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
						  <li><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post->post_title); ?>%20|%20Lava%20Records%20<?php echo $url; ?>" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a></li>
						  <li><a href="https://plus.google.com/share?url=http%3A%2F%2Flavarecords.com" target="_blank" title="Share on Google+"><img src="images/flat_web_icon_set/color/Google+.png"></a></li>
						  <li><a href="http://www.tumblr.com/share?v=3&u=http%3A%2F%2Flavarecords.com&t=Lava%20Records&s=" target="_blank" title="Post to Tumblr"><img src="images/flat_web_icon_set/color/Tumblr.png"></a></li>
						  <li><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flavarecords.com&media=http://cdn.images.express.co.uk/img/dynamic/59/590x/Google-New-Logo-See-New-Google-Logo-Font-Change-2015-G-Logo-Google-Different-What-Has-happened-with-Google-Logo-Google-New-Look-602266.jpg&description=Lava%20Records%20is%20a%20record%20company%20based%20in%20New%20York%20City." target="_blank" title="Pin it"><img src="images/flat_web_icon_set/color/Pinterest.png"></a></li>
						  <li><a href="http://www.reddit.com/submit?url=http%3A%2F%2Flavarecords.com&title=Lava%20Records" target="_blank" title="Submit to Reddit"><img src="images/flat_web_icon_set/color/Reddit.png"></a></li>
						  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Flavarecords.com&title=Lava%20Records&summary=Lava%20Records%20is%20a%20record%20company%20based%20in%20New%20York%20City.&source=http%3A%2F%2Flavarecords.com" target="_blank" title="Share on LinkedIn"><img src="images/flat_web_icon_set/color/LinkedIn.png"></a></li>
						  <li><a href="http://wordpress.com/press-this.php?u=http%3A%2F%2Flavarecords.com&t=Lava%20Records&s=Lava%20Records%20is%20a%20record%20company%20based%20in%20New%20York%20City.&i=http://cdn.images.express.co.uk/img/dynamic/59/590x/Google-New-Logo-See-New-Google-Logo-Font-Change-2015-G-Logo-Google-Different-What-Has-happened-with-Google-Logo-Google-New-Look-602266.jpg" target="_blank" title="Publish on WordPress"><img src="images/flat_web_icon_set/color/Wordpress.png"></a></li>
						  <li><a href="https://pinboard.in/popup_login/?url=http%3A%2F%2Flavarecords.com&title=Lava%20Records&description=Lava%20Records%20is%20a%20record%20company%20based%20in%20New%20York%20City." target="_blank" title="Save to Pinboard"><img src="images/flat_web_icon_set/color/Pinboard.png"></a></li>
						  <li><a href="mailto:?subject=Lava%20Records&body=Lava%20Records%20is%20a%20record%20company%20based%20in%20New%20York%20City.:%20http%3A%2F%2Flavarecords.com" target="_blank" title="Email"><img src="images/flat_web_icon_set/color/Email.png"></a></li>
						</ul>
				</div>
				<div class="content">
					<?php echo nl2p($post->post_content); ?>
				</div>
			</div>
		</div>
	</section>

</section>