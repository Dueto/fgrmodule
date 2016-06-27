<div id="chessmates<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>" style="display: none">
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
                        <div>
                            <a class="<?php if(array_key_exists(0, $tournament_data['GamesTable'][$row_num][$i])) if ($tournament_data['GamesTable'][$row_num][$i][0]['Winner'] == 1) { print 'red';}?>">
                                <?php if(array_key_exists(0, $tournament_data['GamesTable'][$row_num][$i])) print $tournament_data['GamesTable'][$row_num][$i][0]['Score'] ?>
                            </a>
                        </div>
                        <div>
                            <a class="<?php if(array_key_exists(1, $tournament_data['GamesTable'][$row_num][$i])) if($tournament_data['GamesTable'][$row_num][$i][1]['Winner'] == 1) { print 'red';}?>">
                                <?php if(array_key_exists(1, $tournament_data['GamesTable'][$row_num][$i])) print $tournament_data['GamesTable'][$row_num][$i][1]['Score'] ?>
                            </a>
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
</div>
