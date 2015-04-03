<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="latest-three large-12 columns">
				<?php $query = query_posts( 'post_type=sc_event&posts_per_page=1' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
			    	<div class="item large-9 columns">
				  		<div class="large-7 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-5 columns">
							<a class="link" href="#"></a>
							<h2><?php the_title(); ?></h2>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
			        		<div class="date-event"><?php the_content(); ?></div>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?>

				<?php $query = query_posts( 'post_type=sc_event&posts_per_page=1&offset=1' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
			    	<div class="item large-3 columns">
				  		<div class="large-7 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-5 columns">
							<a class="link" href="#"></a>
							<h2><?php the_title(); ?></h2>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
			        		<div class="date-event"><?php the_content(); ?></div>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?> 
			</div>
		</div>
	</div>

<?php get_footer(); ?>