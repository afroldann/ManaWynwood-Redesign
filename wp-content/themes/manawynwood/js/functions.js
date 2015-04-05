/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );
	var _header = $('.header');

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
		
		if( windowOffset >= 124 ){
			_header.addClass('scrolled animated fadeInDown	');
		}else {
			_header.removeClass('scrolled animated fadeInDown	');
		}
		_window.on('scroll', function(){
			windowOffset = _window.scrollTop();
			if( windowOffset >= 150 ){
				_header.addClass('scrolled animated fadeInDown');
				$('#main').css('padding-top', 70)

			}else {
				_header.removeClass('scrolled animated fadeInDown');
				$('#main').css('padding-top', 0)
			}
		});
	}
	scrollMenu();

	$('html').niceScroll();

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
	/**
	 * Adds a top margin to the footer if the sidebar widget area is higher
	 * than the rest of the page, to help the footer always visually clear
	 * the sidebar.
	 */
	$( function() {
		if ( body.is( '.sidebar' ) ) {
			var sidebar   = $( '#secondary .widget-area' ),
			    secondary = ( 0 === sidebar.length ) ? -40 : sidebar.height(),
			    margin    = $( '#tertiary .widget-area' ).height() - $( '#content' ).height() - secondary;

			if ( margin > 0 && _window.innerWidth() > 999 ) {
				$( '#colophon' ).css( 'margin-top', margin + 'px' );
			}
		}
	} );

	/**
	 * Enables menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav ) {
			return;
		}

		button = nav.find( '.menu-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		button.on( 'click.twentythirteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );

		// Fix sub-menus for touch devices.
		if ( 'ontouchstart' in window ) {
			menu.find( '.menu-item-has-children > a' ).on( 'touchstart.twentythirteen', function( e ) {
				var el = $( this ).parent( 'li' );

				if ( ! el.hasClass( 'focus' ) ) {
					e.preventDefault();
					el.toggleClass( 'focus' );
					el.siblings( '.focus' ).removeClass( 'focus' );
				}
			} );
		}

		// Better focus for hidden submenu items for accessibility.
		menu.find( 'a' ).on( 'focus.twentythirteen blur.twentythirteen', function() {
			$( this ).parents( '.menu-item, .page_item' ).toggleClass( 'focus' );
		} );
	} )();

	/**
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentythirteen', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
				element.tabIndex = -1;
			}

			element.focus();
		}
	} );

	/**
	 * Arranges footer widgets vertically.
	 */
	if ( $.isFunction( $.fn.masonry ) ) {
		var columnWidth = body.is( '.sidebar' ) ? 228 : 245;

		$( '#secondary .widget-area' ).masonry( {
			itemSelector: '.widget',
			columnWidth: columnWidth,
			gutterWidth: 20,
			isRTL: body.is( '.rtl' )
		} );
	}
} )( jQuery );