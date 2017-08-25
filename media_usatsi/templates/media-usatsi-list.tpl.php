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

<div class="media-list-thumbnails">
  <?php if (is_array($images)): ?>
    <?php foreach ($images as $key => $img): ?>
      <li>
        <div class="media-item">
          <div class="media-thumbnail">
            <img class="usatsi"
                 data-image="<?php print $img['download']; ?>"
                 src="<?php print $img['thumb']; ?>"
                 data-headline="<?php print $img['title']; ?>"
                 data-caption="<?php print $img['caption']; ?>"
                 data-credit="<?php print $img['credit']; ?>" />
            <div class="label-wrapper">
              <?php print $img['title']; ?>
            </div>
            <div class="label-wrapper">
              <?php print $img['people'] ?>
            </div>
            <div class="label-wrapper">
                <?php print $img['date_created'] ?>
            </div>
          </div>
        </div>
      </li>
    <?php endforeach; ?>
  <?php else: ?>
    <?php print $images; ?>
  <?php endif; ?>
</div>
