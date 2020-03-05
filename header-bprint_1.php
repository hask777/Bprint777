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
    <header class="header_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex space-between center-vertical">
					<div class="header_1_logo">
						<?php if ( has_custom_logo() ) : ?>
							<div class="site-logo"><?php the_custom_logo(); ?></div>
						<?php else: ?>
							<?php $blog_info = get_bloginfo( 'name' ); ?>
							<?php if ( ! empty( $blog_info ) ) : ?>
									<?php if ( is_front_page() ) : ?>
										<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<!-- NAV MENU -->
					<?php
						// if( has_nav_menu('primary') ){
						// 	wp_nav_menu( [
						// 		'theme_location'  => 'primary',
						// 		'menu'            => 'main menu',
						// 		'container'       => 'nav',
						// 		'container_class' => 'header_1_nav',
						// 		'container_id'    => '',
						// 		'menu_class'      => 'main_menu flex',
						// 		'menu_id'         => '',
						// 		'echo'            => true,
						// 		'fallback_cb'     => 'wp_page_menu',
						// 		'before'          => '',
						// 		'after'           => '',
						// 		'link_before'     => '',
						// 		'link_after'      => '',
						// 		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						// 		'depth'           => 3,
						// 		'walker'          => new Walker_Nav_Menu_Bprint(),
						// 	] );
						// }
					?>
					<div class="container">
						<nav class="header_1_nav mega-menu navbar-megamenu" role="navigation">
							<?php
								if( has_nav_menu('primary') ){
									wp_nav_menu( [
										'theme_location'  => 'primary',
										'menu'            => 'main menu',
										'menu_class'      => 'main_menu flex nav navbar-nav',
										'menu_id'         => 'primary-menu',
										'walker'          => new WalkerNav(),
									] );
								}
							?>
						</nav>
					</div>


					<!-- END NAV MENU -->
					<!-- <nav class="header_1_nav">
						<ul class="main_menu flex">
							<li><a href="#">HOME</a></li>
							<li><a href="#">FEAUTURES</a></li>
							<li><a href="#">SHOP</a></li>
							<li class="menu-item-has-children">
								<a href="#">PRODUCT</a>
								<i class="fas fa-caret-down"></i>
								<ul class="sub-menu col-md-12 flex">
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">
												<h5>link</h5>
											</a>
											<ul class="sub-menu level_2">
												<li><a href="#">link</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
								</ul>
							</li>
							<li><a href="#">OUR GALLERY</a></li>
							<li><a href="#">START DESIGNING</a></li>
					</nav> -->
					<nav class="header_1_mobile_nav">
						<div class="header_1_mobile_nav_burger">
							<i class="fas fa-bars"></i>
						</div>
					</nav>
					<div class="header_1_right_side flex">
						<div class="auth">
							<i class="fas fa-lock"></i>
							Login/Register
						</div>
						<div class="shop_cart">
							<i class="fas fa-shopping-cart"></i>
							My Cart
						</div>
					</div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
	<!-- <section class="left_side_menu_1">
		<div class="left_side">
			<div class="left_side_menu_1_logo">
				<div class="header_1_logo  flex center-vertical center-horizontal">
					<h1>Bprint</h1>
				</div>
				<div class="left_side_menu_1_logo_desc flex center-vertical center-horizontal">
					Some text here Some text here Some text here
				</div>
			</div>
			<div class="left_side_menu_1_nav">
				<ul class="left_side_menu_1_list">
					<li>
						<a href="#">
							FEAUTURES
						</a>
					</li>
					<li>
						<a href="#">
							SHOP
						</a>
					</li>
					<li class="menu-item-has-children">
						<a href="#">
							PRODUCT
							<i class="fas fa-caret-down">
							</i>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
									link
								</a>
							</li>
							<li>
								<a href="#">
									link
								</a>
							</li>
							<li>
								<a href="#">
									link
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							OUR GALLERY
						</a>
					</li>
					<li>
						<a href="#">
							START DESIGNING
						</a>
					</li>
				</ul>
			</div>
			<div class="left_side_menu_1_about">
				<h5>ABOUT</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="left_side_menu_1_social">
				<h5>SOCIAL</h5>
				<div class="footer_1_header_social_icons flex">
					<i class="fab fa-facebook-square"></i>
					<i class="fab fa-twitter-square"></i>
					<i class="fab fa-google-plus-square"></i>
					<i class="fab fa-vimeo-square"></i>
					<i class="fab fa-youtube-square"></i>
					<i class="fab fa-linkedin"></i>
				</div>
			</div>
		</div>
		<div class="left_side_menu_1_close_button">
			x
		</div> -->

	</section>

	<div id="content" class="site-content">
