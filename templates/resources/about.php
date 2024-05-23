<?php

    $about = get_field('about');
    $copy = $about['copy'];

?>

<section class="about grid">
    <div class="copy p1">
        <?php echo $copy; ?>
    </div>
</section>