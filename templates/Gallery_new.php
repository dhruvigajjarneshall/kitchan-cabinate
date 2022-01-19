<?php
/*
Template Name: Gallery
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
if (is_plugin_active( 'elementor/elementor.php' )) {
    //Do something...
    \Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );
    get_header();?>
            <?php 
            /**
             * Before Header-Footer page template content.
             *
             * Fires before the content of Elementor Header-Footer page template.
             *
             * @since 2.0.0
             */
            do_action( 'elementor/page_templates/header-footer/before_content' );
            \Elementor\Plugin::$instance->modules_manager->get_modules( 'page-templates' )->print_content();
            /**
             * After Header-Footer page template content.
             *
             * Fires after the content of Elementor Header-Footer page template.
             *
             * @since 2.0.0
             */
            do_action( 'elementor/page_templates/header-footer/after_content' );
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            $image = get_field('image');
                if( isset($image) && ! empty($image)){  ?>
                    <section style="padding-top: 200px !important; ">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-12">
                                    <div class="gallery-banner">
                                        <img class="img-fluid" src="<?php echo $image; ?>">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                    
                    // End if
                }
            ?>
            <section class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-lg-4">
                            <div class="gallery-sidebar">
                                <?php
                                $logo = get_field("logo");
                                if(isset($logo)&& ! empty($logo)) {
                                    ?>
                                    <div class="sidebar-logo">
                                        <img src="<?php echo $logo; ?>">
                                    </div>
                                    <?php    
                                }
                                ?>
                                <?php
                                $section_2_heading_ = get_field("section_2_heading_");
                                if(isset($section_2_heading_)&& ! empty($section_2_heading_)) {
                                    ?>
                                    <h6 class="text-center text-dark"><?php echo $section_2_heading_; ?></h6>
                                    <?php    
                                } else {
                                    ?>
                                    <h6 class="text-center text-dark">ANTHONY (AMP) JOHNSON</h6>
                                    <?php
                                }
                                ?>
                                <div class="text-end">OWNER</div>

                               
                                <div class="sidebar-contact-info">
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/map-icon.svg"><span>
                                        www.jcinstallation.com
                                        </span></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/mail-icon.svg"><span>
                                            <?php
                                        $section_3_email = get_field("section_3_email");
                                        if(isset($section_3_email)&& ! empty($section_3_email)) {
                                            ?>
                                            <?php echo $section_3_email; ?>
                                            <?php    
                                        } else {
                                            ?>
                                            neshallweb@gmail.com
                                            <?php
                                        }
                                        ?>
                                        </span></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/call-icon.svg"><span>850-459-1273</span></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/location-icon.svg"><span>
                                            <?php
                                        $section_5_address_ = get_field("section_5_address_");
                                        if(isset($section_5_address_)&& ! empty($section_5_address_)) {
                                            ?>
                                            <?php echo $section_5_address_; ?>
                                            <?php    
                                        } else {
                                            ?>
                                            1560, Capital circle, NW Suit 18 Tallahassee, FL 32303
                                            <?php
                                        }
                                        ?>
                                        </span></li>
                                    </ul>
                                </div>
                                <?php
                                $working_section = get_field("working_section");
                                if(isset($working_section)&& ! empty($working_section)) {
                                    ?>
                                    <?php echo $working_section; ?>
                                    <?php    
                                } else {
                                    ?>                                    
                                    <div class="sidebar-working-hours">
                                        <h6>Working hour</h6>
                                        <div class="full-week">
                                            <span>Mon-Fri</span>
                                            <label>08:00 am – 05:30 pm</label>
                                        </div>
                                        <div class="week-off">
                                            <span>Sat-Sun</span>
                                            <label class="close">Closed</label>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="botton-block">
                                    <a class="btn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/dollar-icon.svg">Get a quote</a>
                                    <a class="btn btn-dark" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/dollar-icon.svg">Get a quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-lg-8">
                            <div class="gallery-image">
                                <div class="filters-group mb-lg-4">
                                <button class="btn-filter text-dark active" data-group="recently">Recently Added</button>
                                <button class="btn-filter text-dark" data-group="bookmark">Bookmark</button>
                                <button class="btn-filter text-dark" data-group="all">All Photos</button>
                                </div>
                                <div class="my-shuffle-container columns-3 popup-gallery full-screen shuffle" style="position: relative; overflow: hidden; height: 828.075px; transition: height 700ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                                      <?php 
                                                if( have_rows('gallery_images') ):
                                                    $i = 1;
                                                    // Loop through rows.
                                                    while( have_rows('gallery_images') ) : the_row();

                                                        // Load sub field value.
                                                        $image = get_sub_field('image');
                                                        $cabinet_name = get_sub_field('cabinet_name');
                                                        $cabinet_category = get_sub_field('cabinet_category');


                                                        if( isset($image) && ! empty($image)  ){  
                                                            $bk = get_sub_field("bookmark");
                                                            ?>
                                                             <div class="grid-item shuffle-item shuffle-item--visible" data-groups="[&quot;<?= $bk; ?>&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 700ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                                                <div class="gallery-items">
                                                                    <div class="gallery-img">
                                                                        <img class="img-fluid" src="<?php echo $image; ?>" alt="">
                                                                        <div class="gallery-overlap-content">
                                                                            <h6>Cabinet <?= $cabinet_name; ?></h6>
                                                                            <span>Catagory : <?= $cabinet_category; ?></span>
                                                                            <div class="bookmark-icon"><i class="far fa-bookmark"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                     $i++;
                                                        }
                                                    // End loop.
                                                    endwhile;
                                                // No value.
                                                endif;
                                            ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              

              <!-- <section class="pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="contact-form">
                                    <div class="row align-items-end">
                                        <?php echo do_shortcode('[contact-form-7 id="217836" title="Free Design Form" html_class="row"]')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </section>
 -->
            <?php
            get_template_part( 'template-parts/content-footer' );
        endwhile;
endif;
    get_footer();
}
?>