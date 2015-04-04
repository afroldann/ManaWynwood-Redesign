<section class="section instagram-feed large-12 columns">
	<input id="insUser" type="hidden" value="<?php echo of_get_option('instauser'); ?>">
	<input id="insToken" type="hidden" value="<?php echo of_get_option('insttoken'); ?>">
	<div id="instafeed" class="instagram"></div>
</section>

<script type="text/javascript">
jQuery(document).ready(function($){

	function instagramFeed(){
		var token = $('#insToken').val(),
			user = $('#insUser').val();
		$("#instafeed").instastream({
			instaToken: token,
			instaUser: user,
			instaResults: 9,
			instaMenu: 'not'
		});
	}
	instagramFeed();
});
</script>