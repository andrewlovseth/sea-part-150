<?php
    $schedule = get_page_by_path('schedule');
    $gallery = get_field('gallery', $schedule);
    if( $gallery ): 
    
?>

    <section class="gallery">
        <div class="gallery__grid">
            <?php foreach ($gallery as $image): ?>
                <div class="gallery__item">
                    <a data-fslightbox="workshop-gallery" href="<?php echo wp_get_attachment_image_url($image['ID'], 'full'); ?>">
                        <?php echo wp_get_attachment_image($image['ID'], 'large'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>  

<?php endif; ?>