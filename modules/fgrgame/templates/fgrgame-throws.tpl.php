<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=info'?>">Инфо</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=statistics'?>">Статистика</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=online'?>">Ход матча</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=throws'?>">Карта бросков</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=video'?>">Видео</a></li>
    </ul>
</div>
<div class="tabs">
    <ul class="tab-links">
        <li id="team_a_tab" class="active" onclick="$('#team_b').hide(); $('#team_a').show(); $('#team_b_tab').removeClass('active'); $('#team_a_tab').addClass('active')"><a><?php print $game_throws['teamA']['name']?></a></li>
        <li id="team_b_tab" onclick="$('#team_a').hide(); $('#team_b').show(); $('#team_a_tab').removeClass('active'); $('#team_b_tab').addClass('active')"><a><?php print $game_throws['teamB']['name']?></a></li>
    </ul>
</div>
<?php $commandStat = array(); $commandStat['attackStats'] = array(); $commandStat['blockStats'] = array()?>
<div id="team_a">

    <div class="throws_map"></div>

    <h3 class="no_margin">Игроки</h3>
    <span>Голы/Броски</span>
    <table class="table_container">
        <?php foreach($game_throws['teamA']['playerStats'] as $key => $playerStat): ?>
        <?php if($key == 0) print '<tr>'; if(fmod($key, 4) == 0 && $key != 0) print '</tr><tr>'?>
            <td>
                <table class="gate_table">
                    <thead>
                    <tr>
                        <th colspan="3"><?php print $playerStat['number'] . '. ' . $playerStat['name']?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php if(isset($playerStat['attackStats']['lu']) || isset($playerStat['blockStats']['lu'])) {
                                if(isset($playerStat['attackStats']['lu'])) print $playerStat['attackStats']['lu'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['lu'])) print $playerStat['blockStats']['lu']; else print '0';
                            } ?>
                        </td>
                        <td>
                            <?php if(isset($playerStat['attackStats']['cu']) || isset($playerStat['blockStats']['cu'])) {
                                if(isset($playerStat['attackStats']['cu'])) print $playerStat['attackStats']['cu'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['cu'])) print $playerStat['blockStats']['cu']; else print '0';
                            } ?>
                        </td>
                        <td>
                            <?php if(isset($playerStat['attackStats']['ru']) || isset($playerStat['blockStats']['ru'])) {
                                if(isset($playerStat['attackStats']['ru'])) print $playerStat['attackStats']['ru'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['ru'])) print $playerStat['blockStats']['ru']; else print '0';
                            } ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($playerStat['attackStats']['lc']) || isset($playerStat['blockStats']['lc'])) {
                                if(isset($playerStat['attackStats']['lc'])) print $playerStat['attackStats']['lc'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['lc'])) print $playerStat['blockStats']['lc']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($playerStat['attackStats']['cc']) || isset($playerStat['blockStats']['cc'])) {
                                if(isset($playerStat['attackStats']['cc'])) print $playerStat['attackStats']['cc'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['cc'])) print $playerStat['blockStats']['cc']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($playerStat['attackStats']['rc']) || isset($playerStat['blockStats']['rc'])) {
                                if(isset($playerStat['attackStats']['rc'])) print $playerStat['attackStats']['rc'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['rc'])) print $playerStat['blockStats']['rc']; else print '0';
                            } ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($playerStat['attackStats']['ld']) || isset($playerStat['blockStats']['ld'])) {
                                if(isset($playerStat['attackStats']['ld'])) print $playerStat['attackStats']['ld'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['ld'])) print $playerStat['blockStats']['ld']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($playerStat['attackStats']['cd']) || isset($playerStat['blockStats']['cd'])) {
                                if(isset($playerStat['attackStats']['cd'])) print $playerStat['attackStats']['cd'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['cd'])) print $playerStat['blockStats']['cd']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($playerStat['attackStats']['rd']) || isset($playerStat['blockStats']['rd'])) {
                                if(isset($playerStat['attackStats']['rd'])) print $playerStat['attackStats']['rd'] . '/'; else print '0/';
                                if(isset($playerStat['blockStats']['rd'])) print $playerStat['blockStats']['rd']; else print '0';
                            } ?></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        <?php endforeach; ?>
    </table>
    <h3 class="no_margin">Команда</h3>
    <span>Голы/Броски</span>
    <table class="table_container">
            <td>
                <table class="gate_table">
                    <tbody>
                    <tr>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lu']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['lu'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lu'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['lu'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['lu'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['lu']; else print '0';
                            } ?>
                        </td>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cu']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['cu'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cu'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['cu'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['cu'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['cu']; else print '0';
                            } ?>
                        </td>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['ru']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['ru'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['ru'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['ru'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['ru'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['ru']; else print '0';
                            } ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lc']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['lc'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lc'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['lc'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['lc'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['lc']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cc']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['cc'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cc'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['cc'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['cc'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['cc']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rc']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['rc'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rc'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['rc'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['rc'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['rc']; else print '0';
                            } ?></td>
                    </tr>
                    <tr>
                        <td>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cd']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['cd'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cd'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['cd'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['cd'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['cd']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rd']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['rd'])) {
                                if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rd'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['rd'] . '/'; else print '0/';
                                if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['rd'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['rd']; else print '0';
                            } ?></td>
                    </tr>
                    </tbody>
                </table>
            </td>
    </table>

    <h3 class="no_margin">Вратари</h3>
    <span>Сейвы/Броски</span>

    <table class="table_container">
        <?php foreach($game_throws['teamA']['goalKeeperStats'] as $key => $goalkeeperStat): ?>
            <?php if($key == 0) print '<tr>'; if(fmod($key, 4) == 0 && $key != 0) print '</tr><tr>'?>
            <td>
                <table class="gate_table">
                    <thead>
                    <tr>
                        <th colspan="3"><?php print $goalkeeperStat['number'] . '. ' . $goalkeeperStat['name']?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['lu']) || isset($goalkeeperStat['blockStats']['lu'])) {
                                if(isset($goalkeeperStat['attackStats']['lu'])) print $goalkeeperStat['attackStats']['lu'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['lu'])) print $goalkeeperStat['blockStats']['lu']; else print '0';
                            } ?>
                        </td>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['cu']) || isset($goalkeeperStat['blockStats']['cu'])) {
                                if(isset($goalkeeperStat['attackStats']['cu'])) print $goalkeeperStat['attackStats']['cu'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['cu'])) print $goalkeeperStat['blockStats']['cu']; else print '0';
                            } ?>
                        </td>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['ru']) || isset($goalkeeperStat['blockStats']['ru'])) {
                                if(isset($goalkeeperStat['attackStats']['ru'])) print $goalkeeperStat['attackStats']['ru'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['ru'])) print $goalkeeperStat['blockStats']['ru']; else print '0';
                            } ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['lc']) || isset($goalkeeperStat['blockStats']['lc'])) {
                                if(isset($goalkeeperStat['attackStats']['lc'])) print $goalkeeperStat['attackStats']['lc'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['lc'])) print $goalkeeperStat['blockStats']['lc']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['cc']) || isset($goalkeeperStat['blockStats']['cc'])) {
                                if(isset($goalkeeperStat['attackStats']['cc'])) print $goalkeeperStat['attackStats']['cc'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['cc'])) print $goalkeeperStat['blockStats']['cc']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['rc']) || isset($goalkeeperStat['blockStats']['rc'])) {
                                if(isset($goalkeeperStat['attackStats']['rc'])) print $goalkeeperStat['attackStats']['rc'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['rc'])) print $goalkeeperStat['blockStats']['rc']; else print '0';
                            } ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['ld']) || isset($goalkeeperStat['blockStats']['ld'])) {
                                if(isset($goalkeeperStat['attackStats']['ld'])) print $goalkeeperStat['attackStats']['ld'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['ld'])) print $goalkeeperStat['blockStats']['ld']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['cd']) || isset($goalkeeperStat['blockStats']['cd'])) {
                                if(isset($goalkeeperStat['attackStats']['cd'])) print $goalkeeperStat['attackStats']['cd'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['cd'])) print $goalkeeperStat['blockStats']['cd']; else print '0';
                            } ?></td>
                        <td>
                            <?php if(isset($goalkeeperStat['attackStats']['rd']) || isset($goalkeeperStat['blockStats']['rd'])) {
                                if(isset($goalkeeperStat['attackStats']['rd'])) print $goalkeeperStat['attackStats']['rd'] . '/'; else print '0/';
                                if(isset($goalkeeperStat['blockStats']['rd'])) print $goalkeeperStat['blockStats']['rd']; else print '0';
                            } ?></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        <?php endforeach; ?>
    </table>

    <h3 class="no_margin">Вратари (Сумма)</h3>
    <span>Сейвы/Броски</span>

    <table class="table_container">
        <td>
            <table class="gate_table">
                <tbody>
                <tr>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lu']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['lu'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lu'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['lu'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['lu'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['lu']; else print '0';
                        } ?>
                    </td>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cu']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['cu'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cu'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['cu'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['cu'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['cu']; else print '0';
                        } ?>
                    </td>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['ru']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['ru'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['ru'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['ru'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['ru'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['ru']; else print '0';
                        } ?></td>
                </tr>
                <tr>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lc']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['lc'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['lc'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['lc'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['lc'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['lc']; else print '0';
                        } ?></td>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cc']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['cc'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cc'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['cc'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['cc'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['cc']; else print '0';
                        } ?></td>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rc']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['rc'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rc'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['rc'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['rc'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['rc']; else print '0';
                        } ?></td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cd']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['cd'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['cd'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['cd'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['cd'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['cd']; else print '0';
                        } ?></td>
                    <td>
                        <?php if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rd']) || isset($game_throws['teamA']['playerStats'][0]['blockStats']['rd'])) {
                            if(isset($game_throws['teamA']['playerStats'][0]['attackStats']['rd'])) print $game_throws['teamA']['playerStats'][0]['attackStats']['rd'] . '/'; else print '0/';
                            if(isset($game_throws['teamA']['playerStats'][0]['blockStats']['rd'])) print $game_throws['teamA']['playerStats'][0]['blockStats']['rd']; else print '0';
                        } ?></td>
                </tr>
                </tbody>
            </table>
        </td>
    </table>
</div>

<div id="team_b" style="display: none">

</div>

