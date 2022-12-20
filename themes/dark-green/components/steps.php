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
                                <i class="fas <?php echo $features[0]['icons'][0]; ?>"></i>
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
                                <i class="fas <?php echo $features[0]['icons'][1]; ?>"></i>
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
                                <i class="fas <?php echo $features[0]['icons'][2]; ?>"></i>
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
