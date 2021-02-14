<?php get_header(); ?>
<hr>
<div class="l-single_container">
    <section class="p-single_container">
        <div class="p-single_container_left">
            <div class="c-single_title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="c-single_thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
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
            <?php the_tags('タグ：','|'); ?> <!--タグの表示-->
        <div class="c-nav-link">
        <?php the_post_navigation( array(
                'prev_text'      => '<<前の記事へ',
                'next_text'      => '次の記事へ>>',
        )); ?> <!--前後記事へのリンク-->
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
<?php get_sidebar(); ?>
<hr>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>