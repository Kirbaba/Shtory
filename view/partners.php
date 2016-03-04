<?php $c=0; if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post();

        if($c==0){
        echo '<div class="owl-item">';
            } $c++; ?>

            <!-- open .partners__item -->
            <div class="partners__item">
               <?php the_post_thumbnail(); ?>
            </div>
            <!-- close .partners__item -->

        <?php
    if($c==6){

        echo '</div>';
        $c=0;
    }

    endwhile ; }
wp_reset_query(); ?>