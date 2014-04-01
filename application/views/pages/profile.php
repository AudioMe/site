<script src="/js/studio.js" type="text/javascript" charset="UTF-8"></script>
<style>
.YMaps-slider-content {
    top: -64px !important;
}
</style>
<?php
$config = new Model_Configuration();
?>

<script src="http://vk.com/js/api/openapi.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
    VK.init({
        apiId: <?php echo $config->vkKEY; ?>,
        onlyWidgets: true
    });
</script>

<?php
if (isset($studio)) {
$add_class = ($studio->premium) ? 'logo' : '';
    ?>
                    <div class="p_info_block clearfix studio_one">
                        <div class="p_logo_studia <?php echo $add_class;?>">
                            <img class="b_round wh170" src="<?= $studio->photo ?: '/images/img_cap.png'; ?>"/>
                        </div>
                        
                        <div class="center">
                            <h3 class="cherry"><?php echo $studio->name;?></h3>
                            <ul>
                                <li class="point"><?php echo $city->name;?></li>
                                <li class="map"><?php echo $studio->address;?></li>
                                <?php if(!empty($metro)) {?>
                                <li class="metro"><?php echo $metro;?></li>
                                <?php } ?>
                                <li class="micro"><?php echo $config->studio_class[$studio->class];?></li>
                                <li class="phone"><?php echo $studio->phone;?></li>
                            </ul>
                            
                            <div class="rating_block">
                            <?php
                            $cook = Cookie::get('audio_ration_' . $studio_id, '-1');
                            $rating = new Model_Rating();
                            $ratings = $rating->where('user_id', '=', $studio_id)->find_all();
                            $mark = 1;
                            $count = 0;

                            if ($ratings->count() > 0) {
                                $count = $ratings[0]->count;
                                $mark = $ratings[0]->mark;
                            }

                            ?>
                                <div class="star_block rating_studio" data-average="<?php echo str_replace(',', '.', round($mark, 1));?>"></div>
                                <div class="ratingText vote_count rating_count" style="">(<span
                                        id="rating_count"><?php echo $count;  ?></span> голосов, <?php echo $studio->view;  ?> просмотров)</div>
                            </div>
                        </div>
                        <div class="right">
                            <ul>
                                <li class="cost">
                                    от <?php echo $studio->price; ?> руб/час
                                </li>
                                <li class="world">
                                    <a href="<?php echo $studio_url;?>" target="_blank"><?php echo $studio->url;?></a>
                                </li>
                                <li class="mail">
                                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                </li>
                                <li class="clock"><?php echo $studio->time;?></li>
                            </ul>
                            <a href="/catalog" class="ui_button back">Назад в каталог</a>
                        </div>
                    </div>
                   <div class="share_block clearfix">
                        <div class="share_text">Поделится:</div>
                        <div class="share42init" data-title="<?php if (isset($news->title)) echo $news->title; ?>"></div>
                    </div>

                    <div class="p_about_block clearfix">
                        <div class="left">
                            <div class="wrap">
                                <h3>О студии</h3>
                                <p><?php echo $studio->more;?></p>
                            </div>
                        </div>
                        <div class="right">
                            <div id="YMapsID" class="studio_map map_border" style="width:350px;height:200px"></div>
                        </div>
                    </div>
                    
                    <div class="p_param_block clearfix">
                        <div class="left">
                            <ul class="param_list">
                                <li>
                                    <div class="wrap">
                                        <h4>Музыкальное оборудование:</h4>
                                        <div class="param_desc"><?php echo nl2br($studio->music_tools);?></div>
</div>
                                </li>
                                <li>
                                    <div class="wrap">
                                        <h4>Парк микрофонов:</h4>
                                        <div class="param_desc"><?php echo nl2br($studio->microphones);?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wrap clearfix">
                                        <div class="float_l w_50">
                                            <span class="h4" style="width: 174px;">Кол-во каналов одновременной записи:</span>
                                            <span class="cherry big"><?php echo $studio->count_channel; ?></span>
                                        </div>
                                        <div class="float_r w_50">
                                            <span class="h4" style="width: 134px;">Общая площадь студии:</span>
                                            <span class="cherry big"><?php echo $studio->area; ?>м<sup>2</sup></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wrap">
                                        <h4>Контактное лицо:</h4>
                                        <div class="param_desc">
                                            <?php echo $studio->fio;?><strong><?php echo $studio->phone?></strong>, <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="box_list">
                                <fieldset>
                                    <legend>Виды выполняемых работ</legend>
                                    <div class="list_body">
                                        <ul>
                                            <?php
                                            foreach ($work as $w) {
                                                echo "<li>" . $w->name . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    
                    <?php if ($musics->count() > 0) {?>
                    <div class="p_example_block">
                        <h3 class="p_l_20">Примеры работ студии</h3>
                        <?php
                        $i_c = 0;
                        if (isset($musics))
                            foreach ($musics as $m) {
                                $i_c++;
                                ?>
                                <div class="audio-player">
                                    <h2><?php echo $m->description; ?></h2>
                                    <!--  Change src to your song's-->
                                    <audio id="pid_<?php echo $i_c;?> " class="player-item" src="/files/<?php echo $m->user_id; ?>/musics/<?php echo $m->url; ?>.mp3" type="audio/mp3" controls></audio>
                                    <span class="player-time"></span>
                                </div>
                            <?php

                            }
                        ?>
                    </div>
                    <?php } ?>
                    <?php if ($photos->count() > 0) { ?>                    
                    <div class="p_photo_block">
                        <h3 class="p_l_20">Фотографии студии</h3>
                            <ul class="portfolio_items bxslider">
                            <?php
                            foreach ($photos as $p) { ?>
                                <li>
                                    <div class="inner">
                                        <a rel="lightbox[roadtrip]" href="/files/<?php echo $studio_id . "/images/" . $p->url; ?>.png">
                                            <img src="/files/<?php echo $studio_id . "/images/prev_" . $p->url; ?>.png" >
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>

    <!-- Begin Comments -->
    <?php

    function children($comments, $id)
    {
        $child_comments = array();
        foreach ($comments as $com) {
            if ($com->root == $id) {
                array_push($child_comments, $com);
            }
        }
        return $child_comments;
    }


    function print_comment($comment, $other_comments, $left)
    {
        $com_image = "/images/no_photo.gif";        
        if (!empty($comment->add_user_id)){
            $tstudios = new Model_Studios();
            $t_st = $tstudios->where('user_id','=',$comment->add_user_id)->find();
            
            if (isset($t_st->photo)){
                $com_image = $t_st->photo;
            }
            
        }
        ?>
        <ul class="root_comment comments_list" style="margin-left: <?php echo $left; ?>px;">
        <input type="hidden" value="<?php echo $comment->id; ?>" class="comment_id"/>
            <li class="comment_item comment">
                <div class="wrap clearfix comment">
                    <div class="comment_img">
                        <?php
                        if (isset($com_image) && strlen($com_image) > 3) {?>
                            <img class="wh60 m_r_7" src="<?php echo $com_image; ?>" class="comment_image">
                        <?php } ?>
                    </div>
                    <div class="comment_body">
                        <span class="comment_name"><?php echo $comment->name; ?></span>
                        <div class="comment_date">написано <?php echo $comment->date; ?></div>
                        <div class="comment_text"><?php echo $comment->text; ?></div>
                        <div class="comment_vote_block">
                            <span class="vote_yes like">
                                <em class="like_count">(<?php echo $comment->like; ?>)</em>
                            </span>
                            <span class="vote_no dlike">
                                <em class="dlike_count">(<?php echo $comment->dlike;?>)</em>
                            </span>
                            <a href="#" onclick="return false;" class="comment_replay select_color ansver">ответить</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <?php
        $child_comments = children($other_comments, $comment->id);
        foreach ($child_comments as $c) {
            print_comment($c, $other_comments, $left + 20);
        }

    }

    if (isset($comments) && count($comments) > 0) {
        $root_coments = array();
        $other_comments = array();
        foreach ($comments as $com) {
            if ($com->root == 0) {
                array_push($root_coments, $com);
            } else {
                array_push($other_comments, $com);
            }
        }
        ?>
        <div id="comments">

            <?php
            foreach ($root_coments as $comment) {
                print_comment($comment, $other_comments, 0);
            }

            ?>


        </div>
    <?php
    }
    ?>
    <div style="overflow: hidden">
        <div id="vk_comments2" style="margin: -150px 0 0 0;"></div>
    </div>


    <div id="wrapper" class="tab1">
        <ul class="commets_type_list clearfix">
            <li><a class="tab1 tabs_href" href="javascript:void(0);">Комментировать через AudioMe</a></li>
            <li><a class="tab2 tabs_href" href="javascript:void(0);">Комментировать через Вконтакте</a></li>
            <!-- <li><a href="#">Комментировать через Facebook</a></li> -->
        </ul>

        <div class="tab1">

            <div id="comment-form" class="comment-form tab1">

                <div id="respond" class="tab1 p_comments_block">
                    <form action="/addFree/comments/<?php echo $studio_id; ?>" onsubmit="return valid_form()"
                          method="post"
                          id="commentform">
                        <input type="hidden" value="0" id="root" name="root"/>
                        <div class="clerfix">
                            <div class="left">
                                <?php
                                $auth = Auth::instance();
                                $name = "";
                                $phone = "";
                                if ($auth->logged_in()) {
                                    $user_temp = $auth->get_user();
                                    $user_id = $user_temp->id;
                                    $studios = new Model_Studios();
                                    $studio_temp = $studios->where('user_id', '=', $user_id)->find();
                                    if (isset($studio_temp->name)) {
                                        $name = $studio_temp->name;
                                    }
                                    if (isset($studio_temp->phone)) {
                                        $phone = $studio_temp->phone;
                                    }
                                }

                                ?>
                                <?php if (!strlen($phone) || !strlen($name)) {?>
                                <div class="clearfix mtb7">
                                    <div class="float_l" style="width: 49%;">
                                        <input id="author" name="name" type="text" class="ui_input" placeholder="Ваше имя *" />
                                        </div>
                                    <div class="float_r" style="width: 49%;">
                                        <input id="phone" name="phone" type="text" class="ui_input" placeholder="Телефон" />
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="clearfix" style="margin-bottom: 7px;">
                                    <input id="author" name="name" value="<?php echo $name;?>" type="hidden" class="ui_input" placeholder="Ваше имя *" />
                                    <input id="phone" value="<?php echo $phone;?>" name="phone" type="hidden" class="ui_input" placeholder="Телефон" />
                                </div>
                                <?php } ?>

                                <div id="re_comment"><i>Re: <span></span></i></div>
                                <div class="m_b_5">
                                    <textarea class="ui_textarea" id="comment" name="comment" placeholder="Комментарий *" cols="45"
                                              rows="8" aria-required="true"></textarea>
                                </div>
                                <div class="form_legend"><span class="cherry">*</span> - обязательные поля для заполнения</div>
                            </div>
                            <div class="right buttonsC" style="padding-top:60px;">
                                <input name="btnsubmincomments" class="ui_button" type="submit" id="submit" value="Отправить"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab2">
            <div class="tab2 vk_comments" style="height: 150px; overflow: hidden">
                <div class="tab2" id="vk_comments"></div>
            </div>
        </div>
        <div class="tab3">
            <div class="tab3" style="height: 160px; overflow: hidden">
                <div class="tab3" id="vk_facebook"></div>
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
<script type="text/javascript">
    VK.Widgets.Comments('vk_comments2', {limit: 10});
</script>

<script type="text/javascript">
    VK.Widgets.Comments('vk_comments');
</script>


<script type="text/javascript">

    function valid_form() {
        var c_name = jQuery('#author').val();
        var c_comment = jQuery('#comment').val();
        var correct = true;
        if (c_name.length <= 1) {
            jQuery('#author').css('background', 'red');
            correct = false;
        } else {
            jQuery('#author').removeAttr('style');
        }

        if (c_comment.length <= 1) {
            jQuery('#comment').css('background', 'red');
            correct = false;
        } else {
            jQuery('#comment').removeAttr('style');
        }
        return correct;
    }
    jQuery(function () {
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

        jQuery('.ansver').click(function () {
            var parent = jQuery(this).parent().parent();
            console.log(parent);
            var st_name = (parent).find('.comment_name').html();
            $('#re_comment span').html(st_name);
            $('#re_comment').css('visibility', 'visible');
            parent = jQuery(this).parent().parent().parent().parent().parent();
            var id = jQuery('.comment_id', parent).val();
            jQuery('#root').val(id);
            jQuery('#comment').focus();
        });

        jQuery('.like').click(function () {
            var parent = jQuery(this).parent().parent().parent().parent().parent();
            console.log(parent);
            var id = jQuery('.comment_id', parent).val();
            jQuery.ajax({
                type: "POST",
                data: ({id: id}),
                url: "/addFree/like",
                dataType: "text",
                success: function (data) {
                    jQuery('.like_count', parent).text(data);
                }
            });


        })

        jQuery('.dlike').click(function () {
            var parent = jQuery(this).parent().parent().parent().parent().parent();
            var id = jQuery('.comment_id', parent).val();
            jQuery.ajax({
                type: "POST",
                data: ({id: id}),
                url: "/addFree/dlike",
                dataType: "text",
                success: function (data) {
                    jQuery('.dlike_count', parent).text(data);
                }
            });

        })

        jQuery("#phone").mask("+7(999) 999 99 99");
        var count_music = jQuery('.music p').size();
        jQuery('.music').css('height', (count_music * 50) + 'px');

        jQuery(".rating_studio").jRating({
            length: 5,
            showRateInfo: false,
            decimalLength: 1,
            <?php
                if ($cook != -1){
                    echo "isDisabled : true,";
                }
            ?>
            phpPath: '/rating/index/<?php echo $studio_id;  ?>',
            onSuccess: function () {
                var count = parseInt(jQuery('#rating_count').text());
                count++;
                jQuery('#rating_count').text(count);

            },
            onError: function () {
            }
        });


        jQuery('#boxclose').click(function () {
            $('#commentform').trigger('reset');
            jQuery('#box').animate({'top': '-200px'}, 500, function () {
                jQuery('#overlay').fadeOut('fast');
            });
        });

        jQuery('#wrapper a').click(function () {
            if (jQuery(this).attr('class') != jQuery('#wrapper').attr('class')) {
                jQuery('#wrapper').attr('class', jQuery(this).attr('class'));
            }
        });

        jQuery('.carousel').elegantcarousel({
            delay: 50,
            fade: 300,
            slide: 500,
            effect: 'fade',
            orientation: 'horizontal',
            loop: false,
            autoplay: false,
            time: 5000      });

    });

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
         if (isset($studio))

            if ($studio->latitude != null && $studio->longitude){
             $ratings = $rating->where('user_id', '=', $studio->user_id)->find_all();
        $mark = 1;
        $count = 0;

        if ($ratings->count() > 0) {
            $count = $ratings[0]->count;
            $mark = $ratings[0]->mark;
        }
        ?>
        map.setCenter(new YMaps.GeoPoint(<?php echo $studio->latitude; ?>, <?php echo $studio->longitude; ?>), 11);
        var placemark<?php echo $studio->id; ?> = new YMaps.Placemark(new YMaps.GeoPoint(<?php echo $studio->latitude; ?>, <?php echo $studio->longitude; ?>), {style: s<?php if ($studio->premium) echo 2;else echo 1; ?>});
        placemark<?php echo $studio->id; ?>.name = "<?php echo addslashes($studio->name); ?> ";
        placemark<?php echo $studio->id; ?>.description = "<?php echo "Цена:".$studio->price." руб/час рейтинг:".round($mark,2); ?> ";
        map.addOverlay(placemark<?php echo $studio->id; ?>);
        var pm = placemark<?php echo $studio->id;?>;
        YMaps.Events.observe(pm, pm.Events.MouseEnter, function (e) {
            e.openBalloon();
        });

        <?php
            }

         ?>

        // map.addControl(new YMaps.ToolBar());
        map.addControl(new YMaps.Zoom());
        //map.addControl(new YMaps.ScaleLine());
    });

</script>
