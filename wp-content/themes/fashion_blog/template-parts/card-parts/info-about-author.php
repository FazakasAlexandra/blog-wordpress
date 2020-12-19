<div class="card-info">
    <?php get_template_part('template-parts/card-parts/title') ?>

    <?php the_category(); ?>

    <?php get_template_part('template-parts/card-parts/excerpt') ?>
    <a id="continue-reading" href="<?php the_permalink(); ?>">Continue reading</a>
</div>