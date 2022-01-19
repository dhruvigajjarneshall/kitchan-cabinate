<?php
/*
Template Name: Home Page Template
*/



if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if (is_plugin_active( 'elementor/elementor.php' )) {
	//Do something...
	\Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );
	get_header();
	get_template_part( 'template-parts/content-header' ); //sub Header
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

	?>
		
		
		<!-- Modal -->
	    <div class="modal fade offer-popup-modal" id="offer-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	      <div class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-body">
	            <div class="row">
	                <div class="col-md-7">
	                    <div class="offer-popup-left">
	                        <h2 class="title">One time deal <br> <span class="text-grey">Stay and save more</span></h2>
	                        <div class="code-text">
	                            <h5>Copy this code and apply at checkout to get extra 10% off</h5>
	                            <span class="d-grid text-end">(Only for today)</span>
	                        </div>
	                        <div class="cupon-code-box pb-5">
	                            <a href="#" class="btn btn-cupon-code" style="background-color: transparent;color:#000;">
		                            <?php
			                    	$popup_coupon_code = get_field('popup_coupon_code');
			                    	if( isset($popup_coupon_code) && ! empty( $popup_coupon_code ) ) {
			                    		?>
			                        	<?= $popup_coupon_code; ?>
			                    		<?php
			                    	}
			                    	?>
		                    	</a>
	                        </div>
	                        <div class="mb-4"><a class="button" href="#">Copy to clipboard</a></div>
	                        <h5>Copy this code and apply at checkout to get extra 10% off</h5>
	                        <div class="offer-product-img-slider">
	                            <div class="owl-carousel owl-theme" data-nav-arrow="false" data-items="4" data-md-items="3" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-autoheight="true" data-space="15">
	                               
	                                <?php 
				                        if( have_rows('popup_images') ):
				                            $flag = true;
				                            $i = 0;
				                            // Loop through rows.
				                            ?>
				                            <?php 
				                            while( have_rows('popup_images') ) : the_row();
				                                // Load sub field value.
				                                $image = get_sub_field('image');
				                                if( isset($image) && ! empty( $image ) ) {
				                                	?>
									                 <div class="item"><img src="<?= $image ?>" width="118px" height="102px"></div>	
				                                	<?php
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
	                    </div>
	                </div>
	                <div class="col-md-5">
	                    <div class="offer-popup-right">
	                        <div class="offer-product-img">
	                            <div class="bg-overley"><img class="img-fluid" src="<?php
			                    	$popup_bestseller_image = get_field('popup_bestseller_image');
			                    	if( isset($popup_bestseller_image) && ! empty( $popup_bestseller_image ) ) {
			                    		?>
			                        	<?= $popup_bestseller_image; ?>
			                    		<?php
			                    	}
			                    	?>"></div>
	                            <div class="offer-best-seller">Today’s <br>bestseller</div>
	                        </div>
	                        <div class="mt-4 text-center"><a class="shoping-btn" href="#">Keep Shopping</a></div>
	                    </div>
	                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

				<!--=================================
			    Banner -->
			    <style type="text/css">
			    	.swiper-button-next, .swiper-container-rtl .swiper-button-prev{
			    		background-image: none !important;
			    		    margin-right: 12px;
			    	}
			    </style>
			<section class="banner position-ralative" style="padding-top:40px;">
			    <div id="main-slider" class="swiper-container h-800 h-lg-700 h-md-600 h-sm-400">
			        <div class="swiper-wrapper">
			        	<?php 
                        if( have_rows('banner_repeater') ):
                            $flag = true;
                            // Loop through rows.
                            ?>
                            <?php 
                            while( have_rows('banner_repeater') ) : the_row();
                                // Load sub field value.
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                                $price = get_sub_field('price');
                                $label = get_sub_field('label');
                                $image = get_sub_field('image');
                                if( ! isset($title) && ! isset($description) && ! isset($price) && ! isset($label) && isset($image) && ! empty( $image )  ) {
                                	?>
                                	<div class="swiper-slide slider-1 align-items-center d-flex">
						                <div class="swipeinner container">
						                      <div class="row justify-content-center position-relative">
						                        <div class="col-lg-12">
						                            <div class="banner-img m-0">
						                                <img class="img-fluid" src="<?php $image; ?>">
						                            </div>
						                        </div>
						                      </div>
						                </div>
						                </div>
                                	<?php
                                } else {
                                	$cls = '';
                                	if( $flag ) {
                                		$cls='half-bg';
                                		$flag = false;
                                	} else {
                                		$flag = true;
                                		$cls='full-bg';
                                	}
                                	?>
						            <div class="swiper-slide slider-2 align-items-center d-flex">
						                <div class="swipeinner container">
						                    <div class="<?= $cls; ?> light-blue-bg">
						                        <div class="row justify-content-center position-relative">
						                            <div class="col-lg-8">
						                                <div class="banner-img">
						                                	<?php
						                                	if( isset( $image ) && ! empty($image) ) {
						                                    	?>
						                                    	<img class="img-fluid" src="<?= $image; ?>">
						                                    	<?php
						                                    }
						                                	?>
						                                    <?php 
						                                    if( isset( $label ) && ! empty($label) ) {
						                                    	echo $label;
						                                    }
						                                    ?>
						                                </div>
						                            </div>
						                            <div class="col-lg-4 align-self-center">
						                                <div class="banner-content banner-content-right">
						                                    <div class="banner-product">
						                                    	<?php
							                                	if( isset( $title ) && ! empty($title) ) {
							                                    	?>
						                                        	<h1><?= $title; ?></h1>
							                                    	<?php
							                                    }
							                                	?>
						                                        <p>
							                                    	<?php
								                                	if( isset( $description ) && ! empty($description) ) {
								                                    	?>
							                                        	<?= $description; ?>
								                                    	<?php
								                                    }
								                                	?>
								                                </p>
						                                    </div>
					                                    	<?php
						                                	if( isset( $price ) && ! empty($price) ) {
						                                    	?>
					                                        	<?= $price; ?>
						                                    	<?php
						                                    }
						                                	?>
					                                    	<?php
						                                	if( isset( $link ) && ! empty($link) ) {
						                                    	?>
						                                    	<a class="btn btn-primary" href="<?= $link; ?>" data-bs-toggle="modal" data-bs-target="#offer-popup">Shop Now</a>
						                                    	<?php
						                                    }
						                                	?>
						                                </div>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
                                	<?php
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
			    <!-- Pagination -->
			    <div class="swiper-button-prev text-white"><i class="fa fa-arrow-left"></i></div>
			    <div class="swiper-button-next text-white"><i class="fa fa-arrow-right"></i></div>
			</section>
			<!--=================================
			    Banner -->

		    <section class="top-seller-product pt-sm-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="section-title">
		                        <h2 class="title">Top Sellers</h2>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		            	<?php 
                        if( have_rows('top_seller_repeater') ):
                            $flag = true;
                            $i = 0;
                            // Loop through rows.
                            ?>
                            <?php 
                            while( have_rows('top_seller_repeater') ) : the_row();
                                // Load sub field value.
                                $title = get_sub_field('title');
                                $link = get_sub_field('link');
                                $price = get_sub_field('price');
                                $image = get_sub_field('image');
                                if( isset($title) && isset($price) && isset($image) && ! empty( $title ) && ! empty( $price ) && ! empty( $image ) ) {
                                	$cls = array('green','blue','purple','', '');
                                	?>
					                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
					                    <div class="seller-product-item">
					                        <div class="seller-product-left">
					                            <?php
			                                	if( isset( $title ) && ! empty($title) ) {
			                                    	?>
					                            	<div class="product-name"><?= $title; ?></div>
			                                    	<?php
			                                    }
			                                	?>
					                            <?php
			                                	if( isset( $image ) && ! empty($image) ) {
			                                    	?>
			                                    	<div class="seller-product-img"><img src="<?= $image; ?>"></div>
			                                    	<?php
			                                    }
			                                	?>
					                        </div>
					                        <div class="seller-product-right">
					                            <div class="preve-icon icon-<?= $cls[$i]; ?>"><i class="fas fa-angle-right"></i></div>

					                            <?php
			                                	if( isset( $price ) && ! empty($price) ) {
			                                    	?>
					                            	<div class="product-price"><label>Starting From</label><span>$<?= $price ?></span></div>
			                                    	<?php
			                                    }
			                                	?>
					                            <div class="seller-product-brand-logo"><img src="<?php echo get_template_directory_uri() . "/assets/custom/images/seller-product-brand-logo.png"; ?>"></div>
					                        </div>
					                    </div>
					                </div>
                                	<?php
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
		            	<?php 
                        if( have_rows('save_section_repeater') ):
                            $flag = true;
                            // Loop through rows.
                            ?>
                            <?php 
                            while( have_rows('save_section_repeater') ) : the_row();
                                // Load sub field value.
                                $title = get_sub_field('title');
                                $link = get_sub_field('link');
                                $description = get_sub_field('description');
                                $image = get_sub_field('image');
                                if( isset($title) && isset($description) && isset($image) && ! empty( $title ) && ! empty( $description ) && ! empty( $image ) ) {
                                	$cls = '';
                                	if( $flag ) {
                                		$cls='';
                                		$flag = false;
                                	} else {
                                		$flag = true;
                                		$cls='item-right';
                                	}
                                	?>
					                <div class="col-lg-6 mb-4">
					                    <div class="single-banner-item bg-<?php echo ($flag)?"purple":"pink";?>-light <?= $cls; ?>">
				                            <?php
		                                	if( isset( $image ) && ! empty($image) ) {
		                                    	?>
					                        	<div class="banner-thumb"><img class="w-100" src="<?= $image; ?>"></div>
		                                    	<?php
		                                    }
		                                	?>
					                        <div class="banner-content">
					                        	<?php
			                                	if( isset( $title ) && ! empty($title) ) {
			                                    	?>
					                            	<h3 class="title"><?= $title; ?></h3>
			                                    	<?php
			                                    }
			                                	?>
					                            <p class="description">
					                            	<?php
				                                	if( isset( $description ) && ! empty($description) ) {
				                                    	?>
						                            	<?= $description ?>
				                                    	<?php
				                                    }
			                                		?>
			                                	</p>
					                        </div>
					                    </div>
					                </div>
                                	<?php
                                }
                                $i++;
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
		                <div class="col-lg-3 mb-5">
		                    <div class="add-banner-product bg-light-blue">
		                    	<?php
		                    	$value_of_the_day_title = get_field('value_of_the_day_title');
		                    	if( isset($value_of_the_day_title) && ! empty( $value_of_the_day_title ) ) {
		                    		?>
		                        	<h5><?= $value_of_the_day_title; ?></h5>
		                    		<?php
		                    	}
		                    	?>
		                        <div class="add-banner-product-item">
			                    	<?php
			                    	$value_of_the_day_image = get_field('value_of_the_day_image');
			                    	if( isset($value_of_the_day_image) && ! empty( $value_of_the_day_image ) ) {
			                    		?>
		                            	<img class="w-100" src="<?= $value_of_the_day_image; ?>">
			                    		<?php
			                    	}
			                    	?>
			                    	<?php
			                    	$value_of_the_day_link = get_field('value_of_the_day_link');
			                    	if( isset($value_of_the_day_link) && ! empty( $value_of_the_day_link ) ) {
			                    		?>
		                            	<a href="<?= $value_of_the_day_link; ?>">View all <i class="fas fa-angle-right pl-2"></i></a>
			                    		<?php
			                    	}
			                    	?>
		                        </div>
		                    </div>
		                    <div class="timer">
		                        <!-- <div>01 <span>: 57 </span><span>: 42</span></div> -->
		                        <!-- Display the countdown timer in an element -->
								<p id="demo"></p>

								<script>
								<?php
								$dt = get_field("value_of_the_day_time");
								if (! isset($dt) || empty($dt) ){
									$dt = "Jan 5, 2022 15:37:25";
								} else {
									$dt = "'".$dt."'";
								}
								?>
								// Set the date we're counting down to
								var countDownDate = new Date(<?php echo $dt; ?>).getTime();

								// Update the count down every 1 second
								var x = setInterval(function() {

								  // Get today's date and time
								  var now = new Date().getTime();

								  // Find the distance between now and the count down date
								  var distance = countDownDate - now;

								  // Time calculations for days, hours, minutes and seconds
								  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
								  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
								  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
								  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

								  // Display the result in the element with id="demo"
								  document.getElementById("demo").innerHTML = "<div>"+days + ": <span>" + hours + "</span><span>: "
								  + minutes + "</span><span>: " + seconds + "</span> </div>";

								  // If the count down is finished, write some text
								  if (distance < 0) {
								    clearInterval(x);
								    document.getElementById("demo").innerHTML = "EXPIRED";
								  }
								}, 1000);
								</script>
		                    </div>
		                    <div class="hot-deals">
		                        <h5>Hot deals</h5>
		                        <div class="deal-box">
		                        	<?php 
			                        if( have_rows('hot_deal_section') ):
			                            $flag = true;
			                            // Loop through rows.
			                            ?>
			                            <?php 
			                            while( have_rows('hot_deal_section') ) : the_row();
			                                // Load sub field value.
			                                $title = get_sub_field('title');
			                                $description = get_sub_field('description');
			                                $image = get_sub_field('image');
			                                if( isset($title) && isset($description) && isset($image) && ! empty( $title ) && ! empty( $description ) && ! empty( $image ) ) {
			                                	$cls = '';
			                                	if( $flag ) {
			                                		$cls='';
			                                		$flag = false;
			                                	} else {
			                                		$flag = true;
			                                		$cls='deal-box-item-right';
			                                	}
			                                	?>
					                            <div class="deal-box-item deal-item-box<?= $i; ?> <?= $cls; ?>">
					                            	<?php
				                                	if( isset( $image ) && ! empty($image) ) {
				                                    	?>
							                        	<div class="deal-box-item-icon"><img src="<?= $image; ?>"></div>
				                                    	<?php
				                                    }
				                                	?>
						                        	<?php
				                                	if( isset( $title ) && ! empty($title) ) {
				                                    	?>
						                            	<h6><?= $title; ?></h6>
				                                    	<?php
				                                    }
				                                	?>
					                                <p>
					                                	<?php
					                                	if( isset( $description ) && ! empty($description) ) {
					                                    	echo $description;
					                                    }
				                                		?>
				                                	</p>
					                            </div>
			                                	<?php
			                                }
			                                $i++;
			                            // End loop.
			                            endwhile;
			                       		// No value.
			                        endif;
			                    	?>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-9">
		                    <div class="row">
		                    	<?php
							        $args = array(
							            'post_type' => 'product',
							            'posts_per_page' => 6,
								        'tax_query' => array(
									        array(
									            'taxonomy' => 'product_cat',
									            'field' => 'slug',
									            'terms' => 'platinum'
									        ),
									    ),
							        );
							        $loop = new WP_Query( $args );
							        if ( $loop->have_posts() ) {
							            while ( $loop->have_posts() ) : $loop->the_post();
											global $product;

											// Ensure visibility
											if ( empty( $product ) || ! $product->is_visible() ) {
												exit;
											}
							            	?>
					                        <div class="col-md-4 mb-4">
					                            <div class="product-item">
					                                <div class="product-top-content">
					                                    <div class="top-content-detail">
					                                        <h4 class="product-name">
					                                        	<a href="<?php echo esc_url( get_post_permalink() ); ?>" class="color-dark">
																	<?php echo esc_attr( get_post( $product->get_id() )->post_title ); ?>
																</a>
															</h4>
					                                        <div class="top-content-content">
					                                            <p><?php echo get_post( $product->get_id() )->post_excerpt;?></p>
					                                        </div>
					                                    </div>
					                                    <?php
					                                    $product = wc_get_product( get_post( $product->get_id() )->ID );
					                                    $rating  = $product->get_average_rating();
					                                    if ( $rating ) {
					                                    	?>
					                                    	<div class="stars-rating"><i class="fas fa-star"></i><label>
						                                    	<?php echo $rating; ?>/5</label>
						                                    </div>
					                                    	<?php
					                                    }
					                                    ?>
					                                </div>
					                                <div class="product-thumb">
					                                    <?php echo woocommerce_get_product_thumbnail("full");?>
					                                    <?php woocommerce_show_product_loop_sale_flash(); ?>
					                                    <?php
					                                    $current_tags = get_the_terms( get_the_ID(), 'product_tag' );

														//only start if we have some tags
														if ( $current_tags && ! is_wp_error( $current_tags ) ) { 

														    //create a list to hold our tags

														    //for each tag we create a list item
														    foreach ($current_tags as $tag) {

														        $tag_title = $tag->name; // tag name
														        $tag_link = get_term_link( $tag );// tag archive link

														        echo '<span class="'.$tag->slug.'">'.$tag_title.'</span>';
														    }

														}?>
					                                </div>
					                                <div class="product-bottom-content">
					                                    <div class="price-box">
					                                        <?php echo wp_kses($product->get_price_html(), 'default'); ?>
					                                    </div>
					                                    <div class="bookmark-icon">
					                                    	<?php if ( function_exists( 'YITH_WCWL' ) ) {
																echo do_shortcode( '<div class="product-buttons-item">[yith_wcwl_add_to_wishlist]</div>' );
															}?>
					                                    </div>
					                                    <div class="product-buttons-item">
						                                    <?php
															$classes = '';
															if (! $product->managing_stock() && ! $product->is_in_stock())
															$classes = 'out-of-stock';
															echo apply_filters( 'woocommerce_loop_add_to_cart_link',
															sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s product_type_%s single_add_to_cart_button btn-loading-disabled btn btn-small cart-btn %s">%s</a>',
																esc_url( $product->add_to_cart_url() ),
																esc_attr( $product->get_id() ),
																esc_attr( $product->get_sku() ),
																$product->is_purchasable() ? 'add_to_cart_button' : '',
																esc_attr( $product->get_type() ),
																$classes,
																esc_html( $product->add_to_cart_text() )
															),
															$product );
															?>
															<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
															<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
															<input type="hidden" name="variation_id" class="variation_id" value="0" />
						                                    <!-- <a class="btn cart-btn" href="#">Add to cart</a> -->
						                                </div>
					                                </div>
					                            </div>
					                        </div>
							            	<?php
							                //wc_get_template_part( 'content', 'product' );
							            endwhile;
							        } else {
							            echo __( 'No products found' );
							        }
							        wp_reset_postdata();
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
		                    <div class="call-to-action">
		                    	<?php
		                    	$take_care_sub_title = get_field('take_care_sub_title');
		                    	if( isset($take_care_sub_title) && ! empty( $take_care_sub_title ) ) {
		                    		?>
		                        	<h6><?= $take_care_sub_title; ?></h6>
		                    		<?php
		                    	}
		                    	?>
		                        <?php
		                    	$take_care_title = get_field('take_care_title');
		                    	if( isset($take_care_title) && ! empty( $take_care_title ) ) {
		                    		?>
		                        	<h2><?= $take_care_title; ?></h2>
		                    		<?php
		                    	}
		                    	?>
		                        <?php
		                    	$taking_care_description = get_field('taking_care_description');
		                    	if( isset($taking_care_description) && ! empty( $taking_care_description ) ) {
		                    		?>
		                        	<p><?= $taking_care_description; ?></p>
		                    		<?php
		                    	}
		                    	?>

		                        <?php
		                    	$taking_care_image = get_field('taking_care_image');
		                    	if( isset($taking_care_image) && ! empty( $taking_care_image ) ) {
		                    		?>
		                        	<div class="img-right-side"><img src="<?= $taking_care_image; ?>"></div>
		                    		<?php
		                    	}
		                    	?>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>

		    <section class="pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-3 mb-5">
		                    <div class="add-banner-product bg-light-gray mb-4 mb-md-5">
		                    	<?php
		                    	$top_offers_title = get_field('top_offers_title');
		                    	if( isset($top_offers_title) && ! empty( $top_offers_title ) ) {
		                    		?>
		                        	<h5><?= $top_offers_title; ?></h5>
		                    		<?php
		                    	}
		                    	?>
		                        <div class="add-banner-product-item">
			                        <?php
			                    	$top_offers_image = get_field('top_offers_image');
			                    	if( isset($top_offers_image) && ! empty( $top_offers_image ) ) {
			                    		?>
		                            	<img class="w-100" src="<?= $top_offers_image; ?>">
			                    		<?php
			                    	}
			                    	?>
			                    	<?php
			                    	$top_offers_link = get_field('top_offers_link');
			                    	if( isset($top_offers_link) && ! empty( $top_offers_link ) ) {
			                    		?>
		                            	<a href="<?= $top_offers_link; ?>">View all <i class="fas fa-angle-right pl-2"></i></a>
			                    		<?php
			                    	}
			                    	?>
		                            
		                        </div>
		                    </div>
		                    <div class="valid-week mb-4 mb-md-5">Valid till <span>1 week</span></div>
		                    <div class="deal-box">
		                    	<?php 
		                        if( have_rows('coupon_repeater') ):
		                            $flag = true;
		                            // Loop through rows.
		                            ?>
		                            <?php 
		                            while( have_rows('coupon_repeater') ) : the_row();
		                                // Load sub field value.
		                                $title = get_sub_field('title');
		                                $coupon_code = get_sub_field('coupon_code');
		                                if( isset($title) && isset($coupon_code) && ! empty( $title ) && ! empty( $coupon_code ) ) {
		                                	$cls = '';
		                                	if( $flag ) {
		                                		$cls='';
		                                		$flag = false;
		                                	} else {
		                                		$flag = true;
		                                		$cls='deal-box-item-right';
		                                	}
		                                	?>
					                        <div class="cupon-code-box pb-5">
					                        	<?php
			                                	if( isset( $title ) && ! empty($title) ) {
			                                    	?>
						                        	<h3><?= $title; ?></h3>
			                                    	<?php
			                                    }
			                                	?>
			                                	<?php
			                                	if( isset( $coupon_code ) && ! empty($coupon_code) ) {
			                                    	?>
			                                    	<a href="#" class="btn btn-cupon-code"><?= $coupon_code; ?></a>
			                                    	<?php
			                                    }
			                                	?>
					                        </div>
		                                	<?php
		                                }
		                                $i++;
		                            	// End loop.
		                            endwhile;
		                       		// No value.
		                        endif;
		                    	?>
		                        <p>*Tearms and condition applied</p>
		                    </div>
		                </div>
		                <div class="col-lg-9">
		                    <div class="row">
		                        <?php
							        $args = array(
							            'post_type' => 'product',
							            'posts_per_page' => 6,
								        'tax_query' => array(
									        array(
									            'taxonomy' => 'product_cat',
									            'field' => 'slug',
									            'terms' => 'silver'
									        ),
									    ),
							        );
							        $loop = new WP_Query( $args );
							        if ( $loop->have_posts() ) {
							            while ( $loop->have_posts() ) : $loop->the_post();
											global $product;

											// Ensure visibility
											if ( empty( $product ) || ! $product->is_visible() ) {
												exit;
											}
							            	?>
					                        <div class="col-md-4 mb-4">
					                            <div class="product-item">
					                                <div class="product-top-content">
					                                    <div class="top-content-detail">
					                                        <h4 class="product-name">
					                                        	<a href="<?php echo esc_url( get_post_permalink() ); ?>" class="color-dark">
																	<?php echo esc_attr( get_post( $product->get_id() )->post_title ); ?>
																</a>
															</h4>
					                                        <div class="top-content-content">
					                                            <p><?php echo get_post( $product->get_id() )->post_excerpt;?></p>
					                                        </div>
					                                    </div>
					                                    <?php
					                                    $product = wc_get_product( get_post( $product->get_id() )->ID );
					                                    $rating  = $product->get_average_rating();
					                                    if ( $rating ) {
					                                    	?>
					                                    	<div class="stars-rating"><i class="fas fa-star"></i><label>
						                                    	<?php echo $rating; ?>/5</label>
						                                    </div>
					                                    	<?php
					                                    }
					                                    ?>
					                                </div>
					                                <div class="product-thumb">
					                                    <?php echo woocommerce_get_product_thumbnail("full");?>
					                                    <?php woocommerce_show_product_loop_sale_flash(); ?>
					                                    <?php
					                                    $current_tags = get_the_terms( get_the_ID(), 'product_tag' );

														//only start if we have some tags
														if ( $current_tags && ! is_wp_error( $current_tags ) ) { 

														    //create a list to hold our tags

														    //for each tag we create a list item
														    foreach ($current_tags as $tag) {

														        $tag_title = $tag->name; // tag name
														        $tag_link = get_term_link( $tag );// tag archive link

														        echo '<span class="'.$tag->slug.'">'.$tag_title.'</span>';
														    }

														}?>
					                                </div>
					                                <div class="product-bottom-content">
					                                    <div class="price-box">
					                                        <?php echo wp_kses($product->get_price_html(), 'default'); ?>
					                                    </div>
					                                    <div class="bookmark-icon">
					                                    	<?php if ( function_exists( 'YITH_WCWL' ) ) {
																echo do_shortcode( '<div class="product-buttons-item">[yith_wcwl_add_to_wishlist]</div>' );
															}?>
					                                    </div>
					                                    <?php
														$classes = '';
														if (! $product->managing_stock() && ! $product->is_in_stock())
														$classes = 'out-of-stock';
														echo apply_filters( 'woocommerce_loop_add_to_cart_link',
														sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s product_type_%s single_add_to_cart_button btn-loading-disabled btn btn-small cart-btn %s">%s</a>',
															esc_url( $product->add_to_cart_url() ),
															esc_attr( $product->get_id() ),
															esc_attr( $product->get_sku() ),
															$product->is_purchasable() ? 'add_to_cart_button' : '',
															esc_attr( $product->get_type() ),
															$classes,
															esc_html( $product->add_to_cart_text() )
														),
														$product );
														?>
														<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
														<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
														<input type="hidden" name="variation_id" class="variation_id" value="0" />
					                                    <!-- <a class="btn cart-btn" href="#">Add to cart</a> -->
					                                </div>
					                            </div>
					                        </div>
							            	<?php
							                //wc_get_template_part( 'content', 'product' );
							            endwhile;
							        } else {
							            echo __( 'No products found' );
							        }
							        wp_reset_postdata();
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
		                    <div class="feature-product">
		                        <div class="row">
		                            <div class="col-xl-3 col-lg-4 mb-4 mb-lg-0">
		                                <div class="feature-product-img">
					                        <?php
					                    	$progress_image = get_field('progress_image');
					                    	if( isset($progress_image) && ! empty( $progress_image ) ) {
					                    		?>
		                                    	<img src="<?= $progress_image; ?>">
					                    		<?php
					                    	}
					                    	?>
		                                </div>
		                            </div>
		                            <div class="col-xl-9 col-lg-8">
		                                <div class="feature-product-details">
		                                	<?php
					                    	$progress_title = get_field('progress_title');
					                    	if( isset($progress_title) && ! empty( $progress_title ) ) {
					                    		?>
		                                    	<h3><?= $progress_title; ?></h3>
					                    		<?php
					                    	}
					                    	?>
					                    	<?php
					                    	$progress_description = get_field('progress_description');
					                    	if( isset($progress_description) && ! empty( $progress_description ) ) {
					                    		?>
		                                    	<span><?= $progress_description; ?></span>
					                    		<?php
					                    	}
					                    	?>
					                    	<?php
					                    	$progress_price = get_field('progress_price');
					                    	if( isset($progress_price) && ! empty( $progress_price ) ) {
					                    		?>
					                    		<div class="stock-price">
			                                        <span>$<?= $progress_price; ?></span>
			                                        <label>in stock</label>
			                                    </div>
					                    		<?php
					                    	}
					                    	?>
					                    	<?php
					                    	$progress_percentage = get_field('progress_percentage');
					                    	if( isset($progress_percentage) && ! empty( $progress_percentage ) ) {
					                    		?>
			                                    <div class="progress">
			                                        <div class="progress-bar" role="progressbar" style="width: <?= $progress_percentage; ?>%;">
			                                          <span class="sr-only"><?= $progress_percentage; ?>% Complete</span>
			                                        </div>
			                                    </div>
					                    		<?php
					                    	}
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
		                <div class="col-lg-3 mb-4">
		                    <div class="add-banner-product bg-light-yellow">
		                        <div class="d-flex justify-content-between">
		                        	<?php
			                    	$cabinet_title = get_field('cabinet_title');
			                    	if( isset($cabinet_title) && ! empty( $cabinet_title ) ) {
			                    		?>
		                            	<h5><?= $cabinet_title; ?></h5>
			                    		<?php
			                    	}
			                    	?>
		                            <h4 class="f-blod">18</h4>
		                        </div>
		                        <div class="add-banner-product-item">
		                        	<?php
			                    	$cabinet_image = get_field('cabinet_image');
			                    	if( isset($cabinet_image) && ! empty( $cabinet_image ) ) {
			                    		?>
		                            	<img class="w-100" src="<?= $cabinet_image; ?>">
			                    		<?php
			                    	}
			                    	?>
			                    	<?php
			                    	$cabinet_link = get_field('cabinet_link');
			                    	if( isset($cabinet_link) && ! empty( $cabinet_link ) ) {
			                    		?>
		                           		<a href="<?= $cabinet_link; ?>">View all <i class="fas fa-angle-right pl-2"></i></a>
			                    		<?php
			                    	}
			                    	?>
		                        </div>
		                    </div>
		                    <div class="hot-deals">
		                        <h5>Hot deals</h5>
		                        <div class="deal-box cabinet-hardware">
		                        	<?php
			                    	$hot_deal_title = get_field('hot_deal_title');
			                    	if( isset($hot_deal_title) && ! empty( $hot_deal_title ) ) {
			                    		?>
		                            	<h5><?= $hot_deal_title; ?></h5>
			                    		<?php
			                    	}
			                    	?>
		                            <p>
		                            	<?php
				                    	$hot_deal_description = get_field('hot_deal_description');
				                    	if( isset($hot_deal_description) && ! empty( $hot_deal_description ) ) {
				                    		?>
			                            	<?= $hot_deal_description; ?>
				                    		<?php
				                    	}
				                    	?>
		                            </p>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-9">
		                    <div class="row">
		                        <?php
							        $args = array(
							            'post_type' => 'product',
							            'posts_per_page' => 6,
								        'tax_query' => array(
									        array(
									            'taxonomy' => 'product_cat',
									            'field' => 'slug',
									            'terms' => 'gold'
									        ),
									    ),
							        );
							        $loop = new WP_Query( $args );
							        if ( $loop->have_posts() ) {
							            while ( $loop->have_posts() ) : $loop->the_post();
											global $product;

											// Ensure visibility
											if ( empty( $product ) || ! $product->is_visible() ) {
												exit;
											}
							            	?>
					                        <div class="col-md-4 mb-4">
					                            <div class="product-item">
					                                <div class="product-top-content">
					                                    <div class="top-content-detail">
					                                        <h4 class="product-name">
					                                        	<a href="<?php echo esc_url( get_post_permalink() ); ?>" class="color-dark">
																	<?php echo esc_attr( get_post( $product->get_id() )->post_title ); ?>
																</a>
															</h4>
					                                        <div class="top-content-content">
					                                            <p><?php echo get_post( $product->get_id() )->post_excerpt;?></p>
					                                        </div>
					                                    </div>
					                                    <?php
					                                    $product = wc_get_product( get_post( $product->get_id() )->ID );
					                                    $rating  = $product->get_average_rating();
					                                    if ( $rating ) {
					                                    	?>
					                                    	<div class="stars-rating"><i class="fas fa-star"></i><label>
						                                    	<?php echo $rating; ?>/5</label>
						                                    </div>
					                                    	<?php
					                                    }
					                                    ?>
					                                </div>
					                                <div class="product-thumb">
					                                    <?php echo woocommerce_get_product_thumbnail("full");?>
					                                    <?php woocommerce_show_product_loop_sale_flash(); ?>
					                                    <?php
					                                    $current_tags = get_the_terms( get_the_ID(), 'product_tag' );

														//only start if we have some tags
														if ( $current_tags && ! is_wp_error( $current_tags ) ) { 

														    //create a list to hold our tags

														    //for each tag we create a list item
														    foreach ($current_tags as $tag) {

														        $tag_title = $tag->name; // tag name
														        $tag_link = get_term_link( $tag );// tag archive link

														        echo '<span class="'.$tag->slug.'">'.$tag_title.'</span>';
														    }

														}?>
					                                </div>
					                                <div class="product-bottom-content">
					                                    <div class="price-box">
					                                        <?php echo wp_kses($product->get_price_html(), 'default'); ?>
					                                    </div>
					                                    <div class="bookmark-icon">
					                                    	<?php if ( function_exists( 'YITH_WCWL' ) ) {
																echo do_shortcode( '<div class="product-buttons-item">[yith_wcwl_add_to_wishlist]</div>' );
															}?>
					                                    </div>
					                                    <?php
														$classes = '';
														if (! $product->managing_stock() && ! $product->is_in_stock())
														$classes = 'out-of-stock';
														echo apply_filters( 'woocommerce_loop_add_to_cart_link',
														sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s product_type_%s single_add_to_cart_button btn-loading-disabled btn btn-small cart-btn %s">%s</a>',
															esc_url( $product->add_to_cart_url() ),
															esc_attr( $product->get_id() ),
															esc_attr( $product->get_sku() ),
															$product->is_purchasable() ? 'add_to_cart_button' : '',
															esc_attr( $product->get_type() ),
															$classes,
															esc_html( $product->add_to_cart_text() )
														),
														$product );
														?>
														<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
														<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
														<input type="hidden" name="variation_id" class="variation_id" value="0" />
					                                    <!-- <a class="btn cart-btn" href="#">Add to cart</a> -->
					                                </div>
					                            </div>
					                        </div>
							            	<?php
							                //wc_get_template_part( 'content', 'product' );
							            endwhile;
							        } else {
							            echo __( 'No products found' );
							        }
							        wp_reset_postdata();
							    ?>
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
		                        <h2 class="title">Your Kitchen Solution</h2>
		                    </div>
		                </div>
		            </div>
		             <div class="row">
		                <div class="col-lg-7">
		                    <div class="kitchen-service">
		                        <div class="row">
		                        	<?php 
			                        if( have_rows('kitchen_solution_repeater') ):
			                            $flag = true;
			                            $i = 1;
			                            // Loop through rows.
			                            ?>
			                            <?php 
			                            while( have_rows('kitchen_solution_repeater') ) : the_row();
			                                // Load sub field value.
			                                $title = get_sub_field('title');
			                                $description = get_sub_field('description');
			                                if( isset($title) && isset($description) && ! empty( $title ) && ! empty( $description ) ) {
			                                	$cls = '';
			                                	if( $flag ) {
			                                		$cls='';
			                                		$flag = false;
			                                	} else {
			                                		$flag = true;
			                                		$cls='deal-box-item-right';
			                                	}
			                                	?>
					                            <div class="col-xl-5 col-md-6">
					                                <div class="service-item">
					                                    <span class="servic-number"><?= $i; ?>.</span>
					                                    <?php
					                                	if( isset( $title ) && ! empty($title) ) {
					                                    	?>
							                            	<h3><?= $title; ?></h3>
					                                    	<?php
					                                    }
					                                	?>
						                                <p>
						                                	<?php
						                                	if( isset( $description ) && ! empty($description) ) {
						                                    	echo $description;
						                                    }
					                                		?>
					                                	</p>
					                                </div>
					                            </div>
			                                	<?php
			                                }
			                                $i++;
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
		                    	if( have_rows('kitchen_solution_image_solution') ):
									$i = 0;
							        ?>
                        			<div class="col-md-6 mt-4">
                        				<?php
									    // Loop through rows.
									    while( have_rows('kitchen_solution_image_solution') ) : the_row();

									        // Load sub field value.
									        $image = get_sub_field('image');
									        if( isset($image) && ! empty($image) ){ 	
			                        				if( $i == 4 ) {
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
		    <section class="testimonial-section pb-5">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="testimonial">
		                        <div class="testimonial-bg-img"><img src="<?php echo get_template_directory_uri()?>/assets/custom/images/pattern-img-01.png"></div>
		                        <div class="row justify-content-center">
		                            <div class="col-lg-4">
		                                <div class="section-title text-center">
		                                	<?php
					                    	$testimonial_title = get_field('testimonial_title');
					                    	if( isset($testimonial_title) && ! empty( $testimonial_title ) ) {
					                    		?>
				                            	<h2 class="title mb-4"><?= $testimonial_title; ?></h2>
					                    		<?php
					                    	}
					                    	?>
		                                    <p class="mb-0">
		                                    	<?php
						                    	$testimonial_description = get_field('testimonial_description');
						                    	if( isset($testimonial_description) && ! empty( $testimonial_description ) ) {
						                    		?>
					                            	<?= $testimonial_description; ?>
						                    		<?php
						                    	}
						                    	?>
		                                    </p>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="row justify-content-center">
		                            <div class="col-xl-9 col-lg-12">
		                                <div class="owl-carousel" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-autoheight="true">
		                                	<?php echo do_shortcode('[testimonial posts_per_page="6" orderby="none" testimonial_id=""]'); ?>
		                                </div>
		                            </div>
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