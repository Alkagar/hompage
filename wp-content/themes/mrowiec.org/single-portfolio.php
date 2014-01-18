<?php get_header(); ?>
<div class="content single-portfolio">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article>
    <header class='page'>
        <h2> <?php echo the_title(); ?> </h2>
        <div class='post-meta'>
            posted on <?php the_date('d/m/Y'); ?>
        </div>
    </header>

    <?php if(the_content()) : ?>
    <?php the_content(); ?>
    <?php endif;?>

    <p>
    <?php echo get_the_term_list(get_the_ID(), 'technologies', 'Technologies: ',', ',''); ?>
    </p>

    <h2> Images </h2>
    <div class='images'>
    <?php 
        $count = 1;
        $imagesCount = 4;
        while($count <= $imagesCount) {
            $fieldName = 'portfolio_images_' . $count;
            if(get_field($fieldName)) {
                $image = get_field($fieldName); 
                $fullUrl = $image['url'];
                $thumb = $image['sizes']['medium'];
            ?>
            <a class='image portfolio-images' href='<?php echo $fullUrl;?>'><img src='<?php echo $thumb; ?>' /></a>
            <?php

            }
            $count++;
        }
    ?>
    </div>


    </article>
    <?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>
