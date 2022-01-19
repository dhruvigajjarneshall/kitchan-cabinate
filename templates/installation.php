<?php
/*
Template Name: Installation
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
if (is_plugin_active( 'elementor/elementor.php' )) {
    //Do something...
    \Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );
    get_header();
    get_template_part( 'template-parts/content-header' ); //sub Header
    ?>
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
            ?>
            <section class="pb-5 banner-img-block" style="margin-top: 40px;">
                <div class="container">
                    <div class="row">
                        <?php 
                            if( have_rows('section_1_image') ):
                                $i = 1;
                                // Loop through rows.
                                ?>
                                <?php 
                                while( have_rows('section_1_image') ) : the_row();
                                    // Load sub field value.
                                    $image = get_sub_field('section_1_image');
                                    if( isset($image) && ! empty($image)){  
                                        if( $i == 1){ ?>
                                            <div class="col-md-7">
                                                <div class="banner-img-block">
                                                    <img class="w-100" src="<?php echo $image; ?>">
                                                </div>
                                            </div>
                                        <?php
                                        }else if ( $i == 2){ ?>
                                            <div class="col-md-5">
                                                <div class="banner-img-block mb-4">
                                                    <img class="w-100" src="<?php echo $image; ?>">
                                                </div>
                                        <?php
                                        }else{
                                            ?>
                                                <div class="banner-img-block">
                                                    <img class="w-100" src="<?php echo $image; ?>">
                                                </div>
                                            </div>
                                    <?php
                                        } 
                                        // End if
                                    }
                                    $i++;
                                // End loop.
                                endwhile;
                            // No value.
                            ?> 
                            <?php 
                            endif;
                        ?>     
                    </div>
                </div>
            </section>
            <section class="pb-5">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-4">
                        <?php 
                            $section_1_heading = get_field( "section_1_heading" ); 
                            if( isset( $section_1_heading ) && ! empty($section_1_heading) ) {
                                echo $section_1_heading;
                            }
                        ?>
                        </h3>
                        <h5 class="text-gray fw-normal">
                            <?php 
                            $section_1_description = get_field( "section_1_description" ); 
                            if( isset( $section_1_description ) && ! empty($section_1_description) ) {
                                echo $section_1_description;
                            }
                        ?></h5>
                    </div>
                </div>
                </div>
            </section>
            <section class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-5">
                                <h2 class="title"> <?php 
                                        $section_2_heading = get_field( "section_2_heading" ); 
                                        if( isset( $section_2_heading ) && ! empty($section_2_heading) ) {
                                            echo $section_2_heading;
                                        }
                                    ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php 
                                if( have_rows('secation_2_repeater') ):
                                    $i = 1;
                                    // Loop through rows.
                                    while( have_rows('secation_2_repeater') ) : the_row();
                                        // Load sub field value.
                                        $title = get_sub_field('section_2_title');
                                        $icon = get_sub_field('section_2_icon');
                                        $description = get_sub_field('section_2_description');
                                        if( isset($title) && ! empty($title) && isset($description) && ! empty($description) && isset($icon) && ! empty($icon) ){   
                                            ?>
                                        <div class="col-xl-3 col-md-4 mb-4 mb-md-0">
                                                    <div class="feature-info step-0<?= $i++; ?>">
                                                        <h5 class="feature-info-title"><?php echo $title; ?></h5>
                                                        <div class="feature-info-icon">
                                                            <span><img src="<?php echo $icon; ?>"></span>
                                                        </div>
                                                        <div class="feature-info-content">
                                                            <p class="mb-0"><?php echo $description; ?></p>
                                                        </div>
                                                    </div>
                                            </div>
                                            <?php
                                        }
                                    // End loop.
                                    endwhile;
                                // No value.
                                endif;
                            ?>
                    </div>
                </div>
            </section>
              <section class="pb-5">
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title mb-5">
                                <h2 class="title"> <?php 
                                        $section_4_how_it_works_title = get_field( "section_4_how_it_works_title" ); 
                                        if( isset( $section_4_how_it_works_title ) && ! empty($section_4_how_it_works_title) ) {
                                            echo $section_4_how_it_works_title;
                                        }
                                    ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php 
                                if( have_rows('section_4_work_repeater') ):
                                    $i = 1;
                                    // Loop through rows.
                                    while( have_rows('section_4_work_repeater') ) : the_row();
                                        // Load sub field value.
                                        $title = get_sub_field('title');
                                        $icon = get_sub_field('icon');
                                        $description = get_sub_field('description');
                                        if( isset($title) && ! empty($title) && isset($description) && ! empty($description) && isset($icon) && ! empty($icon) ){   
                                            ?>
                                        <div class="col-xl-3 col-md-4 mb-4 mb-md-0">
                                                    <div class="feature-info step-0<?= $i++; ?>">
                                                        <h5 class="feature-info-title"><?php echo $title; ?></h5>
                                                        <div class="feature-info-icon">
                                                            <span><img src="<?php echo $icon; ?>"></span>
                                                        </div>
                                                        <div class="feature-info-content">
                                                            <p class="mb-0"><?php echo $description; ?></p>
                                                        </div>
                                                    </div>
                                            </div>
                                            <?php
                                        }
                                    // End loop.
                                    endwhile;
                                // No value.
                                endif;
                            ?>
                    </div>
                </div>
            </section>

              <section class="pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="contact-form">
                                    <div class="row align-items-end">
                                        <?php echo do_shortcode('[contact-form-7 id="217837" title="Installation" html_class="row"]')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </section>

            <?php
            get_template_part( 'template-parts/content-footer' );
        endwhile;
endif;
    get_footer();
}
?>