<?php

    /*
    
        Template Name: Map

    */

get_header(); ?>


    <section class="map grid">
        <div class="map__container">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>


<?php get_footer(); ?>