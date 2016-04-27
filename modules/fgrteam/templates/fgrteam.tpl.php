<h1 style="text-align: center"><?php print $fgrteam['title']?></h1>
<div class="profile">
    <div class="group-wrapper field-group-div">
        <div class="field field-name-field-team-logo field-type-image field-label-hidden">
            <div class="field-items">
                <div class="field-item even">
                    <img src="<?php print $fgrteam['logo_photo_url']?>" width="100" height="100" alt="<?php print $fgrteam['title']?>">
                </div>
            </div>
        </div>
        <div class="group-info field-group-div">
            <div class="field field-name-field-team-adress field-type-text field-label-inline clearfix">
                <div class="field-label">Адрес:&nbsp;</div>
                <div class="field-items">
                    <div class="field-item even"><?php print $fgrteam['address']?>
                    </div>
                </div>
            </div>
            <div class="field field-name-field-team-phone field-type-text field-label-inline clearfix">
                <div class="field-label">Телефон:&nbsp; </div>
                <div class="field-items">
                    <div class="field-item even"><?php print $fgrteam['telephone']?>
                    </div>
                </div>
            </div>
            <div class="field field-name-field-team-email field-type-text field-label-inline clearfix">
                <div class="field-label">E-mail:&nbsp;</div>
                <div class="field-items">
                    <div class="field-item even">
                        <a href="mailto:<?php print $fgrteam['email']?>"><?php print $fgrteam['email']?></a>
                    </div>
                </div>
            </div>
            <div class="field field-name-field-team-site field-type-link-field field-label-inline clearfix">
                <div class="field-label">Сайт:&nbsp;</div>
                <div class="field-items">
                    <div class="field-item even">
                        <a href="<?php print $fgrteam['site']?>" target="_blank"><?php print $fgrteam['site']?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="group-history field-group-div">-->
<!--        <div class="group-history-wrapper field-group-div">-->
<!--            <div class="field field-name-field-team-photo field-type-image field-label-hidden">-->
<!--                <div class="field-items">-->
<!--                    <div class="field-item even">-->
<!--                        <a href="--><?php //print $fgrteam['team_photo_url']?><!--" title="--><?php //print $fgrteam['title']?><!--" class="colorbox init-colorbox-processed cboxElement" rel="gallery-user-88-CAY7NVwOxRI">-->
<!--                            <img src="--><?php //print $fgrteam['team_photo_url']?><!--" width="480" height="280" alt="" title=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
<h2 style="text-align: center">Игроки</h2>
<table class="member_table sortable">
    <thead>
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Имя</th>
        <th>Голы в сезоне</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($fgrteam['team_members'] as $key => $member): ?>
        <tr>
            <td><?php print $key + 1 . "."?></td>
            <td><img class="member_icon" src="<?php print $member['member_photo_url'] ?>"></td>
            <td id="dialog_link<?php print $key + 1?>">
                <b><?php print $member['second_name'] ?></b> <?php print ' ' . $member['first_name'] ?>
            </td>
            <td><?php print $member['score_in_current_season'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php foreach ($fgrteam['team_members'] as $key => $member): ?>
    <div id="dialog<?php print $key + 1?>" title="<?php print $member['second_name'] ?> <?php print ' ' . $member['first_name'] ?>">
        <table>
            <tbody>
                <tr>
                    <td><img class="member_icon_info" src="<?php print $member['member_photo_url'] ?>"></td>
                    <td>
                        <b><?php print $member['second_name'] ?> <?php print $member['first_name'] ?></b><br/><br/>
                        <b>Гражданство: </b><?php print $member['citizenship'] ?><br/><br/>
                        <b>Голов в сезоне: </b><?php print $member['score_in_current_season'] ?><br/><br/>
                        <b>Дата рождения: </b><?php print $member['birthday'] ?><br/><br/>
                        <b>Клуб в этом сезоне: </b><?php print $member['season_club'] ?><br/><br/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        jQuery( "#dialog<?php print $key + 1?>" ).dialog({
            autoOpen: false,
            width: 500,
            zIndex: 9999
        });
        jQuery( "#dialog_link<?php print $key + 1?>" ).click(function( event ) {
            jQuery( "#dialog<?php print $key + 1?>" ).dialog( "open" );
            event.preventDefault();
        });
    </script>
<?php endforeach; ?>