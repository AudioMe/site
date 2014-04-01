<?php
$studios = new Model_Studios();
$users = new Model_Users();
?>
<table width="100%" class="black_finde">
    <tbody>
    <tr>
        <td>
            Поиск по части слова, телефона или email
            <form method="post" action="/admin/blacklists">
                <input class="input_black" type="text" style="width: 250px;"
                       value="<?php if (isset($search)) echo $search; ?>" name="blsearch">
                <input class="input_button" type="submit" value="найти">
            </form>
        </td>
        <td>

        </td>
    </tr>
    </tbody>
</table>
<table class="blacklist" width="100%" cellspacing="0" cellpadding="5" border="0">
    <tbody>
    <?php
    if (isset($blacklists))
        foreach ($blacklists as $bl) {
            $st = $studios->where('user_id', '=', $bl->user_id)->find_all();
            $us = $users->where('id', '=', $bl->user_id)->find_all();
            ?>
            <tr>
                <td><p class="black_name"><a href="/admin/blacklist/<?php echo $bl->id; ?>"><?php echo $bl->name; ?></a>
                    </p>

                    <div class="black_text"><?php echo $bl->text; ?></div>
                </td>
                <td class="black_not_fisrt black_phone">
                    <?php echo $bl->contacts; ?>
                </td>
                <td class="black_not_fisrt">
                    добавлено от:<br/><a href="/admin/studio/<?php echo $bl->user_id; ?>"
                                         class="black_send"><?php if (isset($st[0]->name)) {
                            echo $st[0]->name;
                        } else {
                            echo $us[0]->username;
                        } ?></a>
                    <br>
                    <small><?php echo $bl->date; ?></small>
                </td>
                <td width="50">
                    <a href="/adminDelete/blacklist/<?php echo $bl->id; ?>" style="margin: -10px 0;" class="img_remove"></a>
                </td>
            </tr>

        <?php

        }
    ?>
    </tbody>
</table>

<div class="pagination">
    <?php echo $pagination; ?>
</div>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_nav8').addClass("active");
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную запись?");
        })
    });
</script>
