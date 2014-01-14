<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>mrowiec.org</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="page">
            <h1>
                programmers blog about it adventures, photo and others...
            </h1>
            <div class="menu">
                <ol class='social'>
                    <li><a href="https://www.facebook.com/jakub.mrowiec.5"><img class='social-ico' src='<?php echo get_template_directory_uri(); ?>/gfx/social-ico/f.png' /></a></li>
                    <li><a href="http://www.flickr.com/photos/alkagar"><img class='social-ico' src='<?php echo get_template_directory_uri(); ?>/gfx/social-ico/gh.png' /></a></li>
                    <li><a href="https://github.com/alkagar"><img class='social-ico' src='<?php echo get_template_directory_uri(); ?>/gfx/social-ico/fcr.png' /></a></li>
                    <li><a href="mailto:jakub [at] mrowiec.org"><img class='social-ico' src='<?php echo get_template_directory_uri(); ?>/gfx/social-ico/mail.png' /></a></li>
                </ol>
                <?php 
                    $args = array(
                        'menu'            => 'navigation',
                        'container'       => '',
                        'menu_class'      => 'navigation',
                        'link_before'     => '[ ',
                        'link_after'      => ' ]',
                        'items_wrap'      => '<ol class="%2$s">%3$s</ol>',
                    );
                    wp_nav_menu($args); 
                ?>
            </div>
