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
				<?php echo ('[mc4wp_form]'); ?>
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
				<h3>Tambien puedes escucharnos en:</h3>
				<a href="http://centovacast.mexiserver.com:2199/tunein/electronic.pls"> <img alt="" src="https://electmind.files.wordpress.com/2015/03/winamp-logo-e1426830607462.jpg" /></a>
				<a href="http://centovacast.mexiserver.com:2199/tunein/electronic.asx"> <img alt="" src="https://electmind.files.wordpress.com/2015/03/wm-e1426830598827.jpg" /></a>
				<a href="	http://centovacast.mexiserver.com:2199/tunein/electronic.ram"> <img alt="" src="https://electmind.files.wordpress.com/2015/03/real-e1426830589141.jpg" /></a>
				<a href="	http://centovacast.mexiserver.com:2199/tunein/electronic.qtl"> <img alt="" src="https://electmind.files.wordpress.com/2015/03/quicktime-logo-e1426830569126.jpg" /></a>
				<a href="rtsp://204.12.193.98:1935/mobiles/electronic.stream"> 	<img src="https://www.mexiserver.com/players/mobiles/android.png" alt="" /></a>
				<a href="http://204.12.193.98:1935/mobiles/electronic.stream/playlist.m3u8"> 	<img src="https://www.mexiserver.com/players/mobiles/iphone.png" alt="" /></a>
				<a href="rtsp://204.12.193.98:1935/mobiles/electronic.stream"> 	<img src="https://www.mexiserver.com/players/mobiles/blackberry.png" alt="" /></a>
				<a href="rtsp://204.12.193.98:1935/mobiles/electronic.stream"> 	<img src="https://www.mexiserver.com/players/mobiles/windows.png" alt="" /></a>
				<a href="http://204.12.193.98:1935/mobiles/electronic.stream/playlist.m3u8"> 	<img src="https://www.mexiserver.com/players/mobiles/nokia.png" alt="" /></a>
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
