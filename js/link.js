//ページ内リンクのスクロール設定//
// ヌルヌルスクロール
jQuery(function(){
	// #で始まるアンカーをクリックした場合に以下が動作
	jQuery('a[href^="#"]').click(function(){
		var speed = 800;	// スクロール速度　msec
		var href = jQuery(this).attr("href");	// アンカーの値取得
    	var target = jQuery(href == "#" || href == "" ? 'html' : href);	// 移動先を取得
    	var position = target.offset().top - 74;	//　移動先を数値で取得（固定ヘッダーがかぶるので位置調整）
    	jQuery('body,html').animate({scrollTop:position}, speed, 'swing');	// ヌルヌルスクロールする
    	return false;
   });
});
$(function () {
    // 別ページの場合は以下
  var urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
      // ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
      var headerHight = 76;
      var target = $(urlHash);
      var position = target.offset().top - headerHight;
      $('body,html').stop().animate({scrollTop:position}, 800);
  }, 100);
}
});