<div class="section venue large-12 columns">
	<?php  $posts = get_field('venues'); if( $posts ): ?>
	    <?php foreach( $posts as $post):?>
	        <?php setup_postdata($post); ?>
	            <div class="large-4 columns info">
		            <h4><?php the_title(); ?></h4>
    				<p><?php the_field('location_field') ?></p>
				</div>
				<?php $location = get_field('map'); if( !empty($location) ):?>
				<div class="acf-map large-8 columns">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
	    	<?php endforeach; ?>
	    <?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>

<style type="text/css">
	.acf-map {
		height: 400px;
	}
</style>