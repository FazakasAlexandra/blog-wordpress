<?php
// the query
$the_query = new WP_Query(array(
        'category_name' => 'Travel',
        'posts_per_page' => 1,
));
?>

<?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div id="card-extra-large">
                        <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('XL') ?>" alt="">
                        <?php endif; ?>

                        <?php get_template_part('template-parts/card-info'); ?>
                </div>

        <?php endwhile; ?>
<?php endif ?>