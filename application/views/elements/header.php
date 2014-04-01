<?php
	$auth = Auth::instance();
    $u = $auth->get_user();
?>

<div class="header_block width_wrap">
    <a href="/" class="logo_block"><img src="/images/logo.png" /></a>
    <ul class="menu_top">
        <li><a id="root_page" href="/">Главная</a></li>
        <li><a id="menu_news"href="/news">Новости</a></li>
        <li><a id="menu_articles" href="/Articles">Статьи</a></li>
        <li><a id="menu_discounts" href="/discount">Скидки</a></li>
        <li><a id="menu_catalog" href="/catalog">Каталог</a></li>
    </ul>
    <?php if (!$auth->logged_in() || $auth->logged_in("admin")) {?>
    <div class="auth_block">
        <a href="/register" class="ui_button plus register_link">Добавить студию</a>
        <div class="form-login-layer">
            <div class="login_link_c"><a href="javascript:void(0);" id="open-login-popup" class="login_link">Вход для студий</a></div>
            <div id="form-login" class="login_box" style="display: none">
                <form method="post" id="authForm" action="/auth">
                    <div class="m_b_10">
                        <input type="text" class="ui_input" id="username" name="username" placeholder="Логин" />
                    </div>
                    <div class="m_b_10">
                        <input type="password" class="ui_input" id="userpass" name="password" placeholder="Пароль" />
                    </div>
                    <div class="align_right m_b_5">
                        <input type="submit" name="btnlogin" value="Войти" />
                    </div>
                    <div class="align_right">
                        <a href="/remind">Забыли пароль</a>
                        <span class="sep">|</span>
                        <a href="/register">Регистрация</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if ($auth->logged_in() && !$auth->logged_in("admin")) {?>
    <div class="auth_login_block">
        <fieldset>
            <legend>
                <?php echo $u->username;?>
            </legend>
            <div class="fieldset_body">
                <div class="align_center p_b_5">
                    <a href="/profile">Мой профиль</a>
                    <span class="sep">|</span>
                    <a href="/auth/logout">Выход</a>
                </div>
            </div>
        </fieldset>
    </div>
    <?php } ?>
</div>

<div class="overlay" id="overlay2" style="display:none;"></div>
<div class="box" id="box2">
    <a class="boxclose" id="boxclose2"></a>
    <div id="message_text2"></div>
</div>
<div id="dialog" title="" style="display:none;"></div>
<script type="text/javascript">
jQuery(function () {

    jQuery('#authForm').ajaxForm(function (data) {
        if (data !== "ok"){
            jQuery('#overlay2').fadeIn('fast', function () {
                jQuery('#box2').animate({'top': '160px'}, 500);
            });
            jQuery("#message_text2").html("<p style='text-align: center; padding-top: 10px; color: #F50073; font-size: 18px;'> Логин или пароль введены неправильно</p>");
        }else{
            document.location = '/profile';
        }
    });

    jQuery('#boxclose2').click(function () {
        jQuery('#box2').animate({'top': '-200px'}, 500, function () {
            jQuery('#overlay2').fadeOut('fast');
        });
    });
})
</script>
