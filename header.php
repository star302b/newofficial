<!doctype html>
<html <?php if ( get_bloginfo( 'language' ) == 'de-DE' ) { echo 'lang="de"'; } else { language_attributes(); } ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="canonical" href="<?php echo home_url(); ?>" />


    <!--Fonts Control-->
    

    <?php wp_head(); ?>


    <meta name="isoCode" content="<?php echo @$_SERVER['HTTP_CF_IPCOUNTRY']; ?>">

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

    <style>
    body{--wp--preset--color--black:#000000;--wp--preset--color--cyan-bluish-gray:#abb8c3;--wp--preset--color--white:#ffffff;--wp--preset--color--pale-pink:#f78da7;--wp--preset--color--vivid-red:#cf2e2e;--wp--preset--color--luminous-vivid-orange:#ff6900;--wp--preset--color--luminous-vivid-amber:#fcb900;--wp--preset--color--light-green-cyan:#7bdcb5;--wp--preset--color--vivid-green-cyan:#00d084;--wp--preset--color--pale-cyan-blue:#8ed1fc;--wp--preset--color--vivid-cyan-blue:#0693e3;--wp--preset--color--vivid-purple:#9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple:linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum:linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple:linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux:linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk:linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean:linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass:linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight:linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale:url('https://bitcode-method.com/#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale:url('https://bitcode-method.com/#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow:url('https://bitcode-method.com/#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red:url('https://bitcode-method.com/#wp-duotone-blue-red');--wp--preset--duotone--midnight:url('https://bitcode-method.com/#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow:url('https://bitcode-method.com/#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green:url('https://bitcode-method.com/#wp-duotone-purple-green');--wp--preset--duotone--blue-orange:url('https://bitcode-method.com/#wp-duotone-blue-orange');--wp--preset--font-size--small:13px;--wp--preset--font-size--medium:20px;--wp--preset--font-size--large:36px;--wp--preset--font-size--x-large:42px}body,html{margin:0;padding:0}*{box-sizing:border-box}div{margin:0;padding:0}button{border:none}img{max-width:100%;width:100%;height:auto}body{font-size:var(--text-size);font-weight:400;font-style:normal;line-height:1.4;color:var(--text-color-dark)}h1{font-weight:700;margin:.3em 0}h1{font-size:2em}p{margin-bottom:1em}ul{padding-left:1.3em}.container{max-width:100%;width:80em;margin:0 auto;padding:0 1em}.row{margin:0 -1em}.flex-xs-row{display:flex}.flex-align-center{align-items:center}.flex-justify-between{justify-content:space-between}.flex-justify-center{justify-content:center}.col{padding:0 1em;width:100%}@media screen and (min-width:767px){h1{font-size:2.5em}.flex-row{display:flex}.col-md-40{width:30%;width:40%}.col-md-60{width:60%}}.button{display:inline-block;font-size:1em;line-height:3em;white-space:nowrap;text-decoration:none;height:3em;padding-left:1em;padding-right:1em;box-shadow:var(--box-shadow);border-radius:.5em;background-color:var(--background-light);color:var(--text-color-dark)}.button-primary{background:var(--background-variant-1);color:var(--text-color-light)}.relative{position:relative}.z-2{z-index:2}.inline-ul{padding:0;margin:0}.inline-ul,.inline-ul li{display:inline-block}.right-offset{margin-right:10px}.section-header{text-align:center;margin-bottom:2em}.hidden{display:none!important}.text-center{text-align:center}.site-header{padding:.3em 0;box-shadow:var(--box-shadow);background-color:var(--site-header-bg);border-bottom:2px solid var(--background-variant-2)}@media screen and (min-width:767px){.right-offset{margin-right:15px}.site-header{padding:1em 0}}.site-logo{max-width:60%;line-height:0}.site-logo img{max-width:400px;max-height:50px;width:100%;height:100%}.site-menu{white-space:nowrap}.site-menu ul{padding:0;margin:0}@media screen and (max-width:767px){.site-menu{position:fixed;bottom:0;left:0;right:0;z-index:20;background:#fff;padding:.5em 1em}.site-menu ul{display:flex;align-items:center;justify-content:center}.site-menu ul li{width:50%}.site-menu ul .button{width:100%;text-align:center}}.header-right-block{display:flex;align-items:center}.language{position:relative;display:inline-flex;align-items:center;color:var(--text-color-dark);font-size:1em;z-index:22;align-self:center;margin-left:1em}.language img{margin-right:.6em;width:1.3em}.language span{display:flex;align-items:center;padding:.1em .3em;background:#fff;color:var(--text-color-dark)}.language span i{margin-left:.3em;vertical-align:middle;border-left:.1em solid transparent;border-right:.1em solid transparent;border-top:.2em solid var(--text-color-dark)}.language-list{list-style:none;padding:0 .2em;margin:0;position:absolute;top:100%;right:0;text-align:center;min-width:100%;display:none;background-color:#fff}.language-list li{margin-bottom:.2em}.language-list a{color:#333;display:flex}.language-list a{text-decoration:none}.hero-banner{padding:2em 0;color:var(--text-color-light);background-size:cover;background-position:50%;position:relative}.hero-banner:after{content:"";position:absolute;top:0;bottom:0;left:0;right:0;z-index:1;opacity:.95;background-color:var(--background-variant-2)}.hero-banner img{display:none}@media screen and (min-width:767px){.hero-banner{padding:4em 0}.hero-banner img{display:inline-block}}.hero-title{margin-top:0}.hero-description{font-size:1.5em}.sign-area{max-width:500px;width:100%;margin:0 auto 2em;padding:2em;border-radius:1em;position:relative;font-size:1em;background:var(--background-light);color:var(--text-color-dark)}.sign-area .form-title{font-size:1em;font-weight:700;color:var(--text-color-title);text-align:center}@media screen and (min-width:767px){.sign-area .form-title{font-size:1.5em}}.sign-area .form-title p{margin:0}.sign-area .form-error{display:block;background:#f40;border-radius:.5em;color:#fff;padding:.5em 1em}.sign-area .input-row{margin:.5em 0;position:relative}.sign-area label{display:block;margin-bottom:.3em;font-weight:700}.sign-area input{background:var(--background-light);border-radius:.5em;width:100%;height:2.5em;padding-left:1em}.sign-area button{border-radius:.5em;width:100%;height:2.5em;line-height:2.5em;text-transform:uppercase}.sign-area .ajax-loader-gif{width:2em;position:absolute;left:1em;top:0;bottom:0;display:flex;align-items:center;z-index:2}.sign-area .ajax-loader-gif img{max-height:1.5em;width:auto}.sign-area a{color:var(--text-color-title);font-weight:700}.safe-section{padding:2em}.safe-section img{max-height:5em;width:auto;max-width:30%;margin:0 1em}.acc-content{display:none}.acc-content>div{padding:1em 1em 0}.modal-box{position:fixed;top:0;bottom:0;left:0;right:0;display:flex;align-items:center;overflow-x:hidden;overflow-y:scroll;z-index:120}.modal-box:after{content:"";position:absolute;top:0;bottom:0;left:0;right:0;display:block;z-index:-1;background:#000;opacity:.8}.modal-inner{max-width:500px;width:100%;margin:auto;position:relative}.modal-inner .sign-area{padding-top:3em}.modal-inner .sign-area .form-title{font-size:1em}.modal-logo{max-width:90%;display:block;margin:0 auto 1em}.modal-safe{margin-top:1em}.modal-safe img{max-width:30%;width:auto;max-height:2.5em}.close-modal-button{position:absolute;top:1em;right:1em;z-index:10}.modal-box{visibility:hidden}.iti__arrow{margin-left:6px;width:0;height:0;border-left:3px solid transparent;border-right:3px solid transparent;border-top:4px solid #555}:root{--text-color-dark:#333333;--text-color-light:#ffffff;--text-color-title:#703ddb;--text-size:16px;--site-header-bg:#17173e;--background-light:#ffffff;--background-variant-1:#703ddb;--background-variant-2:#570777;--background-variant-3:#17173e;--box-shadow:0px 5px 20px 0px rgba(0, 0, 0, .3)}body{font-family:Roboto,sans-serif}
    </style>

    <meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo do_shortcode( get_field('global_home_page_title','options') )?>" /> 
	<meta property="og:description" content="<?php echo do_shortcode( get_field('global_home_page_desc_main','options') )?>" /> 
	<meta property="og:url" content="<?php echo home_url( ); ?>" /> 
	<meta property="og:site_name" content="<?php echo get_global_option('newofficial_funnel')?>" />
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
            "author": {
                "@type": "Person",
                "name": "<?php echo get_global_option('newofficial_funnel')?>"
            },
            "publisher": {
                "@type": "Organization",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo get_global_option('newofficial_logo')?>"
                },
                "name": "<?php echo get_global_option('newofficial_funnel')?>"
            },
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
<?php
$theme_version = get_field('theme_variant','option');
if( $theme_version != 'v5' && $theme_version != 'v6' ):
?>
    <style>
        .el-fixed .ticker-section,
        .js--tickers-section{
            max-height:50px;
        }
    </style>
<?php else: ?>
    <style>
        .el-fixed .ticker-section,
        .js--tickers-section{
            max-height:72px;
        }
    </style>
<?php endif; ?>
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
                    <img src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/<?php echo ICL_LANGUAGE_CODE;?>.png" alt="<?php echo ICL_LANGUAGE_CODE;?>"> <?php echo ICL_LANGUAGE_CODE == 'pt-pt' ? 'PT' : strtoupper(ICL_LANGUAGE_CODE); ?> <i class="iti__arrow"></i>
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