<?php get_header(); ?>
<div class="content single-photo">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article>
    <header class='page'>
        <h2> <?php the_field('title'); ?> </h2>
        <div class='post-meta'>
            posted on <?php the_date('d/m/Y'); ?>
        </div>
    </header>

    <?php if(get_field('long_description')) : ?>
    <p>
        <?php the_field('long_description'); ?>
    </p>
    <?php endif;?>

    <p>
    <?php echo get_the_term_list(get_the_ID(), 'photo-tags', 'Tags: ',', ',''); ?>
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
