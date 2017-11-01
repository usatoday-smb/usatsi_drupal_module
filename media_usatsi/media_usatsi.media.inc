<?php

/**
 * @file
 * Media module integration for the Media USA Today Sports module.
 */

/**
 * Implements hook_media_browser_plugin_info().
 */
function media_usatsi_media_browser_plugin_info() {

  $info['usatsi'] = array(
    'title' => t('USA Today'),
    'class' => 'MediaUsatsi',
    'weight' => -9,
  );

  return $info;
}
