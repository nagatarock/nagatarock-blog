<?php
/**
* Template Name: プロフィールページ
*/
?>
<?php get_header() ;?>
    <hr>
    <section class="l-page_container">
        <div class="c-container_title">
            <h1><?php the_title() ;?></h1>
        </div>

        <!-- PROFILEページ -->
        <?php if (is_page('profile-2')): ?>
        <div class="p-page_container">
            <div class="p-page_container_left">
                <div class="p-page_container_left_pic">
                    <div class="c-author_pic">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="このサイト作成者の写真">
                    </div>
                    <div class="c-twitter_pic">
                        <a href="<?php echo esc_url('https://twitter.com/nagatarock21') ;?> "><img src="<?php echo get_template_directory_uri(); ?>/img/Logo blue.svg" alt="ツイッターアイコン"></a>
                    </div>
                    <div class="p-page_container_left_text">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>

            </div>
            <div class="p-page_container_right">
                <div class="c-page_container_right_skills">
                    <h2>SKILLS</h2>
                </div>
                <div class="p-page_container_right_container">
                    <div class="p-page_container_right_container_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/html&css&jQ.svg" alt="htmlとcssのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>html&css</h3>
                            <p>html&cssを用いた基本的なコーディング。jQueryを使った簡単なアニメーションの実装が出来ます。</p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-icon.svg" alt="ワードプレスのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>WordPress</h3>
                            <p>静的にコーディングしたサイトをWordPress化させます。</p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/github-icon.svg" alt="ギットハブのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>Github</h3>
                            <p>進行をgithubにて管理しています。</p>
                            <p>またチーム開発にも運用しています。</p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ai.svg" alt="イラストレーターのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>Adobe Illustrator</h3>
                            <p>バナーやアイコン作成が出来ます。</p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/xd.svg" alt="エックスディーのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>Adobe XD</h3>
                            <p>サイトのデザインカンプを作成し、出来上がりデザイン・機能を共有させていただきます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        else:
        endif;        
        ?>
<?php get_sidebar() ; ?>
        <hr>
        <?php get_footer() ;?>
    <?php wp_footer(); ?>
</body>

</html>