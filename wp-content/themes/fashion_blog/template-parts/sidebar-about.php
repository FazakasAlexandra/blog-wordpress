<?php
$the_query = new WP_Query(array(
    "title" => "Kate Willems"
));
?>

<div class="about-post">
    <h4>About the author</h4>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('S') ?>" alt="">
            <?php endif; ?>

            <div class="card-info">

                <?php the_category(); ?>

                <h1>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h1>

                <div class="date-auth-container">
                    <p class="date"><?php the_date(); ?></p>
                    <p class="author"><span>By</span> <?php the_author(); ?></p>
                </div>
                <div class="excerpt">
                    <?php the_excerpt() ?>
                </div>

                <a id="continue-reading" href="<?php the_permalink();?>">Continue reading</a>
            </div>

        <?php endwhile; ?>
    <?php endif ?>
</div>