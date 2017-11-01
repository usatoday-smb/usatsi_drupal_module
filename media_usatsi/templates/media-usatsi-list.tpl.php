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

<?php if ( $images['totalImages'] > 0 ): ?>
<div id="media-usatsi-branding">
    <a href="https://usatsimg.com" target="_blank">
        <img src="<?php print base_path() . path_to_theme()  . '/images/si-logo-2x.png' ?>" title="USA Todaty Sports Images" />
    </a>
</div>
<div class="media-usatsi-pagination"></div>
<ul class="media-list-thumbnails">
  <?php if (is_array($images)): ?>
    <?php foreach ($images as $key => $img): ?>
        <?php if (!empty($img['thumb'])):  ?>
            <li class="media-item-wrappper">
                <span class="mexp-spinner">
			        <b class="mexp-svg-spinner">
				        <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><g><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="1"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(45 64 64)"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(90 64 64)"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(135 64 64)"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(180 64 64)"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(225 64 64)"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(270 64 64)"/><path d="M38.52 33.37L21.36 16.2A63.6 63.6 0 0 1 59.5.16v24.3a39.5 39.5 0 0 0-20.98 8.92z" fill="#ffffff" fill-opacity="0.25" transform="rotate(315 64 64)"/><animateTransform attributeName="transform" type="rotate" values="0 64 64;45 64 64;90 64 64;135 64 64;180 64 64;225 64 64;270 64 64;315 64 64" calcMode="discrete" dur="720ms" repeatCount="indefinite"></animateTransform></g></svg>
			        </b>
		        </span>
                <div class="media-item">
                  <div class="media-thumbnail">
                    <div class="media-thumbnail-wrapper">
                    <?php if ( !$img['historical'] != -1 ) : ?>
                        <img class="usatsi media-locked" src="<?php print $img['thumb']; ?>" />
                    <?php else: ?>
                        <img class="usatsi"
                             data-image="<?php print $img['download']; ?>"
                             src="<?php print $img['thumb']; ?>"
                             data-headline="<?php print $img['title']; ?>"
                             data-caption="<?php print $img['caption']; ?>"
                             data-credit="<?php print $img['credit']; ?>"
                             data-thumbnail="<?php print $img['thumb']; ?>" />
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
<?php else: ?>
    <p>We're sorry.  There are no results for the search term provided.</p>
<?php endif; ?>