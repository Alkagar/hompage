<?php get_header(); ?>
<div class='home-header'>
    <h1>programmers blog <span class='size80p'>about it adventures, photo and others...</span></h1>
</div>
<?php
    $slug = 'home';
    $categoryHome = get_category_by_slug($slug);
    $slug = 'about';
    $categoryAbout = get_category_by_slug($slug);
    query_posts($query_string . '&cat=-' . $categoryHome->cat_ID . ',-' . $categoryAbout->cat_ID);
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include('post-box.php'); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts yet.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
