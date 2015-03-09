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
			<div class="webs"></div>
			<div class="subscribe"></div>
			<div class="social">
				<ul>
					<li class="facebook-icon"><a><img src="<?php echo bloginfo('template_directory');?>/assets/img/facebook.png"></a></li>
					<li class="twitter-icon"><a><img src="<?php echo bloginfo('template_directory');?>/assets/img/twitter.png"></a></li>
					<li class="googleplus-icon"><a><img src="<?php echo bloginfo('template_directory');?>/assets/img/googleplus.png"></a></li>
					<li class="rss-icon"><a><img src="<?php echo bloginfo('template_directory');?>/assets/img/rss.png"></a></li>
					<li class="soundcloud-icon"><a><img src="<?php echo bloginfo('template_directory');?>/assets/img/soundcloud.png"></a></li>
					<li class="youtube-icon"><a><img src="<?php echo bloginfo('template_directory');?>/assets/img/youtube.png"></a></li>
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
