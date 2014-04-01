<?php
$error = Arr::get($_GET, 'error', -1);
if ($error == 1) {
    echo "<h1>Произошла ошибка при сохранении данных</h1>";
}
if ($error == 2) {
    echo "<h1>Введённые пароли не совпали, данные не сохранены</h1>";
}
?>

<div id="respond">
    <form action="/adminSave/user" onsubmit="return validUser()" method="post" id="commentform">
        <input type="hidden" value="<?php if (isset($user->id)) echo $user->id; ?>" name="user_id"/>

        <p class="comment-form-author">
            <label for="eemail">E-mail <span class="required">*</span></label>
            <input id="eemail" class="input100" name="email" type="text"
                   value="<?php if (isset($user->email)) echo $user->email; ?>" size="250" aria-required='true'/>
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
            <a href="/admin/users" class="btn btn-info">Назад</a>
        </p>
    </form>
</div>
</div>

<script type="text/javascript">
    function validUser() {
        var email = jQuery('#eemail').val();
        var password = jQuery('#password').val();
        var password2 = jQuery('#password2').val();
        if (email.length <= 2) {
            alert('Email пользователя не может быть пустым');
            return false;
        }
        if (password != password2) {
            alert('Введённые пароли не совпадают');
            return false;
        }
        return true;
    }
</script>