<?php
$title = get_field('banner_title','option');
$description = get_field('banner_description','option');
$banner_form_heading = get_field('banner_form_heading','option');
?>

<section class="lazy hero-banner" data-bg="<?php if( get_field('disable_background_image1','option') == false || empty( get_field('disable_background_image1','option') ) ): if( get_field('background_image1','option')): echo get_field('background_image1','option'); else: ?><?php echo IMAGE_URL; ?>imgm/hero/hero-bg-3.jpeg<?php endif; endif; ?>"  data-name="Hero Banner" data-description="With Video, Form-Right">
    <div class="relative z-2">
        <div class="container">
            <div class="section-header">
                <h1 class="hero-title"><?php echo do_shortcode($title); ?></h1>
                <p class="hero-description">
                    <?php echo do_shortcode($description); ?>
                </p>
            </div>
            <div class="row flex-row flex-align-center  flex-md-reverse">
                <div class="col col-md-40">
                    <?php get_template_part('./template-parts/form'); ?>
                </div>
                <div class="col col-md-60">
                    <div class="frame-wrapper">
                        <iframe class="lazy" loading="lazy" data-src="https://player.vimeo.com/video/319904948" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('./template-parts/safe'); ?>