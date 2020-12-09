<footer>

    <?php 
    get_template_part('template-parts/instagram-pictures');
    get_template_part('template-parts/logo');
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'container' => ''
        )
    ); ?>

    <?php if (is_active_sidebar('social-media-icons')) : 
        dynamic_sidebar('social-media-icons'); ?>
    <?php endif; ?>

    <hr>

    <p>@2019 Logwork. All Right Reserved</p>

</footer>

<?php wp_footer(); ?>

</body>
</html>