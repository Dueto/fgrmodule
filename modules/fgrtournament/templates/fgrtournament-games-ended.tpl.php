<?php $crumb_string = null;?>
<?php if($crumbs != NULL): ?>
    <span> > </span>
    <?php foreach($crumbs as $key => $crumb) {
        $crumb_string = $crumb_string . ';' . $crumb['title'] . ':' . $crumb['ref'];
        print '<a href="' . $crumb['ref'] . '">' . $crumb['title'] . '</a>';
    }?>
    <span> > <?php print $tournament_data['TournamentMetaData']['TournamentFullName']?></span>
<?php endif ?>
<h2><?php print $tournament_data['TournamentMetaData']['TournamentFullName']?></h2>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result&crumbs=' . $crumb_string ?>">Матчи</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&crumbs=' . $crumb_string ?>">Статистика команд</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=playoff&crumbs=' . $crumb_string ?>">Плейофф</a></li>
    </ul>
</div>
<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=online&crumbs=' . $crumb_string ?>">Текущие</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result&crumbs=' . $crumb_string ?>">Завершенные</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=scheduled&crumbs=' . $crumb_string ?>">Запланированные</a></li>
    </ul>
</div>
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
                    <img class="team_icon" src="<?php print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId'] ?>">
                </td>
                <td>
                <span class="game_score_table">
                    <a href="<?php print './' . $game_node_id . '?game_id=' . $game['Game']['GameId']?>"><?php print $game['Game']['GameTeam1']['Score'] ?> : <?php print $game['Game']['GameTeam2']['Score'] ?>
                    </a>
                </span>
                </td>
                <td class="left">
                    <img class="team_icon" src="<?php print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId'] ?>">
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
