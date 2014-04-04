<script type="text/javascript" src="/js/jquery.MultiFile.js"></script>
<?php
$msg = Arr::get($_GET, 'error', -1);
if ($msg != -1) {

    ?>
    <h2 style="text-align: center; color: red; font-size: 18px;">Логин или пароль введены неправильно</h2>
<?php
}
?>

<form method="post" id="register_form1" enctype="multipart/form-data" action="/registers/user" onsubmit="return valid_form()" >
    <input type="hidden" value="" id="formreg2" name="formreg2"/>
                    <h2 class="p_l_10">Анкета</h2>
                    <div class="worksheet_block clearfix">
                        <form method="post">
                            <div class="left">
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="address">Регион:</label></div>
                                    <div class="value">
                                        <select name="region_id" id="region_id" class="reg_sel_styler">
                                        <?php if (isset($region))
                                            foreach ($region as $r) {
                                                echo '<option value="' . $r->region_id. '">' . $r->name. '</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="address">Город:</label></div>
                                    <div class="value">
                                         <select name="city_id" id="city_id" disabled="disabled" class="reg_sel_styler">
                                            <option value="0">- выберите город -</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="address">Адрес:</label></div>
                                    <div class="value"><input type="text" id="in_adres" name="adres" class="ui_input" /></div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Станция метро:</label></div>
                                    <div class="value">
                                        <input type="text" class="ui_input" id="in_metro" name="metro"/>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="phone">Телефон:</label></div>
                                    <div class="value"><input type="text" id="in_phone" autocomplete="off" name="phone" placeholder="+7(495) 123 45 67" class="ui_input" /></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>E-mail:</label></div>
                                    <div class="value"><input type="text" id="in_email" name="email" class="ui_input" /></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Название студии:</label></div>
                                    <div class="value"><input type="text" id="in_name" name="name" class="ui_input" /></div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Время работы:</label></div>
                                    <div class="value"><input type="text" id="in_time" name="time" class="ui_input" /></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Сайт:</label></div>
                                    <div class="value"><input type="text" name="url" id="site_url" placeholder="http://site.ru" class="ui_input" /></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Площадь:</label></div>
                                    <div class="value"><input type="text" maxlength="3" id="in_area" name="area"class="ui_input register_spinner" /></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Цены от:</label></div>
                                    <div class="value"><input id="in_price" name="price" type="text" class="ui_input" /></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Контактное лицо:</label></div>
                                    <div class="value"><input type="text" id="in_fio" name="fio" class="ui_input" /></div>
                                </div>


                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Аватар:</label></div>
                                    <div class="value">
                                        <input type="file" name="photo" id="add_photo" class="multi"
                                               accept="gif|jpg|png|jpeg|bmp" maxlength="1"/>
                                    </div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Фотография:</label></div>
                                    <div class="value">
                                        <input type="file" name="images[]" id="add_images" class="multi"
                                               accept="gif|jpg|png|jpeg|bmp" maxlength="1"/>
                                    </div>
                                </div>
                            </div>

                            <div class="right">
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Количествово каналов одновременной записи:</label></div>
                                    <div class="value">
                                        <input type="text" maxlength="3" class="register_spinner ui_input" type="text" id="count_record" name="count_record">
                                    </div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Парк микрофонов:</label></div>
                                    <div class="value"><textarea id="in_park" name="in_park" class="ui_textarea"></textarea></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Муз. оборудование:</label></div>
                                    <div class="value"><textarea id="in_musics" name="in_musics" class="ui_textarea"></textarea></div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Подробно о студии:</label></div>
                                    <div class="value"><textarea id="in_about" name="in_about" class="ui_textarea"></textarea></div>
                                </div>

                                <div class="clearfix p_t_20">
                                    <div class="desc"><label>&nbsp;</label></div>
                                    <div class="value">
                                        <img id="captcha" src="/register/getCaptcha" alt="CAPTCHA" /><br/>
                                        <input type="text" id="captcha_code" style="width:80px;" class="ui_input" name="captcha_code" size="10" maxlength="6" />
                                        <a href="#" id="recaptcha_reload" onclick="document.getElementById('captcha').src = '/register/getCaptcha?' + Math.random(); return false">[ Другая картинка]</a>
                                        </br>
					<label id="ltoc" for="toc">Согласен с <a target="_blank" href="/toc">Правилами</a> ресурса</label>&nbsp;&nbsp;<input type="checkbox" id="toc"/>
                                        </br>
                                        </br>
                                        <input type="submit" name="sbmbuttonregister" value="Отправить на модерацию" class="ui_button w_100" />
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
</form>

<div class="overlay" id="overlay" style="display:none;"></div>
<div class="box" id="box">
    <a class="boxclose" style="display: none" id="boxclose"></a>
    <div id="message_text"></div>
</div>
<script type="text/javascript">
    function show_close(){
        jQuery('#boxclose').css('display','block');
    }
    function valid_form() {
        var msg = jQuery('#register_form2').serialize();
        jQuery('#formreg2').val(msg);
        var temp_z = 0;
        // ltoc
        if (!$('#toc:checked').length) {
            $('#ltoc').css('background', '#ffc0cb');
            console.log('h1');
        }
        else {
            $('#ltoc').css('background', '');
        console.log('h2');
        }
        temp_z += valid_register_form('region_id');
        temp_z += valid_register_form('city_id');
        temp_z += valid_register_form('in_adres');
        //temp_z += valid_register_form('in_phone');
        // temp_z += valid_register_form('site_url');
        //temp_z += valid_register_form('in_area');
        temp_z += valid_register_form('count_record');
        // temp_z += valid_register_form('in_park');
        //temp_z += valid_register_form('in_time');
        temp_z += valid_register_form('in_name');
        temp_z += valid_register_form('in_email');
        temp_z += valid_register_form('in_price');
        // temp_z += valid_register_form('in_musics');
        temp_z += valid_register_form('in_fio');
        temp_z += valid_register_form('in_about');
        if (jQuery('input[name="studio_type"]:checked').size() == 0) {
            jQuery('.box_categories').css('background', '#ffc0cb');
            temp_z += 1;
        } else {
            jQuery('.box_categories').css('background', '#FFFFFF');
        }


        if (jQuery('.check_register:checked').size() == 0) {
            jQuery('.box_works').css('background', '#ffc0cb');
            temp_z += 1;
        } else {
            jQuery('.box_works').css('background', '#FFFFFF');
        }
        if (temp_z > 0) return false;

        //jQuery("#message_text").html("<h1>Сейчас вы будете зарегистрированы, вы можете дождаться окончания, либо продолжать пользоваться сайтом</h1><p style='text-align: center; padding-top: 10px;'><a style='color: #F50073; font-size: 18px;' href='/about'>Вы также можете вступить в ассоциацию</a></p>");
        //jQuery('#overlay').fadeIn('fast', function () {
        //    jQuery('#box').animate({'top': '160px'}, 500);
        //    setTimeout(show_close, 5000);
        //});
        return true;

    }



    function valid_register_form(id_element) {
        var target = $('#' + id_element + '-styler').length ? $('#' + id_element + '-styler').children('div.select') : $('#' + id_element);
        var value = jQuery('#' + id_element).val();
        if (id_element == 'city_id' || id_element == 'region_id') {
            if (!parseInt(value)) value = '';
        }
        if (value.length < 1 || $('#' + id_element).attr('disabled')) {
            target.css('background', '#ffc0cb');
            return 1;
        } else {
            target.removeAttr('style');
        }
        return 0;
    }

    jQuery('#register_form1').ajaxForm(function (data) {
        $('#recaptcha_reload').click();
        if ('EROR_CAPTCHA' == data) {
            $('#captcha_code').css('background-color', '#ffc0cb');
        }
	else if ('USER_EXISTS' == data) {
		$('#in_email').css('background-color', '#ffc0cb');
            jQuery("#message_text").html("<p style='color: #F50073; font-size:18px; text-align: center; padding-top: 10px;'>Пользователь с таким email уже существует</p>");
            jQuery('#overlay').fadeIn('fast', function () {
                jQuery('#box').animate({'top': '160px'}, 500);
		show_close();
            });
	}
        else
        {
            var body = 'Ваша студия успешно размещена в каталоге сайта AudioMe.ru.<br/>';
            body += 'Вы тоже можете присоединиться к нашей команде и получить';
            body += ' сертификат "Ассоциации студий звукозаписи", что безусловно повысит';
            body += ' рейтинг, укрепит Ваши позиции и престиж на рынке услуг в сфере звукозаписи.<br/>';
            body += ' При регистрации на срок более полугода и проверки достоверности';
            body += ' информации, Вы получаете сертификат "Ассоциации студий звукозаписи".';
            body += ' Зайдите в личный кабинет и нажмите: "Присоединиться!"<br/>';
            body += ' (Логин и пароль отправлены вам на почту)';
            jQuery("#message_text").html(data+"<p style='text-align: center; padding-top: 10px;'>" + body +"</p>");
            $('#captcha_code').css('background-color', '');
            $('#in_email').css('background-color', '');
            $('#register_form1').trigger('reset');
            $('#register_form2').trigger('reset');
            jQuery('#overlay').fadeIn('fast', function () {
                jQuery('#box').animate({'top': '160px'}, 500);
                setTimeout(show_close, 5000);
            });
        }
    });


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
                            options += '<option value="' + val['city_id'] + '">' + val['name'] + '</option>';
                        });
                        $('#city_id').html('<option>- выберите город -</option>'+options);
                        $('#city_id').attr('disabled', false).trigger('refresh');
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
        $("select").styler();
        $("#in_area").numericInput({ allowFloat: true, allowNegative: false});
        $("#in_area").spinner({min: 1, max: 999});
        $("#count_record").numericInput({ allowFloat: true, allowNegative: false});
        $("#count_record").spinner({min: 1, max: 999});
        $("#in_price").numericInput({ allowFloat: true, allowNegative: false});
        prettyRadio();

        $("#in_phone").mask("+7(999) 999 99 99");
        $('#sbmbuttonregister').tooltip();

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

        jQuery('.register_input, .register_spinner').focusout(function () {
            if (jQuery(this).val() != "") {
                jQuery(this).removeAttr('style');
            } else {
                jQuery(this).css('background', '#ffc0cb');
            }
        });
        jQuery('input[name="studio_type"]').click(function () {
            jQuery('.finde_chech_top').css('background', '#FFFFFF');
        });

        jQuery('.check_register,.check_register+label').click(function () {
            if (jQuery('.check_register:checked').size() == 0) {
                jQuery('.check_bottom').css('background', '#ffc0cb');
            } else {
                jQuery('.check_bottom').css('background', '#FFFFFF');
            }
        });

        jQuery('#activator').click(function () {
            jQuery('#overlay').fadeIn('fast', function () {
                jQuery('#box').animate({'top': '160px'}, 500);
            });
        });
        jQuery('#boxclose').click(function () {
            // $('#register_form1').trigger('reset');
            // $('#register_form2').trigger('reset');
            jQuery('#box').animate({'top': '-200px'}, 500, function () {
                jQuery('#overlay').fadeOut('fast');
            });
            // document.location.href = '/';
        });
    });
    function isPhotoFile(val) {
        var v = val.value;
        var v = v.search(/^.*\.(?:jpg|jpeg|gif|png|bmp)\s*$/ig)
        if (v != 0) {
            jQuery('#in_photo').val('');
        }
    }
</script>
