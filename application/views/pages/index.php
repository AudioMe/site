<?php
$config = new Model_Configuration();
?>
<div id="notify_msg" not_found="<?php var_export($not_found);?>" title="Студии не найдены">
  <p>Вашим критериям не подходит ни одна студия, попробуйте поменять условия либо выберите в нашем каталоге</p>
</div>
<h2 class="p_l_10">Рекомендуемые студии</h2>
<div class="goods_list">
    <?php
    
    //FB::warn($studios);
    if (isset($studios))
        foreach ($studios as $stud) {
            $metro = new Model_Metro();
            $m_city = new Model_City();
            $metro_temp = $metro->where('id', '=', $stud['metro'])->find();
            $city = $m_city
                ->where('country_id', '=', $stud['country_id'])
                ->where('region_id', '=', $stud['region_id'])
                ->where('city_id', '=', $stud['city_id'])
                ->find();
            $rating = new Model_Rating();
            $ratings = $rating->where('user_id', '=', $stud['user_id'])->find_all();
            $mark = 1;
            $count = 0;

            if ($ratings->count() > 0) {
                $count = $ratings[0]->count;
                $mark = $ratings[0]->mark;
            }
            ?>
<div class="good_item">
    <div class="wrap">
        <h3><?php echo $stud['name']; ?></h3>
        <div class="good_img <?php if ($stud['premium']) { echo "logo";}?>">
            <img src="<?= $stud['photo'] ?: '/images/img_cap.png' ?>" />
        </div>
        <ul class="param_list">
            <li class="point">г. <?php echo  $city->name; ?></li>
            <li class="map"><?php echo  $stud['address']; ?></li>
            <?php if(!empty($stud['metro'])){?>
            <li class="metro">м. <?php echo  $stud['metro'];?></li>
            <?php } ?>
            
            <li class="cost">от <strong class="cherry"><?php echo  $stud['price'];?></strong> руб/час</li>
        </ul>
        <a  class="ui_button" href="/studio/view/<?php echo $stud['user_id']; ?>">Подробнее о студии</a>
        <div class="rating studio_reiting">
            <div class="rating_studio" data-average="<?php echo str_replace(',', '.', round($mark, 1)); ?>">
            </div>
            <div class="vote ratingText">(<?php echo $count;?> голосов)</div>
        </div>
    </div>
</div>

        <?php
        }
    ?>
</div>
<script type="text/javascript">
    if ('true' == $('#notify_msg').attr('not_found')) {
        $('#notify_msg').dialog({ width: 380, position: { at: "center center" }});
    }
    jQuery(function () {
        jQuery(".rating_studio").jRating({
            length: 5,
            showRateInfo: false,
            decimalLength: 1,
            isDisabled: true
        });

    })
</script>
