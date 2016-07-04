<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_statistics['game_id'] . '&tab_type=info'?>">Инфо</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?game_id=' . $game_statistics['game_id'] . '&tab_type=statistics'?>">Статистика</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_statistics['game_id'] . '&tab_type=online'?>">Ход матча</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_statistics['game_id'] . '&tab_type=throws'?>">Карта бросков</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_statistics['game_id'] . '&tab_type=video'?>">Видео</a></li>
    </ul>
</div>

<h3>Статистика команд</h3>
<div id="team_a_dialog_button" class="statistic_button"><?php print $game_statistics['GameTeam1']['CompTeam']['Name']; ?> </div>
<div id="team_b_dialog_button" class="statistic_button"><?php print $game_statistics['GameTeam2']['CompTeam']['Name']; ?> </div>
<div id="effective_dialog_button" class="statistic_button">Эффективность атак команд</div>

<div id="team_a_dialog">
    <table class="statistic_table">
        <thead>
            <tr>
                <th colspan="32"><?php print $game_statistics['GameTeam1']['CompTeam']['Name']; ?></th>
            </tr>
            <tr>
                <th rowspan="3">Ст.</th>
                <th rowspan="3">№</th>
                <th rowspan="3">Игроки</th>
                <th rowspan="3">УИ</th>
                <th colspan="10">Голы/Броски</th>
                <th rowspan="2" colspan="4">Нападение</th>
                <th rowspan="2" colspan="4">Потери</th>
                <th rowspan="2" colspan="3">Защита</th>
                <th rowspan="2" colspan="7">Наказания</th>
            </tr>
            <tr>
                <th rowspan="2">Всего</th>
                <th rowspan="2">%</th>
                <th colspan="5">Позиция</th>
                <th colspan="3">Тип атаки</th>
            </tr>
            <tr>
                <th>Л</th>
                <th>Кр</th>
                <th>Бл</th>
                <th>Д</th>
                <th>7м</th>
                <th>КА</th>
                <th>1х1</th>
                <th>БН</th>
                <th>ГП</th>
                <th>АП</th>
                <th>+7</th>
                <th>ПН</th>
                <th>ПМ</th>
                <th>ОШ</th>
                <th>НИ</th>
                <th>ПВ</th>
                <th>ПХ</th>
                <th>БЛ</th>
                <th>ПЗ</th>
                <th>-7</th>
                <th>ЖК</th>
                <th>2'</th>
                <th>2'+2'</th>
                <th>Д</th>
                <th>КН</th>
                <th>Др</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($game_statistics['GameStarts'] as $key => $person): ?>
            <?php if($person['StartTypeId'] == 1 && $person['TeamNum'] == 1): ?>
            <tr>
                <td>+</td>
                <td><?php print $person['PersonNum']; ?></td>
                <td><?php print $person['LastName']; ?></td>
                <td><?php print get_person_time($person); ?></td>
<!--                Score-->
                <td><?php if(get_player_score($person) != 0) print get_player_score($person);?></td>
<!--                %-->
                <td><?php $score = get_player_score($person); if($game_statistics['GameTeam1']['Score'] != 0 && $score != 0) print number_format(($score / $game_statistics['GameTeam1']['Score']) * 100, 0); ?></td>
<!--                Л-->
                <td><?php if(get_stat_by_param($person, 16) != 0 || get_stat_by_param($person, 36) != 0) print get_stat_by_param($person, 16) . '/' . get_stat_by_param($person, 36);?></td>
<!--                КР-->
                <td><?php if(get_stat_by_param($person, 11) != 0 || get_stat_by_param($person, 31) != 0) print get_stat_by_param($person, 11) . '/' . get_stat_by_param($person, 31);?></td>
<!--                БЛ-->
                <td>-</td>
<!--                Д-->
                <td><?php if(get_stat_by_param($person, 19) != 0 || get_stat_by_param($person, 39) != 0) print get_stat_by_param($person, 19) . '/' . get_stat_by_param($person, 39);?></td>
<!--                7м-->
                <td><?php if(get_stat_by_param($person, 17) != 0 || get_stat_by_param($person, 37) != 0) print get_stat_by_param($person, 17) . '/' . get_stat_by_param($person, 37);?></td>
<!--                КА-->
                <td><?php if(get_stat_by_param($person, 12) != 0 || get_stat_by_param($person, 32) != 0) print get_stat_by_param($person, 12) . '/' . get_stat_by_param($person, 32);?></td>
<!--                1х1-->
                <td><?php if(get_stat_by_param($person, 13) != 0 || get_stat_by_param($person, 33) != 0) print get_stat_by_param($person, 13) . '/' . get_stat_by_param($person, 33);?></td>
<!--                БН-->
                <td><?php if(get_stat_by_param($person, 14) != 0 || get_stat_by_param($person, 34) != 0) print get_stat_by_param($person, 14) . '/' . get_stat_by_param($person, 34);?></td>
<!--                ГП-->
                <td>-</td>
<!--                АП-->
                <td>-</td>
<!--                +7-->
                <td><?php if(get_stat_by_param($person, 47) != 0) print get_stat_by_param($person, 47)?></td>
<!--                ПН-->
                <td><?php if(get_stat_by_param($person, 70) != 0) print get_stat_by_param($person, 70)?></td>
<!--                ПМ-->
                <td><?php $pm = get_stat_by_param($person, 51); if($pm != 0) print $pm?></td>
<!--                ОШ-->
                <td><?php $osh = get_stat_by_param($person, 52); if($osh != 0) print $osh?></td>
<!--                НИ-->
                <td><?php $ni = get_stat_by_param($person, 53); if($ni != 0) print $ni?></td>
<!--                ПВ-->
                <td><?php $sum = $pm + $osh + $ni; if($sum != 0) print $sum?></td>
<!--                ПХ-->
                <td><?php if(get_stat_by_param($person, 62) != 0) print get_stat_by_param($person, 62)?></td>
<!--                БЛ-->
                <td><?php if(get_stat_by_param($person, 43) != 0) print get_stat_by_param($person, 43)?></td>
<!--                ПЗ-->
                <td><?php if(get_stat_by_param($person, 63) != 0) print get_stat_by_param($person, 63)?></td>
<!--                -7-->
                <td>-</td>
<!--                ЖК-->
                <td><?php if(get_stat_by_param($person, 81) != 0) print get_stat_by_param($person, 81)?></td>
<!--                2-->
                <td><?php if(get_stat_by_param($person, 82) != 0) print get_stat_by_param($person, 82)?></td>
<!--                2+2-->
                <td>-</td>
<!--                Д-->
                <td><?php if(get_stat_by_param($person, 83) != 0) print get_stat_by_param($person, 83)?></td>
<!--                КН-->
                <td>-</td>
<!--                ДР-->
                <td><?php if(get_stat_by_param($person, 84) != 0) print get_stat_by_param($person, 84)?></td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <table class="statistic_table">
        <thead>
            <tr>
                <th rowspan="2">№</th>
                <th rowspan="2">Вратари</th>
                <th colspan="10">Сейвы/Броски в створы ворот</th>
            </tr>
            <tr>
                <th>Всего</th>
                <th>%</th>
                <th>Л</th>
                <th>Кр</th>
                <th>Бл</th>
                <th>Д</th>
                <th>7м</th>
                <th>КА</th>
                <th>1х1</th>
                <th>БН</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($game_statistics['GameStarts'] as $key => $person): ?>
            <?php if($person['StartTypeId'] == 2 && $person['TeamNum'] == 1): ?>
                <tr>
                    <td><?php print $person['PersonNum']; ?></td>
                    <td><?php print $person['LastName']; ?></td>
                    <td><?php if(get_stat_by_param($person, 20) != 0 || get_stat_by_param($person, 90) != 0) print get_stat_by_param($person, 20) . '/' . get_stat_by_param($person, 90);?></td>
                    <td><?php if(get_stat_by_param($person, 121) != 0) print get_stat_by_param($person, 20);?></td>

                    <td><?php if(get_stat_by_param($person, 26) != 0 || get_stat_by_param($person, 96) != 0) print get_stat_by_param($person, 26) . '/' . get_stat_by_param($person, 96);?></td>
                    <td><?php if(get_stat_by_param($person, 21) != 0 || get_stat_by_param($person, 91) != 0) print get_stat_by_param($person, 21) . '/' . get_stat_by_param($person, 91);?></td>
                    <td></td>
                    <td><?php if(get_stat_by_param($person, 29) != 0 || get_stat_by_param($person, 99) != 0) print get_stat_by_param($person, 29) . '/' . get_stat_by_param($person, 99);?></td>
                    <td><?php if(get_stat_by_param($person, 27) != 0 || get_stat_by_param($person, 97) != 0) print get_stat_by_param($person, 27) . '/' . get_stat_by_param($person, 97);?></td>
                    <td><?php if(get_stat_by_param($person, 22) != 0 || get_stat_by_param($person, 92) != 0) print get_stat_by_param($person, 22) . '/' . get_stat_by_param($person, 92);?></td>
                    <td><?php if(get_stat_by_param($person, 23) != 0 || get_stat_by_param($person, 93) != 0) print get_stat_by_param($person, 23) . '/' . get_stat_by_param($person, 93);?></td>
                    <td><?php if(get_stat_by_param($person, 24) != 0 || get_stat_by_param($person, 94) != 0) print get_stat_by_param($person, 24) . '/' . get_stat_by_param($person, 94);?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">Итого:</td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 20 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 90 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 20 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 90 ,1);?></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 121 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 20 ,1);?></td>

            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 26 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 96 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 26 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 96 ,1);?></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 21 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 91 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 21 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 91 ,1);?></td>
            <td></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 29 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 99 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 29 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 99 ,1);?></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 27 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 97 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 27 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 97 ,1);?></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 22 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 92 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 22 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 92 ,1);?></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 23 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 93 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 23 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 93 ,1);?></td>
            <td><?php if(get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 24 ,1) != 0 || get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 94 ,1) != 0) print get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 24 ,1) . '/' . get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 94 ,1);?></td>
        </tr>
        </tfoot>
    </table>



    <table class="statistic_table">
        <thead>
        <tr>
            <th colspan="6">Броски команды</th>
            <th colspan="6">Голы</th>
            <th colspan="6">Сейвы</th>
            <th colspan="6">Мимо</th>
            <th colspan="6">Штанга</th>
            <th colspan="6">Блоки</th>
            <th colspan="6">Всего</th>
            <th colspan="6">%</th>
            <th colspan="6">% от общего количества</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($game_statistics['GameStarts'] as $team): ?>
        <?php if($team['StartTypeId'] == 0 && $team['TeamNum'] == 1): ?>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Броски с 6 м Линии</td>
            <td colspan="6"><?php print get_stat_by_param($team, 16) ?></td>
            <td colspan="6"><?php print get_stat_by_param($team, 26) ?></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Броски с краев</td>
            <td colspan="6"><?php print get_stat_by_param($team, 12) ?></td>
            <td colspan="6"><?php print get_stat_by_param($team, 22) ?></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="3" class="first_column_throws_statistics">Слева</td>
            <td colspan="3" class="first_column_throws_statistics">Справа</td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Ближние броски - до 9м</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="2" class="first_column_throws_statistics">Слева</td>
            <td colspan="2" class="first_column_throws_statistics">Центр</td>
            <td colspan="2" class="first_column_throws_statistics">Справа</td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Дальние броски - из-за 9м</td>
            <td colspan="6"><?php print get_stat_by_param($team, 19) ?></td>
            <td colspan="6"><?php print get_stat_by_param($team, 29) ?></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="2" class="first_column_throws_statistics">Слева</td>
            <td colspan="2" class="first_column_throws_statistics">Центр</td>
            <td colspan="2" class="first_column_throws_statistics">Справа</td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">7 м - семиметровый штрафной бросок</td>
            <td colspan="6"><?php print get_stat_by_param($team, 17) ?></td>
            <td colspan="6"><?php print get_stat_by_param($team, 27) ?></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        </tbody>
        <?php endif; ?>
        <?php endforeach; ?>
        <tfoot>
        <tr>
            <td colspan="6">Всего:</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        </tfoot>
    </table>

    <table class="statistic_table">
        <thead>
            <tr>
                <th>Атаки команды</th>
                <th>Голы</th>
                <th>Сейвы</th>
                <th>Мимо</th>
                <th>Штанга</th>
                <th>Блоки</th>
                <th>Всего</th>
                <th>%</th>
                <th>% от общего количества</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($game_statistics['GameStarts'] as $team): ?>
        <?php if($team['StartTypeId'] == 0 && $team['TeamNum'] == 1): ?>
        <tr>
            <td class="first_column_throws_statistics">Позиционное нападение</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="first_column_throws_statistics">КонтрАтака</td>
            <td><?php print get_stat_by_param($team, 12) ?></td>
            <td><?php print get_stat_by_param($team, 22) ?></td>
            <td><?php $off_target = get_stat_by_param($team, 32) - get_stat_by_param($team, 92); if($off_target > 0) print $off_target; else print 0;?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="first_column_throws_statistics">Индивидуальный отрыв (1х1)</td>
            <td><?php print get_stat_by_param($team, 13) ?></td>
            <td><?php print get_stat_by_param($team, 23) ?></td>
            <td><?php $off_target = get_stat_by_param($team, 33) - get_stat_by_param($team, 93); if($off_target > 0) print $off_target; else print 0;?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="first_column_throws_statistics">Быстрое начало</td>
            <td><?php print get_stat_by_param($team, 14) ?></td>
            <td><?php print get_stat_by_param($team, 24) ?></td>
            <td><?php $off_target = get_stat_by_param($team, 34) - get_stat_by_param($team, 94); if($off_target > 0) print $off_target; else print 0;?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php endif;?>
        <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <td>Всего:</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>

<div id="team_b_dialog">
    <table class="statistic_table">
        <thead>
        <tr>
            <th colspan="32">Команда А город</th>
        </tr>
        <tr>
            <th rowspan="3">Ст.</th>
            <th rowspan="3">№</th>
            <th rowspan="3">Игроки</th>
            <th rowspan="3">УИ</th>
            <th colspan="10">Голы/Броски</th>
            <th rowspan="2" colspan="4">Нападение</th>
            <th rowspan="2" colspan="4">Потери</th>
            <th rowspan="2" colspan="3">Защита</th>
            <th rowspan="2" colspan="7">Наказания</th>
        </tr>
        <tr>
            <th rowspan="2">Всего</th>
            <th rowspan="2">%</th>
            <th colspan="5">Позиция</th>
            <th colspan="3">Тип атаки</th>
        </tr>
        <tr>
            <th>Л</th>
            <th>Кр</th>
            <th>Бл</th>
            <th>Д</th>
            <th>7м</th>
            <th>КА</th>
            <th>1х1</th>
            <th>БН</th>
            <th>ГП</th>
            <th>АП</th>
            <th>+7</th>
            <th>ПН</th>
            <th>ПМ</th>
            <th>ОШ</th>
            <th>НИ</th>
            <th>ПВ</th>
            <th>ПХ</th>
            <th>БЛ</th>
            <th>ПЗ</th>
            <th>-7</th>
            <th>ЖК</th>
            <th>2'</th>
            <th>2'+2'</th>
            <th>Д</th>
            <th>КН</th>
            <th>Др</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
        </tr>
        </tbody>
    </table>
    <table>
        <thead>
        <tr>
            <th rowspan="2">№</th>
            <th rowspan="2">Вратари</th>
            <th colspan="10">Сейвы/Броски в створы ворот</th>
        </tr>
        <tr>
            <th>Всего</th>
            <th>%</th>
            <th>Л</th>
            <th>Кр</th>
            <th>Бл</th>
            <th>Д</th>
            <th>7м</th>
            <th>КА</th>
            <th>1х1</th>
            <th>БН</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">Итого:</td>
        </tr>
        </tfoot>
    </table>
    <table class="throws_statistics">
        <thead>
        <tr>
            <th colspan="6">Броски команды</th>
            <th colspan="6">Голы</th>
            <th colspan="6">Сейвы</th>
            <th colspan="6">Мимо</th>
            <th colspan="6">Штанга</th>
            <th colspan="6">Блоки</th>
            <th colspan="6">Всего</th>
            <th colspan="6">%</th>
            <th colspan="6">% от общего количества</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Броски с 6 м Линии</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Броски с краев</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="3" class="first_column_throws_statistics">Слева</td>
            <td colspan="3" class="first_column_throws_statistics">Справа</td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Ближние броски - до 9м</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="2" class="first_column_throws_statistics">Слева</td>
            <td colspan="2" class="first_column_throws_statistics">Центр</td>
            <td colspan="2" class="first_column_throws_statistics">Справа</td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">Дальние броски - из-за 9м</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="2" class="first_column_throws_statistics">Слева</td>
            <td colspan="2" class="first_column_throws_statistics">Центр</td>
            <td colspan="2" class="first_column_throws_statistics">Справа</td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="6" class="first_column_throws_statistics">7 м - семиметровый штрафной бросок</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">Всего:</td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
            <td colspan="6"></td>
        </tr>
        </tfoot>
    </table>

    <table class="throws_statistics">
        <thead>
        <tr>
            <th>Атаки команды</th>
            <th>Голы</th>
            <th>Сейвы</th>
            <th>Мимо</th>
            <th>Штанга</th>
            <th>Блоки</th>
            <th>Всего</th>
            <th>%</th>
            <th>% от общего количества</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="first_column_throws_statistics">Позиционное нападение</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="first_column_throws_statistics">КонтрАтака</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="first_column_throws_statistics">Индивидуальный отрыв (1х1)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="first_column_throws_statistics">Быстрое начало</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td>Всего:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tfoot>
    </table>
</div>

<div id="effective_dialog">
    <table class="statistic_table">
        <thead>
        <tr>
            <th rowspan="3">Команда город</th>
            <th colspan="18">Эффективность атак</th>
            <th rowspan="3">Ком. ТА</th>
            <th rowspan="3">ВрВлМ %</th>
            <th rowspan="3">max/min РазнСч</th>
            <th rowspan="3">max ГП</th>
        </tr>
        <tr>
            <th colspan="2">Всего</th>

            <th colspan="2">В большинстве</th>
            <th colspan="2">В меньшинстве</th>
            <th colspan="2">ПН</th>
            <th colspan="2">КА</th>
            <th colspan="2">1Х1</th>
            <th colspan="2">БН</th>
            <th colspan="2">ВСЕГО В БП</th>
            <th colspan="2">ПА</th>
        </tr>
        <tr>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
            <th>ГА</th>
            <th>%</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

<div id="stats-holder">
    <div id="stat_goals" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Голы</div>
        <?php $team1_goals = get_team_goals($game_statistics['GameStarts'], 1); $team2_goals = get_team_goals($game_statistics['GameStarts'], 2); ?>
        <div class="fl stat-home"><?php print $team1_goals;?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php print ($team1_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php print ($team2_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_goals?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Эффективность бросков</div>
        <?php $team1_goals = get_team_goals($game_statistics['GameStarts'], 1); $team2_goals = get_team_goals($game_statistics['GameStarts'], 2);
              $team1_throws = get_team_throws($game_statistics['GameStarts'], 1); $team2_throws = get_team_throws($game_statistics['GameStarts'], 2);
              if($team1_throws != 0) $team1_efficiency = $team1_goals / $team1_throws * 100; else $team1_efficiency = 0; if($team2_throws != 0) $team2_efficiency = $team2_goals / $team2_throws * 100; else $team2_efficiency = 0;
        ?>
        <div class="fl stat-home"><?php print number_format($team1_efficiency, 0); ?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team1_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team2_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print number_format($team2_efficiency, 0); ?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_fast_move" class="stat-element-holder">
        <?php $team1_goals = get_team_stat($game_statistics['GameStarts'], 1, 14); $team2_goals = get_team_stat($game_statistics['GameStarts'], 2, 14);
              $team1_throws = get_team_stat($game_statistics['GameStarts'], 1, 34); $team2_throws = get_team_stat($game_statistics['GameStarts'], 2, 34);
              if($team1_throws != 0) $team1_efficiency = $team1_goals / $team1_throws * 100; else $team1_efficiency = 0; if($team2_throws != 0) $team2_efficiency = $team2_goals / $team2_throws * 100; else $team2_efficiency = 0;
        ?>
        <div class="action-name" style="text-align:center; ">Эффективность быстрых переходов</div>
        <div class="fl stat-home"><?php print number_format($team1_efficiency, 0); ?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team1_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team2_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print number_format($team2_efficiency, 0); ?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_not_in_goal" class="stat-element-holder">
        <?php $team1_throws = get_team_stat($game_statistics['GameStarts'], 1, 30); $team2_throws = get_team_stat($game_statistics['GameStarts'], 2, 30);
              $team1_throws_in_gate = get_team_stat($game_statistics['GameStarts'], 1, 90); $team2_throws_in_gate = get_team_stat($game_statistics['GameStarts'], 2, 90);
              $team1_off_target = $team1_throws - $team1_throws_in_gate; $team2_off_target = $team2_throws - $team2_throws_in_gate;
        ?>
        <div class="action-name" style="text-align:center; ">Количество бросков не в створ ворот</div>
        <div class="fl stat-home"><?php print $team1_off_target; ?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php if(($team1_off_target + $team2_off_target) != 0) print ($team1_off_target/($team1_off_target + $team2_off_target)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php if(($team1_off_target + $team2_off_target) != 0) print ($team2_off_target/($team1_off_target + $team2_off_target)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_off_target; ?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_goalkeepers" class="stat-element-holder">
        <?php $team1_goals = get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 20, 1); $team2_goals = get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 20, 2);
              $team1_throws = get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 90 ,1); $team2_throws = get_sum_stat_by_goalkeepers_param($game_statistics['GameStarts'], 90 ,1);
              if($team1_throws != 0) $team1_efficiency = $team1_goals / $team1_throws * 100; else $team1_efficiency = 0; if($team2_throws != 0) $team2_efficiency = $team2_goals / $team2_throws * 100; else $team2_efficiency = 0;
        ?>
        <div class="action-name" style="text-align:center; ">Эффективность вратарей</div>
        <div class="fl stat-home"><?php print number_format($team1_efficiency, 0); ?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team1_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team2_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print number_format($team2_efficiency, 0); ?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_7m_fine_count" class="stat-element-holder">
        <?php $team1_goals = get_team_stat($game_statistics['GameStarts'], 1, 37); $team2_goals = get_team_stat($game_statistics['GameStarts'], 2, 37); ?>
        <div class="action-name" style="text-align:center; ">Количество 7м штрафных бросков</div>
        <div class="fl stat-home"><?php print $team1_goals;?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php print ($team1_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php print ($team2_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_goals;?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_7m_count" class="stat-element-holder">
        <?php $team1_goals = get_team_stat($game_statistics['GameStarts'], 1, 17); $team2_goals = get_team_stat($game_statistics['GameStarts'], 2, 17);
        $team1_throws = get_team_stat($game_statistics['GameStarts'], 1, 37); $team2_throws = get_team_stat($game_statistics['GameStarts'], 2, 37);
        if($team1_throws != 0) $team1_efficiency = $team1_goals / $team1_throws * 100; else $team1_efficiency = 0; if($team2_throws != 0) $team2_efficiency = $team2_goals / $team2_throws * 100; else $team2_efficiency = 0;
        ?>
        <div class="action-name" style="text-align:center; ">Эффективность пробития 7м штрафных бросков</div>
        <div class="fl stat-home"><?php print number_format($team1_efficiency, 0); ?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team1_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php if(($team1_efficiency + $team2_efficiency) != 0) print ($team2_efficiency/($team1_efficiency + $team2_efficiency)) * 335; else { print 0; }?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print number_format($team2_efficiency, 0); ?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_lost_ball" class="stat-element-holder">
        <?php $team1_goals = get_team_stat($game_statistics['GameStarts'], 1, 50); $team2_goals = get_team_stat($game_statistics['GameStarts'], 2, 50); ?>
        <div class="action-name" style="text-align:center; ">Потери всего</div>
        <div class="fl stat-home"><?php print $team1_goals;?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php print ($team1_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php print ($team2_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_goals;?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_ball_catches" class="stat-element-holder">
        <?php $team1_goals = get_team_stat($game_statistics['GameStarts'], 1, 62); $team2_goals = get_team_stat($game_statistics['GameStarts'], 2, 62); ?>
        <div class="action-name" style="text-align:center; ">Перехваты</div>
        <div class="fl stat-home"><?php print $team1_goals;?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php print ($team1_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php print ($team2_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_goals;?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_2m_fine_count" class="stat-element-holder">
        <?php $team1_goals = get_team_stat($game_statistics['GameStarts'], 1, 82); $team2_goals = get_team_stat($game_statistics['GameStarts'], 2, 82); ?>
        <div class="action-name" style="text-align:center; ">Количество двухминутных удалений</div>
        <div class="fl stat-home"><?php print $team1_goals;?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php print ($team1_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php print ($team2_goals/($team1_goals + $team2_goals)) * 335?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_goals;?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_fines" class="stat-element-holder">
        <?php $team1_fines = get_team_stat($game_statistics['GameStarts'], 1, 81); $team2_fines = get_team_stat($game_statistics['GameStarts'], 2, 81);
        $team1_fines += get_team_stat($game_statistics['GameStarts'], 1, 82) * 2; $team2_fines += get_team_stat($game_statistics['GameStarts'], 2, 82) * 2;
        $team1_fines += get_team_stat($game_statistics['GameStarts'], 1, 83) * 5; $team2_fines += get_team_stat($game_statistics['GameStarts'], 2, 83) * 5;
        $team1_fines += get_team_stat($game_statistics['GameStarts'], 1, 84) * 10; $team2_fines += get_team_stat($game_statistics['GameStarts'], 2, 84) * 10;
        ?>
        <div class="action-name" style="text-align:center; ">Наказания = (Др) x 10 + (Д) x 5 + (2мин.) x 2 + (Пр.) x 1</div>
        <div class="fl stat-home"><?php print $team1_fines;?></div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:<?php print ($team1_fines/($team1_fines + $team2_fines)) * 335?>px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:<?php print ($team2_fines/($team1_fines + $team2_fines)) * 335?>px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away"><?php print $team2_fines;?></div>
        <div class="cl"></div>
    </div>
    <div id="stat_timeouts" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Командные тайм-ауты(Не сделано)</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:130.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:130.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_max_goals_in_a_row" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Максимально голов подряд(Не сделано)</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:120.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:120.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_ball_owning" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Время владения мячом(Не сделано)</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:180.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:180.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
</div>

<script>
    jQuery( "#team_a_dialog" ).dialog({
        autoOpen: false,
        width: 920,
        zIndex: 9999
    });
    jQuery( "#team_a_dialog_button" ).click(function( event ) {
        jQuery( "#team_a_dialog" ).dialog( "open" );
        event.preventDefault();
    });
    jQuery( "#team_b_dialog" ).dialog({
        autoOpen: false,
        width: 920,
        zIndex: 9999
    });
    jQuery( "#team_b_dialog_button" ).click(function( event ) {
        jQuery( "#team_b_dialog" ).dialog( "open" );
        event.preventDefault();
    });
    jQuery( "#effective_dialog" ).dialog({
        autoOpen: false,
        width: 950,
        zIndex: 9999
    });
    jQuery( "#effective_dialog_button" ).click(function( event ) {
        jQuery( "#effective_dialog" ).dialog( "open" );
        event.preventDefault();
    });
</script>