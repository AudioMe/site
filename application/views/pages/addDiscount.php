<link type="text/css" rel="stylesheet" media="all" href="/css/jquery-ui-1.10.3.custom.min.css"/>
<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js"></script>

<div class="">
<?php if (isset($discounts)) {
    $ai = 0;
    $add_class = '';
?>
    <ul class="d_discount_list clearfix">
<?php foreach ($discounts as $disc) {
    $studios = new Model_Studios();
    $st = $studios->where('user_id', '=', $disc->user_id)->find();
    ?>
        <li class="d_discount_item <?php echo $add_class;?>">
                <a target="_blank" href="/coupon/get/<?php echo $discounts[$ai]->id; ?>">
                <div class="d_discount_img">
                <img src="<?php echo $st->photo; ?>" />
                    <div class="d_discount_digit"><?php echo $disc->size; ?>%</div>
                </div>
                <div class="d_discount_name"><?php echo $st->name;?></div>
                <div class="d_discount_desc"><?php echo mb_strimwidth($disc->stipulation, 0, 37, '...'); ?></div>
                <div class="d_discount_date">
                    В период с <?php echo $disc->date_start;?>
                    по<?php echo $disc->date_end;?>
                </div>
                </a>
                <div class="discount_edit">
                    <a href="/remove/discount/<?php echo $discounts[$ai]->id; ?>" class="img_remove"></a>
                    <a class="img_edit" href="/edit/coupon/<?php echo $discounts[$ai]->id; ?>"></a>
                </div>
        </li>
    <?php
        $ai++;
        $add_class = (0 == $ai%3) ? 'm_l_0' : '';
    } ?>
    </ul>
<?php } ?>
</div>
<h2 class="">Добавить скидку</h2>

<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/add/discount" onsubmit="return valid_form()" method="post" id="commentform" class="ui_form">
            <div>
                <label for="size" class="w140">Размер скидки %<span class="required cherry">*</span></label>
                <input maxlength="2" id="size" class="ui_input" name="size" type="text" value="" size="30" aria-required='true'/>
            </div>

            <div>
                <label for="date_start" class="w140">Дата начала<span class="required cherry">*</span></label>
                <input maxlength="20" id="date_start" class="ui_input" name="date_start" type="text" value="" size="30"
                       aria-required='true'/>
            </div>
            <div>
                <label for="date_end" class="w140">Дата окончания<span class="required cherry">*</span></label>
                <input maxlength="20" id="date_end" class="ui_input" name="date_end" type="text" value="" size="30"
                       aria-required='true'/>
            </div>
            <div>
                <label for="comment">Условие предоставления скидки<span class="required cherry">*</span></label>
                <textarea maxlength="250" id="comment" class="ui_textarea" name="comment" cols="45" rows="8"
                          aria-required="true"></textarea>
            </div>

            <div>
                <input name="btnsubmdiscount" class="ui_button common" type="submit" id="submit" value="Добавить скидку"/>
            </div>
        </form>
    </div>
    <!-- #respond -->
</div>


<script type="text/javascript">
    $(function () {
        $("#size").numericInput({ allowFloat: true, allowNegative: false});
        jQuery('#menu_adddiscounts').addClass("menu_active");
        jQuery.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
                'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            dateFormat: 'yy-mm-dd',
            yearSuffix: ''};
        jQuery.datepicker.setDefaults($.datepicker.regional['ru']);

        jQuery("#date_start").datepicker();
        jQuery("#date_end").datepicker();

        jQuery('.remove_discount').click(function () {
            return confirm("Вы действительно хотите удалить данную скидку?");
        })
    });

    function valid_form() {
        var c_size = jQuery('#size').val();
        var c_start = jQuery('#date_start').val();
        var c_end = jQuery('#date_end').val();
        var c_comment = jQuery('#comment').val();
        var correct = true;
        if (c_size.length < 1) {
            jQuery('#size').css('background', 'red');
            correct = false;
        } else {
            jQuery('#size').removeAttr('style');
        }

        if (c_start.length <= 7) {
            jQuery('#date_start').css('background', 'red');
            correct = false;
        } else {
            jQuery('#date_start').removeAttr('style');
        }

        if (c_end.length <= 1) {
            jQuery('#date_end').css('background', 'red');
            correct = false;
        } else {
            jQuery('#date_end').removeAttr('style');
        }

        if (c_comment.length <= 1) {
            jQuery('#comment').css('background', 'red');
            correct = false;
        } else {
            jQuery('#comment').removeAttr('style');
        }
        return correct;
    }
</script>
