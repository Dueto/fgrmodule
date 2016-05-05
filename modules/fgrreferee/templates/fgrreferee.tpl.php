<div class="container">
    <div id="search">
        <form action="javascript:void(0);" method="GET">
            <fieldset class="clearfix">
                <input type="search" name="search" value="Введите имя судьи" onBlur="if(this.value=='')this.value='Введите имя судьи'" onFocus="if(this.value=='Введите имя судьи')this.value='' "> <!-- JS because of IE support; better: placeholder="What are you looking for?" -->
                <input type="submit" value="Поиск" class="button">
            </fieldset>
        </form>
    </div>
</div>
<!--<ul>-->
<!--    --><?php //foreach ($fgrteam_list as $fgrteam): ?>
<!--        <li><a href="--><?php //print './' . $node->nid . '?team_id=' . $fgrteam['id']?><!--">--><?php //print $fgrteam['title'] ?><!--</a></li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->