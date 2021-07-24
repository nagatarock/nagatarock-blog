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
    <title>ナガタロックブログ|RaiseTechで学び副業で稼ぐ</title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="https://nagatarockblog.com/wp-content/uploads/2021/02/favicon.ico">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9446338230066955"
     crossorigin="anonymous"></script>
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
                    <li><a href="#top">TOP</a></li>
                    <li><a href="#profile">PROFILE</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="<?php echo get_page_link('590'); ?>">BLOG</a></li>
                    <li class="contact"><a href="#contact">CONTACT</a></li>
                </ul>
                <!-- ブログのみページ外へジャンプ -->
            </nav>
        </div>
        <!--p-heder-->
    </header>