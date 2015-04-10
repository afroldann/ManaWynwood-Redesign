<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<!--<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentythirteen' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
					else :
						_e( 'Archives', 'twentythirteen' );
					endif;
				?></h1>-->	
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<article class="section">
					<?php the_content() ?>
					<?php the_post_thumbnail() ?>
				</article>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->

		<section class="section instagram-feed large-12 columns">
			<input id="insUser" type="hidden" value="<?php echo of_get_option('instauser'); ?>">
			<input id="insToken" type="hidden" value="<?php echo of_get_option('insttoken'); ?>">
			<div id="instafeed" class="instagram"></div>
		</section>			

		<section class="section twitter large-12 columns">
			<input id="twitterIDInput" type="hidden" value="<?php echo of_get_option('twitterid'); ?>">
			<div class="title-twitter large-2 columns">twitter</div>
			<div id="twitter-feed" class="twitter-contents large-10 columns"></div>
		</section>
	</div><!-- #primary -->

<?php get_footer(); ?>