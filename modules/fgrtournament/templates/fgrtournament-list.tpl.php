<?php if($fgrtournaments != NULL): ?>
    <?php foreach ($fgrtournaments as $fgrtournament): ?>
            <h1><?php print $fgrtournament['Name'] ?></h1>
        <?php if(count($fgrtournament['Children']) != 0): ?>
            <?php foreach($fgrtournament['Children'] as $children): ?>
                <ul class="tree">
                <?php print_competition_node($children)?>
                </ul>
            <?php endforeach;?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php else: ?>
    <h2>Нет действующих турниров</h2>
<?php endif;?>
