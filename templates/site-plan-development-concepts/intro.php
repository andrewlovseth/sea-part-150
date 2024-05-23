<?php

    $intro = get_field('intro');
    $headline = $intro['headline'];
    $copy = $intro['copy'];
    $photo = $intro['photo'];

?>

<section class="intro grid">

    <div class="info">
        <div class="headline teal underline">
            <h2><?php echo $headline; ?></h2>
        </div>

        <div class="copy p2">
            <?php echo $copy; ?>
        </div>
    </div>

    <?php if($photo): ?>
        <div class="photo">
            <?php echo wp_get_attachment_image($photo['ID'], 'full'); ?>
        </div>
    <?php endif; ?>

</section>