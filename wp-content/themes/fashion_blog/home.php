<?php get_header(); ?>

<?php get_template_part('template-parts/card-extra-large'); ?>

<main class="main-home">
    <div class="wraper">
        <?php get_template_part('template-parts/main-home-cards'); ?>
        <?php get_template_part('template-parts/pagination'); ?>

    </div>
    <?php get_template_part('template-parts/sidebar'); ?>
</main>

<?php get_footer(); ?>