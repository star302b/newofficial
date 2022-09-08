<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="canonical" href="<?php echo home_url(); ?>" />


    <!--Fonts Control-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <?php wp_head(); ?>


    <meta name="isoCode" content="<?php echo $_SERVER['HTTP_CF_IPCOUNTRY']; ?>">

    <?php if ( get_global_option('global_ga_id') ): ?>
    <!-- Global site tag (gtag.js) - Google Analytics --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_global_option('global_ga_id'); ?>"></script> 
    <script> 
    window.dataLayer = window.dataLayer || []; 
    function gtag(){dataLayer.push(arguments);} 
    gtag('js', new Date()); 
    
    gtag('config', '<?php echo get_global_option('global_ga_id'); ?>'); 
    </script>
    <?php endif; ?>

    <meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo do_shortcode( get_field('global_home_page_title','options') )?>" /> 
	<meta property="og:description" content="<?php echo do_shortcode( get_field('global_home_page_desc_main','options') )?>" /> 
	<meta property="og:url" content="<?php echo home_url( ); ?>" /> 
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="<?php echo get_global_option('newofficial_logo')?>" />
	<meta property="og:image:alt" content="<?php echo get_global_option('newofficial_funnel')?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?php echo home_url( ); ?>"/>
    <meta name="twitter:description" content="<?php echo do_shortcode( get_field('global_home_page_desc_main','options') )?>" />
    <meta name="twitter:title" content="<?php echo do_shortcode( get_field('global_home_page_title','options') )?>" /> 
    <meta name="twitter:image" content="<?php echo get_global_option('newofficial_logo')?>" />
    <meta name="twitter:image:alt" content="<?php echo get_global_option('newofficial_funnel')?>"/>

    <script type="application/ld+json">
        {
            "@type":"WebSite",
            "URL": "<?php echo home_url( ); ?>",
            "headline": "<?php echo do_shortcode( get_field('global_home_page_title','options') )?>", 
            "name": "<?php echo get_global_option('newofficial_funnel')?>",
            "image":"<?php echo get_global_option('newofficial_logo')?>",
            "description":"<?php echo do_shortcode( get_field('global_home_page_desc_main','options') )?>",
            "@context":"http://schema.org"
        }
</script>

<script type="application/ld+json">
{
"@context": "https://schema.org/", 
"@type": "Product", 
"name": "<?php echo get_global_option('newofficial_funnel')?>",
"image": "<?php echo get_global_option('newofficial_logo')?>",
"description": "<?php echo do_shortcode( get_field('global_home_page_desc_main','options') )?>", 
"brand": "<?php echo get_global_option('newofficial_funnel')?>",
"offers": {
"@type": "Offer",
"URL": "<?php echo home_url( ); ?>",
"priceCurrency": "EUR",
"price": "250",
"priceValidUntil": "<?php echo date("Y-m-t"); ?>",
"availability": "https://schema.org/OnlineOnly",
"itemCondition": "https://schema.org/NewCondition"
}
}
</script>

</head>
<body>
<?php if( get_global_option('global_show_top_line') ): ?>
<style>
.lock-line{
    overflow: hidden;
    background-color: #1fa508;
}
.lock-line .align-center{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size:14px;
    line-height: 16px;
}
@media screen and (max-width: 470px) {
    .lock-line .align-center{
        font-size: 10px;
        line-height: 12px;
    }
}
.lock-line .align-center p{
    margin: 7px 0;
}
</style>
<div class="lock-line">
    <div class="container">
        <div class="align-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="    height: 18px; margin-right:5px;"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"/></svg>
        <p> URL Verification: <?php echo home_url(); ?> - Official <?php echo get_global_option('newofficial_funnel')?></p>
        </div>
    </div>
</div>

<?php endif; ?>
<header class="site-header">
    <div class="container">
        <div class="flex-xs-row flex-justify-between flex-align-center">
            <div class="site-logo">
                <a href="<?php echo home_url(); ?>">
                <?php if(get_global_option('newofficial_logo')): ?>
                    <img width="385" height="53" src="<?php echo get_global_option('newofficial_logo')?>" alt="<?php echo get_global_option('newofficial_funnel')?>">
                <?php else: ?>
                    <?php echo get_global_option('newofficial_funnel')?>
                <?php endif; ?>
                </a>
            </div>
            <div class="header-right-block">
                <div class="site-menu inline-ul">
                    <?php if( is_front_page() ): ?>
                    <ul>
                        <li class="right-offset"><a href="#login" class="js--open-modal button button-light"><?php _e('Login','trust'); ?></a></li>
                        <li><a href="#registerpopup" class="js--open-modal button button-primary"><?php _e('Register','trust'); ?></a></li>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php 
                $languages = icl_get_languages('skip_missing=0&orderby=code');
                if( count($languages) > 1 ):
                ?>
                <div class="language">
                <span>
                    <img src="<?php echo IMAGE_URL; ?>img/flags/<?php echo ICL_LANGUAGE_CODE;?>.png" alt=""> <?php echo ICL_LANGUAGE_CODE == 'pt-pt' ? 'PT' : strtoupper(ICL_LANGUAGE_CODE); ?> <i class="iti__arrow"></i>
                </span>
                    <ul class="language-list">
                        <?php
                        
                        foreach ($languages as $l) :
                            ?>
                            <li>
                                <a href="<?php echo $l['url'] ?>" title="<?php echo $l['translated_name']; ?>" class="language-list__link">
                                    <img src="<?php echo $l['country_flag_url'] ; ?>"
                                         alt="<?php echo $l['translated_name']; ?>">
                                    <?php echo $l['code'] == 'pt-pt' ? 'PT' : strtoupper( $l['code'] );?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>