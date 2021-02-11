<?php

/**
 * Template Name: ブログ一覧
 */
?>
<?php get_header(); ?>
<hr>
<section class="l-archive_container">
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
            if ($the_query->have_posts()) : //投稿記事があるか調べ ?> 
            <?php
            while ($the_query->have_posts()) ://次の記事があるか調べ
            $the_query->the_post(); //次の記事を表示する ?>
                <a href="<?php the_permalink($post->ID); ?>">
            <article class="p-archive_container_left_box">
                    <div class="c-archive_container_left_box_thumb">
                        <?php if (has_post_thumbnail()) : //アイキャッチ画像があれば?>
                            <?php the_post_thumbnail(
                                array(
                                    'alt' => $post_title,
                                                )) //画像を取得する;?>
                        <?php else : //アイキャッチ画像がなければ ?>
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
<?php endif; //投稿記事の終了?>
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
    <?php get_sidebar(); ?>
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
                                                'mid_size' => 1,
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