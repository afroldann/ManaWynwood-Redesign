jQuery(document).ready(function($){
	var body    = $( 'body' ),
	    _window = $( window );
	var _header = $('.header');

	whereami = location.pathname.substr(0,location.pathname.length - 1).substr(1).split('/');
	if(whereami.length >= 2 || (whereami.length === 1 && (whereami[0] == 'fotoshow' || whereami[0] == 'sociales'))){
		socialShares();
	}
	if(whereami.length >= 2 || (whereami.length === 1 && (whereami[0] == 'fotoshow' || whereami[0] == 'sociales'))){
		window.setTimeout(function(){
			jQuery('.buttonsPost').each(function(){
				readsocialshares(jQuery(this));
			});
		},1000);
	}
	
	function placeHolder(){
		$('#commentform p input, #commentform p textarea').each( function(){
			var name = $(this).prev('label').text();
			$(this).prev('label').hide();
			$(this).attr('placeholder', name);
		});
	}
	placeHolder();

	function socialShares(){
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=152685231434019";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	}
	$('.buttons').on('click', function(){
		var thetitle = $(this).attr('title');
		var link = $(this).data('link');
		popUp = window.open(link, thetitle,'status=0,toolbar=0,location=no,titlebar=0,resizable=disallow,menubar=0,height=320,width=455');
		popUp.focus();
		return false;
	});

	function readsocialshares($element){
		var url = $element.data('url');
		var $counter = $element.find('.dataNumber');
		if(!$element.hasClass('gplusShare')){
			$.ajaxSetup({
			  dataType: "jsonp",
			  global: true
			});
			if($element.hasClass('fbShare')){
				jQuery.ajax({
					url: 'https://graph.facebook.com/fql?q=SELECT%20share_count%20FROM%20link_stat%20WHERE%20url%20=%20%22'+url+'%22',
					dataType: 'jsonp'
				}).done(function(data) {
					$counter.html(data.data[0]['share_count']);
				});
			} else if($element.hasClass('fbLike')){
				jQuery.ajax({
					url: 'https://graph.facebook.com/fql?q=SELECT%20like_count%20FROM%20link_stat%20WHERE%20url%20=%20%22'+url+'%22',
					dataType: 'jsonp'
				}).done(function(data) {
					$counter.html(data.data[0]['like_count']);
				});
			} else if($element.hasClass('tw')){
				jQuery.ajax({
					url: 'http://cdn.api.twitter.com/1/urls/count.json?url='+url,
					dataType: 'jsonp'
				}).done(function(data) {
					$counter.html(data.count);
				});
			} else if($element.hasClass('pinterest')){
				jQuery.ajax({
					url: 'http://api.pinterest.com/v1/urls/count.json?url='+url+'&format=json',
					dataType: 'jsonp'
				}).done(function(data) {
					$counter.html(data.count);
				});
			}
		}
	}

	whereami = location.pathname.substr(0,location.pathname.length - 1).substr(1).split('/');
	if(whereami.length >= 2 || (whereami.length === 1 && (whereami[0] == 'fotoshow' || whereami[0] == 'sociales'))){
		window.setTimeout(function(){
			jQuery('.buttonsPost').each(function(){
				readsocialshares(jQuery(this));
			});
		},1000);
	}

	$(function(){
		var socialToggle = $('a[title="share"]');
		socialToggle.on('click', function(){
			$(this).toggleClass('clicked');
			_header.toggleClass('open');
			return false;
		});
	});
	

	function filter() {
		$('#filter a').on('click', function(){
			$(this).css('outline','none');
			$('ul#filter .current').removeClass('current');
			$(this).parent().addClass('current');

			var filterVal = $(this).text().toLowerCase().replace(' ','-');
			
			if(filterVal == 'all-events') {
				$('.full-posts .item').addClass('fadeIn').fadeIn();
				$('.full-posts .item').removeClass('fadeOut');
				} else {
					$('.full-posts .item').each(function() {
					if(!$(this).hasClass(filterVal)) {
						$(this).fadeOut('slow').removeClass('fadeIn');
						$(this).addClass('fadeOut');
					} else {
						$(this).fadeIn().addClass('fadeIn');
						$(this).removeClass('fadeOut');
					}
				});
			}
			return false;
		});
	}

	filter();

	function animateElemScroll() {
  		_window.on('scroll', function(){
	  		$('.section').each( function(i){    
		        var bottom_of_object = $(this).position().top + $(this).outerHeight();
		        var bottom_of_window = $(window).scrollTop() + $(window).height();
		        bottom_of_window = bottom_of_window + 400;  
		      
		        if( bottom_of_window > bottom_of_object ){
		            $(this).addClass('animated fadeIn');
		        }
	    	}); 
  		})
  	}
  	animateElemScroll();

	function scrollMenu(){
		windowOffset = _window.scrollTop();
		if( windowOffset >= 140 ){
			_header.addClass('scrolled animated fadeInDown	');
		}else {
			_header.removeClass('scrolled animated fadeInDown	');
		}
		_window.on('scroll', function(){
			windowOffset = _window.scrollTop();
			if( windowOffset >= 150 ){
				$('#main').css('margin-top', '140px');
				_header.addClass('scrolled animated fadeInDown');

			}else {
				$('#main').css('margin-top', '0');
				_header.removeClass('scrolled animated fadeInDown');
			}
		});
	}
	scrollMenu();

	$('.content-decs').on('click', function(){
		$(this).toggleClass('animated open');
	});

	$('#carousel-venues').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		loop: true,
		lazyLoad: true,
		nav: false,
		dotsEach: true,
		lazyContent: true,
		mouseDrag: false,
		loop: true,
		autoplay: false,
	    autoplayTimeout: 6000,
	    autoplayHoverPause: true
	});

	$('#carousel-events').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		loop: true,
		lazyLoad: true,
		nav: false,
		dotsEach: true,
		lazyContent: true,
		mouseDrag: false,
		loop: true		
	});	


	$('#carousel-home').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		loop: true,
		margin: 0,
		smartSpeed: 450,
		nav: true,
		dots: false,
		lazyContent: true,
		lazyLoad: true,
		mouseDrag: false
	});
	
	function appendHeart(){
		$('.social-menu .dot-irecommendthis').prependTo('#menu-social-menu');
	}
	appendHeart();

	function openMap(){
		$('a[title="map"]').on('click', function(){
			$(this).toggleClass('clicked');
			//createMap();
			$('#map').css('height', 300);
			return false;
		});
		
		$('.clicked').on('click', function(){
			$('#map').remove();
		});

		// function createMap(){
		// 	L.mapbox.accessToken = 'pk.eyJ1IjoiZGFuaWVsb3NvcmlvbWVyY2hhbiIsImEiOiJUOUY2S240In0.f9GMJlBWYxGNiBc0Y3itDg';
		// 	var map = L.mapbox.map('map', 'examples.map-i86nkdio')
		// 	    .setView([40, -74.50], 9);
		// }
	}
	openMap();
	

});
