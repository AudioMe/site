<?php
$print_reclam = true;
$auth = Auth::instance();
$is_premium = false;
$user_id = -1;
$premium_end = date_create(date("Y-m-d"));

if ($auth->logged_in() && !$auth->logged_in("admin")) {
    $user_temp = $auth->get_user();
    $user_id = $user_temp->id;

    $comments = new Model_Studios();
    $studio_temp = $comments->where('user_id', '=', $user_id)->find();
    if (isset($studio_temp->id)) {
        $is_premium = $studio_temp->premium;
    }
}
?>

<?php
$studios = new Model_Studios();
if (!isset($count_studio)) {
    $count_studio = $studios->find_all()->count();
}
$date_end = $date_cur = null;

$difDate = null;
$user_premium = false;
$queue_package = false;
$curent_package = false;
$hide_premium = false;
$m_region = new Model_Region();
$regions = $m_region->find_all();
$m_city = new Model_City;

if (isset($is_premium) && $is_premium) {
    $package = DB::select()->from(array('premium', 'p'))
        ->join(array('premium_types','pt'))
        ->on('p.premium_type_id', '=', 'pt.premium_type_id')
        ->where('p.user_id', '=', $user_id)
        ->limit(1)->execute()->current();
    $print_reclam = false;
    if ($package) {
        $date_end = date_create($package['date_end']);
        $premium_end = $date_end;
        $date_cur = date_create(date("Y-m-d"));
        $difDate = date_diff($date_cur, $date_end);

        if ($date_cur < $date_end) {
            $user_premium = true;
            if (isset($hide_prem_mnu) && true === $hide_prem_mnu) { 
                $hide_premium = true;
            }
            else $hide_premium = false;
            $queue_package = Model_PremiumQueue::getUserQueue($user_id, array('pending', 'processed'));
            $curent_package = Model_Premium::getUserPackage($user_id);
            $day_suffix = Model_DataHelper::num2AlphaSuffix($difDate->days);
        }
    }
}
if (isset($profile)) {?>
    <a href="/edit" class="ui_button width_full">Редактировать информацию</a>
    <?php }
if (!$hide_premium) {
if ($user_premium){
    ?>
    <div class="p_filter_block div_finde">
        <fieldset>
            <legend>Членам ассоциации:</legend>
            <div class="fieldset_body">
                <ul class="list_with_icon">
                <li class="trash"><a id="menu_blacklist" href="/blacklist">Черный список</a></li>
                <?php
                if (3 == $package['level'] || 2 == $package['level']){ ?>
                    <li class="copy">
                        <a id="menu_addArticles" href="/AddArticles">Добавить статью</a>
                    </li>
                    <li class="attention">
                        <a id="menu_addnews" href="/AddNews">Добавить новость</a>
                    </li>
                    <li class="ticket">
                        <a id="menu_adddiscounts" href="/AddDiscount">Сообщить о скидках</a>
                    </li>
                    <li class="cash">
                        <a id="menu_buy" href="/Buy">Куплю-продам</a>
                    </li>
                    <li class="users">
                        <a id="menu_conference" href="/Conference">Обсуждения</a>
                    </li>
                <?}else {?>
                    <li class="copy">
                        <a id="menu_addArticles" href="/AddArticles">Добавить статью</a>
                    </li>
                    <li class="attention mnu_disabled">
                        <a id="menu_addnews" href="javascript:void(0)">Добавить новость</a>
                    </li>
                    <li class="ticket mnu_disabled">
                        <a id="menu_adddiscounts" href="javascript:void(0)">Сообщить о скидках</a>
                    </li>
                    <li class="cash mnu_disabled">
                        <a id="menu_buy" href="javascript:void(0)">Куплю-продам</a>
                    </li>
                    <li class="users mnu_disabled">
                        <a id="menu_conference" href="javascript:void(0)">Обсуждения</a>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </fieldset>
        <fieldset>
            <div class="fieldset_body">
                <p>Ваш пакет <strong class="cherry"><?php echo $curent_package['description']?></strong></p>
                <p>До окончания членства осталось <strong class="cherry"><?php echo $difDate->days?></strong> <?php echo $day_suffix;?></p>
            <?php
            if ($queue_package) {?>
                <p>Через <strong class="cherry"><?php echo $difDate->days . " " . $day_suffix;?></strong> audiome.ru обновит Ваш пакет до <strong class="cherry"><?php echo $queue_package['desc_to'];?></strong></p>
            <?php } ?>
                <?php
                if($queue_package && 'pending' == $queue_package['status']) {
                    echo '<a class="ui_button width_full dark btn_member" href="/updateTask">Обновить сейчас!</a>';
                }
                else if($queue_package && 'processed' == $queue_package['status']) {
                    echo '<a class="ui_button width_full dark btn_member" href="/updateTask/manual">Обновить сейчас!</a>';
                }
                else
                {
                    echo '<a class="ui_button width_full dark btn_member" href="/premium">Продлить!</a>';
                }
                ?>
            </div>
        </fieldset>
    </div>
<?php


} else {
    if ($auth->logged_in() && !$auth->logged_in("admin") && !isset($indexPage)) {
        ?>
    <div class="p_filter_block div_finde">
        <fieldset class="regularUserMnu"> 
            <legend>Членам ассоциации:</legend>
            <div class="fieldset_body">
                <ul class="list_with_icon">
                    <li class="trash"><a id="menu_blacklist" href="/blacklist">Черный список</a></li>
                </ul>
                <ul class="list_with_icon" title="Меню доступно членам Ассоциации">
                    <li class="copy mnu_disabled">
                        <a id="menu_addArticles" href="javascript:void(0)">Написать статью</a>
                    </li>
                    <li class="attention mnu_disabled">
                        <a id="menu_addnews" href="javascript:void(0)">Добавить новость</a>
                    </li>
                    <li class="ticket mnu_disabled">
                        <a id="menu_adddiscounts" href="javascript:void(0)">Сообщить о скидках</a>
                    </li>
                    <li class="cash mnu_disabled">
                        <a id="menu_buy" href="javascript:void(0)">Куплю-продам</a>
                    </li>
                    <li class="users mnu_disabled">
                        <a id="menu_conference" href="javascript:void(0)">Обсуждения</a>
                    </li>
                </ul>
            </div>
        </fieldset>
        <fieldset>
            <div class="fieldset_body">
                <a class="ui_button width_full dark btn_member" href="/premium">Присоединиться!</a>
            </div>
        </fieldset>
    </div>
    <?php
    }
    $print_reclam = true;
}
?>
<?php
}
else {
    $print_reclam = true;
}
?>

<?php
$works = new Model_Work();
$works_temp = $works->find_all();


?>


<?php
if (isset($latestnews)) {
    $news = new Model_News();
    $all_news = $news->find_all();
    ?>
    <div class="p_articles_block" style="">
        <div class="list_box">
            <h3>Последние новости</h3>
            <ul>
                <?php
                $j = 0;
                for ($i = 0; $i < count($all_news); $i++){
                    if ($j++ >8) break;
                    ?>
                    <li><a href="/news/view/<?php echo $all_news[$i]->id; ?>"><?php echo $all_news[$i]->title; ?></a></li>
                <?php
                }
                ?>
            </ul>
            <a href="/news" class="read_all">читать все новости</a>
        </div>
    </div>

<?php
}
?>


<?php
if (isset($latestarticles)) {
    $news = new Model_Articles();
    $all_news = $news->where('public','=',1)->find_all();
    ?>
    <div class="p_articles_block" style="padding-top: 61px;">
        <div class="list_box">
            <h3>Последние статьи</h3>
            <ul>
                <?php
                $j = 0;
                for ($i = 0; $i < count($all_news); $i++){
                    if ($j++ >8) break;
                    ?>
                    <li><a href="/articles/view/<?php echo $all_news[$i]->id; ?>"><?php echo $all_news[$i]->title; ?></a></li>
                <?php
                }
                ?>

            </ul>
            <div class="allnews">
                <a class="read_all" href="/articles">читать все статьи</a>
            </div>
        </div>
    </div>


<?php
}
?>

<?php
if (!isset($selectStudio)) {
    ?>
    <div class="p_filter_block div_finde">
        <form method="post" action="/search" id="search_form1" onsubmit=" return valid_form_search()">
            <input type="submit" style="display: none;" id="btn_search_hidden" name="btnsearch" class="finde_btn"
                   value="найти студию"/>
            <fieldset>
                <legend>Категория</legend>
                <div class="fieldset_body">
                    <ul>
                        <li>
                            <input type="checkbox" <?php if (isset($class1)) { echo "checked"; }?>
                            class="search_checked_class search_change" id="studio_top" value="1" name="studio_top"/>
                            <label for="studio_top">от 900 руб. / час</label>
                        </li>
                        <li>
                            <input type="checkbox" <?php if (isset($class2)) { echo "checked"; }?>
                            class="search_checked_class search_change" id="studio_price" value="1" name="studio_price"/>
                            <label for="studio_price">от 500 до 900 руб. / час</label>
                        </li>
                        <li>
                            <input type="checkbox" <?php if (isset($class3)) { echo "checked"; }?>
                            class="search_checked_class search_change" id="studio_freel" value="1" name="studio_freel"/>
                            <label for="studio_freel">от 900 руб. / час</label>
                        </li>
                    </ul>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Услуги</legend>
                <div class="fieldset_body">
                    <ul>
                    <?php if (isset($works_temp))
                    foreach ($works_temp as $w) {
                        ?>
                            <li><input type="checkbox"
                            class="search_checked_works search_change"
                            <?php if (isset($sworks) && (array_search($w->id, $sworks) !== false)) {
                                echo "checked";
                            } ?>  id="find_check<?php echo $w->id; ?>" value="<?php echo $w->id; ?>"
                                   name="find_check[]"/>
                            <label for="find_check<?php echo $w->id; ?>"><?php echo $w->name;  ?></label></li>

                        <?php } ?>
                    </ul>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Регион</legend>
                <div class="fieldset_body">
                    <select name="region_id" id="region_id" class="search_change filter_sel_styler">
                        <option value="0">- выберите регион-</option>
                    <?php if (isset($regions))
                        foreach ($regions as $r) {
                            $selected = (!empty($_POST['region_id']) && $r->region_id == $_POST['region_id']) ? 'selected' : ''; 
                            echo '<option ' . $selected . ' value="' . $r->region_id. '">' . $r->name. '</option>';
                        }
                    ?>
                    </select>
                </div>
                <div id="city_block">
                    <legend>Город</legend>
                    <div class="fieldset_body">
                         <select name="city_id" id="city_id" disabled="disabled" class="search_change filter_sel_styler">
                            <option value="0">- выберите город -</option>
                            </select>
                    </div>
                </div>
                <div id="metro_block">
                    <legend>Метро</legend>
                    <div class="fieldset_body">
                        <input type="text" class="ui_input" value="<?php echo (empty($_POST['metro'])) ? '' : $_POST['metro'];?>" id="in_metro" name="metro"/>
                    </div>
                </div>
            </fieldset>
            
            <a href="javascript:void();" id="search_studios" class="ui_button dark">
                Показать студии (<span id="studio_count"><?php echo $count_studio; ?></span>)
            </a>
            <input type="hidden" name="hiddensearch" id="hiddensearch"/>
        </form>
    </div>


    <script type="text/javascript">
        function sendFosrData() {
            var valForm = jQuery('#search_form1').serializeObject();
            jQuery.ajax({
                type: "GET",
                data: valForm,
                url: "/addFree/search",
                dataType: "text",
                success: function (data) {
                    jQuery('#studio_count').text(data);
                }
            });
        }
        function valid_form_search() {
            var msg = jQuery('#search_form1').serialize();
            jQuery('#hiddensearch').val(msg);
            return true;
        }
    </script>
<?php
}


?>

<?php

if ($print_reclam && !isset($noreclam)) {
    $pages = new Model_Pages();
    $page = $pages->where('id', '=', '1')->find();
    $partners = $page->partner;
    $reclams = $page->advert;
    if (strlen($partners) > 3) {
        ?>
        <div class="sponsor">
            <?php echo $partners; ?>
        </div>

    <?php
    }
    if (strlen($reclams) > 3) {
        $reclam_class = isset($reclam_class) ? $reclam_class : 'reclam';
        ?>
            <div class="<?php echo $reclam_class;?>">
            <?php echo $reclams; ?>
        </div>

    <?php
    }
}
?>
<script>
$(function() {
    $('input[type=checkbox]').prettyAM();
    $('input[type=radio]').prettyAM();
    var firstRun = true;
    var city_id = <?php echo (empty($_POST['city_id'])) ? 'false' : $_POST['city_id'];?>; 
    $('#region_id').change(function () {
        var region_id = $('#region_id :selected').val();
        if (region_id < 1) {
            $('#city_id').html('<option value="0">- выберите город -</option>');
            $('#city_id').attr('disabled', true);
            $('#in_metro').attr('disabled', true);
            $('#metro_block').hide('medium');
            $('#city_block').hide('medium');
            console.log('lol');
            return false;
        }
        $('#metro_block').hide('medium');
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
                    console.log('sssssssss');
                    $(result).each(function(k, val) {
                        var selected = (firstRun && val['city_id'] == city_id) ? 'selected' : '';
                        options += '<option ' + selected + ' value="' + val['city_id'] + '">' + val['name'] + '</option>';
                    });
                    $('#city_id').html('<option value="0">- выберите город -</option>'+options);
                    $('#city_id').attr('disabled', false).trigger('refresh');
                    $('#city_id').show('medium');
                    if(firstRun) {
                    $('#city_id').show();
                        jQuery('.search_change').change(function () {
                            sendFosrData();
                        });
                    }
                    firstRun = false;
                    if ($('#city_id').val() > 0) {
                        $('#metro_block').show('medium');
                    }
                    if ($('#region_id').val() > 0) {
                        $('#city_block').show('medium');
                    }
                    sendFosrData();
                }
            },
                "json"
            );
    });
    $( "#in_metro" ).autocomplete({
        search: function (a,b) {
            console.log('123');
            sendFosrData();
        },
            source: [],
            delay: 1000,
            minLength: 0

    });
    $('#city_id').on('change', function () {
        if (0 < $(this).val()) {
            $('#in_metro').attr('disabled', false);
            $('#metro_block').show('medium');
            console.log('mt show');
        }
        else {
            $('#in_metro').attr('disabled', true);
            $('#metro_block').hide('medium');
            console.log('mt hide');
        }
    });

    jQuery('.search_change').change(function () {
        sendFosrData();
    })

    $('#region_id').trigger('change');
    $('select').styler();
    $('.regularUserMnu').tooltip({ position: { at: "center top" } });

});
</script>
