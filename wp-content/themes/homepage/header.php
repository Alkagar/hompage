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
        <link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blog.css" type="text/css" media="screen" />
    </head>
    <body>
        <div class='page'>
            <div class='sidebar'>
                <div class='sidebar-logo'>
                    <a href='http://mrowiec.org' class='logo'></a>
                </div>
                <div class='navigation'>
                    <ul class='menu-page'>
                        <li><a href='/category/home'>home</a></li>
                        <?php
                            $menu = array('it' => 'blog', 'photo' => 'photo', 'tea' => 'tea');
                            foreach($menu as $name => $link) {
                                $categoryId = get_cat_ID($name);
                                $categoryLink = get_category_link($categoryId);
                            ?>
                            <li><a href='<?php echo $categoryLink; ?>'><?php echo $link; ?></a></li>
                            <?php
                            }
                        ?>
                        <li><a href='/category/about'>about</a></li>
                    </ul>
                    <ul class='menu-social'>
                        <li><a href=''>F</a></li>
                        <li><a href=''>GH</a></li>
                        <li><a href=''>NK</a></li>
                        <li><a href=''>@</a></li>
                    </ul>
                </div>
                <div class='footer'>
                    <a href='<?php echo wp_login_url(); ?>' class='login'></a>
                </div>
            </div>
            <div class='content'>