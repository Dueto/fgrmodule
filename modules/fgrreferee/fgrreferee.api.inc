<?php
function get_referee_by_id($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $seasons = '/Competitions/%s?withChilds=true';
    $referee_json = '{
        "id": 1,
		"icon_id": 2,
		"photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
        "name": "Алексей",
        "sername": "Алешин",
        "type": "inspector",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва",
        "partner": {
          "id": 32,
          "name": "Максим",
          "sername": "Комалов"
        }
    }';
    return drupal_json_decode($referee_json);
}

function get_fgr_referees($params) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
//    $seasons = '/Referees';
    $referees_json = '[
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      },
      {
        "id": 1,
		"icon_id": 2,
        "name": "Алексей",
        "sername": "Алешин",
        "second_name": "Павлович",
        "birthday": "12.01.1973",
        "age": 43,
        "referee_category": "Высшая",
        "city": "Москва"
      }
    ]';
    return drupal_json_decode($referees_json);
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
