<div class="coupon_body">
    <table>
    
        <tr>
            <td style="padding: 20px 15px 20px 15px;">
                <div class="grey small" style="float: right; width: 200px; padding-top: 20px;"> Дата
                    выдачи: <?php echo date("d.m.y");  ?></div>
                <h1>Скидочный купон #<?php if (isset($coupon->id)) echo $coupon->id; ?></h1>
    
                <div class="redline"></div>
    
                <table>
                    <tr>
                        <td style="padding: 20px 0px 20px 0px;">
                            <span
                                class="small">Данный купон предоставляет возможность получить скидку на услуги студии </span>
                            <br>
    		<span class="orange">	<b><?php if (isset($studio->name)) echo $studio->name;  ?></b> в размере <b
                    class="big"><?php if (isset($coupon->size)) echo $coupon->size."%"; ?></b>
                        </td>
                        <td style="padding: 10px 0 10px 25px;">
                            <img style="border-radius: 60px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.9); width:120px; height:120px;" src="<?php if (isset($studio->photo)) echo $studio->photo; ?>">
                        </td>
                    </tr>
                </table>
                <div class="hr"></div>
                <p class="p_t_10 p_b_10">Вы можете воспользоваться скидкой в период <br>с
                    <b><?php if (isset($coupon->date_start)) echo $coupon->date_start; ?></b> по
                    <b><?php if (isset($coupon->date_end)) echo $coupon->date_end; ?></b></p>
    
                <div class="hr"></div>
                <div class="small">
    
                    <h2>Условия акции</h2>
                    <?php  if (isset($coupon->stipulation)) echo $coupon->stipulation; ?>
    
                </div>
    
    
                <p class="bot">Пожалуйста, предъявите этот купон администратору студии перед началом аренды</p>
    
                <div class="redline"></div>
    
                <p class="p_t_20" align="right">
                    <img src="/images/audiome.png" vspace=1 align=left>
                    <a href="#" class="print_link" onclick="javascript:this.style.display='none'; window.print()">Распечатать купон</a>
                </p>
            </td>
        </tr>
    </table>
</div>