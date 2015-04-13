<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="news-group">
							<div class="item-list large-12 columns">
								<div class="large-12 columns breadCrumb">
									<?php the_breadcrumb(); ?>
								</div>
								<?php
									$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
									$query_args = array(
										'post_type' => 'press',
										'posts_per_page' => 4,
										'paged' => $paged
									);
									$the_query = new WP_Query( $query_args );
								?>
								<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								 <div class="item large-12 small-12 columns">
									<a class="link" href="<?php echo get_permalink(); ?>"></a>
									<div class="image-container large-6 columns">
										<?php the_post_thumbnail('press-list')  ?>
									</div>
									<div class="large-6 columns">
										<div class="detail">
											<h4 class="logo-name"><?php echo the_title(); ?></h4>
											<p><?php echo get_the_excerpt() ?></p>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
								<?php
							      	if (function_exists(custom_pagination)) {
							        	custom_pagination($the_query->max_num_pages,"",$paged);
							      	}
							    ?>
							</div>
						</div>

				</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>