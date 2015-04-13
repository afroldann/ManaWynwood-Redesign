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