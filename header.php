<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package electronicmind
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shorcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div id="radio" class="site-radio">
		<audio src="http://204.12.193.98:8315/;" controls></audio>
		</object>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php bloginfo('url'); ?>"><img class="site-logo" src="<?php echo bloginfo('template_directory');?>/assets/img/logo.png"></a>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
