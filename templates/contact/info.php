<?php

    $contact_info = get_field('contact_info');

    $copy = $contact_info['copy'];
    $email_label = $contact_info['email_label'];
    $email = $contact_info['email'];
    $phone_label = $contact_info['phone_label'];
    $phone = $contact_info['phone'];

?>

<section class="contact-info | grid">

	<?php get_template_part('template-parts/components/complaints'); ?>

    <div class="contact-info__details">
        <?php if ($copy): ?>
            <div class="copy p1">
                <?php echo $copy; ?>
            </div>
        <?php endif; ?>

        <?php if($email): ?>
            <div class="contact-info__item email">
                <h3><?php echo $email_label; ?></h3>
                <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            </div>
        <?php endif; ?>

        <?php if($phone): ?>
            <div class="contact-info__item phone">
                <h3><?php echo $phone_label; ?></h3>
                <p><?php echo $phone; ?></p>
            </div>
        <?php endif; ?>
    </div>

</section>