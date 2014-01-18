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
        <?php if(the_content()) : ?>
        <?php the_content(); ?>
        <?php endif;?>
    </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
