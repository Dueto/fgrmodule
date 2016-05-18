<table class="referee_info_table">
<tbody>
    <tr>
        <td class="referee_photo"><img src="<?php if(count($fgrreferee['Photos']) != 0) {
                                                        print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/PersonImage/' . $fgrreferee['PersonId'];
                                                    } else {
                                                        print '../files/manual/avatar.png';
                                                    }?>"></td>
        <td class="referee_info">
            <b><?php print $fgrreferee['LastName'] ?> <?php print $fgrreferee['FirstName'] ?></b><br/><br/>
            <b>Дата рождения: </b><?php $birthday = new DateTime($fgrreferee['Birthday']); print $birthday->format('Y.m.d') ?><br/><br/>
            <b>Штатный напарник: </b>
<!--            <a class="blank_link" href="--><?php //print './' . $node->nid . '?referee_id=' . $fgrreferee['partner']['id'] ?><!--">-->
<!--                --><?php //print $fgrreferee['partner']['sername'] . ' ' . $fgrreferee['partner']['name']?>
            Заглушка
<!--            </a>-->
            <br/><br/>
            <b>Судейская категория: </b><?php if(count($fgrreferee['RefereeRanks']) != 0) { print $fgrreferee['RefereeRanks']['RefereeRank']; } else { print 'Нет категории'; } ?><br/><br/>
            <b>Страна: </b><?php print $fgrreferee['Citizenship']['Name'] ?><br/><br/>
        </td>
    </tr>
</tbody>
</table>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['PersonId'] . '&type=competitions' ?>">Сводная по соревнованиям</a></li>
        <li><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['PersonId'] . '&type=games'?>">Сводная по матчам</a></li>
    </ul>
</div>
<table class="referee_competitions_stats">
    <thead>
        <th>Соревнования</th>
        <th>В паре</th>
        <th>И</th>
        <th>"на игрока" Х-Г</th>
        <th>"на игрока"/И</th>
        <th>"пробежка" Х-Г</th>
        <th>"пробежка" Х-Г/И</th>
        <th>Пр всего</th>
        <th>Пр Х-Г</th>
        <th>ШтрВремя</th>
        <th>ШтрВремя/И</th>
        <th>2 всего</th>
        <th>2 Х-Г</th>
        <th>Д всего</th>
        <th>Д Х-Г</th>
        <th>Др всего</th>
        <th>Др Х-Г</th>
        <th>7м всего</th>
        <th>7м Х-Г</th>
        <th>Пр ОфЛица</th>
        <th>2 ОфЛица</th>
        <th>Д ОфЛица</th>
        <th>Др ОфЛица</th>
    </thead>
    <tfoot>
    <tr><td colspan="2">Суммарная статистика за сезон по каждому соревнованию</td></tr>
    <tr><td colspan="2">Суммарная статистика за сезон</td></tr>
    <tr><td colspan="2">Всего</td></tr>
    </tfoot>
    <tbody>
    <tr>
        <td>Соревнования</td>
        <td>В паре</td>
        <td>32</td>
        <td>22-31</td>
        <td>44/22</td>
        <td>22-31</td>
        <td>22-31/21</td>
        <td>55</td>
        <td>22-31</td>
        <td>21</td>
        <td>23/54</td>
        <td>21</td>
        <td>22-31</td>
        <td>65</td>
        <td>22-31</td>
        <td>32</td>
        <td>21</td>
        <td>43</td>
        <td>22-31</td>
        <td>21</td>
        <td>55</td>
        <td>22</td>
        <td>77</td>
    </tr>
    </tbody>
</table>