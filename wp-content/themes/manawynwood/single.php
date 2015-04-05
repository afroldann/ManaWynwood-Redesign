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
				</div>
			<?php endwhile; ?>
		</div>
		<?php get_sidebar('twitter_RT') ?>
	</div>
<?php get_footer(); ?>