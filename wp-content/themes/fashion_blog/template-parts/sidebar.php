<div class="side">
    <?php get_template_part('template-parts/sidebar-cards'); ?>
    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div>