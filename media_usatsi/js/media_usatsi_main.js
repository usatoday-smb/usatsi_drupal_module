(function ($) {
    'use strict';

    Drupal.behaviors.media_usatsi = {
        attach: function (context, settings) {
            //Add Class to Tab.
           $('.tabs.primary a[href="/file/add/usatsi"]').attr('id', 'media-usatsi-tab');
        }
    };

    if ( Drupal.hasOwnProperty('ajax') ) {
        Drupal.ajax.prototype.commands.media_usatsi_pagination = function(ajax, response, status) {

            $('.media-usatsi-pagination').once().pagination({
                items: response.totalImages,
                itemsOnPage: 100,
                currentPage: response.pageNumber,
                cssStyle: 'dark-theme',
                //hrefTextPrefix: response.paginationUrl,
                onPageClick: function(pagenum, evt) {
                    evt.preventDefault();
                    $('#media-usatsi-external input[name="field_usatsi_pagenum_hidden"]').val(pagenum);
                    //Triggers click event on search button
                    $('#edit-search').trigger('click');
                }
            });

            $('.media-usatsi-pagination-btm').once().pagination({
                items: response.totalImages,
                itemsOnPage: 100,
                currentPage: response.pageNumber,
                cssStyle: 'dark-theme',
                //hrefTextPrefix: response.paginationUrl,
                onPageClick: function(pagenum, evt) {
                    evt.preventDefault();
                    $('#media-usatsi-external input[name="field_usatsi_pagenum_hidden"]').val(pagenum);
                    //Triggers click event on search button
                    $('#edit-search').trigger('click');
                }
            });

        }
    }

}(jQuery));
