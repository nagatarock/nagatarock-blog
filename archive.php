<?php get_header(); ?>
<hr>
<section class="l-archive_container">
    <div class="c-container_title">
        <h2>
            <?php $category = get_the_category();
        $cat_name = $category[0]->cat_name; echo $cat_name
        ;?>
</h2>
    </div>
    <div class="p-archive_container">
        <div class="p-archive_container_left" <?php post_class(); ?>>
        <?php if(have_posts()): ?><!--記事があるかを調べ -->
            <?php while(have_posts()): //次の記事があるかを調べ
            the_post(); ?>     <!-- 次の記事を表示する -->
                    <article class="p-archive_container_left_box">
                        <a href="<?php the_permalink($post->ID); ?>">
                            <div class="c-archive_container_left_box_thumb">
                                <?php if (has_post_thumbnail()) : //アイキャッチ画像があれば
                                ?>
                                    <?php the_post_thumbnail(
                                        array(
                                            'alt' => $post_title,
                                        )
                                    ) //画像を取得;
                                    ?>
                                <?php else : //アイキャッチ画像がなければ
                                ?>
                                    <img src="<?php echo esc_url(get_theme_file_uri('img/no-image.png')); ?>" alt="サムネイル画像はありません">
                                <?php endif; ?>
                        </a>
        </div>
        <div class="p-archive_container_left_box_sentence">
            <div class="c-archive_container_left_box_title">
                <h3><?php the_title(); ?></h3>
            </div>
            <div class="c-archive_container_left_box_text">
            公開日:<?php echo get_the_date('Y/n/j'); ?>
            <?php if(get_the_date('Y/n/j')
            != get_the_modified_date('Y/n/j')):?>
            最終更新日:<?php echo get_the_modified_date('Y/n/j'); ?>
            <?php endif;?>                
                <?php the_excerpt(); ?>
            </div>
            <div class="c-archive_container_left_box_more">
                <a href="<?php the_permalink($post->ID); ?>">もっと読む</a>
            </div>
        </div>
        </article>
        <?php endwhile; //投稿データがない場合
        else:?>
                    <?php endif; ?>
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
                        <a href="<?php echo esc_url('https://twitter.com/nagatarock21') ;?> "><img src="<?php bloginfo('template_directory'); ?>/img/Logo blue.svg" alt="ツイッターアイコン"></a>
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
</section>
<?php wp_reset_postdata(); ?>
<?php wp_pagenavi(); ?>
<hr>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>