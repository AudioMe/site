<script type="text/javascript" src="/js/jquery.MultiFile.js"></script>
<script type="text/javascript" src="/js/ajaxupload.js"></script>
<script type="text/javascript" src="/js/jquery.form.js"></script>
<div class="progress_bar"><div class="progress-label">Идет загрузка...</div></div>
<?php
if (isset($studio)) {
    $add_photos = 0;
    $add_music = 0;
    if ($studio->premium && $package){
        $add_photos = ($package['features']['photo_count']-$photos->count());
        $add_music = ($package['features']['work_count']-$musics->count());
        if ($add_photos < 0)
            $add_photos = 0;
        if($add_music < 0)
            $add_music = 0;
    }else if ($package) {
        if ($photos->count() == 0)$add_photos = $package['features']['photo_count'];
        if ($musics->count() == 0)$add_music = $package['features']['work_count'];
    }                        
    
    ?>
    <br/>
    <h2 class="p_l_10"><?php echo $studio->name; ?> <span class="span_h1">(редактировать)</span></h2>

    <form method="post" id="register_form1" enctype="multipart/form-data" action="/EditSave/studio?ajax=true"
          onsubmit="return valid_form()">
    <input type="hidden" value="" id="formreg2" name="formreg2"/>
                    <div class="worksheet_block clearfix">
                        <form method="post">
                            <div class="left">
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="address">Регион:</label></div>
                                    <div class="value">
                                        <select name="region_id" id="region_id" class="">
                                        <?php if (isset($region))
                                            foreach ($region as $r) {
                                                $selected = $r->region_id == $studio->region_id ? 'selected' : '';
                                                echo '<option ' . $selected .' value="' . $r->region_id. '">' . $r->name. '</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="address">Город:</label></div>
                                    <div class="value">
                                         <select name="city_id" id="city_id" disabled="disabled" class="">
                                            <option value="0">- выберите город -</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="address">Адрес:</label></div>
                                    <div class="value">
                                        <input type="text" id="in_adres" name="adres" class="ui_input" value="<?php echo $studio->address;?>" />
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label for="phone">Телефон:</label></div>
                                    <div class="value">
                                        <input type="text" id="in_phone" name="phone" placeholder="+7(495) 123 45 67" class="ui_input" value="<?php echo $studio->phone;?>" />
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>E-mail:</label></div>
                                    <div class="value">
                                        <input type="text" id="in_email" name="email" class="ui_input" value="<?php echo $email;?>"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Название студии:</label></div>
                                    <div class="value">
                                        <input type="text" id="in_name" name="name" class="ui_input" value="<?php echo $studio->name; ?>"/>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Сайт:</label></div>
                                    <div class="value">
                                        <input type="text" name="url" id="site_url" placeholder="http://site.ru" class="ui_input" value="<?php echo $studio->url; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Площадь:</label></div>
                                    <div class="value">
                                        <input type="text" maxlength="3" id="in_area" name="area"class="ui_input register_spinner" value="<?php echo $studio->area; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Цены от:</label></div>
                                    <div class="value">
                                        <input id="in_price" name="price" type="text" class="ui_input" value="<?php echo $studio->price; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Контактное лицо:</label></div>
                                    <div class="value">
                                        <input type="text" id="in_fio" name="fio" class="ui_input" value="<?php echo $studio->fio; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Станция метро:</label></div>
                                    <div class="value">
                                        <input type="text" class="ui_input" id="in_metro" value="<?php echo $studio->metro;?>" name="metro"/>
                                    </div>
                                </div>

                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Фотографии:</label></div>
                                    <div class="value">
                                        <input type="file" name="images[]" id="add_photos" class="multi w_100" <?php if($add_photos == 0) echo 'disabled="disabled"';  ?>
                                               accept="gif|jpg|png|jpeg|bmp" maxlength="<?php echo $add_photos;  ?>"/>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Примеры работ:</label></div>
                                    <div class="value">
                                        <input type="file" name="musics[]" id="add_music" class="multi w_100" <?php if($add_music == 0) echo 'disabled="disabled"';  ?>  accept="mp3" maxlength="<?php echo $add_music;  ?>"/>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Текущий пароль:</label></div>
                                    <div class="value">
                                        <input type="password" class="ui_input" value="" id="cur_password" name="cur_password"/>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Новый пароль:</label></div>
                                    <div class="value">
                                        <input type="password" class="ui_input" value="" id="in_password" name="edit_password"/>
                                    </div>
                                </div>
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Повторите пароль:</label></div>
                                    <div class="value">
                                        <input type="password" class="ui_input" value="" id="in_password2" name="edit_password2"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Количествово каналов одновременной записи:</label></div>
                                    <div class="value">
                                        <input type="text" maxlength="3" class="register_spinner ui_input" type="text" id="count_record" name="count_record" value="<?php echo $studio->count_channel; ?>"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Парк микрофонов:</label></div>
                                    <div class="value">
                                        <textarea id="in_park" name="in_park" class="ui_textarea"><?php echo $studio->microphones;?></textarea>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Муз. оборудование:</label></div>
                                    <div class="value">
                                        <textarea id="in_musics" name="in_musics" class="ui_textarea"><?php echo $studio->music_tools;?></textarea>
                                    </div>
                                </div>
                                
                                <div class="clearfix m_b_10">
                                    <div class="desc"><label>Подробно о студии:</label></div>
                                    <div class="value">
                                        <textarea id="in_about" name="in_about" class="ui_textarea"><?php echo $studio->more;?></textarea>
                                    </div>
                                </div>

                                <div class="clearfix p_t_20">
                                    <div class="desc"><label class="p_l_66">Аватар:</label></div>
                                    <div class="value">
                                        <table>
                                            <tr>
                                                <td>
                                                    <?php if(strlen($studio->photo)) {?>                
                                                       <div id="avatar" class="studio_image avatar_block">
                                                           <img class="wh140 bround" src="<?php echo $studio->photo;?>">
                                                           <div id="loading_ava p_l_10"></div>                       
                                                       </div>
                                                   <?php

                                                   }
                                                   else {?>
                                                       <div id="avatar" class="studio_image avatar_block">
                                                           <img width="120" height="120" src="/images/no_photo.gif"/>
                                                           <div id="loading_ava"></div>
                                                       </div>
                                                   <?php
                                                   }
                                                   ?>
                                                </td>
                                                <td style="vertical-align: middle;" class="p_l_10">
                                                    <a id="uploadBtn" class="pink" href="#">загрузить</a><br/><br/>
                                                    <a id="rmAva" class="<?php if(!strlen($studio->photo)) echo 'hidden';?> pink" href="javascript:rmAva();">удалить</a><br/>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <div id="InfoBox"></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="clearfix p_t_20">
                                    <div class="desc"><label>&nbsp;</label></div>
                                    <div class="value">
                                        <input type="submit" name="sbmbuttonedit" class="ui_button w_100 common" id="register_studio" value="Сохранить"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
</form>

    <?php if ($musics->count() > 0) {?>
    <div class="p_example_block">
        <h3 class="p_l_20">Введите название трэка:</h3>
        <?php
        $i_c = 0;
        if (isset($musics))
            foreach ($musics as $m) {
                $i_c++;
                ?>
                <div class="audio_edit">
                    <div class="audio-input">
                        <input class="music_id" type="hidden" value="<?php echo $m->id; ?>"/>
                        <input name="description_music" value="<?php echo $m->description; ?>" type="text" class="ui_input description_music"/>
                    </div>
                    <div class="audio-player">
                        <!--  Change src to your song's-->
                        <audio id="pid_<?php echo $i_c;?> " class="player-item" src="/files/<?php echo $m->user_id; ?>/musics/<?php echo $m->url; ?>.mp3" type="audio/mp3" controls></audio>
                        <span class="player-time"></span>
                    </div>
                    <div class="audio-delete">
                        <a href="/remove/music/<?php echo $m->id; ?>">Удалить</a>
                    </div>
                </div>
                <div class="clear_b"></div>
            <?php

            }
        ?>
    </div>
                <div class="clear_b"></div>
    <?php } ?>


    <?php
    if ( $photos->count() > 0) {
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
                                            <a href="/remove/photo/<?php echo $p->id; ?>"  class="gallery_a margin50">Удалить</a>
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

    <div class="overlay" id="overlay" style="display:none;"></div>
    <div class="box" id="box">
        <a class="boxclose" id="boxclose"></a>

        <div id="message_text"></div>
    </div>
<?php
}
?>
<script type="text/javascript">
    var firstRun = true;
    var region_id = <?php echo $studio->region_id;?>; 
    var city_id = <?php echo $studio->city_id;?>; 

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

    function valid_form() {
        var msg = jQuery('#register_form2').serialize();
        jQuery('#formreg2').val(msg);
        var temp_z = 0;
        temp_z += valid_register_form('region_id');
        temp_z += valid_register_form('city_id');
        temp_z += valid_register_form('in_adres');
        temp_z += valid_register_form('in_phone');
        // temp_z += valid_register_form('site_url');
        // temp_z += valid_register_form('in_metro');
        temp_z += valid_register_form('in_area');
        temp_z += valid_register_form('count_record');
        // temp_z += valid_register_form('in_park');
        temp_z += valid_register_form('in_name');
        temp_z += valid_register_form('in_email');
        temp_z += valid_register_form('in_price');
        // temp_z += valid_register_form('in_musics');
        temp_z += valid_register_form('in_fio');
        temp_z += valid_register_form('in_about');
        if (jQuery('input[name="studio_type"]:checked').size() == 0) {
            jQuery('.finde_chech_top').css('background', '#ffc0cb');
            temp_z += 1;
        } else {
            jQuery('.finde_chech_top').css('background', '#FFFFFF');
        }


        if (jQuery('.check_register:checked').size() == 0) {
            jQuery('.check_bottom').css('background', '#ffc0cb');
            temp_z += 1;
        } else {
            jQuery('.check_bottom').css('background', '#FFFFFF');
        }

        var password = jQuery('#in_password').val();
        var password2 = jQuery('#in_password2').val();
        if (password != password2 && password != "") {
            jQuery('#in_password2').css('background', '#ffc0cb');
            jQuery('#in_password').css('background', '#ffc0cb');
            temp_z += 1;
        } else {
            jQuery('#in_password').css('background', 'none');
            jQuery('#in_password2').css('background', 'none');
        }
        if (temp_z > 0) return false;

        return true;

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
        $("select").styler();
          $('audio').mediaelementplayer({
            alwaysShowControls: true,
            features: ['playpause','progress','volume', 'current', 'duration'],
            audioVolume: 'horizontal',
            audioWidth: 490,
            audioHeight: 60,
            iPadUseNativeControls: true,
            iPhoneUseNativeControls: true,
            AndroidUseNativeControls: true,
          });
        $('.mejs-time').find('span:eq(1)').hide();
        $("select").styler();
        $("#in_area").numericInput({ allowFloat: true, allowNegative: false});
        $("#in_area").spinner({min: 1, max: 999});
        $("#count_record").numericInput({ allowFloat: true, allowNegative: false});
        $("#count_record").spinner({min: 1, max: 999});
        $("#in_price").numericInput({ allowFloat: true, allowNegative: false});

        $('#register_form1').ajaxForm({
            delegation: true,
	    dataType: 'json',
            beforeSend: function(arr, myform, options) {
              $(".progress_bar").progressbar().show();
            },
            beforeSubmit: function() {
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $(".progress_bar").progressbar( "option", {
                          value: Math.floor(percentComplete)
                        });
                if (percentComplete == 100 ) $(".progress_bar").hide();
            },
            error: function(xhr) {
              console.log('Connection error: ' + xhr.status + ' ' + xhr.statusText);
              $('#loading').hide();
            },
            success: function(response) {
		jQuery('#cur_password').css('background', '');
		if ('code' in response) {
 			if (0 == response.code) {
				location.reload();
				return;
			}
			else if (2 == response.code) {
				jQuery('#cur_password').css('background', '#ffc0cb');
				return;
			}
		}
		alert('Произошла ошибка');
		return;
            }
          });
        prepareUploadBtn();

        jQuery('.description_music').change(function(){
            var desc = jQuery(this).val();
            var id = jQuery('.music_id',jQuery(this).parent()).val();
            $.ajax({
                type: "POST",
                url: "/editSave/musicDescription",
                data: "id="+id+"&desc="+desc,
                success: function(msg){
                }
            });
        })
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

        jQuery('.img_remove').click(function(){
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

        jQuery('#in_password').val("");
        jQuery('#in_password2').val("");
        jQuery('.register_input').focusout(function () {
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

    });

    function isPhotoFile(val) {
        var v = val.value;
        var v = v.search(/^.*\.(?:jpg|jpeg|gif|png|bmp)\s*$/ig)
        if (v != 0) {
            jQuery('#in_photo').val('');
        }
    }
    function rmAva() {
        $.get('/EditSave/delAva', null, function (data){
            if ('OK' == data) {
                $('#avatar img').attr('src','/images/no_photo.gif?' + Date.now());
                $('#rmAva').hide();
            }
        });
    }
    function prepareUploadBtn() {
        $('#uploadBtn').ajaxUpload({
        url : "/EditSave/studioavatar",
        name: "photo",
        onSubmit: function() {
           // $('#InfoBox').html('Uploading ... ');
           $('#loading_ava').show();
        },
        onComplete: function(result) {            
            var result = result || false;
            // $('#InfoBox').html('');
            if ('ERROR' != result) {     
                $('#avatar img').attr('src', result + '?' + Date.now());
                $('#loading_ava').hide();
                $('#rmAva').show();
            }
            
        }
        });
    }
</script>
