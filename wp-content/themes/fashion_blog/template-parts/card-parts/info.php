<div class="card-info">

    <?php the_category(); ?>

    <h1>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>

    <!-- CARD INFO FOR LARGE CARD -->
    <?php if ($args['card-size'] === 'large') { ?>

        <div class="date-auth-container">
            <?php get_template_part('template-parts/card-parts/date-author') ?>
            <p class="comments"><?php comments_number('2'); ?> comments</p>
        </div>

        <?php get_template_part('template-parts/card-parts/excerpt') ?>

    <!-- CARD INFO FOR MEDIUM AND SMALL CARDS -->
    <?php } else { ?>

        <div class="date-auth-container">
            <?php get_template_part('template-parts/card-parts/date-author') ?>
        </div>

        <!-- CARD INFO FOR ABOUT CARD -->
        <?php if ($args['card-type'] === 'about-author') { ?>

            <?php get_template_part('template-parts/card-parts/excerpt') ?>
            <a id="continue-reading" href="<?php the_permalink(); ?>">Continue reading</a>

        <?php } ?>

    <?php }; ?>

</div>