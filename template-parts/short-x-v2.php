<?php
$short_x_title = get_field('short_x_title','option');
$short_x_description = get_field('short_x_description','option');
?>
<section class="content-section light-section" data-name="Article" data-description="Right image">
    <div class="container">
        <div class="fow flex-row flex-align-center">
            <div class="col col-md-50">
                <div class="typo-wrapper">
                    <h2><?php echo do_shortcode($short_x_title); ?></h2>
                    <p>
                        <?php echo do_shortcode($short_x_description); ?>
                    </p>
                </div>
                <div class="button-wrapper">
                    <a href="#registerpopup" class="button button-primary js--open-modal"><?php _e('Register for Free','trust'); ?></a>
                </div>
            </div>
            <div class="col col-md-50">
                <img class="lazy" data-src="<?php if( empty( get_field('background_image4','option') ) ): echo IMAGE_URL; ?>imgm/content/pexels-worldspectrum-844124.jpeg<?php else: echo get_field('background_image4','option'); endif; ?>" alt="Start Growing Your Financial Portfolio Today">
            </div>
        </div>
    </div>
</section>