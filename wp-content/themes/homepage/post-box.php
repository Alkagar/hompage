<?php
   $photoClass = '';
   $categories = get_the_category($post->ID);
   foreach($categories as $category) {
      $term = $category->slug == 'photo';
      $photoClass = $term ? 'photo-box' : '';
      if($term) { break; }
   }
?>
<div class='post-list-box <?php echo $photoClass; ?>'>
   <a href='<?php the_permalink() ?>' title='Permanent Link to <?php the_title_attribute(); ?>'>
      <div class='post-list-photo-thumb'></div>
   </a>
   <div class='post-date size80p'><?php the_time('j F Y'); ?></div>
   <div class='post-tags size80p'><?php the_tags(''); ?></div>
   <div class='post-list-title'><a href='<?php the_permalink() ?>' title='Permanent Link to <?php the_title_attribute(); ?>'><?php the_title(); ?></a></div>
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
               $description = $attachment->post_content;
               if(in_array($title, array('thumbnail'))) {
                  $bimg = base64_encode(alk_get_attachment_url($attachment->ID));
                  echo "<div class='hide post-thumbnail'>";
                  echo get_bloginfo('stylesheet_directory') . '/image.php?img=' . $bimg; 
                  echo "</div>";
               }
               if($description) {
                  echo "<div class='hide post-thumbnail-description'>$description</div>";
               }
              echo "<div class='hide post-thumbnail-comment'>";
               echo '<br/>';
              $commentsNumber = get_comments_number(); 
              comments_popup_link('no comments yet (add)', 'one comment so far (add)', $commentsNumber . ' comments (add)');
              echo "</div>";

            }
         }
      ?>
</div>
