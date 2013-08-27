<?php
   function alk_get_attachment_url( $id = 0, $size = 'thumbnail', $permalink = false, $icon = false, $text = false ) {
      $id = intval( $id );
      $_post = & get_post( $id );

      if ( empty( $_post ) || ( 'attachment' != $_post->post_type ) || ! $url = wp_get_attachment_url( $_post->ID ) )
      return __( 'Missing Attachment' );

      if ( $permalink )
      $url = get_attachment_link( $_post->ID );

      $post_title = esc_attr( $_post->post_title );

      if ( $text )
      $link_text = $text;
      elseif ( $size && 'none' != $size )
      $link_text = wp_get_attachment_image( $id, $size, $icon );
      else
      $link_text = '';

      if ( trim( $link_text ) == '' )
      $link_text = $_post->post_title;

      return $url;
   }
   // register sidebars
   if ( function_exists('register_sidebar') ) {
      register_sidebar(array(
         'name'          => 'main',
         'id'            => 'main',
         'description'   => 'main sidebar - left hand side',
         'class'         => '',
         'before_widget' => '',
         'after_widget'  => '',
         'before_title'  => '',
         'after_title'   => '',
      ));
   }
