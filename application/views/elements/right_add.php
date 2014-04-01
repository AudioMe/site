<?php
$premium_end = date_create(date("Y-m-d"));
$print_reclam = true;
$auth = Auth::instance();
$is_premium = false;
$user_id = -1;
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
$date_end = $date_cur = null;

$difDate = null;
$user_premium = false;
$queue_package = false;
$curent_package = false;
if (isset($is_premium) && $is_premium) {
    $package = DB::select()->from(array('premium', 'p'))->join(array('premium_types','pt'))->on('p.premium_type_id', '=', 'pt.premium_type_id')->where('p.user_id', '=', $user_id)->limit(1)->execute()->current();
    $print_reclam = false;
    if ($package) {
        $date_end = date_create($package['date_end']);
        $premium_end = $date_end;
        $date_cur = date_create(date("Y-m-d"));
        $difDate = date_diff($date_cur, $date_end);

        if ($date_cur < $date_end) {
            $user_premium = true;
            $queue_package = Model_PremiumQueue::getUserQueue($user_id, array('pending', 'processed'));
            $curent_package = Model_Premium::getUserPackage($user_id);
            $day_suffix = Model_DataHelper::num2AlphaSuffix($difDate->days);
        }
    }
}
if ($user_premium) {
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
    if ($auth->logged_in() && !$auth->logged_in("admin")) {
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
                        <a id="menu_addArticles" href="javascript:void(0)">Добавить статью</a>
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
$works = new Model_Work();
$works_temp = $works->find_all();
?>

<div class="p_filter_block div_finde">
    <form method="post" id="register_form2" action="/">
        <fieldset>
            <legend>Категория</legend>
            <div class="fieldset_body box_categories">
                <ul>
                    <li>
                        <input class="prettyRadio" type="radio" <?php if (isset($s_class) && $s_class == 1) {
                            echo "checked";
                        } ?> value="1" id="studio_top" name="studio_type"/>
                        <label for="studio_top">от 900 руб. / час</label>
                    </li>
                    <li>
                        <input class="prettyRadio" type="radio" <?php if (isset($s_class) && $s_class == 2) {
                            echo "checked";
                        } ?> value="2" id="studio_price" name="studio_type"/>
                        <label for="studio_price">от 500 до 900 руб. / час</label>
                    </li>
                    <li>
                        <input class="prettyRadio" type="radio" <?php if (isset($s_class) && $s_class == 3) {
                            echo "checked";
                        } ?> value="3" id="studio_freel" name="studio_type"/>
                        <label for="studio_freel">до 500 руб. / час</label>
                    </li>
                </ul>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Услуги</legend>
            <div class="fieldset_body box_works">
                <ul>
                    <?php foreach ($works_temp as $w) {?>
                    <li>
                        <input type="checkbox" <?php if (isset($sworks) && (array_search($w->id, $sworks) !== false)) {
                            echo "checked";
                        } ?>  class="check_register prettyRadio" id="find_check<?php echo $w->id; ?>"
                               name="find_check<?php echo $w->id; ?>"/>
                        <label for="find_check<?php echo $w->id; ?>"><?php echo $w->name;  ?></label>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </fieldset>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        $('input[type=checkbox]').prettyAM();
        $('input[type=radio]').prettyAM();
        $('.regularUserMnu').tooltip({ position: { at: "center top" } });
    });
</script>
