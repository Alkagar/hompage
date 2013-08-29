<?php
   /*
   Plugin Name: Alkagar Social Plugin
   Description: Add ASocial Widget to your wordpress
   Version: 1.0
   Author: Jakub Mrowiec - Alkagar
   Author URI: http://mrowiec.org
   Plugin URI: http://mrowiec.org
   */

   // defines
   // =======
   define('ALK_SOCIAL_DIR', plugin_dir_path(__FILE__));
   define('ALK_SOCIAL_URL', plugin_dir_url(__FILE__));

   // includes
   // ========
   include_once(ALK_SOCIAL_DIR . 'widgets/Alk_Social_Widget.php');

   // hooks
   // =====
   register_activation_hook(__FILE__, 'alk_social_plugin_activation');
   register_deactivation_hook(__FILE__, 'alk_social_plugin_deactivation');

   // actions
   // =======
   add_action('widgets_init', 'register_alk_social_widget');

   // function
   // ========
   function register_alk_social_widget() {
      register_widget('Alk_Social_Widget');
   }
   function alk_social_plugin_activation() {
   }
   function alk_social_plugin_deactivation() {    
   }

