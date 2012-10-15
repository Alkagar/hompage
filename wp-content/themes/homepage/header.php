<!doctype html>
<html>
   <head>
      <title>hompejdż</title>
      <meta name="description" content="" />
      <meta name="keywords" content="" />
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
      <?php comments_popup_script(700, 600); ?>
   </head>
   <body>
      <div class='page'>
         <div class='sidebar'>
            <div class='sidebar-logo'>
               <a href='http://mrowiec.org' class='logo' style="font-size:600%;">a</a>
            </div>
            <div class='navigation'>
               <ul class='menu-page'>
                  <li><a href='/home'>home</a></li>
                  <?php
                     $menu = array('it' => 'blog', 'photo' => 'photo', 'tea' => 'tea', 'portfolio' => 'portfolio');
                     foreach($menu as $name => $link) {
                        $categoryId = get_cat_ID($name);
                        $categoryLink = get_category_link($categoryId);
                     ?>
                     <li><a href='<?php echo $categoryLink; ?>'><?php echo $link; ?></a></li>
                     <?php
                     }
                  ?>
                  <li><a href='/about'>about</a></li>
               </ul>
               <ul class='menu-social'>
                  <li><a href='https://www.facebook.com/jakub.mrowiec.5'>F</a></li>
                  <li><a href='http://www.flickr.com/people/75799873@N06/'>Fcr</a></li>
                  <li><a href='https://github.com/alkagar'>GH</a></li>
                  <li><a href='mailto:jakub [at] mrowiec.org'>@</a></li>
               </ul>
            </div>
            <div class='footer'>
               <a href='<?php echo wp_login_url(); ?>' class='login'></a>
            </div>
         </div>
         <div class='content'>
