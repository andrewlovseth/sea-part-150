<?php

    $timeline = get_field('timeline');
    $headline = $timeline['headline'];
    $copy = $timeline['copy'];

if(have_rows('timeline')): while(have_rows('timeline')): the_row(); ?>

    <section class="timeline grid">
        <div class="info">
            <div class="headline teal underline">
                <h3><?php echo $headline; ?></h3>
            </div>

            <div class="copy p2">
                <?php echo $copy; ?>
            </div>
        </div>

        <div class="events">
            <?php if(have_rows('events')): $count = 1; while(have_rows('events')): the_row(); ?>

                <div class="event event-<?php echo $count; ?>">
                    <div class="date copy p3 sans-serif">
                        <?php the_sub_field('date'); ?>
                    </div>

                    <div class="description copy p3 sans-serif">
                        <?php the_sub_field('description'); ?>
                    </div>                
                </div>

            <?php $count++; endwhile; endif; ?>
        </div>
    </section>

<?php endwhile; endif; ?>
