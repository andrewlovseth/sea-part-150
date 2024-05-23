<?php

    $timeline = get_field('timeline');
    $headline = $timeline['headline'];
    $copy = $timeline['copy'];

    if(have_rows('timeline')): while(have_rows('timeline')): the_row();

?>

    <section class="timeline | grid">

        <?php if ($headline): ?>
            <div class="headline blue underline">
                <h2><?php echo $headline; ?></h2>            
            </div>
        <?php endif; ?>

        <?php if ($copy): ?>
            <div class="main-copy | copy p1">
                <?php echo $copy; ?>
            </div>
        <?php endif; ?>


        <?php if(have_rows('list')): ?>

            <div class="timeline__list">

                <?php while(have_rows('list')) : the_row(); ?>

                    <?php if( get_row_layout() == 'timeline_item' ): ?>

                        <?php

                            $date = get_sub_field('date');
                            $description = get_sub_field('description');
                        ?>

                        <div class="timeline__item-wrapper">
                            <div class="timeline__item">
                                <h3><?php echo $date; ?></h3>

                                <div class="copy p3 sans-serif">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                            <div class="spacer"></div>
                        </div>

                
                    <?php endif; ?>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>


    </section>

<?php endwhile; endif; ?>