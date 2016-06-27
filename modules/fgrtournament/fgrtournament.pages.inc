<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_list(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
    drupal_add_js(drupal_get_path('module', 'fgrtournament') . '/js/lib/jquery-2.2.4.min.js');
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_info(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_playoff(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_table_stat(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_chessmates(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_games(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_games_current(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_games_ended(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_games_planned(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}