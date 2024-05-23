<?php

    $content = get_field('content');
    $headline = $content['headline'];
    $copy = $content['copy'];
    $photo = $content['photo'];
    $map = $content['map'];
    $link = $content['map_pdf'];

?>

<section class="existing-conditions grid">
    <div class="intro">
        <div class="info">
            <div class="headline teal underline">
                <h2><?php echo $headline; ?></h2>
            </div>

            <div class="copy p2">
                <?php echo $copy; ?>
            </div>
        </div>

        <div class="photo">
            <div class="photo-wrapper">
                <div class="content">
                    <?php echo wp_get_attachment_image($photo['ID'], 'full'); ?>
                </div>
            </div>

            <?php if($photo['caption']):?>
                <div class="caption">
                    <p><?php echo $photo['caption']; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="map">
        <?php echo wp_get_attachment_image($map['ID'], 'full'); ?>
    </div>

    <?php 
        if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    ?>

        <div class="map-caption copy copy-3 sans-serif">
            <p><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
        </div>
    
    <?php endif; ?>

    <div class="divider"></div>
</section>