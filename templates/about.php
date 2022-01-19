<?php
/*
Template Name: About us
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if (is_plugin_active( 'elementor/elementor.php' )) {
	//Do something...
	\Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );
	get_header();
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			?>
			 
			<section  style="padding-top: 200px !important; ">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="col-xl-10">
		                	<?php 
		                	$banner_image = get_field( "banner_image" );
		                	if ( !isset($banner_image) || empty($banner_image) ) {
		                		$banner_image = get_template_directory_uri()."/assets/custom/images/bg-02.jpg";
		                	}
		                	?>
		                    <div class="inner-banner" style="background: url(<?php echo $banner_image;?>) no-repeat; background-position: center center; background-size: cover;">
		                        <div class="inner-banner-content">
		                            <h1>
		                            	<?php 
			                           	$page_title = get_field( "page_title" ); 
			                           	if( isset( $page_title ) && ! empty($page_title) ) {
			                           		echo $page_title;
			                           	}
			                        	?>
			                        </h1>
		                            <p class="mb-0">
			                        	<?php 
			                           	$page_sub_title = get_field( "page_sub_title" ); 
			                           	if( isset( $page_sub_title ) && ! empty($page_sub_title) ) {
			                           		echo $page_sub_title;
			                           	}
			                        	?>
			                        </p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
	        <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="row">
		                        <div class="col-lg-6 mb-4 mb-lg-0">
		                            <div class="section-title mb-4 text-center">
		                                <?php 
				                           	$mission_title = get_field( "mission_title" ); 
				                           	if( isset( $mission_title ) && ! empty($mission_title) ) {?>
	                               				<h2 class="title">
					                           		<?php
					                           		echo $mission_title;
					                           		?>
					                           	</h2>
					                           	<?php
				                           	}
				                        ?>	
		                            </div>
		                            <div class="about-us">
		                                <?php 
				                           	$mission_description = get_field( "mission_description" ); 
				                           	if( isset( $mission_description ) && ! empty($mission_description) ) {
					                           	echo $mission_description;
				                           	}
				                        ?>
		                            </div>
		                        </div>
		                        <div class="col-lg-6">
		                            <div class="section-title mb-4 text-center">
		                                <?php 
				                           	$vision_title = get_field( "vision_title" ); 
				                           	if( isset( $vision_title ) && ! empty($vision_title) ) {?>
	                               				<h2 class="title">
					                           		<?php
					                           		echo $vision_title;
					                           		?>
					                           	</h2>
					                           	<?php
				                           	}
				                        ?>	
		                            </div>
		                            <div class="about-us">
		                                <?php 
				                           	$vision_description = get_field( "vision_description" ); 
				                           	if( isset( $vision_description ) && ! empty($vision_description) ) {
					                           	echo $vision_description;
				                           	}
				                        ?>
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
		                <div class="col-sm-12">
		                    <div class="section-title mb-4">
		                    	 <?php 
		                           	$design_heading = get_field( "design_heading" ); 
		                           	if( isset( $design_heading ) && ! empty($design_heading) ) {?>
                           				<h2 class="title">
			                           		<?php
			                           		echo $design_heading;
			                           		?>
			                           	</h2>
			                           	<?php
		                           	}
		                        ?>	
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="about-us">
		                        <div class="row d-flex align-items-center">
		                            <div class="col-lg-7 pe-xl-5 mb-4 mb-lg-0">
		                                <?php 
				                           	$design_description = get_field( "design_description" ); 
				                           	if( isset( $design_description ) && ! empty($design_description) ) {
					                           	echo $design_description;
				                           	}
				                        ?>
		                            </div>
		                            <div class="col-lg-5">
		                                <div class="about-image-block">
		                                    <?php 
												if( have_rows('design_images') ):
													$i = 1;
												    // Loop through rows.
												    while( have_rows('design_images') ) : the_row();

												        // Load sub field value.
												        $design_image = get_sub_field('design_image');
												        if( isset($design_image) && ! empty($design_image)  ){ 	
													        if($i == 1){
													        ?>
									                            <div class="about-image-one">
							                                        <img src="<?php  echo $design_image; ?>">
							                                    </div>
							                                <?php }else{ ?>
						                                    <div class="about-image-two">
						                                        <img src="<?php  echo $design_image; ?>">
						                                    </div>
													        <?php
						                               			 } // End if 
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
		            </div>
		        </div>
		    </section>
		    

		    <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="section-title mb-4">
		                        <?php 
		                           	$installing_heading = get_field( "installing_heading" ); 
		                           	if( isset( $installing_heading ) && ! empty($installing_heading) ) {?>
                           				<h2 class="title">
			                           		<?php
			                           		echo $installing_heading;
			                           		?>
			                           	</h2>
			                           	<?php
		                           	}
		                        ?>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="about-us">
		                        <div class="row d-flex align-items-center">
		                            <div class="col-lg-7 pe-xl-5 mb-4 mb-lg-0 order-lg-2">
		                                 <?php 
				                           	$installing_description = get_field( "installing_description" ); 
				                           	if( isset( $installing_description ) && ! empty($installing_description) ) {
					                           	echo $installing_description;
				                           	}
				                        ?>
		                            </div>
		                        	<div class="col-lg-5 order-lg-1">
		                                <div class="about-image-block">
		                                     <?php 
												if( have_rows('installing_images') ):
													$i = 1;
												    // Loop through rows.
												    while( have_rows('installing_images') ) : the_row();

												        // Load sub field value.
												        $installing_image = get_sub_field('installing_image');
												        if( isset($installing_image) && ! empty($installing_image)  ){ 	
													        if($i == 1){
													        ?>
									                            <div class="about-image-one">
							                                        <img src="<?php  echo $installing_image; ?>">
							                                    </div>
							                                <?php }else{ ?>
						                                    <div class="about-image-two">
						                                        <img src="<?php  echo $installing_image; ?>">
						                                    </div>
													        <?php
						                               			 } // End if 
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
		            </div>
		        </div>
		    </section>

	        <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12">
		                    <div class="section-title">
		                    	<?php 
		                           	$section_title = get_field( "section_title" ); 
		                           	if( isset( $section_title ) && ! empty($section_title) ) {?>
                           				<h2 class="title mb-4">
			                           		<?php
			                           		echo $section_title;
			                           		?>
			                           	</h2>
			                           	<?php
		                           	}
		                        ?>
		                    	<?php 
		                           	$section_sub_title = get_field( "section_sub_title" ); 
		                           	if( isset( $section_sub_title ) && ! empty($section_sub_title) ) {?>
                           				<p>
			                           		<?php
			                           		echo $section_sub_title;
			                           		?>
			                           	</p>
			                           	<?php
		                           	}
		                        ?>
		                        
		                    </div>
		                </div>
		            </div>
		             <div class="row">
		                <div class="col-lg-7">
		                    <div class="kitchen-service">
		                        <div class="row">
		                        	<?php 
										if( have_rows('section_repeater') ):
											$i = 1;
										    // Loop through rows.
										    while( have_rows('section_repeater') ) : the_row();

										        // Load sub field value.
										        $title = get_sub_field('title');
										        $description = get_sub_field('description');
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
		                    	<?php
		                    	if( have_rows('section_images') ):
									$i = 0;
							        ?>
                        			<div class="col-md-6 mt-4">
                        				<?php
									    // Loop through rows.
									    while( have_rows('section_images') ) : the_row();

									        // Load sub field value.
									        $image = get_sub_field('image');
									        if( isset($image) && ! empty($image) ){ 	
			                        				if( $i == 2 ) {
			                        					$i = 0;
			                        					?>
			                        					</div>
			                        					<div class="col-md-6">
			                        					<?php
			                        				}
			                        				$i++;
			                        				?>
			                            			<img class="mb-4 w-100" src="<?= $image; ?>">
										        <?php
										    }
									    // End loop.
									    endwhile;
								    	?>
									</div>
								    <?php
								// No value.
								endif;
								?>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>


		    <section class="pb-5">
			    <div class="container">
			        <div class="row align-items-center">
			            <div class="col-xl-7 col-md-6">
			                <div class="section-title">
			                	<?php 
		                           	$choose_us_title = get_field( "choose_us_title" ); 
		                           	if( isset( $choose_us_title ) && ! empty($choose_us_title) ) {?>
                           				<h2 class="title mb-4">
			                           		<?php
			                           		echo $choose_us_title;
			                           		?>
			                           	</h2>
			                           	<?php
		                           	}
		                        ?>
		                    	<?php 
		                           	$choose_us_sub_title = get_field( "choose_us_sub_title" ); 
		                           	if( isset( $choose_us_sub_title ) && ! empty($choose_us_sub_title) ) {?>
                           				<p>
			                           		<?php
			                           		echo $choose_us_sub_title;
			                           		?>
			                           	</p>
			                           	<?php
		                           	}
		                        ?>
			                </div>
			            </div>
			             <div class="col-xl-5 col-md-6">
			                <div class="why-choos-us-list">
			                    <ul class="list-unstyled mb-0">
			                    	<?php 
										if( have_rows('choose_us_repeater') ):
											$i = 1;
										    // Loop through rows.
										    while( have_rows('choose_us_repeater') ) : the_row();

										        // Load sub field value.
										        $description = get_sub_field('description');
										        if( isset($description) && ! empty($description)  ){ 	
											        ?>
											        <li><a href="#"><i class="far fa-check-circle"></i> <span><?= $description; ?></span></a></li>
											        <?php
											    }
										    // End loop.
										    endwhile;
										// No value.
										endif;
                                	?>
			                    </ul>
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
		                    	<?php 
		                           	$service_section_title = get_field( "service_section_title" ); 
		                           	if( isset( $service_section_title ) && ! empty($service_section_title) ) {?>
                           				<h2 class="title">
			                           		<?php
			                           		echo $service_section_title;
			                           		?>
			                           	</h2>
			                           	<?php
		                           	}
		                        ?>
		                    	<?php 
		                           	$service_section_sub_title = get_field( "service_section_sub_title" ); 
		                           	if( isset( $service_section_sub_title ) && ! empty($service_section_sub_title) ) {?>
                           				<p class="mb-0">
			                           		<?php
			                           		echo $service_section_sub_title;
			                           		?>
			                           	</p>
			                           	<?php
		                           	}
		                        ?>
		                    </div>
		                </div>
		            </div>
		             <div class="row">
		                <div class="col-lg-7">
		                    <div class="kitchen-service">
		                        <div class="row">
		                        	<?php 
										if( have_rows('service_section_repeater') ):
											$i = 1;
										    // Loop through rows.
										    while( have_rows('service_section_repeater') ) : the_row();

										        // Load sub field value.
										        $title = get_sub_field('title');
										        $description = get_sub_field('description');
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
		                    	<?php
		                    	if( have_rows('service_section_images') ):
									$i = 0;
							        ?>
                        			<div class="col-md-6 mt-4">
                        				<?php
									    // Loop through rows.
									    while( have_rows('service_section_images') ) : the_row();

									        // Load sub field value.
									        $image = get_sub_field('image');
									        if( isset($image) && ! empty($image) ){ 	
			                        				if( $i == 3 ) {
			                        					$i = 0;
			                        					?>
			                        					</div>
			                        					<div class="col-md-6">
			                        					<?php
			                        				}
			                        				$i++;
			                        				?>
			                            			<img class="mb-4 w-100" src="<?= $image; ?>">
										        <?php
										    }
									    // End loop.
									    endwhile;
								    	?>
									</div>
								    <?php
								// No value.
								endif;
								?>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="section-title">
		                    	<?php 
		                           	$faq_title = get_field( "faq_title" ); 
		                           	if( isset( $faq_title ) && ! empty($faq_title) ) {?>
                           				<h2 class="title">
			                           		<?php
			                           		echo $faq_title;
			                           		?>
			                           	</h2>
			                           	<?php
		                           	}
		                        ?>
		                    	<?php 
		                           	$faq_sub_title = get_field( "faq_sub_title" ); 
		                           	if( isset( $faq_sub_title ) && ! empty($faq_sub_title) ) {?>
                           				<p class="mb-0">
			                           		<?php
			                           		echo $faq_sub_title;
			                           		?>
			                           	</p>
			                           	<?php
		                           	}
		                        ?>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center">
		                <div class="col-xl-8">
		                    <div class="faq">
		                    	<?php 
									if( have_rows('faq') ):
										$i = 1;
									    // Loop through rows.
									    while( have_rows('faq') ) : the_row();

									        // Load sub field value.
									        $title = get_sub_field('title');
									        $description = get_sub_field('description');
									        if( isset($description) && ! empty($description) && isset($title) && ! empty($title) ){ 	
										        ?>
						                        <div class="faq-list d-sm-flex">
						                            <div class="faq-icon mb-4">?</div>
						                            <div class="faq-content">
						                                <h6><?= $title; ?></h6>
						                                <p class="mb-0"><?= $description; ?></p>
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
		        </div>
		    </section>


			<?php
			get_template_part( 'template-parts/content-footer' );
		endwhile;
endif;
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
	get_footer();
}
?>