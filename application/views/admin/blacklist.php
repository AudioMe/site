<?php
$studios = new Model_Studios();
?>
<div id="comment-form" class="comment-form">

    <div id="respond">
        <form action="/adminSave/blacklist" onsubmit="" method="post" id="commentform">
            <input type="hidden" name="blacklist_id" value="<?php if (isset($blacklist->id)) echo $blacklist->id; ?>"/>

            <p class="comment-form-author">
                <label for="author">Имя <span class="required">*</span></label>
                <input id="author" class="width99p" name="name" type="text"
                       value="<?php if (isset($blacklist->name)) echo $blacklist->name; ?>" size="30"
                       aria-required='true'/>
            </p>

            <p class="comment-form-email">
                <label for="phone">Контактные данные <span class="required">*</span></label>
                <input id="phone" class="width99p" name="phone" type="text"
                       value="<?php if (isset($blacklist->contacts)) echo $blacklist->contacts; ?>" size="30"
                       aria-required='true'/>
            </p>

            <p class="comment-form-comment">
                <label for="comment">Текст комментария <span class="required">*</span></label>
                <textarea id="comment" class="width99p" name="comment" cols="45" rows="8"
                          aria-required="true"><?php if (isset($blacklist->text)) echo $blacklist->text; ?></textarea>
            </p>

            <p class="form-submit">
                <input name="btnsubmblacklist" class="btn btn-primary" type="submit" id="submit" value="Сохранить"/>
            </p>
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(function () {


    })
</script>