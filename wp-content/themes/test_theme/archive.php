<?php get_header(); ?>
<main>
    <h1><?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h3><?php the_title() ?></h3>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('smallest') ?>" alt="">
            <?php endif; ?>

            <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>">Read more</a>

    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>