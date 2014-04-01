
<div class="">
    <h2 class="p_l_10">Скидки</h2>
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
                    по <?php echo $disc->date_end;?>
                </div>
            </a>
        </li>
    <?php
        $ai++;
        $add_class = (0 == $ai%3) ? 'm_l_0' : '';
    } ?>
    </ul>
<?php } ?>
</div>
<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_discounts').addClass("menu_active");
    })
</script>
