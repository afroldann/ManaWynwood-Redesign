<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /*the loop*/ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail() ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>