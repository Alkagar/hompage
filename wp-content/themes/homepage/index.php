<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class='post-list-box'>
                    <div class='post-list-photo-thumb'></div>
                    <div class='post-date size80p'><?php the_time('j F Y'); ?></div>
                    <div class='post-tags size80p'><?php the_tags(', '); ?></div>
                    <div class='post-list-title'><a href='<?php the_permalink() ?>' title='Permanent Link to <?php the_title_attribute(); ?>'><?php the_title(); ?></a></div>
                </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts yet.'); ?></p>
                <?php endif; ?>
<?php get_footer(); ?>
