<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}

		/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Comments', '1 Comment:', '% comments' );?></h3>

	<ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		
			<div class="commentTitleArea">
				
				<div class="commentTitleContent">
				
					<div class="commentmetadata">
					
						<h5><?php comment_author_link() ?> <span><?php _e('on'); ?> <?php comment_date('F jS, Y') ?></span><?php if ($comment->comment_approved == '0') : ?><span> &nbsp;|&nbsp; <span class="blogModeration"> <?php _e('Your comment is awaiting moderation.'); ?></span></span><?php endif; ?></h5>
					 	
					</div>
				
				</div>
				
			</div>
		
			<div class="commentArea">
			
				<?php comment_text() ?>
			
			</div>
	
		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
	
	<?php endforeach; /* end for each comment */ ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

	<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<script type="text/javascript">
	$(function() {
		inputreplace('#user_login', 'Username');
		inputreplace('#user_pass', 'Password');
	});
</script>
<div style="float: right; width: 210px; margin: 0px 0px 20px 20px;">
					
	<div class="leftAreaHolder">
			
		<div class="leftTitleBar" id="green">
				
			<h1>Account log-in</h1>
					
		</div>
				
		<div class="leftBox">
				
			<?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar('loginArea') ) : ?>
			<?php endif; ?>
			
		</div>
				
		<div class="leftBoxBase">
					
			<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
						
		</div>
				
	</div>
					
</div>
<p>You must be logged in to post a comment. If you already have a Love Golf account, enter your username and password in the area provided. If you are already logged in on the main website you'll need to log in again to comment on the blog.</p>
<p>&nbsp;</p>
<p>Don't have a Love Golf account? It's free - <a href="/register/">register now!</a></p>
<div class="floatEnder"></div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="/my/"><?php echo $user_identity; ?></a> <span style="font-size: 0.7em;">(<a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a>)</span></p>
<p>&nbsp;</p>

<?php else : ?>

<script type="text/javascript">
	$(function() {
		inputreplace('#author', 'Your name');
		inputreplace('#email', 'Email address - will not be published');
		inputreplace('#url', 'Website');
	});
</script>

<p><input type="text" name="author" id="author" class="field" value="Your name" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></p>

<p><input type="text" name="email" id="email" class="field" value="Email address - will not be published" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></p>

<p><input type="text" name="url" id="url" class="field" value="Website" tabindex="3" /></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" tabindex="4"></textarea></p>

<p><input id="submit" name="submit" class="butTop" type="image" src="/tracker/wl/lovegolf/images/but-submit-comment.png" height="30" width="210" alt="Submit comment" tabindex="5" /></p>

<div class="floatEnder"></div>

<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?