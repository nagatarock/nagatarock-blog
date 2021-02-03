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


// animsition

jQuery(document).ready(function() {
	$(".animsition").animsition({
	  inClass: 'fade-in',
	  outClass: 'fade-out',
	  inDuration: 1500,
	  outDuration: 800,
	  linkElement: '.animsition-link',
	  // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
	  loading: true,
	  loadingParentElement: 'body', //animsition wrapper element
	  loadingClass: 'animsition-loading',
	  loadingInner: '', // e.g '<img src="loading.svg" />'
	  timeout: false,
	  timeoutCountdown: 5000,
	  onLoadEvent: true,
	  browser: [ 'animation-duration', '-webkit-animation-duration'],
	  // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
	  // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
	  overlay : false,
	  overlayClass : 'animsition-overlay-slide',
	  overlayParentElement : 'body',
	  transition: function(url){ window.location.href = url; }
	});
  });