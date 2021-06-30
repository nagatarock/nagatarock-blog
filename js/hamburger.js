//ハンバーガーメニュー用//
jQuery( function( $ ) {
	$( ".p-header_menu_btn" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		$( ".p-header_menu_menu" ).toggleClass( "is-open" );
		$( ".p-header_menu_btn_background" ).toggleClass( "is-open" );
		$( "header" ).toggleClass( "is-open" );
		$( ".c-hamburger_menu" ).toggleClass( "is-open" );
		$( ".c-hamburger_menu_menu" ).toggleClass( "is-open" );
	} );
	$(".c-hamburger_menu ul  li  a").on("click", function() {
		$(".c-hamburger_menu").removeClass("is-open");
		$(".c-hamburger_menu_menu").removeClass("is-open");
		$(".p-header_menu_btn").removeClass("is-open");
		$(".p-header_menu_menu").removeClass("is-open");
		$(".p-header_menu_btn_background").removeClass("is-open");
		$("header").removeClass("is-open");
	});
} );