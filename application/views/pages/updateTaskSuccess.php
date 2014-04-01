<div class="big_text">
    <center><h2>Операция завершена</h2></center>
    <br>
</div><br>
<h5 class="hFinde">Операция завершена успешно. Ваш текущий пакет <span class="color_red"><?php echo $pack_details['description'];?>.</span></h5>
<?php if(isset($mode) && 'adiome' == $mode) {?>
<h5>Ссистема установик пакет <span class="color_red"><?php echo $pack_details['new_description'];?>.</span> через <?php echo $date_dif;?> дней в автоматическом режиме.</h5>
<?php
}
?>
