<div class="card">

    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('M_post') ?>" alt="">
    <?php endif; ?>

    <?php get_template_part('template-parts/card-info'); ?>
</div>