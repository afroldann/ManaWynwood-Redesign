<section class="section twitter large-12 columns">
	<input id="twitterIDInput" type="hidden" value="<?php echo of_get_option('twitterid'); ?>">
	<div class="title-twitter large-2 columns">twitter</div>
	<div id="twitter-feed" class="twitter-contents large-10 columns"></div>
</section>

<script type="text/javascript">
jQuery(document).ready(function($){
	function Tweets(){
		var _twitterID = $('#twitterIDInput').val();
		var twtterFeed = {
			"id": _twitterID,
			"domId": 'twitter-feed',
			"maxTweets": 10,
			"enableLinks": true, 
			"showUser": true,
			"showTime": false,
			"lang": 'en',
			"showInteraction": false
		};
		twitterFetcher.fetch(twtterFeed);

		function loadSlider(){
			setTimeout(function(){
				var _elTweets = $('.twitter-contents ul'); 
				$('.twitter-contents ul').owlCarousel({
					items: 1,
					lazyLoad: true,
					nav: true,
					autoHeight: true,
    				animateIn: 'fadeInLeft',
					animateOut: 'fadeOutRight',
					loop: true,
					autoplay: true,
					autoplayTimeout: 5000,
					autoplayHoverPause: true
				});	
			},1000);
		}
		loadSlider();
	}
	Tweets();
});
</script>