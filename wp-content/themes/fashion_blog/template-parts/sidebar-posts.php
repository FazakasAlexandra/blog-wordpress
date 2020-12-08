<?php
$the_query = new WP_Query(array(
    "posts_per_page" => 3,
    "orderby"        => "date",
    "order"          => "DESC"
));
?>
<div class="recent-posts">
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('S') ?>" alt="">
            <?php endif; ?>

            <?php get_template_part('template-parts/card-info'); ?>

        <?php endwhile; ?>
    <?php endif ?>
</div>