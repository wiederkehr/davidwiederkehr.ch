<div id="basic-accordion"><!--Parent of the Accordion-->

	<div id="accordion_nav">
		<div id="schliessen-header" class="accordion_headings" >&uarr;</div>
		<div id="aktuell-header" class="accordion_headings <?php if(is_home()) echo('header_highlight') ;?>" >Aktuell</div>
		<div id="wichtig-header" class="accordion_headings" >Wichtig</div>
		<div id="themen-header" class="accordion_headings" >Themen</div>
		<div id="archiv-header" class="accordion_headings" >Archiv</div>
		<div id="suche-header" class="accordion_headings" >Suche</div>
	</div><!--End Accorion Nav-->

	<div id="accordion_body">

		<div id="aktuell-content">
			<div class="accordion_child">
				<?php mdv_recent_posts(3, '<li>', '</li>', true, 1, true, false); ?>
			</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->

		<div id="wichtig-content">
			<div class="accordion_child">
				<?php aka_show_articles(); ?>
			</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->

		<div id="themen-content">
			<div class="accordion_child">
				<?php wp_tag_cloud('smallest=1&largest=3&unit=em&number=0&format=flat&orderby=name&order=DESC&exclude=&include='); ?>
	  	</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->
		
		<div id="archiv-content">
			<div class="accordion_child">
				<ul>
					<?php wp_get_archives('type=weekly'); ?>
				</ul>
	  	</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->
		
		<div id="suche-content">
			<div class="accordion_child">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	  	</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->
		
		<div id="schliessen-content">
			<div class="accordion_child">
	  	</div><!--End Accorion Child-->
		</div><!--End Accorion Content-->
	</div><!--End Accorion Body-->
</div><!--End Accorion-->