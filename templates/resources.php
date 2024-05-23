<?php

    /*
    
        Template Name: Resources

    */

get_header(); ?>

    <?php get_template_part('templates/resources/about'); ?>

    <section class="documents grid">

        
        <?php get_template_part('templates/resources/documents-categories'); ?>

        <?php get_template_part('templates/resources/documents-list'); ?>
    </section>

<?php get_footer(); ?>