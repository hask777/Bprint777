<?php
/*
@package bprint theme
*/
// Post Formats Callback Functions

function bprint_theme_options(){
    echo 'Activate and Deactivate specific Theme Support Options';
}
function bprint_post_formats(){
    $options = get_option('post_formats');
    $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
    $output = '';
    foreach($formats as $format){
        $checked = ( @$options[$format] == 1 ? 'checked' : '' );
        $output .= '<label><input type="checkbox" id="' .$format. '" name="post_formats['.$format.']" value="1" '.$checked.'/>'.$format.'</label><br>';
    }
    echo $output;
}

function bprint_custom_header(){
    $options = get_option('custom_header');

    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.'/>Activate the Custom Header</label><br>';

}

function bprint_custom_background(){
    $options = get_option('custom_background');

    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.'/>Activate the Custom Background</label><br>';

}
