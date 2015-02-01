<?php
/*
Template Name: Generos
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <!-- How to attach the content -->

    <?php
      $argslist = array(
        'authors'      => '',
        'child_of'     => 0,
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
        'title_li'     => __('Pages'),
        'walker'       => ''
      );

      // $id = $page_data->ID;
    ?>
    <div class="content">
      <?php wp_list_pages( $argslist );?>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
