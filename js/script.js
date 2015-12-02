( function( $ ) {
	$(function() {
        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });
	});
} )( jQuery );