jQuery(document).ready(function($) {
    configureIsotope();


    $('.post-thumbnail').mouseover(function() {
        $(this).css({
            'background-image' : 'url(' + $(this).data('color') + ')'
        });
    });
    $('.post-thumbnail').mouseout(function() {
        $(this).css({
            'background-image' : 'url(' + $(this).data('black') + ')'
        });
    });

    $('.post-thumbnail').mouseover(function() {
        var metaDate = $(this).parent().parent().find('.post-meta .post-date');
        $(this).find('.post-title').append(metaDate);
    });
    $('.post-thumbnail').mouseout(function() {
        var metaDate = $(this).find('.post-date');
        var meta = $(this).parent().parent().find('.post-meta');
        meta.append(metaDate);
    });


    $('.post-type-photo .post-thumbnail').click(function() {
        var longDescription = $(this).parent().parent().find('.post-long-description').html();
        $.colorbox({
            href: $(this).data('image'), 
            'maxWidth' : '90%', 
            'maxHeight' : '90%', 
            'title' : function() { 
                return longDescription;
            }
        });
    });
    $('.post-type-photo a.permalink').click(function(e) {
        e.preventDefault();
    });

    function configureIsotope() {
        var container = $('.isotope');
        container.isotope(isotopeGetArgs());

        $(window).resize(function() {
            container.isotope(isotopeGetArgs());
        });
    }

    function isotopeGetArgs() {
        var args = {
            // options
            getSortData : {
                date: function (e) {
                    var dateStr = $(e).find('.sort-date').text(),
                    dateArray = dateStr.split('/'),
                    year = dateArray[2],
                    month = dateArray[0],
                    day = dateArray[1],
                    aa = year+''+month+''+day
                    console.log(aa);
                    return aa;
                }
            },
            perfectMasonry : {
                layout: 'vertical',
                liquid: false,
                columnWidth: $('.grid-sizer').width(),
                rowHeight: $('.grid-sizer').height()
            },
            itemSelector: '.post-box',
            layoutMode: 'perfectMasonry'
        };
        return args;
    }
});


