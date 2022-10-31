<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mapalu
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
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mapalu' ); ?></a>
        <header id="masthead" class="site-header">

           <div class="container">
		   <div class="container__header">
                <div class="site__logo">
                    <?php
					the_custom_logo();
					?>
                </div>
                <div class="site__search">
                    <?php aws_get_search_form( true ); ?>
                </div>

                <div class="site__account">
                    Mi cuenta
                </div>
                <div class="site__cart">
                <img src="<?= get_theme_file_uri('/images/cart.png') ?>" alt="cart">
                    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"
                        title="<?php _e( 'Ver carrito' ); ?>">
                        <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>
                </div>
            </div>
		   </div>
        </header><!-- #masthead -->


		<div class="container">
		<nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mapalu' ); ?></button>
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
        </nav>
		</div>
		<!-- #site-navigation -->
