<?php header('Content-type: text/xml'); ?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    foreach ($languages as $l) :
        ?>
        <url>
            <loc><?php echo $l['url']; ?></loc>
            <lastmod><?php echo date('Y-m-d'); ?></lastmod>
        </url>
    <?php endforeach; ?>

    <?php
    foreach($languages as $l):
        global $sitepress;
        $sitepress->switch_lang($l['code']);
        $myPosts = get_posts(array(
            'posts_per_page'    =>  -1,
            'post_type' => 'post',
            'suppress_filters' => false
        ));
        foreach($myPosts as $myPost):
            ?>
            <url>
                <loc><?php echo get_permalink( $myPost ); ?></loc>
                <lastmod><?php echo get_the_date( 'Y-m-d', $myPost ); ?></lastmod>
            </url>
        <?php endforeach;
    endforeach;
    ?>

</urlset>