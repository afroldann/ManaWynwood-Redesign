<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="venue un-conventional-center">
				<?php
					$query_args = array(
						'post_type' => 'venues',
						'posts_per_page' => 1
					);
					$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="large-12 columns">
						<h2><?php the_title() ?></h2>
					</div>
					
					<div class="large-6 columns">
						<iframe src="<?php the_field('video'); ?>" 
							width="100%" 
							height="350" 
							frameborder="0" 
							webkitallowfullscreen mozallowfullscreen allowfullscreen>
						</iframe>
					</div>
					
					<div class="large-6 columns content-decs">
						<?php the_content(); ?>
					</div>
					
					<?php include PATHAGP . 'gallery-venues-tpl.php'; ?>
					
					<div class="large-12 columns">
						<div class="large-12 columns container-plan">
							<?php the_post_thumbnail(); ?>
						</div>
					
						<div class="large-3 columns plan-video right">
							<a href="<?php the_field('video_related') ?>" class="iframe video-link">
								video
							</a>
						</div>

					</div>
				</section>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
		</div>

		<section class="venue rc-cola-factory">
				<?php
					$query_args = array(
						'post_type' => 'venues',
						'posts_per_page' => 1,
						'offset' => 1
					);
					$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="large-12 columns">
						<h2><?php the_title() ?></h2>
					</div>
					<div class="large-6 columns content-decs">
						<?php the_content(); ?>
					</div>
					<div class="large-6 columns">
						<iframe src="<?php the_field('video'); ?>" 
							width="100%" 
							height="350" 
							frameborder="0" 
							webkitallowfullscreen mozallowfullscreen allowfullscreen>
						</iframe>
					</div>
					
					<?php include PATHAGP . 'gallery-venues-tpl.php'; ?>
					
					<div class="large-12 columns">
						<div class="large-12 columns container-plan">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="large-3 columns plan-video right">
							<a href="<?php the_field('video_related') ?>" class="iframe video-link">
								video
							</a>
						</div>

					</div>
				</section>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
		</div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('.container-plan').zoom({ 
				on: 'click',
				magnify: 1.5 
			});	

			$(".iframe").fancybox({
				'width' 			: '70%',
				'height' 			: '70%',
				'autoDimensions' 	: false,
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'type'				: 'iframe',
				'centerOnScroll'	: true,
				'overlayOpacity'	: 1,
				'padding'			: 0,
				'margin'			: 0,
				'overlayColor'      : '#000'
			});	
		});
	</script>
<?php get_footer(); ?>