<?php get_header(); ?>

<?php get_template_part('template-parts/card-extra-large'); ?>

<main class="main-home">
    <div class="cards-container">
        <?php get_template_part('template-parts/cards-collection-top'); ?>
        <?php get_template_part('template-parts/card-large'); ?>
        <?php get_template_part('template-parts/cards-collection-bottom'); 
                next_posts_link(); 
                previous_posts_link();
        ?>
    </div>
    <div class="side">
        <?php get_template_part('template-parts/sidebar-posts'); ?>
        <?php if(is_active_sidebar('sidebar')):?>
            <?php dynamic_sidebar('sidebar');?>
        <?php endif;?>
    </div>
</main>

<?php get_footer(); ?>