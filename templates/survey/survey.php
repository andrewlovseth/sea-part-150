<?php
    $survey = get_field('survey');
    $show = $survey['show'];
    $code = $survey['code'];

    if($show == TRUE):
?>

    <section class="survey grid">
        <div class="survey-wrapper">
            <?php echo $code; ?>
        </div>
    </section>

<?php endif; ?>