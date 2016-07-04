<!--<h2>--><?php //print $game['TournamentMetaData']['TournamentFullName']?><!--</h2>-->
<table class="table_game_head">
    <tr>
        <td class="right">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam1']['CompTeam']['TeamId'] ?>">
                <img src="<?php if($game['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png';?>">
            </a>
        </td><td class="right">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam1']['CompTeam']['TeamId'] ?>">
                <span><?php print $game['GameTeam1']['CompTeam']['Name']?></span>
            </a>
        </td>
        <td>:</td>
        <td class="left">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam2']['CompTeam']['TeamId'] ?>">
                <span><?php print $game['GameTeam2']['CompTeam']['Name']?> </span>
            </a>
        </td>
        <td class="left">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam2']['CompTeam']['TeamId'] ?>">
                <img src="<?php if($game['GameTeam2']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['GameTeam2']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png';?>">
            </a>
        </td>
    </tr>
</table>
<table class="table_game">
    <tr>
        <td valign="top">
            <?php print_team_members(1, $game['GameStarts'])?>
        </td>
        <td valign="middle" align="center">
            <div class="text-middle display_inline score_game_ended">
                <span class="<?php if($game['WinnerTeam'] == $game['GameTeam1']['GameTeamId']){print 'bold';}; ?>"><?php print $game['GameTeam1']['Score']?></span>
                :
                <span class="<?php if($game['WinnerTeam'] == $game['GameTeam2']['GameTeamId']){print 'bold';}; ?>"><?php print $game['GameTeam2']['Score']?></span>
            </div>

            <div class="tiny text-middle">7м назначено/голы</div>
            <div class="text-middle display_inline score_game_ended_half">
                <span><?php print get_team_stat($game['GameStarts'], 1, 47) . '/' . get_team_stat($game['GameStarts'], 1, 17)?></span>
                :
                <span><?php print get_team_stat($game['GameStarts'], 2, 47) . '/' . get_team_stat($game['GameStarts'], 2, 17)?></span>
            </div>

            <div class="tiny text-middle">Таймауты</div>
            <div class="text-middle">
                <span>1200</span>
            </div>

            <div class="tiny text-middle">Зрители</div>
            <div class="text-middle">
                <span><?php print $game['Attendance']; ?></span>
            </div>

            <div><?php print date('Y.m.d', strtotime($game['LocalDateTime']))?></div>
            <div><?php print $game['LocalTimeString']?></div><br/>
            <span><?php print $game['City']['Name'] . ': ' . $game['Arena']['Name']; ?></span>
        </td>
        <td valign="top">
<!--            <table class="gamers_table_game right">-->
<!--                <tbody>-->
<!--                --><?php //foreach ($game['team_b']['gamers'] as $key => $gamer): ?>
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <span class="bold gamer_score">--><?php //print $gamer['score_in_current_match']?><!--</span>-->
<!--                        </td>-->
<!--                        <td id="dialogb--><?php //print $key + 1?><!--">-->
<!--                            --><?php //if($gamer['penalties']['yellow']): ?>
<!--                                <img class="penalty" src="../files/yellow.png">-->
<!--                            --><?php //endif;?>
<!--                            --><?php //if($gamer['penalties']['red']): ?>
<!--                                <img class="penalty" src="../files/red.png">-->
<!--                            --><?php //endif;?>
<!--                            <span>--><?php //print $gamer['second_name']?><!--</span>-->
<!--                            <span class="tiny">--><?php //print $gamer['member_number']?><!--&nbsp;</span>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <img src="--><?php //print $gamer['member_photo_url'] ?><!--">-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                --><?php //endforeach;?>
<!--                </tbody>-->
<!--            </table>-->
            <?php print_team_members(2, $game['GameStarts'])?>
        </td>
    </tr>
</table>
<div class="tiny text-middle">Судьи на поле</div>
<div class="text-middle bold">&nbsp;&nbsp;&nbsp;&nbsp;
    <?php print_referees_on_game($game['GameStarts']); ?>
</div>
<table>
    <tr>
        <td class="tiny text-middle">Технический делегат</td>
        <td class="tiny text-middle">Судья инспектор</td>
    </tr>
    <tr>
        <td class="text-middle bold">
            <?php print_technical_delegate($game['GameStarts'])?>
        </td>
        <td class="text-middle bold">
            <?php print_referee_inspector($game['GameStarts'])?>
        </td>
    </tr>
</table>
<div class="text-middle bold display_inline">
    <img style="width: 25px !important; vertical-align: middle;" src="../files/adobe_icon.png">
    <a class="blank_link" href="">&nbsp;Итоговый судейский протокол</a>
</div>

<?php foreach ($game['GameStarts'] as $key => $person): ?>
    <?php if($person['StartTypeId'] == 1): ?>
    <div id="dialog1<?php print $person['PersonId']?>" title="<?php print $person['LastName'] . ' ' . $person['FirstName']?>">
        <table>
            <tbody>
            <tr>
                <td>
                    <img class="member_icon_info" src="<?php if(isset($person['PhotoId']) && $person['PhotoId'] != null) { print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/PersonImage/' . $person['PersonId']; } else { print '../files/fgrmodule/avatar.png'; } ?>">
                </td>
                <td>
                    <b><?php print $person['LastName'] ?> <?php print $person['FirstName'] ?></b><br/><br/>
                    <b>Позиция: </b><?php print $person['PositionName'] ?><br/><br/>
                    <b>Разряд: </b><?php print $person['Rank'] ?><br/><br/>
                    <b>Рост: </b><?php print $person['Height'] ?><br/><br/>
                    <b>Вес: </b><?php print $person['Weight'] ?><br/><br/>
                    <b>Дата рождения: </b><?php print date('Y.m.d', strtotime($person['Birthday'])) ?><br/><br/>
                    <b>Номер: </b><?php print $person['PersonNum'] ?><br/><br/>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        jQuery( "#dialog1<?php print $person['PersonId']?>" ).dialog({
            autoOpen: false,
            width: 500,
            zIndex: 9999
        });
        jQuery( "#dialoga<?php print $person['PersonId']?>" ).click(function( event ) {
            jQuery( "#dialog1<?php print $person['PersonId']?>" ).dialog( "open" );
            event.preventDefault();
        });
    </script>
    <?php endif; ?>
<?php endforeach; ?>