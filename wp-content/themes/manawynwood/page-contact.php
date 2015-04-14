<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<article id="post-<?php the_ID(); ?>" class="post-contact" <?php post_class(); ?>>
						<div class="news-group">
							<div class="contact-form large-6 columns">
								<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
							</div>
							<div class="contact-dates large-6 columns small-6">
								<h5>GET IN TOUCH</h5>
								<p>info@manamynwood.com</p>
								<p>305-573-0371</p>
								<span>
									<p>318 NW 23RD ST</p>
									<p>MIAMI, FL 33127</p>
								</span>
							</div>
						</div>
				</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>