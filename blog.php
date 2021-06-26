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
    <section class="l-archive">
        <div class="c-container_title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="p-archive_container">
            <div class="p-archive_container_left" <?php post_class(); ?>>
                <!-- ↓投稿記事一覧を取得する記述↓ -->
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 5, // 表示件数
                    'orderby'     => 'date',
                    'order' => 'DESC'
                ));
                if ($the_query->have_posts()) : //投稿記事があるか調べ 
                ?>
                    <?php
                    while ($the_query->have_posts()) : //次の記事があるか調べ
                        $the_query->the_post(); //次の記事を表示する 
                    ?>
                        <a href="<?php the_permalink($post->ID); ?>">
                            <article class="p-archive_container_left_box">
                                <div class="c-archive_container_left_box_thumb">
                                    <?php if (has_post_thumbnail()) : //アイキャッチ画像があれば
                                    ?>
                                        <?php the_post_thumbnail(
                                            array(
                                                'alt' => $post_title,
                                            )
                                        ) //画像を取得する;
                                        ?>
                                    <?php else : //アイキャッチ画像がなければ 
                                    ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri('img/no-image.png')); ?>" alt="サムネイル画像はありません">
                                    <?php endif; ?>
                                </div>
                                <div class="p-archive_container_left_box_sentence">
                                    <div class="c-archive_container_left_box_title">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="c-date">
                                        公開日:<?php echo get_the_date('Y/n/j'); ?>
                                        <?php if (
                                            get_the_date('Y/n/j')
                                            != get_the_modified_date('Y/n/j')
                                        ) : ?>
                                            最終更新日:<?php echo get_the_modified_date('Y/n/j'); ?>
                                        <?php endif; ?>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </article>
                        </a>
                    <?php endwhile; ?>
                <?php endif; //投稿記事の終了
                ?>
            </div>
            <div class="p-archive_container_right">
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
            </div>
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
        </div>
        <!--p-archive_container-->
        <!-- pagenation -->
        <div class="wp-pagenavi">
            <?php
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%/',
                    'current' => max(1, $paged),
                    'mid_size' => 10,
                    'total' => $the_query->max_num_pages
                ));
            }
            wp_reset_postdata(); ?>
        </div>
        <!-- /pagenation -->
    </section>
    <hr>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>