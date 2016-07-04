<?php $crumb_string = null;?>
<?php if($crumbs != NULL): ?>
    <span> > </span>
    <?php foreach($crumbs as $key => $crumb) {
        $crumb_string = $crumb_string . ';' . $crumb['title'] . ':' . $crumb['ref'];
        print '<a href="' . $crumb['ref'] . '">' . $crumb['title'] . '</a>';
    }?>
    <span> > <?php print $tournament_data['TournamentMetaData']['TournamentFullName']?></span>
<?php endif ?>
<h2><?php print $tournament_data['TournamentMetaData']['TournamentFullName']?></h2>

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
            <table class="announce_table">
                <thead>
                <tr>
                    <th colspan="3"><?php print date('Y.m.d H:i', strtotime($game['Game']['LocalDateTime'])) ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img class="team_icon" src="<?php if($game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>"></td>
                    <td><?php print $game['Game']['GameTeam1']['CompTeam']['Name'] ?></td>
                    <td><div><?php print $game['Game']['GameTeam1']['Score'] ?></div></td>
                </tr>
                <tr>
                    <td><img class="team_icon" src="<?php if($game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $game['Game']['GameTeam1']['CompTeam']['Team']['ClubLogoId']; else print '../files/fgrmodule/logo.png'; ?>"></td>
                    <td><?php print $game['Game']['GameTeam2']['CompTeam']['Name'] ?></td>
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
            <a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=info&crumbs=' . $crumb_string?>">Инфо</a>
        </li>
        <li <?php if(isset($_GET['type'])) {
            if($_GET['type'] == 'games') {
                print 'class="active"';
            }
        }?>>
            <a href="<?php print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=games&game_type=result&crumbs=' . $crumb_string?>">Матчи</a>
        </li>
<!--        --><?php //if(!is_playoff_type($tournament_data['TournamentMetaData']['TournamentTypeId'])): ?>
<!--            <li><a href="--><?php //print './' . $node->nid . '?tournament_id=' . $tournament_data['TournamentMetaData']['TournamentId'] . '&type=competition&crumbs=' . $crumb_string ?><!--">Статистика команд</a></li>-->
<!--        --><?php //endif; ?>
    </ul>
</div>


<script>
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
        startAt: 3,
        scrollBar: $wrap.find('.scrollbar'),
        scrollBy: 1,
        pagesBar: $wrap.find('.pages'),
        activatePageOn: 'click',
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1
    });
</script>