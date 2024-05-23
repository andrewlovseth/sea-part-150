<?php

    $next = get_field('next');
    $show = $next['show'];
    $headline = $next['headline'];
    $copy = $next['deck'];
    $link = $next['link'];

    if($show == TRUE):
?>

    <section class="next grid">

        <div class="headline teal underline centered">
            <h3><?php echo $headline; ?></h3>
        </div>

        <div class="copy p2">
            <?php echo $copy; ?>
        </div>

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
        
    </section>

<?php endif; ?>