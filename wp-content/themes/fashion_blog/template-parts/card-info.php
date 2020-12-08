<div class="card-info">

    <?php the_category(); ?>

    <h1>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>

    <div class="date-auth-container">
        <p class="date"><?php the_date(); ?></p>
        <p class="author"><span>By</span> <?php the_author(); ?></p>
    </div>
    </div>
