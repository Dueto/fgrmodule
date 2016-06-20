<?php
/**
 * Returns a tournament participant status.
 * @return Team by id.
 */
function get_team_by_id($team_id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/Teams/%s';
//    $team_id = '105';
    $team = drupal_http_request($url . sprintf($method, $team_id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($team->code == 200) {
        return drupal_json_decode($team->data)['Data'];
    } else {
        return null;
    }
}