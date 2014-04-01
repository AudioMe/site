<?php
$studios = new Model_Studios();
?>
<h2>
   Добавить данные в чёрный список
</h2>

<table class="blacklist" width="100%" cellspacing="0" cellpadding="5" border="0">
    <tbody>
    <?php
    if (isset($blacklist))
        foreach ($blacklist as $bl) {
            $st = $studios->where('user_id', '=', $bl->user_id)->find_all();
            ?>
            <tr>
                <td><p class="black_name"><?php echo $bl->name; ?></p>

                    <div class="black_text"><?php echo $bl->text; ?></div>
                </td>
                <td class="black_not_fisrt black_phone">
                    <?php echo $bl->contacts; ?>
                </td>
                <td class="black_not_fisrt">
                    добавлено от:<br/><a href="/studio/view/<?php echo $bl->user_id; ?>"
                                         class="black_send"><?php if(isset($st[0]->name)) echo $st[0]->name; ?></a>
                    <br>
                    <small><?php echo $bl->date; ?></small>
                </td>
                <td width="100">
                    <!--<a class="img_edit" href="/edit/blacklist/<?php echo $bl->id; ?>" class="img_edit">
                        <img src="/images/icons/edit.png" width="25" height="25">
                    </a>-->
                    <a href="/remove/blacklist/<?php echo $bl->id; ?>" style="margin: -10px 0;" class="img_remove"><img
                            src="/images/icons/remove.png"
                            width="25" height="25"></a>
                </td>
            </tr>
        <?php
        }
    ?>
    </tbody>
</table>

<div id="comment-form" class="comment-form">

    <div id="respond" class="p_t_20">
        <form action="/add/blacklist" onsubmit="" method="post" id="commentform" class="ui_form">
            <div class="">
                <label for="author">Имя <span class="required cherry">*</span></label>
                <input id="author" maxlength="150" name="name" class="ui_input" type="text" value="" size="30" aria-required='true'/>
            </div>

            <div class="">
                <label for="phone">Контактные данные <span class="required cherry">*</span></label>
                <input id="phone" maxlength="150" name="phone" class="ui_input" type="text" value="" size="30" aria-required='true'/>
            </div>

            <div class="">
                <label for="comment">Текст комментария <span class="required cherry">*</span></label>
                <textarea id="comment" maxlength="250" name="comment" class="ui_textarea" aria-required="true"></textarea>
            </div>

            <div class="">
                <input name="btnsubmblacklist" type="submit" class="ui_button m_t_20" id="submit" value="Добавить данные в чёрный список"/>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
    jQuery(function () {
        jQuery('.img_remove').click(function () {
            return confirm("Вы действительно хотите удалить данную запись?");
        })
    })
</script>
