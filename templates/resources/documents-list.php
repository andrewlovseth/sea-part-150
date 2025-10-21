<div class="documents-list">

    <?php
        $args = array(
            'post_type' => 'document',
            'posts_per_page' => 200
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php 
            $title = get_the_title();
            $description = get_field('description');
            $type = get_field('type');
            
            // Get the appropriate URL and file info based on type
            if ($type === 'url') {
                $link_url = get_field('url');
                $file_type = null;
                $file_size = null;
            } else {
                // Default to 'document' type
                $file = get_field('file');
                $link_url = $file['url'];
                $file_type = isset($file['subtype']) ? $file['subtype'] : null;
                $file_size = isset($file['filesize']) ? $file['filesize'] : null;
            }

            $terms = wp_get_object_terms($post->ID, 'group');
            $document_class = 'document';

            foreach($terms as $term) {               
                $document_class .= ' cat-' . $term->slug;
            }
        ?>

        <div class="<?php echo $document_class; ?>">
            <a href="<?php echo $link_url; ?>" target="window">
                <?php 
                    if ($type === 'url') {
                        get_template_part('template-parts/svg/link');
                    } else {
                        get_template_part('template-parts/svg/pdf');
                    }
                ?>

                <div class="info">
                    <div class="cat-header">
                        <h4>
                            <?php foreach($terms as $term): ?>
                               <span><?php echo $term->name; ?></span>
                            <?php endforeach; ?>
                        </h4>
                    </div>

                    <span class="title"><?php echo $title; ?></span>

                    <?php if($description): ?>
                        <div class="description copy p3 sans-serif">
                            <p><?php echo $description; ?></p>
                        </div>
                    <?php endif; ?>


                    <?php if($file_size): ?>    
                        <div class="meta copy p3 sans-serif">
                            <span class="file-size"><strong>File Size:</strong> <em><?php echo formatBytes($file_size, 2); ?></em></span>
                        </div>
                    <?php endif; ?>


                </div>
            </a>
        </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

</div>