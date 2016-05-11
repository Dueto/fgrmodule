<table class="referee_info_table">
    <tbody>
    <tr>
        <td class="referee_photo"><img src="<?php print $fgrreferee['photo_url'] ?>"></td>
        <td class="referee_info">
            <b><?php print $fgrreferee['sername'] ?> <?php print $fgrreferee['name'] ?></b><br/><br/>
            <b>Дата рождения: </b><?php print $fgrreferee['birthday'] ?><br/><br/>
            <b>Звание: </b><br/><br/>
            <b>Судейская категория: </b><?php print $fgrreferee['referee_category'] ?><br/><br/>
            <b>Город: </b><?php print $fgrreferee['city'] ?><br/><br/>
        </td>
    </tr>
    </tbody>
</table>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['id'] . '&type=competitions' ?>">Сводная по соревнованиям</a></li>
        <li><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['id'] . '&type=games'?>">Сводная по матчам</a></li>
    </ul>
</div>
<table class="referee_inspector_competitions_stats">
    <thead>
    <th>Соревнования</th>
    <th>Судьи на площадке</th>
    <th>И</th>
    </thead>
    <tfoot>
    <tr><td colspan="2">Суммарная статистика за сезон по каждому соревнованию</td></tr>
    <tr><td colspan="2">Суммарная статистика за сезон</td></tr>
    <tr><td colspan="2">Всего</td></tr>
    </tfoot>
    <tbody>
    <tr>
        <td>Чемпионат РФ 2016/2017, суперлига,  мужчины
            предварительный этап</td>
        <td>Крылов-Мухин</td>
        <td>11</td>
    </tr>
    </tbody>
</table>