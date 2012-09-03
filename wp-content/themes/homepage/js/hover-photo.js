$(document).ready(function() {
    $('.post-list-box').each(function() {
        var post = $(this);
        var thumbs = post.find('.post-thumbnail');
        var thumb_bw = thumbs.find('a[title="main_bw"]');
        var thumb_c = thumbs.find('a[title="main_c"]');
        var thumbnail = post.find('.post-list-photo-thumb');
        var showThumbnail = 'url("' + thumb_bw.attr('href') + '")';
        var hoverThumbnail = 'url("' + thumb_c.attr('href') + '")';
        thumbnail.css('background-image', showThumbnail);
        thumbnail.hover(function() {
            thumbnail.css('background-image', hoverThumbnail);
        }, function() {
            thumbnail.css('background-image', showThumbnail);
        });
    });
});
