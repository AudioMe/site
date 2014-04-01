<table class="table">
    <?php
    if (isset($studios))
        foreach ($studios as $studio) {
            ?>
            <tr>
                <td><a href="/admin/studio/<?php echo $studio->user_id; ?>"><?php echo $studio->name; ?></a></td>
                <td style="text-align: right"><?php echo $studio->phone; ?></td>
                <td style="text-align: right"><?php echo $studio->fio; ?></td>
                <td><a href="/adminDelete/studio/<?php echo $studio->id; ?>"
                       class="remove_studio btn btn-danger">Удалить</a></td>
            </tr>
        <?php
        }
    ?>
</table>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_nav1').addClass("active");
        jQuery('.remove_studio').click(function () {
            var msg = prompt('Если вы хотите удалить данную студию, введите "DELETE"')
            if (msg == "DELETE") {
                return true;
            } else {
                return false;
            }
        })

    })
</script>