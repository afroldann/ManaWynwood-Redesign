<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="venue large-12 columns un-conventional-center">
				<?php
					$query_args = array(
						'post_type' => 'venues',
						'posts_per_page' => 1
					);
					$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="large-12 columns title">
						<span class="parent">MANA</span><span class="wynwood">WYNWOOD</span>
						<h2><span class="red">Un</span><span>convention</span><span class="red">center</span></h2>
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
						<h3><?php the_title(); ?> <span>Floor Plan</span></h3>
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

			<section class="large-12 columns venue rc-cola-factory">
				<?php
					$query_args = array(
						'post_type' => 'venues',
						'posts_per_page' => 1,
						'offset' => 1
					);
					$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="large-12 columns title">
						<span class="parent">MANA</span><span class="wynwood">WYNWOOD</span>
						<h2><span>Rc</span><span class="red"> Cola</span><span> factory</span></h2>
					</div>
					<div class="large-6 columns content-decs">
						<?php the_content(); ?>
					</div>
					<div class="large-6 columns">
						<h3><?php the_title(); ?> <span>Gallery</span></h3>
						<?php $image = get_field('image_gallery_cover');
							if( !empty($image) ): 
								$url = $image['url'];
								$size = 'gallery-image-two';
								$thumb = $image['sizes'][ $size ];
								$width = $image['sizes'][ $size . '-width' ];
								$height = $image['sizes'][ $size . '-height' ];

								if( $caption ): ?>
									<div class="wp-caption">
							<?php endif; ?>

							<a href="<?php echo $url; ?>" class="rel-gallery" title="<?php echo $title; ?>">
								<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
							</a>
						<?php endif; ?>
					</div>

					<div class="container-fake" style="display: none">
						<?php include PATHAGP . 'gallery-venues-tpl.php'; ?>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								var _rel = $('.rc-cola-factory .ngg-fancybox').attr('rel');
								$('.rel-gallery').attr('rel', _rel );
							});
						</script>
					</div>

					<div class="large-12 columns main-container-plan">
						<h3><?php the_title(); ?> <span>Floor Plan</span></h3>
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

			<section class="large-12 columns venue art-walk">
				<?php
					$query_args = array(
						'post_type' => 'venues',
						'posts_per_page' => 1,
						'offset' => 2
					);
					$the_query = new WP_Query( $query_args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="large-12 columns title">
						<span class="parent">MANA</span><span class="wynwood">WYNWOOD</span>
						<h2><span>Art</span><span class="red"> walk</span></h2>
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

					<div class="large-12 columns">
						<div class="large-6 columns">
							<h3><?php the_title(); ?> <span>Gallery</span></h3>
							<?php $image = get_field('image_gallery_cover');
								if( !empty($image) ): 
									$url = $image['url'];
									$size = 'gallery-image-two';
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ];

									if( $caption ): ?>
										<div class="wp-caption">
								<?php endif; ?>

								<a href="<?php echo $url; ?>" class="rel-gallery-walk" title="<?php echo $title; ?>">
									<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
								</a>
							<?php endif; ?>
							<div class="container-fake" style="display: none">
								<?php include PATHAGP . 'gallery-venues-tpl.php'; ?>
								<script type="text/javascript">
									jQuery(document).ready(function($){
										var _rel_walk = $('.art-walk .ngg-fancybox').attr('rel');
										$('.rel-gallery-walk').attr('rel', _rel_walk );
									});
								</script>
							</div>
						</div>
						<div class="large-6 columns last-events-art-walk">
							<h3><?php the_title(); ?> <span>Nights</span></h3>
							<?php query_posts( 'post_type=sc_event&posts_per_page=2' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
						    	<div class="item large-6 columns">
									<a class="link" href="<?php echo get_permalink(); ?>"></a>
							  		<div class="container-image">
							    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
							    	</div>
									<div class="detail large-12 columns">
					        			<span class="event-date-only" id="sc_event_details_109">
											<?php echo get_post_meta($post->ID, 'sc_event_month', true); ?> . <?php echo get_post_meta($post->ID, 'sc_event_day_of_month', true); ?> . <?php echo get_post_meta($post->ID, 'sc_event_year', true); ?>
										</span>
										<h4><?php the_title(); ?></h4>
										<p><?php echo get_the_excerpt(); ?></p>							
									</div>
						    	</div>
							<?php endwhile; endif; wp_reset_query(); ?> 
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