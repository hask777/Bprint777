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

<body>
    <header class="header_1">


					<div class="header_1_nav">
						<ul class="main_menu flex">
							<li><a href="#">HOME</a></li>
							<li><a href="#">FEAUTURES</a></li>
							<li><a href="#">SHOP</a></li>
							<li class="item-has">
								<a href="#">PRODUCT</a>
								<i class="fas fa-caret-down"></i>
								<ul class="sub_menu">
									<li class="">category</li>
									<li class="">category 2</li>
									<li class="">category 3</li>
								</ul>
							</li>

							<li><a href="#">OUR GALLERY</a></li>
							<li><a href="#">START DESIGNING</a></li>
					</div>

    </header><!-- #masthead -->

	<div id="content" class="site-content">
