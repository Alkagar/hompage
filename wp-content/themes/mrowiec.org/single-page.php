<?php
    /*
    Template Name: -page-
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
</div>
<?php get_footer(); ?>
