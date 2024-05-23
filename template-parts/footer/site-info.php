<div class="site-info">
	<div class="logo">
		<a href="<?php echo site_url(); ?>">
			<img src="<?php $image = get_field('footer_logo', 'options'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</a>
	</div>

	<div class="project-info">
		<h1><?php the_field('project_name', 'options'); ?></h1>
		<h2><?php the_field('project_type', 'options'); ?></h2>
	</div>
</div>