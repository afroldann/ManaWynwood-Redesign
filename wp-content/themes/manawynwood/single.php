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
					<?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>
				</div>
			<?php endwhile; ?>
		</div>

		<?php include PATHAGP . 'single-venue-tpl.php'; ?>
		<?php include PATHAGP . 'gallery-tpl.php'; ?>
		<?php include PATHAGP . 'sidebar-twitter_RT.php'; ?>
		<?php include PATHAGP . 'custom-comments.php'; ?>
		<?php include PATHAGP . 'press-tpl.php'; ?>

	</div>
<?php get_footer(); ?>