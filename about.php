<div id="about-accordion"><!--Parent of the Accordion-->
	<div id="accordion_body">
		<div id="about-content">
			<div class="accordion_child">
				<?php if(function_exists('iinclude_page')) iinclude_page(2, 'displayTitle=true&titleBefore=<h2>&displayStyle=DT_FULL_CONTENT'); ?>
					<h3>Über die Website</h3>
					<p>Momentan besteht &laquo;<?php echo get_bloginfo('name'); ?>&raquo; aus <?php if(function_exists('mdv_post_count')) mdv_post_count(); ?> Beiträge mit insgesamt
					<?php if(function_exists('mdv_post_word_count')) mdv_post_word_count(); ?> Wörter.</p>
				<div id="close-header" class="accordion_headings">Schliessen</div>
			</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->
		<div id="close-content">
			<div class="accordion_child">
	  	</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->
	</div><!--End Accorion Body-->
	<div id="accordion_nav">
		<div id="about-header" class="accordion_headings">David</div>
	</div><!--End Accorion Nav-->
</div><!--End Accorion-->
