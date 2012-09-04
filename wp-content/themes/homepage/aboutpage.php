<?php
   /*
   Template Name: aboutpage
   */
?>
<?php get_header(); ?>
<div class='post'>
    <div class='home-header'>
        <h1>programmers blog <span class='size80p'>about it adventures, photo and others...</span></h1>
    </div>
    <div class='post-content-static'>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php echo the_content(); ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts yet.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
