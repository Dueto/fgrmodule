<?php
/**
 * Returns a tournament participant status.
 * @return All tournaments.
 */
function get_tournament_by_id($id) {
    $url = 'predefined url';
    $tournament_json = '{
      "teams": [
        {
            "title": "First team",
            "id": 32
        },
        {
            "title": "Second team",
            "id": 31
        },
        {
            "title": "Third team",
            "id": 40
        },
        {
            "title": "Fourth team",
            "id": 52
        },
      ],
      "games": {
        {
            "level": 1
            "first": 32,
            "second": 31,
            "winner": 32
        },
        {
            "level": 1
            "first": 40,
            "second": 52,
            "winner": 52
        },
        {
            "level": 2
            "first": 32,
            "second": 52,
            "winner": 32
        },
      }
    }';

//    $response = drupal_http_request($url, array(), 'GET', NULL, 3);
//    return drupal_json_decode($response['data']);
    return drupal_json_decode($tournament_json);
}