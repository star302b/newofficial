<?php
$features_title = get_field('features_title','option');
$features_description = get_field('features_description','option');

$features_features = get_field('features_features','option'); // title / description
?>
<section class="lazy content-section dark-section section-overlay" data-bg="<?php echo IMAGE_URL; ?>imgm/content/pexels-antoni-shkraba-5816296.jpeg" data-name="Features" data-description="Variant 3 (icon - 'fa-check-square')">
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
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 122.879 109.721" enable-background="new 0 0 122.879 109.721" xml:space="preserve"><g><path d="M31.989,55.49c-4.336-3.752-4.808-10.31-1.057-14.646c3.753-4.335,10.311-4.81,14.646-1.057l16.2,14.045l43.211-45.69 c3.933-4.156,10.49-4.338,14.647-0.408c4.156,3.932,4.34,10.49,0.408,14.646l-49.55,52.394l-0.173,0.197 c-3.751,4.336-10.309,4.809-14.644,1.059L31.989,55.49L31.989,55.49z M18.819,0h72.087h0.005v0.036h0.029L73.203,18.284H18.819 h-0.014V18.25c-0.104,0-0.234,0.075-0.354,0.195l-0.018-0.018l-0.018,0.018c-0.102,0.102-0.166,0.233-0.166,0.367h0.036v0.005 v72.087v0.012H18.25c0,0.104,0.077,0.234,0.197,0.355l-0.018,0.018l0.018,0.016c0.102,0.104,0.233,0.166,0.365,0.166v-0.033h0.007 h72.087h0.012v0.033c0.129,0,0.27-0.074,0.39-0.195c0.103-0.102,0.166-0.232,0.166-0.367h-0.034v-0.004V73.059l18.284-18.813 v36.658v0.004h-0.037c-0.002,5.184-2.117,9.893-5.521,13.293c-3.379,3.379-8.068,5.479-13.247,5.484v0.035h-0.012H18.819h-0.007 v-0.035c-5.175-0.004-9.874-2.111-13.275-5.506l-0.018,0.018c-3.379-3.379-5.477-8.08-5.483-13.281H0v-0.012V18.817v-0.005h0.036 c0.002-5.177,2.111-9.873,5.506-13.274L5.524,5.52c3.378-3.381,8.077-5.479,13.282-5.483V0H18.819L18.819,0z"/></g></svg>
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
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.879px" height="109.721px" viewBox="0 0 122.879 109.721" enable-background="new 0 0 122.879 109.721" xml:space="preserve"><g><path d="M31.989,55.49c-4.336-3.752-4.808-10.31-1.057-14.646c3.753-4.335,10.311-4.81,14.646-1.057l16.2,14.045l43.211-45.69 c3.933-4.156,10.49-4.338,14.647-0.408c4.156,3.932,4.34,10.49,0.408,14.646l-49.55,52.394l-0.173,0.197 c-3.751,4.336-10.309,4.809-14.644,1.059L31.989,55.49L31.989,55.49z M18.819,0h72.087h0.005v0.036h0.029L73.203,18.284H18.819 h-0.014V18.25c-0.104,0-0.234,0.075-0.354,0.195l-0.018-0.018l-0.018,0.018c-0.102,0.102-0.166,0.233-0.166,0.367h0.036v0.005 v72.087v0.012H18.25c0,0.104,0.077,0.234,0.197,0.355l-0.018,0.018l0.018,0.016c0.102,0.104,0.233,0.166,0.365,0.166v-0.033h0.007 h72.087h0.012v0.033c0.129,0,0.27-0.074,0.39-0.195c0.103-0.102,0.166-0.232,0.166-0.367h-0.034v-0.004V73.059l18.284-18.813 v36.658v0.004h-0.037c-0.002,5.184-2.117,9.893-5.521,13.293c-3.379,3.379-8.068,5.479-13.247,5.484v0.035h-0.012H18.819h-0.007 v-0.035c-5.175-0.004-9.874-2.111-13.275-5.506l-0.018,0.018c-3.379-3.379-5.477-8.08-5.483-13.281H0v-0.012V18.817v-0.005h0.036 c0.002-5.177,2.111-9.873,5.506-13.274L5.524,5.52c3.378-3.381,8.077-5.479,13.282-5.483V0H18.819L18.819,0z"/></g></svg>
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