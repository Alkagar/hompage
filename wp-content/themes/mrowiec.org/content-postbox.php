<?php
    $thumbs = get_field('thumbnail_image');
    $url = str_replace('8080', '10382', $thumbs['url']);

    $thumbWidth = get_field('thumbnail_width');
    $thumbHeight = get_field('thumbnail_height');

    $basicSize = 240;
    $defaultParametersForce = 'return=true&md5=0&force=true';
    $defaultParameters = 'return=true&md5=0';
    $grayscale = '&effect=grayscale';
    $actualThumbWidth = $thumbWidth * $basicSize;
    $actualThumbHeight = $thumbHeight * $bakicSize;
    $bw = thumbGen($url, $actualThumbWidth, $actualThumbHeight, $defaultParameters.$grayscale);
    $col = thumbGen($url, $actualThumbWidth, $actualThumbHeight, $defaultParameters);

    $class = 'box-'.$thumbWidth.'-'.$thumbHeight;
    $postTypeClass = 'post-type-' . get_post_type();
?>

<div class="<?php echo $class, ' ', $postTypeClass; ?> post-box">
    <div class="post-box-container">
        <a class='permalink' href='<?php the_permalink(); ?>'>
            <div class="post-thumbnail" 
                style="background-image:url(<?php echo $col;?>); background-image:url(<?php echo $bw;?>);" 
                data-image="<?php echo $thumbs['url']; ?>" 
                data-color="<?php echo $col;?>" 
                data-black="<?php echo $bw;?>">
                <div class="post-title">
                    <?php the_field('title'); ?>
                </div>
            </div>
        </a>
        <div class="post-meta">
            <div class="post-date"> 
                on <span class='sort-date'>
                    <?php the_modified_date('d/m/Y'); ?>
                </span>
            </div>
            <div class="post-long-description"> 
                <div class='colorbox-photo-description'>
                    <div>
                        <?php echo get_the_term_list(get_the_ID(), 'photo-tags', 'Tags: ',', ',''); ?>
                    </div>
                    <div>
                        Description: <?php the_field('short_description'); ?> 
                    </div>
                    <div>
                        <?php
                            $commentsCount = get_comments_number();
                            $commentsLink = sprintf( _n( 'One comment', '%1$s comments', $commentsCount), $commentsCount);
                        ?>
                        <a href='<?php the_permalink(); ?>'><?php echo $commentsLink; ?> - add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
