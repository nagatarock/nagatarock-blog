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
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#profile')); ?>">PROFILE</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#portfolio')); ?>">PORTFOLIO</a></li>
                    <li><a href="<?php echo get_page_link('590'); ?>">BLOG</a></li>
                    <li class="contact"><a href="<?php echo esc_url(home_url('/#contact')); ?>">CONTACT</a></li>
                    <!-- ブログページのみ外部リンク用のヘッダーメニューを使用しています -->
                </ul>
            </nav>
        </div>
        <!--p-heder-->
    </header>
    <hr>
    <div class="l-custom__post">
        <div class="custom__post__title">
            <h1><?php the_title(); ?></h1>
        </div>
        <section class="p-custom__post__container">
            <div class="c-custom__post__visual">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large');
                else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/no-thumbnail.png')); ?>" alt="サムネイル画像はありません">
                <?php endif; ?>
            </div>
            <h4>タイトル</h4>
            <p><?php the_field('title'); ?></p>
            <h4>使用SKILL</h4>
            <p><?php the_field('skill'); ?></p>
            <h4>このサイトについて</h4>
            <p><?php the_field('content'); ?></p>
            <h4>工夫した点</h4>
            <p><?php the_field('good'); ?></p>
            <?php $ctm = get_post_meta($post->ID, 'voice', true); ?>
            <?php if (empty($ctm)) : ?>
            <?php else : ?>
            <h4>お客様の声</h4>
            <p><?php the_field('voice'); ?></p>
            <?php endif; ?>
            <!-- voiceの入力がある場合のみ表示する -->            
            <?php $ctm = get_post_meta($post->ID, 'url', true); ?>
            <?php if (empty($ctm)) : ?>
            <?php else : ?>
            <h4>URL</h4>
            <p><a href="<?php the_field('url'); ?>" target="_blank" rel="noopener noreferrer">サイトを見てみる</a></p>
            <?php endif; ?>
            <!-- urlの入力がある場合のみ表示する -->
            <?php the_content(); ?>
        </section>

    </div>
    <!-- l-single__site -->
    <nav class="c-hamburger_menu">
        <ul class="c-hamburger_menu_menu">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url('/#profile')); ?>">PROFILE</a></li>
            <li><a href="<?php echo esc_url(home_url('/#portfolio')); ?>">PORTFOLIO</a></li>
            <li><a href="<?php echo get_page_link('590'); ?>">BLOG</a></li>
            <li class="contact"><a href="<?php echo esc_url(home_url('/#contact')); ?>">CONTACT</a></li>
        </ul>
    </nav>
    <!-- ブログページのみ外部ページ用のメニューを記述しているので、sidebar.phpを読み込んでません -->
    <hr>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>