<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apogee_Physicians
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Apogee Physicians</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Typekit Font Scripts -->
	<script src="https://use.typekit.net/jze2xpr.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site site-wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apogee-physicians' ); ?></a>

	<header class="header group">
		<!-- nav logo -->
		<div class="header-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/_images/ap-logo.png" alt="..."/>
			</a>
		</div>
		<!-- menu trigger -->
		<a href="#" class="menu-trigger"><?php //include('_svg/icon-menu.php'); ?></a>
		<!-- main navigation -->
		<nav id="site_navigation" class="main <?php if (is_page( 'services' )) { echo 'services'; } elseif (is_page( 'home' )) { echo 'home'; }; ?>">
			<?php
				$siteNavigation = array(
					'menu_id'         => 'site-menu',
					'container'       => false,
					'echo'            => false,
					'items_wrap'      => '%3$s',
					'depth'           => 0,
				);

				echo strip_tags(wp_nav_menu( $siteNavigation ), '<a>' );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
