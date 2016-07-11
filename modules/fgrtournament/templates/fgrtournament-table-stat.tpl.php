<h3><?php print $tournament_data['TournamentMetaData']['TournamentName']?></h3>
<div class="tabs">
    <ul class="tab-links">
        <li id="stat_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>" class="active" onclick="
            $('#stat_mini<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').hide();
            $('#chessmates<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').hide();
            $('#stat<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').show();
            $('#chessmates_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').removeClass('active');
            $('#stat_mini_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').removeClass('active');
            $('#stat_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').addClass('active')">
            <a>Положение команд</a></li>
        <li id="stat_mini_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>" onclick="
            $('#chessmates<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').hide();
            $('#stat<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').hide();
            $('#stat_mini<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').show();
            $('#chessmates_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').removeClass('active');
            $('#stat_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').removeClass('active');
            $('#stat_mini_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').addClass('active')">
            <a>Минимальный вид</a></li>
        <li id="chessmates_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>" onclick="
            $('#stat_mini<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').hide();
            $('#stat<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').hide();
            $('#chessmates<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').show();
            $('#stat_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').removeClass('active');
            $('#stat_mini_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').removeClass('active');
            $('#chessmates_tab<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>').addClass('active')">
            <a>Шахматка</a></li>
    </ul>
</div>
<div id="stat<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>">
<?php if(array_key_exists('Data', $tournament_data) && count($tournament_data['Data']) != 0):?>
<table class="table-tournament sortable">
    <thead>
    <tr>
        <th>№</th>
        <th>Название команд</th>
        <th>И</th>
        <th>В</th>
        <th>Н</th>
        <th>П</th>
        <th>Разн</th>
        <th>"+"</th>
        <th>"-"</th>
        <th>Очки</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tournament_data['Data'] as $key => $team_stat): ?>
        <tr>
            <td><?php print $team_stat['Place'] ?></td>
            <td><img class="team_icon" src="<?php if($team_stat['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $team_stat['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>">
                <span class="team_name_table">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $team_stat['Team']['LegalEntityId'] ?>"><?php print $team_stat['Team']['Name'] ?></a>
                </span>
            </td>
            <td><?php print $team_stat['Games'] ?></td>
            <td><?php print $team_stat['Winnings'] ?></td>
            <td><?php print $team_stat['Draws'] ?></td>
            <td><?php print $team_stat['Defeats'] ?></td>
            <td><?php print $team_stat['GoalsPlus'] - $team_stat['GoalsMinus']?></td>
            <td><?php print $team_stat['GoalsPlus'] ?></td>
            <td><?php print $team_stat['GoalsMinus'] ?></td>
            <td><?php print $team_stat['Points'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else:?>
    <h2>Нет статистики</h2>
<?php endif?>
</div>

<div id="stat_mini<?php print $tournament_data['TournamentMetaData']['TournamentId'] ?>" style="display: none;">
<?php if(array_key_exists('Data', $tournament_data) && count($tournament_data['Data']) != 0):?>
    <table class="table-tournament sortable">
        <thead>
        <tr>
            <th>№</th>
            <th>Название команд</th>
            <th>И</th>
            <th>В</th>
            <th>Н</th>
            <th>П</th>
            <th>Очки</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tournament_data['Data'] as $key => $team_stat): ?>
            <tr>
                <td><?php print $team_stat['Place'] ?></td>
                <td><img class="team_icon" src="<?php if($team_stat['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $team_stat['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>">
                <span class="team_name_table">
                    <a href="<?php print './' . $team_node_id . '?team_id=' . $team_stat['Team']['LegalEntityId'] ?>"><?php print $team_stat['Team']['Name'] ?></a>
                </span>
                </td>
                <td><?php print $team_stat['Games'] ?></td>
                <td><?php print $team_stat['Winnings'] ?></td>
                <td><?php print $team_stat['Draws'] ?></td>
                <td><?php print $team_stat['Defeats'] ?></td>
                <td><?php print $team_stat['Points'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else:?>
    <h2>Нет статистики</h2>
<?php endif?>
</div>