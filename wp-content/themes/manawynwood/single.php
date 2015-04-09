<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="" role="main">
			<?php /*the loop*/ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="large-12 columns post-image">
					<?php the_post_thumbnail('detail'); ?>
				</div>
				<div class="large-6 columns">
					<h1><?php the_title(); ?></h1>
					<div>
						<p><?php echo get_the_content(); ?></p>
					</div>
				</div>
				<div class="large-6 columns date-single">
					<span class="event-date-only" id="sc_event_details_109">
						<?php echo get_post_meta($post->ID, 'sc_event_month', true); ?> . 
						<?php echo get_post_meta($post->ID, 'sc_event_day_of_month', true); ?> . 
						<?php echo get_post_meta($post->ID, 'sc_event_year', true); ?>
					</span>
					<?php manaShare(null); ?>
				</div>
			<?php endwhile; ?>
		</div>
		
		<div class="container-gallery section large-12 columns">
			<h2><?php the_title(); ?> <span>Gallery</span></h2>
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
		
		<?php $twitter = get_sidebar('twitter_RT') ?>

		<?php comments_template('/custom-comments.php'); ?>

		<section class="section press-home large-12 columns">
			<div class="title"><h4>Press</h4></div>
			<div class="press-list large-12 columns" id="press-items">
			<?php query_posts( 'post_type=sc_event&posts_per_page=4' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
		    	<div class="item large-3 columns">
		    		<div class="container-item">
				  		<div class="large-12 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('press-home'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-12 columns">
							<span><?php the_time( 'Y . m . d ' ); ?></span>
							<h2><?php the_title(); ?></h2>
							<a class="link" href="<?php echo get_permalink(); ?>">Read more</a>
						</div>
					</div>
		    	</div>
			<?php endwhile; endif; wp_reset_query(); ?> 
			</div>
	    	<a class="link-to-all" href="#">All Press</a>
		</section>
	</div>
<?php get_footer(); ?>