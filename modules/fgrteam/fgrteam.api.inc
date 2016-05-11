<?php
/**
 * Returns a tournament participant status.
 * @return Team by id.
 */
function get_team_by_id($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/Teams/%s';
    $team_id = '105';
    $team = drupal_http_request($url . sprintf($method, $team_id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($team->code == 200) {
        return drupal_json_decode($team->data)['Data'];
    } else {
        return null;
    }
//    $team_json = '{
//        "address": "г. Волгоград, бульвар Энгельса, 2",
//        "title": "Каустик",
//        "telephone": "+7 (8442) 67 6447",
//        "email": "shc-kaustik@yandex.ru",
//        "site": "http://www.shc-kaustik.ru",
//        "team_photo_url": "http://localhost:8181/fgr/rushandball.ru/files/teams/kaustik.png",
//        "logo_photo_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",
//        "team_members": [
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
//                "first_name": "Екатерина",
//                "second_name": "Илина",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 43,
//                "birthday": "1991.03.07",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
//                "first_name": "Юлия",
//                "second_name": "Манагарова",
//                "citizenship": "Украина",
//                "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
//                "score_in_current_season": 72,
//                "birthday": "1988.09.27",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/520626/.jpg",
//                "first_name": "Регина",
//                "second_name": "Шумкуте",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 48,
//                "birthday": "1985.12.21",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
//                "first_name": "Екатерина",
//                "second_name": "Илина",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 43,
//                "birthday": "1991.03.07",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
//                "first_name": "Юлия",
//                "second_name": "Манагарова",
//                "citizenship": "Украина",
//                "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
//                "score_in_current_season": 72,
//                "birthday": "1988.09.27",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/520626/.jpg",
//                "first_name": "Регина",
//                "second_name": "Шумкуте",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 48,
//                "birthday": "1985.12.21",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
//                "first_name": "Екатерина",
//                "second_name": "Илина",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 43,
//                "birthday": "1991.03.07",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
//                "first_name": "Юлия",
//                "second_name": "Манагарова",
//                "citizenship": "Украина",
//                "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
//                "score_in_current_season": 72,
//                "birthday": "1988.09.27",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/520626/.jpg",
//                "first_name": "Регина",
//                "second_name": "Шумкуте",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 48,
//                "birthday": "1985.12.21",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
//                "first_name": "Екатерина",
//                "second_name": "Илина",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 43,
//                "birthday": "1991.03.07",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
//                "first_name": "Юлия",
//                "second_name": "Манагарова",
//                "citizenship": "Украина",
//                "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
//                "score_in_current_season": 72,
//                "birthday": "1988.09.27",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/520626/.jpg",
//                "first_name": "Регина",
//                "second_name": "Шумкуте",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 48,
//                "birthday": "1985.12.21",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
//                "first_name": "Екатерина",
//                "second_name": "Илина",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 43,
//                "birthday": "1991.03.07",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
//                "first_name": "Юлия",
//                "second_name": "Манагарова",
//                "citizenship": "Украина",
//                "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
//                "score_in_current_season": 72,
//                "birthday": "1988.09.27",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/520626/.jpg",
//                "first_name": "Регина",
//                "second_name": "Шумкуте",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 48,
//                "birthday": "1985.12.21",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/538968/.jpg",
//                "first_name": "Екатерина",
//                "second_name": "Илина",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 43,
//                "birthday": "1991.03.07",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
//                "first_name": "Юлия",
//                "second_name": "Манагарова",
//                "citizenship": "Украина",
//                "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
//                "score_in_current_season": 72,
//                "birthday": "1988.09.27",
//                "season_club": "Rostov-Don"
//            },
//            {
//                "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/520626/.jpg",
//                "first_name": "Регина",
//                "second_name": "Шумкуте",
//                "citizenship": "РФ",
//                "citizenship_url": "http://flags.ehf.eu/2/RUS.gif",
//                "score_in_current_season": 48,
//                "birthday": "1985.12.21",
//                "season_club": "Rostov-Don"
//            }
//        ]
//    }';
}


/**
 * Returns a tournament participant status.
 * @return FGR teams.
 */
function get_fgr_teams() {
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
