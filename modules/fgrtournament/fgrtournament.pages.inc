<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_list(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtournament_playoff(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtournament') . '/css/fgrtournament.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}