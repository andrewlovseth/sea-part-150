<?php

    $info = get_field('info');
    $copy = $info['copy'];
    $link = $info['link'];



?>

<section class="info | grid">

	<?php get_template_part('template-parts/components/complaints'); ?>


    <div class="info__details">
        <?php if ($copy): ?>
            <div class="copy p1">
                <?php echo $copy; ?>
            </div>
        <?php endif; ?>

        <?php 
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>

            <div class="cta">
                <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>

        <?php endif; ?>
    </div>


</section>

