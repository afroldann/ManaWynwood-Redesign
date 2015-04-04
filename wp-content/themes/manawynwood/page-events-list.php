<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content events" role="main">
			<div class="latest-three large-12 columns">
				<?php $query = query_posts( 'post_type=sc_event&posts_per_page=1' ); if (have_posts() ) : while(have_posts()) : the_post(); 
					$category = get_the_category();
					$cat_name = ($category[0]->cat_name);
				?>
			    	<div class="item large-8 columns <?php echo $cat_name ?>">
				  		<div class="large-12 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-12 columns">
							<a class="link" href="<?php echo get_permalink(); ?>"></a>
							<h2><?php the_title(); ?></h2>
			        		<div class="date-event"><?php the_content(); ?></div>
			        		<p><?php echo word_count(get_the_excerpt(), '18') . '...'; ?></p>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?>

				<?php $query = query_posts( 'post_type=sc_event&posts_per_page=1&offset=1' ); if (have_posts() ) : while(have_posts()) : the_post(); 
					$category = get_the_category();
					$cat_name = ($category[0]->cat_name);
				?>
			    	<div class="item large-4 columns <?php echo $cat_name ?>">
				  		<div class="large-12 columns container-image">
				    		<?php the_post_thumbnail('rs-tmb'); ?>
				    	</div>
						<div class="detail large-12 columns">
							<a class="link" href="<?php echo get_permalink(); ?>"></a>
							<h2><?php the_title(); ?></h2>
			        		<div class="date-event"><?php the_content(); ?></div>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?>

				<?php $query = query_posts( 'post_type=sc_event&posts_per_page=1&offset=2' ); if (have_posts() ) : while(have_posts()) : the_post(); 
					$category = get_the_category();
					$cat_name = ($category[0]->cat_name);
				?>
			    	<div class="item large-4 columns <?php echo $cat_name ?>">
				  		<div class="large-12 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-12 columns">
							<a class="link" href="<?php echo get_permalink(); ?>"></a>
							<h2><?php the_title(); ?></h2>
			        		<div class="date-event"><?php the_content(); ?></div>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?> 
			</div>

			<div class="large-12 columns full-posts">
				<?php $query = query_posts( 'post_type=sc_event&posts_per_page=-1&offset=3' ); if (have_posts() ) : while(have_posts()) : the_post(); 
					$category = get_the_category();
					$cat_name = ($category[0]->cat_name);
				?>
		    	<div class="item large-3 columns <?php echo $cat_name ?>">
			  		<div class="content-item">
						<a class="link" href="<?php echo get_permalink(); ?>"></a>
				  		<div class="large-12 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-12 columns">
							<h2><?php the_title(); ?></h2>
			        		<div class="date-event"><?php the_content(); ?></div>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
						</div>
					</div>
		    	</div>
				<?php endwhile; endif; wp_reset_query(); ?> 
			</div>

		<?php get_sidebar('instagram') ?>			
		<?php get_sidebar('twitter') ?>
	</div>

<?php get_footer(); ?>