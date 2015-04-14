<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="news-group">
							<div class="item-list large-12 columns">
								<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?>
							</div>
						</div>

				</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>