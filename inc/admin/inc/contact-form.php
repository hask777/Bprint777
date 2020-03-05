<?php
function bprint_contact_section(){
    echo 'Customize your Contact Information';
}

function bprint_activate_contact(){
    $options = get_option('activate_contact');

    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.'/></label><br>';

}
