<?php
   class Alk_Social_Widget extends WP_Widget {
      private $socials = array(
         'facebook' => "<a target='window_facebook' href='[href]'><img src='[imgPath]/gfx/f.png' width='16' class='site_social_ico' alt='fb' /></a>",

         'flickr' => "<a target='window_flickr' href='[href]'><img src='[imgPath]/gfx/fcr.png' width='16' class='site_social_ico' alt='flcr' /></a>",
         'github' => "<a target='window_github' href='[href]'><img src='[imgPath]/gfx/gh.png' width='16' class='site_social_ico' alt='gh' /></a>",
         'mail' => "<a href='[href]'><img src='[imgPath]/gfx/mail.png' width='16' class='site_social_ico' alt='@' /></a>",
      );
      public function __construct() {
         parent::__construct(
            'Alk_Social_Widget',
            'Alk_Social_Widget',
            array('description' => __('Alkagar\'s Social Widget'),)
         );
      }
      public function widget($args, $instance) {
         $imgPath = get_bloginfo('stylesheet_directory');
         echo $args['before_widget'];
         echo "<ul class='menu-social'>";
            foreach($this->socials as $social => $tag) {
               echo '<li>';
               $a = str_replace('[href]', $instance[$social], $tag);
               $a = str_replace('[imgPath]', $imgPath, $a);
               echo $a;
               echo '</li>';
            }
            echo "</ul>";
         echo $args['after_widget'];
      }
      public function form($instance) {
         $lSocials = array();
         foreach($this->socials as $social => $tag) {
            $lSocials[$social] = isset($instance[$social]) ? $instance[$social] : '';
            echo $this->_getFieldMockup($social, $lSocials[$social]);
         }
      }
      public function update($new_instance, $old_instance) {
         $instance = array();
         foreach($this->socials as $social => $tag) {
            $instance[$social] = ( !empty($new_instance[$social])) ? strip_tags($new_instance[$social]) : '';
         }
         return $instance;
      }

      private function _getFieldMockup($field, $value) {
         $fieldName = $this->get_field_name($field);
         $fieldId = $this->get_field_id($field); 
         $value = esc_attr($value);
         return "
         <p>
         <label for='$fieldName'>$field</label> 
         <input class='widefat' id='$fieldId' name='$fieldName' type='text' value='$value' />
         </p>
         ";
      }
   }
