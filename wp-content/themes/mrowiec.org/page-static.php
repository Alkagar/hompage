<?php
/*
Template Name: Static page
*/
?>
<?php get_header(); ?>
<div class="content">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article>
    <header class='page'>
        <h2> <?php echo the_title(); ?> </h2>
    </header>
    <?php the_content(); ?>

    </article>
    <?php endwhile; endif; ?>

    <footer class='post'>
        <h2> Fetured posts </h2>
        <div class='slider isotope'>
        <?php 
            $args = array(
                'post_type' => array('photo', 'it-portfolio'),
            );
            wp_reset_query();
            $generateSlider = true;
            $the_query = new WP_Query($args);
        ?>
        <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php include(locate_template('content-postbox.php')); ?>
        <?php endwhile; endif; ?>
        </div>
    </footer>
</div>
<?php get_footer(); ?>
