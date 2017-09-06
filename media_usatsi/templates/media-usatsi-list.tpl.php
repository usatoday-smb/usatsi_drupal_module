<?php

/**
 * @file
 * Default theme implementation for displaying thumbnails.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>


<div class="media-usatsi-pagination"></div>
<div class="media-list-thumbnails">
  <?php if (is_array($images)): ?>
    <?php foreach ($images as $key => $img): ?>
        <?php if (!empty($img['thumb'])):  ?>
            <li>
                <div class="media-item">
                  <div class="media-thumbnail">
                    <?php if ( $img['historical'] == '1') : ?>
                        <img src="<?php print $img['thumb']; ?>" />
                    <?php else: ?>
                        <img class="usatsi"
                             data-image="<?php print $img['download']; ?>"
                             src="<?php print $img['thumb']; ?>"
                             data-headline="<?php print $img['title']; ?>"
                             data-caption="<?php print $img['caption']; ?>"
                             data-credit="<?php print $img['credit']; ?>" />
                    <?php endif ?>
                    <div class="label-wrapper">
                      <?php print truncate_utf8($img['title'], 30, true, true); ?>
                    </div>
                    <div class="label-wrapper">
                      <?php print $img['people'] ?>
                    </div>
                    <div class="label-wrapper">
                        <?php print $img['date_created'] ?>
                    </div>
                  </div>
                </div>
                <div class="on-hover-content">
                    <img src="<?php print $img['previewUrl']; ?>">
                    <div class="label-wrapper label-title">
                      <?php print $img['title'] ?>
                    </div>
                    <div class="label-wrapper label-caption">
                      <?php print $img['caption'] ?>
                    </div>
                    <div class="label-wrapper label-credit">
                      <?php print $img['credit'] ?>
                    </div>
                </div>
          </li>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php else: ?>
    <?php print $images; ?>
  <?php endif; ?>
</div>
<div class="media-usatsi-pagination-btm"></div>