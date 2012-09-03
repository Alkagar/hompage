<?php get_header(); ?>
<div class='home-header'>
    <h1>programmers blog <span class='size80p'>about it adventures, photo and others...</span></h1>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include('post-box.php'); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts yet.'); ?></p>
<?php endif; ?>
<script type='text/javascript'>
    $('.post-list-title').click(function() {
            var url = $.trim($(this).parent('.post-list-box').find('.post-thumbnail').text());
            var alink = $('<a></a>').attr('href', url).css('display', 'none');
        var img = $('<img />').attr('src', url);
        alink.html(img);
        $('body').append(alink);
        alink.colorbox({height:'100%', photo:true});
        alink.click();
        return false;
    });
    </script>
    <?php get_footer(); ?>
