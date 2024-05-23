<section class="concepts">

<?php if(have_rows('concepts')): while(have_rows('concepts')) : the_row(); ?>

	<?php if( get_row_layout() == 'concept' ): ?>

        <?php
            $headline = get_sub_field('headline');
            $slug = sanitize_title_with_dashes($headline);
            $copy = get_sub_field('copy');
            $graphic = get_sub_field('graphic');
            $file = get_sub_field('file');            
        ?>

		<div class="concept grid <?php echo $slug; ?>">
            <div class="concept-header">
                <div class="headline teal">
                    <h3>
                        <a href="<?php echo $file['url']; ?>" target="window"><?php echo $headline; ?></a>
                    </h3>
                </div>

                <div class="cta">
                    <a href="<?php echo $file['url']; ?>" class="underline" target="window">Download and Print PDF</a>
                </div>
            </div>

            <div class="graphic">
                <a href="<?php echo $file['url']; ?>" target="window">
                    <?php echo wp_get_attachment_image($graphic['ID'], 'full'); ?>
                </a>
            </div>			
		
            <div class="concept-body copy p2">
                <?php echo $copy; ?>
            </div>
        
        </div>

	<?php endif; ?>

<?php endwhile; endif; ?>


</section>