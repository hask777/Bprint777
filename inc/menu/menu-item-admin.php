<?php
 //  MEGA MENU CUSTOM FIELDS SECTION

// Create fields

function fields_list(){
    return array(
        'megamenu' => 'Activate MegaMenu',
        'column-divider' => 'Column Divider',
        'divider' => 'Inline Divider',
        'featured-image' => 'Feautered Image',
        'description' => 'Description',
    );
}

//  Setup fields
function megamenu_fields($id, $item, $depth, $args){
    $fields = fields_list();

    foreach($fields as $_key => $label):

        $key = sprintf('menu-item-%s', $_key);
        $id = sprintf('edit-%s-%s', $key, $item->ID);
        $name = sprintf('%s[%s]', $key, $item->ID);
        $value = get_post_meta($item->ID, $key, true);
        $class = sprintf('field-%s', $_key);

        ?>
            <p class="description description-wide"><?php echo esc_attr($class); ?></p>
            <label for="<?php echo esc_attr($id); ?>">
                <input id="<?php echo esc_attr($id); ?>" type="checkbox" name="<?php echo esc_attr($name); ?>" value="1"
                <?php echo ($value == 1) ? 'checked="checked"' :  '';?>
                ><?php echo esc_attr($label); ?>
            </label>
        <?

    endforeach;

}
add_action( 'wp_nav_menu_item_custom_fields', 'megamenu_fields', 10, 4 );

// Show columns
function megamenu_columns($columns){
    $fields = fields_list();

    $columns = array_merge($columns, $fields);
    return $columns;
}
add_filter('manage_nav-menus_columns', 'megamenu_columns', 99);

// Save/Update fields
function megamenu_save($menu_id, $menu_item_db_id, $menu_item_args){
    if(defined('DOING_AJAX') && DOING_AJAX){
        return;
    }

    check_admin_referer( 'update-nav_menu', 'update-nav-menu-nonce' );

    $fields = fields_list();

    foreach($fields as $_key => $label){
        $key = sprintf('menu-item-%s', $_key);

        // Sanitize
        if( ! empty($_POST[ $key ][ $menu_item_db_id ]) ){
            $value = $_POST[ $key ][ $menu_item_db_id ];
        }else{
            $value = null;
        }

        // Save or Update
        if( ! is_null($value) ){
            update_post_meta($menu_item_db_id, $key, $value);
        }else{
            delete_post_meta($menu_item_db_id, $key);
        }
    }
}

add_action('wp_update_nav_menu_item', 'megamenu_save', 10, 3);

// Update Walker Nav Class
function megamenu_walker_nav($walker){
    $walker = 'MegaMenu_Walker_edit';
    if(!class_exists($walker)){
        require_once 'wallker-nav-menu-edit-admin.php';
    }
    return $walker;
}
add_filter('wp_edit_nav_menu_walker', 'megamenu_walker_nav', 99);
