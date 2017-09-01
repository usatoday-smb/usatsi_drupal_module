(function ($) {
  'use strict';


  Drupal.behaviors.media_usatsi = {
    attach: function (context, settings) {

       var usatsi_media_preview_timeout = '';
       var usatsi_media_current_preview_el = '';

       $('body').delegate( "li  img", "mouseenter", function(e) {

            e.stopPropagation();
            var el = $(this);
            clearTimeout(usatsi_media_preview_timeout);

            usatsi_media_preview_timeout = setTimeout(function() {
                usatsi_media_current_preview_el = $(el).closest('li').find('div.on-hover-content');
                $(usatsi_media_current_preview_el).fadeIn('fast').focus();
            }, 2000);
        });

        $('body').delegate( "li  img", "mouseleave", function(e) {
            clearTimeout(usatsi_media_preview_timeout);
        });


        $('body').delegate('#media-usatsi-external .on-hover-content', 'mouseleave', function(e) {
            e.stopPropagation();
            clearTimeout(usatsi_media_preview_timeout);
            $(this).hide();
        });

      //Add Class to Tab.
      $('.tabs.primary a[href="/file/add/usatsi"]').attr('id','media-usatsi-tab');

      // Hide submit button.
      $('form#media-usatsi-external .form-actions .form-submit').hide();

      $('img.usatsi').bind('click', function (e) {

        //Get Image Data from data attribute
        var usatsi_url = $(this).attr('data-image'),
            usatsi_headline = $(this).attr('data-headline'),
            usatsi_caption = $(this).attr('data-caption'),
            usatsi_credit = $(this).attr('data-credit');

          /* populate image form field values to be past to drupals
           * post page to prepopulate image metadata fields
          */
          $('input[name="embed_code"]').val(usatsi_url);
          $('input[name="field_usatsi_headline_hidden"]').val(usatsi_headline);
          $('input[name="field_usatsi_caption_hidden"]').val(usatsi_caption);
          $('input[name="field_usatsi_credit_hidden"]').val(usatsi_credit);

        // Autosubmit form.
        $('#media-usatsi-external').submit();
      });
    }
  };
}(jQuery));
