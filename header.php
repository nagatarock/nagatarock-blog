<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167484626-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-167484626-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nagatarock-blog</title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="https://nagatarockblog.com/wp-content/uploads/2021/02/favicon.ico">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script>
        (function(d) {
            var config = {
                    kitId: 'zao1pif',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    	<script>
// ヌルヌルスクロール
jQuery(function(){
	// #で始まるアンカーをクリックした場合に以下が動作
	jQuery('a[href^="#"]').click(function(){
		var speed = 800;	// スクロール速度　msec
		var href = jQuery(this).attr("href");	// アンカーの値取得
    	var target = jQuery(href == "#" || href == "" ? 'html' : href);	// 移動先を取得
    	var position = target.offset().top - 100;	//　移動先を数値で取得（固定ヘッダーがかぶるので位置調整）
    	jQuery('body,html').animate({scrollTop:position}, speed, 'swing');	// ヌルヌルスクロールする
    	return false;
   });
});
</script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="p-header_menu_btn_background"></div>
    <header>
        <div class="p-header">
            <div class="p-header_title">
                <h1><a href="<?php echo esc_url(home_url('/')) ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
            <nav class="p-header_menu">
                <p class="p-header_menu_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </p>
                <ul class="p-header_menu_menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/profile-2')); ?>">PROFILE</a></li>
                    <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">PORTFOLIO</a></li>
                    <li><a href="<?php echo get_page_link('590'); ?>">BLOG</a></li>
                    <li class="contact"><a href="<?php echo get_page_link('153'); ?>">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <!--p-heder-->
    </header>