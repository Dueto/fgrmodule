<h2><?php print $game['TournamentMetaData']['TournamentFullName']?></h2>
<div class="text-middle bold display_inline game_icons">
    <a class="blank_link" href="<?php print './' . $team_node_id . '?team_id=' . $game['team_a']['id'] ?>">
        <img alt="Онлайн ход матча" style="width: 25px !important; vertical-align: middle;" src="../files/online_icon.png">
    </a>
<!--    <a class="blank_link" href="">Трансляция</a>-->
    <a class="blank_link" href="<?php print './' . $team_node_id . '?team_id=' . $game['team_a']['id'] ?>">
        <img alt="Статистика матча" style="width: 25px !important; vertical-align: middle;" src="../files/statistic_icon.png">
    </a>
<!--    <a class="blank_link" href="">Статистика матча</a>-->
</div>
<table class="table_game_head">
    <tr>
        <td class="right">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_a']['id'] ?>">
                <span><?php print $game['team_a']['title']?></span>
            </a>
        </td>
        <td>:</td>
        <td class="left">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_b']['id'] ?>">
                <span><?php print $game['team_b']['title']?> </span>
            </a>
        </td>
    </tr>
</table>
<h4 class="game_stage"><?php print $game['stage']?></h4>
<table class="table_game">
    <tr>
        <td>
            <table class="logo_table_game">
                <tbody>
                <tr>
                    <td class="border_right" valign="middle" align="center">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_a']['id'] ?>">
                            <img alt="" src="<?php print $game['team_a']['icon_url'] ?>">
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
        <td valign="middle" align="center">
            <div class="text-middle bold display_inline score">
                <?php print $game['score_a'] . ' : ' . $game['score_b']?>
            </div>
            <div><?php print $game['date']?></div>
            <div><?php print $game['time']?></div><br/>
            <span><?php print $game['place']?></span>
        </td>
        <td>
            <table class="logo_table_game">
                <tbody>
                <tr>
                    <td class="border_left" valign="middle" align="center">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_b']['id'] ?>">
                            <img src="<?php print $game['team_b']['icon_url'] ?>">
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
    <?php foreach ($game['referees_on_game'] as $key => $referee): ?>
        <a class="blank_link" href=""><?php print $referee['name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <?php endforeach; ?>
</div>
<table>
    <tr>
        <td class="tiny text-middle">Технический делегат</td>
        <td class="tiny text-middle">Судья инспектор</td>
        <?php if($game['fgr_member'] != null): ?>
            <td class="tiny text-middle">Представитель ФГР</td>
        <?php endif; ?>
    </tr>
    <tr>
        <td class="text-middle bold">
            <a class="blank_link" href="">
                <?php print $game['technical_delegate']['name']?>
            </a>
        </td>
        <td class="text-middle bold">
            <a class="blank_link" href="">
                <?php print $game['referee_inspector']['name']?>
            </a>
        </td>
        <?php if($game['fgr_member'] != null): ?>
            <td class="text-middle bold">
                <a class="blank_link" href="">
                    <?php print $game['fgr_member']['name']?>
                </a>
            </td>
        <?php endif; ?>
    </tr>
</table>
<div class="text-middle bold display_inline">
    <img style="width: 25px !important; vertical-align: middle;" src="../files/adobe_icon.png">
    <a class="blank_link" href="<?php print $game['start_referee_protocol'];?>">&nbsp;Стартовый судейский протокол</a>
</div>
<div class="text-middle bold display_inline">
    <a class="blank_link" href="">Расписание ТВ трансляций</a>
</div>
<div class="text-middle bold display_inline">
    <a class="blank_link" href="">Новостная лента</a>
</div>