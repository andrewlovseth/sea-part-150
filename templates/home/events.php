<?php

    $events = get_field('events');
    $headline = $events['headline'];
    $copy = $events['copy'];

if(have_rows('events')): while(have_rows('events')): the_row(); ?>

    <section class="events grid">
        <div class="info">
            <div class="headline teal underline">
                <h3><?php echo $headline; ?></h3>
            </div>

            <div class="copy p2">
                <?php echo $copy; ?>
            </div>
        </div>

        <div class="events__list">
            <?php if(have_rows('list')): $count = 1; while(have_rows('list')): the_row(); ?>

                <div class="event event-<?php echo $count; ?>">
                    <div class="date copy p3 sans-serif">
                        <?php echo get_sub_field('date'); ?>
                    </div>

                    <div class="description copy p3 sans-serif">
                        <?php echo get_sub_field('description'); ?>
                    </div>                
                </div>

            <?php $count++; endwhile; endif; ?>
        </div>
    </section>

<?php endwhile; endif; ?>
