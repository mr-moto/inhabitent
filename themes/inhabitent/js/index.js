
(function($){

// search toggle
    $('.search-button').on('click', function(){
        event.preventDefault();
        $('.search-field').animate({width: 'toggle'});
        $('.search-field').focus();
    });

    $('.search-field').focusout(function() {
        $('.search-field').animate({width: 'toggle'});
    });


// scroll toggle

        var vheight = $(window).height();
        var $body = $('body');
        if ($body.hasClass('home') || $body.hasClass('page-template-about') || $body.hasClass('single-adventures')){
            $('#masthead').addClass('site-header-reverse');
            $(window).scroll(function() {
                if ($(document).scrollTop() > vheight) {
                    $('#masthead').removeClass('site-header-reverse').addClass('site-header');
                } else {
                    $('#masthead').removeClass('site-header').addClass('site-header-reverse');
                } 
        })
        
    }

})(jQuery);