<table class="table">
    <?php
    if (isset($comments))
        foreach ($comments as $comment) {
            ?>
            <tr>
                <td><a href="/admin/comment/<?php echo $comment->id; ?>"><?php echo $comment->text; ?></a></td>
                <td style="text-align: right">
                    <?php echo $comment->phone; ?>
                </td>
                <td><a href="/adminDelete/comment/<?php echo $comment->id; ?>" class="remove_comments btn btn-danger">Удалить</a>
                </td>
            </tr>
        <?php
        }
    ?>
</table>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_nav2').addClass("active");
        jQuery('.remove_comments').click(function () {
            return confirm("Вы действительно хотите удалить данный комментарий?");
        })

    })
</script>