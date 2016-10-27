<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url" content="http://cafeannhien.com/">
<meta property="og:title" content="Cà phê rang xay An Nhiên">
<meta property="og:type" content="website">
<meta property="og:image" content="http://dn.api1.kage.kakao.co.kr/14/dn/btqaWlTUTtD/Jtsl6FoQWSZG1rb2wAEEy1/o.jpg">
<meta property="og:description" content="Cung cấp các loại cà phê rang xay mộc, nguyên chất">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" type="image/jpg" href=<?php echo get_template_directory_uri() . '/images/2.jpg';?> />
<?php wp_head(); ?>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . '/js/jquery.lazyload.js';?> ></script>
</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
      <div class="container">
        <div class="row">
					<div class="col-md-4 col-sm-8 col-xs-12 site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo get_template_directory_uri() . '/images/logo-slogan-an-blue.png'; ?>" alt="<?php bloginfo('name'); ?>" /></a>
					</div>
					<div class="col-md-8 col-sm-4 col-xs-12">
						<div class="btn-menu"></div>
						<nav id="mainnav" class="mainnav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php sydney_slider_template(); ?>

	<div class="header-image">
		<?php sydney_header_overlay(); ?>
		<img class="header-inner" src="<?php echo get_template_directory_uri() . '/images/slide-1.jpg'; ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>">
	</div>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">
