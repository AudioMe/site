<div class="big_text" xmlns="http://www.w3.org/1999/html">
    <center><h2>Вы приобрели пакет <span class="color_red"><?php echo $pack_details['new']['desc_to'];?>.</span></h2></center>
    <br>
</div><br>
    <h5 class="h2_premium">
    В настоящие время Вы являетесь членом ассоциации.
    <br/> Ваш текущий пакет <span class="color_red"><?php echo $pack_details['description'];?>.</span>
    до окончания действия которого осталось <span class="color_red"><?php echo $date_dif;?></span> дней.
    Вы можете поручить обновление audiome.ru  и система сменит пакет на  <span class="color_red"><?php echo $pack_details['new']['desc_to'];?>.</span> через <?php echo $date_dif;?> дней в автоматическом режиме.
    Или можете сделать это самостоятельно, но в таком случае Вы потеряете <?php echo $date_dif . " " . $day_suffix?> 
    пакета <span class="color_red"><?php echo $pack_details['description'];?>.</span>
</h5>
<style>
    .updateTask {
        width: 100%;
        margin:80px 0 0px 0;
    }    
    .updateTask td div {
        padding: 0 20px 0 20px;
    }
</style>
<div>
    <table class="updateTask">
        <tr>
            <td width="50%" align="right">
                <div><a class="ui_button" href="/updateTask/audiome">Поручить audiome.ru</a></div>
            </td>
            <td width="50%" align="left">
                <div><a class="ui_button" href="/updateTask/manual">Обновить сейчас</a></div>
            </td>
        </tr>
    </table>
</div>
