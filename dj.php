<?php
/*
Template Name: DJ
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main dj" role="main">

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
      ?>
      <div class='<?php echo "$slug" ?> section-page'><a name='<?php echo "$slug" ?> '></a>
        <div class="page-title">
          <h1><a href="<?php echo "$permalink";?>"><?php echo "$title" ?></a></h1>
        </div>
        <div class="page-content">
          <?php echo "$content" ?>
        </div>
      </div>
      <?php } ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
