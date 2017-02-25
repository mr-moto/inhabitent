(function($){


$('.search-button').on('click', function(){
	event.preventDefault();
	$('.search-field').animate({width: 'toggle'});
    $('.search-field').focus();

})

$('.site-content').click(function() {
    $('.search-field').animate({width: 'toggle'});
    });


})(jQuery);