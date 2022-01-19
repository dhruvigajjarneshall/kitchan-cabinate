<?php

/*

Template Name: Contact us

*/

if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



if (is_plugin_active( 'elementor/elementor.php' )) {

	//Do something...

	\Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );



	get_header();?>

			 <section style="padding-top: 200px !important; ">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="col-xl-10">
		                	<?php 

	                           	$section_bg_image = get_field( "section1_background_image", get_the_ID() ); 

	                           	if( ! isset( $section_bg_image ) || empty($section_bg_image) ) {

	                           		$section_bg_image = '';

	                           	}

	                           	$section1_heading = get_field( "section1_heading", get_the_ID() ); 

	                           	if( ! isset( $section1_heading ) || empty($section1_heading) ) {

	                           		$section1_heading = '';

	                           	}

	                           	$section1_sub_heading = get_field( "section1_sub_heading", get_the_ID() ); 

	                           	if( ! isset( $section1_sub_heading ) || empty($section1_sub_heading) ) {

	                           		$section1_sub_heading = '';

	                           	}

							?>
		                    <div class="inner-banner" style="background: url(<?php echo $section_bg_image ;?>) no-repeat; background-position: center center; background-size: cover;">
		                        <div class="inner-banner-content">
		                            <h1><?php echo $section1_heading  ?></h1>
		                            <p class="mb-0"><?php echo $section1_sub_heading; ?></p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
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
			
			<section class="pb-5 mb-lg-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12">
		                    <div class="section-title">
		                        <h2 class="title"><?php 	echo $section_3_heading = get_field( "section_3_heading" ); ?></h2>
		                        <p class="mb-0"><?php 	echo  	$section_3_sub_heading = get_field( "section_3_sub_heading" );  ?></p>
		                    </div>
		                </div>
		            </div>
		             <div class="row">
		                <div class="col-lg-12">
		                    <div class="contact-details">
		                        <div class="contact-info">
		                            <?php echo $section_3_description_heading = get_field( "section_3_description_heading" ); ?>
		                            <?php echo $section_3_description_data = get_field( "section_3_description_data" ); ?>		                            
		                        </div>
		                        <div class="working-hours">
		                            <h2><?php echo $section_3_working_hour = get_field( "section_3_working_hour" ); ?></h2>
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <span>Mon</span>
		                                <label><?php echo $section_3_monday_start = get_field( "section_3_monday_start" ); ?> – <?php echo $section_3_monday_end = get_field( "section_3_monday_end" ); ?></label>
		                            </div>
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <span>Tue</span>
		                                  <label><?php echo $section_3_tuesday_start = get_field( "section_3_tuesday_start" ); ?> – <?php echo $section_3_monday_end = get_field( "section_3_monday_end" ); ?></label>
		                            </div>
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <span>Wed</span>
		                                 <label><?php echo $section_3_wednesday_start = get_field( "section_3_wednesday_start" ); ?> – <?php echo $section_3_wednesday_end = get_field( "section_3_wednesday_end" ); ?></label>
		                            </div>
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <span>Thu</span>
		                                 <label><?php echo $section_3_thursday_start = get_field( "section_3_thursday_start" ); ?> – <?php echo $section_3_thursday_end = get_field( "section_3_thursday_end" ); ?></label>
		                            </div>
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <span>Fri</span>
		                                 <label><?php echo $section_3_friday_start = get_field( "section_3_friday_start" ); ?> – <?php echo $section_3_friday_end = get_field( "section_3_friday_end" ); ?></label>
		                            </div>
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <span>Sat</span>
		                                  <label><?php echo $section_3_saturday_start = get_field( "section_3_saturday_start" ); ?> – <?php echo $section_3_saturday_end = get_field( "section_3_saturday_end" ); ?></label>
		                            </div>
		                            <div class="d-flex justify-content-between align-items-center">
		                                <span>Sun</span>
		                                  <label><?php echo $section_3_sunday_start = get_field( "section_3_sunday_start" ); ?> – <?php echo $section_3_sunday_end = get_field( "section_3_sunday_end" ); ?></label>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>

		    <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12">
		                    <div class="section-title">
		                        <h2 class="title"><?php echo $section_4_heading = get_field( "section_4_heading" ); ?></h2>
		                        <p class="mb-0"><?php echo $section_4_sub_heading = get_field( "section_4_sub_heading" ); ?></p>
		                    </div>
		                </div>
		            </div>
		             <div class="row">
		                <div class="col-lg-12">
		                    <div class="map">
		                       <?php echo $section_4_map_url = get_field('section_4_map_url'); ?>
		                        <div class="map-address-block">
		                            <p class="mb-0"><?php echo $section_4_map_description = get_field('section_4_map_description')?></p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>

		    <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12">
		                    <div class="section-title">
		                        <h2 class="title"> <?php echo $section_5_heading = get_field('section_5_heading'); ?></h2>
		                        <p class="mb-0"><?php echo $section_5_sub_heading = get_field('section_5_sub_heading'); ?></p>
		                    </div>
		                </div>
		            </div>
		             <div class="row">
		                <div class="col-lg-7">
		                    <div class="kitchen-service">
		                        <div class="row">
		                        	<?php 
										if( have_rows('section_5_service') ):
											$i = 1;
										    // Loop through rows.
										    while( have_rows('section_5_service') ) : the_row();

										        // Load sub field value.
										        $title = get_sub_field('service_heading');
										        $description = get_sub_field('service_description');
										        if( isset($title) && ! empty($title) && isset($description) && ! empty($description) ){ 	
											        ?>
						                            <div class="col-xl-5 col-md-6">
						                                <div class="service-item">
						                                    <span class="servic-number"><?= $i++;?>.</span>
						                                    <h3><?= $title; ?></h3>
						                                    <p><?= $description; ?></p>
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
		                </div>
		                <div class="col-lg-5">
		                    <div class="row">
		                    	<div class="col-md-6 mt-4">
		                        <?php 
										if( have_rows('section_5_service_gallery') ):
											$i = 1;
										    // Loop through rows.
										    while( have_rows('section_5_service_gallery') ) : the_row();

										        // Load sub field value.
										        $image = get_sub_field('image');
										        if( isset($image) && ! empty($image)){ 	
										        	if( $i == 4){ 
										        	$i = 0;
										        	 ?>
					        	</div>
        						<div class="col-md-6">
											      <?php  }
											        ?>
						                           <img class="mb-4 w-100" src="<?= $service_image = $image;?>">
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

			<?php

			
			get_template_part( 'template-parts/content-footer' );
		endwhile;

endif;

	
	get_footer();

}

?>