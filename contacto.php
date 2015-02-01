<?php
/**
 * Template Name: Contacto
 * @package electronicmind
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); }

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
