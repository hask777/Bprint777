<h1>Bprint Theme Options</h1>
<?php settings_errors(); ?>
<?php

    $picture= esc_attr(get_option('profile_picture'));
    $first_name = esc_attr(get_option('first_name'));
    $last_name = esc_attr(get_option('last_name'));
    $full_name = $first_name . ' ' .$last_name;
    $decription = esc_attr(get_option('user_description'));
?>

<div class="bprint_sidebar_preview">
    <div class="bprint_sidebar">
        <div class="image_container">
            <div id="profile-picture-preview" class="profile_picture" style="background-image: url(<?php print $picture; ?>)"></div>
        </div>
        <h1 class="bprint_username"><?php print $full_name; ?></h1>
        <h2 class="sunset_description"><?php print $decription; ?></h2>
        <div class="icons_wrapper">

        </div>
    </div>
</div>

<form class="bprint_general_form" action="options.php" method="post">
    <?php settings_fields('bprint-settings-group'); ?>
    <?php do_settings_sections('hask777-bprint'); ?>
    <?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
</form>
