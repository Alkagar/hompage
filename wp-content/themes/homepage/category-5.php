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
        <div class='post-list-box'>
            <div class='post-list-photo-thumb'></div>
            <div class='post-date size80p'><?php the_time('j F Y'); ?></div>
            <div class='post-tags size80p'><?php the_tags(''); ?></div>
            <div class='post-list-title'><a href='<?php the_permalink() ?>' title='Permanent Link to <?php the_title_attribute(); ?>'><?php the_title(); ?></a></div>
        </div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts yet.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
