<?php

/**
 * @file
 * Definition of MediaUsatsi.
 */

/**
 * Media browser plugin for showing images from Usa Today Sports Images.
 */
class MediaUsatsi extends MediaBrowserPlugin {

  /**
   * Implements MediaBrowserPluginInterface::access().
   */
  public function access($account = NULL) {
    return TRUE;
  }

  /**
   * Implements MediaBrowserPlugin::view().
   */
  public function view() {
    module_load_include('inc', 'file_entity', 'file_entity.pages');

    $build = array();
    $params = $this->params;
    $params['usatsi'] = TRUE;
    $build['form'] = drupal_get_form('media_usatsi_external', $params);

    return $build;
  }

}
