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
<title> Cafe An Nhiên! - Cà phê rang xay nguyên chất 100%.</title>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url" content="http://cafeannhien.com/">
<meta property="og:title" content="Cà phê rang xay An Nhiên - Uy tín, ngon, sạch, nguyên chất 100%">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Cà phê rang xay An Nhiên">
<meta property="og:image" content="http://cafeannhien.com/wp-content/themes/sydney/images/logo-slogan-281016.png">
<meta name="keywords" content="Cà phê nguyên chất, Cà phê rang xay An Nhiên - rang mộc, sạch, nguyên chất 100%. Không phụ gia, không hương liệu tạo mùi. Thương hiệu nổi tiếng uy tín số 1 VN. Vì sức khỏe cộng đồng">
<meta name="description" content="Cà phê nguyên chất, rang xay mộc, không phụ gia, không hương liệu tạo mùi.">
<meta name="p:domain_verify" content="7b2d2bfc6cfd0b40e56039dfa81083d4"/>
<meta name="google-site-verification" content="-XEAo6JpfMZUIKc3TaB1mMEM7l6v-Ghbib8pP7K-8lk"/>

<link rel="canonical" href="http://cafeannhien.com/"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" type="image/png" href=<?php echo get_template_directory_uri() . '/images/favicon.png';?> />
<?php wp_head(); ?>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . '/js/jquery.lazyload.js';?>
 ></script>
 <script type="text/javascript" src=<?php echo get_template_directory_uri() . '/js/libraries/all.js';?>
 ></script>
 <script type="text/javascript" src=<?php echo get_template_directory_uri() . '/js/libraries/widgets.js';?>
 ></script>
 <!-- FACEBOOK -->
<script type="text/javascript">
	window.fbAsyncInit = function() {
    FB.init({
      appId      : '1778200855774533',
      xfbml      : true,
      version    : 'v2.8'
    });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- TWITTER -->
<script>
  window.twttr = (function(d, s, id) {
    var t, js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://platform.twitter.com/widgets.js';
    fjs.parentNode.insertBefore(js, fjs);
    return window.twttr || (t = {
      _e: [],
      ready: function(f) {
        t._e.push(f)
      }
    });
  }(document, 'script', 'twitter-wjs'));
</script>

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
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo get_template_directory_uri() . '/images/logo-slogan-281016.png'; ?>" alt="<?php bloginfo('name'); ?>" /></a>
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
