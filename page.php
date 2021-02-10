<?php
/**
* Template Name: テンプレートテスト1
*/
?>
<?php get_header() ;?>
    <hr>
    <section class="l-page_container">
        <div class="c-container_title">
            <h1><?php the_title() ;?></h1>
        </div>
    </section>
<?php get_sidebar() ; ?>
        <hr>
        <?php get_footer() ;?>
    <?php wp_footer(); ?>
</body>

</html>