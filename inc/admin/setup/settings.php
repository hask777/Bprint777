<?php
function bprint_custom_settings()
{
    // Sidebar options
    register_setting('bprint-settings-group', 'profile_picture');
    register_setting('bprint-settings-group', 'first_name');
    register_setting('bprint-settings-group', 'last_name');
    register_setting('bprint-settings-group', 'user_description');
    register_setting('bprint-settings-group', 'twitter_handler', 'bprint_sanitize_twitter_handler');

    add_settings_section('bprint-sidebar-options', 'Sidebar Opitons', 'bprint_sidebar_options', 'hask777-bprint');

    add_settings_field('sidebar-profile-picture', 'Profile Picture', 'bprint_sidebar_profile', 'hask777-bprint', 'bprint-sidebar-options');
    add_settings_field('sidebar-name', 'Full Name', 'bprint_sidebar_name', 'hask777-bprint', 'bprint-sidebar-options');
    add_settings_field('sidebar-description', 'Description', 'bprint_sidebar_description', 'hask777-bprint', 'bprint-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter Handler', 'bprint_sidebar_twitter', 'hask777-bprint', 'bprint-sidebar-options');

    // Theme Support Options
    register_setting('bprint-theme-support', 'post_formats');
    register_setting('bprint-theme-support', 'custom_header');
    register_setting('bprint-theme-support', 'custom_background');
    add_settings_section('bprint-theme-options', 'Theme Options', 'bprint_theme_options', 'hask777-bprint_theme');
    add_settings_field('post-formats', 'Post Formats', 'bprint_post_formats', 'hask777-bprint_theme', 'bprint-theme-options');
    add_settings_field('custom-header', 'Custom Header', 'bprint_custom_header', 'hask777-bprint_theme', 'bprint-theme-options');
    add_settings_field('custom-background', 'Custom Header', 'bprint_custom_background', 'hask777-bprint_theme', 'bprint-theme-options');

    // Contact Form options
    register_setting('bprint-contact-options', 'activate_contact');
    add_settings_section('bprint-contact-section', 'Contact Form', 'bprint_contact_section', 'hask777-bprint_theme_contact_page');
    add_settings_field('activate-form', 'Activate Contact Form', 'bprint_activate_contact', 'hask777-bprint_theme_contact_page', 'bprint-contact-section' );
}
