<?php get_header(); ?>

<?php get_template_part('template-parts/cards/extra-large', null, array(
    'query' => array(
        'category_name' => 'Travel',
        'posts_per_page' => 1,
    )
)); ?>

<main class="main-home">

    <div class="main-home-cards-container">
        <?php get_template_part('template-parts/cards-main-home'); ?>

        <div class="pagination">
            <?php fashion_blog_number_pagination() ?>
        </div>

    </div>

    <div class="sidebar">
        <?php get_template_part('template-parts/cards-sidebar-home') ?>
        <?php get_template_part('template-parts/sidebars/main') ?>
    </div>

</main>

<?php get_footer(); ?>