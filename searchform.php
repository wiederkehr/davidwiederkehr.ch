<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
		<input type="text" class="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input type="submit" class="btn" id="searchsubmit" value="Search" />
	</div>
</form>
