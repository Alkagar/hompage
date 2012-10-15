<?php
   /* Don't remove these lines. */
   add_filter('comment_text', 'popuplinks');
   while( have_posts()) : the_post();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title><?php echo get_option('blogname'); ?> - <?php echo sprintf(__("Comments on %s"), the_title('','',false)); ?></title>
      <meta name="author" content="Jakub Alkagar Mrowiec - jakub@mrowiec.org" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/hover-photo.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/show-photo.js"></script>
      <script src="http://yandex.st/highlightjs/7.2/highlight.min.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blog.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="http://yandex.st/highlightjs/7.2/styles/pojoaque.min.css">
      <script>hljs.initHighlightingOnLoad();</script>
   </head>
   <body id="commentspopup">
      <h1 id="header"><a href="" title="<?php echo get_option('blogname'); ?>"><?php echo get_option('blogname'); ?></a></h1>

      <p><a href="<?php echo get_post_comments_feed_link($post->ID); ?>"><?php _e("<abbr title=\"Really Simple Syndication\">RSS</abbr> feed for comments on this post."); ?></a></p>

      <?php
         // this line is WordPress' motor, do not delete it.
         $commenter = wp_get_current_commenter();
         extract($commenter);
         $comments = get_approved_comments($id);
         $commentstatus = get_post($id);





         if (!empty($commentstatus->post_password) && $_COOKIE['wp-postpass_'. COOKIEHASH] != $commentstatus->post_password) {
            echo(get_the_password_form());
         } else { ?>


         <?php if ('open' == $commentstatus->comment_status) { ?>

<div class='comments-form'>
    <h3 id="postcomment"><?php _e('Leave a comment'); ?></h3>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<input type="hidden" name="redirect_to" value="<?php echo attribute_escape($_SERVER["REQUEST_URI"]); ?>" />
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
     </div>

         <?php } else { // comments are closed ?>
         <p><?php _e("Sorry, the comment form is closed at this time."); ?></p>
         <?php } ?>



         <?php if ($comments) { ?>
<div class='table comments-list'>
            <?php foreach ($comments as $comment) { ?>
            <div class='row comment-row' id="comment-<?php comment_ID() ?>">
               <div class='cell comment-avatar'> <?php echo get_avatar( $comment, 32 ); ?> </div>
               <div class='cell comment-content'> <p> <?php comment_text() ?> </p> </div>
            </div>
            <div class='row'>
               <div class='cell comment-edit'>
                  <?php edit_comment_link(__("Edit This")); ?>
               </div>
               <div class='cell comment-menu'>
                  <?php comment_date() ?> <?php comment_time() ?>
                  <?php _e('by'); ?> 
                  <?php comment_author_link() ?>,
               </div> 
            </div>
            <?php } // end for each comment ?>
         </div>
         <?php } else { // this is displayed if there are no comments so far ?>
         <?php } ?>
<?php
         } // end password check
      ?>

      <div><strong><a href="javascript:window.close()"><?php _e("Close this window."); ?></a></strong></div>

      <?php // if you delete this the sky will fall on your head
         endwhile;
      ?>

      <!-- // this is just the end of the motor - don't touch that line either :) -->
      <?php //} ?>
      <script type="text/javascript">
         <!--
         document.onkeypress = function esc(e) {
               if(typeof(e) == "undefined") { e=event; }
               if (e.keyCode == 27) { self.close(); }
         }
         // -->
      </script>
   </body>
</html>
