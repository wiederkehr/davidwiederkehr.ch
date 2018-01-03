<div id="footer">
	<p>&copy; <?php print date("Y"); ?> <a href="<?php echo get_bloginfo('home'); ?>" title="Website von David Wiederkehr">David Wiederkehr</a>.
		<a href="<?php echo get_bloginfo('home'); ?>" title="Website von David Wiederkehr">&laquo;<?php echo get_bloginfo('name'); ?>&raquo;</a> 
		wurde von <a href="http://artillery.ch" title="Portfolio von Benjamin Wiederkehr">Artillery</a> 
		gestaltet und läuft mit 
		<a href="http://wordpress.org" title="Official Wordpress Website">Wordpress</a>
		<?php echo "&nbsp;".get_bloginfo('version'); ?> 
		auf einem <a href="http://www.novacompany.ch" title="">NovaCompany</a> Server. 
		Die Beiträge können als 
		<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">
		<img src="http://www.mozilla.org/images/feed-icon-14x14.png" alt="RSS Feed" title="RSS Feed" />RSS	2.0</a>
		 abonniert werden.
		<?php wp_loginout(); ?> als Editor.
	</p>
	<?php do_action('wp_footer'); ?>
</div><!-- #footer -->
</div><!-- #container -->
</body>
</html>