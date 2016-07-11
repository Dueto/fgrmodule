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
                    <option
                        label="<?php print $season['Name']; ?>"
                        value="<?php print $season['Name']; ?>"
                        <?php if($fgrreferee_list['params']['competition_id'] == $season['Name']) print 'selected';?>>
                        <?php print $season['Name']; ?>
<!--                        --><?php //foreach($season['Children'] as $championship): ?>
<!--                            <option value="--><?php //print $championship['CompId']; ?><!--">-->
<!--                                --><?php //print $championship['Name']; ?>
<!--                            </option>-->
<!--                        --><?php //endforeach; ?>
                    </option>
                <?php endforeach; ?>
                </select>
                <input type="submit" id="search_button" value="Поиск" class="button">
            </fieldset>
        </form>
    </div>
    <br/>
<!--    <div class="center">-->
<!--        <div style="display: none" id="skip_left">--><?php //if($skip != 0) { print $skip - $top; } else { print $skip;}?><!--</div>-->
<!--        <div style="display: none" id="skip_right">--><?php //if($skip + $top <= $fgrreferee_list['AllCount']) { print $skip + $top; } else { print $skip;}?><!--</div>-->
<!--        --><?php //if($skip != 0): ?>
<!--            <span id="skip_left_link" href=""><</span>&nbsp;-->
<!--        --><?php //endif; ?>
<!--        --><?php //if($skip + 20 <= $fgrreferee_list['AllCount']): ?>
<!--            <span id="skip_right_link" href="">></span>-->
<!--        --><?php //endif; ?>
<!---->
<!--    </div>-->

    <div id="pages" class="pagination"></div>

    <?php if(array_key_exists('Data', $fgrreferee_list) && count($fgrreferee_list['Data']) != 0):?>
    <table class="referee_table">
        <thead>
        <tr>
            <th>№</th>
            <th>Фамилия, имя</th>
            <th>Дата рождения</th>
            <th>Возраст</th>
            <th>Судейская категория</th>
            <th>Страна</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($fgrreferee_list['Data'] as $key => $referee): ?>
            <tr>
                <td><?php print $referee['RefereePositionId'] ?></td>
                <td>
                <span>
                    <a class="blank_link" href="<?php print './' . $node->nid . '?referee_id=' . $referee['PersonId'] ?>"><?php print $referee['LastName'] . ' ' . $referee['FirstName'] ?></a>
                </span>
                </td>
                <td><?php $birthday = new DateTime($referee['Birthday']); print $birthday->format('Y.m.d') ?></td>
                <td><?php $today = new DateTime(); $birthday = new DateTime($referee['Birthday']); print $today->diff($birthday)->format('%Y')?></td>
                <td><?php if(count($referee['RefereeRanks']) != 0) { print $referee['RefereeRanks']['RefereeRank']; } else { print 'Нет категории'; } ?></td>
                <td><?php print $referee['Citizenship']['Name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else:?>
        <h2>Нет найденных судей</h2>
    <?php endif?>
</div>
<script>
    $('#search_button').click(function(){
        var name = $('#name').val();
        var sername = $('#sername').val();
        var second_name = $('#second_name').val();
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
        window.location = './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + filter_string;
    });

    <?php $current_page = ceil(($skip + $top) / $top) == 0 ? 1 : ceil(($skip + $top) / $top); ?>
    counter = 0;
    $("#pages").paging(<?php if(isset($fgrreferee_list['AllCount'])) print $fgrreferee_list['AllCount']; else print 0;?>, {
        format: "< > . (q -) nncnn (- p)",
        perpage: <?php print $top?>,
        lapping: 1,
        page: <?php print $current_page ?>,
        onSelect: function(page) {
            if(counter == 0) {
                counter++;
                return;
            }
            var name = $('#name').val();
            var sername = $('#sername').val();
            var second_name = $('#second_name').val();
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
            window.location = './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (page - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string;
        },
        onFormat: function(type) {

            var name = $('#name').val();
            var sername = $('#sername').val();
            var second_name = $('#second_name').val();
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

            switch (type) {

                case 'block':

                    if (!this.active)
                        return '<span class="disabled">' + this.value + '</span>';
                    else if (this.value != this.page)
                        return '<em><a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '">' + this.value + '</a></em>';
                    return '<span class="current">' + this.value + '</span>';

                case 'left':

                    if (!this.active)
                        return '<span class="disabled">' + this.value + '</span>';
                    else if (this.value != this.page)
                        return '<em><a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '">' + this.value + '</a></em>';
                    return '<span class="current">' + this.value + '</span>';



                case 'right':

                    if (!this.active)
                        return '<span class="disabled">' + this.value + '</span>';
                    else if (this.value != this.page)
                        return '<em><a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '">' + this.value + '</a></em>';
                    return '<span class="current">' + this.value + '</span>';

                case 'next':

                    if (this.active)
                        return '<a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '" class="next">&rarr;</a>';
                    return '<span class="disabled">&rarr;</span>';

                case 'prev':

                    if (this.active)
                        return '<a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '" class="prev">&larr;</a>';
                    return '<span class="disabled">&larr;</span>';

                case 'first':

                    if (this.active)
                        return '<a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '" class="first">Первая</a>';
                    return '<span class="disabled">Первая</span>';

                case 'last':

                    if (this.active)
                        return '<a href="' + './<?php print $node->nid ?>?&show_all=' + $('#show_all').is(':checked') + '&competition_id=' + $('#seasons option:selected').val() + '&skip=' + (this.value - 1) * <?php print $top?> + '&top=' + <?php print $top?> + filter_string + '" class="last">Последняя</a>';
                    return '<span class="disabled">Последняя</span>';

                case "leap":

                    if (this.active)
                        return " &nbsp; ";
                    return "";

                case 'fill':

                    if (this.active)
                        return "...";
                    return "";
            }
        }
    });

</script>