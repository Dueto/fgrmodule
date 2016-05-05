<div class="container">
    <div id="search">
        <form action="javascript:void(0);" method="GET">
            <fieldset class="clearfix">
                <div>ФИО судьи:</div>
                <input type="search" name="search" value="Введите фамилию судьи" onBlur="if(this.value=='')this.value='Введите фамилию судьи'" onFocus="if(this.value=='Введите фамилию судьи')this.value='' ">
                <input type="search" name="search" value="Введите имя судьи" onBlur="if(this.value=='')this.value='Введите имя судьи'" onFocus="if(this.value=='Введите имя судьи')this.value='' ">
                <input type="search" name="search" value="Введите отчество судьи" onBlur="if(this.value=='')this.value='Введите отчество судьи'" onFocus="if(this.value=='Введите отчество судьи')this.value='' ">
                <div>Сезон:</div>
                <select id="seasons" name="season">
                <?php foreach($seasons as $season): ?>
                    <optgroup label="<?php print $season['Name']; ?>">
                        <?php foreach($season['Children'] as $championship): ?>
                            <option value="<?php print $championship['Name']; ?>">
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
</div>