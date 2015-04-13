<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

	<div id="<?php echo $gallery->anchor ?>" class="thumbnails owl-carousel large-12 columns">

	<!-- Thumbnails -->
	    <?php $i = 0; ?>
		<?php foreach ( $images as $image ) : ?>
		<div class="item">
			<a href="<?php echo nextgen_esc_url($image->imageURL) ?>"
	           title="<?php echo esc_attr($image->description) ?>"
	           <?php echo $image->thumbcode ?> >
				<?php if ( !$image->hidden ) { ?>
				<img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />
				<?php } ?>
			</a>
		</div>
    <?php if ( $image->hidden ) continue; ?>
    <?php if ($gallery->columns > 0): ?>
        <?php if ((($i + 1) % $gallery->columns) == 0 ): ?>
            <br style="clear: both" />
        <?php endif; ?>
    <?php endif; ?>
    <?php $i++; ?>

 	<?php endforeach; ?>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			jQuery(function($) {
		    var nextgen_fancybox_init = function() {
		    		var selector = nextgen_lightbox_filter_selector($, $(".ngg-fancybox"));
		    		
		        selector.fancybox({
		                'width'             : '70%',
		                'height'            : '70%',
		                'autoDimensions'    : false,
		                'transitionIn'      : 'elastic',
		                'transitionOut'     : 'elastic',
		                'centerOnScroll'    : true,
		                'overlayOpacity'    : 1,
		                'padding'           : 0,
		                'margin'            : 0,
		                'overlayColor'      : '#000',
		            onComplete: function() {
		                $('#fancybox-wrap').css('z-index', 10000);
		            }
		        });
		    };
		    $(this).bind('refreshed', nextgen_fancybox_init);
		    nextgen_fancybox_init();
		});

			function sliderGallery (){
			var slideThumbs = $("#<?php echo $gallery->anchor ?>");
			slideThumbs.owlCarousel({
				items: 5,
				nav: true,
				dots: false,
				loop: true,
				margin: 35,
				lazyLoad: true,
				lazyContent: true,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				freeDrag: false
			});
		}
		sliderGallery();
		})
	</script>
<?php endif; 
	wp_reset_query();
?>
