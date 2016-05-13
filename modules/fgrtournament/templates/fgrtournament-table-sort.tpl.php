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
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result&crumbs=' . $crumb_string?>">Матчи</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&crumbs=' . $crumb_string ?>">Статистика команд</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=playoff&crumbs=' . $crumb_string ?>">Плейофф</a></li>
    </ul>
</div>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&view=chess_mates&crumbs=' . $crumb_string ?>">Шахматка</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&view=without_result&crumbs=' . $crumb_string ?>">Без результатов игр</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&view=mini&crumbs=' . $crumb_string ?>">Минимальный вид</a></li>
    </ul>
</div>
<?php if(array_key_exists('Data', $tournament_data) && count($tournament_data['Data']) != 0):?>
<table class="chess_mates_table">
    <thead>
    <tr>
        <th>№</th>
        <th>Команды</th>
        <?php foreach($tournament_data['Data'] as $key => $team): ?>
            <th><?php print $key + 1?></th>
        <?php endforeach; ?>
        <th>И</th>
        <th>В</th>
        <th>Н</th>
        <th>П</th>
        <th>Раз</th>
        <th>Оч</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tournament_data['Data'] as $row_num => $team_stat): ?>
        <tr>
            <td>
                <?php print $row_num + 1?>
            </td>
            <td>
<!--                <img class="team_icon" src="--><?php //print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $team_stat['CompTeam']['Team']['ClubLogoId'] ?><!--">-->
                <span class="team_name_table">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $team_stat['CompTeam']['Team']['LegalEntityId'] ?>"><?php print $team_stat['CompTeam']['Team']['Name'] ?></a>
                </span>
            </td>
            <?php for($i = 0; $i < count($tournament_data['GamesTable'][$row_num]); $i++):?>
                <td>
                    <?php if($row_num != $i): ?>
                        <div class="<?php if($tournament_data['GamesTable'][$row_num][$i][0]['Winner'] == 1) { print 'red';}?>">
                            <?php print $tournament_data['GamesTable'][$row_num][$i][0]['Score'] ?>
                        </div>
                        <div class="<?php if($tournament_data['GamesTable'][$row_num][$i][1]['Winner'] == 1) { print 'red';}?>">
                            <?php print $tournament_data['GamesTable'][$row_num][$i][1]['Score'] ?>
                        </div>
                    <?php else: ?>
                        <img src="../files/ball.png">
                    <?php endif ?>
                </td>
            <?php endfor;?>
            <td><?php print $team_stat['CompTeam']['Games'] ?></td>
            <td><?php print $team_stat['CompTeam']['Winnings'] ?></td>
            <td><?php print $team_stat['CompTeam']['Draws'] ?></td>
            <td><?php print $team_stat['CompTeam']['Defeats'] ?></td>
            <td><?php print $team_stat['CompTeam']['GoalsPlus'] - $team_stat['CompTeam']['GoalsMinus']?></td>
            <td><?php print $team_stat['CompTeam']['Points'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else:?>
    <h2>Нет статистики</h2>
<?php endif?>