jQuery( function( $ ) {
	$( ".p-header_menu_btn" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		$( ".p-header_menu_menu" ).toggleClass( "is-open" );
		$( ".menu-bg" ).toggleClass( "is-open" );
		$( "body" ).toggleClass( "is-open" );
	} );
} );