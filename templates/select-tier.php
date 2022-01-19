<?php
/*
Template Name: Select Tier
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
if (is_plugin_active( 'elementor/elementor.php' )) {
    //Do something...
    \Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );
    get_header();
    get_template_part( 'template-parts/content-subheader' ); //sub Header
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
            ?>
           <!--  <?php get_template_part( 'template-parts/content-header' );?> -->

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <section class="pb-5 pt-5" style="padding-top: 40px !important; margin: 3rem 0 !important;">
                       <div class="container">
                          <div class="row">
                             <div class="col-sm-12">
                                <div class="section-title mb-5">
                                   <h2 class="title">Our Valued Collections</h2>
                                </div>
                             </div>
                          </div>
                          <div class="row justify-content-center">
                          <?php 
                            if( have_rows('our_valued_collections_repeater') ):
                                $i = 1;
                                $cls = array('', 'silver','gold','platinum', '', '');
                                // Loop through rows.
                                ?>
                                <?php 
                                while( have_rows('our_valued_collections_repeater') ) : the_row();
                                    // Load sub field value.
                                    $heading = get_sub_field('heading');
                                    $description = get_sub_field('description');
                                    $link = get_sub_field('link');
                                    $image = get_sub_field('image');
                                        ?>
                                        <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                                            <div class="tier-collection">
                                            <div class="tier-collection-box">
                                                <h5 class="tier-collection-title">Silver collection</h5>
                                                
                                                <?php
                                                if( isset($image) && ! empty($image)){  
                                                    ?>
                                                    <div class="tier-collection-icon">
                                                        <span><img src="<?= $image; ?>"></span>
                                                    </div>
                                                    <?php 
                                                }
                                                ?>
                                                <div class="tier-collection-content">
                                                    <p>Our Silver Collection features the K-Series line of cabinets, which are designed with a timeless, traditional door profile and versatile color palette to give any kitchen an updated, classic look.</p>
                                                    <div class="tier-collection-bottom">
                                                        <span>+ 150 items</span>
                                                        <a href="select-cabinets.html"><i class="fas fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tier-collection-bg tier-<?= $cls[$i]?>-collection"></div>
                                            </div>
                                        </div>
                                        <?php 
                                        // End if
                                    $i++;
                                // End loop.
                                endwhile;
                            // No value.
                            ?> 
                            <?php 
                            endif;
                        ?>
                            
                    </section>

          
                    

                    <?php
                    get_template_part( 'template-parts/content-footer' );
                endwhile;
            endif;
    get_footer();
}
?>