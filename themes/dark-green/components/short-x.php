<?php
$short_x_title = get_field('short_x_title','option');
$short_x_description = get_field('short_x_description','option');
$image = get_field('background_image4','option') ? get_field('background_image4','option') : get_template_directory_uri() . '/themes/purple-blue/assets/img/content/screens-3.png';

?>

<section class="content-section dark-section" data-name="Article" data-description="Left image">
    <div class="container">
        <div class="fow flex-row flex-align-center flex-wrap-xs">

            <div class="col col-100">
                <div class="typo-wrapper">
                    <h2><?php echo do_shortcode($short_x_title); ?></h2>
                    <p>
                        <?php echo do_shortcode($short_x_description); ?>
                    </p>
                </div>
                <div class="button-wrapper">
                    <a href="#registerpopup" class="button button-primary js--open-modal">
                        <?php _e('Register for Free','trust'); ?>
                    </a>
                </div>
            </div>
            <div class="col col-100">
                <img src="<?php echo $image; ?>" alt="<?php echo do_shortcode($short_x_title); ?>">
            </div>
        </div>
    </div>
</section>
