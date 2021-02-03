<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nagatarock-blog</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ;?>
    <div class="animsition">
        <div class="p-header_menu_btn_background"></div>
        <header>
            <div class="p-header">
                <div class="p-header_title">
                    <h1><a href="index.html" class="animsition-link" ><?php bloginfo( 'name'); ?></a></h1>
                </div>
                <nav class="p-header_menu">
                    <p class="p-header_menu_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </p>
                    <ul class="p-header_menu_menu">
                        <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="animsition-link">TOP</a></li>
                        <li><a href="page.html" class="animsition-link">PROFILE</a></li>
                        <li><a href="portfolio.html" class="animsition-link">PORTFOLIO</a></li>
                        <li><a href="archive.html" class="animsition-link">BLOG</a></li>
                        <li><a href="#" class="animsition-link">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <!--p-heder-->
        </header>
        <hr>
        <section class="l-main_container">
            <div class="p-main_container">
                <div class="c-main_container_pic">
                <img src="<?php bloginfo('template_url'); ?>/img/top<?php echo(rand(1,3)); ?>.jpg" alt="トップページの風景の写真" >
                </div>
                <nav class="c-main_container_menu">
                    <ul class="c-main_container_menu_menu">
                        <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="animsition-link">TOP</a></li>
                        <li><a href="page.html" class="animsition-link">PROFILE</a></li>
                        <li><a href="portfolio.html" class="animsition-link">PORTFOLIO</a></li>
                        <li><a href="#" class="animsition-link">BLOG</a></li>
                        <li><a href="#" class="animsition-link">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <!--p-main_container-->
        </section>
        <hr>
        <footer>
            <div class="l-footer_title">
                <span style="font-family:'Times New Roman', 'Times';">&copy;</span><?php bloginfo('name');?> since2021
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>