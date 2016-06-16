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
<div id="team_a_dialog_button" class="statistic_button">Команда А</div>
<div id="team_b_dialog_button" class="statistic_button">Команда B</div>
<div id="effective_dialog_button" class="statistic_button">Эффективность атак команд</div>

<div id="team_a_dialog">

    //Command table
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

    //GoalKeeper statistics
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

    //Throws statistics
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

    //Command attacks
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

<div id="team_b_dialog">
    <table class="statistic_table">
        <thead>
            <tr>
                <th colspan="32">Команда В город</th>
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
</div>

<div id="effective_dialog">
    <table>
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
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:130.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:180.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Эффективность бросков</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:110.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:190.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_fast_move" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Эффективность быстрых переходов</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:140.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:160.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_not_in_goal" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Количество бросков не в створ ворот</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:170.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:110.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_goalkeepers" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Эффективность вратарей</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:190.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:100.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_7m_fine_count" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Количество 7м штрафных бросков</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:140.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:130.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_efficiency_7m_count" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Эффективность пробития 7м штрафных бросков</div>
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
    <div id="stat_lost_ball" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Потери всего</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:120.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:130.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_ball_catches" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Перехваты</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:110.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:170.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_2m_fine_count" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Количество двухминутных удалений</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:130.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:170.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_fines" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Наказания = (Др) x 10 + (Д) x 5 + (2мин.) x 2 + (Пр.) x 1</div>
        <div class="fl stat-home">26</div>
        <div class="fl main-stat-bar">
            <div class="fl bar-holder">
                <div class="bar-home home" style="width:190.72727272727px;"></div>
            </div>
            <div class="fr bar-holder">
                <div class="bar-away away" style="width:130.27272727273px;"></div>
            </div>
            <div class="cl"></div>
        </div>
        <div class="fl stat-away">29</div>
        <div class="cl"></div>
    </div>
    <div id="stat_timeouts" class="stat-element-holder">
        <div class="action-name" style="text-align:center; ">Командные тайм-ауты</div>
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
        <div class="action-name" style="text-align:center; ">Максимально голов подряд</div>
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
        <div class="action-name" style="text-align:center; ">Время владения мячом</div>
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
        width: 1280,
        zIndex: 9999
    });
    jQuery( "#team_a_dialog_button" ).click(function( event ) {
        jQuery( "#team_a_dialog" ).dialog( "open" );
        event.preventDefault();
    });
    jQuery( "#team_b_dialog" ).dialog({
        autoOpen: false,
        width: 1280,
        zIndex: 9999
    });
    jQuery( "#team_b_dialog_button" ).click(function( event ) {
        jQuery( "#team_b_dialog" ).dialog( "open" );
        event.preventDefault();
    });
    jQuery( "#effective_dialog" ).dialog({
        autoOpen: false,
        width: 1118,
        zIndex: 9999
    });
    jQuery( "#effective_dialog_button" ).click(function( event ) {
        jQuery( "#effective_dialog" ).dialog( "open" );
        event.preventDefault();
    });
</script>