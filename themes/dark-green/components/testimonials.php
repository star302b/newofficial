<?php


$testimonials_title = get_field('testimonials_title', 'option');
$testimonials_description = get_field('testimonials_description', 'option');


$testimonials = [

    [
        'classes' => 'testimonials-section--variant-2',
        'hasSlider' => true
    ]
];

foreach ($testimonials as $c => $testimonial) :

    ?>

    <section class="content-section light-section testimonials-section <?php echo $testimonial['classes']; ?>" data-name="Testimonials" data-description="Variant <?php echo $c+1;?>">
        <div class="relative z-2">
            <div class="container">
                <div class="section-header">
                    <h2><?php echo do_shortcode($testimonials_title); ?></h2>
                    <p><?php echo do_shortcode($testimonials_description); ?></p>
                </div>

                <div class="row flex-row flex-wrap">
                    <?php if($testimonial['hasSlider']) : ?>
                        <div class="col">
                            <div class="js--slider">

                                <?php
                                $main_blog_id = get_current_blog_id();
                                $testimonials_source = get_field('testimonials_source','option') ?? 'global';


                                $reviews = get_posts(array(
                                    'numberposts' => 4,
                                    'post_type' => 'review',
                                    'post_parent' => 0,
                                    'orderby' => 'rand',
//        'orderby' => 'meta_value_num',
//        'meta_key' => 'top_review',
                                    'suppress_filters' => 0,
                                ));
                                $showed_reviews = 0;
                                if( count($reviews) ):
                                    ?>
                                    <?php foreach ($reviews as $review):
                                    $showed_reviews++;
                                    if($showed_reviews > 4){
                                        break;
                                    }
                                    $review_id = $review->ID;
                                    ?>
                                    <div class="testimonials-item">
                                        <div class="avatar">
                                            <!-- <div class="ci-avatar">JS</div>-->
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="324234">
                                        </div>
                                        <div class="content">
                                            <div class="heading">
                                                <h5><?php the_field('author',$review_id); ?></h5>
                                            </div>
                                            <?php
                                            $testimonials_date = date('M d, 2022',get_field('author_joined',$review_id));
                                            $not_hide_posts = [87,88,89,90,91,92,93];
                                            if(in_array($main_blog_id,$not_hide_posts)){
                                                $testimonials_date = trustRandomDate("1/01/2022",date('d/M/Y'));
                                            }
                                            ?>
                                            <div class="date"><?php _e('Joined on:','trust'); ?> <?php echo $testimonials_date;?></div>
                                            <div class="text">
                                                <h3><?php echo prepere_contente_review( get_the_title($review_id) , $main_blog_id ); ?></h3>
                                                "<?php echo prepere_contente_review($review->post_content, $main_blog_id); ?>"
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php endif;
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="button-wrapper text-center">
                    <a href="#registerpopup" class="button button-primary js--open-modal"><?php _e('Register for Free','trust'); ?></a>
                </div>
            </div>
        </div>
    </section>

<?php endforeach;