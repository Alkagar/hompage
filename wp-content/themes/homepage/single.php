<?php 
    get_header(); 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
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
    <div class="clear"></div>
    <div class='post-comments'>
        <?php comments_template(); ?>
    </div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts yet.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
