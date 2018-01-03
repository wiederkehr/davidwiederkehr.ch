	<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Bitte diese Seite nicht direkt aufrufen. Danke!');
		if (!empty($post->post_password)) { // if there's a password
			if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				<p class="nocomments">Auch die Kommentare sind durch das Passwort gesch&uuml;tzt.<p>
				<?php
				return;
			}
		}
		/* wenn Du die Kommentare in verschiedenen Farben anzeigen magst */
		$oddcomment = 'alt';
	?>
<!-- ab hier kannst Du aendern -->
	<?php if ($comments) : ?>
<!--zeigt die Anzahl der Kommentare an-->
<div id="comments_heading">
	<h3><?php comments_number('Keine Kommentare', 'Ein Kommentar', '% Kommentare' );?> zu &laquo;<?php the_title(); ?>&raquo;</h3>
</div><!-- #comments_heading -->
<!-- <span id="trackback_link"><a href="<?php trackback_url(display); ?>" title="">Trackback Link</a></span> -->
	<!--das zeigt jeweils einen Kommentar in einer geordneten Liste-->
<ol id="comments">
	<?php foreach ($comments as $comment) : ?>
		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			<div class="comment_heading">
				<h4><?php comment_author_link() ?></h4>
				<!--Link zum Kommentar, Datum des Kommentars,Link zum Editieren-->
				<div class="comment_meta">
					<?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr <?php edit_comment_link('Bearbeiten','<strong>&#124;</strong>',''); ?>
				</div><!-- .comment_meta -->
			</div><!-- .comment_heading -->
			<!--Hier beginnt der Kommentartext-->
			<div class="comment_content">
				<!--wenn der Kommentar in der Warteschleife steht-->
				<?php if ($comment->comment_approved == '0') : ?>
				<p><strong>Vielen Dank, <br/>doch ihr Kommentar muss erst noch freigegeben werden.</strong></p>
				<?php endif; ?>
				<?php comment_text() ?>
			</div><!-- .comment_content -->
		</li>
<!--Ende eines Kommentars-->

<!--Wichtig , wenn Du die Kommentare immer anders haben magst-->
	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
<!--nicht loeschen-->
	<?php endforeach; /* end for each comment */ ?>
	</ol>
<!--Ende der ganzen Kommentarliste-->
 <?php else : // wenn es noch keinen Kommentar gibt ?>
  <?php if ('open' == $post->comment_status) : ?> 
		<!-- wenn Kommentare erlaubt sind, aber noch keiner da ist. -->
	<div id="comments_heading">
		<h3><?php comments_number('Keine Kommentare', 'Ein Kommentar', '% Kommentare' );?> zu &laquo;<?php the_title(); ?>&raquo;</h3>
	</div><!-- #comments_heading -->
<!-- 	<span id="trackback_link"><a href="<?php trackback_url(display); ?>" title="">Trackback Link</a></span> -->
	 <?php else : // comments are closed ?>
		<!-- Kommentare sind geschlossen. -->
		<div id="comments_heading">
			<h3>Die Diskussion für &laquo;<?php the_title(); ?>&raquo; ist geschlossen</h3>
		</div><!-- #comments_heading -->
<!--nicht loeschen-->
	<?php endif; ?>
	<?php endif; ?>

<!--wenn Kommentare erlaubt sind-->
	<?php if ('open' == $post->comment_status) : ?>
<!--Formular zum Kommentarschreiben-->
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>Du musst <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">angemeldet</a> sein, um kommentieren zu k&ouml;nnen.</p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<fieldset id="comments_form">
			<legend>Einen Kommentar schreiben</legend>
	<?php if ( $user_ID ) : ?>
		<p>Angemeldet als: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="von diesem Account abmelden">Abmelden &raquo;</a></p>
	<?php else : ?>
	<div id="comment_labels">
		<label for="author">Name <small><?php if ($req) echo "(erforderlich)"; ?></small></label>
		<input type="text" name="author" id="author" class="text" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />

		<label for="email">eMail <small><?php if ($req) echo "(erforderlich,"; ?> wird nicht ver&ouml;ffentlicht)</small></label>
		<input type="text" name="email" id="email" class="text" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
		
		<label for="url">Webseite</label>
		<input type="text" name="url" id="url" class="text" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
	</div><!-- #comment_labels -->
	<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->
	<label for="comment">Kommentar</label>
	<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
	<p>
		<input name="submit" type="submit" class="btn" id="submit" tabindex="5" value="senden" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>
	<?php do_action('comment_form', $post->ID); ?>
	</fieldset>
</form><!--Ende der Kommentarform-->

<?php endif; // nie loeschen ?>
<?php endif; // wenn Du das loescht faellt Dir der Himmel auf den Kopf  ?>