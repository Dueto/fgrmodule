<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrgame_current(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrgame_ended(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrgame_before(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}