<?php

    $info = get_field('info');
    $copy = $info['copy'];
    $link = $info['link'];
    $banner_message = get_field('banner_message');
    $hide_button = get_field('hide_button');
    $intro = get_field('intro');

?>

<section class="info | grid">

	<?php if ($banner_message): ?>
		<div class="banner">
			<div class="banner__icon">
				<svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M26.497 19.6907L16.0031 1.46646C15.7409 1.01998 15.3665 0.649775 14.9171 0.392548C14.4678 0.13532 13.959 0 13.4412 0C12.9234 0 12.4145 0.13532 11.9652 0.392548C11.5158 0.649775 11.1414 1.01998 10.8792 1.46646L0.385284 19.6907C0.132969 20.1225 0 20.6137 0 21.1139C0 21.614 0.132969 22.1052 0.385284 22.5371C0.644157 22.9862 1.01788 23.3585 1.46811 23.6155C1.91833 23.8726 2.42884 24.0052 2.94726 23.9998H23.9351C24.4531 24.0048 24.9631 23.872 25.4128 23.6149C25.8626 23.3579 26.236 22.9859 26.4946 22.5371C26.7473 22.1054 26.8807 21.6144 26.8811 21.1142C26.8815 20.614 26.749 20.1228 26.497 19.6907ZM12.4812 9.59998C12.4812 9.34538 12.5823 9.1012 12.7623 8.92117C12.9424 8.74114 13.1865 8.63999 13.4412 8.63999C13.6958 8.63999 13.9399 8.74114 14.12 8.92117C14.3 9.1012 14.4011 9.34538 14.4011 9.59998V14.3999C14.4011 14.6545 14.3 14.8987 14.12 15.0788C13.9399 15.2588 13.6958 15.3599 13.4412 15.3599C13.1865 15.3599 12.9424 15.2588 12.7623 15.0788C12.5823 14.8987 12.4812 14.6545 12.4812 14.3999V9.59998ZM13.4412 20.1599C13.1564 20.1599 12.8779 20.0754 12.6411 19.9172C12.4043 19.759 12.2198 19.5341 12.1108 19.271C12.0018 19.0078 11.9733 18.7183 12.0288 18.439C12.0844 18.1596 12.2215 17.9031 12.4229 17.7017C12.6243 17.5003 12.8809 17.3631 13.1602 17.3076C13.4396 17.252 13.7291 17.2805 13.9922 17.3895C14.2553 17.4985 14.4802 17.6831 14.6385 17.9199C14.7967 18.1567 14.8811 18.4351 14.8811 18.7199C14.8811 19.1018 14.7294 19.4681 14.4594 19.7381C14.1893 20.0082 13.8231 20.1599 13.4412 20.1599Z" fill="black"/>
				</svg>
			</div>
			<p class="banner__copy"><?php echo esc_html($banner_message); ?></p>
		</div>

        
	<?php endif; ?>

	<?php get_template_part('template-parts/components/complaints'); ?>

    <?php if($hide_button == false): ?>
        <div class="info__details">
            <?php if ($copy): ?>
                <div class="copy p1">
                    <?php echo $copy; ?>
                </div>
            <?php endif; ?>

            <?php 
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>

                <div class="cta">
                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>

            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ($intro): ?>
        <div class="info__intro copy p1">
            <?php echo $intro; ?>
        </div>
    <?php endif; ?>

    <?php if (shortcode_exists('esa_comment_form')): ?>
        <div class="info__form">
            <?php echo do_shortcode('[esa_comment_form]'); ?>
        </div>
    <?php endif; ?>

</section>

