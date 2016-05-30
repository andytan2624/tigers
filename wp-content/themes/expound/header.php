<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Expound
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>
</head>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=1.1" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/claw.ico" />

<body <?php body_class(); ?>>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/front.js" type="text/javascript"></script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WPXRV8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WPXRV8');</script>
<!-- End Google Tag Manager -->

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding" style="background-image:url('<?php bloginfo('template_url'); ?>/images/banner-bg.jpg')">
			<div class="site-title-group">
				<img src="<?php bloginfo('template_url'); ?>/images/tiger-logo.png?v=2" alt="Indians Logo"/>
				<div class="header-title">Gosford Tigers Australian Football Club</div>
			</div>
		</div>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'expound' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'expound' ); ?>"><?php _e( 'Skip to content', 'expound' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
			<?php do_action( 'expound_navigation_after' ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">

		<div class="noticeboard-container">
			<h1>Noticeboard</h1>
			<?php
			$loop = new WP_Query( array( 'post_type' => 'notice', 'post_status' => 'publish', 'orderby' => 'post_date', 'order' => 'DESC' ) );
			while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="notice">
					<img src="<?php bloginfo('template_directory'); ?>/images/thumbtack-red.png" class="leftcorner" title="thumbtack"/>
					<img src="<?php bloginfo('template_directory'); ?>/images/thumbtack-red-reverse.png" class="rightcorner" title="thumbtack"/>
					<h2><?= get_the_title() ?></h2>
					<?= the_content() ?>
				</div>
				<?php
			endwhile;
			?>
		</div>