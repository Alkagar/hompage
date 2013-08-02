$(document).ready(function() {
    $('.post-list-box').each(function() {
        var post = $(this);
        var thumbs = $.trim(post.find('.post-thumbnail').text());

        var thumb_bw = thumbs + '&resize=true&bw=true';
        var thumb_c = thumbs + '&resize=true';

        var thumbnail = post.find('.post-list-photo-thumb');
        
        var showThumbnail = 'url("' + thumb_bw + '")';
        var hoverThumbnail = 'url("' + thumb_c + '")';
        var img = $('<img />').attr('src', thumb_c);
        $('body').append(img);
        img.remove();
        thumbnail.css('background-image', showThumbnail);
        thumbnail.hover(function() {
            thumbnail.css('background-image', hoverThumbnail);
        }, function() {
            thumbnail.css('background-image', showThumbnail);
        });
    });
});
