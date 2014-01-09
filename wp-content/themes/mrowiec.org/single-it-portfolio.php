<?php get_header(); ?>
<div class="content">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article>
    <header class='page'>
        <h2> <?php echo the_title(); ?> </h2>
    </header>
    <?php the_field('long_description'); ?>
    <?php 
        $image = get_field('thumbnail_image'); 
        $imageUrl = $image['sizes']['large'];
    ?>
    <img src='<?php echo $imageUrl;?>' />

    </article>
    <?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>
