<div class="container-gallery section large-12 columns">
	<h3><?php the_title(); ?> <span>Gallery</span></h3>
	<?php
	    foreach (get_field ('gallery_all_venues') as $nextgen_gallery_id) :
	        echo nggShowGallery( $nextgen_gallery_id );
	    endforeach;
	?>
</div>