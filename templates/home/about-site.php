<?php
	$banner = get_field('banner');
	$show = $banner['show'];
	$headline = $banner['headline'];
	$ctas = $banner['ctas'];


?>


<section class="about-site grid<?php if($show === TRUE): ?> has-banner<?php endif; ?>">
	<?php if($show === TRUE): ?>
		<div class="banner">
			<div class="banner-header">
				<h3><?php echo $headline; ?></h3>
			</div>

			<div class="banner-body">
				<?php foreach($ctas as $cta): ?>
					<?php 
						$link = $cta['link'];
						if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>

						<div class="cta">
							<a class="btn invert" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
						</div>

					<?php endif; ?>

				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="headline teal underline">
		<h4><?php the_field('about_site_headline'); ?></h4>
	</div>

	<div class="copy p1">
		<?php the_field('about_site_copy'); ?>
	</div>
</section>