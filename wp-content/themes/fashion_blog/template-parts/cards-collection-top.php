<div class="cards-collection">
    <?php $the_query = new WP_Query(array(
        'category_name' => 'Fashion',
        'posts_per_page' => 6,
    ));
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php get_template_part('template-parts/card'); ?>


        <?php endwhile; ?>
    <?php endif ?>
</div>