<?php
/**
* Template Name: コンタクトページ
*/
?>
<?php get_header() ;?>
    <hr>
    <section class="l-page_container">
        <div class="c-container_title">
            <h1><?php the_title() ;?></h1>
        </div>
        <!-- CONTACTページ -->
        <section class="p-contact_container">
        <?php if (is_page('contact')): ?>
            <p><?php the_content(); ?></p>
            <?php
        else:
        endif;        
        ?>

<?php get_sidebar() ; ?>
</section>
        <hr>
        <?php get_footer() ;?>
    <?php wp_footer(); ?>
</body>

</html>