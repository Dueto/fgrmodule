<main id="tournament-head">
    <?php foreach ($tournament_data['rounds'] as $key => $round): ?>
        <ul class="round round-<?php print $key + 1 ?>">
            <?php if($key + 1 == count($tournament_data['rounds'])): ?>
                <h3 class="stage">Финал</h3>
            <?php elseif($key + 2 == count($tournament_data['rounds'])): ?>
                <h3 class="stage">Полуфинал</h3>
            <?php elseif($key + 3 == count($tournament_data['rounds'])): ?>
                <h3 class="stage">1/4 финала</h3>
            <?php elseif($key + 4 == count($tournament_data['rounds'])): ?>
                <h3 class="stage">1/8 финала</h3>
            <?php else: ?>
                <h3 class="stage">Раунд <?php print $key + 1?></h3>
            <?php endif; ?>
        </ul>
    <?php endforeach; ?>
    <ul class="round round-<?php print count($tournament_data['rounds']) + 1 ?>">
        <h3 class="stage">Победитель</h3>
    </ul>
</main>

<main id="tournament">
    <?php foreach ($tournament_data['rounds'] as $key => $round): ?>
        <ul class="round round-<?php print $key + 1 ?>">
            <li class="spacer">&nbsp;</li>
            <?php foreach ($round as $key_game => $round_game): ?>
                <li class="game game-top <?php if($round_game['winner'] == $round_game['team_a']['id']){print 'winner';}; ?>">
                    <img src="<?php print $round_game['team_a']['icon_url']?>" class="team_icon">
                    <span class="team_name">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $round_game['team_a']['id'] ?>">
                            <?php print $round_game['team_a']['title']?>
                        </a>
                    </span>
                    <span class="count">
                        <a class="blank_link" href="<?php print './' . $game_node_id . '?game_id=' . $round_game['game_id']?>">
                            <?php print $round_game['score_a']?>
                        </a>
                    </span>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom <?php if($round_game['winner'] == $round_game['team_b']['id']){print 'winner';}; ?>">
                    <img src="<?php print $round_game['team_b']['icon_url']?>" class="team_icon">
                    <span class="team_name">
                        <a href="<?php print './' . $team_node_id . '?team_id=' . $round_game['team_b']['id'] ?>">
                            <?php print $round_game['team_b']['title']?>
                        </a>
                    </span>
                    <span class="count">
                        <a class="blank_link" href="<?php print './' . $game_node_id . '?game_id=' . $round_game['game_id']?>">
                            <?php print $round_game['score_b']?>
                        </a>
                    </span>
                </li>
                <li class="spacer">&nbsp;</li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    <ul class="round round-<?php print count($tournament_data['rounds']) + 1 ?>">
        <li class="spacer">&nbsp;</li>
        <li class="game game-top winner">
            <img src="<?php if(end($tournament_data['rounds'])[0]['winner'] ==
                    end($tournament_data['rounds'])[0]['team_a']['id']) {
                    print end($tournament_data['rounds'])[0]['team_a']['icon_url'];}
                else {
                    print end($tournament_data['rounds'])[0]['team_b']['icon_url'];}; ?>" class="team_icon">
            <span class="team_name"><?php if(end($tournament_data['rounds'])[0]['winner'] ==
                    end($tournament_data['rounds'])[0]['team_a']['id']) {
                    print end($tournament_data['rounds'])[0]['team_a']['title'];}
                else {
                    print end($tournament_data['rounds'])[0]['team_b']['title'];}; ?></span>
        </li>
    </ul>
</main>
