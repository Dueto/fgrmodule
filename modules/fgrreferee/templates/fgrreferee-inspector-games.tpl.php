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
            <b>Звание: </b><?php if(count($fgrreferee['RefereeStatuses']) != 0) { print $fgrreferee['RefereeStatuses'][0]['RefereeStatusType']['Name']; } else { print 'Нет звания'; } ?><br/><br/>
            <b>Страна: </b><?php print $fgrreferee['Citizenship']['Name'] ?><br/><br/>
        </td>
    </tr>
    </tbody>
</table>
<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['PersonId'] . '&type=competitions' ?>">Сводная по соревнованиям</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?referee_id=' . $fgrreferee['PersonId'] . '&type=games'?>">Сводная по матчам</a></li>
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