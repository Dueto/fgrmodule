<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?game_id=' . $game_info['game_id'] . '&tab_type=info'?>">Инфо</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_info['game_id'] . '&tab_type=statistics'?>">Статистика</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_info['game_id'] . '&tab_type=online'?>">Ход матча</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_info['game_id'] . '&tab_type=throws'?>">Карта бросков</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_info['game_id'] . '&tab_type=video'?>">Видео</a></li>
    </ul>
</div>

<h3>Онлайн счет</h3>
<div id="online_diagram" class="table_diagram"></div>
<div id="point_difference_chart"></div>
<div id="point_difference_histogram"></div>

<!--<h2>--><?php //print $game_info['team_a']['name'] ?><!--</h2>-->
<!---->
<!--<table class="table_info">-->
<!--    <thead>-->
<!--        <th>№</th>-->
<!--        <th>Фамилия Имя</th>-->
<!--        <th>Амплуа</th>-->
<!--        <th>Возраст</th>-->
<!--        <th>Звание</th>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach($game_info['team_a']['players'] as $key => $player):?>
<!--        <tr>-->
<!--            <td>--><?php //print $player['member_number'] ?><!--</td>-->
<!--            <td>--><?php //print $player['second_name'] . ' ' . $player['first_name'] ?><!--</td>-->
<!--            <td>--><?php //print $player['position'] ?><!--</td>-->
<!--            <td>--><?php //print age_from_string_time($player['birthday']); ?><!--</td>-->
<!--            <td>--><?php //print $player['rank'] ?><!--</td>-->
<!--        </tr>-->
<!--     --><?php //endforeach;?>
<!--    </tbody>-->
<!--</table>-->
<!---->
<!--<h2>--><?php //print $game_info['team_b']['name'] ?><!--</h2>-->
<!---->
<!--<table class="table_info">-->
<!--    <thead>-->
<!--        <th>№</th>-->
<!--        <th>Фамилия Имя</th>-->
<!--        <th>Амплуа</th>-->
<!--        <th>Возраст</th>-->
<!--        <th>Звание</th>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach($game_info['team_b']['players'] as $key => $player):?>
<!--        <tr>-->
<!--            <td>--><?php //print $player['member_number'] ?><!--</td>-->
<!--            <td>--><?php //print $player['second_name'] . ' ' . $player['first_name'] ?><!--</td>-->
<!--            <td>--><?php //print $player['position'] ?><!--</td>-->
<!--            <td>--><?php //print age_from_string_time($player['birthday']); ?><!--</td>-->
<!--            <td>--><?php //print $player['rank'] ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach;?>
<!--    </tbody>-->
<!--</table>-->