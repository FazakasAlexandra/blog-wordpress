<?php $the_query = new WP_Query($args['query']); ?>

<div class="recent-posts">

    <h4>Most recent</h4>

    <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
            <?php get_template_part('template-parts/card-parts/thumbnail', null, array('thumbnail-size' => 'S')); ?>
            <?php get_template_part('template-parts/card-parts/info-small-medium'); ?>

        <?php endwhile; ?>

    <?php endif ?>
    
</div>