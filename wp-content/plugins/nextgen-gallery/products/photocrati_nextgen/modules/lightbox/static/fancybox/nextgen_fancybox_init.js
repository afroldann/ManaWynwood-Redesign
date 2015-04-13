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
