<!doctype html>
<html>
    <head>
        <title>Jakub Mrowiec - homepage</title>
        <meta name="description" content="" />
        <meta name="keywords" content="photo it php mysql javascript" />
        <meta name="author" content="Jakub Alkagar Mrowiec - jakub@mrowiec.org" />
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/hover-photo.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/show-photo.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blog.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/codecolorer.css" type="text/css" media="screen" />
        <?php comments_popup_script(700, 600); ?>
    </head>
    <body>
       <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42924000-1', 'mrowiec.org');
          ga('send', 'pageview');

       </script>
        <div class='page'>
            <div class='sidebar'>
                <div class='sidebar-logo'>
                    <a href='http://mrowiec.org' title='Alkagar' class='logo' style="font-size:600%;"></a>
                </div>
                <div class='navigation'>
                    <ul class='menu-page'>
                        <li><a href='/home' title='Home'>home</a></li>
                        <?php
                            $menu = array('it' => 'blog', 'photo' => 'photo', 'tea' => 'tea', 'portfolio' => 'portfolio');
                            foreach($menu as $name => $link) {
                                $categoryId = get_cat_ID($name);
                                $categoryLink = get_category_link($categoryId);
                            ?>
                            <li><a href='<?php echo $categoryLink; ?>' title='<?php echo $name;?>'><?php echo $link; ?></a></li>
                            <?php
                            }
                        ?>
                        <li><a href='/about' title='About me'>about</a></li>
                    </ul>
                    <ul class='menu-social'>
                        <li><a target='window_facebook' href='https://www.facebook.com/jakub.mrowiec.5'><img src="<?php bloginfo('stylesheet_directory'); ?>/gfx/f.png" width="16" class='site_social_ico' alt="fb" /></a></li>
                        <li><a target='window_flickr' href='http://www.flickr.com/photos/alkagar'><img src="<?php bloginfo('stylesheet_directory'); ?>/gfx/fcr.png" width="16" class='site_social_ico' alt="flcr" /></a></li>
                        <li><a target='window_github' href='https://github.com/alkagar'><img src="<?php bloginfo('stylesheet_directory'); ?>/gfx/gh.png" width="16" class='site_social_ico' alt="gh" /></a></li>
                        <li><a href='mailto:jakub [at] mrowiec.org'><img src="<?php bloginfo('stylesheet_directory'); ?>/gfx/mail.png" width="16" class='site_social_ico' alt="@" /></a></li>
                    </ul>
                   <div>
                      <?php get_sidebar('main');?>
                   </div>
                </div>
                <div class='footer'>
                    <a href='<?php echo wp_login_url(); ?>' class='login' title='Login'></a>
                </div>
            </div>
            <div class='content'>
