(function ($) {
  'use strict';
  Drupal.behaviors.media_usatsi = {
    attach: function (context, settings) {

      // Hide submit button.
      $('form#media-usatsi-external .form-actions .form-submit').hide();

      $('img.usatsi').once().bind('click', function (e) {

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
