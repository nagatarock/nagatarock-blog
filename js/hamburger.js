//ハンバーガーメニュー用//
jQuery( function( $ ) {
	$( ".p-header_menu_btn" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		$( ".p-header_menu_menu" ).toggleClass( "is-open" );
		$( ".p-header_menu_btn_background" ).toggleClass( "is-open" );
		$( "header" ).toggleClass( "is-open" );
		$( ".c-main_container_menu" ).toggleClass( "is-open" );
		$( ".c-main_container_menu_menu" ).toggleClass( "is-open" );
	} );
} );