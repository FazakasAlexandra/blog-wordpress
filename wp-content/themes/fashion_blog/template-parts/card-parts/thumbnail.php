<?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url($args['thumbnail-size']) ?>" alt="post-thumbnail">
<?php endif; ?>