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

//トップ写真をランダム表示//
$(function(){
var array =[
		"/img/top1.JPG",
		"/img/top2.JPG",
		"/img/top3.jpeg"
];
var l = array.length;
var r = Math.floor(Math.random()*l);
var imgurl = array[r];
$("img#random").attr({"src":imgurl});
});