<div class="container">
    <div id="search">
        <form action="javascript:void(0);" method="GET">
            <fieldset class="clearfix">
                <div>ФИО судьи:</div>
                <input type="search" id="sername" name="search" value="<?php if($fgrreferee_list['params']['sername'] != null) { print $fgrreferee_list['params']['sername'] ;} else { print 'Введите фамилию судьи'; } ?>" onBlur="if(this.value=='')this.value='Введите фамилию судьи'" onFocus="if(this.value=='Введите фамилию судьи')this.value='' ">
                <input type="search" id="name" name="search" value="<?php if($fgrreferee_list['params']['name'] != null) { print $fgrreferee_list['params']['name'] ;} else { print 'Введите имя судьи'; } ?>" onBlur="if(this.value=='')this.value='Введите имя судьи'" onFocus="if(this.value=='Введите имя судьи')this.value='' ">
                <input type="search" id="second_name" name="search" value="<?php if($fgrreferee_list['params']['second_name'] != null) { print $fgrreferee_list['params']['second_name'] ;} else { print 'Введите отчество судьи'; } ?>" onBlur="if(this.value=='')this.value='Введите отчество судьи'" onFocus="if(this.value=='Введите отчество судьи')this.value='' ">
                <div class="inline_block">Показать всех:</div>
                <input type="checkbox" id="show_all" name="show_all" value="show_all">
                <div class="inline_block va_middle">Сезон:</div>
                <select id="seasons" name="season">
                <option value="null">Не выбрано</option>
                <?php foreach($seasons as $season): ?>
                    <optgroup label="<?php print $season['Name']; ?>">
                        <?php foreach($season['Children'] as $championship): ?>
                            <option value="<?php print $championship['CompId']; ?>">
                                <?php print $championship['Name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </optgroup>
                <?php endforeach; ?>
                </select>
                <input type="submit" id="search_button" value="Поиск" class="button">
            </fieldset>
        </form>
    </div>
    <br/>
    <div class="center">
        <div style="display: none" id="skip_left"><?php if($skip != 0) { print $skip - $top; } else { print $skip;}?></div>
        <div style="display: none" id="skip_right"><?php if($skip + $top <= $fgrreferee_list['AllCount']) { print $skip + $top; } else { print $skip;}?></div>
        <?php if($skip != 0): ?>
            <span id="skip_left_link" href=""><</span>&nbsp;
        <?php endif; ?>
        <?php if($skip + 20 <= $fgrreferee_list['AllCount']): ?>
            <span id="skip_right_link" href="">></span>
        <?php endif; ?>

    </div>
    <?php if(array_key_exists('Data', $fgrreferee_list) && count($fgrreferee_list['Data']) != 0):?>
    <table class="referee_table">
        <thead>
        <tr>
            <th>№</th>
            <th>Фамилия, имя</th>
            <th>Дата рождения</th>
            <th>Возраст</th>
            <th>Судейская категория</th>
            <th>Город</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($fgrreferee_list['Data'] as $key => $referee): ?>
            <tr>
                <td><?php print $referee['RefereePositionId'] ?></td>
                <td>
                <span>
                    <a href="<?php print './' . $node->nid . '?referee_id=' . $referee['PersonId'] ?>"><?php print $referee['LastName'] . ' ' . $referee['FirstName'] ?></a>
                </span>
                </td>
                <td><?php print date('Y.m.d', strtotime($referee['Birthday'])) ?></td>
                <td><?php $today = new DateTime(); $birthday = new DateTime($referee['Birthday']); print $today->diff($birthday)->format('Y')?></td>
                <td><?php print 'Заглушка' ?></td>
                <td><?php print 'Заглушка' ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else:?>
        <h2>Нет найденных судей</h2>
    <?php endif?>
</div>
<script>
    jQuery('#search_button').click(function(){
        var name = jQuery('#name').val();
        var sername = jQuery('#sername').val();
        var second_name = jQuery('#second_name').val();
        var filter_string = '';
        if(name == 'Введите имя судьи') {
            name = null;
        } else {
            filter_string += '&name=' + name;
        }
        if(sername == 'Введите фамилию судьи') {
            sername = null;
        } else {
            filter_string += '&sername=' + sername;
        }
        if(second_name == 'Введите отчество судьи') {
            second_name = null;
        } else {
            filter_string += '&second_name=' + second_name;
        }
        window.location = './<?php print $node->nid ?>?&show_all=' + jQuery('#show_all').is(':checked') + '&seasons=' + jQuery('#seasons option:selected').val() + filter_string;
    });
    jQuery('#skip_right_link').click(function(){
        var name = jQuery('#name').val();
        var sername = jQuery('#sername').val();
        var second_name = jQuery('#second_name').val();
        var skip = jQuery('#skip_right').text();
        var filter_string = '';
        if(name == 'Введите имя судьи') {
            name = null;
        } else {
            filter_string += '&name=' + name;
        }
        if(sername == 'Введите фамилию судьи') {
            sername = null;
        } else {
            filter_string += '&sername=' + sername;
        }
        if(second_name == 'Введите отчество судьи') {
            second_name = null;
        } else {
            filter_string += '&second_name=' + second_name;
        }
        window.location = './<?php print $node->nid ?>?&show_all=' + jQuery('#show_all').is(':checked') + '&seasons=' + jQuery('#seasons option:selected').val() + '&skip=' + skip + '&top=' + <?php print $top?> + filter_string;
    });
    jQuery('#skip_left_link').click(function(){
        var name = jQuery('#name').val();
        var sername = jQuery('#sername').val();
        var second_name = jQuery('#second_name').val();
        var skip = jQuery('#skip_left').text();
        var filter_string = '';
        if(name == 'Введите имя судьи') {
            name = null;
        } else {
            filter_string += '&name=' + name;
        }
        if(sername == 'Введите фамилию судьи') {
            sername = null;
        } else {
            filter_string += '&sername=' + sername;
        }
        if(second_name == 'Введите отчество судьи') {
            second_name = null;
        } else {
            filter_string += '&second_name=' + second_name;
        }
        window.location = './<?php print $node->nid ?>?&show_all=' + jQuery('#show_all').is(':checked') + '&seasons=' + jQuery('#seasons option:selected').val() + '&skip=' + skip + '&top=' + <?php print $top?> + filter_string;
    });

</script>