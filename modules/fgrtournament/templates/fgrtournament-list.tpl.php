<ul>
    <?php foreach ($fgrtournaments as $fgrtournament): ?>
        <li><a href="<?php print './' . $node->nid . '?tournament_id=' . $fgrtournament['id'] . '&type=competition'?>"><?php print $fgrtournament['title'] ?></a></li>
    <?php endforeach; ?>
</ul>