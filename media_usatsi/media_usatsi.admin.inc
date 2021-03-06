<?php

/**
 * @file
 * Definition of all admin pages.
 */

/**
 * Implements hook_admin().
 */
function media_usatsi_admin() {
  $form = array();
  $form['media_usatsi_api'] = array(
    '#type' => 'textfield',
    '#title' => t('USAT SI API key'),
    '#default_value' => variable_get('media_usatsi_api', ""),
    '#description' => t('Register at USA Today Sports Images for API access <a href="https://www.usatsimg.com/register/">here</a>.'),
    '#required' => TRUE,
  );

  $form['media_usatsi_api_secret'] = array(
    '#type' => 'textfield',
    '#title' => t('USAT SI API Secret'),
    '#default_value' => variable_get('media_usatsi_api_secret', ""),
    '#description' => t('Register at USA Today Sports Images for API access <a href="https://www.usatsimg.com/register/">here</a>.'),
    '#required' => TRUE,
  );

  $form['media_usatsi_resolution_toggle'] = array(
    '#type' => 'radios',
    '#title' => t('Choose Hi or Lo resolution when importing images'),
    '#options' => array(
      t('hi'),
      t( 'low'), ) ,
    '#default_value' => variable_get('media_usatsi_resolution_toggle', "hi"),
    '#description' => t('Resolution type when importing images into the Drupal CMS'),
    '#required' => TRUE,
  );

  return system_settings_form($form);
}
