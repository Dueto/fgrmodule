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
    $id = '103';
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionTeams/CrossTable?compId=%s&dateFormat=dd.MM.yyyy&byStartPlaces=false';
//    $response = drupal_http_request($url . sprintf($method, $id), array(
//        'method' => 'GET',
//        'data' => NULL,
//        'timeout' => 15));
//    $response = drupal_json_decode('');
//    if($response->code == 200) {
//        $teams_data = drupal_json_decode($response->data);
        $teams_data = drupal_json_decode('{
  "Version": "0.1",
  "StatusCode": 200,
  "Data": [
    {
      "TeamNumber": 1,
      "CompTeam": {
        "CompTeamId": 13,
        "CompId": 103,
        "TeamId": 105,
        "Team": {
          "ClubLogoId": 75,
          "LegalEntityId": 105,
          "Name": "Чеховские Медведи",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-MOS",
          "Region": {
            "RegionId": "RU-MOS",
            "Name": "Московская область"
          },
          "CityId": 569591,
          "City": {
            "CityId": 569591,
            "Name": "Чехов"
          },
          "Address": "ГАУ МО \"Гандбольный центр\", Московская обл., г. Красногорск, Ильинское шоссе, д.1А"
        },
        "Name": "Чеховские Медведи",
        "NameEng": "Chekhovskie Medvedi",
        "RegionName": "Чехов",
        "RegionNameEng": "Chekhov",
        "ShortName": "ЧЕХОВ.МЕДВЕДИ",
        "ShortNameEng": "Chekhovskie Med",
        "PrevCompId": 102,
        "PrevCompPlace": 1,
        "StartPlace": 1,
        "Place": 1,
        "Games": 22,
        "Points": 40,
        "PointsPenalty": 0,
        "Winnings": 19,
        "Defeats": 1,
        "Draws": 2,
        "GoalsPlus": 724,
        "GoalsMinus": 558
      },
      "GameScore": [
        {
          "Score": "33:33",
          "GameDate": "2015-11-22T00:00:00",
          "GameDateString": "22.11.2015",
          "Team1Place": 1,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "26:26",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 1,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "30:25",
          "GameDate": "2016-03-05T00:00:00",
          "GameDateString": "05.03.2016",
          "Team1Place": 1,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "29:25",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 1,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "30:31",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 1,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "27:24",
          "GameDate": "2016-02-18T00:00:00",
          "GameDateString": "18.02.2016",
          "Team1Place": 1,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "31:24",
          "GameDate": "2015-10-03T00:00:00",
          "GameDateString": "03.10.2015",
          "Team1Place": 1,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "41:30",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 1,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "35:18",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 1,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "35:22",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 1,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:24",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 1,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "28:23",
          "GameDate": "2016-03-19T00:00:00",
          "GameDateString": "19.03.2016",
          "Team1Place": 1,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "30:28",
          "GameDate": "2015-10-06T00:00:00",
          "GameDateString": "06.10.2015",
          "Team1Place": 1,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "26:25",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 1,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "35:25",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 1,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "35:19",
          "GameDate": "2015-11-30T00:00:00",
          "GameDateString": "30.11.2015",
          "Team1Place": 1,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "31:22",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 1,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "41:26",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 1,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "41:30",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 1,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "36:28",
          "GameDate": "2015-12-12T00:00:00",
          "GameDateString": "12.12.2015",
          "Team1Place": 1,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "38:27",
          "GameDate": "2015-11-04T00:00:00",
          "GameDateString": "04.11.2015",
          "Team1Place": 1,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "38:23",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 1,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 2,
      "CompTeam": {
        "CompTeamId": 14,
        "CompId": 103,
        "TeamId": 150,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 150,
          "Name": "Пермские медведи",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-PER",
          "Region": {
            "RegionId": "RU-PER",
            "Name": "Пермский край"
          },
          "CityId": 511196,
          "City": {
            "CityId": 511196,
            "Name": "Пермь"
          },
          "Address": "г. Пермь, ул. Рабочая, д. 9"
        },
        "Name": "Пермские медведи",
        "NameEng": "Permskie medvedi",
        "RegionName": "Пермь",
        "RegionNameEng": "Perm",
        "ShortName": "Пермские медвед",
        "ShortNameEng": "Permskie medved",
        "PrevCompId": 102,
        "PrevCompPlace": 2,
        "StartPlace": 2,
        "Place": 2,
        "Games": 22,
        "Points": 38,
        "PointsPenalty": 0,
        "Winnings": 17,
        "Defeats": 1,
        "Draws": 4,
        "GoalsPlus": 652,
        "GoalsMinus": 539
      },
      "GameScore": [
        {
          "Score": "33:33",
          "GameDate": "2015-11-22T00:00:00",
          "GameDateString": "22.11.2015",
          "Team1Place": 2,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "26:26",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 2,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "29:29",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 2,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "26:28",
          "GameDate": "2016-02-26T00:00:00",
          "GameDateString": "26.02.2016",
          "Team1Place": 2,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "27:25",
          "GameDate": "2015-09-16T00:00:00",
          "GameDateString": "16.09.2015",
          "Team1Place": 2,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "26:25",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 2,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "29:26",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 2,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "28:28",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 2,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "30:29",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 2,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "30:27",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 2,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "31:21",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 2,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "26:24",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 2,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "38:28",
          "GameDate": "2015-10-24T00:00:00",
          "GameDateString": "24.10.2015",
          "Team1Place": 2,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "31:26",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 2,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "33:23",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 2,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "24:21",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 2,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "38:19",
          "GameDate": "2015-10-20T00:00:00",
          "GameDateString": "20.10.2015",
          "Team1Place": 2,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "30:26",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 2,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "35:28",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 2,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "36:29",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 2,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "10:0",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 2,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "36:18",
          "GameDate": "2016-03-19T00:00:00",
          "GameDateString": "19.03.2016",
          "Team1Place": 2,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 3,
      "CompTeam": {
        "CompTeamId": 15,
        "CompId": 103,
        "TeamId": 122,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 122,
          "Name": "Университет Лесгафта - Нева",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-SPE",
          "Region": {
            "RegionId": "RU-SPE",
            "Name": "Санкт-Петербург"
          },
          "CityId": 498817,
          "City": {
            "CityId": 498817,
            "Name": "Санкт-Петербург"
          },
          "Address": "г. Санкт-Петербург, ул. Декабристов д. 6, пом. 10-Н"
        },
        "Name": "Университет Лесгафта - Нева",
        "NameEng": "Neva",
        "RegionName": "Санкт-Петербург",
        "RegionNameEng": "Saint Petersburg",
        "ShortName": "УНИВЕР-НЕВА",
        "ShortNameEng": "NEVA",
        "PrevCompId": 102,
        "PrevCompPlace": 3,
        "StartPlace": 3,
        "Place": 3,
        "Games": 22,
        "Points": 36,
        "PointsPenalty": 0,
        "Winnings": 17,
        "Defeats": 3,
        "Draws": 2,
        "GoalsPlus": 625,
        "GoalsMinus": 526
      },
      "GameScore": [
        {
          "Score": "25:30",
          "GameDate": "2016-03-05T00:00:00",
          "GameDateString": "05.03.2016",
          "Team1Place": 3,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "25:29",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 3,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "29:29",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 3,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "28:26",
          "GameDate": "2016-02-26T00:00:00",
          "GameDateString": "26.02.2016",
          "Team1Place": 3,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "30:22",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 3,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "20:26",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 3,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "29:21",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 3,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "22:22",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 3,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "27:21",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 3,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "31:23",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 3,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "27:25",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 3,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "28:22",
          "GameDate": "2016-03-31T00:00:00",
          "GameDateString": "31.03.2016",
          "Team1Place": 3,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "32:24",
          "GameDate": "2015-11-25T00:00:00",
          "GameDateString": "25.11.2015",
          "Team1Place": 3,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "29:28",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 3,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "32:21",
          "GameDate": "2015-09-16T00:00:00",
          "GameDateString": "16.09.2015",
          "Team1Place": 3,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "24:19",
          "GameDate": "2015-10-24T00:00:00",
          "GameDateString": "24.10.2015",
          "Team1Place": 3,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "19:18",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 3,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "42:25",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 3,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:20",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 3,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:23",
          "GameDate": "2015-12-03T00:00:00",
          "GameDateString": "03.12.2015",
          "Team1Place": 3,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "31:26",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 3,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "39:26",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 3,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 4,
      "CompTeam": {
        "CompTeamId": 19,
        "CompId": 103,
        "TeamId": 119,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 119,
          "Name": "Динамо",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-AST",
          "Region": {
            "RegionId": "RU-AST",
            "Name": "Астраханская область"
          },
          "CityId": 580493,
          "City": {
            "CityId": 580493,
            "Name": "Астрахань"
          },
          "Address": "г. Астрахань, ул. Победы 55/ пл. Вокзальная 16"
        },
        "Name": "Динамо",
        "NameEng": "Zarya Kaspiya",
        "RegionName": "Астрахань",
        "RegionNameEng": "Astrakhan",
        "ShortName": "ДИНАМО",
        "ShortNameEng": "ZARYA KASPIYA",
        "PrevCompId": 102,
        "PrevCompPlace": 7,
        "StartPlace": 7,
        "Place": 4,
        "Games": 22,
        "Points": 27,
        "PointsPenalty": 0,
        "Winnings": 13,
        "Defeats": 8,
        "Draws": 1,
        "GoalsPlus": 608,
        "GoalsMinus": 547
      },
      "GameScore": [
        {
          "Score": "31:30",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 4,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "24:27",
          "GameDate": "2016-02-18T00:00:00",
          "GameDateString": "18.02.2016",
          "Team1Place": 4,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "25:27",
          "GameDate": "2015-09-16T00:00:00",
          "GameDateString": "16.09.2015",
          "Team1Place": 4,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "25:26",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 4,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "22:30",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 4,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:20",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 4,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "28:25",
          "GameDate": "2015-11-25T00:00:00",
          "GameDateString": "25.11.2015",
          "Team1Place": 4,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "32:23",
          "GameDate": "2016-03-17T00:00:00",
          "GameDateString": "17.03.2016",
          "Team1Place": 4,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "22:22",
          "GameDate": "2015-10-20T00:00:00",
          "GameDateString": "20.10.2015",
          "Team1Place": 4,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "28:24",
          "GameDate": "2016-03-12T00:00:00",
          "GameDateString": "12.03.2016",
          "Team1Place": 4,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:30",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 4,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "32:33",
          "GameDate": "2015-12-02T00:00:00",
          "GameDateString": "02.12.2015",
          "Team1Place": 4,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "33:27",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 4,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:36",
          "GameDate": "2015-12-07T00:00:00",
          "GameDateString": "07.12.2015",
          "Team1Place": 4,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "35:22",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 4,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:18",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 4,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "23:31",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 4,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "10:0",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 4,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "34:30",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 4,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "31:25",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 4,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "27:20",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 4,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "33:21",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 4,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 5,
      "CompTeam": {
        "CompTeamId": 20,
        "CompId": 103,
        "TeamId": 178,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 178,
          "Name": "СГАУ-Саратов",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-SAR",
          "Region": {
            "RegionId": "RU-SAR",
            "Name": "Саратовская область"
          },
          "CityId": 498677,
          "City": {
            "CityId": 498677,
            "Name": "Саратов"
          },
          "Address": "г. Саратов, ул. Чернышевского, 94"
        },
        "Name": "СГАУ-Саратов",
        "NameEng": "SGAU-Saratov",
        "RegionName": "Саратов",
        "RegionNameEng": "Saratov",
        "ShortName": "СГАУ-Саратов",
        "ShortNameEng": "SGAU-Saratov",
        "PrevCompId": 102,
        "PrevCompPlace": 8,
        "StartPlace": 8,
        "Place": 5,
        "Games": 22,
        "Points": 25,
        "PointsPenalty": 0,
        "Winnings": 11,
        "Defeats": 8,
        "Draws": 3,
        "GoalsPlus": 624,
        "GoalsMinus": 601
      },
      "GameScore": [
        {
          "Score": "24:31",
          "GameDate": "2015-10-03T00:00:00",
          "GameDateString": "03.10.2015",
          "Team1Place": 5,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "30:41",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 5,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:29",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 5,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "28:28",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 5,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "21:29",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 5,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "22:22",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 5,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "25:28",
          "GameDate": "2015-11-25T00:00:00",
          "GameDateString": "25.11.2015",
          "Team1Place": 5,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:32",
          "GameDate": "2016-03-17T00:00:00",
          "GameDateString": "17.03.2016",
          "Team1Place": 5,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "32:26",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 5,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:29",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 5,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "28:25",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 5,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "32:30",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 5,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "21:27",
          "GameDate": "2015-09-01T00:00:00",
          "GameDateString": "01.09.2015",
          "Team1Place": 5,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "30:28",
          "GameDate": "2015-12-02T00:00:00",
          "GameDateString": "02.12.2015",
          "Team1Place": 5,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "27:26",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 5,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "38:30",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 5,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:29",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 5,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "31:22",
          "GameDate": "2016-01-30T00:00:00",
          "GameDateString": "30.01.2016",
          "Team1Place": 5,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "28:23",
          "GameDate": "2015-10-21T00:00:00",
          "GameDateString": "21.10.2015",
          "Team1Place": 5,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "32:21",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 5,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "30:24",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 5,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "39:21",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 5,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 6,
      "CompTeam": {
        "CompTeamId": 21,
        "CompId": 103,
        "TeamId": 129,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 129,
          "Name": "Динамо-Виктор",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-STA",
          "Region": {
            "RegionId": "RU-STA",
            "Name": "Ставропольский край"
          },
          "CityId": 487846,
          "City": {
            "CityId": 487846,
            "Name": "Ставрополь"
          },
          "Address": "г. Ставрополь, ул. Ленина, 393/2"
        },
        "Name": "Динамо-Виктор",
        "NameEng": "Dinamo-Viktor",
        "RegionName": "Ставрополь",
        "RegionNameEng": "Stavropol",
        "ShortName": "ДИНАМО-ВИКТОР",
        "ShortNameEng": "DINAMO-VIKTOR",
        "PrevCompId": 102,
        "PrevCompPlace": 9,
        "StartPlace": 9,
        "Place": 6,
        "Games": 22,
        "Points": 22,
        "PointsPenalty": 0,
        "Winnings": 9,
        "Defeats": 9,
        "Draws": 4,
        "GoalsPlus": 544,
        "GoalsMinus": 552
      },
      "GameScore": [
        {
          "Score": "18:35",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 6,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "22:35",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 6,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "29:30",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 6,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "27:30",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 6,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "21:27",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 6,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:31",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 6,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "22:22",
          "GameDate": "2015-10-20T00:00:00",
          "GameDateString": "20.10.2015",
          "Team1Place": 6,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "24:28",
          "GameDate": "2016-03-12T00:00:00",
          "GameDateString": "12.03.2016",
          "Team1Place": 6,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:32",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 6,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "29:29",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 6,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "27:22",
          "GameDate": "2015-10-04T00:00:00",
          "GameDateString": "04.10.2015",
          "Team1Place": 6,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "22:20",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 6,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "25:25",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 6,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "24:29",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 6,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "28:23",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 6,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "21:21",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 6,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "28:21",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 6,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "10:0",
          "GameDate": "2015-12-02T00:00:00",
          "GameDateString": "02.12.2015",
          "Team1Place": 6,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "31:22",
          "GameDate": "2015-10-06T00:00:00",
          "GameDateString": "06.10.2015",
          "Team1Place": 6,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "25:19",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 6,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "34:25",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 6,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:26",
          "GameDate": "2016-03-23T00:00:00",
          "GameDateString": "23.03.2016",
          "Team1Place": 6,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 7,
      "CompTeam": {
        "CompTeamId": 18,
        "CompId": 103,
        "TeamId": 120,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 120,
          "Name": "Локомотив-Полет",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-CHE",
          "Region": {
            "RegionId": "RU-CHE",
            "Name": "Челябинская область"
          },
          "CityId": 1508291,
          "City": {
            "CityId": 1508291,
            "Name": "Челябинск"
          },
          "Address": "г. Челябинск, ул. Лесопарковая, 6 а"
        },
        "Name": "Локомотив-Полет",
        "NameEng": "Lokomotiv",
        "RegionName": "Челябинск",
        "RegionNameEng": "Chelyabinsk",
        "ShortName": "ЛОКОМОТИВ-ПОЛЕТ",
        "ShortNameEng": "LOKOMOTIV",
        "PrevCompId": 102,
        "PrevCompPlace": 6,
        "StartPlace": 6,
        "Place": 7,
        "Games": 22,
        "Points": 21,
        "PointsPenalty": 0,
        "Winnings": 10,
        "Defeats": 11,
        "Draws": 1,
        "GoalsPlus": 588,
        "GoalsMinus": 603
      },
      "GameScore": [
        {
          "Score": "24:28",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 7,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:28",
          "GameDate": "2016-03-19T00:00:00",
          "GameDateString": "19.03.2016",
          "Team1Place": 7,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "21:31",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 7,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "24:26",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 7,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "25:27",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 7,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "22:28",
          "GameDate": "2016-03-31T00:00:00",
          "GameDateString": "31.03.2016",
          "Team1Place": 7,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "30:29",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 7,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "33:32",
          "GameDate": "2015-12-02T00:00:00",
          "GameDateString": "02.12.2015",
          "Team1Place": 7,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "25:28",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 7,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "30:32",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 7,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "22:27",
          "GameDate": "2015-10-04T00:00:00",
          "GameDateString": "04.10.2015",
          "Team1Place": 7,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "20:22",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 7,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "36:29",
          "GameDate": "2015-10-21T00:00:00",
          "GameDateString": "21.10.2015",
          "Team1Place": 7,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:31",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 7,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "28:26",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 7,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "22:22",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 7,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "32:31",
          "GameDate": "2016-01-27T00:00:00",
          "GameDateString": "27.01.2016",
          "Team1Place": 7,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "31:28",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 7,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "28:27",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 7,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "29:25",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 7,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "27:23",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 7,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "27:23",
          "GameDate": "2016-02-02T00:00:00",
          "GameDateString": "02.02.2016",
          "Team1Place": 7,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 8,
      "CompTeam": {
        "CompTeamId": 17,
        "CompId": 103,
        "TeamId": 106,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 106,
          "Name": "СКИФ",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-KDA",
          "Region": {
            "RegionId": "RU-KDA",
            "Name": "Краснодарский край"
          },
          "CityId": 542420,
          "City": {
            "CityId": 542420,
            "Name": "Краснодар"
          },
          "Address": "г. Краснодар, ул. Ялтинская, 73"
        },
        "Name": "СКИФ",
        "NameEng": "SKIF-Krasnodar",
        "RegionName": "Краснодар",
        "RegionNameEng": "Krasnodar",
        "ShortName": "СКИФ",
        "ShortNameEng": "SKIF",
        "PrevCompId": 102,
        "PrevCompPlace": 5,
        "StartPlace": 5,
        "Place": 8,
        "Games": 22,
        "Points": 20,
        "PointsPenalty": 0,
        "Winnings": 9,
        "Defeats": 11,
        "Draws": 2,
        "GoalsPlus": 632,
        "GoalsMinus": 618
      },
      "GameScore": [
        {
          "Score": "28:30",
          "GameDate": "2015-10-06T00:00:00",
          "GameDateString": "06.10.2015",
          "Team1Place": 8,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "25:26",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 8,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "28:38",
          "GameDate": "2015-10-24T00:00:00",
          "GameDateString": "24.10.2015",
          "Team1Place": 8,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:31",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 8,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "24:32",
          "GameDate": "2015-11-25T00:00:00",
          "GameDateString": "25.11.2015",
          "Team1Place": 8,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "28:29",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 8,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "27:33",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 8,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "36:29",
          "GameDate": "2015-12-07T00:00:00",
          "GameDateString": "07.12.2015",
          "Team1Place": 8,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "27:21",
          "GameDate": "2015-09-01T00:00:00",
          "GameDateString": "01.09.2015",
          "Team1Place": 8,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:30",
          "GameDate": "2015-12-02T00:00:00",
          "GameDateString": "02.12.2015",
          "Team1Place": 8,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "25:25",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 8,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "29:24",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 8,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:36",
          "GameDate": "2015-10-21T00:00:00",
          "GameDateString": "21.10.2015",
          "Team1Place": 8,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "31:29",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 8,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "32:25",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 8,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "22:26",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 8,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:30",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 8,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "32:20",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 8,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "32:32",
          "GameDate": "2015-10-03T00:00:00",
          "GameDateString": "03.10.2015",
          "Team1Place": 8,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "36:25",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 8,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "27:26",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 8,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "34:21",
          "GameDate": "2016-02-04T00:00:00",
          "GameDateString": "04.02.2016",
          "Team1Place": 8,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 9,
      "CompTeam": {
        "CompTeamId": 24,
        "CompId": 103,
        "TeamId": 148,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 148,
          "Name": "УГНТУ-ВНЗМ",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-BA",
          "Region": {
            "RegionId": "RU-BA",
            "Name": "Башкортостан"
          },
          "CityId": 479561,
          "City": {
            "CityId": 479561,
            "Name": "Уфа"
          },
          "Address": "г. Уфа, ул. Кольцевая, д.5/1 офис 15"
        },
        "Name": "УГНТУ-ВНЗМ",
        "NameEng": "UGNTU-VNIZM",
        "RegionName": "Уфа",
        "RegionNameEng": "Ufa",
        "ShortName": "УГНТУ-ВНЗМ",
        "ShortNameEng": "UGNTU-VNIZM",
        "PrevCompId": 102,
        "PrevCompPlace": 12,
        "StartPlace": 12,
        "Place": 9,
        "Games": 22,
        "Points": 13,
        "PointsPenalty": 0,
        "Winnings": 5,
        "Defeats": 14,
        "Draws": 3,
        "GoalsPlus": 536,
        "GoalsMinus": 615
      },
      "GameScore": [
        {
          "Score": "25:35",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 9,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "19:35",
          "GameDate": "2015-11-30T00:00:00",
          "GameDateString": "30.11.2015",
          "Team1Place": 9,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:33",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 9,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "21:24",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 9,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "21:32",
          "GameDate": "2015-09-16T00:00:00",
          "GameDateString": "16.09.2015",
          "Team1Place": 9,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "19:24",
          "GameDate": "2015-10-24T00:00:00",
          "GameDateString": "24.10.2015",
          "Team1Place": 9,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "22:35",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 9,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "18:29",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 9,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:27",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 9,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "30:38",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 9,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "23:28",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 9,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "21:21",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 9,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "26:28",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 9,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "22:22",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 9,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "25:32",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 9,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:22",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 9,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "27:28",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 9,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "30:22",
          "GameDate": "2016-03-22T00:00:00",
          "GameDateString": "22.03.2016",
          "Team1Place": 9,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "27:26",
          "GameDate": "2015-11-25T00:00:00",
          "GameDateString": "25.11.2015",
          "Team1Place": 9,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:29",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 9,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "28:21",
          "GameDate": "2015-10-21T00:00:00",
          "GameDateString": "21.10.2015",
          "Team1Place": 9,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:24",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 9,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 10,
      "CompTeam": {
        "CompTeamId": 16,
        "CompId": 103,
        "TeamId": 107,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 107,
          "Name": "Каустик",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-VGG",
          "Region": {
            "RegionId": "RU-VGG",
            "Name": "Волгоградская область"
          },
          "CityId": 472757,
          "City": {
            "CityId": 472757,
            "Name": "Волгоград"
          },
          "Address": "г. Волгоград, ул. Б.-Энегльса, 2"
        },
        "Name": "Каустик",
        "NameEng": "Kaustik",
        "RegionName": "Волгоград",
        "RegionNameEng": "Volgograd",
        "ShortName": "КАУСТИК",
        "ShortNameEng": "KAUSTIK",
        "PrevCompId": 102,
        "PrevCompPlace": 4,
        "StartPlace": 4,
        "Place": 10,
        "Games": 22,
        "Points": 10,
        "PointsPenalty": 0,
        "Winnings": 5,
        "Defeats": 17,
        "Draws": 0,
        "GoalsPlus": 503,
        "GoalsMinus": 625
      },
      "GameScore": [
        {
          "Score": "22:31",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 10,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:41",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 10,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "19:38",
          "GameDate": "2015-10-20T00:00:00",
          "GameDateString": "20.10.2015",
          "Team1Place": 10,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:30",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 10,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "18:19",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 10,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "25:42",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 10,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "31:23",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 10,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "0:10",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 10,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "29:28",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 10,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "22:31",
          "GameDate": "2016-01-30T00:00:00",
          "GameDateString": "30.01.2016",
          "Team1Place": 10,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "21:28",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 10,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "0:10",
          "GameDate": "2015-12-02T00:00:00",
          "GameDateString": "02.12.2015",
          "Team1Place": 10,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "31:32",
          "GameDate": "2016-01-27T00:00:00",
          "GameDateString": "27.01.2016",
          "Team1Place": 10,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "28:31",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 10,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "30:26",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 10,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "20:32",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 10,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "28:27",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 10,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "22:30",
          "GameDate": "2016-03-22T00:00:00",
          "GameDateString": "22.03.2016",
          "Team1Place": 10,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "27:29",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 10,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:29",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 10,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "28:26",
          "GameDate": "2015-09-16T00:00:00",
          "GameDateString": "16.09.2015",
          "Team1Place": 10,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "24:32",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 10,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 2
        }
      ]
    },
    {
      "TeamNumber": 11,
      "CompTeam": {
        "CompTeamId": 22,
        "CompId": 103,
        "TeamId": 121,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 121,
          "Name": "Сунгуль",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-CHE",
          "Region": {
            "RegionId": "RU-CHE",
            "Name": "Челябинская область"
          },
          "CityId": 1536289,
          "City": {
            "CityId": 1536289,
            "Name": "Снежинск"
          },
          "Address": "г. Снежинск, ул. 40 лет Октября 15, а/я 162"
        },
        "Name": "Сунгуль",
        "NameEng": "Sungul",
        "RegionName": "Снежинск",
        "RegionNameEng": "Snezhinsk",
        "ShortName": "СУНГУЛЬ",
        "ShortNameEng": "SUNGUL",
        "PrevCompId": 102,
        "PrevCompPlace": 10,
        "StartPlace": 10,
        "Place": 11,
        "Games": 22,
        "Points": 8,
        "PointsPenalty": 0,
        "Winnings": 3,
        "Defeats": 17,
        "Draws": 2,
        "GoalsPlus": 580,
        "GoalsMinus": 677
      },
      "GameScore": [
        {
          "Score": "30:41",
          "GameDate": "2015-09-09T00:00:00",
          "GameDateString": "09.09.2015",
          "Team1Place": 11,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "28:36",
          "GameDate": "2015-12-12T00:00:00",
          "GameDateString": "12.12.2015",
          "Team1Place": 11,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "28:35",
          "GameDate": "2015-09-06T00:00:00",
          "GameDateString": "06.09.2015",
          "Team1Place": 11,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "29:36",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 11,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "20:28",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 11,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "23:28",
          "GameDate": "2015-12-03T00:00:00",
          "GameDateString": "03.12.2015",
          "Team1Place": 11,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "30:34",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 11,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "25:31",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 11,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:28",
          "GameDate": "2015-10-21T00:00:00",
          "GameDateString": "21.10.2015",
          "Team1Place": 11,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "21:32",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 11,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "22:31",
          "GameDate": "2015-10-06T00:00:00",
          "GameDateString": "06.10.2015",
          "Team1Place": 11,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "19:25",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 11,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "27:28",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 11,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "25:29",
          "GameDate": "2016-02-06T00:00:00",
          "GameDateString": "06.02.2016",
          "Team1Place": 11,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "32:32",
          "GameDate": "2015-10-03T00:00:00",
          "GameDateString": "03.10.2015",
          "Team1Place": 11,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 0
        },
        {
          "Score": "25:36",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 11,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:27",
          "GameDate": "2015-11-25T00:00:00",
          "GameDateString": "25.11.2015",
          "Team1Place": 11,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "29:29",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 11,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 0
        },
        {
          "Score": "29:27",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 11,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "29:26",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 11,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 1
        },
        {
          "Score": "26:30",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 11,
          "Team2Place": 12,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "34:28",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 11,
          "Team2Place": 12,
          "HomeTeam": 1,
          "WinningTeam": 1
        }
      ]
    },
    {
      "TeamNumber": 12,
      "CompTeam": {
        "CompTeamId": 23,
        "CompId": 103,
        "TeamId": 118,
        "Team": {
          "ClubLogoId": null,
          "LegalEntityId": 118,
          "Name": "Энергия",
          "CountryId": "RU",
          "Country": {
            "CountryId": "RU",
            "Name": "Россия"
          },
          "RegionId": "RU-VOR",
          "Region": {
            "RegionId": "RU-VOR",
            "Name": "Воронежская область"
          },
          "CityId": 472045,
          "City": {
            "CityId": 472045,
            "Name": "Воронеж"
          },
          "Address": "г. Воронеж, ул. Ворошилова, д. 1а, к. 7"
        },
        "Name": "Энергия",
        "NameEng": "Energiya",
        "RegionName": "Воронеж",
        "RegionNameEng": "Voronezh",
        "ShortName": "ЭНЕРГИЯ",
        "ShortNameEng": "ENERGIYA",
        "PrevCompId": 102,
        "PrevCompPlace": 11,
        "StartPlace": 11,
        "Place": 12,
        "Games": 22,
        "Points": 4,
        "PointsPenalty": 0,
        "Winnings": 2,
        "Defeats": 20,
        "Draws": 0,
        "GoalsPlus": 511,
        "GoalsMinus": 666
      },
      "GameScore": [
        {
          "Score": "27:38",
          "GameDate": "2015-11-04T00:00:00",
          "GameDateString": "04.11.2015",
          "Team1Place": 12,
          "Team2Place": 1,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:38",
          "GameDate": "2015-12-09T00:00:00",
          "GameDateString": "09.12.2015",
          "Team1Place": 12,
          "Team2Place": 1,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "0:10",
          "GameDate": "2015-09-02T00:00:00",
          "GameDateString": "02.09.2015",
          "Team1Place": 12,
          "Team2Place": 2,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "18:36",
          "GameDate": "2016-03-19T00:00:00",
          "GameDateString": "19.03.2016",
          "Team1Place": 12,
          "Team2Place": 2,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:31",
          "GameDate": "2015-09-23T00:00:00",
          "GameDateString": "23.09.2015",
          "Team1Place": 12,
          "Team2Place": 3,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:39",
          "GameDate": "2016-02-17T00:00:00",
          "GameDateString": "17.02.2016",
          "Team1Place": 12,
          "Team2Place": 3,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "20:27",
          "GameDate": "2015-10-07T00:00:00",
          "GameDateString": "07.10.2015",
          "Team1Place": 12,
          "Team2Place": 4,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "21:33",
          "GameDate": "2016-03-02T00:00:00",
          "GameDateString": "02.03.2016",
          "Team1Place": 12,
          "Team2Place": 4,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "24:30",
          "GameDate": "2015-10-14T00:00:00",
          "GameDateString": "14.10.2015",
          "Team1Place": 12,
          "Team2Place": 5,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "21:39",
          "GameDate": "2016-03-09T00:00:00",
          "GameDateString": "09.03.2016",
          "Team1Place": 12,
          "Team2Place": 5,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "25:34",
          "GameDate": "2016-03-16T00:00:00",
          "GameDateString": "16.03.2016",
          "Team1Place": 12,
          "Team2Place": 6,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:28",
          "GameDate": "2016-03-23T00:00:00",
          "GameDateString": "23.03.2016",
          "Team1Place": 12,
          "Team2Place": 6,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:27",
          "GameDate": "2015-12-13T00:00:00",
          "GameDateString": "13.12.2015",
          "Team1Place": 12,
          "Team2Place": 7,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "23:27",
          "GameDate": "2016-02-02T00:00:00",
          "GameDateString": "02.02.2016",
          "Team1Place": 12,
          "Team2Place": 7,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "26:27",
          "GameDate": "2015-09-13T00:00:00",
          "GameDateString": "13.09.2015",
          "Team1Place": 12,
          "Team2Place": 8,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "21:34",
          "GameDate": "2016-02-04T00:00:00",
          "GameDateString": "04.02.2016",
          "Team1Place": 12,
          "Team2Place": 8,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "21:28",
          "GameDate": "2015-10-21T00:00:00",
          "GameDateString": "21.10.2015",
          "Team1Place": 12,
          "Team2Place": 9,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "24:28",
          "GameDate": "2016-03-13T00:00:00",
          "GameDateString": "13.03.2016",
          "Team1Place": 12,
          "Team2Place": 9,
          "HomeTeam": 1,
          "WinningTeam": 2
        },
        {
          "Score": "26:28",
          "GameDate": "2015-09-16T00:00:00",
          "GameDateString": "16.09.2015",
          "Team1Place": 12,
          "Team2Place": 10,
          "HomeTeam": 2,
          "WinningTeam": 2
        },
        {
          "Score": "32:24",
          "GameDate": "2016-02-10T00:00:00",
          "GameDateString": "10.02.2016",
          "Team1Place": 12,
          "Team2Place": 10,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "30:26",
          "GameDate": "2015-09-30T00:00:00",
          "GameDateString": "30.09.2015",
          "Team1Place": 12,
          "Team2Place": 11,
          "HomeTeam": 1,
          "WinningTeam": 1
        },
        {
          "Score": "28:34",
          "GameDate": "2016-02-24T00:00:00",
          "GameDateString": "24.02.2016",
          "Team1Place": 12,
          "Team2Place": 11,
          "HomeTeam": 2,
          "WinningTeam": 2
        }
      ]
    }
  ]
}');

        $teams_data['GamesTable'] = form_games_table($teams_data);
        return $teams_data;
//    } else {
//        return null;
//    }
}

function form_games_table($teams_data) {
    $table_size = count($teams_data['Data']);
    $games_table = array();
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
    return $games_table;
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
