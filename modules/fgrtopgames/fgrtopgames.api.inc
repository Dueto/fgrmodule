<?php
/**
 * @param $id
 * @return mixed|null
 */
function get_last_games($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/CompetitionGames?compId=' . $id . '&$orderby=Game/LocalDate%20desc&$top=20';
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));

    $game1 = '{
      "Game": {
        "GameId": 8033,
        "GameNumber": "76",
        "GameDisciplineId": 1,
        "GameDiscipline": {
          "GameDisciplineId": 1,
          "Name": "Гандбол"
        },
        "CityId": 3041785,
        "City": {
          "CityId": 3041785,
          "Name": "Gottby",
          "RegionId": "AX-4",
          "Region": {
            "RegionId": "AX-4",
            "Name": "Jomala",
            "TimeZone": "Europe/Mariehamn",
            "TimeZoneType": {
              "TimeZoneTypeId": "Europe/Mariehamn",
              "UtcMinutesOffset": 120
            }
          },
          "TimeZone": null,
          "TimeZoneType": null
        },
        "ArenaId": 27,
        "Arena": {
          "LegalEntityId": 27,
          "Name": "\"Новогорск\"",
          "CountryId": null,
          "Country": null,
          "RegionId": null,
          "Region": null,
          "CityId": null,
          "City": null,
          "Address": "Не задан"
        },
        "Attendance": null,
        "LocalDate": "2016-07-13T00:00:00",
        "LocalTime": "2016-07-04T01:30:00",
        "GameStatusId": 2,
        "GameStatus": {
          "GameStatusId": 2,
          "Name": "Завершена"
        },
        "StatsStatusId": 1,
        "StatsStatus": {
          "StatsStatusId": 1,
          "Name": "Неофициальная"
        },
        "GameRulesId": 1,
        "GameRules": {
          "GameRulesId": 1,
          "Name": "Международные правила",
          "MinutesInHalf": 30,
          "MinutesInOT": 5,
          "CountOT": 2,
          "Count7mSeries": 5,
          "CourtPlayerOT": 7
        },
        "GameTeam1": {
          "GameTeamId": 15671,
          "GameId": 8033,
          "TeamNum": 1,
          "CompTeamId": 166,
          "CompTeam": {
            "CompTeamId": 166,
            "CompId": 805,
            "TeamId": 105,
            "Team": {
              "GenderId": 1,
              "Gender": {
                "GenderId": 1,
                "Name": "Мужской"
              },
              "ClubLogoId": 75,
              "LogoId": null,
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
            "PrevCompId": 540,
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
          "HalfTimeScore": 2,
          "BaseTimeScore": 5,
          "Score": 8,
          "TeamFormKitTypeId": 2
        },
        "Team1Id": 105,
        "GameTeam2": {
          "GameTeamId": 15672,
          "GameId": 8033,
          "TeamNum": 2,
          "CompTeamId": 186,
          "CompTeam": {
            "CompTeamId": 186,
            "CompId": 805,
            "TeamId": 106,
            "Team": {
              "GenderId": 1,
              "Gender": {
                "GenderId": 1,
                "Name": "Мужской"
              },
              "ClubLogoId": null,
              "LogoId": null,
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
            "PrevCompId": 540,
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
          "HalfTimeScore": 3,
          "BaseTimeScore": 5,
          "Score": 6,
          "TeamFormKitTypeId": 3
        },
        "Team2Id": 106,
        "WinnerTeam": 15671,
        "LoserTeam": 15672,
        "LocalDateTime": "2016-07-13T01:30:00",
        "LocalTimeString": "01:30",
        "MoscowDateTime": "2016-07-13T02:30:00",
        "MoscowTimeString": "02:30",
        "Score": "8:6",
        "SwapScore": "6:8"
      },
      "CompGameId": 7837,
      "CompId": 805,
      "GameId": 8033,
      "IsOrigin": true
    }';

    if($response->code = 200) {
        $aaray = drupal_json_decode($response->data);
        array_push($aaray['Data'], drupal_json_decode($game1));
        return $aaray;
    } else {
        return null;
    }
}