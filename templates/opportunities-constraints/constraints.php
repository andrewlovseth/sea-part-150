<?php

    $headline = get_field('constraints_headline');
    $intro = get_field('constraints_intro');

?>

<section class="constraints grid">
    <div class="intro">
        <div class="headline teal    underline">
            <h2><?php echo $headline; ?></h2>
        </div>

        <div class="copy p2">
            <?php echo $intro; ?>
        </div>
    </div>

    <?php if(have_rows('constraints')): while(have_rows('constraints')) : the_row(); ?>

        <?php if( get_row_layout() == 'constraint' ): ?>

            <div class="constraint">
                <div class="photo">
                    <?php $image = get_sub_field('photo'); if( $image ): ?>
                        <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>

                        <span class="compass">
                            <?php get_template_part('images/icon-compass'); ?>
                        </span>
                    <?php endif; ?>

                </div>

                <div class="info">
                    <div class="headline orange underline">
                        <h4><?php the_sub_field('headline'); ?></h4>
                    </div>

                    <div class="copy p2">
                        <?php the_sub_field('copy'); ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    <?php endwhile; endif; ?>

    <?php
        $link = get_field('constraints_pdf_link');
        if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>

        <div class="caption copy copy-3 sans-serif">
            <p><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
        </div>
    
    <?php endif; ?>

</section>