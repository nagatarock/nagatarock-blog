<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nagatarock-blog</title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="http://nagatarockblog.local/wp-content/uploads/2021/02/favicon.ico">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ;?>
    <div class="animsition">
        <div class="p-header_menu_btn_background"></div>
        <header>
            <div class="p-header">
                <div class="p-header_title">
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="animsition-link" ><?php bloginfo( 'name'); ?></a></h1>
                </div>
                <nav class="p-header_menu">
                    <p class="p-header_menu_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </p>
                    <ul class="p-header_menu_menu">
                        <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="animsition-link">TOP</a></li>
                        <li><a href="<?php echo esc_url( home_url('/profile-2')); ?>" class="animsition-link">PROFILE</a></li>
                        <li><a href="portfolio.html" class="animsition-link">PORTFOLIO</a></li>
                        <li><a href="archive.html" class="animsition-link">BLOG</a></li>
                        <li><a href="<?php echo get_page_link('153');?>" class="animsition-link">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <!--p-heder-->
        </header>