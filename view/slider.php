<?php  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <!-- open .home-slider__item -->
        <div data-img="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>">
            <!-- open .home-slider__item -->
            <div class="home-slider__item">
                <!-- open .container -->
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <?php the_content(); ?>
                    <!-- open .home-slider__item--icon -->
                </div>
                <!-- close .container -->
            </div>
            <!-- close .home-slider__item -->
        </div>
        <!-- close .home-slider__item -->

    <?php endwhile ; }
wp_reset_query(); ?>