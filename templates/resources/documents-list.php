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
            $file = get_field('file');
            $file_type = $file['subtype'];
            $file_size = $file['filesize'];
            $date_obj = DateTime::createFromFormat('Y-m-d H:i:s', $file['modified']);
            $date = $date_obj->format('m/d/Y');

            $terms = wp_get_object_terms($post->ID, 'group');
            $document_class = 'document';

            foreach($terms as $term) {               
                $document_class .= ' cat-' . $term->slug;
            }
        ?>

        <div class="<?php echo $document_class; ?>">
            <a href="<?php echo $file['url']; ?>" target="window">
                <?php get_template_part('template-parts/svg/pdf'); ?>

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

                    <div class="meta copy p3 sans-serif">
                        <?php if($file_size): ?>             
                            <span class="file-size"><strong>File Size:</strong> <em><?php echo formatBytes($file_size, 2); ?></em></span>
                        <?php endif; ?>
                    </div>


                </div>
            </a>
        </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

</div>