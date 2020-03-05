<?php
/*
@package bprint theme
*/

$contact = get_option('activate_contact');
if( @$contact == 1 ){
    add_action('init', 'bprint_contact_custome_post_type');

    add_filter('manage_bprint-contact_posts_columns', 'bprint_set_contact_columns');
    add_action('manage_bprint-contact_posts_custom_column', 'bprint_contact_custom_column', 10, 2);

}
// CONTACT CPT
function bprint_contact_custome_post_type()
{
    $labels = array(
        'name'            => 'Messages',
        'singular_name'   => 'Message',
        'menu'            => 'Messages',
        'name_admin_bar'  => 'Message',
    );
    $args = array(
        'labels'          => $labels,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'capability_type' => 'post',
        'hierarchical'    => false,
        'menu_position'   => 26,
        'menu_icon'       => 'dashicons-email-alt',
        'supports'        => array('title', 'editor', 'author'),
    );
    register_post_type( 'bprint-contact', $args );
}

function bprint_set_contact_columns($columns){
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['message'] = 'Message';
    $newColumns['email'] = 'Email';
    $newColumns['date'] = 'Date';
    return $newColumns;
}

function bprint_contact_custom_column($column, $post_id){
    switch( $column ){
        case 'message' :
            echo get_the_excerpt();
            break;
        case 'email' :
            echo 'haskellisp@gmail.com';
            break;
    }
}