<section class="home-hero grid">

	<div class="photo">
		<img src="<?php $image = get_field('hero_image'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>
	
	<div class="project-info">

		<div class="headline">
			<h2><?php the_field('project_name', 'options'); ?></h2>
			<h1><?php the_field('project_type', 'options'); ?></h1>
		</div>
		
	</div>

</section>