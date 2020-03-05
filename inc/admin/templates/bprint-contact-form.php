<h1>Bprint Theme Support</h1>
<?php settings_errors(); ?>


<form class="bprint_general_form" action="options.php" method="post">
    <?php settings_fields('bprint-contact-options'); ?>
    <?php do_settings_sections('hask777-bprint_theme_contact_page'); ?>
    <?php submit_button(); ?>
</form>
