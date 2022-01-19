		</div>



		<?php if ( !OhioHelper::is_optimized_flow( 'footer' ) && !OhioSettings::is_coming_soon_page() ): ?>

			<?php get_template_part( 'parts/elements/footer' ); ?>

		<?php endif; ?>

	</div>



	<?php get_template_part('parts/elements/notification'); ?>



	<?php if ( OhioOptions::get( 'page_header_menu_style', 'style1' ) == 'style6' ) : ?>

	</div>

	<?php endif; ?>



	<?php if ( OhioOptions::get( 'page_use_boxed_wrapper', false ) ) : ?>

	</div>

	<?php endif; ?>



	<?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/jquery-3.6.0.min.js" ?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/bootstrap.min.js" ?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/owl.carousel.min.js" ?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/swiper.min.js" ?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/SwiperAnimation.min.js" ?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/shuffle.min.js" ?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/custom/js/custom.js" ?>"></script>
	</body>

</html>