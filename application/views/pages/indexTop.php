<?php
$works = new Model_Work();
$works_temp = $works->find_all();

?>

<div class="m_context_block clearfix">
    <div class="left">
        <h2 class="p_l_10">Ассоциация студий звукозаписи</h2>
        <p>Вы ищете студию звукозаписи? В базе данных студий Вы найдете то, что Вам нужно по оптимальному сочетанию Цена/Качество. Так же в Вашем распоряжении инженеры по сведению и мастерингу, аранжировщики, фрилансеры и домашние студии.</p>
        <p class="cherry m_t_20"><strong>Audiome</strong> помогает найти интересующие Вас услуги студий звукозаписи легко и быстро по заданным параметрам.</p>
    </div>
    <div class="right">
        <div class="search_block_wrapper">
        <div class="search_block">
            <form method="post" action="/" id="search_form1" onsubmit=" return valid_form_search()">
                    <input type="submit" style="display: none;" id="btn_search_hidden" name="btnsearch"
                           class="finde_btn"
                           value="Найти студию"/>
                <div class="f_data_select close">
                    <div class="arr arrowBlock"></div>
                    <div id="chooseType" class="arrowContent">
                        <h3>Выберите категорию</h3>
                        <span>Для каких целей вам студия?</span>
                    </div>
                    <div class="finde_chech_top sliderblock"
                         style="<?php if (!isset($class1) && !isset($class3) && !isset($class3)) {
                             echo "display: none;";
                         } ?>">
                        <p class="p_top">
                            <input type="checkbox" <?php if (isset($class1)) {
                                echo "checked";
                            } ?> class="search_checked_class" id="studio_top" value="1" name="studio_top"/>
                            <label for="studio_top">от 900 руб. / час</label>
                        </p>

                        <p class="p_price">
                            <input type="checkbox" <?php if (isset($class2)) {
                                echo "checked";
                            } ?> class="search_checked_class" id="studio_price" value="2" name="studio_price"/>
                            <label for="studio_price">от 500 до 900 руб. / час</label>
                        </p>

                        <p class="p_freel">
                            <input type="checkbox" <?php if (isset($class3)) {
                                echo "checked";
                            } ?>  class="search_checked_class" id="studio_freel" value="3" name="studio_freel"/>
                            <label for="studio_freel">до 500 руб. / час</label>
                        </p>
                    </div>
                </div>
                <div class="f_data_select">
                    <div class="arr arrowBlock"></div>
                    <div id="chooseWork" class="arrowContent">
                        <h3>Виды услуг</h3>
                        <span>Выберите из списка нужные услуги.</span>
                    </div>
                    <div class="check_bottom sliderblock" style="<?php if (!isset($sworks)) {
                        echo "display: none;";
                    } ?>">
                        <?php
                        if (isset($works_temp))
                            foreach ($works_temp as $w) {
                                ?>
                                <p>
                                    <input type="checkbox"
                                           class="search_checked_works" <?php if (isset($sworks) && (array_search($w->id, $sworks) !== false)) {
                                        echo "checked";
                                    } ?>  id="find_check<?php echo $w->id; ?>" value="<?php echo $w->id; ?>"
                                           name="find_check<?php echo $w->id; ?>"/>
                                    <label for="find_check<?php echo $w->id; ?>"><?php echo $w->name;  ?></label>
                                </p>

                            <?php
                            }
                        ?>
                    </div>
                </div>
                <input class="ui_button submit dark" value="Искать!" id="search_studios_root" type="button">
            </form>
        </div>
        </div>
    </div>
</div>

<div class="map_block clearfix">
    <div class="left">
        <h2 class="p_l_10">Студии звукозаписи на карте:</h2>
        <div class="map mapIndex" id="YMapsID"></div>
    </div>
    <div class="right">
        <div class="wrap">
            <h2>Только в Москве более <strong class="robo">500</strong> студий звукозаписи!</h2>
            <p>Задайте параметры для поиска, чтобы увидеть на карте именно те студии, которые максимально отвечают <strong>именно вашим требованиям!</strong></p>
        </div>
    </div>
</div>

<script type='text/javascript'>

    jQuery(function () {
        $('input[type=checkbox]').prettyAM();
        $('input[type=radio]').prettyAM();
        jQuery('#root_page').addClass("menu_active");
        jQuery('.arrowBlock').on('click', function() {
            $(this).parent().find('.arrowContent').trigger('click');
        });
	jQuery('#chooseType, #chooseWork').on('click', function (e) {
		$(this).parent().find('.arrowBlock').toggleClass('arr_opened');
		$(this).parent().children('.sliderblock').toggle('show');
	});
    })


    // Создание обработчика для события window.onLoad
    YMaps.jQuery(function () {
        // Создание экземпляра карты и его привязка к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

        // Установка для карты ее центра и масштаба
        map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 11);

        // Создание обычных студий
        var s1 = new YMaps.Style();
        s1.iconStyle = new YMaps.IconStyle();
        s1.iconStyle.href = "/images/icons/studio.png";
        s1.iconStyle.size = new YMaps.Point(38, 38);
        s1.iconStyle.offset = new YMaps.Point(-9, -29);

        // Создание стиля для примиум
        var s2 = new YMaps.Style();
        s2.iconStyle = new YMaps.IconStyle();
        s2.iconStyle.href = "/images/icons/me.png";
        s2.iconStyle.size = new YMaps.Point(38, 38);
        s2.iconStyle.offset = new YMaps.Point(-9, -29);


// координаты объекта
        <?php

         $rating = new Model_Rating();
         if (isset($studios))
            foreach ($studios as $st){
            if ($st->latitude != null && $st->longitude){
             $ratings = $rating->where('user_id', '=', $st->user_id)->find_all();
        $mark = 1;
        $count = 0;

        if ($ratings->count() > 0) {
            $count = $ratings[0]->count;
            $mark = $ratings[0]->mark;
        }
        ?>

        var placemark<?php echo $st->id; ?> = new YMaps.Placemark(new YMaps.GeoPoint(<?php echo $st->latitude; ?>, <?php echo $st->longitude; ?>), {style: s<?php if ($st->premium) echo 2;else echo 1; ?>});
        placemark<?php echo $st->id; ?>.name = '<a href="/studio/view/<?php echo $st->user_id; ?>"><?php echo addslashes($st->name); ?> </a>';
        placemark<?php echo $st->id; ?>.description = "<?php echo "Цена:".$st->price." руб/час рейтинг:".round($mark,2); ?> ";
        map.addOverlay(placemark<?php echo $st->id; ?>);

        var pm = placemark<?php echo $st->id;?>;
        YMaps.Events.observe(pm, pm.Events.MouseEnter, function (e) {
            e.openBalloon();
        });
        YMaps.Events.observe(pm, pm.Events.Click, function (e) {
            var loc = $(e.name).attr('href');
            window.location = loc;
            return false;
        });

        <?php
            }
            }
         ?>

        // map.addControl(new YMaps.ToolBar());
        map.addControl(new YMaps.Zoom());
        //map.addControl(new YMaps.ScaleLine());
    });
</script>
