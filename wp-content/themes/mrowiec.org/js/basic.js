jQuery(document).ready(function($) {
    configureThumbnails();
    configureIsotope();
    configureColorbox();

    function configureColorbox() {
        // show colorbox on portfolio pages with images gallery
        $('.single-portfolio .images a.image').colorbox({
            'maxWidth' : '90%',
            'maxHeight' : '90%',
            'rel' : 'portfolio-images'
        });

        // show colorbox on listing pages when click on photo post type
        $('.post-type-photo .post-thumbnail').click(function() {
            // get long description from photo post thumbnail
            var longDescription = $(this).parent().parent().find('.post-long-description').html();
            // triger colorbox
            $.colorbox({
                href: $(this).data('image'), 
                'maxWidth' : '90%', 
                'maxHeight' : '90%', 
                'title' : function() { 
                    return longDescription;
                }
            });
        });
    }

    function configureThumbnails() {
        // prevent default link action from photo type thumbnails
        $('.post-type-photo a.permalink').click(function(e) {
            e.preventDefault();
        });

        $('.post-thumbnail').mouseover(function() {
            // set background image to color image
            $(this).css({
                'background-image' : 'url(' + $(this).data('color') + ')'
            });

            // add post date to post box
            var metaDate = $(this).parent().parent().find('.post-meta .post-date');
            $(this).find('.post-title').append(metaDate);
        });
        $('.post-thumbnail').mouseout(function() {
            // revert back to b/w background image
            $(this).css({
                'background-image' : 'url(' + $(this).data('black') + ')'
            });

            // remove post date from post box
            var metaDate = $(this).find('.post-date');
            var meta = $(this).parent().parent().find('.post-meta');
            meta.append(metaDate);
        });
    }

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


