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
	<!-- jQuery -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/5cd2947846.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site site-wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apogee-physicians' ); ?></a>
	<header class="header">
		<!-- Apogee Login Bar -->
		<div class="login-bar group">
			<!-- <p>What's best for the patient is best for the practice. ™</p> -->
			<div class="full-width-container">
				<a href="#">Apogee Family Login</a>
				<a href="#">Patient Portal</a>
				<div class="social-top">
					<a href="https://www.facebook.com/" class="facebook">
						<?php include('_svg/icon-facebook.php'); ?>
					</a>
					<a href="https://twitter.com/" class="twitter">
						<?php include('_svg/icon-twitter.php'); ?>
					</a>
					<a href="https://www.linkedin.com/" class="linkedin">
						<?php include('_svg/icon-linkedin.php'); ?>
					</a>
				</div>
			</div>
		</div>
		<!-- Navigation Bar -->
		<div class="nav-bar group">
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
				<div class="mobile-nav">
					<a href="#">Apogee Family Login</a>
					<a href="#">Patient Portal</a>
					<div class="social-top">
						<a href="https://www.facebook.com/" class="facebook">
							<?php include('_svg/icon-facebook.php'); ?>
						</a>
						<a href="https://twitter.com/" class="twitter">
							<?php include('_svg/icon-twitter.php'); ?>
						</a>
						<a href="https://www.linkedin.com/" class="linkedin">
							<?php include('_svg/icon-linkedin.php'); ?>
						</a>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
