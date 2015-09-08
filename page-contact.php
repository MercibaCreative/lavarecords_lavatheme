<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>


<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>



<section class="post-header container-fluid"> <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6043.646794714543!2d-73.98694713998957!3d40.76590883358376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x89c258f7e8ed81c5%3A0x95557754cf1e8275!2s1755+Broadway+New+York%2C+NY+10019!3m2!1d40.7659008!2d-73.982323!5e0!3m2!1sen!2sca!4v1441599556646" width="100%" height="377" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>


<!-- ==========================CONTENT=========================== -->
<section id="content contact" class="container">
    
	<section id="posts">

		<div class="post">
            
            <div id="contactlogo">
            <div class="logo"></div>
            </div> 
			<div class="bodycopy">
				<h4 class="text-center"><?php echo nl2p($post->post_content); ?></h4>
			</div>
        </div>

	</section>

</section>

		
			<!-- ==========================CONTENT=========================== -->
			<section id="content" class="container">
				
                <section id="contact">
					
                    <form id="contactform" role="form">
                        
                        <div class="form-group">
							<div class="input-group">
								<input class="form-control" id="contact-email" type="email" placeholder="Email">
							</div>
						</div>
                        
                        <div class="form-group">
							<div class="input-group">
								<input class="form-control" id="contact-subject" type="subject" placeholder="Subject">
							</div>
						</div>
						
                        <div class="form-group">
							<div class="input-group">
								<input id="contact-name" class="form-control" type="name" placeholder="First Name">
							</div>
						</div>
                        
                        <div class="form-group form-columnwrap">
                            
                            <div class="col-md-6 gutterfirst">
								    <input id="contact-state" class="form-control" type="state" placeholder="State">
						      </div>
                        
							 <div class="col-md-6 gutter">
								<input id="contact-zip" class="form-control" type="zip" placeholder="Zip">
							 </div>
                            
                        </div>
    
                        
						<div class="form-group" >
							<div class="input-group">
								<textarea class="form-control" id="contact-message" type="message" placeholder="Enter message"></textarea>
							</div>
						</div>
                        
						<div class="form-group">
							<button type="button" id="contact-send" class="btn btn-danger btn-lg btn-block"> <h5>Send</h5></button>
						</div>
                        
					</form>
                    
				</section>
				
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