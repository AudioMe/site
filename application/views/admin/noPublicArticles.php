<table class="table">
    <?php
    $studios = new Model_Studios();
    if (isset($articles))
        foreach ($articles as $a) {
            $st = $studios->where('user_id', '=', $a->user_id)->find_all();
            ?>
            <tr>
                <td><a href="/admin/article/<?php echo $a->id; ?>"><?php echo $a->title; ?></a></td>
                <td style="text-align: right"><?php if (isset($st[0]->name)) echo $st[0]->name; ?></td>
                <td><a href="/adminDelete/articles/<?php echo $a->id; ?>"
                       class="remove_studio btn btn-danger">Удалить</a></td>
            </tr>
        <?php
        }
    ?>
</table>

<script type="text/javascript">
    jQuery(function () {
//        jQuery('#menu_nav1').addClass("active");
        jQuery('.remove_studio').click(function () {
            var msg = prompt('Если вы хотите удалить данную статью, введите "DELETE"')
            if (msg == "DELETE") {
                return true;
            } else {
                return false;
            }
        })
    })
</script>