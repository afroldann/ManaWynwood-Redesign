<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		    
		    <section class="carousel-home large-12 columns">
			    <div class="owl-carousel slider-home large-12 columns" id="carousel-home">
				<?php query_posts( 'post_type=carousel-home' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
				    <div class="item">
				    	<div class="large-12 columns container-image"> <?php the_post_thumbnail(); ?> </div>
						<div class="detail large-4 columns">
							<a class="link" href="#"></a>
							<h2><?php the_title(); ?></h2>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?> 
				</div>
		    </section>
			
			<section class="section slider-events large-12 columns">
				<div class="title"><h4>EVENTS</h4></div>
				<div class="owl-carousel slider-events large-12 columns" id="carousel-events">
				<?php query_posts( 'post_type=sc_event' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
			    	<div class="item">
				  		<div class="large-7 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
						<div class="detail large-5 columns">
							<a class="link" href="#"></a>
							<h2><?php the_title(); ?></h2>
			        		<p><?php echo word_count(get_the_excerpt(), '15') . '...'; ?></p>
			        		<span><a href="#">22.10.15</a></span>
						</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?> 
				</div>
		    	<a class="link-to-all" href="#">All Events</a>
			</section>

			<section class="section slider-venues large-12 columns">
				<div class="title"><h4>VENUES</h4></div>
				<div class="owl-carousel slider-venues large-12 columns" id="carousel-venues">
				<?php query_posts( 'post_type=venue' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
			    	<div class="item">
						<div class="detail large-4 columns">
							<a class="link" href="#"></a>
							<h2><?php the_title(); ?></h2>
			        		<p><?php the_content(); ?></p>
						</div>
				  		<div class="large-8 columns container-image">
				    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rs-tmb-venues'); } else {echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/broke-image.jpg" />'; }?>
				    	</div>
			    	</div>
				<?php endwhile; endif; wp_reset_query(); ?> 
				</div>
				<a class="link-to-all" href="#">All Venues</a>
			</section>

			<section class="section press-home large-12 columns">
				<div class="title"><h4>Press</h4></div>
				<div class="press-list large-12 columns" id="press-items">
				<?php query_posts( 'post_type=press&posts_per_page=4' ); if (have_posts() ) : while(have_posts()) : the_post(); ?>
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

			<section class="section instagram-feed large-12 columns">
				<div id="instafeed" class="instagram"></div>
			</section>			

			<section class="section twitter large-12 columns">
				<div class="title-twitter large-2 columns">twitter</div>
				<div id="twitter-feed" class="twitter-contents large-10 columns"></div>
			</section>
		</div>
	</div>
<?php get_footer(); ?>