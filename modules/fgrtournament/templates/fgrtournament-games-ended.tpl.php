<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=online'?>">Текущие</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result'?>">Завершенные</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=scheduled'?>">Запланированные</a></li>
    </ul>
</div>

<div class="games_filters">
    <p>Начальная дата:
    <input type="text" id="date_picker" value="<?php if(array_key_exists('start_date', $filter_params) && $filter_params['start_date'] != null) print $filter_params['start_date']; ?>"/>
    </p>
    <p>Конечная дата:
    <input type="text" id="date_picker2" value="<?php if(array_key_exists('end_date', $filter_params) && $filter_params['end_date'] != null) print $filter_params['end_date']; ?>"/>
    </p>
    <?php $competition_teams = get_tournament_team_stats_by_id($tournament_data['TournamentMetaData']['TournamentId']); ?>
    <p>Команда:
        <select id="teams" name="teams">
            <option value="">Не выбрано</option>
            <?php foreach($competition_teams['Data'] as $team): ?>
                <option
                    label="<?php print $team['Team']['Name']; ?>"
                    value="<?php print $team['TeamId']; ?>"
                    <?php if($filter_params['team_id'] == $team['TeamId']) print 'selected';?>>
                    <?php print $team['Team']['Name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>
    <input type="submit" id="search_button" value="Поиск" class="button">
</div>

<div id="pages" class="pagination"></div>

<?php if(array_key_exists('Data', $tournament_data) && count($tournament_data['Data']) != 0):?>
    <table class="table_games sortable">
        <thead>
        <tr>
            <th>Дата</th>
            <th>Команда</th>
            <th>Счет</th>
            <th>Команда</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tournament_data['Data'] as $key => $game): ?>
            <tr>
                <td><?php print date('Y.m.d H:i', strtotime($game['Game']['LocalDateTime'])) ?></td>
                <td class="right">
                <span class="team_name_table <?php if($game['Game']['WinnerTeam'] == $game['Game']['GameTeam1']['GameTeamId']){print 'winner';}; ?>">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $game['Game']['GameTeam1']['CompTeam']['TeamId'] ?>"><?php print $game['Game']['GameTeam1']['CompTeam']['Name'] ?></a>
                </span>
                    <img class="team_icon" src="<?php if($game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>">
                </td>
                <td>
                <span class="game_score_table">
                    <a href="<?php print './' . $game_node_id . '?game_id=' . $game['Game']['GameId']?>"><?php print $game['Game']['GameTeam1']['Score'] ?> : <?php print $game['Game']['GameTeam2']['Score'] ?>
                    </a>
                </span>
                </td>
                <td class="left">
                    <img class="team_icon" src="<?php if($game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>">
                <span class="team_name_table <?php if($game['Game']['WinnerTeam'] == $game['Game']['GameTeam2']['GameTeamId']){print 'winner';}; ?>">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $game['Game']['GameTeam2']['CompTeam']['TeamId'] ?>"><?php print $game['Game']['GameTeam2']['CompTeam']['Name'] ?></a>
                </span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <h2>Нет завершенных матчей</h2>
<?php endif ?>

<script>
    <?php $top = $filter_params['top']; $skip = $filter_params['skip'];
    $current_page = ceil(($skip + $top) / $top) == 0 ? 1 : ceil(($skip + $top) / $top); ?>
    $("#search_button").click(function(){
        var startDate = $('#date_picker').val();
        var endDate = $('#date_picker2').val();
        var teamId = $('#teams option:selected').val();
        if(teamId == null) { teamId = ''; }
        window.location = './<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result'?>'
            + '&team_id=' + teamId
            + '&start_date=' + startDate
            + '&end_date=' + endDate
    });
    counter = 0;
    $("#pages").paging(<?php if(isset($tournament_data['AllCount'])) print $tournament_data['AllCount']; else print 0;?>, {
        format: "< > . (q -) nncnn (- p)",
        perpage: <?php print $top?>,
        lapping: 1,
        page: <?php print $current_page ?>,
        onSelect: function(page) {
            if(counter == 0) {
                counter++;
                return;
            }
            var startDate = $('#date_picker').val();
            var endDate = $('#date_picker2').val();
            var teamId = $('#teams option:selected').val();
            if(teamId == null) { teamId = ''; }
            window.location = './<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result'?>'
                + '&skip=' + (page - 1) * <?php print $top?>
                + '&top=<?php print $top?>'
                + '&team_id=' + teamId
                + '&start_date=' + startDate
                + '&end_date=' + endDate
        },
        onFormat: function(type) {
            switch (type) {
                case 'block':
                    if (!this.active)
                        return '<span class="disabled">' + this.value + '</span>';
                    else if (this.value != this.page)
                        return '<em><a href=#>' + this.value + '</a></em>';
                    return '<span class="current">' + this.value + '</span>';
                case 'left':
                    if (!this.active)
                        return '<span class="disabled">' + this.value + '</span>';
                    else if (this.value != this.page)
                        return '<em><a href=#>' + this.value + '</a></em>';
                    return '<span class="current">' + this.value + '</span>';
                case 'right':
                    if (!this.active)
                        return '<span class="disabled">' + this.value + '</span>';
                    else if (this.value != this.page)
                        return '<em><a href=#>' + this.value + '</a></em>';
                    return '<span class="current">' + this.value + '</span>';
                case 'next':
                    if (this.active)
                        return '<a href=# class="next">&rarr;</a>';
                    return '<span class="disabled">&rarr;</span>';
                case 'prev':
                    if (this.active)
                        return '<a href=# class="prev">&larr;</a>';
                    return '<span class="disabled">&larr;</span>';
                case 'first':
                    if (this.active)
                        return '<a href=# class="first">Первая</a>';
                    return '<span class="disabled">Первая</span>';
                case 'last':
                    if (this.active)
                        return '<a href=# class="last">Последняя</a>';
                    return '<span class="disabled">Последняя</span>';
                case "leap":
                    if (this.active)
                        return " &nbsp; ";
                    return "";
                case 'fill':
                    if (this.active)
                        return "...";
                    return "";
            }
        }
    });
    $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: '&#x3C;Пред',
        nextText: 'След&#x3E;',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
        'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
        'Июл','Авг','Сен','Окт','Ноя','Дек'],
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        weekHeader: 'Нед',
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#date_picker').datepicker({
        changeYear: true,
        changeMonth: true
    });
    $('#date_picker2').datepicker({
        changeYear: true,
        changeMonth: true
    });
</script>

