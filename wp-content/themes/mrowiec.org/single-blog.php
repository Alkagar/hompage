<?php get_header(); ?>
<div class="content single-blog">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article>
    <header class='page'>
        <h2> <?php the_field('title'); ?> </h2>
        <div class='post-meta'>
            posted on <?php the_date('d/m/Y'); ?><?php echo get_the_term_list(get_the_ID(), 'blog-tags', 'Tags: ',', ',''); ?>
        </div>
    </header>

    <?php if(the_content()) : ?>
    <?php the_content(); ?>
    <?php endif;?>

    <?php comments_template(); ?> 
    </article>
    <?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>
