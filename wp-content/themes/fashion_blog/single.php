<?php get_header(); ?>
<main>
    <div class="post">

        <div class="post-head">
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('post_size') ?>" alt="">
            <?php endif; ?>
        </div>

        <div class="post-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </div>

    </div>
</main>
<?php get_footer(); ?>