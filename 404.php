<?php get_header(); ?>
<hr>
<?php if (is_404()) : ?>
    <section class="p-404_container">
        <h2>404 Not Found（ページが見つかりませんでした）</h2>
        <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
        <p><a href="<?php echo esc_url(home_url('/')) ?>">トップページに戻る</a></p>
    <?php else : ?>

        <p>404以外のページです。</p>

    <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
    <hr>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    </body>

    </html>