<?php

    $intro = get_field('intro');
    $headline = $intro['headline'];
    $copy = $intro['copy'];
    $photo = $intro['photo'];


?>

<section class="content grid">
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
</section>