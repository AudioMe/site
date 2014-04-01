<script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU"
        type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery.MultiFile.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="/css/jquery-ui-1.10.3.custom.min.css"/>
<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js"></script>
<?php
if (isset($studio)) {
    ?>
    <table>
        <tr>
            <td>
                <?php if(strlen($studio->photo)) {?>                
                   <div id="avatar" class="studio_image avatar_block">
                       <img class="wh170" src="<?php echo $studio->photo;?>">
                       <div id="loading_ava"></div>
                   </div>
               <?php

               }
               else {?>
                   <div id="avatar" class="studio_image avatar_block">
                       <img class="wh170" src="/images/no_photo.gif"/>
                       <div id="loading_ava"></div>
                   </div>
               <?php
               }
               ?>
            </td>
            <td width="40">&nbsp;</td>
            <td style="vertical-align: middle;">
                <a id="uploadBtn" class="" href="#">загрузить</a><br/><br/>
                <a id="rmAva" class="<?php if(!strlen($studio->photo)) echo 'hidden';?>" href="javascript:rmAva();">удалить</a><br/>
            </td>
            <td style="vertical-align: middle;">
                <div id="InfoBox"></div>
            </td>
        </tr>
    </table>
    <h2><?php echo $studio->name;?></h2>

    <div id="YMapsID" style="width:630px;height:400px"></div>
    <form method="post" class="ui_form" id="register_form1" enctype="multipart/form-data" action="/AdminSave/studio"
          onsubmit="return valid_form()">
        <input type="hidden" name="user_id" value="<?php echo $studio->user_id; ?>"/>
        <input type="hidden" value="" id="formreg2" name="formreg2"/>
        <table>

            <tr>
                <td class="vertical_top">
                    <table class="register_table">
                        <tr>
                            <td class="table_td_first">Опубликовано</td>
                            <td><input type="checkbox" value="1" <?php if ($studio->public) {
                                    echo "checked";
                                } ?>  name="public"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Тип пакета</td>
                            <td>
                                <select id="in_premium_type" class="register_input" name="premium_type">
                                    <option value="0">НЕТ</option>
                                    <?php
                                    foreach ($premium_types as $pt) {
                                        if ($studio->premium && $premium->premium_type_id == $pt['premium_type_id']) {
                                            echo '<option value="' . $pt['premium_type_id'] . '"  selected >' . $pt['description'] . '</option>';
                                        } else {
                                            echo '<option value="' . $pt['premium_type_id'] . '">' . $pt['description'] . '</option>';
                                        }

                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Премиум до</td>
                            <td>
                                <?php
                                $d = "";
                                if (isset($premium->date_end)) {
                                    $d = $premium->date_end;
                                }
                                echo '<input id="date_premium" name="premium_date" type="text" value="' . $d . '" />';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Регион</td>
                            <td>
                                <select name="region_id" id="region_id" class="">
                                <?php if (isset($region))
                                    foreach ($region as $r) {
                                        $selected = $r->region_id == $studio->region_id ? 'selected' : '';
                                        echo '<option ' . $selected .' value="' . $r->region_id. '">' . $r->name. '</option>';
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Город</td>
                            <td>
                                 <select name="city_id" id="city_id" disabled="disabled" class="">
                                    <option value="0">- выберите город -</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Адрес</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->address; ?>"
                                       id="in_adres"
                                       name="adres"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Метро</td>
                            <td>
                            <input id="in_metro" class="register_input" type="text" value="<?php echo $studio->metro;?>" name="metro"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Долгота</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->longitude; ?>"
                                       id="longitude"
                                       name="longitude"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Широта</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->latitude; ?>"
                                       id="latitude"
                                       name="latitude"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Телефон</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->phone; ?>"
                                       id="in_phone"
                                       placeholder="+7(495) 123 45 67" name="phone"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">E-mail</td>
                            <td><input type="text" class="register_input" value="<?php echo $email; ?>" id="in_email"
                                       name="email"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Название студии</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->name; ?>"
                                       id="in_name"
                                       name="name"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Контактное лицо</td>
                            <td><input class="register_input" type="text" value="<?php echo $studio->fio; ?>"
                                       id="in_fio"
                                       name="fio"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">URL</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->url; ?>"
                                       id="site_url"
                                       placeholder="http://site.ru" name="url"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Площадь</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->area; ?>"
                                       id="in_area"
                                       name="area"/></td>
                        </tr>

                        <tr>
                            <td class="table_td_first">Цены от</td>
                            <td><input type="text" class="register_input" value="<?php echo $studio->price; ?>"
                                       id="in_price"
                                       name="price"/></td>
                        </tr>                       
                        <tr>
                            <td class="table_td_first">Фотографии:</td>
                            <td>
                                <input type="file" name="images[]" id="add_photos" class="multi"
                                       accept="gif|jpg|png|jpeg|bmp" maxlength="8"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Примеры работ:</td>
                            <td>
                                <input type="file" name="musics[]" id="add_music" class="multi" accept="mp3"
                                       maxlength="8"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Новый пароль</td>
                            <td><input type="password" class="register_input" value="<?php echo $studio->price; ?>"
                                       id="in_password"
                                       name="edit_password"/></td>
                        </tr>
                        <tr>
                            <td class="table_td_first">Повторите пароль</td>
                            <td><input type="password" class="register_input" value="<?php echo $studio->price; ?>"
                                       id="in_password2"
                                       name="edit_password2"/></td>
                        </tr>

                    </table>
                </td>
                <td class="vertical_top">
                    <table class="register_table">
                        <tr>
                            <td class="table_td_first">Количество каналов <br>одновременной записи</td>
                            <td><textarea rows="3" class="register_input" type="text" id="count_record"
                                          name="count_record"><?php echo $studio->count_channel; ?></textarea>
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
                            <td class="table_td_first">Подробно о студии</td>
                            <td><textarea class="register_input" rows="3" id="in_about"
                                          name="in_about"><?php echo $studio->more; ?></textarea></td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sbmbuttonedit" class="ui_button common" id="register_studio"
                           value="Сохранить"/></td>
            </tr>
        </table>
    </form>


    <?php
    if ($musics->count() > 0) {
        ?>
        <div class="middle_text">Примеры работ студии</div>
        <div class="music">
            <?php
            $i_c = 0;
            if (isset($musics))
                foreach ($musics as $m) {
                    $i_c++;
                    ?>

                    <p>
                        <input type="hidden" class="music_id" value="<?php echo $m->id; ?>" />
                        <input type="text" class="description_music" value="<?php echo $m->description; ?>" />
                        <object width="300" height="40" data="/player.swf" type="application/x-shockwave-flash">
                            <param name="movie" value="/player.swf"/>
                            <param name="flashvars"
                                   value="path_mp3=/files/<?php echo $m->user_id; ?>/musics/<?php echo $m->url; ?>.mp3&name_mp3=&w=300&h=40&cbf=0xff0099&cb=0xffffff&cif=0xcccccc&ci=0xCF3584&cbuf=0xdddddd&ct=0xCF3584&auto=no"/>
                            <param name="wmode" value="transparent"/>
                        </object>
                        <a class="rmlink" href="/adminDelete/music/<?php echo $m->id; ?>" class="pink">Удалить</a>
                    </p>
                <?php

                }
            ?>


        </div>
    <?php

    }


    ?>




    <?php
    if ($photos->count() > 0) {
        ?>
        <p class="font_type">Фотографии студии</p>
        <div>
            <div class="horizontal2">
                <div class="horizontal">

                    <div class="carousel">
                        <a class="carousel_prev carousel_left" href="">prev</a>

                        <div class="carousel_container">
                            <ul class="portfolio_items">
                                <?php
                                foreach ($photos as $p) {
                                    ?>
                                    <li>
                                        <div class="inner">
                                            <a rel="lightbox[roadtrip]" class="gallery_a"
                                               href="/files/<?php echo $studio->user_id . "/images/" . $p->url; ?>.png">Просмотреть</a>
                                            <a href="/adminDelete/photo/<?php echo $p->id; ?>"
                                               class="gallery_a margin50">Удалить</a>
                                            <img
                                                src="/files/<?php echo $studio->user_id . "/images/prev_" . $p->url; ?>.png"
                                                width="150" height="90"></div>
                                    </li>
                                <?php

                                }
                                ?>
                            </ul>
                        </div>
                        <a class="carousel_next carousel_right" href="">next</a>
                    </div>
                </div>
            </div>
        </div>

    <?php

    }

    ?>

<?php
}
?>

<?php
if (isset($studio)) {
    $config = new Model_Configuration();
    $adress = $studio->address;
    $key = $config->mapKey;
    $coord = array(37.6227, 55.7464);
    $adress1 = urlencode($adress);
    try {
        $url = "http://geocode-maps.yandex.ru/1.x/?geocode=" . $adress1 . "&key=" . $key;
        $content = file_get_contents($url);
        preg_match('/<pos>(.*?)<\/pos>/', $content, $point);
        $coordinaty = str_replace(' ', ', ', trim(strip_tags($point[1])));
        $coordinaty = str_replace(' ', '', $coordinaty);
        $coord = explode(",", $coordinaty);
        if (!isset($coord[0]) || !isset($coord[1])) {
            $coord = array(37.6227, 55.7464);
        }
    } catch (Exception $e) {
        $coord = array(37.6227, 55.7464);
    }
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
        //temp_z += valid_register_form('site_url');
        temp_z += valid_register_form('in_metro');
        temp_z += valid_register_form('in_area');
        //temp_z += valid_register_form('count_record');
        //temp_z += valid_register_form('in_park');
        temp_z += valid_register_form('in_name');
        temp_z += valid_register_form('in_email');
        temp_z += valid_register_form('in_price');
        temp_z += valid_register_form('in_musics');
        temp_z += valid_register_form('in_fio');
        temp_z += valid_register_form('in_about');
        if (jQuery('input[name="studio_type"]:checked').size() == 0) {
            jQuery('.finde_chech_top').css('background', '#FF5656');
            temp_z += 1;
        } else {
            jQuery('.finde_chech_top').css('background', '#FFFFFF');
        }


        if (jQuery('.check_register:checked').size() == 0) {
            jQuery('.check_bottom').css('background', '#FF5656');
            temp_z += 1;
        } else {
            jQuery('.check_bottom').css('background', '#FFFFFF');
        }

        var password = jQuery('#in_password').val();
        var password2 = jQuery('#in_password2').val();
        if (password != password2 && password != "") {
            jQuery('#in_password2').css('background', '#FF5656');
            jQuery('#in_password').css('background', '#FF5656');
            temp_z += 1;
        } else {
            jQuery('#in_password').css('background', 'none');
            jQuery('#in_password2').css('background', 'none');
        }

        if (temp_z > 0) return false;

        return true;

    }


    jQuery(function () {
        jQuery('#in_password').val("");
        jQuery('#in_password2').val("");

        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данное изображение?");
        })

        jQuery('.mus_remove').click(function () {
            return confirm("Вы действительно хотите удалить данный пример работы?");
        })
        jQuery('.carousel').elegantcarousel({
            delay: 50,
            fade: 300,
            slide: 500,
            effect: 'fade',
            orientation: 'horizontal',
            loop: false,
            autoplay: false,
            time: 5000      });

        jQuery.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
                'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            dateFormat: 'yy-mm-dd',
            yearSuffix: ''};
        jQuery.datepicker.setDefaults($.datepicker.regional['ru']);

        jQuery("#date_premium").datepicker();


        $("#in_phone").mask("+7(999) 999 99 99");

        jQuery('.register_input').focusout(function () {
            if (jQuery(this).val() != "") {
                jQuery(this).removeAttr('style');
            } else {
                jQuery(this).css('background', '#FF5656');
            }
        });
        jQuery('input[name="studio_type"]').click(function () {
            jQuery('.finde_chech_top').css('background', '#FFFFFF');
        });

        jQuery('.check_register,.check_register+label').click(function () {
            if (jQuery('.check_register:checked').size() == 0) {
                jQuery('.check_bottom').css('background', '#FF5656');
            } else {
                jQuery('.check_bottom').css('background', '#FFFFFF');
            }
        });


    });
</script>

<?php
if (isset($studio)) {
    ?>
    <script type='text/javascript'>

        var s1 = "/images/icons/studio.png";
        // Создание стиля для примиум
        var s2 = "/images/icons/me.png";


        var latitude = <?php if ($studio->latitude) echo $studio->latitude; else echo "-1"; ?>;
        var longitude = <?php if ($studio->longitude)echo $studio->longitude;else echo "-1"; ?>;
        var firstRun = true;
        var region_id = <?php echo $studio->region_id;?>; 
        var city_id = <?php echo $studio->city_id;?>; 
        ymaps.ready(init);


        function init() {

            function geoCoordinate() {
                if (latitude != -1 && longitude != -1) {
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
                    iconImageHref: s<?php if ($studio->premium) echo 2; else echo 1; ?>,
                    iconImageSize: [38, 38],
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

        jQuery(function () {
            $('#region_id').change(function () {
                var region_id = $('#region_id :selected').val();
                if (region_id == '0') {
                    $('#city_id').html('<option>- выберите город -</option>');
                    $('#city_id').attr('disabled', true);
                    return(false);
                }
                $('#city_id').attr('disabled', true);
                $('#city_id').html('<option>загрузка...</option>');
                var url = '/ajax/getCityesByRegion/';      
                $.get(
                    url,
                    "region_id=" + region_id,

                    function (result) {
                        if (result.type == 'error') {
                            alert('error');
                            return(false);
                        }
                        else {
                            var options = '';
                            $(result).each(function(k, val) {
                                var selected = (firstRun && val['city_id'] == city_id) ? 'selected' : '';
                                options += '<option ' + selected + ' value="' + val['city_id'] + '">' + val['name'] + '</option>';
                            });
                            $('#city_id').html('<option>- выберите город -</option>'+options);
                            $('#city_id').attr('disabled', false).trigger('refresh');
                            firstRun = false;
                        }
                    },
                        "json"
                    );
            });

            $( "#in_metro" ).autocomplete({
                source: function( request, response ) {
                    var city_id = parseInt($('#city_id').val());
                    if (!city_id) return;
                    var url = '/ajax/metroAutoComplete?';
                    url += 'region_id=' + $('#region_id').val();
                    url += '&city_id=' + city_id;
                    url += '&name=' + this.term;
                    $.getJSON(url, {
                    }, response );
                },
                    minLength: 2
            });
            $('#region_id').trigger('change');
            $('input[type=checkbox]').prettyAM();
            $('input[type=radio]').prettyAM();
         
            prepareUploadBtn();

            jQuery('.description_music').change(function(){
                var desc = jQuery(this).val();
                var id = jQuery('.music_id',jQuery(this).parent()).val();
                $.ajax({
                    type: "POST",
                    url: "/adminSave/musicDescription",
                    data: "id="+id+"&desc="+desc,
                    success: function(msg){
                    }
                });
            })

            var width = $(".span5").width()+200;
            jQuery("#YMapsID").css('width',width);
            $(window).resize(function(){
                //здесь ваш код
                //вам также доступны параметры с размером окна
                var width = $(".span5").width()+200;
                jQuery("#YMapsID").css('width',width);

            });

            $("#in_phone").mask("+7(999) 999 99 99");

            jQuery('#in_price').change(function(){
                var price = parseInt(jQuery('#in_price').val());
                if (price < 500){
                    jQuery('#studio_freel').trigger('click');
                }
                if (price >= 500 && price <900){
                    jQuery('#studio_price').trigger('click');
                }
                if (price >= 900){
                    jQuery('#studio_top').trigger('click');
                }
            });

        });
        
        function prepareUploadBtn() {
        $('#uploadBtn').ajaxUpload({
        url : "/AdminSave/putavatar/?user_id=<?php echo $studio->user_id; ?>",
        name: "photo",
        onSubmit: function() {
           // $('#InfoBox').html('Uploading ... ');
           $('#loading_ava').show();
        },
        onComplete: function(result) {            
            var result = result || false;
            // $('#InfoBox').html('');
            if ('ERROR' != result) {                     
                $('#avatar img').attr('src', result);                
                $('#loading_ava').hide();
                $('#rmAva').show();
            }
            
        }
        });        
    }
        function rmAva() {
        $.get('/AdminSave/delavatar/?user_id=<?php echo $studio->user_id; ?>', null, function (data){
            if ('OK' == data) {
                $('#avatar img').attr('src','/images/no_photo.gif');
                $('#rmAva').hide();
            }
        })};

    </script>
<?php
}
?>
