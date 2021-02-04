<?php get_header() ;?>

    <hr>
    <section class="l-page_container">
        <div class="c-container_title">
            <h1><?php the_title() ;?></h1>
        </div>
        <?php if (is_page('profile-2')): ?>
        <div class="p-page_container">
            <div class="p-page_container_left">
                <div class="p-page_container_left_pic">
                    <div class="c-page_container_left_pic_face">
                        <img src="<?php bloginfo('template_directory'); ?>/img/profile.png" alt="このサイト作成者の写真">
                    </div>
                    <div class="c-page_container_left_pic_twitter">
                        <a href="<?php echo esc_url('https://twitter.com/nagatarock21') ;?> "><img src="<?php bloginfo('template_directory'); ?>/img/Logo blue.svg" alt="ツイッターアイコン"></a>
                    </div>
                    <div class="p-page_container_left_text">
                        <p><?php the_content(); ?>	</p>
                    </div>
                </div>

            </div>
            <!-- p-page_container_left -->
            <div class="p-page_container_right">
                <div class="c-page_container_right_skills">
                    <h2>SKILLS</h2>
                </div>
                <div class="p-page_container_right_container">
                    <div class="p-page_container_right_container_box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/html&css&jQ.svg" alt="htmlとcssのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>html&css</h3>
                            <p>
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/wordpress-icon.svg" alt="ワードプレスのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>WordPress</h3>
                            <p>
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/github-icon.svg" alt="ギットハブのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>Github</h3>
                            <p>
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/ai.svg" alt="イラストレーターのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>Adobe Illustrator</h3>
                            <p>
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                        </div>
                    </div>
                    <div class="p-page_container_right_container_box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/xd.svg" alt="エックスディーのイメージ図">
                        <div class="p-page_container_right_container_box_text">
                            <h3>Adobe XD</h3>
                            <p>
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        else:
        endif;        
        ?>
        <?php if (is_page('contact')): ?>
            <p><?php the_content(); ?></p>
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