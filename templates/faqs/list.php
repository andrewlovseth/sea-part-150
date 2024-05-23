<?php if(have_rows('list')): ?>

    <section class="list | grid">

        <?php while(have_rows('list')) : the_row(); ?>

            <?php if( get_row_layout() == 'faq' ): ?>

                <?php

                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');

                ?>

                <div class="faq">
                    <div class="faq__question">
                        <h3>
                            <span><?php echo $question; ?></span>
                            <svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0624 11.0805C11.7807 11.3621 11.3986 11.5203 11.0003 11.5203C10.602 11.5203 10.22 11.3621 9.93828 11.0805L1.44045 2.58268C1.29698 2.44411 1.18254 2.27835 1.10381 2.09508C1.02509 1.91181 0.983647 1.71469 0.981914 1.51523C0.980181 1.31577 1.01819 1.11797 1.09372 0.933355C1.16925 0.748743 1.28079 0.581021 1.42184 0.439978C1.56288 0.298934 1.7306 0.187393 1.91521 0.111862C2.09982 0.0363308 2.29763 -0.00167652 2.49709 5.67178e-05C2.69655 0.00178996 2.89366 0.0432295 3.07693 0.121957C3.26021 0.200685 3.42596 0.315124 3.56453 0.458597L11.0003 7.89438L18.4361 0.458597C18.7194 0.184963 19.0989 0.0335519 19.4927 0.0369745C19.8866 0.0403971 20.2634 0.198379 20.5419 0.476895C20.8204 0.755411 20.9784 1.13218 20.9818 1.52604C20.9852 1.91991 20.8338 2.29936 20.5602 2.58268L12.0624 11.0805Z" fill="black"/>
</svg>

                        </h3>
                    </div>

                    <div class="faq__answer | copy p2">
                        <?php echo $answer; ?>
                    </div>
                </div>

            <?php endif; ?>

        <?php endwhile; ?>

    </section>

<?php endif; ?>