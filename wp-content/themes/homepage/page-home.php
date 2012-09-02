/*
Template Name: HOME
*/
<?php get_header(); ?>
<div class='post'>

    <div class='home-header'>
        <h1>mrowiec.org</h1>
        <h2> programmers blog about... <i>things</i></h2>
        <div class='banner'></div>
    </div>
    <div class='post-content'>
        <?php echo the_content(); ?>
    </div>

    <?php $i = 0; if ( have_posts() ) : while ( have_posts() && $i++ <= 4) : the_post(); ?>
    <div class='post-list-box'>
        <div class='post-list-photo-thumb'></div>
        <div class='post-date size80p'><?php the_time('j F Y'); ?></div>
        <div class='post-tags size80p'><?php the_category(', '); ?></div>
        <div class='post-list-title'><a href='<?php the_permalink() ?>' title='Permanent Link to <?php the_title_attribute(); ?>'><?php the_title(); ?></a></div>
    </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts yet.'); ?></p>
    <?php endif; ?>

</div>
<?php get_footer(); ?>
