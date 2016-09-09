<?php print get_tournament_crumbs($game['GameTeam1']['CompTeam']['CompId']) . '</ul>'?>
<table class="table_game_head">
    <tr>
        <td class="right">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam1']['CompTeam']['TeamId'] ?>">
                <span><?php print $game['GameTeam1']['CompTeam']['Name']?></span>
            </a>
        </td>
        <td>:</td>
        <td class="left">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam2']['CompTeam']['TeamId'] ?>">
                <span><?php print $game['GameTeam2']['CompTeam']['Name']?></span>
            </a>
        </td>
    </tr>
</table>
<table class="table_game">
    <tr>
        <td>
            <table class="logo_table_game">
                <tbody>
                <tr>
                    <td class="border_right" valign="middle" align="center">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam1']['CompTeam']['TeamId'] ?>">
                            <img alt="<?php print $game['GameTeam1']['CompTeam']['Name']?>" src="<?php if($game['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png';?>">
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
        <td valign="middle" align="center">
            <span class="date"><?php print date('Y.m.d', strtotime($game['LocalDateTime']))?></span><br/>
            <span class="time"><?php print $game['LocalTimeString']?></span><br/><br/>
            <span><?php print $game['City']['Name'] . ': ' . $game['Arena']['Name']; ?></span>
        </td>
        <td>
            <table class="logo_table_game">
                <tbody>
                <tr>
                    <td class="border_left" valign="middle" align="center">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $game['GameTeam2']['CompTeam']['TeamId'] ?>">
                            <img alt="<?php print $game['GameTeam2']['CompTeam']['Name']?>" src="<?php if($game['GameTeam2']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['GameTeam2']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png';?>">
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>

<div class="tiny text-middle">Судьи на поле</div>
<div class="text-middle bold">&nbsp;&nbsp;&nbsp;&nbsp;
    <?php if(get_referees_on_game($game['GameStarts']) != null) print get_referees_on_game($game['GameStarts']); else print 'Не определны'?>
</div>
<table>
    <tr>
        <td class="tiny text-middle">Технический делегат</td>
        <td class="tiny text-middle">Судья инспектор</td>
    </tr>
    <tr>
        <td class="text-middle bold">
            <?php if(get_technical_delegate($game['GameStarts']) != null) print get_technical_delegate($game['GameStarts']); else print 'Не определен'?>
        </td>
        <td class="text-middle bold">
            <?php if(get_referee_inspector($game['GameStarts']) != null) print get_referee_inspector($game['GameStarts']); else print 'Не определен'?>
        </td>
    </tr>
</table>

<!--<div class="text-middle bold display_inline">-->
<!--    <img style="width: 25px !important; vertical-align: middle;" src="../files/adobe_icon.png">-->
<!--    <a class="blank_link" href="--><?php //print $game['start_referee_protocol'];?><!--">&nbsp;Стартовый судейский протокол</a>-->
<!--</div>-->
<!--<div class="text-middle bold display_inline">-->
<!--    <a class="blank_link" href="">&nbsp;Расписание ТВ трансляций</a>-->
<!--</div>-->
<!--<div class="text-middle bold display_inline">-->
<!--    <a class="blank_link" href="">&nbsp;Новостная лента</a>-->
<!--</div>-->

<script>
    $('#page-title').remove();
</script>
