<?php
$title = get_field('banner_title','option');
$description = get_field('banner_description','option');
$banner_form_heading = get_field('banner_form_heading','option');
?>

<section class="lazy hero-banner" data-bg="<?php if( get_field('background_image1','option')): echo get_field('background_image1','option'); else: ?><?php echo IMAGE_URL; ?>imgm/hero/hero-bg-2.jpeg<?php endif; ?>"  data-name="Hero Banner" data-description="With Image, Form-Right">
    <div class="relative z-2">
        <div class="container">
            <div class="section-header">
                <h1 class="hero-title"><?php echo do_shortcode($title); ?></h1>
                <p class="hero-description">
                    <?php echo do_shortcode($description); ?>
                </p>
            </div>
            <div class="row flex-row flex-align-center">
                <div class="col col-md-40">
                    <?php get_template_part('./template-parts/form'); ?>
                </div>
                <div class="col col-md-60">
                    <img width="500" height="500" class="lazy" data-src="<?php echo IMAGE_URL; ?>imgm/hero/hero-img-1.jpeg" alt="<?php echo get_global_option('newofficial_funnel')?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('./template-parts/safe'); ?>