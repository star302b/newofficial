<?php
$features_title = get_field('features_title','option');
$features_description = get_field('features_description','option');

$features_features = get_field('features_features','option'); // title / description
?>
<section class="lazy content-section dark-section section-overlay" data-bg="<?php if( get_field('disable_background_image6','option') == false || empty( get_field('disable_background_image6','option') ) ): echo IMAGE_URL; ?>imgm/content/pexels-scott-webb-27406.jpeg<?php endif; ?>" data-name="Features" data-description="Variant 4 (icon - 'fa-angle-double-right')">
    <div class="relative z-2">
        <div class="container">
            <div class="section-header">
                <h2><?php echo do_shortcode($features_title); ?></h2>
                <p>
                    <?php echo do_shortcode($features_description); ?>
                </p>
            </div>
            <div class="fow flex-row">
                <div class="col col-md-50">
                    <div class="awesome-list">
                        <ul>
                            <?php foreach ($features_features as $iter => $single_feature):
                                if($iter >= 3){
                                    break;
                                }
                                ?>
                                <li>
                                    <i class="fas fa-angle-double-right"></i>
                                    <?php echo do_shortcode($single_feature['description'])?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-50">
                    <div class="awesome-list">
                        <ul>
                            <?php foreach ($features_features as $iter => $single_feature):
                                if($iter < 3){
                                    continue;
                                }
                                ?>
                                <li>
                                    <i class="fas fa-angle-double-right"></i>
                                    <?php echo do_shortcode($single_feature['description'])?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>