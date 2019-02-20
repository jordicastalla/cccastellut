<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Aquesta entrada està protegida. Introdueix la contrasenya per veure els comentaris.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = '';
?>

<!-- You can start editing here. -->



<?php $nr=0; ?> <!-- this var keeps count of comments number -->

<?php if ($comments) : ?>
	<p id="comments-count"><?php comments_number('No hi ha comentaris', 'Un comentari', '% comentaris' );?> per a &#8220;<?php the_title(); ?>&#8221;</p>
	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>
	
	<?php $comment_type = get_comment_type(); ?>
	<?php if($comment_type == 'comment') { ?>
	

		<li class="<?php if ( $comment->comment_author_email == get_the_author_email() ) echo 'author'; else echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			<span><?php echo get_avatar( $comment, $size = '50', $default); ?></span>

			<p class="comment-author"><span class="commentnr"><?php echo ++$nr; ?></span><?php comment_author_link() ?></p>

			<p class="commentmetadata">escrit el <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('j F Y') ?> at <?php comment_time('G:i') ?></a> <?php edit_comment_link('edita','',''); ?></p>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>El teu comentari serà publicat en breu.</em>
			<?php endif; ?>

			<div class="comment-text"><?php comment_text() ?><div class="clear"></div></div>
		</li>
	
	<?php } else { $trackback = true; } /* End of is_comment statement */ ?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>
	
	<?php if ($trackback == true) { $nr=0; ?>		
		
		<p id="comments-count">Trackbacks</p>
		<ol>
			<?php foreach ($comments as $comment) : ?>
			<?php $comment_type = get_comment_type(); ?>
			<?php if($comment_type != 'comment') { ?>
			<li><span class="commentnr"><?php echo ++$nr . '. ';?></span><?php comment_author_link() ?></li>
			<?php } ?>
			<?php endforeach; ?>
		</ol>
		
	<?php } ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">No es poden fer més comentaris.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3 id="comment-form-title">Deixa un comentari</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">inicia sessió</a> per a comentar.</p>

</div><!-- #respond -->
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Connectat com a<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Nom <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Correu (privat) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Envia" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

</div><!-- #respond -->

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
