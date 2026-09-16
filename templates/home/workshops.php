<?php

    $workshops = get_field('workshops');
    $headline = $workshops['headline'];
    $copy = $workshops['copy'];
    $events_heading = !empty($workshops['events_heading']) ? $workshops['events_heading'] : 'Workshops';

    if(have_rows('workshops_list')): 

?>

    <section class="workshops grid">
        <div class="info">
            <div class="headline blue underline">
                <h3><?php echo $headline; ?></h3>
            </div>

            <div class="copy p2">
                <?php echo $copy; ?>
            </div>
        </div>

        <div class="events">
            <div class="events__header">
                <h3><?php echo $events_heading; ?></h3>
            </div>

            <div class="events__list">
                <?php while(have_rows('workshops_list')) : the_row(); ?>

                    <?php if( get_row_layout() == 'event' ): ?>

                        <?php
                            $date = get_sub_field('date');
                            $time = get_sub_field('time');
                            $location = get_sub_field('location');
                            $location_url = get_sub_field('location_url');
                            $info = get_sub_field('info');
                        ?>

                        <div class="events__item">
                            <?php if($date): ?>
                                <div class="events__date | copy p4">
                                    <p><strong>Date:</strong> <?php echo $date; ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if($time): ?>
                                <div class="events__time | copy p4">
                                    <p><strong>Time:</strong> <?php echo $time; ?></p>
                                </div>  
                            <?php endif; ?>

                            <?php if($location): ?>
                                <div class="events__location | copy p4">
                                    <p>
                                        <strong>Location:</strong> 
                                        <?php if($location_url): ?>
                                            <a href="<?php echo $location_url; ?>" target="_blank"><?php echo $location; ?></a>
                                        <?php else: ?>
                                            <?php echo $location; ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php if($info): ?>
                                <div class="events__info | copy p4">
                                    <?php echo $info; ?>
                                </div>
                            <?php endif; ?>
                        </div>


                    <?php endif; ?>

                <?php endwhile; ?>
            </div>
        </div>
    </section>

<?php endif; ?>