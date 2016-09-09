<!--<h2>--><?php //print $tournament_data['TournamentMetaData']['TournamentFullName']?><!--</h2>-->
<?php print get_tournament_crumbs($tournament_data['TournamentMetaData']['TournamentId']) . '</ul>'; ?>
<div class="wrap">
    <div class="scrollbar">
        <div class="handle">
            <div class="mousearea"></div>
        </div>
    </div>
    <?php if(array_key_exists('Data', $tournament_data['LastGames']) && count($tournament_data['LastGames']['Data']) != 0):?>
    <div class="frame" id="basic">
        <ul class="clearfix">

            <?php foreach($tournament_data['LastGames']['Data'] as $key => $game): ?>
            <li>
                <table class="announce_table" id="game_id_<?php print $game['Game']['GameId'] ?>">
                    <thead>
                    <tr>
                        <th colspan="3" class="
                        <?php if($game['Game']['GameStatusId'] == 0) print 'game_before'?>
                        <?php if($game['Game']['GameStatusId'] == 1) print 'game_ended'?>
                        <?php if($game['Game']['GameStatusId'] == 2) print 'game_current'?>
                        ">
                            <a class="blank_link" href="<?php print './' . $tournament_data['GameNodeId'] . '?game_id=' . $game['Game']['GameId']?>">
                                <?php $timestamp = date('Y.m.d H:i', strtotime($game['Game']['LocalDateTime']));
                                $time = is_near_date($timestamp);
                                if($time != 0) print $time . ' ' . date('H:i', strtotime($game['Game']['LocalDateTime']));
                                else print $timestamp?>
                            </a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img class="team_icon" src="<?php if($game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>"></td>
                        <td><a class="blank_link" href="<?php print './' . $tournament_data['TeamNodeId'] . '?team_id=' . $game['Game']['GameTeam1']['CompTeam']['TeamId'] ?>"><?php print $game['Game']['GameTeam1']['CompTeam']['Name'] ?></a></td>
                        <td><div><?php print $game['Game']['GameTeam1']['Score'] ?></div></td>
                    </tr>
                    <tr>
                        <td><img class="team_icon" src="<?php if($game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>"></td>
                        <td><a class="blank_link" href="<?php print './' . $tournament_data['TeamNodeId'] . '?team_id=' . $game['Game']['GameTeam2']['CompTeam']['TeamId'] ?>"><?php print $game['Game']['GameTeam2']['CompTeam']['Name'] ?></a></td>
                        <td><div><?php print $game['Game']['GameTeam2']['Score'] ?></div></td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
    <ul class="pages"></ul>
</div>
<div class="tabs">
    <ul class="tab-links">
        <li <?php if(isset($_GET['type'])) {
            if($_GET['type'] == 'info') {
                print 'class="active"';
            }
        }?>>
            <a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=info'?>">Инфо</a>
        </li>
        <li <?php if(isset($_GET['type'])) {
            if($_GET['type'] == 'games') {
                print 'class="active"';
            }
        }?>>
            <a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result'?>">Матчи</a>
        </li>
    </ul>
</div>
<script>
    $('#page-title').remove();
    var $frame = $('#basic');
    var $slidee = $frame.children('ul').eq(0);
    var $wrap = $frame.parent();
    $frame.sly({
        horizontal: 1,
        itemNav: 'basic',
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        startAt: 0,
        scrollBar: $wrap.find('.scrollbar'),
        pagesBar: $wrap.find('.pages'),
        activatePageOn: 'click',
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1
    },
    {
        active: showToolTip
    });
</script>