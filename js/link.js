//ページ内リンクのスクロール設定//
// ヌルヌルスクロール
jQuery(function () {
  // #で始まるアンカーをクリックした場合に以下が動作
  jQuery('a[href^="#"]').click(function () {
    var speed = 800;	// スクロール速度　msec
    var href = jQuery(this).attr("href");	// アンカーの値取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);	// 移動先を取得
    var position = target.offset().top - 74;	//　移動先を数値で取得（固定ヘッダーがかぶるので位置調整）
    jQuery('body,html').animate({ scrollTop: position }, speed, 'swing');	// ヌルヌルスクロールする
    return false;
  });
});
$(function () {
  // 別ページの場合は以下
  var urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      // ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
      var headerHight = 60;
      var target = $(urlHash);
      var position = target.offset().top - headerHight;
      $('body,html').stop().animate({ scrollTop: position }, 800);
    }, 100);
  }
});

//スライドショーの設定

$(function () {

  $('.l-main').each(function () {

    var
      $container = $(this),
      $slideGroup = $container.find('.p-main_visual'),
      $slides = $slideGroup.find('.c-top img'),
      $nav = $container.find('.p-main_nav'),
      $indicator = $container.find('.p-main_indicator'),


      slideCount = $slides.length, //要素の数を取得
      indicatorHTML = '',
      currentIndex = 0,
      duration = 1000, //アニメーションの長さ
      interval = 4000, //アニメーションの間隔
      timer;

    $slides.each(function (i) { //iはカウンターの役割。1回目の処理では0，2回めの処理では1が入る。
      $(this).css({ left: 100 * i + '%' }); //この記述で各スライド画像の位置を横に並ぶ。1番目のスライドはleft:0%、2番めのスライドはleft:100%という具合。
      indicatorHTML += '<a href="#">' + (i + 1) + '</a>'; //indicatorにaタグと数字を1から順に入れていく。
    });

    $indicator.html(indicatorHTML); //indicatorHTMLの中身をhtmlに挿入する

    //関数の定義
    function goToSlide(index) {
      $slideGroup.animate({ left: - 100 * index + '%' }, //表示された画像に合わせて.slideshow-slidesの位置を調整している。0番目の画像の時はleft:0%; はみ出た画像はcssでoverflow:hidden;で非表示にしてある。
        duration);
      currentIndex = index;
      updateNav();
    }

    //スライドの状態に応じてナビゲーションとインジケーターを更新する関数

    function updateNav() {
      var
        $navPrev = $nav.find('.prev'),
        $navNext = $nav.find('.next');
      if (currentIndex === 0) { //1番目の画像
        $navPrev.addClass('disabled'); //1番目のスライド画像の時に、Prevを表示しない。クラス名disabledにはdisplay:none;が指定してあるので、表示されない。
      } else {
        $navPrev.removeClass('disabled');//1番目のスライド以外時は、Prevが表示されるように、クラス名disabledを削除する。
      }
      if (currentIndex === slideCount - 1) { //最後のスライド画像の指定。slideCountには要素の数を格納してあるので、-1することで最後の要素になる(要素は0から始まるので)。
        $navNext.addClass('disabled'); //最後のスライド画像の時に、Nextを表示しない。クラス名disabledにはdisplay:none;が指定してあるので、表示されない。
      } else {
        $navNext.removeClass('disabled');//最後のスライド以外時は、Next示されるように、クラス名disabledを削除する。
      }
      $indicator.find('a').removeClass('active') //処理が終わったら、一旦すべての要素からクラス名activeを削除する。activeにはドットの色が反転する指定がしてある。
        .eq(currentIndex).addClass('active'); //当該スライドのa要素にのみactiveをつけてドット色を反転させる。  
    }

    //タイマーを開始する関数

    function startTimer() {
      timer = setInterval(function () {
        var nextIndex = (currentIndex + 1) % slideCount; //現在のスライドインデックスに応じて次に表示するスライドを決定。もし最後なら最初のスライドへ。
        goToSlide(nextIndex);
      }, interval);
    }

    //タイマーを停止する関数

    function stopTimer() {
      clearInterval(timer);
    }
    //ナビゲーションのリンクがクリックされたら該当するスライドを表示
    $nav.on('mousedown', 'a', function (event) {
      event.preventDefault();
      if ($(this).hasClass('prev')) {
        goToSlide(currentIndex - 1);
      } else {
        goToSlide(currentIndex + 1);
      }
    });

    // インジケーターのリンクがクリックされたら該当するスライドを表示

    $indicator.on('click', 'a', function (event) {
      event.preventDefault();
      if (!$(this).hasClass('active')) {
        goToSlide($(this).index());
      }
    });

    //マウスが乗ったらタイマーを停止、はずれたら開始
    $container.on({
      mouseenter: stopTimer,
      mouseleave: startTimer
    });

    //スライドショーの開始

    //最初のスライドを表示
    goToSlide(currentIndex);

    //タイマーをセット
    startTimer();

  });
});