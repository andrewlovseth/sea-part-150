<?php

    $overview = get_field('overview');
    $headline = $overview['headline'];
    $copy = $overview['copy'];
    $photo = $overview['photo'];

?>

<section class="overview grid">
    <div class="info">
        <div class="headline blue underline">
            <h3><?php echo $headline; ?></h3>
        </div>

        <div class="copy p2">
            <?php echo $copy; ?>
        </div>
    </div>

    <?php if($photo): ?>
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
    <?php endif; ?>
</section>