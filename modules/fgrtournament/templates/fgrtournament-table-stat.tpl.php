<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&view=without_result&crumbs=' . $crumb_string ?>">Без результатов игр</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&view=mini&crumbs=' . $crumb_string ?>">Минимальный вид</a></li>
    </ul>
</div>
<h2><?php print $tournament_data['TournamentMetaData']['TournamentName']?></h2>
<?php if(array_key_exists('Data', $tournament_data) && count($tournament_data['Data']) != 0):?>
<table class="table-tournament sortable">
    <thead>
    <tr>
        <th>№</th>
        <th>Название команд</th>
        <th>И</th>
        <th>В</th>
        <th>Н</th>
        <th>П</th>
        <th>Разн</th>
        <th>"+"</th>
        <th>"-"</th>
        <th>Очки</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tournament_data['Data'] as $key => $team_stat): ?>
        <tr>
            <td><?php print $team_stat['Place'] ?></td>
            <td><img class="team_icon" src="<?php print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $team_stat['Team']['ClubLogoId'] ?>">
                <span class="team_name_table">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $team_stat['Team']['LegalEntityId'] ?>"><?php print $team_stat['Team']['Name'] ?></a>
                </span>
            </td>
            <td><?php print $team_stat['Games'] ?></td>
            <td><?php print $team_stat['Winnings'] ?></td>
            <td><?php print $team_stat['Draws'] ?></td>
            <td><?php print $team_stat['Defeats'] ?></td>
            <td><?php print $team_stat['GoalsPlus'] - $team_stat['GoalsMinus']?></td>
            <td><?php print $team_stat['GoalsPlus'] ?></td>
            <td><?php print $team_stat['GoalsMinus'] ?></td>
            <td><?php print $team_stat['Points'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else:?>
    <h2>Нет статистики</h2>
<?php endif?>