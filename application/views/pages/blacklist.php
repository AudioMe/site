<?php
$studios = new Model_Studios();
?>
<div>
    <h2 class="p_l_10">Черный список</h2>
    <div class="clearfix p_t_20 p_b_40">
        <div class="float_l w_50">
            <form method="post" action="/blacklist">
                <div class="table w_100">
                <div class="p_r_10">
                    <input type="text" value="<?php if (isset($search)) echo $search; ?>" name="blsearch" class="ui_input" placeholder="Поиск по части слова, телефона или email!" style="height: 28px;" />
                </div>
                    <div>
                        <input type="submit" class="ui_button lh27 width_auto" value="Найти" />
                    </div>
                </div>
            </form>
        </div>
        <div class="float_r">
            <a href="/addBlacklist" class="ui_button">Добавить/Изменить</a>
        </div>
    </div>
    <table class="table_data w_100">
        <thead>
            <tr>
                <td>Примечание</td>
                <td width="100">Телефон</td>
                <td width="120">Добавлено</td>
            </tr>
        </thead>
        <tbody>
        <?php
        if (isset($blacklists))
            foreach ($blacklists as $bl) {
                $st = $studios->where('user_id', '=', $bl->user_id)->find_all();
                ?>
                <tr>
                    <td><span><?php echo $bl->name; ?> <?php echo $bl->text; ?></span></td>
                    <td><span><?php echo $bl->contacts; ?></span></td>
                    <td><div class="cherry"><?php echo $bl->name; ?></div><div class=""><?php echo $bl->date; ?></div></td>
                </tr>
            <?php

            }
        ?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if (isset($pagination)) echo $pagination; ?>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_blacklist').addClass("menu_active");
    })
</script>
