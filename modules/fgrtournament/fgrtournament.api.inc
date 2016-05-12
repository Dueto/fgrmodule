<?php
function get_tournament_by_id_playoff($id) {
    $url = 'predefined url';
    $tournament_json = '{
    "id": 1,
	"title": "Чемпионат РФ",
	"season": "Лето",
	"league": "Суперлига",
	"gender": "Мужчины",
	"stage": "плейофф",

    "rounds": [[{
            "game_id": 111,
            "round": 0,
            "team_b": {
                "title": "Медведи",
                "id": 31,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI"
            },
            "team_a": {
                "title": "Каустик",
                "id": 32,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF"
            },
            "winner": 32,
            "score_a": 43,
            "score_b": 21
        },{
            "game_id": 222,
            "round": 0,
            "team_b": {
                "title": "Университет-Нева",
                "id": 33,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/univer_lesgafta.png?itok=kAlhSuZb"
            },
            "team_a": {
                "title": "Сунгуль",
                "id": 34,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/syngul.png?itok=tnPg91kp"
            },
            "winner": 33,
            "score_a": 51,
            "score_b": 76
        },{
            "game_id": 333,
            "round": 0,
            "team_b": {
                "title": "Энергия",
                "id": 35,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/energiya_voronej.png?itok=v7yZyYPQ"
            },
            "team_a": {
                "title": "Пермские медведи",
                "id": 36,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/permskiemedvedi.png?itok=j48qIXP8"
            },
            "winner": 35,
            "score_a": 12,
            "score_b": 66
        },{
            "game_id": 444,
            "round": 0,
            "team_b": {
                "title": "СКИФ",
                "id": 37,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/skif_krasnodar.png?itok=0Y8X8_sK"
            },
            "team_a": {
                "title": "Локомотив-Полет",
                "id": 38,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/lokomotiv.png?itok=L0OCjMi0"
            },
            "winner": 38,
            "score_a": 42,
            "score_b": 38
        }],[{
            "game_id": 555,
            "round": 1,
            "team_b": {
                "title": "Университет-Нева",
                "id": 33,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/univer_lesgafta.png?itok=kAlhSuZb"
            },
            "team_a": {
                "title": "Каустик",
                "id": 32,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF"
            },
            "winner": 32,
            "score_a": 78,
            "score_b": 55
        },{
            "game_id": 666,
            "round": 1,
            "team_a": {
                "title": "Энергия",
                "id": 35,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/energiya_voronej.png?itok=v7yZyYPQ"
            },
            "team_b": {
                "title": "Локомотив-Полет",
                "id": 38,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/lokomotiv.png?itok=L0OCjMi0"
            },
            "winner": 38,
            "score_b": 55,
            "score_a": 33
        }],[{
            "game_id": 666,
            "round": 2,
            "team_a": {
                "title": "Каустик",
                "id": 32,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF"
            },
            "team_b": {
                "title": "Локомотив-Полет",
                "id": 38,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/lokomotiv.png?itok=L0OCjMi0"
            },
            "winner": 38,
            "score_b": 76,
            "score_a": 43
        }]],
        "round_third_place": [[{
            "game_id": 333,
            "round": 0,
            "team_b": {
                "title": "Энергия",
                "id": 35,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/energiya_voronej.png?itok=v7yZyYPQ"
            },
            "team_a": {
                "title": "Пермские медведи",
                "id": 36,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/permskiemedvedi.png?itok=j48qIXP8"
            },
            "winner": 35,
            "score_a": 12,
            "score_b": 66
        },{
            "game_id": 444,
            "round": 0,
            "team_b": {
                "title": "СКИФ",
                "id": 37,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/skif_krasnodar.png?itok=0Y8X8_sK"
            },
            "team_a": {
                "title": "Локомотив-Полет",
                "id": 38,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/lokomotiv.png?itok=L0OCjMi0"
            },
            "winner": 38,
            "score_a": 42,
            "score_b": 38
        }],[{
            "game_id": 666,
            "round": 1,
            "team_a": {
                "title": "Энергия",
                "id": 35,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/energiya_voronej.png?itok=v7yZyYPQ"
            },
            "team_b": {
                "title": "Локомотив-Полет",
                "id": 38,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/lokomotiv.png?itok=L0OCjMi0"
            },
            "winner": 38,
            "score_b": 55,
            "score_a": 33
        }]]
}';
    return drupal_json_decode($tournament_json);
}

function get_tournament_by_id_mini($id) {
    $url = 'predefined url';
    $tournament_json = '';
    return drupal_json_decode($tournament_json);
}

function get_tournament_by_id_chess_mates($id) {
    $url = 'predefined url';
    $tournament_json = '';
    return drupal_json_decode($tournament_json);
}

function get_tournament_team_stats_by_id($id) {
    $id = '103';
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionTeams?compId=%s';
    $response = drupal_http_request($url . sprintf($method, $id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $teams_data = drupal_json_decode($response->data);
        return $teams_data;
    } else {
        return null;
    }
}

function get_last_tournaments() {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $tournament_with_childs_method = '/Competitions/withChilds/%s';
    $method = '/Competitions/CurrentSeasonCompetitions?gameDiscipline=Handball';
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    $tournaments_data = array();
    if($response->code == 200) {
        $current_tournaments = drupal_json_decode($response->data)['Data'];
        foreach($current_tournaments as $current_tournament) {
            $tournament_response = drupal_http_request($url . sprintf($tournament_with_childs_method, $current_tournament['CompId']), array(
                'method' => 'GET',
                'data' => NULL,
                'timeout' => 15));
            if($tournament_response->code == 200) {
                array_push($tournaments_data, drupal_json_decode($tournament_response->data)['Data']);
            } else {
                return null;
            }
        }
        return $tournaments_data;
    } else {
        return null;
    }
}

function get_tournament_games_by_id($tournament_id, $type) {
    $tournament_id = '103';
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionGames?compId=' . $tournament_id . '&$filter=Game/GameStatusId%20eq%20\'' . ucfirst($type) . '\'&$orderby=Game/GameNumber%20desc';
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

function get_tournament_full_name($id) {
    $id = '103';
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/Competitions/withParents/%s';
    $response = drupal_http_request($url . sprintf($method, $id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $tournaments_data = drupal_json_decode($response->data)['Data'];
        return form_tournament_name($tournaments_data);
    } else {
        return null;
    }
}

function form_tournament_name($tournament_obj) {
    $tournament_buff = $tournament_obj;
    $full_tournament_name = '';
    while($tournament_buff['Parent'] != null) {
        $full_tournament_name = $tournament_buff['Name'] . $full_tournament_name;
        if($tournament_buff['Parent']['Parent'] != null) {
           $full_tournament_name = ', ' . $full_tournament_name;
        }
        $tournament_buff = $tournament_buff['Parent'];
    }
    return $full_tournament_name;
}
