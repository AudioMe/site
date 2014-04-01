<h2>Обратная связь</h2>
<?php
if (isset($error)) {
    echo "<h3>Произошла ошибка при отправке вопроса!</h3>";
} else {
    if (isset($ok)) {
        echo "<h3>Вопрос успешно отправлен!</h3>";
    } else {
        ?>
        <div id="respond">
            <form action="/feedback" onsubmit="return validUser()" method="post" id="commentform" class="ui_form">
                <div>
                    <label for="elogin">Имя <span class="required cherry">*</span></label>
                    <input maxlength="150" id="elogin" class="ui_input" name="name" type="text" value="" size="250"
                           aria-required='true'/>
                </div>
                <div>
                    <label for="eemail">E-mail <span class="required cherry">*</span></label>
                    <input maxlength="150" id="eemail" class="ui_input" name="email" type="text" value="" size="250"
                           aria-required='true'/>
               </div>
                <div>
                    <label for="ntext">Текст Вопроса<span class="required cherry">*</span></label>
                    <textarea id="ntext" class="ui_textarea" name="text" 
                              aria-required="true"></textarea>
               </div>

                <div>
                    <input name="btnfeedback" class="ui_button common" type="submit" id="submit" value="Отправить"/>
               </div>
            </form>
        </div>

        <script type="text/javascript">
            function validUser() {
                var login = jQuery('#elogin').val();
                var email = jQuery('#eemail').val();
                var text = jQuery('#ntext').val();

                if (email.length <= 2 || login.length <= 2) {
                    alert('Имя и email пользователя не могут быть пустыми');
                    return false;
                }
                if (text.length <= 3) {
                    alert('Слишком короткий текст вопроса.');
                    return false;
                }
                return true;
            }
        </script>
    <?php

    }
}
?>
