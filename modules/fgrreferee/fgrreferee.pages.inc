<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_list(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_competitions(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_games(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_inspector_competitions(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_inspector_games(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}