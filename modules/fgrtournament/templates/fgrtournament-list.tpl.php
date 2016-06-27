<?php if($fgrtournaments != NULL): ?>


    <select id="seasons" name="season">
        <option value="null">Не выбрано</option>
        <?php foreach($fgrtournaments as $season): ?>
            <option value="<?php print $season['CompId'] ?>" label="<?php print $season['Name']; ?>">
            </option>
        <?php endforeach; ?>
    </select>


    <?php foreach ($fgrtournaments as $fgrtournament): ?>
        <?php if(count($fgrtournament['Children']) != 0): ?>
            <div id="<?php print $fgrtournament['CompId'] ?>" class="tournament_list_container">
                <?php foreach($fgrtournament['Children'] as $children): ?>
                    <div class="css-treeview">
                    <ul>
                        <?php print_competition_node($children)?>
                    </ul>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>


<?php else: ?>
    <h2>Нет действующих турниров</h2>
<?php endif;?>


<script type="text/javascript">
    function UnHide( eThis ){
        if( eThis.innerHTML.charCodeAt(0) == 9658 ){
            eThis.innerHTML = '&#9660;';
            eThis.parentNode.parentNode.parentNode.className = '';
        }else{
            eThis.innerHTML = '&#9658;';
            eThis.parentNode.parentNode.parentNode.className = 'cl';
        }
    }

    var seasonId = $('#seasons').val();
    if(seasonId) {
        $('#' + seasonId).show();
    }

    $('#seasons').change(function(){
        var seasonId = $(this).val();
        $('.tournament_list_container').hide();
        $('#' + seasonId).show();
    });
</script>