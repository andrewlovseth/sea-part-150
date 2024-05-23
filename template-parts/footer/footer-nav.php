<nav class="footer-nav">
	<h3>Site Navigation</h3>

	<div class="links">
		<?php if(have_rows('site_nav', 'options')): while(have_rows('site_nav', 'options')) : the_row(); ?>

			<?php if( get_row_layout() == 'basic_link' ): ?>

				<?php 
					$link = get_sub_field('link');
					if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				 ?>

				 		<div class="link">
				 			<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
				 		</div>

				<?php endif; ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'dropdown' ): ?>

	 			<?php if(have_rows('sub_nav')): while(have_rows('sub_nav')): the_row(); ?>
				 
			    	<?php 
						$link = get_sub_field('link');
						if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					 ?>

					 	<div class="link">
					 		<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
					 	</div>

					<?php endif; ?>

				<?php endwhile; endif; ?>

			<?php endif; ?>

		<?php endwhile; endif; ?>
		
		<?php 
			$link = get_field('get_involved_cta', 'options');
			if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
		 ?>

		 	<div class="link">
		 		<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
		 	</div>

		<?php endif; ?>
		
	</div>

</nav>