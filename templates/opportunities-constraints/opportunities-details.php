<?php if(have_rows('opportunities_details')): while(have_rows('opportunities_details')) : the_row(); ?>

    <?php if( get_row_layout() == 'detail' ): ?>

        <div class="detail">
            <div class="map">
                <?php $image = get_sub_field('map'); if( $image ): ?>
                    <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
                <?php endif; ?>
            </div>

            <div class="info">
                <div class="headline teal underline">
                    <h4><?php echo get_sub_field('headline'); ?></h4>
                </div>
                <?php if(have_rows('items')): while(have_rows('items')): the_row(); ?>    
                    <div class="item">
                        <div class="label">
                            <span><?php echo get_sub_field('label'); ?></span>
                        </div>

                        <div class="description copy p3 sans-serif">
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>			
        </div>
    <?php endif; ?>

<?php endwhile; endif; ?>