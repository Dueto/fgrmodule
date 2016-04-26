<?php
/**
 * Returns a tournament participant status.
 * @return All tournaments.
 */
function get_tournament_by_id($id) {
    $url = 'predefined url';
    $tournament_json = '{
	"title": "Чемпионат РФ",
	"season": "Лето",
	"league": "Суперлига",
	"gender": "Мужчины",
	"stage": "плейофф",

    "games": [{
        "game_id": 111,
            "parent_a": null,
            "parent_b": null,
            "team_b": {
            "title": "Second team",
                "id": 31
            },
            "team_a": {
            "title": "First team",
                "id": 32
            },
            "winner": 32
        }, {
        "game_id": 333,
            "parent_a": null,
            "parent_b": null,
            "team_b": {
            "title": "Third team",
                "id": 33
            },
            "team_a": {
            "title": "Fourth team",
                "id": 34
            },
            "winner": 34
        }, {
        "game_id": 222,
            "parent_a": 111,
            "parent_b": 333,
            "team_b": {
            "title": "Fourth team",
                "id": 34
            },
            "team_a": {
            "title": "First team",
                "id": 32
            },
            "winner": 32
        }]
}';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournament_json);
}

function get_last_tournaments() {
    $url = 'predefined url';
    $tournaments_json = '[
      {
        "title": "Second match",
        "id": 2
      },
      {
        "title": "Third match",
        "id": 3
      },
      {
        "title": "First match",
        "id": 1
      }
    ]';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournaments_json);
}
