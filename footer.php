<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package electronicmind
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footbar">
			<div class="webs">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
					<div class="sidebar-footer">
						<?php dynamic_sidebar( 'sidebar-2' )?>
					</div>
				<?php endif;?>
			</div>
			<div class="subscribe">
				<?php if ( is_active_sidebar( 'sidebar-3' ) ): ?>
					<div class="sidebar-footer">
						<?php dynamic_sidebar( 'sidebar-3' )?>
					</div>
				<?php endif;?>
			</div>
			<div class="social">
				<h3>Siguenos en: </h3>
				<ul>
					<li class="facebook-icon">
						<a href="<?php esc_url('http://www.facebook.com/ElecMind'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/facebook.png"></a>
					</li>
					<li class="twitter-icon">
						<a href="<?php esc_url('http://www.twitter.com/#!/Elecmind'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/twitter.png"></a>
					</li>
					<li class="googleplus-icon">
						<a href="<?php esc_url('https://plus.google.com/u/0/109919203968486042477/posts'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/googleplus.png"></a>
					</li>
					<li class="soundcloud-icon">
						<a href="<?php esc_url('https://soundcloud.com/elecmind'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/soundcloud.png"></a>
					</li>
					<li class="youtube-icon">
						<a href="<?php esc_url('https://www.youtube.com/user/ElectronicMindEM'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/youtube.png"></a>
					</li>
					<li class="mixcloud-icon">
						<a href="<?php esc_url('http://www.mixcloud.com/elecmind/'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/mixcloud.png"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="site-info">
			<p class="copyright">&copy; Todos los derechos reservados ElectronicMind <?php echo date("Y")?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
