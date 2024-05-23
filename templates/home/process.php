<?php

    $process = get_field('process');
    $headline = $process['headline'];
    $copy = $process['copy'];
    $photo = $process['photo'];
    $steps_headline = $process['steps_headline'];

if(have_rows('process')): while(have_rows('process')): the_row(); ?>

        <section class="process grid">
            <div class="info">
                <div class="headline teal underline">
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

<?php endwhile; endif; ?>