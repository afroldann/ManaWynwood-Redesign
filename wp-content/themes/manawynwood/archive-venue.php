<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<section class="venue section un-conventional-center">
				<?php 
					$page_id 					= 139;
					$meta_value_image 			= get_post_meta($page_id, 'wpcf-image-plane', array('output'=>'') );
					$meta_value_video 			= get_post_meta($page_id, 'wpcf-media-video', array('output'=>'') );
					$meta_second_video 			= get_post_meta($page_id, 'wpcf-second-video', array('output'=>'') );
					$post_page 					= get_page($page_id);
				?>

				<div class="large-12 columns">
					<h2><?php echo $post_page->post_title  ?></h2>
				</div>
				
				<div class="large-6 columns">
					<iframe src="<?php echo $meta_value_video ?>" 
						width="100%" 
						height="350" 
						frameborder="0" 
						webkitallowfullscreen mozallowfullscreen allowfullscreen>
					</iframe>
				</div>
				
				<div class="large-6 columns content-decs">
					<?php echo apply_filters('the_content', $post_page->post_content); ?>
				</div>
				
				<div class="large-12 columns">
					<div class="large-12 columns container-plan">
						<?php echo get_the_post_thumbnail( $page_id ); ?>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function($){
							$('.container-plan').zoom({ 
								on: 'click',
								magnify: 1.5 
							});	
						});
					</script>

					<div class="large-3 columns plan-video">
						<iframe src="<?php echo $meta_second_video ?>" 
							width="100%" 
							height="350" 
							frameborder="0" 
							webkitallowfullscreen mozallowfullscreen allowfullscreen>
						</iframe>
					</div>

				</div>

				<div class="container-gallery section large-12 columns">
					<h2><?php echo $post_page->post_title; ?> <span>Gallery</span></h2>
					<div id="slider" class="slides owl-carousel large-12 columns">
						<div class="item">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div id="thumbnails" class="thumbnails owl-carousel large-12 columns">
						<div class="item">
							<?php the_post_thumbnail('gallery-thumb'); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail('gallery-thumb'); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail('gallery-thumb'); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail('gallery-thumb'); ?>
						</div>
						<div class="item">
							<?php the_post_thumbnail('gallery-thumb'); ?>
						</div>
					</div>
				</div>
			</section>

		</div><!-- #content -->

		
	</div><!-- #primary -->

<?php get_footer(); ?>