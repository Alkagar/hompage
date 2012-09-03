<div class='post-list-box'>
    <div class='post-list-photo-thumb'></div>
    <div class='post-date size80p'><?php the_time('j F Y'); ?></div>
    <div class='post-tags size80p'><?php the_tags(''); ?></div>
    <div class='post-list-title'><a href='<?php the_permalink() ?>' title='Permanent Link to <?php the_title_attribute(); ?>'><?php the_title(); ?></a></div>
    <div class='hide post-thumbnail'>
        <?php
            $args = array(
                'post_type' => 'attachment',
                'numberposts' => -1,
                'post_status' => null,
                'post_parent' => $post->ID
            );
            $attachments = get_posts( $args );
            if ( $attachments ) {
                foreach ( $attachments as $attachment ) {
                    $title = apply_filters( 'the_title', $attachment->post_title );
                    if(in_array($title, array('thumbnail'))) {
                        $bimg = base64_encode(alk_get_attachment_url($attachment->ID));
                        echo get_bloginfo('stylesheet_directory') . '/image.php?img=' . $bimg; 
                    }
                }
            }
        ?>
    </div>
</div>
