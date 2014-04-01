<table style="width:100%">
    <tr>
        <td>
            <form action="/adminSave/commentConference" method="post">
                <input type="hidden" name="comment_id" value="<?php if (isset($comment->id)) echo $comment->id; ?>"/>
                <textarea style="width:100%"
                          name="text"><?php if (isset($comment->text)) echo $comment->text;  ?></textarea>

                <p><input type="submit" class="btn btn-primary" value="Сохранить"/></p>
            </form>
        </td>
        <td style="text-align: right">
            <?php if (isset($name)) echo $name; ?>
        </td>
        <td style="width:100px; text-align: right">
            <a href="/adminDelete/commentConference/<?php if (isset($comment->id)) echo $comment->id; ?>"
               class="remove_comments btn btn-danger">Удалить</a>
        </td>
    </tr>
</table>


<script type="text/javascript">
    jQuery(function () {


    })
</script>