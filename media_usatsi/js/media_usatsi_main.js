(function ($) {
    'use strict';
    Drupal.behaviors.media_usatsi = {
        attach: function (context, settings) {
            //Add Class to Tab.
            $('.tabs.primary a[href="/file/add/usatsi"]').attr('id', 'media-usatsi-tab');
        }
    };
}(jQuery));
