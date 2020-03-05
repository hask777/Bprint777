<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bprint
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header_2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header_2_logo">
                    logo
                </div>
                <ul class="main_menu">
                    <li class="menu-item">
                        <a href="#">HOME
                            <ul class="sub-menu">
                                <li>some</li>
                                <li>some</li>
                                <li>some</li>
                            </ul>
                        </a>
                    </li>
                </ul>
                <div class="header_2_right_content">
                    content
                </div>
            </div>
        </div>
    </div>
</header>
