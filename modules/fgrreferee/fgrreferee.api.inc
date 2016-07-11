<?php
function get_referee_by_id($id) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = '/Referees/%s';
    $response = drupal_http_request($url . sprintf($method, $id), array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $referee = drupal_json_decode($response->data)['Data'];
        return $referee;
    } else {
        return null;
    }
}

function get_fgr_referees($params) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = get_method_string_with_filters($params);
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $referees = drupal_json_decode($response->data);
        $all_count = get_all_referee_count($params);
        $referees['AllCount'] = $all_count;
        return $referees;
    } else {
        return null;
    }
}

function get_all_referee_count($params) {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $method = get_method_string_with_filters_count($params);
    $response = drupal_http_request($url . $method, array(
        'method' => 'GET',
        'data' => NULL,
        'timeout' => 15));
    if($response->code == 200) {
        $referees_count = drupal_json_decode($response->data)['Data']['Count'];
        return $referees_count;
    } else {
        return null;
    }
}

function get_method_string_with_filters($params) {
    $method_string = '/Referees';
    $filter_added = false;
    if($params['show_all'] == 'true') {
        return $method_string;
    } else {
        if($params['name'] != null) {
            if($filter_added) {
                $method_string .= '%20and%20substringof(%27' . $params['name'] . '%27,FirstName)%20eq%20true';
            } else {
                $method_string .= '?$filter=substringof(%27' . $params['name'] . '%27,FirstName)%20eq%20true';
                $filter_added = true;
            }
        }
        if($params['sername'] != null) {
            if($filter_added) {
                $method_string .= '%20and%20substringof(%27' . $params['sername'] . '%27,LastName)%20eq%20true';
            } else {
                $method_string .= '?$filter=substringof(%27' . $params['sername'] . '%27,LastName)%20eq%20true';
                $filter_added = true;
            }
        }
        if($params['second_name'] != null) {
            if($filter_added) {
                $method_string .= '%20and%20substringof(%27' . $params['second_name'] . '%27,MiddleName)%20eq%20true';
            } else {
                $method_string .= '?$filter=substringof(%27' . $params['second_name'] . '%27,MiddleName)%20eq%20true';
                $filter_added = true;
            }
        }
    }
    if($params['top'] != null) {
        if($filter_added) {
            $method_string .= '&$top=' . $params['top'];
        } else {
            $method_string .= '?$top=' . $params['top'];
            $filter_added = true;
        }
    }
    if($params['skip'] != null) {
        if($filter_added) {
            $method_string .= '&$skip=' . $params['skip'];
        } else {
            $method_string .= '?$skip=' . $params['skip'];
            $filter_added = true;
        }
    }
    if($params['competition_id'] != null) {
        $season_dates = get_competition_dates($params['competition_id']);
        if($season_dates != null) {
            if($filter_added) {
                $method_string .= '&seasonStartDate=' . $season_dates['start'];
                $method_string .= '&seasonEndDate=' . $season_dates['end'];
            } else {
                $method_string .= '?seasonStartDate=' . $season_dates['start'];
                $method_string .= '&seasonEndDate=' . $season_dates['end'];
                $filter_added = true;
            }
        }
    }
    if($filter_added) {
        $method_string .= '&$orderby=LastName%20asc';
    } else {
        $method_string .= '$orderby=LastName%20asc';
    }
    return $method_string;
}

function get_method_string_with_filters_count($params) {
    $method_string = '/Referees/Count';
    $filter_added = false;
    if($params['show_all'] == 'true') {
        return $method_string;
    } else {
        if($params['name'] != null) {
            if($filter_added) {
                $method_string .= '%20and%20substringof(%27' . $params['name'] . '%27,FirstName)%20eq%20true';
            } else {
                $method_string .= '?$filter=substringof(%27' . $params['name'] . '%27,FirstName)%20eq%20true';
                $filter_added = true;
            }
        }
        if($params['sername'] != null) {
            if($filter_added) {
                $method_string .= '%20and%20substringof(%27' . $params['sername'] . '%27,LastName)%20eq%20true';
            } else {
                $method_string .= '?$filter=substringof(%27' . $params['sername'] . '%27,LastName)%20eq%20true';
                $filter_added = true;
            }
        }
        if($params['second_name'] != null) {
            if($filter_added) {
                $method_string .= '%20and%20substringof(%27' . $params['second_name'] . '%27,MiddleName)%20eq%20true';
            } else {
                $method_string .= '?$filter=substringof(%27' . $params['second_name'] . '%27,MiddleName)%20eq%20true';
                $filter_added = true;
            }
        }
    }
    if($params['competition_id'] != null) {
        $season_dates = get_competition_dates($params['competition_id']);
        if($season_dates != null) {
            if($filter_added) {
                $method_string .= '&seasonStartDate=' . $season_dates['start'];
                $method_string .= '&seasonEndDate=' . $season_dates['end'];
            } else {
                $method_string .= '?seasonStartDate=' . $season_dates['start'];
                $method_string .= '&seasonEndDate=' . $season_dates['end'];
                $filter_added = true;
            }
        }
    }
    return $method_string;
}

function get_competition_dates($competition_id) {
    // todo: solved that for now season dates is taken from season name
    $splitted = explode(' ', $competition_id);
    if(array_key_exists(1, $splitted)) {
        $splitted_years = explode('/', $splitted[1]);
        if(array_key_exists(0, $splitted_years) && array_key_exists(1, $splitted_years)) {
            $return_dates = array();
            $return_dates['start'] = $splitted_years[0] . '-08-15T00%3A00%3A00';
            $return_dates['end'] = $splitted_years[1] . '-08-14T00%3A00%3A00';
            return $return_dates;
        }
    }
    return null;
}

function get_all_seasons() {
    $url = variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api');
    $seasons_method = '/Competitions?$filter=CompTypeId%20eq%20\'Season\'';
    $comp_with_childs_method = '/Competitions/withChilds/%s';
    $all_seasons = drupal_http_request($url . $seasons_method, array(
            'method' => 'GET',
            'data' => NULL,
            'timeout' => 15)
    );
    $seasons_full_data = array();
    if($all_seasons->code == 200) {
        $seasons_data = drupal_json_decode($all_seasons->data)['Data'];
        foreach($seasons_data as $season) {
            $season_championships = drupal_http_request($url . sprintf($comp_with_childs_method, $season['CompId']), array(
                'method' => 'GET',
                'data' => NULL,
                'timeout' => 15));
            if($season_championships->code == 200) {
                array_push($seasons_full_data, drupal_json_decode($season_championships->data)['Data']);
            } else {
                return null;
            }
        }
        return $seasons_full_data;
    } else {
        return null;
    }
}

function get_season_tournaments($id) {

}
