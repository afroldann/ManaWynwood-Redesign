<div class="container-gallery section large-12 columns">
	<h2><?php the_title(); ?> <span>Gallery</span></h2>
	<?php
	    foreach (get_field ('ng_gallery') as $nextgen_gallery_id) :
	        echo nggShowGallery( $nextgen_gallery_id );
	    endforeach;
	?>
</div>