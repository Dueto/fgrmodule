<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=info'?>">Инфо</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=statistics'?>">Статистика</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=online'?>">Ход матча</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=throws'?>">Карта бросков</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_throws['game_id'] . '&tab_type=video'?>">Видео</a></li>
    </ul>
</div>