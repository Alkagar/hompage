<?php
/*
Template Name: Blog posts
*/
?>
<?php get_header(); ?>
<div class="content isotope">
    <?php 
        $args = array(
            'post_type' => array('blog-post',),
        );
        $the_query = new WP_Query($args);
    ?>
    <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php get_template_part('content', 'postbox'); ?>
    <?php endwhile; endif; ?>
    <div class="grid-sizer"></div>
</div>
<?php get_footer(); ?>
