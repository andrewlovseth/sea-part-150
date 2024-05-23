<?php if(!is_page_template('templates/home.php')): ?>
	<section class="page-header grid">
		<h1><?php the_title(); ?></h1>
		<h2><?php echo get_field('project_name', 'options'); ?> <?php echo get_field('project_type', 'options'); ?></h2>
	</section>
<?php endif; ?>