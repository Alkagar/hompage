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
                <?php echo get_bloginfo('description'); ?>
            </h1>
            <div class="menu">
                <?php get_sidebar('main'); ?>
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
