<?php
$theme_version = get_field('theme_variant','option');

get_header(); ?>

<?php
if( $theme_version == 'v5' ) {
    include 'themes/dark-green/index.php';
} elseif ( $theme_version == 'v6' ) {
    include 'themes/purple-blue/index.php';
} else {
$blocks_ordering = array(
        'v1' => array(
            'banner-v1',
            'short-x-v2',
            'features-v1',
            'steps-v1',
            'testimonials-v1',
            'trust',
            'body',
            'faq-v1',
            'short-y-v1',
        ),
        'v2' => array(
            'banner-v2',
            'steps-v1',
            'short-x-v1',
            'trust',
            'testimonials-v2',
            'features-v2',
            'short-y-v2',
            'faq-v1',
            'body',
        ),
        'v3' => array(
            'banner-v3',
            'features-v3',
            'trust',
            'short-x-v2',
            'body',
            'steps-v3',
            'testimonials-v3',
            'short-y-v1',
            'faq-v1',
        ),
        'v4' => array(
            'banner-v1',
            'short-x-v1',
            'testimonials-v1',
            'trust',
            'steps-v4',
            'features-v4',
            'body',
            'faq-v1',
            'short-y-v2',
        )
);


?>
<main class="site-wrapper">
<?php //get_template_part('template-parts/tickers'); ?>
<?php 
// if (!$site_all_content = get_transient('site_all_content_6_' . $theme_version . '_' . ICL_LANGUAGE_CODE)):
    // ob_start();
foreach ( $blocks_ordering[$theme_version] as $section): 
?>
    <?php get_template_part('template-parts/' . $section); ?>
<?php endforeach; ?>
<?php get_template_part('template-parts/table'); 
// $site_all_content = ob_get_clean();
// set_transient( 'site_all_content_6_' . $theme_version . '_' . ICL_LANGUAGE_CODE, $site_all_content, 60 * 60 * 60 );
// endif;
// echo $site_all_content;
?>
</main>
<?php
}
get_footer(); ?>
