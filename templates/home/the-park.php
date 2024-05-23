<?php

    $park = get_field('the_park');
    $headline = $park['headline'];
    $copy = $park['copy'];
    $photo = $park['photo'];

?>

<section class="the-park grid">
    <div class="info">
        <div class="headline orange underline">
            <h3><?php echo $headline; ?></h3>
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
</section>