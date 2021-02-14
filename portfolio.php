<?php
/**
* Template Name: ポートフォリオページ
*/
?>
<?php get_header() ;?>
    <hr>
    <section class="l-page_container">
        <div class="c-container_title">
            <h1><?php the_title() ;?></h1>
        </div>
<!-- PORTFOLIOページ -->
<?php if (is_page('portfolio')): ?>
<section class="l-port_container">
        <div class="p-port_container">
            <div class="p-port_container_box">
                <div class="c-port_container_page">
                    <a href="https://www.nagatarock-task.cfbx.jp/"><img src="<?php bloginfo('template_directory'); ?>/img/hamburger.png" alt="ハンバーガーサイトの画像">
                    <div class="c-port_container_mask">
                    <div class="c-port_container_title">
                        RaiseTech課題サイト
                    </div>
                </div>
            </a>
                </div>
                <div class="c-port_container_box_text">
                    <h3>RaiseTech課題サイト</h3>
                    <p>使用スキル html&css/WordPress/jQuery/github</p>
                    <p>エンジニアスクール「RaiseTech」の課題サイトです。</p>
                    <p>html&cssでコーディングしたものをWordPress化させました。</p>
                    <p>cssはsassを用いたFLOCSS設計です。</p>
                    <p>jQueryを用いたサイドバーも実装しています。</p>
                </div>
            </div>
            <div class="p-port_container_box">
                <div class="c-port_container_page">
                    <a href="<?php echo esc_url( home_url( '/' ) ) ?>"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio.png" alt="ポートフォリオサイトの画像">
                    <div class="c-port_container_mask">
                    <div class="c-port_container_title">
                        ポートフォリオサイト
                    </div>
                </div>
            </a>
                </div>
                <div class="c-port_container_box_text">
                    <h3>ポートフォリオ</h3>
                    <p>使用スキル XD/html&css/WordPress/jQuery/github</p>
                    <p>元々有料テーマで運営していたブログサイトを</p>
                    <p>自作テーマにカスタマイズしました。</p>
                    <p>XDでデザインカンプを起こし</p>
                    <p>html&cssでコーディング→WordPress化させました。</p>
                    <p></p>
                </div>
            </div>           
        </div>
    </section>
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