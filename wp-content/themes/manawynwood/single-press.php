<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div class="large-12 columns breadCrumb">
			<?php the_breadcrumb(); ?>
		</div>
		<div id="content" class="large-9 columns container-post" role="main">
			<?php /*the loop*/ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="large-12 columns post-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="large-12 columns">
					<h1><?php the_title(); ?></h1>
					<div>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>

		<div class="large-3 columns sidebar">
			<?php get_sidebar('main') ?>
			<div class="large-12 columns pagination">
				<div id="cooler-nav" class="navigation">
		            <?php $prevPost = get_previous_post(true);
						if($prevPost) {?>
						<div class="nav-box prev large-6 columns" style="float:left;">
			                <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(127,77) );}?>
			                <div class="large-6 columns" style="padding-right: 5px">
			                	<?php previous_post_link('%link',"$prevthumbnail", TRUE); ?>
			                </div>
			                <div class="large-6 columns">
			                	<?php previous_post_link('%link',"%title", TRUE); ?>
			                </div>
						</div>

		            <?php $nextPost = get_next_post(true);
						if($nextPost) { ?>
		            <div class="nav-box next large-6 columns" style="float:right;">
						<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(127,77) ); } ?>
						<div class="large-6 columns">
		                	<?php next_post_link('%link',"%title", TRUE); ?>
		                </div>
						<div class="large-6 columns" style="padding-left: 5px">
							<?php next_post_link('%link',"$nextthumbnail ", TRUE); ?>
		                </div>

	                </div>
	            </div>
	        </div>
		</div>
		<?php include PATHAGP . 'custom-comments.php'; ?>
		<?php include PATHAGP . 'press-tpl.php'; ?>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var content_heihgt = $('.container-post').height();
			$('.sidebar').css('height', content_heihgt)
		});
	</script>
<?php get_footer(); ?>