<?php get_header(); ?>

<?php get_template_part('template-parts/card-extra-large'); ?>

<?php wp_reset_query(); ?>

<main class="main-home">
    <div class="cards-container">

        <?php 
        $counter = 1;
        if (have_posts()) : 
            while (have_posts()) : the_post();

                if ($counter % 7 == 0) {
                    get_template_part('template-parts/card-large');
                } else {
                    get_template_part('template-parts/card');
                }
                wp_reset_query();
                $counter++;
            endwhile;
        endif;
        ?>
    </div>

    <div class="side">
        <?php get_template_part('template-parts/sidebar-posts'); ?>
        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>