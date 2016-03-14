<?php  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <!-- open .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <!-- open .portfolio__item -->
            <div class="portfolio__item">
                <a href="<?php echo the_permalink(); ?>" class="portfolio__item--img">
                    <?php the_post_thumbnail(); ?>
                    <span class="portfolio__item--img--more">Смотреть подробнее</span></a>
                <p><?php the_title(); ?></p>
                <a href="<?php echo the_permalink(); ?>" class="portfolio__item--link">Подробнее</a>
            </div>
            <!-- close .portfolio__item -->
        </div>
        <!-- close .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

    <?php endwhile ; }
wp_reset_query(); ?>