<ul>
    <?php foreach ($fgrteam_list as $fgrteam): ?>
        <li><a href="<?php print './' . $node->nid . '?team_id=' . $fgrteam['id']?>"><?php print $fgrteam['title'] ?></a></li>
    <?php endforeach; ?>
</ul>