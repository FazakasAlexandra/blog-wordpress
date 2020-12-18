<div class=cards-container>
    <?php
    $counter = 1;
    if (have_posts()) :
        while (have_posts()) : the_post();

            if ($counter % 7 == 0) {
                get_template_part('template-parts/cards/large');
            } else {
                get_template_part('template-parts/cards/medium');
            }
            $counter++;
        endwhile;
    endif;
    ?>
</div>