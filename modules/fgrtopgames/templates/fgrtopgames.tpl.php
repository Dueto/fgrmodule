<div class="wrap">
    <div class="scrollbar">
        <div class="handle">
            <div class="mousearea"></div>
        </div>
    </div>
    <?php $link = $_SERVER['REQUEST_URI'];
    if (strpos($link, 'node') !== false) {
        $link = '';
    } else {
        $link = 'node/';
    }?>
    <?php if(array_key_exists('Data', $games['LastGames']) && count($games['LastGames']['Data']) != 0):?>
    <div class="frame" id="basic1">
        <ul class="clearfix">

            <?php foreach($games['LastGames']['Data'] as $key => $game): ?>
            <li>
                <table class="announce_table" id="game_id_<?php print $game['Game']['GameId'] ?>">
                    <thead>
                    <tr>
                        <th colspan="3" class="
                        <?php if($game['Game']['GameStatusId'] == 0) print 'game_before'?>
                        <?php if($game['Game']['GameStatusId'] == 1) print 'game_ended'?>
                        <?php if($game['Game']['GameStatusId'] == 2) print 'game_current'?>
                        ">
                            <a href="<?php print './' . $link . $games['GameNodeId'] . '?game_id=' . $game['Game']['GameId']?>">
                                <?php $timestamp = date('Y.m.d H:i', strtotime($game['Game']['LocalDateTime']));
                                $time = is_near_game($timestamp);
                                if($time != 0) print $time . ' ' . date('H:i', strtotime($game['Game']['LocalDateTime']));
                                else print $timestamp?>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img class="top_games_icon" src="<?php if($game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>"></td>
                        <td><a class="blank_link" href="<?php print './' . $link . $games['TeamNodeId'] . '?team_id=' . $game['Game']['GameTeam1']['CompTeam']['TeamId'] ?>"><?php print $game['Game']['GameTeam1']['CompTeam']['Name'] ?></a></td>
                        <td><div><?php print $game['Game']['GameTeam1']['Score'] ?></div></td>
                    </tr>
                    <tr>
                        <td><img class="top_games_icon" src="<?php if($game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam2']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>"></td>
                        <td><a class="blank_link" href="<?php print './' . $link . $games['TeamNodeId'] . '?team_id=' . $game['Game']['GameTeam2']['CompTeam']['TeamId'] ?>"><?php print $game['Game']['GameTeam2']['CompTeam']['Name'] ?></a></td>
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
<script>
    function showToolTip(eventName, itemIndex) {
    }

    var $frame = $('#basic1');
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