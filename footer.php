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
				<h3>Webs Amigas</h3>
				<ul>
					<li><a>Some page</a></li>
					<li><a>Some page</a></li>
					<li><a>Some page</a></li>
					<li><a>Some page</a></li>
					<li><a>Some page</a></li>
				</ul>
			</div>
			<div class="subscribe"></div>
			<div class="social">
				<h3>Siguenos en: </h3>
				<ul>
					<li class="facebook-icon"><a href="http://www.facebook.com/ElecMind" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/facebook.png"></a></li>
					<li class="twitter-icon"><a href="http://www.twitter.com/#!/Elecmind" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/twitter.png"></a></li>
					<li class="googleplus-icon"><a href="https://plus.google.com/u/0/109919203968486042477/posts" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/googleplus.png"></a></li>
					<li class="soundcloud-icon"><a href="https://soundcloud.com/elecmind" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/soundcloud.png"></a></li>
					<li class="youtube-icon"><a href="https://www.youtube.com/user/ElectronicMindEM" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/youtube.png"></a></li>
					<li class="mixcloud-icon"><a href="http://www.mixcloud.com/elecmind/" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/mixcloud.png"></a></li>
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
