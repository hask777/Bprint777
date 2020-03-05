<?php
/**
 * bprint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bprint
 */

 ## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
if( 'disable_gutenberg' ){
	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	// отключим подключение базовых css стилей для блоков
	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}

 /**
  * Off or On guttenberg.
  */
require get_template_directory() . '/inc/gutenberg-init.php';

/**
 * Off or On guttenberg.
 */
require get_template_directory() . '/inc/menu/menu-item-admin.php';

 /**
  * Admin functions.
  */
require get_template_directory() . '/inc/admin/functions.php';

 /**
  * Setup functions.
  */
require get_template_directory() . '/inc/setup/setup.php';

/**
 * Var Dump Functions.
 */
require get_template_directory() . '/inc/var_dump.php';

/**
 * Add image for taxonomies.
 */
require get_template_directory() . '/inc/setup/cat-image.php';

/**
 * New nav menu walker.
 */
require get_template_directory() . '/inc/classes/class-walker-nav-menu-bprint.php';

/**
 * New nav menu walker.
 */
require get_template_directory() . '/inc/classes/awps-walker-nav-menu-class.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
require get_template_directory() . '/inc/setup/content-width.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/front/enqueue.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
require get_template_directory() . '/inc/font-awesome/fw-init.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/metabox/advantages/fw-adv-metabox.php';
