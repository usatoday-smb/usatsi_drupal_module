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
<ul class="media-list-thumbnails">
  <?php if (is_array($images)): ?>
    <?php foreach ($images as $key => $img): ?>
        <?php if (!empty($img['thumb'])):  ?>
            <li class="media-item-wrappper">
                <div class="media-item">
                  <div class="media-thumbnail">
                    <div class="media-thumbnail-wrapper">
                    <?php if ( !$img['historical'] ) : ?>
                        <img class="usatsi media-locked" src="<?php print $img['thumb']; ?>" />
                    <?php else: ?>
                        <img class="usatsi"
                             data-image="<?php print $img['download']; ?>"
                             src="<?php print $img['thumb']; ?>"
                             data-headline="<?php print $img['title']; ?>"
                             data-caption="<?php print $img['caption']; ?>"
                             data-credit="<?php print $img['credit']; ?>" />
                    <?php endif ?>
                    <ul class="media-actions">
                        <li class="media-icon-preview" title="Image Preview"></li>
                        <li class="media-icon-import" title="Import File"></li>
                    </ul>
                    <div class="media-preview-link">
                        <p>Please see your account administrator to unlock this image for import.</p>
                        <input value="http://www.usatsimg.com/setImages/<?php print $img['parentid'] ?>/preview/<?php print $img['uniqueId'] ?>" class="media-preview-link-input" />
                        <button class="media-preview-link-copy">copy</button>
                        <button class="media-preview-link-anchor">
                            <a target="_blank" href="http://www.usatsimg.com/setImages/<?php print $img['parentid'] ?>/preview/<?php print $img['uniqueId'] ?>">goto</a>
                        </button>
                    </div>
                    </div>
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
                    <img class="media-preview-image" data-src="<?php print $img['previewUrl']; ?>" src="<?php print base_path() . path_to_theme()  . '/images/x.png' ?>">
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
</ul>
<div class="media-usatsi-pagination-btm"></div>