<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrteam_list(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/fgrteam.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrteam(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/fgrteam.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}