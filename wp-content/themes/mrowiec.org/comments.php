<?php
    if ( post_password_required() ) {
        return;
    }
?>

<div id="comments">
    <?php if ( have_comments() ) : ?>
    <h3>
        <?php
            $commentsCount = get_comments_number();
            printf( _n( 'One comment:', '%1$s comments:', $commentsCount), $commentsCount);
        ?>
    </h3>
    <ol class="comment-list">
        <?php
            wp_list_comments( array(
                'style'      => 'div',
                'format' => 'html5',
                'avatar_size' => 0
            ) );
        ?>
    </ol><!-- .comment-list -->

    <?php if ( ! comments_open() ) : ?>
    <p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
    <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php 
        comment_form(array(
            'comment_notes_after' => '',
            'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
            'fields' => array(
                'author' => '<p class="comment-form-author">' . 
                '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '" size="30"' . $aria_req . ' />' . 
                ' <label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '</p>',

                'email' =>
                '<p class="comment-form-email">' . 
                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />' . 
                ' <label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '</p>',

                'url' =>
                '<p class="comment-form-url">' . 
                '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                '" size="30" />' . 
                ' <label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
                '</p>',)
            )); 
        ?>

    </div><!-- #comments -->
