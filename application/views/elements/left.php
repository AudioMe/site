<?php
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

<div class="sideContent">
    <h2 class="hFinde">Навигация:</h2><br>
    <ul class="menu">
        <li>
            <a id="menu_news" href="/news">Новости</a>
        </li>
        <li>
            <a id="menu_discounts" href="/discount">Скидки</a>
        </li>
        <li>
            <a id="menu_catalog" href="/catalog">Каталог</a>
        </li>
        <li>
            <a id="menu_articles" href="/Articles">Статьи</a>
        </li>
    </ul>
    <?php
    $date_end = $date_cur = null;

    $difDate = null;
    $user_premium = false;
    if (isset($is_premium) && $is_premium) {
        $package = DB::select()->from(array('premium', 'p'))->join(array('premium_types','pt'))->on('p.premium_type_id', '=', 'pt.premium_type_id')->where('p.user_id', '=', $user_id)->limit(1)->execute()->current();
        if ($package) {
            $date_end = date_create($package['date_end']);
            $date_cur = date_create(date("Y-m-d"));
            $difDate = date_diff($date_cur, $date_end);

            if ($date_cur < $date_end) {
                $user_premium = true;
            }
        }
    }
    if ($user_premium) {


        ?>
        <h2 class="hFinde">Членам ассоциации:</h2><br>
        <ul class="menu2">
            <?php
            if (3 == $package['level'] || 2 == $package['level']){ ?>
            <li>
                <a id="menu_addArticles" href="/AddArticles">Добавить статью</a>
            </li>
            <li>
                <a id="menu_addnews" href="/addNews">Добавить новость</a>
            </li>
            <li>
                <a id="menu_addphoto" href="/AddPhoto">Добавить<br/> фотографии</a>
            </li>
            <li>
                <a id="menu_addworks" href="/AddMusic">Добавить<br/> примеры работ </a>
            </li>
            <li>
                <a id="menu_adddiscounts" href="/AddDiscount">Сообщить о скидках</a>
            </li>
            <li>
                <a id="menu_blacklist" href="/Blacklist">Черный список </a>
            </li>
            <li>
                <a id="menu_buy" href="/Buy">Куплю-продам</a>
            </li>
            <li>
                <a id="menu_conference" href="/Conference">Конференция</a>
            </li>
            <?}else {?>
            <li>
                <a id="menu_addArticles" href="/AddArticles">Добавить статью</a>
            </li>
            <li>
                <a id="menu_blacklist" href="/Blacklist">Черный список </a>
            </li>
            <li class="menu2edit">
                <a id="menu_addnews" href="javascript:void(0);">Добавить новость</a>
            </li>
            <li class="menu2edit">
                <a id="menu_addphoto" href="javascript:void(0);">Добавить<br/> фотографии</a>
            </li>
            <li class="menu2edit">
                <a id="menu_addworks" href="javascript:void(0);">Добавить<br/> примеры работ </a>
            </li>
            <li class="menu2edit">
                <a id="menu_adddiscounts" href="javascript:void(0);">Сообщить о скидках</a>
            </li>
            <li class="menu2edit">
                <a id="menu_buy" href="javascript:void(0);">Куплю-продам</a>
            </li>
            <li class="menu2edit">
                <a id="menu_conference" href="javascript:void(0);">Конференция</a>
            </li>
            <?}?>
        </ul>

        <div>
            <div class="timer_studio">
                До окончания членства осталось
                <span class="color_red"><?php echo $difDate->days;   ?></span>
                дней…
            </div>
            <div>
                <a class="button2" href="/premium">Продлить членство</a>
            </div>
        </div>
    <?php


    } else {
        if ($auth->logged_in() && !$auth->logged_in("admin")) {
            ?>

            <div>
                <a class="button2" href="/premium">Оплатить членство</a>
            </div>

        <?php
        }
        $pages = new Model_Pages();
        $page = $pages->where('id', '=', '1')->find();
        $partners = $page->partner;
        $reclams = $page->advert;
        if (strlen($partners) > 3) {
            ?>
            <h2 class="hFinde">Партнёры:</h2><br>
            <div class="sponsor">
                <?php echo $partners; ?>
            </div>

        <?php
        }
        if (strlen($reclams) > 3) {
            ?>
            <h2 class="hFinde">Реклама:</h2><br>
            <div class="reclam">
                <?php echo $reclams; ?>
            </div>

        <?php
        }
    }
    ?>
</div>
