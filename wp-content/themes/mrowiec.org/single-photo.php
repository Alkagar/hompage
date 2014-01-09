<?php get_header(); ?>
<div class="content single-photo">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article>
    <header class='page'>
        <h2> <?php the_field('title'); ?> </h2>
    </header>
    <p>
    <?php the_field('short_description'); ?>
    </p>
    <p>
    <?php the_field('long_description'); ?>
    </p>
    <p>
        <?php echo get_the_tag_list('Tags: ',', ',''); ?>
    </p>
    <?php 
        $image = get_field('thumbnail_image'); 
        $imageUrl = $image['sizes']['large'];
    ?>
    <div class='image'>
        <img src='<?php echo $imageUrl;?>' />
    </div>

    </article>
    <?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>
