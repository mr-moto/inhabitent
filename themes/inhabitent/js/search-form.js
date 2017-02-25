(function($){

    $('.search-button').on('click', function(){
        event.preventDefault();
        $('.search-field').animate({width: 'toggle'});
        $('.search-field').focus();
    });

    $('.search-field').focusout(function() {
        $('.search-field').animate({width: 'toggle'});
    });

})(jQuery);