<?php

    $info = get_field('info');
    $copy = $info['copy'];
 if ($copy): 
?>

    <section class="info | grid">

        <div class="copy p1">
            <?php echo $copy; ?>
        </div>

    </section>

<?php endif; ?>