<?php if($fgrteam_games != null && array_key_exists('Data', $fgrteam_games) && count($fgrteam_games['Data']) != 0):?>
    <h3>Матчи команды</h3>
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
        <?php $game_node_id = get_fgrgame_node_id()['nid']; $team_node_id = get_fgrteam_node_id()['nid']; ?>
        <?php foreach ($fgrteam_games['Data'] as $key => $game): ?>
            <tr>
                <td><?php print date('Y.m.d H:i', strtotime($game['LocalDateTime'])) ?></td>
                <td class="right">
                <span class="team_name_table <?php if($game['WinnerTeam'] == $game['GameTeam1']['GameTeamId']){print 'winner';}; ?>">
                    <a class="blank_link" href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam1']['CompTeam']['TeamId'] ?>"><?php print $game['GameTeam1']['CompTeam']['Name'] ?></a>
                </span>
                    <img class="team_icon" src="<?php if($game['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>">
                </td>
                <td>
                <span class="game_score_table">
                    <a href="<?php print './' . $game_node_id . '?game_id=' . $game['GameId']?>"><?php print $game['GameTeam1']['Score'] ?> : <?php print $game['GameTeam2']['Score'] ?>
                    </a>
                </span>
                </td>
                <td class="left">
                    <img class="team_icon" src="<?php if($game['GameTeam2']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['GameTeam2']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>">
                <span class="team_name_table <?php if($game['WinnerTeam'] == $game['GameTeam2']['GameTeamId']){print 'winner';}; ?>">
                    <a class="blank_link" href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam2']['CompTeam']['TeamId'] ?>"><?php print $game['GameTeam2']['CompTeam']['Name'] ?></a>
                </span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <h3>Нет матчей команды</h3>
<?php endif ?>
