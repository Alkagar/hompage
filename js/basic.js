$(document).ready(function() {
    configureIsotope();

    $('.post-thumbnail').mouseover(function() {$(this).find('.post-meta').show();});
    $('.post-thumbnail').mouseout(function() {$(this).find('.post-meta').hide();});

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
