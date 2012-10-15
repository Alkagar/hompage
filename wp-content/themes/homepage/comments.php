<?php $wp_query->is_single = true; ?>
<?php if ( $comments ) : ?>
<h3><?php echo comments_number(); ?></h3>
<div class='table comments-list'>
    <?php foreach ($comments as $comment) : ?>
    <div class='row comment-row' id="comment-<?php comment_ID() ?>">
        <div class='cell comment-avatar'> <?php echo get_avatar( $comment, 32 ); ?> </div>
        <div class='cell comment-content'> <p> <?php comment_text() ?> </p> </div>
    </div>
    <div class='row'>
        <div class='cell comment-edit'>
           &nbsp;
        </div>
        <div class='cell comment-menu'>
            <?php comment_date() ?> <?php comment_time() ?>
            <?php _e('by'); ?> 
            <?php comment_author_link() ?>,
        </div> 
    </div>

    <?php endforeach; ?>
</div>
<?php else : // If there are no comments yet ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div class='comments-form' style='display:none;'>
    <h3 id="postcomment"><?php _e('Leave a comment'); ?></h3>

    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
    <?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
            <label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('*'); ?></small></label>
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
            <label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('*'); ?></small></label>
            <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
            <label for="url"><small><?php _e('Website'); ?></small></label>
            <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea><br />
            <input name="submit" type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__('Submit Comment')); ?>" />
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    <?php endif; // If registration required and not logged in ?>
</div>
<?php else : // Comments are closed ?>
    <p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>

<p>
<?php comments_popup_link('add your comment', 'add your comment', 'add your comment'); ?>
</p>
