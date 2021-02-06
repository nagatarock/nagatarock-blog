<?php get_header(); ?>
<hr>
<?php if(have_posts()): ?>
            <?php while(have_posts()): 
            the_post(); ?>
            <?php the_title(); ?>
            <?php the_content();?>

        <?php
        endwhile;
        else:

        endif;
?>
<hr>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>