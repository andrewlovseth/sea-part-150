<?php $photos = get_field('gallery'); if( $photos ): ?>

    <section class="gallery">
        <div class="grid">
            <div class="headline teal centered underline">
                <h3><?php the_field('gallery_headline'); ?></h3>
            </div>
        </div>

        <div class="photos">
            <div class="js-photo-slider">
                
                <?php foreach( $photos as $photo ): ?>
                    <div class="photo">
                        <div class="image">
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
                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php endif; ?>