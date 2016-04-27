<?php
/**
 * Returns a tournament participant status.
 * @return Tournament by id.
 */
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

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournament_json);
}

/**
 * Returns a tournament participant status.
 * @return Tournament by id mini view.
 */
function get_tournament_by_id_mini($id) {
    $url = 'predefined url';
    $tournament_json = '';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournament_json);
}

/**
 * Returns a tournament participant status.
 * @return Tournament by id mini view.
 */
function get_tournament_by_id_chess_mates($id) {
    $url = 'predefined url';
    $tournament_json = '';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournament_json);
}

/**
 * Returns a tournament participant status.
 * @return Tournament by id without results.
 */
function get_tournament_by_id_without_result($id) {
    $url = 'predefined url';
    $tournament_json = '{
    "id": 1,
	"title": "Чемпионат РФ",
	"season": "Лето",
	"league": "Суперлига",
	"gender": "Мужчины",
	"stage": "плейофф",
    "team_stats": [
        {
            "rank": 1,
            "team": {
                "id": 1,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/syngul.png?itok=tnPg91kp",
                "title": "Сунгуль"
            },
            "games_played": 32,
            "wins": 30,
            "draws": 1,
            "losses":1,
            "score_difference": 321,
            "score_for": 543,
            "score_against": 623,
            "points":54
        },
        {
            "rank": 2,
            "team": {
                "id": 1,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",
                "title": "Каустик"
            },
            "games_played": 22,
            "wins": 20,
            "draws": 2,
            "losses":0,
            "score_difference": 532,
            "score_for": 123,
            "score_against": 432,
            "points":48
        },
        {
            "rank": 3,
            "team": {
                "id": 1,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/lokomotiv.png?itok=L0OCjMi0",
                "title": "Локомотив-Полет"
            },
            "games_played": 14,
            "wins": 7,
            "draws": 4,
            "losses":3,
            "score_difference": 154,
            "score_for": 543,
            "score_against": 785,
            "points":31
        },
        {
            "rank": 4,
            "team": {
                "id": 1,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/energiya_voronej.png?itok=v7yZyYPQ",
                "title": "Энергия"
            },
            "games_played": 76,
            "wins": 45,
            "draws": 43,
            "losses":21,
            "score_difference": 22,
            "score_for": 441,
            "score_against": 222,
            "points":78
        },
        {
            "rank": 5,
            "team": {
                "id": 1,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/univer_lesgafta.png?itok=kAlhSuZb",
                "title": "Университет-Нева"
            },
            "games_played": 76,
            "wins": 66,
            "draws": 34,
            "losses":2,
            "score_difference": 654,
            "score_for": 824,
            "score_against": 334,
            "points":87
        },
        {
            "rank": 6,
            "team": {
                "id": 1,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/skif_krasnodar.png?itok=0Y8X8_sK",
                "title": "СКИФ"
            },
            "games_played": 32,
            "wins": 30,
            "draws": 1,
            "losses":1,
            "score_difference": 321,
            "score_for": 543,
            "score_against": 623,
            "points":54
        }
    ]}';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournament_json);
}

function get_last_tournaments() {
    $url = 'predefined url';
    $tournaments_json = '[
      {
        "title": "Чемпионат РФ, Лето, Суперлига, Мужчины",
        "id": 2
      },
      {
        "title": "Кубок РФ, Лето, Высшая лига, Женщины",
        "id": 3
      },
      {
        "title": "Лига чемпионов ЕГФ, Лето, Высшая лига, Женщины",
        "id": 1
      }
    ]';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournaments_json);
}
