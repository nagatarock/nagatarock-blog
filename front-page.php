<?php get_header(); ?>
<hr>
<section class="l-main">
    <div class="p-main_visual">
        <img src="<?php bloginfo('template_url'); ?>/img/top<?php echo (rand(1, 3)); ?>.png" alt="トップページの風景の写真">
        <?php get_sidebar(); ?>
    </div>
    <!--p-main_container-->
</section>
<!-- プロフィールページ -->
<section class="p-profile">
    <hr>
    <div class="c-container_title">
        <h2><?php
            $page_obj = get_page_by_path('profile-2');
            $page = get_post($page_obj);
            echo $page->post_title;     //タイトルを表示
            ?>
        </h2>
    </div>
    <div class="p-profile__box">
        <div class="p-profile__box__self">
            <div class="p-author">
                <div class="c-author__pic">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="このサイト作成者の写真">
                </div>
                <div class="c-twitter__pic">
                    <a href="<?php echo esc_url('https://twitter.com/nagatarock21'); ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/Logo blue.svg" alt="ツイッターアイコン"></a>
                </div>
            </div>
        </div>
        <div class="p-profile__box__sentence">
            <p><?php
                $page_obj = get_page_by_path('profile-2');
                $page = get_post($page_obj);
                echo $page->post_content;   //本文を表示
                ?></p>
        </div>
    </div>
    <div class="p-profile__skills">
        <div class="c-container_title">
            <h2>
                SKILLS
            </h2>
        </div>
        <div class="p-profile__skills__box">
            <div class="c-skills__card">
                <div class="skills__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/html&css&jQ.svg" alt="htmlとcssのイメージ図">
                </div>
            </div>
            <div class="c-skills__card">
                <div class="skills__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-icon.svg" alt="ワードプレスのイメージ図">
                </div>
            </div>
            <div class="c-skills__card">
                <div class="skills__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/github-icon.svg" alt="ギットハブのイメージ図">
                </div>
            </div>
            <div class="c-skills__card">
                <div class="skills__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ai.svg" alt="イラストレーターのイメージ図">
                </div>
            </div>
            <div class="c-skills__card">
                <div class="skills__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/xd.svg" alt="エックスディーのイメージ図">
                </div>
            </div>
            <div class="c-skills__card">
                <div class="skills__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lstep.svg" alt="得るステップのイメージ図">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ポートフォリオページ -->
<section class="p-portfolio">
    <hr>
    <div class="c-container_title">
        <h2>PORTFOLIO
        </h2>
    </div>
    <div class="p-portfolio__box">
        <?php
        $args = [
            'post_type' => 'site', // カスタム投稿名が「site」の場合
            'posts_per_page' => 10, // 表示する数
        ];
        $my_query = new WP_Query($args); ?>

        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <!-- ▽ ループ開始 ▽ -->
                <div class="p-portfolio__box__thumb">
                    <a href="<?php the_permalink(); ?>">
                        <div class="p-portfolio__box__thumb__mask">
                            <img src="<?php the_post_thumbnail('full', array("alt" => get_the_title())); ?>
                    </div>
                    <div class=" thumb__title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>まだ投稿がありません。</p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>
<section class="p-blog">
    <hr>
    <div class="c-container_title">
        <h2>BLOG
        </h2>
    </div>
    <div class="p-blog__box">
    <?php
$args = array(
'posts_per_page' => 5 // 表示件数
);
$posts = get_posts( $args );
foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
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
                                    ) //画像を取得;
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
            <?php if(get_the_date('Y/n/j')
            != get_the_modified_date('Y/n/j')):?>
            最終更新日:<?php echo get_the_modified_date('Y/n/j'); ?>
            <?php endif;?>                
                <?php the_excerpt(); ?>
            </div>
        </div>
        </article>
        </a>
        <?php
endforeach; // ループの終了
?>

    </div>
</section>
<hr>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>