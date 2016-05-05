<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrreferee_list(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrreferee') . '/css/fgrreferee.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
}