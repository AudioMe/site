<script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU"
        type="text/javascript"></script>

<center><h1 class="hFinde"><?php echo $studio->name; ?> <span class="span_h1">(редактировать)</span>
        <?php if ($studio->premium) { ?><img width="60" height="25" src="image/status-me.png"><?php } ?></h1></center>
<!--<p><center>После изменения данных студии, данные отправляются на проверку админисратору и она снимается с публикации.</center></p>-->
<div id="YMapsID" style="width:630px;height:400px"></div>
<form method="post" id="register_form1" enctype="multipart/form-data" action="/AdminEditSave/studio/<?php echo $studio->user_id; ?>"
      onsubmit="return valid_form()">
    <table class="register_table">
        <tr>
            <td class="table_td_first">Адрес</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->address; ?>" id="in_adres"
                       name="adres"/></td>
        </tr>
        <tr>
            <td class="table_td_first">Долгота</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->longitude; ?>" id="longitude"
                       name="longitude"/></td>
        </tr>
        <tr>
            <td class="table_td_first">Широта</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->latitude; ?>" id="latitude"
                       name="latitude"/></td>
        </tr>
        <tr>
            <td class="table_td_first">Телефон</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->phone; ?>" id="in_phone"
                       placeholder="+7(495) 123 45 67" name="phone"/>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">E-mail</td>
            <td><input type="text" class="register_input" value="<?php echo $email; ?>" id="in_email" name="email"/>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">Название студии</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->name; ?>" id="in_name"
                       name="name"/>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">Метро</td>
            <td>
                <select id="in_metro" class="register_input" name="metro">
                    <?php
                    foreach ($metro as $m) {
                        if ($studio->metro == $m->id) {
                            echo '<option value="' . $m->id . '"  selected >' . $m->name . '</option>';
                        } else {
                            echo '<option value="' . $m->id . '">' . $m->name . '</option>';
                        }

                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">URL</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->url; ?>" id="site_url"
                       placeholder="http://site.ru" name="url"/></td>
        </tr>
        <tr>
            <td class="table_td_first">Площадь</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->area; ?>" id="in_area"
                       name="area"/></td>
        </tr>

        <tr>
            <td class="table_td_first">Цены от</td>
            <td><input type="text" class="register_input" value="<?php echo $studio->price; ?>" id="in_price"
                       name="price"/></td>
        </tr>
        <tr>
            <td class="table_td_first">Количество каналов <br>одновременной записи</td>
            <td><textarea rows="3" class="register_input" type="text" id="count_record"
                          name="count_record"/><?php echo $studio->count_channel; ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">Парк микрофонов</td>
            <td><textarea class="register_input" rows="3" id="in_park"
                          name="in_park"><?php echo $studio->microphones; ?></textarea></td>
        </tr>

        <tr>
            <td class="table_td_first">Муз. инструменты</td>
            <td><textarea class="register_input" rows="3" id="in_musics"
                          name="in_musics"><?php echo $studio->music_tools; ?></textarea></td>
        </tr>

        <tr>
            <td class="table_td_first">Фото</td>
            <td><input class="register_input" accept="image/*,image/jpeg" type="file" id="in_photo" name="photo"/>

                <p><img src="<?php echo $studio->photo; ?>"/></p>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">Контактное лицо</td>
            <td><input class="register_input" type="text" value="<?php echo $studio->fio; ?>" id="in_fio" name="fio"/>
            </td>
        </tr>
        <tr>
            <td class="table_td_first">Подробно о студии</td>
            <td><textarea class="register_input" rows="8" id="in_about"
                          name="in_about"><?php echo $studio->more; ?></textarea></td>
        </tr>

    </table>
    <input type="hidden" value="" id="formreg2" name="formreg2"/>
    <center><input type="submit" name="sbmbuttonedit" class="finde_btn" id="register_studio"
                   value="Опубликовать"/></center>
</form>

<div class="overlay" id="overlay" style="display:none;"></div>
<div class="box" id="box">
    <a class="boxclose" id="boxclose"></a>

    <div id="message_text"></div>
</div>
<?php
$config = new Model_Configuration();
$adress = $studio->address;
$key = $config->mapKey;
$coord = array(37.6227,55.7464);
$adress1=urlencode($adress);
try{
    $url="http://geocode-maps.yandex.ru/1.x/?geocode=".$adress1."&key=".$key;
    $content=file_get_contents($url);
    preg_match('/<pos>(.*?)<\/pos>/',$content,$point);
    $coordinaty=str_replace(' ',', ',trim(strip_tags($point[1])));
    $coordinaty=str_replace(' ','',$coordinaty);
    $coord = explode(",", $coordinaty);
    if (!isset($coord[0]) || !isset($coord[1])){
        $coord = array(37.6227,55.7464);
    }
}catch (Exception $e){
    $coord = array(37.6227,55.7464);
}

?>

<script type="text/javascript">

    function valid_register_form(id_element) {
        if (jQuery('#' + id_element).val() == "") {
            jQuery('#' + id_element).css('background', '#FF5656');
            return 1;
        } else {
            jQuery('#' + id_element).removeAttr('style');
        }
        return 0;
    }

    //    jQuery('#register_form1').ajaxForm(function (data) {
    //        jQuery("#message_text").html(data);
    //        jQuery('#overlay').fadeIn('fast', function () {
    //            jQuery('#box').animate({'top': '160px'}, 500);
    //        });
    //    });


    function valid_form() {
        var msg = jQuery('#register_form2').serialize();
        jQuery('#formreg2').val(msg);
        var temp_z = 0;
        temp_z += valid_register_form('in_adres');
        temp_z += valid_register_form('in_phone');
        temp_z += valid_register_form('site_url');
        temp_z += valid_register_form('in_metro');
        temp_z += valid_register_form('in_area');
//        temp_z += valid_register_form('in_recorder');
        temp_z += valid_register_form('count_record');
        temp_z += valid_register_form('in_park');
        temp_z += valid_register_form('in_name');
        temp_z += valid_register_form('in_email');
        temp_z += valid_register_form('in_price');
//        temp_z += valid_register_form('in_monitor');
        temp_z += valid_register_form('in_musics');
//        temp_z += valid_register_form('in_interer');
//        temp_z += valid_register_form('in_photo');
        temp_z += valid_register_form('in_fio');
        temp_z += valid_register_form('in_about');
        if (jQuery('input[name="studio_type"]:checked').size() == 0) {
            jQuery('.finde_chech_top').css('background', '#FF5656');
            temp_z += 1;
        } else {
            jQuery('.finde_chech_top').css('background', 'none');
        }


        if (jQuery('.check_register:checked').size() == 0) {
            jQuery('.check_bottom').css('background', '#FF5656');
            temp_z += 1;
        } else {
            jQuery('.check_bottom').css('background', 'none');
        }
        if (temp_z > 0) return false;

//        jQuery("#message_text").html("<h1>Сейчас вы будете зарегистрированы, вы можете дождаться окончания, либо продолжать пользоваться сайтом</h1>");
//        jQuery('#overlay').fadeIn('fast', function () {
//            jQuery('#box').animate({'top': '160px'}, 500);
//        });
        return true;

    }

    jQuery(function () {
        $("#in_phone").mask("+7(999) 999 99 99");

        jQuery('.register_input').focusout(function () {
            if (jQuery(this).val() != "") {
                jQuery(this).removeAttr('style');
            } else {
                jQuery(this).css('background', '#FF5656');
            }
        });
        jQuery('input[name="studio_type"]').click(function () {
            jQuery('.finde_chech_top').css('background', 'none');
        });

        jQuery('.check_register,.check_register+label').click(function () {
            if (jQuery('.check_register:checked').size() == 0) {
                jQuery('.check_bottom').css('background', '#FF5656');
            } else {
                jQuery('.check_bottom').css('background', 'none');
            }
        });


    });
</script>

<script type='text/javascript'>

    s1 = "/image/icons/top.png";
    s2 = "/image/icons/price.png";
    s3 = "/image/icons/freel.png";

    var latitude = <?php if ($studio->latitude) echo $studio->latitude; else echo "-1"; ?>;
    var longitude = <?php if ($studio->longitude)echo $studio->longitude;else echo "-1"; ?>;
    ymaps.ready(init);


    function init() {

        function geoCoordinate() {
            if (latitude != -1 && longitude != -1){
                var coord = [longitude, latitude];
                return coord;
            }
           var coord = [<?php echo $coord[1]; ?>, <?php echo $coord[0]; ?>];
            jQuery("#longitude").val(coord[0].toFixed(7));
            jQuery("#latitude").val(coord[1].toFixed(7));
            return coord;
        }

        var myMap = new ymaps.Map("YMapsID", {
                center: geoCoordinate(),
                zoom: 10
            }),
        // Создаем метку с помощью вспомогательного класса.
            myPlacemark1 = new ymaps.Placemark(geoCoordinate(), {


                balloonContent: '<?php echo $studio->name; ?>',
                hintContent: '<?php echo $studio->name; ?>'
            }, {
                iconImageHref: s<?php echo $studio->class; ?>,
                iconImageSize: [35, 35],
                // Опции.
                // Стандартная фиолетовая иконка.
                preset: 'twirl#violetIcon',
                draggable: true
            });

                myPlacemark1.events.add("dragend", function (e) {

                var coord = myPlacemark1.geometry.getCoordinates();

                    jQuery("#longitude").val(coord[0].toFixed(7));
                    jQuery("#latitude").val(coord[1].toFixed(7));
                }),


        // Добавляем все метки на карту.
        myMap.geoObjects
            .add(myPlacemark1);
        myMap.controls.add(
            new ymaps.control.ZoomControl()
        );
        myMap.controls.add(
            ymaps.control.ScaleLine()
        );


    }

</script>