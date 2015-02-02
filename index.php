<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package electronicmind
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				$args = array(
					'sort_order' => 'ASC',
					'sort_column' => 'menu_order',
					'hierarchichal' => 1,
					'exclude' => '',
					'child_of' => 0,
					'parent' => 0,
					'exclude_tree' => '',
					'number' => '',
					'offset' => 0,
					'post_type' => 'page',
					'post_status' => 'publish'
				);

				$pages = get_pages($args);
				// start loop
				foreach ($pages as $page_data) {
					$content = apply_filters('the_content', $page_data->post_content);
					$title = $page_data->post_title;
					$slug = $page_data->post_name;
					$permalink = get_page_link($page_data->ID);
					$id = $page_data -> ID;
			?>
			<div class='<?php echo "$slug" ?> section-page'>
				<a name='<?php echo "$slug" ?> '></a>
				<div class="page-title">
					<h1><a href="<?php echo "$permalink";?>"><?php echo "$title" ?></a></h1>
				</div>
				<div class="page-content">
					<?php

					$argslist = array(
						'authors'      => '',
						'child_of'     => $id,
						'date_format'  => get_option('date_format'),
						'depth'        => 0,
						'echo'         => 1,
						'exclude'      => '',
						'include'      => '',
						'link_after'   => '',
						'link_before'  => '',
						'post_type'    => 'page',
						'post_status'  => 'publish',
						'show_date'    => '',
						'sort_column'  => 'menu_order, post_title',
									'sort_order'   => '',
						'title_li'     => __(''),
						'walker'       => ''
					);


					switch($slug) {
						case "generos":
							wp_list_pages( $argslist );
							break;
						case "djs":
							// Template of DJs
							wp_list_pages( $argslist );
							break;
						case "contacto":
							if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); }
							break;
						default:
							echo "$content";
					}
					?>
				</div>
			</div>
			<?php } ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
