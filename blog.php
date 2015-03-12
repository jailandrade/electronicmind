<?php
/**
 * Template Name: Blog
 * @package electronicmind
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main blog" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>

      <div class="posts">
        <?php
          $current_date ="";
          $count_posts = wp_count_posts();
          $nextpost = 0;
          $published_posts = $count_posts->publish;
          $myposts = get_posts(array('posts_per_page'=>$published_posts));
          foreach($myposts as $post) :
           $nextpost++;
           setup_postdata($post);
           $date = get_the_date("F Y");
           if($current_date!=$date):
              if($nextpost>1): ?>
                </ol>
                <?php endif; ?>
                <strong><?php echo $date; ?></strong><ol start = "<?php echo $nextpost; ?>">
                <?php $current_date=$date;
           endif; ?>
           <li><?php the_title(); ?> &bull; <a href="<?php the_permalink(); ?>">link</a></li>
          <?php endforeach; wp_reset_postdata(); ?>
          </ol>

      </div>

      <?php
      // If comments are open or we have at least one comment, load up the comment template
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
      ?>

    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
