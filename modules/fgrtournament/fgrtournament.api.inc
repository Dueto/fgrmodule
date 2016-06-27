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

/**
 * @param $id
 * @return mixed|null
 */
function get_tournament_by_id_chess_mates($id) {
//    $id = '103';
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionTeams/CrossTable?compId=%s&dateFormat=dd.MM.yyyy&byStartPlaces=false';
    $response = drupal_http_request($url . sprintf($method, $id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $teams_data = drupal_json_decode($response->data);
        $teams_data['GamesTable'] = form_games_table($teams_data);
        return $teams_data;
    } else {
        return null;
    }
}

function form_games_table($teams_data) {
    $table_size = count($teams_data['Data']);
    $games_table = array();
    if($table_size != 0) {
        array_fill(0, $table_size, array());
        foreach($teams_data['Data'] as $row => $team) {
            $games_table[$row][$row] = array();
            foreach($team['GameScore'] as $column => $game_score) {
                $i = $game_score['Team1Place'] - 1;
                $j = $game_score['Team2Place'] - 1;
                $node_object = array(
                    'Score' => $game_score['Score'],
                    'Winner' => $game_score['WinningTeam']
                );
                if(array_key_exists($j, $games_table[$i])) {
                    if(!is_array($games_table[$i][$j])) {
                        $games_table[$i][$j] = array();
                    }
                }
                if($game_score['HomeTeam'] == 1) {
                    $games_table[$i][$j][0] = $node_object;
                } else {
                    $games_table[$i][$j][1] = $node_object;
                }
            }
        }
    }
    return $games_table;
}

function get_tournament_team_stats_by_id($id) {
//    $id = '103';
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
    $method = '/Competitions?$filter=CompTypeId%20eq%20\'Season\'&$orderby=CompSort%20asc';
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $season_tournaments = drupal_json_decode($response->data)['Data'];
        for($i = 0; $i < count($season_tournaments); $i++) {
            $childs = get_tournament_childs($season_tournaments[$i]['CompId']);
            $season_tournaments[$i]['Children'] = $childs;
        }
        return $season_tournaments;
    } else {
        return null;
    }
}

function get_tournament_childs($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $tournament_with_childs_method = '/Competitions/withChilds/';
    $tournament_response = drupal_http_request($url . $tournament_with_childs_method . $id, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($tournament_response->code == 200) {
        return drupal_json_decode($tournament_response->data)['Data']['Children'];
    } else {
        return null;
    }
}

function get_tournament_games_by_id($tournament_id, $type) {
//    $tournament_id = '103';
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

function get_tournament_metadata($id) {
//    $id = '103';
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/Competitions/withParents/%s';
    $response = drupal_http_request($url . sprintf($method, $id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $tournaments_data = drupal_json_decode($response->data)['Data'];
        $full_name = form_tournament_name($tournaments_data);
        return array(
            'TournamentFullName' => $full_name,
            'TournamentId' => $tournaments_data['CompId'],
            'TournamentTypeId' => $tournaments_data['CompTypeId'],
            'TournamentName' => $tournaments_data['Name']
        );
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

function get_playoff_pairs($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionTeams/PlayoffPairs?compId=' . $id . '&$orderby=Round%20desc';
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $tournaments_data = drupal_json_decode($response->data)['Data'];
        return format_playoff_pairs($tournaments_data);
    } else {
        return null;
    }
}

function format_playoff_pairs($tournaments_data) {
    $splitted_rounds = array();
    if($tournaments_data == null || count($tournaments_data) == 0) return null;
    $prev_round_buffer = null;
    $counter = -1;
    foreach($tournaments_data as $pair) {
        $round_buffer = $pair['Round'];
        if($round_buffer != $prev_round_buffer) {
            $counter++;
            $pair['PairAdded'] = 0;
            array_push($splitted_rounds, array($pair));
            $prev_round_buffer = $round_buffer;
        } else {
            $pair['PairAdded'] = 0;
            array_push($splitted_rounds[$counter], $pair);
        }
    }

    $sorted = array();
    foreach($splitted_rounds as $round) {
        array_push($sorted, array_msort($round, array('Sort' => SORT_ASC)));
    }
    return $sorted;
}

function array_msort($array, $cols)
{
    $colarr = array();
    foreach ($cols as $col => $order) {
        $colarr[$col] = array();
        foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
    }
    $eval = 'array_multisort(';
    foreach ($cols as $col => $order) {
        $eval .= '$colarr[\''.$col.'\'],'.$order.',';
    }
    $eval = substr($eval,0,-1).');';
    eval($eval);
    $ret = array();
    foreach ($colarr as $col => $arr) {
        foreach ($arr as $k => $v) {
            $k = substr($k,1);
            if (!isset($ret[$k])) $ret[$k] = $array[$k];
            $ret[$k][$col] = $array[$k][$col];
        }
    }
    return $ret;

}