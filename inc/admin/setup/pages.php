<?php
/*
@package bprint theme
*/

// A MAIN ACTION
add_action('admin_menu', 'bprint_add_admin_page');

function bprint_add_admin_page()
{
    // Generate Bprint admin page
    add_menu_page('Bprint Theme Options', 'Bprint', 'manage_options', 'hask777-bprint', 'bprint_theme_create_page', '', 110);
    // Generate Bprint admin sub-pages
    add_submenu_page('hask777-bprint', 'Bprint Sidebar Options', 'Sidebar', 'manage_options','hask777-bprint', 'bprint_theme_create_page');
    // Support Page
    add_submenu_page('hask777-bprint', 'Bprint Theme Options', 'Theme options', 'manage_options', 'hask777-bprint_theme',
    'bprint_theme_support_page');
    // Contact page
    add_submenu_page('hask777-bprint', 'Bprint Contact Form Page', 'Contact Form', 'manage_options', 'hask777-bprint_theme_contact', 'bprint_theme_contact_page');
    // Settings Page
    add_submenu_page('hask777-bprint', 'Bprint CSS Options', 'Custom CSS', 'manage_options','hask777-bprint_css', 'bprint_theme_settings_page');

    // Activate custom settings
    add_action('admin_init', 'bprint_custom_settings');

}

function bprint_theme_create_page()
{
    // Generation of our admin page
    require_once( get_template_directory() . '/inc/admin/templates/bprint-admin.php' );
}

function bprint_theme_support_page()
{
    // Generation of our support page
    require_once( get_template_directory() . '/inc/admin/templates/bprint-theme-support.php' );
}

function bprint_theme_contact_page()
{
    // Generation of our support page
    require_once( get_template_directory() . '/inc/admin/templates/bprint-contact-form.php' );
}


function bprint_theme_settings_page()
{
    // Generation of our admin page
    echo '<h1>Bprint Custom CSS</h1>';
}
