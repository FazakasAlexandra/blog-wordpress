<?php
$the_query = new WP_Query($args['query'])?>

<?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div id="card-extra-large">
                        <?php get_template_part('template-parts/card-parts/thumbnail', null, array('thumbnail-size' => 'XL')); ?>
                        <?php get_template_part('template-parts/card-parts/info'); ?>
                </div>

        <?php endwhile; ?>

<?php endif ?>