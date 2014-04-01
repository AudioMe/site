<?php
$config = new Model_Configuration();
$m_city = new Model_City();
?>
<div id="notify_msg" bok="<?php var_export($notify_msg['bok']);?>" title="<?php echo $notify_msg['title'];?>">
    <p><?php echo $notify_msg['text'];?></p>
</div>

<div id="YMapsID" class="map_border ymap_search mapSearch" style=""></div>
<div class="s_studio_block">
<ul class="s_studio_list" id="studios">
    <?php
    if (isset($studios_premium))
        foreach ($studios_premium as $st) {
            $metro = new Model_Metro();
            $metro_temp = $metro->where('id', '=', $st->metro)->find();
            $comments = new Model_Comments();
            $comments_count = $comments->where('user_id', '=', $st->user_id)->find_all()->count();
            $image = strlen($st->photo) ? $st->photo : '/images/no_photo.gif';
            $rating = new Model_Rating();
            $city = $m_city
                ->where('country_id', '=', $st->country_id)
                ->where('region_id', '=', $st->region_id)
                ->where('city_id', '=', $st->city_id)
                ->find();
            $ratings = $rating->where('user_id', '=', $st->user_id)->find_all();
            $mark = 1;
            $count = 0;

            if ($ratings->count() > 0) {
                $count = $ratings[0]->count;
                $mark = $ratings[0]->mark;
            }
            ?>
        <li class="s_studio_item">
            <div class="wrap clearfix">
            <div class="s_studio_img logo">
                <a class="" href="/studio/view/<?php echo $st->user_id; ?>">
                    <img class="wh170" src="<?php echo $image;?>" />
                </a>
            </div>
                <div class="s_studio_body">
                    <a class="" href="/studio/view/<?php echo $st->user_id; ?>">
                        <h3> <?php echo $st->name; ?> </h3>
                    </a>
                    <div class="clearfix">
                        <dl class="studio_prop_list">
                            <dt class="micro">Категория:</dt><dd><?php echo $config->studio_class[$st->class]; ?></dd>
                            <dt class="point">Город:</dt><dd><?php echo $city->name; ?></dd>
                            <dt class="map">Адресс:</dt><dd><?php echo  $st->address; ?></dd>
                            <?php if(strlen($st->metro)){?>
                            <dt class="metro">Метро:</dt><dd><?php echo $st->metro; ?></dd>
                            <?php } ?>
                            <dt class="data">Стоимость:</dt><dd>от <strong class="cherry"><?php echo $st->price;?></strong> руб/час</dd>
                        </dl>
                        <div class="s_rating_box">
                            <h3>Рейтинг студии:</h3>
                            <div class="star_block rating_studio" data-average="<?php echo str_replace(',', '.', round($mark, 1));?>"></div>
                            <div class="vote_count">(<?php echo $count;?> голосов)</div>
                        </div>
                    </div>
                    <div class="s_studio_bottom">
                        <span class="s_studio_desc">
                            <?php if(isset($st->more)) echo $st->more;?>
                        </span>
                        <a class="ui_button" href="/studio/view/<?php echo $st->user_id; ?>">
                            Подробнее о студии
                        </a>
                    </div>
                </div>
            </div>
        </li>

        <?php

        }
    ?>

    <?php
    if (isset($studios_no_premium))
        foreach ($studios_no_premium as $st) {
            $metro = new Model_Metro();
            $metro_temp = $metro->where('id', '=', $st->metro)->find();
            $comments = new Model_Comments();
            $comments_count = $comments->where('user_id', '=', $st->user_id)->find_all()->count();
            $image = strlen($st->photo) ? $st->photo : '/images/no_photo.gif';
            $city = $m_city
                ->where('country_id', '=', $st->country_id)
                ->where('region_id', '=', $st->region_id)
                ->where('city_id', '=', $st->city_id)
                ->find();

            $rating = new Model_Rating();
            $ratings = $rating->where('user_id', '=', $st->user_id)->find_all();
            $mark = 1;
            $count = 0;

            if ($ratings->count() > 0) {
                $count = $ratings[0]->count;
                $mark = $ratings[0]->mark;
            }
            ?>
        <li class="s_studio_item">
            <div class="wrap clearfix">
            <div class="s_studio_img">
                <a class="" href="/studio/view/<?php echo $st->user_id; ?>">
                    <img class="wh170" src="<?php echo $image;?>" />
                </a>
            </div>
                <div class="s_studio_body">
                    <a class="" href="/studio/view/<?php echo $st->user_id; ?>">
                        <h3><?php echo $st->name; ?></h3>
                    </a>
                    <div class="clearfix">
                        <dl class="studio_prop_list">
                            <dt class="micro">Категория:</dt><dd><?php echo $config->studio_class[$st->class]; ?></dd>
                            <dt class="point">Город:</dt><dd><?php echo $city->name; ?></dd>
                            <dt class="map">Адресс:</dt><dd><?php echo  $st->address; ?></dd>
                            <?php if(strlen($st->metro)){?>
                            <dt class="point">Метро:</dt><dd><?php echo $st->metro; ?></dd>
                            <?php } ?>
                            <dt class="data">Стоимость:</dt><dd>от <strong class="cherry"><?php echo $st->price;?></strong> руб/час</dd>
                        </dl>
                        <div class="s_rating_box">
                            <h3>Рейтинг студии:</h3>
                            <div class="star_block rating_studio" data-average="<?php echo str_replace(',', '.', round($mark, 1));?>"></div>
                            <div class="vote_count">(<?php echo $count;?> голосов)</div>
                        </div>
                    </div>
                    <div class="s_studio_bottom">
                        <span class="s_studio_desc">
                            <?php if(isset($st->more)) echo $st->more;?>
                        </span>
                        <a class="ui_button" href="/studio/view/<?php echo $st->user_id; ?>">
                            Подробнее о студии
                        </a>
                    </div>
                </div>
            </div>
        </li>

        <?php

        }
    ?>

</ul>
</div>
<?php
$studios_all = array_merge($studios_premium, $studios_no_premium);
?>

<script type="text/javascript">
    jQuery(function () {
        jQuery(".rating_studio").jRating({
            length: 5,
            showRateInfo: false,
            decimalLength: 1,
            isDisabled: true
        });
    })
</script>

<script type='text/javascript'>
    var opts = {
        width: 380,
            position: { at: "center center" }
    };
    if ('true' == $('#notify_msg').attr('bok')) {
        opts.buttons = {
            'ok': function() {
                $(this).dialog('close');
            }
        }
    }

    $('#notify_msg').dialog(opts);


    // Создание обработчика для события window.onLoad
    YMaps.jQuery(function () {
        // Создание экземпляра карты и его привязка к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);
        var points = [];

        // Установка для карты ее центра и масштаба
        map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 11);

        // Создание стиля для фрилансеров
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
        if (isset($studios_all))
            foreach ($studios_all as $st){
            if ($st->latitude != null && $st->longitude){
             $mark = 1;
        $count = 0;
         $ratings = $rating->where('user_id', '=', $st->user_id)->find_all();
        if ($ratings->count() > 0) {
            $count = $ratings[0]->count;
            $mark = $ratings[0]->mark;
        }
        ?>
        points.push(new YMaps.GeoPoint(<?php echo $st->latitude;?>, <?php echo $st->longitude;?>));
        var placemark<?php echo $st->id; ?> = new YMaps.Placemark(new YMaps.GeoPoint(<?php echo $st->latitude; ?>, <?php echo $st->longitude; ?>), {style: s<?php if ($st->premium) echo 2;else echo 1; ?>});
        placemark<?php echo $st->id; ?>.name = '<a href="/studio/view/<?php echo $st->user_id; ?>"><?php echo addslashes($st->name); ?> </a>';
        placemark<?php echo $st->id; ?>.description = "<?php echo "Цена:".$st->price." руб/час рейтинг:".round($mark,2); ?>";
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
        map.addControl(new YMaps.ToolBar());
        map.addControl(new YMaps.Zoom());
        map.addControl(new YMaps.ScaleLine());
        bounds = new YMaps.GeoCollectionBounds(points);
        map.setBounds(bounds);
    });
</script>
