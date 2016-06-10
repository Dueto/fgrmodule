<h2><?php print $game['TournamentMetaData']['TournamentFullName']?></h2>
<table class="table_game_head">
    <tr>
        <td class="right">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_a']['id'] ?>">
                <img src="<?php print $game['team_a']['icon_url'] ?>">
            </a>
        </td><td class="right">
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
        <td class="left">
            <a href="<?php print './' . $team_node_id . '?team_id=' . $game['team_b']['id'] ?>">
                <img src="<?php print $game['team_b']['icon_url'] ?>">
            </a>
        </td>
    </tr>
</table>
<h4 class="game_stage"><?php print $game['stage']?></h4>
<table class="table_game">
    <tr>
        <td valign="top">
            <table class="gamers_table_game">
                <tbody>
                <?php foreach ($game['team_a']['gamers'] as $key => $gamer): ?>
                    <tr>
                        <td>
                            <img src="<?php print $gamer['member_photo_url'] ?>">
                        </td>
                        <td id="dialoga<?php print $key + 1?>">
                            <span class="tiny"><?php print $gamer['member_number']?>&nbsp;</span>
                            <span><?php print $gamer['second_name']?></span>
                            <?php if($gamer['penalties']['red']): ?>
                                <img class="penalty" src="../files/red.png">
                            <?php endif;?>
                            <?php if($gamer['penalties']['yellow']): ?>
                                <img class="penalty" src="../files/yellow.png">
                            <?php endif;?>
                        </td>
                        <td>
                            <span class="bold gamer_score"><?php print $gamer['score_in_current_match']?></span>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </td>
        <td valign="middle" align="center">
            <div class="text-middle display_inline score_game_ended">
                <span class="<?php if($game['winner'] == $game['team_a']['id']){print 'bold';}; ?>"><?php print $game['score_a']?></span>
                :
                <span class="<?php if($game['winner'] == $game['team_b']['id']){print 'bold';}; ?>"><?php print $game['score_b']?></span>
            </div>

            <div class="tiny text-middle">Первая половина</div>
            <div class="text-middle display_inline score_game_ended_half">
                <span><?php print $game['score_a_half']?></span>
                :
                <span><?php print $game['score_b_half']?></span>
            </div>

            <div class="tiny text-middle">Таймауты</div>
            <div class="text-middle">
                <span><?php print $game['spectators']?></span>
            </div>

            <div class="tiny text-middle">Зрители</div>
            <div class="text-middle">
                <span><?php print $game['spectators']?></span>
            </div>

            <div><?php print $game['date']?></div>
            <div><?php print $game['time']?></div><br/>
            <span><?php print $game['place']?></span>
        </td>
        <td valign="top">
            <table class="gamers_table_game right">
                <tbody>
                <?php foreach ($game['team_b']['gamers'] as $key => $gamer): ?>
                    <tr>
                        <td>
                            <span class="bold gamer_score"><?php print $gamer['score_in_current_match']?></span>
                        </td>
                        <td id="dialogb<?php print $key + 1?>">
                            <?php if($gamer['penalties']['yellow']): ?>
                                <img class="penalty" src="../files/yellow.png">
                            <?php endif;?>
                            <?php if($gamer['penalties']['red']): ?>
                                <img class="penalty" src="../files/red.png">
                            <?php endif;?>
                            <span><?php print $gamer['second_name']?></span>
                            <span class="tiny"><?php print $gamer['member_number']?>&nbsp;</span>
                        </td>
                        <td>
                            <img src="<?php print $gamer['member_photo_url'] ?>">
                        </td>
                    </tr>
                <?php endforeach;?>
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
    <a class="blank_link" href="<?php print $game['start_referee_protocol'];?>">&nbsp;Итоговый судейский протокол</a>
</div>

<?php foreach ($game['team_a']['gamers'] as $key => $member): ?>
    <div id="dialog1<?php print $key + 1?>" title="<?php print $member['second_name'] ?> <?php print ' ' . $member['first_name'] ?>">
        <table>
            <tbody>
            <tr>
                <td><img class="member_icon_info" src="<?php print $member['member_photo_url'] ?>"></td>
                <td>
                    <b><?php print $member['second_name'] ?> <?php print $member['first_name'] ?></b><br/><br/>
                    <b>Гражданство: </b><?php print $member['citizenship'] ?><br/><br/>
                    <b>Голов в сезоне: </b><?php print $member['score_in_current_season'] ?><br/><br/>
                    <b>Дата рождения: </b><?php print $member['birthday'] ?><br/><br/>
                    <b>Клуб в этом сезоне: </b><?php print $member['season_club'] ?><br/><br/>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        jQuery( "#dialog1<?php print $key + 1?>" ).dialog({
            autoOpen: false,
            width: 500,
            zIndex: 9999
        });
        jQuery( "#dialoga<?php print $key + 1?>" ).click(function( event ) {
            jQuery( "#dialog1<?php print $key + 1?>" ).dialog( "open" );
            event.preventDefault();
        });
    </script>
<?php endforeach; ?>

<?php foreach ($game['team_b']['gamers'] as $key => $member): ?>
    <div id="dialog2<?php print $key + 1?>" title="<?php print $member['second_name'] ?> <?php print ' ' . $member['first_name'] ?>">
        <table>
            <tbody>
            <tr>
                <td><img class="member_icon_info" src="<?php print $member['member_photo_url'] ?>"></td>
                <td>
                    <b><?php print $member['second_name'] ?> <?php print $member['first_name'] ?></b><br/><br/>
                    <b>Гражданство: </b><?php print $member['citizenship'] ?><br/><br/>
                    <b>Голов в сезоне: </b><?php print $member['score_in_current_season'] ?><br/><br/>
                    <b>Дата рождения: </b><?php print $member['birthday'] ?><br/><br/>
                    <b>Клуб в этом сезоне: </b><?php print $member['season_club'] ?><br/><br/>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        jQuery( "#dialog2<?php print $key + 1?>" ).dialog({
            autoOpen: false,
            width: 500,
            zIndex: 9999
        });
        jQuery( "#dialogb<?php print $key + 1?>" ).click(function( event ) {
            jQuery( "#dialog2<?php print $key + 1?>" ).dialog( "open" );
            event.preventDefault();
        });
    </script>
<?php endforeach; ?>