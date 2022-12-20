<?php
$title = get_field('banner_title','option');
$description = get_field('banner_description','option');
$banner_form_heading = get_field('banner_form_heading','option');
?>
<section class="hero-banner" data-name="Hero Banner" data-description="With Image, Form-Right">
    <div class="relative z-2">
        <div class="container">
            <div class="section-header">
                <h1 class="hero-title">
                    <?php echo do_shortcode($title); ?>
                </h1>
            </div>
            <div class="row flex-row flex-align-center flex-wrap-xs">
                <div class="col col-md-50">
                    <img width="500" height="500" src="<?php echo get_template_directory_uri()?>/themes/dark-green/assets/img/hero/hero-img-2.png" alt="<?php echo get_global_option('newofficial_funnel')?>">
                </div>
                <div class="col col-md-50">
                    <?php get_template_part('template-parts/form'); ?>
                </div>
            </div>
        </div>
    </div>
</section>



