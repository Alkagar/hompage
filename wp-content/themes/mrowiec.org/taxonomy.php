<?php get_header(); ?>
<div class="content isotope">
    <?php 
    ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_template_part('content', 'postbox'); ?>
    <?php endwhile; endif; ?>
    <div class="grid-sizer"></div>
</div>
<?php get_footer(); ?>
