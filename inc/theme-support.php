<?php
/*
@package bprint theme
*/

$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach($formats as $format){
    $output[] = ( @$options[$format] == 1 ? $format : '' );
}
if( !empty($options)){
    add_theme_support('post-formats', $output);
}

$custom_header = get_option('custom_header');
if( @$custom_header == 1 ){
    add_theme_support('custom-header');
}

$custom_background= get_option('custom_background');
if( @$custom_background == 1 ){
    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'bprint_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
