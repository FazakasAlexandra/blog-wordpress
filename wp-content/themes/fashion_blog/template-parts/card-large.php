       <?php
        // the query
        $the_query = new WP_Query(array(
                'category_name' => 'Dresses',
                'posts_per_page' => 1,
        ));
        ?>

       <?php if ($the_query->have_posts()) : ?>
               <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                       <div id="card-large">
                               <?php if (has_post_thumbnail()) : ?>
                                       <img src="<?php the_post_thumbnail_url('L') ?>" alt="">
                               <?php endif; ?>

                               <div class="card-info">

                                       <?php the_category(); ?>

                                       <h1>
                                               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                       </h1>

                                       <div class="date-auth-container">
                                               <p class="date"><?php the_date(); ?></p>
                                               <p class="author"><span>By</span> <?php the_author(); ?></p>
                                               <p class="date"><?php comments_number('2'); ?> comments</p>
                                       </div>

                                       <div class="excerpt">
                                               <?php the_excerpt() ?>
                                       </div>
                               </div>
                       </div>

               <?php endwhile; ?>
       <?php endif ?>