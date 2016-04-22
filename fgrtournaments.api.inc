<?php
/**
 * Returns a tournament participant status.
 * @return All tournaments.
 */
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

/**
 * Returns a tournament participant status.
 * @return All tournaments.
 */
function get_tournament_by_id() {
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