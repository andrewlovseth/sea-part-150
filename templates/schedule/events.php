<?php
    $schedule = get_page_by_path('schedule');

    $headline = get_field('events_headline', $schedule);
    $copy = get_field('events_copy', $schedule);

?>

    <section class="events | grid">

        <?php if ($headline): ?>
            <div class="headline blue underline">
                <h2><?php echo $headline; ?></h2>            
            </div>
        <?php endif; ?>

        <?php if ($copy): ?>
            <div class="copy p1">
                <?php echo $copy; ?>
            </div>
        <?php endif; ?>


        <?php if(have_rows('list', $schedule)): ?>

            <div class="events-list">

                <?php while(have_rows('list', $schedule)) : the_row(); ?>

                    <?php if( get_row_layout() == 'event' ): ?>

                        <?php

                            $date_string = get_sub_field( 'date' );
                            $date = DateTime::createFromFormat( 'Ymd', $date_string );

                            $time = get_sub_field('time');
                            $location = get_sub_field('location');
                            $address = get_sub_field('address');
                            $maps_link = get_sub_field('maps_link');
                        ?>

                        <div class="events-list__item">
                            <div class="events-list__date">
                                <div class="events-list__month">
                                    <?php echo $date->format('M'); ?>
                                </div>

                                <div class="events-list__day">
                                    <?php echo $date->format('d'); ?>
                                </div>

                            </div>

                            <div class="events-list__info | copy p3 sans-serif">
                                <div class="date-time">
                                    <?php echo $date->format('l, F j, Y'); ?>, <?php echo $time; ?>
                                </div>

                                <div class="location">                                    
                                    <?php echo $location; ?><br/>
                                    <a href="<?php echo $maps_link; ?>" target="blank"><?php echo $address; ?></a>
                                    
                                    
                                </div>
                            </div>

  
                        </div>
                
                    <?php endif; ?>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>


    </section>

