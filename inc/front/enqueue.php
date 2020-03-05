<?php
/**
 * Enqueue scripts and styles.
 */
function bprint_scripts() {
    wp_register_style( 'bprint_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'bprint_bootstrap' );

    // wp_enqueue_style( 'bprint_font_awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" );

	wp_enqueue_style( 'bprint-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bprint-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bprint-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'bprint-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'bprint_slick_js', get_template_directory_uri() . '/assets/css/slick/slick.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bprint_scripts' );
