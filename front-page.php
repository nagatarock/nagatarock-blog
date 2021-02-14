<?php get_header(); ?>
<hr>
<section class="l-main_container">
    <div class="p-main_container">
        <div class="c-main_container_pic">
            <img src="<?php bloginfo('template_url'); ?>/img/top<?php echo (rand(1, 3)); ?>.png" alt="トップページの風景の写真">
        </div>
        <?php get_sidebar(); ?>
    </div>
    <!--p-main_container-->
</section>
<hr>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>