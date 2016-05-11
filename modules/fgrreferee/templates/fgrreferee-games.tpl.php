<table class="referee_info_table">
    <tbody>
    <tr>
        <td class="referee_photo"><img src="<?php print $fgrreferee['photo_url'] ?>"></td>
        <td class="referee_info">
            <b><?php print $fgrreferee['sername'] ?> <?php print $fgrreferee['name'] ?></b><br/><br/>
            <b>Дата рождения: </b><?php print $fgrreferee['birthday'] ?><br/><br/>
            <b>Штатный напарник: </b><a class="blank_link" href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['partner']['id'] ?>"><?php print $fgrreferee['partner']['sername'] . ' ' . $fgrreferee['partner']['name']?></a><br/><br/>
            <b>Судейская категория: </b><?php print $fgrreferee['referee_category'] ?><br/><br/>
            <b>Город: </b><?php print $fgrreferee['city'] ?><br/><br/>
        </td>
    </tr>
    </tbody>
</table>
<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['id'] . '&type=competitions' ?>">Сводная по соревнованиям</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['id'] . '&type=games'?>">Сводная по матчам</a></li>
    </ul>
</div>
<table class="referee_competitions_stats">
    <thead>
    <th>Дата</th>
    <th>В паре</th>
    <th>Судья-инспектор</th>
    <th>Команды</th>
    <th>Счет</th>
    <th>"на игрока" Х-Г</th>
    <th>"пробежка" Х-Г</th>
    <th>Пр всего</th>
    <th>Пр Х-Г</th>
    <th>ШтрВремя</th>
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
    <tbody>
    <tr>
        <td>Соревнования</td>
        <td>В паре</td>
        <td>32</td>
        <td>22-31</td>
        <td>22-31/21</td>
        <td>55</td>
        <td>22-31</td>
        <td>21</td>
        <td>23/54</td>
        <td>21</td>
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