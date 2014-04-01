<script type="text/javascript" src="/js/jquery.tablednd.js"></script>

<style type="text/css">
    .dragRow {
        background-color:#FF0A7E;
    }
    .normalRow {
        background-color:#E2F2E2;
    }
</style>

<a href="/admin/addWork/" class="btn btn-info">Добавить новую работу</a>
<br />
<form method="post" action="/adminSave/works">
<table class="table">
    <?php
    if (isset($works))
        $i = 0;
    ?>
    <input type="hidden" name="count_works" value="<?php echo count($works) ?>" />
    <?php

        foreach ($works as $w) {
            $i++;
            ?>
            <tr id="tr<?php echo $i; ?>" >
                <input type="hidden" name="wid<?php echo $i; ?>" class="wid" value="<?php echo $w->id; ?>" />
                <input type="hidden" name="wsort<?php echo $i; ?>" class="wsort" value="<?php echo $i; ?>" />
                <td><a href="/admin/work/<?php echo $w->id; ?>"><?php echo $w->name; ?></a></td>
                <td style="text-align: right">

                </td>
                <td><a href="/adminDelete/work/<?php echo $w->id; ?>"
                       class="remove_work btn btn-danger">Удалить</a> </td>
            </tr>
        <?php
        }
    ?>
</table>
    <input class="btn btn-danger" type="submit" value="Сохранить порядок сортировки" name="works_sort" />
</form>

<script type="text/javascript">
    jQuery(function () {

        jQuery(".table").tableDnD({
            onDragClass: "dragRow",
            onDrop: function(table, row) {
                var rows = table.tBodies[0].rows;

                for (var i=0; i<rows.length; i++) {
                    var tempi = rows[i].id;
                    jQuery('#'+tempi+' .wsort').val(i);
                }
            }
        });
        jQuery('.remove_work').click(function () {
            return confirm("Вы действительно хотите удалить данную работу?");
        })

    })
</script>