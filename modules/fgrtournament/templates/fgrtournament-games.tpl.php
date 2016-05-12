<?php if($crumbs != NULL): ?>
<span> > </span>
<?php $crumb_string = null;?>
<?php foreach($crumbs as $key => $crumb) {
    $crumb_string = $crumb_string . ';' . $crumb['title'] . ':' . $crumb['ref'];
    print '<a href="' . $crumb['ref'] . '">' . $crumb['title'] . '</a>';
}?>
<span> > <?php print $tournament_data['title'] . ', ' . $tournament_data['season'] . ', '
        . $tournament_data['league'] . ', ' . $tournament_data['gender'] . ' - ' . $tournament_data['stage']?></span>
<?php endif ?>
<h2><?php print $tournament_data['title'] . ', ' . $tournament_data['season'] . ', '
        . $tournament_data['league'] . ', ' . $tournament_data['gender'] . ' - ' . $tournament_data['stage']?></h2>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result&crumbs=' . $crumb_string ?>">Матчи</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&crumbs=' . $crumb_string ?>">Статистика команд</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=playoff&crumbs=' . $crumb_string ?>">Плейофф</a></li>
    </ul>
</div>
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
    <?php foreach ($tournament_data['games'] as $key => $game): ?>
        <tr>
            <td><?php print $game['date'] ?></td>
            <td class="right">
                <span class="team_name_table <?php if($game['winner'] == $game['team_a']['id']){print 'winner';}; ?>">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_a']['id'] ?>"><?php print $game['team_a']['title'] ?></a>
                </span>
                <img class="team_icon" src="<?php print $game['team_a']['icon_url'] ?>">
            </td>
<!--            <td><a href="--><?php //print './' . $game_node_id . '?game_id=' . $game['id'] ?><!--">--><?php //print $game['score_a'] ?><!-- : --><?php //print $game['score_b'] ?><!--</a></td>-->
            <td>
                <span class="game_score_table">
                    <a href="<?php print './' . $game_node_id . '?game_id=' . $game['game_id']?>"><?php print $game['score_a'] ?> : <?php print $game['score_b'] ?>
                    </a>
                </span>
            </td>
            <td class="left">
                <img class="team_icon" src="<?php print $game['team_b']['icon_url'] ?>">
                <span class="team_name_table  <?php if($game['winner'] == $game['team_b']['id']){print 'winner';}; ?>">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_b']['id'] ?>"><?php print $game['team_b']['title'] ?></a>
                </span>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
