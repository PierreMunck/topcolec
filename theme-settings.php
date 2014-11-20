<?php

function topcolec_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['topcolec_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('topcolec Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['topcolec_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs', 'topcolec'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
}
?>