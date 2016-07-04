<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_list(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
    drupal_add_js(drupal_get_path('module', 'fgrreferee') . '/js/lib/jquery-2.2.4.min.js');
    drupal_add_js(drupal_get_path('module', 'fgrreferee') . '/js/lib/jquery.paging.js');
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