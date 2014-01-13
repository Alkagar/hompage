<?php 
    get_header(); 
    global $_POST_TYPE;
?>
<div class="content isotope">
    <?php 
        $args = array(
            'post_type' => $_POST_TYPE,
        );
        $the_query = new WP_Query($args);
    ?>
    <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php get_template_part('content', 'postbox'); ?>
    <?php endwhile; endif; ?>
    <div class="grid-sizer"></div>
</div>
<?php get_footer(); ?>
