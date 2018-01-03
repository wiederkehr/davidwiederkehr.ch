	<ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<li><h2>In Kürze</h2>
			<ul>
				<?php
					rewind_posts();
					query_posts('cat=7&showposts=7');
				if (have_posts()) : while (have_posts()) : the_post();
						echo '<li>';
						the_date('d. F Y');
						?>
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink für <?php the_title()?>"><?php the_title(); ?></a></h3>
						<?php
						echo the_content();
						echo '</li>';
				endwhile;
				endif;
				?>
			</ul>
		</li>
		<?php wp_list_categories('title_li=<h2>Kategorien</h2>'); ?>
		<?php get_calendar(); ?> 
		<?php //wp_list_pages('title_li=<h2>Informationen</h2>' ); ?>
		<?php wp_list_bookmarks(); ?>
		<?php endif; ?>
	</ul>