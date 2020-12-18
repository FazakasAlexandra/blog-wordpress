<?php get_header(); ?>
<main id="main-post">
    <div class="post">

        <figure>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('post_size') ?>" alt="">
            <?php endif; ?>
        </figure>

        <div class="post-content">
            <h1>
                <?php the_title(); ?>
            </h1>

            <p class="date">
                <?php echo get_the_date(); ?>
            </p>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
            
        </div>

        <?php comments_template(); ?>
    </div>
    
    <div class="sidebar">
        <?php get_template_part('template-parts/cards-sidebar-home') ?>
        <?php get_template_part('template-parts/sidebars/main') ?>
    </div>

</main>
<?php get_footer(); ?>