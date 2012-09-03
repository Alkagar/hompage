<?php get_header(); ?>
<div class='post'>
    <div class='home-header'>
        <h1>programmers blog <span class='size80p'>about it adventures, photo and others...</span></h1>
        <div class='banner'></div>
    </div>
    <div class='post-content-static'>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php echo the_content(); ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts yet.'); ?></p>
        <?php endif; ?>
        <h2> recent posts </h2>
        <?php 
            query_posts( 'cat=-9,-5' );
            $i = 0; if ( have_posts() ) : while ( have_posts() && $i++ < 4) : the_post(); 
        ?>
            <?php include('post-box.php'); ?>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts yet.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
