(function ($) {
  'use strict';

    var usatsi_media_preview_adjust = function(el) {

        var rect = el.offset();
        var body_width = $('body').width();
        var rect_width = el.width();

        if ( rect.left < 0 ) {
            el.css('left', Math.abs(rect.left) );
        }

        if ( (el.width() + rect.left) + 20 > $('body').width() ) {
            console.log('element off right side of the sceen');
            $(el).css('right', '20px');
        }

    };


    Drupal.behaviors.media_usatsi = {
    attach: function (context, settings) {

      //Add Class to Tab.
      $('.tabs.primary a[data-tabid="usatsi"]').attr('id', 'media-usatsi-tab');

      //Add Class to Tab.
      $('.tabs.primary a[href="/file/add/usatsi"]').attr('id','media-usatsi-tab');

      // Hide submit button.
      $('form#media-usatsi-external .form-actions .form-submit').hide();

      // show the media action buttons
      $('img.usatsi').once().bind('mouseenter', function() {
          $(this).next('.media-actions').fadeIn('fast');
      });

      $('.media-actions').once().bind('mouseleave', function() {
        $(this).fadeOut('fast');
      });

      $('.media-actions li.media-icon-import').once().bind('click', function() {
          $(this).parent().parent().find('.usatsi').trigger('click');


      });

      $('.media-actions li.media-icon-preview').once().bind('click', function() {
        var elm =  $(this).parent().closest('.media-item-wrappper');
         elm.find('.on-hover-content').fadeIn('fast', function() {
             $(this).find('.media-preview-image').attr('src', $(this).find('.media-preview-image').data('src'));
             usatsi_media_preview_adjust($(this));
         });
      });

      $('.on-hover-content').once().bind('mouseleave', function() {
        $(this).fadeOut('fast');
      });

      $('.on-hover-content').once().bind('click', function() {
          $(this).parent().find('.usatsi').trigger('click');
      });

      $('img.usatsi').bind('click', function (e) {

        if ( !$(this).hasClass('media-locked')  ) {

            // Show downloading spinner!
            $( this ).parent().parent().parent().parent().find( '.mexp-spinner' ).fadeIn( 'fast' );

            //Get Image Data from data attribute
            var usatsi_url = $(this).attr('data-image'),
                usatsi_headline = $(this).attr('data-headline'),
                usatsi_caption = $(this).attr('data-caption'),
                usatsi_credit = $(this).attr('data-credit'),
                usatsi_thumbnail = $(this).attr('data-thumbnail');

            /* populate image form field values to be past to drupals
             * post page to prepopulate image metadata fields
            */
            $('input[name="embed_code"]').val(usatsi_url);
            $('input[name="field_file_image_title_text_hidden"]').val(usatsi_headline);
            $('input[name="field_file_image_alt_text_hidden"]').val(usatsi_caption);
            $('input[name="field_file_image_attribution_hidden"]').val(usatsi_credit);
            $('input[name="field_file_image_thumbnail_hidden"]').val(usatsi_thumbnail);

            // Autosubmit form.
            $('#media-usatsi-external').submit();

        } else {
            $(this).siblings('.media-preview-link').fadeIn('fast');
        }

      });

      $('.media-preview-link-copy').once().bind('click', function(e) {
          e.preventDefault();
          document.execCommand('copy', false, $(this).prev().select());
      });

      $('.media-preview-link').once().bind('mouseleave', function() {
          $(this).fadeOut('fast');
      });

    }
  };
}(jQuery));
