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
        $team = drupal_json_decode($team->data)['Data'];
        return $team;
    } else {
        return null;
    }
}


/**
 * @param $id
 * @return mixed|null
 */
function get_last_team_games($team_id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/Games?$orderby=LocalDate%20desc&$top=20&$filter=Team1Id%20eq%20' . $team_id . '%20or%20Team2Id%20eq%20' . $team_id;
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        return drupal_json_decode($response->data);
    } else {
        return null;
    }
}