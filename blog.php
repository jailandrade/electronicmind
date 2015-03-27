<?php
/**
 * Template Name: Blog
 * @package electronicmind
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main site-blog" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>

    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
  <section class="posts">
    <?php if(have_posts()) : ?>
	     <?php while(have_posts()) : the_post(); ?>
				<?php
					$count_posts = wp_count_posts();
					$nextpost = 0;
					$published_posts = $count_posts->publish;
					$myposts = get_posts(array('posts_per_page'=>$published_posts));
					foreach($myposts as $post) :
						$nextpost++;
						setup_postdata($post);
				?>
				<div class="post">
					<div class="post-header">
						<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</div>
          <article class="post-content">
            <?php the_excerpt();?>
          </article>
				</div>
				<?php endforeach; wp_reset_postdata(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
  </section>
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
