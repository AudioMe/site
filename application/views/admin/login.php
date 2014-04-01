<div class="row" style="margin: 50px auto; width: 400px">
    <div class="span4">
        <div class="well">
            <legend>Панель администрирования</legend>
            <form method="POST" action="/adminLogin" accept-charset="UTF-8">
                <?php if (isset($error)) { ?>
                    <div class="alert alert-error">
                        <a class="close" data-dismiss="alert" href="#">x</a>Логин или пароль введены неправильно!
                    </div>
                <?php } ?>
                <input class="span3" placeholder="Логин" type="text" name="username">
                <input class="span3" placeholder="Пароль" type="password" name="password">
                <label class="checkbox">
                    <button class="btn-info btn" name="adminLogin" type="submit">Войти</button>
            </form>
        </div>
    </div>
</div>