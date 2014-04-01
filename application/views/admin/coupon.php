<link type="text/css" rel="stylesheet" media="all" href="/css/jquery-ui-1.10.3.custom.min.css"/>
<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js"></script>

<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/adminSave/discount"  onsubmit="return valid_form()"  method="post" id="commentform">
            <input type="hidden" name="discount_id" value="<?php if(isset($discount->id)) echo $discount->id; ?>" />
            <p class="comment-form-author">
                <label for="size">Размер скидки <span class="required">*</span></label>
                <input id="size" class="input100"  name="size" type="text" value="<?php if(isset($discount->size)) echo $discount->size; ?>" size="30" aria-required='true'/>
            </p>

            <p class="comment-form-email">
                <label for="date_start">Дата начала<span class="required">*</span></label>
                <input id="date_start" class="input100"  name="date_start" type="text" value="<?php if(isset($discount->date_start)) echo $discount->date_start; ?>" size="30" aria-required='true'/>
            </p>
            <p class="comment-form-email">
                <label for="date_end">Дата окончания<span class="required">*</span></label>
                <input id="date_end" class="input100"  name="date_end" type="text" value="<?php if(isset($discount->date_end)) echo $discount->date_end; ?>" size="30" aria-required='true'/>
            </p>

            <p class="comment-form-comment">
                <label for="comment">Условие предоставления скидки<span class="required">*</span></label>
                <textarea id="comment" class="input100"  name="comment" cols="45" rows="8" aria-required="true"><?php if(isset($discount->stipulation)) echo $discount->stipulation; ?></textarea>
            </p>

            <p class="form-submit">
                <input name="btnsubmdiscount" class="btn btn-primary" type="submit" id="submit" value="Сохранить скидку"/>
            </p>
        </form>
    </div>
</div>


<script type="text/javascript">
    jQuery(function() {
        jQuery.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                'Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            dateFormat: 'yy-mm-dd',
            yearSuffix: ''};
        jQuery.datepicker.setDefaults($.datepicker.regional['ru']);

        jQuery( "#date_start" ).datepicker();
        jQuery( "#date_end" ).datepicker();


    });

    function valid_form() {
        var c_size = jQuery('#size').val();
        var c_start = jQuery('#date_start').val();
        var c_end = jQuery('#date_end').val();
        var c_comment = jQuery('#comment').val();
        var correct = true;
        if (c_size.length <= 1){
            jQuery('#size').css('background', 'red');
            correct = false;
        }else{
            jQuery('#size').removeAttr('style');
        }

        if (c_start.length <= 7){
            jQuery('#date_start').css('background', 'red');
            correct = false;
        }else{
            jQuery('#date_start').removeAttr('style');
        }

        if (c_end.length <= 1){
            jQuery('#date_end').css('background', 'red');
            correct = false;
        }else{
            jQuery('#date_end').removeAttr('style');
        }

        if (c_comment.length <= 1){
            jQuery('#comment').css('background', 'red');
            correct = false;
        }else{
            jQuery('#comment').removeAttr('style');
        }
        return correct;
    }
</script>