<?php
$studios = new Model_Studios();
?>
<div id="comment-form" class="comment-form">

    <div id="respond p_t_20">
        <form action="/editSave/blacklist" onsubmit="" method="post" id="commentform" class="ui_form">
            <input type="hidden" name="blacklist_id" value="<?php if (isset($blacklist->id)) echo $blacklist->id; ?>"/>

            <div class="">
                <label for="author">Имя <span class="required">*</span></label>
                <input maxlength="150" id="author" class="ui_input" name="name" type="text"
                       value="<?php if (isset($blacklist->name)) echo $blacklist->name; ?>" size="30"
                       aria-required='true'/>
            </div>

            <div class="">
                <label for="phone">Контактные данные</label>
                <input maxlength="150" id="phone" class="ui_input" name="phone" type="text"
                       value="<?php if (isset($blacklist->contacts)) echo $blacklist->contacts; ?>" size="30"
                       aria-required='true'/>
            </div>

            <div class="">
                <label for="comment">Текст комментария <span class="required">*</span></label>
                <textarea maxlength="250" id="comment" class="ui_textarea" name="comment" cols="45" rows="8"
                          aria-required="true"><?php if (isset($blacklist->text)) echo $blacklist->text; ?></textarea>
            </div>

            <div class="">
                <input name="btnsubmblacklist" class="ui_button m_t_20" type="submit" id="submit" value="Сохранить"/>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {


    })
</script>
