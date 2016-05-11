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
        <li><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['id'] . '&type=competitions' ?>">Сводная по соревнованиям</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['id'] . '&type=games'?>">Сводная по матчам</a></li>
    </ul>
</div>
<table class="referee_inspector_games_stats">
    <thead>
    <th>Дата</th>
    <th>Судьи на площадке</th>
    <th>Команды</th>
    <th>Счет</th>
    <th>Протесты</th>
    </thead>
    <tbody>
    <tr>
        <td colspan="5">Чемпионат РФ 2016/2017, суперлига,  мужчины
            предварительный этап</td>
    </tr>
    <tr>
        <td>20.01.2015</td>
        <td>Крылов-Мухин</td>
        <td>Нева-Полет</td>
        <td>28-34</td>
        <td>нет</td>
    </tr>
    </tbody>
</table>