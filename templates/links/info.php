<?php

    $info = get_field('info');
    $copy = $info['copy'];

?>

<section class="info | grid">

    <?php if ($copy): ?>
        <div class="copy p1">
            <?php echo $copy; ?>
        </div>
    <?php endif; ?>

</section>

