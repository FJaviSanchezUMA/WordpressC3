( function($) {
	
	$('.toggle-mobile-menu').mousedown(function(e) {
			e.preventDefault();  // don't grab focus
		}).focus(function(e) {
			e.preventDefault();
			e.stopPropagation();
			e.stopImmediatePropagation();
			$('.toggle-mobile-menu').click();
			$("#smobile-menu #primary-menu li a").first().focus();

		$( document ).on( 'keydown', function ( e ) {
			if ( e.keyCode === 27 ) { 
				$("#accessibility-close-mobile-menu").trigger("focusin");
			}

		});

	});


	$(document).ready(function(){

		$("#smobile-menu #primary-menu").append(
			'<li><a href="" id="accessibility-close-mobile-menu" style="padding:0;height:0;"></a></li>'
		);

		$("#accessibility-close-mobile-menu").focusin(function(e){
			$('.toggle-mobile-menu').click();
			$('#primary a').first().focus();
			$( document ).off("keydown");
		});

	});
	
	
})(jQuery);