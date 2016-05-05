<h2><?php print $tournament_data['title'] . ', ' . $tournament_data['season'] . ', '
        . $tournament_data['league'] . ', ' . $tournament_data['gender'] . ' - ' . $tournament_data['stage']?></h2>
<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=games&game_type=result' ?>">Матчи</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition' ?>">Статистика команд</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=playoff' ?>">Плейофф</a></li>
    </ul>
</div>
<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition&view=chess_mates' ?>">Шахматка</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition&view=without_result' ?>">Без результатов игр</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition&view=mini' ?>">Минимальный вид</a></li>
    </ul>
</div>
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
        <th>Очки</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tournament_data['team_stats'] as $key => $team_stat): ?>
        <tr>
            <td><?php print $team_stat['rank'] ?></td>
            <td><img class="team_icon" src="<?php print $team_stat['team']['icon_url'] ?>">
                <span class="team_name_table">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $team_stat['team']['id'] ?>"><?php print $team_stat['team']['title'] ?></a>
                </span>
            </td>
            <td><?php print $team_stat['games_played'] ?></td>
            <td><?php print $team_stat['wins'] ?></td>
            <td><?php print $team_stat['draws'] ?></td>
            <td><?php print $team_stat['losses'] ?></td>
            <td><?php print $team_stat['score_difference'] ?></td>
            <td><?php print $team_stat['points'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
