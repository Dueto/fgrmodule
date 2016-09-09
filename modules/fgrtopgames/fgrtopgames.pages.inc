<?php

/**
 * Implements template_preprocess_hook
*/
function template_preprocess_fgrtopgames(&$vars) {
    drupal_add_css(drupal_get_path('module', 'fgrtopgames') . '/css/fgrtopgames.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
    $js_options = array(
        'weight' => 1
    );
    drupal_add_js(drupal_get_path('module', 'fgrtournament') . '/js/lib/jquery-2.2.4.min.js', $js_options);
    drupal_add_js(drupal_get_path('module', 'fgrtournament') . '/js/lib/jquery-ui.min.js', $js_options);
    $js_options = array(
        'weight' => 1000
    );
    drupal_add_js(drupal_get_path('module', 'fgrtournament') . '/js/lib/sly.js', $js_options);
}
