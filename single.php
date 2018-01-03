	<?php get_header(); ?>
<div id="content" class="column span-22 last">
<!-- ——————————————————————————————————————————————————————————————————— POSTS -->
	<div id="posts" class="column span-16">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- ——————————————————————————————————————————————————————————————————— ENTRY -->
		<div class="entry">
			<div class="entry_heading">
				<?php the_time('d. F Y'); ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink für &laquo;<?php the_title()?>&raquo;"><?php the_title(); ?></a></h2>
			</div><!-- #entry_heading -->
			<div class="entry_meta">
				Von <?php the_author_firstname(); ?> <?php the_author_lastname(); ?>
				<span>&bull;</span>
				<?php show_wordcount()?> Wörter über <?php the_category(' / '); ?>
				<span>&bull;</span>
				<a href="<?php comments_link(); ?>" title="Kommentar zu &laquo;<?php the_title(); ?>&raquo; schreiben"><?php comments_number('0 Kommentare', '1 Kommentar', '% Kommentare'); ?></a>
				<?php edit_post_link('Bearbeiten', '<span>&bull;</span>'); ?>
			</div><!-- #entry_meta -->
			<div class="entry_content">
				<div class="entry_lead">
					<?php the_tags('<span class="tags">', ' / ', '</span>'); ?>
					<?php the_excerpt(); ?>
				</div><!-- #entry_lead -->
				<?php the_content('Weiterlesen', false, ''); ?>
				<hr class="entry_divider"/>
			</div><!-- #entry_content -->
			<?php wp_link_pages(); ?>
<!-- ——————————————————————————————————————————————————————————————————— TRACKBACKS -->
			<!--
			<?php trackback_rdf(); ?>
			-->
<!-- ——————————————————————————————————————————————————————————————————— COMMENTS -->
			<?php comments_template(); ?>
		</div><!-- #entry -->
<!-- ——————————————————————————————————————————————————————————————————— NAVIGATION -->
		<div id="page_nav">
			<div class="alignleft"><?php previous_post_link() ?></div>
			<div class="alignright"><?php next_post_link() ?></div>
		</div>
		<?php endwhile; ?>
		<?php else: ?>
<!-- ——————————————————————————————————————————————————————————————————— NO POSTS -->
		<h2>Suche war Ergebnislos</h2>
		<p><?php _e('Leider ist auf dieser Seite kein Beitrag zum gesuchten Thema zu finden'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		<?php endif; ?>
	</div><!-- #posts -->
<!-- ——————————————————————————————————————————————————————————————————— SIDEBAR -->
	<div id="sidebar" class="column span-5 prepend-1 last">
		<?php get_sidebar(); ?>
	</div><!-- #sidebar -->
</div><!-- #content -->
<!-- ——————————————————————————————————————————————————————————————————— FOOTER -->
	<?php get_footer(); ?>