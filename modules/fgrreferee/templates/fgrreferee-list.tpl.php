<div class="container">
    <div id="search">
        <form action="javascript:void(0);" method="GET">
            <fieldset class="clearfix">
                <div>ФИО судьи:</div>
                <input type="search" id="sername" name="search" value="Введите фамилию судьи" onBlur="if(this.value=='')this.value='Введите фамилию судьи'" onFocus="if(this.value=='Введите фамилию судьи')this.value='' ">
                <input type="search" id="name" name="search" value="Введите имя судьи" onBlur="if(this.value=='')this.value='Введите имя судьи'" onFocus="if(this.value=='Введите имя судьи')this.value='' ">
                <input type="search" id="second_name" name="search" value="Введите отчество судьи" onBlur="if(this.value=='')this.value='Введите отчество судьи'" onFocus="if(this.value=='Введите отчество судьи')this.value='' ">
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
        <div style="display: none" id="skip_right"><?php if($skip + $top <= $fgrreferee_list['all_count']) { print $skip + $top; } else { print $skip;}?></div>
        <?php if($skip != 0): ?>
            <span id="skip_left_link" href=""><</span>&nbsp;
        <?php endif; ?>
        <?php if($skip + 20 <= $fgrreferee_list['all_count']): ?>
            <span id="skip_right_link" href="">></span>
        <?php endif; ?>

    </div>
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
        <?php foreach ($fgrreferee_list['data'] as $key => $referee): ?>
            <tr>
                <td><?php print $key + 1 ?></td>
                <td>
                    <!--                <img src="--><?php //print $referee['team']['icon_url'] ?><!--">-->
                <span>
                    <a href="<?php print './' . $node->nid . '?referee_id=' . $referee['id'] ?>"><?php print $referee['sername'] . ' ' . $referee['name'] ?></a>
                </span>
                </td>
                <td><?php print $referee['birthday'] ?></td>
                <td><?php print $referee['age'] ?></td>
                <td><?php print $referee['referee_category'] ?></td>
                <td><?php print $referee['city'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    jQuery('#search_button').click(function(){
        var name = jQuery('#name').val();
        var sername = jQuery('#sername').val();
        var second_name = jQuery('#second_name').val();
        if(name == 'Введите имя судьи') {
            name = null;
        }
        if(sername == 'Введите фамилию судьи') {
            sername = null;
        }
        if(second_name == 'Введите отчество судьи') {
            second_name = null;
        }
        window.location = './<?php print $node->nid ?>?sername=' + sername + '&name=' + name + '&second_name=' + second_name +
        '&show_all=' + jQuery('#show_all').is(':checked') + '&seasons=' + jQuery('#seasons option:selected').val();
    });
    jQuery('#skip_right_link').click(function(){
        var name = jQuery('#name').val();
        var sername = jQuery('#sername').val();
        var second_name = jQuery('#second_name').val();
        var skip = jQuery('#skip_right').text();
        if(name == 'Введите имя судьи') {
            name = null;
        }
        if(sername == 'Введите фамилию судьи') {
            sername = null;
        }
        if(second_name == 'Введите отчество судьи') {
            second_name = null;
        }
        window.location = './<?php print $node->nid ?>?sername=' + sername + '&name=' + name + '&second_name=' + second_name +
        '&show_all=' + jQuery('#show_all').is(':checked') + '&seasons=' + jQuery('#seasons option:selected').val() + '&skip=' + skip + '&top=' + <?php print $top?>;
    });
    jQuery('#skip_left_link').click(function(){
        var name = jQuery('#name').val();
        var sername = jQuery('#sername').val();
        var second_name = jQuery('#second_name').val();
        var skip = jQuery('#skip_left').text();
        if(name == 'Введите имя судьи') {
            name = null;
        }
        if(sername == 'Введите фамилию судьи') {
            sername = null;
        }
        if(second_name == 'Введите отчество судьи') {
            second_name = null;
        }
        window.location = './<?php print $node->nid ?>?sername=' + sername + '&name=' + name + '&second_name=' + second_name +
        '&show_all=' + jQuery('#show_all').is(':checked') + '&seasons=' + jQuery('#seasons option:selected').val() + '&skip=' + skip + '&top=' + <?php print $top?>;
    });

</script>