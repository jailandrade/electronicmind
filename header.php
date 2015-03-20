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
		<audio src="http://www.mexiserver.com/reproductores/dewplayer-vol.swf?autoplay=true&amp;mp3=http://204.12.193.98:8315/;stream.nsv">

		</audio>
		<!-- <object id="dewplayer-vol" width="100%" height="20" type="application/x-shockwave-flash" data="http://www.mexiserver.com/reproductores/dewplayer-vol.swf?autoplay=true&amp;mp3=http://204.12.193.98:8315/;stream.nsv">
		<param name="wmode" value="transparent" />
		<param name="movie" value="http://www.mexiserver.com/reproductores/dewplayer-vol.swf?autoplay=true&amp;mp3=http://204.12.193.98:8315/;stream.nsv" />
		</object> -->
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php bloginfo('url'); ?>"><img class="site-logo" src="<?php echo bloginfo('template_directory');?>/assets/img/logo.png"></a>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
