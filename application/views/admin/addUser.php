<?php
$error = Arr::get($_GET, 'error', -1);
if ($error == 1) {
    echo "<h1>Произошла ошибка при сохранении данных</h1>";
}
if ($error == 2) {
    echo "<h1>Введённые пароли не совпали, данные не сохранены</h1>";
}

if ($error == 3) {
    echo "<h1>Введён некорректный email</h1>";
}

if ($error == 4) {
    echo "<h1>Введён некорректный логин администратора</h1>";
}
?>

<div id="respond">
    <form action="/adminSave/addUser" onsubmit="return validUser()" method="post" id="commentform">
        <p class="comment-form-author">
            <label for="elogin">Логин администратора <span class="required">*</span></label>
            <input id="elogin" class="input100" name="username" type="text" value="" size="250" aria-required='true'/>
        </p>

        <p class="comment-form-author">
            <label for="eemail">E-mail <span class="required">*</span></label>
            <input id="eemail" class="input100" name="email" type="text" value="" size="250" aria-required='true'/>
        </p>

        <p class="comment-form-author">
            <label for="password">Пароль <span class="required">*</span></label>
            <input id="password" class="input100" name="password" type="password" value="" size="250"
                   aria-required='true'/>
            <label for="password2">Повторите пароль <span class="required">*</span></label>
            <input id="password2" class="input100" name="password2" type="password" value="" size="250"
                   aria-required='true'/>
        </p>

        <p class="form-submit">
            <input name="btnuseredit" class="btn btn-primary" type="submit" id="submit" value="Сохранить"/>
        </p>
    </form>
</div>
<!-- #respond -->
</div>

<script type="text/javascript">
    function validUser() {
        var login = jQuery('#elogin').val();
        var email = jQuery('#eemail').val();
        var password = jQuery('#password').val();
        var password2 = jQuery('#password2').val();
        if (email.length <= 2 || login.length <= 2) {
            alert('Имя и email пользователя не могут быть пустыми');
            return false;
        }
        if (password != password2) {
            alert('Введённые пароли не совпадают');
            return false;
        }
        if (password == "") {
            alert('Пароль не может быть пустым');
            return false;
        }
        return true;
    }
</script>