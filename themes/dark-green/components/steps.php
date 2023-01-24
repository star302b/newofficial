<?php

$steps_title = get_field('steps_title', 'option');
$steps_description = get_field('steps_description', 'option');
$step_1_title = get_field('step_1_title', 'option');
$step_1_description = get_field('step_1_description', 'option');
$step_2_title = get_field('step_2_title', 'option');
$step_2_description = get_field('step_2_description', 'option');
$step_3_title = get_field('step_3_title', 'option');
$step_3_description = get_field('step_3_description', 'option');

$features = [
    [
        'bg' => '/assets/img/content/pexels-lukas-590016.jpg',
        'classes' => 'steps-section steps-section--variant-1 dark-section section-overlay section-overlay--variant-2',
        'icons' => ['fa-id-card','fa-wallet','fa-pray']
    ],
    [
        'bg' => '/assets/img/content/pexels-olya-kobruseva-8919570.jpg',
        'classes' => 'steps-section steps-section--variant-2 dark-section section-overlay',
        'icons' => ['fa-id-card','fa-wallet','fa-pray']
    ],
    [
        'bg' => '/assets/img/content/pexels-antoni-shkraba-5816296.jpg',
        'classes' => 'steps-section section-overlay section-overlay--variant-3 steps-section--variant-3 light-section',
        'icons' => ['fa-id-card','fa-wallet','fa-pray']
    ],
    [
        'bg' => '',
        'classes' => 'steps-section steps-section--variant-3 light-section',
        'icons' => ['fa-id-card','fa-wallet','fa-pray']
    ]
];
 ?>

    <section class="content-section steps-section steps-section--variant-1 dark-section dark-section-gradient">
        <div class="relative z-2">
            <div class="container">
                <div class="section-header">
                    <h2><?php echo do_shortcode($steps_title); ?></h2>
                    <p>
                        <?php echo do_shortcode($steps_description); ?>
                    </p>
                </div>
                <div class="row flex-row">
                    <div class="col col-md-30">
                        <div class="step-item">
                            <div class="step-title">
                                <i class="fas">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"/></svg>
                                </i>
                                <?php echo do_shortcode($step_1_title); ?>
                            </div>
                            <div class="step-body">
                                <?php echo do_shortcode($step_1_description); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-30">
                        <div class="step-item">
                            <div class="step-title">
                                <i class="fas">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"/></svg>                      
                                </i>
                                 <?php echo do_shortcode($step_2_title); ?>
                            </div>
                            <div class="step-body">
                                <?php echo do_shortcode($step_2_description); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-30">
                        <div class="step-item">
                            <div class="step-title">
                                <i class="fas">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 128c35.35 0 64-28.65 64-64S291.35 0 256 0s-64 28.65-64 64 28.65 64 64 64zm-30.63 169.75c14.06 16.72 39 19.09 55.97 5.22l88-72.02c17.09-13.98 19.59-39.19 5.62-56.28-13.97-17.11-39.19-19.59-56.31-5.62l-57.44 47-38.91-46.31c-15.44-18.39-39.22-27.92-64-25.33-24.19 2.48-45.25 16.27-56.37 36.92l-49.37 92.03c-23.4 43.64-8.69 96.37 34.19 123.75L131.56 432H40c-22.09 0-40 17.91-40 40s17.91 40 40 40h208c34.08 0 53.77-42.79 28.28-68.28L166.42 333.86l34.8-64.87 24.15 28.76z"/></svg>
                                </i>
                                <?php echo do_shortcode($step_3_title); ?>
                            </div>
                            <div class="step-body">
                                <?php echo do_shortcode($step_3_description); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrapper text-center">
                    <a href="#registerpopup" class="button button-primary js--open-modal"><?php _e('Register for Free','trust'); ?></a>
                </div>
            </div>
        </div>
    </section>
