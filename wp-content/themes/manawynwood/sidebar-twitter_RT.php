<section class="twitter large-12 columns">
	<input id="twitterIDSingle" type="hidden" value="<?php the_field('twitter'); ?>">
	<h4>What the people say...</h4>
	<div id="twitter-feed" class="twitter-contents large-12 columns"></div>
</section>

<script type="text/javascript">
jQuery(document).ready(function($){
	function Tweets(){
		var _twitterID = $('#twitterIDSingle').val();
		var twtterFeed = {
			"id": _twitterID,
			"domId": 'twitter-feed',
			"maxTweets": 15,
			"enableLinks": true, 
			"showUser": true,
			"showTime": true,
			"lang": 'en',
			"showInteraction": true
		};
		twitterFetcher.fetch(twtterFeed);
	}
	Tweets();

});
</script>