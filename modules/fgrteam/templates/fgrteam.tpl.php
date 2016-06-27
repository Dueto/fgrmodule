<h1 style="text-align: center"><?php print $fgrteam['Name']?></h1>

<table class="team_info_table">
    <tbody>
    <tr>
        <td class="club_photo"><img src="<?php if($fgrteam['Club']['LogoId'] != null) print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/Image/' . $fgrteam['Club']['LogoId']; else print '../files/fgrmodule/logo.png';?>"></td>
        <td class="">
            <b>Клуб: </b><?php print $fgrteam['Club']['Name']?><br/>
            <b>Домашняя арена: </b><?php print $fgrteam['HomeArena']['Name'] . ' - ' . $fgrteam['HomeArena']['City']['Name'] ?><br/>
            <b>Адрес: </b><?php print $fgrteam['Address']?><br/>
            <b>Почтовый индекс: </b><?php print $fgrteam['ZipCode'] ?><br/>
            <b>Сайт: </b><?php print $fgrteam['InternetAddress'] ?><br/>
            <b>Email: </b><?php print $fgrteam['Email'] ?><br/>
            <b>Телефон: </b><?php print $fgrteam['Phone'] ?><br/>
        </td>
    </tr>
    </tbody>
</table>
<?php if(count($fgrteam['Photos']) != 0): ?>
    <div class="team_photo_container">
        <img class="team_photo" src="<?php print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/LegalEntityImage/' . $fgrteam['Photos'][0]['LegalEntityId'] ?>">
    </div>
<?php endif; ?>
<h2 style="text-align: center">Игроки</h2>
<table class="member_table sortable">
    <thead>
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Имя</th>
        <th>Голы в сезоне</th>
        <th>Гражданство</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($fgrteam['Players'] as $key => $member): ?>
        <tr>
            <td><?php print $member['Number']?></td>
            <td><img class="member_icon" src="<?php if($member['Player']['PhotoId'] != null) {
                                                        print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/PersonImage/' . $member['Player']['PersonId'];
                                                    } else {
                                                        print '../files/manual/avatar.png';
                                                    }?>"></td>
            <td id="dialog_link<?php print $key + 1?>">
                <b><?php print $member['Player']['LastName'] ?></b> <?php print ' ' . $member['Player']['FirstName'] . ' ' . $member['Player']['MiddleName']?>
            </td>
            <td><?php print '1' ?></td>
            <td><img src="../files/country/<?php print strtolower($member['Player']['Citizenship']['CountryId'])?>.png"></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php foreach ($fgrteam['Players'] as $key => $member): ?>
    <div id="dialog<?php print $key + 1?>" title="<?php print $member['Player']['LastName'] . ' ' . $member['Player']['FirstName'] . ' ' . $member['Player']['MiddleName']?> ">
        <table>
            <tbody>
                <tr>
                    <td><img class="member_icon_info" src="<?php if($member['Player']['PhotoId'] != null) {
                                                                    print variable_get('fgrtournament_system_url', 'http://fgr.ntrlab.ru:81/api') . '/Media/PersonImage/' . $member['Player']['PersonId'];
                                                                } else {
                                                                    print '../files/manual/avatar.png';
                                                                }?>"></td>
                    <td>
                        <b><?php print $member['Player']['LastName'] . ' ' . $member['Player']['FirstName'] . ' ' . $member['Player']['MiddleName'] ?></b><br/><br/>
                        <b>Гражданство: </b><img src="../files/country/<?php print strtolower($member['Player']['Citizenship']['CountryId'])?>.png">  <?php print $member['Player']['Citizenship']['Name'] ?><br/><br/>
                        <b>Голов в сезоне: </b><?php print '1' ?><br/><br/>
                        <b>Дата рождения: </b><?php print date('Y.m.d', strtotime($member['Player']['Birthday'])) ?><br/><br/>
                        <b>Клуб в этом сезоне: </b><?php print $fgrteam['Club']['Name'] ?><br/><br/>
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