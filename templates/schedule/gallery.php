<?php
    $schedule = get_page_by_path('schedule');
    $gallery = get_field('gallery', $schedule);
    if( $gallery ): 
    
?>

    <section class="gallery">
        <div class="gallery__grid">
            <?php foreach ($gallery as $image): ?>
                <div class="gallery__item">
                    <?php
                        // Get the total number of images in the gallery
                        $total_images = count($gallery);
                        // Find the current index (1-based)
                        $current_index = array_search($image, $gallery, true) + 1;
                        // Create aria label string
                        $aria_label = "Open photo {$current_index} of {$total_images} in gallery";
                    ?>
                    <a data-fslightbox="workshop-gallery"
                       href="<?php echo wp_get_attachment_image_url($image['ID'], 'full'); ?>"
                       aria-label="<?php echo esc_attr($aria_label); ?>">
                        <?php echo wp_get_attachment_image($image['ID'], 'large'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>  

<?php endif; ?>