<?php
/*
Template Name: Select Cabinates
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if (is_plugin_active( 'elementor/elementor.php' )) {
	//Do something...
	\Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );
	get_header();

	get_template_part( 'template-parts/content-subheader' ); //sub Header

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			?>
				<?php 
					if( have_rows('section_repeater') ):
						$flag = true;$cls='';$cls2='';$cls3='';
					    // Loop through rows.
					    while( have_rows('section_repeater') ) : the_row();
					    	if($flag){
					    		$cls = "justify-content-end";
					    		$cls2 = "left";
					    		$cls3='cabinet-product-section-right';
					    		$flag = false;
					    	} else {
					    		$cls = "";
					    		$cls2 = "right";
					    		$flag = true;
					    	}
					        // Load sub field value.
					        $title = get_sub_field('title');
					        $description = get_sub_field('description');
					        $link = get_sub_field('link');
					        $image = get_sub_field('image');
					        $product_image = get_sub_field('product_image');
					        ?>
					        <section class="cabinet-product-section mt-md-5" style="padding-top: 250px !important; margin: 3rem 0 !important;">
						        <div class="container">
						            <div class="row <?= $cls; ?>">
						                <div class="col-lg-6">
						                    <div class="cabinet-product-content">
						                    	<?php
					                        	if(isset($product_image)&&!empty($product_image)){
					                        		?>
							                        <div class="cabinet-product-img order-2">
							                            <img src="<?php echo $product_image; ?>" style=" max-width: initial;">
							                        </div>
					                        		<?php
					                        	}
					                        	?>
						                        <div class="cabinet-product-content-text order-1">
						                        	<?php
						                        	if(isset($title)&&!empty($title)){
						                        		?>
						                           		<h3><?php echo $title; ?></h3>
						                        		<?php
						                        	}
						                        	?>
						                        	<?php
						                        	if(isset($description)&&!empty($description)){
						                        		?>
						                           		<p><?php echo $description; ?></p>
						                        		<?php
						                        	}
						                        	?>
						                        	<?php
						                        	if(isset($link)&&!empty($link)){
						                        		?>
						                            	<a class="btn btn-white" href="<?php echo $link; ?>">Shop</a>
						                        		<?php
						                        	}
						                        	?>
						                        </div>
						                    </div>
						                </div>
						                <div class="cabinet-product-<?= $cls2; ?>-img">
						                	<?php
				                        	if(isset($image)&&!empty($image)){
				                        		?>
				                    			<img src="<?php echo $image; ?>" style=" max-width: initial;">
				                        		<?php
				                        	}
				                        	?>
						                </div>
						            </div>
						        </div>
						    </section>
					        <?php
					    // End loop.
					    endwhile;
					// No value.
					endif;
            	?>

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