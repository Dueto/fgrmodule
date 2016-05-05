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
        <li class="active"><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition&view=chess_mates' ?>">Шахматка</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition&view=without_result' ?>">Без результатов игр</a></li>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['id'] . '&type=competition&view=mini' ?>">Минимальный вид</a></li>
    </ul>
</div>

