<?php 
    get_header(); 
    global $wp_query;
    $wp_query->in_the_loop = true;
?>
                <div class='post'>
                    <div class='post-header'>
                        <div class='post-date'><?php the_time('j F Y'); ?></div>
                        <div class='post-tags'><?php the_tags(''); ?></div>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class='post-content'>
                        <?php echo the_content(); ?>
                    </div>
                </div>
<?php get_footer(); ?>
