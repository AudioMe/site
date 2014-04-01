<?php
	if (isset($message)) {
	echo '<h2 class="m_t_40">';
        echo $message;
    	echo '</h2>';
	}
	else if (isset($error)) {
	echo '<h2 class="m_t_40">';
        echo $error;
    	echo '</h2>';
	}
if (!isset($message)){?>
<h2>Введите e-mail для восстановления пароля</h2>
<form method="post" id="register_form1" action="/Remind" class="ui_form">
    <div class="float_l w_220">
        <input name="email" type="text" class="ui_input w_220 h_34"/>
    </div>
    <div class="float_l m_l_10">
        <input type="submit" class="ui_button common" value="Восстановить пароль"/>
    </div>
</form>
<?php } ?>
