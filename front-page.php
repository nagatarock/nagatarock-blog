<?php get_header(); ?>
<hr>
<section class="l-main">
    <div class="p-main_visual">
        <img src="<?php bloginfo('template_url'); ?>/img/top<?php echo (rand(1, 3)); ?>.png" alt="トップページの風景の写真">
        <?php get_sidebar(); ?>
    </div>
    <!--p-main_container-->
</section>
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
<hr>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>