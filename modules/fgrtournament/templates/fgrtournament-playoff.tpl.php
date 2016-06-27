<!--<div id="playoff_dialog_button" class="playoff_button">Плейофф</div>-->
<!--<div id="playoff_dialog">-->
<h2>Плейофф</h2>
<?php
$buffer = $tournament_data;
$counter = 0;
?>

<?php while(count($buffer) != 0): ?>
<main id="tournament-head">
    <?php foreach ($buffer as $key => $round): ?>
        <ul class="round round-<?php print $key + 1 ?>">
            <h3 class="stage"><?php print $round[0]['RoundName']?></h3>
        </ul>
    <?php endforeach; ?>
</main>
<main id="tournament">
        <?php foreach ($buffer as $key => $round): ?>
            <ul class="round round-<?php print $key + 1 ?>">
                <li class="spacer">&nbsp;</li>
                <?php $counter = 0; ?>
                <?php $broken = false; ?>
                <?php foreach ($round as $key_game => $round_game): ?>
                    <?php if($round_game['PairAdded'] == 1) continue;?>
                    <?php flag_round($buffer[$key][$key_game])?>
                    <li class="game game-top <?php if($round_game['Winner'] == 1){print 'winner';}; ?>">
                        <img src="<?php if($round_game['TeamName1']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $round_game['TeamName1']['ClubLogoId']; else print '../files/fgrmodule/logo.png';?>" class="team_icon">
                    <span class="team_name">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $round_game['TeamName1']['TeamId'] ?>">
<!--                            --><?php //print $round_game['TeamName1']['Name'] . $round_game['Sort']?>
                            <?php print $round_game['TeamName1']['Name']?>
                        </a>
                    </span>
                    <span class="count">
                        <a class="blank_link">
                            <?php print $round_game['Score1']?>
                        </a>
                    </span>
                    </li>
                    <li class="game game-spacer">&nbsp;</li>
                    <li class="game game-bottom <?php if($round_game['Winner'] == 2){print 'winner';}; ?>">
                        <img src="<?php if($round_game['TeamName2']['ClubLogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $round_game['TeamName2']['ClubLogoId']; else print '../files/fgrmodule/logo.png';?>" class="team_icon">
                    <span class="team_name">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $round_game['TeamName2']['TeamId'] ?>">
                            <?php print $round_game['TeamName2']['Name']?>
                        </a>
                    </span>
                    <span class="count">
                        <a class="blank_link">
                            <?php print $round_game['Score2']?>
                        </a>
                    </span>
                    </li>
                <li class="spacer">&nbsp;</li>
                <?php if($round_game['Round'] == $counter + 1) { $broken = true; break; }?>
                <?php $counter++; ?>
                <?php endforeach; ?>
                <?php if($round[0]['Round'] > $counter && $broken == false):?>
                    <?php $max = $round[0]['Round'] - ($counter + 1); ?>
                    <?php for($i = 0; $i < $max; $i++):?>
                        <li class="game game-top">
                            <img src="" class="team_icon">
                            <span class="team_name">
                                <a></a>
                            </span>
                            <span class="count">
                                <a class="blank_link"></a>
                            </span>
                                </li>
                                <li class="game game-spacer">&nbsp;</li>
                                <li class="game game-bottom">
                                    <img src="" class="team_icon">
                            <span class="team_name">
                                <a></a>
                            </span>
                            <span class="count">
                                <a class="blank_link"> </a>
                            </span>
                        </li>
                        <li class="spacer">&nbsp;</li>
                    <?php endfor; ?>
                <?php endif; ?>
        </ul>
    <?php endforeach; ?>
<!--    <ul class="round round---><?php //print count($buffer)?><!--">-->
<!--        <li class="spacer">&nbsp;</li>-->
<!--        <li class="game game-top winner">-->
<!--            <img src="--><?php //if(end($buffer)[0]['Winner'] == 1) { print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . end($buffer)[0]['TeamName1']['ClubLogoId']; }
//                else { print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . end($buffer)[0]['TeamName2']['ClubLogoId']; }; ?><!--" class="team_icon">-->
<!--            <span class="team_name">--><?php //if(end($buffer)[0]['Winner'] == 1) { print end($buffer)[0]['TeamName1']['Name']; }
//                else { print end($buffer)[0]['TeamName2']['Name']; }; ?><!--</span>-->
<!--        </li>-->
<!--    </ul>-->
</main>
<?php $buffer = cut_added_pairs($buffer) ?>
<?php endwhile; ?>
<!--</div>-->
<!---->
<!--<script>-->
<!--    jQuery( "#playoff_dialog" ).dialog({-->
<!--        autoOpen: false,-->
<!--        width: 1000,-->
<!--        zIndex: 99999-->
<!--    });-->
<!--    $("#playoff_dialog_button").click(function( event ) {-->
<!--        $("#playoff_dialog").dialog("open");-->
<!--        event.preventDefault();-->
<!--    });-->
<!--</script>-->

