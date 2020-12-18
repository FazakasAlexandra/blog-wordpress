    <!-- GET ABOUT AUTHOR CARD -->
    <?php get_template_part('template-parts/cards/about-author', null, array(
        'query' => array(
            "title" => "Kate Willems"
        )
    )); ?>

    <!-- GET LATEST CARDS -->
    <?php get_template_part('template-parts/cards/small', null, array(
        'query' => array(
            "posts_per_page" => 3,
            "orderby"        => "date",
            "order"          => "DESC"
        )
    )); ?>