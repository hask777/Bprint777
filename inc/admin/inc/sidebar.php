<?php

function bprint_sidebar_options()
{
    echo 'Customize your Sidebar Information';
}

function bprint_sidebar_profile()
{
    $picture= esc_attr(get_option('profile_picture'));
    if( empty($picture) ){
        echo
        '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"/>
         <input type="hidden" id="profile-picture" name="profile_picture" value="" />';
    }else{
        echo
        '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"/>
         <input type="hidden" id="profile-picture" name="profile_picture" value="' . $picture . '" /><input type="button" class="button button-secondary" value="Remove Profile Picture" id="remove-button">';
    }

}

function bprint_sidebar_name()
{
    $first_name = esc_attr(get_option('first_name'));
    $last_name = esc_attr(get_option('last_name'));
    echo
    '<input type="text" name="first_name" value="' . $first_name . '" placeholder="First Name" />
     <input type="text" name="last_name" value="' . $last_name . '" placeholder="Last Name" />';
}

function bprint_sidebar_description()
{
    $decription = esc_attr(get_option('user_description'));
    echo '<input type="text" name="user_description" value="' . $decription . '" placeholder="description" /><i class="fab fa-twitter"></i><p class="description">Write something about yourself;</p>';
}

function bprint_sidebar_twitter()
{
    $twitter_handler = esc_attr(get_option('twitter_handler'));
    echo '<input type="text" name="twitter_handler" value="' . $twitter_handler . '" placeholder="Twitter Name" /><i class="fab fa-twitter"></i><p class="description">Input your twitter username without the @ character</p>';
}

function bprint_sanitize_twitter_handler($input)
{
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $output);
    return $output;
}
