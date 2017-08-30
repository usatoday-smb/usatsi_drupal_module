(function ($) {
    'use strict';
    Drupal.behaviors.media_usatsi = {
        attach: function (context, settings) {
            //Add Class to Tab.
            $('.tabs.primary a[href="/file/add/usatsi"]').attr('id', 'media-usatsi-tab');
        }
    };

    Drupal.ajax.prototype.commands.media_usatsi_pagination = function(ajax, response, status) {

        $('.media-usatsi-pagination').once().pagination({
            items: 100,
            itemsOnPage: 100,
            currentPage: response.pageNumber,
            //cssStyle: 'light-theme',
            //hrefTextPrefix: response.paginationUrl,
            onPageClick: function(pagenum, evt) {
                evt.preventDefault();
                //console.log(pagenum);
                $('#media-usatsi-external input[name="field_usatsi_pagenum_hidden"]').val(pagenum);

                $('#edit-search').trigger('click');
                //$('#media-usatsi-external').submit();
                //console.log(pagenum);


                //'paginationUrl'
                //$('#media-usatsi-external').attr('action', response.paginationUrl);

                ///$('#media-usatsi-external input[name="field_usatsi_pagenum_hidden"]').val(response.pageNumber);

                //$('#media-usatsi-external').submit();


                //console.log('pageclicked');
            }
        });

    }



}(jQuery));
