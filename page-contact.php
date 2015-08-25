<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>

<!-- ==========================MAIN CONTENT=========================== -->
		<div id="sb-site">

			<!-- ==========================CONTACT CONTENT=========================== -->
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
				<section id="contact" class="col-md-8">
					<form id="contactform" role="form">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input id="contact-name" class="form-control" type="name" placeholder="Enter name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">@</div>
								<input class="form-control" id="contact-email" type="email" placeholder="Enter email">
							</div>
						</div>
						<div class="form-group">
							<select class="form-control" id="contact-subject">
								<option>General</option>
								<option>Technical</option>
								<option>Demoes</option>
								<option>Sales</option>
							</select>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-ellipsis-h"></i></div>
								<textarea class="form-control" id="contact-message" type="message" placeholder="Enter message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<button type="button" id="contact-send" class="btn btn-danger btn-lg btn-block">Send</button>
						</div>
					</form>
				</section>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<section id="sidebar" class="col-md-4">
					<h3>
						Address
					</h3>
					<address>
						<?php 
							$post = get_post($page->ID); 
							$content = apply_filters('the_content', $post->post_content); 
							echo $content; 
						?>
					</address>
				</section>
			</section>
			
			<section id="map" class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6175625839574!2d-73.98566399999997!3d40.748439999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire+State+Building!5e0!3m2!1sen!2sus!4v1405873188583" width="600" height="450" frameborder="0" style="border:0"></iframe>
			</section>

			<style>
				#FSContact1{
					display: none;
				}
			</style>

			<script>
				$(document).ready(function(){

					$("#contact-name").change(function(){
						$("#fscf_name1").val($(this).val());
					});

					$("#contact-email").change(function(){
						$("#fscf_email1").val($(this).val());
					});

					$("#contact-message").change(function(){
						$("#fscf_field1_3").val($(this).val());
					});

					$("#contact-send").click(function(){
						$("#fscf_field1_2").val($("#contact-subject").val());
						$("#fscf_submit1").trigger('click');

						alert("Thanks! We'll get back to you shortly.");
					});
				});
			</script>

<?php get_footer(); ?>