<table class="table">
    <?php
    if (isset($comments))
        foreach ($comments as $comment) {
            $name = "";
            $studios = new Model_Studios();
            $studio_temp = $studios->where('user_id', '=', $comment->conference_id)->find();
            if (isset($studio_temp->id)) {
                $name = $studio_temp->phone;
            }
            ?>
            <tr>
                <td><a href="/admin/commentConference/<?php echo $comment->id; ?>"><?php echo $comment->text; ?></a>
                </td>
                <td style="text-align: right">
                    <?php echo $name; ?>
                </td>
                <td><a href="/adminDelete/commentConference/<?php echo $comment->id; ?>"
                       class="remove_comments btn btn-danger">Удалить</a></td>
            </tr>
        <?php
        }
    ?>
</table>

<script type="text/javascript">
    jQuery(function () {
        jQuery('#menu_nav13').addClass("active");
        jQuery('.remove_comments').click(function () {
            return confirm("Вы действительно хотите удалить данный комментарий?");
        })

    })
</script>