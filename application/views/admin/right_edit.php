<?php
$works = new Model_Work();
$works_temp = $works->find_all();
?>

<div class="div_finde">
    <h2 class="hFinde">Категория</h2>
    <form method="post" id="register_form2" class="ui_form" action="/">
        <div class="finde_chech_top margin11">
            <p class="p_top">
                <input type="radio" <?php if (isset($s_class) && $s_class == 1){echo "checked";} ?> value="1" id="studio_top" name="studio_type" />
                <label style="" for="studio_top">от 900 руб. / час</label>

            </p>

            <p class="p_price">
                <input type="radio" <?php if (isset($s_class) && $s_class == 2){echo "checked";} ?> value="2" id="studio_price" name="studio_type" />
                <label style="" for="studio_price">от 500 до 900 руб. / час</label>

            </p>
            <p class="p_freel">
                <input type="radio" <?php if (isset($s_class) && $s_class == 3){echo "checked";} ?> value="3" id="studio_freel" name="studio_type" />
                <label style="" for="studio_freel">до 500 руб. / час</label>

            </p>
        </div>
        <h2 class="hFinde">Услуги</h2>
        <div class="check_bottom margin11">
            <?php
            foreach ($works_temp as $w) {
                ?>
                <p>
                    <input type="checkbox" <?php if (isset($sworks) && (array_search($w->id, $sworks) !== false) ){echo "checked";} ?>  class="check_register" id="find_check<?php echo $w->id; ?>" name="find_check<?php echo $w->id; ?>" />
                    <label for="find_check<?php echo $w->id; ?>"><?php echo $w->name;  ?></label>
                </p>
            <?php
            }
            ?>
        </div>

    </form>
</div>



