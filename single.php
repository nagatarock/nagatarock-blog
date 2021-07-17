<?php

/**
 * Template Name: ブログ一覧
 */
?>
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
    <div class="l-single_container">
        <section class="p-single_container">
            <div class="p-single_container_left">
                <div class="p-single_title">
                    <div class="c-single_title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="c-single_thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large');
                        else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri('img/no-thumbnail.png')); ?>" alt="サムネイル画像はありません">
                        <?php endif; ?>
                    </div>
                    <div class="c-date">
                            公開日:<?php echo get_the_date('Y/n/j'); ?>
                            <?php if (
                                get_the_date('Y/n/j')
                                != get_the_modified_date('Y/n/j')
                            ) : ?>
                                最終更新日:<?php echo get_the_modified_date('Y/n/j'); ?>
                            <?php endif; ?>
                        </div>
                </div>
                <div class="c-single_content">
                    <?php the_content(); ?>
                    <?php the_tags('タグ：', '|'); ?>
                    <!--タグの表示-->
                    <div class="c-nav-link">
                        <?php the_post_navigation(array(
                            'prev_text'      => '<<前の記事へ',
                            'next_text'      => '次の記事へ>>',
                        )); ?>
                        <!--前後記事へのリンク-->
                    </div>
                </div>
            </div>
            <div class="p-single_container_right">
                <?php if (have_posts()) : ?>
                    <!--記事があるかを調べ -->
                    <?php while (have_posts()) : //次の記事があるかを調べ
                        the_post(); ?>
                        <!-- 次の記事を表示する -->
                        <div class="c-author_box">
                            <div class="c-authort_box_text">
                                <h3>ABOUT US</h3>
                                <p>この記事を書いた人</p>
                                <p><?php echo (get_the_author_meta('display_name')); ?></p>
                            </div>
                            <div class="c-author_pic">
                                <img src="<?php bloginfo('template_directory'); ?>/img/profile.png" alt="このサイト作成者の写真">
                            </div>
                            <div class="c-twitter_pic">
                                <a href="<?php echo esc_url('https://twitter.com/nagatarock21'); ?> "><img src="<?php bloginfo('template_directory'); ?>/img/Logo blue.svg" alt="ツイッターアイコン"></a>
                            </div>
                            <div class="c-author_box_profile"><?php echo wpautop(get_the_author_meta('user_description')); ?></div>
                        </div>
                        <div class="c-category_box">
                            <?php dynamic_sidebar('category-sidebar'); ?>
                        </div>
                        <div class="c-archive_box">
                            <?php dynamic_sidebar('archive-sidebar'); ?>
                        </div>
                    <?php endwhile; //投稿データがない場合
                else : ?>
                <?php endif; ?>
            </div>
        </section>
    </div><!-- l-single_container -->
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