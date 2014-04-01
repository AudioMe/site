<div class="big_text" xmlns="http://www.w3.org/1999/html">
    <center> Премиум-зона</center>
    <br>
</div><br>
<?php
if (isset($premium) && $premium) {
    ?>
    <h2 class="h2_premium">В настоящие время Вы являетесь членом ассоциации.<br/> Ваш текущий пакет <span class="color_red"><?php echo $pack_details['description'];?>.</span> До окончания членства осталось <span
            class="color_red"><?php if (isset($date_dif)) echo $date_dif;   ?></span> дней </h2>
<?php

}
?>
<br/>
<style>
    .packages {
        width: 100%;
    }
    .packages td {
        padding: 10px 0 10px;
    }
</style>
<table class="table_data">
<?php

if (is_array($packages)) {
    foreach ($packages as $package) {
    ?>
 <tr>
        <td width="20%">
               <span class="color_red"><?php echo $package['description'];?></span><br/>
               <span class="color_red"><?php echo $package['price'];?> руб.</span>
        </td>
        <td width="">
           <?php echo $package['full_desc']?>
        </td>
        <td width="40%">
            <h5 class="hFinde">Оплатить через Яндекс Деньги:</h5>
            <p><a href="/getPremium/pay/<?php echo $package['name'];?>" style="text-align: center;"><img src="/images/ym.jpg" width="100" /></a></p>
            <p> 
            <h5 class="hFinde">Оплата банковским чеком:</h5>

            <form action="/check.php" target="_blank" onsubmit=""  method="post" id="commentform" class="ui_form">
		<div>
                <label for="fio">Фимилия И.О. <span class="required">*</span></label>
                <input id="fio" class="ui_input" name="name" type="text" value="" aria-required='true'/>
                <label for="address">Адрес <span class="required">*</span></label>
                <input id="address" class="ui_input name="address" type="text" value="" aria-required='true'/>
		</div>
                <input id="price" class="ui_input" name="price" type="hidden" value="<?php echo $package['price'];?>" aria-required='true'/>
		<div>
                <input type="submit" class="ui_button m_t_20 common" value="Оплатить" />
		</div>
                </form>
            </p>

        </td>
    </tr>
    <?php
    
    }
}
?>
    </table>
