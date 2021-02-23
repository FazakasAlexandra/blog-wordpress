<div class="card-info">
    <?php the_category(); ?>

    <?php get_template_part('template-parts/card-parts/title') ?>

    <div class="date-auth-container">
        <?php get_template_part('template-parts/card-parts/date-author') ?>
        <p class="comments"><?php comments_number(''); ?></p>
    </div>

    <?php get_template_part('template-parts/card-parts/excerpt') ?>
</div>