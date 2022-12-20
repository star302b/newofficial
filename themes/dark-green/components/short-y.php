<?php
$short_y_title = get_field('short_y_title','option');
$short_y_description = get_field('short_y_description','option');

$image = get_field('background_image2','option') ? get_field('background_image2','option')  : get_template_directory_uri() . '/themes/purple-blue/assets/img/content/screens-3.png';
?>

<section class="content-section dark-section dark-section-gradient" data-name="Article" data-description="Right image">
    <div class="container">
        <div class="fow flex-row flex-align-center">
            <div class="col">
                <div class="typo-wrapper">
                    <h2><?php echo do_shortcode($short_y_title); ?></h2>
                    <p>
                        <?php echo do_shortcode($short_y_description); ?>
                    </p>
                </div>
                <div class="button-wrapper">
                    <a href="#registerpopup" class="button button-primary js--open-modal">
                        <?php _e('Register for Free','trust'); ?>
                    </a>
                </div>
            </div>
            <div class="col">
                <img src="<?php echo $image; ?>" alt="<?php echo do_shortcode($short_y_title); ?>">
            </div>
        </div>
    </div>
</section>