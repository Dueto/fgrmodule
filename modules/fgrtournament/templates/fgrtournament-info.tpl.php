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
