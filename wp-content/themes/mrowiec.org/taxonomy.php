<?php 
    get_header(); 
    $taxonomy = get_taxonomy( get_query_var( 'taxonomy' ) );
    $term = get_query_var( 'term');
?>
<header>
<h2> posted in: <u><?php echo $term; ?></u> </h2>
</header>
<div class="content isotope">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_template_part('content', 'postbox'); ?>
    <?php endwhile; endif; ?>
    <div class="grid-sizer"></div>
</div>
<?php get_footer(); ?>
