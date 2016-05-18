<?php
/**
 * Returns a tournament participant status.
 * @return Пфьу by id.
 */
function get_game_by_id2($id) {
    $url = 'predefined url';
    $team_json = '{
            "game_id": 111,
            "date": "2016.01.01",
            "time": "18:00",
            "stage": "Предварительный этап",
            "place": "Рязань Олимпийский дворец",
            "referees_on_game": [
                {
                    "id": 23,
                    "name":"Иван Поляков"
                },
                {
                    "id": 24,
                    "name":"Денис Рязанов"
                }
            ],
            "technical_delegate": {
                "id": 23,
                "name":"Андрей Треугубов"
            },
            "referee_inspector": {
                "id": 23,
                "name":"Артем Волаев"
            },
            "fgr_member": {
                "id": 23,
                "name":"Антон Воронков"
            },
            "start_referee_protocol": "",
            "status": "scheduled",
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
            "score_a": null,
            "score_b": null
        }';
    $team_json1 = '{
            "game_id": 111,
            "date": "2016.01.01",
            "time": "18:00",
            "stage": "Предварительный этап",
            "place": "Рязань Олимпийский дворец",
            "referees_on_game": [
                {
                    "id": 23,
                    "name":"Иван Поляков"
                },
                {
                    "id": 24,
                    "name":"Денис Рязанов"
                }
            ],
            "technical_delegate": {
                "id": 23,
                "name":"Андрей Треугубов"
            },
            "referee_inspector": {
                "id": 23,
                "name":"Артем Волаев"
            },
            "fgr_member": {
                "id": 23,
                "name":"Антон Воронков"
            },
            "start_referee_protocol": "",
            "status": "result",
            "team_b": {
                "title": "Медведи",
                "id": 31,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",
                "gamers": [
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
		            	}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
                        }
                    }
                ]
            },
            "team_a": {
                "title": "Каустик",
                "id": 32,
                "icon_url": "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",
                "gamers": [
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
			}
                    },
                    {
                        "member_photo_url": "http://res.ehf.eu/picture/players/2016/6514/529701/.jpg",
                        "member_number": 17,
                        "first_name": "Юлия",
                        "second_name": "Манагарова",
                        "citizenship": "Украина",
                        "citizenship_url": "http://flags.ehf.eu/2/UKR.gif",
                        "score_in_current_season": 72,
                        "birthday": "1988.09.27",
                        "season_club": "Rostov-Don",
                        "score_in_current_match":21,
                        "penalties": {
                            "red" : true,
                            "yellow": true
                        }
                    }
                ]
            },
            "score_a": 115,
            "score_b": 21,
            "winner": 32,
            "score_a_half": 22,
            "score_b_half": 11,
            "spectators": 5200
        }';
    $team_json2 = '{
            "game_id": 111,
            "date": "2016.01.01",
            "time": "18:00",
            "stage": "Предварительный этап",
            "place": "Рязань Олимпийский дворец",
            "referees_on_game": [
                {
                    "id": 23,
                    "name":"Иван Поляков"
                },
                {
                    "id": 24,
                    "name":"Денис Рязанов"
                }
            ],
            "technical_delegate": {
                "id": 23,
                "name":"Андрей Треугубов"
            },
            "referee_inspector": {
                "id": 23,
                "name":"Артем Волаев"
            },
            "fgr_member": {
                "id": 23,
                "name":"Антон Воронков"
            },
            "start_referee_protocol": "",
            "status": "online",
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
            "score_a": 22,
            "score_b": 11
        }';
    $r = rand(0, 2);
    switch($r) {
        case 0:
            return drupal_json_decode($team_json1);
            break;
        case 1:
            return drupal_json_decode($team_json1);
            break;
        case 2:
            return drupal_json_decode($team_json1);
            break;
    }
}

function get_game_by_id($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionGames/%s';
    $response = drupal_http_request($url . sprintf($method, $id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $game_data = drupal_json_decode($response->data)['Data'];
        return $game_data;
    } else {
        return null;
    }
}

//function get_tournament_full_name($id) {
//    $id = '103';
//    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
//    $method = '/Competitions/withParents/%s';
//    $response = drupal_http_request($url . sprintf($method, $id), array(
//        'method' => 'GET',
//        'data' => NULL,
//        'timeout' => 15));
//    if($response->code == 200) {
//        $tournaments_data = drupal_json_decode($response->data)['Data'];
//        return form_tournament_name($tournaments_data);
//    } else {
//        return null;
//    }
//}
//
//function form_tournament_name($tournament_obj) {
//    $tournament_buff = $tournament_obj;
//    $full_tournament_name = '';
//    while($tournament_buff['Parent'] != null) {
//        $full_tournament_name = $tournament_buff['Name'] . $full_tournament_name;
//        if($tournament_buff['Parent']['Parent'] != null) {
//            $full_tournament_name = ', ' . $full_tournament_name;
//        }
//        $tournament_buff = $tournament_buff['Parent'];
//    }
//    return $full_tournament_name;
//}