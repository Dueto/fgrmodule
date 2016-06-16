<div class="tabs">
    <ul class="tab-links">
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_id . '&tab_type=info'?>">Инфо</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_id . '&tab_type=statistics'?>">Статистика</a></li>
        <li class="active"><a href="<?php print './' . $node->nid . '?game_id=' . $game_id . '&tab_type=online'?>">Ход матча</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_id . '&tab_type=throws'?>">Карта бросков</a></li>
        <li><a href="<?php print './' . $node->nid . '?game_id=' . $game_id . '&tab_type=video'?>">Видео</a></li>
    </ul>
</div>

<div id="match_progress_container">

<!--    <table class="progress_table">-->
<!--        <tr>-->
<!--            <td class="team_image"><img src="../files/fgrmodule/blue-tshirt.png"></td>-->
<!--            <td class="minute">23</td>-->
<!--            <td class="event_icon"><img src="../files/fgrmodule/goal.png"></td>-->
<!--            <td class="player_number"><div class="team_a_tshirt">43</div></td>-->
<!--            <td class="details">ГООООООООЛ</td>-->
<!--        </tr>-->
<!--    </table>-->

</div>