<?php

    $process = get_field('process');
    $steps_headline = $process['steps_headline'];
    $show = $process['show'];

    if($show == TRUE):
        
?>
    <?php if(have_rows('process')): while(have_rows('process')): the_row(); ?>
    
        <section class="get-involved grid">
            <div class="headline teal underline centered">
                <h3><?php echo $steps_headline; ?></h3>
            </div>

            <?php if(have_rows('steps')): $count = 1; while(have_rows('steps')): the_row(); ?>

                <div class="step step-<?php echo $count; ?>">
                    <div class="number">
                        <span><?php echo $count; ?></span>
                    </div>

                    <div class="copy p2">
                        <?php the_sub_field('deck'); ?>
                    </div>
                    
                </div>

            <?php $count++; endwhile; endif; ?>
        </section>

    <?php endwhile; endif; ?>

<?php endif; ?>