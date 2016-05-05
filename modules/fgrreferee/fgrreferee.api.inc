<?php
function get_referee_by_id($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $seasons = '/Competitions/%s?withChilds=true';
}

function get_fgr_referees($search_query) {
    $url = 'predefined url';
    $team_json = '[
      {
        "id": 1,
        "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/skif_krasnodar.png?itok=0Y8X8_sK",
        "title": "СКИФ"
      },
      {
        "id": 1,
        "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/univer_lesgafta.png?itok=kAlhSuZb",
        "title": "Университет-Нева"
      },
      {
        "id": 1,
        "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/energiya_voronej.png?itok=v7yZyYPQ",
        "title": "Энергия"
      }
    ]';
    return drupal_json_decode($team_json);
}

function get_all_seasons() {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $seasons_method = '/Competitions?$filter=CompTypeId%20eq%20\'Season\'';
    $comp_with_childs_method = '/Competitions/%s?withChilds=true';
    $all_seasons = drupal_http_request($url . $seasons_method, array(
            'method' => 'GET',
            'data' => NULL,
            'timeout' => 15)
    );
    $seasons_full_data = array();
    if($all_seasons->code == 200) {
        $seasons_data = drupal_json_decode($all_seasons->data)['Data'];
        foreach($seasons_data as $season) {
            $season_championships = drupal_http_request($url . sprintf($comp_with_childs_method, $season['CompId']), array(
                'method' => 'GET',
                'data' => NULL,
                'timeout' => 15));
            if($season_championships->code == 200) {
                array_push($seasons_full_data, drupal_json_decode($season_championships->data)['Data']);
            } else {
                return null;
            }
        }
        return $seasons_full_data;
    } else {
        return null;
    }
}

function get_season_tournaments($id) {

}
