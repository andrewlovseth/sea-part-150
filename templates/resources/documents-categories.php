<?php
    $all_posts_count = wp_count_posts('document')->publish;
    $taxonomy = 'group';
    $terms = get_terms($taxonomy, array(
        'hide_empty' => true,
    ));
?>

<div class="documents-categories">
    <div class="wrapper">
        <div class="header">
            <h3>Filter by Category</h3>
        </div>

        <ul>
            <li>
                <a href="#" class="js-documents-filter-link" data-cat="*">All Documents (<?php echo $all_posts_count; ?>)</a>
            </li>

            <?php if ($terms): ?>
                <?php foreach ($terms as $term): ?>
                    
                    <li>
                        <a href="#" class="js-documents-filter-link" data-cat=".cat-<?php echo $term->slug; ?>"><?php echo $term->name; ?> (<?php echo $term->count; ?>)</a>
                    </li>
                <?php endforeach; ?>

            <?php endif;?>
        </ul>
    </div>
</div>