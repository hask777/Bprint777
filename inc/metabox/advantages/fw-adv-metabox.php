<?php

function add_custom_advantage_font_awesome_metabox()
{
    add_meta_box("advantage_font_awsome_meta_box", "Font Awesome Icon", "custom_advantage_font_awesome_metabox_callback", "advantage", "side", "high", null);
}


function custom_advantage_font_awesome_metabox_callback($post)
{
    wp_nonce_field('save_advantage_font_awesome_data', "custom_advantage_font_awesome_metabox_nonce");
    $value = get_post_meta( $post->ID, '_advantage_font_awesome_value_key', true);

    $icons_list = array(
        'icon'=>'img',
        'icon_2'=> 'icon'
    );

    ?>
        <label for="fa-dropdown">Icon</label>
        <select class="" name="fa-dropdown">
            <?php foreach( $icons_list as $key=>$value): ?>
                <option ><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select>
    <?php
}

function save_advantage_font_awesome_data($post_id)
{
    // if( ! isset( $_POST['custom_advantage_font_awesome_metabox_nonce']))
    // {
    //     return;
    // }
    //
    // if( ! p_verify_nonce( $_POST['custom_advantage_font_awesome_metabox_nonce'], 'save_advantage_font_awesome_data' ))
    // {
    //     return;
    // }
    //
    // if( defined( 'DOING_AUTOSAVE' && DOING_AUTOSAVE ) )
    // {
    //     return;
    // }
    //
    // if( ! current_user_can( 'edit_post', $post_id ))
    // {
    //     return;
    // }
    //
    // if( ! isset( $_POST['fa-dropdown']))
    // {
    //     return;
    // }

    $fa_data =  $_POST['fa-dropdown'];
    update_post_meta( $post_id, '_advantage_font_awesome_value_key', $fa_data );
}


add_action( 'add_meta_boxes', 'add_custom_advantage_font_awesome_metabox' );
add_action( 'save_post', 'save_advantage_font_awesome_data' );
