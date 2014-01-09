<?php
    $thumbs = get_field('thumbnail_image');

    if(isset($generateSlider) && $generateSlider){
        $thumbWidth = 1;
        $thumbHeight = 1;
    } else {
        $thumbWidth = get_field('thumbnail_width');
        $thumbHeight = get_field('thumbnail_height');
    }
    $basicSize = 240;
    $fullUrl = $thumbs['url'];
    $url = str_replace('8080', '10382', $thumbs['url']);
    $defaultParameters = 'return=true&md5=0';
    $grayscale = '&effect=grayscale';
    $bw = thumbGen($url, $thumbWidth * $basicSize, $thumbHeight * $basicSize, $defaultParameters.$grayscale);
    $col = thumbGen($url, $thumbWidth * $basicSize, $thumbHeight * $basicSize, $defaultParameters);

    $class = 'box-'.$thumbWidth.'-'.$thumbHeight;
    $postTypeClass = 'post-type-' . get_post_type();
?>

<div class="<?php echo $class, ' ', $postTypeClass; ?> post-box">
    <div class="post-box-container">
        <a class='permalink' href='<?php the_permalink(); ?>'>
            <div class="post-thumbnail" 
                style="background-image:url(<?php echo $col;?>); background-image:url(<?php echo $bw;?>);" 
                data-image="<?php echo $fullUrl; ?>" 
                data-color="<?php echo $col;?>" 
                data-black="<?php echo $bw;?>">
                <div class="post-title">
                    <?php the_field('title'); echo ' ( ' . get_post_type() . ' ) '; ?>
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
                <?php echo get_the_tag_list('Tags: ',', ',''); ?>
                <br />
                Description: <?php the_field('long_description'); ?> 
            </div>
        </div>
    </div>
</div>
