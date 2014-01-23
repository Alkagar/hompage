<?php get_header(); ?>
<?php

$count = 1;
$imagesCount = 4;
$images = array();
while($count <= $imagesCount) {
    $fieldName = 'portfolio_images_' . $count;
    if(get_field($fieldName)) {
        $image = get_field($fieldName); 
        $images[] = $image;
    }
    $count++;
}
$areImages = !empty($images);

?>
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

    <h3>technologies</h3>
    <p>
    <?php echo get_the_term_list(get_the_ID(), 'technologies', '',', ',''); ?>
    </p>

    <?php if($areImages) :?>
        <h3> images </h3>
    <?php endif; ?>
    <div class='images'>
    <?php 
        foreach($images as $image) {
            $fullUrl = $image['url'];
            $thumb = $image['sizes']['medium'];
            ?>
            <a class='image portfolio-images' href='<?php echo $fullUrl;?>'><img src='<?php echo $thumb; ?>' /></a>
            <?php
        }
    ?>
    </div>
    </article>
    <?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>
