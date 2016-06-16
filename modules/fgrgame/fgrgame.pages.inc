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
    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/lib/jquery-2.2.4.min.js');
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/lib/jquery-ui.min.js');
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/lib/google-loader.js');
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/chart-builder.js');
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/table-builder.js');
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/match-progress-builder.js');
    drupal_add_js(drupal_get_path('module', 'fgrgame') . '/js/fgrgame.js');
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrgame_before(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

///**
// * Implements template_preprocess_hook
//*/
//function template_preprocess_fgrgame_info(&$vars) {
//    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//}
//
///**
// * Implements template_preprocess_hook
//*/
//function template_preprocess_fgrgame_statistics(&$vars) {
//    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//}
//
///**
// * Implements template_preprocess_hook
//*/
//function template_preprocess_fgrgame_throws(&$vars) {
//    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//}
//
///**
// * Implements template_preprocess_hook
//*/
//function template_preprocess_fgrgame_video(&$vars) {
//    drupal_add_css(drupal_get_path('module', 'fgrgame') . '/css/fgrgame.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//    drupal_add_css(drupal_get_path('module', 'fgrteam') . '/css/jquery-ui.min.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
//}